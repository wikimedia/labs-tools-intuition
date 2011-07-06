<?PHP
/**
 *
 * Functions for messages (PLURAL, etc.).
 *
 * @package TsIntuition
 * @author Jan Luca <jan@toolserver.org>
 * @see TsIntuition::msg()
 */

class MessagesFunctions {
	private static $instance = null;
	
	private $langIsLoaded = array();
	
	private $baseDir = null;
	
	private $I18N = null;
	
	private $pluralRegex = "@\\{\\{PLURAL\\:(.*?)\\|(.*?)\\}\\}@i";
	
	private $error = array();
	
	/**
	 * 
	 * Get a instance of MessagesFunctions.
	 * 
	 * @param String $baseDir The path of the root dir of TS-I18N
	 * @param TsIntuition $I18N The current object of TsIntution
	 * @static
	 * @see TsIntuition::getMessagesFunctions()
	 */
	public static function getInstance( $baseDir, $I18N ) {
		if( self::$instance == null ) {
			self::$instance = new MessagesFunctions( $baseDir, $I18N );
			return self::$instance;
		} else {
			return self::$instance;
		}
	}
	
	/**
	 * 
	 * Construct a new object of MessageFunctions.
	 * 
	 * @param String $baseDir The path of the root dir of TS-I18N
	 * @param TsIntuition $I18N The current object of TsIntution
	 */
	function __construct( $baseDir, $I18N ) {
		$this->baseDir = $baseDir;
		$this->I18N = $I18N;
		
		require_once( $this->baseDir."/language/mw-classes/Language.php" );
	}
	
	/**
	 * 
	 * Load a language class file from its code.
	 * 
	 * @param String $language Language-Code
	 */
	private function loadLanguage( $language ) {
		$language = ucfirst( strtolower( str_replace("-", "_", $language ) ) );
	
		if ( in_array( $language, $this->langIsLoaded ) ) {
			return;
		}
		
		$className = "Language".$language;
		
		if ( file_exists( $this->baseDir."/language/mw-classes/".$className.".php" ) ) {
			include_once( $this->baseDir."/language/mw-classes/".$className.".php" );
		}	
		
		$this->langIsLoaded[] = $language;
	}
	
	/**
	 * 
	 * Get the functions (PLURAL, etc.) from the message.
	 * 
	 * @param String $msg the message with the functions
	 * @return array of the functions
	 */
	private function getMsgFunctions( $msg ) {
		$functions = array();
		
		if ( preg_match_all($this->pluralRegex, $msg, $matches, PREG_SET_ORDER) ) {
			foreach( $matches as $match ) {
				$parameteres = array();
				$parameteres[] = "plural";
				$parameteres[] = trim($match[1]);
				
				$forms = explode( "|", $match[2] );
				foreach( $forms as $form ) {
					$parameteres[] = $form;
				}
				
				$functions[] = $parameteres;
			}
		}
		
		return $functions;
	}
	
	/**
	 * 
	 * Parsing a message.
	 * 
	 * @param String $msg Message
	 * @param String $lang Language of the message
	 * @return String Parsed message
	 */
	public function parse( $msg, $lang ) {
		$this->loadLanguage( $lang );
		
		$msgFunctions = $this->getMsgFunctions( $msg );
		
		foreach( $msgFunctions as $msgFunction ) {
			$functionName = array_shift( $msgFunction );
			$functionNumber = array_shift( $msgFunction );
			if ( $functionNumber != null ) {
				$msg = $this->$functionName( $functionNumber, $msgFunction, $msg, $lang );
			} else {
				$msg = $this->$functionName( $msgFunction, $msg, $lang );
			}
		}
		
		$this->sendParseErrors( __METHOD__ );
		
		return $msg;
	}
	
	private function plural( $number, $parameters, $msg, $language ) {
		$language = ucfirst( strtolower( str_replace("-", "_", $language ) ) );
		
		if ( !is_numeric( $number ) ) {
			$this->addParseError( "Invalid number argument to {{PLURAL: ...}}", 
				__METHOD__, E_ERROR, __FILE__, __LINE__ );
			return $msg;
		}
		
		$className = "Language".$language;
		
		if ( class_exists( $className ) ) {
			$langObj = new $className();
		} else {
			$langObj = new Language();
		}
		
		$form = $langObj->convertPlural( $number, $parameters );
		
		$msg = preg_replace( $this->pluralRegex, $form, $msg, 1 );
		
		return $msg;
	}
	
	private function addParseError( $errMsg, $context, $errType = E_WARNING, $file = '', $line = '' ) {
		$this->error[] = array( "msg" => $errMsg, "context" => $context, 
			"type" => $errType, "file" => $file, "line" => $line );
	}
	
	private function sendParseErrors( $parseContext ) {
		if ( count( $this->error ) < 1 ) return;
		
		$this->I18N->errTrigger( "Problems when parsing the message. For Information see below!", 
			$parseContext, E_WARNING );
	
		foreach( $this->error as $error ) {
			$this->I18N->errTrigger( $error["msg"], $error["context"], 
				 $error["type"], $error["file"], $error["line"] );
		}
	}
}
?>