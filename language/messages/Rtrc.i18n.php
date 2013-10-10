<?php
/**
 * Interface messages for RTRC.
 *
 * @toolowner krinkle
 */

$url = 'https://github.com/Krinkle/mw-gadget-rtrc';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'Real-Time Recent Changes',
	'apply' => 'Apply',
	'asc' => 'Asc',
	'changelog' => 'Whats New',
	'clear' => 'clear',
	'currentedit' => 'Currently selected edit',
	'cvn-adder' => 'Adder',
	'cvn-adder-empty' => 'Unknown',
	'cvn-reason' => 'Reason',
	'cvn-reason-empty' => 'No reason found',
	'desc' => 'Desc',
	'documentation' => 'Documentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Click here for more information',
	'lastupdate-cvn' => 'Last update: $1',
	'lastupdate-rc' => 'Last update: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol has been disabled as it requires a user filter and none was set.',
	'months' => 'January, February, March, April, May, June, July, August, September, October, November, December',
	'mypatrollog' => 'my patrol log',
	'namespace' => 'Namespace',
	'navtoggle-tooltip' => 'Toggle the sidebar',
	'nomatches' => 'No relevant changes for your settings',
	'order' => 'Order',
	'permalink' => 'Permalink to current settings',
	'showAnonOnly' => 'Anonymous only',
	'showUnpatrolledOnly' => 'Unpatrolled only',
	'skippededit' => 'Skipped edit',
	'time-from' => 'From',
	'time-untill' => 'Untill',
	'timeframe' => 'Timeframe',
	'type' => 'Type',
	'typeEdit' => 'Edits',
	'typeNew' => 'New pages',
	'userfilter' => 'User filter',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
	'apply' => 'Button to apply the settings.
{{Identical|Apply}}',
	'asc' => 'Label of the radio button that sets sort order to ascending.

See also:
* {{msg-toolserver|Rtrc-desc}}',
	'changelog' => 'Label of link to the page about RTRC software updates.',
	'clear' => 'Button to clear (or reset) a particular input field.
{{Identical|Clear}}',
	'currentedit' => 'Example text in the legend to show what a currently selected edit looks like',
	'cvn-adder' => 'Label of the user that added this item to the CVN database',
	'cvn-adder-empty' => 'Placeholder text for when the author is unknown.

See also:
* {{msg-intuition|rtrc-cvn-adder}}
{{Identical|Unknown}}',
	'cvn-reason' => 'Label of the comment left by the user who added this item to the CVN database.
{{Identical|Reason}}',
	'cvn-reason-empty' => 'Placeholder text when no reason was found

See also:
* {{msg-intuition|rtrc-cvn-reason}}',
	'desc' => 'Label of the radio button that sets the sort order to descending.

See also:
* {{msg-toolserver|Rtrc-asc}}',
	'documentation' => 'Label of the link to the documentation page.
{{Identical|Documentation}}',
	'filter' => 'Section label for various change filters.

See also:
* {{msg-intuition|rtrc-showAnonOnly}}
* {{msg-intuition|rtrc-showUnpatrolledOnly}}
{{Identical|Filter}}',
	'helpicon-tooltip' => 'Tooltip for the Help questionmark icon.',
	'lastupdate-cvn' => 'Foot note showing when the CVN database was last updated. Parameters:
* $1 - timestamp
{{Identical|Last update}}',
	'lastupdate-rc' => 'Foot note showing when the list of changes was last refreshed from the server. Parameters:
* $1 - timestamp
{{Identical|Last update}}',
	'limit' => 'Label of dropdown menu for changing how many results to show (maximum).
{{Identical|Limit}}',
	'masspatrol-requires-userfilter' => 'Informing the user that MassPatrol has been disabled when the user clears the user filter (or when there was no user filter to begin with)',
	'months' => 'Comma-separated list of the 12 different months in a year',
	'mypatrollog' => 'Label of the link to your patrol log',
	'namespace' => 'Label of dropdown menu for filtering by namespace.
{{Identical|Namespace}}',
	'navtoggle-tooltip' => 'Tooltip for the icon that toggles the MediaWiki sidebar',
	'nomatches' => 'Placeholder text in place of the changes list when the query returned no results',
	'order' => 'Section label for the sort order radio buttons.
{{Identical|Order}}',
	'permalink' => 'Label of the permalink that will start RTRC with the current settings',
	'showAnonOnly' => 'Label of the checkbox to only show changes by anonymous users.
{{Identical|Anon only}}',
	'showUnpatrolledOnly' => 'Label of the checkbox to only show unpatrolled changes',
	'skippededit' => 'Example text in the legend to show what a skipped edit looks like',
	'time-from' => 'Label of input field containing the start date of the time range filter.
{{Identical|From}}',
	'time-untill' => 'Label of input field containing the end date of the time range filter',
	'timeframe' => 'Label of time range filter',
	'type' => 'Section label for the change type checkboxes.
{{Identical|Type}}',
	'typeEdit' => 'Label of the checkbox to include changes that edit existing pages.

See also:
* {{msg-intuition|Rtrc-typeNew}}
{{Identical|Edit}}',
	'typeNew' => 'Label of the checkbox to include changes that create new pages.

See also:
* {{msg-intuition|Rtrc-typeEdit}}
{{Identical|New page}}',
	'userfilter' => 'Label of username filter',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'Cambios recientes en tiempu real',
	'apply' => 'Aplicar',
	'asc' => 'Asc',
	'changelog' => 'Novedaes',
	'clear' => 'llimpiar',
	'currentedit' => 'Edición seleicionada anguaño',
	'cvn-adder' => 'Amestáu por',
	'cvn-adder-empty' => 'Desconocíu',
	'cvn-reason' => 'Motivu',
	'cvn-reason-empty' => "Nun s'alcontró un motivu",
	'desc' => 'Desc',
	'documentation' => 'Documentación',
	'filter' => 'Peñera',
	'helpicon-tooltip' => 'Calque equí pa más información',
	'lastupdate-cvn' => 'Caberu anovamientu: $1',
	'lastupdate-rc' => 'Caberu anovamientu: $1',
	'limit' => 'Llímite',
	'months' => 'xineru, febreru, marzu, abril, mayu, xunu, xunetu, agostu, setiembre, ochobre, payares, avientu',
	'mypatrollog' => 'el mio rexistru de supervisión',
	'namespace' => 'Espaciu de nomes',
	'nomatches' => 'Nun casó dengún resultáu cola so configuración', # Fuzzy
	'order' => 'Orde',
	'permalink' => 'Enllaz permanente a la configuración actual',
	'showAnonOnly' => 'Namái anónimos',
	'showUnpatrolledOnly' => 'Namái ensin supervisar',
	'skippededit' => 'Edición saltada',
	'time-from' => 'Dende',
	'time-untill' => 'Fasta',
	'timeframe' => 'Rangu temporal',
	'type' => 'Triba',
	'typeEdit' => 'Ediciones',
	'typeNew' => 'Páxines nueves',
	'userfilter' => "Peñera d'usuariu",
);

/** Azerbaijani (azərbaycanca)
 * @author Khan27
 */
$messages['az'] = array(
	'apply' => 'Tətbiq et',
	'clear' => 'təmizlə',
	'cvn-adder-empty' => 'Naməlum',
	'limit' => 'Limit',
	'months' => 'Yanvar, Fevral, Mart, Aprel, May, İyun, İyul, Avqust, Sentyabr, Oktyabr, Noyabr, Dekabr',
	'typeEdit' => 'Redaktələr',
	'typeNew' => 'Yeni səhifələr',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'title' => 'Letzte Änderungen (Echtzeit)',
	'apply' => 'Anwenden',
	'asc' => 'Aufst.',
	'changelog' => 'Was ist neu?',
	'clear' => 'löschen',
	'currentedit' => 'Aktuell ausgewählte Bearbeitung',
	'cvn-adder' => 'Benutzer',
	'cvn-adder-empty' => 'Unbekannt',
	'cvn-reason' => 'Begründung',
	'cvn-reason-empty' => 'Keine Begründung gefunden',
	'desc' => 'Abst.',
	'documentation' => 'Dokumentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Hier klicken für mehr Informationen',
	'lastupdate-cvn' => 'Letzte Aktualisierung: $1',
	'lastupdate-rc' => 'Letzte Aktualisierung: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol wurde deaktiviert, da es einen Benutzerfilter benötigt und kein Filter festgelegt wurde.',
	'months' => 'Januar, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember',
	'mypatrollog' => 'Mein Kontroll-Logbuch',
	'namespace' => 'Namensraum',
	'nomatches' => 'Es sind keine relevanten Änderungen für deine Einstellungen vorhanden',
	'order' => 'Reihenfolge',
	'permalink' => 'Permanentlink auf die aktuellen Einstellungen',
	'showAnonOnly' => 'Nur anonyme',
	'showUnpatrolledOnly' => 'Nur unkontrollierte',
	'skippededit' => 'Übersprungene Bearbeitung',
	'time-from' => 'Von',
	'time-untill' => 'Bis',
	'timeframe' => 'Zeitrahmen',
	'type' => 'Typ',
	'typeEdit' => 'Bearbeitungen',
	'typeNew' => 'Neue Seiten',
	'userfilter' => 'Benutzerfilter',
);

/** Spanish (español)
 * @author Krinkle
 */
$messages['es'] = array(
	'apply' => 'Aplicar',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'title' => 'Modifications récentes en temps réel',
	'apply' => 'Appliquer',
	'asc' => 'Croissant',
	'changelog' => 'Quoi de neuf',
	'clear' => 'effacer',
	'currentedit' => 'Modification actuellement sélectionnée',
	'cvn-adder' => 'Responsable de l’ajout',
	'cvn-adder-empty' => 'Inconnu',
	'cvn-reason' => 'Motif',
	'cvn-reason-empty' => 'Aucun motif trouvé',
	'desc' => 'Décroissant',
	'documentation' => 'Documentation',
	'filter' => 'Filtre',
	'helpicon-tooltip' => 'Cliquer ici pour plus d’information',
	'lastupdate-cvn' => 'Dernière mise à jour : $1',
	'lastupdate-rc' => 'Dernière mise à jour : $1',
	'limit' => 'Limite',
	'masspatrol-requires-userfilter' => 'MassPatrol a été désactivé car il nécessite un filtre utilisateur et aucun n’a été défini.',
	'months' => 'Janvier, Février, Mars, Avril, Mai, Juin, Juillet, Août, Septembre, Octobre, Novembre, Décembre',
	'mypatrollog' => 'mon journal de patrouille',
	'namespace' => 'Espace de nommage',
	'nomatches' => 'Aucune modification pertinente de vos paramètres',
	'order' => 'Ordre',
	'permalink' => 'Lien permanent vers les paramètres actuels',
	'showAnonOnly' => 'Anonymes uniquement',
	'showUnpatrolledOnly' => 'Non patrouillés uniquement',
	'skippededit' => 'Modification sautée',
	'time-from' => 'De',
	'time-untill' => 'Jusqu’à',
	'timeframe' => 'Période',
	'type' => 'Type',
	'typeEdit' => 'Modifications',
	'typeNew' => 'Nouvelles pages',
	'userfilter' => 'Filtre utilisateur',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'apply' => 'લાગુ પાડો',
	'clear' => 'સાફ કરો',
	'cvn-adder-empty' => 'અજ્ઞાત',
	'cvn-reason' => 'કારણ',
	'lastupdate-cvn' => 'છેલ્લે સુધારેલ: $1',
	'limit' => 'મર્યાદા',
	'months' => 'જાન્યુઆરી, ફેબ્રુઆરી, માર્ચ, એપ્રિલ, મે, જુન, જુલાઇ, ઓગસ્ટ, સપ્ટેમ્બર, ઓક્ટોબર, નવેમ્બર, ડિસેમ્બર',
	'mypatrollog' => 'મારા ચકાસણી લૉગ',
	'order' => 'ક્રમ',
	'showAnonOnly' => 'માત્ર અજ્ઞાત',
	'typeEdit' => 'સંપાદનો',
	'typeNew' => 'નવાં પાનાં',
);

/** Hebrew (עברית)
 * @author תומר ט
 */
$messages['he'] = array(
	'showAnonOnly' => 'משתמשים אנונימיים בלבד',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'apply' => 'Applica',
	'changelog' => "Cosa c'è di nuovo",
	'clear' => 'pulisci',
	'cvn-adder-empty' => 'Sconosciuto',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'Nessun motivo trovato',
	'documentation' => 'Documentazione',
	'filter' => 'Filtra',
	'helpicon-tooltip' => 'Clicca qui per maggiori informazioni',
	'lastupdate-cvn' => 'Ultimo aggiornamento: $1',
	'lastupdate-rc' => 'Ultimo aggiornamento: $1',
	'limit' => 'Limite',
	'months' => 'gennaio, febbraio, marzo, aprile, maggio, giugno, luglio, agosto, settembre, ottobre, novembre, dicembre',
	'namespace' => 'Namespace',
	'order' => 'Ordina',
	'permalink' => 'Link permanente alle impostazioni attuali',
	'showAnonOnly' => 'Solo anonimi',
	'showUnpatrolledOnly' => 'Solo non verificate',
	'skippededit' => 'Modifica saltata',
	'time-from' => 'Da',
	'time-untill' => 'Fino a',
	'timeframe' => 'Finestra temporale',
	'type' => 'Tipo',
	'typeEdit' => 'Modifiche',
	'typeNew' => 'Nuove pagine',
	'userfilter' => 'Filtra utente',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'Real-Time Recent Changes',
	'apply' => '適用',
	'asc' => '昇順',
	'changelog' => '新着情報',
	'clear' => '消去',
	'currentedit' => '現在選択している編集',
	'cvn-adder' => '追加者',
	'cvn-adder-empty' => '不明',
	'cvn-reason' => '理由',
	'cvn-reason-empty' => '理由がありません',
	'desc' => '降順',
	'documentation' => '説明書',
	'filter' => '絞り込み',
	'helpicon-tooltip' => 'クリックすると詳細情報が表示されます',
	'lastupdate-cvn' => '最終更新: $1',
	'lastupdate-rc' => '最終更新: $1',
	'limit' => '表示数',
	'masspatrol-requires-userfilter' => 'MassPatrol に必要な利用者フィルターを設定していないため、無効にしました。',
	'months' => '1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月',
	'mypatrollog' => '自分の巡回記録',
	'namespace' => '名前空間',
	'nomatches' => '設定内容に一致する変更はありません',
	'order' => '並び順',
	'permalink' => '現在の設定への固定リンク',
	'showAnonOnly' => '匿名利用者のみ',
	'showUnpatrolledOnly' => '未巡回のみ',
	'skippededit' => 'スキップした編集',
	'time-from' => '始点',
	'time-untill' => '終点',
	'timeframe' => '時間指定',
	'type' => '種類',
	'typeEdit' => '編集',
	'typeNew' => '新規ページ',
	'userfilter' => '利用者フィルター',
);

/** Korean (한국어)
 * @author Hym411
 */
$messages['ko'] = array(
	'title' => '실시간 최근 바뀜',
	'apply' => '적용',
	'changelog' => '새로운 업데이트',
	'clear' => '비우기',
	'currentedit' => '현재 선택된 편집',
	'cvn-adder' => '추가한 사람',
	'cvn-adder-empty' => '알 수 없음',
	'cvn-reason' => '이유',
	'cvn-reason-empty' => '이유를 찾을 수 없음',
	'desc' => '설명',
	'documentation' => '설명',
	'filter' => '필터',
	'helpicon-tooltip' => '자세한 내용은 여기를 클릭하십시오',
	'lastupdate-cvn' => '마지막 업데이트:$1',
	'lastupdate-rc' => '마지막 업데이트:$1',
	'limit' => '제한',
	'masspatrol-requires-userfilter' => 'MassPatrol은 사용자 필터가 필요하지만 제공되지 않아 해제되었습니다.',
	'months' => '1월,2월,3월,4월,5월,6월,7월,8월,9월,10월,11월,12월',
	'mypatrollog' => '나의 검토 기록',
	'namespace' => '이름공간',
	'nomatches' => '변경된 설정이 없습니다',
	'order' => '순서대로',
	'permalink' => '현재 설정에 대한 정적 링크',
	'showAnonOnly' => '익명 편집만 보기',
	'showUnpatrolledOnly' => '검토되지 않은 편집만 보기',
	'skippededit' => '건너뛴 편집',
	'time-from' => '부터',
	'time-untill' => '까지',
	'timeframe' => '기간',
	'type' => '종류',
	'typeEdit' => '편집들',
	'typeNew' => '새 문서들',
	'userfilter' => '사용자 필터',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'Rezent Ännerungen (an Echtzäit)',
	'apply' => 'Uwenden',
	'changelog' => 'Wat gëtt et Neies',
	'clear' => 'eidel maachen',
	'currentedit' => 'Aktuell erausgesichten Ännerung',
	'cvn-adder-empty' => 'Onbekannt',
	'cvn-reason' => 'Grond',
	'cvn-reason-empty' => 'Kee Grond fonnt',
	'desc' => 'Beschr',
	'documentation' => 'Dokumentatioun',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Klickt hei fir méi Informatiounen',
	'lastupdate-cvn' => 'Lescht Aktualisatioun: $1',
	'lastupdate-rc' => 'Lescht Aktualisatioun: $1',
	'limit' => 'Limit',
	'months' => 'Januar, Februar, Mäerz, Abrëll, Mee, Juni, Juli, August, September. Oktober, November, Dezember',
	'namespace' => 'Nummraum',
	'nomatches' => 'Keng relevant Ännerunge fir Är Astellungen',
	'order' => 'Reiefolleg',
	'showAnonOnly' => 'Nëmmen anonym',
	'skippededit' => 'Iwwersprongen Ännerung',
	'time-from' => 'Vum',
	'time-untill' => 'Bis',
	'timeframe' => 'Period',
	'type' => 'Typ',
	'typeEdit' => 'Ännerungen',
	'typeNew' => 'Nei Säiten',
	'userfilter' => 'Benotzerfilter',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Скорешни промени во живо',
	'apply' => 'Примени',
	'asc' => 'Наг',
	'changelog' => 'Што има ново',
	'clear' => 'исчисти',
	'currentedit' => 'Тековно избрано уредување',
	'cvn-adder' => 'Додавач',
	'cvn-adder-empty' => 'Непознат',
	'cvn-reason' => 'Причина',
	'cvn-reason-empty' => 'Не најдов причина',
	'desc' => 'Над',
	'documentation' => 'Документација',
	'filter' => 'Филтер',
	'helpicon-tooltip' => 'Повеќе информации',
	'lastupdate-cvn' => 'Последна измена: $1',
	'lastupdate-rc' => 'Последна измена: $1',
	'limit' => 'Граница',
	'masspatrol-requires-userfilter' => 'МасовнаПатрола е исклучен бидејќи нема зададено кориснички филтер, кој му е потребен.',
	'months' => 'јануари, февруари, март, април, мај, јуни, јули, август, септември, октомври, ноември, декември',
	'mypatrollog' => 'мој дневник на патролирање',
	'namespace' => 'Именски простор',
	'nomatches' => 'Нема промени што одговараат на вашите поставки',
	'order' => 'Редослед',
	'permalink' => 'Постојана врска до тековните поставки',
	'showAnonOnly' => 'Само анонимни',
	'showUnpatrolledOnly' => 'Само неиспатролирани',
	'skippededit' => 'Изоставено уредување',
	'time-from' => 'Од',
	'time-untill' => 'До',
	'timeframe' => 'Временска рамка',
	'type' => 'Тип',
	'typeEdit' => 'Уредувања',
	'typeNew' => 'Нови страници',
	'userfilter' => 'Кориснички филтер',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author Sjoerddebruin
 */
$messages['nl'] = array(
	'apply' => 'Toepassen',
	'asc' => 'Opl.',
	'changelog' => 'Wat is er nieuw?',
	'clear' => 'wissen',
	'currentedit' => 'Momenteel geselecteerde bewerking',
	'cvn-adder' => 'Toevoeger',
	'cvn-adder-empty' => 'Onbekend',
	'cvn-reason' => 'Reden',
	'cvn-reason-empty' => 'Geen reden gevonden',
	'desc' => 'Afl.',
	'documentation' => 'Documentatie',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Klik hier voor meer informatie',
	'lastupdate-cvn' => 'Laatste update: $1',
	'lastupdate-rc' => 'Laatste update: $1',
	'limit' => 'Maximaal',
	'months' => 'januari, februari, maart, april, mei, juni, juli, augustus, september, oktober, november, december',
	'mypatrollog' => 'Markeerlogboek',
	'namespace' => 'Naamruimte',
	'nomatches' => 'Uw instellingen heeft geen resultaten opgeleverd', # Fuzzy
	'order' => 'Volgorde',
	'permalink' => 'Permalink naar huidige instellingen',
	'showAnonOnly' => 'Alleen anoniemen',
	'showUnpatrolledOnly' => 'Alleen ongecontroleerde',
	'skippededit' => 'Overgeslagen bewerking',
	'time-from' => 'Van',
	'time-untill' => 'Tot',
	'timeframe' => 'Tijdsbestek',
	'type' => 'Type',
	'typeEdit' => 'Bewerkingen',
	'typeNew' => "Nieuwe pagina's",
	'userfilter' => 'Gebruikersfilter',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'apply' => 'غوښتنه کول',
	'asc' => 'مخپورته',
	'changelog' => 'څوک نوي دي',
	'clear' => 'سپينول',
	'currentedit' => 'دم مهال ټاکلی سمون',
	'cvn-adder' => 'گډونگر',
	'cvn-adder-empty' => 'ناجوت',
	'cvn-reason' => 'سبب',
	'cvn-reason-empty' => 'سبب يې و نه موندل شو',
	'desc' => 'مخښکته',
	'documentation' => 'لاسوند',
	'filter' => 'چاڼگر',
	'helpicon-tooltip' => 'د نورو مالوماتو لپاره دلته وټوکۍ',
	'lastupdate-cvn' => 'وروستئ هممهالېدنه: $1',
	'lastupdate-rc' => 'وروستئ هممهالېدنه: $1',
	'limit' => 'بريد',
	'months' => 'جنوري، فېبروري، مارچ، اپرېل، مئ، جون، جولای، اگسټ، سېپتمبر، اکتوبر، نومبر، ډيسمبر',
	'namespace' => 'نوم-تشيال',
	'nomatches' => 'د امستنو سره مو هېڅ يوې پايلې جوسر و نه لگاوه', # Fuzzy
	'order' => 'بولل',
	'showAnonOnly' => 'يوازې ورکنومی',
	'time-untill' => 'تر',
	'type' => 'ډول',
	'typeEdit' => 'سمونونه',
	'typeNew' => 'نوي مخونه',
	'userfilter' => 'کارن چاڼگر',
);

/** Portuguese (português)
 * @author Helder.wiki
 * @author Krinkle
 */
$messages['pt'] = array(
	'apply' => 'Aplicar',
	'limit' => 'Limite',
	'order' => 'Ordem',
	'type' => 'Tipo',
	'typeEdit' => 'Edições',
	'typeNew' => 'Páginas novas',
	'userfilter' => 'Filtro de utilizadores',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Helder.wiki
 */
$messages['pt-br'] = array(
	'title' => 'Mudanças Recentes em Tempo Real',
	'apply' => 'Aplicar',
	'asc' => 'Asc',
	'changelog' => 'Novidades',
	'clear' => 'limpar',
	'currentedit' => 'Edição selecionada atualmente',
	'cvn-adder' => 'Incluído por',
	'cvn-adder-empty' => 'Desconhecido',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'Nenhum motivo encontrado',
	'desc' => 'Desc',
	'documentation' => 'Documentação',
	'filter' => 'Filtro',
	'helpicon-tooltip' => 'Clique aqui para maiores informações',
	'lastupdate-cvn' => 'Última atualização: $1',
	'lastupdate-rc' => 'Última atualização: $1',
	'limit' => 'Limite',
	'months' => 'janeiro, fevereiro, março, abril, maio, junho, julho, agosto, setembro, outubro, novembro, dezembro',
	'mypatrollog' => 'registro dos meus patrulhamentos',
	'namespace' => 'Domínio',
	'nomatches' => 'Nenhum resultado corresponde às suas configurações', # Fuzzy
	'order' => 'Ordem',
	'permalink' => 'Link permanente para as configurações atuais',
	'showAnonOnly' => 'Apenas edições de anônimos',
	'showUnpatrolledOnly' => 'Apenas não patrulhadas',
	'skippededit' => 'Edição pulada',
	'time-from' => 'De',
	'time-untill' => 'Até',
	'timeframe' => 'Intervalo de tempo',
	'type' => 'Tipo',
	'typeEdit' => 'Edições',
	'typeNew' => 'Páginas novas',
	'userfilter' => 'Filtro de usuários',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'title' => 'Последние изменения в режиме реального времени',
	'apply' => 'Применить',
	'asc' => 'По возрастанию',
	'changelog' => 'Что нового',
	'clear' => 'очистить',
	'currentedit' => 'Выбранная в настоящий момент правка',
	'cvn-adder' => 'Добавивший',
	'cvn-adder-empty' => 'Неизвестен',
	'cvn-reason' => 'Причина',
	'cvn-reason-empty' => 'Причина не найдена',
	'desc' => 'По убыванию',
	'documentation' => 'Документация',
	'filter' => 'Фильтр',
	'helpicon-tooltip' => 'Нажмите здесь для получения дополнительной информации',
	'lastupdate-cvn' => 'Последнее обновление: $1',
	'lastupdate-rc' => 'Последнее обновление: $1',
	'limit' => 'Ограничение',
	'masspatrol-requires-userfilter' => 'Массовое патрулирование было отключено, так как оно требует установки пользовательского фильтра, а не один из них не был установлен.',
	'months' => 'Январь, Февраль, Март, Апрель, Май, Июнь, Июль, Август, Сентябрь, Октябрь, Ноябрь, Декабрь',
	'mypatrollog' => 'мой журнал патрулирования',
	'namespace' => 'Пространство имён',
	'nomatches' => 'Нет изменений, соответствующих вашим параметрам',
	'order' => 'Порядок',
	'permalink' => 'Постоянная ссылка на текущие параметры',
	'showAnonOnly' => 'только анонимов',
	'showUnpatrolledOnly' => 'Только неотпатрулированные',
	'skippededit' => 'Пропущенные правки',
	'time-from' => 'С',
	'time-untill' => 'До',
	'timeframe' => 'Временные рамки',
	'type' => 'Тип',
	'typeEdit' => 'Правки',
	'typeNew' => 'Новые страницы',
	'userfilter' => 'Фильтр пользователей',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'type' => 'Тип',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'title' => 'Останні зміни в режимі реального часу',
	'apply' => 'Застосовувати',
	'asc' => 'Зрост',
	'changelog' => 'Що нового',
	'clear' => 'очистити',
	'currentedit' => 'Поточно вибране редагування',
	'cvn-adder' => 'Доповнення',
	'cvn-adder-empty' => 'Невідомий',
	'cvn-reason' => 'Причина',
	'cvn-reason-empty' => 'Не знайдено причин',
	'desc' => 'Спад',
	'documentation' => 'Документація',
	'filter' => 'Фільтр',
	'helpicon-tooltip' => 'Натисніть тут для отримання додаткової інформації',
	'lastupdate-cvn' => 'Останнє оновлення: $1',
	'lastupdate-rc' => 'Останнє оновлення: $1',
	'limit' => 'Обмеження',
	'masspatrol-requires-userfilter' => 'MassPatrol був відключений, бо він вимагає користувацького фільтру і жодний не був встановлений.',
	'months' => 'Січень, Лютий, Березень, Квітень, Травень, Червень, Липень, Серпень, Вересень, Жовтень, Листопад, Грудень',
	'mypatrollog' => 'журнал патрулювання',
	'namespace' => 'Простір назв',
	'nomatches' => 'Немає відповідних змін для ваших налаштувань',
	'order' => 'Порядок',
	'permalink' => 'Постійне посилання на поточні параметри',
	'showAnonOnly' => 'Анонім тільки',
	'showUnpatrolledOnly' => 'Непатрульований тільки',
	'skippededit' => 'Пропущені редагування',
	'time-from' => 'Від',
	'time-untill' => 'Доки',
	'timeframe' => 'Часові рамки',
	'type' => 'Тип',
	'typeEdit' => 'Редагування',
	'typeNew' => 'Нові сторінки',
	'userfilter' => 'Користувацький фільтр',
);

/** Wu (吴语)
 * @author Benojan
 */
$messages['wuu'] = array(
	'cvn-adder-empty' => '弗識',
	'helpicon-tooltip' => '捺箇裏望還多信息',
	'time-from' => '從',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hzy980512
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'title' => '实时最新更改',
	'apply' => '应用',
	'asc' => '升序',
	'changelog' => '最新消息',
	'clear' => '清除',
	'currentedit' => '当前所选编辑',
	'cvn-adder-empty' => '未知',
	'cvn-reason' => '理由',
	'cvn-reason-empty' => '找不到理由',
	'desc' => '降序',
	'documentation' => '档案',
	'filter' => '过滤器',
	'helpicon-tooltip' => '点这里获得更多信息',
	'lastupdate-cvn' => '最后更新：$1',
	'lastupdate-rc' => '最后更新：$1',
	'limit' => '限制',
	'months' => '1月、2月、3月、4月、5月、6月、7月、8月、9月、10月、11月、12月',
	'mypatrollog' => '我的巡查日志',
	'namespace' => '名字空间',
	'nomatches' => '找不到与您设置相关的结果',
	'order' => '顺序',
	'permalink' => '链至目前设定的永久链接',
	'showAnonOnly' => '仅匿名用户',
	'showUnpatrolledOnly' => '仅未巡查编辑',
	'skippededit' => '跳过的编辑',
	'time-from' => '从',
	'time-untill' => '到',
	'timeframe' => '时间范围',
	'type' => '类型',
	'typeEdit' => '编辑',
	'typeNew' => '新页面',
	'userfilter' => '用户过滤器',
);
