<?php
/* Config */
require_once 'demoBase.php';


/* Demonstration */

// 1) Init
$options = array(
	'domain' => 'demo',
);
$I18N = new Intuition( $options );

// 2) Request an undefined message
// Because 'suppressnotices' is true (default),
// this won't trigger a Notice, and show a bracket msg: '[r4nd0mstr1n9]'
echo $I18N->msg( 'r4nd0mstr1n9' );


/* View source */
closeDemo( __FILE__ );
