<?php

class IntuitionTest extends PHPUnit_Framework_TestCase {

	private $i18n;

	protected function setUp() {
		parent::setUp();

		$i18n = new Intuition( 'general' );
		$this->sampleMsgs( $i18n );
		$this->i18n = $i18n;
	}

	protected function tearDown() {
		parent::tearDown();

		unset( $this->i18n );
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
	 * @covers Intuition::__construct
	 * @covers Intuition::msg
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

		$i18n = new Intuition( array(
			'domain' => 'test-domain'
		) );
		$this->sampleMsgs( $i18n );
		$this->assertEquals(
			'en value',
			$i18n->msg( 'test-value' ),
			'Constructor "domain" array option'
		);

		$i18n = new Intuition( array(
			'lang' => 'de'
		) );
		$this->sampleMsgs( $i18n );
		$this->assertEquals(
			'de value',
			$i18n->msg( 'test-value', 'test-domain' ),
			'Constructor "lang" option'
		);
	}

	/**
	 * @covers Intuition::setLang
	 * @covers Intuition::getLang
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
	 * @covers Intuition::setDomain
	 * @covers Intuition::normalizeDomain
	 * @covers Intuition::getDomain
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
	 * @covers Intuition::dateFormatted
	 * @covers Intuition::getLocale
	 */
	public function testDateFormatted() {
		$this->assertEquals(
			'January 15 2001',
			$this->i18n->dateFormatted( '2001-01-15' )
		);
	}

	/**
	 * @covers Intuition::msg
	 * @covers Intuition::rawMsg
	 * @covers Intuition::accessBlob
	 * @covers Intuition::getMessagesFunctions
	 */
	public function testMsg() {
		$this->i18n->setMsgs( array(
			'welcomeback' => 'Welcome back, $1! Would you like some $2?',
		) );

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
			'[r4nd0mstr1n9]',
			$this->i18n->msg( 'r4nd0mstr1n9' ),
			'Unknown key'
		);

		$this->assertEquals(
			'en value',
			$this->i18n->msg( 'test-value', 'test-domain' ),
			'Domain option (string)'
		);

		$this->assertEquals(
			'en value',
			$this->i18n->msg( 'test-value', array( 'domain' => 'test-domain' ) ),
			'Domain option (array)'
		);

		$this->assertEquals(
			'Version 1.0 (January 15 2001)',
			$this->i18n->msg( 'toolversionstamp', array(
				'variables' => array( '1.0', $this->i18n->dateFormatted( '2001-01-15' ) ),
			) ),
			'Variable replacement with dateFormatted'
		);

		$this->assertEquals(
			'Welcome back, John! Would you like some coffee?',
			$this->i18n->msg( 'welcomeback', array( 'variables' => array( 'John', 'coffee' ) ) ),
			'Replacing 2 veriables'
		);
	}

	/**
	 * @covers Intuition::msg
	 * @covers Intuition::getMessagesFunctions
	 * @covers MessagesFunctions
	 */
	public function testMessagesFunctions() {
		$this->i18n->setMsgs( array(
			'basket' => 'The basket contains $1 {{PLURAL:$1|apple|apples|applex}}.',
		) );

		$this->assertEquals(
			'The basket contains 1 apple.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '1' ) ) ),
			'Plural (en) with 1'
		);

		$this->assertEquals(
			'The basket contains 7 apples.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '7' ) ) ),
			'Plural (en) with 7'
		);

		$this->assertEquals(
			'The basket contains 0 apples.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '0' ) ) ),
			'Plural (en) with 0 uses plural form'
		);

		$this->assertEquals(
			'The basket contains 0 apple.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '0' ), 'lang' => 'fr' ) ),
			'Plural (fr) with 0 uses singular form'
		);

		$this->assertEquals(
			'The basket contains 21 apple.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '21' ), 'lang' => 'ru' ) ),
			'Plural (ru) with 21 uses singular form'
		);

		$this->assertEquals(
			'The basket contains 22 apples.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '22' ), 'lang' => 'ru' ) ),
			'Plural (ru) with 22 uses paucal@2 form'
		);

		$this->assertEquals(
			'The basket contains 7 applex.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '7' ), 'lang' => 'ru' ) ),
			'Plural (ru) with 7 uses plural@3 form'
		);
	}

	/**
	 * See also IntuitionUtilTest for more testing of strEscape()
	 *
	 * @covers Intuition::msg
	 */
	public function testMsgEscape() {
		$this->i18n->setMsgs( array(
			'example' => 'l&<€ and $1',
		) );

		$this->assertEquals(
			'l&<€ and &',
			$this->i18n->msg( 'example', array( 'variables' => array( '&' ) ) ),
			'Default (no escaping)'
		);

		$this->assertEquals(
			'l&amp;&lt;€ and &amp;',
			$this->i18n->msg( 'example', array(
				'variables' => array( '&' ),
				'escape' => 'html',
			) ),
			'HTML escaped'
		);

		$this->assertEquals(
			'l&amp;&lt;€ and &',
			$this->i18n->msg( 'example', array(
				'variables' => array( '&' ),
				'raw-variables' => true,
				'escape' => 'html',
			) ),
			'HTML escaped (raw variables)'
		);
	}

	/**
	 * See also IntuitionUtilTest for in-depth testing of parseExternalLinks()
	 *
	 * @covers Intuition::msg
	 */
	public function testMsgExternalLinks() {
		$this->i18n->setMsgs( array(
			'example' => 'The message with an [https://example.org link].',
		) );

		$this->assertEquals(
			'The message with an [https://example.org link].',
			$this->i18n->msg( 'example' ),
			'Default (no link expansion)'
		);

		$this->assertEquals(
			'The message with an <a href="https://example.org">link</a>.',
			$this->i18n->msg( 'example', array( 'externallinks' => true ) ),
			'Expanded with externallinks=true'
		);
	}

	/**
	 * See also IntuitionUtilTest for in-depth testing of parseWikiLinks().
	 *
	 * @covers Intuition::msg
	 */
	public function testMsgWikiLinks() {
		$this->i18n->setMsgs( array(
			'example' => 'The message with an [[Example|link]].',
		) );

		$this->assertEquals(
			'The message with an [[Example|link]].',
			$this->i18n->msg( 'example' ),
			'Default (no link expansion)'
		);

		$this->assertEquals(
			'The message with an <a href="/wiki/Example">link</a>.',
			$this->i18n->msg( 'example', array( 'wikilinks' => '/wiki/$1' ) ),
			'Expanded with wikilinks="/wiki/$1"'
		);
	}

	/**
	 * @covers Intuition::msg
	 * @covers Intuition::rawMsg
	 */
	public function testMsgQqx() {
		$this->assertEquals(
			'(test-register/foo)',
			$this->i18n->msg( 'foo', array( 'domain' => 'test-register', 'lang' => 'qqx' ) ),
			'Qqx message'
		);
	}

	/**
	 * @covers Intuition::registerDomain
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

		$this->i18n->registerDomain( 'test-CASE-SENSE', __DIR__ . '/data/i18n' );

		$this->assertEquals(
			'Lorem ipsum',
			$this->i18n->rawMsg( 'test-case-sense', 'en', 'lorem' ),
			'Domain names are registered case-insensitive'
		);
	}

	/**
	 * @covers Intuition::registerDomain
	 */
	public function testRegisterDomainDefault() {
		$i18n = new Intuition( array( 'domain' => 'test-register' ) );
		$i18n->registerDomain( 'test-register', __DIR__ . '/data/i18n' );
		$this->assertEquals(
			'Foo bar',
			$i18n->msg( 'foo' ),
			'Message in custom domain as default domain (default lang)'
		);
	}

	/**
	 * @covers Intuition::bracketMsg
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
	 * @covers Intuition::msgExists
	 */
	public function testMsgExist() {
		$this->assertTrue(
			$this->i18n->msgExists( 'welcome' )
		);
		$this->assertFalse(
			$this->i18n->msgExists( 'idontexist' )
		);
	}

	/**
	 * @covers Intuition::parentheses
	 * @covers Intuition::parensWrap
	 */
	public function testParentheses() {
		$this->assertEquals(
			'(Hello)',
			$this->i18n->parentheses( 'hello' )
		);
	}

	/**
	 * @covers Intuition::errTrigger
	 * @covers Intuition::errMsg
	 */
	public function testOptionShownotice() {
		$i18n = new Intuition( array(
			// Show notices
			'suppressnotice' => false,
		) );

		$this->assertEquals(
			'[r4nd0mstr1n9]',
			$i18n->msg( 'r4nd0mstr1n9' ),
			'Unknown key falls back to bracket-wrapped key'
		);
		$this->expectOutputString(
			'Notice: [Krinkle\Intuition\Intuition::msg] ' .
				'Message "r4nd0mstr1n9" for lang "en" in domain "general" not found.'
		);
	}

	/**
	 * @covers Intuition::msg
	 * @covers Intuition::bracketMsg
	 */
	public function testOptionSuppressbrackets() {
		$i18n = new Intuition( array(
			'suppressnotice' => true,
			'suppressbrackets' => true,
		) );

		$this->assertEquals(
			'R4nd0mstr1n9',
			$i18n->msg( 'r4nd0mstr1n9' ),
			'Unknown key falls back to ucfirst key'
		);
	}

	/**
	 * @covers Intuition::getLangName
	 * @covers Intuition::getLangNames
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
	 * @covers Intuition::listMsgs
	 */
	public function testListMsgs() {
		$this->assertEquals(
			$this->i18n->listMsgs( 'test-domain' ),
			array( 'test-value' )
		);
	}

	/**
	 * @covers Intuition::getLangFallbacks
	 * @covers Intuition::fetchLangFallbacks
	 */
	public function testLangFallback() {
		// Ensure fetchLangFallbacks is tested
		Intuition::clearCache();

		$fallbacks = $this->i18n->getLangFallbacks( 'de-formal' );
		$this->assertEquals(
			$fallbacks,
			array( 'de', 'en' )
		);
	}

	/**
	 * @covers Intuition::rawMsg
	 * @covers Intuition::getLangForMsg
	 * @covers Intuition::normalizeLang
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
			'Language with 1 fallback'
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
	 * @covers Intuition::isRtl
	 */
	public function testIsRtl() {
		$this->assertTrue( $this->i18n->isRtl( 'he' ) );
		$this->assertFalse( $this->i18n->isRtl( 'en' ) );
	}

	/**
	 * @covers Intuition::getDir
	 */
	public function testGetDir() {
		$this->assertEquals( $this->i18n->getDir( 'he' ), 'rtl' );
		$this->assertEquals( $this->i18n->getDir( 'en' ), 'ltr' );
	}

	/**
	 * @covers Intuition::getDomainInfo
	 */
	public function testGetDomainInfo() {
		$this->assertEquals(
			array(
				'dir' => dirname( dirname( __DIR__ ) ) . '/language/messages/general',
			),
			$this->i18n->getDomainInfo( 'general' )
		);
		$this->assertEquals(
			false,
			$this->i18n->getDomainInfo( '-x-unknown' )
		);
	}

	/**
	 * @covers Intuition::getAvailableLangs
	 */
	public function testGetAvailableLangs() {
		$langs = $this->i18n->getAvailableLangs();
		$this->assertEquals( 'array', gettype( $langs ) );
		$this->assertTrue( count( $langs ) > 3 );
		$this->assertEquals( 'English', $langs['en'] );
	}

	/**
	 * @covers Intuition::generateLanguageList
	 */
	public function testAvailableLangs() {
		$precompiled = $this->i18n->getAvailableLangs();
		$langlist = $this->i18n->generateLanguageList();
		$this->assertEquals( $langlist, $precompiled, 'Precompiled language list is up-to-date' );
	}

	/**
	 * @covers Intuition::getDashboardReturnToUrl
	 */
	public function testDashboardReturnToUrl() {
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
}
