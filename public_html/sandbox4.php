<?php
/* Config */
require_once( 'sandbox.php' );
$I18N = new TsIntuition( 'general' );


/* Demonstration */
echo $I18N->dashboardBacklink();
echo $I18N->getPromoBox();
echo $I18N->getFooterLine();


/* View source */
view_source( __FILE__ );
