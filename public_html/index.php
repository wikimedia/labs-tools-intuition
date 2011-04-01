<?php
/**
 *
 * Created on March 24, 2011
 *
 * Copyright 2011 Krinkle <krinklemail@gmail.com>
 *
 * This file is licensed under
 * the Creative Commons Attribution 3.0 Unported License
 * <http://creativecommons.org/licenses/by/3.0/>
 *
 * @package TsIntuition
 */

/**
 * This file outputs the interface to set settings for TsIntuition
 * @TODO: Make this nicer, for now just a quick hack to make
 * setting cookies work.
 */


/**
 * Localization
 * -------------------------------------------------
 */
require_once( '/home/krinkle/TsIntuition/ToolStart.php' ); // to be moved to p_i18n
$opts = array(
	'domain' => 'tsintuition',
	'suppressnotices' => false, // DEBUG
);
$I18N = new TsIntuition( $opts );

// Load all domains so can get some statistics later on and
// make sure "getAvailableLangs" is compelte
foreach ( $I18N->getAllRegisteredDomains() as $domain => $file ) {
	$I18N->loadTextdomain( $domain );
}

/**
 * Configuration
 * -------------------------------------------------
 */
require_once( '/home/krinkle/common/InitTool.php' );

$svninfo = kfGetSvnInfo( '/home/krinkle/TsIntuition/' ); // parses .svn/entries
$toolConfig = array(
	'displayTitle'	=> _( 'fullname' ),
	'krinklePrefix'	=> false,
	'simplePath'	=> '/TsIntuition/',
	'revisionId'	=> "0.1.0 (<a target=\"blank\" href=\"{$svninfo['directory-cr-rev']}\">r{$svninfo['directory-rev']}</a>)",
	'revisionDate'	=> $I18N->dateFormatted( $svninfo['directory-up-date'] ),
	'styles'		=> array( 'main.css' ),
);

$Tool = BaseTool::newFromArray( $toolConfig );

$Tool->doHtmlHead();
$Tool->doStartBodyWrapper();


/**
 * Post actions
 * -------------------------------------------------
 */
if ( isset( $_POST['action'] ) ) {

	switch ( $_POST['action'] ) {
		case 'prefset':
			// Set a 30-day, then redirect to index
			$I18N->setCookie( 'userlang', $_POST['fpLang'] );
			$I18N->redirectTo( $Tool->remoteBasePath, 302 );
			break;
	}
}


/**
 * Get actions
 * -------------------------------------------------
 */
if ( isset( $_GET['action'] ) ) {

	switch ( $_GET['action'] ) {
		case 'clearcookies':
			$I18N->wipeCookies();
			$I18N->redirectTo( $Tool->generatePermalink( array( 'msg' => 2 ) ), 302 );
			break;
		case 'renewcookies':
			$I18N->renewCookies();
			$I18N->redirectTo( $Tool->generatePermalink( array( 'msg' => 3 ) ), 302 );
			break;
	}
}

/**
 * Body (Just a quick hack for proof-of-concept)
 * -------------------------------------------------
 */
$Tool->addOut( _g( 'welcome' ), 'h2' );

// Messages ?
if ( isset( $_GET['msg'] ) ) {
	switch ( $_GET['msg'] ) {
		case 2:
			$Tool->addOut(
				_( 'clearcookies-success' ),
				'div',
				array( 'class' => 'msg ns' )
			);
			break;
		case 3:
			$Tool->addOut(
				_( 'renewcookies-success', array( 'variables' => array( '30 ' . _g( 'days' ) ) ) ),
				'div',
				array( 'class' => 'msg ns success' )
			);
			break;
	}
}

// Cookie has already been set, show "current-settings" box
if ( isset( $_COOKIE[ $I18N->getCookieName( 'userlang' ) ] ) ) {

	$lifetime = $I18N->getCookieLifetime();
	$after = '';
	$renew = ' (' . kfTag( _('renew-cookies'), 'a', array( 'href' => $Tool->generatePermalink(array('action' => 'renewcookies')) ) ) .')';
	// 29+ days
	if ( $lifetime > 29*24*3600 ) {
		$class = 'perfect';
		$time = floor( $lifetime/3600/24/7 ) . '+ ' . _g('weeks');

	// 10+ days
	} elseif ( $lifetime > 10*24*3600 ) {
		$class = 'good';
		$time = floor( $lifetime/3600/24 ) . '+ ' . _g('days');

	// 1+ day
	} elseif ( $lifetime > 24*3600 ) {
		$class = 'bad';
		$time = floor( $lifetime/3600/24 ) . '+ ' . _g('days');
		$after = $renew;

	// Less than a day
	} else {
		$class = 'worst';
		$time = '<' . ceil( $lifetime/3600 ) . ' ' . _g('hours');
		$after = $renew;

	}

	$Tool->addOut(
		'<form class="cleanform"><fieldset>'
	.	kfTag( _( 'current-settings' ) . _g( 'colon-separator' ) . ' ', 'legend' )
	.	kfTag( _( 'current-language' ) . _g( 'colon-separator' ) . ' ', 'label' )
	.	kfTag( '', 'input', array( 'value' => $I18N->getLang(), 'readonly' => 'readonly' ) )
	.	' ('
	.	kfTag( _( 'clear-cookies'), 'a', array( 'href' => $Tool->generatePermalink( array( 'action' => 'clearcookies' ) ) ) )
	.	')<br />'
	.	kfTag( _( 'cookie-expiration' ) . _g( 'colon-separator' ), 'label' ) . kfTag( '', 'input', array( 'value' => $time, 'class' => "cookie-health $class", 'readonly' => 'readonly' ) )
	.	$after
	.	'</form>'
	);


}

// XXX: Quick way to build the form
$dropdown = '<select name="fpLang">';
$selected = ' selected="selected"';
foreach ( $I18N->getAvailableLangs() as $langCode => $langName ) {
	$attr = $langCode == $I18N->getLang() ? $selected : '';
	$dropdown .= '<option value="' . $langCode . '"' . $attr . '>' . $langName . '</option>';
}
$dropdown .= '</select>';

$form = '<form action="' . $Tool->remoteBasePath . '" method="post" class="cleanform"><fieldset>
	<legend>' . _( 'settings-legend' ) . '</legend>
	
	<label>' . _html( 'choose-language' ) . _g( 'colon-separator' ) . '</label>
	' . $dropdown . '
	<br />
	
	<input type="hidden" name="action" value="prefset" />
	<label></label>
	<input type="submit" nof value="' . _html( 'form-submit', 'general' ) . '" />
	<br />

</fieldset></form>';

$Tool->addOut( $form );

/**
 * Close up
 * -------------------------------------------------
 */
$Tool->flushMainOutput();
