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
	'section-links' => 'Links',
	'section-iwlinks' => 'Interwiki links',
	'section-extlinks' => 'External links',
	'section-categories' => 'Categories',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Liuxinyu970226
 * @author Metalhead64
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => 'Title heading of [[Special:WhatLeavesHere]] and link to it from [[Special:SpecialPages]].
{{Identical|Whatleaveshere}}',
	'title-leaveshere' => 'Title heading of [[Special:WhatLeavesHere]] when viewing results for a specific page.

Parameters:
* $1 - the name of the associated page',
	'sub-leaveshere' => 'Used below the heading on [[Special:WhatLeavesHere]]. Parameters:
* $1 - the name of the associated page',
	'label-page' => 'Label of input field for page name.
{{Identical|Page}}',
	'label-namespace' => 'Label of dropdown menu for namespace.
{{Identical|Namespace}}',
	'label-limit' => 'Label of dropdown menu for number of results.
{{Identical|Limit}}',
	'button-submit' => 'Submit button of form.
{{Identical|Go}}',
	'noleaveshere' => 'Used on [[Special:WhatLeavesHere]] when there are no outgoing links found.

Parameters:
* $1 - page title (with link)',
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
	'linksearch' => 'Link to [[Special:LinkSearch]] to find other pages with the same outgoing external link.

See also:
* {{msg-mw|Linksearch}}',
	'section-links' => 'Section header for page links, file links and tranclusions.
{{Identical|Link}}',
	'section-iwlinks' => 'Section header for interwiki links.
{{Identical|Interwiki link}}',
	'section-extlinks' => 'Section header for external links.
{{Identical|External link}}',
	'section-categories' => 'Section header for categories.
{{Identical|Category}}',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => "Qué sal d'equí",
	'title-leaveshere' => 'Enllaces que salen de "$1"',
	'sub-leaveshere' => 'Les siguientes páxines enllacen dende $1',
	'label-page' => 'Páxina',
	'label-namespace' => 'Espaciu de nomes',
	'label-limit' => 'Llímite',
	'button-submit' => 'Dir',
	'noleaveshere' => "Nun hai nada qu'enllace dende $1",
	'link-whatleaveshere' => "Qué sal d'equí",
	'tooltip-whatleaveshere' => "Llista de tolo qu'enllaza dende equí",
	'whatlinkshere' => "Lo qu'enllaza equí",
	'whatlinkshere-whatleaveshere' => "¿Qué sal d'equí?",
	'istemplate' => 'tresclusión',
	'isfile' => 'enllaz a ficheru',
	'linksearch' => 'LinkSearch',
	'section-links' => 'Enllaces',
	'section-iwlinks' => 'Enllaces interwiki',
	'section-extlinks' => 'Enllaces esternos',
	'section-categories' => 'Categoríes',
);

/** Belarusian (беларуская)
 * @author Artificial123
 */
$messages['be'] = array(
	'title-leaveshere' => 'Спасылкі, якія сыходзяць ад "$1"',
	'sub-leaveshere' => 'Наступныя старонкі спасылаюцца ад $1',
	'label-page' => 'Старонка',
	'label-namespace' => 'Прастора імёнаў',
	'label-limit' => 'Абмежаванне',
	'button-submit' => 'Перайсці',
	'noleaveshere' => 'Нічога не звязвае з $1',
	'link-whatleaveshere' => 'Сюды спасылаюцца',
	'tooltip-whatleaveshere' => 'Спіс усіх спасылак адсюль',
	'whatlinkshere' => 'Спасылкі сюды',
	'istemplate' => 'уключэнне',
	'isfile' => 'спасылка на файл',
	'linksearch' => 'ПошукСпасылак',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'label-page' => 'পাতা',
	'button-submit' => 'চলো',
	'whatlinkshere' => 'সংযোগকারী পাতাসমূহ',
	'section-iwlinks' => 'আন্তঃউইকি সংযোগ',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'label-page' => 'Pajenn',
	'label-namespace' => 'Esaouenn anv',
	'label-limit' => 'Bevenn',
	'button-submit' => 'Mont',
	'whatlinkshere' => 'Pajennoù liammet',
	'isfile' => 'Liamm war-zu ar restr',
	'section-links' => 'Liammoù',
	'section-iwlinks' => 'Liammoù etrewiki',
	'section-extlinks' => 'Liammoù diavaez',
	'section-categories' => 'Rummadoù',
);

/** Catalan (català)
 * @author Fitoschido
 */
$messages['ca'] = array(
	'label-page' => 'Pàgina',
	'label-namespace' => 'Espai de noms',
	'label-limit' => 'Límit',
	'button-submit' => 'Vés-hi',
	'isfile' => 'enllaç a fitxer',
	'section-links' => 'Enllaços',
	'section-extlinks' => 'Enllaços externs',
	'section-categories' => 'Categories',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'label-page' => 'АгӀо',
	'label-limit' => 'Доза тохар',
	'button-submit' => 'Лаха',
	'section-links' => 'Хьажоргаш',
	'section-categories' => 'Категореш',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'title' => 'Was verlässt hier',
	'title-leaveshere' => 'Links, die „$1“ verlassen',
	'sub-leaveshere' => 'Die folgenden Seiten verlinken von $1',
	'label-page' => 'Seite',
	'label-namespace' => 'Namensraum',
	'label-limit' => 'Limit',
	'button-submit' => 'Los',
	'noleaveshere' => 'Keine Links von $1',
	'link-whatleaveshere' => 'Was verlässt hier',
	'tooltip-whatleaveshere' => 'Liste von allem, das von hier verlinkt',
	'whatlinkshere' => 'Links auf diese Seite',
	'whatlinkshere-whatleaveshere' => 'Was verlässt hier?',
	'istemplate' => 'Vorlageneinbindung',
	'isfile' => 'Dateilink',
	'linksearch' => 'Weblinksuche',
	'section-links' => 'Links',
	'section-iwlinks' => 'Interwiki-Links',
	'section-extlinks' => 'Weblinks',
	'section-categories' => 'Kategorien',
);

/** Spanish (español)
 * @author AwesomeOrange89
 * @author Fitoschido
 * @author Macofe
 */
$messages['es'] = array(
	'title' => 'Lo que sale de aquí',
	'title-leaveshere' => 'Los enlaces que parten de "$1"',
	'sub-leaveshere' => 'Las siguientes páginas enlazan a partir de $1',
	'label-page' => 'Página',
	'label-namespace' => 'Espacio de nombres',
	'label-limit' => 'Límite',
	'button-submit' => 'Ir',
	'noleaveshere' => 'Nada vincula desde $1',
	'link-whatleaveshere' => 'Lo que sale de aquí',
	'tooltip-whatleaveshere' => 'Lista de todo lo que enlaza aquí',
	'whatlinkshere' => 'Lo que enlaza aquí',
	'whatlinkshere-whatleaveshere' => '¿Qué sale de aquí?',
	'istemplate' => 'transclusión',
	'isfile' => 'enlace de archivo',
	'linksearch' => 'LinkSearch',
	'section-links' => 'Enlaces',
	'section-iwlinks' => 'Enlaces interwikis',
	'section-extlinks' => 'Enlaces externos',
	'section-categories' => 'Categorías',
);

/** Persian (فارسی)
 * @author Reza1615
 */
$messages['fa'] = array(
	'label-page' => 'صفحه',
	'label-namespace' => 'فضای نام',
	'label-limit' => 'محدودیت',
	'button-submit' => 'برو',
	'whatlinkshere' => 'پیوندها به این صفحه',
	'istemplate' => 'تراگنجانش‌ها',
	'isfile' => 'پیوند به پرونده',
	'section-links' => 'پیوندها',
	'section-categories' => 'رده‌ها',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'title' => 'Ce qui part d’ici',
	'title-leaveshere' => 'Liens qui partent de « $1 »',
	'sub-leaveshere' => 'Les pages suivantes sont liées depuis $1',
	'label-page' => 'Page',
	'label-namespace' => 'Espace de noms',
	'label-limit' => 'Limite',
	'button-submit' => 'Aller',
	'noleaveshere' => 'Rien n’est pointé par $1',
	'link-whatleaveshere' => 'Ce qui part d’ici',
	'tooltip-whatleaveshere' => 'Liste de tout ce qui est lié depuis ici',
	'whatlinkshere' => 'Ce qui pointe ici',
	'whatlinkshere-whatleaveshere' => 'Qu’est-ce qui part d’ici ?',
	'istemplate' => 'inclusion',
	'isfile' => 'lien de fichier',
	'linksearch' => 'LinkSearch',
	'section-links' => 'Liens',
	'section-iwlinks' => 'Liens entre wikis',
	'section-extlinks' => 'Liens externes',
	'section-categories' => 'Catégories',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title' => 'דפים המקושרים מכאן',
	'title-leaveshere' => 'קישורים שיוצאים מהדף "$1"',
	'sub-leaveshere' => 'הדפים הבאים מקושרים מהדף $1',
	'label-page' => 'דף',
	'label-namespace' => 'מרחב שם',
	'label-limit' => 'מגבלה',
	'button-submit' => 'קדימה',
	'noleaveshere' => 'אין שום קישור מהדף $1',
	'link-whatleaveshere' => 'דפים המקושרים מכאן',
	'tooltip-whatleaveshere' => 'רשימה של כל מה שמקושר מכאן',
	'whatlinkshere' => 'דפים המקושרים לכאן',
	'whatlinkshere-whatleaveshere' => 'מה יוצא מכאן?',
	'istemplate' => 'הכללה',
	'isfile' => 'קישור לקובץ',
	'linksearch' => 'חיפוש קישורים',
	'section-links' => 'קישורים',
	'section-iwlinks' => 'קישורי בינוויקי',
	'section-extlinks' => 'קישורים חיצוניים',
	'section-categories' => 'קטגוריות',
);

/** Hungarian (magyar)
 * @author Csega
 */
$messages['hu'] = array(
	'label-page' => 'Lap',
	'label-namespace' => 'Névtér',
	'label-limit' => 'Korlát',
	'button-submit' => 'Menj',
	'whatlinkshere' => 'Mi hivatkozik erre',
	'isfile' => 'fájlhivatkozás',
	'linksearch' => 'LinkSearch',
);

/** Italian (italiano)
 * @author Beta16
 * @author FRacco
 */
$messages['it'] = array(
	'title' => 'Partono da qui',
	'title-leaveshere' => 'Collegamenti che partono da "$1"',
	'sub-leaveshere' => 'Le seguenti pagine sono collegate da $1',
	'label-page' => 'Pagina',
	'label-namespace' => 'Namespace',
	'label-limit' => 'Limite',
	'button-submit' => 'Vai',
	'noleaveshere' => 'Nessun collegamento da $1',
	'link-whatleaveshere' => 'Partono da qui',
	'tooltip-whatleaveshere' => 'Elenco di tutto ciò che è collegato da qui',
	'whatlinkshere' => 'Puntano qui',
	'whatlinkshere-whatleaveshere' => 'Cosa parte da qui?',
	'istemplate' => 'inclusione',
	'isfile' => 'collegamento a file',
	'linksearch' => 'Ricerca collegamenti esterni',
	'section-links' => 'Collegamenti',
	'section-iwlinks' => 'Collegamenti interwiki',
	'section-extlinks' => 'Collegamenti esterni',
	'section-categories' => 'Categorie',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'リンク先',
	'title-leaveshere' => '「$1」からのリンク先',
	'sub-leaveshere' => '以下のページは $1 からリンクされています',
	'label-page' => 'ページ',
	'label-namespace' => '名前空間',
	'label-limit' => '表示数',
	'button-submit' => '表示',
	'noleaveshere' => '$1 からはどこにもリンクしていません',
	'link-whatleaveshere' => 'リンク先',
	'tooltip-whatleaveshere' => 'このページからのすべてのリンク先の一覧',
	'whatlinkshere' => 'リンク元',
	'whatlinkshere-whatleaveshere' => 'リンク元',
	'istemplate' => '参照読み込み',
	'isfile' => 'ファイルへのリンク',
	'linksearch' => '外部リンクの検索',
	'section-links' => 'リンク',
	'section-iwlinks' => 'ウィキ間リンク',
	'section-extlinks' => '外部リンク',
	'section-categories' => 'カテゴリ',
);

/** Korean (한국어)
 * @author Tyey
 * @author 아라
 */
$messages['ko'] = array(
	'label-page' => '문서',
	'label-limit' => '제한',
	'isfile' => '파일 링크하기',
	'linksearch' => '링크검색',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'Wat hei fortgeet',
	'title-leaveshere' => 'Linken déi vun "$1" fort ginn',
	'sub-leaveshere' => 'Dës Säite si vu(n) $1 aus verlinkt',
	'label-page' => 'Säit',
	'label-namespace' => 'Nummraum',
	'label-limit' => 'Limit',
	'button-submit' => 'Lass',
	'noleaveshere' => 'Näischt linkt vu(n) $1',
	'link-whatleaveshere' => 'Wat hei fort geet',
	'whatlinkshere' => 'Linken op dës Säit',
	'whatlinkshere-whatleaveshere' => 'Wat geet hei fort?',
	'istemplate' => 'an dëser Säit dran',
	'isfile' => 'Link op de Fichier',
	'linksearch' => 'LinkSearch',
	'section-links' => 'Linken',
	'section-iwlinks' => 'Interwiki-Linken',
	'section-extlinks' => 'Extern Linken',
	'section-categories' => 'Kategorien',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Што одведува оттука',
	'title-leaveshere' => 'Врски што одведуваат од „$1“',
	'sub-leaveshere' => 'Следниве страници одведуваат од $1',
	'label-page' => 'Страница',
	'label-namespace' => 'Именски простор',
	'label-limit' => 'Граница',
	'button-submit' => 'Дај',
	'noleaveshere' => 'Ништо не одведува од $1',
	'link-whatleaveshere' => 'Што одведува оттука',
	'tooltip-whatleaveshere' => 'Список на сè што одведува оттука',
	'whatlinkshere' => 'Што води овде',
	'whatlinkshere-whatleaveshere' => 'Што одведува оттука?',
	'istemplate' => 'превметнување',
	'isfile' => 'врска до податотеката',
	'linksearch' => 'ПребарувањеВрски',
	'section-links' => 'Врски',
	'section-iwlinks' => 'Меѓујазични врски',
	'section-extlinks' => 'Надворешни врски',
	'section-categories' => 'Категории',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'button-submit' => 'Zeuk',
	'isfile' => 'bestaandsverwiezing',
);

/** Nepali (नेपाली)
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'label-page' => 'पृष्ठ',
	'label-namespace' => 'नेमस्पेस',
	'label-limit' => 'सीमा',
	'button-submit' => 'जाने',
	'isfile' => 'फाइल लिङ्क',
	'section-links' => 'लिङ्कहरू',
	'section-iwlinks' => 'अन्तरविकि लिङ्कहरू',
	'section-extlinks' => 'बाह्य लिङ्कहरू',
	'section-categories' => 'श्रेणीहरू',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Sjoerddebruin
 * @author Southparkfan
 */
$messages['nl'] = array(
	'title' => 'Links vanaf deze pagina',
	'title-leaveshere' => 'Pagina\'s die verwijzen vanaf "$1"',
	'sub-leaveshere' => "De volgende pagina's verwijzen vanaf $1",
	'label-page' => 'Pagina',
	'label-namespace' => 'Naamruimte',
	'label-limit' => 'Limiet',
	'button-submit' => 'OK',
	'noleaveshere' => 'Geen verwijzingen vanaf $1',
	'link-whatleaveshere' => 'Links vanaf deze pagina',
	'tooltip-whatleaveshere' => 'Lijst van alle verwijzingen vanaf deze pagina',
	'whatlinkshere' => 'Links naar deze pagina',
	'whatlinkshere-whatleaveshere' => 'Links vanaf deze pagina?',
	'istemplate' => 'ingevoegd als sjabloon',
	'isfile' => 'bestand',
	'linksearch' => 'Externe koppelingen zoeken',
	'section-links' => 'Links',
	'section-iwlinks' => 'Interwikilinks',
	'section-extlinks' => 'Externe links',
	'section-categories' => 'Categorieën',
);

/** Polish (polski)
 * @author Alan ffm
 * @author Matik7
 * @author Matma Rex
 */
$messages['pl'] = array(
	'sub-leaveshere' => 'Te strony są linkowane z $1',
	'label-page' => 'Strona',
	'label-namespace' => 'Przestrzeń nazw',
	'label-limit' => 'Ograniczenie',
	'button-submit' => 'Dalej',
	'noleaveshere' => 'Nic nie jest linkowane z $1',
	'tooltip-whatleaveshere' => 'Lista wszystkich stron, które są stąd linkowane',
	'whatlinkshere' => 'Linkujące',
	'istemplate' => 'transkluzja',
	'isfile' => 'link do pliku',
	'section-links' => 'Linki',
	'section-iwlinks' => 'Linki interwiki',
	'section-extlinks' => 'Linki zewnętrzne',
	'section-categories' => 'Kategorie',
);

/** Portuguese (português)
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'label-page' => 'Página',
	'label-namespace' => 'Domínio',
	'label-limit' => 'Limite',
	'button-submit' => 'Ir',
	'whatlinkshere' => 'Páginas afluentes',
	'istemplate' => 'transclusão',
	'isfile' => 'ligação para ficheiro',
	'section-iwlinks' => 'Ligações interlínguas',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Tooguether
 */
$messages['pt-br'] = array(
	'section-iwlinks' => 'Links interwiki',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'label-page' => 'Pagină',
	'label-namespace' => 'Spațiu de nume',
	'label-limit' => 'Limită',
	'button-submit' => 'Du-te',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'label-page' => 'Страница',
	'label-namespace' => 'Пространство имён',
	'label-limit' => 'Ограничение',
	'button-submit' => 'Выполнить',
	'whatlinkshere' => 'Ссылки сюда',
	'istemplate' => 'включение',
	'isfile' => 'файловая ссылка',
	'section-links' => 'Ссылки',
	'section-iwlinks' => 'Интервики-ссылки',
	'section-extlinks' => 'Внешние ссылки',
	'section-categories' => 'Категории',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'label-page' => 'Страница',
	'label-namespace' => 'Именски простор',
	'section-links' => 'Везе',
	'section-categories' => 'Категорије',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'title' => 'Vad länkar ut härifrån',
	'title-leaveshere' => 'Länkar som länkar ut från "$1"',
	'sub-leaveshere' => 'Följande sidor länkar från $1',
	'label-page' => 'Sida',
	'label-namespace' => 'Namnrymd',
	'label-limit' => 'Gräns',
	'button-submit' => 'Gå',
	'noleaveshere' => 'Ingenting länkar från $1',
	'link-whatleaveshere' => 'Vad länkar ut härifrån',
	'tooltip-whatleaveshere' => 'Lista över allt som länkar ut härifrån',
	'whatlinkshere' => 'Vad som länkar hit',
	'whatlinkshere-whatleaveshere' => 'Vad länkar ut härifrån?',
	'istemplate' => 'inkluderad som mall',
	'isfile' => 'fillänk',
	'linksearch' => 'Länksökning',
	'section-links' => 'Länkar',
	'section-iwlinks' => 'Interwiki-länkar',
	'section-extlinks' => 'Externa länkar',
	'section-categories' => 'Kategorier',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'label-page' => 'Trang',
	'label-namespace' => 'Không gian tên',
	'label-limit' => 'Giới hạn',
	'button-submit' => 'Hiển thị',
	'whatlinkshere' => 'Các liên kết đến đây',
	'istemplate' => 'nhúng',
	'isfile' => 'liên kết tập tin',
	'linksearch' => 'Tìm liên kết',
	'section-links' => 'Liên kết',
	'section-iwlinks' => 'Liên kết liên wiki',
	'section-extlinks' => 'Liên kết ngoài',
	'section-categories' => 'Thể loại',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'label-page' => 'בלאַט',
	'label-namespace' => 'נאָמענטייל',
	'label-limit' => 'לימיט',
	'whatlinkshere' => 'װאָס פֿאַרבינדט אַהער',
	'istemplate' => 'אריבערשליסן',
	'isfile' => 'טעקע לינק',
	'section-iwlinks' => 'אינטערוויקי לינקען',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'title' => '链出页面',
	'title-leaveshere' => '来自“$1”的链接',
	'sub-leaveshere' => '以下页面链接自$1',
	'label-page' => '页面',
	'label-namespace' => '名字空间',
	'label-limit' => '限制',
	'button-submit' => '前往',
	'noleaveshere' => '没有链接自$1',
	'link-whatleaveshere' => '链出页面',
	'tooltip-whatleaveshere' => '自此链接的页面列表',
	'whatlinkshere' => '链入页面',
	'whatlinkshere-whatleaveshere' => '链出页面？',
	'istemplate' => '嵌入',
	'isfile' => '文件链接',
	'linksearch' => '链接搜索',
	'section-links' => '链接',
	'section-iwlinks' => '跨维基连接',
	'section-extlinks' => '外部链接',
	'section-categories' => '分类',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hant'] = array(
	'istemplate' => '引用',
	'section-links' => '連結',
	'section-categories' => '分類',
);
