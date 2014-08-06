<?php
/**
 * Interface messages for the OrphanTalk tool.
 *
 * @toolowner krinkle
 */

$url = '//tools.wmflabs.org/orphantalk/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Find orphaned talk pages.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(select a wiki first)',
	'hideredirects' => 'Hide redirects',
	'hidesubpages' => 'Hide subpages',
	'limit' => 'Limit',
	'page' => 'Page',
	'tooltip-redirect' => 'This page is a redirect',
	'output' => 'Output',
	'update' => 'Update',
	'tools-view' => 'View',
	'tools-delete' => 'Delete',
	'tools-links' => 'What links here',
	'tools-subject' => 'Subject page',
	'tools-hist' => 'View history',
	'tools-curr' => 'Last change',
	'tools-globalusage' => 'File usage',
	'deletesummary' => '$1: Orphaned talk page',
	'noresults' => 'No orphaned talk pages on this wiki in this namespace matched your settings.',
	'resultslimited' => 'Results were limited to $1 pages.',
);

/** Message documentation (Message documentation)
 * @author Dbc334
 * @author EugeneZelenko
 * @author Krinkle
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.',
	'description' => 'Short caption that describes the tool, used in the primary heading on every page as tag line.',
	'label-wiki' => 'Label in the input form for the dropdown menu with different Wikimedia wikis, of which one must be chosen.

{{Identical|Wiki}}',
	'select-wiki-first' => "This message is displayed in the dropdown menu for the namespace selector if the user didn't choose a wiki yet. Include the parenthesis.",
	'hideredirects' => 'Label for a checkbox in the input form indicating whether redirect pages should be included in the results.
{{Identical|Hide redirect}}',
	'hidesubpages' => 'Label for a checkbox in the input form indicating whether subpages should be included in the results.',
	'limit' => 'Label in front of a dropdown menu. Affects the maximum number of results to display. {{Identical|Limit}}',
	'page' => 'Table heading for the "Page"-column in the results.
{{Identical|Page}}',
	'tooltip-redirect' => 'Tooltip for link to a redirect page.',
	'output' => 'Heading above the results output of the search query.
{{Identical|Output}}',
	'update' => 'Clicking this button will update the form to adapt to the new settings. {{Identical|Update}}',
	'tools-view' => 'Link to the regular page view on the wiki.
{{Identical|Read}}',
	'tools-delete' => 'Link to action=delete to delete this orphaned talk page.
{{Identical|Delete}}',
	'tools-links' => 'Link to [[Special:WhatLinksHere]] for the orphaned talk page.
{{Identical|Whatlinkshere}}',
	'tools-subject' => 'Link to the subject page of the orphaned talk page.',
	'tools-hist' => 'Link to action=history of the orphaned talk page.
{{Identical|View history}}',
	'tools-curr' => 'Link the diff of the last edit to this orphaned talk page.
{{Identical|Last change}}',
	'tools-globalusage' => 'Link to [[Special:GlobalUsage]] for the associated File page (only if the talk page is a File talk page on Commons).
{{Identical|File usage}}',
	'deletesummary' => 'Deletion summary for the "delete"-toollink.

Parameters:
* $1: An interwiki link to documentation of OrphanTalk (labeled with {{msg-intuition|orphantalk2-title}}).',
	'noresults' => 'Message displayed if there are no orphaned talk pages found with the current settings.',
	'resultslimited' => "If results were limited by the set' limit, this message is displayed at the bottom of the search results.",
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'select-wiki-first' => "(kies eers 'n wiki)",
	'hideredirects' => 'Versteek aansture',
	'hidesubpages' => 'Versteek subbladsye',
	'limit' => 'Limiet',
	'page' => 'Bladsy',
	'redirect' => 'Is aanstuur?',
	'output' => 'Afvoer',
	'update' => 'Opdateer',
	'tools-delete' => 'skrap',
	'tools-links' => 'skakels',
	'tools-subject' => 'onderwerp',
	'tools-hist' => 'gesk.',
	'tools-curr' => 'huidige',
	'resultslimited' => 'Resultate is beperk tot $1 bladsye.',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 * @author أحمد
 */
$messages['ar'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(اختر ويكي أولا)',
	'hideredirects' => 'أخفِ التحويلات',
	'hidesubpages' => 'أخفِ الصفحات الفرعية',
	'limit' => 'حد',
	'page' => 'الصفحة',
	'redirect' => 'تحويلة؟',
	'output' => 'مخرج',
	'update' => 'حدّث',
	'tools-delete' => 'احذف',
	'tools-links' => 'روابط',
	'tools-subject' => 'موضوع',
	'tools-hist' => 'تاريخ',
	'tools-curr' => 'حالي',
	'tools-globalusage' => 'استخدام عام',
	'deletesummary' => 'تنظيف صفحات النقاش اليتيمة عن طريق $1',
	'noresults' => 'لا توجد صفحات نقاش يتيمة في هذا الويكي في فضاء التسمية هذا مما يطابق إعداداتك.',
	'resultslimited' => 'حُدِّدَ عدد النتائج بما لا يزيد على $1 صفحات.',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'page' => 'ܦܐܬܐ',
	'redirect' => 'ܐܪܐ ܨܘܝܒܐ ܐܝܬܘܗܝ؟',
	'output' => 'ܡܦܩܢܐ',
	'update' => 'ܚܕܬ',
	'tools-delete' => 'ܫܘܦ',
	'tools-links' => 'ܐܣܘܪ̈ܐ',
	'tools-subject' => 'ܡܠܘܐܐ',
	'tools-hist' => 'ܬܫܥܝܬܐ',
	'tools-curr' => 'ܗܫܝܐ',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'limit' => 'সীমা',
	'page' => 'পৃষ্ঠা',
	'output' => 'আউটপুট',
	'update' => 'আপডেট',
	'tools-delete' => 'বিলোপন (ডিলিট)',
	'tools-links' => 'সংযোগ (লিঙ্ক)',
	'tools-subject' => 'বিষয়',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(primero seleiciona una wiki)',
	'hideredirects' => 'Anubrir redireiciones',
	'hidesubpages' => 'Anubrir subpáxines',
	'limit' => 'Llímite',
	'page' => 'Páxina',
	'redirect' => '¿Ye redireición?',
	'output' => 'Salida',
	'update' => 'Anovar',
	'tools-delete' => 'desaniciar',
	'tools-links' => 'enllaces',
	'tools-subject' => 'asuntu',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'usuglobal',
	'deletesummary' => "Llimpiando páxines d'alderique güérfanes con $1",
	'noresults' => "Denguna páxina d'alderique d'esta wiki nesti espaciu de nomes concasa coles tos preferencies.",
	'resultslimited' => 'Los resultaos tan llendaos a $1 páxines.',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'limit' => 'Limit',
	'page' => 'Səhifə',
	'tools-delete' => 'sil',
	'tools-links' => 'keçidlər',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'title' => 'یئتیم‌دانیشیق۲',
	'select-wiki-first' => '(ایلکجه بیر ویکی سئچین)',
	'hideredirects' => 'یول‌لاندیرمالاری گیزلت',
	'hidesubpages' => 'آلت‌صحیفه‌لری گیزلت',
	'limit' => 'سینیر',
	'page' => 'صحیفه',
	'redirect' => 'یول‌لاندیرمادیرمی؟',
	'output' => 'چیختی',
	'update' => 'گونجل‌له',
	'tools-delete' => 'سیل',
	'tools-links' => 'باغلانتیلار',
	'tools-subject' => 'قونو',
	'tools-hist' => 'گئچمیش',
	'tools-curr' => 'ایندی',
	'tools-globalusage' => 'سراسری ایستیفاده',
	'deletesummary' => '$1 ایله یئتیم اولموش دانیشیق صحیفه‌لری سیلینیر',
	'noresults' => 'سیزین تنظیملرینیزله بو ویکی‌ده بو آدفضاسیندا بیر یئتیم اولموش دانیشیق صحیفه‌سی تاپیلمادی.',
	'resultslimited' => 'نتیجه‌لر $1 صحیفه‌یه محدودلاشیبلار.',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(тәүҙә вики һайлағыҙ)',
	'hideredirects' => 'Йүнәлтеүҙәрҙе йәшерергә',
	'hidesubpages' => 'Эске биттәрҙе йәшерергә',
	'limit' => 'Сикләү',
	'page' => 'Бит',
	'redirect' => 'Был йүнәлтеүме?',
	'output' => 'Һөҙөмтә',
	'update' => 'Яңыртырға',
	'tools-delete' => 'юйырға',
	'tools-links' => 'һылтанмалар',
	'tools-subject' => 'тема',
	'tools-hist' => 'тарих',
	'tools-curr' => 'ағым.',
	'tools-globalusage' => 'дөйөм ҡулланыу',
	'deletesummary' => 'Йәтим-биттәрҙең фекер алышыу битен  $1 аша таҙартырға',
	'noresults' => 'Был викила һеҙ һораған исемдәр арауығында йәтим-биттәрҙең фекер алышыу биттәре табылманы.',
	'resultslimited' => 'Йомғаҡлау $1 бит менән сикләнде.',
);

/** Belarusian (беларуская)
 * @author Artificial123
 * @author LexArt
 */
$messages['be'] = array(
	'title' => 'OrphanTalk2', # Fuzzy
	'label-wiki' => 'Вікі',
	'select-wiki-first' => '(спачатку выберыце вікі)',
	'hideredirects' => 'Схаваць перанакіраванні',
	'hidesubpages' => 'Схаваць падстаронкі',
	'limit' => 'Ліміт',
	'page' => 'Старонка',
	'tooltip-redirect' => 'Гэта старонка-перасылка',
	'output' => 'Вывад',
	'update' => 'Абнавіць',
	'tools-view' => 'Прагляд',
	'tools-delete' => 'Выдаліць',
	'tools-links' => 'спасылкі', # Fuzzy
	'tools-subject' => 'Старонка праекту',
	'tools-hist' => 'Паказаць гісторыю',
	'tools-curr' => 'Апошняя змена',
	'tools-globalusage' => 'Выкарыстанне файла',
	'deletesummary' => 'Выдаленне абмеркаванняў-сірот праз $1', # Fuzzy
	'noresults' => 'У гэтай вікі і ў гэтай прасторы назваў абмеркаванняў-сірот няма.',
	'resultslimited' => 'Вынік абмежаваны да $1 старонак.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(сьпярша выберыце вікі)',
	'hideredirects' => 'Схаваць перанакіраваньні',
	'hidesubpages' => 'Схаваць падстаронкі',
	'limit' => 'Абмежаваньне',
	'page' => 'Старонка',
	'redirect' => 'Зьяўляецца перанакіраваньнем?',
	'output' => 'Вывад',
	'update' => 'Абнавіць',
	'tools-delete' => 'выдаліць',
	'tools-links' => 'спасылкі',
	'tools-subject' => 'прадмет',
	'tools-hist' => 'гіст',
	'tools-curr' => 'цяп',
	'tools-globalusage' => 'глябальнае выкарыстаньне',
	'deletesummary' => 'Выдаленьне абмеркаваньняў-сірацін праз $1',
	'noresults' => 'У гэтай вікі і ў гэтай прасторы назваў абмеркаваньняў-сірацін няма.',
	'resultslimited' => 'Вынік абмежаваны да $1 старонак.',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'update' => 'Обновяване',
	'tools-delete' => 'изтриване',
	'tools-hist' => 'ист',
	'tools-curr' => 'тек',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'title' => 'পিতৃহীন পাতা আলোচনা ২', # Fuzzy
	'label-wiki' => 'উইকি',
	'select-wiki-first' => '(প্রথমে একটি উইকি নির্বাচন করুন)',
	'hideredirects' => 'পুনর্নির্দেশনাগুলো লুকাও',
	'hidesubpages' => 'উপপাতাগুলো লুকাও',
	'limit' => 'সীমা',
	'page' => 'পাতা',
	'output' => 'আউটপুট',
	'update' => 'হালনাগাদ',
	'tools-delete' => 'অপসারণ',
	'tools-links' => 'সংযোগকারী পাতাসমূহ',
	'tools-subject' => 'বিষয়', # Fuzzy
	'tools-hist' => 'ইতিহাস দেখুন',
	'tools-curr' => 'সর্বশেষ পরিবর্তন',
	'tools-globalusage' => 'ফাইলের ব্যবহার',
	'deletesummary' => '$1-এর মাধ্যমে পিতৃহীন আলাপ পাতা পরিস্কার করা হচ্ছে', # Fuzzy
	'noresults' => 'এই উইকির এই নামস্থানের কোনো পিতৃহীন আলাপ পাতার সাথে আপনার সেটিং মেলেনি।',
	'resultslimited' => 'ফলাফলগুলো $1টি পাতার মধ্যে সীমাবদ্ধ ছিলো।',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'title' => 'OrphanTalk2', # Fuzzy
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(diuzit ur wiki da gentañ)',
	'hideredirects' => 'Kuzhat an adkasoù',
	'hidesubpages' => 'Kuzhat an ispajennoù',
	'limit' => 'Bevenn',
	'page' => 'Pajenn',
	'tooltip-redirect' => 'Un adkas eo ar bajenn-mañ',
	'output' => 'Ezvont',
	'update' => 'Hizivaat',
	'tools-view' => 'Diskwel',
	'tools-delete' => 'Dilemel',
	'tools-links' => 'Pajennoù liammet',
	'tools-subject' => 'danvez', # Fuzzy
	'tools-hist' => 'Gwelet an istor',
	'tools-curr' => 'Kemm diwezhañ',
	'tools-globalusage' => 'Implij ar restr',
	'deletesummary' => 'O naetaat ar pajennoù kaozeal dre $1', # Fuzzy
	'noresults' => "N'eus bet kavet pajenn gaozeal dall ebet er wiki, en esaouenn anv a glot gant ho kefluniadur.",
	'resultslimited' => "Krennet eo bet an disoc'hoù da $1 pajenn.",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'update' => 'Ažuriraj',
	'tools-delete' => 'obriši',
	'tools-subject' => 'tema',
);

/** Catalan (català)
 * @author Fitoschido
 * @author SMP
 */
$messages['ca'] = array(
	'title' => 'OrphanTalk2', # Fuzzy
	'label-wiki' => 'Viqui',
	'select-wiki-first' => '(primer seleccioneu un wiki)',
	'hideredirects' => 'Amaga redireccions',
	'hidesubpages' => 'Amaga subpàgines',
	'limit' => 'Límit',
	'page' => 'Pàgina',
	'tooltip-redirect' => 'Aquesta pàgina és una redirecció',
	'output' => 'Resultats',
	'update' => 'Actualitza',
	'tools-delete' => 'Suprimeix',
	'tools-links' => 'enllaços', # Fuzzy
	'tools-subject' => 'pàgina', # Fuzzy
	'tools-hist' => 'hist', # Fuzzy
	'tools-curr' => 'act', # Fuzzy
	'tools-globalusage' => 'ús global', # Fuzzy
	'deletesummary' => 'Neteja de pàgines de discussió òrfenes via $1', # Fuzzy
	'noresults' => "No s'ha trobat en aquest wiki cap pàgina de discussió òrfena en aquest espai de noms que correspongui amb la vostra configuració.",
	'resultslimited' => 'Els resultats es limiten a $1 pàgines.',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'title' => 'OrphanTalk',
	'label-wiki' => 'Вики',
	'output' => 'Хилам',
	'update' => 'Карлаяккха',
	'tools-view' => 'Хьажар',
	'tools-delete' => 'ДӀаяккха',
	'tools-links' => 'Хьажоргаш кхузе',
	'tools-subject' => 'Коьрта агӀо',
	'tools-hist' => 'Исторега хьажар',
	'tools-curr' => 'ТӀаьххьара хийцамаш',
	'tools-globalusage' => 'Файл лелор',
);

/** Czech (česky)
 * @author Chmee2
 * @author Jezevec
 * @author PSJG-Tyler
 * @author Vks
 */
$messages['cs'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(nejdříve vyber wiki)',
	'hideredirects' => 'Skrýt přesměrování',
	'hidesubpages' => 'Skrýt podstránky',
	'limit' => 'hranice',
	'page' => 'Stránka',
	'redirect' => 'Přesměrováno?',
	'output' => 'Výstup',
	'update' => 'Aktualizace',
	'tools-delete' => 'smazat',
	'tools-links' => 'odkazy',
	'tools-subject' => 'téma',
	'tools-hist' => 'historie',
	'tools-curr' => 'poslední editace',
	'tools-globalusage' => 'globální použití',
	'deletesummary' => 'Čistím osiřelé diskuzní stránky přes $1',
	'noresults' => 'Žádné osiřelé diskuzní stránky na této wiki v tomto jmenném prostoru neodpovídají Vašemu nastavení.',
	'resultslimited' => 'Výsledky byly omezeny na  $1  stránek.',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(малтанах викие суйлӑр)',
	'hidesubpages' => 'Кӗҫӗн страницӑсене пытар',
	'limit' => 'Хӗсев',
	'page' => 'Страница',
	'tools-delete' => 'тӗпле',
	'tools-links' => 'каҫӑсем',
	'tools-subject' => 'тема',
	'tools-hist' => 'истори',
	'tools-curr' => 'халь.',
	'tools-globalusage' => 'глобаллӑ усӑ курни',
);

/** Danish (dansk)
 * @author Christian List
 * @author Erisos
 * @author Sarrus
 * @author Tjernobyl
 */
$messages['da'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(vælg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'limit' => 'Grænse',
	'page' => 'Side',
	'redirect' => 'Er en omdirigering?',
	'output' => 'Resultat',
	'update' => 'Opdatér',
	'tools-delete' => 'slet',
	'tools-links' => 'links',
	'tools-subject' => 'emne',
	'tools-hist' => 'hist',
	'tools-curr' => 'nu',
	'tools-globalusage' => 'global brug',
	'deletesummary' => 'Sletning af forældreløse diskussionssider via $1',
	'noresults' => 'Ingen forældreløse diskussionssider på denne wiki i dette navneområde passede med de valgte indstillinger.',
	'resultslimited' => 'Resultaterne blev begrænset til $1 sider.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Krinkle
 * @author Metalhead64
 */
$messages['de'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Verwaiste Diskussionsseiten finden.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(wähle zuerst ein Wiki)',
	'hideredirects' => 'Weiterleitungen ausblenden',
	'hidesubpages' => 'Unterseiten ausblenden',
	'limit' => 'Limit',
	'page' => 'Seite',
	'tooltip-redirect' => 'Diese Seite ist eine Weiterleitung',
	'output' => 'Ausgabe',
	'update' => 'Aktualisieren',
	'tools-view' => 'Ansehen',
	'tools-delete' => 'Löschen',
	'tools-links' => 'Links auf diese Seite',
	'tools-subject' => 'Betroffene Seite',
	'tools-hist' => 'Versionsgeschichte ansehen',
	'tools-curr' => 'Letzte Änderung',
	'tools-globalusage' => 'Dateiverwendung',
	'deletesummary' => '$1: Verwaiste Diskussionsseite',
	'noresults' => 'Es konnten auf diesem Wiki keine den Einstellungen entsprechenden verwaisten Diskussionsseiten in diesem Namensraum ermittelt werden.',
	'resultslimited' => 'Die Ergebnisse wurden auf $1 Seiten beschränkt.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'title' => 'BakusWerenayış2', # Fuzzy
	'select-wiki-first' => '(Ya sıfte yew wiki weçine)',
	'hideredirects' => 'Hetenayışan bınımnê',
	'hidesubpages' => 'Pelanê bınan bınımnê',
	'limit' => 'Limit',
	'page' => 'Pele',
	'output' => 'Vıcyayış',
	'update' => 'Rocane ke',
	'tools-delete' => 'bestere', # Fuzzy
	'tools-links' => 'gırey', # Fuzzy
	'tools-subject' => 'mewzu', # Fuzzy
	'tools-hist' => 'ravyardê', # Fuzzy
	'tools-curr' => 'newen', # Fuzzy
	'tools-globalusage' => 'global karkerdış', # Fuzzy
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(wubjeŕ nejpjerwjej wiki)',
	'hideredirects' => 'Dalejpósrědnjenja schowaś',
	'hidesubpages' => 'Pódboki schowaś',
	'limit' => 'Limit',
	'page' => 'Bok',
	'redirect' => 'Jo dalejpósrědnjenje?',
	'output' => 'Wudaśe',
	'update' => 'Aktualizěrowaś',
	'tools-delete' => 'wulašowaś',
	'tools-links' => 'wótkaze',
	'tools-subject' => 'tema',
	'tools-hist' => 'historija',
	'tools-curr' => 'aktualna wersija',
	'tools-globalusage' => 'globalne wužywanje',
	'deletesummary' => 'Lašowanje wósyrośonych diskusijnych bokow pśez $1',
	'noresults' => 'Žedne wósyrośone diskusijne boki na toś tom wikiju w toś tom mjenjowem rumje njejsu wašym nastajenjam wótpowědowali.',
	'resultslimited' => 'Wuslědki su se na $1 bokow wobgranicowali.',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Geraki
 * @author Glavkos
 */
$messages['el'] = array(
	'select-wiki-first' => '(επιλέξτε πρώτα ένα wiki)',
	'hideredirects' => 'Απόκρυψη ανακατευθύνσεων',
	'hidesubpages' => 'Απόκρυψη υποσελιδών',
	'limit' => 'Όριο',
	'page' => 'Άρθρο',
	'redirect' => 'Είναι ανακατεύθυνση;',
	'update' => 'Ενημέρωση',
	'tools-delete' => 'διαγραφή',
	'tools-links' => 'σύνδεσμοι',
	'tools-subject' => 'θέμα',
	'tools-hist' => 'ιστορικό',
	'tools-curr' => 'τρέχουσα',
	'tools-globalusage' => 'καθολική χρήση',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author Yekrats
 */
$messages['eo'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(unue elektu vikion)',
	'hideredirects' => 'Kaŝi alidirektilojn',
	'hidesubpages' => 'Kaŝi subpaĝojn',
	'limit' => 'Limo',
	'page' => 'Paĝo',
	'redirect' => 'Ĉu alidirektilo?',
	'output' => 'Eligo',
	'update' => 'Ĝisdatigi',
	'tools-delete' => 'forigi',
	'tools-links' => 'ligiloj',
	'tools-subject' => 'temo',
	'tools-hist' => 'hist',
	'tools-curr' => 'aktu',
	'tools-globalusage' => 'globalusage',
);

/** Spanish (español)
 * @author AwesomeOrange89
 * @author Fitoschido
 */
$messages['es'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Encontrar páginas de discusión huérfanas.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(selecciona primero un wiki)',
	'hideredirects' => 'Ocultar redirecciones',
	'hidesubpages' => 'Ocultar subpáginas',
	'limit' => 'Límite',
	'page' => 'Página',
	'tooltip-redirect' => 'Esta página es una redirección',
	'output' => 'Salida',
	'update' => 'Actualizar',
	'tools-view' => 'Ver',
	'tools-delete' => 'Borrar',
	'tools-links' => 'Lo que enlaza aquí',
	'tools-subject' => 'Código de asunto',
	'tools-hist' => 'Ver historial',
	'tools-curr' => 'Último cambio',
	'tools-globalusage' => 'Usos del archivo',
	'deletesummary' => '$1: página de discusión sin asociación',
	'noresults' => 'Ninguna página de discusión huérfana en este wiki, en este espacio de nombres coinciden con tu configuración.',
	'resultslimited' => 'Los resultados se limitan a $1 páginas.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'title' => 'Orbarutelu',
	'description' => 'Leia orvuks jäänud arutelud.',
	'label-wiki' => 'Viki',
	'select-wiki-first' => '(kõigepealt vali viki)',
	'hideredirects' => 'Peida ümbersuunamised',
	'hidesubpages' => 'Peida alamleheküljed',
	'limit' => 'Piirang',
	'page' => 'Lehekülg',
	'tooltip-redirect' => 'See lehekülg on ümbersuunamine',
	'output' => 'Väljund',
	'update' => 'Värskenda',
	'tools-view' => 'vaata',
	'tools-delete' => 'kustuta',
	'tools-links' => 'lingid',
	'tools-subject' => 'seotud lehekülg',
	'tools-hist' => 'ajalugu',
	'tools-curr' => 'viimane muudatus',
	'tools-globalusage' => 'faili kasutus',
	'deletesummary' => '$1: seotud leheküljeta arutelu',
	'noresults' => 'Selle viki selles nimeruumis ei vasta sinu sätetele ükski orbarutelu.',
	'resultslimited' => 'Lehekülje kohta näidatakse $1 tulemust.',
);

/** Basque (euskara)
 * @author An13sa
 * @author Xabier Armendaritz
 */
$messages['eu'] = array(
	'title' => 'OrphanTalk2',
	'hideredirects' => 'Birzuzenketak ezkutatu',
	'hidesubpages' => 'Azpiorrialdeak ezkutatu',
	'limit' => 'Muga',
	'page' => 'Orrialdea',
	'redirect' => 'Birbideratzea da?',
	'update' => 'Eguneratu',
	'tools-delete' => 'ezabatu',
	'tools-links' => 'loturak',
	'tools-subject' => 'gaia',
	'tools-hist' => 'hist',
	'tools-curr' => 'orain',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Wayiran
 */
$messages['fa'] = array(
	'title' => 'بحث‌یتیم۲',
	'select-wiki-first' => '(ابتدا یک ویکی را انتخاب کنید)',
	'hideredirects' => 'پنهان‌کردن تغییر مسیرها',
	'hidesubpages' => 'پنهان‌کردن زیرصفحه‌ها',
	'limit' => 'تعداد',
	'page' => 'صفحه',
	'redirect' => 'تغییر مسیر است؟',
	'output' => 'خروجی',
	'update' => 'به روز رسانی',
	'tools-delete' => 'حذف',
	'tools-links' => 'پیوندها',
	'tools-subject' => 'عنوان',
	'tools-hist' => 'تاریخچه',
	'tools-curr' => 'فعلی',
	'tools-globalusage' => 'استفادهٔ سراسری',
	'deletesummary' => 'تمیزکردن صفحات بحث یتیم از طریق $1',
	'noresults' => 'هیچ صفحهٔ بحث یتیمی در این ویکی و در این فضای نام، مطابق با تنظیمات شما وجود ندارد.',
	'resultslimited' => 'نتایج به $1 صفحه محدود بود.',
);

/** Finnish (suomi)
 * @author Olli
 * @author Silvonen
 * @author Stryn
 * @author VezonThunder
 */
$messages['fi'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(valitse ensin wiki)',
	'hideredirects' => 'Piilota ohjaukset',
	'hidesubpages' => 'Piilota alasivut',
	'limit' => 'Raja',
	'page' => 'Sivu',
	'redirect' => 'Onko uudelleenohjaus?',
	'output' => 'Ulostulo',
	'update' => 'Päivitä',
	'tools-delete' => 'poista',
	'tools-links' => 'linkit',
	'tools-subject' => 'aihe',
	'tools-hist' => 'historia',
	'tools-curr' => 'nyk.',
	'deletesummary' => 'Yksinäisten keskustelusivujen siivous $1-työkalulla',
	'noresults' => 'Asetuksesi eivät vastanneet yhtään yksinäistä keskustelusivua tässä wikissä ja tässä nimiavaruudessa.',
	'resultslimited' => 'Tulokset rajoitettiin $1 sivuun.',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'select-wiki-first' => '(vel eina wikii fyrst)',
	'hideredirects' => 'Fjal snarvegir',
	'hidesubpages' => 'Fjal undirsíður',
	'limit' => 'Mark',
	'page' => 'Síða',
	'redirect' => 'Er snarvegur?',
	'output' => 'Útdáta',
	'update' => 'Dagfør',
	'tools-delete' => 'strika',
	'tools-links' => 'leinkjur',
	'tools-subject' => 'evni',
	'tools-hist' => 'søga',
	'tools-curr' => 'nú',
	'tools-globalusage' => 'global nýtsla',
	'deletesummary' => 'Ruddar upp í foreldraleysum kjaksíðum via $1',
	'noresults' => 'Ongar foreldraleyar kjaksíður á hesi wiki í hesum navnarúminum samsvaraðu tínum innstillingum.',
	'resultslimited' => 'Úrslitini vóru avmarkaði til $1 síður.',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Jean-Frédéric
 * @author Od1n
 */
$messages['fr'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Trouver les pages de discussion orphelines.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(sélectionnez d’abord un wiki)',
	'hideredirects' => 'Masquer les redirections',
	'hidesubpages' => 'Masquer les sous-pages',
	'limit' => 'Limite',
	'page' => 'Page',
	'tooltip-redirect' => 'Cette page est une redirection',
	'output' => 'Sortie',
	'update' => 'Mettre à jour',
	'tools-view' => 'Afficher',
	'tools-delete' => 'Supprimer',
	'tools-links' => 'Liens vers ici',
	'tools-subject' => 'Page de sujet',
	'tools-hist' => 'Afficher l’historique',
	'tools-curr' => 'Dernière modification',
	'tools-globalusage' => 'Utilisation du fichier',
	'deletesummary' => '$1 : Page de discussion orpheline',
	'noresults' => 'Aucune page de discussion orpheline dans ce wiki dans cet espace de nommage correspondant à votre configuration.',
	'resultslimited' => 'Les résultats ont été limités à $1 pages.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(chouèsésséd d’abôrd un vouiqui)',
	'hideredirects' => 'Cachiér les redirèccions',
	'hidesubpages' => 'Cachiér les sot-pâges',
	'limit' => 'Limita',
	'page' => 'Pâge',
	'redirect' => 'Est na redirèccion ?',
	'output' => 'Sortia',
	'update' => 'Betar a jorn',
	'tools-delete' => 'suprimar',
	'tools-links' => 'lims',
	'tools-subject' => 'sujèt',
	'tools-hist' => 'hist',
	'tools-curr' => 'ora',
	'tools-globalusage' => 'usâjo globâl',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'page' => 'Leathanach',
	'tools-delete' => 'scrios',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(seleccione primeiro un wiki)',
	'hideredirects' => 'Agochar as redireccións',
	'hidesubpages' => 'Agochar as subpáxinas',
	'limit' => 'Límite',
	'page' => 'Páxina',
	'redirect' => 'É unha redirección?',
	'output' => 'Saída',
	'update' => 'Actualizar',
	'tools-delete' => 'borrar',
	'tools-links' => 'ligazóns',
	'tools-subject' => 'asunto',
	'tools-hist' => 'hist',
	'tools-curr' => 'actual',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpando as páxinas de conversa orfas mediante $1',
	'noresults' => 'Non hai páxina de conversa orfas neste espazo de nomes que coincidisen coa configuración.',
	'resultslimited' => 'Os resultados limítanse a $1 páxinas.',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'hidesubpages' => 'પેટાપૃષ્ઠ છુપાવો',
	'limit' => 'મર્યાદા',
	'page' => 'પૃષ્ઠ',
	'output' => 'ઉત્પાદન',
	'update' => 'સુધારો',
	'tools-delete' => 'હટાવો',
	'tools-links' => 'કડીઓ',
	'tools-subject' => 'વિષય',
	'tools-hist' => 'ઇતિહાસ',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title' => 'OrphanTalk',
	'description' => 'חיפוש דפי שיחה מיותמים.',
	'label-wiki' => 'ויקי',
	'select-wiki-first' => '(יש לבחור אתר ויקי קודם)',
	'hideredirects' => 'הסתרת הפניות',
	'hidesubpages' => 'הסתרת דפי-משנה',
	'limit' => 'מגבלה',
	'page' => 'דף',
	'tooltip-redirect' => 'הדף הזה הוא הפניה',
	'output' => 'פלט',
	'update' => 'עדכון',
	'tools-view' => 'תצוגה',
	'tools-delete' => 'מחיקה',
	'tools-links' => 'מה מקשר לכאן',
	'tools-subject' => 'דף נושא',
	'tools-hist' => 'הצגת היסטוריה',
	'tools-curr' => 'השינוי האחרון',
	'tools-globalusage' => 'שימוש בקובץ',
	'deletesummary' => '$1: דף שיחה מיותם',
	'noresults' => 'אין דפי שיחה מיותמים באתר הוויקי הזה במרחב השם הזה שמתאימים להגדרות שלך.',
	'resultslimited' => 'התוצאות הוגבלו ל־$1 דפים.',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'title' => 'एकाकी-वार्ता 2',
	'select-wiki-first' => '(पहले एक विकी चुनें)',
	'hideredirects' => 'पुनर्निर्देश छुपाएँ',
	'hidesubpages' => 'उपपृष्ठ छुपाएँ',
	'limit' => 'सीमा',
	'page' => 'पृष्ठ',
	'redirect' => 'पुनर्निर्देश है?',
	'output' => 'आउटपुट',
	'update' => 'अद्यतन',
	'tools-delete' => 'हटाएँ',
	'tools-links' => 'कड़ियाँ',
	'tools-subject' => 'सामग्री पृष्ठ',
	'tools-hist' => 'इतिहास',
	'tools-curr' => 'चालू',
	'tools-globalusage' => 'वैश्विक प्रयोग',
	'deletesummary' => '$1 द्वारा एकाकी वार्ता पृष्ठ हटाया जा रहा है',
	'noresults' => 'इस विकी पर इस नामस्थान में आपकी दी सेटिंग्स से मेल खाते कोई एकाकी वार्ता पृष्ठ नहीं हैं।',
	'resultslimited' => 'परिणाम $1 की सीमा के अंदर रखे गए हैं',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(prvo izaberite wiki)',
	'hideredirects' => 'Sakrij preusmjeravanja',
	'hidesubpages' => 'Sakrij podstranice',
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'redirect' => 'Je li preusmjerena?',
	'output' => 'Odredište',
	'update' => 'Osvježi',
	'tools-delete' => 'izbriši',
	'tools-links' => 'poveznice',
	'tools-subject' => 'naslov',
	'tools-hist' => 'pov',
	'tools-curr' => 'sad',
	'tools-globalusage' => 'globalna uporaba',
	'deletesummary' => 'Čišćenje stranica za razgovor siročad preko $1',
	'noresults' => 'Niti jedna stranica za razgovor siročad na ovom wikiju u ovom imenskom prostoru ne odgovara vašim postavkama.',
	'resultslimited' => 'Rezultati su ograničeni na $1 stranica.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(wubjer najprjedy wiki)',
	'hideredirects' => 'Daleposrědkowanja schować',
	'hidesubpages' => 'Podstrony schować',
	'limit' => 'Limit',
	'page' => 'Strona',
	'redirect' => 'Je dalesposrědkowanje?',
	'output' => 'Wudaće',
	'update' => 'Aktualizować',
	'tools-delete' => 'zhašeć',
	'tools-links' => 'wotkazy',
	'tools-subject' => 'tema',
	'tools-hist' => 'wersije',
	'tools-curr' => 'aktualna wersija',
	'tools-globalusage' => 'globalne wužiwanje',
	'deletesummary' => 'Wuprózdnjenje wosyroćenych diskusijnych stronow přez $1',
	'noresults' => 'Žane wosyroćene diskusijne strony na tutym wikiju w tutym mjenowym rumje njejsu wašim nastajenjam wotpowědowali.',
	'resultslimited' => 'Wuslědki buchu na $1 stronow wobmjezowane.',
);

/** Hungarian (magyar)
 * @author Csega
 * @author Dani
 */
$messages['hu'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Elárvult vitalapok keresése.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(előbb válassz egy wikit)',
	'hideredirects' => 'Átirányítások elrejtése',
	'hidesubpages' => 'Allapok elrejtése',
	'limit' => 'Korlát',
	'page' => 'Lap',
	'tooltip-redirect' => 'Ez az oldal átirányítás',
	'output' => 'Kimenet',
	'update' => 'Frissítés',
	'tools-view' => 'Nézet',
	'tools-delete' => 'Törlés',
	'tools-links' => 'Mi hivatkozik erre',
	'tools-subject' => 'Tárgy oldal',
	'tools-hist' => 'Előzmények megtekintése',
	'tools-curr' => 'Utoljára módosítva',
	'tools-globalusage' => 'Fájlhasználat',
	'deletesummary' => '$1: Árva vitalap',
	'noresults' => 'Ebben a névtérben egyetlen vitalap sem felel meg a megadott beállításoknak.',
	'resultslimited' => 'Az eredmények száma $1 db lapra lett korlátozva.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'OrphanTalk2',
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
	'deletesummary' => 'Radimento de paginas de discussion orphane via $1',
	'noresults' => 'Nulle pagina de discussion orphane in iste wiki e in iste spatio de nomines correspondeva a tu configurationes.',
	'resultslimited' => 'Le resultatos ha essite limitate a $1 paginas.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pilih wiki dahulu)',
	'hideredirects' => 'Sembunyikan pengalihan',
	'hidesubpages' => 'Sembunyikan subhalaman',
	'limit' => 'Batasan',
	'page' => 'Halaman',
	'redirect' => 'Pengalihan?',
	'output' => 'Keluaran',
	'update' => 'Mutakhirkan',
	'tools-delete' => 'hapus',
	'tools-links' => 'pranala',
	'tools-subject' => 'subyek',
	'tools-hist' => 'versi',
	'tools-curr' => 'sekarang',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Membersihkan halaman pembicaraan yatim melalui $1',
	'noresults' => 'Tidak ada halaman pembicaraan yatim di wiki ini dalam ruang nama ini yang sesuai dengan pengaturan Anda.',
	'resultslimited' => 'Hasil dibatasi hingga $1 halaman.',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'limit' => 'Érúrú',
	'page' => 'Ihü',
	'tools-hist' => 'akíkómbu',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'select-wiki-first' => '(umuna nga agpili ti wiki)',
	'hideredirects' => 'Ilemmeng dagiti baw-ing',
	'hidesubpages' => 'Ilemmeng dagiti subpanid',
	'limit' => 'Patingga',
	'page' => 'Panid',
	'redirect' => 'Baw-ing kadi?',
	'output' => 'Maiparuar',
	'update' => 'Pabaruen',
	'tools-delete' => 'ikkaten',
	'tools-links' => 'dagiti silpo',
	'tools-subject' => 'suheto',
	'tools-hist' => 'saritaan',
	'tools-curr' => 'agdama',
	'tools-globalusage' => 'sangalubongan a panag-usar',
	'deletesummary' => 'Agdaldalus kadagiti naulila a pampanid babaen ti $1',
	'noresults' => 'Awan dagiti naulila a pampanid ti tungtungan iti daytoy a wiki iti daytoy a nagan ti espasio a maipada kadagiti inyasentarmo',
	'resultslimited' => 'Dagiti resulta ket naipatingga iti $1 a pampanid.',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'page' => 'ОагIув',
	'tools-delete' => 'дIадакха',
	'tools-links' => 'Iинкаш',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Nemo bis
 * @author Valepert
 * @author ZioNicco
 */
$messages['it'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Trova pagine di discussione orfane.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(prima scegli un wiki)',
	'hideredirects' => 'Nascondi redirect',
	'hidesubpages' => 'Nascondi le sottopagine',
	'limit' => 'Limite',
	'page' => 'Pagina',
	'tooltip-redirect' => 'Questa pagina è un redirect',
	'output' => 'Risultato',
	'update' => 'Aggiorna',
	'tools-view' => 'Visualizza',
	'tools-delete' => 'Cancella',
	'tools-links' => 'Puntano qui',
	'tools-subject' => 'Oggetto della pagina',
	'tools-hist' => 'Visualizza cronologia',
	'tools-curr' => 'Ultima modifica',
	'tools-globalusage' => 'Utilizzo del file',
	'deletesummary' => '$1: pagina di discussione orfana',
	'noresults' => 'Nessuna corrispondenza di pagine orfane in questo wiki, e per questo namespace, con i criteri indicati.',
	'resultslimited' => 'I risultati sono stati limitati a $1 pagine.',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'OrphanTalk',
	'description' => '孤立したトークページを見つけます。',
	'label-wiki' => 'ウィキ',
	'select-wiki-first' => '(まずウィキを選択)',
	'hideredirects' => 'リダイレクトを隠す',
	'hidesubpages' => '下位ページを隠す',
	'limit' => '表示数',
	'page' => 'ページ',
	'tooltip-redirect' => 'このページはリダイレクトです',
	'output' => '出力',
	'update' => '更新',
	'tools-view' => '閲覧',
	'tools-delete' => '削除',
	'tools-links' => 'リンク元',
	'tools-subject' => '主題ページ',
	'tools-hist' => '履歴を表示',
	'tools-curr' => '最新の変更',
	'tools-globalusage' => 'ファイルの使用状況',
	'deletesummary' => '$1: 孤立したトークページ',
	'noresults' => '指定したウィキの名前空間には、孤立したトークページがありません。',
	'resultslimited' => '結果は $1 ページに制限されています。',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pilih wiki dhisik)',
	'hideredirects' => 'Dhelikna alihan',
	'hidesubpages' => 'Dhelikna subkaca',
	'limit' => 'Wates',
	'page' => 'Kaca',
	'redirect' => 'Alihaké?',
	'output' => 'Weton',
	'update' => 'Anyari',
	'tools-delete' => 'busak',
	'tools-links' => 'pranala',
	'tools-subject' => 'jejer',
	'tools-hist' => 'riwayat',
	'tools-curr' => 'saiki',
	'tools-globalusage' => 'panganggoansakjagat',
	'deletesummary' => 'Ngresiki kaca guneman yatim liwat $1',
	'resultslimited' => 'Asil diwatesi mung $1 kaca.',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'select-wiki-first' => '(ჯერ აირჩიეთ ვიკი)',
	'limit' => 'ლიმიტი',
	'update' => 'განახლება',
	'tools-delete' => 'წაშლა',
	'tools-links' => 'ბმულები',
	'tools-subject' => 'თემა',
	'tools-hist' => 'ისტორია',
	'tools-curr' => 'მიმდინარე',
	'tools-globalusage' => 'გლობალური გამოყენება',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'select-wiki-first' => '(ជ្រើសរើសវិគីមួយសិន)',
	'hideredirects' => 'លាក់ការបញ្ជូនបន្ត',
	'hidesubpages' => 'លាក់ទំព័ររង',
	'limit' => 'កំហិត',
	'page' => 'ទំព័រ',
	'redirect' => 'ជាការបញ្ជូនបន្ត?',
	'update' => 'បន្ទាន់សម័យ',
	'tools-delete' => 'លុបចោល',
	'tools-links' => 'តំណ​ភ្ជាប់',
	'tools-subject' => 'ប្រធានបទ​',
	'tools-hist' => 'ប្រវត្តិ',
	'tools-curr' => 'បច្ចុប្បន្ន',
	'tools-globalusage' => 'បំរើបំរាស់សាកល',
	'deletesummary' => 'សំអាតទំព័រពិភាក្សាដែលកំព្រាតាមរយៈ $1',
	'noresults' => 'គ្មានទំព័រពិភាក្សាកំព្រានៅលើវិគីនេះ ក្នុងប្រភេទបែបនេះ ដែលត្រូវគ្នានឹងការកំណត់របស់អ្នកទេ។',
	'resultslimited' => 'លទ្ធផលត្រូវបានដាក់កំហិតត្រឹម $1 ទំព័រ។',
);

/** Kannada (ಕನ್ನಡ)
 * @author Akoppad
 * @author M G Harish
 */
$messages['kn'] = array(
	'title' => 'ಆರ್ಫನ್‌ಟಾಕ್೨',
	'select-wiki-first' => '(ಮೊದಲು ಒಂದು ವಿಕಿಯನ್ನು ಆಯ್ದುಕೊಳ್ಳಿ)',
	'hideredirects' => 'ಪುನರ್ನಿದೇಶನಗಳನ್ನು ಅಡಗಿಸಿ',
	'hidesubpages' => 'ಉಪಪುಟಗಳನ್ನು ಅಡಗಿಸಿ',
	'limit' => 'ಮಿತಿ',
	'page' => 'ಪುಟ',
	'redirect' => 'ಪುನರ್ನಿರ್ದೇಶನವೆ?',
	'output' => 'ಉತ್ಪಾದನೆ',
	'update' => 'ಬದಲಿಸಬೇಕೆ?',
	'tools-delete' => 'ಅಳಿಸು',
	'tools-links' => 'ಕೊಂಡಿ',
	'tools-subject' => 'ವಿಷಯ',
	'tools-hist' => 'ಇತಿಹಾಸ',
	'tools-curr' => 'ಈಗಿನ',
	'tools-globalusage' => 'ಸಮಗ್ರ ಬಳಕೆ',
	'deletesummary' => '$1 ಮೂಲಕ ಅನಾಥವಾದ ಚರ್ಚಾಪುಟಗಳನ್ನು ಶುದ್ಧಗೊಳಿಸಲಾಗುತ್ತಿದೆ',
	'noresults' => 'ನಿಮ್ಮ ವ್ಯವಸ್ಥೆಗೆ ಹೋಲುವಂಥ ಅನಾಥ ಚರ್ಚಾ ಪುಟಗಳು ಈ ವಿಕಿಯಲ್ಲಿ ಈ ನಾಮವರ್ಗದಲ್ಲಿ ಸಿಗಲಿಲ್ಲ.',
	'resultslimited' => 'ಫಲಿತಾಂಶಗಳು $1 ಪುಟಕ್ಕೆ ಸೀಮಿತಗೊಂಡಿದ್ದವು.',
);

/** Korean (한국어)
 * @author Tyey
 * @author 아라
 */
$messages['ko'] = array(
	'title' => 'OrphanTalk2', # Fuzzy
	'select-wiki-first' => '(먼저 위키 선택)',
	'hideredirects' => '넘겨주기 숨기기',
	'hidesubpages' => '하위 문서 숨기기',
	'limit' => '제한',
	'page' => '문서',
	'output' => '출력',
	'update' => '업데이트',
	'tools-view' => '보기',
	'tools-delete' => '삭제',
	'tools-links' => '링크', # Fuzzy
	'tools-subject' => '주제 문서',
	'tools-hist' => '역사', # Fuzzy
	'tools-curr' => '차이', # Fuzzy
	'tools-globalusage' => '공통사용', # Fuzzy
	'deletesummary' => '$1(을)를 통해 외톨이 토론 문서 정리', # Fuzzy
	'noresults' => '이 위키에 설정에서 일치하는 이 이름공간에서 외톨이 토론 문서가 없습니다.',
	'resultslimited' => '결과는 문서 $1개로 제한했습니다.',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'update' => 'Джангырт',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => 'Alleinjeblevve Klaafsigge 2',
	'select-wiki-first' => '(donn et eez e Wiki ußsöhke)',
	'hideredirects' => 'Ömleidonge fott lohße',
	'hidesubpages' => 'Ongersigge fott lohße',
	'limit' => 'Donn de Aanzahl en dä Leß bejränze op',
	'page' => 'Klaafsigg',
	'redirect' => 'Ömleidong?',
	'output' => 'Dat kohm eruß:',
	'update' => 'Op der neuste Shtand bränge',
	'tools-delete' => 'schmiiß fott!',
	'tools-links' => 'Lengks',
	'tools-subject' => 'Sigg',
	'tools-hist' => 'Versione',
	'tools-curr' => 'läz Änderong',
	'tools-globalusage' => 'En alle Wikis',
	'deletesummary' => 'Alleinjeblevve Klaafsigg fott jeschmeße met „$1“.',
	'noresults' => 'Kein alleinjeblevve Klaafsigge en däm Wiki en däm Appachtemang paße zoh Dinge Enshtällonge.',
	'resultslimited' => 'Heh di Leß es bejränz op {{PLURAL:$1|ein Sigg|$1 Sigg|kein Sigge}}',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 * @author Ghybu
 */
$messages['ku-latn'] = array(
	'hideredirects' => 'Beralîkirinan veşêre',
	'hidesubpages' => 'Binrûpelan veşêre',
	'limit' => 'Sînor',
	'page' => 'Rûpel',
	'redirect' => 'Beralîkirin e?',
	'tools-delete' => 'jê bibe',
	'tools-links' => 'girêdan',
	'tools-hist' => 'dîro',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'page' => 'Pagina',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'OrphanTalk',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => "(sicht d'éischt eng Wiki eraus)",
	'hideredirects' => 'Viruleedunge verstoppen',
	'hidesubpages' => 'Ënnersäite verstoppen',
	'limit' => 'Limit',
	'page' => 'Säit',
	'tooltip-redirect' => 'Dës Säit ass eng Viruleedung',
	'output' => 'Resultat',
	'update' => 'Aktualiséieren',
	'tools-view' => 'Weisen',
	'tools-delete' => 'Läschen',
	'tools-links' => 'Linken op dës Säit',
	'tools-subject' => 'Säit vum Sujet',
	'tools-hist' => 'Versioune weisen',
	'tools-curr' => 'Lescht Ännerung',
	'tools-globalusage' => 'Benotze vu Fichieren',
	'deletesummary' => '$1: verweest Diskussiouns-Säit',
	'noresults' => 'Keng Diskussiouns-Weese-Säit op dëser Wiki an dësem Nummraum entsprécht Ären Astellungen.',
	'resultslimited' => "D'Resultater goufen op $1 Säite limitéiert.",
);

/** لوری (لوری)
 * @author Bonevarluri
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'select-wiki-first' => '(اول یه گل ویکی انتخاو بکید)',
	'limit' => 'كران دار بيئن',
	'page' => 'بلگه',
	'output' => 'نتیجه',
	'update' => 'روزآمد كردن',
	'tools-delete' => 'پاك كردن',
	'tools-links' => 'هوم پیوندیا',
	'tools-hist' => 'ويرگار',
	'tools-curr' => 'تازه باو',
);

/** Lithuanian (lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pirma pasirinkite wiki)',
	'hideredirects' => 'Slėpti peradresavimus',
	'hidesubpages' => 'Slėpti antrinius puslapius',
	'limit' => 'Limitas',
	'page' => 'Puslapis',
	'redirect' => 'Nukreipiantysis?',
	'output' => 'Išvestis',
	'update' => 'Atnaujinti',
	'tools-delete' => 'ištrinti',
	'tools-links' => 'nuorodos',
	'tools-subject' => 'tema',
	'tools-hist' => 'ist',
	'tools-curr' => 'esamas',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Valomi nereikalingi aptarimo puslapiai, naudojant $1',
	'noresults' => 'Nerasta nenaudojamų aptarimų puslapių šioje wiki vardų srityje pagal jūsų nustatymus.',
	'resultslimited' => 'Rezultatų limitas buvo $1 puslapių.',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'hidesubpages' => 'Paslēpt apakšlapas',
	'page' => 'Lapa',
	'tooltip-redirect' => 'Šī lapa ir pāradresācija',
	'tools-delete' => 'Dzēst',
	'tools-links' => 'Norādes uz šo rakstu',
	'tools-subject' => 'Temata lapa',
	'tools-hist' => 'Skatīt vēsturi',
	'tools-curr' => 'Pēdējā izmaiņa',
	'tools-globalusage' => 'Faila lietojums',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(piliah wiki dulu)',
	'hideredirects' => 'Suruakan pangaliahan',
	'hidesubpages' => 'Suruakan sublaman',
	'limit' => 'Bateh',
	'page' => 'Laman',
	'redirect' => 'Pangaliahan?',
	'output' => 'Hasil',
	'update' => 'Pabarui',
	'tools-delete' => 'Hapuih',
	'tools-links' => 'pautan',
	'tools-subject' => 'subyek',
	'tools-hist' => 'versi',
	'tools-curr' => 'kini',
	'tools-globalusage' => 'panggunoan global',
	'deletesummary' => 'Barasiahkan laman rundiang yatim malalui $1',
	'noresults' => 'Indak ado laman rundiang yatim pado wiki ko dalam ruang namo nan sasuai pangaturan.',
	'resultslimited' => 'Hasil babateh sampai $1 laman.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Најди осамени страници.',
	'label-wiki' => 'Вики',
	'select-wiki-first' => '(најпрвин изберете вики)',
	'hideredirects' => 'Скриј пренасочувања',
	'hidesubpages' => 'Скриј потстраници',
	'limit' => 'Највеќе до',
	'page' => 'Страница',
	'tooltip-redirect' => 'Страницава е пренасочување',
	'output' => 'Извод',
	'update' => 'Поднови',
	'tools-view' => 'Преглед',
	'tools-delete' => 'Избриши',
	'tools-links' => 'Што води овде',
	'tools-subject' => 'Засегната страница',
	'tools-hist' => 'Историја',
	'tools-curr' => 'Последна промена',
	'tools-globalusage' => 'Употреба на податотеката',
	'deletesummary' => '$1: Осамена страница за разговор',
	'noresults' => 'На ова вики нема осамени страници за разговор во овој именски простор што соодветствуваат на вашите поставки.',
	'resultslimited' => 'Резултатите беа ограничени на $1 страници',
);

/** Malayalam (മലയാളം)
 * @author Akhilan
 * @author Praveenp
 */
$messages['ml'] = array(
	'limit' => 'പരിധി',
	'page' => 'താൾ',
	'output' => 'ഔട്ട്പുട്ട്',
	'update' => 'പുതുക്കുക',
	'tools-delete' => 'മായ്ക്കുക',
	'tools-links' => 'കണ്ണികൾ',
	'tools-subject' => 'വിഷയം',
	'tools-hist' => 'നാൾവഴി',
	'tools-curr' => 'നിലവിൽ',
	'tools-globalusage' => 'ആഗോള ഉപയോഗം',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'title' => 'पोरकी चर्चा',
	'description' => 'पोरकी चर्चापाने शोधा',
	'label-wiki' => 'विकि',
	'tooltip-redirect' => 'हे पान पुनर्निर्देशित आहे',
	'tools-view' => 'बघा',
	'tools-delete' => 'वगळा',
	'tools-links' => 'येथे काय जोडले आहे',
	'tools-subject' => 'विषय पृष्ठ',
	'tools-hist' => 'इतिहास बघा',
	'tools-curr' => 'अलीकडील बदल',
	'tools-globalusage' => 'संचिका वापर',
	'deletesummary' => '$1: पोरके चर्चा पान',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pilih wiki dahulu)',
	'hideredirects' => 'Sorokkan lencongan',
	'hidesubpages' => 'Sorokkan sublaman',
	'limit' => 'Had',
	'page' => 'Halaman',
	'redirect' => 'Lencongan?',
	'output' => 'Output',
	'update' => 'Kemas kini',
	'tools-delete' => 'hapuskan',
	'tools-links' => 'pautan',
	'tools-subject' => 'subjek',
	'tools-hist' => 'sej',
	'tools-curr' => 'kini',
	'tools-globalusage' => 'kegunaan global',
	'deletesummary' => 'Membersihkan laman perbincangan yatim melalui $1',
	'noresults' => 'Tiada laman perbincangan yatim di wiki ini dalam ruang nama ini yang sepadan dengan tetapan anda.',
	'resultslimited' => 'Hasil carian terhad kepada $1 laman.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'title' => 'DiskussjoniOrfni2',
	'select-wiki-first' => '(l-ewwel agħżel wiki)',
	'hideredirects' => 'Aħbi rindirizzi',
	'hidesubpages' => 'Aħbi sottopaġni',
	'limit' => 'Limitu',
	'page' => 'Paġna',
	'redirect' => 'Huwa rindirizz?',
	'output' => 'Riżultat',
	'update' => 'Aġġorna',
	'tools-delete' => 'ħassar',
	'tools-links' => 'ħoloq',
	'tools-subject' => 'suġġett',
	'tools-hist' => 'kron',
	'tools-curr' => 'kurr',
	'tools-globalusage' => 'użuglobali',
	'deletesummary' => "Tindif ta' paġni ta' diskussjoni orfni permezz ta' $1",
	'resultslimited' => 'Ir-riżultati ġew limitati għal $1 paġni.',
);

/** Norwegian Bokmål (norsk bokmål)
 */
$messages['nb'] = array(
	'title' => 'Foreldreløse diskusjonssider 2',
	'select-wiki-first' => '(velg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'limit' => 'Grense',
	'page' => 'Side',
	'redirect' => 'Er omdirigering?',
	'output' => 'Utdata',
	'update' => 'Oppdater',
	'tools-delete' => 'slett',
	'tools-links' => 'lenker',
	'tools-subject' => 'subjekt',
	'tools-hist' => 'hist',
	'tools-curr' => 'nå',
	'tools-globalusage' => 'global bruk',
	'deletesummary' => 'Renser opp i foreldreløse diskusjonssider via $1',
	'noresults' => 'Det var ingen foreldreløse diskusjonssider på denne wikien som passet med de valgte innstillingene.',
	'resultslimited' => 'Resultatene ble begrenset til $1 sider.',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'label-wiki' => 'Wiki',
	'tools-view' => 'Bekieken',
	'tools-globalusage' => 'Bestaandsgebruuk',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'limit' => 'सीमा',
	'page' => 'पौ',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'WeesOverleg',
	'description' => "Help weesoverlegpagina's te vinden.",
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(selecteer eerst een wiki)',
	'hideredirects' => 'Doorverwijzingen verbergen',
	'hidesubpages' => "Subpagina's verbergen",
	'limit' => 'Limiet',
	'page' => 'Pagina',
	'tooltip-redirect' => 'Deze pagina is een redirect',
	'output' => 'Uitvoer',
	'update' => 'Bijwerken',
	'tools-view' => 'Lezen',
	'tools-delete' => 'Verwijderen',
	'tools-links' => 'Koppelingen naar deze pagina',
	'tools-subject' => 'Pagina',
	'tools-hist' => 'Geschiedenis weergeven',
	'tools-curr' => 'Laatste wijziging',
	'tools-globalusage' => 'Bestandsgebruik',
	'deletesummary' => '$1: Opruimen van weesoverleg',
	'noresults' => "Er zijn geen weesoverlegpagina's binnen deze naamruimte in deze wiki die aan uw instellingen voldoen.",
	'resultslimited' => "Er worden maximaal $1 pagina's weergegeven.",
);

/** no (no)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'title' => 'Foreldreløse diskusjonssider 2',
	'select-wiki-first' => '(velg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'limit' => 'Grense',
	'page' => 'Side',
	'redirect' => 'Er omdirigering?',
	'output' => 'Utdata',
	'update' => 'Oppdater',
	'tools-delete' => 'slett',
	'tools-links' => 'lenker',
	'tools-subject' => 'subjekt',
	'tools-hist' => 'hist',
	'tools-curr' => 'nå',
	'tools-globalusage' => 'global bruk',
	'deletesummary' => 'Renser opp i foreldreløse diskusjonssider via $1',
	'noresults' => 'Det var ingen foreldreløse diskusjonssider på denne wikien som passet med de valgte innstillingene.',
	'resultslimited' => 'Resultatene ble begrenset til $1 sider.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'title' => 'OrphanTalk2', # Fuzzy
	'select-wiki-first' => '(seleccionatz d’en primièr un wiki)',
	'hideredirects' => 'Amagar las redireccions',
	'hidesubpages' => 'Amagar las sospaginas',
	'limit' => 'Limit',
	'page' => 'Pagina',
	'output' => 'Sortida',
	'update' => 'Metre a jorn',
	'tools-delete' => 'suprimir', # Fuzzy
	'tools-links' => 'ligams', # Fuzzy
	'tools-subject' => 'Subjècte', # Fuzzy
	'tools-hist' => 'ist', # Fuzzy
	'tools-curr' => 'actu', # Fuzzy
	'tools-globalusage' => 'globalusage', # Fuzzy
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(ଆଗ ଏକ ଉଇକି ବାଛନ୍ତୁ)',
	'hideredirects' => 'ପୁନଃପ୍ରେରଣସମୂହକୁ ଲୁଚାଇବେ',
	'hidesubpages' => 'ଉପପୃଷ୍ଠାଗୁଡିକୁ ଲୁଚାଇବେ',
	'limit' => 'ସୀମା',
	'page' => 'ପୃଷ୍ଠା',
	'redirect' => 'ଲେଉଟାଣି ଅଛି କି ?',
	'output' => 'ଫଳାଫଳ',
	'update' => 'ଅପଡେଟ କରିବେ',
	'tools-delete' => 'ଲିଭାଇବେ',
	'tools-links' => 'ଲିଙ୍କଗୁଡିକ',
	'tools-subject' => 'ବିଷୟ',
	'tools-hist' => 'ଶେଷ',
	'tools-curr' => 'ବର୍ତମାନ',
	'tools-globalusage' => 'ସମସ୍ତ ବ୍ୟବହାର',
	'resultslimited' => 'ଫଳାଫଳ ଗୁଡିକ $1ପୃଷ୍ଠା ଭିତରେ ସୀମାତୀତ ହେଲା ।',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'limit' => 'Limit',
	'page' => 'Blatt',
	'update' => 'Druffschridde',
	'tools-delete' => 'verwische',
	'tools-links' => 'Gleecher',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'tools-delete' => 'lesche',
);

/** Polish (polski)
 * @author Matik7
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Znajdź osierocone strony dyskusji.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(najpierw wybierz wiki)',
	'hideredirects' => 'Ukryj przekierowania',
	'hidesubpages' => 'Ukryj podstrony',
	'limit' => 'Ograniczenie',
	'page' => 'Strona',
	'tooltip-redirect' => 'To jest strona przekierowująca',
	'output' => 'Wynik',
	'update' => 'Aktualizuj',
	'tools-view' => 'Podgląd',
	'tools-delete' => 'Usuń',
	'tools-links' => 'Co linkuje tutaj',
	'tools-subject' => 'Strona projektu',
	'tools-hist' => 'Pokaż historię',
	'tools-curr' => 'Ostatnia zmiana',
	'tools-globalusage' => 'Wykorzystanie pliku',
	'deletesummary' => '$1: Osierocona strona dyskusji',
	'noresults' => 'Na tej wiki nie odnaleziono osieroconych stron dyskusji odpowiadających wybranemu zapytaniu dla tej przestrzeni nazw.',
	'resultslimited' => 'Wyniki zostały ograniczone do $1 stron.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(selession-a na wiki prima)',
	'hideredirects' => 'Stërma le ridiression',
	'hidesubpages' => 'Stërmé le sot-pàgine',
	'limit' => 'Lìmit',
	'page' => 'Pàgina',
	'redirect' => 'É-lo na ridiression?',
	'output' => 'Surtìa',
	'update' => 'Agiorna',
	'tools-delete' => 'scancelé',
	'tools-links' => 'anliure',
	'tools-subject' => 'soget',
	'tools-hist' => 'stòria',
	'tools-curr' => 'cor',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Scancelassion ëd le pàgine ëd discussion orfanin-e via $1',
	'noresults' => 'Gnun-e pàgine ëd discussion orfanin-e dzora a sta wiki ant cost ëspassi nominal a corëspondo a soe ampostassion.',
	'resultslimited' => "J'arzultà a son stàit limità a $1 pàgine.",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'limit' => 'بريد',
	'page' => 'مخ',
	'update' => 'اوسمهالول',
	'tools-delete' => 'ړنگول',
	'tools-links' => 'تړنې',
	'tools-subject' => 'موضوع',
	'tools-hist' => 'پېښليک',
	'tools-curr' => 'اوسنی',
	'tools-globalusage' => 'نړېواله کارېدنه',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Hamilton Abreu
 * @author Luckas
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'title' => 'DiscussõesÓrfãs',
	'description' => 'Encontra páginas de discussão órfãs.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(primeiro selecione uma wiki)',
	'hideredirects' => 'Ocultar redirecionamentos',
	'hidesubpages' => 'Ocultar subpáginas',
	'limit' => 'Limite',
	'page' => 'Página',
	'tooltip-redirect' => 'Esta página é um redirecionamento',
	'output' => 'Resultados',
	'update' => 'Atualizar',
	'tools-view' => 'Ver',
	'tools-delete' => 'Eliminar',
	'tools-links' => 'Páginas afluentes',
	'tools-subject' => 'Assunto da página',
	'tools-hist' => 'Ver histórico',
	'tools-curr' => 'Última alteração',
	'tools-globalusage' => 'Uso do ficheiro',
	'deletesummary' => '$1: Página de discussão órfã',
	'noresults' => 'Não foram encontradas páginas de discussão órfãs neste domínio desta wiki que correspondam às suas especificações.',
	'resultslimited' => 'Os resultados foram limitados a $1 páginas.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 * @author Giro720
 * @author Luckas
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'title' => 'DiscussõesOrfãs2',
	'select-wiki-first' => '(primeiro selecione uma wiki)',
	'hideredirects' => 'Excluir redirecionamentos',
	'hidesubpages' => 'Ocultar subpáginas',
	'limit' => 'Limite',
	'page' => 'Página',
	'redirect' => 'É redirecionamento?',
	'output' => 'Saída',
	'update' => 'Atualizar',
	'tools-delete' => 'apagar',
	'tools-links' => 'links',
	'tools-subject' => 'assunto',
	'tools-hist' => 'hist',
	'tools-curr' => 'atu',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpeza das páginas de discussão órfãs via $1',
	'noresults' => 'Não há páginas de discussão órfãs nesta wiki, este namespace coincide com sua configuração.',
	'resultslimited' => 'Os resultados se limitam a $1 páginas',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Caută pagini de discuție orfane.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(alegeți un wiki mai întâi)',
	'hideredirects' => 'Ascunde redirecționările',
	'hidesubpages' => 'Ascunde subpaginile',
	'limit' => 'Limită',
	'page' => 'Pagină',
	'tooltip-redirect' => 'Această pagină este o redirecționare',
	'output' => 'Date de ieșire',
	'update' => 'Actualizează',
	'tools-view' => 'Vizualizează',
	'tools-delete' => 'Șterge',
	'tools-links' => 'Ce trimite aici',
	'tools-subject' => 'Pagina subiectului',
	'tools-hist' => 'Vezi istoricul',
	'tools-curr' => 'Ultima modificare',
	'tools-globalusage' => 'Utilizarea fișierului',
	'deletesummary' => '$1: Pagină de discuție orfană',
	'noresults' => 'Nicio pagină de discuții orfană aflată în acest spațiu de nume, pe acest wiki, nu se potrivește criteriilor dumneavoastră.',
	'resultslimited' => 'Rezultatele au fost limitate la $1 pagini.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => "(scacchie 'na uicchi apprime)",
	'hideredirects' => 'Scunne le redirezionaminde',
	'hidesubpages' => 'Scunne sottopàggene',
	'limit' => 'Limite',
	'page' => 'Pàgene',
	'redirect' => "Jè 'nu redirezionamende?",
	'output' => 'Resultate',
	'update' => 'Aggiorne',
	'tools-delete' => 'scangelle',
	'tools-links' => 'colleghe',
	'tools-subject' => 'suggette',
	'tools-hist' => 'cunde',
	'tools-curr' => 'corr',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => "Pulizze le pàggene de le 'ngazzaminde senze attane cu $1",
	'noresults' => "Nisciuna pàgene de le 'ngazzaminde orfane sus a sta uicchi jndr'à stu namespace soddisfe le 'mbostaziune tune.",
	'resultslimited' => 'Resultate limitate a $1 pàggene.',
);

/** Russian (русский)
 * @author Askarmuk
 * @author Eleferen
 * @author Lvova
 * @author Okras
 */
$messages['ru'] = array(
	'title' => 'OrphanTalk',
	'label-wiki' => 'Вики',
	'select-wiki-first' => '(сначала выберите вики)',
	'hideredirects' => 'Скрыть перенаправления',
	'hidesubpages' => 'Скрыть подстраницы',
	'limit' => 'Ограничение',
	'page' => 'Страница',
	'tooltip-redirect' => 'Это страница перенаправления',
	'output' => 'Результат',
	'update' => 'Обновить',
	'tools-view' => 'Просмотр',
	'tools-delete' => 'Удалить',
	'tools-links' => 'Ссылки сюда',
	'tools-subject' => 'Основная страница',
	'tools-hist' => 'Посмотреть историю',
	'tools-curr' => 'Последнее изменение',
	'tools-globalusage' => 'Использование файла',
	'deletesummary' => '$1: страница обсуждения-сирота',
	'noresults' => 'В этой вики в заданных вами пространствах имён страниц обсуждения-сирот не найдено.',
	'resultslimited' => 'Результаты были ограничены $1 страницами.',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'title' => 'අනාථකතාබහ2',
	'select-wiki-first' => '(පළමුව විකියක් තෝරාගන්න)',
	'hideredirects' => 'යළියොමු සඟවන්න',
	'hidesubpages' => 'උපපිටු සඟවන්න',
	'limit' => 'සීමාව',
	'page' => 'පිටුව',
	'redirect' => 'යළි යොමුවක්ද?',
	'output' => 'ප්‍රතිදානය',
	'update' => 'යාවත්කාලීන කරන්න',
	'tools-delete' => 'මකන්න',
	'tools-links' => 'සබැඳි',
	'tools-subject' => 'විෂයය',
	'tools-hist' => 'ඉතිහාසය',
	'tools-curr' => 'වත්මන්',
	'tools-globalusage' => 'ගෝලීයභාවිතය',
	'resultslimited' => 'ප්‍රතිඑල $1 පිටු වෙත සීමා කර ඇත.',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'title' => 'OsiroteliPogovori',
	'select-wiki-first' => '(najprej izberite wiki)',
	'hideredirects' => 'Skrij preusmeritve',
	'hidesubpages' => 'Skrij podstrani',
	'limit' => 'Omejitev',
	'page' => 'Stran',
	'output' => 'Izhod',
	'update' => 'Posodobi',
	'tools-delete' => 'Izbriši',
	'tools-links' => 'Kaj se povezuje sem',
	'tools-subject' => 'Zadevna stran',
	'tools-hist' => 'Ogled zgodovine',
	'tools-curr' => 'Zadnja sprememba',
	'tools-globalusage' => 'Uporaba datoteke',
	'deletesummary' => '$1: Osirotela pogovorna stran',
	'noresults' => 'Nobena osirotela pogovorna stran na tem wikiju v tem imenskem prostoru ne ustreza vašim nastavitvam.',
	'resultslimited' => 'Rezultati so bili omejeni na $1 stran.',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => 'ka dooro wiki marka hore)', # Fuzzy
	'hideredirects' => 'Qari isbadalada',
	'hidesubpages' => 'Qari Bogogga faracyada ah',
	'limit' => 'Xad',
	'page' => 'Bogga',
	'redirect' => 'Ma dib u toosin baa?',
	'output' => 'Soo saare',
	'update' => 'Dib u howl galin',
	'tools-delete' => 'tirtir',
	'tools-links' => 'link',
	'tools-subject' => 'Mowduuc',
	'tools-hist' => 'taariikh',
	'tools-curr' => 'hadda',
	'tools-globalusage' => 'adeegsi guud',
	'deletesummary' => 'Ku nadiifinta bogagga cidlada ah $1',
	'noresults' => 'La ma helein wax u dhigma diyaarintaada bogga wada hadalka ee cidlada ah ee wiki iyo meel magacaan wadata.',
	'resultslimited' => 'Waxaa lagu soo koobay natiijooyinka $1 Bogagga.',
);

/** Albanian (shqip)
 * @author FatosMorina
 */
$messages['sq'] = array(
	'hideredirects' => 'Fshih përcjelljet',
	'hidesubpages' => 'Fshih nënfaqet',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(прво изаберите вики)',
	'hideredirects' => 'Сакриј преусмерења',
	'hidesubpages' => 'Сакриј подстранице',
	'limit' => 'Ограничење',
	'page' => 'Страница',
	'redirect' => 'Је ли преусмерење?',
	'output' => 'Излаз',
	'update' => 'Ажурирај',
	'tools-delete' => 'обриши',
	'tools-links' => 'везе',
	'tools-subject' => 'наслов',
	'tools-hist' => 'ист',
	'tools-curr' => 'трен',
	'tools-globalusage' => 'глобална употреба',
	'deletesummary' => 'Чишћење неповезаних страница за разговор преко $1',
	'noresults' => 'На овом викију нема неповезаних страница за разговор у овом именском простору које одговарају вашим поставкама.',
	'resultslimited' => 'Резултати су ограничени на $1 страница.',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'Orfantok2',
	'select-wiki-first' => '(prvo izaberite vikiju)',
	'hideredirects' => 'Sakrij preusmerenja',
	'hidesubpages' => 'Sakrij podstranice',
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'redirect' => 'Preusmerenje',
	'output' => 'Odredište',
	'update' => 'Ažuriraj',
	'tools-delete' => 'obriši',
	'tools-links' => 'veze',
	'tools-subject' => 'naslov',
	'tools-hist' => 'ist',
	'tools-curr' => 'tren',
	'tools-globalusage' => 'upotreba',
	'deletesummary' => 'Čišćenje tajnih stranica za razgovor preko $1',
	'noresults' => 'Nijedna tajna stranica za razgovor se ne poklapa s postavkama u ovom imenskom prostoru.',
	'resultslimited' => 'Rezultati su ograničeni na $1 stranica.',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Liftarn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Hitta föräldralösa diskussionssidor.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(välj en wiki först)',
	'hideredirects' => 'Göm omdirigeringar',
	'hidesubpages' => 'Dölj undersidor',
	'limit' => 'Begränsning',
	'page' => 'Sida',
	'tooltip-redirect' => 'Denna sida är en omdirigering',
	'output' => 'Utdata',
	'update' => 'Uppdatera',
	'tools-view' => 'Visa',
	'tools-delete' => 'Radera',
	'tools-links' => 'Vad som länkar hit',
	'tools-subject' => 'Ämnessida',
	'tools-hist' => 'Visa historik',
	'tools-curr' => 'Senaste ändring',
	'tools-globalusage' => 'Filanvändning',
	'deletesummary' => '$1: Föräldralösa diskussionssidor',
	'noresults' => 'Inga föräldralösa diskussionssidor på den här wikin, i den här namnrymden, matchade dina inställningar.',
	'resultslimited' => 'Resultaten var begränsade till $1 sidor.',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'limit' => 'Kikomo',
	'page' => 'Ukurasa',
	'output' => 'Matokeo',
	'update' => 'Sasisha',
	'tools-delete' => 'futa',
	'tools-links' => 'viungo',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author Sodabottle
 * @author செல்வா
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'select-wiki-first' => '(முதலில் ஒரு விக்கியைத் தெரியவும்)',
	'hideredirects' => 'வழிமாற்றுகளை மறை',
	'hidesubpages' => 'துனை பக்கங்களை மறை',
	'limit' => 'வரம்பு',
	'page' => 'பக்கம்',
	'redirect' => 'வழிமாற்றா?',
	'output' => 'வெளியீடு',
	'update' => 'புதுப்பி',
	'tools-delete' => 'நீக்கு',
	'tools-links' => 'இணைப்புகள்',
	'tools-subject' => 'பொருள்',
	'tools-hist' => 'வரலாறு',
	'tools-curr' => 'தற்போது',
	'tools-globalusage' => 'உலகளாவியப் பயண்பாடு',
	'resultslimited' => '$1 பக்கங்களுக்கு முடிவுகள் வரையறுக்கப்பட்டுள்ளன.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'select-wiki-first' => '(ముందుగా ఒక వికీని ఎంచుకోండి)',
	'hideredirects' => 'దారిమార్పులను దాచు',
	'hidesubpages' => 'ఉపపుటలను దాచు',
	'limit' => 'పరిమితి',
	'page' => 'పుట',
	'redirect' => 'దారిమార్పా?',
	'update' => 'తాజాకరించు',
	'tools-delete' => 'తొలగించండి',
	'tools-links' => 'లంకెలు',
	'tools-subject' => 'విషయం',
	'tools-hist' => 'చరిత్ర',
	'tools-curr' => 'ప్రస్తుత',
	'tools-globalusage' => 'సార్వత్రికవాడుక',
	'resultslimited' => 'ఫలితాలు $1 పుటలకు పరిమితం చేయబడ్డాయి.',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'limit' => 'Limite',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'title' => 'Usapang Ulila 2',
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
	'deletesummary' => 'Nililini ang naulilang mga pahina ng usapan sa pamamagitan ng $1',
	'noresults' => 'Walang naulilang mga pahina ng usapan na tumugma sa mga pagtatakda mo sa wiking ito na nasa loob ng puwang ng pangalan na ito.',
	'resultslimited' => 'Ang mga kinalabasan ay nakahangga sa $1 mga pahina.',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title' => 'OrphanTalk2',
	'page' => 'Сәһифә',
	'output' => 'Нәтиҹә',
	'tools-delete' => 'рәдд кардеј',
	'tools-links' => 'сәбонон',
	'tools-subject' => 'мовзу',
	'tools-hist' => 'тарых',
	'tools-curr' => 'есәт.',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'title' => 'YalnızTartışma2',
	'select-wiki-first' => '(ilk olarak bir viki seçin)',
	'hideredirects' => 'Yönlendirmeleri gizle',
	'hidesubpages' => 'Alt sayfaları gizle',
	'limit' => 'Sınır',
	'page' => 'Sayfa',
	'redirect' => 'Yönlendirme mi?',
	'output' => 'Çıkış',
	'update' => 'Güncelle',
	'tools-delete' => 'sil',
	'tools-links' => 'bağlantılar',
	'tools-subject' => 'konu',
	'tools-hist' => 'geçmiş',
	'tools-curr' => 'günc',
	'tools-globalusage' => 'küresel kullanım',
	'deletesummary' => '$1 aracılığıyla sayfası silinmiş tartışma sayfaları temizleniyor',
	'noresults' => 'Bu vikinin bu ad alanındaki sayfası silinmiş hiçbir tartışma sayfası ayarlarınız ile eşleşmedi.',
	'resultslimited' => 'Sonuçlar, $1 sayfa ile sınırlandırıldı.',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'page' => 'ⵜⴰⵙⵏⴰ',
	'tools-delete' => 'ⵓⴽⵓⵙ',
	'tools-hist' => 'ⴰⵎⵣⵔⵓⵢ',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'title' => 'يالغۇز سۆزلىشىش بېتى2',
	'select-wiki-first' => '(ئالدى بىلەن بىر ۋىكى تاللاڭ)',
	'hideredirects' => 'قايتا نىشانلاشنى يوشۇر',
	'hidesubpages' => 'تارماق بەتلەرنى يوشۇر',
	'limit' => 'چەك',
	'page' => 'بەت',
	'redirect' => 'قايتا نىشانلاشمۇ؟',
	'output' => 'چىقار',
	'update' => 'يېڭىلا',
	'tools-delete' => 'ئۆچۈر',
	'tools-links' => 'ئۇلانمالار',
	'tools-subject' => 'تېما',
	'tools-hist' => 'تارىخ',
	'tools-curr' => 'يېقىندا تۈزىتىلگەن نەشرى',
	'tools-globalusage' => 'پۈتكۈل دائىرىدە قوللان',
	'deletesummary' => '$1 ئارقىلىق يالغۇز سۆزلىشىش بېتىنى تازىلايدۇ',
	'noresults' => 'بۇ ۋىكى بەتتە سىزنىڭ تەڭشىكىڭىزگە ماس كېلىدىغان ئات بوشلۇقىدا يالغۇز سۆزلىشىش بېتى يوق:',
	'resultslimited' => 'نەتىجىلەر پەقەت $1 بەتلەرنىلا كۆرسىتىدۇ.',
);

/** Ukrainian (українська)
 * @author Base
 * @author DixonD
 * @author Тест
 */
$messages['uk'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(спершу оберіть вікі)',
	'hideredirects' => 'Сховати перенаправлення',
	'hidesubpages' => 'Приховати підсторінки',
	'limit' => 'Обмеження',
	'page' => 'Сторінка',
	'redirect' => 'Це перенаправлення?',
	'output' => 'Вивід',
	'update' => 'Оновити',
	'tools-delete' => 'вилучити',
	'tools-links' => 'посилання',
	'tools-subject' => 'тема',
	'tools-hist' => 'історія',
	'tools-curr' => 'остання',
	'tools-globalusage' => 'глобальне використання',
	'deletesummary' => 'Прибирання сторінок обговорень-сиріт за допомогою $1',
	'noresults' => 'У цій вікі в заданих Вами просторах назв не знайдено сторінок обговорень-сиріт.',
	'resultslimited' => 'Результати було обмежено $1 сторінками.',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 * @author Nataev
 */
$messages['uz'] = array(
	'title' => 'OrphanTalk2', # Fuzzy
	'select-wiki-first' => '(oldin vikini tanlang)',
	'hideredirects' => 'Yoʻnaltirishlarni yashirish',
	'hidesubpages' => 'Ostsahifalarni yashirish',
	'tools-curr' => 'Soʻnggi oʻzgarish',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'OrphanTalk',
	'description' => 'Tìm trang thảo luận mồ côi.',
	'label-wiki' => 'Wiki',
	'select-wiki-first' => '(trước tiên hãy chọn wiki)',
	'hideredirects' => 'Ẩn trang đổi hướng',
	'hidesubpages' => 'Ẩn trang con',
	'limit' => 'Tối đa',
	'page' => 'Trang',
	'tooltip-redirect' => 'Trang này là một trang định hướng',
	'output' => 'Kết quả',
	'update' => 'Cập nhật',
	'tools-view' => 'Xem',
	'tools-delete' => 'Xóa',
	'tools-links' => 'Các liên kết đến đây',
	'tools-subject' => 'Trang nội dung',
	'tools-hist' => 'Xem lịch sử',
	'tools-curr' => 'Thay đổi cuối cùng',
	'tools-globalusage' => 'Các trang sử dụng tập tin',
	'deletesummary' => '$1: Trang thảo luận mồ côi',
	'noresults' => 'Không có trang thảo luận mồ côi nằm trong không gian tên này mà trùng với truy vấn của bạn.',
	'resultslimited' => 'Chỉ hiển thị $1 kết quả.',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'label-wiki' => 'וויקי',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Liuxinyu970226
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'title' => '孤立讨论',
	'description' => '寻找孤立讨论页。',
	'label-wiki' => 'wiki',
	'select-wiki-first' => '（先选择一个wiki）',
	'hideredirects' => '隐藏重定向',
	'hidesubpages' => '隐藏子页面',
	'limit' => '限制',
	'page' => '页面',
	'tooltip-redirect' => '此页面是重定向页',
	'output' => '输出',
	'update' => '更新',
	'tools-view' => '查看',
	'tools-delete' => '删除',
	'tools-links' => '链入页面',
	'tools-subject' => '主题页',
	'tools-hist' => '查看历史',
	'tools-curr' => '最后更改',
	'tools-globalusage' => '文件用途',
	'deletesummary' => '$1：孤立讨论页',
	'noresults' => '在该wiki上没有找到你设置的名字空间中的孤立对话页。',
	'resultslimited' => '结果只显示$1页面。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Shirayuki
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'title' => '孤立對話頁2',
	'select-wiki-first' => '（先選擇一個wiki）',
	'hideredirects' => '隱藏重定向頁',
	'hidesubpages' => '隱藏子頁面',
	'limit' => '限制',
	'page' => '頁面',
	'redirect' => '是重定向嗎？',
	'output' => '輸出',
	'update' => '更新',
	'tools-delete' => '已刪除',
	'tools-links' => '連結',
	'tools-subject' => '主旨',
	'tools-hist' => '歷史',
	'tools-curr' => '最新修訂',
	'tools-globalusage' => '全域使用',
	'deletesummary' => '使用$1清理孤立的討論頁',
	'noresults' => '以你設定搜尋，該維基的名字空間內沒有孤立的討論頁。',
	'resultslimited' => '結果只顯示$1頁。',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'title' => '孤立對話頁2',
	'select-wiki-first' => '（先選擇一個wiki）',
	'hideredirects' => '隱藏重定向',
	'hidesubpages' => '隱藏子頁面',
	'limit' => '限制',
	'page' => '頁面',
	'redirect' => '是否重定向',
	'output' => '輸出',
	'update' => '更新',
	'tools-delete' => '刪除',
	'tools-links' => '連結',
	'tools-hist' => '歷史',
	'tools-curr' => '最近',
	'tools-globalusage' => '全域使用',
	'deletesummary' => '使用$1清理孤立對話頁',
	'noresults' => '此wiki中此命名空間中沒有孤立談話頁匹配您的設定。',
	'resultslimited' => '結果只顯示$1頁面。',
);
