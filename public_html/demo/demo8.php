<?php
/* Config */
require_once( 'demoBase.php' );

/* Demonstration */

// 1) Init $I18N
$I18N = new TsIntuition( 'general' /* name of textdomain here */ );

// 2) Register some interesting messages
$I18N->setMsg( 'apple-stats', 'Apple status:  $1 {{PLURAL:$1|apple|apples}} in the basket.' );

// 2) Use MessagesFunctions

// - Raw echo
echo $I18N->msg( 'apple-stats' );

echo '<br />';

// - Pass variables, setting $1 to '1'
echo '<br />' . $I18N->msg( 'apple-stats', array( 'variables' => array( '1' ) ) );

// - Pass variables, setting $1 to '7'
echo '<br />' . $I18N->msg( 'apple-stats', array( 'variables' => array( '7' ) ) );

echo '<br />';

// - Trigger parser magic, setting $1 to '1'
echo '<br />' . $I18N->msg( 'apple-stats', array( 'variables' => array( '1' ), 'parsemag' => true ) );

// - Trigger parser magic, setting $1 to '7'
echo '<br />' . $I18N->msg( 'apple-stats', array( 'variables' => array( '7' ), 'parsemag' => true ) );



/* View source */
view_source( __FILE__ );
close_demo();