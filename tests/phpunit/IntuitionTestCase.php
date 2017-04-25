<?php

namespace Krinkle\Intuition;

use PHPUnit_Framework_TestCase;

function setcookie() {
	return null;
}

function time() {
	return (int) IntuitionTestCase::$time;
}

class IntuitionTestCase extends PHPUnit_Framework_TestCase {

	public static $time = 1;

	protected $i18n;

	protected $live = array();

	protected function setUp() {
		parent::setUp();

		$this->i18n = new Intuition( 'general' );

		// Save super globals
		$this->live['SERVER'] = $_SERVER;
		$this->live['COOKIE'] = $_COOKIE;

		// Reset mocks
		self::$time = 1;
	}

	protected function tearDown() {
		// Restore super globals
		$_SERVER = $this->live['SERVER'];
		$_COOKIE = $this->live['COOKIE'];
		$this->live = array();

		unset( $this->i18n );

		parent::tearDown();
	}

	protected function setTime( $time ) {
		self::$time = $time;
	}
}
