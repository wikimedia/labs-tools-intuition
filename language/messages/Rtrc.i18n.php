<?php
/**
 * Interface messages for RTRC.
 *
 * @toolowner krinkle
 */

$url = 'https://github.com/Krinkle/mw-gadget-rtrc';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'Real-Time Recent Changes',
	'apply' => 'Apply',
	'asc' => 'Asc',
	'autodiff-disable-masspatrol' => 'You are disabling AutoDiff, MassPatrol is still active and requires AutoDiff to be on. Are you sure you want to disable AutoDiff ? (MassPatrol will be disabled if you do so)',
	'autodiff_loadfromtop' => 'From top',
	'changelog' => 'Whats New',
	'clear' => 'clear',
	'currentedit' => 'Currently selected edit',
	'cvn-adder' => 'Adder',
	'cvn-adder-empty' => 'Unknown',
	'cvn-reason' => 'Reason',
	'cvn-reason-empty' => 'No reason found',
	'desc' => 'Desc',
	'documentation' => 'Documentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Click here for more information',
	'lastupdate-cvn' => 'Last update: $1',
	'lastupdate-rc' => 'Last update: $1',
	'limit' => 'Limit',
	'masspatrol-enable-autodiff' => 'You are enabling MassPatrol, which needs AutoDiff. Do you want to enable AutoDiff ? (If not, MassPatrol will stay off)',
	'masspatrol_userfilterconfirm' => 'You are clearing the user filter, MassPatrol is still active but requires atleast one filter to be on. Are you sure you want to clear the user filter ? (MassPatrol will be disabled if you do so)',
	'months' => 'January, February, March, April, May, June, July, August, September, October, November, December',
	'mypatrollog' => 'my patrol log',
	'namespace' => 'Namespace',
	'nomatches' => 'No results matched your settings',
	'order' => 'Order',
	'permalink' => 'Permalink to current settings',
	'showAnonOnly' => 'Anonymous only',
	'showUnpatrolledOnly' => 'Unpatrolled only',
	'skippededit' => 'Skipped edit',
	'time-from' => 'From',
	'time-untill' => 'Untill',
	'timeframe' => 'Timeframe',
	'type' => 'Type',
	'typeEdit' => 'Edits',
	'typeNew' => 'New pages',
	'userfilter' => 'User filter',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
	'apply' => 'Button to apply the settings',
	'asc' => 'Label of the radio button that sets sort order to ascending',
	'autodiff-disable-masspatrol' => 'Confirmation dialog for when the user disables AutoDiff while MassPatrol is still active. RTRC will automatically disable MassPatrol.',
	'autodiff_loadfromtop' => 'Label of switch to control whether AutoDiff should pick from the top of the list (instead of the bottom)',
	'changelog' => 'Label of link to the page about RTRC software updates.',
	'clear' => 'Button to clear (or reset) a particular input field',
	'currentedit' => 'Example text in the legend to show what a currently selected edit looks like',
	'cvn-adder' => 'Label of the user that added this item to the CVN database',
	'cvn-adder-empty' => 'Placeholder text for when the author is unknown.

See also:
* {{msg-intuition|rtrc-cvn-adder}}',
	'cvn-reason' => 'Label of the comment left by the user who added this item to the CVN database',
	'cvn-reason-empty' => 'Placeholder text when no reason was found

See also:
* {{msg-intuition|rtrc-cvn-reason}}',
	'desc' => 'Label of the radio button that sets the sort order to descending',
	'documentation' => 'Label of the link to the documentation page',
	'filter' => 'Section label for various change filters.

See also:
* {{msg-intuition|rtrc-showAnonOnly}}
* {{msg-intuition|rtrc-showUnpatrolledOnly}}',
	'helpicon-tooltip' => 'Tooltip for the Help questionmark icon.',
	'lastupdate-cvn' => 'Foot note showing when the CVN database was last updated.

* $1: Timestamp',
	'lastupdate-rc' => 'Foot note showing when the list of changes was last refreshed from the server.

* $1: Timestamp',
	'limit' => 'Label of dropdown menu for changing how many results to show (maximum)',
	'masspatrol-enable-autodiff' => 'Confirmation dialog for when the user enables MassPatrol, while AutoDiff is not yet enabled. RTRC will automatically enable AutoDiff.',
	'months' => 'Comma-separated list of the 12 different months in a year',
	'mypatrollog' => 'Label of the link to your patrol log',
	'namespace' => 'Label of dropdown menu for filtering by namespace',
	'nomatches' => 'Placeholder text in place of the changes list when the query returned no results',
	'order' => 'Section label for the sort order radio buttons',
	'permalink' => 'Label of the permalink that will start RTRC with the current settings',
	'showAnonOnly' => 'Label of the checkbox to only show changes by anonymous users',
	'showUnpatrolledOnly' => 'Label of the checkbox to only show unpatrolled changes',
	'skippededit' => 'Exampel text in the legend to show what a skipped edit looks like',
	'time-from' => 'Label of input field containing the start date of the time range filter',
	'time-untill' => 'Label of input field containing the end date of the time range filter',
	'timeframe' => 'Label of time range filter',
	'type' => 'Section label for the change type checkboxes ',
	'typeEdit' => 'Label of the checkbox to include changes that edit existing pages',
	'typeNew' => 'Label of the checkbox to include changes that create new pages',
	'userfilter' => 'Label of username filter',
	'userfilter-disable-masspatrol' => 'Confirmation dialog for when the user clears the user filter, while MassPatrol is still active. RTRC will automatically disable MassPatrol.',
);
