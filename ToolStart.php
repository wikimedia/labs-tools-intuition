<?php
/**
 *
 * Created on March 23, 2011
 *
 * @package TsIntuition
 */

/**
 * This file loads everything the individual tools need.
 */

// This is a valid entry, define
define( 'TS_INTUITION', __DIR__ );

// Local override
if ( file_exists( __DIR__ . '/LocalConfig.php' ) ) {
	include_once( __DIR__ . '/LocalConfig.php' );
}


// Files
require_once( __DIR__ . '/Defines.php' );
require_once( __DIR__ . '/TsIntuitionUtil.php' );
require_once( __DIR__ . '/TsIntuition.php' );
