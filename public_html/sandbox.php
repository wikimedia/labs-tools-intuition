<?php
/* Load Toolserver Intuition */
require_once( '/home/krinkle/TsIntuition/ToolStart.php' );


// Output-header
echo '<h3 style="margin: 8px 0px 5px 0px; border-bottom: 1px solid #AAA;">Output</h3>';


// Source
function view_source( $file ) {
	echo '<h3 style="margin: 8px 0px 5px 0px; border-bottom: 1px solid #AAA;">Source</h3>'
	. '<pre style="background: #f2f2f2; padding: 5px 8px; border: 1px solid #CCC;">'
	. htmlspecialchars( file_get_contents( $file ) )
	. '</pre>';
}


if(basename($_SERVER['SCRIPT_NAME'])=='sandbox.php') view_source( __FILE__ );