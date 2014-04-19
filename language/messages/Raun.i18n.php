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
 *
 * @author Kenrick95
 */
$messages['qqq'] = array(
    // General
    'close' => 'Text displayed for closing a modal.',

    // Menu bar
    'help' => 'Text displayed at menu bar',
    'filter' => 'Text displayed at menu bar',
    'settings' => 'Text displayed at menu bar',
    'fork' => 'Text displayed at menu bar, freely choose to translate "Source code" or "Fork me at GitHub"',
    'stat' => 'Text displayed at menu bar',

    // Settings
    'settings_tool' => 'Rreferred to this tool (Raun)',
    'settings_wiki' => 'Referred to which project is used at the tool',
    'language' => 'Project\'s language which is currently used at the tool',
    'project' => 'Project which is currently used at the tool',
    'save' => 'Save the setting change',
    'settings_pause' => 'Pause the tool (currently unused)',
    'settings_run' => 'Continue the tool (currently unused)',

    // Filter
    'settings_show' => 'the text to show or display entries according to filter',
    'settings_bot_edits' => 'Edits made by bots',
    'settings_anon_edits' => 'Edits made by anonymous users',
    'settings_minor_edits' => 'Minor edits',
    'settings_redirects' => 'Redirect pages',
    'settings_new_pages' => 'New pages',
    'settings_editor_edits' => 'Edits made by users with Editor rights',
    'settings_admin_edits' => 'Edits made by users with Administrator or Sysop rights',
    'settings_other_edits' => 'Other edits not in above filters',

    // Statistics
    'time_utc' => 'Current time, in UTC',
    'stat_articles' => 'Number of Content pages',
    'stat_pages' => 'Number of Pages',
    'stat_files' => 'Number of Uploaded files',
    'stat_edits' => 'Number of Page edits',
    'stat_depth' => 'Value of project\'s Depth',
    'stat_users' => 'Number of Registered users',
    'stat_active_users' => 'Number of Active users',
    'stat_admins' => 'Number of Administrators',
    'separator_thousands' => 'Separator for thousands',
    'separator_decimals' => 'Separator for decimals',

    // Content: definition
    'def_i' => ' v: verb, conv: conversation',
    'def_def' => 'If possible, please put three synonyms of "patrol" separated by semicolon.',

    // Content: table
    'main_time_utc' => 'Displayed for the header of the main table',
    'main_page' => 'Displayed for the header of the main table',
    'main_user' => 'Displayed for the header of the main table',
    'main_info' => 'Displayed for the header of the main table',

    // Content: filter
    'new' => 'filter for information column',
    'minor' => 'filter for information column',
    'anon' => 'filter for information column',
    'redirect' => 'filter for information column',
    'bot' => 'filter for information column',
    'editor' => 'filter for information column',
    'admin' => 'filter for information column',

    // Help
    'help_p1' => 'Definition of the tool',
    'help_p2' => 'Pausing or continuing the tool; currently disabled.',
    'help_p3' => 'What you can do with this tool: filtering under "Filter", change the project settings under "Settings"',
    'help_p4' => 'Information about grey text colour entries',
    'help_legend' => 'Legend, Information about colour and namspace',

    // About
    'about_tool' => 'What is Raun',
    'about_cookie' => 'Cookie refers to HTTP Cookie',
    'about_license' => 'License of the project; "MIT License" is the name of the license',
    'about_github' => 'Availability of source code',
    'send_feedback' => 'Text displayed at the link for sending feedback',
);

/**
 * Indonesian (Bahasa Indonesia)
 * @author Kenrick95
 * @author IvanLanin
 */
$messages['id'] = array(
    // General
    'close' => 'Tutup',

    // Menu bar
    'help' => 'Bantuan',
    'filter' => 'Saringan',
    'settings' => 'Setelan',
    'fork' => 'Kode sumber',
    'stat' => 'Statistik',

    // Settings
    'settings_tool' => 'Alat',
    'settings_wiki' => 'Wiki',
    'language' => 'Bahasa',
    'project' => 'Proyek',
    'save' => 'Simpan',
    'settings_pause' => 'Jeda',    // currently unused
    'settings_run' => 'Jalan!',       // currently unused

    // Filter
    'settings_show' => 'Tampilkan',
    'settings_bot_edits' => 'Suntingan bot',
    'settings_anon_edits' => 'Suntingan anon',
    'settings_minor_edits' => 'Suntingan kecil',
    'settings_redirects' => 'Halaman pengalihan',
    'settings_new_pages' => 'Halaman baru',
    'settings_editor_edits' => 'Suntingan editor',
    'settings_admin_edits' => 'Suntingan pengurus',
    'settings_other_edits' => 'Suntingan lainnya',

    // Statistics
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

    // Content: definition
    'def_i' => 'v cak', // v: verba, cak: percakpan
    'def_def' => 'berkeliling; ronda; patroli;',

    // Content: table
    'main_time_utc' => 'Waktu (UTC)',
    'main_page' => 'Halaman',
    'main_user' => 'Pengguna',
    'main_info' => 'Keterangan',

    // Content: filter
    'new' => 'baru',
    'minor' => 'kecil',
    'anon' => 'anon',
    'redirect' => 'alih',
    'bot' => 'bot',
    'editor' => 'editor',
    'admin' => 'pengurus',

    // Help
    'help_p1' => 'Raun adalah alat untuk memantau perubahan terbaru Wikipedia bahasa Indonesia secara langsung (<i>live</i>). Setiap beberapa saat, Raun akan memuat perubahan terbaru tepat di depan Anda secara otomatis.',
    'help_p2' => 'Anda dapat menjeda (menghentikan sementara) alat ini dengan mengeklik tombol "Jeda". Setelah itu, Anda dapat melanjutkan alat ini dengan mengeklik tombol "Jalan!".',
    'help_p3' => 'Anda dapat menyaring suntingan yang Anda ingin lihat di "Saringan", dan pengaturan proyek wiki, bahasa wiki, dan bahasa alat ini di "Setelan"',
    'help_p4' => 'Baris dengan tulisan berwarna abu-abu berarti terdapat suntingan lain yang lebih baru di halaman tersebut.',
    'help_legend' => 'Legenda:',
    'color' => 'Warna',

    // Namespace, used in Help and Content
    'ns' => 'Ruang nama',
    'ns0' => 'Artikel',
    'ns1' => 'Pembicaraan Artikel',
    'ns2' => 'Pengguna',
    'ns3' => 'Pembicaraan Pengguna',
    'ns4' => 'Proyek',
    'ns5' => 'Pembicaraan Proyek',
    'ns6' => 'Berkas',
    'ns7' => 'Pembicaraan Berkas',
    'ns8' => 'MediaWiki',
    'ns9' => 'Pembicaraan MediaWiki',
    'ns10' => 'Templat',
    'ns11' => 'Pembicaraan Templat',
    'ns12' => 'Bantuan',
    'ns13' => 'Pembicaraan Bantuan',
    'ns14' => 'Kategori',
    'ns15' => 'Pembicaraan Kategori',
    'ns100' => 'Portal',
    'ns101' => 'Pembicaraan Portal',

    // About
    'about' => 'Tentang',
    'about_tool' => 'Raun adalah alat untuk memantau perubahan terbaru Wikipedia bahasa Indonesia secara langsung (<i>live</i>). Alat ini terinspirasi dari $1, oleh $2. Proyek ini dimulai oleh $3.',
    'about_cookie' => 'Situs ini menggunakan kuki HTTP. Data yang disimpan kuki akan otomatis dihapus jika Anda tidak mengunjungi situs ini dalam 30 hari.',

    'information' => 'Informasi',
    'credit' => 'Kredit',
    'about_license' => 'Di luar lisensi kode dan ide yang telah disebutkan, kode proyek ini dilisensikan dengan lisensi MIT',
    'about_github' => 'Kode tersedia di $1',
    'send_feedback' => 'Kirim umpan balik',

);

