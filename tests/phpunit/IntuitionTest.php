<?php

class IntuitionTest extends PHPUnit_Framework_TestCase {

	private $i18n;

	protected function setUp() {
		parent::setUp();

		$intuition = new TestIntuition( 'general' );
		$intuition->setMsg( 'test-value', 'en value', 'test-domain', 'en' );
		$intuition->setMsg( 'test-value', 'de value', 'test-domain', 'de' );
		$intuition->setMsg( 'test-value', 'nan value', 'test-domain', 'nan' );
		$intuition->setMsg( 'test-value', 'zh-hans value', 'test-domain', 'zh-hans' );

		$this->i18n = $intuition;
	}

	protected function tearDown() {
		parent::tearDown();

		unset( $this->i18n );
	}

	public function testConstructor() {
		$i18n = new Intuition();

		$this->assertEquals(
			'Welcome',
			$i18n->msg( 'welcome' ),
			'Defaults to "general"'
		);

		$i18n = new Intuition( 'tsintuition' );

		$this->assertEquals(
			'Demo',
			$i18n->msg( 'tab-demo' ),
			'Domain key as string'
		);

		$i18n = new Intuition( array(
			'domain' => 'tsintuition'
		) );

		$this->assertEquals(
			'Demo',
			$i18n->msg( 'tab-demo' ),
			'Settings array with "domain" key'
		);
	}

	public function testDateFormatted() {
		$this->assertEquals(
			'January 15 2001',
			$this->i18n->dateFormatted( '2001-01-15' )
		);
	}

	public function testMsg() {
		$this->i18n->setMsgs( array(
			'welcomeback' => 'Welcome back, $1! Would you like some $2?',
			'basket' => 'The basket contains $1 {{PLURAL:$1|apple|apples}}.',
		) );

		$this->assertEquals(
			'Welcome',
			$this->i18n->msg( 'welcome' ),
			'Getting a message'
		);

		$this->assertEquals(
			'[r4nd0mstr1n9]',
			$this->i18n->msg( 'r4nd0mstr1n9' ),
			'Unknown key falls back to bracket-wrapped key'
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

		$this->assertEquals(
			'The basket contains 1 apple.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '1' ), 'parsemag' => true ) ),
			'Plural with 1'
		);

		$this->assertEquals(
			'The basket contains 7 apples.',
			$this->i18n->msg( 'basket', array( 'variables' => array( '7' ), 'parsemag' => true ) ),
			'Plural with 7'
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

	public function testParentheses() {
		$this->assertEquals(
			'(Hello)',
			$this->i18n->parentheses( 'hello' )
		);
	}

	public function testOptionShowNotices() {

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
			'Notice: [Intuition::msg] Message "r4nd0mstr1n9" for lang "en" in domain "general" not found.'
		);
	}

	public function testGetLangName() {
		$this->assertEquals(
			'English',
			$this->i18n->getLangName()
		);
		$this->assertEquals(
			'Français',
			$this->i18n->getLangName( 'fr' )
		);
		$this->assertEquals(
			'English',
			$this->i18n->getLangName( 'en' )
		);
	}

	public function testFallback() {
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
	}

	/**
	 * @covers Intuition::getDomainInfo
	 * @covers Intuition::getDomainInfos
	 */
	public function testGetDomainInfo() {
		$this->assertEquals(
			array( 'url' => '//tools.wmflabs.org/intuition/' ),
			$this->i18n->getDomainInfo( 'tsintuition' )
		);
	}
}
