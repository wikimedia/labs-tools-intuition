<?php
class TsIntuitionTest extends PHPUnit_Framework_TestCase {

	private $i18n;

	protected function setUp() {
		parent::setUp();

		$this->i18n = new TsIntuition( 'general' );
	}

	protected function tearDown() {
		parent::tearDown();

		unset( $this->i18n );
	}

	public function testConstructor() {
		$i18n = new TsIntuition();

		$this->assertEquals(
			$i18n->msg( 'welcome' ),
			'Welcome',
			'Defaults to "general"'
		);

		$i18n = new TsIntuition( 'tsintuition' );

		$this->assertEquals(
			$i18n->msg( 'tab-demo' ),
			'Demo',
			'Domain key as string'
		);

		$i18n = new TsIntuition( array(
			'domain' => 'tsintuition'
		) );

		$this->assertEquals(
			$i18n->msg( 'tab-demo' ),
			'Demo',
			'Settings array with "domain" key'
		);
	}

	public function testDateFormatted() {
		$this->assertEquals(
			$this->i18n->dateFormatted( '2001-01-15' ),
			'January 15 2001'
		);
	}

	public function testMsg() {
		$this->assertEquals(
			$this->i18n->msg( 'welcome' ),
			'Welcome',
			'Getting a message'
		);

		$this->assertEquals(
			$this->i18n->msg( 'r4nd0mstr1n9' ),
			'[r4nd0mstr1n9]',
			'Unknown key falls back to bracket-wrapped key'
		);

		$this->assertEquals(
			$this->i18n->msg( 'toolversionstamp', array(
				'variables' => array( '1.0', $this->i18n->dateFormatted( '2001-01-15' ) ),
			) ),
			'Version 1.0 (January 15 2001)',
			'Variable replacement with dateFormatted'
		);

		$this->i18n->setMsgs( array(
			'welcomeback' => 'Welcome back, $1! Would you like some $2?',
			'basket' => 'The basket contains $1 {{PLURAL:$1|apple|apples}}.',
		) );

		$this->assertEquals(
			$this->i18n->msg( 'welcomeback', array( 'variables' => array( 'John', 'coffee' ) ) ),
			'Welcome back, John! Would you like some coffee?',
			'Replacing 2 veriables'
		);

		$this->assertEquals(
			$this->i18n->msg( 'basket', array( 'variables' => array( '1' ), 'parsemag' => true ) ),
			'The basket contains 1 apple.',
			'Plural with 1'
		);

		$this->assertEquals(
			$this->i18n->msg( 'basket', array( 'variables' => array( '7' ), 'parsemag' => true ) ),
			'The basket contains 7 apples.',
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
			$this->i18n->parentheses( 'hello' ),
			'(Hello)'
		);
	}

	public function testOptionShowNotices() {

		$i18n = new TsIntuition( array(
			// Show notices
			'suppressnotice' => false,
		) );

		$this->assertEquals(
			$i18n->msg( 'r4nd0mstr1n9' ),
			'[r4nd0mstr1n9]',
			'Unknown key falls back to bracket-wrapped key'
		);
		$this->expectOutputString(
			'Notice: [TsIntuition::msg] Message "r4nd0mstr1n9" in domain "general" not found.'
		);
	}

	public function testGetLangName() {
		$this->assertEquals(
			$this->i18n->getLangName(),
			'English'
		);
		$this->assertEquals(
			$this->i18n->getLangName( 'fr' ),
			'Français'
		);
		$this->assertEquals(
			$this->i18n->getLangName( 'en' ),
			'English'
		);
	}
}
