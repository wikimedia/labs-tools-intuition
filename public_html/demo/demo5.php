<?php
/* Config */
require_once( 'demoBase.php' );
$I18N = new TsIntuition( 'general' );


/* Demonstration */
echo $I18N->dashboardBacklink();
echo $I18N->getPromoBox();
echo $I18N->getFooterLine();
echo $I18N->getFooterLine( false );
echo $I18N->getFooterLine( true );

/* View source */
view_source( __FILE__ );
close_demo();
