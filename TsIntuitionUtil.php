<?php
/**
 *
 * Created on March 25, 2011
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
	 * Pass one or more arguments which will be checked untill one fails
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
	public function return_dump( $var, $html = true) {
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

}
