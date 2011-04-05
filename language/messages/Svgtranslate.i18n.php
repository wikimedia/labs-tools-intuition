<?php
/**
 * Interface messages for tool "svgtranslate"
 *
 * @toolowner jarry
 */

$url = '~jarry/svgtranslate/';

/**
 * English
 *
 * @author Jarry
 */
$messages['en'] = array(
	'title' => 'SVG Translate', // Optional
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
	'title' => "The title of the tool.",
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
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'SVG-vertaling',
	'begin-translation' => 'Vertalen',
	'th-original' => 'Origineel',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'preview' => 'Voorvertoning',
	'translate' => 'Vertaal',
	'translate-instructions' => 'Bestandsnamen (bijvoorbeeld "$1") of volledige URL (bijvoorbeeld "$2") invoeren. In het eerste geval wordt Wikimedia Commons als bron gebruikt. Gebruik het tweede formaat om een SVG-bestand van een andere site te vertalen.',
	'svginput-label' => 'SVG-bestand',
);
