<?php
/* Config */
require_once( 'sandbox.php' );


/* Demonstration */

// 1) Init TsIntuition
$options = array(
	'domain' => 'tsintuition',

	// Show notices
	'suppressnotices' => false,
);
$I18N = new TsIntuition( $options );

// 2) Request an undefined message
// Because 'suppressnotices' is false,
// this will trigger a Notice: 'r4nd0mstr1n9' undefined 
echo $I18N->msg( 'r4nd0mstr1n9' );


/* View source */
view_source( __FILE__ );