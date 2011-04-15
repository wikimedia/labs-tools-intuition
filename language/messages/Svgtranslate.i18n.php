<?php
/**
 * Interface messages for tool "svgtranslate"
 *
 * @toolowner jarry
 */

$url = '~jarry/svgtranslate/';

$messages = array();

/**
 * English
 *
 * @author Jarry
 */
$messages['en'] = array(
	'title' => 'SVG Translate', // Optional
	'error-tryagain' => '$1 Hit your browser\'s back button to retry.',
	'error-nothing' => 'Nothing to translate.',
	'error-notsvg' => 'Not an SVG file.',
	'error-unexpected' => 'An unexpected error occured.',
	'error-notfound' => 'The SVG file could not be retrieved from the URL provided.',
	'error-upload' => 'There was an error uploading.',
	'begin-translation' => 'Begin translation',
	'th-original' => 'Original',
	'th-translation' => 'Translation',
	'th-language' => 'Language',
	'th-username' => 'Username',
	'th-password' => 'Password',
	'th-method' => 'Method',
	'option-tusc' => 'TUSC (automatic upload)',
	'option-manual' => 'Manual upload',
	'preview' => 'Preview',
	'translate' => 'Translate',
	'translate-instructions' => 'Inputs are accepted as either file names (eg. "$1") or full URL (eg. "$2"). If the first option is used, Wikimedia Commons will be assumed as source. To translate an SVG from another site or wiki, you must use the full-url format.',
	'format-filename-example' => 'File:Planetary transit.svg', // Ignore
	'format-fullurl-example' => 'http://upload.wikimedia.org/wikipedia/commons/8/8a/Planetary_transit.svg', // Ignore
	'svginput-label' => 'SVG file',
	'stats-footer' => 'This tool has been used to translate approximately $1 files since $2.',
	'uploading' => 'Uploading',
	'upload-complete' => 'The upload completed successfully. The image should now be at $1',
	'editdescriptionpage' => 'Edit the new description page',
	'disclaimer' => 'Some anonymous data will be privately collected for statistical purposes. If supplied, TUSC usernames will also be recorded to assist in the event of vandalism. Passwords will never be recorded.',
	'author-complete' => 'Please complete author information!',
	'preview-hide' => 'Hide preview',
	'preview-refresh' => 'Refresh preview',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jarry
 * @author Jarry1250
 * @author Krinkle
 * @author Purodha
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.',
	'error-tryagain' => 'A general error message appended to another error message ($1) suggesting the user hits their "Back" button and tries again.',
	'error-nothing' => 'An error received when the tool finds no translatable items of text in the SVG.',
	'error-notsvg' => 'An error that occurs when the file provided is not in the required SVG file format.',
	'error-unexpected' => 'A general error category, for errors which are "unexpected": they should never be encountered by the average user / at all.',
	'error-notfound' => 'An error that occurs when the URL provided does not point to an SVG file or a file description page.',
	'error-upload' => 'General error message for when the tool\'s "direct upload" feature fails.',
	'begin-translation' => 'This is the opening heading on the home page of the tool.',
	'th-original' => 'Heading of the "Original"-column.',
	'th-translation' => 'Heading of the "Translation"-column.
{{Identical|Translation}}',
	'th-language' => 'Label for the language selection dropdown box. {{Identical|Language}}',
	'th-username' => '{{Identical|Username}}',
	'th-password' => '{{Identical|Password}}',
	'th-method' => 'The label introducing a choice between two ways of proceeding/ways of uploading the file.',
	'option-tusc' => 'The option for an automated upload using the "TUSC" mechanism.',
	'option-manual' => 'The option for uploading a file manually.',
	'preview' => '{{Identical|Preview}}',
	'translate' => '{{Identical|Translate}}',
	'translate-instructions' => 'Intro paragraph in the translation process.

Parameters:
* $1 is the string {{msg-toolserver|svgtranslate-format-filename-example}}
* $2 is the string {{msg-toolserver|svgtranslate-format-fullurl-example}}',
	'format-filename-example' => '{{Notranslate}}',
	'format-fullurl-example' => '{{Notranslate}}',
	'svginput-label' => 'The label for main SVG filename input.',
	'stats-footer' => 'This message is displayed at the bottom of the welcome page displaying some statistics. $1 is the number of files, $2 is the date the first known translation took place.',
	'uploading' => 'A heading expressing that an upload is in progress.',
	'upload-complete' => 'The message given on the successful conclusion of an upload, where $1 is a URL to the file in question.',
	'editdescriptionpage' => 'An additional invitation, once a file has been uploaded automatically, to edit the new description page to tidy it.',
	'disclaimer' => 'Supplementary footer text explaining that the tool may collect certain pieces of data from the user.',
	'author-complete' => 'An instruction to the user to manually add in author information from the file because the tool could not generate it automatically.',
	'preview-hide' => 'The text for a button which hides the preview that the user has just asked for.',
	'preview-refresh' => 'The text for a button which refreshes the preview that the user has just asked for.',
);

/** Arabic (العربية)
 * @author ترجمان05
 */
$messages['ar'] = array(
	'error-nothing' => 'لا شيء للترجمة.',
	'th-translation' => 'الترجمة',
	'th-language' => 'اللغة',
	'preview' => 'معاينة',
	'translate' => 'ترجم',
	'svginput-label' => 'ملف SVG',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'title' => 'Пераклад SVG-файлаў',
	'error-tryagain' => '$1 Націсьніце «Вярнуцца» ў браўзэры і паспрабуйце зноў.',
	'error-nothing' => 'Няма, што перакладаць.',
	'error-notsvg' => 'Гэта не SVG-файл.',
	'error-unexpected' => 'Адбылася нечаканая памылка.',
	'error-notfound' => 'Немагчыма атрымаць SVG-файл з пададзенага URL-адрасу.',
	'error-upload' => 'Немагчыма загрузіць.',
	'begin-translation' => 'Пачаць пераклад',
	'th-original' => 'Арыгінал',
	'th-translation' => 'Пераклад',
	'th-language' => 'Мова',
	'th-username' => 'Імя карыстальніка',
	'th-password' => 'Пароль',
	'th-method' => 'Мэтад',
	'option-tusc' => 'TUSC (аўтаматычная загрузка)',
	'option-manual' => 'Ручная загрузка',
	'preview' => 'Папярэдні прагляд',
	'translate' => 'Перакласьці',
	'translate-instructions' => 'Уведзеныя зьвесткі трактуюцца як назва файла (напрыклад, «$1»), ці як поўны URL-адрас (напрыклад, «$2»). Калі гэта файл, пад крыніцай файлу будзе меркавацца ВікіСховішча. Для перакладу SVG-файла зь іншага сайта ці вікі трэба ўвесьці поўны URL-адрас.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'З $2 перакладзена каля $1 файлаў з дапамогай гэтага інструмэнту.',
	'uploading' => 'Ідзе загрузка',
	'upload-complete' => 'Загрузка завершаная пасьпяхова. Выява мусіць быць даступная па адрасе $1',
	'editdescriptionpage' => 'Рэдагаваць старонку апісаньня',
	'disclaimer' => 'Некаторыя ананімныя зьвесткі будуць зьбірацца для статыстычных мэтаў. Калі будуць пададзеныя, імёны ўдзельнікаў TUSC будуць таксама запісаныя ў мэтах абароны ад вандалізму. Паролі ніколі не будуць запісвацца.',
	'author-complete' => 'Запоўніце зьвесткі пра аўтарства!',
	'preview-hide' => 'Схаваць папярэдні прагляд',
	'preview-refresh' => 'Абнавіць папярэдні прагляд',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'th-language' => 'Език',
	'th-username' => 'Потребителско име',
	'th-password' => 'Парола',
	'translate' => 'Превеждане',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'title' => 'এসভিজি অনুবাদ',
	'error-tryagain' => '$1 পুনরায় চেষ্টা করতে আপনার ব্রাউজারের ব্যাক বাটনে ক্লিক করুন।',
	'error-nothing' => 'অনুবাদ করার মতো কিছু নেই।',
	'error-notsvg' => 'এটি কোনো এসভিজি ফাইল নয়।',
	'error-unexpected' => 'একটি অনাকাঙ্ক্ষিত ত্রুটি দেখা দিয়েছে।',
	'error-notfound' => 'প্রদানকৃত ইউআরএল থেকে এসভিজি ফাইলটি সংগ্রহ করা সম্ভব হয়নি।',
	'error-upload' => 'আপলোডিং করতে একটি ত্রুটি দেখা দিয়েছে।',
	'begin-translation' => 'অনুবাদ শুরু করুন',
	'th-original' => 'মূল',
	'th-translation' => 'অনুবাদ',
	'th-language' => 'ভাষা',
	'th-username' => 'ব্যবহারকারী নাম',
	'th-password' => 'শব্দচাবি (Password)',
	'th-method' => 'পদ্ধতি',
	'option-tusc' => 'TUSC (স্বয়ংক্রিয় আপলোড)',
	'option-manual' => 'হাতে আপলোড',
	'preview' => 'প্রাকদর্শন',
	'translate' => 'অনুবাদ',
	'translate-instructions' => 'ইনপুট হিসেবে শুধুমাত্র ফাইলের নাম (যেমন: "$1") বা পূর্ণ ইউআরএল (যেমন: "$2") গ্রহণযোগ্য। যদি ফাইলের নাম ব্যবহার করেন, তবে উইকিমিডিয়া কমন্সকে ফাইলের উৎস হিসেবে ধরে নেওয়া হবে। অন্য কোনো সাইট বা উইকি থেকে এসভিজি ট্রান্সলেট করতে হলে আপনাকে অবশ্যই পূর্ণ ইউআরএল প্রবেশ করাতে হবে।',
	'svginput-label' => 'এসভিজি ফাইল',
	'stats-footer' => 'অনুবাদের জন্য এই সরঞ্জামটি $2 থেকে আনুমানিক $1টি ফাইল অনুবাদের কাজে ব্যবহৃত হয়েছে।',
	'uploading' => 'আপলোডিং',
	'upload-complete' => 'সফলভাবে আপলোড সম্পন্ন হয়েছে। চিত্রটি এখন যেখানে রয়েছে $1',
	'editdescriptionpage' => 'নতুন বিবরণ পাতা সম্পাদনা করুন',
	'author-complete' => 'অনুগ্রহ করে লেখকের তথ্য সম্পূর্ণ করুন!',
	'preview-hide' => 'প্রাকদর্শন আড়ালে রাখো',
	'preview-refresh' => 'পুনরায় প্রাকদর্শন দেখাও',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'title' => 'Troidigezh SVG',
	'error-tryagain' => '$1 Grit gant bouton Kent ho merdeer evit klask en-dro.',
	'error-nothing' => "N'eus netra da dreiñ.",
	'error-notsvg' => "N'eo ket ur restr SVG",
	'error-unexpected' => "Ur fazi dic'hortoz zo bet",
	'error-notfound' => "N'eus ket bet gallet adtapout ar restr SVG adalek an URL merket.",
	'error-upload' => 'Ur fazi zo bet e-ser enporzhiañ.',
	'begin-translation' => 'Kregiñ da dreiñ',
	'th-original' => 'Orin',
	'th-translation' => 'Troidigezh',
	'th-language' => 'Yezh',
	'th-username' => 'Anv implijer',
	'th-password' => 'Ger-tremen',
	'th-method' => 'Hentenn',
	'option-tusc' => 'TUSC (enporzh emgefre)',
	'option-manual' => 'Enporzh dre zorn',
	'preview' => 'Rakwelet',
	'translate' => 'Treiñ',
	'translate-instructions' => 'Degemeret e vez an an enmontoù ma vez evel anvioù restroù (da sk. "$1") pe URLoù klok (da sk. "$2"). Ma vez graet gant an dibarzh kentañ e vo sellet outañ evel ouzh ur restr eus Wikimedia Commons. Evit treiñ un SVG adalek ul lec\'hienn pe ur wiki all eo ret ober gant ar furmad URL klok.',
	'svginput-label' => 'Restr SVG',
	'stats-footer' => 'Graet ez eus bet gant an ostilh-mañ evit treiñ $1 restr well-wazh abaoe $2.',
	'uploading' => "Oc'h enporzhiañ",
	'upload-complete' => "Enporzhiet eo bet ar skeudenn ervat. Bez' e tlefe bezañ war $1 bremañ",
	'editdescriptionpage' => 'Embann deskrivadur nevez ar bajenn',
	'disclaimer' => "Roadennoù dianv zo a vo dastumet evit sevel stadegoù a chomo prevez. Ma vez resisaet an anvioù implijer evit TUSC e vint notennet ivez gant ar pal stourm a-enep d'ar vandalerezh. Ne vez ket enrollet ar gerioù-tremen gwezh ebet.",
	'author-complete' => 'Klokaat an titouroù diwar-benn an aozer !',
	'preview-hide' => 'Kuzhat ar rakweled',
	'preview-refresh' => 'Freskaat ar rakweled',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'th-original' => 'Originalno',
	'th-language' => 'Jezik',
	'preview' => 'Pregled',
	'translate' => 'Prijevod',
);

/** Catalan (Català)
 * @author SMP
 */
$messages['ca'] = array(
	'title' => 'Traducció SVG',
	'error-tryagain' => '$1 Utilitzeu el botó Enrere del vostre navegador per a tornar-ho a intentar.',
	'error-nothing' => 'No hi ha res a traduir.',
	'error-notsvg' => 'No és un fitxer SVG.',
	'error-unexpected' => "S'ha produït un error inesperat.",
	'error-notfound' => "No s'ha pogut recuperar el fitxer SVG a partir de l'adreça URL indicada.",
	'begin-translation' => 'Comença la traducció',
	'th-original' => 'Original',
	'th-translation' => 'Traducció',
	'th-language' => 'Idioma',
	'preview' => 'Vista prèvia',
	'translate' => 'Traducció',
	'translate-instructions' => "L'entrada s'accepta tant si és com a nom de fitxer (per exemple «$1») com si és a través de l'adreça URL completa (per exemple «$2»). Si s'opta per la primera opció s'entendrà que és un fitxer de Wikimedia Commons. Per a traduir un fitxer SVG des d'un altre lloc web heu d'utilitzar el format de URL completa.",
	'svginput-label' => 'Fitxer SVG',
	'stats-footer' => "Amb aquesta eina s'han traduït aproximadament $1 fitxers des de $2.",
);

/** Danish (Dansk)
 * @author Sarrus
 */
$messages['da'] = array(
	'error-tryagain' => '$1 Tryk på din browsers tilbageknap for at prøve igen.',
	'error-nothing' => 'Intet at oversætte.',
	'error-notsvg' => 'Ikke en SVG-fil.',
	'error-unexpected' => 'En uventet fejl opstod.',
	'error-notfound' => 'SVG-filen kunne ikke hentes fra den angivne URL-adresse.',
	'begin-translation' => 'Begynd oversættelse',
	'th-original' => 'Original',
	'th-translation' => 'Oversættelse',
	'th-language' => 'Sprog',
	'translate' => 'Oversæt',
	'translate-instructions' => 'Input accepteres som enten filnavne (f.eks " $1 ") eller fuld URL (f.eks" $2 "). Hvis den første mulighed benyttes, antages det, at Wikimedia Commons er kilden. For at oversætte en SVG fra et andet websted eller wiki, skal du skrive den fulde URL.adresse',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette værktøj er blevet brugt til at oversætte ca. $1 filer siden $2.',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title' => 'SVG-Übersetzung',
	'error-tryagain' => '$1 Klicke auf die Schaltfläche „Eine Seite zurück“ deines Browsers, um es erneut zu versuchen.',
	'error-nothing' => 'Es ist nichts zum Übersetzen vorhanden.',
	'error-notsvg' => 'Das ist keine SVG-Datei.',
	'error-unexpected' => 'Es ist ein unerwarteter Fehler aufgetreten.',
	'error-notfound' => 'Die SVG-Datei konnte nicht unter der angegebenen URL abgerufen werden.',
	'error-upload' => 'Während des Hochladens ist ein Fehler aufgetreten.',
	'begin-translation' => 'Mit dem Übersetzen anfangen',
	'th-original' => 'Original',
	'th-translation' => 'Übersetzung',
	'th-language' => 'Sprache',
	'th-username' => 'Benutzername',
	'th-password' => 'Passwort',
	'th-method' => 'Methode',
	'option-tusc' => 'TUSC (automatisches Hochladen)',
	'option-manual' => 'Manuelles Hochladen',
	'preview' => 'Vorschau',
	'translate' => 'Übersetzen',
	'translate-instructions' => 'Eingaben werden entweder in Form von Dateinamen (z. B. „$1“) oder vollständiger URLs (z. B. „$2“) akzeptiert. Sofern die erste Variante genutzt wird, wird Wikimedia Commons als Dateirepositorium angenommen. Um eine SVG-Datei auf einer anderen Website oder einem anderen Wiki zu übersetzen, muss hingegen die vollständige URL angegeben werden.',
	'svginput-label' => 'SVG-Datei',
	'stats-footer' => 'Dieses Hilfsprogramm wurde bislang zur Übersetzung von ungefähr $1 Dateien seit $2 genutzt.',
	'uploading' => 'Am Hochladen …',
	'upload-complete' => 'Das Hochladen wurde erfolgreich abgeschlossen. Das Bild sollte jetzt unter $1 verfügbar sein.',
	'editdescriptionpage' => 'Die neue Beschreibungsseite bearbeiten',
	'disclaimer' => 'Einige anonymen Daten werden für statistische Zwecke erhoben. Sofern angegeben werden auch die TUSC-Benutzernamen aufgezeichnet, um im Fall von Vandalismus Abhilfe zu erleichtern. Passwörter werden niemals aufgezeichnet.',
	'author-complete' => 'Bitte die Angaben zum Autor vervollständigen.',
	'preview-hide' => 'Vorschau ausblenden',
	'preview-refresh' => 'Vorschau aktualisieren',
);

/** Greek (Ελληνικά)
 * @author Evropi
 */
$messages['el'] = array(
	'title' => 'Μετάφραση SVG',
	'error-tryagain' => '$1 Πατήστε το κουμπί πίσω του προγράμματος περιήγησης σας για να δοκιμάστε ξανά.',
	'error-nothing' => 'Δεν υπάρχει τίποτα για μετάφραση.',
	'error-notsvg' => 'Δεν είναι αρχείο SVG.',
	'error-unexpected' => 'Παρουσιάστηκε ένα απροσδόκητο σφάλμα.',
	'error-notfound' => 'Το αρχείο SVG δεν μπορούσε να ανακτηθεί από τη διεύθυνση που μας παρέχατε.',
	'error-upload' => 'Παρουσιάστηκε ένα σφάλμα κατά τη μεταφόρτωση.',
	'begin-translation' => 'Έναρξη μετάφρασης',
	'th-original' => 'Πρωτότυπο',
	'th-translation' => 'Μετάφραση',
	'th-language' => 'Γλώσσα',
	'th-username' => 'Όνομα χρήστη',
	'th-password' => 'Κωδικός',
	'th-method' => 'Μέθοδος',
	'option-tusc' => 'TUSC (αυτόματη μεταφόρτωση)',
	'option-manual' => 'Μη αυτόματη μεταφόρτωση',
	'preview' => 'Προεπισκόπηση',
	'translate' => 'Μετάφραση',
	'svginput-label' => 'Αρχείο SVG',
	'stats-footer' => 'Αυτό το εργαλείο έχει χρησιμοποιηθεί για την μετάφραση περίπου $1 αρχείων, από τις $2.',
	'uploading' => 'Μεταφόρτωση',
	'upload-complete' => 'Η μεταφόρτωση ολοκληρώθηκε με επιτυχία. Η εικόνα θα πρέπει τώρα να είναι στη διεύθυνση $1',
	'editdescriptionpage' => 'Επεξεργασία της νέας σελίδα περιγραφής',
	'author-complete' => 'Παρακαλούμε συμπληρώστε τις πληροφορίες σχετικά με το συντάκτη!',
	'preview-hide' => 'Απόκρυψη προεπισκόπησης',
	'preview-refresh' => 'Ανανέωση προεπισκόπησης',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Wayiran
 */
$messages['fa'] = array(
	'title' => 'ترجمهٔ اس‌وی‌جی',
	'error-tryagain' => '$1 برای سعی دوباره، دکمهٔ بازگشت را در مرورگر خود بفشارید.',
	'error-nothing' => 'چیزی برای ترجمه نیست.',
	'error-notsvg' => 'پرونده اس‌وی‌جی نیست.',
	'error-unexpected' => 'یک خطای غیرمنتظره رخ داد.',
	'error-notfound' => 'امکان بازیابی پروندهٔ اس‌وی‌جی از نشانی اینترنتی ارائه‌شده نبود.',
	'error-upload' => 'خطای بارگذاری وجود دارد.',
	'begin-translation' => 'آغاز ترجمه',
	'th-original' => 'اصلی',
	'th-translation' => 'ترجمه',
	'th-language' => 'زبان',
	'th-username' => 'نام کاربری',
	'th-password' => 'کلمه عبور',
	'th-method' => 'روش',
	'option-tusc' => 'TUSC (بارگذاری خودکار)',
	'option-manual' => 'بارگذار دستی',
	'preview' => 'پیش‌نمایش',
	'translate' => 'ترجمه',
	'translate-instructions' => 'ورودی‌ها یا به عنوان نام پرونده (مثلاً «$1») و یا نشانی کامل (مثلاً «$2») پذیرفته می‌شوند. اگر گزینهٔ اول استفاده شد، ویکی‌انبار به عنوان منبع در نظر گرفته خواهد شد. برای ترجمهٔ اس‌وی‌جی از یک سایت یا ویکی دیگر، باید از فرمت نشانی کامل استفاده کنید.',
	'svginput-label' => 'پروندهٔ اس‌وی‌جی',
	'stats-footer' => 'این ابزار برای ترجمهٔ حدود $1 پرونده، از $2 استفاده شده است.',
	'uploading' => 'بارگذاری',
	'upload-complete' => 'بارگذاری باموفقیت کامل شد. نگاره می‌بایست الآن در $1 باشد.',
	'editdescriptionpage' => 'صفحهٔ توضیحات جدید درست کنید',
	'disclaimer' => 'مقداری داده‌های ناشناس برای اهداف آماری جمع‌آوری خواهد شد. اگر عرضه شده، نام‌های کاربری TUSC برای کمک در هنگام خرابکاری ثبت خواهند شد. گذرواژه‌ها هیچ‌گاه ثبت نخواهند شد.',
	'author-complete' => 'لطفاً اطلاعات مؤلف را کامل کنید!',
	'preview-hide' => 'مخفی‌سازی پیش‌نمایش',
	'preview-refresh' => 'تازه‌کردن پیش‌نمایش',
);

/** French (Français)
 * @author Crochet.david
 * @author Jean-Frédéric
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'title' => 'SVG Traduction',
	'error-tryagain' => '$1 Utilisez votre bouton Précédent du navigateur pour recommencer.',
	'error-nothing' => 'Rien à traduire.',
	'error-notsvg' => 'Pas un fichier SVG.',
	'error-unexpected' => "Une erreur inattendue s'est produite.",
	'error-notfound' => "Le fichier SVG n'a pas pu être récupéré depuis l'URL fournie.",
	'error-upload' => 'Il y a eu une erreur de téléchargement.',
	'begin-translation' => 'Commencer la traduction',
	'th-original' => 'Original',
	'th-translation' => 'Traduction',
	'th-language' => 'Langue',
	'th-username' => "Nom d'utilisateur",
	'th-password' => 'Mot de passe',
	'th-method' => 'Méthode',
	'option-tusc' => 'TUSC (téléchargement automatique)',
	'option-manual' => 'Téléchargement manuel',
	'preview' => 'Prévisualiser',
	'translate' => 'Traduire',
	'translate-instructions' => 'Les entrées sont acceptées comme étant soit des noms de fichiers (par exemple : « $1 ») ou une URL complète (par exemple : « $2» ). Si la première option est utilisée, Wikimedia Commons sera assumée en tant que source. Pour traduire un SVG d’un autre site ou un wiki, vous devez utiliser le format URL complète.',
	'svginput-label' => 'Fichier SVG',
	'stats-footer' => 'Cet outil a été utilisé pour traduire environ {{PLURAL:$1|un fichier|$1 fichiers}} depuis $2.',
	'uploading' => 'Téléchargement',
	'upload-complete' => "Le téléchargement s'est terminé avec succès. L'image devrait maintenant se trouver à l'adresse $1.",
	'editdescriptionpage' => 'Modifier la nouvelle page de description',
	'disclaimer' => "Certaines données anonymes seront recueillies de façon privée à des fins statistiques. Si fournis, les noms d'usagers TUSC seront aussi notés dans le but d'aider à combattre le vandalisme. Les mots de passe ne sont jamais enregistrés.",
	'author-complete' => "Remplissez les informations sur l'auteur !",
	'preview-hide' => "Masquer l'aperçu",
	'preview-refresh' => 'Actualiser la prévisualisation',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title' => 'תרגום SVG',
	'error-tryagain' => '$1 לחצו על כפתור "חזרה" בדפדפן כדי לנסות שוב.',
	'error-nothing' => 'אין מה לתרגם.',
	'error-notsvg' => 'זה לא קובץ SVG.',
	'error-unexpected' => 'אירעה תקלה בלתי צפויה.',
	'error-notfound' => 'לא ניתן לאחזר את קובץ ה־SVG מהכתובת שניתנה',
	'begin-translation' => 'להתחיל לתרגם',
	'th-original' => 'מקור',
	'th-translation' => 'תרגום',
	'th-language' => 'שפה',
	'preview' => 'תצוגה מקדימה',
	'translate' => 'לתרגם',
	'translate-instructions' => 'אפשר לתת בתור קלט שמות קבצים (למשל "$1") או כתובת מלאות (למשל "$2). במקרה הראשון ההנחה היא שהקובץ נמצא בוויקישיתוף. כדי לתרגם קובץ SVG מאתר אחר, יש לתת כתובת מלאה.',
	'svginput-label' => 'קובץ SVG',
	'stats-footer' => 'הכלי הזה שימש לתרגום של כ־$1 קבצים מאז $2.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'Traduction SVG',
	'error-tryagain' => '$1 Preme le button Retro de tu navigator del web pro reprobar.',
	'error-nothing' => 'Nihil a traducer.',
	'error-notsvg' => 'Non es un file SVG.',
	'error-unexpected' => 'Un error inexpectate ha occurrite.',
	'error-notfound' => 'Le file SVG non poteva esser cargate del URL fornite.',
	'error-upload' => 'Un error occurreva durante le incargamento.',
	'begin-translation' => 'Comenciar traduction',
	'th-original' => 'Original',
	'th-translation' => 'Traduction',
	'th-language' => 'Lingua',
	'th-username' => 'Nomine de usator',
	'th-password' => 'Contrasigno',
	'th-method' => 'Methodo',
	'option-tusc' => 'TUSC (incargamento automatic)',
	'option-manual' => 'Incargamento manual',
	'preview' => 'Previsualisation',
	'translate' => 'Traducer',
	'translate-instructions' => 'Es possibile entrar un nomine de file (p.ex. "$1") o un URL complete (p.ex. "$2"). Si le prime option es usate, Wikimedia Commons es assumite como fonte. Pro traducer un file SVG de un altere sito o wiki, tu debe usar le URL complete.',
	'svginput-label' => 'File SVG',
	'stats-footer' => 'Iste instrumento ha essite usate pro traducer circa $1 files depost $2.',
	'uploading' => 'Incargamento in curso',
	'upload-complete' => 'Le incargamento ha succedite. Le imagine debe ora esser presente a $1',
	'editdescriptionpage' => 'Modificar le nove pagina de description',
	'disclaimer' => 'Certe datos anonyme essera colligite in private pro alimentar nostre statisticas. Si fornite, le nomines de usator de TUSC etiam essera registrate pro assister in caso de vandalismo. Le contrasignos nunquam essera registrate.',
	'author-complete' => 'Per favor completa le informationes del autor.',
	'preview-hide' => 'Celar previsualisation',
	'preview-refresh' => 'Refrescar previsualisation',
);

/** Italian (Italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'th-original' => 'Originale',
	'th-language' => 'Lingua',
	'preview' => 'Anteprima',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => '<i lang="en">SVG</i> Övversäze',
	'error-tryagain' => '$1 Donn dä „Retuur“-Knopp en Dingem Brauser nämme, un dann versöhg_et norr_ens.',
	'error-nothing' => 'Nix zom Övversäze draan.',
	'error-notsvg' => 'Dat es jaa kein <i lang="en">SVG</i>-Dattei.',
	'error-unexpected' => 'Ene Fähler es opjetrodde, woh mer nit met jerääschnet hatte.',
	'error-notfound' => 'Onger däm aanjejovve <i lang="en">URL</i> ham_mer kein <i lang="en">SVG</i>-Dattei jefonge.',
	'begin-translation' => 'Mem Övversäze aanfange',
	'th-original' => 'Ojinahl',
	'th-translation' => 'Övversäzong',
	'th-language' => 'Shprooch',
	'preview' => 'Vör-Aansich zeije',
	'translate' => 'Övversäze',
	'translate-instructions' => 'Enjangsdateije kam_mer met dänne iehr Name aanjävve (för e Beishpell „<code lang="en">$1</code>“) udder med enem kumplätte <i lang="en">URL</i> (för e Beishpell „<code lang="en">$2</code>“). Em eezde Fall looere mer op <i lang="en">Wikimedia Commons</i> donoh. Em zweite Fall kam_mer en <i lang="en">SVG</i>-Dattei fun ene ander ẞait udder uss_enem andere Wiki övversäze.',
	'svginput-label' => 'De <i lang="en">SVG</i>-Dattei',
	'stats-footer' => 'Heh dat Projramm es zick $2 jebruch woode, öm ätwa $1 Datteije ze övversäze.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'SVG Iwwersetzen',
	'error-nothing' => "Näischt fir z'iwwersetzen.",
	'error-notsvg' => 'Keen SVG-Fichier.',
	'error-unexpected' => 'En onerwaarte Feeler ass geschitt.',
	'error-upload' => 'Et gouf e Feeler beim Eroplueden.',
	'begin-translation' => 'Iwwersetzung ufänken',
	'th-original' => 'Original',
	'th-translation' => 'Iwwersetzung',
	'th-language' => 'Sprooch',
	'th-username' => 'Benotzernumm',
	'th-password' => 'Passwuert',
	'translate' => 'Iwwersetzen',
	'svginput-label' => 'SVG-Fichier',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'SVG Превод',
	'error-tryagain' => '$1 Обидете се повторно со копчето „Назад“ на  вашиот прелистувач.',
	'error-nothing' => 'Нема ништо за преведување.',
	'error-notsvg' => 'Не е SVG-податотека.',
	'error-unexpected' => 'Се појави неочекувана грешка.',
	'error-notfound' => 'Не можев да ја преземам SVG-податотеката од наведената URL-адреса.',
	'error-upload' => 'Се појави грешка при подигањето.',
	'begin-translation' => 'Почнете со преведување',
	'th-original' => 'Изворно',
	'th-translation' => 'Превод',
	'th-language' => 'Јазик',
	'th-username' => 'Корисничко име',
	'th-password' => 'Лозинка',
	'th-method' => 'Начин',
	'option-tusc' => 'TUSC (автоматско подигање)',
	'option-manual' => 'Рачно подигање',
	'preview' => 'Преглед',
	'translate' => 'Преведи',
	'translate-instructions' => 'Допуштено е да се внесуваат податотечни имиња (на пр. „$1“) или полни URL-адреси (на пр. „$2“). Ако го користите првото, за извор ќе се смета Заедничката Ризница. Ако сакате да преведете SVG од друго мрежно место или вики, ќе мора да ја наведете полната URL-адреса.',
	'svginput-label' => 'SVG-податотека',
	'stats-footer' => 'Со оваа алатка досега се преведени околу $1 податотеки од (започнувајќи од $2).',
	'uploading' => 'Подигам',
	'upload-complete' => 'Подигањето заврши успешно. Сликата сега треба да биде на $1',
	'editdescriptionpage' => 'Уредете ја новата страница за опис',
	'disclaimer' => 'Извесни анонимни податоци ќе се прибираат приватно за статистички цели. Ако се наведени, корисничките имиња од TUSC ќе се заведат за помош во случај на вандализам. Лозинките никогаш нема да се евидентираат.',
	'author-complete' => 'Пополнете го податокот за авторот!',
	'preview-hide' => 'Скриј преглед',
	'preview-refresh' => 'Превчитај приказ',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'error-unexpected' => 'Seħħ żball mhux mistenni.',
	'error-notfound' => 'Il-fajl SVG ma setax jiġi miksub mill-URL mogħti.',
	'begin-translation' => 'Ibda t-traduzzjoni',
	'th-original' => 'Oriġinali',
	'th-translation' => 'Traduzzjoni',
	'th-language' => 'Lingwa',
	'preview' => 'Dehra proviżorja',
	'translate' => 'Ittraduċi',
	'svginput-label' => 'Fajl SVG',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'title' => 'एस भी जी अनुवाद गर्ने',
	'error-nothing' => 'अनुवाद गर्नु पर्ने केहि छैन।',
	'error-notsvg' => 'यो एस भी जी फाइल होइन।',
	'error-unexpected' => 'एउटा अप्रत्यसित त्रुटि भएको छ।',
	'begin-translation' => 'अनुवाद सुरु गर्ने',
	'th-translation' => 'अनुवाद',
	'th-language' => 'भाषा',
);

/** Dutch (Nederlands)
 * @author Gerard Meijssen
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'SVG-vertaling',
	'error-tryagain' => '$1 Klik op de knop "Terug" in uw browser om het opnieuw te proberen.',
	'error-nothing' => 'Er is niets om te vertalen.',
	'error-notsvg' => 'Dit is geen SVG-bestand.',
	'error-unexpected' => 'Er is een onverwachte fout opgetreden.',
	'error-notfound' => 'Het SVG-bestand kon niet opgehaald worden van de opgegeven URL.',
	'error-upload' => 'Er is een fout opgetreden tijdens het uploaden.',
	'begin-translation' => 'Vertalen',
	'th-original' => 'Origineel',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'th-username' => 'Gebruikersnaam',
	'th-password' => 'Wachtwoord',
	'th-method' => 'Methode',
	'option-tusc' => 'TUSC (automatische upload)',
	'option-manual' => 'Handmatige upload',
	'preview' => 'Voorvertoning',
	'translate' => 'Vertalen',
	'translate-instructions' => 'U kunt bestandsnamen (bijvoorbeeld "$1") of volledige URL\'s (bijvoorbeeld "$2") invoeren. In het eerste geval wordt Wikimedia Commons als bron gebruikt. Gebruik het tweede formaat om een SVG-bestand van een andere site te vertalen.',
	'svginput-label' => 'SVG-bestand',
	'stats-footer' => 'Via dit programma zijn sinds $2 ongeveer $1 bestanden vertaald.',
	'uploading' => 'bezig met uploaden',
	'upload-complete' => 'Het uploaden is voltooid. De afbeelding is nu te bekijken op $1',
	'editdescriptionpage' => 'De nieuwe beschrijvingspagina bewerken',
	'disclaimer' => 'Enkele anonieme gegevens worden niet-openbaar verzameld voor statistische doeleinden. Gebruikersnamen voor TUSC worden ook vastgelegd om in het geval van vandalisme te kunnen ingrijpen. Wachtwoorden worden nooit opgeslagen.',
	'author-complete' => 'Voer de volledige auteursgegevens in!',
	'preview-hide' => 'Voorvertoning verbergen',
	'preview-refresh' => 'Voorvertoning verversen',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'title' => 'SVG-oversettelse',
	'error-tryagain' => '$1 Trykk på nettleserens tilbake-knapp for å prøve igjen.',
	'error-nothing' => 'Ingenting som kan oversettes.',
	'error-notsvg' => 'Ikke en SVG-fil.',
	'error-unexpected' => 'En uventet feil oppsto.',
	'error-notfound' => 'SVG-filen kunne ikke hentes fra den angitte adressen.',
	'begin-translation' => 'Begynn oversettelsen',
	'th-original' => 'Original',
	'th-translation' => 'Oversettelse',
	'th-language' => 'Språk',
	'preview' => 'Forhåndsvisning',
	'translate' => 'Oversett',
	'translate-instructions' => 'Innputt godtas enten som filnavn (f.eks. «$1») eller fullstendige adresser (f.eks. «$2»). Om den første muligheten brukes vil Wikimedia Commons antas som kilde. For å oversette en SVG-fil fra et annet nettsted eller en annen wiki må du bruke den fullstendige adressen.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette verktøyet har blitt brukt for å oversette omtrent $1 filer siden $2.',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'th-translation' => 'Iwwersetzing',
	'th-language' => 'Schprooch',
	'preview' => 'Aasicht',
	'svginput-label' => 'SVG-Feil',
);

/** Polish (Polski)
 * @author Masti
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'Tłumaczenie SVG',
	'error-tryagain' => '$1 Naciśnij przycisk Wstecz w przeglądarce, aby spróbować ponownie.',
	'error-nothing' => 'Nie ma niczego wymagającego przetłumaczenia.',
	'error-notsvg' => 'To nie jest plik SVG.',
	'error-unexpected' => 'Wystąpił nieoczekiwany błąd.',
	'error-notfound' => 'Plik SVG nie może zostać pobrany z podanego adresu URL.',
	'begin-translation' => 'Rozpocznij tłumaczenie',
	'th-original' => 'Oryginał',
	'th-translation' => 'Tłumaczenie',
	'th-language' => 'Język',
	'preview' => 'Podgląd',
	'translate' => 'Tłumacz',
	'translate-instructions' => 'Plik można wybrać na dwa sposoby – podać nazwę pliku (np. „$1”) lub pełny adres URL (np. „$2”). W przypadku pierwszej metody przyjmuje się, że źródłem jest Wikimedia Commons. Aby przetłumaczyć SVG z innej strony lub wiki musisz użyć pełnego adresu URL.',
	'svginput-label' => 'Plik SVG',
	'stats-footer' => 'To narzędzie zostało użyte do przetłumaczenia około $1 plików od $2.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'error-nothing' => 'د ژباړلو څه نشته.',
	'begin-translation' => 'ژباړه پيلول',
	'th-original' => 'آرنی',
	'th-translation' => 'ژباړه',
	'th-language' => 'ژبه',
	'preview' => 'مخليدنه',
	'translate' => 'ژباړل',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'SVG Translate',
	'error-tryagain' => '$1 Apăsați butonul „Înapoi” al navigatorului dumneavoastră pentru a reîncerca.',
	'error-nothing' => 'Nimic de tradus.',
	'error-notsvg' => 'Nu este un fișier SVG.',
	'error-unexpected' => 'O eroare neașteptată a apărut.',
	'error-notfound' => 'Fișierul SVG nu a putut fi preluat de la URL-ul furnizat.',
	'begin-translation' => 'Începeți traducerea',
	'th-original' => 'Original',
	'th-translation' => 'Traducere',
	'th-language' => 'Limbă',
	'preview' => 'Previzualizare',
	'translate' => 'Traducere',
	'translate-instructions' => 'Datele de intrare pot reprezenta fie nume de fișiere (ex.: „$1”), fie adrese URL complete (ex.: „$2”). Dacă se recurge la prima variantă, sursa asumată a fișierelor va fi Wikimedia Commons. Pentru a traduce un fișier SVG aflat pe alt site sau wiki, trebuie să introduceți adresa URL completă.',
	'svginput-label' => 'fișier SVG',
	'stats-footer' => 'Această unealtă a fost folosită la traducerea a aproximativ $1 fișiere, încă din $2.',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'title' => 'Prevajanje SVG',
	'error-tryagain' => '$1 Za ponovni poskus v brskalniku kliknite gumb nazaj.',
	'error-nothing' => 'Ničesar ni za prevesti.',
	'error-notsvg' => 'Ni datoteka SVG.',
	'error-unexpected' => 'Prišlo je do nepričakovane napake.',
	'error-notfound' => 'Datoteke SVG ni bilo mogoče pridobiti z navedenega URL-a.',
	'error-upload' => 'Pri nalaganju je prišlo do napake.',
	'begin-translation' => 'Začni s prevajanjem',
	'th-original' => 'Izvirno',
	'th-translation' => 'Prevod',
	'th-language' => 'Jezik',
	'th-username' => 'Uporabniško ime',
	'th-password' => 'Geslo',
	'th-method' => 'Način',
	'option-tusc' => 'TUSC (samodejno nalaganje)',
	'option-manual' => 'Ročno nalaganje',
	'preview' => 'Predogled',
	'translate' => 'Prevedi',
	'translate-instructions' => 'Za vnos so sprejemljiva tako imena datotek (npr. »$1«), kot tudi polni URL (npr. »$2«). Če je uporabljena prva možnost, bo kot vir predpostavljena Wikimedijina Zbirka. Za prevajanje SVG z druge strani ali wikija morate uporabiti obliko polnega URL.',
	'svginput-label' => 'Datoteka SVG',
	'stats-footer' => 'To orodje je bilo uporabljeno za prevajanje približno $1 datotek od $2.',
	'uploading' => 'Nalaganje',
	'upload-complete' => 'Nalaganje je uspešno dokončano. Slika bi morala biti na $1.',
	'editdescriptionpage' => 'Uredi novo opisno stran',
	'disclaimer' => 'Nekateri brezimni podatki bodo zasebno zbrani v statistične namene. Če so na voljo, bodo zabeležena tudi uporabniška imena TUSC za pomoč v primeru vandalizma. Gesla ne bodo nikoli zabeležena.',
	'author-complete' => 'Prosimo, dopolnite informacije o avtorju!',
	'preview-hide' => 'Skrij predogled',
	'preview-refresh' => 'Osveži predogled',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'SVG преводилац',
	'error-tryagain' => '$1 Кликните на дугме „Назад“ свог прегледача',
	'error-nothing' => 'Нема ништа за превођење.',
	'error-notsvg' => 'Није SVG датотека.',
	'error-unexpected' => 'Дошло је до неочекиване грешке.',
	'error-notfound' => 'SVG датотека није добављена из наведене адресе.',
	'error-upload' => 'Дошло је до грешке при отпремању.',
	'begin-translation' => 'Превођење',
	'th-original' => 'Изворно',
	'th-translation' => 'Превод',
	'th-language' => 'Језик',
	'th-username' => 'Корисничко име',
	'th-password' => 'Лозинка',
	'th-method' => 'Начин',
	'option-tusc' => 'TUSC (самоотпремање)',
	'option-manual' => 'Ручно отпремање',
	'preview' => 'Прегледај',
	'translate' => 'Преведи',
	'translate-instructions' => 'Уноси се прихватају као називи датотека („$1“) или као цела адреса („$2“). Ако се користи прва могућност, Викимедијино складиште ће бити изабрано као извор. Да бисте превели SVG датотеку с другог сајта или викија, користите целу адресу.',
	'svginput-label' => 'SVG датотека',
	'stats-footer' => 'Ова алатка се користи за превођење приближно $1 датотека од $2.',
	'uploading' => 'Отпремање',
	'upload-complete' => 'Отпремање је завршено. Слика би требало да је у $1',
	'editdescriptionpage' => 'Уреди нову страницу за опис',
	'disclaimer' => 'Неки анонимни подаци ће бити скупљани у статистичке сврхе. Ако је наведено, TUSC корисничка имена ће такође бити забележена ради спречавања вандализма. Лозинке се неће бележити.',
	'author-complete' => 'Попуните све податке о аутору.',
	'preview-hide' => 'Сакриј преглед',
	'preview-refresh' => 'Освежи преглед',
);

/** Serbian Latin ekavian (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'SVG prevodilac',
	'error-tryagain' => '$1 Kliknite na dugme „Nazad“ svog pregledača',
	'error-nothing' => 'Nema ništa za prevođenje.',
	'error-notsvg' => 'Nije SVG datoteka.',
	'error-unexpected' => 'Došlo je do neočekivane greške.',
	'error-notfound' => 'SVG datoteka nije dobavljena iz navedene adrese.',
	'error-upload' => 'Došlo je do greške pri otpremanju.',
	'begin-translation' => 'Prevođenje',
	'th-original' => 'Izvorno',
	'th-translation' => 'Prevod',
	'th-language' => 'Jezik',
	'th-username' => 'Korisničko ime',
	'th-password' => 'Lozinka',
	'th-method' => 'Način',
	'option-tusc' => 'TUSC (samootpremanje)',
	'option-manual' => 'Ručno otpremanje',
	'preview' => 'Pregledaj',
	'translate' => 'Prevedi',
	'translate-instructions' => 'Unosi se prihvataju kao nazivi datoteka („$1“) ili kao cela adresa („$2“). Ako se koristi prva mogućnost, Vikimedijino skladište će biti izabrano kao izvor. Da biste preveli SVG datoteku s drugog sajta ili vikija, koristite celu adresu.',
	'svginput-label' => 'SVG datoteka',
	'stats-footer' => 'Ova alatka se koristi za prevođenje približno $1 datoteka od $2.',
	'uploading' => 'Otpremanje',
	'upload-complete' => 'Otpremanje je završeno. Slika bi trebalo da je u $1',
	'editdescriptionpage' => 'Uredi novu stranicu za opis',
	'disclaimer' => 'Neki anonimni podaci će biti skupljani u statističke svrhe. Ako je navedeno, TUSC korisnička imena će takođe biti zabeležena radi sprečavanja vandalizma. Lozinke se neće beležiti.',
	'author-complete' => 'Popunite sve podatke o autoru.',
	'preview-hide' => 'Sakrij pregled',
	'preview-refresh' => 'Osveži pregled',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'title' => 'SVG అనువాదం',
	'error-nothing' => 'అనువదించడానికి ఏమీలేదు.',
	'error-notsvg' => 'అది SVG దస్త్రం కాదు.',
	'error-unexpected' => 'ఏదో గుర్తుతెలియని పొరపాటు జరిగింది.',
	'begin-translation' => 'అనువాదం మొదలుపెట్టండి',
	'th-original' => 'అసలు',
	'th-translation' => 'అనువాదం',
	'th-language' => 'భాష',
	'th-username' => 'వాడుకరిపేరు',
	'th-password' => 'సంకేతపదం',
	'th-method' => 'పద్ధతి',
	'preview' => 'మునుజూపు',
	'translate' => 'అనువదించు',
	'svginput-label' => 'SVG దస్త్రం',
	'stats-footer' => '$2 నుండి దాదాపు $1 దస్త్రాలను అనువదించడానికి ఈ పనిముట్టుని ఉపయోగించారు.',
	'author-complete' => 'దయచేసి రచయిత సమాచారాన్ని పూరించండి!',
	'preview-hide' => 'మునుజూపును దాచు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'title' => 'Pagsasalinwika na SVG',
	'error-tryagain' => '$1 Patamaan ang pindutang pampabalik ng pantingin-tingin mo upang subukang muli.',
	'error-nothing' => 'Walang isasalinwika.',
	'error-notsvg' => 'Hindi isang talaksang SVG.',
	'error-unexpected' => 'Naganap ang isang hindi inaasahang kamalian.',
	'error-notfound' => 'Hindi makuhang muli ang talaksang SVG magmula sa ibinigay na URL.',
	'error-upload' => 'May isang suliranin sa pagkakargang papaitaas.',
	'begin-translation' => 'Simulan ang pagsasalinwika',
	'th-original' => 'Orihinal',
	'th-translation' => 'Salinwika',
	'th-language' => 'Wika',
	'th-username' => 'Pangalan ng tagagamit',
	'th-password' => 'Hudyat',
	'th-method' => 'Pamamaraan',
	'option-tusc' => 'TUSC (kusang pagkakarga na paitaas)',
	'option-manual' => 'Kinakamay na pagkakargang papaitaas',
	'preview' => 'Paunang pagtingin',
	'translate' => 'Isalinwika',
	'translate-instructions' => 'Ang mga ipinapasok ay tinatanggap bilang mga pangalan ng talaksan (iyon ay "$1") o buong URL (iyon ay "$2").  Kung ang unang pagpipilian ang ginamit, ipapalagay na ang Wikimedia Commons ang pinagmulan.  Upang maisalinwika ang isang SVG mula sa ibang lugar o wiki, dapat mong gamitin ang anyo ng buong URL.',
	'svginput-label' => 'Talaksang SVG',
	'stats-footer' => 'Ginamit ang kasangkapang ito upang isalinwika ang tinatayang $1 mga talaksan magmula noong $2.',
	'uploading' => 'Ikinakarga',
	'upload-complete' => 'Matagumpay na nabuo ang pagkakarga. Ang larawan ay dapat na nasa $1 na ngayon',
	'editdescriptionpage' => 'Baguhin ang bagong pahina ng paglalarawan',
	'disclaimer' => 'Ilang datong hindi nakikilala ang pribadong lilikumin para sa mga layuning pang-estadistika.  Kapag ibinigay, ang mga pangalan ng tagagamit ng TUSC ay maitatala rin upang makatulong kapag may naganap na pambababoy. Hindi kailanman maitalala ang mga hudyat.',
	'author-complete' => 'Mangyaring buuin ang kabatiran sa may-akda!',
	'preview-hide' => 'Itago ang paunang tanaw',
	'preview-refresh' => 'Sariwain ang paunang tanaw',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'title' => 'SVG Çevir',
	'error-tryagain' => '$1 Yeniden denemek için tarayıcınızın geri düğmesine basın.',
	'error-nothing' => 'Çevirecek bir şey yok.',
	'error-notsvg' => 'Bir SVG dosyası değil.',
	'error-unexpected' => 'Beklenmedik bir hata meydana geldi.',
	'error-notfound' => "Verilen URL'den SVG dosyası alınamadı.",
	'begin-translation' => 'Çeviriye başla',
	'th-original' => 'Özgün',
	'th-translation' => 'Çeviri',
	'th-language' => 'Dil',
	'preview' => 'Ön izleme',
	'translate' => 'Çevir',
	'translate-instructions' => 'Girişler, ya dosya adı (örn: "$1") ya da tam URL (örn: "$2") olarak kabul edilmektedir. İlk seçeneğin kullanılması durumunda, Wikimedia Commons kaynak olarak varsayılacaktır. Diğer bir site ya da vikiden alınan bir SVG\'yi çevirmek istiyorsanız, tam URL formatını kullanmalısınız.',
	'svginput-label' => 'SVG dosyası',
	'stats-footer' => 'Bu araç, $2 tarihinden bu yana yaklaşık olarak $1 dosyanın çevrilmesi için kullanıldı.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'Dịch SVG',
	'error-tryagain' => '$1 Bấm nút Lùi của trình duyệt để thử lại.',
	'error-nothing' => 'Không có gì để dịch.',
	'error-notsvg' => 'Không phải là tập tin SVG.',
	'error-unexpected' => 'Một lỗi bất ngờ đã xảy ra.',
	'error-notfound' => 'Không thể lấy được tập tin SVG từ URL được cung cấp.',
	'error-upload' => 'Việc tải lên bị thất bại.',
	'begin-translation' => 'Bắt đầu dịch',
	'th-original' => 'Bản gốc',
	'th-translation' => 'Bản dịch',
	'th-language' => 'Ngôn ngữ',
	'th-username' => 'Tên người dùng',
	'th-password' => 'Mật khẩu',
	'th-method' => 'Phương thức',
	'option-tusc' => 'TUSC (tự động tải lên)',
	'option-manual' => 'Tải lên thủ công',
	'preview' => 'Xem trước',
	'translate' => 'Biên dịch',
	'translate-instructions' => 'Có thể cho vào tên tập tin (thí dụ “$1”) hoặc địa chỉ URL đầy đủ (thí dụ “$2”). Nếu chỉ cho vào tên tập tin, công cụ sẽ sử dụng Wikimedia Commons làm nguồn mặc định. Để dịch một tập tin SVG từ trang hoặc wiki khác, bạn phải cung cấp địa chỉ URL đầy đủ.',
	'svginput-label' => 'Tập tin SVG',
	'stats-footer' => 'Công cụ này đã được sử dụng để dịch vào khoảng $1 tập tin từ $2.',
	'uploading' => 'Đang tải lên',
	'upload-complete' => 'Hoàn tất tải lên tập tin. Hình có sẵn tại $1.',
	'editdescriptionpage' => 'Sửa đổi trang miêu tả mới',
	'disclaimer' => 'Một số dữ liệu vô danh sẽ được gửi một cách bảo mật cho mục đích thống kê. Nếu được cung cấp, các tên người dùng TUSC cũng được ghi lại để giúp tránh phá hoại. Các mật khẩu không bao giờ được ghi lại.',
	'author-complete' => 'Xin vui lòng điền thông tin tác giả!',
	'preview-hide' => 'Ẩn phần xem trước',
	'preview-refresh' => 'Làm mới phần xem trước',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author Shizhao
 */
$messages['zh-hans'] = array(
	'title' => 'SVG 翻译',
	'error-tryagain' => '$1点击你的浏览器会退按钮重试。',
	'error-nothing' => '没有要翻译的内容。',
	'error-notsvg' => '不是 SVG 文件。',
	'error-unexpected' => '发生意外错误。',
	'error-notfound' => '不能从提供的 URL 中获取SVG 文件。',
	'error-upload' => '上传时发生错误。',
	'begin-translation' => '开始翻译',
	'th-original' => '源语言',
	'th-translation' => '翻译',
	'th-language' => '语言',
	'th-username' => '用户名',
	'th-password' => '密码',
	'th-method' => '方法',
	'option-tusc' => 'TUSC (自动上传)',
	'option-manual' => '手工上传',
	'preview' => '预览',
	'translate' => '翻译',
	'translate-instructions' => '可以输入文件名（例如“$1”）或完整的URL(例如 "$2")。如果选择第一个选项，维基共享资源会被作为来源。如果是从其他网站或wiki翻译SVG文件，你必须使用完整的url。',
	'svginput-label' => 'SVG 文件',
	'stats-footer' => '自$2起，本工具已翻译约$1个文件。',
	'uploading' => '上传中',
	'upload-complete' => '上传顺利完成。该图像现在应该位于$1',
	'editdescriptionpage' => '编辑新的描述页',
	'disclaimer' => '某些匿名数据将会被私人收集用于统计目的。如果使用TUSC用户名，它也将会被记录下来以用于协助应付破坏行为。密码永远不会被记录。',
	'author-complete' => '请填写作者信息！',
	'preview-hide' => '隐藏预览',
	'preview-refresh' => '刷新预览',
);

