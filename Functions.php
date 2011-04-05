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
 * This file contains global functions that will be made available
 * through ToolStart.php. These assume the an instance of the TsIntuition Class
 * is available in the global $I18N variable. These four function are shortcodes
 * for the most common usecases. You can disable them by setting the 'globalfunctions'
 * option to false when constructing the TsIntuition Class.
 */

// Return a message
if ( !function_exists( '_' ) ) {
function _( $key, $options = array() ) {
	global $I18N;
	return $I18N->msg( $key, $options );
}
}

// Return a message from the 'general' domain
if ( !function_exists( '_g' ) ) {
function _g( $key, $options = array() ) {
	if ( is_string( $options ) ) {
		$options = array( 'domain' => $options );
	}
	$options = array_merge( $options, array( 'domain' => 'general' ) );
	return _( $key, $options );
}
}

// Return a message escaped as html
if ( !function_exists( '_html' ) ) {
function _html( $key, $options = array() ) {
	if ( is_string( $options ) ) {
		$options = array( 'domain' => $options );
	}
	$options = array_merge( $options, array( 'parse' => 'html' ) );
	return _( $key, $options );
}
}

// Echo a message
if ( !function_exists( '_e' ) ) {
function _e( $key, $options = array() ) {
	echo _( $key, $options );
}
}