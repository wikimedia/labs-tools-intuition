<?php
/**
 * Interface messages for tool "templatecount"
 *
 * @toolowner jarry
 */

$url = '~jarry/templatecount/';

$messages = array();

/** English
 * @author Jarry1250
 */
$messages['en'] = array(
	'title' => 'Template transclusion count', // Translators: Optional
	'enter-details' => 'Enter details',
	'introduction' => "Type in the name of a template (Wikipedias only at the moment, sorry) and press go. It's as simple as that. There is some caching (remembering of results), but that is unfortunately outside of the control of this tool and its owner.",
	'language-label' => 'Language',
	'namespace-label' => 'Namespace',
	'pagename-label' => 'Page name (excluding namespace)',
	'transclusion-count-label' => 'Number of tranclusions',
	'transclusion-count' => '$1 transclusion(s) found.',
	'error-suggestion' => 'Perhaps you misspelt (or mis-capitalised) the name of the page?',
	'time-label' => 'Time taken to execute command',
);
