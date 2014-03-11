<?php
/**
 * Get fallbacks from MediaWiki core.
 *
 * @copyright 2011-2014 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package intuition
 */

$dir = '/path/to/mediawiki-core/languages/messages/';

// $ getFallbacks.php /path/to/messages
if ( isset( $argv[0] ) && strpos( $argv[0], '/messages' ) ) {
	$dir = $argv[0];
// $ php getFallbacks.php /path/to/messages
} elseif ( isset( $argv[1] ) && strpos( $argv[1], '/messages' ) ) {
	$dir = $argv[1];
}
if ( !is_readable( $dir ) ) {
	echo "Path to languages/messages not found.\n";
	exit(1);
}
$files = scandir( $dir );

$fhOutput = fopen( __DIR__ . '/getFallbacks.out', 'w' );

$data = array();

$reg = "@fallback \\= \\'(.*?)\\'\\;@i";

foreach ( $files as $file ) {
	if ( $file === '.' || $file === '..' || $file === '.svn' ) {
		continue;
	}

	$file = $dir.'/'.$file;

	$content = file_get_contents( $file );

	if ( !$content ) {
		exit( 'Error: ' . $file );
	}

	if ( preg_match( $reg, $content, $content_match ) ) {
		$fallback = $content_match[1];
		$fallbacks = array_map( 'trim', explode( ',', $fallback ) );

		preg_match( '@Messages(.*?)\\.php@', $file, $file_match );
		$source = str_replace( '_', '-', strtolower( $file_match[1] ) );

		$data[ $source ] = count( $fallbacks ) > 1 ? $fallbacks : $fallbacks[0];
	}
}

$output = var_export( $data, true );
// var_export adds trailing whitespace (https://bugs.php.net/60050)
$output = preg_replace( '/\s+$/m', '', $output );
// var_export adds numbered keys even for straight numberical arrays
$output = preg_replace( '/\d+ => /m', '', $output );
// Clean up whitespacing
$output = str_replace(
	array( 'array (', "\n  array(", '  ' ),
	array( 'array(', ' array(', "\t" ),
	$output
);

fwrite( $fhOutput, '$fallbacks = ' . $output . ';' . "\n" );
