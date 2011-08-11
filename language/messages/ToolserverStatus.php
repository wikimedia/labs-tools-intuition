<?php
/**
 * Interface messages for the ToolserverStatus class.
 *
 * @toolowner platonides
 */

/* This is a library, there is no public url */
$url = null;

$messages = array();

/**
 * English
 *
 * @author Platonides
 */
$messages['en'] = array(
	'toolserver-status-ok' => 'There are no problems in database cluster $1 $2',
	'toolserver-status-info' => 'Notice for users of cluster $1: $2',
	'toolserver-status-warn' => 'Warning for users of cluster $1: $2',
	'toolserver-status-down' => 'The database cluster $1 has been temporarily shutdown. $2',
	'toolserver-status-erro' => 'The database cluster $1 is down. $2',
	'toolserver-status-unknown' => 'Unknown status of cluster $1',
	'toolserver-status-missing' => 'Cluster $1 does not exist',

	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warn',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Unknown',
	'toolserver-status-short-missing' => '$1: Missing',
);

/** 
 * Message documentation (Message documentation)
 * @author Platonides
 */
$messages['qqq'] = array(
	'toolserver-status-ok' => 'Message formatting for when the cluster status is \'ok\'. Params: cluster ($1) and informative text ($2), which should be empty',
	'toolserver-status-info' => 'Message formatting for when the cluster status is \'info\'. Params: cluster ($1) and informative text ($2)',
	'toolserver-status-warn' => 'Message formatting for when the cluster status is \'warn\'. Params: cluster ($1) and informative text ($2)',
	'toolserver-status-down' => 'Message formatting for when the cluster status is \'down\' (eg. a planned maintenance). Params: cluster ($1) and informative text ($2)',
	'toolserver-status-erro' => 'Message formatting for when the cluster status is \'erro\' (eg. a unplanned maintenance). Params: cluster ($1) and informative text ($2)',
	'toolserver-status-unknown' => 'Message formatting for when the status file doesn\'t deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster ($1) and empty informative text ($2)',
	'toolserver-status-missing' => 'Message formatting for when the cluster name doesn\'t exist (invalid name passed by the calling program)',

	'toolserver-status-short-ok' => 'A short status text for when the status is \'ok\'. Params: cluster name ($1)',
	'toolserver-status-short-info' => 'A short status text for when the status is \'info\'. Params: cluster name ($1)',
	'toolserver-status-short-warn' => 'A short status text for when the status is \'warn\'. Params: cluster name ($1)',
	'toolserver-status-short-down' => 'A short status text for when the status is \'down\'. Params: cluster name ($1)',
	'toolserver-status-short-erro' => 'A short status text for when the status is \'erro\'. Params: cluster name ($1)',
	'toolserver-status-short-unknown' => 'A short status text for when the status file doesn\'t deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster name ($1)',
	'toolserver-status-short-missing' => 'A short status text for when the cluster name doesn\'t exist (invalid name passed by the calling program)',
);

