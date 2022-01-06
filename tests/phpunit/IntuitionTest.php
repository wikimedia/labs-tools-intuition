<?php declare( strict_types = 1 );

use Krinkle\Intuition\Intuition;

/**
 * @covers Krinkle\Intuition\Intuition
 */
class IntuitionTest extends Krinkle\Intuition\IntuitionTestCase {

	protected function setUp() : void {
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

	public function testConstructor() {
		$i18n = new Intuition();

		$this->assertSame(
			'Welcome',
			$i18n->msg( 'welcome' ),
			'Defaults to "general"'
		);

		$i18n = new Intuition( 'test-domain' );
		$this->sampleMsgs( $i18n );

		$this->assertSame(
			'en value',
			$i18n->msg( 'test-value' ),
			'Domain key as string'
		);

		$i18n = new Intuition( [
			'domain' => 'test-domain'
		] );
		$this->sampleMsgs( $i18n );
		$this->assertSame(
			'en value',
			$i18n->msg( 'test-value' ),
			'Constructor "domain" array option'
		);

		$i18n = new Intuition( [
			'lang' => 'de'
		] );
		$this->sampleMsgs( $i18n );
		$this->assertSame(
			'de value',
			$i18n->msg( 'test-value', 'test-domain' ),
			'Constructor "lang" option'
		);
	}

	public function testSetLang() {
		$this->assertTrue( $this->i18n->setLang( 'nan' ) );
		$this->assertSame(
			'nan value',
			$this->i18n->msg( 'test-value', 'test-domain' ),
			'Change default lang'
		);
		// Language must be a non-empty string.
		$this->assertFalse( $this->i18n->setLang( 42 ), 'Bad value' );
		// Language is normalized to lowercase and hyphen-separated.
		$this->i18n->setLang( 'en_AU' );
		$this->assertEquals( 'en-au', $this->i18n->getLang() );
		$this->i18n->setLang( '"bad" lang <string>' );
		$this->assertEquals( 'bad-lang-string', $this->i18n->getLang(), 'Strip invalid characters.' );
		$this->i18n->setLang( '*^-.' );
		// Lang doesn't change from previous if new value is invalid.
		$this->assertEquals( 'bad-lang-string', $this->i18n->getLang(), 'Only invalid characters.' );
	}

	public function testSetDomain() {
		$this->i18n->setDomain( 'Test-Domain' );
		$this->assertSame(
			'en value',
			$this->i18n->msg( 'test-value' ),
			'Change default domain'
		);
	}

	public function testDateFormatted() {
		$this->assertSame(
			'January 15 2001',
			$this->i18n->dateFormatted( '2001-01-15' )
		);
	}

	public function testMsg() {
		$this->i18n->setMsgs( [
			'welcomeback' => 'Welcome back, $1! Would you like some $2?',
		] );

		$this->assertSame(
			'Welcome',
			$this->i18n->msg( 'welcome' ),
			'Getting a message'
		);

		$this->assertSame(
			'[]',
			$this->i18n->msg( null ),
			'Invalid key'
		);

		$this->assertSame(
			'[randomkey]',
			$this->i18n->msg( 'randomkey' ),
			'Unknown key'
		);

		$this->assertSame(
			'en value',
			$this->i18n->msg( 'test-value', 'test-domain' ),
			'Domain option (string)'
		);

		$this->assertSame(
			'en value',
			$this->i18n->msg( 'test-value', [ 'domain' => 'test-domain' ] ),
			'Domain option (array)'
		);

		$this->assertSame(
			'Version 1.0 (January 15 2001)',
			$this->i18n->msg( 'toolversionstamp', [
				'variables' => [ '1.0', $this->i18n->dateFormatted( '2001-01-15' ) ],
			] ),
			'Variable replacement with dateFormatted'
		);

		$this->assertSame(
			'Welcome back, John! Would you like some coffee?',
			$this->i18n->msg( 'welcomeback', [ 'variables' => [ 'John', 'coffee' ] ] ),
			'Replacing 2 veriables'
		);
	}

	public function testMessagesFunctions() {
		$this->i18n->setMsgs( [
			'basket' => 'The basket contains $1 {{PLURAL:$1|apple|apples|applex}}.',
			'logged-in' => "Vous êtes connecté{{GENDER:$1||e}} en tant que $1",
		] );

		$this->assertSame(
			'The basket contains 1 apple.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '1' ] ] ),
			'Plural (en) with 1'
		);

		$this->assertSame(
			'The basket contains 7 apples.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '7' ] ] ),
			'Plural (en) with 7'
		);

		$this->assertSame(
			'The basket contains 0 apples.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '0' ] ] ),
			'Plural (en) with 0 uses plural form'
		);

		$this->assertSame(
			'The basket contains 0 apple.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '0' ], 'lang' => 'fr' ] ),
			'Plural (fr) with 0 uses singular form'
		);

		$this->assertSame(
			'The basket contains 21 apple.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '21' ], 'lang' => 'ru' ] ),
			'Plural (ru) with 21 uses singular form'
		);

		$this->assertSame(
			'The basket contains 22 apples.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '22' ], 'lang' => 'ru' ] ),
			'Plural (ru) with 22 uses paucal@2 form'
		);

		$this->assertSame(
			'The basket contains 7 applex.',
			$this->i18n->msg( 'basket', [ 'variables' => [ '7' ], 'lang' => 'ru' ] ),
			'Plural (ru) with 7 uses plural@3 form'
		);

		$this->assertSame(
			'Vous êtes connecté<span class="gender-male gender-neutral"></span>'
			. '<span class="gender-female">e</span> en tant que Foo',
			$this->i18n->msg( 'logged-in', [ 'variables' => [ 'Foo' ] ] ),
			'Gender (fr)'
		);
	}

	/**
	 * See also UtilTest for more testing of strEscape()
	 */
	public function testMsgEscape() {
		$this->i18n->setMsgs( [
			'example' => 'l&<€ and $1',
		] );

		$this->assertSame(
			'l&<€ and &',
			$this->i18n->msg( 'example', [ 'variables' => [ '&' ] ] ),
			'Default (no escaping)'
		);

		$this->assertSame(
			'l&amp;&lt;€ and &amp;',
			$this->i18n->msg( 'example', [
				'variables' => [ '&' ],
				'escape' => 'html',
			] ),
			'HTML escaped'
		);

		$this->assertSame(
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
	 */
	public function testMsgExternalLinks() {
		$this->i18n->setMsgs( [
			'example' => 'The message with an [https://example.org link].',
		] );

		$this->assertSame(
			'The message with an [https://example.org link].',
			$this->i18n->msg( 'example' ),
			'Default (no link expansion)'
		);

		$this->assertSame(
			'The message with an <a href="https://example.org">link</a>.',
			$this->i18n->msg( 'example', [ 'externallinks' => true ] ),
			'Expanded with externallinks=true'
		);
	}

	/**
	 * See also UtilTest for in-depth testing of parseWikiLinks().
	 */
	public function testMsgWikiLinks() {
		$this->i18n->setMsgs( [
			'example' => 'The message with an [[Example|link]].',
		] );

		$this->assertSame(
			'The message with an [[Example|link]].',
			$this->i18n->msg( 'example' ),
			'Default (no link expansion)'
		);

		$this->assertSame(
			'The message with an <a href="/wiki/Example">link</a>.',
			$this->i18n->msg( 'example', [ 'wikilinks' => '/wiki/$1' ] ),
			'Expanded with wikilinks="/wiki/$1"'
		);
	}

	public function testMsgQqx() {
		$this->assertSame(
			'(test-register/foo)',
			$this->i18n->msg( 'foo', [ 'domain' => 'test-register', 'lang' => 'qqx' ] ),
			'Qqx message'
		);
	}

	public function testRegisterDomain() {
		$this->i18n->registerDomain( 'test-register', __DIR__ . '/data/i18n' );

		$this->assertSame(
			'Foo bar',
			$this->i18n->rawMsg( 'test-register', 'en', 'foo' ),
			'Message in custom domain (default lang)'
		);

		$this->assertSame(
			'Voerbak',
			$this->i18n->rawMsg( 'test-register', 'nl', 'foo' ),
			'Message in custom domain (custom lang)'
		);

		$this->assertSame(
			'Voerbak',
			$this->i18n->rawMsg( 'test-register', 'nl', 'foo' ),
			// Cover when ensureLoaded() returns early
			'Message in custom domain (custom lang) - cache hit'
		);

		$this->i18n->registerDomain( 'test-CASE-SENSE', __DIR__ . '/data/i18n' );

		$this->assertSame(
			'Lorem ipsum',
			$this->i18n->rawMsg( 'test-case-sense', 'en', 'lorem' ),
			'Domain names are registered case-insensitive'
		);
	}

	public function testMsgFallbackForDomains() {
		// Fallbacks that trigger message file loading
		// (the previous examples use a faux domain defined lazily
		// via setMsgs, 'test-domain' has no directory so there is no
		// interaction with the i18n/ directory when resolving fallbacks
		// which can also cause issues (issue #81)
		$i18n = new Intuition();
		$i18n->registerDomain( 'test', __DIR__ . '/data/i18n' );
		$this->assertSame(
			'Foo bar',
			$i18n->rawMsg( 'test', 'en', 'foo' ),
			'Message from domain directory (en)'
		);

		$this->assertSame(
			null,
			$i18n->rawMsg( 'test', 'nl', 'unknown' ),
			'Message from domain directory (lang: nl, unknown message)'
		);

		$this->assertSame(
			'Foo bar',
			$i18n->rawMsg( 'test', 'en-gb', 'foo' ),
			'Message from domain directory (lang: en-gb, fallback to en)'
		);

		$this->assertSame(
			'Foo bar',
			$i18n->rawMsg( 'test', 'x-unknown', 'foo' ),
			'Message from domain directory (lang: x-unknown, fallback to en)'
		);
	}

	public function testMessageCache() {
		// When a class loads a domain/language pair
		// into static messageCache, and another instance
		// leverages that instead of re-reading from disk.
		Intuition::clearCache();
		$int1 = new Intuition( 'general' );
		$int2 = new Intuition( 'general' );

		$this->assertIsString( $int1->msg( 'hello' ) );
		$this->assertIsString( $int2->msg( 'hello' ) );
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
	 */
	public function testEnsureLoaded( $domain, $lang, $message = null ) {
		Intuition::clearCache();

		$this->assertSame(
			$this->i18n->rawMsg( $domain, $lang, 'msgkey' ),
			null,
			$message
		);
	}

	public function testRegisterDomainDefault() {
		$i18n = new Intuition( [ 'domain' => 'test-register' ] );
		$i18n->registerDomain( 'test-register', __DIR__ . '/data/i18n' );
		$this->assertSame(
			'Foo bar',
			$i18n->msg( 'foo' ),
			'Message in custom domain as default domain (default lang)'
		);
	}

	public function testBracketMsg() {
		$this->assertSame(
			'[example]',
			$this->i18n->bracketMsg( 'example' )
		);
		$this->assertSame(
			'nope',
			$this->i18n->bracketMsg( 'example', 'nope' )
		);
	}

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
	 */
	public function testRedirectTo( $ret, $url, $isRedirect = null ) {
		$before = error_reporting( E_ALL & ~E_USER_DEPRECATED );
		$this->assertSame( $ret, $this->i18n->redirectTo( $url ) );
		error_reporting( $before );

		$this->assertSame( $isRedirect, $this->i18n->isRedirecting() );
	}

	/**
	 * @dataProvider provideRedirectTo
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

		$before = error_reporting( E_ALL & ~E_USER_DEPRECATED );
		$this->assertFalse(
			$this->i18n->redirectTo( [ 'invalid' ], 'value' ),
			'invalid value rejected'
		);
		error_reporting( $before );

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

	public function testParentheses() {
		$this->assertSame(
			'(Hello)',
			$this->i18n->parentheses( 'hello' )
		);
	}

	public function testOptionShownotice() {
		$i18n = new Intuition( [
			// Show notices
			'suppressnotice' => false,
		] );

		$this->expectException( \PHPUnit\Framework\Error\Notice::class );
		$this->assertSame(
			'[randomkey]',
			$i18n->msg( 'randomkey' ),
			'Unknown key falls back to bracket-wrapped key'
		);
	}

	public function testOptionSuppressbrackets() {
		$i18n = new Intuition( [
			'suppressnotice' => true,
			'suppressbrackets' => true,
		] );

		$this->assertSame(
			'Randomkey',
			$i18n->msg( 'randomkey' ),
			'Unknown key falls back to ucfirst key'
		);
	}

	public function testGetLangName() {
		$this->assertSame(
			'English',
			$this->i18n->getLangName()
		);
		$this->assertSame(
			'français',
			$this->i18n->getLangName( 'fr' )
		);
		$this->assertSame(
			'English',
			$this->i18n->getLangName( 'en' )
		);
	}

	public function testListMsgs() {
		$this->assertSame(
			$this->i18n->listMsgs( 'test-domain' ),
			[ 'test-value' ]
		);
		$this->assertSame(
			$this->i18n->listMsgs( 'unknown' ),
			[]
		);
	}

	public function testLangFallback() {
		// Ensure fetchLangFallbacks is tested
		Intuition::clearCache();

		$fallbacks = $this->i18n->getLangFallbacks( 'de-formal' );
		$this->assertSame(
			$fallbacks,
			[ 'de', 'en' ]
		);
	}

	public function testMsgFallback() {
		// Normal fallbacks (chain)

		$this->assertSame(
			'en value',
			$this->i18n->rawMsg( 'test-domain', 'en', 'test-value' ),
			'Default'
		);

		$this->assertSame(
			'en value',
			$this->i18n->rawMsg( 'test-domain', 'nl', 'test-value' ),
			'Default for language without fallback'
		);

		$this->assertSame(
			'en value',
			$this->i18n->rawMsg( 'test-domain', 'bgn', 'test-value' ),
			'Default for language with 1 fallback that is not set'
		);

		$this->assertSame(
			'de value',
			$this->i18n->rawMsg( 'test-domain', 'de_formal', 'test-value' ),
			'Language with 1 fallback (normalised en-gb)'
		);

		$this->assertSame(
			'de value',
			$this->i18n->rawMsg( 'test-domain', 'de-formal', 'test-value' ),
			'Language with 1 fallback (de-formal)'
		);

		$this->assertSame(
			'de value',
			$this->i18n->rawMsg( 'test-domain', 'de_formal', 'test-value' ),
			'Language with 1 fallback (normalised de_formal)'
		);

		$this->assertSame(
			'nan value',
			$this->i18n->rawMsg( 'test-domain', 'cdo', 'test-value' ),
			'Language with 2 fallbacks (first)'
		);

		$this->assertSame(
			'zh-hans value',
			$this->i18n->rawMsg( 'test-domain', 'gan', 'test-value' ),
			'Language with 3 fallbacks (third)'
		);

		// Deprecated/dummy fallback (replacement)
		$this->assertSame(
			'nb value',
			$this->i18n->rawMsg( 'test-domain', 'no', 'test-value' ),
			'Ignore value of deprecated language code'
		);
	}

	public function testIsRtl() {
		$this->assertTrue( $this->i18n->isRtl( 'he' ) );
		$this->assertFalse( $this->i18n->isRtl( 'en' ) );
	}

	public function testGetDir() {
		$this->assertSame( $this->i18n->getDir( 'he' ), 'rtl' );
		$this->assertSame( $this->i18n->getDir( 'en' ), 'ltr' );
	}

	public function testGetDomainInfo() {
		$this->assertSame(
			[
				'dir' => dirname( dirname( __DIR__ ) ) . '/language/messages/general',
			],
			$this->i18n->getDomainInfo( 'general' )
		);
		$this->assertSame(
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

	public function testGetAvailableLangs() {
		$langs = $this->i18n->getAvailableLangs( 'general' );
		$this->assertSame( 'array', gettype( $langs ) );
		$this->assertTrue( count( $langs ) > 3 );
		$this->assertSame( 'English', $langs['en'] );
	}

	public function testDashboardReturnToUrl() {
		// phpcs:disable MediaWiki.Usage.SuperGlobalsUsage.SuperGlobals
		$_SERVER['SCRIPT_NAME'] = '/example/index.php';
		$_GET = [];
		$this->assertSame(
			'//tools.wmflabs.org/intuition/?returnto=' .
				'%2Fexample%2Findex.php&returntoquery=#tab-settingsform',
			$this->i18n->getDashboardReturnToUrl()
		);

		$_SERVER['SCRIPT_NAME'] = '/example/index.php';
		$_GET = [ 'foo' => 'bar' ];
		$this->assertSame(
			'//tools.wmflabs.org/intuition/?returnto=' .
				'%2Fexample%2Findex.php&returntoquery=foo%3Dbar#tab-settingsform',
			$this->i18n->getDashboardReturnToUrl()
		);
	}

	public function testGetCookieNames() {
		$this->assertIsArray( $this->i18n->getCookieNames() );
	}

	public function testSetCookie() {
		$this->assertFalse( $this->i18n->setCookie( 'invalid', 'val' ) );
		$this->assertTrue( $this->i18n->setCookie( 'userlang', 'val' ) );
	}

	public function testHasCookies() {
		$this->assertFalse( $this->i18n->hasCookies(), 'none' );
		$_COOKIE[ $this->i18n->getCookieName( 'userlang' ) ] = 'en';
		$this->assertTrue( $this->i18n->hasCookies(), 'some' );
	}

	public function testRenewCookies() {
		$this->assertTrue( $this->i18n->renewCookies(), 'empty' );
		$_COOKIE[ $this->i18n->getCookieName( 'userlang' ) ] = 'en';
		$this->assertTrue( $this->i18n->renewCookies(), 'non-empty' );
	}

	public function testWipeCookies() {
		$this->assertTrue( $this->i18n->wipeCookies() );
	}

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

	public function testGetParamNames() {
		$this->assertIsArray( $this->i18n->getParamNames() );
	}

	public function testGetParamName() {
		$this->assertSame( null, $this->i18n->getParamName( 'invalid' ) );
		$this->assertIsString( $this->i18n->getParamName( 'userlang' ) );
	}

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

	public function testAddAvailableLangUnknown() {
		$this->assertSame( [], $this->i18n->getAvailableLangs( 'unknown' ), 'Unknown' );
	}

	public function testAddAvailableLang() {
		// This is a valid locale
		// http://demo.icu-project.org/icu-bin/locexp?d_=en&_=en_FI
		$this->assertArrayNotHasKey( 'en-fi', $this->i18n->getAvailableLangs() );
		$this->i18n->addAvailableLang( 'en-FI', 'Finnish English' );

		// Test for normalized language code.
		$this->assertArrayHasKey( 'en-fi', $this->i18n->getAvailableLangs() );

		// Test that un-normalized key returns the expected value.
		$this->assertSame( 'Finnish English', $this->i18n->getLangName( 'en-FI' ) );
	}

	public function testAcceptLanguageHeader() {
		// Unknown last segment.
		$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-gb-xx';
		$this->i18n->refreshLang();
		$this->assertSame( 'en-gb', $this->i18n->getLang() );
		// Unknown last two segments.
		$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-gbx-xx';
		$this->i18n->refreshLang();
		$this->assertSame( 'en', $this->i18n->getLang() );
	}
}
