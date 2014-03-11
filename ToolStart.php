<?php
/**
 * Primary entry point for the back-end.
 *
 * @copyright 2011-2014 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package intuition
 */

/**
 * This file loads everything the individual tools need.
 */

// This is a valid entry, define
define( 'INTUITION', __DIR__ );

// Local override
if ( file_exists( __DIR__ . '/LocalConfig.php' ) ) {
	include_once __DIR__ . '/LocalConfig.php';
}

// Files
require_once __DIR__ . '/includes/Defines.php';
require_once __DIR__ . '/includes/IntuitionUtil.php';
require_once __DIR__ . '/includes/Intuition.php';

// Backwards compatibility
class_alias( 'IntuitionUtil', 'TsIntuitionUtil' );
class_alias( 'Intuition', 'TsIntuition' );
