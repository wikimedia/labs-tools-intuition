<?php
/**
 *
 * Created on March 25, 2011
 *
 * Copyright 2011 Krinkle <krinklemail@gmail.com>
 *
 * This file is licensed under
 * the Creative Commons Attribution 3.0 Unported License
 * creativecommons.org/licenses/by/3.0/
 *
 * @package TsIntuition
 */

// Protect against invalid entry
if( !defined( 'TS_INTUITION' ) ) {
	echo "This file is part of TsIntuition and is not a valid entry point\n";
	exit;
}

/**
 * This class contains the static utility functions for the Itui class.
 */
class TsIntuitionUtil {

	/**
	 * Escapes a string with one of the known method and returns it
	 *
	 * @param $str string The string to be escaped
	 * @param $escape string The name of the escape routine to be used
	 *  if this is an unknown method name it will be ignored and 'plain'
	 *  will be used instead.
	 * @return string The escaped string.
	 */
	public static function strEscape( $str, $escape = 'plain' ) {
		switch ( $escape ) {
			case 'html' :
			case 'htmlspecialchars' :
				$str = htmlspecialchars( $str );
				break;
			case 'htmlentities':
				$str = htmlentities( $str, ENT_QUOTES, 'UTF-8' );
				break;
			// 'plain' or anything else: Do nothing
		}
		return $str;
	}

	public static function nonEmptyStr( $var ) {
		if ( is_string( $var ) && $var !== '' ) {
			return true;
		}
		return false;
	}

	/**
	 * Pass one or more arguments which will be checked until one fails
	 * If atleast one argument is not a non-empty string, or if no arguments / NULL passed
	 * it will return false, otherwise true;
	 */
	public static function nonEmptyStrs( /* $var .. */ ) {
		$args = func_get_args();
		if ( !isset( $args[0] ) ) {
			return false;
		}
		foreach ( $args as $arg) {
			if ( !TsIntuitionUtil::nonEmptyStr( $arg ) ) {
				return false;
			}
		}
		// If we're still here, all are good
		return true;
	}


	/**
	 * A return version of var_dump().
	 * Optionally html-escaped and wrapped in a <pre>-tag.
	 *
	 * @return string
	 */
	public static function return_dump( $var, $html = true) {
		$dump = NULL;
		ob_start();
		var_dump( $var );
		$dump = ob_get_contents();
		ob_end_clean();
		if ( $html ) {
			return '<pre>' . htmlspecialchars( $dump ) . '</pre>';
		}
		return $dump;
	}


	/* Primitive html building */
	/* Based on kfTag from the BaseTool class */
	public static function tag( $str, $wrapTag = 0, $attributes = array() ) {
		$selfclose = array( 'link', 'input', 'br', 'img' );

		if ( is_string( $str ) ) {
			if ( is_string( $wrapTag ) ) {
				$wrapTag = trim( strtolower( $wrapTag ) );
				$attrString = '';
				if ( is_array ( $attributes ) ) {
					foreach ( $attributes as $attrKey => $attrVal ) {
						$attrKey = htmlspecialchars( trim( strtolower( $attrKey ) ), ENT_QUOTES);
						$attrVal = htmlspecialchars( trim( $attrVal ), ENT_QUOTES);
						$attrString .= " $attrKey=\"$attrVal\"";
					}
				}
				$return = "<$wrapTag$attrString";
				if ( in_array( $wrapTag, $selfclose ) ) {
					$return .= '/>';
				} else {
					$return .= ">" . htmlspecialchars( $str ) ."</$wrapTag>";
				}
			} else {
				$return = $str;
			}
			return $return;
		} else {
			return '';
		}
	}

	/**
	 * Return a list of acceptable languages from an Accept-Language header
	 * @param $rawList String List of language tags, formatted like an
	 * HTTP Accept-Language header (optional; defaults to $_SERVER['HTTP_ACCEPT_LANGUAGE'])
	 * @return array keyed by language codes with q-values as values.
	 */
	public static function getAcceptableLanguages( $rawList = false ) {
		if ( $rawList === false ) {
			$rawList = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];
		}

		$acceptableLanguages = array();

		// Accept-Language: 1#( language-range [ ";" "q" "=" qvalue ] )
		// Example: "nl-be,nl;q=0.7,en-us,en;q=0.3"
		// The list of elements is separated by comma and optional LWS
		$languages = explode( ',', $rawList );
		foreach ( $languages as $language ) {
			$language = trim( $language ); // Remove optional LWS

			// Extract the language-range and, if present, the q-value
			if ( !preg_match( '/^([A-Za-z]{1,8}(?:-[A-Za-z]{1,8})*|\*)(?:\s*;\s*q\s*=\s*([01](?:\.[0-9]{0,3})?))?$/', $language, $m )
			) {
				continue;
			}

			/**
			 * $m is now an array with either two or three values:
			 * - array( 'lang-code', 'lang-code' )
			 * - array( 'lang-code;q=val', 'lang-code', 'val' )
			 */

			// We are not interested in the first value.
			array_shift( $m );

			// Default to 1 as q-val
			if ( !isset( $m[1] ) ) {
				$m[1] = '1';
			}

			list( $langCode, $qVal ) = $m;

			$acceptableLanguages[$langCode] = $qVal;
		}

		// Sort by q value in descending order
		arsort( $acceptableLanguages, SORT_NUMERIC );

		return $acceptableLanguages;
	}

	const EXT_LINK_URL_CLASS = '[^][<>"\\x00-\\x20\\x7F\p{Zs}]'; // Copied from Parser class

	/**
	 * Given a text already html-escaped which contains urls in wiki format,
	 * convert it to html
	 */
	public static function parseExternalLinks($text) {
		static $urlProtocols = false;
		if ( !$urlProtocols ) {
			if ( function_exists( 'wfUrlProtocols' ) ) { // Allow custom protocols
				$urlProtocols = wfUrlProtocols();
			} else {
				$urlProtocols = 'https?:\/\/|ftp:\/\/';
			}
		}
		
		
		$extLinkBracketedRegex = '/(?:(<[^>]*)|' .
			'\[(((?i)' . $urlProtocols . ')' . self::EXT_LINK_URL_CLASS . '+)\p{Zs}*([^\]\\x00-\\x08\\x0a-\\x1F]*?)\]|'
			. '(((?i)' . $urlProtocols . ')' . self::EXT_LINK_URL_CLASS . '+))/Su';

		return preg_replace_callback( $extLinkBracketedRegex, 'self::parseExternalLinkArray', $text );
	}
	
	/**
	 * Changes the matches of parseExternalLinks into html
	 */
	private static function parseExternalLinkArray($bits) {
		static $counter = 0;

		if ( $bits[1] != '' )
			return $bits[1];

		if ( isset( $bits[4] ) && $bits[4] != '' ) {
			return '<a href="' . $bits[2] . '">' . $bits[4] . '</a>';
		} elseif ( isset( $bits[5] ) ) {
			return '<a href="' . $bits[5] . '">' . $bits[5] . '</a>';
		} else {
			return '<a href="' . $bits[2] . '">[' . ++$counter . ']</a>';
		}
	}

	private static $articlePath;

	/**
	 * Given a text already html-escaped which contains wiki links, convert them to html
	 */
	public static function parseWikiLinks($text, $articlePath) {
		self::$articlePath = $articlePath;

		return preg_replace_callback( '/\[\[:?([^]|]+)(?:\|([^]]*))?\]\]/', 'self::parseWikiLinkArray', $text );
	}

	/**
	 * Changes the matches of parseWikiLinks into html
	 */
	private static function parseWikiLinkArray($bits) {

		if ( !isset( $bits[2] ) || $bits[2] == '' ) {
			$bits[2] = strtr( $bits[1], '_', ' ' );
		}

		$article = html_entity_decode( $bits[1], ENT_QUOTES, 'UTF-8' );

		return '<a href="' . htmlspecialchars( self::prettyWikiUrl( self::$articlePath, $article ), ENT_COMPAT, 'UTF-8' ) . '">' . $bits[2] . "</a>";
	}

	/**
	 * Builds a pretty url link to a wiki article.
	 * It assumes the wiki is not hosted on IIS7.
	 * 
	 * Most of this logic is taken from wfUrlencode()
	 */
	public static function prettyEncodedWikiUrl($articlePath, $article) {
		$s = strtr( $article, ' ', '_' );
		$s = urlencode( $s );
		$s = str_ireplace(
			array( '%3B', '%40', '%24', '%21', '%2A', '%28', '%29', '%2C', '%2F', '%3A' ),
			array( ';', '@', '$', '!', '*', '(', ')', ',', '/', ':' ),
			$s
		);
		
		$s = str_replace( '$1', $s, $articlePath );
		
		return $s;
	}
}
