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
    'language' => 'Language',
    'project' => 'Project',
    'save' => 'Save',
    'settings_pause' => 'Pause',    // currently unused
    'settings_run' => 'Run!',       // currently unused

    // Filter
    'settings_show' => 'Show',
    'settings_tool' => 'Tool',
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

    // Content: tags
    'new' => 'new',
    'minor' => 'minor',
    'anon' => 'anon',
    'redirect' => 'redirect',
    'bot' => 'bot',
    'editor' => 'editor',
    'admin' => 'admin',

    // Help
    'help_p1' => 'Raun is a tool to patrol the recent changes of Wikimedia Foundation Project wikis in real time. After a while, Raun will load the recent changes and show it in front of you automatically.',
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
    'about_tool' => 'Raun is a tool to watch the recent changes of Wikimedia Foundation projects in (near) real time. This tool is inspired from <a href="http://ivan.lanin.org/ronda">Ronda</a>, by Ivan Lanin. This project is started by <a href="http://kenrick95.org/">Kenrick</a> (<a href="http://en.wikipedia.org/wiki/User:Kenrick95">User:Kenrick95</a>).',
    'about_cookie' => 'This site uses <a href="https://en.wikipedia.org/wiki/HTTP_Cookies">cookies</a>. Data stored by the cookie will be deleted automatically if you don\'t visit this tool in 30 days.',
    'information' => 'Information',
    'credit' => 'Credit',
    'about_license' => 'Otherwise stated, this project source code is licensed under MIT License.',
    'about_github' => 'Source code is available on <a href="https://github.com/kenrick95/Raun">github.com/kenrick95/Raun</a>',
    'send_feedback' => 'Send feedback',
);


/**
 * Indonesian (Bahasa Indonesia)
 *
 * @author Kenrick95, IvanLanin
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
    'language' => 'Bahasa',
    'project' => 'Proyek',
    'save' => 'Simpan',
    'settings_pause' => 'Jeda',    // currently unused
    'settings_run' => 'Jalan!',       // currently unused

    // Filter
    'settings_show' => 'Tampilkan',
    'settings_tool' => 'Alat',
    'settings_wiki' => 'Wiki',
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

    // Content: tags
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
    'about_tool' => 'Raun adalah alat untuk memantau perubahan terbaru Wikipedia bahasa Indonesia secara langsung (<i>live</i>). Alat ini terinspirasi dari <a href="http://ivan.lanin.org/ronda">Ronda</a>, oleh Ivan Lanin. Proyek ini dimulai oleh <a href="http://kenrick95.org/">Kenrick</a> (<a href="http://id.wikipedia.org/wiki/Pengguna:Kenrick95">Pengguna:Kenrick95</a>).',
    'about_cookie' => 'Situs ini menggunakan <a href="https://id.wikipedia.org/wiki/Kuki_HTTP">kuki</a>. Data yang disimpan kuki akan otomatis dihapus jika Anda tidak mengunjungi situs ini dalam 30 hari.',

    'information' => 'Informasi',
    'credit' => 'Kredit',
    'about_license' => 'Di luar lisensi kode dan ide yang telah disebutkan, kode proyek ini dilisensikan dengan lisensi MIT',
    'about_github' => 'Kode tersedia di <a href="https://github.com/kenrick95/Raun">github.com/kenrick95/Raun</a>',
    'send_feedback' => 'Kirim umpan balik',

);

?>