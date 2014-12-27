<?php
/**
 * Interface messages for tsreports tool.
 *
 * @toolowner valhallasw
 */
$url = '//tools.wmflabs.org/tsreports/';

$messages = array();

$messages['en'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Change language / preferences</a>',
	'base_jiralink' =>  '<a href="https://jira.toolserver.org/browse/REPORTS">Report a bug or request a feature</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'base_links' => '%(prefslink)s | %(jiralink)s | %(wikilink)s',

	# Categories.  You *must* define a category for at least English before
	# using it.
	'category_users' => 'Users',
	'category_articles' => 'Pages',
	'category_images' => 'Images',
	'category_miscellaneous' => 'Miscellaneous',
	'category_wikidata' => 'WikiData',

	# SelectWiki messages
	'select_wiki_title' => 'Select a wiki',
	'select_wiki' => 'Please enter the wiki you would like a report for (e.g. "<kbd>en.wikipedia.org</kbd>"):',
	'select_wiki_next' => 'Next →',

	# SelectReport messages
	'select_report_title' => 'Select a report to run on %(wiki)s',
	'select_report' => 'Please select a report:',
	'select_report_disabled' => 'This report is unavailable.',
	'select_report_disabled_blurb' => 'Note: Reports <span class="disabled-report">like this</span> are nightly queries which have never been run; therefore, there are no results available for these reports.  Once the next nightly report run is finished, these reports will become available.',
	'select_report_not_cached' => 'There is no cached version of this report. Click the link to start the first run.',
	'select_report_first' => 'This report is prepared for the first time, and should be available soon.',
	'select_report_hot' => 'A cached version of this report, %(age)s old, is available.',
	'select_report_cold_running' => 'A cached version of this report, %(age)s old, is available. A new version is expected in %(eta)s.',
	'select_report_cold_not_running' => 'A cached version of this report, %(age)s old, is available. A new version will be prepared if you view the current report, and will be ready in approximately %(eta)s.',
	'select_report_no_reports' => 'Sorry, there are no reports available for %(wiki)s at this time.',
	'select_report_go_back' => '← Change wiki',

	# QueryVariables messages
	'qvar_title' => 'Enter the variables for your query',
	'qvar_blurb' => 'Your query requires some variables to be entered',
	'qvar_next' => 'Next →',

	# PrefsForm messages
	'prefs_title' => 'Reports preferences',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Your preferences were changed.',
	'prefs_langlabel' => 'Interface language:',

	# DoReport messages
	'report_wascached' => 'This report was cached %(age)s ago.',
	'report_cold_cache_running' => 'Cache (re)generation started %(runtime)s ago.',
	'report_cold_cache_started' => 'Cache (re)generation has just started.',
	'report_nocache' => 'This report is scheduled to be regenerated nightly, but hasn\'t been run yet, so there is no data available.',
	'report_first_run' => 'This report is being generated for the first time, so no data is available yet.',
	'report_last_run_duration' => 'This report was generated in %(duration)s.',
	'report_variables_used' => 'The following variables were used to generate this report:',
	'report_variable' => '%(name)s: %(value)s',
	'report_noresults' => 'Sorry, this report produced no results.',
	'report_changelinks' => '← %(changereport)s | %(changewiki)s',
	'report_change_report' => '<a href="%(url)s">Change report</a>',
	'report_change_wiki' => '<a href="%(url)s">Change wiki</a>',
);

/** Message documentation (Message documentation)
 * @author Robby
 */
$messages['qqq'] = array(
	'base_prefslink' => 'Link to preferences screen',
	'base_jiralink' => 'Link to bug tracker',
	'base_wikilink' => 'Link to wiki page describing the tool',
	'base_links' => 'Does not need translation',
	'category_users' => '{{Identical|User}}',
	'category_articles' => 'Category for wiki page-related queries (short name)
{{Identical|Page}}',
	'category_images' => 'Category for image-related queries (short name)

{{Identical|Image}}',
	'category_miscellaneous' => 'Category for queries that do not fall into the other categories (short name)',
	'category_wikidata' => 'Category for wikidata-related queries (short name)',
	'select_wiki_title' => 'Select a wiki',
	'select_wiki' => 'Help text for the wiki selection box',
	'select_wiki_next' => 'Continue to next step button',
	'select_report_title' => 'Header on report selection page',
	'select_report' => 'Instruction text on report selection page',
	'select_report_disabled' => 'Text, shown next to a report, indicating it unavailable.',
	'select_report_disabled_blurb' => 'Note on bottom of page indicating how unavailable reports are formatted',
	'select_report_not_cached' => 'Text,  shown next to a report, indicating there is no cached version available.',
	'select_report_first' => 'Text, shown next to a report, indicating the system is preparing the report, but it is not available yet.',
	'select_report_hot' => 'Text, shown next to a report, indicating a cached version is available.',
	'select_report_cold_running' => 'Text, shown next to a report, indicating a cached version is available, while the system is also preparing a new version',
	'select_report_cold_not_running' => 'Text, shown next to a report, indicating 1) a cached version is available, and 2) the system will prepare a new version if the report is viewed',
	'select_report_no_reports' => 'Note shown if there are no reports available',
	'select_report_go_back' => 'Button to change the wiki to run reports on',
	'qvar_title' => 'Header on variable selection page',
	'qvar_blurb' => 'Variable selection page instruction',
	'qvar_next' => 'Continue to next step button',
	'prefs_title' => 'Header on preferences page',
	'prefs_submit' => 'Button to submit changes
{{Identical|OK}}',
	'prefs_done' => 'Note shown after preferences were submitted',
	'prefs_langlabel' => 'Text next to language selection box',
	'report_wascached' => 'Note shown on report page inticating its age',
	'report_cold_cache_running' => 'Note shown on report page inticating the system is preparing a new version, and started some time ago',
	'report_cold_cache_started' => 'Note shown on report page inticating the system is preparing a new version, and just started',
	'report_nocache' => "Note shown on reports that are run every night that it hasn't been run yet.",
	'report_first_run' => 'Note shown the report is still under preparation.',
	'report_last_run_duration' => 'Note showing the runtime of the report',
	'report_variables_used' => 'Note above the list of variables used',
	'report_variable' => 'Does not need translation',
	'report_noresults' => 'Note shown instead of an empty table',
	'report_changelinks' => 'Does not need translation',
	'report_change_report' => 'Button/link to change report to view',
	'report_change_wiki' => 'Button/link to change wiki to view reports for',
);

/** Breton (brezhoneg)
 * @author Gwenn-Ael
 */
$messages['br'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Cheñch yezh / dibaboù</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Kemenn un draen pe goulenn un arc\'hweladur</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'category_users' => 'Implijerien',
	'category_articles' => 'Pajennoù',
	'category_images' => 'Skeudennoù',
	'category_miscellaneous' => 'A bep seurt',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Dibab ur wiki',
	'select_wiki_next' => "War-lerc'h →",
	'select_report_title' => 'Dibabit un danevell da seveniñ e %(wiki)s',
	'select_report' => 'Dibabit un danevell, mar plij :',
	'select_report_disabled' => "N'eo ket hegerz an danevell-mañ.",
	'select_report_go_back' => '← Kemmañ ar wiki',
	'qvar_title' => 'Ebarzhiñ variennoù ho reked',
	'qvar_next' => "War-lerc'h →",
	'prefs_title' => 'Daveennoù an danevelloù',
	'prefs_submit' => 'Mat eo',
	'prefs_done' => 'Kemmet eo bet ho tibaboù gwellañ',
	'prefs_langlabel' => 'Yezh an etrefas :',
);

/** Catalan (català)
 * @author Fitoschido
 */
$messages['ca'] = array(
	'category_users' => 'Usuaris',
	'category_articles' => 'Pàgines',
	'category_images' => 'Imatges',
	'category_miscellaneous' => 'Miscel·lània',
	'category_wikidata' => 'Wikidata',
	'select_wiki_title' => 'Trieu un viqui',
	'select_wiki_next' => 'Endavant →',
	'qvar_next' => 'Endavant →',
	'prefs_submit' => 'D’acord',
	'prefs_done' => 'S’han modificat les vostres preferències.',
	'prefs_langlabel' => 'Idioma de la interfície:',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'category_users' => 'Декъашхой',
	'category_articles' => 'АгӀонаш',
	'category_images' => 'Сурт',
	'category_wikidata' => 'Викихаамаш',
	'select_wiki_next' => 'ТӀехьайогӀург →',
	'qvar_next' => 'ТӀехьайогӀург →',
	'prefs_submit' => 'ХӀаъ',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Sprache/Einstellungen ändern</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Fehler melden oder Funktion beantragen</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'base_links' => '%(prefslink)s | %(jiralink)s | %(wikilink)s',
	'category_users' => 'Benutzer',
	'category_articles' => 'Artikel',
	'category_images' => 'Bilder',
	'category_miscellaneous' => 'Sonstiges',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Wähle ein Wiki',
	'select_wiki' => 'Bitte wähle ein Wiki, für das du einen Bericht wünscht (z.&nbsp;B. „<kbd>de.wikipedia.org</kbd>“):',
	'select_wiki_next' => 'Weiter →',
	'select_report_title' => 'W&auml;hle einen Bericht für %(wiki)s',
	'select_report' => 'Bitte w&auml;hle einen Bericht:',
	'select_report_disabled' => '%(name)s *',
	'select_report_disabled_blurb' => "Beachte: Berichte <span class='disabled-report'>die so aussehen</span> werden jede Nacht neu erstellt, der Prozess lief aber noch nicht. Sobald diese Berichte abgeschlossen sind, werden sie verf&uuml;gbar.",
	'select_report_not_cached' => 'Es gibt keine gecachte Version dieses Berichts. Klicke auf den Link, um den ersten Lauf zu starten.',
	'select_report_first' => 'Dieser Bericht wird für das erste Mal vorbereitet und sollte bald verfügbar sein.',
	'select_report_hot' => 'Eine gecachte Version dieses Berichts, der %(age)s alt ist, ist verfügbar.',
	'select_report_cold_running' => 'Eine gecachte Version dieses Berichts, der %(age)s alt ist, ist verfügbar. Eine neue Version wird erwartet in %(eta)s.',
	'select_report_cold_not_running' => 'Eine gecachte Version dieses Berichts, der %(age)s alt ist, ist verfügbar. Eine neue Version wird vorbereitet, wenn du den aktuellen Bericht ansiehst und wird ungefähr fertig sein in %(eta)s.',
	'select_report_no_reports' => 'Zur Zeit sind keine Berichte für %(wiki)s vorhanden.',
	'select_report_go_back' => '← Wiki wechseln',
	'qvar_title' => 'Gib die Einstellungen für diesen Bericht ein',
	'qvar_blurb' => 'Dieser Bericht benötigt noch folgende Einstellungen:',
	'qvar_next' => 'Weiter →',
	'prefs_title' => 'Berichtseinstellungen',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Deine Einstellungen wurden erfolgreich geändert',
	'prefs_langlabel' => 'Sprache:',
	'report_wascached' => 'Dieser Bericht wurde vor %(age)s erstellt.',
	'report_cold_cache_running' => 'Die (Wieder-)Erzeugung des Caches wurde vor %(runtime)s begonnen.',
	'report_cold_cache_started' => 'Die (Wieder-)Erzeugung des Caches wurde gerade begonnen.',
	'report_nocache' => 'Es wurde eingestellt, dass dieser Bericht nachts erstellt wird, aber er lief noch nicht, sodass noch keine Daten verf&uuml;gbar sind.',
	'report_first_run' => 'Dieser Bericht wird zum ersten Mal erstellt, so dass noch keine Daten verfügbar sind.',
	'report_last_run_duration' => 'Dieser Bericht wurde erzeugt in %(duration)s.',
	'report_variables_used' => 'Die folgenden Einstellunge wurden für den Bericht gemacht:',
	'report_variable' => '%(name)s: %(value)s',
	'report_noresults' => 'Dieser Bericht gibt kein Ergebnis.',
	'report_changelinks' => '← %(changereport)s | %(changewiki)s',
	'report_change_report' => '<a href="%(url)s">Report wechseln</a>',
	'report_change_wiki' => '<a href="%(url)s">Wiki wechseln</a>',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Macofe
 */
$messages['es'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Cambiar idioma / preferencias</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Reporta un error o solicita una funcionalidad</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'category_users' => 'Usuarios',
	'category_articles' => 'Páginas',
	'category_images' => 'Imágenes',
	'category_miscellaneous' => 'Diverso',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Seleccione un wiki',
	'select_wiki' => 'Escribe el wiki del que te gustaría un informe (por ejemplo, "<kbd>es.wikipedia.org</kbd>"):',
	'select_wiki_next' => 'Siguiente →',
	'select_report_title' => 'Seleccione un informe para que se ejecute en %(wiki)s',
	'select_report' => 'Por favor, seleccione un informe:',
	'select_report_disabled' => 'Este informe no está disponible.',
	'select_report_go_back' => '← Cambiar wiki',
	'qvar_title' => 'Introduzca las variables para su consulta',
	'qvar_blurb' => 'Su búsqueda requiere que se escriban algunas variables',
	'qvar_next' => 'Siguiente →',
	'prefs_title' => 'Preferencias de informes',
	'prefs_submit' => 'Aceptar',
	'prefs_done' => 'Tus preferencias se han cambiado.',
	'prefs_langlabel' => 'Idioma de la interfaz:',
	'report_wascached' => 'Este informe fue "cacheado" hace %(age)s.',
	'report_nocache' => 'Este informe está programado para ser regenerado cada noche, pero no se ha ejecutado aún, por lo que no hay datos disponibles.',
	'report_noresults' => 'Este informe no produjo ningún resultado.',
	'report_change_report' => '<a href="%(url)s">Cambiar informe</a>',
	'report_change_wiki' => '<a href="%(url)s">Cambiar wiki</a>',
);

/** Persian (فارسی)
 * @author Reza1615
 */
$messages['fa'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">تغییر زبان/ترجیحات</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">گزارش خطا یا ارائه پیشنهاد</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">ویکی</a>',
	'category_users' => 'کاربران',
	'category_articles' => 'صفحات',
	'category_images' => 'تصویرها',
	'category_miscellaneous' => 'متفرقه',
	'category_wikidata' => 'ویکی‌داده',
	'select_wiki_title' => 'انتخاب یک ویکی',
	'select_wiki' => 'لطفا نام ویکی‌ای که می‌خولهید گزارش دهید را ذکر کنید (مثلا "<kbd>en.wikipedia.org</kbd>")',
	'select_wiki_next' => 'بعدی ←',
	'select_report_title' => 'انتخاب یک گزارش برای اجرا در %(ویکی)',
	'select_report' => 'انتخاب یک گزارش:',
	'select_report_disabled' => 'این گزارش در دسترس نیست.',
	'select_report_go_back' => ' → تغییر ویکی',
	'qvar_title' => 'وارد کردن متغییر برای کوئریتان',
	'qvar_blurb' => 'کوئری شما نیازمند تعدادی متغییر است',
	'qvar_next' => 'بعدی ←',
	'prefs_title' => 'ترجیحات گزارش‌ها',
	'prefs_submit' => 'تأیید',
	'prefs_done' => 'ترجیحات شما تغییر کرده است.',
	'prefs_langlabel' => 'زبان رابط کاربری:',
	'report_wascached' => 'گزارش در %(age)s پیش تغییرکرده‌است.',
	'report_cold_cache_running' => 'بازسازی کاشه  %(runtime) شروع شده است.',
	'report_cold_cache_started' => 'بازسازی کاشه فقط شروع شده‌است.',
	'report_noresults' => 'شرمنده این گزارش نتیجه‌ای ایجاد نکرد.',
	'report_change_report' => '<a href="%(url)s">تغییر گزارش</a>',
	'report_change_wiki' => '<a href="%(url)s">تغییر ویکی</a>',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Changer de langue / préférences</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Signaler un bogue ou demander une fonctionnalité</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'category_users' => 'Utilisateurs',
	'category_articles' => 'Pages',
	'category_images' => 'Images',
	'category_miscellaneous' => 'Divers',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Sélectionner un wiki',
	'select_wiki' => 'Veuillez entrer le wiki pour lequel vous voulez un rapport (par ex. "<kbd>en.wikipedia.org</kbd>"):',
	'select_wiki_next' => 'Suivant →',
	'select_report_title' => 'Sélectionner un rapport à exécuter sur %(wiki)s',
	'select_report' => 'Veuillez sélectionner un rapport :',
	'select_report_disabled' => 'Ce rapport n’est pas disponible.',
	'select_report_disabled_blurb' => 'Remarque : Les rapports <span class="disabled-report">comme celui-ci</span> sont des requêtes nocturnes qui n’ont jamais été exécutées ; donc, il n’y a aucun résultat disponible pour ces rapports.  Une fois la prochaine exécution de rapport nocturne terminée, ces rapports deviendront disponibles.',
	'select_report_not_cached' => 'Il n’y a pas de version en cache de ce rapport. Cliquer sur le lien pour démarrer la première exécution.',
	'select_report_first' => 'Ce rapport est préparé pour la première fois, et devrait être bientôt disponible.',
	'select_report_hot' => 'Une version en cache de ce rapport, de %(age)s, est disponible.',
	'select_report_cold_running' => 'Une version en cache de ce rapport, de %(age)s, est disponible. Une nouvelle version est prévue dans %(eta)s.',
	'select_report_cold_not_running' => 'Une version en cache de ce rapport, de %(age)s, est disponible. Une nouvelle version sera préparée si vous visualisez le rapport actuel, et sera prête dans environ %(eta)s.',
	'select_report_no_reports' => 'Désolé, il n’y a pas de rapport disponible pour %(wiki)s pour le moment.',
	'select_report_go_back' => '← Modifier le wiki',
	'qvar_title' => 'Entrer les variables de votre requête',
	'qvar_blurb' => 'Votre requête nécessite la saisie de certaines variables',
	'qvar_next' => 'Suivant →',
	'prefs_title' => 'Préférences des rapports',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Vos préférences ont été modifiées.',
	'prefs_langlabel' => 'Langue de l’interface :',
	'report_wascached' => 'Ce rapport a été mis en cache il y a %(age)s.',
	'report_cold_cache_running' => '(Re)génération du cache démarrée il y a %(runtime)s.',
	'report_cold_cache_started' => 'La (re)génération du cache vient juste de commencer.',
	'report_nocache' => 'Ce rapport est prévu pour être régénéré chaque nuit, mais n’a pas encore été lancé, donc il n’y a pas de donnée disponible.',
	'report_first_run' => 'Ce rapport est en cours de génération pour la première fois, donc aucune donnée n’est encore disponible.',
	'report_last_run_duration' => 'Ce rapport a été généré en %(duration)s.',
	'report_variables_used' => 'Les variables suivantes ont été utilisées pour générer ce rapport :',
	'report_noresults' => 'Désolé, ce rapport n’a donné aucun résultat.',
	'report_change_report' => '<a href="%(url)s">Modifier le rapport</a>',
	'report_change_wiki' => '<a href="%(url)s">Modifier le wiki</a>',
);

/** Western Frisian (Frysk)
 * @author Robin0van0der0vliet
 */
$messages['fy'] = array(
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'category_users' => 'Meidoggers',
	'category_articles' => 'Siden',
	'category_images' => 'Ôfbyldingen',
	'category_miscellaneous' => 'Oare',
	'category_wikidata' => 'WikiData',
	'select_wiki_next' => 'Folgjende →',
	'qvar_next' => 'Folgjende →',
	'prefs_submit' => 'OK',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">שינוי שפה / העדפות</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">דיווח באג או בקשת אפשרות חדשה</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">ויקי</a>',
	'category_users' => 'משתמשים',
	'category_articles' => 'דפים',
	'category_images' => 'תמונות',
	'category_miscellaneous' => 'שונות',
	'category_wikidata' => 'ויקינתונים',
	'select_wiki_title' => 'בחירת ויקי',
	'select_wiki' => 'נא להזין ויקי שעבורו נדרש הדו"ח (למשל "<kbd>en.wikipedia.org</kbd>"):',
	'select_wiki_next' => 'הבא ←',
	'select_report_title' => 'בחירת דו"ח להרצה על %(wiki)s',
	'select_report' => 'נא לבחור דו"ח:',
	'select_report_disabled' => 'הדו"ח הזה אינו זמין.',
	'select_report_disabled_blurb' => 'הערה: דו"חות <span class="disabled-report">כמו זה</span> הם שאילתות שאמורות לרוץ מדי לילה, ושמעולם לא רצו; בגלל זה אין תוצאות זמינות לדו"חות האלה. אחרי ההרצה הלילית הבאה, הדו"חות האלה יהיו זמינים.',
	'select_report_not_cached' => 'אין גרסה מואמנת של הדו"ח הזה. יש ללחוץ על קישור כדי להתחיל את ההרצה  הראשונה.',
	'select_report_first' => 'הדו"ח הזה הוכן לראשונה ואמור להיות זמין בקרוב.',
	'select_report_hot' => 'זמינה גרסה מוטמנת של הדו"ח הזה, בת %(age)s.',
	'select_report_cold_running' => 'זמינה גרסה מוטמנת של הדו"ח הזה, בת %(age)s. גרסה חדשה צפויה ב־%(eta)s.',
	'select_report_cold_not_running' => 'זמינה גרסה מוטמנת של הדו"ח הזה, בת %(age)s. גרסה חדשה תוכן אחרי צפייה בגרסה ותהיה זמינה אחרי בערך %(eta)s.',
	'select_report_no_reports' => 'סליחה, אין דו"חות זמינים עבור %(wiki)s עכשיו.',
	'select_report_go_back' => '→ שינוי ויקי',
	'qvar_title' => 'נא להזין את המשתנים לשאילתה שלך',
	'qvar_blurb' => 'השאילתה שלך דורשת הזנה של משתנים אחדים',
	'qvar_next' => 'הבא ←',
	'prefs_title' => 'העדפות דו"ח',
	'prefs_submit' => 'אישור',
	'prefs_done' => 'ההעדפות שלך שונו.',
	'prefs_langlabel' => 'שפת ממשק:',
	'report_wascached' => 'הדו"ח הזה הוטמן לפני %(age)s.',
	'report_cold_cache_running' => 'יצירה (אולי מחדש) של המטמון התחילה לפני %(runtime)s.',
	'report_cold_cache_started' => 'יצירה (אולי מחדש) של המטמון התחילה זה עתה.',
	'report_nocache' => 'הדו"ח הזה תוזמן להיות מיוצר מחדש מדי לילה, אבל עדיין לא רץ, אז אין נתונים זמינים.',
	'report_first_run' => 'הדו"ח הזה מיוצר עכשיו לראשונה, אז אין נתונים זמינים.',
	'report_last_run_duration' => 'הדו"ח הזה יוצר ב־%(duration)s.',
	'report_variables_used' => 'המשתנים הבאים שימשו להכנת הדו"ח הזה:',
	'report_noresults' => 'סליחה, הדו"ח הזה לא ייצר תוצאות.',
	'report_change_report' => '<a href="%(url)s">שינוי דו"ח</a>',
	'report_change_wiki' => '<a href="%(url)s">שינוי ויקי</a>',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Sprooch/Astellungen änneren</a>',
	'category_users' => 'Benotzer',
	'category_articles' => 'Säiten',
	'category_images' => 'Biller',
	'category_miscellaneous' => 'Verschiddenes',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Sicht eng Wiki eraus',
	'select_wiki_next' => 'Virun →',
	'select_report_disabled' => 'Dëse Rapport ass net disponibel.',
	'select_report_go_back' => '← Wiki wiesselen',
	'qvar_next' => 'Virun →',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Är Astellunge goufe geännert.',
	'report_wascached' => 'Dëse Rapport gouf virun %(age)s opgestallt.',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'category_users' => 'Lietotāji',
	'category_articles' => 'Lapas',
	'category_miscellaneous' => 'Dažādi',
	'select_wiki_next' => 'Nākamais →',
	'qvar_next' => 'Nākamais →',
	'prefs_submit' => 'Labi',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Смени јазик / нагодувања</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Пријави бубачка или функција</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Вики</a>',
	'category_users' => 'Корисници',
	'category_articles' => 'Страници',
	'category_images' => 'Слики',
	'category_miscellaneous' => 'Разно',
	'category_wikidata' => 'Википодатоци',
	'select_wiki_title' => 'Изберете вики',
	'select_wiki' => 'Внесете го викито за коешто сакате да го пријавите (на пр.. „<kbd>en.wikipedia.org</kbd>“):',
	'select_wiki_next' => 'Следно →',
	'select_report_title' => 'Изберете пријава за пуштање на %(wiki)s',
	'select_report' => 'Изберете пријава.',
	'select_report_disabled' => 'Пријавава е недостапна.',
	'select_report_disabled_blurb' => 'Напомена: <span class="disabled-report">Ваквите</span> пријави се ноќни барања што никогаш не се пуштени, па затоа нема расположиви резултати за нив. Штом ќе се пушти и заврши следната ноќна пријава, тие ќе станат достапни.',
	'select_report_not_cached' => 'Нема меѓускладирана верзија на оваа пријава. Стиснете на врската за да го пуштите за прв пат.',
	'select_report_first' => 'Пријавава е изготвена за првпат и наскоро треба да е достапна.',
	'select_report_hot' => 'Достапна е Меѓускладирана верзија на пријавава. стара %(age)s.',
	'select_report_cold_running' => 'Достапна е Меѓускладирана верзија на пријавава. стара %(age)s. Новата верзија се очекува за %(eta)s.',
	'select_report_cold_not_running' => 'Достапна е Меѓускладирана верзија на пријавава. стара %(age)s. Ќе се изготви нова верзија ако ја прегледате тековната пријава и ќе биде на располагање за околу %(eta)s.',
	'select_report_no_reports' => 'За жал, засега нема достапи пријави за %(wiki)s.',
	'select_report_go_back' => '← Смени вики',
	'qvar_title' => 'Внесете ги променливите за вашето барање',
	'qvar_blurb' => 'Вашето барање наложува да внесете некои променливи',
	'qvar_next' => 'Следно →',
	'prefs_title' => 'Нагодувања на пријавите',
	'prefs_submit' => 'ОК',
	'prefs_done' => 'Вашите нагодувања се изменети.',
	'prefs_langlabel' => 'Јазик на посредникот:',
	'report_wascached' => 'Оваа пријава е меѓускладирана пред %(age)s.',
	'report_cold_cache_running' => '(Пре)создавањето на меѓускладот започна пред %(runtime)s.',
	'report_cold_cache_started' => 'Создавањето/обновата на меѓускладот штотуку почна.',
	'report_nocache' => 'Пријавава е закажана за обнова секоја ноќ, но сè уште не е пуштен, па затоа нема податоци на располагање.',
	'report_first_run' => 'Пријавава се создава за првпат, па затоа нема податоци на располагање.',
	'report_last_run_duration' => 'Пријавава е создадена за %(duration)s.',
	'report_variables_used' => 'За создавањаето на пријавава се искористени следниве променливи.',
	'report_noresults' => 'За жал, пријавава не даде никакви резултати.',
	'report_change_report' => '<a href="%(url)s">Смени пријава</a>',
	'report_change_wiki' => '<a href="%(url)s">Смени вики</a>',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'category_articles' => 'Halaman',
	'category_miscellaneous' => 'Lain-lain',
	'category_wikidata' => 'WikiData',
	'select_wiki' => 'Sila isikan wiki yang anda inginkan laporan (cth. "<kbd>ms.wikipedia.org</kbd>"):',
	'select_wiki_next' => 'Seterusnya →',
	'select_report' => 'Sila pilih laporan:',
	'select_report_disabled_blurb' => 'Nota: Laporan <span class="disabled-report">seperti ini</span> adalah pertanyaan saban malam yang tidak pernah dijalankan; oleh itu tiadanya hasil untuk laporan-laporan ini. Sebaik sahaja laporan saban malam yang seterusnya selesai, akan keluarlah laporan-laporan ini.',
	'select_report_first' => 'Laporan ini sedang diproses buat kali pertama dan seharusnya siap sebentar sahaja lagi.',
	'select_report_hot' => 'Laporan ini terdapat versi cache yang %(age)s lamanya.',
	'select_report_go_back' => '← Tukar wiki',
	'qvar_next' => 'Seterusnya →',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Keutamaan anda telah diubah.',
	'prefs_langlabel' => 'Bahasa antaramuka:',
	'report_wascached' => 'Laporan ini telah dicachekan %(age)s yang lalu.',
	'report_last_run_duration' => 'Laporan ini diproses dalam %(duration)s.',
	'report_variables_used' => 'Pembolehubah-pembolehubah yang berikut digunakan untuk menjana laporan ini:',
	'report_change_report' => '<a href="%(url)s">Tukar laporan</a>',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Taal wijzigen / voorkeuren</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Rapporteer een probleem of maak een suggestie voor een nieuwe functie</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'category_users' => 'Gebruikers',
	'category_articles' => "Pagina's",
	'category_images' => 'Afbeeldingen',
	'category_miscellaneous' => 'Overige',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Selecteer een wiki',
	'select_wiki' => 'Geef de wiki op waar u een rapportage voor wilt, bijvoorbeeld "<kbd>en.wikipedia.org</kbd>":',
	'select_wiki_next' => 'Volgende →',
	'select_report_title' => 'Selecteer een uit te voeren rapportage op %(wiki)s',
	'select_report' => 'Selecteer een rapportage:',
	'select_report_disabled' => 'Deze rapportage is niet beschikbaar.',
	'select_report_disabled_blurb' => 'Let op: rapportages <span class="disabled-report">zoals deze</span> worden gemaakt via nachtelijke zoekopdrachten die nog nooit zijn uitgevoerd. Er zijn daarom nog geen resultaten voor deze rapportage. Als de volgende nachtelijke taken zijn uigevoerd, komen deze rapportages beschikbaar.',
	'select_report_not_cached' => 'Er is geen versie van deze rapportage in de cache. Klik op de koppeling om deze voor de eerste keer uit te voeren.',
	'select_report_first' => 'Deze rapportage wordt voor de eerste keer uitgevoerd en komt snel beschikbaar.',
	'select_report_hot' => 'Er is een %(age)s oude rapportage beschikbaar in de cache.',
	'select_report_cold_running' => 'Er is een %(age)s oude rapportage beschikbaar in de cache. Er wordt over %(eta)s een nieuwe versie verwacht.',
	'select_report_cold_not_running' => 'Er is een %(age)s oude rapportage beschikbaar in de cache. Er wordt een nieuwe versie gemaakt als u de huidige rapportage bekijkt, en de verwachting is dat deze over %(eta)s klaar is.',
	'select_report_no_reports' => 'Er zijn op het moment helaas geen rapportages beschikbaar voor %(wiki)s.',
	'select_report_go_back' => '← Wiki wijzigen',
	'qvar_title' => 'Geef de variabelen voor uw zoekopdracht op',
	'qvar_blurb' => 'Voor uw zoekopdracht moeten een aantal variabelen worden ingevoerd',
	'qvar_next' => 'Volgende →',
	'prefs_title' => 'Rapportagevoorkeuren',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Uw voorkeuren zijn gewijzigd.',
	'prefs_langlabel' => 'Taal:',
	'report_wascached' => 'Deze rapportage is %(age)s in de cache geplaatst.',
	'report_cold_cache_running' => 'Vullen van de cache is %(runtime)s geleden begonnen.',
	'report_cold_cache_started' => 'Vullen van de cache is net begonnen.',
	'report_nocache' => 'Deze rapportage wordt iedere dag opnieuw uitgevoerd, maar is nog niet uitgevoerd. Daarom zijn er geen gegevens beschikbaar.',
	'report_first_run' => 'Deze rapportage wordt voor de eerste keer uitgevoerd, dus er zijn nog geen gegevens beschikbaar.',
	'report_last_run_duration' => 'Deze rapportage is gemaakt in %(duration)s.',
	'report_variables_used' => 'Voor deze rapportage zijn de volgende instellingen gebruikt:',
	'report_noresults' => 'Voor deze rapportage zijn helaas geen resultaten.',
	'report_change_report' => '<a href="%(url)s">Andere rapportage</a>',
	'report_change_wiki' => '<a href="%(url)s">Wiki wijzigen</a>',
);

/** Polish (polski)
 * @author Darellur
 */
$messages['pl'] = array(
	'prefs_done' => 'Twoje preferencje zostały zmienione.',
);

/** Portuguese (português)
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'category_users' => 'Utilizadores',
	'category_articles' => 'Páginas',
	'category_images' => 'Imagens',
	'select_wiki_next' => 'Seguinte →',
	'qvar_next' => 'Seguinte →',
	'prefs_done' => 'As suas preferências foram alteradas.',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Сообщить об ошибке или предложить новую функцию</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Вики</a>',
	'category_users' => 'Участники',
	'category_articles' => 'Страницы',
	'category_images' => 'Изображения',
	'category_miscellaneous' => 'Прочее',
	'category_wikidata' => 'Викиданные',
	'select_wiki_title' => 'Выберите Вики',
	'select_wiki' => 'Пожалуйста, напишите, по какой вики вы хотите получить отчёт (например, «<kbd>ru.wikipedia.org</kbd>»):',
	'select_wiki_next' => 'Далее →',
	'select_report_title' => 'Выберите отчёт для запуска на %(wiki)s',
	'select_report' => 'Пожалуйста, выберите отчёт:',
	'select_report_disabled' => 'Этот отчёт недоступен.',
	'select_report_go_back' => '← Изменить вики',
	'qvar_title' => 'Введите переменные для вашего запроса',
	'qvar_blurb' => 'Для вашего запроса требует ввод нескольких переменных',
	'qvar_next' => 'Далее →',
	'prefs_title' => 'Настройки отчётов',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Ваши настройки были изменены.',
	'prefs_langlabel' => 'Язык интерфейса:',
	'report_wascached' => 'Этот отчёт был закеширован %(age)s назад.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'category_users' => 'Корисници',
	'category_images' => 'Слике',
	'select_wiki_next' => 'Следеће →',
	'qvar_next' => 'Следеће →',
	'prefs_submit' => 'У реду',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Ändra språk / inställningar</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Rapporera ett fel eller begär en funktion</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'category_users' => 'Användare',
	'category_articles' => 'Sidor',
	'category_images' => 'Bilder',
	'category_miscellaneous' => 'Övrigt',
	'category_wikidata' => 'WikiData',
	'select_wiki_title' => 'Välj en wiki',
	'select_wiki_next' => 'Nästa →',
	'select_report' => 'Var god välj en rapport:',
	'select_report_disabled' => 'Denna rapport är inte tillgänglig.',
	'select_report_hot' => 'En cachelagrad version av denna rapport, %(age)s gammal, finns tillgänglig.',
	'select_report_cold_running' => 'En cachelagrad version av denna rapport, %(age)s gammal, finns tillgänglig. En ny version förväntas om %(eta)s.',
	'select_report_cold_not_running' => 'En cachelagrad version av denna rapport, %(age)s gammal, finns tillgänglig. En ny version kommer att förberedas om du granskar den aktuella rapporten, och kommer att vara redo om ungefär %(eta)s.',
	'select_report_go_back' => '← Byt wiki',
	'qvar_next' => 'Nästa →',
	'prefs_submit' => 'OK',
	'prefs_langlabel' => 'Gränssnittsspråk:',
	'report_wascached' => 'Denna rapport cachelagrades %(age)s sedan.',
	'report_change_report' => '<a href="%(url)s">Byt rapport</a>',
	'report_change_wiki' => '<a href="%(url)s">Byt wiki</a>',
);

/** Tamil (தமிழ்)
 * @author ElangoRamanujam
 */
$messages['ta'] = array(
	'category_articles' => 'பக்கங்கள்',
	'category_wikidata' => 'விக்கிதரவு',
	'select_wiki_title' => 'ஒரு விக்கியை தேர்க',
	'prefs_submit' => 'சரி',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'category_users' => 'באַניצער',
	'category_articles' => 'בלעטער',
	'category_images' => 'בילדער',
	'category_miscellaneous' => 'פארשידנס',
	'category_wikidata' => 'וויקידאטן',
	'select_wiki_title' => 'קלויבט א וויקי',
	'select_report_disabled' => 'דער באריכט איז נישט פאראן',
	'select_report_no_reports' => 'ליידע, עס זינען נישט פאראן קיין באריכטן פאר %(wiki)ס דערווײַל.',
	'prefs_submit' => 'ריכטיק',
	'prefs_done' => 'מ׳האט געענדערט אײַערע פרעפערענצן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 * @author Pbsoft
 */
$messages['zh-hans'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">更改语言 / 设置</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">报告问题或请求新功能</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">维基</a>',
	'category_users' => '用户',
	'category_articles' => '页面',
	'category_images' => '图像',
	'category_miscellaneous' => '其他',
	'category_wikidata' => '维基数据',
	'select_wiki_title' => '选择一个wiki',
	'select_wiki' => '请输入您希望报告的wiki（例如“<kbd>zh.wikipedia.org</kbd>”）：',
	'select_wiki_next' => '下一步 →',
	'select_report_title' => '在%(wiki)s上选择一篇报告来运行',
	'select_report' => '请选择一篇报告：',
	'select_report_disabled' => '这篇报告已禁用',
	'select_report_disabled_blurb' => '注意：<span class="disabled-report">像这样</span>的报告本应每夜查询，但从未运行；因此没有结果适用于这些报告。一旦下一次夜间报告运行完成，这些报告将会可用。',
	'select_report_not_cached' => '没有这篇报告的缓存版本。点击链接首次运行。',
	'select_report_first' => '这篇报告才第一次被生成，并且需要等一会儿才能被使用。',
	'select_report_hot' => '此篇报告的缓存版本，已生成时长%(age)s，可用。',
	'select_report_cold_running' => '此篇报告的缓存版本，已生成时长%(age)s，可用，预计的新版本出炉日期%(eta)s。',
	'select_report_cold_not_running' => '本片报告的缓存版本，已生成时长：%(age)s，可用。如果你重新浏览就会生成新的版本，生成时长约%(eta)s。',
	'select_report_no_reports' => '对不起，此时没有%(wiki)s可用的报告',
	'select_report_go_back' => '更改 wiki',
	'qvar_title' => '为你的查询输入变量',
	'qvar_blurb' => '你需要输入一些变量而并用于你的查询。',
	'qvar_next' => '下一步 →',
	'prefs_title' => '报告设置',
	'prefs_submit' => '确认',
	'prefs_done' => '你的偏好已修改',
	'prefs_langlabel' => '界面语言',
	'report_wascached' => '这篇报告的缓存被生成于%(age)s前。',
	'report_cold_cache_running' => '%(runtime)s前开始（重新）生成缓存。',
	'report_cold_cache_started' => '缓存已开始（重新）生成。',
	'report_nocache' => '此报告已安排每夜再生，但尚未运行，因此目前没有可用数据。',
	'report_first_run' => '这篇报告才第一次被生成，所以还没有任何数据可用。',
	'report_last_run_duration' => '这篇报告被生成时长%(duration)s。',
	'report_variables_used' => '以下变量被使用于生成这篇报告：',
	'report_noresults' => '对不起，此篇报告没有生成任何结果。',
	'report_change_report' => '<a href="%(url)s">更改报告</a>',
	'report_change_wiki' => '<a href="%(url)s">更改 wiki</a>',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hant'] = array(
	'category_users' => '使用者',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hk'] = array(
	'category_users' => '用戶',
);
