<?php
/**
 * Interface messages for the article title grep tool.
 *
 * @toolowner jarry
 */

$url = '//tools.wmflabs.org/grep/';

$messages = array();

/**
 * English
 *
 * @author Jarry
 */
$messages['en'] = array(
	'title' => 'Article title grep (beta)',
	'introduction' => 'This tool shows all article titles that match a regular expression pattern ($1). Searching using a regular expression is resource intensive. If at all possible, remember to use the prefix (^) and ($) suffix indicators.',
	'explanation' => 'explanation',
	'regex' => 'Regular expression',
	'enter-details' => 'Enter details',
	'results' => 'Results',
	'language-label' => 'Language',
	'namespace-label' => 'Namespace',
	'project-label' => 'Project',
	'pattern-label' => 'Pattern',
	'redirects-label' => 'Include redirects',
	'limit-label' => 'Limit the display to the first 100 results',
	'error-zeroresults' => 'There are no pages in that namespace with titles matching your regular expression.',
	'match-count' => '{{PLURAL:$1|$1 page|$1 pages}} matched your regular expression.'
);

/** Message documentation (Message documentation)
 * @author Jarry1250
 */
$messages['qqq'] = array(
	'title' => 'The tool\'s title (name), used the main heading. grep is a technical term and cannot be translated',
	'introduction' => 'The introductory paragraph explaining the tool\'s use. $1 is a link to a Wikipedia article about regular expressions, with translatable link text and link target',
	'explanation' => 'explanation',
	'regex' => 'Used as part of a link target. Should be set to the name of a Wikipedia article describing regular expressions',
	'enter-details' => 'Subheading introducing a series of input boxes',
	'results' => 'Subheading',
	'language-label' => 'Interface input label. Refers to a language code, rather than a language name.',
	'namespace-label' => 'Interface input label. Refers to a Wikipedia namespace',
	'project-label' => 'Interface input label. Refers to a Wikipedia project',
	'pattern-label' => 'Interface input label. Technical term used in relation to regular expressions.',
	'redirects-label' => 'Interface input label',
	'limit-label' => 'Interface input label',
	'error-zeroresults' => 'Error message',
	'match-count' => 'Appears above a list of results. $1 is a whole number (integer) greater than or equal to 1'
);
