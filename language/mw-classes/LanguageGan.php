<?php

require_once( dirname( __FILE__ ) . '/LanguageZh.php' );

/**
 * class that handles both Traditional and Simplified Chinese
 * right now it only distinguish gan_hans, gan_hant.
 *
 * @ingroup Language
 */
class LanguageGan extends LanguageZh {

	function __construct() {

		parent::__construct();

		$variants = array( 'gan', 'gan-hans', 'gan-hant' );
		$variantfallbacks = array(
			'gan'      => array( 'gan-hans', 'gan-hant' ),
			'gan-hans' => array( 'gan' ),
			'gan-hant' => array( 'gan' ),
		);
		$ml = array(
			'gan'      => 'disable',
		);
	}

	/**
	 * this should give much better diff info
	 *
	 * @param $text string
	 * @return string
	 */
	function segmentForDiff( $text ) {
		return preg_replace(
			"/([\\xc0-\\xff][\\x80-\\xbf]*)/e",
			"' ' .\"$1\"", $text );
	}

	/**
	 * @param $text string
	 * @return string
	 */
	function unsegmentForDiff( $text ) {
		return preg_replace(
			"/ ([\\xc0-\\xff][\\x80-\\xbf]*)/e",
			"\"$1\"", $text );
	}
}
