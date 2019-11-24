<?php declare( strict_types = 1 );

namespace Krinkle\Intuition;

use PHPUnit\Framework\TestCase;

function setcookie() {
	return null;
}

function time() {
	return (int)IntuitionTestCase::$time;
}

class IntuitionTestCase extends TestCase {

	public static $time = 1;

	/** @var Intuition */
	protected $i18n;

	protected $live = [];

	protected function setUp() : void {
		parent::setUp();

		$this->i18n = new Intuition( 'general' );

		// Save super globals
		$this->live['SERVER'] = $_SERVER;
		$this->live['COOKIE'] = $_COOKIE;

		// Reset mocks
		self::$time = 1;
	}

	protected function tearDown() : void {
		// Restore super globals
		$_SERVER = $this->live['SERVER'];
		$_COOKIE = $this->live['COOKIE'];
		$this->live = [];

		unset( $this->i18n );

		parent::tearDown();
	}

	/**
	 * @param int $time Timestamp
	 */
	protected function setTime( $time ) {
		self::$time = $time;
	}
}
