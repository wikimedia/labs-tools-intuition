<?php
/**
 * LocalConfig for Toolserver instance at https://toolserver.org/~intuition/.
 */

function intuitionHookInit( $intuition ) {

	// Hide certain tools for now
	$hiddenTools = array(
		'Monumentsapi',
	);

	foreach ( $hiddenTools as $hideTool ) {
		unset( $intuition->registeredTextdomains[$hideTool] );
	}
}
