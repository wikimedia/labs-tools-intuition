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
	'select_wiki' => 'Please enter the wiki you would like a report for (e.g. <em>https://en.wikipedia.org</em>):',
	'select_wiki_next' => 'Next →',

	# SelectReport messages
	'select_report_title' => 'Select a report to run on %(wiki)s',
	'select_report' => 'Please select a report:',
	'select_report_disabled' => 'This report is unavailable.',
	'select_report_disabled_blurb' => 'Note: reports <span class="disabled-report">like this</span> are nightly queries which have never been run; therefore, there are no results available for these reports.  Once the next nightly report run is finished, these reports will become available.',
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
	'prefs_done' => 'Your preferences were successfully changed.',
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

$messages['qqq'] = array(
	'base_prefslink' => 'Link to preferences screen',
	'base_jiralink' =>  'Link to bug tracker',
	'base_wikilink' => 'Link to wiki page describing the tool',
	'base_links' => 'Does not need translation',
	'category_users' => 'Category for user-related queries (short name)',
	'category_articles' => 'Category for wiki page-related queries (short name)',
	'category_images' => 'Category for image-related queries (short name)',
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
	'prefs_submit' => 'Button to submit changes',
	'prefs_done' => 'Note shown after preferences were submitted',
	'prefs_langlabel' => 'Text next to language selection box',
	'report_wascached' => 'Note shown on report page inticating its age',
	'report_cold_cache_running' => 'Note shown on report page inticating the system is preparing a new version, and started some time ago',
	'report_cold_cache_started' => 'Note shown on report page inticating the system is preparing a new version, and just started',
	'report_nocache' => 'Note shown on reports that are run every night that it hasn\'t been run yet.',
	'report_first_run' => 'Note shown the report is still under preparation.',
	'report_last_run_duration' => 'Note showing the runtime of the report',
	'report_variables_used' => 'Note above the list of variables used',
	'report_variable' => 'Does not need translation',
	'report_noresults' => 'Note shown instead of an empty table',
	'report_changelinks' => 'Does not need translation',
	'report_change_report' => 'Button/link to change report to view',
	'report_change_wiki' => 'Button/link to change wiki to view reports for',
);

$messages['de'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Sprache/Einstellungen ändern</a>',
	'base_jiralink' => '<a href="https://jira.toolserver.org/browse/REPORTS">Fehler melden oder Funktion beantragen</a>',
	'base_wikilink' => '<a href="https://wiki.toolserver.org/view/Report_tool">Wiki</a>',
	'base_links' => '%(prefslink)s | %(jiralink)s | %(wikilink)s',
	'category_users' => 'Benutzer',
	'category_articles' => 'Artikel',
	'category_images' => 'Bilder',
	'category_miscellaneous' => 'Sonstiges',
	'select_wiki_title' => 'Wähle ein Wiki',
	'select_wiki' => 'Bitte wähle ein Wiki für das du einen Bericht w&uuml;nscht (z.B. <em>de.wikipedia.org</em>):',
	'select_wiki_next' => 'Weiter →',
	'select_report_title' => 'W&auml;hle einen Bericht für %(wiki)s',
	'select_report' => 'Bitte w&auml;hle einen Bericht:',
	'select_report_disabled' => '%(name)s *',
	'select_report_disabled_blurb' => 'Beachte: Berichte <span class=\'disabled-report\'>die so aussehen</span> werden jede Nacht neu erstellt, der Prozess lief aber noch nicht. Sobald diese Berichte abgeschlossen sind, werden sie verf&uuml;gbar.',
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
	'report_nocache' => 'Es wurde eingestellt, dass dieser Bericht nachts erstellt wird, aber er lief noch nicht, sodass noch keine Daten verf&uuml;gbar sind.',
	'report_variables_used' => 'Die folgenden Einstellunge wurden für den Bericht gemacht:',
	'report_variable' => '%(name)s: %(value)s',
	'report_noresults' => 'Dieser Bericht gibt kein Ergebnis.',
	'report_changelinks' => '← %(changereport)s | %(changewiki)s',
	'report_change_report' => '<a href="%(url)s">Report wechseln</a>',
	'report_change_wiki' => '<a href="%(url)s">Wiki wechseln</a>',
);

$messages['es'] = array(
	'base_prefslink' => '<a href="prefs.fcgi">Cambie el Lenguaje / preferencias</a>',
	'category_users' => 'Usuario',
	'category_articles' => 'Artículos',
	'category_miscellaneous' => 'Miscellaneous',
	'select_wiki_title' => 'Seleccione un Wiki',
	'select_wiki' => 'Por favor, el wiki te gustaría un informe para (por ejemplo, <em>es.wikipedia.org</ em>):',
	'select_wiki_next' => 'Siguiente →',
	'select_report_title' => 'Seleccione un informe para que se ejecute en %(wiki)s',
	'select_report' => 'Por favor, seleccione un informe:',
	'qvar_title' => 'Introduzca las variables para su consulta',
	'qvar_blurb' => 'Su búsqueda requiere de algunas variables que deben registrarse',
	'qvar_next' => 'Siguiente →',
	'prefs_title' => 'Informes preferencias',
	'prefs_submit' => 'OK',
	'prefs_done' => 'Tus preferencias se han cambiado.',
	'prefs_langlabel' => 'Idioma de la Interfaz:',
	'report_wascached' => 'El presente Informe ha sido caché %(age)s antes.',
	'report_nocache' => 'Este informe está programado para ser regenerada cada noche, pero no ha sido aún correr, por lo que no hay datos disponibles.',
);

