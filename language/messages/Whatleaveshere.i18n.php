<?php
/**
 * Interface messages for WhatLeavesHere.
 *
 * @toolowner krinkle
 */

$url = 'https://github.com/Krinkle/mw-gadget-whatleaveshere';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'What leaves here',
	'title-leaveshere' => 'Links that leave from "$1"',
	'sub-leaveshere' => 'The following pages link from $1',
	'label-page' => 'Page',
	'label-namespace' => 'Namespace',
	'label-limit' => 'Limit',
	'button-submit' => 'Go',
	'noleaveshere' => 'Nothing links from $1',
	'link-whatleaveshere' => 'What leaves here',
	'tooltip-whatleaveshere' => 'List of everything that links from here',
	'whatlinkshere' => 'What links here',
	'whatlinkshere-whatleaveshere' => 'What leaves here?',
	'istemplate' => 'transclusion',
	'isfile' => 'file link',
	'linksearch' => 'LinkSearch',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => 'Title heading of [[Special:WhatLeavesHere]] and link to it from [[Special:SpecialPages]].
{{Identical|Whatleaveshere}}',
	'title-leaveshere' => 'Title heading of [[Special:WhatLeavesHere]] when viewing results for a specific page.

* $1 is the name of the associated page.',
	'sub-leaveshere' => 'Used below the heading on [[Special:WhatLeavesHere]].

* $1 is the name of the associated page',
	'label-page' => 'Label of input field for page name.
{{Identical|Page}}',
	'label-namespace' => 'Label of dropdown menu for namespace.
{{Identical|Namespace}}',
	'label-limit' => 'Label of dropdown menu for number of results.
{{Identical|Limit}',
	'button-submit' => 'Submit button of form.
{{Identical|Go}}',
	'noleaveshere' => 'Used on [[Special:WhatLeavesHere]] when there are no outgoing links found.',
	'link-whatleaveshere' => 'Text of link to [[Special:WhatLeavesHere]] in the sidebar.
{{Identical|Whatleaveshere}}',
	'tooltip-whatleaveshere' => 'Tooltip of link to [[Special:WhatLeavesHere]] in the sidebar.',
	'whatlinkshere' => 'Link to [[Special:WhatLinksHere]] from form legend of [[Special:WhatLeavesHere]].
{{Identical|Whatlinkshere}}',
	'whatlinkshere-whatleaveshere' => 'Link to [[Special:WhatLeavesHere]] from form legend of [[Special:WhatLinksHere]].
{{Identical|Whatleaveshere}}',
	'istemplate' => 'Used as indication that this outgoing link is a transclusion.
{{Identical|Transclusion}}',
	'isfile' => 'Used as indication that this outgoing link is embedding a file.
{{Identical|File link}}',
	'linksearch' => 'Link to [[Special:LinkSearch]] to find other pages with the same outgoing external link.',
);
