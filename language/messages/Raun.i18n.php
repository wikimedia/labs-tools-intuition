<?php
/**
 * Interface messages for tool "Raun".
 *
 * @toolowner Kenrick95
 */

$url = 'https://tools.wmflabs.org/raun/';

$messages = array();

/**
 * English
 *
 * @author Kenrick95
 */
$messages['en'] = array(
    // General
    'close' => 'Close',

    // Menu bar
    'help' => 'Help',
    'filter' => 'Filter',
    'settings' => 'Settings',
    'fork' => 'Source code',
    'stat' => 'Statistics',

    // Settings
    'settings_tool' => 'Tool',
    'language' => 'Language',
    'project' => 'Project',
    'save' => 'Save',
    'settings_pause' => 'Pause',    // currently unused
    'settings_run' => 'Run!',       // currently unused

    // Filter
    'settings_show' => 'Show',
    'settings_wiki' => 'Wiki',
    'settings_bot_edits' => 'Bot edits',
    'settings_anon_edits' => 'Anon edits',
    'settings_minor_edits' => 'Minor edits',
    'settings_redirects' => 'Redirect pages',
    'settings_new_pages' => 'New pages',
    'settings_editor_edits' => 'Editor edits',
    'settings_admin_edits' => 'Admin edits',
    'settings_other_edits' => 'Other edits',

    // Statistics
    'time_utc' => 'Time, in UTC',
    'stat_articles' => 'Content pages',
    'stat_pages' => 'Pages',
    'stat_files' => 'Uploaded files',
    'stat_edits' => 'Page edits',
    'stat_depth' => 'Depth',
    'stat_users' => 'Registered users',
    'stat_active_users' => 'Active users',
    'stat_admins' => 'Administrators',
    'separator_thousands' => ',',
    'separator_decimals' => '.',

    // Content: definition
    'def_i' => 'v conv', // v: verb, conv: conversation
    'def_def' => 'inspect; guard; patrol;',

    // Content: table
    'main_time_utc' => 'Time (UTC)',
    'main_page' => 'Page',
    'main_user' => 'User',
    'main_info' => 'Information',
    'combined_entries' => 'Combined entries',

    // Content: filter
    'new' => 'new',
    'minor' => 'minor',
    'anon' => 'anon',
    'redirect' => 'redirect',
    'bot' => 'bot',
    'editor' => 'editor',
    'admin' => 'admin',

    // Help
    'help_p1' => 'Raun is a tool to patrol the recent changes of Wikimedia Foundation Project wikis in real time. Raun will load the recent changes periodically and show it in front of you automatically.',
    'help_p2' => 'You can pause this tool by clicking "Pause". And after that, you can run it again by clicking "Run!".', //currently unused
    'help_p3' => 'You can filter the edits you want to see under "Filter", and change the wiki project or language, or the locale of this tool under "Settings".',
    'help_p4' => 'Rows with grey text colour means there are other newer edit(s) on that page.',
    'help_legend' => 'Legend:',
    'color' => 'Colour',

    // Namespace, used in Help and Content
    'ns' => 'Namespace',
    'ns0' => 'Article',
    'ns1' => 'Article talk',
    'ns2' => 'User',
    'ns3' => 'User talk',
    'ns4' => 'Project',
    'ns5' => 'Project talk',
    'ns6' => 'File',
    'ns7' => 'File talk',
    'ns8' => 'MediaWiki',
    'ns9' => 'MediaWiki talk',
    'ns10' => 'Template',
    'ns11' => 'Template talk',
    'ns12' => 'Help',
    'ns13' => 'Help talk',
    'ns14' => 'Category',
    'ns15' => 'Category talk',
    'ns100' => 'Portal',
    'ns101' => 'Portal talk',

    // About
    'about' => 'About',
    'about_tool' => 'Raun is a tool to watch the recent changes of Wikimedia Foundation projects in (near) real time. This tool is inspired from $1, by $2. This project is started by $3.',
    'about_cookie' => 'This site uses cookies. Data stored by the cookie will be deleted automatically if you don\'t visit this tool in 30 days.',
    'information' => 'Information',
    'credit' => 'Credit',
    'about_license' => 'Otherwise stated, this project source code is licensed under MIT License.',
    'about_github' => 'Source code is available on $1',
    'send_feedback' => 'Send feedback',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Kenrick95
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'close' => 'Used as label for the Close button.
{{Identical|Close}}',
	'help' => 'Text displayed at menu bar.
{{Identical|Help}}',
	'filter' => 'Text displayed at menu bar. This message is also used in the message {{msg-intuition|Raun-help p3}}.
{{Identical|Filter}}',
	'settings' => 'Text displayed at menu bar. This message is also used in the message {{msg-intuition|Raun-help p3}}.
{{Identical|Settings}}',
	'fork' => 'Text displayed at menu bar, freely choose to translate "Source code" or "Fork me at GitHub".
{{Identical|Source code}}',
	'stat' => 'Text displayed at menu bar.
{{identical|Statistics}}',
	'settings_tool' => 'Rreferred to this tool (Raun).
{{Identical|Tool}}',
	'language' => "Project's language which is currently used at the tool.
{{Identical|Language}}",
	'project' => 'Project which is currently used at the tool.
{{Identical|Project}}',
	'save' => 'Save the setting change.

Used as label for the Save button.
{{Identical|Save}}',
	'settings_pause' => 'Pause the tool (currently unused). This message is also used in the message {{msg-intuition|Raun-help p2}}.
{{Identical|Pause}}',
	'settings_run' => 'Continue the tool (currently unused). This message is also used in the message {{msg-intuition|Raun-help p2}}.',
	'settings_show' => 'the text to show or display entries according to filter.

Used as label which is followed by the following checkbox labels:
* {{msg-intuition|Raun-settings bot edits}}
* {{msg-intuition|Raun-settings anon edits}}
* {{msg-intuition|Raun-settings minor edits}}
* {{msg-intuition|Raun-settings redirects}}
* {{msg-intuition|Raun-settings new pages}}
* {{msg-intuition|Raun-settings editor edits}}
* {{msg-intuition|Raun-settings admin edits}}
* {{msg-intuition|Raun-settings other edits}}
{{Identical|Show}}',
	'settings_wiki' => 'Referred to which project is used at the tool.

Used as label.
{{Identical|Wiki}}',
	'settings_bot_edits' => 'Edits made by bots',
	'settings_anon_edits' => 'Edits made by anonymous users',
	'settings_minor_edits' => '{{Identical|Minor edit}}',
	'settings_redirects' => '{{Identical|Redirect page}}',
	'settings_new_pages' => '{{Identical|New page}}',
	'settings_editor_edits' => 'Edits made by users with Editor rights',
	'settings_admin_edits' => 'Edits made by users with Administrator or Sysop rights',
	'settings_other_edits' => 'Other edits not in above filters',
	'time_utc' => 'Used as tooltip for the Clock icon.

The icon is followed by time and date.',
	'stat_articles' => 'Number of Content pages.
{{Identical|Content page}}',
	'stat_pages' => 'Number of Pages.
{{Identical|Page}}',
	'stat_files' => 'Number of Uploaded files.
{{Identical|Uploaded file}}',
	'stat_edits' => 'Number of Page edits.
{{Identical|Page edit}}',
	'stat_depth' => "Value of project's Depth",
	'stat_users' => 'Number of Registered users.
{{Identical|Registered user}}',
	'stat_active_users' => 'Number of Active users',
	'stat_admins' => 'Number of Administrators.
{{Identical|Administrator}}',
	'separator_thousands' => 'Separator for thousands',
	'separator_decimals' => 'Separator for decimals',
	'def_i' => ' v: verb, conv: conversation',
	'def_def' => 'If possible, please put three synonyms of "patrol" separated by semicolon.',
	'main_time_utc' => 'Displayed for the header of the main table.
{{Identical|Time}}',
	'main_page' => 'Displayed for the header of the main table.
{{Identical|Page}}',
	'main_user' => 'Displayed for the header of the main table.
{{Identical|User}}',
	'main_info' => 'Displayed for the header of the main table.
{{Identical|Information}}',
	'combined_entries' => 'Text displayed for entries combined into one entry',
	'new' => 'filter for information column.
{{Identical|New}}',
	'minor' => 'filter for information column.
{{Identical|Minor}}',
	'anon' => 'filter for information column.
{{Identical|Anonymous}}',
	'redirect' => 'filter for information column.
{{Identical|Redirect}}',
	'bot' => 'filter for information column.
{{Identical|Bot}}',
	'editor' => 'filter for information column.
{{Identical|Editor}}',
	'admin' => 'filter for information column.

"admin" is short for "administrator".
{{Identical|Admin}}',
	'help_p1' => 'Definition of the tool',
	'help_p2' => 'Pausing or continuing the tool; currently disabled.

This message should be consistent with:
* {{msg-intuition|Raun-settings pause}}
* {{msg-intuition|Raun-settings run}}',
	'help_p3' => 'What you can do with this tool: filtering under "Filter", change the project settings under "Settings".

This message should be consistent with:
* {{msg-intuition|Raun-filter}}
* {{msg-intuition|Raun-settings}}',
	'help_p4' => 'Information about grey text colour entries',
	'help_legend' => 'Legend, Information about colour and namespace.
{{Identical|Legend}}',
	'color' => '{{Identical|Color}}',
	'ns100' => '{{Identical|Portal}}',
	'about_tool' => 'What is Raun. Parameters:
* $1 - "[http://ivan.lanin.org/ronda Ronda]"
* $2 - "Ivan Lanin"
* $3 - "[http://kenrick95.org/ Kenrick] ([[w:User:Kenrick95|User:Kenrick95]])"',
	'about_cookie' => 'Cookie refers to HTTP Cookie',
	'information' => '{{Identical|Information}}',
	'credit' => '{{Identical|Credit}}',
	'about_license' => 'License of the project; "MIT License" is the name of the license',
	'about_github' => 'Availability of source code. Parameters:
* $1 - a link pointing to [http://github.com/kenrick95/Raun github.com/kenrick95/Raun]',
	'send_feedback' => 'Text displayed at the link for sending feedback.
{{Identical|Send feedback}}',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'close' => 'Schließen',
	'help' => 'Hilfe',
	'filter' => 'Filter',
	'settings' => 'Einstellungen',
	'fork' => 'Quellcode',
	'stat' => 'Statistiken',
	'settings_tool' => 'Werkzeug',
	'language' => 'Sprache',
	'project' => 'Projekt',
	'save' => 'Speichern',
	'settings_pause' => 'Pause',
	'settings_run' => 'Los!',
	'settings_show' => 'Anzeigen',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Botbearbeitungen',
	'settings_anon_edits' => 'Anonyme Bearbeitungen',
	'settings_minor_edits' => 'Kleine Bearbeitungen',
	'settings_redirects' => 'Weiterleitungsseiten',
	'settings_new_pages' => 'Neue Seiten',
	'settings_editor_edits' => 'Bearbeitungen von Sichtern',
	'settings_admin_edits' => 'Bearbeitungen von Administratoren',
	'settings_other_edits' => 'Andere Bearbeitungen',
	'time_utc' => 'Zeit in UTC',
	'stat_articles' => 'Inhaltsseiten',
	'stat_pages' => 'Seiten',
	'stat_files' => 'Hochgeladene Dateien',
	'stat_edits' => 'Seitenbearbeitungen',
	'stat_depth' => 'Tiefe',
	'stat_users' => 'Registrierte Benutzer',
	'stat_active_users' => 'Aktive Benutzer',
	'stat_admins' => 'Administratoren',
	'separator_thousands' => '.',
	'separator_decimals' => ',',
	'def_i' => 'v conv',
	'def_def' => 'inspect; guard; patrol;',
	'main_time_utc' => 'Zeit (UTC)',
	'main_page' => 'Seite',
	'main_user' => 'Benutzer',
	'main_info' => 'Information',
	'combined_entries' => 'Kombinierte Einträge',
	'new' => 'neu',
	'minor' => 'Kleinigkeiten',
	'anon' => 'anonym',
	'redirect' => 'Weiterleitung',
	'bot' => 'Bot',
	'editor' => 'Sichter',
	'admin' => 'Administrator',
	'help_p1' => 'Raun ist ein Werkzeug zur Echtzeitkontrolle der letzten Änderungen von Projekten der Wikimedia Foundation. Raun lädt die letzten Änderungen periodisch und zeigt sie dir automatisch an.',
	'help_p2' => 'Du kannst dieses Werkzeug mit einem Klick auf „Pause“ anhalten. Nach diesem Vorgang kannst du es erneut ausführen, indem du auf „Los!“ klickst.',
	'help_p3' => 'Du kannst die gewünschten Bearbeitungen filtern, die du unter „Filter“ siehst und das Wikiprojekt oder die Sprache bzw. Sprachumgebung für dieses Werkzeug unter „Einstellungen“ ändern.',
	'help_p4' => 'Zeilen mit grauer Textfarbe bedeuten, dass es neuere Bearbeitungen auf dieser Seite gibt.',
	'help_legend' => 'Legende:',
	'color' => 'Farbe',
	'about' => 'Über',
	'about_tool' => 'Raun ist ein Werkzeug zur Fast-Echtzeit-Anzeige der letzten Änderungen von Projekten der Wikimedia Foundation. Dieses Werkzeug wurde von $1 durch $2 inspiriert. Dieses Projekt wurde gestartet von $3.',
	'about_cookie' => 'Diese Website verwendet Cookies. Daten werden von dem Cookie gespeichert und automatisch gelöscht, wenn du dieses Werkzeug in 30 Tagen nicht erneut besuchst.',
	'information' => 'Information',
	'credit' => 'Danksagungen',
	'about_license' => 'Falls nicht anders angegeben, ist der Quellcode dieses Projekts lizenziert unter der MIT-Lizenz.',
	'about_github' => 'Der Quellcode ist verfügbar auf $1',
	'send_feedback' => 'Rückmeldung senden',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Kingpowl
 */
$messages['es'] = array(
	'close' => 'Cerrar',
	'help' => 'Ayuda',
	'settings' => 'Ajustes',
	'stat' => 'Estadísticas',
	'settings_show' => 'Mostrar',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Ediciones de bot',
	'settings_anon_edits' => 'Ediciones anónimas',
	'settings_minor_edits' => 'Ediciones menores',
	'settings_new_pages' => 'Páginas nuevas',
	'time_utc' => 'Hora, en UTC',
	'stat_pages' => 'Páginas',
	'stat_files' => 'Archivos subidos',
	'stat_users' => 'Usuarios registrados',
	'stat_admins' => 'Administradores',
	'main_user' => 'Usuario',
	'main_info' => 'Información',
	'admin' => 'Administrador',
	'color' => 'Color',
	'about' => 'Acerca de',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'close' => 'Fermer',
	'help' => 'Aide',
	'filter' => 'Filtrer',
	'settings' => 'Paramètres',
	'fork' => 'Code source',
	'stat' => 'Statistiques',
	'settings_tool' => 'Outil',
	'language' => 'Langue',
	'project' => 'Projet',
	'save' => 'Enregistrer',
	'settings_pause' => 'Pause',
	'settings_run' => 'Lancer !',
	'settings_show' => 'Afficher',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Modifications de robot',
	'settings_anon_edits' => 'Modifications anonymes',
	'settings_minor_edits' => 'Modifications mineures',
	'settings_redirects' => 'Pages de redirection',
	'settings_new_pages' => 'Nouvelles pages',
	'settings_editor_edits' => 'Modifications de l’éditeur',
	'settings_admin_edits' => 'Modifications de l’administrateur',
	'settings_other_edits' => 'Autres modifications',
	'time_utc' => 'Heure, en UTC',
	'stat_articles' => 'Pages de contenu',
	'stat_pages' => 'Pages',
	'stat_files' => 'Fichiers importés',
	'stat_edits' => 'Modifications de page',
	'stat_depth' => 'Profondeur',
	'stat_users' => 'Utilisateurs enregistrés',
	'stat_active_users' => 'Utilisateurs actifs',
	'stat_admins' => 'Administrateurs',
	'separator_thousands' => ',',
	'separator_decimals' => '.',
	'def_i' => 'v conv',
	'def_def' => 'inspecter; garder; patrouiller;',
	'main_time_utc' => 'Heure (UTC)',
	'main_page' => 'Page',
	'main_user' => 'Utilisateur',
	'main_info' => 'Information',
	'combined_entries' => 'Entrées combinées',
	'new' => 'nouveau',
	'minor' => 'mineure',
	'anon' => 'anonyme',
	'redirect' => 'redirection',
	'bot' => 'robot',
	'editor' => 'éditeur',
	'admin' => 'administrateur',
	'help_p1' => 'Raun est un outil pour parcourir les modifications récentes des wikis du Projet de Fondation Wikimédia en temps réel. Raun chargera les modifications récentes de façon périodique et vous les affichera automatiquement.',
	'help_p2' => 'Vous pouvez mettre cet outil en pause en cliquant sur « Pause ». Et après cela, vous pouvez le relancer en cliquant sur « Lancer ! ».',
	'help_p3' => 'Vous pouvez filtrer les modifications que vous souhaitez voir sous « Filtrer », et modifier le projet ou la langue du wiki, ou la localisation de cet outil sous « Paramètres ».',
	'help_p4' => 'Les lignes avec un texte grisé signifient qu’il y a d’autre(s) modification(s) plus récente(s) sur cette page.',
	'help_legend' => 'Légende :',
	'color' => 'Couleur',
	'about' => 'À propos',
	'about_tool' => 'Raun est un outil qui surveille les modifications récentes sur les projets de la Fodnation Wikimédia en temps (quasi) réel. Cet outil est inspiré de $1, par $2. Ce projet a été démarré par $3.',
	'about_cookie' => 'Ce site utilise des cookies. Les données stockées dans ceux-ci seront supprimées automatiquement si vous ne rendez pas visite à cet outil dans 30 jours.',
	'information' => 'Information',
	'credit' => 'Crédit',
	'about_license' => 'Dit autrement, le code source de ce projet est sous la licence MIT.',
	'about_github' => 'Le code source est disponible sur $1',
	'send_feedback' => 'Envoyer un avis',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'close' => 'סגירה',
	'help' => 'עזרה',
	'filter' => 'מסנן',
	'settings' => 'הגדרות',
	'fork' => 'קוד מקור',
	'stat' => 'סטטיסטיקות',
	'settings_tool' => 'כלי',
	'language' => 'שפה',
	'project' => 'מיזם',
	'save' => 'שמירה',
	'settings_pause' => 'השהיה',
	'settings_run' => 'הרצה!',
	'settings_show' => 'הצגה',
	'settings_wiki' => 'ויקי',
	'settings_bot_edits' => 'עריכות בוטים',
	'settings_anon_edits' => 'עריכות אלמוניות',
	'settings_minor_edits' => 'עריכות משניות',
	'settings_redirects' => 'דפי הפניה',
	'settings_new_pages' => 'דפים חדשים',
	'settings_editor_edits' => 'עריכות של עורכים',
	'settings_admin_edits' => 'עריכות מפעילים',
	'settings_other_edits' => 'עריכות אחרות',
	'time_utc' => 'זמן ב־UTC',
	'stat_articles' => 'דפי תוכן',
	'stat_pages' => 'דפים',
	'stat_files' => 'קבצים שהועלו',
	'stat_edits' => 'עריכות דפים',
	'stat_depth' => 'עומק',
	'stat_users' => 'משתמשים רשומים',
	'stat_active_users' => 'משתמשים פעילים',
	'stat_admins' => 'מפעילים',
	'separator_thousands' => ',',
	'separator_decimals' => '.',
	'def_i' => 'פועל מדובר',
	'def_def' => 'ניטור; שמירה; פיקוח',
	'main_time_utc' => 'זמן (UTC)',
	'main_page' => 'דף',
	'main_user' => 'משתמש',
	'main_info' => 'מידע',
	'combined_entries' => 'עיולים מחוברים',
	'new' => 'חדש',
	'minor' => 'משנית',
	'anon' => 'אלמונית',
	'redirect' => 'הפניה',
	'bot' => 'בוט',
	'editor' => 'עורך',
	'admin' => 'מפעיל',
	'help_p1' => 'ראון הוא כלי לניטור שינויים אחרונים באתרי ויקי של קרן ויקימדיה בזמן־אמת.',
	'help_p2' => 'אפשר להשהות את הכלי הזה באמצעות לחיצה על "השהיה". לאחר מכן אפשר להרית אותו שוב באמצעות לחיצה על "הרצה!"',
	'help_p3' => 'אפשר לסנן את העריכות שברצונך לראות תחת "מסנן" ולשנות את המיזם או את השפה או את שפת הממשק של הכלי הזה תחת "הגדרות".',
	'help_p4' => 'שורות עם טקסט בצבע אפור אומרות שיש עריכות חדשות באותו הדף.',
	'help_legend' => 'מקרא:',
	'color' => 'צבע',
	'about' => 'אודות',
	'about_tool' => 'ראון הוא כלי למעקב אחרי שינויים אחרונים במיזמי קרן ויקימדיה (כמעט) בזמן אמת. ההשראה לכלי הזה באה מ־$1 מאת $2. $3 התחיל את המיזם הזה.',
	'about_cookie' => 'האתר הזה משתמש בעוגיות. הנתונים שנשמרים בעוגיה יימחקו באופן אוטומטי אם לא תתבצע כניסה לכלי הזה במשך שלושים ימים רצופים.',
	'information' => 'מידע',
	'credit' => 'קרדיט',
	'about_license' => 'אלא אם נאמר אחרת, קוד המקור של המיזם מתפרסם לפי רישון MIT.',
	'about_github' => 'קוד המקור זמין ב־$1',
	'send_feedback' => 'המשוב נשלח',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 * @author Kenrick95
 */
$messages['id'] = array(
	'close' => 'Tutup',
	'help' => 'Bantuan',
	'filter' => 'Saringan',
	'settings' => 'Setelan',
	'fork' => 'Kode sumber',
	'stat' => 'Statistik',
	'settings_tool' => 'Alat',
	'language' => 'Bahasa',
	'project' => 'Proyek',
	'save' => 'Simpan',
	'settings_pause' => 'Jeda',
	'settings_run' => 'Jalan!',
	'settings_show' => 'Tampilkan',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Suntingan bot',
	'settings_anon_edits' => 'Suntingan anon',
	'settings_minor_edits' => 'Suntingan kecil',
	'settings_redirects' => 'Halaman pengalihan',
	'settings_new_pages' => 'Halaman baru',
	'settings_editor_edits' => 'Suntingan editor',
	'settings_admin_edits' => 'Suntingan pengurus',
	'settings_other_edits' => 'Suntingan lainnya',
	'time_utc' => 'Waktu, dalam UTC',
	'stat_articles' => 'Halaman konten',
	'stat_pages' => 'Jumlah halaman',
	'stat_files' => 'Jumlah berkas',
	'stat_edits' => 'Jumlah suntingan',
	'stat_depth' => 'Kedalaman',
	'stat_users' => 'Jumlah pengguna',
	'stat_active_users' => 'Pengguna aktif',
	'stat_admins' => 'Jumlah pengurus',
	'separator_thousands' => '.',
	'separator_decimals' => ',',
	'def_i' => 'v cak',
	'def_def' => 'berkeliling; ronda; patroli;',
	'main_time_utc' => 'Waktu (UTC)',
	'main_page' => 'Halaman',
	'main_user' => 'Pengguna',
	'main_info' => 'Keterangan',
	'combined_entries' => 'Beberapa entri',
	'new' => 'baru',
	'minor' => 'kecil',
	'anon' => 'anon',
	'redirect' => 'alih',
	'bot' => 'bot',
	'editor' => 'editor',
	'admin' => 'pengurus',
	'help_p1' => 'Raun adalah alat untuk memantau perubahan terbaru Wikipedia bahasa Indonesia secara langsung (<i>live</i>). Setiap beberapa saat, Raun akan memuat perubahan terbaru tepat di depan Anda secara otomatis.',
	'help_p2' => 'Anda dapat menjeda (menghentikan sementara) alat ini dengan mengeklik tombol "Jeda". Setelah itu, Anda dapat melanjutkan alat ini dengan mengeklik tombol "Jalan!".',
	'help_p3' => 'Anda dapat menyaring suntingan yang Anda ingin lihat di "Saringan", dan pengaturan proyek wiki, bahasa wiki, dan bahasa alat ini di "Setelan"',
	'help_p4' => 'Baris dengan tulisan berwarna abu-abu berarti terdapat suntingan lain yang lebih baru di halaman tersebut.',
	'help_legend' => 'Legenda:',
	'color' => 'Warna',
	'about' => 'Tentang',
	'about_tool' => 'Raun adalah alat untuk memantau perubahan terbaru Wikipedia bahasa Indonesia secara langsung (<i>live</i>). Alat ini terinspirasi dari $1, oleh $2. Proyek ini dimulai oleh $3.',
	'about_cookie' => 'Situs ini menggunakan kuki HTTP. Data yang disimpan kuki akan otomatis dihapus jika Anda tidak mengunjungi situs ini dalam 30 hari.',
	'information' => 'Informasi',
	'credit' => 'Kredit',
	'about_license' => 'Di luar lisensi kode dan ide yang telah disebutkan, kode proyek ini dilisensikan dengan lisensi MIT',
	'about_github' => 'Kode tersedia di $1',
	'send_feedback' => 'Kirim umpan balik',
);

/** Italian (italiano)
 * @author Beta16
 * @author Ontsed
 */
$messages['it'] = array(
	'close' => 'Chiudi',
	'help' => 'Aiuto',
	'filter' => 'Filtra',
	'settings' => 'Impostazioni',
	'fork' => 'Codice sorgente',
	'stat' => 'Statistiche',
	'settings_tool' => 'Strumento',
	'language' => 'Lingua',
	'project' => 'Progetto',
	'save' => 'Salva',
	'settings_pause' => 'Pausa',
	'settings_run' => 'Esegui!',
	'settings_show' => 'Mostra',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Modifiche dei bot',
	'settings_anon_edits' => 'Modifiche di utenti anonimi',
	'settings_minor_edits' => 'Modifiche di minore importanza',
	'settings_redirects' => 'Pagine di reindirizzamento',
	'settings_new_pages' => 'Nuove pagine',
	'settings_editor_edits' => 'Modifiche di editori',
	'settings_admin_edits' => 'Modifiche di amministratori',
	'settings_other_edits' => 'Altre modifiche',
	'time_utc' => 'Ora, in UTC',
	'stat_articles' => 'Pagine di contenuti',
	'stat_pages' => 'Pagine',
	'stat_files' => 'File caricati',
	'stat_edits' => 'Modifiche alla pagina',
	'stat_depth' => 'Profondità',
	'stat_users' => 'Utenti registrati',
	'stat_active_users' => 'Utenti attivi',
	'stat_admins' => 'Amministratori',
	'separator_thousands' => '&nbsp;',
	'separator_decimals' => ',',
	'def_i' => 'v conv',
	'def_def' => 'controlla; verifica; esamina;',
	'main_time_utc' => 'Ora (UTC)',
	'main_page' => 'Pagina',
	'main_user' => 'Utente',
	'main_info' => 'Informazioni',
	'combined_entries' => 'Voci combinate',
	'new' => 'nuovo',
	'minor' => 'minore',
	'anon' => 'anonimo',
	'redirect' => 'redirect',
	'bot' => 'bot',
	'editor' => 'editore',
	'admin' => 'amministratore',
	'help_p1' => 'Raun è uno strumento per verificare le modifiche recenti nei wiki dei progetti della Wikimedia Foundation in tempo reale. Raun caricherà periodicamente le ultime modifiche e te le mostrerà automaticamente.',
	'help_p2' => 'Puoi sospendere questo strumento cliccando su "Pausa". Successivamente, puoi eseguirlo nuovamente cliccando su "Esegui!".',
	'help_p3' => 'Puoi filtrare le modifiche che vuoi vedere tramite "Filtra" e modificare il progetto wiki, la lingua o la localizzazione di questo strumento nelle "Impostazioni".',
	'help_p4' => 'Le righe con testo grigio indicano che vi sono altre modifiche più recenti su quella pagina.',
	'help_legend' => 'Legenda:',
	'color' => 'Colore',
	'about' => 'A proposito di',
	'about_tool' => 'Raun è uno strumento per osservare le ultime modifiche nei progetti della Wikimedia Foundation (quasi) in tempo reale. Questo strumento è ispirato da $1, di $2. Questo progetto è stato avviato da $3.',
	'about_cookie' => 'Questo sito utilizza i cookie. I dati memorizzati dai cookie verranno eliminati automaticamente se non visitare questo strumento per 30 giorni.',
	'information' => 'Informazioni',
	'credit' => 'Crediti',
	'about_license' => 'Eccetto dove diversamente indicato, il codice di questo progetto è rilasciato sotto licenza MIT.',
	'about_github' => 'Il codice sorgente è disponibile su $1',
	'send_feedback' => 'Invia commenti',
);

/** Kannada (ಕನ್ನಡ)
 * @author VASANTH S.N.
 */
$messages['kn'] = array(
	'close' => 'ಮುಚ್ಚಿ',
	'help' => 'ಸಹಾಯ',
	'filter' => 'ಶೋಧಕ',
	'settings' => 'ವ್ಯವಸ್ಥೆಗಳು',
	'stat' => 'ಅಂಕಿ ಅಂಶಗಳು',
	'settings_tool' => 'ಉಪಕರಣ',
	'language' => 'ಭಾಷೆ',
	'project' => 'ಯೋಜನೆ',
	'save' => 'ಉಳಿಸಿ',
	'settings_pause' => 'ವಿರಾಮ',
	'settings_show' => 'ತೋರಿಸು',
	'settings_wiki' => 'ವಿಕಿ',
	'settings_minor_edits' => 'ಚಿಕ್ಕ ಸಂಪಾದನೆ',
	'settings_redirects' => 'ಪುನರ್ನಿರ್ದೇಶನ ಪುಟಗಳು',
	'settings_new_pages' => 'ಹೊಸ ಪುಟಗಳು',
	'settings_editor_edits' => 'ಚಿಕ್ಕ ಸಂಪಾದನೆ',
	'settings_other_edits' => 'ಇತರ ಸಂಪಾದನೆಗಳು',
	'stat_articles' => 'ಲೇಖನ ಪುಟ',
	'stat_pages' => 'ಪುಟಗಳು',
	'stat_files' => 'ಅಪ್ಲೋಡ್ ಆಗಿರುವ ಫೈಲುಗಳು',
	'stat_edits' => 'ಪುಟದ ಸಂಪಾದನೆಗಳು',
	'stat_active_users' => 'ಸಕ್ರಿಯ ಬಳಕೆದಾರರು',
	'stat_admins' => 'ನಿರ್ವಾಹಕರು',
	'separator_thousands' => ',',
	'separator_decimals' => '.',
	'main_time_utc' => 'ಸಮಯ (UTC)',
	'main_page' => 'ಪುಟ',
	'main_user' => 'ಬಳಕೆದಾರ',
	'main_info' => 'ಮಾಹಿತಿ',
	'new' => 'ಹೊಸ',
	'minor' => 'ಚುಟುಕು',
	'redirect' => 'ಪುನರ್ನಿರ್ದೇಶನಗಳು',
	'bot' => 'ಬಾಟ್‍',
	'editor' => 'ಸಂಪಾದಕ',
	'color' => 'ಬಣ್ಣ',
	'about' => 'ಕುರಿತು',
	'information' => 'ಮಾಹಿತಿ',
	'credit' => 'ಮನ್ನಣೆ',
	'about_github' => 'ಮೂಲ ಸಂಕೇತವು $1ರಲ್ಲಿ ದೊರೆಯುತ್ತದೆ',
	'send_feedback' => 'ಮರುಮಾಹಿತಿ ಕಳುಹಿಸಿ',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'close' => 'Zoumaachen',
	'help' => 'Hëllef',
	'filter' => 'Filter',
	'settings' => 'Astellungen',
	'fork' => 'Quellcode',
	'stat' => 'Statistiken',
	'language' => 'Sprooch',
	'project' => 'Projet',
	'save' => 'Späicheren',
	'settings_pause' => 'Paus',
	'settings_run' => 'Lass!',
	'settings_show' => 'Weisen',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Botännerungen',
	'settings_anon_edits' => 'Anonym Ännerungen',
	'settings_minor_edits' => 'Kleng Ännerungen',
	'settings_redirects' => 'Viruleedungssäiten',
	'settings_new_pages' => 'Nei Säiten',
	'settings_other_edits' => 'Aner Ännerungen',
	'time_utc' => 'Zäit (UTC)',
	'stat_articles' => 'Säite mat Inhalt',
	'stat_pages' => 'Säiten',
	'stat_files' => 'Eropgeluede Fichieren',
	'stat_edits' => 'Säitenännerungen',
	'stat_depth' => 'Déift',
	'stat_users' => 'Registréiert Benotzer',
	'stat_active_users' => 'Aktiv Benotzer',
	'stat_admins' => 'Administrateuren',
	'separator_thousands' => ',',
	'separator_decimals' => '.',
	'main_time_utc' => 'Zäit (UTC)',
	'main_page' => 'Säit',
	'main_user' => 'Benotzer',
	'main_info' => 'Informatioun',
	'new' => 'nei',
	'minor' => 'kleng',
	'anon' => 'anonym',
	'redirect' => 'Viruleedung',
	'bot' => 'Bot',
	'editor' => 'Editeur',
	'admin' => 'Administrateur',
	'help_legend' => 'Erklärung:',
	'color' => 'Faarf',
	'about' => 'Iwwer',
	'information' => 'Informatioun',
	'send_feedback' => 'Feedback schécken',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'close' => 'Затвори',
	'help' => 'Помош',
	'filter' => 'Филтер',
	'settings' => 'Нагодувања',
	'fork' => 'Изворен код',
	'stat' => 'Статистики',
	'settings_tool' => 'Алатка',
	'language' => 'Јазик',
	'project' => 'Проект',
	'save' => 'Зачувај',
	'settings_pause' => 'Запри',
	'settings_run' => 'Пушти!',
	'settings_show' => 'Прикажи',
	'settings_wiki' => 'Вики',
	'settings_bot_edits' => 'Уредувања на бот',
	'settings_anon_edits' => 'Анонимни уредувања',
	'settings_minor_edits' => 'Ситни уредувања',
	'settings_redirects' => 'Пренасочувачки страници',
	'settings_new_pages' => 'Нови страници',
	'settings_editor_edits' => 'Уредувања на уредници',
	'settings_admin_edits' => 'Уредувања на администратори',
	'settings_other_edits' => 'Други уредувања',
	'time_utc' => 'Време (UTC)',
	'stat_articles' => 'Содржински страници',
	'stat_pages' => 'Страници',
	'stat_files' => 'Подигнати податотеки',
	'stat_edits' => 'Уредувања на страници',
	'stat_depth' => 'Содржајност',
	'stat_users' => 'Регистрирани корисници',
	'stat_active_users' => 'Активни корисници',
	'stat_admins' => 'Администратори',
	'separator_thousands' => '.',
	'separator_decimals' => ',',
	'def_i' => 'г разг',
	'def_def' => 'проверка; штитење; надгледување;',
	'main_time_utc' => 'Време (UTC)',
	'main_page' => 'Страница',
	'main_user' => 'Корисник',
	'main_info' => 'Информации',
	'combined_entries' => 'Комбинирани ставки',
	'new' => 'нови',
	'minor' => 'ситни',
	'anon' => 'анон',
	'redirect' => 'пренасоч.',
	'bot' => 'ботск.',
	'editor' => 'уредник',
	'admin' => 'админ',
	'help_p1' => 'Raun е алатка за надгледување на скорешни промени на Викимедиините викија во живо. Програмот повремено ги вчитува скорешните промени и автоматски ви ги истакнува на увид.',
	'help_p2' => 'Можете да ја подзапрете алатката на копчето „Запри“ и да ја пуштите да продолжи на „Пушти!“.',
	'help_p3' => 'Можете да ги исфилтрирате уредувањата што сакате да ги гледате во делот „Филтер“, и да ги смените проектот и јазикот или местото во делот „Нагодувања“.',
	'help_p4' => 'Редовите со сив текст значат дека на таа страница има други понови уредувања.',
	'help_legend' => 'Легенда:',
	'color' => 'Боја',
	'about' => 'За програмот',
	'about_tool' => 'Raun е алатка за надгледување на скорешните промени на Викимедиините проекти во (речиси) живо. Алаткава е инспирирана од $1 на $2. Зачетник на проектов е $3.',
	'about_cookie' => 'Алаткава користи колачиња. Складираните податоци ќе се самоизбришат ако не ја посетите во рок од 30 дена.',
	'information' => 'Информации',
	'credit' => 'Признанија',
	'about_license' => 'Ако не е поинаку наведено, изворниот код на проектов е под лиценцата MIT.',
	'about_github' => 'Изворниот код ќе го најдете на $1',
	'send_feedback' => 'Испрати мислење',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'settings' => 'Tetapan',
	'language' => 'Bahasa',
	'stat_pages' => 'Halaman',
	'bot' => 'bot',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
	'close' => 'Fechar',
	'help' => 'Ajuda',
	'settings' => 'Configurações',
	'stat' => 'Estatísticas',
	'settings_tool' => 'Ferramenta',
	'language' => 'Língua',
	'project' => 'Projeto',
	'save' => 'Salvar',
	'settings_pause' => 'Pausar',
	'settings_show' => 'Exibir',
	'settings_wiki' => 'Wiki',
	'settings_minor_edits' => 'Edições menores',
	'settings_redirects' => 'Páginas de redirecionamento',
	'settings_new_pages' => 'Páginas novas',
	'settings_admin_edits' => 'Edições de administradores',
	'settings_other_edits' => 'Outras edições',
	'stat_pages' => 'Páginas',
	'stat_users' => 'Usuários registrados',
	'stat_active_users' => 'Usuários ativos',
	'stat_admins' => 'Administradores',
	'main_page' => 'Página',
	'main_user' => 'Usuário',
	'main_info' => 'Informação',
	'new' => 'novo',
	'minor' => 'menor',
	'redirect' => 'redirecionamento',
	'editor' => 'editor',
	'admin' => 'administrador',
	'color' => 'Cor',
	'about' => 'Sobre',
	'information' => 'Informação',
	'credit' => 'Crédito',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'close' => 'Закрыть',
	'help' => 'Помощь',
	'filter' => 'Фильтр',
	'settings' => 'Настройки',
	'fork' => 'Исходный код',
	'stat' => 'Статистика',
	'settings_tool' => 'Инструмент',
	'language' => 'Язык',
	'project' => 'Проект',
	'save' => 'Сохранить',
	'settings_pause' => 'Пауза',
	'settings_run' => 'Запустить!',
	'settings_show' => 'Показать',
	'settings_wiki' => 'Вики',
	'settings_bot_edits' => 'Правки ботов',
	'settings_anon_edits' => 'Анонимные правки',
	'settings_minor_edits' => 'Малые изменения',
	'settings_redirects' => 'Страницы-перенаправления',
	'settings_new_pages' => 'Новые страницы',
	'settings_editor_edits' => 'Правки редакторов',
	'settings_admin_edits' => 'Правки администраторов',
	'settings_other_edits' => 'Другие правки',
	'time_utc' => 'Время (в формате UTC)',
	'stat_articles' => 'Основные страницы',
	'stat_pages' => 'Страницы',
	'stat_files' => 'Загруженные файлы',
	'stat_edits' => 'Правки страницы',
	'stat_depth' => 'Глубина',
	'stat_users' => 'Зарегистрированные участники',
	'stat_active_users' => 'Активные участники',
	'stat_admins' => 'Администраторы',
	'separator_thousands' => ',',
	'separator_decimals' => '.',
	'main_time_utc' => 'Время (UTC)',
	'main_page' => 'Страница',
	'main_user' => 'Участник',
	'main_info' => 'Информация',
	'minor' => 'малая',
	'anon' => 'аноним',
	'redirect' => 'перенапр',
	'bot' => 'бот',
	'editor' => 'редактор',
	'admin' => 'админ',
	'color' => 'Цвет',
	'information' => 'Информация',
	'about_github' => 'Исходный код доступен на $1',
	'send_feedback' => 'Отправить отзыв',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'close' => 'Stäng',
	'help' => 'Hjälp',
	'filter' => 'Filter',
	'settings' => 'Inställningar',
	'fork' => 'Källkod',
	'stat' => 'Statistik',
	'settings_tool' => 'Verktyg',
	'language' => 'Språk',
	'project' => 'Projekt',
	'save' => 'Spara',
	'settings_pause' => 'Pausa',
	'settings_run' => 'Kör!',
	'settings_show' => 'Visa',
	'settings_wiki' => 'Wiki',
	'settings_bot_edits' => 'Botredigeringar',
	'settings_anon_edits' => 'Anonyma redigeringar',
	'settings_minor_edits' => 'Mindre redigeringar',
	'settings_redirects' => 'Omdirigeringssidor',
	'settings_new_pages' => 'Nya sidor',
	'settings_editor_edits' => 'Mindre redigeringar',
	'settings_admin_edits' => 'Administratörredigeringar',
	'settings_other_edits' => 'Andra redigeringar',
	'time_utc' => 'Tid i UTC',
	'stat_articles' => 'Innehållssidor',
	'stat_pages' => 'Sidor',
	'stat_files' => 'Uppladdade filer',
	'stat_edits' => 'Sidredigeringar',
	'stat_depth' => 'Djup',
	'stat_users' => 'Registrerade användare',
	'stat_active_users' => 'Aktiva användare',
	'stat_admins' => 'Administratörer',
	'separator_thousands' => ',',
	'separator_decimals' => '.',
	'main_time_utc' => 'Tid (UTC)',
	'main_page' => 'Sida',
	'main_user' => 'Användare',
	'main_info' => 'Information',
	'new' => 'nya',
	'minor' => 'mindre',
	'anon' => 'anonyma',
	'redirect' => 'omdirigering',
	'editor' => 'redigerare',
	'admin' => 'administratör',
	'help_p4' => 'Rader med grå textfärg innebär att det finns en eller flera andra nyare redigeringar på den sidan.',
	'help_legend' => 'Teckenförklaring:',
	'color' => 'Färg',
	'about' => 'Om',
	'information' => 'Information',
	'about_github' => 'Källkoden finns tillgänglig på $1',
	'send_feedback' => 'Skicka återkoppling',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'send_feedback' => 'שיקן פידבעק',
);
