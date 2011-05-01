<?php
/**
 * Interface messages for tool "CommonsHelper2".
 *
 * @toolowner jan
 */

$url = '~commonshelper2/';

$messages = array();

/**
 * English
 *
 * @author Jan Luca
 */
$messages['en'] = array(
	'title' => 'CommonsHelper 2', // Ignore

	'attention' => 'Attention',
	'commonshelper2' => 'CommonsHelper 2', // Optional
	'description' => 'A tool to transfer files from Wikimedia projects to Wikimedia Commons',
	'change_meta' => 'Change the $1category and template settings$2 for $3',
	'jira_link' => 'Report a bug or suggest a feature',

	// Main form
	'language' => 'Language',
	'project' => 'Project',
	'source_file' => 'Source file',
	'target_file' => 'Target file',
	'commons_username' => 'Wikimedia Commons username',
	'commons_to_project' => 'Wikimedia Commons to project',
	'move_file_from_com' => 'Move file from Wikimedia Commons to project',
	'categories' => 'Categories',
	'remove_cats' => 'Remove existing categories',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Use $1CommonSense$2 to suggest new categories',
	'tusc' => 'TUSC', // Ignore
	'use_tusc' => 'Use $1TUSC$2 to transfer the file directly',
	'tusc_user' => 'TUSC username',
	'tusc_pass' => 'TUSC password',
	'do_it' => 'Do it',

	// Error
	'error_transfer_usr' => 'You have not set a Wikimedia Commons username',
	'error_not_exists' => 'Source file does not exist!',
	'error_file_exists' => 'File already exists on $3 as "$1$4$2"!',
	'error_diff_exists' => 'Different target file exists on the target wiki under the same name!',
	'error_no_meta' => 'No metadata found for the source wiki! $1Link$2',	
	'error_meta_no_good' => 'Metadata: No good templates found! $1Link$2',	
	'error_meta_bad' => 'Metadata: Bad template found! $1Link$2',	

	// Output
	'original_wikitext' => 'Original wiki text',
	'new_wikitext' => 'New wiki text',
	'new_filename' => 'New filename:',
	'output_information' => 'For manual upload, edit the above text (if necessary), save $1the file$2 on your computer, then', 
	'upload_it' => 'upload it',

	// Misc
	'target_wiki' => 'the target wiki',

	// Standard values in Latin chars (for Maindesk and Metadata-Links)
	'standard_language' => 'en', 
	'standard_project' => 'wikipedia', // Optional

	//Upload
	'error_bot_blocked' => 'Upload bot is blocked on Wikimedia Commons.',
	'error_upload_meta' => 'Cannot upload directly because there are problem with the meta data (see above)!',
	'error_tusc_failed' => 'TUSC verification failed!',
	'error_only_commons' => 'Direct upload works only at Wikimedia Commons!',
	'upload_control_text'=> 'Please check the new wiki text and click "Upload!" if all is OK!',
	'error_commons_user' => 'To identify the transfer user, your Wikimedia Commons username has to be in the description!',
	'error_upload_users' => 'The upload function is only available to some users during the test period!',
	'error_upload_file' => 'The orginal file cannot be downloaded.'
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jan Luca
 * @author Krinkle
 * @author Purodha
 */
$messages['qqq'] = array(
	'commonshelper2' => '{{Optional}}',
	'change_meta' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

$3 is target wiki name.',
	'language' => '{{Identical|Language}}',
	'project' => '{{Identical|Project}}',
	'categories' => '{{Identical|Categories}}',
	'checkusage' => '{{Optional}}',
	'use_checkusage' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'use_tusc' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

{{hint-TUSC}}',
	'tusc_user' => '
{{hint-TUSC}}',
	'tusc_pass' => '
{{hint-TUSC}}',
	'error_file_exists' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

$3 is target wiki name.

$4 is the name of the file',
	'error_no_meta' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is a subpage of http://meta.wikimedia.org/wiki/CommonsHelper2.',
	'error_meta_no_good' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is a subpage of http://meta.wikimedia.org/wiki/CommonsHelper2.',
	'error_meta_bad' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is a subpage of http://meta.wikimedia.org/wiki/CommonsHelper2.',
	'output_information' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'error_tusc_failed' => '
{{hint-TUSC}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'attention' => 'Let op',
	'language' => 'Taal',
	'project' => 'Project',
	'source_file' => 'Bronlêer',
	'target_file' => 'Doellêer',
	'categories' => 'Kategorieë',
	'tusc_user' => 'TUSC-gebruikersnaam',
	'tusc_pass' => 'TUSC-wagwoord',
	'do_it' => 'Doen dit',
	'original_wikitext' => 'Oorspronklike wikiteks',
	'new_wikitext' => 'Nuwe wikiteks',
	'new_filename' => 'Nuwe lêernaam:',
	'upload_it' => 'laai dit',
);

/** Arabic (العربية)
 * @author OsamaK
 */
$messages['ar'] = array(
	'language' => 'اللغة',
	'project' => 'المشروع',
);

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'attention' => 'Atención',
	'description' => 'Ferramienta pa tresferir ficheros de los proyeutos Wikimedia a Wikimedia Commons',
	'change_meta' => 'Camudar les $1preferencies de categoría y plantía$2 pa $3',
	'jira_link' => "Informar d'un fallu o suxerir una carauterística",
	'language' => 'Llingua',
	'project' => 'Proyeutu',
	'source_file' => 'Ficheru orixe',
	'target_file' => 'Ficheru destín',
	'commons_username' => "Nome d'usuariu en Wikimedia Commons",
	'commons_to_project' => 'De Wikimedia Commons al proyeutu',
	'move_file_from_com' => 'Mover ficheru de Wikimedia Commons al proyeutu',
	'categories' => 'Categoríes',
	'remove_cats' => 'Desaniciar categoríes esistentes',
	'checkusage' => 'ComprobarUsu',
	'use_checkusage' => 'Usa $1CommonSense$2 pa suxerir categoríes nueves',
	'use_tusc' => 'Usa $1TUSC$2 pa tresferir el ficheru direutamente',
	'tusc_user' => "Nome d'usuariu TUSC",
	'tusc_pass' => 'Contraseña TUSC',
	'do_it' => 'Facelo',
	'error_transfer_usr' => "Nun conseñasti un nome d'usuariu de Wikimedia Commons",
	'error_not_exists' => "¡El ficheru d'orixe nun esiste!",
	'error_file_exists' => '¡El ficheru yá esiste en $3 como "$1$4$2"!',
	'error_diff_exists' => '¡Un ficheru destín diferente col mesmu nome yá esiste na wiki destín!',
	'error_no_meta' => "¡Nun s'alcontraron metadatos pa la wiki d'orixe! $1Link$2",
	'error_meta_no_good' => "Metadatos: ¡Nun s'alcontró denguna plantía afayadiza! $1Link$2",
	'error_meta_bad' => "Metadatos: ¡S'alcontró una plantía mala! $1Link$2",
	'original_wikitext' => 'Testu wiki orixinal',
	'new_wikitext' => 'Testu wiki nuevu',
	'new_filename' => 'Nuevu nome de ficheru:',
);

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 * @author Vago
 */
$messages['az'] = array(
	'attention' => 'Diqqət',
	'language' => 'Dil',
	'project' => 'Layihə',
	'categories' => 'Kateqoriyalar',
	'tusc_user' => 'TUSC istifadəçi adı',
	'tusc_pass' => 'TUSC parolu',
	'do_it' => 'Bunu et',
	'original_wikitext' => 'Orijinal viki mətn',
	'new_wikitext' => 'Yeni viki mətn',
	'new_filename' => 'Yeni fayl adı:',
	'upload_it' => 'yüklə',
);

/** Belarusian (Беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'attention' => 'Увага',
	'description' => 'Прылада для перадачы файлаў з праектаў Wikimedia ў Wikimedia Commons',
	'change_meta' => 'Змяніць $1 катэгорыю і наладкі шаблону $2 для $3',
	'jira_link' => 'Паведаміць пра памылку ці прапанаваць новую функцыю',
	'language' => 'Мова',
	'project' => 'Праект',
	'source_file' => 'Зыходны файл',
	'target_file' => 'Мэтавы файл',
	'commons_username' => 'Імя ўдзельніка Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons у праект',
	'move_file_from_com' => 'Перанесці файл з Wikimedia Commons у праект',
	'categories' => 'Катэгорыі',
	'remove_cats' => 'Выдаліць існуючыя катэгорыя',
	'checkusage' => 'Праверка (CheckUsage)',
	'use_checkusage' => 'Выкарыстоўваць $1CommonSense$2, каб прапанаваць новыя катэгорыі',
	'use_tusc' => 'Выкарыстоўвайце $1 TUSC $2 для непасрэднай перадачы файлаў',
	'tusc_user' => 'Імя карыстальніка TUSC',
	'tusc_pass' => 'Пароль TUSC',
	'do_it' => 'Зрабіце гэта',
	'error_transfer_usr' => 'Вы не задалі імя ўдзельніка Wikimedia Commons',
	'error_not_exists' => 'Файл-крыніца не існуе!',
	'error_file_exists' => 'Файл ужо існуе ў $3 , як " $1 $4 $2 "!',
	'error_diff_exists' => 'Розныя мэтавыя файлы існуюць у Вікі пад адною назвай!',
	'error_no_meta' => 'Метададзеныя не знойдзеныя ў зыходнай Вікі! $1Спасылка$2',
	'error_meta_no_good' => 'Метададзеныя: Не знойдзена слушных шаблонаў! $1Спасылка$2',
	'error_meta_bad' => 'Метададзеныя: Знойдзены няслушны шаблон! $1Спасылка$2',
	'original_wikitext' => 'Арыгінальны тэкст Вікі',
	'new_wikitext' => 'Новы wiki-тэкст',
	'new_filename' => 'Новае імя файла:',
	'output_information' => 'Для загрузкі ўручную адрэдагуйце тэкст, калі гэта неабходна (гл. вышэй), захавайце $1файл$2 на сваім кампутары',
	'upload_it' => 'Загрузіць',
	'target_wiki' => 'мэтавая вікі',
	'error_bot_blocked' => 'Загрузачны бот заблакаваны ў праекце Wikimedia Commons',
	'error_upload_meta' => 'Не магу загрузіць непасрэдна, паколькі маецца праблема з метададзенымі (гл. вышэй)!',
	'error_tusc_failed' => 'Не атрымалася праверыць TUSC!',
	'error_only_commons' => 'Непасрэдная загрузка працуе толькі ў Wikimedia Commons!',
	'upload_control_text' => 'Калі ласка, праверце новы тэкст і націсніце "Загрузіць", калі ўсё добра!',
	'error_commons_user' => 'Для вызначэння карыстальніка, які перадае файлы, Вашае імя ўдзельніка мусіць быць пазначана ў апісанні!',
	'error_upload_users' => 'Функцыя загрузкі даступная некаторым удзельнікам падчас тэставага перыяду!',
	'error_upload_file' => 'Арыгінальны файл не можа быць загружаны.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'attention' => 'Увага',
	'description' => 'Інструмэнты перадачы файлаў з праектаў Wikimedia у Wikimedia Commons',
	'change_meta' => 'Зьмяніць $1катэгорыю і налады шаблёну$2 для $3',
	'jira_link' => 'Паведаміць пра памылку ці прапанаваць магчымасьць',
	'language' => 'Мова',
	'project' => 'Праект',
	'source_file' => 'Крынічны файл',
	'target_file' => 'Мэтавы файл',
	'commons_username' => 'Імя ўдзельніка Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons у праект',
	'move_file_from_com' => 'Перанесьці файл з Wikimedia Commons у праект',
	'categories' => 'Катэгорыі',
	'remove_cats' => 'Выдаліць існуючыя катэгорыі',
	'use_checkusage' => 'Выкарыстоўваць $1CommonSense$2, каб прапанаваць новыя катэгорыі',
	'use_tusc' => 'Выкарыстоўвайце $1 TUSC $2 для непасрэднай перадачы файлаў',
	'tusc_user' => 'Імя карыстальніка TUSC',
	'tusc_pass' => 'Пароль TUSC',
	'do_it' => 'Зрабіць гэта',
	'error_transfer_usr' => 'Вы не ўстанавілі імя ўдзельніка Wikimedia Commons',
	'error_not_exists' => 'Крынічны файл не існуе!',
	'error_file_exists' => 'Файл ужо існуе ў $3 як «$1$4$2»!',
	'error_diff_exists' => 'Іншы файл існуе ў мэтавай Вікі з такой жа назвай!',
	'error_no_meta' => 'Мэта-зьвесткі не знойдзеныя ў крынічнай Вікі! $1Спасылка$2',
	'error_meta_no_good' => 'Мэта-зьвесткі: слушныя шаблёны не знойдзеныя! $1Спасылка$2',
	'error_meta_bad' => 'Мэта-зьвесткі: знойдзены няслушны шаблён! $1Спасылка$2',
	'original_wikitext' => 'Арыгінальны вікі-тэкст',
	'new_wikitext' => 'Новы вікі-тэкст',
	'new_filename' => 'Новая назва файла:',
	'output_information' => 'Для ручной загрузкі, адрэдагуйце тэкст пададзены ніжэй (калі трэба), захавайце $1файл$2 на Вашым кампутары, потым',
	'upload_it' => 'яго загрузіце',
	'target_wiki' => 'мэтавая вікі',
	'error_bot_blocked' => 'Робат загрузкі заблякаваны ў Wikimedia Commons.',
	'error_upload_meta' => 'Немагчыма загрузіць непасрэдна з-за праблемы з мета-зьвесткамі (глядзіце вышэй)!',
	'error_tusc_failed' => 'Памылка вэрыфікацыі TUSC!',
	'error_only_commons' => 'Непасрэдная загрузка працуе толькі ў Wikimedia Commons!',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'attention' => 'Внимание',
	'description' => 'Инструмент за прехвърляне на файлове от проектите на Уикимедия в Общомедия',
	'language' => 'Език',
	'source_file' => 'Изходен файл',
	'target_file' => 'Целеви файл',
	'categories' => 'Категории',
	'remove_cats' => 'Премахване на съществуващите категории',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'jira_link' => 'কোন বৈশিষ্ট্য সম্পর্কে পরামর্শ দিতে বাগ রিপোর্ট করুন',
	'language' => 'ভাষা',
	'project' => 'প্রকল্প',
	'source_file' => 'উৎস ফাইল',
	'target_file' => 'লক্ষ্য ফাইল',
	'commons_username' => 'উইকিমিডিয়া কমন্স ব্যবহারকারীনাম',
	'categories' => 'বিষয়শ্রেণীসমূহ',
	'remove_cats' => 'বর্তমান বিষয়শ্রেণীসমূহ অপসারণ',
	'tusc_user' => 'TUSC ব্যবহারকারীনাম',
	'tusc_pass' => 'TUSC শব্দচাবি',
	'do_it' => 'সম্পন্ন করো',
	'new_filename' => 'নতুন ফাইলনাম:',
	'upload_it' => 'আপলোড',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'attention' => 'Diwallit',
	'description' => 'Un ostilh da dreuzkas restroù eus raktresoù Wikimedia war-du Wikimedia Commons',
	'change_meta' => 'Kemmañ $1ar rummad hag arventennoù ar patrom$2 evit $3',
	'jira_link' => 'Kas keloù eus un draen pe kinnig ur perzh heverk',
	'language' => 'Yezh',
	'project' => 'Raktres',
	'source_file' => 'Restr orin',
	'target_file' => 'Restr da vukañ',
	'commons_username' => 'Anv implijer evit Wikimedia Commons',
	'commons_to_project' => "Wikimedia Commons d'ar raktres",
	'move_file_from_com' => "Treuzkas a ra ar restr eus Wikimedia Commons d'ar raktres",
	'categories' => 'Rummadoù',
	'remove_cats' => 'Diverkañ a ra ar rummadoù zo anezho',
	'use_checkusage' => 'Implijout $1CommonSense$2 da ginnig rummadoù nevez',
	'use_tusc' => 'Implijout $1TUSC$2 da dreuzkas ar restr war-eeun',
	'tusc_user' => 'Anv implijer TUSC',
	'tusc_pass' => 'Ger-tremen TUSC',
	'do_it' => "Bec'h de'i",
	'error_transfer_usr' => "N'hoc'h eus ket termenet a anv implijer evit Wikimedia Commons",
	'error_not_exists' => "N'eus ket eus ar restr orin !",
	'error_file_exists' => 'Bez\' ez eus c\'hoazh eus ar restr war $3 evel "$1$4$2" !',
	'error_diff_exists' => "Bez'ez eus c'hoazh eus ur restr da vukañ disheñvel war ar wiki da vukañ gant an hevelep anv !",
	'error_no_meta' => "N'eus ket bet kavet a vetaroadennoù evit ar wiki orin ! $1Liamm$2",
	'error_meta_no_good' => "Metaroadennoù : n'eus ket bet kavet a batrom mat ! $1Liamm$2",
	'error_meta_bad' => 'Metaroadennoù : patrom fall kavet ! $1Liamm$2',
	'original_wikitext' => 'Wikitestenn orin',
	'new_wikitext' => 'Wikitestenn nevez',
	'new_filename' => 'Anv restr nevez :',
	'output_information' => 'Evit an enporzhiañ dre zorn, cheñchit an destenn a-us (mar bez ret), enrollit $1ar restr$2 war ho urzhiataer hag',
	'upload_it' => 'enporzhiit anezhi',
	'target_wiki' => 'ar wiki buket',
	'error_bot_blocked' => 'Stanket eo ar robot enporzhiañ war Wikimedia Commons.',
	'error_upload_meta' => "N'eus ket bet gallet enporzhiañ war-eeun abalamour d'ur gudenn gant ar metaroadennoù (sellit a-us) !",
	'error_tusc_failed' => 'Fazi gwiriañ TUSC !',
	'error_only_commons' => "Ne'z a an enporzhiañ eeun en-dro nemet war Wikimedia Commons !",
	'upload_control_text' => 'Gwiriit ar wikitestenn nevez ha klikit war "Enporzhiañ" mard eo mat pep tra !',
	'error_commons_user' => "Evit anaout an implijer a gas an treuzkas da benn e rank hoc'h anv implijer evit Wikimedia Commons bezañ merket en deskrivadenn !",
	'error_upload_users' => "N'eo hegerz an arc'hwel enporzhiañ nemet evit implijerien zo e-pad ar prantad esae !",
	'error_upload_file' => "N'eus ket bet gallet pellgagañ ar restr orin.",
);

/** Danish (Dansk)
 * @author Peter Alberti
 */
$messages['da'] = array(
	'attention' => 'Bemærk',
	'description' => 'Et værktøj til at overføre filer fra Wikimedia projekter til Wikimedia Commons',
	'change_meta' => 'Ændr $1kategori og skabelonindstillinger$2 for $3',
	'jira_link' => 'Rapporter en fejl eller foreslå en funktion',
	'language' => 'Sprog',
	'project' => 'Projekt',
	'source_file' => 'Kildefil',
	'target_file' => 'Destinationsfil',
	'commons_username' => 'Brugernavn på Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons til projekt',
	'move_file_from_com' => 'Flyt fil fra Wikimedia Commons til projekt',
	'categories' => 'Kategorier',
	'remove_cats' => 'Fjern eksisterende kategorier',
	'use_checkusage' => 'Brug $1CommonSense$2 til at foreslå nye kategorier',
	'use_tusc' => 'Brug $1TUSC$2 til at overføre filen direkte',
	'tusc_user' => 'TUSC brugernavn',
	'tusc_pass' => 'TUSC adgangskode',
	'do_it' => 'Gør det',
	'error_transfer_usr' => 'Du har ikke angivet et Wikimedia Commons brugernavn',
	'error_not_exists' => 'Kildefilen findes ikke!',
	'error_file_exists' => 'Filen findes allerede på $3 som "$1$4$2"!',
	'error_diff_exists' => "En anden fil med samme navn findes allerede på destinationswiki'en!",
	'error_no_meta' => "Ingen metadata fundet for kilde-wiki'en! $1Link$2",
	'error_meta_no_good' => 'Metadata: Ingen gode skabeloner fundet! $1Link$2',
	'error_meta_bad' => 'Metadata: Problematisk skabelon fundet! $1Link$2',
	'original_wikitext' => 'Oprindelig wiki tekst',
	'new_wikitext' => 'Ny wiki tekst',
	'new_filename' => 'Nyt filnavn:',
	'output_information' => 'For at uploade filen manuelt, rediger teksten ovenfor (om nødvendigt), gem $1filen$2 på din computer, og',
	'upload_it' => 'overfør den',
	'target_wiki' => 'Destinationswiki',
	'error_bot_blocked' => 'Upload-botten er blokeret på Wikimedia Commons.',
	'error_upload_meta' => 'Kan ikke overføre direkte, fordi der er problemer med metadata (se ovenfor)!',
	'error_tusc_failed' => 'TUSC verifikation mislykkedes!',
	'error_only_commons' => 'Direkte upload fungerer kun på Wikimedia Commons!',
	'upload_control_text' => 'Tjek venligst den nye wiki teksten og klik på "Upload!" hvis alt er OK!',
	'error_commons_user' => 'Dit Wikimedia Commons brugernavn skal være i beskrivelsen, så brugeren, der udførte overførslen, kan identificeres!',
	'error_upload_users' => 'Uploadfunktionen er kun tilgængelig for nogle brugere i forsøgsperioden!',
	'error_upload_file' => 'Den originale fil kan ikke hentes.',
);

/** German (Deutsch)
 * @author Jan Luca
 * @author Kghbln
 */
$messages['de'] = array(
	'attention' => 'Achtung',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'Ein Hilfsprogramm, um Dateien von einzelnen Wikimedia-Projekten nach Wikimedia Commons zu übertragen',
	'change_meta' => 'Die $1Kategorien- und Vorlageneinstellungen$2 für $3 ändern',
	'jira_link' => 'Einen Fehler melden oder eine Funktion wünschen',
	'language' => 'Sprache',
	'project' => 'Projekt',
	'source_file' => 'Quelldatei',
	'target_file' => 'Zieldatei',
	'commons_username' => 'Benutzername auf Wikimedia Commons',
	'commons_to_project' => 'Von Wikimedia Commons zum Wikimedia-Projekt',
	'move_file_from_com' => 'Die Datei von Wikimedia Commons zum Wikimedia-Projekt verschieben',
	'categories' => 'Kategorien',
	'remove_cats' => 'Die vorhandenen Kategorien entfernen',
	'checkusage' => 'Dateiverwendung prüfen',
	'use_checkusage' => '$1CommonSense$2 nutzen, um neue Kategorien vorgeschlagen zu bekommen',
	'use_tusc' => '$1TUSC$2 nutzen, um die Datei direkt zu übertragen',
	'tusc_user' => 'Benutzername bei TUSC',
	'tusc_pass' => 'Passwort bei TUSC',
	'do_it' => 'Ausführen',
	'error_transfer_usr' => 'Es wurde keine Benutzername bei Wikimedia Commons festgelegt',
	'error_not_exists' => 'Die Quelldatei ist nicht vorhanden.',
	'error_file_exists' => 'Die Datei ist bereits auf $3 als „$1$4$2“ vorhanden.',
	'error_diff_exists' => 'Verschiedene Zieldateien gleichen Namens sind bereits auf den Zielwiki vorhanden.',
	'error_no_meta' => 'Für das Quellwiki wurden keine Metadaten gefunden. $1Link$2',
	'error_meta_no_good' => 'Metadaten: Es wurden keine nutzbaren Vorlagen gefunden. $1Link$2',
	'error_meta_bad' => 'Metadaten: Es wurde eine unbrauchbare Vorlage gefunden. $1Link$2',
	'original_wikitext' => 'Beschreibung auf dem ursprünglichen Wiki',
	'new_wikitext' => 'Neue Beschreibung',
	'new_filename' => 'Neuer Dateiname:',
	'output_information' => 'Zum manuellen Hochladen, sofern notwendig, bitte den obenstehenden Text bearbeiten, $1die Datei$2 auf dem lokalen Rechner speichern und sie dann',
	'upload_it' => 'hochladen.',
	'target_wiki' => 'Das Zielwiki',
	'error_bot_blocked' => 'Der Bot zum Hochladen ist auf Wikimedia Commons gesperrt.',
	'error_upload_meta' => 'Es kann nicht direkt hochgeladen werden, da es Probleme mit den Metadaten gibt (siehe oben).',
	'error_tusc_failed' => 'Die TUSC-Prüfung ist fehlgeschlagen.',
	'error_only_commons' => 'Das direkte Hochladen funktioniert nur bei Wikimedia Commons.',
	'upload_control_text' => 'Bitte die neue Beschreibung prüfen und auf „Hochladen“ klicken, sofern alles in Ordnung ist.',
	'error_commons_user' => 'Um den Benutzer zu identifizieren, der die Übertragung vornimmt, muss der Beschreibung dein Benutzername auf Wikimedia Commons hinzugefügt werden.',
	'error_upload_users' => 'Die Funktion zum Hochladen ist während der Testphase nur für bestimmte Benutzer verfügbar.',
	'error_upload_file' => 'Die Quelldatei kann nicht heruntergeladen werden.',
);

/** Spanish (Español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'attention' => 'Atención',
	'description' => 'Una herramienta para transferir archivos de proyectos Wikimedia a Wikimedia Commons',
	'jira_link' => 'Informar de un fallo o sugerir una función',
	'language' => 'Idioma',
	'project' => 'Proyecto',
	'source_file' => 'Archivo origen',
	'target_file' => 'Archivo de destino',
	'commons_username' => 'Nombre de usuario de Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons a proyecto',
	'move_file_from_com' => 'Mover archivo de Wikimedia Commons al proyecto',
	'categories' => 'Categorías',
	'remove_cats' => 'Quitar categorías existentes',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Usa $1CommonSense$2 para sugerir nuevas categorías',
	'use_tusc' => 'Usa $1TUSC$2 para transferir el archivo directamente',
	'tusc_user' => 'Nombre de usuario TUSC',
	'tusc_pass' => 'Contraseña TUSC',
	'do_it' => 'Hazlo',
	'error_transfer_usr' => 'No ha definido un nombre de usuario de Wikimedia Commons',
	'error_not_exists' => '¡El archivo de origen no existe!',
	'error_file_exists' => 'El archivo ya existe en $3 como «$1$4$2»!',
	'error_diff_exists' => '¡Un archivo de destino diferente existe en el wiki de destino con el mismo nombre!',
	'error_no_meta' => '¡No hay metadatos para el wiki de origen! $1Link$2',
	'error_meta_no_good' => 'Metadatos: ¡No se hallaron plantillas buenas! $1Link$2',
	'error_meta_bad' => 'Metadatos: ¡Plantilla mala encontrada! $1Link$2',
	'original_wikitext' => 'Texto original de wiki',
	'new_wikitext' => 'Nuevo texto de wiki',
	'new_filename' => 'Nuevo nombre de archivo:',
	'output_information' => 'Para la carga manual, edita el texto anterior (si es necesario), guarda $1el archivo$2 en tu equipo, y',
	'upload_it' => 'súbelo',
	'target_wiki' => 'el wiki de destino',
	'error_bot_blocked' => 'El bot de carga está bloqueado en Wikimedia Commons.',
	'error_upload_meta' => 'No se puede cargar directamente porque hay un problema con los metadatos (véase más arriba).',
	'error_tusc_failed' => 'Error de verificación de TUSC',
	'error_only_commons' => 'La carga directa funciona solo en Wikimedia Commons.',
	'upload_control_text' => 'Comprueba el nuevo texto wiki y haz clic en «Cargar» si todo está bien.',
	'error_commons_user' => 'Para identificar al usuario de transferencia, tu nombre de usuario de Wikimedia Commons tiene que estar en la descripción.',
	'error_upload_users' => 'La función de carga solo está disponible para algunos usuarios durante el período de prueba.',
	'error_upload_file' => 'No se puede descargar el archivo original.',
);

/** Persian (فارسی)
 * @author Ebraminio
 */
$messages['fa'] = array(
	'attention' => 'توجه',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Olli
 */
$messages['fi'] = array(
	'attention' => 'Huomio',
	'description' => 'Työkalu tiedostojen siirtoon Wikimedian projekteista Wikimedia Commonsiin',
	'change_meta' => 'Vaihda wikin $3 $1luokka- ja mallineasetuksia$2',
	'jira_link' => 'Ilmoita virheestä tai ehdota uutta ominaisuutta',
	'language' => 'Kieli',
	'project' => 'Projekti',
	'source_file' => 'Lähdetiedosto',
	'target_file' => 'Kohdetiedosto',
	'commons_username' => 'Tunnus Wikimdia Commonsissa',
	'commons_to_project' => 'Wikimedia Commonsista projektiin',
	'move_file_from_com' => 'Siirrä tiedosto Wikimedia Commonsista toiseen projektiin',
	'categories' => 'Luokat',
	'remove_cats' => 'Poista nykyiset luokat',
	'use_checkusage' => 'Käytä $1CommonSenseä$2 ehdottamaan uusia luokkia',
	'use_tusc' => 'Käytä $1TUSC:ia$2 tiedoston siirtämiseen suoraan',
	'tusc_user' => 'TUSC-käyttäjätunnus',
	'tusc_pass' => 'TUSC-salasana',
	'do_it' => 'Aloita',
	'error_transfer_usr' => 'Et ole asettanut Wikimedia Commonsin käyttäjätunnusta',
	'error_not_exists' => 'Lähdetiedostoa ei löydy!',
	'error_file_exists' => 'Tiedosto löytyy jo wikistä $3 nimellä "$1$4$2"!',
	'error_diff_exists' => 'Eri kohdetiedosto löytyy kohdewikistä samalla nimellä!',
	'error_no_meta' => 'Lähdewikille ei löytynyt meta-tietoja! $1Linkki$2',
	'error_meta_no_good' => 'Metatiedot: Hyviä mallineita ei löytynyt! $1Linkki$2',
	'error_meta_bad' => 'Metatiedot: Kelpaamaton malline löytyi! $1Linkki$2',
	'original_wikitext' => 'Alkuperäinen wikiteksti',
	'new_wikitext' => 'Uusi wikiteksti',
	'new_filename' => 'Uusi tiedostonimi:',
	'output_information' => 'Tallentaaksesi tiedoston itse, muokkaa yllä olevaa tekstiä (jos tarpeen), tallenna $1tiedosto$2 tietokoneellesi ja sitten',
	'upload_it' => 'tallenna se.',
	'target_wiki' => 'kohdewiki',
	'error_bot_blocked' => 'Latausbotti on estetty Wikimedia Commonsissa.',
	'error_upload_meta' => 'Suora lataus epäonnistui, koska metatietojen kanssa oli ongelmia (katso yllä)!',
	'error_tusc_failed' => 'TUSC-vahvistus epäonnistui!',
	'error_only_commons' => 'Suora lataus toimii vain Wikimedia Commonsissa!',
	'upload_control_text' => 'Tarkista uusi wikiteksti ja napsauta "Lataa!" jos kaikki on ok!',
	'error_commons_user' => 'Jotta siirtänyt käyttäjä voidaan tunnistaa, Wikimedia Commons -käyttäjätunnuksesi täytyy olla kuvauksessa!',
	'error_upload_users' => 'Lataustoiminto on saatavilla vain joillekin käyttäjille testijakson aikana!',
	'error_upload_file' => 'Alkuperäistä tiedostoa ei voida ladata.',
);

/** French (Français)
 * @author IAlex
 * @author Od1n
 */
$messages['fr'] = array(
	'attention' => 'Attention',
	'description' => 'Un outil pour transférer des fichiers des projets Wikimedia vers Wikimedia Commons',
	'change_meta' => 'Modifie la $1catégorie et les paramètres du modèle$2 pour $3',
	'jira_link' => 'Signaler un bug ou suggérer une fonctionnalité',
	'language' => 'Langue',
	'project' => 'Projet',
	'source_file' => 'Fichier source',
	'target_file' => 'Fichier cible',
	'commons_username' => "Nom d'utilisateur Wikimedia Commons",
	'commons_to_project' => 'Wikimedia Commons au projet',
	'move_file_from_com' => 'Déplace le fichier de Wikimedia Commons vers le projet',
	'categories' => 'Catégories',
	'remove_cats' => 'Supprime les catégories existantes',
	'use_checkusage' => 'Utiliser $1CommonSense$2 pour suggérer les nouvelles catégories',
	'use_tusc' => 'Utiliser $1TUSC$2 pour transférer le fichier directement',
	'tusc_user' => "Nom d'utilisateur TUSC",
	'tusc_pass' => 'Mot de passe TUSC',
	'do_it' => 'Le faire',
	'error_transfer_usr' => "Vous n'avez pas défini un nom d'utilisateur Wikimedia Commons",
	'error_not_exists' => "Le fichier source n'existe pas !",
	'error_file_exists' => 'Le fichier existe déjà sur $3 en tant que « $1$4$2 » !',
	'error_diff_exists' => 'Un fichier cible différent existe sur le wiki cible avec le même nom !',
	'error_no_meta' => "Aucune métadonnée trouvée pour le wiki d'origine ! $1Liens$2",
	'error_meta_no_good' => 'Métadonnées : pas de bon modèle trouvé ! $1Lien$2',
	'error_meta_bad' => 'Métadonnées : mauvais modèle trouvé ! $1Lien$2',
	'original_wikitext' => 'Wikitexte original',
	'new_wikitext' => 'Nouveau wikitexte',
	'new_filename' => 'Nouveau nom de fichier :',
	'output_information' => 'Pour le téléversement manuel, modifier le texte ci-dessus (si nécessaire), enregistrez $1le fichier$2 sur votre ordinateur, puis',
	'upload_it' => 'le téléverser',
	'target_wiki' => 'le wiki cible',
	'error_bot_blocked' => 'Le robot de téléversement est bloqué sur Wikimedia Commons.',
	'error_upload_meta' => "Impossible de téléverser directement parce qu'il y a problème avec les métadonnées (voir ci-dessus) !",
	'error_tusc_failed' => 'La vérification TUSC a échoué !',
	'error_only_commons' => 'Le téléversement direct ne fonctionne que sur Wikimedia Commons !',
	'upload_control_text' => 'Veuillez vérifier le nouveau wikitexte et cliquer sur « Téléverser ! » si tout est OK !',
	'error_commons_user' => "Pour identifier l'utilisateur qui effectue le transfert, votre nom d'utilisateur de Wikimedia Commons doit figurer dans la description !",
	'error_upload_users' => "La fonction de téléversement est uniquement disponible pour certains utilisateurs durant la période d'essai !",
	'error_upload_file' => 'Le fichier original ne peut être pas être téléchargé.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'attention' => 'לתשומת לבך',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'כלי להעברת קבצים ממיזמים של קרן ויקימדיה לוויקישיתוף',
	'change_meta' => 'לשנות את $1הגדרות הקטגוריות והתבניות$2 עבור $3',
	'jira_link' => 'דיווח באג או הצעת שיפור',
	'language' => 'שפת המיזם',
	'project' => 'שם המיזם',
	'source_file' => 'קובץ מקור',
	'target_file' => 'קובץ יעד',
	'commons_username' => 'שם משתמש בוויקישיתוף',
	'commons_to_project' => 'מוויקישיתוף למיזם',
	'move_file_from_com' => 'העברת קובץ מוויקישיתוף למיזם מקומי',
	'categories' => 'קטגוריות',
	'remove_cats' => 'מחיקת קטגוריות קיימות',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'להשתמש ב־$1CheckUsage$2 כדי לאתר קטגוריות',
	'use_tusc' => 'להשתמש ב־$1TUSC$2 כדי להעביר את הקובץ ישירות',
	'tusc_user' => 'שם משתמש ב־TUSC',
	'tusc_pass' => 'סיסמה ב־TUSC',
	'do_it' => 'העברה',
	'error_transfer_usr' => 'לא יצרת שם משתמש בוויקישיתוף',
	'error_not_exists' => 'קובץ המקור לא קיים!',
	'error_file_exists' => 'הקובץ כבר קיים ב־$3 בשם "$1$4$2"!',
	'error_diff_exists' => 'קובץ שונה קיים באתר היעד באותו שם!',
	'error_no_meta' => 'לא נמצאו מטא־נתונים בוויקי המקור! $1Link$2',
	'error_meta_no_good' => 'מטא־נתונים: לא נמצאו תבניות קבילות! $1Link$2',
	'error_meta_bad' => 'מטא־נתונים: נמצאו תבניות לא קבילות! $1Link$2',
	'original_wikitext' => 'תיאור מקורי',
	'new_wikitext' => 'תיאור חדש',
	'new_filename' => 'שם קובץ חדש:',
	'output_information' => 'לשם העלאה ידנית יש לערוך את הטקסט למעלה (אם זה נחוץ), לשמור את $1הקובץ$2 במחשב שלך ואז',
	'upload_it' => 'להעלות אותו',
	'target_wiki' => 'ויקי היעד',
);

/** Croatian (Hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'attention' => 'Pažnja',
	'description' => 'Alat za prijenos datoteka s projekata Wikimedije na Zajednički poslužitelj',
	'change_meta' => 'Promijenite postavke $1kategorija i predložaka$2 za  $3',
	'jira_link' => 'Prijavite grešku ili predložite novu mogućnost',
	'language' => 'Jezik',
	'project' => 'Projekt',
	'source_file' => 'Izvorna datoteka',
	'target_file' => 'Odredišna datoteka',
	'commons_username' => 'Suradničko ime na Zajedničkom poslužitelju',
	'commons_to_project' => 'Sa Zajedničkog poslužitelja na projekt',
	'move_file_from_com' => 'Premjestite datoteku sa Zajedničkog poslužitelja na projekt',
	'categories' => 'Kategorije',
	'remove_cats' => 'Ukloni postojeće kategorije',
	'use_checkusage' => 'rabite $1CommonSense$2 za prijedlog novih kategorija',
	'use_tusc' => 'Rabite $1TUSC$2 za izravan prijenos datoteka',
	'tusc_user' => 'TUSC suradničko ime',
	'tusc_pass' => 'Lozinka za TUSC',
	'do_it' => 'Učini',
	'error_transfer_usr' => 'Niste postavili suradničko ime sa Zajedničkog poslužitelja',
	'error_not_exists' => 'Izvorna datoteka ne postoji!',
	'error_file_exists' => 'Datoteka već postoji na $3 kao "$1$4$2"!',
	'error_diff_exists' => 'Drugačija odredišna datoteka postoji na navedenom wikiju pod istim imenom!',
	'error_no_meta' => 'Metapodaci nisu pronađeni na izvornom wikiju. $1Poveznica$2',
	'error_meta_no_good' => 'Metapodaci: nisu pronađeni dobri predlošci! $1Poveznica$2',
	'error_meta_bad' => 'Metapodaci: pronađen loš predložak! $1Poveznica$2',
	'original_wikitext' => 'Izvorni wiki tekst',
	'new_wikitext' => 'Novi wiki tekst',
	'new_filename' => 'Novi naziv datoteke:',
	'output_information' => 'Za ručno postavljanje, uredite gornji tekst (ukoliko je potrebno), spremite $1datoteka$2 na svoje računalo, zatim',
	'upload_it' => 'postavite ju',
	'target_wiki' => 'odredišni wiki',
	'error_bot_blocked' => 'Bot za postavljanje je blokiran na Zajedničkom poslužitelju.',
	'error_upload_meta' => 'Izravno postavljanje nije moguće jer je došlo do problema s metapodacima (pogledajte iznad)!',
	'error_tusc_failed' => 'TUSC provjera nije uspjela!',
	'error_only_commons' => 'Izravno postavljanje radi samo na Zajedničkom poslužitelju!',
	'upload_control_text' => 'Molimo vas da provjerite novi wiki tekst i kliknite na "Postavi!" ako je sve u redu!',
	'error_commons_user' => 'Za identifikaciju suradnika koji prenosi datoteke, Vaše suradničko ime na Zajedničkom poslužitelju mora biti u opisu!',
	'error_upload_users' => 'Mogućnost postavljanja je dostupna samo nekim suradnicima tijekom testnog razdoblja.',
	'error_upload_file' => 'Izvorna datoteka ne može biti preuzeta.',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'attention' => 'Figyelem',
	'description' => 'Eszköz fájlok Wikimedia-projektekből a Wikimedia Commonsba másolásához',
	'change_meta' => '$3 $1kategória- és sablonbeállításainak$2 módosítása',
	'jira_link' => 'Hiba vagy fejlesztési ötlet jelentése',
	'language' => 'Nyelv',
	'project' => 'Projekt',
	'source_file' => 'Forrásfájl',
	'target_file' => 'Célfájl',
	'commons_username' => 'Wikimedia Commons felhasználünév',
	'commons_to_project' => 'Wikimedia Commonsból egy projektbe',
	'move_file_from_com' => 'Fájl áthelyezése a Wikimedia Commonsból egy projektbe',
	'categories' => 'Kategóriák',
	'remove_cats' => 'Létező kategóriák eltávolítása',
	'use_checkusage' => '$1CommonSense$2 használata kategóriajavaslatokhoz',
	'use_tusc' => 'A fájl átvitele közvetlenül a $1TUSC$2 használatával',
	'tusc_user' => 'TUSC felhasználónév',
	'tusc_pass' => 'TUSC jelszó',
	'do_it' => 'Csináld',
	'error_transfer_usr' => 'Nem adtad meg a Wikimedia Commons felhasználónevet',
	'error_not_exists' => 'A forrásfájl nem létezik!',
	'error_file_exists' => 'A fájl már létezik a(z) $3 oldalon, „$1$4$2” néven!',
	'error_diff_exists' => 'A célwikin már létezik egy másik fájl ugyanezen a néven!',
	'error_no_meta' => 'Nem található metaadat a forráswikin! $1Hivatkozás$2',
	'error_meta_no_good' => 'Metaadat: Nem található egyetlen sablon sem! $1Hivatkozás$2',
	'error_meta_bad' => 'Metaadat: Hibás sablont találtam! $1Hivatkozás$2',
	'original_wikitext' => 'Eredeti wikiszöveg',
	'new_wikitext' => 'Új wikiszöveg',
	'new_filename' => 'Új fájlnév:',
	'output_information' => 'Kézi feltöltés esetén szerkeszd a fenti szöveget (amennyiben szükséges), mentsd el $1a fájlt$2 a számítógépedre, majd',
	'upload_it' => 'töltsd fel',
	'target_wiki' => 'a célwikire',
	'error_bot_blocked' => 'A feltöltőbot blokkolva van a WIkimedia Commonson.',
	'error_upload_meta' => 'Nem lehet közvetlenül feltölteni, mert problémák vannak a metaadatokkal (lásd fentebb)!',
	'error_tusc_failed' => 'A TUSC ellenőrzés nem sikerült!',
	'error_only_commons' => 'A közvetlen feltöltés csak a Wikimedia Commons esetén működik!',
	'upload_control_text' => 'Ellenőrizd az új wikiszöveget, majd kattints a „Feltöltés!” gombra, ha minden rendben van!',
	'error_commons_user' => 'Az átvitelt végző szerkesztő azonosítása miatt a Wikimedia Commons-felhasználónevednek szerepelnie kell a leírásban!',
	'error_upload_users' => 'A tesztidőszak alatt a feltöltés funkció csak néhány felhasználó számára érhető el!',
	'error_upload_file' => 'Nem sikerült letölteni az eredeti fájlt.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'attention' => 'Attention',
	'description' => 'Un instrumento pro transferer files ex projectos de Wikimedia a Wikimedia Commons',
	'change_meta' => 'Modificar le $1configurationes de categoria e de patrono$2 pro $3',
	'jira_link' => 'Reportar un defecto o suggerer un function',
	'language' => 'Lingua',
	'project' => 'Projecto',
	'source_file' => 'File de origine',
	'target_file' => 'File de destination',
	'commons_username' => 'Nomine de usator de Wikimedia Commons',
	'commons_to_project' => 'Ex Wikimedia Commons al projecto',
	'move_file_from_com' => 'Displaciar file ex Wikimedia Commons al projecto',
	'categories' => 'Categorias',
	'remove_cats' => 'Remover categorias existente',
	'checkusage' => 'VerificarUsage',
	'use_checkusage' => 'Usar $1CommonSense$2 pro suggerer nove categorias',
	'use_tusc' => 'Usar $1TUSC$2 pro transferer le file directemente',
	'tusc_user' => 'Nomine de usator de TUSC',
	'tusc_pass' => 'Contrasigno de TUSC',
	'do_it' => 'Face lo',
	'error_transfer_usr' => 'Tu non ha specificate un nomine de usator de Wikimedia Commons',
	'error_not_exists' => 'Le file de origine non existe!',
	'error_file_exists' => 'Le file jam existe in $3 como "$1$4$2"!',
	'error_diff_exists' => 'Un altere file de destination existe in le wiki de destination sub le mesme nomine!',
	'error_no_meta' => 'Nulle metadatos trovate pro le wiki de origine! $1Ligamine$2',
	'error_meta_no_good' => 'Metadatos: Nulle bon patronos trovate! $1Ligamine$2',
	'error_meta_bad' => 'Metadatos: Mal patrono trovate! $1Ligamine$2',
	'original_wikitext' => 'Texto wiki original',
	'new_wikitext' => 'Texto wiki nove',
	'new_filename' => 'Nove nomine de file:',
	'output_information' => 'Pro incargamento manual, modifica le texto hic supra (si necessari), salveguarda $1le file$2 in tu computator, postea',
	'upload_it' => 'incarga lo',
	'target_wiki' => 'le wiki de destination',
	'error_bot_blocked' => 'Le robot de incargamento es blocate in Wikimedia Commons.',
	'error_upload_meta' => 'Non pote incargar directemente proque il ha problemas con le metadatos (vice hic supra)!',
	'error_tusc_failed' => 'Verification TUSC fallite!',
	'error_only_commons' => 'Le incargamento directe functiona solmente in Wikimedia Commons!',
	'upload_control_text' => 'Per favor verifica le nove texto wiki e clicca "Incargar!" si toto es in ordine!',
	'error_commons_user' => 'Pro identificar le usator transferente, tu nomine de usator de Wikimedia Commons debe figurar in le description!',
	'error_upload_users' => 'Le function de incargamento es solmente disponibile a certe usatores durante le periodo de test!',
	'error_upload_file' => 'Le file original non pote esser discargate.',
);

/** Italian (Italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'attention' => 'Attenzione',
	'language' => 'Lingua',
	'project' => 'Progetto',
	'source_file' => 'File di origine',
	'target_file' => 'File di destinazione',
	'categories' => 'Categorie',
	'error_not_exists' => 'Il file di origine non esiste!',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'attention' => 'Opjepaß!',
	'description' => 'E Projramm, wat hellef, Datteije vun Wikis vun de Wikimedija Shtefftong noh <i lang="en">Wikimedia Commons</i> ze övverdraare.',
	'change_meta' => 'Donn de $1Saachjroppe un Schabloone$2 för $3 aanpaße.',
	'jira_link' => 'Donn ene Fähler mälde udder ene Vörschlaach zom Verbäßere maache',
	'language' => 'Shprooch',
	'project' => 'Projäk',
	'source_file' => 'De Dattei zom Övverdraare',
	'target_file' => 'De Ziel_Dattei',
	'commons_username' => 'Dä Metmaacher_Naame op <i lang="en">Wikimedia Commons</i>',
	'commons_to_project' => 'Vun <i lang="en">Wikimedia Commons</i> noh enem Wiki vun de Wikimedia Shteftong övverdraare',
	'move_file_from_com' => 'Donn en Dattei vun <i lang="en">Wikimedia Commons</i> noh enem Wiki vun de Wikimedia Shteftong övverdraare',
	'categories' => 'Saachjroppe',
	'remove_cats' => 'Donn de Saachjroppe fottnämme, di ald doh sin.',
	'checkusage' => 'Donn eruß fenge, woh di Dattei all en Jebruch es.',
	'use_checkusage' => 'Lohß <i lang="en">$1CommonSense$2</i> neu Saachjroppe för die Dattei vörschlonn',
	'use_tusc' => 'Nämm <i lang="en">TUSC</i> för die Dattei tiräk huhzelaade.
',
	'tusc_user' => 'Dä Metmaacher_Name beim <i lang="en">TUSC</i>',
	'tusc_pass' => 'Et Paßwoot för et <i lang="en">TUSC</i>',
	'do_it' => 'Lohß jonn!',
	'error_transfer_usr' => 'Et es keine Metmaacher_Name för de <i lang="en">Wikimedia Commons</i> aanjejovve.',
	'error_not_exists' => 'Esu en Ursprungs_Dattei jidd_et nit.',
	'error_file_exists' => 'Di Dattei jidd_et ald op {{GRAMMAR:Dativ|$3}} onger däm Naame "$1$4$2"!
',
	'error_diff_exists' => 'Ongerscheidlijje Datteije med_enem ejaale Name sen ald em Wiki!',
	'error_no_meta' => 'Kein joode $Mettadaate$2 em Wiki jefonge.
',
	'error_meta_no_good' => 'Mettadaate: Kein joode $1Schabloon$2 jefonge.
',
	'error_meta_bad' => 'Mettadaate: De $1Schabloon$2 es esu nit ze bruche.',
	'original_wikitext' => 'Dä Ojinaal_Wiki_Täx doh drövver:',
	'new_wikitext' => 'Dä neue Wiki_Täx drövver:',
	'new_filename' => 'Dä neue Name fö di Dattei:',
	'output_information' => 'För et Huhlaade vun Hand, donn bovve dä Täx aanpaße, wann nüüdesh, donn di $1Dattei$2 op Dingem Rääschner aflääje, un dann',
	'upload_it' => 'Lohß jonn!',
	'target_wiki' => 'Et Ziel_Wiki',
	'error_bot_blocked' => 'Däm Bot singe Zohjang op <i lang="en">Wikimedia Commons</i> es jraad jeshperrt.',
	'error_upload_meta' => 'Dat künne mer nit tiräk huhlaade weit et Ärjer met de Metta-Daate jitt. Loor bovve noh!',
	'error_tusc_failed' => 'De Pröfung vum <i lang="en">TUSC</i> es donävve jajange.',
	'error_only_commons' => 'Tiräk huh laade jeiht bloß bei de <i lang="en">Wikimedia Commons</i>.',
	'upload_control_text' => 'Donn dä neue Wikitäx prööfe, un wann dä jood esu es, donn  klecke.',
	'error_commons_user' => 'Öm kloh ze maache, wä di Dattei övvverdraare hät, donn Dinge Metmaacher-Name op Wikimedia Commons em Täx övver di Dattei ongerbränge.',
	'error_upload_users' => 'Huh laade künne bloß e paa Metmacher en der Prööf_Zigg!',
	'error_upload_file' => 'De Ojinaal Dattei kam_mer nit eronger laade.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'attention' => 'Opgepasst',
	'description' => 'En Tool fir Fichieren vu Wikimedia-Projeten op Wikimedia Commons ze transferéieren',
	'language' => 'Sprooch',
	'project' => 'Projet',
	'source_file' => 'Quell-Fichier',
	'target_file' => 'Zil-Fichier',
	'commons_username' => 'Benotzernumm op Wikimedia Commons',
	'commons_to_project' => 'Vu Wikimedia Commons op de Projet',
	'move_file_from_com' => 'De Fichier vu Wikimedia Commons op de Projet réckelen',
	'categories' => 'Kategorien',
	'remove_cats' => 'Déi Kategorien déi et gëtt ewechhuelen',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Benotzt $1ÄreVerstand$2 fir nei Kategorie virzeschloen',
	'use_tusc' => 'Benotzt $1TUSC$2 fir de Fichier direkt ze transferéieren',
	'tusc_user' => 'TUSC-Benotzernumm',
	'tusc_pass' => 'TUSC-Passwuert',
	'do_it' => 'Maacht et',
	'error_transfer_usr' => 'Dir hutt kee Wikimedia Commons Benotzernumm festgeluecht',
	'error_not_exists' => 'Quell-Fichier gëtt et net!',
	'error_file_exists' => 'Et gëtt de Fichier schonn op $3 als "$1$4$2"!',
	'original_wikitext' => 'Originale Wiki-Text',
	'new_wikitext' => 'Neie Wiki-Text',
	'new_filename' => 'Neien Numm vum Fichier:',
	'upload_it' => 'eroplueden',
	'target_wiki' => "d'Zilwiki",
	'error_bot_blocked' => 'De bot fir erofzelueden ass op Wikimedia Commons gespaart.',
	'error_only_commons' => 'Direkt Eropluede fonctionnéiert nëmme bäi Wikimedia Commons',
	'error_upload_file' => 'De Quell-Fichier kann net erofgeluede ginn.',
);

/** Lezghian (Лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'new_wikitext' => 'Цlийи вики кхьин',
);

/** Latvian (Latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'attention' => 'Uzmanību',
	'language' => 'Valoda',
	'project' => 'Projekts',
	'categories' => 'Kategorijas',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'attention' => 'Внимание',
	'commonshelper2' => 'Помошник со Ризницата 2',
	'description' => 'Алатка за пренос на податотеки од проектите на Викимедија во Заедничката Ризница',
	'change_meta' => 'Смени $1категориски и шаблонски нагодувања$2 за $3',
	'jira_link' => 'Пријави грешка или предложи функција',
	'language' => 'Јазик',
	'project' => 'Проект',
	'source_file' => 'Изворна податотека',
	'target_file' => 'Целна податотека',
	'commons_username' => 'Корисничко име на Ризницата',
	'commons_to_project' => 'Корисничко име на Ризницата',
	'move_file_from_com' => 'Премести податотека од Заедничката Ризница во проект',
	'categories' => 'Категории',
	'remove_cats' => 'Отстрани постоечки категории',
	'checkusage' => 'ПровериУпотреба',
	'use_checkusage' => 'Користете го $1CommonSense$2 за да предложите нови категории',
	'use_tusc' => 'Користете го $1TUSC$2 за непосредно да ја префрлите податотеката',
	'tusc_user' => 'Корисничко име на TUSC',
	'tusc_pass' => 'Лозинка на TUSC',
	'do_it' => 'Изврши',
	'error_transfer_usr' => 'Немате зададено корисничко име на Ризницата',
	'error_not_exists' => 'Изворната податотека не постои!',
	'error_file_exists' => 'Податотеката веќе постои на $3 под името „$1$4$2“!',
	'error_diff_exists' => 'На целното вики постои поинаква целна податотека со истото име!',
	'error_no_meta' => 'Не пронајдов метаподатоци за изворното вики. $1Врска$2',
	'error_meta_no_good' => 'Метаподатоци: Не пронајдов соодветни шаблони! $1Врска$2',
	'error_meta_bad' => 'Метаподатоци: Пронајдов несоодветен шаблон! $1Врска$2',
	'original_wikitext' => 'Изворен викитекст',
	'new_wikitext' => 'Нов викитекст',
	'new_filename' => 'Ново име на податотеката:',
	'output_information' => 'За да подигете рачно - уредете го горенаведениот текст (ако треба), зачувајте ја $1податотеката$2 на вашиот сметач, а потоа',
	'upload_it' => 'подигнете ја',
	'target_wiki' => 'целното вики',
	'error_bot_blocked' => 'Ботот за подигање е блокиран на Ризницата.',
	'error_upload_meta' => 'Не можам да подигам непосредно бидејќи се појави проблем со метаподатоците (видете погоре)!',
	'error_tusc_failed' => 'Заверката на TUSC не успеа!',
	'error_only_commons' => 'Непосредното подигање работи само на Ризницата!',
	'upload_control_text' => 'Проверете го новиот викитест, и ако ако сè е во ред, стиснете на „Подигни!“!',
	'error_commons_user' => 'За да се прикаже корисникот на префрлањето, вашето корисничко име на Ризницата мора да се содржи во описот!',
	'error_upload_users' => 'Функцијата за подигање во пробниот период е достапна само за извесни корисници!',
	'error_upload_file' => 'Изворната податотека не може да се преземе.',
);

/** Marathi (मराठी)
 * @author Htt
 */
$messages['mr'] = array(
	'attention' => 'लक्ष',
	'description' => 'विकीमीडिया प्रकल्पांतून संचिका विकीमीडिया कॉमन्स येथे स्थानांतरित करण्याचे एक साधन',
	'language' => 'भाषा',
	'project' => 'प्रकल्प',
	'source_file' => 'स्रोत संचिका',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'attention' => 'Perhatian',
	'description' => 'Alat untuk memindahkan fail dari projek Wikimedia ke Wikimedia Commons',
	'change_meta' => 'Tukar $1tetapan kategori dan templat $2 untuk $3',
	'jira_link' => 'Laporkan pepijat atau sarankan ciri-ciri baru',
	'language' => 'Bahasa',
	'project' => 'Projek',
	'source_file' => 'Fail sumber',
	'target_file' => 'Fail sasaran',
	'commons_username' => 'Nama pengguna Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons ke projek',
	'move_file_from_com' => 'Pindahkan fail dari Wikimedia Commons ke projek',
	'categories' => 'Kategori',
	'remove_cats' => 'Gugurkan kategori sedia ada',
	'checkusage' => 'Semak Penggunaan',
	'use_checkusage' => 'Gunakan $1Akal Budi$2 untuk menyarankan kategori baru',
	'use_tusc' => 'Gunakan $1TUSC$2 untuk memindahkan fail secara terus',
	'tusc_user' => 'Nama pengguna TUSC',
	'tusc_pass' => 'Kata laluan TUSC',
	'do_it' => 'Lakukannya',
	'error_transfer_usr' => 'Anda belum menetapkan nama pengguna Wikipedia Commons',
	'error_not_exists' => 'Fail sumber tidak wujud.',
	'error_file_exists' => 'Fail sudah wujud di $3 sebagai "$1$4$2"!',
	'error_diff_exists' => 'Fail sesaran yang berlainan wujud di wiki sasaran dengan nama yang sama!',
	'error_no_meta' => 'Tiada metadata yang dijumpai untuk wiki sumber! $1Pautan$2',
	'error_meta_no_good' => 'Metadata: Tiada templat elok yang dijumpai! $1Pautan$2',
	'error_meta_bad' => 'Metadata: Templat tak elok dijumpai! $1Pautan$2',
	'original_wikitext' => 'Teks wiki asal',
	'new_wikitext' => 'Teks wiki baru',
	'new_filename' => 'Nama fail baru:',
	'output_information' => 'Untuk muat naik manual, sunting teks di atas (jika perlu), simpan $1fail itu$2 dalam komputer anda, kemudian',
	'upload_it' => 'muat naiknya',
	'target_wiki' => 'wiki sasaran',
	'error_bot_blocked' => 'Bot muat naik disekat di Wikimedia Commons.',
	'error_upload_meta' => 'Tidak boleh memuat naik secara terus kerana metadata bermasalah (lihat di atas)!',
	'error_tusc_failed' => 'Pengesahan TUSC gagal!',
	'error_only_commons' => 'Muat naik terus hanya berkesan di Wikimedia Commons!',
	'upload_control_text' => 'Sila semak teks wiki baru dan klik "Muat Naik!" jika segalanya sempurna!',
	'error_commons_user' => 'Untuk mengenal pasti pengguna yang membuat pemindahan itu, nama pengguna Wikimedia Commons anda haruslah ada dalam keterangan!',
	'error_upload_users' => 'Fungsi muat naik hanya boleh digunakan oleh beberapa pengguna ketika tempoh ujian!',
	'error_upload_file' => 'Fail asal tidak boleh dimuat turun.',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'language' => 'ဘာသာ',
	'project' => 'Project',
	'source_file' => 'ရင်းမြစ်ဖိုင်',
	'categories' => 'အမျိုးအစားများ',
	'error_not_exists' => 'ရင်းမြစ်စာမျက်နှာ မတည်ရှိပါ။',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'attention' => 'Let op',
	'description' => 'Een hulpprogramma om bestanden van Wikimediaprojecten naar Wikimedia Commons over te halen',
	'change_meta' => 'De $1categorie- en sjablooninstellingen$2 voor $3 wijzigen',
	'jira_link' => 'Een bug of suggestie melden',
	'language' => 'Taal',
	'project' => 'Project',
	'source_file' => 'Bronbestand',
	'target_file' => 'Doelbestand',
	'commons_username' => 'Gebruikersnaam op Wikimedia Commons',
	'commons_to_project' => 'Van Wikimedia Commons naar project',
	'move_file_from_com' => 'Bestand van Wikimedia Commons naar project verplaatsen',
	'categories' => 'Categorieën',
	'remove_cats' => 'Bestaande categorieën verwijderen',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => '$1CommonSense$2 gebruiken om suggesties voor nieuwe categorieën te maken',
	'use_tusc' => '$1TUSC$2 gebruiken om het bestand direct over te brengen',
	'tusc_user' => 'TUSC-gebruikersnaam',
	'tusc_pass' => 'TUSC-wachtwoord',
	'do_it' => 'Uitvoeren',
	'error_transfer_usr' => 'U hebt geen gebruikersnaam voor Wikimedia Commons ingesteld',
	'error_not_exists' => 'Het bronbestand bestaat niet!',
	'error_file_exists' => 'Het bestand bestaat al op $3 als "$1$4$2"!',
	'error_diff_exists' => 'Er bestaat al een ander doelbestand op de doelwiki met dezelfde naam!',
	'error_no_meta' => 'Er is geen metadata aangetroffen voor de bronwiki! $1Verwijzing$2',
	'error_meta_no_good' => 'Medata: geen correcte sjablonen aangetroffen! $1Verwijzing$2',
	'error_meta_bad' => 'Metadata: incorrect sjabloon aangetroffen! $1Verwijzing$2',
	'original_wikitext' => 'Oorspronkelijke wikitekst',
	'new_wikitext' => 'Nieuwe wikitekst',
	'new_filename' => 'Nieuwe bestandsnaam:',
	'output_information' => 'Om handmatig te uploaden doet u het volgende: bewerk de bovenstaande tekst (als nodig), sla $1het bestand$2 op op uw computer om het daarna te',
	'upload_it' => 'uploaden',
	'target_wiki' => 'de doelwiki',
	'error_bot_blocked' => 'De uploadrobot is geblokkeerd op Wikimedia Commons.',
	'error_upload_meta' => 'Het is niet mogelijk direct te uploaden omdat er een probleem is met de metadata (zie hierboven)!',
	'error_tusc_failed' => 'De TUSC-controle is mislukt.',
	'error_only_commons' => 'Directe upload is alleen mogelijk naar Wikimedia Commons!',
	'upload_control_text' => 'Controleer de wikitekst en klik op "Uploaden" als alles in orde is.',
	'error_commons_user' => 'Om de gebruiker die het bestand overdraagt te kunnen identificeren, moet uw gebruikersnaam bij Wikimedia Commons in de beschrijving voorkomen.',
	'error_upload_users' => 'Tijdens de testperiode is de uploadfunctionaliteit is alleen beschikbaar voor een selecte groep gebruikers.',
	'error_upload_file' => 'Het oorspronkelijke bestand kan niet gedownload worden.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'language' => 'ژبه',
	'project' => 'پروژه',
	'do_it' => 'ترسره يې کړه',
	'new_filename' => 'د نوې دوتنې نوم:',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 */
$messages['pt-br'] = array(
	'attention' => 'Atenção',
	'description' => 'Uma ferramenta para transferir arquivos de projetos da Wikimedia para o Wikimedia Commons',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'attention' => 'Atenție',
	'description' => 'Un instrument pentru transferul fișierelor de la proiectele Wikimediei la Wikimedia Commons',
	'change_meta' => 'Schimbați $1categoria și setările formatului$2 pentru $3',
	'jira_link' => 'Raportați o eroare sau sugerați îmbunătățiri',
	'language' => 'Limbă',
	'project' => 'Proiect',
	'source_file' => 'Fișier sursă',
	'target_file' => 'Fișier țintă',
	'commons_username' => 'Numele de utilizator de la Wikimedia Commons',
	'commons_to_project' => 'De la Wikimedia Commons la proiect',
	'move_file_from_com' => 'Mută fișierul de la Wikimedia Commons la proiectul indicat',
	'categories' => 'Categorii',
	'remove_cats' => 'Elimină categoriile existente',
	'use_checkusage' => 'Utilizează $1CommonSense$2 pentru sugestii de noi categorii',
	'use_tusc' => 'Utilizează $1TUSC$2 pentru a transfera fișierul direct',
	'tusc_user' => 'Numele de utilizator TUSC',
	'tusc_pass' => 'Parola TUSC',
	'do_it' => 'Execută',
	'error_transfer_usr' => 'Nu ați setat un nume de utilizator pentru Wikimedia Commons',
	'error_not_exists' => 'Fișierul sursă nu există!',
	'error_file_exists' => 'Fișierul există deja la $3 cu numele „$1$4$2”!',
	'error_diff_exists' => 'Alt fișier țintă există deja pe wikiul țintă sub același nume!',
	'error_no_meta' => 'Nu s-au găsit metadate pentru wikiul sursă! $1Legătură$2',
	'error_meta_no_good' => 'Metadate: nu s-a găsit niciun format bun! $1Legătură$2',
	'error_meta_bad' => 'Metadate: s-a găsit un format nepotrivit! $1Legătură$2',
	'original_wikitext' => 'Text wiki original',
	'new_wikitext' => 'Text wiki nou',
	'new_filename' => 'Noul nume al fișierului:',
	'output_information' => 'Pentru încărcare manuală, modificați textul de mai sus (dacă este necesar), salvați $1fișierul$2 pe calculatorul dumneavoastră, și mai apoi',
	'upload_it' => 'încărcați-l',
	'target_wiki' => 'wikiul țintă',
	'error_bot_blocked' => 'Robotul care efectuează încărcarea este blocat pe Wikimedia Commons.',
	'error_upload_meta' => 'Nu se poate încărca direct, deoarece există probleme cu metadatele (vedeți mai sus)!',
	'error_tusc_failed' => 'Verificarea TUSC nu a reușit!',
	'error_only_commons' => 'Încărcarea directă funcționează numai la Wikimedia Commons!',
	'upload_control_text' => 'Vă rugăm să verificați noul text wiki și să apăsați pe „Încarcă!” dacă totul este în regulă!',
	'error_commons_user' => 'Pentru a identifica utilizatorul care a efectuat transferul, numele dumneavoastră de utilizator de la Wikimedia Commons trebuie să se afle în descriere!',
	'error_upload_users' => 'Funcția de încărcare este disponibilă doar pentru unii utilizatori în timpul perioadei de testare!',
	'error_upload_file' => 'Fișierul original nu poate fi descărcat.',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'attention' => 'Attenzione',
	'language' => 'Lènghe',
	'project' => 'Proggette',
	'source_file' => 'File sorgende',
	'target_file' => 'File de destinazione',
	'categories' => 'Categorije',
	'do_it' => 'Falle',
	'new_filename' => "Nome d'u file nuève:",
	'upload_it' => 'carecale',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'attention' => 'Pozor',
	'description' => 'Orodje za prenos datotek iz projektov Wikimedie v Wikimediino Zbirko',
	'change_meta' => 'Spremeni $1nastavitve kategorije in predloge$2 za $3',
	'jira_link' => 'Prijavite hrošča ali predlagajte funkcijo',
	'language' => 'Jezik',
	'project' => 'Projekt',
	'source_file' => 'Izvorna datoteka',
	'target_file' => 'Ciljna datoteka',
	'commons_username' => 'Uporabniško ime Wikimediine Zbirke',
	'commons_to_project' => 'Iz Zbirke Wikimedia v projekt',
	'move_file_from_com' => 'Prestavi datoteko iz Zbirke Wikimedia v projekt',
	'categories' => 'Kategorije',
	'remove_cats' => 'Odstrani obstoječe kategorije',
	'use_checkusage' => 'Uporabi $1CommonSense$2 za predlaganje novih kategorij',
	'use_tusc' => 'Uporabi $1TUSC$2 za neposredni prenos datoteke',
	'tusc_user' => 'Uporabniško ime TUSC',
	'tusc_pass' => 'Geslo TUSC',
	'do_it' => 'Izvedi',
	'error_transfer_usr' => 'Niste določili uporabniškega imena Wikimediine Zbirke',
	'error_not_exists' => 'Izvorna datoteka ne obstaja!',
	'error_file_exists' => 'Datoteka že obstaja na $3 kot »$1$4$2«!',
	'error_diff_exists' => 'Različna ciljna datoteka obstaja na ciljnem wikiju pod enakim imenom!',
	'error_no_meta' => 'Za izvorni wiki ni bilo najdenih metapodatkov! $1Povezana$2',
	'error_meta_no_good' => 'Metapodatki: Najdena ni bila nobena dobra predloga! $1Povezava$2',
	'error_meta_bad' => 'Metapodatki: Najdena je bila slaba predloga! $1Povezava$2',
	'original_wikitext' => 'Izvirno wikibesedilo',
	'new_wikitext' => 'Novo wikibesedilo',
	'new_filename' => 'Novo ime datoteke:',
	'output_information' => 'Za ročno nalaganje uredite zgornje besedilo (če je potrebno), shranite $1datoteko$2 na vaš računalnik, nakar',
	'upload_it' => 'naložite',
	'target_wiki' => 'ciljni wiki',
	'error_bot_blocked' => 'Nalagalni robot je na Wikimediini Zbirki blokiran.',
	'error_upload_meta' => 'Ne morem naložiti neposredno, ker so težave z metapodatki (glej zgoraj)!',
	'error_tusc_failed' => 'Preverjanje TUSC ni uspelo!',
	'error_only_commons' => 'Neposredno nalaganje deluje samo na Wikimediini Zbirki!',
	'upload_control_text' => 'Prosimo, preverite novo wikibesedilo in kliknite »Naloži!«, če je vse v redu.',
	'error_commons_user' => 'Za ugotavljanje uporabnika, ki je izvedel prenos, mora biti vaše uporabniško ime na Wikimediini Zbirki navedeno v opisu.',
	'error_upload_users' => 'Zmnožnost nalaganja je med preizkusnim obdobjem na voljo samo nekaterim uporabnikom.',
	'error_upload_file' => 'Izvorne datoteke ni mogoče prenesti.',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'attention' => 'Пажња',
	'description' => 'Алатка за пренос датотека из Викимедијиних пројеката у Викимедијину оставу',
	'change_meta' => 'Промените поставке $1категорија и шаблона$2 за викију $3',
	'jira_link' => 'Пријавите грешку или предложите нову могућност',
	'language' => 'Језик',
	'project' => 'Пројекат',
	'source_file' => 'Изворна датотека',
	'target_file' => 'Одредишна датотека',
	'commons_username' => 'Корисничко име на Викимедијиној остави',
	'commons_to_project' => 'Из Викимедијине оставе у пројекат',
	'move_file_from_com' => 'Преместите датотеку из Викимедијине оставе у пројекат',
	'categories' => 'Категорије',
	'remove_cats' => 'Уклони постојеће категорије',
	'checkusage' => 'Употреба',
	'use_checkusage' => 'Користите $1Комон сенс$2 да предложите нове категорије',
	'use_tusc' => 'Користите $1TUSC$2 за пренос датотека',
	'tusc_user' => 'Корисничко име за TUSC',
	'tusc_pass' => 'Лозинка за TUSC',
	'do_it' => 'Уради',
	'error_transfer_usr' => 'Нисте поставили корисничко име Викимедијине оставе',
	'error_not_exists' => 'Изворна датотека не постоји.',
	'error_file_exists' => 'Датотека већ постоји на викију $3 као „$1$4$2“.',
	'error_diff_exists' => 'Другачија одредишна датотека постоји на наведеном викију под истим именом.',
	'error_no_meta' => 'Метаподаци нису пронађени на изворном викију. $1Веза$2',
	'error_meta_no_good' => 'Метаподаци: нису пронађени добри шаблони. $1Веза$2',
	'error_meta_bad' => 'Метаподаци: пронађен је лош шаблон. $1Веза$2',
	'original_wikitext' => 'Изворни текст викија',
	'new_wikitext' => 'Нови текст викија',
	'new_filename' => 'Нови назив датотеке:',
	'output_information' => 'Да бисте отпремали ручно, уредите текст изнад (ако је потребно), сачувајте $1датотеку$2 на рачунар и',
	'upload_it' => 'пошаљите је',
	'target_wiki' => 'одредишна викија',
	'error_bot_blocked' => 'Бот за отпремање је блокиран на Викимедијиној остави.',
	'error_upload_meta' => 'Изравно отпремање није могуће јер је дошло до проблема с метаподацима (погледајте изнад).',
	'error_tusc_failed' => 'TUSC провера није успела.',
	'error_only_commons' => 'Изравно слање ради само на Викимедијиној остави.',
	'upload_control_text' => 'Изаберите нови текст викија и кликните на „Пошаљи“ ако је све у реду.',
	'error_commons_user' => 'Да бисмо препознали корисника који преноси датотеке, ваше корисничко име на Викимедијиној остави мора бити у опису.',
	'error_upload_users' => 'Могућност отпремања је доступна само неким корисницима током пробног периода.',
	'error_upload_file' => 'Изворна датотека не може бити преузета.',
);

/** Serbian Latin ekavian (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'attention' => 'Pažnja',
	'description' => 'Alatka za prenos datoteka iz Vikimedijinih projekata u Vikimedijinu ostavu',
	'change_meta' => 'Promenite postavke $1kategorija i šablona$2 za vikiju $3',
	'jira_link' => 'Prijavite grešku ili predložite novu mogućnost',
	'language' => 'Jezik',
	'project' => 'Projekat',
	'source_file' => 'Izvorna datoteka',
	'target_file' => 'Odredišna datoteka',
	'commons_username' => 'Korisničko ime na Vikimedijinoj ostavi',
	'commons_to_project' => 'Iz Vikimedijine ostave u projekat',
	'move_file_from_com' => 'Premestite datoteku iz Vikimedijine ostave u projekat',
	'categories' => 'Kategorije',
	'remove_cats' => 'Ukloni postojeće kategorije',
	'checkusage' => 'Upotreba',
	'use_checkusage' => 'Koristite $1Komon sens$2 da predložite nove kategorije',
	'use_tusc' => 'Koristite $1TUSC$2 za prenos datoteka',
	'tusc_user' => 'Korisničko ime za TUSC',
	'tusc_pass' => 'Lozinka za TUSC',
	'do_it' => 'Uradi',
	'error_transfer_usr' => 'Niste postavili korisničko ime Vikimedijine ostave',
	'error_not_exists' => 'Izvorna datoteka ne postoji.',
	'error_file_exists' => 'Datoteka već postoji na vikiju $3 kao „$1$4$2“.',
	'error_diff_exists' => 'Drugačija odredišna datoteka postoji na navedenom vikiju pod istim imenom.',
	'error_no_meta' => 'Metapodaci nisu pronađeni na izvornom vikiju. $1Veza$2',
	'error_meta_no_good' => 'Metapodaci: nisu pronađeni dobri šabloni. $1Veza$2',
	'error_meta_bad' => 'Metapodaci: pronađen je loš šablon. $1Veza$2',
	'original_wikitext' => 'Izvorni tekst vikija',
	'new_wikitext' => 'Novi tekst vikija',
	'new_filename' => 'Novi naziv datoteke:',
	'output_information' => 'Za ručno otpremanje, uredite tekst iznad (ako je potrebno), sačuvajte $1datoteku$2 na računar i',
	'upload_it' => 'pošaljite je',
	'target_wiki' => 'odredišna vikija',
	'error_bot_blocked' => 'Bot za otpremanje je blokiran na Vikimedijinoj ostavi.',
	'error_upload_meta' => 'Izravno otpremanje nije moguće jer je došlo do problema s metapodacima (pogledajte iznad).',
	'error_tusc_failed' => 'TUSC provera nije uspela.',
	'error_only_commons' => 'Izravno otpremanje radi samo na Vikimedijinoj ostavi.',
	'upload_control_text' => 'Izaberite novi tekst vikija i kliknite na „Pošalji“ ako je sve u redu.',
	'error_commons_user' => 'Da bismo prepoznali korisnika koji prenosi datoteke, vaše korisničko ime na Vikimedijinoj ostavi mora biti u opisu.',
	'error_upload_users' => 'Mogućnost otpremanja je dostupna samo nekim korisnicima tokom probnog perioda.',
	'error_upload_file' => 'Izvorna datoteka ne može biti preuzeta.',
);

/** Swedish (Svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'attention' => 'Uppmärksamhet',
	'description' => 'Ett verktyg för att överföra filer från Wikimedia-projekten till Wikimedia Commons',
	'change_meta' => 'Ändra $1kategori och mallinställningar$2 för $3',
	'jira_link' => 'Rapportera fel eller föreslå en funktion',
	'language' => 'Språk',
	'project' => 'Projekt',
	'source_file' => 'Källfil',
	'target_file' => 'Målfil',
	'commons_username' => 'Wikimedia Commons användarnamn',
	'commons_to_project' => 'Wikimedia Commons till projektet',
	'move_file_from_com' => 'Flytta fil från Wikimedia Commons till projekt',
	'categories' => 'Kategorier',
	'remove_cats' => 'Ta bort befintliga kategorier',
	'use_checkusage' => 'Använd $1CommonSense$2 för att föreslå nya kategorier',
	'use_tusc' => 'Använd $1TUSC$2 för att överföra filen direkt',
	'tusc_user' => 'TUSC användarnamn',
	'tusc_pass' => 'TUSC lösenord',
	'do_it' => 'Gör det',
	'error_transfer_usr' => 'Du har inte angett ett Wikimedia Commons användarnamn',
	'error_not_exists' => 'Källfilen finns inte!',
	'error_file_exists' => 'Filen finns redan på $3 som "$1$4$2"!',
	'error_diff_exists' => 'En annan målfil finns på målwiki under samma namn!',
	'error_no_meta' => 'Ingen metadata hittades för ursprungs-wikin! $1Link$2',
	'error_meta_no_good' => 'Metadata: Ingen bra mallar hittades! $1 Länk $2',
	'error_meta_bad' => 'Metadata: Dålig mall hittades! $1Länk$2',
	'original_wikitext' => 'Ursprunglig wikitext',
	'new_wikitext' => 'Ny wikitext',
	'new_filename' => 'Nytt filnamn:',
	'output_information' => 'För att ladda upp filen manuellt, redigera texten ovan (om nödvändigt), spara $1filen$2 på din dator, och',
	'upload_it' => 'ladda upp den',
	'target_wiki' => 'målwikin',
	'error_bot_blocked' => 'Upload-botten är blokerad på Wikimedia Commons.',
	'error_upload_meta' => 'Kan inte ladda upp direkt eftersom det finns problem med metadata (se ovan)!',
	'error_tusc_failed' => 'TUSC-verifiering misslyckades!',
	'error_only_commons' => 'Direktuppladdning fungerar bara på Wikimedia Commons!',
	'upload_control_text' => 'Vänligen kontrollera den nya wiki texten och klicka på "Upload!" om allt är OK!',
	'error_commons_user' => 'Ditt användarnamn på  Wikimedia Commons ska anges i beskrivningen, så att användaren, som utfört överföringen, kan identifieras!',
	'error_upload_users' => 'Uppladdningsfunktionen är endast tillgänglig för vissa användare under testperioden!',
	'error_upload_file' => 'Den ursprungliga filen kan inte laddas ner.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'language' => 'భాష',
	'categories' => 'వర్గాలు',
	'tusc_user' => 'TUSC వాడుకరిపేరు',
	'tusc_pass' => 'TUSC సంకేతపదం',
	'original_wikitext' => 'అసలు వికీ పాఠ్యం',
	'new_wikitext' => 'కొత్త వికీ పాఠ్యం',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'language' => 'Lian',
	'commons_username' => "Naran uza-na'in iha Wikimedia Commons",
	'commons_to_project' => 'Husi Wikimedia Commons ba projetu',
	'tusc_user' => "Naran uza-na'in iha TUSC",
	'do_it' => 'Halo',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'attention' => 'Pansinin',
	'description' => 'Isang kasangkapan upang maglipat ng mga talaksan mula sa mga proyekto ng Wikimedia papunta sa Wikimedia Commons',
	'change_meta' => 'Baguhin ang $1kategorya at mga katakdaan$2 ng suleras para sa $3',
	'jira_link' => 'Mag-ulat ng isang sira o magmungkahi ng isang tampok',
	'language' => 'Wika',
	'project' => 'Proyekto',
	'source_file' => 'Pinagmulang talaksan',
	'target_file' => 'Pinupukol na talaksan',
	'commons_username' => 'Pangalan ng tagagamit ng Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons papunta sa proyekto',
	'move_file_from_com' => 'Ilipat ang talaksan mula sa Wikimedia Commons papunta sa proyekto',
	'categories' => 'Mga kategorya',
	'remove_cats' => 'Alisin ang umiiral na mga kategorya',
	'checkusage' => 'Suriin ang Paggamit',
	'use_checkusage' => 'Gamitin ang $1CommonSense$2 upang magmungkahi ng bagong mga kategorya',
	'use_tusc' => 'Gamitin ang $1TUSC$2 upang tuwirang mailipat ng isang talaksan',
	'tusc_user' => 'Pangalan ng tagagamit ng TUSC',
	'tusc_pass' => 'Hudyat sa TUSC',
	'do_it' => 'Gawin ito',
	'error_transfer_usr' => 'Hindi ka pa nagtatakda ng isang pangalan ng tagagamit ng Wikimedia Commons',
	'error_not_exists' => 'Hindi umiiral ang pagmumulang talaksan!',
	'error_file_exists' => 'Umiiral na ang talaksan sa $3 bilang "$1$4$2"!',
	'error_diff_exists' => 'Umiiral na ang ibang pinupukol na talaksan sa pinupukol na wiki na ganoon din ang pangalan!',
	'error_no_meta' => 'Walang natagpuang metadato para sa pinagmumulang wiki! $1Kawing$2',
	'error_meta_no_good' => 'Metadato: Walang natagpuang mabubuting mga suleras $1Kawing$2',
	'error_meta_bad' => 'Metadato: Nakatagpo ng masamang suleras! $1Kawing$2',
	'original_wikitext' => 'Orihinal na teksto ng wiki',
	'new_wikitext' => 'Bagong teksto ng wiki',
	'new_filename' => 'Bagong pangalan ng talaksan:',
	'output_information' => 'Para sa kinakamay na pagkakargang papaitaas, baguhin ang tekstong nasa itaas (kung kinakailangan), sagipin $1ang talaksan$2 sa kompyuter mo, pagkaraan ay',
	'upload_it' => 'ikarga itong paitaas',
	'target_wiki' => 'ang pinupukol na wiki',
	'error_bot_blocked' => 'Ang bot ng pagkakargang papaitaas ay hinahadlangan sa Wikimedia Commons.',
	'error_upload_meta' => 'Hindi maaaring tuwirang magkargang papaitaas dahil may mga suliranin sa dato ng meta (tingnan ang nasa itaas)!',
	'error_tusc_failed' => 'Nabigo ang pagpapatunay ng TUSC!',
	'error_only_commons' => 'Tanging tuwirang mga pagkakargang papaitaas ng mga akda lamang doon sa Wikimedia Commons!',
	'upload_control_text' => 'Mangyaring tabanan ang bagong teksto ng wiki at pindutin ang "Ikarga!" kung ayos naman ang lahat!',
	'error_commons_user' => 'Upang makilala ang tagagamit ng paglilipat, ang iyong pangalan ng tagagamit sa Wikimedia Commons ay dapat na nasa loob ng paglalarawan!',
	'error_upload_users' => 'Ang tungkulin ng pagkakargang papaitaas ay makukuha lamang ng ilang mga tagagamit habang nasa panahon ng pagsusubok!',
	'error_upload_file' => 'Hindi maikakargang paibaba ang orihinal talaksan.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'attention' => 'Chú ý',
	'description' => 'Công cụ chuyển tập tin từ các dự án Wikimedia đến Wikimedia Commons',
	'change_meta' => 'Thay đổi $1cấu hình thể loại và bản mẫu$2 của $3',
	'jira_link' => 'Báo cáo lỗi hoặc đề nghị một tính năng',
	'language' => 'Ngôn ngữ',
	'project' => 'Dự án',
	'source_file' => 'Tập tin gốc',
	'target_file' => 'Tập tin đích',
	'commons_username' => 'Tên người dùng tại Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons sang dự án',
	'move_file_from_com' => 'Chuyển tập tin từ Wikimedia Commons sang một dự án',
	'categories' => 'Thể loại',
	'remove_cats' => 'Gỡ thể loại hiện có',
	'use_checkusage' => 'Sử dụng $1CommonsSense$2 để gợi ý thêm thể loại',
	'use_tusc' => 'Sử dụng $1TUSC$2 để chuyển tập tin trực tiếp',
	'tusc_user' => 'Tên người dùng TUSC',
	'tusc_pass' => 'Mật khẩu TUSC',
	'do_it' => 'Chuyển',
	'error_transfer_usr' => 'Bạn chưa định rõ tên người dùng Wikimedia Commons',
	'error_not_exists' => 'Tập tin gốc không tồn tại!',
	'error_file_exists' => 'Tập tin đã tồn tại trên $3 dưới tên “$1$4$2”!',
	'error_diff_exists' => 'Một tập tin khác cùng tên đã tồn tại trên wiki đích!',
	'error_no_meta' => 'Không tìm thấy siêu dữ liệu về wiki nguồn! $1Liên kết$2',
	'error_meta_no_good' => 'Siêu dữ liệu: Không tìm thấy bản mẫu hợp! $1Liên kết$2',
	'error_meta_bad' => 'Siêu dữ liệu: Tìm thấy bản mẫu không phù hợp! $1Liên kết$2',
	'original_wikitext' => 'Mã wiki gốc',
	'new_wikitext' => 'Mã wiki mới',
	'new_filename' => 'Tên tập tin mới:',
	'output_information' => 'Để tải lên thủ công, sửa đổi văn bản ở trên (nếu cần), lưu giữ $1tập tin này$2 vào máy cu/a bạn, rồi',
	'upload_it' => 'tải nó lên',
	'target_wiki' => 'wiki đích',
	'error_bot_blocked' => 'Bot tải lên đã bị cấm tại Wikimedia Commons.',
	'error_upload_meta' => 'Không thể tải lên trực tiếp vì lỗi trong siêu dữ liệu (xem bên trên)!',
	'error_tusc_failed' => 'TUSC thất bại xác minh!',
	'error_only_commons' => 'Chỉ có thể tải trực tiếp lên Wikimedia Commons!',
	'upload_control_text' => 'Xin hãy kiểm tra mã wiki mới và bấm nút “Tải lên!” nếu đâu vào đấy!',
	'error_commons_user' => 'Miêu tả cần phải có tên người dùng Wikimedia Commons của bạn để xác định được người chuyển!',
	'error_upload_users' => 'Chức năng tải lên chỉ có sẵn cho một số người trong thời gian thử nghiệm!',
	'error_upload_file' => 'Không thể tải xuống tập tin gốc.',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 */
$messages['zh-hans'] = array(
	'attention' => '关注',
	'description' => '一种工具将文件从维基媒体项目转移到维基共享资源',
	'language' => '语言',
	'project' => '项目',
	'source_file' => '源文件',
	'target_file' => '目标文件',
	'commons_username' => '维基共享资源的用户名',
	'commons_to_project' => '维基共享资源项目',
	'move_file_from_com' => '将文件从维基共享资源移至项目',
	'categories' => '类别',
	'remove_cats' => '删除现有的类别',
	'do_it' => '做吧',
	'new_filename' => '新的文件名：',
	'upload_it' => '将其上传',
	'target_wiki' => '目标维基',
	'error_bot_blocked' => '上传机器维基共享资源上被阻止。',
	'error_only_commons' => '直接上载作品只在维基共享资源！',
);

