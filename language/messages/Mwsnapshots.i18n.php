<?php
/**
 * Interface messages for tool "mwSnapshots".
 *
 * @toolowner krinkle
 */

$url = '~krinkle/mwSnapshots/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Error',
	'title-updatelog' => 'Update log',
	'updatelog-intro' => 'The update script is scheduled to run every hour. Below is the console output of the last run.',
	'updatelog-active' => 'The update script is currently running. Come back later for the complete log.',
	'title-downloading' => 'Downloading: $1',
	'downloading-intro' => 'Your download will start shortly...',
	'downloading-directlink' => 'Problems with the download?  Please use this direct link.',
	'err-snapshotindex' => 'Snapshot index temporarily unavailable. Please try again later.',
	'err-invalid-repo' => 'Unknown repository: "$1".',
	'err-invalid-branch' => 'Unknown branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'The snapshots are generated every few hours. While generating the snapshot for "$1", an error occurred. Please try again later.',
	'err-noupdatelog' => 'No update log was found.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Browse repository',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => 'Get it!',
	'updatelog-link' => 'update log',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'File size',
	'tablehead-hash' => 'Hash',
);


/** Message documentation (Message documentation)
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title-overview' => 'Heading of overview page listing all repositories and branches',
	'title-error' => 'Heading of page if action failed',
	'title-downloading' => 'Heading of page if a file is going to be downloaded

* $1: File name',
	'downloading-intro' => 'Displayed under the heading, the download will start in a second.',
	'downloading-directlink' => 'Clickable link shown under the heading, links to the file directly',
	'err-snapshotindex' => 'If the information manifest (Index) can not be found on the server, this error is shown.',
	'err-invalid-repo' => '

* $1: Repository name',
	'err-invalid-branch' => '

* $1: Branch name
* $2: Repository name',
	'err-nosnapshot' => 'The snapshots are generated every few hours. If during the generation the selected branch had a problem. Then trying to download it will show this error.

* $1: Branch name',
);
