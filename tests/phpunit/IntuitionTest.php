<?php

use Krinkle\Intuition\Intuition;

class IntuitionTest extends Krinkle\Intuition\IntuitionTestCase {

	protected function setUp() {
		parent::setUp();

		$this->sampleMsgs( $this->i18n );
	}

	protected function sampleMsgs( Intuition $i18n ) {
		$i18n->setMsg( 'test-value', 'en value', 'test-domain', 'en' );
		$i18n->setMsg( 'test-value', 'de value', 'test-domain', 'de' );
		$i18n->setMsg( 'test-value', 'nan value', 'test-domain', 'nan' );
		$i18n->setMsg( 'test-value', 'zh-hans value', 'test-domain', 'zh-hans' );
		$i18n->setMsg( 'test-value', 'no value', 'test-domain', 'no' );
		$i18n->setMsg( 'test-value', 'nb value', 'test-domain', 'nb' );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::__construct
	 * @covers Krinkle\Intuition\Intuition::msg
	 */
	public function testConstructor() {
		$i18n = new Intuition();

		$this->assertEquals(
			'Welcome',
			$i18n->msg( 'welcome' ),
			'Defaults to "general"'
		);

		$i18n = new Intuition( 'test-domain' );
		$this->sampleMsgs( $i18n );

		$this->assertEquals(
			'en value',
			$i18n->msg( 'test-value' ),
			'Domain key as string'
		);

		$i18n = new Intuition( [
			'domain' => 'test-domain'
		] );
		$this->sampleMsgs( $i18n );
		$this->assertEquals(
			'en value',
			$i18n->msg( 'test-value' ),
			'Constructor "domain" array option'
		);

		$i18n = new Intuition( [
			'lang' => 'de'
		] );
		$this->sampleMsgs( $i18n );
		$this->assertEquals(
			'de value',
			$i18n->msg( 'test-value', 'test-domain' ),
			'Constructor "lang" option'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::setLang
	 * @covers Krinkle\Intuition\Intuition::getLang
	 */
	public function testSetLang() {
		$this->assertTrue( $this->i18n->setLang( 'nan' ) );
		$this->assertEquals(
			'nan value',
			$this->i18n->msg( 'test-value', 'test-domain' ),
			'Change default lang'
		);
		$this->assertFalse( $this->i18n->setLang( 42 ), 'Bad value' );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::setDomain
	 * @covers Krinkle\Intuition\Intuition::normalizeDomain
	 * @covers Krinkle\Intuition\Intuition::getDomain
	 */
	public function testSetDomain() {
		$this->i18n->setDomain( 'Test-Domain' );
		$this->assertEquals(
			'en value',
			$this->i18n->msg( 'test-value' ),
			'Change default domain'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::dateFormatted
	 * @covers Krinkle\Intuition\Intuition::getLocale
	 */
	public function testDateFormatted() {
		$this->assertEquals(
			'January 15 2001',
			$this->i18n->dateFormatted( '2001-01-15' )
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::msg
	 * @covers Krinkle\Intuition\Intuition::rawMsg
	 * @covers Krinkle\Intuition\Intuition::accessBlob
	 * @covers Krinkle\Intuition\Intuition::getMessagesFunctions
	 */
	public function testMsg() {
		$this->i18n->setMsgs( [
			'welcomeback' => 'Welcome back, $1! Would you like some $2?',
		] );

		$this->assertEquals(
			'Welcome',
			$this->i18n->msg( 'welcome' ),
			'Getting a message'
		);

		$this->assertEquals(
			'[]',
			$this->i18n->msg( null ),
			'Invalid key'
		);

		$this->assertEquals(
			'[randomkey]',
			$this->i18n->msg( 'randomkey' ),
			'Unknown key'
		);

		$this->assertEquals(
			'en value',
			$this->i18n->msg( 'test-value', 'test-domain' ),
			'Domain option (string)'
		);

		$this->assertEquals(
			'en value',
			$this->i18n->msg( 'test-value', [ 'domain' => 'test-domain' ] ),
			'Domain option (array)'
		);

		$this->assertEquals(
			'Version 1.0 (January 15 2001)',
			$this->i18n->msg( 'toolversionstamp', [
				'variables' => [ '1.0', $this->i18n->dateFormatted( '2001-01-15' ) ],
			] ),
			'Variable replacement with dateFormatted'
		);

		$this->assertEquals(
			'Welcome back, John! Would you like some coffee?',
			$this->i18n->msg( 'welcomeback', [ 'variables' => [ 'John', 'coffee' ] ] ),
			'Replacing 2 veriables'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::msg
	 * @covers Krinkle\Intuition\Intuition::getMessagesFunctions
	 * @covers MessagesFunctions
	 */
	public function testMessagesFunctions() {
		$this->i18n->setMsgs( [
			'basket' => 'The basket contains $1 {{PLURAL:$1|apple|apples|applex}}.',
		] );

		$this->assertEquals(
			'The basket contains 1 apple.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '1' ] ] ),
			'Plural (en) with 1'
		);

		$this->assertEquals(
			'The basket contains 7 apples.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '7' ] ] ),
			'Plural (en) with 7'
		);

		$this->assertEquals(
			'The basket contains 0 apples.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '0' ] ] ),
			'Plural (en) with 0 uses plural form'
		);

		$this->assertEquals(
			'The basket contains 0 apple.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '0' ], 'lang' => 'fr' ] ),
			'Plural (fr) with 0 uses singular form'
		);

		$this->assertEquals(
			'The basket contains 21 apple.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '21' ], 'lang' => 'ru' ] ),
			'Plural (ru) with 21 uses singular form'
		);

		$this->assertEquals(
			'The basket contains 22 apples.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '22' ], 'lang' => 'ru' ] ),
			'Plural (ru) with 22 uses paucal@2 form'
		);

		$this->assertEquals(
			'The basket contains 7 applex.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '7' ], 'lang' => 'ru' ] ),
			'Plural (ru) with 7 uses plural@3 form'
		);
	}

	/**
	 * See also UtilTest for more testing of strEscape()
	 *
	 * @covers Krinkle\Intuition\Intuition::msg
	 */
	public function testMsgEscape() {
		$this->i18n->setMsgs( [
			'example' => 'l&<€ and $1',
		] );

		$this->assertEquals(
			'l&<€ and &',
			$this->i18n->msg( 'example', [ 'variables' => [ '&' ] ] ),
			'Default (no escaping)'
		);

		$this->assertEquals(
			'l&amp;&lt;€ and &amp;',
			$this->i18n->msg( 'example', [
				'variables' => [ '&' ],
				'escape' => 'html',
			] ),
			'HTML escaped'
		);

		$this->assertEquals(
			'l&amp;&lt;€ and &',
			$this->i18n->msg( 'example', [
				'variables' => [ '&' ],
				'raw-variables' => true,
				'escape' => 'html',
			] ),
			'HTML escaped (raw variables)'
		);
	}

	/**
	 * See also UtilTest for in-depth testing of parseExternalLinks()
	 *
	 * @covers Krinkle\Intuition\Intuition::msg
	 */
	public function testMsgExternalLinks() {
		$this->i18n->setMsgs( [
			'example' => 'The message with an [https://example.org link].',
		] );

		$this->assertEquals(
			'The message with an [https://example.org link].',
			$this->i18n->msg( 'example' ),
			'Default (no link expansion)'
		);

		$this->assertEquals(
			'The message with an <a href="https://example.org">link</a>.',
			$this->i18n->msg( 'example', [ 'externallinks' => true ] ),
			'Expanded with externallinks=true'
		);
	}

	/**
	 * See also UtilTest for in-depth testing of parseWikiLinks().
	 *
	 * @covers Krinkle\Intuition\Intuition::msg
	 */
	public function testMsgWikiLinks() {
		$this->i18n->setMsgs( [
			'example' => 'The message with an [[Example|link]].',
		] );

		$this->assertEquals(
			'The message with an [[Example|link]].',
			$this->i18n->msg( 'example' ),
			'Default (no link expansion)'
		);

		$this->assertEquals(
			'The message with an <a href="/wiki/Example">link</a>.',
			$this->i18n->msg( 'example', [ 'wikilinks' => '/wiki/$1' ] ),
			'Expanded with wikilinks="/wiki/$1"'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::msg
	 * @covers Krinkle\Intuition\Intuition::rawMsg
	 */
	public function testMsgQqx() {
		$this->assertEquals(
			'(test-register/foo)',
			$this->i18n->msg( 'foo', [ 'domain' => 'test-register', 'lang' => 'qqx' ] ),
			'Qqx message'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::registerDomain
	 * @covers Krinkle\Intuition\Intuition::ensureLoaded
	 * @covers Krinkle\Intuition\Intuition::loadMessageFile
	 * @covers Krinkle\Intuition\Intuition::setMsgs
	 * @covers Krinkle\Intuition\Intuition::setMsg
	 */
	public function testRegisterDomain() {
		$this->i18n->registerDomain( 'test-register', __DIR__ . '/data/i18n' );

		$this->assertEquals(
			'Foo bar',
			$this->i18n->rawMsg( 'test-register', 'en', 'foo' ),
			'Message in custom domain (default lang)'
		);

		$this->assertEquals(
			'Voerbak',
			$this->i18n->rawMsg( 'test-register', 'nl', 'foo' ),
			'Message in custom domain (custom lang)'
		);

		$this->assertEquals(
			'Voerbak',
			$this->i18n->rawMsg( 'test-register', 'nl', 'foo' ),
			// Cover when ensureLoaded() returns early
			'Message in custom domain (custom lang) - cache hit'
		);

		$this->i18n->registerDomain( 'test-CASE-SENSE', __DIR__ . '/data/i18n' );

		$this->assertEquals(
			'Lorem ipsum',
			$this->i18n->rawMsg( 'test-case-sense', 'en', 'lorem' ),
			'Domain names are registered case-insensitive'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::ensureLoaded
	 * @covers Krinkle\Intuition\Intuition::loadMessageFile
	 * @covers Krinkle\Intuition\Intuition::rawMsg
	 */
	public function testMsgFallbackForDomains() {
		// Fallbacks that trigger message file loading
		// (the previous examples use a faux domain defined lazily
		// via setMsgs, 'test-domain' has no directory so there is no
		// interaction with the i18n/ directory when resolving fallbacks
		// which can also cause issues (issue #81)
		$i18n = new Intuition();
		$i18n->registerDomain( 'test', __DIR__ . '/data/i18n' );
		$this->assertEquals(
			'Foo bar',
			$i18n->rawMsg( 'test', 'en', 'foo' ),
			'Message from domain directory (en)'
		);

		$this->assertEquals(
			null,
			$i18n->rawMsg( 'test', 'nl', 'unknown' ),
			'Message from domain directory (lang: nl, unknown message)'
		);

		$this->assertEquals(
			'Foo bar',
			$i18n->rawMsg( 'test', 'en-gb', 'foo' ),
			'Message from domain directory (lang: en-gb, fallback to en)'
		);

		$this->assertEquals(
			'Foo bar',
			$i18n->rawMsg( 'test', 'x-unknown', 'foo' ),
			'Message from domain directory (lang: x-unknown, fallback to en)'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::ensureLoaded
	 */
	public function testMessageCache() {
		// When a class loads a domain/language pair
		// into static messageCache, and another instance
		// leverages that instead of re-reading from disk.
		Intuition::clearCache();
		$int1 = new Intuition( 'general' );
		$int2 = new Intuition( 'general' );

		$this->assertInternalType( 'string', $int1->msg( 'hello' ) );
		$this->assertInternalType( 'string', $int2->msg( 'hello' ) );
	}

	public static function provideEnsureLoaded() {
		return [
			[ '', '', 'empty' ],
			[ '', 'en', 'empty domain' ],
			[ 'example', '', 'empty lang' ],
			[ 'http://', 'en', 'dangerous domain' ],
			[ 'example', '/etc', 'dangerous lang' ],
		];
	}

	/**
	 * @dataProvider provideEnsureLoaded
	 * @covers Krinkle\Intuition\Intuition::ensureLoaded
	 */
	public function testEnsureLoaded( $domain, $lang, $message = null ) {
		Intuition::clearCache();

		$this->assertEquals(
			$this->i18n->rawMsg( $domain, $lang, 'msgkey' ),
			null,
			$message
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::registerDomain
	 */
	public function testRegisterDomainDefault() {
		$i18n = new Intuition( [ 'domain' => 'test-register' ] );
		$i18n->registerDomain( 'test-register', __DIR__ . '/data/i18n' );
		$this->assertEquals(
			'Foo bar',
			$i18n->msg( 'foo' ),
			'Message in custom domain as default domain (default lang)'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::bracketMsg
	 */
	public function testBracketMsg() {
		$this->assertEquals(
			'[example]',
			$this->i18n->bracketMsg( 'example' )
		);
		$this->assertEquals(
			'nope',
			$this->i18n->bracketMsg( 'example', 'nope' )
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::msgExists
	 */
	public function testMsgExist() {
		$this->assertTrue(
			$this->i18n->msgExists( 'welcome' )
		);
		$this->assertFalse(
			$this->i18n->msgExists( 'idontexist' )
		);
	}

	public static function provideRedirectTo() {
		return [
			'valid url' => [ true, 'https://example.org/', true ],
			'null clears redirect' => [ true, null, false ],
			'array is invalid' => [ false, [ 'invalid' ], false ]
		];
	}

	/**
	 * @dataProvider provideRedirectTo
	 * @covers Krinkle\Intuition\Intuition::redirectTo
	 * @covers Krinkle\Intuition\Intuition::isRedirecting
	 */
	public function testRedirectTo( $ret, $url, $isRedirect = null ) {
		$this->assertSame( $ret, $this->i18n->redirectTo( $url ) );
		$this->assertSame( $isRedirect, $this->i18n->isRedirecting() );
	}

	/**
	 * @dataProvider provideRedirectTo
	 * @covers Krinkle\Intuition\Intuition::redirectTo
	 * @covers Krinkle\Intuition\Intuition::isRedirecting
	 */
	public function testRedirectMultiple() {
		// Verify behaviour of calling redirectTo() multiple times
		$this->assertFalse(
			$this->i18n->isRedirecting(),
			'default'
		);

		$this->assertTrue(
			$this->i18n->redirectTo( 'https://example.org/' ),
			'url 1 is set'
		);
		$this->assertTrue(
			$this->i18n->isRedirecting(),
			'url 1 is active'
		);

		$this->assertFalse(
			$this->i18n->redirectTo( [ 'invalid' ], 'value' ),
			'invalid value rejected'
		);
		$this->assertTrue(
			$this->i18n->isRedirecting(),
			'url 1 is (still) active'
		);

		$this->assertTrue(
			$this->i18n->redirectTo( null ),
			'null is accepted'
		);
		$this->assertFalse(
			$this->i18n->isRedirecting(),
			'url was cleared'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::parentheses
	 * @covers Krinkle\Intuition\Intuition::parensWrap
	 */
	public function testParentheses() {
		$this->assertEquals(
			'(Hello)',
			$this->i18n->parentheses( 'hello' )
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::errTrigger
	 * @covers Krinkle\Intuition\Intuition::errMsg
	 */
	public function testOptionShownotice() {
		$i18n = new Intuition( [
			// Show notices
			'suppressnotice' => false,
		] );

		$this->expectException( \PHPUnit\Framework\Error\Notice::class );
		$this->assertEquals(
			'[randomkey]',
			$i18n->msg( 'randomkey' ),
			'Unknown key falls back to bracket-wrapped key'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::msg
	 * @covers Krinkle\Intuition\Intuition::bracketMsg
	 */
	public function testOptionSuppressbrackets() {
		$i18n = new Intuition( [
			'suppressnotice' => true,
			'suppressbrackets' => true,
		] );

		$this->assertEquals(
			'Randomkey',
			$i18n->msg( 'randomkey' ),
			'Unknown key falls back to ucfirst key'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getLangName
	 * @covers Krinkle\Intuition\Intuition::getLangNames
	 */
	public function testGetLangName() {
		$this->assertEquals(
			'English',
			$this->i18n->getLangName()
		);
		$this->assertEquals(
			'français',
			$this->i18n->getLangName( 'fr' )
		);
		$this->assertEquals(
			'English',
			$this->i18n->getLangName( 'en' )
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::listMsgs
	 */
	public function testListMsgs() {
		$this->assertEquals(
			$this->i18n->listMsgs( 'test-domain' ),
			[ 'test-value' ]
		);
		$this->assertEquals(
			$this->i18n->listMsgs( 'unknown' ),
			[]
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getLangFallbacks
	 * @covers Krinkle\Intuition\Intuition::fetchLangFallbacks
	 * @covers Krinkle\Intuition\Intuition::clearCache
	 */
	public function testLangFallback() {
		// Ensure fetchLangFallbacks is tested
		Intuition::clearCache();

		$fallbacks = $this->i18n->getLangFallbacks( 'de-formal' );
		$this->assertEquals(
			$fallbacks,
			[ 'de', 'en' ]
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::rawMsg
	 * @covers Krinkle\Intuition\Intuition::accessBlobWithFallback
	 * @covers Krinkle\Intuition\Intuition::normalizeLang
	 */
	public function testMsgFallback() {
		// Normal fallbacks (chain)

		$this->assertEquals(
			'en value',
			$this->i18n->rawMsg( 'test-domain', 'en', 'test-value' ),
			'Default'
		);

		$this->assertEquals(
			'en value',
			$this->i18n->rawMsg( 'test-domain', 'nl', 'test-value' ),
			'Default for language without fallback'
		);

		$this->assertEquals(
			'en value',
			$this->i18n->rawMsg( 'test-domain', 'bgn', 'test-value' ),
			'Default for language with 1 fallback that is not set'
		);

		$this->assertEquals(
			'de value',
			$this->i18n->rawMsg( 'test-domain', 'de_formal', 'test-value' ),
			'Language with 1 fallback (normalised en-gb)'
		);

		$this->assertEquals(
			'de value',
			$this->i18n->rawMsg( 'test-domain', 'de-formal', 'test-value' ),
			'Language with 1 fallback (de-formal)'
		);

		$this->assertEquals(
			'de value',
			$this->i18n->rawMsg( 'test-domain', 'de_formal', 'test-value' ),
			'Language with 1 fallback (normalised de_formal)'
		);

		$this->assertEquals(
			'nan value',
			$this->i18n->rawMsg( 'test-domain', 'cdo', 'test-value' ),
			'Language with 2 fallbacks (first)'
		);

		$this->assertEquals(
			'zh-hans value',
			$this->i18n->rawMsg( 'test-domain', 'gan', 'test-value' ),
			'Language with 3 fallbacks (third)'
		);

		// Deprecated/dummy fallback (replacement)
		$this->assertEquals(
			'nb value',
			$this->i18n->rawMsg( 'test-domain', 'no', 'test-value' ),
			'Ignore value of deprecated language code'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::isRtl
	 */
	public function testIsRtl() {
		$this->assertTrue( $this->i18n->isRtl( 'he' ) );
		$this->assertFalse( $this->i18n->isRtl( 'en' ) );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getDir
	 */
	public function testGetDir() {
		$this->assertEquals( $this->i18n->getDir( 'he' ), 'rtl' );
		$this->assertEquals( $this->i18n->getDir( 'en' ), 'ltr' );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getDomainInfo
	 */
	public function testGetDomainInfo() {
		$this->assertEquals(
			[
				'dir' => dirname( dirname( __DIR__ ) ) . '/language/messages/general',
			],
			$this->i18n->getDomainInfo( 'general' )
		);
		$this->assertEquals(
			false,
			$this->i18n->getDomainInfo( '-x-unknown' )
		);
	}

	public static function provideIsLocalDomain() {
		return [
			'general' => [ true, 'general' ],
			'-x-unknown' => [ false, '-x-unknown' ],
			'rtrc' => [ true, 'rtrc' ],
		];
	}

	/**
	 * @dataProvider provideIsLocalDomain
	 * @covers Krinkle\Intuition\Intuition::isLocalDomain
	 */
	public function testIsLocalDomain( $expected, $domain ) {
		$obj = new ReflectionClass( $this->i18n );
		$method = $obj->getMethod( 'isLocalDomain' );
		$method->setAccessible( true );
		$this->assertSame(
			$expected,
			$method->invokeArgs( $this->i18n, [ $domain ] )
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getAvailableLangs
	 */
	public function testGetAvailableLangs() {
		$langs = $this->i18n->getAvailableLangs( 'general' );
		$this->assertEquals( 'array', gettype( $langs ) );
		$this->assertTrue( count( $langs ) > 3 );
		$this->assertEquals( 'English', $langs['en'] );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getDashboardReturnToUrl
	 */
	public function testDashboardReturnToUrl() {
		// phpcs:disable MediaWiki.Usage.SuperGlobalsUsage.SuperGlobals
		$_SERVER['SCRIPT_NAME'] = '/example/index.php';
		$_GET = [];
		$this->assertEquals(
			'//tools.wmflabs.org/intuition/?returnto=' .
				'%2Fexample%2Findex.php&returntoquery=#tab-settingsform',
			$this->i18n->getDashboardReturnToUrl()
		);

		$_SERVER['SCRIPT_NAME'] = '/example/index.php';
		$_GET = [ 'foo' => 'bar' ];
		$this->assertEquals(
			'//tools.wmflabs.org/intuition/?returnto=' .
				'%2Fexample%2Findex.php&returntoquery=foo%3Dbar#tab-settingsform',
			$this->i18n->getDashboardReturnToUrl()
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getCookieNames
	 */
	public function testGetCookieNames() {
		$this->assertInternalType( 'array', $this->i18n->getCookieNames() );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::setCookie
	 * @covers Krinkle\Intuition\Intuition::getCookieName
	 * @covers Krinkle\Intuition\Intuition::setExpiryTrackerCookie
	 */
	public function testSetCookie() {
		$this->assertFalse( $this->i18n->setCookie( 'invalid', 'val' ) );
		$this->assertTrue( $this->i18n->setCookie( 'userlang', 'val' ) );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::hasCookies
	 */
	public function testHasCookies() {
		$this->assertFalse( $this->i18n->hasCookies(), 'none' );
		$_COOKIE[ $this->i18n->getCookieName( 'userlang' ) ] = 'en';
		$this->assertTrue( $this->i18n->hasCookies(), 'some' );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::renewCookies
	 */
	public function testRenewCookies() {
		$this->assertTrue( $this->i18n->renewCookies(), 'empty' );
		$_COOKIE[ $this->i18n->getCookieName( 'userlang' ) ] = 'en';
		$this->assertTrue( $this->i18n->renewCookies(), 'non-empty' );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::wipeCookies
	 */
	public function testWipeCookies() {
		$this->assertTrue( $this->i18n->wipeCookies() );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getCookieLifetime
	 * @covers Krinkle\Intuition\Intuition::getCookieExpiration
	 */
	public function testGetCookieLifetime() {
		$this->assertSame(
			0,
			$this->i18n->getCookieExpiration(),
			'default expiry'
		);
		$this->assertSame(
			0,
			$this->i18n->getCookieLifetime(),
			'default lifetime'
		);

		$expectedLifetime = 200;
		$now = 1490000000;
		$expires = $now + $expectedLifetime;
		$this->setTime( $now );

		$_COOKIE[ $this->i18n->getCookieName( 'track-expire' ) ] = $expires;

		$this->assertSame(
			$expires,
			$this->i18n->getCookieExpiration(),
			'read expiry'
		);
		$this->assertSame(
			$expectedLifetime,
			$this->i18n->getCookieLifetime(),
			'read lifetime'
		);
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getParamNames
	 */
	public function testGetParamNames() {
		$this->assertInternalType( 'array', $this->i18n->getParamNames() );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getParamName
	 */
	public function testGetParamName() {
		$this->assertSame( null, $this->i18n->getParamName( 'invalid' ) );
		$this->assertInternalType( 'string', $this->i18n->getParamName( 'userlang' ) );
	}

	/**
	 * @covers Krinkle\Intuition\Intuition::getUseRequestParam
	 * @covers Krinkle\Intuition\Intuition::setUseRequestParam
	 */
	public function testGetUseRequestParam() {
		$this->assertSame( true, $this->i18n->getUseRequestParam(), 'default' );

		$this->i18n->setUseRequestParam( true );
		$this->assertSame( true, $this->i18n->getUseRequestParam(), 'set true' );

		$this->i18n->setUseRequestParam( false );
		$this->assertSame( false, $this->i18n->getUseRequestParam(), 'set false' );

		$this->i18n->setUseRequestParam( 'invalid' );
		$this->assertSame( false, $this->i18n->getUseRequestParam(), 'invalid to false' );

		$this->i18n->setUseRequestParam( true );
		$this->assertSame( true, $this->i18n->getUseRequestParam(), 'true after invalid' );
	}

	/**
	 * @covers \Krinkle\Intuition\Intuition::addAvailableLang()
	 */
	public function testAddAvailableLangUnknown() {
		$this->assertSame( [], $this->i18n->getAvailableLangs( 'unknown' ), 'Unknown' );
	}

	/**
	 * @covers \Krinkle\Intuition\Intuition::addAvailableLang()
	 */
	public function testAddAvailableLang() {
		// This is a valid locale
		// http://demo.icu-project.org/icu-bin/locexp?d_=en&_=en_FI
		$this->assertArrayNotHasKey( 'en-fi', $this->i18n->getAvailableLangs() );
		$this->i18n->addAvailableLang( 'en-FI', 'Finnish English' );

		// Test for normalized language code.
		$this->assertArrayHasKey( 'en-fi', $this->i18n->getAvailableLangs() );

		// Test that un-normalized key returns the expected value.
		$this->assertEquals( 'Finnish English', $this->i18n->getLangName( 'en-FI' ) );
	}

	/**
	 * @covers \Krinkle\Intuition\Intuition::refreshLang()
	 */
	public function testAcceptLanguageHeader() {
		// Unknown last segment.
		$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-gb-xx';
		$this->i18n->refreshLang();
		$this->assertEquals( 'en-gb', $this->i18n->getLang() );
		// Unknown last two segments.
		$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-gbx-xx';
		$this->i18n->refreshLang();
		$this->assertEquals( 'en', $this->i18n->getLang() );
	}
}
