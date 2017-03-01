<?php
class IntuitionUtilTest extends PHPUnit_Framework_TestCase {

	public static function provideStrEscape() {
		return [
			[ '€oo', '€oo' ],
			[ 'l&<€', 'l&<€', 'plain' ],
			[ 'l&amp;&lt;€', 'l&<€', 'html' ],
			[ 'l&amp;&lt;&euro;', 'l&<€', 'htmlentities' ],
			[ '', null ],
		];
	}

	/**
	 * @dataProvider provideStrEscape
	 * @covers IntuitionUtil::strEscape
	 */
	public function testStrEscape( $expected, $str, $escape = 'plain' ) {
		$this->assertEquals(
			$expected,
			IntuitionUtil::strEscape( $str, $escape )
		);
	}

	public static function provideNonEmptyStr() {
		return array(
			array( true, 'one' ),
			array( true, ' ' ),
			array( false, '' ),
			array( false, null ),
			array( false, 0 ),
			array( false, 2 ),
			array( true, '0' ),
			array( true, '2' ),
			array( false, array() ),
			array( false, array( 'x' ) ),
		);
	}

	/**
	 * @dataProvider provideNonEmptyStr
	 * @covers IntuitionUtil::nonEmptyStr
	 */
	public function testNonEmptyStr( $bool, $input ) {
		$this->assertSame(
			IntuitionUtil::nonEmptyStr( $input ),
			$bool
		);
	}

	public static function provideNonEmptyStrs() {
		return array(
			array(
				false,
				array( 'x', '', 'y' ),
			),
			array(
				true,
				array( 'x', 'y' ),
			),
			array(
				false,
				array(),
			),
		);
	}

	/**
	 * @dataProvider provideNonEmptyStrs
	 * @covers IntuitionUtil::nonEmptyStrs
	 */
	public function testNonEmptyStrs( $bool, $inputArgs ) {
		$this->assertSame(
			call_user_func_array( 'IntuitionUtil::nonEmptyStrs', $inputArgs ),
			$bool
		);
	}

	public static function provideAcceptLanguages() {
		return array(
			array( '',
				array(),
				'Empty Accept-Language header',
			),
			array( 'en',
				array( 'en' => 1 ),
				'One language',
			),
			array( 'en, ar',
				array( 'en' => 1, 'ar' => 1 ),
				'Two languages listed in appearance order.',
			),
			array( 'zh-cn,zh-tw',
				array( 'zh-cn' => 1, 'zh-tw' => 1 ),
				'Two equally prefered languages, listed in appearance order per rfc3282. Checks c9119',
			),
			array( 'es, en; q=0.5',
				array( 'es' => 1, 'en' => 0.5 ),
				'Spanish as first language and English and second',
			),
			array( 'en; q=0.5, es',
				array( 'es' => 1, 'en' => 0.5 ),
				'Less prefered language first',
			),
			array( 'fr, en; q=0.5, es',
				array( 'fr' => 1, 'es' => 1, 'en' => 0.5 ),
				'Three languages',
			),
			array( 'en; q=0.5, es',
				array( 'es' => 1, 'en' => 0.5 ),
				'Two languages',
			),
			array( 'en, zh;q=0',
				array( 'en' => 1 ),
				'Chinese to me',
			),
			array( 'es; q=1, pt;q=0.7, it; q=0.6, de; q=0.1, ru;q=0',
				array( 'es' => 1, 'pt' => 0.7, 'it' => 0.6, 'de' => 0.1 ),
				'Preference for romance languages',
			),
			array( 'en-gb, en-us; q=1',
				array( 'en-gb' => 1, 'en-us' => 1 ),
				'Two equally prefered English variants',
			),
			array(
				'da, en-gb;q=0.8, en;q=0.7',
				array( 'da' => 1, 'en-gb' => 0.8, 'en' => 0.7 ),
				'Example from http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4',
			)
		);
	}

	/**
	 * @dataProvider provideAcceptLanguages
	 * @covers IntuitionUtil::getAcceptableLanguages
	 */
	public function testGetAcceptableLanguages( $data, $result, $message ) {
		$this->assertEquals(
			IntuitionUtil::getAcceptableLanguages( $data ),
			$result,
			$message
		);
	}

	public static function provideTag() {
		return [
			[
				[ 'l&<' ],
				'l&<',
			],
			[
				[ 'l&<', 'p' ],
				'<p>l&amp;&lt;</p>',
			],
			[
				[ 'l&<', 'p', [ 'class' => 'x' ] ],
				'<p class="x">l&amp;&lt;</p>',
			],
			[
				[ '', 'img', [ 'class' => 'x' ] ],
				'<img class="x"/>',
			],
			[
				[ 'x', 'img', [ 'class' => 'x' ] ],
				'<img class="x"/>',
			],
			[
				[ null ],
				'',
			],
		];
	}

	/**
	 * @dataProvider provideTag
	 * @covers IntuitionUtil::tag
	 */
	public function testTag( $args, $expected, $message = null ) {
		$args += [ null, null, null ];
		$this->assertEquals(
			$expected,
			IntuitionUtil::tag( $args[0], $args[1], $args[2] ),
			$message
		);
	}

	public static function provideParseExternalLinks() {
		return [
			[
				null,
				'',
			],
			// No-ops
			[
				''
			],
			[
				'foo [bar baz]'
			],
			[
				'foo [https:// >]'
			],
			// Link with labels
			[
				'[https://example.org bar]',
				'<a href="https://example.org">bar</a>'
			],
			[
				'foo [http://example.org bar] baz',
				'foo <a href="http://example.org">bar</a> baz'
			],
			[
				'foo [//example.org bar] baz',
				// @todo FIXME: Support protocol-relative urls
			],
			// Free link
			[
				'foo https://example.org baz',
				'foo <a href="https://example.org">https://example.org</a> baz'
			],
			// Link with auto-increment label
			[
				'foo [https://example.org] baz',
				'foo <a href="https://example.org">[1]</a> baz'
			],
			[
				'foo [https://example.org] baz' ,
				'foo <a href="https://example.org">[2]</a> baz'
			],
		];
	}

	/**
	 * @dataProvider provideParseExternalLinks
	 * @covers IntuitionUtil::parseExternalLinks
	 * @covers IntuitionUtil::parseExternalLinkArray
	 */
	public function testparseExternalLinks( $input, $expected = null ) {
		$this->assertEquals(
			$expected ?: $input,
			IntuitionUtil::parseExternalLinks( $input )
		);
	}

	public static function provideParseWikiLinks() {
		return [
			[ '', '', '' ],
			[
				'',
				'foo [[bar]] baz',
				'foo <a href="">bar</a> baz'
			],
			[
				'https://example.org/wiki',
				'foo [[bar]] baz',
				'foo <a href="https://example.org/wiki">bar</a> baz'
			],
			[
				'https://example.org/wiki/$1',
				'foo [[bar]] baz',
				'foo <a href="https://example.org/wiki/bar">bar</a> baz'
			],
		];
	}

	/**
	 * @dataProvider provideParseWikiLinks
	 * @covers IntuitionUtil::parseWikiLinks
	 * @covers IntuitionUtil::parseWikiLinkArray
	 * @covers IntuitionUtil::prettyEncodedWikiUrl
	 */
	public function testParseWikiLinks( $articlePath, $input, $expected ) {
		$this->assertEquals(
			$expected,
			IntuitionUtil::parseWikiLinks( $input, $articlePath )
		);
	}
}
