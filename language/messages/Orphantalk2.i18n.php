<?php
/**
 * Interface messages for tool "OrphanTalk2".
 *
 * @toolowner krinkle
 */

$url = '~krinkle/OrphanTalk2/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Settings',
	'label-wiki' => 'Wiki', // optional
	'select-wiki-first' => '(select a wiki first)',
	'hideredirects' => 'Hide redirects',
	'hidesubpages' => 'Hide subpages',
	'limit' => 'Limit',
	'page' => 'Page',
	'redirect' => 'Is redirect?',
	'output' => 'Output',
	'update' => 'Update',
	'tools-delete' => 'delete',
	'tools-links' => 'links',
	'tools-subject' => 'subject',
	'tools-hist' => 'hist',
	'tools-curr' => 'curr', 
	'tools-globalusage' => 'globalusage', 
);

/**
 * Documentation
 *
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool. Note that this is a sequel of an old tool by the same name. "2" is part of the name.',
	'settings-legend' => 'This is the title for the settings box in the input form.',
	'label-wiki' => 'Label in the input form indicating which wiki searched.',
	'update' => 'Clicking this button will update the form to adapt to the new settings. {{Identical|Update}}',
	'limit' => 'The maximum number of results to display. {{Identical|Limit}}',
	'tools-delete' => 'This link goes directly to action=delete to delete this orphaned talk page. Part of the tool-links in the left column.',
	'tools-links' => 'Goes to Special:WhatLinksHere for the orphaned page. Part of the tool-links in the left column.',
	'tools-subject' => 'Goes to the subject page (which never existed or has been deleted) of the orphaned page. Part of the tool-links in the left column.',
	'tools-hist' => 'Goes to the history view of the orphaned page. Part of the tool-links in the left column.',
	'tools-curr' => 'Shows the latest/current edit to this orphaned page. Part of the tool-links in the left column.', 
	'tools-globalusage' => 'If the orphan is a Commons file talk page, this link will link to the Specila:GlobalUsage for the File page.',
);

/**
 * Nederlands
 *
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'WeesOverleg2',
	'settings-legend' => 'Instellingen',
	'output' => 'Uitvoer',
	'update' => 'Bijwerken',
	'tools-delete' => 'verwijderen',
	'tools-links' => 'verwijzingen',
	'tools-subject' => 'pagina',
	'tools-hist' => 'gesch.',
	'tools-curr' => 'huidige', 
	'tools-globalusage' => 'globaal gebruik', 
);

/**
 * Deutsch
 *
 * @author Krinkle
 */
$messages['de'] = array(
	'settings-legend' => 'Einstellungen',
);
