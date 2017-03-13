<?php

require_once( dirname( __FILE__ ) . '/LanguageZh_hans.php' );

/**
 * class that handles both Traditional and Simplified Chinese
 * right now it only distinguish zh_hans, zh_hant, zh_cn, zh_tw, zh_sg and zh_hk.
 *
 * @ingroup Language
 */
class LanguageZh extends LanguageZh_hans {

	function __construct() {

		parent::__construct();

		$variants = array( 'zh', 'zh-hans', 'zh-hant', 'zh-cn', 'zh-hk', 'zh-mo', 'zh-my', 'zh-sg', 'zh-tw' );

		$variantfallbacks = array(
			'zh'      => array( 'zh-hans', 'zh-hant', 'zh-cn', 'zh-tw', 'zh-hk', 'zh-sg', 'zh-mo', 'zh-my' ),
			'zh-hans' => array( 'zh-cn', 'zh-sg', 'zh-my' ),
			'zh-hant' => array( 'zh-tw', 'zh-hk', 'zh-mo' ),
			'zh-cn'   => array( 'zh-hans', 'zh-sg', 'zh-my' ),
			'zh-sg'   => array( 'zh-hans', 'zh-cn', 'zh-my' ),
			'zh-my'   => array( 'zh-hans', 'zh-sg', 'zh-cn' ),
			'zh-tw'   => array( 'zh-hant', 'zh-hk', 'zh-mo' ),
			'zh-hk'   => array( 'zh-hant', 'zh-mo', 'zh-tw' ),
			'zh-mo'   => array( 'zh-hant', 'zh-hk', 'zh-tw' ),
		);
		$ml = array(
			'zh'      => 'disable',
			'zh-hans' => 'unidirectional',
			'zh-hant' => 'unidirectional',
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

