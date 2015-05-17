<?php
/**
 * Get fallbacks from MediaWiki core.
 *
 * @copyright 2011-2014 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package intuition
 */

if ( !isset( $argv[1] ) || strpos( $argv[1], '/messages' ) === false ) {
	$scriptName = basename( __FILE__ );
	echo "usage: php $scriptName <dir>\n\n  <dir>  The path to mediawiki/languages/messages\n";
	exit(1);
}
$dir = $argv[1];
if ( !is_readable( $dir ) ) {
	echo "error: Path to languages/messages not found\n";
	exit(1);
}

$dest = dirname( __DIR__ ) . '/language/fallbacks.json';
if ( !is_writable( dirname( $dest ) ) ) {
	echo "error: Unable to create $dest\n";
	exit(1);
}
$files = scandir( $dir );

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

$written = file_put_contents( $dest, json_encode( $data, JSON_PRETTY_PRINT ) );
if ( !$written ) {
	echo "error: Failed to write to $dest\n";
	exit(1);
}
