<?php
/**
 *
 * Created on March 23, 2011
 *
 * Copyright 2011 Krinkle <krinklemail@gmail.com>
 *
 * This file is licensed under
 * the Creative Commons Attribution 3.0 Unported License
 * <http://creativecommons.org/licenses/by/3.0/>
 *
 * @package TsIntuition
 */

// Protect against invalid entry
if( !defined( 'TS_INTUITION' ) ) {
	echo "This file is part of TsIntuition and is not a valid entry point\n";
	exit;
}

/**
 * This file contains the main class which the individual tools will
 * creating an instance of to use and configure their i18n.
 */
class TsIntuition {

	/* Variables
	 * ------------------------------------------------- */

	private $localBaseDir = '/home/krinkle/TsIntuition'; // to be moved to p_i18n
	private $iniFilePath = '/toolserver-defines.txt';

	private $suppresserrors = false;
	private $suppressnotices = true;
	private $stayalive = false;
	private $constructLang = false;
	private $currentTextdomain = 'general';
	private $useRequestParam = true;

	private $currentLanguage = 'en';

	// Not loaded/needed by default.
	// This variable is used as cache for the ini file once loaded through loadIni()
	private $iniCache = null;

	// Changing this will invalidate all cookies
	private $cookieNames = array( 'userlang' => 'TsIntuition_userlang', 'track-expire' => 'TsIntuition_expiry' );

	// Changing this will break existing permalinks
	private $paramNames = array( 'userlang' => 'userlang' );

	// Here everything will be stored as arrays in arrays
	// Such as: $messageBlob['textdomain']['messagename']['langcode'] = 'Message string';
	private $messageBlob = array();

	// $loadedTextdomains[0] = 'general';
	private $loadedTextdomains = array();

	// Fallbacks are stored as an array of language codes
	// with their fallback as value
	// Such as Low German falling back to German: langFallbacks['nds'] = 'de';
	private $langFallbacks = null;

	// Language names are stored as an array of language codes
	// with their native name as value
	// Such as as for Spanish: langNames['es'] = 'Español';
	private $langNames = null;

	// This array keeps track of which languages are available in atleast one textdomain
	// $languages['en'] = true;
	private $availableLanguages = array();

	// These variable names will be extracted from the message files
	private $includeVariables = array( 'messages' );

	/* Init
	 * ------------------------------------------------- */

	/**
	 * Initialize TsIntuition
	 *
	 * Pass a string (domain) or array (options)
	 *
	 * Options:
	 * - suppresserrors
	 * - suppressnotices
	 * - stayalive
	 * - globalfunctions
	 * - lang
	 * - domain
	 * - param
	 */
	function __construct( $options = array() ) {

		if ( is_string( $options) ) {
			$options = array( 'domain' => $options );
		}

		// Allow a tool to suppress errors, which will prevent TsIntuition from showing fatal errors
		if ( isset( $options['suppresserrors'] ) && $options['suppresserrors'] == true ) {
			$this->suppresserrors = true;
			$this->suppressnotices = true;
		}

		// Allow a tool to suppress errors, which will prevent TsIntuition from showing notices
		if ( isset( $options['suppressnotices'] ) && $options['suppressnotices'] == false ) {
			$this->suppressnotices = false;
		}

		// Allow a tool to prevent TsIntuition for exiting/dieing on fatal errors
		if ( isset( $options['stayalive'] ) && $options['stayalive'] == true ) {
			$this->stayalive = true;
		}

		// Allow a tool to disable the loading of global functions in case they have a _() and/or _e() already
		if ( !isset( $options['globalfunctions'] ) || $options['globalfunctions'] == true ) {
			require_once( $this->localBaseDir . '/Functions.php' );
		}

		// If the tool doesn't want to use the cookie and parameter or would like to test something
		// The user language can be overridden here. Note you can also override it for individual
		// messages by passing the language code as third argument to msg().
		if ( isset( $options['lang'] ) ) {
			$this->constructLang = $options['lang'];
		}

		// The textdomain of your tool can be set here.
		// Otherwise defaults to 'general'. See also documentation of msg()
		// First character is case-insensitive
		if ( isset( $options['domain'] ) ) {
			$this->setDomain( trim( lcfirst( $options['domain'] ) ) );
		}

		// TsIntuition will choose the language based on a cookie. However it
		// can be manually overriden for permalinks through a request parameter.
		// By default this is 'userlang'. If you need this parameter for something else
		// you can disable this system here. To avoid inconsistencies between tools
		// a custom parameter name will not be supported. It's either on or off.
		if ( isset( $options['param'] ) ) {
			$this->setUseRequestParam( false );
		}

		// Load the initial text domain
		$this->loadTextdomain( $this->getDomain() );

		// Load fallbacks
		$this->loadFallbacks();

		// Load names
		$this->loadNames();

		// Initialize language choise
		$this->initLangSelect();

	}


	/* Get/Set variables
	 * ------------------------------------------------- */

	public function getLang(){
		return $this->currentLanguage;
	}

	/**
	 * Set the current language which will be used when requesting messages etc.
	 * @return true
	 */
	public function setLang( $lang ) {
		$this->currentLanguage = $lang;
		return true;
	}

	/**
	 * Get an array of common locale values for setlocale() for
	 * the current language.
	 *
	 * @param $lang string (optional) Pass a language code. Defaults to current language.
	 * @return array
	 */
	public function getLocale( $lang = null, $utf8 = true ) {
		$suffixes = $utf8 ? array( '.UTF-8', '.UTF-8', '.utf8' ) : array( '' );
		$normal = isset( $lang ) ? $lang : $this->getLang();
		$normalUC = strtoupper( $normal );

		// Get 'foo' from 'foo-bar'
		$parts = explode( '-', $normal );
		$short = $parts[0];
		$shortUC = strtoupper( $short );

		$versions = array(
			$normal,				// foo-br	or en
			$normalUC,				// FOO-BR	or EN
			$short.'_'.$shortUC,	// foo_FOO	or en_EN
			$short,					// foo		or en
			$shortUC,				// FOO		or EN
		);
		$return = array();
		foreach ( $versions as $version ) {
			foreach( $suffixes as $suffix ) {
				$return[] = $version.$suffix;
			}
		}
		return array_values( array_unique( $return ) );
	}

	public function getDomain(){
		return $this->currentTextdomain;
	}

	/**
	 * Set the current textdomain which will be used when requesting messages etc.
	 * @return true
	 */
	public function setDomain( $domain ) {
		$this->currentTextdomain = $domain;
		return true;
	}

	/**
	 * Cookie names may change over time, don't depend on them.
	 * Each cookie-name has an alias (eg. 'userlang' instead of 'TsIntuition-pref_userlang')
	 * Use getCookieName() if you only need a single value.
	 *
	 * @return array An array of aliases as keys and actual cookienames as values
	 */
	public function getCookieNames(){
		return $this->cookieNames;
	}

	public function getCookieName( $name ) {
		return $this->cookieNames[$name];
	}

	/**
	 * Parameter names may change over time, don't depend on them.
	 * Each paramter-name has an alias (so far the same as the actual value)
	 * Use getParamName() if you only need a single value.
	 *
	 * @return array An array of aliases as keys and actual parameter names as values.
	 */
	public function getParamNames(){
		return $this->paramNames;
	}

	public function getParamName( $name ) {
		return $this->paramNames[$name];
	}

	/**
	 * Whether or not the userlang-parameter is used to determine the
	 * userlanguage during initialization.
	 *
	 * @return boolean
	 */
	public function getUseRequestParam(){
		return $this->useRequestParam;
	}

	/**
	 * Overwrite the setting to use or ignore the userlang-parameter.
	 * Note that it's likely the language intitialization/detection has already
	 * been ran. Call refreshLang() if you want it to re-check the cookies,
	 * parameters, overwrites etc.
	 *
	 * @param $bool boolean True if you want it to use the parameter, false otherwise.
	 * @return boolean False if the passed argument wasn't a boolean, true otherwise.
	 */
	public function setUseRequestParam( $bool ) {
		if ( is_bool( $bool ) ) {
			$this->useRequestParam = $bool;
			return true;
		}
		return false;
	}


	/* Message functions
	 * ------------------------------------------------- */

	/**
	 * Get a message from the message blob
	 *
	 * @param $key string Message key to retrieve a message for.
	 * @param $options mixed (optional) A textdomain-name or an array with one or more
	 *  of the following options:
	 *  - domain: overrides the currently selected textdomain, and if needed loads it from disk
	 *  - lang: overrides the currently selected language
	 *  - variables: numerical array to do variable replacements ($1> var[0], $2> var[1], etc.)
	 *  - raw-variables: boolean to determine whether the variables should be escaped as well
	 *  - escape: Optionally the return can be escaped. By default this takes place after variable
	 *            replacement. Set 'raw-variables' to true if you just want the raw message
	 *            to be escaped and have escaped the variables already.
	 *  - * 'plain'
	 *  - * 'html' (<>"& escaped)
	 *  - * 'htmlspecialchars' (alias of 'html')
	 *  - * 'htmlentities' (foreign/UTF-8 chars converted as well)
	 *
	 */
	public function msg( $key = 0, $options = array() ) {

		// Make sure a proper key was passed.
		if ( !TsIntuitionUtil::nonEmptyStr( $key ) ) {
			return $this->bracketMsg( $key );
		}

		$defaultOptions = array(
			'domain' => $this->getDomain(),
			'lang' => $this->getLang(),
			'variables' => array(),
			'raw-variables' => false,
			'escape' => 'plain',
		);

		// If $options was a domain string, convert it now.
		if ( TsIntuitionUtil::nonEmptyStr( $options ) ) {
			$options = array( 'domain' => $options );
		}

		// If $options is still not an array, ignore it and use default
		// Otherwise merge the options with the defaults.
		if ( !is_array( $options ) ) {
			$options = $defaultOptions;
		} else {
			$options = array_merge( $defaultOptions, $options );
		}

		// First character of the message-key is case-insensitive.
		$key = trim( lcfirst( $key ) );

		// Load if not already loaded
		$this->loadTextdomain( $options['domain'] );

		// In case the domainname was invalid or inexistant
		if ( !isset( $this->messageBlob[$options['domain']] ) ) {
			return $this->bracketMsg( $key );
		}

		// Use fallback if this message doesn't exist in the current language
		$lang = $this->getLangForTextdomain( $options['lang'], $options['domain'], $key );

		// Just in case, one last check:
		if ( isset( $this->messageBlob[$options['domain']][$lang][$key] ) ) {
			// We're ok, let's grab it
			$msg = $this->messageBlob[$options['domain']][$lang][$key];
		} else {
			// Fall back to a simple [keyname]
			return $this->bracketMsg( $key );
		}

		/* Now that we've got the message, do post-processing. */

		$escapeDone = false;

		// Escape now or do it after variable replacement ?
		if ( $options['raw-variables'] === true ) {
			$msg = TsIntuitionUtil::strEscape( $msg, $options['escape'] );
			$escapeDone = true;
		}

		// Variable replacements
		foreach ( $options['variables'] as $i => $val ) {
			$n = $i + 1;
			$msg = str_replace( "\$$n", $val, $msg );
		}

		// If not already escaped, do it now
		if ( !$escapeDone ) {
			$escapeDone = true;
			$msg = TsIntuitionUtil::strEscape( $msg, $options['escape'] );
		}

		// Finally
		return $msg;

	}

	/**
	 * Don't show [brackets] when suppressing errors.
	 * In that case there could be message files missing and invalid language codes chosen.
	 * Just return a somewhat readable string.
	 * We use square brackets for simplicity sake, using inequality brackets (< >) may cause
	 * conflicts with HTML when used wrong.
	 */
	public function bracketMsg( $key ) {
		if ( $this->suppresserrors ) {
			return ucfirst( $key ); // Keyname
		}
		return "[$key]"; // [keyname]
	}

	/**
	 * Adds or overwrites a message in the blob.
	 * This function is public so tools can use it while testing their tools
	 * and don't need a message to exist in TranslateWiki yet, but don't want to see [msgkey] either.
	 * See also addMsgs() for registering multiple messages.
	 *
	 * First two parameters are required. Others (domain, language) default to current environment.
	 */
	public function setMsg( $key, $message, $domain = 0, $lang = 0 ) {

		if ( !TsIntuitionUtil::nonEmptyStr( $domain ) ) {
			$domain = $this->getDomain();
		}
		if ( !TsIntuitionUtil::nonEmptyStr( $lang ) ) {
			$lang = $this->getLang();
		}
		$this->messageBlob[$domain][$lang][$key] = $message;
	}

	/**
	 * Set multiple messages in the blob.
	 *
	 * First parameter is required. Others (domain, language) default to current environment.
	 */
	public function setMsgs( $messagesByKeys, $domain = 0, $lang = 0 ) {
		foreach ( $messagesByKeys as $key => $message ) {
			$this->setMsg( $key, $message, $domain, $lang);
		}
	}


	/* Lang functions
	 * ------------------------------------------------- */

	/**
	 * Calculate which language can be used for the message
	 * in the given domain. If possible, returns the $lang
	 * passed right away, otherwise it looks for a suitable falback
	 *
	 * @param $lang string Preferred language
	 * @param $domain string Domain to search within (the existance of this domain should be checked
	 *  before calling this function).
	 * @param $key string Key of the wanted message
	 * @return string Language code
	 */
	private function getLangForTextdomain( $lang, $domain, $key ) {
		$msgDomain = $this->messageBlob[$domain];

		// If it's available, just use it
		if ( isset( $msgDomain[$lang] ) && isset( $msgDomain[$lang][$key] ) ) {
			return $lang;
		}

		// Otherwise use the fallback
		$lang = $this->getLangFallback( $lang );
		if ( isset( $msgDomain[$lang] ) && isset( $msgDomain[$lang][$key] ) ) {
			return $lang;
		}

		// Otherwise use the fallback's fallback
		$lang = $this->getLangFallback( $lang );
		if ( isset( $msgDomain[$lang] ) && isset( $msgDomain[$lang][$key] ) ) {
			return $lang;
		}

		// Otherwise default to English
		return 'en';
	}

	/**
	 * Return the fallback language for the given language (if available)
	 * returns 'en' otherwise.
	 *
	 * @param $lang string Language code of language to get fallback for.
	 * @return string
	 */
	public function getLangFallback( $lang ) {

		return isset( $this->langFallbacks[$lang] ) ? $this->langFallbacks[$lang] : 'en';
	}

	/**
	 * Return the language name in the native language.
	 * @param $lang string Language code
	 * @return string
	 */
	public function getLangName( $lang ) {

		return isset( $this->langNames[$lang] ) ? $this->langNames[$lang] : '';
	}

	/**
	 * Return all known languages.
	 * @return array
	 */
	public function getLangNames() {

		return is_array( $this->langNames ) ? $this->langNames : array();
	}

	public function getAvailableLangs() {
		$return = array();
		foreach( array_keys( $this->availableLanguages ) as $lang ) {
			$return[$lang] = $this->getLangName( $lang );
		}
		ksort( $return );
		return $return;
	}


	/* Textdomain functions
	 * ------------------------------------------------- */

	public function loadTextdomain( $domain ) {

		// Generally validate input and protect against path traversal
		if ( !TsIntuitionUtil::nonEmptyStr( $domain ) || $domain !== trim( strtolower( $domain ) ) || strcspn( $domain, ":/\\\000" ) !== strlen( $domain ) ) {
			$this->errTrigger( "Invalid textdomain \"$domain\"", __METHOD__, E_NOTICE );
			return false;
		}

		// Already loaded ?
		if ( in_array( $domain, $this->loadedTextdomains ) ) {
			return false;
		}

		$this->loadedTextdomains[] = $domain;

		// File exists ?
		$displayname = ucfirst( strtolower( $domain ) );
		$path = $this->localBaseDir . "/language/messages/$displayname.i18n.php";
		if ( !file_exists( $path ) ) {
			$this->errTrigger( "Textdomain file not found for \"$domain\" at $path. Ignoring", __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$load = $this->loadTextdomainFromFile( $path, $domain );

		return !!$load;

	}

	public function loadTextdomainFromFile( $filePath = '', $domain = '' ) {
		if ( !TsIntuitionUtil::nonEmptyStrs( $filePath, $domain ) ) {
			$this->errTrigger( 'One or more arguments are missing', __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		include( $filePath );

		// Parse it
		$compact = compact( $this->includeVariables );
		$this->parseTextdomain( $compact, $domain, $filePath );
		return true;
	}

	private function parseTextdomain( $data, $domain, $filePath ) {
		if ( !is_array( $data ) ) {
			$this->errTrigger( 'Invalid $data passed to ' . __FUNCTION__, __METHOD__, E_ERROR, __FILE__, __LINE__ );
		}
		// Were there any message defined in the textdomain file ?
		if ( !isset( $data['messages'] ) || !is_array( $data['messages'] ) ) {
			$this->errTrigger( 'No $messages array found', __METHOD__ , E_ERROR, $filePath );
		}
		unset( $data['messages']['qqq'] ); // Workaround
		// Load the message into the blob
		// overwrites the existing array of messages if it already existed
		// If you need to add or overwrite some messages temporarily, use Itui::setMsg() or Itui::setMsgs() instead
		foreach ( $data['messages'] as $langcode => $messages ) {
			$this->availableLanguages[$langcode] = true;
			$this->messageBlob[$domain][$langcode] = (array)$messages;
		}


		return true;
	}


	/* Cookie functions
	 * ------------------------------------------------- */

	/**
	 * Set a cookie.
	 *
	 * @param $name string Canonical name of the cookie.
	 * @param $val string Value to be set.
	 * @param $lifetime int Lifetime in seconds from now.
	 *
	 * @return boolean
	 */
	public function setCookie( $name, $val, $lifetime = 2592000 /* 30 days */, $track = true ) {
			// Validate cookie name
			$name = $this->getCookieName( $name );
			if ( !$name ) {
				return false;
			}
			$val = strval( $val );
			$lifetime = intval( $lifetime );
			$expire = time() + $lifetime;

			// Set a 30-day domain-wide cookie
			setcookie( $name, $val, $expire, '/', '.toolserver.org' );

			// In order to keep track of the expiration date, we set another cookie
			if ( $track ) {
				$this->setExpiryTrackerCookie( $lifetime );
			}

			return true;
	}

	/**
	 * Browsers don't send the expiration date of cookies with the request
	 * In order to keep track of the expiration date, we set an additional cookie.
	 */
	private function setExpiryTrackerCookie( $lifetime ) {
		$expire = time() + intval( $lifetime );
		setcookie( $this->getCookieName( 'track-expire' ), $expire, $expire, '/', '.toolserver.org' );
		return true;
	}

	/**
	 * Renew all cookies
	 */
	public function renewCookies( $lifetime = 2592000 /* 30 days */ ) {
		foreach( $this->getCookieNames() as $name ) {
			$this->setCookie( $name, $_COOKIE[$name], $lifetime, false );
		}
		$this->setExpiryTrackerCookie( $lifetime );
		return true;
	}

	/**
	 * Delete all TsIntuition cookies.
	 * It's recommended to redirectTo() directly after this.
	 * @return boolean
	 */
	public function wipeCookies(){
		$week = 7*24*3600;
		foreach( $this->getCookieNames() as $name ) {
			setcookie( $name, '', time()-$week, '/', '.toolserver.org' );
			unset( $_COOKIE[$name] );
		}
		return true;
	}

	/**
	 * Get expiration timestamp.
	 * @return integer Unix timestamp of expiration date or 0 if not available.
	 */
	public function getCookieExpiration(){
		$name = $this->getCookieName( 'track-expire' );
		$expire = isset( $_COOKIE[$name] ) ? intval( $_COOKIE[$name] ) : 0;
		return $expire;
	}

	/**
	 * Get expected lifetime left in seconds.
	 * Returns 0 if expired or unavailable. 
	 */
	public function getCookieLifetime(){
		$expire = $this->getCookieExpiration();
		$lifetime = $expire - time();
		// If already expired (-xxx), return 0
		return $lifetime < 0 ? 0 : $lifetime;
	}


	/* Load functions
	 * ------------------------------------------------- */


	/**
	 * Load fallbacks
	 *
	 * @private
	 *
	 * @return true
	 */
	private function loadFallbacks(){

		// Don't load twice
		if ( is_array( $this->langFallbacks ) ) {
			return false;
		}

		$path = $this->localBaseDir . '/language/Fallbacks.php';
		if ( !file_exists( $path ) ) {
			$this->errTrigger( 'Fallbacks.php is missing', __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$fallbacks = array();
		include( $path );
		$this->langFallbacks = $fallbacks;

		return true;
	}

	/**
	 * Load names
	 *
	 * @private
	 *
	 * @return true
	 */
	private function loadNames(){

		// Don't load twice
		if ( is_array( $this->langNames ) ) {
			return false;
		}

		$path = $this->localBaseDir . '/language/Names.php';
		if ( !file_exists( $path ) ) {
			$this->errTrigger( 'Names.php is missing', __METHOD__, E_NOTICE, __FILE__, __LINE__ );
			return false;
		}

		// Load it
		$wgLanguageNames = array();
		include( $path );
		$this->langNames = $wgLanguageNames;

		return true;
	}

	/**
	 * Load ini
	 *
	 * @private
	 *
	 * @return true
	 */
	public function loadIni(){

		// Don't load twice
		if ( !is_null( $this->iniCache ) ) {
			return false;
		}

		// Load it
		$this->iniCache = parse_ini_file( $this->localBaseDir . $this->iniFilePath, true, INI_SCANNER_RAW );
		return true;
	}
	


	/* Other functions
	 * ------------------------------------------------- */

	/**
	 * Redirect or refrsh to url.
	 *
	 * @return false on failure.
	 */
	public function redirectTo( $url = 0, $code = 302 ) {
		if ( !is_string( $url ) || !is_int( $code ) ) {
			return false;
		}
		header( 'Content-Type: text/html; charset=utf-8' );
		header( "Location: $url", true, $code );
		exit;
	}

	/**
	 * Get a localized date. Pass a format, time or both.
	 * Defaults to the current timestamp in the language's default date format.
	 *
	 * @param $format string Date format compatible with strftime()
	 * @param $timestamp mixed Timestamp (seconds since unix epoch) or string (ie. "2011-12-31")
	 * @param $lang string Language code. Defaults to current langauge (through getLocale() )
	 *
	 * @return string
	 */
	public function dateFormatted( $first = null, $second = null, $lang = null ) {

		// One argument or less
		if ( is_null( $second ) ) {

			// No arguments
			if ( is_null( $first ) ) {
				$format = $this->msg( 'dateformat', 'general' );
				$timestamp = time();

			// Timestamp only
			} elseif ( is_int( $first ) ) {
				$format = $this->msg( 'dateformat', 'general' );
				$timestamp = $first;

			// Date string only
			} elseif ( strtotime( $first ) ) {
				$format = $this->msg( 'dateformat', 'general' );
				$timestamp = strtotime( $first );

			// Format only
			} else {
				$format = $first;
				$timestamp = time();
			}

		// Two arguments
		} else {
			$format = $first;
			$timestamp = is_int( $second ) ? $second : strtotime( $second );
		}

		// Save current setlocale
		$saved = setlocale( LC_ALL, 0 );

		// Overwrite for current language
		setlocale( LC_ALL, $this->getLocale( $lang ) );
		$return = strftime( $format, $timestamp );

		// Reset back to what it was
		setlocale( LC_ALL, $saved );

		return $return;

	}

	/**
	 * Check language choise tree in the following order:
	 * - First: Construct override
	 * - Second: Parameter override
	 * - Third: Saved cookie
	 * - Fourth: Nothing (default stays)
	 *
	 * @private
	 *
	 * @return true
	 */
	private function initLangSelect() {
		$set = false;
		if ( $this->constructLang ) {
			$set = $this->setLang( $this->constructLang );
		}
		if ( !$set && $this->getUseRequestParam() === true && isset( $_GET[ $this->paramNames['userlang'] ] ) ) {
			$set = $this->setLang( $_GET[ $this->paramNames['userlang'] ] );
		}
		if ( !$set && isset( $_COOKIE[ $this->cookieNames['userlang'] ] ) ) {
			$set = $this->setLang( $_COOKIE[ $this->cookieNames['userlang'] ] );
		}
		return $set;
	}

	/**
	 * Redo language init
	 * Use this when you've messaged with the cookies and don't want to refresh
	 * for it to be applied
	 * @return true
	 */
	public function refreshLang(){
		$this->initLangSelect();
		return true;
	}

	private function errMsg( $msg, $context ) {
		return htmlentities( "[$context] $msg", ENT_QUOTES, 'UTF-8' );
	}

	// Custom version of trigger_error() that can be passed a custom filename and line number
	private function errTrigger( $msg, $context, $level = E_WARNING, $file = '', $line = '' ) {
		$die = false;
		$error = false;
		$notice = false;
		switch ( $level ) {
			// Fatal
			case E_ERROR:
			case E_CORE_ERROR:
			case E_COMPILE_ERROR:
			case E_USER_ERROR:
			case E_RECOVERABLE_ERROR:
				$code = 'Fatal error: ';
				$error = true;
				$die = true;
				break;

			// Warning
			case E_WARNING:
			case E_CORE_WARNING:
			case E_COMPILE_WARNING:
			case E_USER_WARNING:
				$code = 'Warning: ';
				$error = true;
				break;

			// Notice
			case E_NOTICE:
				$code = 'Notice: ';
				$notice = true;
				break;

			// Unknown
			default:
				$code = 'Unknown error: ';
		}

		if ( $error && $this->suppresserrors ) {
			return;
		}
		if ( $notice && $this->suppressnotices ) {
			return;
		}

		echo "\n<strong>$code</strong>" . $this->errMsg( $msg, $context ) . ( $file != '' ? " in <strong>$file</strong>" : '' ) . ( $line != '' ? " on line <strong>$line</strong>" : '' ) . '.' ;

		if ( $die && !$this->stayalive ) {
			die;
		} else {
			echo "<br />\n";
		}
	}
}
