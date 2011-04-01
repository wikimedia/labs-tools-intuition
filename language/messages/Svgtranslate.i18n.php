<?php
/**
 * Interface messages for tool "svgtranslate"
 *
 * @toolowner jarry
 */

/**
 * English
 *
 * @author Jarry
 */
$messages['en'] = array(
	'title' => 'SVG Translate', // Do not translate
	'error-tryagain' => '$1 Hit your browser\'s back button to retry.',
	'error-nothing' => 'Nothing to translate.',
	'error-notsvg' => 'Not an SVG file.',
	'error-unexpected' => 'An unexpected error occured.',
	'error-notfound' => 'The SVG file could not be retrieved from the URL provided.',
	'begin-translation' => 'Begin translation',
	'th-original' => 'Original',
	'th-translation' => 'Translation',
	'th-language' => 'Language',
	'preview' => 'Preview',
	'translate' => 'Translate',
	'translate-instructions' => 'Inputs are accepted as either Filenames (eg. "$1") or full-url (eg. "$2"). If the first option is used, Wikimedia Commons will be assumed as source. To translate an SVG from another site or wiki, you must use the full-url format.',
	'format-filename-example' => 'File:Planetary transit.svg', // Do not translate
	'format-fullurl-example' => 'http://upload.wikimedia.org/wikipedia/commons/8/8a/Planetary_transit.svg', // Do not translate
	'svginput-label' => 'SVG File',
	'stats-footer' => 'This tool has been used to translate approximately $1 files since $2.',
);

/**
 * Documentation
 *
 * @author Krinkle
 * @author Jarry
 */
$messages['qqq'] = array(
	'title' => "{{Notranslate}}\n\nThe title of the tool.",
	'begin-translation' => 'This is the opening heading on the home page of the tool.',
	'th-original' => 'Heading of the "Original"-column.',
	'th-translation' => 'Heading of the "Translation"-column.',
	'th-language' => 'Label for the language selection dropdown box. {{Identical|Language}}',
	'preview' => '{{Identical|Preview}}',
	'translate' => '{{Identical|Translate}}',
	'translate-instructions' => 'Intro paragraph in the translation process.',
	'format-filename-example' => '{{Notranslate}}',
	'format-fullurl-example' => '{{Notranslate}}',
	'svginput-label' => 'The label for main SVG filename input.',
);

/**
 * Nederlands
 *
 * @author Krinkle
 * @author Gerard Meijssen
 */
$messages['nl'] = array(
	'begin-translation' => 'Start de vertaling',
	'th-original' => 'Origineel',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'preview' => 'Voorvertoning',
	'translate' => 'Vertaal',
	'translate-instructions' => 'Bestandsnamen (bijv. "$1") of volledige URL (bijv. "$2") invoeren. In het eerste geval wordt Wikimedia Commons als bron aangenomen. Om een SVG van een andere site te vertalen, gebruik dan het tweede formaaat.',
	'svginput-label' => 'SVG Bestand',
);
