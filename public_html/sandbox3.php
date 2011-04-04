<?php
/* Config */
require_once( 'sandbox.php' );


/* Demonstration */

// 1) Init TsIntuition
$options = array(
	'domain' => 'tsintuition',

	// Hide any kind of warning sign, errors, fatals and never call die
	'suppresserrors' => true,
);
$I18N = new TsIntuition( $options );

// 2) Request an undefined message
// Because 'suppresserrors' is true,
// this will display "R4nd0mstr1n9" instead of [r4nd0mstr1n9]
echo $I18N->msg( 'r4nd0mstr1n9' );


/* View source */
view_source( __FILE__ );
