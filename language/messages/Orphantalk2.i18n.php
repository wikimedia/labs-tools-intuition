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
	'deletesummary' => 'Cleaning orphaned talk pages via $1',
	'noresults' => 'No orphaned talk pages on this wiki in this namespace matched your settings.',
	'resultslimited' => 'Results were limited to $1 pages.',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool. Note that this is a sequel of an old tool by the same name. "2" is part of the name.',
	'settings-legend' => 'This is the title for the settings box in the input form.',
	'label-wiki' => 'Label in the input form indicating which wiki searched.',
	'limit' => 'The maximum number of results to display. {{Identical|Limit}}',
	'update' => 'Clicking this button will update the form to adapt to the new settings. {{Identical|Update}}',
	'tools-delete' => 'This link goes directly to action=delete to delete this orphaned talk page. Part of the tool-links in the left column.',
	'tools-links' => 'Goes to Special:WhatLinksHere for the orphaned page. Part of the tool-links in the left column.',
	'tools-subject' => 'Goes to the subject page (which never existed or has been deleted) of the orphaned page. Part of the tool-links in the left column.',
	'tools-hist' => 'Goes to the history view of the orphaned page. Part of the tool-links in the left column.',
	'tools-curr' => 'Shows the latest/current edit to this orphaned page. Part of the tool-links in the left column.',
	'tools-globalusage' => 'If the orphan is a Commons file talk page, this link will link to the Specila:GlobalUsage for the File page.',
	'deletesummary' => 'Deletion summary for the "delete"-toollink. $1 is an interwiki link to more info, also a way to promote this tool to others.',
	'noresults' => 'Message displayed if there are no orphaned talk pages found with the current settings.',
	'resultslimited' => "If results were limited by the set' limit, this message is displayed at the bottom of the search results.",
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'tools-delete' => 'изтриване',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'title' => 'পিতৃহীন পাতা আলোচনা ২',
	'settings-legend' => 'সেটিং',
	'select-wiki-first' => '(প্রথমে একটি উইকি নির্বাচন করুন)',
	'hideredirects' => 'পুনর্নির্দেশনাগুলো লুকাও',
	'hidesubpages' => 'উপপাতাগুলো লুকাও',
	'limit' => 'সীমা',
	'page' => 'পাতা',
	'redirect' => 'এটি কী পুনর্নির্দেশ?',
	'output' => 'আউটপুট',
	'update' => 'হালনাগাদ',
	'tools-delete' => 'অপসারণ',
	'tools-links' => 'সংযোগ',
	'tools-subject' => 'বিষয়',
	'tools-hist' => 'ইতিহাস',
	'tools-curr' => 'বর্তমান',
	'tools-globalusage' => 'গ্লোবাল ব্যবহার',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Krinkle
 */
$messages['de'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Einstellungen',
	'select-wiki-first' => '(wähle zuerst ein Wiki)',
	'hideredirects' => 'Weiterleitungen ausblenden',
	'hidesubpages' => 'Unterseiten ausblenden',
	'limit' => 'Limit',
	'page' => 'Seite',
	'redirect' => 'Ist es eine Weiterleitung?',
	'output' => 'Ausgabe',
	'update' => 'Aktualisieren',
	'tools-delete' => 'löschen',
	'tools-links' => 'Links',
	'tools-subject' => 'Betreff',
	'tools-hist' => 'Versionsgeschichte',
	'tools-curr' => 'Aktuelle Version',
	'tools-globalusage' => 'Globale Nutzung',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Configurationes',
	'select-wiki-first' => '(selige primo un wiki)',
	'hideredirects' => 'Celar redirectiones',
	'hidesubpages' => 'Celar subpaginas',
	'limit' => 'Limite',
	'page' => 'Pagina',
	'redirect' => 'Es redirection?',
	'output' => 'Resultato',
	'update' => 'Actualisar',
	'tools-delete' => 'deler',
	'tools-links' => 'ligamines',
	'tools-subject' => 'subjecto',
	'tools-hist' => 'hist',
	'tools-curr' => 'actu',
	'tools-globalusage' => 'uso global',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'settings-legend' => 'Astellungen',
	'select-wiki-first' => "(sicht d'éischt eng Wiki eraus)",
	'page' => 'Säit',
	'tools-delete' => 'läschen',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Поставки',
	'label-wiki' => 'Вики',
	'select-wiki-first' => '(најпрвин изберете вики)',
	'hideredirects' => 'Скриј пренасочувања',
	'hidesubpages' => 'Скриј потстраници',
	'limit' => 'Највеќе до',
	'page' => 'Страница',
	'redirect' => 'Пренасочување е?',
	'output' => 'Извод',
	'update' => 'Поднови',
	'tools-delete' => 'избриши',
	'tools-links' => 'врски',
	'tools-subject' => 'наслов',
	'tools-hist' => 'истор',
	'tools-curr' => 'тек',
	'tools-globalusage' => 'глобална упот.',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'WeesOverleg2',
	'settings-legend' => 'Instellingen',
	'select-wiki-first' => '(selecteer eerst een wiki)',
	'hideredirects' => 'Doorverwijzingen verbergen',
	'hidesubpages' => "Subpagina's verbergen",
	'limit' => 'Limiet',
	'page' => 'Pagina',
	'redirect' => 'Is doorverwijzing?',
	'output' => 'Uitvoer',
	'update' => 'Bijwerken',
	'tools-delete' => 'verwijderen',
	'tools-links' => 'verwijzingen',
	'tools-subject' => 'pagina',
	'tools-hist' => 'gesch.',
	'tools-curr' => 'huidige',
	'tools-globalusage' => 'globaal gebruik',
	'deletesummary' => 'Opruimen van weesoverleg via $1',
	'noresults' => "Er zijn geen weesoverlegpagina's binnen deze naamruimte in deze wiki die aan uw instellingen voldoen.",
	'resultslimited' => "Er worden maximaal $1 pagina's weergegeven.",
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'Орфанток2',
	'settings-legend' => 'Поставке',
	'select-wiki-first' => '(прво изаберите викију)',
	'hideredirects' => 'Сакриј преусмерења',
	'hidesubpages' => 'Сакриј подстранице',
	'limit' => 'Ограничење',
	'page' => 'Страница',
	'redirect' => 'Јесте ограничење?',
	'output' => 'Излаз',
	'update' => 'Ажурирај',
	'tools-delete' => 'обриши',
	'tools-links' => 'везе',
	'tools-subject' => 'наслов',
	'tools-hist' => 'ист',
	'tools-curr' => 'трен',
	'tools-globalusage' => 'употреба',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'title' => 'Usapang Ulila 2',
	'settings-legend' => 'Mga katakdaan',
	'select-wiki-first' => '(pumili muna ng isang wiki)',
	'hideredirects' => 'Itago ang mga pagpapapunta sa iba',
	'hidesubpages' => 'Itago ang kabahaging mga pahina',
	'limit' => 'Hanggahan',
	'page' => 'Pahina',
	'redirect' => 'Isang pagpapapunta sa iba?',
	'output' => 'Kinalabasan',
	'update' => 'Isapanahon',
	'tools-delete' => 'burahin',
	'tools-links' => 'mga kawing',
	'tools-subject' => 'paksa',
	'tools-hist' => 'kasaysayan',
	'tools-curr' => 'kasalukuyan',
	'tools-globalusage' => 'pandaigdigang paggamit',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 */
$messages['zh-hans'] = array(
	'settings-legend' => '设置',
	'select-wiki-first' => '（先选择一个维基）',
	'hideredirects' => '隐藏的重定向',
	'hidesubpages' => '隐藏子页面',
	'limit' => '限制',
	'page' => '页',
	'redirect' => '重定向？',
	'output' => '输出',
	'update' => '更新',
	'tools-delete' => '删除',
	'tools-links' => '链接',
	'tools-subject' => '主题',
	'tools-hist' => '历史',
	'tools-curr' => '值的平均数',
);

