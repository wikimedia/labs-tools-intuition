<?php
/**
 * Interface messages for tool "mc8".
 *
 * @toolowner Microchip08
 */

$url = '//tools.wmflabs.org/mc8/';

$messages = array();

/**
 * English
 *
 * @author Microchip08
 */
$messages['en'] = array(
	'crossredirs' => 'Cross-namespace redirects',
	'crossredirs-desc' => '<a href="$1">Cross namespace redirects</a>: a list of mainspace to userspace redirects on an arbitrary Wikimedia wiki.',
	'crossredirs-destination' => 'Destination',
	'crossredirs-intro' => 'The following is a list of $1 mainspace &rarr; userspace {{PLURAL:$1|redirect|redirects}} on $2.',
	'crossredirs-origin' => 'Origin',
	'dashboard-desc' => '<a href="$1">Dashboard</a>: the current state of English Wikinews at a glance.',
	'dashboard-developing' => 'Developing',
	'dashboard-disputed' => 'Disputed',
	'dashboard-noscript' => 'Enable JavaScript to get started',
	'dashboard-pendingreview' => 'Pending Review',
	'dashboard-pendingreview-none' => '(No articles to review)',
	'dashboard-published' => 'Published',
	'dashboard-underreview' => 'Under Review',
	'dashboard-updatenote' => '<a href="$">Wikinews</a> updates automatically every $2 seconds.</a>',
	'db-error' => "There was a problem when connecting to the database. The error given was \"$1\".",
	'db-name' => 'Database name',
	'db-nocredentials' => 'Unable to get database credentials.',
	'db-nodatabase' => "$1 is not a valid database name.\nValid examples include: enwiki, dewikiquote, commonswiki\nA list can be found at https://noc.wikimedia.org/conf/highlight.php?file=all.dblist",
	'db-queryfail' => "The database query failed.",
	'error-contact' => 'You may wish to attempt your request again. If you continue having problems, contact <a href="$1">$2</a> or open an <a href="$3">issue on Github</a>.',
	'error-heading' => 'Error encountered.',
	'error-intro' => 'A problem was encountered whilst processing that last directive.',
	'name' => 'mc8tools',
	'poweredby' => 'Powered by Wikimedia Tool Labs',
	'recentcats' => 'Recent categories',
	'recentcats-desc' => '<a href="$1">Recent Categories</a>: a list of recently created categories on an arbitrary Wikimedia wiki.',
	'recentcats-intro' => 'The following is a list of newly created categories on <strong>$1</strong>.',
	'source' => 'Source',
	'source-desc' => 'The source for the tools is available on <a href="$1">Github</a> under the <a href="$2">ISC license</a>.',
	'tools' => 'Tools',
	'topiccat-desc' => '<a href="$1">Topic Cat</a>: a tool to assist in the creation of {{<a href="$2">topic cat</a>}} templates on English Wikinews.',
);

/**
 * Message documentation
 *
 * @author Microchip08
 */
$messages['qqq'] = array(
	'crossredirs' => 'The title and header of the cross-namespace redirect tool.',
	'crossredirs-desc' => 'The description, used on the home page, of the cross-namespace redirect tool.\n\nParameters:\n* $1: The URL of the tool.',
	'crossredirs-destination' => 'The header of the table of the cross-namespace redirect tool, describing the page that the redirect redirects to.',
	'crossredirs-intro' => 'The introductory paragraph of the cross-namespace redirect tool, describing what the table lists.\n\nParameters:\n* $1 The number of cross-namespace redirects listed.\n* $2 The current database name.',
	'crossredirs-origin' => 'The header of the table of the cross-namespace-redirect tool, describing the page that the redirect redirects from.',
	'dashboard-desc' => 'The description, used on the homepage, of the Wikinews dashboard.\n\nParameters:\n* $1: The URL of the tool.',
	'dashboard-developing' => 'The header of the dashboard list containing developing pages on English Wikinews.',
	'dashboard-disputed' => 'The header of the dashboard list containing disputed pages on English Wikinews.',
	'dashboard-noscript' => 'The message displayed to a user with JavaScript disabled when accessing the dashboard.',
	'dashboard-pendingreview' => 'The header of the dashboard list containing articles that are pending review by another user.',
	'dashboard-pendingreview-none' => 'The message shown when there are currently no articles on English Wikinews pending review by another user.',
	'dashboard-published' => 'The header of the dashboard list containing the most recent ten published articles on English Wikinews.',
	'dashboard-underreview' => 'The header of the dashboard list containing the articles currently under review by another user.',
	'dashboard-updatenote' => 'The footer of the dashboard, informing the user of the interval between updates.\n\nParameters:\n* $1: the URL of the project.\n* $2: The update interval, in seconds.',
	'db-error' => 'The message displayed when there is an error connecting to the database. \n\nParameters:\n* $1: The error message.',
	'db-name' => 'The placeholder for the text box prompting the user to select a database name (such as <tt>commonswiki</tt>).',
	'db-nocredentials' => 'The error message displayed when the tool is unable to access its own credentials in order to connect to the database.',
	'db-nodatabase' => 'The error message displayed when an invalid database name is chosen, giving examples of what a valid name should be.\n\nParameters:\n* $1 the database name used.\n\nText is parsed in a <tt><nowiki><pre></nowiki></tt> block, so whitespace is preserved.',
	'db-queryfail' => 'The error message displayed when the tool encounters an error processing a database query.',
	'error-contact' => 'The message displayed at the footer of the error page, telling the user to try again or alternatively contact the tool maintainer.\n\nParameters:\n* $1 The URL of the user page of the tool maintainer.\n* $2 The user name of the tool maintainer.\n* $3: The issues page of the tool, on Github.',
	'error-heading' => 'The heading of the error page.',
	'error-intro' => 'A generic message stating that an error has occured, displayed on the error page. It precedes a more specific message, if there is one.',
	'name' => 'The name of the tool family.',
	'poweredby' => 'A message proclaiming that the tool is hosted by Wikimedia Tool Labs, used whenever appropriate.',
	'recentcats' => 'The header and title of the recent categories tool, used in the H1 and title element.',
	'recentcats-desc' => 'The description of the recent categories tool, used on the home page.\n\nParameters:\n* $1: The URL of the recent changes tool.',
	'recentcats-intro' => 'The introductory message to the recent changes tool, explaining that the list that follows is that of recently created categories.\n\nParameters:\n* $1: The current database name.',
	'source' => 'The H2 used on the homepage, informing the user that the next section pertains to the source code of the tools.',
	'source-desc' => 'A message explaining that the source code for the tools is freely available under the license of the Internet Systems Consortium.\n\nParameters:\n* $1: The URL on Github where the source code can be obtained.\n* $2: The URL to the text of the license.',
	'tools' => 'The H2 used on the homepage, informing the user that the next section pertains to the tools hosted therein.',
	'topiccat-desc' => 'The description of the topic cat tool, used on the homepage.\n\nParameters:\n* $1: The URL of the topic cat tool.\n$2: The link to the topic cat tool, on wiki.'
);
