<?php
/**
 * Global functions optionally loaded with option 'globalfunctions'.
 *
 * @see Intuition::__construct
 *
 * @license MIT
 * @package krinkle/intuition
 */

// Protect against invalid entry
if ( !defined( 'INTUITION' ) ) {
	echo "This file is not a valid entry point\n";
	exit;
}

/**
 * This file contains global functions that can be made available
 * through Krinkle\Intuition::__construct. These assume an instance of the Intuition
 * class was made available through a global $I18N variable.
 *
 * These four function are shortcodes for the most common usecases.
 *
 * To enable these, set the 'globalfunctions' option to true when constructing the
 * Intuition object.
 */

// phpcs:disable MediaWiki.Commenting.FunctionComment.MissingDocumentationPublic

/**
 * Get a message from the global instance.
 *
 * @deprecated since 0.1.3: These conflict with native functions when PHP is compiled
 *  with gettext library (see http://php.net/_).
 * @param string $key
 * @param Array [$options]
 * @return string
 */
if ( !function_exists( '_' ) ) {
	function _( $key, $options = [] ) {
		global $I18N;
		return $I18N->msg( $key, $options );
	}
}

// Return a message from the 'general' domain
if ( !function_exists( '_g' ) ) {
	function _g( $key, $options = [] ) {
		global $I18N;
		if ( is_string( $options ) ) {
			$options = [ 'domain' => $options ];
		}
		$options = array_merge( $options, [ 'domain' => 'general' ] );
		return $I18N->msg( $key, $options );
	}
}

// Return a message escaped as html
if ( !function_exists( '_html' ) ) {
	function _html( $key, $options = [] ) {
		global $I18N;
		if ( is_string( $options ) ) {
			$options = [ 'domain' => $options ];
		}
		$options = array_merge( $options, [ 'escape' => 'html' ] );
		return $I18N->msg( $key, $options );
	}
}

// Echo a message
if ( !function_exists( '_e' ) ) {
	function _e( $key, $options = [] ) {
		global $I18N;
		echo $I18N->msg( $key, $options );
	}
}
