<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

/* Load Toolserver Intuition from the main directory */
require_once( dirname(dirname( __DIR__ )) . '/ToolStart.php' );

// Known demos
$demoRegistry = array(
	'demo1' => 'Basic setup to load a message',
	'demo2' => 'Undefined message (default)',
	'demo3' => 'Undefined message (notice)',
	'demo4' => 'Undefined message (no brackets)',
	'demo5' => 'Dashboard backlink and footer line',
);

$thisFile = basename( $_SERVER['SCRIPT_NAME'], '.php' );
$thisDescr =  htmlspecialchars( @$demoRegistry[$thisFile] );

// HTML fragments
$startHTML = <<<HTML
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Toolserver Intuition | Demonstration sandboxes | $thisFile: $thisDescr</title>
	<style>
	/* Demo framework */
	body {
		font-family: sans-serif;
	}
	img { 
		vertical-align: middle;
	}
	h3 {
		clear: both;
		margin: 10px 0px;
		border-bottom: 1px solid #AAA;
	}
	pre {
		background: #F9F9F9;
		padding: 5px 8px;
		border: 1px solid #CCC;
	}
	ul {
		color: #777777;
		list-style: none;
	}
	ul li {
		background: #F9F9F9;
		display: inline;
		float: left;
		padding: 3px 2px;
		margin: 0px 2px;
	}
	/* Example */
	.tsint-promobox { background: #F9F9F9; padding: 5px 8px; margin: 10px; font-size: 85% }
	</style>
</head>
<body>
HTML;
$outputHead = '<h3>Output</h3>';


// Start output
header( 'Content-Type: text/html; charset=utf-8' );
echo $startHTML . '<ul>';
foreach ( $demoRegistry as $demoFilename => $descr ) {
	$descr = htmlspecialchars( $descr );
	echo "<li><a href=\"$demoFilename.php\" title=\"$descr\">$demoFilename</a><br /><small>$descr</small></a></li>";
}
echo "</ul>$outputHead";


// Output source-heading and source code
function view_source( $file ) {
	echo '<h3>Source</h3>'
	. '<pre>'
	. show_source( $file, true )
	. '</pre>';
}

// End of track
function close_demo(){
	echo '</body></html>';
}

// Make this file viewable as well
if( $thisFile == 'demoBase' ){
	view_source( __FILE__ );
}