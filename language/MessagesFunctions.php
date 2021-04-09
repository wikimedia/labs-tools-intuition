<?php
/**
 * Functions for messages (PLURAL, etc.).
 *
 * @see Intuition::msg()
 *
 * @license MIT
 * @package krinkle/intuition
 */

use Krinkle\Intuition\Intuition;
use Krinkle\Intuition\Util as IntuitionUtil;

class MessagesFunctions {

	private static $instance = null;

	private $langIsLoaded = array();

	private $baseDir = null;

	private $I18N = null;

	private $langCode = null;

	private $msgFunctionRegex = "@\\{\\{(PLURAL|GENDER)\\:(.*?)\\|(.*?)\\}\\}@i";

	private $error = array();

	/**
	 *
	 * Get a instance of MessagesFunctions.
	 *
	 * @see Intuition::getMessagesFunctions()
	 * @param string $baseDir The path of the root dir of TS-I18N
	 * @param Intuition $intuition
	 * @return MessagesFunctions
	 */
	public static function getInstance( string $baseDir, Intuition $intuition ) : MessagesFunctions {
		if( self::$instance == null ) {
			self::$instance = new MessagesFunctions( $baseDir, $intuition );
			return self::$instance;
		} else {
			return self::$instance;
		}
	}

	/**
	 *
	 * Construct a new object of MessageFunctions.
	 *
	 * @param string $baseDir The path of the root dir of TS-I18N
	 * @param Intuition $intuition
	 */
	function __construct( string $baseDir, Intuition $intuition ) {
		$this->baseDir = $baseDir;
		$this->I18N = $intuition;

		require_once $this->baseDir . '/language/mw-classes/Language.php';
	}

	/**
	 *
	 * Load a language class file from its code.
	 *
	 * @param string $language Language code
	 */
	private function loadLanguage( string $language ) {
		$language = ucfirst( strtolower( str_replace( '-', '_', $language ) ) );

		if ( in_array( $language, $this->langIsLoaded ) ) {
			return;
		}

		$className = "Language".$language;

		if ( file_exists( $this->baseDir . '/language/mw-classes/' . $className . '.php' ) ) {
			include_once $this->baseDir . '/language/mw-classes/' . $className . '.php';
		}

		$this->langIsLoaded[] = $language;
	}

	/**
	 * Executed as the callback from parse()
	 * Runs the functions (PLURAL, etc.) for the message.
	 *
	 * @param array $matches the matches for the function
	 * @return string replaced message
	 */
	private function msgFunctionMatches( array $matches ) : string {
		$functionName = strtolower( $matches[1] );
		$firstParameter = $matches[2];
		$parameters = explode( '|', $matches[3] );

		return $this->$functionName( $firstParameter, $parameters, $matches[0] );
	}

	/**
	 * Parsing a message.
	 *
	 * @param string $msg Message
	 * @param string $lang Language of the message
	 * @return string Parsed message
	 */
	public function parse( string $msg, string $lang ) : string {
		$this->langCode = $lang;
		$this->loadLanguage( $lang );

		$msg = preg_replace_callback(
			$this->msgFunctionRegex,
			array( $this, 'msgFunctionMatches' ), $msg
		);
		$this->sendParseErrors();

		return $msg;
	}

	private function plural( $number, array $parameters, $msg ) {
		$language = ucfirst( strtolower( str_replace( '-', '_', $this->langCode ) ) );

		if ( $number == null || !is_numeric( $number ) ) {
			$this->addParseError( "Invalid number argument to {{PLURAL: ...}}",
				__METHOD__, E_ERROR );
			return $msg;
		}

		$className = 'Language' . $language;

		if ( class_exists( $className ) ) {
			$langObj = new $className();
		} else {
			$langObj = new Language();
		}

		return $langObj->convertPlural( $number, $parameters );
	}

	private function gender( $user, array $parameters, $msg ) {
		switch ( count( $parameters ) ) {
			case 0:
				$this->addParseError( "{{GENDER:}} with no variants", __METHOD__ );
				return '';
			case 1:
				return $parameters[0];
			case 2:
				return IntuitionUtil::tag( $parameters[0], 'span', array(
						'class' => 'gender-male gender-neutral'
					) ) .
					IntuitionUtil::tag( $parameters[1], 'span', array(
						'class' => 'gender-female'
					) );
			default:
				$this->addParseError( "{{GENDER:}} given too many variants", __METHOD__ );
			case 3:
				return IntuitionUtil::tag( $parameters[2], 'span', array(
						'class' => 'gender-neutral'
					) ) .
					IntuitionUtil::tag( $parameters[0], 'span', array(
						'class' => 'gender-male'
					) ) .
					IntuitionUtil::tag( $parameters[1], 'span', array(
						'class' => 'gender-female'
					) );
		}
	}

	private function addParseError( $msg, $context, int $errType = E_WARNING ) {
		$this->error[] = array(
			'msg' => $msg,
			'context' => $context,
			'type' => $errType
		);
	}

	private function sendParseErrors() {
		foreach ( $this->error as $error ) {
			$this->I18N->errTrigger(
				$error['msg'],
				$error['context'],
				$error['type']
			);
		}
	}
}
