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
 * @author Dbc334
 * @author EugeneZelenko
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool. Note that this is a sequel of an old tool by the same name. "2" is part of the name.',
	'label-wiki' => 'Label in the input form indicating which wiki searched.',
	'select-wiki-first' => "This message is displayed in the dropdown menu for the namespace selector if the user didn't choose a wiki yet. Include the parenthesis.",
	'hideredirects' => 'Label for a checkbox in the input form indicating whether redirect pages should be included in the results.',
	'hidesubpages' => 'Label for a checkbox in the input form indicating whether subpages should be included in the results.',
	'limit' => 'Label in front of a dropdown menu. Affects the maximum number of results to display. {{Identical|Limit}}',
	'page' => 'Table heading for the "Page"-column in the results.
{{Identical|Page}}',
	'redirect' => 'Table heading for the "Is redirect"-column in the results. This column is "0" (not a redirect) or "1" (is redirect).',
	'output' => 'Heading above the results output of the search query.
{{Identical|Output}}',
	'update' => 'Clicking this button will update the form to adapt to the new settings. {{Identical|Update}}',
	'tools-delete' => 'This link goes directly to action=delete to delete this orphaned talk page. Part of the tool-links in the left column.
{{Identical|Delete}}',
	'tools-links' => 'Goes to Special:WhatLinksHere for the orphaned page. Part of the tool-links in the left column.
{{Identical|Link}}',
	'tools-subject' => 'Goes to the subject page (which never existed or has been deleted) of the orphaned page. Part of the tool-links in the left column.',
	'tools-hist' => 'Goes to the history view of the orphaned page. Part of the tool-links in the left column.',
	'tools-curr' => 'Shows the latest/current edit to this orphaned page. Part of the tool-links in the left column.',
	'tools-globalusage' => 'If the orphan is a Commons file talk page, this link will link to the Special:GlobalUsage for the File page.',
	'deletesummary' => 'Deletion summary for the "delete"-toollink. $1 is an interwiki link to more info, also a way to promote this tool to others.',
	'noresults' => 'Message displayed if there are no orphaned talk pages found with the current settings.',
	'resultslimited' => "If results were limited by the set' limit, this message is displayed at the bottom of the search results.",
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'settings-legend' => 'Instellings',
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

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Configuración',
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

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'limit' => 'Limit',
	'page' => 'Səhifə',
	'tools-delete' => 'sil',
	'tools-links' => 'keçidlər',
);

/** Belarusian (Беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Наладкі',
	'select-wiki-first' => '(спачатку выберыце вікі)',
	'hideredirects' => 'Схаваць перанакіраванні',
	'hidesubpages' => 'Схаваць падстаронкі',
	'limit' => 'Ліміт',
	'page' => 'Старонка',
	'redirect' => 'Гэта перанакіраванне?',
	'output' => 'Вывад',
	'update' => 'Абнавіць',
	'tools-delete' => 'выдаліць',
	'tools-links' => 'спасылкі',
	'tools-subject' => 'тэма',
	'tools-hist' => 'гіст.',
	'tools-curr' => 'з актуальн',
	'tools-globalusage' => 'глабальн.',
	'deletesummary' => 'Выдаленне абмеркаванняў-сірот праз $1',
	'noresults' => 'У гэтай вікі і ў гэтай прасторы назваў абмеркаванняў-сірот няма.',
	'resultslimited' => 'Вынік абмежаваны да $1 старонак.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Налады',
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

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'settings-legend' => 'Настройки',
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
	'deletesummary' => '$1-এর মাধ্যমে পিতৃহীন আলাপ পাতা পরিস্কার করা হচ্ছে',
	'noresults' => 'এই উইকির এই নামস্থানের কোনো পিতৃহীন আলাপ পাতার সাথে আপনার সেটিং মেলেনি।',
	'resultslimited' => 'ফলাফলগুলো $1টি পাতার মধ্যে সীমাবদ্ধ ছিলো।',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Arventennoù',
	'select-wiki-first' => '(diuzit ur wiki da gentañ)',
	'hideredirects' => 'Kuzhat an adkasoù',
	'hidesubpages' => 'Kuzhat an ispajennoù',
	'limit' => 'Bevenn',
	'page' => 'Pajenn',
	'redirect' => 'Un adkas eo ?',
	'output' => 'Ezvont',
	'update' => 'Hizivaat',
	'tools-delete' => 'diverkañ',
	'tools-links' => 'liammoù',
	'tools-subject' => 'danvez',
	'tools-hist' => 'istor',
	'tools-curr' => 'red',
	'tools-globalusage' => 'Implij hollek',
	'deletesummary' => 'O naetaat ar pajennoù kaozeal dre $1',
	'noresults' => "N'eus bet kavet pajenn gaozeal dall ebet er wiki, en esaouenn anv a glot gant ho kefluniadur.",
	'resultslimited' => "Krennet eo bet an disoc'hoù da $1 pajenn.",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'settings-legend' => 'Postavke',
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'update' => 'Ažuriraj',
	'tools-delete' => 'obriši',
	'tools-subject' => 'tema',
);

/** Catalan (Català)
 * @author SMP
 */
$messages['ca'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Paràmetres',
	'select-wiki-first' => '(primer seleccioneu un wiki)',
	'hideredirects' => 'Amaga redireccions',
	'hidesubpages' => 'Amaga subpàgines',
	'limit' => 'Límit',
	'page' => 'Pàgina',
	'redirect' => 'És una redirecció?',
	'output' => 'Resultats',
	'update' => 'Actualitza',
	'tools-delete' => 'elimina',
	'tools-links' => 'enllaços',
	'tools-subject' => 'pàgina',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'ús global',
	'deletesummary' => 'Neteja de pàgines de discussió òrfenes via $1',
	'noresults' => "No s'ha trobat en aquest wiki cap pàgina de discussió òrfena en aquest espai de noms que correspongui amb la vostra configuració.",
	'resultslimited' => 'Els resultats es limiten a $1 pàgines.',
);

/** Danish (Dansk)
 * @author Sarrus
 */
$messages['da'] = array(
	'settings-legend' => 'Indstillinger',
	'select-wiki-first' => '(vælg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'page' => 'Side',
	'output' => 'Output',
	'tools-delete' => 'slet',
	'tools-subject' => 'emne',
	'resultslimited' => 'Resultaterne var begrænsede til $1 sider.',
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
	'deletesummary' => 'Löschung der verwaisten Diskussionsseite mit $1',
	'noresults' => 'Es konnten auf  diesem Wiki keine den Einstellungen entsprechenden verwaisten Diskussionsseiten in diesem Namensraum ermittelt werden.',
	'resultslimited' => 'Die Ergebnisse wurden auf $1 Seiten beschränkt.',
);

/** Greek (Ελληνικά)
 * @author Evropi
 */
$messages['el'] = array(
	'settings-legend' => 'Ρυθμίσεις',
	'select-wiki-first' => '(επιλέξτε πρώτα ένα βίκι)',
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
);

/** Spanish (Español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Configuración',
	'select-wiki-first' => '(selecciona primero un wiki)',
	'hideredirects' => 'Ocultar redirecciones',
	'hidesubpages' => 'Ocultar subpáginas',
	'limit' => 'Límite',
	'page' => 'Página',
	'redirect' => '¿Es redirección?',
	'output' => 'Salida',
	'update' => 'Actualizar',
	'tools-delete' => 'eliminar',
	'tools-links' => 'enlaces',
	'tools-subject' => 'asunto',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpieza de páginas de discusión huérfanas con $1',
	'noresults' => 'Ninguna página de discusión huérfana en este wiki, en este espacio de nombres coinciden con tu configuración.',
	'resultslimited' => 'Los resultados se limitan a $1 páginas.',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Wayiran
 */
$messages['fa'] = array(
	'title' => 'بحث‌یتیم۲',
	'settings-legend' => 'تنظیمات',
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

/** French (Français)
 * @author Crochet.david
 * @author Jean-Frédéric
 */
$messages['fr'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Paramètres',
	'select-wiki-first' => '(sélectionnez d’abord un wiki)',
	'hideredirects' => 'Masquer les redirections',
	'hidesubpages' => 'Masquer les sous-pages',
	'limit' => 'Limite',
	'page' => 'Page',
	'redirect' => 'Est une redirection ?',
	'output' => 'Sortie',
	'update' => 'Mettre à jour',
	'tools-delete' => 'supprimer',
	'tools-links' => 'liens',
	'tools-subject' => 'Sujet',
	'tools-hist' => 'hist',
	'tools-curr' => 'actu',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Nettoyage des pages de discussion orphelines par $1',
	'noresults' => 'Aucune page de discussion orpheline dans ce wiki dans cet espace de nommage correspondant à votre configuration.',
	'resultslimited' => 'Les résultats ont été limités à $1 pages.',
);

/** Croatian (Hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Postavke',
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

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Beállítások',
	'select-wiki-first' => '(előbb válassz egy wikit)',
	'hideredirects' => 'Átirányítások elrejtése',
	'hidesubpages' => 'Allapok elrejtése',
	'limit' => 'Korlát',
	'page' => 'Lap',
	'redirect' => 'Átirányítás?',
	'output' => 'Kimenet',
	'update' => 'Frissítés',
	'tools-delete' => 'törlés',
	'tools-links' => 'hivatkozások',
	'tools-subject' => 'megtekintés',
	'tools-hist' => 'laptörténet',
	'tools-curr' => 'akt',
	'tools-globalusage' => 'globális használat',
	'deletesummary' => 'Árva vitalapok törlése az $1 segítségével',
	'noresults' => 'Ebben a névtérben egyetlen vitalap sem felel meg a megadott beállításoknak.',
	'resultslimited' => 'Az eredmények száma $1 db lapra lett korlátozva.',
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
	'deletesummary' => 'Radimento de paginas de discussion orphane via $1',
	'noresults' => 'Nulle pagina de discussion orphane in iste wiki e in iste spatio de nomines correspondeva a tu configurationes.',
	'resultslimited' => 'Le resultatos ha essite limitate a $1 paginas.',
);

/** Italian (Italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'settings-legend' => 'Impostazioni',
	'limit' => 'Limite',
	'page' => 'Pagina',
	'update' => 'Aggiorna',
	'tools-delete' => 'cancella',
	'tools-links' => 'collegamenti',
	'tools-hist' => 'cron',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'settings-legend' => 'ការកំណត់​នានា',
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

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => 'Alleinjeblevve Klaafsigge 2',
	'settings-legend' => 'Enshtällonge',
	'label-wiki' => 'Et Wiki',
	'select-wiki-first' => '(donn et eez e Wiki ußsöhke)',
	'hideredirects' => 'Ömleidunge fott lohße',
	'hidesubpages' => 'Ongersigge fott lohße',
	'limit' => 'Donn de Aanzahl Siggge en dä Leß bejränze op',
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
	'resultslimited' => 'Heh di Leß es bejränz op $1 Sigg(e)',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'settings-legend' => 'Astellungen',
	'select-wiki-first' => "(sicht d'éischt eng Wiki eraus)",
	'hideredirects' => 'Viruleedunge verstoppen',
	'hidesubpages' => 'Ënnersäite verstoppen',
	'limit' => 'Limit',
	'page' => 'Säit',
	'redirect' => 'Ass et eng Viruleedung?',
	'update' => 'Aktualiséieren',
	'tools-delete' => 'läschen',
	'tools-links' => 'Linken',
	'tools-subject' => 'Sujet',
	'tools-hist' => 'Versiounen',
	'tools-curr' => 'aktuell',
	'resultslimited' => "D'Resultater goufen op $1 Säite limitéiert.",
);

/** Lithuanian (Lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Nustatymai',
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

/** Latvian (Latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'hidesubpages' => 'Paslēpt apakšlapas',
	'page' => 'Lapa',
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
	'deletesummary' => 'Бришење на осамени страници за разговор преку $1',
	'noresults' => 'На ова вики нема осамени страници за разговор во овој именски простор што соодветствуваат на вашите поставки.',
	'resultslimited' => 'Резултатите беа ограничени на $1 страници',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Tetapan',
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
	'resultslimited' => 'Ir-riżultati ġew limitati għal $1 paġni.',
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

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'title' => 'Foreldreløse diskusjonssider 2',
	'settings-legend' => 'Innstillinger',
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

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'settings-legend' => 'Uffstellinge',
	'page' => 'Blatt',
	'tools-links' => 'Gleecher',
);

/** Polish (Polski)
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Ustawienia',
	'select-wiki-first' => '(najpierw wybierz odpowiednią wiki)',
	'hideredirects' => 'Ukryj przekierowania',
	'hidesubpages' => 'Ukryj podstrony',
	'limit' => 'Ograniczenie',
	'page' => 'Strona',
	'redirect' => 'Przekierowanie?',
	'output' => 'Wynik',
	'update' => 'Aktualizuj',
	'tools-delete' => 'usuń',
	'tools-links' => 'linki',
	'tools-subject' => 'temat',
	'tools-hist' => 'hist.',
	'tools-curr' => 'bież.',
	'tools-globalusage' => 'globalne wykorzystanie pliku',
	'deletesummary' => 'Usuwanie osieroconych stron dyskusji przy użyciu $1',
	'noresults' => 'Nie odnaleziono osieroconych stron dyskusji odpowiadających wybranemu zapytaniu dla tej przestrzeni nazw.',
	'resultslimited' => 'Wyniki zostały ograniczone do $1 stron.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'settings-legend' => 'امستنې',
	'page' => 'مخ',
	'update' => 'اوسمهالول',
	'tools-delete' => 'ړنګول',
	'tools-links' => 'تړنې',
	'tools-hist' => 'پېښليک',
	'tools-curr' => 'اوسنی',
	'tools-globalusage' => 'نړېواله کارېدنه',
);

/** Portuguese (Português)
 * @author GoEThe
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'title' => 'DiscussõesOrfãs2',
	'settings-legend' => 'Definições',
	'select-wiki-first' => '(primeiro seleccione uma wiki)',
	'hideredirects' => 'Excluir redireccionamentos',
	'hidesubpages' => 'Excluir subpáginas',
	'limit' => 'Limite',
	'page' => 'Página',
	'redirect' => 'Redireccionamento?',
	'output' => 'Resultados',
	'update' => 'Actualizar',
	'tools-delete' => 'eliminar',
	'tools-links' => 'links',
	'tools-subject' => 'Página',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpeza de páginas de discussão orfãs, usando o $1',
	'noresults' => 'Não foram encontradas páginas de discussão orfãs neste espaço nominal desta wiki, que correspondam às suas especificações.',
	'resultslimited' => 'Os resultados foram limitados a $1 páginas.',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Setări',
	'select-wiki-first' => '(alegeți un wiki mai întâi)',
	'hideredirects' => 'Ascunde redirecționările',
	'hidesubpages' => 'Ascunde subpaginile',
	'limit' => 'Limită',
	'page' => 'Pagină',
	'redirect' => 'Este redirecționare?',
	'output' => 'Date de ieșire',
	'update' => 'Actualizează',
	'tools-delete' => 'ștergere',
	'tools-links' => 'legături',
	'tools-subject' => 'subiect',
	'tools-hist' => 'istoric',
	'tools-curr' => 'vers. act.',
	'tools-globalusage' => 'utilizare globală',
	'deletesummary' => 'Ștergerea paginilor de discuții orfane folosind $1',
	'noresults' => 'Nicio pagină de discuții orfană aflată în acest spațiu de nume, pe acest wiki, nu se potrivește criteriilor dumneavoastră.',
	'resultslimited' => 'Rezultatele au fost limitate la $1 pagini.',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'settings-legend' => "'Mbostaziune",
	'limit' => 'Limite',
	'page' => 'Pàgene',
	'tools-delete' => 'scangelle',
	'tools-subject' => 'suggette',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'title' => 'OsiroteliPogovori2',
	'settings-legend' => 'Nastavitve',
	'select-wiki-first' => '(najprej izberite wiki)',
	'hideredirects' => 'Skrij preusmeritve',
	'hidesubpages' => 'Skrij podstrani',
	'limit' => 'Omejitev',
	'page' => 'Stran',
	'redirect' => 'Je preusmeritev?',
	'output' => 'Izhod',
	'update' => 'Posodobi',
	'tools-delete' => 'izbriši',
	'tools-links' => 'povezave',
	'tools-subject' => 'zadeva',
	'tools-hist' => 'zgod',
	'tools-curr' => 'tren',
	'tools-globalusage' => 'globalnauporaba',
	'deletesummary' => 'Čiščenje osirotelih pogovornih strani preko $1',
	'noresults' => 'Nobena osirotela pogovorna stran na tem wikiju v tem imenskem prostoru ne ustreza vašim nastavitvam.',
	'resultslimited' => 'Rezultati so bili omejeni na $1 stran.',
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
	'redirect' => 'Преусмерење',
	'output' => 'Одредиште',
	'update' => 'Ажурирај',
	'tools-delete' => 'обриши',
	'tools-links' => 'везе',
	'tools-subject' => 'наслов',
	'tools-hist' => 'ист',
	'tools-curr' => 'трен',
	'tools-globalusage' => 'употреба',
	'deletesummary' => 'Чишћење тајних страница за разговор преко $1',
	'noresults' => 'Ниједна тајна страница за разговор се не поклапа с поставкама у овом именском простору.',
	'resultslimited' => 'Резултати су ограничени на $1 страница.',
);

/** Serbian Latin ekavian (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'Orfantok2',
	'settings-legend' => 'Postavke',
	'select-wiki-first' => '(prvo izaberite vikiju)',
	'hideredirects' => 'Sakrij preusmerenja',
	'hidesubpages' => 'Sakrij podstranice',
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'redirect' => 'Preusmerenje',
	'output' => 'Odredište',
	'update' => 'Ažuriraj',
	'tools-delete' => 'Obriši',
	'tools-links' => 'veze',
	'tools-subject' => 'naslov',
	'tools-hist' => 'ist',
	'tools-curr' => 'tren',
	'tools-globalusage' => 'upotreba',
	'deletesummary' => 'Čišćenje tajnih stranica za razgovor preko $1',
	'noresults' => 'Nijedna tajna stranica za razgovor se ne poklapa s postavkama u ovom imenskom prostoru.',
	'resultslimited' => 'Rezultati su ograničeni na $1 stranica.',
);

/** Swedish (Svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Inställningar',
	'select-wiki-first' => '(Välj en wiki först)',
	'hideredirects' => 'Göm omdirigeringar',
	'hidesubpages' => 'Dölj undersidor',
	'limit' => 'Begränsning',
	'page' => 'Sida',
	'redirect' => 'Är omdirigering?',
	'output' => 'Utdata',
	'update' => 'Uppdatera',
	'tools-delete' => 'radera',
	'tools-links' => 'länkar',
	'tools-subject' => 'ämne',
	'tools-hist' => 'hist',
	'tools-curr' => 'nu',
	'tools-globalusage' => 'global användning',
	'deletesummary' => 'Rensar upp bland föräldralösa diskussionssidor via $1',
	'noresults' => 'Inga föräldralösa diskussionssidor på denna wikin i denna namnrymden matchade dina inställningar.',
	'resultslimited' => 'Resultaten var begränsade till $1 sidor.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'settings-legend' => 'అమరికలు',
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

/** Tetum (Tetun)
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
	'deletesummary' => 'Nililini ang naulilang mga pahina ng usapan sa pamamagitan ng $1',
	'noresults' => 'Walang naulilang mga pahina ng usapan na tumugma sa mga pagtatakda mo sa wiking ito na nasa loob ng puwang ng pangalan na ito.',
	'resultslimited' => 'Ang mga kinalabasan ay nakahangga sa $1 mga pahina.',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'title' => 'YalnızTartışma2',
	'settings-legend' => 'Ayarlar',
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

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'OrphanTalk2',
	'settings-legend' => 'Truy vấn',
	'select-wiki-first' => '(trước tiên hãy chọn wiki)',
	'hideredirects' => 'Ẩn trang đổi hướng',
	'hidesubpages' => 'Ẩn trang phụ',
	'limit' => 'Tối đa',
	'page' => 'Trang',
	'redirect' => 'Có đổi hướng',
	'output' => 'Kết quả',
	'update' => 'Cập nhật',
	'tools-delete' => 'xóa',
	'tools-links' => 'liên kết',
	'tools-subject' => 'nội dung',
	'tools-hist' => 'sử',
	'tools-curr' => 'hiện',
	'tools-globalusage' => 'sử dụng toàn cầu',
	'deletesummary' => 'Dọn sạch các trang thảo luận mồ coi dùng $1',
	'noresults' => 'Không có trang thảo luận mồ coi nằm trong không gian tên này mà trùng với truy vấn của bạn.',
	'resultslimited' => 'Chỉ hiển thị $1 kết quả.',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author Shizhao
 */
$messages['zh-hans'] = array(
	'title' => '孤立对话页2',
	'settings-legend' => '设置',
	'select-wiki-first' => '（先选择一个wiki）',
	'hideredirects' => '隐藏重定向页',
	'hidesubpages' => '隐藏子页面',
	'limit' => '限制',
	'page' => '页面',
	'redirect' => '是重定向吗？',
	'output' => '输出',
	'update' => '更新',
	'tools-delete' => '删除',
	'tools-links' => '链入',
	'tools-subject' => '主页面',
	'tools-hist' => '历史',
	'tools-curr' => '最新修订',
	'tools-globalusage' => '全域使用',
	'deletesummary' => '使用$1清理孤立的对话页',
	'noresults' => '在该wiki上没有找到你设置的名字空间中的孤立对话页。',
	'resultslimited' => '结果只显示$1页面。',
);

