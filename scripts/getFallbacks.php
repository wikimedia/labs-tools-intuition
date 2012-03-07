<?PHP
/**
 * 
 * Get fallbacks from MediaWiki Core.
 * @author Jan Luca <jan@toolserver.org>
 */

$dir = "<path to messages dir of MediaWiki>";
$files = scandir( $dir );

$output = fopen("output.php", "w");

$reg = "@fallback \\= \\'(.*?)\\'\\;@i";

foreach( $files as $file ) {
	if( $file == "." || $file == ".." || $file == ".svn" ) {
		continue;
	}
	
	$file = $dir."/".$file;
	
	$content = file_get_contents( $file );
	
	if( !$content ) die("Error: " . $file);
	
	if( preg_match( $reg, $content, $match ) ) {
		$fallback_lang = $match[1];
		preg_match("@Messages(.*?)\\.php@", $file, $file_match);
		$source_lang = $file_match[1];
		$source_lang = strtolower($source_lang);
		fwrite($output, "'".$source_lang."' => '".$fallback_lang."',\n");
	}
}