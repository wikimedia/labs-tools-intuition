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
	'translate-instructions' => 'Inputs are accepted as either file names (e.g. "$1") or full URL (e.g. "$2"). If the first option is used, Wikimedia Commons will be assumed as source. To translate an SVG from another site or wiki, you must use the full-url format.',
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
	'error-must-accept' => 'To continue with a direct upload you must accept the terms of use provided.',
	'error-tusc-failed' => 'TUSC validation failed: username or password incorrect.',
	'description-license' => 'Select description and license',
	'finalise' => 'Finalise details',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jarry
 * @author Jarry1250
 * @author Krinkle
 * @author Purodha
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
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
	'svginput-label' => 'The label for main SVG filename input.',
	'stats-footer' => 'This message is displayed at the bottom of the welcome page displaying some statistics. $1 is the number of files, $2 is the date the first known translation took place.',
	'uploading' => 'A heading expressing that an upload is in progress.',
	'upload-complete' => 'The message given on the successful conclusion of an upload, where $1 is a URL to the file in question.',
	'editdescriptionpage' => 'An additional invitation, once a file has been uploaded automatically, to edit the new description page to tidy it.',
	'disclaimer' => 'Supplementary footer text explaining that the tool may collect certain pieces of data from the user.',
	'author-complete' => 'An instruction to the user to manually add in author information from the file because the tool could not generate it automatically.',
	'preview-hide' => 'The text for a button which hides the preview that the user has just asked for.',
	'preview-refresh' => 'The text for a button which refreshes the preview that the user has just asked for.',
	'error-must-accept' => 'An error message encountered when users do not tick the box that indicates they accept the terms of use of the tool.',
	'error-tusc-failed' => 'An error encountered when a TUSC user with that username/password combination is not found e.g. because the wrong password have been supplied.',
	'description-license' => 'A header for a form where description and copyright license are selected.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'error-nothing' => 'Niks om te vertaal nie.',
	'error-notsvg' => "Dis nie 'n SVG-lêer nie.",
	'begin-translation' => 'Begin vertaal',
	'th-original' => 'Oorspronklike',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'th-username' => 'Gebruikersnaam',
	'th-password' => 'Wagwoord',
	'th-method' => 'Metode',
	'preview' => 'Voorskou',
	'translate' => 'Vertaal',
	'svginput-label' => 'SVG-lêer',
	'preview-hide' => 'Versteek voorskou',
	'preview-refresh' => 'verfris voorskou',
	'finalise' => 'Finaliseer besonderhede',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 * @author ترجمان05
 */
$messages['ar'] = array(
	'error-nothing' => 'لا شيء للترجمة.',
	'error-unexpected' => 'خطأ غير متوقع حدث.',
	'begin-translation' => 'ابدأ الترجمة',
	'th-original' => 'أصلي',
	'th-translation' => 'الترجمة',
	'th-language' => 'اللغة',
	'th-username' => 'اسم المستخدم',
	'th-password' => 'كلمة السر',
	'th-method' => 'وسيلة',
	'option-manual' => 'رفع يدوي',
	'preview' => 'معاينة',
	'translate' => 'ترجم',
	'svginput-label' => 'ملف SVG',
	'uploading' => 'يرفع',
	'editdescriptionpage' => 'عدل صفحة الوصف الجديدة',
	'preview-hide' => 'أخفِ المعاينة',
	'preview-refresh' => 'أنعش المعاينة',
	'description-license' => 'اختر وصفا ورخصة',
	'finalise' => 'إنهاء التفاصيل',
);

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'SVG Translate',
	'error-tryagain' => '$1 Calca nel botón atrás del restolador pa volver a tentalo.',
	'error-nothing' => 'Nun hai res que traducir.',
	'error-notsvg' => 'Nun ye un ficheru SVG.',
	'error-unexpected' => 'Hebo un fallu inesperáu.',
	'error-notfound' => 'El ficheru SVG nun se pudo baxar de la URL conseñada.',
	'error-upload' => 'Hebo un fallu al xubir.',
	'begin-translation' => 'Entamar traducción',
	'th-original' => 'Orixinal',
	'th-translation' => 'Traducción',
	'th-language' => 'Llingua',
	'th-username' => "Nome d'usuariu",
	'th-password' => 'Contraseña',
	'th-method' => 'Métodu',
	'option-tusc' => 'TUSC (xuba automática)',
	'option-manual' => 'Xuba manual',
	'preview' => 'Entever',
	'translate' => 'Traducir',
	'translate-instructions' => 'S\'aceuten entraes como nomes de ficheru (p.ex. "$1") o  como URL completes (p.ex. "$2"). Si s\'usa la primera opción, se tomará como orixe Wikimedia Commons. Pa traducir un SVG d\'otru sitiu o wiki, tienes d\'usar el formatu d\'url completa.',
	'svginput-label' => 'Ficheru SVG',
	'stats-footer' => "Esta ferramienta s'usó pa traducir alredor de $1 ficheros dende $2.",
	'uploading' => 'Xubiendo',
	'upload-complete' => 'La xuba se completó correutamente. La imaxe habría tar anguaño en $1',
	'editdescriptionpage' => 'Editar la páxina de descripción nueva',
	'disclaimer' => "Van recoyese dellos datos anónimos con propósitu estadísticu. Si se dan, los nomes d'usuariu TUSC tamién van grabase como ayuda'n casu de vandalismu. Les contraseñes enxamás se grabarán.",
	'author-complete' => '¡Por favor, completa la información del autor!',
	'preview-hide' => 'Anubrir entever',
	'preview-refresh' => 'Refrescar entever',
	'error-must-accept' => "Pa siguir cola xubía direuta tienes d'aceutar los términos d'usu que s'ufren.",
	'error-tusc-failed' => 'Fallu na validación TUSC: usuariu o contraseña incorreutos.',
	'description-license' => 'Escoyer descripción y llicencia',
	'finalise' => 'Finar detalles',
);

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 * @author Wertuose
 */
$messages['az'] = array(
	'error-nothing' => 'Tərcümə etməli heç nə yoxdur.',
	'error-notsvg' => 'Bu SVG faylı deyil.',
	'th-original' => 'Orijinal',
	'th-translation' => 'Tərcümə',
	'th-language' => 'Dil',
	'th-username' => 'İstifadəçi adı',
	'th-password' => 'Parol',
	'th-method' => 'Üsul',
	'translate' => 'Tərcümə et',
);

/** Belarusian (Беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'title' => 'Перакласці SVG',
	'error-tryagain' => '$1 Націсніце «Вярнуцца» ў браўзеры і паспрабуйце зноў.',
	'error-nothing' => 'Няма чаго перакладаць.',
	'error-notsvg' => 'Не SVG-файл',
	'error-unexpected' => 'Адбылася нечаканая памылка.',
	'error-notfound' => 'Немагчыма атрымаць SVG-файл з пададзенага URL-адрасу.',
	'error-upload' => 'Немагчыма загрузіць.',
	'begin-translation' => 'Распачаць пераклад',
	'th-original' => 'Арыгінал',
	'th-translation' => 'Пераклад',
	'th-language' => 'Мова',
	'th-username' => 'Імя ўдзельніка',
	'th-password' => 'Пароль',
	'th-method' => 'Метад',
	'option-tusc' => 'TUSC (аўтаматычная загрузка)',
	'option-manual' => 'Загрузка ўручную',
	'preview' => 'Папярэдні прагляд',
	'translate' => 'Перакласці',
	'translate-instructions' => 'Уведзеныя звесткі трактуюцца як назва файла (напрыклад, «$1»), ці як поўны URL-адрас (напрыклад, «$2»). Калі гэта файл, пад крыніцай файлу будзе меркавацца Wikimedia Commons. Для перакладу SVG-файла з іншага сайта ці вікі трэба ўвесці поўны URL-адрас.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'З $2 перакладзена каля $1 файлаў з дапамогай гэтай прылады.',
	'uploading' => 'Загрузка...',
	'upload-complete' => 'Загрузка завершаная паспяхова. Выява мусіць быць даступная па адрасе $1',
	'editdescriptionpage' => 'Змяніць новую старонку апісання',
	'disclaimer' => 'Некаторыя ананімныя звесткі будуць збірацца для статыстычных мэтаў. Калі будуць пададзеныя, імёны ўдзельнікаў TUSC будуць таксама запісаныя ў мэтах абароны ад вандалізму. Паролі ніколі не будуць запісвацца.',
	'author-complete' => 'Калі ласка, запоўніце інфармацыю пра аўтара!',
	'preview-hide' => 'Схаваць папярэдні прагляд',
	'preview-refresh' => 'Абнавіць папярэдні прагляд',
	'error-must-accept' => 'Каб працягнуць непасрэдную загрузку, Вы мусіце пагадзіцца з умовамі карыстання',
	'error-tusc-failed' => 'Праверка TUSC не атрымалася: няслушны пароль або імя ўдзельніка.',
	'description-license' => 'Абярыце апісанне і ліцэнзію',
	'finalise' => 'Завяршыце апісанне падрабязнасцяў',
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
	'error-must-accept' => 'Каб працягваць непасрэдную загрузку, Вам неабходна пагадзіцца з пададзенымі ўмовамі выкарыстаньня.',
	'error-tusc-failed' => 'Памылка праверкі TUSC: няслушны пароль ці імя карыстальніка.',
	'description-license' => 'Выберыце апісаньне і ліцэнзію',
	'finalise' => 'Падсумуйце апісаньне падрабязнасьцяў',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'error-nothing' => 'Няма нищо за превеждане.',
	'error-notsvg' => 'Не е SVG файл.',
	'error-unexpected' => 'Възникна неочаквана грешка.',
	'th-original' => 'Оригинал',
	'th-translation' => 'Превод',
	'th-language' => 'Език',
	'th-username' => 'Потребителско име',
	'th-password' => 'Парола',
	'th-method' => 'Метод',
	'translate' => 'Превеждане',
	'svginput-label' => 'SVG файл',
	'uploading' => 'Качване',
	'description-license' => 'Изберане на описание и лиценз',
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
	'description-license' => 'বিবরণ এবং লাইসেন্স নির্বাচন',
	'finalise' => 'বিস্তারিত চূড়ান্ত',
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
	'translate-instructions' => 'Degemeret e vez an enmontoù evel pa vefent anvioù restroù (da sk. "$1") pe URLoù klok (da sk. "$2"). Ma vez graet gant an dibarzh kentañ e vo sellet outañ evel pa vefe ur restr o tont eus Wikimedia Commons. Evit treiñ un SVG adalek ul lec\'hienn pe ur wiki all eo ret ober gant ar furmad URL klok.',
	'svginput-label' => 'Restr SVG',
	'stats-footer' => 'Graet ez eus bet gant an ostilh-mañ evit treiñ $1 restr well-wazh abaoe $2.',
	'uploading' => "Oc'h enporzhiañ",
	'upload-complete' => "Enporzhiet eo bet ar skeudenn ervat. Bez' e tlefe bezañ war $1 bremañ",
	'editdescriptionpage' => 'Embann deskrivadur nevez ar bajenn',
	'disclaimer' => "Roadennoù dianv zo a vo dastumet evit sevel stadegoù a chomo prevez. Ma vez resisaet an anvioù implijer evit TUSC e vint notennet ivez gant ar pal stourm a-enep d'ar vandalerezh. Ne vez ket enrollet ar gerioù-tremen gwezh ebet.",
	'author-complete' => 'Klokaat an titouroù diwar-benn an aozer !',
	'preview-hide' => 'Kuzhat ar rakweled',
	'preview-refresh' => 'Freskaat ar rakweled',
	'error-must-accept' => "Evit gallout kenderc'hel gant un enporzhiadenn war-eeun eo ret deoc'h bezañ asantet d'an termenoù implijout pourchaset.",
	'error-tusc-failed' => "C'hwitet eo bet gwiriekadenn TUSC : direizh eo an anv implijer pe ar ger-tremen.",
	'description-license' => 'Dibab an deskrivadur hag an aotre-implijout',
	'finalise' => 'Peurlipat ar munudoù',
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
 * @author Peter Alberti
 * @author Sarrus
 */
$messages['da'] = array(
	'title' => 'SVG-oversættelse',
	'error-tryagain' => '$1 Tryk på din browsers tilbageknap for at prøve igen.',
	'error-nothing' => 'Intet at oversætte.',
	'error-notsvg' => 'Ikke en SVG-fil.',
	'error-unexpected' => 'En uventet fejl opstod.',
	'error-notfound' => 'SVG-filen kunne ikke hentes fra den angivne URL-adresse.',
	'error-upload' => 'Der opstod en fejl under upload.',
	'begin-translation' => 'Begynd oversættelse',
	'th-original' => 'Original',
	'th-translation' => 'Oversættelse',
	'th-language' => 'Sprog',
	'th-username' => 'Brugernavn',
	'th-password' => 'Adgangskode',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (automatisk upload)',
	'option-manual' => 'Manuel upload',
	'preview' => 'Forhåndsvisning',
	'translate' => 'Oversæt',
	'translate-instructions' => 'Input accepteres som enten filnavne (f.eks " $1 ") eller fuld URL (f.eks" $2 "). Hvis den første mulighed benyttes, antages det, at Wikimedia Commons er kilden. For at oversætte en SVG fra et andet websted eller wiki, skal du skrive den fulde URL.adresse',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette værktøj er blevet brugt til at oversætte ca. $1 filer siden $2.',
	'uploading' => 'Uploader',
	'upload-complete' => 'Upload fuldendt. Billedet burde nu være at finde på $1',
	'editdescriptionpage' => 'Rediger den nye beskrivelsesside',
	'disclaimer' => 'Nogle anonyme data vil blive indsamlet privat for at kunne føre statistik. Hvis det oplyses, vil TUSC-brugernavne også blive registreret til hjælp i tilfælde af hærværk. Adgangskoder vil aldrig blive registreret.',
	'author-complete' => 'Udfyld venligst oplysninger om forfattere!',
	'preview-hide' => 'Skjul forhåndsvisning',
	'preview-refresh' => 'Genopfrisk forhåndsvisning',
	'error-must-accept' => 'For at kunne fortsætte med direkte upload, skal du acceptere brugsvilkårene.',
	'error-tusc-failed' => 'TUSC-godkendelse lykkedes ikke: forkert brugernavn eller adgangskode.',
	'description-license' => 'Vælg beskrivelse og licens',
	'finalise' => 'Færdiggør detaljer',
);

/** German (Deutsch)
 * @author Giftpflanze
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
	'error-must-accept' => 'Um mit einem direkten Upload fortzufahren, musst du die angegebenen Nutzungsbedingungen annehmen.',
	'error-tusc-failed' => 'TUSC-Prüfung fehlgeschlagen: Benutzername oder Passwort fehlerhaft',
	'description-license' => 'Bitte Beschreibung und Lizenz auswählen',
	'finalise' => 'Angaben vervollständigen',
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

/** Spanish (Español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'title' => 'SVG Translate',
	'error-tryagain' => '$1 Pulsa el botón Atrás de tu navegador para volver a intentarlo.',
	'error-nothing' => 'No hay nada que traducir.',
	'error-notsvg' => 'No es un archivo SVG.',
	'error-unexpected' => 'Ocurrió un error inesperado.',
	'error-notfound' => 'No se pudo recuperar el archivo SVG desde la dirección URL proporcionada.',
	'error-upload' => 'Se ha producido un error de carga.',
	'begin-translation' => 'Comenzar traducción',
	'th-original' => 'Original',
	'th-translation' => 'Traducción',
	'th-language' => 'Idioma',
	'th-username' => 'Nombre de usuario',
	'th-password' => 'Contraseña',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (carga automática)',
	'option-manual' => 'Carga manual',
	'preview' => 'Previsualización',
	'translate' => 'Traducir',
	'svginput-label' => 'Archivo SVG',
	'stats-footer' => 'Esta herramienta se ha utilizado para traducir aproximadamente $1 archivos desde $2 .',
	'uploading' => 'Subiendo',
	'upload-complete' => 'La carga ha finalizado correctamente. La imagen debe estar ahora en $1',
	'editdescriptionpage' => 'Editar la nueva página de descripción',
	'author-complete' => '¡Por favor, completa la información del autor!',
	'preview-hide' => 'Ocultar previsualización',
	'preview-refresh' => 'Actualizar previsualización',
	'error-must-accept' => 'Para continuar con una carga directa debes aceptar los términos de uso provistos.',
	'error-tusc-failed' => 'Error de validación de TUSC: nombre de usuario o contraseña incorrectos.',
	'description-license' => 'Selecciona la descripción y licencia',
	'finalise' => 'Finalizar detalles',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'title' => 'SVG Itzulpena',
	'error-tryagain' => '$1 Sakatu zure nabigatzaileko atzera botoia berriz saiatzeko.',
	'error-nothing' => 'Ez dago itzultzeko ezer.',
	'error-notsvg' => 'Ez da SVG fitxategia.',
	'error-unexpected' => 'Ustekabeko errore bat gertatu da.',
	'error-notfound' => 'Ezin izan da SVG fitxategia lortu emandako URL-tik.',
	'error-upload' => 'Igotzerakoan errore bat egon da.',
	'begin-translation' => 'Itzulpena hasi',
	'th-original' => 'Jatorrizkoa',
	'th-translation' => 'Itzulpena',
	'th-language' => 'Hizkuntza',
	'th-username' => 'Erabiltzaile izena',
	'th-password' => 'Pasahitza',
	'th-method' => 'Metodoa',
	'option-tusc' => 'TUSC (igoera automatikoa)',
	'option-manual' => 'Eskuz igo',
	'preview' => 'Aurrebista',
	'translate' => 'Itzuli',
	'translate-instructions' => 'Sarrerak fitxategiaren izen (adib. "$1") edo URL oso (adib. "$2") bezala onartzen dira. Lehen aukera erabiltzen bada, Wikimedia Commonsek jatorri bezala onartuko du. SVG bat itzultzeko beste web edo wiki batetik, url formatu osoa erabili behar duzu.',
	'svginput-label' => 'SVG fitxategia',
	'stats-footer' => 'Tresna honekin gutxi gorabehera $1 fitxategi itzuli dira $2-(e)tik',
	'uploading' => 'Igotzen',
	'upload-complete' => 'Igoera arrakastatsua izan da. Irudiak $1-en egon beharko luke',
	'editdescriptionpage' => 'Deskribapen orri berria aldatu',
	'disclaimer' => 'Datu anonimo batzuk jasoko dira hainbat estatistika egiteko. TUSC erabiltzaile izenak ere gordeak izango dira bandalismo ekintzak ekiditeko. Pasahitzak ez dira inoiz gordeko.',
	'author-complete' => 'Mesedez egilearen informazioa bete!',
	'preview-hide' => 'Aurrebista ezkutatu',
	'preview-refresh' => 'Aurrebista eguneratu',
	'error-must-accept' => 'Zuzeneko igoerarekin jarraitzeko erabilera-baldintzak onartu behar dituzu.',
	'error-tusc-failed' => 'TUSC baieztapenak huts egin du: erabiltzaile izena edo pasahitza ez dira zuzenak.',
	'description-license' => 'Aukeratu deskribapena eta lizentzia',
	'finalise' => 'Xehetasunak amaitu',
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
	'error-must-accept' => 'برای ادامه با یک بارگذاری مستقیم، شما می‌بایست که شرایط استفاده ارائه شده را بپذیرید.',
	'error-tusc-failed' => 'اعتبارسنجی TUSC شکست خورد: نام کاربری و گذرواژه نادرست است.',
	'description-license' => 'توضیحات و مجوز را انتخاب کنید',
	'finalise' => 'نهایی‌سازی جزئیات',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Olli
 */
$messages['fi'] = array(
	'title' => 'SVG-käännin',
	'error-tryagain' => '$1 Yritä uudelleen napsauttamalla selaimen takaisin-painiketta.',
	'error-nothing' => 'Ei käännettävää.',
	'error-notsvg' => 'Tiedosto ei ole SVG-tiedosto.',
	'error-unexpected' => 'Tuntematon virhe tapahtui.',
	'error-notfound' => 'SVG-tiedostoa ei voitu hakea annetusta osoitteesta.',
	'error-upload' => 'Tallennuksessa tapahtui virhe.',
	'begin-translation' => 'Aloita kääntäminen',
	'th-original' => 'Alkuperäinen',
	'th-translation' => 'Käännös',
	'th-language' => 'Kieli',
	'th-username' => 'Käyttäjätunnus',
	'th-password' => 'Salasana',
	'th-method' => 'Tapa',
	'option-tusc' => 'TUSC (automaattinen tallennus)',
	'option-manual' => 'Manuaalinen tallennus',
	'preview' => 'Esikatsele',
	'translate' => 'Käännä',
	'translate-instructions' => 'Voit syöttää joko tiedostonimen (esim. "$1") tai koko osoitteen (esim. "$2"). Jos käytät ensimmäistä vaihtoehtoa, oletetaan, että Wikimedia Commons on lähde. Jos haluat kääntää SVG-tiedoston toiselta sivustolta tai wikistä, sinun täytyy käyttää täydellistä osoitetta.',
	'svginput-label' => 'SVG-tiedosto',
	'stats-footer' => 'Tällä työkalulla on käännetty noin $1 tiedostoa $2 alkaen.',
	'uploading' => 'Tallennetaan',
	'upload-complete' => 'Lataus onnistui. Tiedoston pitäisi löytyä nyt osoitteesta $1',
	'editdescriptionpage' => 'Muokkaa uutta kuvaussivua',
	'disclaimer' => 'Joitakin nimettömiä tietoja kerätään tilastokäyttöön. Annetut TUSC-käyttäjätunnukset tallennetaan häiriköinnin tutkintaa varten. Salasanoja ei koskaan tallenneta.',
	'author-complete' => 'Täytä tekijän tiedot!',
	'preview-hide' => 'Piilota esikatselu',
	'preview-refresh' => 'Päivitä esikatselu',
	'error-must-accept' => 'Jatkaaksesi suoraa latausta sinun täytyy hyväksyä käyttöehdot.',
	'error-tusc-failed' => 'TUSC-tarkistus epäonnistui: käyttäjä tai salasana väärin.',
	'description-license' => 'Valitse kuvaus ja lisenssi',
	'finalise' => 'Viimeistele tiedot',
);

/** French (Français)
 * @author Crochet.david
 * @author IAlex
 * @author Jean-Frédéric
 * @author Sherbrooke
 * @author Verdy p
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
	'th-username' => 'Nom d’utilisateur',
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
	'error-must-accept' => "Pour continuer avec un télévsersement direct, vous devez accepter les conditions d'utilisation prévues.",
	'error-tusc-failed' => "La validation TUSC a échoué : nom d'utilisateur ou mot de passe incorrect.",
	'description-license' => 'Sélectionnez la description et la licence',
	'finalise' => 'Finaliser les détails',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Tradución SVG',
	'error-tryagain' => '$1 Prema no botón "Atrás" do seu navegador para intentalo de novo.',
	'error-nothing' => 'Non hai nada que traducir.',
	'error-notsvg' => 'Non é un ficheiro SVG.',
	'error-unexpected' => 'Houbo un erro inesperado.',
	'error-notfound' => 'Non se puido recuperar o ficheiro SVG desde o enderezo URL proporcionado.',
	'error-upload' => 'Houbo un erro de carga.',
	'begin-translation' => 'Comezar a tradución',
	'th-original' => 'Orixinal',
	'th-translation' => 'Tradución',
	'th-language' => 'Lingua',
	'th-username' => 'Nome de usuario',
	'th-password' => 'Contrasinal',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (carga automática)',
	'option-manual' => 'Carga manual',
	'preview' => 'Vista previa',
	'translate' => 'Traducir',
	'translate-instructions' => 'Acéptanse as entradas como nomes de ficheiro (por exemplo, "$1") ou enderezos URL completos (por exemplo, "$2"). En caso de empregar a primeira opción, a Wikimedia Commons usarase como fonte. Para traducir un SVG desde outro sitio ou wiki, debe utilizar o formato URL completo.',
	'svginput-label' => 'Ficheiro SVG',
	'stats-footer' => 'Esta ferramenta empregouse para traducir aproximadamente $1 ficheiros desde $2.',
	'uploading' => 'Cargando',
	'upload-complete' => 'A carga finalizou correctamente. A imaxe debería estar en $1',
	'editdescriptionpage' => 'Editar a nova páxina de descrición',
	'disclaimer' => 'Recolleranse de xeito privado algúns datos anónimos para fins estatísticos. Se se proporcionaron, os nomes de usuario TUSC tamén se rexistrarán para axudar a combater o vandalismo. Os contrasinais non se gardan en ningún caso.',
	'author-complete' => 'Complete a información do autor!',
	'preview-hide' => 'Agochar a vista previa',
	'preview-refresh' => 'Actualizar a vista previa',
	'error-must-accept' => 'Para continuar a carga directa ten que aceptar as condicións de uso.',
	'error-tusc-failed' => 'Fallou a validación TUSC: nome de usuario ou contrasinal incorrectos.',
	'description-license' => 'Seleccione a descrición e a licenza',
	'finalise' => 'Finalizar os detalles',
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
	'error-upload' => 'שגיאה בהעלאה.',
	'begin-translation' => 'להתחיל לתרגם',
	'th-original' => 'מקור',
	'th-translation' => 'תרגום',
	'th-language' => 'שפה',
	'th-username' => 'שם משתמש',
	'th-password' => 'סיסמה',
	'th-method' => 'שיטה',
	'option-tusc' => 'TUSC (העלאה אוטומטית)',
	'option-manual' => 'העלאה ידנית',
	'preview' => 'תצוגה מקדימה',
	'translate' => 'לתרגם',
	'translate-instructions' => 'אפשר לתת בתור קלט שמות קבצים (למשל "$1") או כתובת מלאות (למשל "$2). במקרה הראשון ההנחה היא שהקובץ נמצא בוויקישיתוף. כדי לתרגם קובץ SVG מאתר אחר, יש לתת כתובת מלאה.',
	'svginput-label' => 'קובץ SVG',
	'stats-footer' => 'הכלי הזה שימש לתרגום של כ־$1 קבצים מאז $2.',
	'uploading' => 'ההעלאה מתבצעת',
	'upload-complete' => 'ההעלאה הושלמה בהצלחה. התמונה אמורה להיות עכשיו בכתובת $1',
	'editdescriptionpage' => 'עריכת דף התיאור החדש',
	'disclaimer' => 'נתונים אלמוניים מסוימים ייאספו באופן פרטי למטרות סטטיסטיקה. אם הם יינתנו, שמות משתמש ב־TUSC יירשמו גם כדי לעזור במקרה של השחתה. ססמאות לא תישמרנה לעולם.',
	'author-complete' => 'נא למלא את כל המידע שלך!',
	'preview-hide' => 'הסתרת תצוגה מקדימה.',
	'preview-refresh' => 'רענון תצוגה מקדימה',
	'error-must-accept' => 'כדי להמשיך עם העלאה ישירה יש לקבל את תנאי השימוש שניתנו.',
	'error-tusc-failed' => 'זיהוי ב־TUSC נכשל: שגיאה בשם משתמש או בססמה.',
	'description-license' => 'נא לבחור תיאור ורישיון',
	'finalise' => 'גימור פרטים',
);

/** Croatian (Hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'title' => 'SVG Prevoditelj',
	'error-tryagain' => '$1 Kliknite na gumb „Nazad“ svog preglednika za ponovni postupak.',
	'error-nothing' => 'Ništa za prevođenje.',
	'error-notsvg' => 'Nije SVG datoteka.',
	'error-unexpected' => 'Pojavila se neočekivana pogreška.',
	'error-notfound' => 'SVG datoteku nije moguće dohvatiti iz URL-a.',
	'error-upload' => 'Došlo je do pogreške pri učitavanju.',
	'begin-translation' => 'Započnite prijevod',
	'th-original' => 'Izvorno',
	'th-translation' => 'Prijevod',
	'th-language' => 'Jezik',
	'th-username' => 'Suradničko ime',
	'th-password' => 'Lozinka',
	'th-method' => 'Način',
	'option-tusc' => 'TUSC (automatsko postavljanje)',
	'option-manual' => 'Ručno postavljanje',
	'preview' => 'Pregled',
	'translate' => 'Prevedi',
	'translate-instructions' => 'Unosi su prihvaćeni kao nazivi datoteka (npr. "$1") ili puni URL (npr."$2"). Ako se rabi prva mogućnost, Zajednički poslužitelj će se pretpostaviti kao izvor. Da biste preveli SVG s druge stranice ili wiki, morate koristiti puni oblik URL-a.',
	'svginput-label' => 'SVG datoteka',
	'stats-footer' => 'Ova alat se rabi za prevođenje približno $1 datoteka od $2.',
	'uploading' => 'Postavljanje',
	'upload-complete' => 'Postavljanje uspješno završeno. Slika bi trebala sada biti na $1',
	'editdescriptionpage' => 'Uredi novu stranicu s opisom',
	'disclaimer' => 'Neki anonimni podaci će se prikupljati u statističke svrhe. Ako je navedeno, TUSC suradnička imena također će biti zapisana kao pomoć u slučaju vandalizma. Lozinke nikada neće biti snimljene.',
	'author-complete' => 'Molimo Vas da popunite informacije o autoru!',
	'preview-hide' => 'Sakrij pregled',
	'preview-refresh' => 'Osvježi pregled',
	'error-must-accept' => 'Da biste nastavili s izravnim postavljanjem morate prihvatiti uvjete uporabe kako su navedeni.',
	'error-tusc-failed' => 'TUSC provijera nije uspijela: suradničko ime ili lozinka su neispravni.',
	'description-license' => 'Odaberite opis i licenciju',
	'finalise' => 'Dovrši detalje',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'title' => 'SVG-fordítás',
	'error-tryagain' => '$1 Kattints a böngésződ vissza gombjára az újrapróbálkozáshoz.',
	'error-nothing' => 'Nincs lefordítandó szöveg.',
	'error-notsvg' => 'Nem SVG-fájl.',
	'error-unexpected' => 'Váratlan hiba történt.',
	'error-notfound' => 'Az SVG-fájlt nem sikerült letölteni megadott URL-címről.',
	'error-upload' => 'Hiba történt a feltöltés közben.',
	'begin-translation' => 'Fordítás indítása',
	'th-original' => 'Eredeti',
	'th-translation' => 'Fordítás',
	'th-language' => 'Nyelv',
	'th-username' => 'Felhasználónév',
	'th-password' => 'Jelszó',
	'th-method' => 'Módszer',
	'option-tusc' => 'TUSC (automatikus feltöltés)',
	'option-manual' => 'Feltöltés kézzel',
	'preview' => 'Előnézet',
	'translate' => 'Fordítás',
	'translate-instructions' => 'A bemenet vagy fájlnév (pl. „$1”) vagy teljes URL (pl. „$2”) legyen. Ha az első formát használod, akkor a Wikimedia Commons lesz a kép forrása. Ha más wikikről szeretnél képeket fordítani, akkor a teljes URL-es formátumot kell használnod.',
	'svginput-label' => 'SVG-fájl',
	'stats-footer' => 'Ezzel az eszközzel körülbelül $1 fájlt vittek át $2 óta.',
	'uploading' => 'Feltöltés',
	'upload-complete' => 'A feltöltés sikeresen befejeződött. A kép a következő címen érhető el: $1',
	'editdescriptionpage' => 'Az új leírólap szerkesztése',
	'disclaimer' => 'Néhány névtelen adat rögzítve lesz statisztikai célok miatt. Ha meg van adva, a TUSC felhasználónév is el lesz tárolva, arra az esetre, ha később vandalizmus merülne fel. A jelszavakat viszont soha nem mentjük el.',
	'author-complete' => 'Kérlek, add meg a szerzővel kapcsolatos információkat!',
	'preview-hide' => 'Előnézet elrejtése',
	'preview-refresh' => 'Előnézet frissítése',
	'error-must-accept' => 'A közvetlen feltöltés folytatásához el kell fogadnod a megadott használati feltételeket.',
	'error-tusc-failed' => 'TUSC érvényesítés nem sikerült: a felhasználónév vagy a jelszó helytelen.',
	'description-license' => 'Leírás és licenc kiválasztása',
	'finalise' => 'Részletek véglegesítése',
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
	'error-must-accept' => 'Pro continuar con un incargamento directe, es necessari acceptar le conditiones de uso pertinente.',
	'error-tusc-failed' => 'Validation TUSC fallite: nomine de usator o contrasigno incorrecte.',
	'description-license' => 'Selige description e licentia',
	'finalise' => 'Finalisar detalios',
);

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 */
$messages['id'] = array(
	'error-tryagain' => '$1 Tekan tombol back browser Anda untuk mencoba lagi.',
	'error-nothing' => 'Tak ada yang diterjemahkan',
	'error-notsvg' => 'Bukan berkas SVG.',
	'error-unexpected' => 'Terjadi kesalahan tak terduga.',
	'error-notfound' => 'Berkas SVG tidak bisa diambil dari URL yang diberikan.',
	'error-upload' => 'Ada kesalahan saat mengunggah.',
	'begin-translation' => 'Mulai terjemahkan',
	'th-original' => 'Asli',
	'th-translation' => 'Terjemahan',
	'th-language' => 'Bahasa',
	'th-username' => 'Nama pengguna',
	'th-password' => 'Kata sandi',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (unggah otomatis)',
	'option-manual' => 'Mengunggah manual',
	'preview' => 'Pratayang',
	'translate' => 'Terjemahkan',
	'translate-instructions' => 'Masukan diterima sebagai salah satu nama file (misalnya "$1") atau URL lengkap (misalnya "$2"). Jika opsi pertama digunakan, Wikimedia Commons akan dianggap sebagai sumber. Untuk menerjemahkan SVG dari situs atau wiki lain, anda harus menggunakan format url lengkap.',
	'svginput-label' => 'Berkas SVG',
	'stats-footer' => 'Alat ini telah digunakan untuk menerjemahkan sekitar $1 files sejak $2 .',
	'uploading' => 'Mengunggah',
	'upload-complete' => 'Pengunggahan selesai dengan sukses. Gambar sekarang harusnya ada di $1',
	'editdescriptionpage' => 'Sunting halaman deskripsi baru',
	'disclaimer' => 'Beberapa data anonim akan secara pribadi dikumpulkan untuk tujuan statistik. Jika disediakan, TUSC nama pengguna juga akan dicatat untuk membantu dalam peristiwa vandalisme. Kata sandi tidak akan disimpan.',
	'author-complete' => 'Mohon lengkapi informasi penulis!',
	'preview-hide' => 'Sembunyikan pratayang',
	'preview-refresh' => 'Perbarui pratayang',
	'error-must-accept' => 'Untuk melanjutkan mengunggah secara langsung, anda harus menerima persyaratan penggunaan yang disediakan.',
	'error-tusc-failed' => 'Validasi TUSC gagal: nama pengguna atau kata sandi salah.',
	'description-license' => 'Pilih deskripsi dan lisensi',
	'finalise' => 'Rincian akhir',
);

/** Ingush (ГІалгІай Ğalğaj)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'th-translation' => 'Торжам',
	'th-language' => 'Мотт',
	'th-username' => 'Дакъалаьцархочунна цIи',
	'th-password' => 'КъайладоагIа',
	'translate' => 'торжам де',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Mpitt
 */
$messages['it'] = array(
	'error-tryagain' => '$1 Premi il pulsante "Indietro" del tuo browser per riprovare.',
	'error-nothing' => 'Niente da tradurre.',
	'error-notsvg' => 'Non è un file SVG.',
	'error-unexpected' => 'Si è verificato un errore imprevisto.',
	'error-notfound' => "Il file SVG non può essere recuperato dall'URL fornito.",
	'error-upload' => 'Si è verificato un errore nel caricamento.',
	'begin-translation' => 'Comincia a tradurre',
	'th-original' => 'Originale',
	'th-translation' => 'Traduzione',
	'th-language' => 'Lingua',
	'th-username' => 'Nome utente',
	'th-password' => 'Password',
	'th-method' => 'Metodo',
	'option-tusc' => 'TUSC (caricamento automatico)',
	'option-manual' => 'Caricamento manuale',
	'preview' => 'Anteprima',
	'translate' => 'Traduci',
	'translate-instructions' => 'Gli input sono accettati sia come nomi di file (per esempio " $1 ") che come URL completi (ad esempio" $2 "). Se la prima opzione viene utilizzata, si assume che la fonte sia Wikimedia Commons. Per tradurre un SVG da un altro sito o wiki, è necessario utilizzare l\'URL completo.',
	'svginput-label' => 'File in formato SVG',
	'stats-footer' => 'Questo strumento è stato utilizzato per tradurre circa $1 file dal $2 .',
	'uploading' => 'Caricamento in corso',
	'upload-complete' => "Upload completato con successo. L'immagine dovrebbe essere all'indirizzo $1",
	'editdescriptionpage' => 'Modificare la nuova pagina di descrizione',
	'disclaimer' => 'Alcuni dati anonimi saranno privatamente raccolti per fini statistici. Inoltre gli username TUSC, se forniti, saranno memorizzati per eventuali casi di vandalismo. Le password non verranno mai memorizzate.',
	'author-complete' => "Completare le informazioni sull'autore!",
	'preview-hide' => 'Nascondi anteprima',
	'preview-refresh' => 'Aggiorna anteprima',
	'error-must-accept' => "Per continuare con un upload diretto è necessario accettare i termini d'uso.",
	'error-tusc-failed' => 'Convalida TUSC fallita: username o password non corretti.',
	'description-license' => 'Selezionare la descrizione e la licenza',
	'finalise' => 'Finalizza i dettagli',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 */
$messages['ja'] = array(
	'th-original' => 'オリジナル',
	'th-translation' => '翻訳',
	'th-language' => '言語',
	'th-password' => 'パスワード',
	'th-method' => 'メソッド',
	'option-tusc' => 'TUSC (自動アップロード)',
	'option-manual' => '手動アップロード',
	'preview' => 'プレビュー',
	'translate' => '翻訳',
	'svginput-label' => 'SVGファイル',
	'uploading' => 'アップロード中',
	'editdescriptionpage' => '新しい説明ページを編集',
	'author-complete' => '著者についての情報を記入してください ！',
	'preview-hide' => 'プレビューを隠す',
	'preview-refresh' => 'プレビューを更新',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'title' => 'SVG បកប្រែ',
	'error-tryagain' => '$1 ចុចប៊ូតុងត្រលប់ក្រោយរបស់ឧបករណ៍រាវរករបស់អ្នក ដើម្បីព្យាយាមម្ដងទៀត។',
	'error-nothing' => 'គ្មានអ្វីត្រូវបកប្រែ។',
	'error-notsvg' => 'មិនមែនជាឯកសារប្រភេទ SVG។',
	'error-unexpected' => 'មានបញ្ហាមិនបានព្រាងទុកមួយកើតឡើង។',
	'error-notfound' => 'ឯកសារSVGនេះមិនអាចទាញយកបានពីURLដែលបានផ្ដល់អោយទេ។',
	'error-upload' => 'មានបញ្ហាក្នុងការផ្ទុកឡើង។',
	'begin-translation' => 'ចាប់ផ្ដើមបកប្រែ',
	'th-original' => 'ដើម',
	'th-translation' => 'ការបកប្រែ',
	'th-language' => 'ភាសា',
	'th-username' => 'អត្តនាម',
	'th-password' => 'ពាក្យសំងាត់',
	'th-method' => 'វិធី',
	'option-tusc' => 'TUSC (ផ្ទុកឡើងដោយស្វ័យប្រវត្តិ)',
	'option-manual' => 'ផ្ទុកឡើងដោយដៃ',
	'preview' => 'ការមើលមុន',
	'translate' => 'បកប្រែ',
	'svginput-label' => 'ឯកសារSVG',
	'stats-footer' => 'ឧបករណ៍នេះត្រូវបានប្រើសំរាប់បកប្រែឯកសារចំនួនប្រហែល $1 ​តាំងពី $2។',
	'uploading' => 'កំពុង​ផ្ទុកឡើង​',
	'upload-complete' => 'ការផ្ទុកឡើងសំរេចជាស្ថាពរ។ ពេលនេះ រូបភាពនេះគួរតែមាននៅ$1',
	'editdescriptionpage' => 'កែប្រែទំព័រពណ៌នាថ្មី',
	'disclaimer' => 'ទិន្នន័យខ្លះនឹងត្រូវបានប្រមូលទុកសំរាប់គោលបំណងខាងស្ថិតិ។ បើត្រូវបានផ្ដល់អោយ នោះអត្តនាម TUSC នឹងត្រូវបានកត់ត្រាទុកសំរាប់ការពារអំពើបំផ្លិចបំផ្លាញ​ជាសាធារណៈណាមួយ។ ពាក្យសំងាត់នឹងមិនត្រូវបានកត់ត្រាទុកជាដាច់ខាត។',
	'author-complete' => 'សូមបំពេញព័ត៌មានអ្នកនិពន្ធ!',
	'preview-hide' => 'លាក់ការមើលមុន',
	'preview-refresh' => 'ផ្ទុកការមើលមុនឡើងវិញ',
	'error-must-accept' => 'ដើម្បីបន្តដោយការផ្ទុកឡើងដោយផ្ទាល់ អ្នកត្រូវតែយល់ព្រមជាមួយនឹងល័ក្ខខ័ណ្ឌនៃការប្រើប្រាស់​ដែលបានផ្ដល់អោយ។',
	'error-tusc-failed' => 'សុពលកម្ម TUSC បរាជ័យ៖ អត្តនាមឬពាក្យសំងាត់មិនត្រឹមត្រូវ។',
	'description-license' => 'ជ្រើសរើសការពណ៌នានិងនិងអាជ្ញាបណ្ឌ។',
	'finalise' => 'ព័ត៌មានលំអិតចុងក្រោយ',
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
	'error-upload' => 'Beim Huhlaade es ene Fähler opjetrodde.',
	'begin-translation' => 'Mem Övversäze aanfange',
	'th-original' => 'Ojinahl',
	'th-translation' => 'Övversäzong',
	'th-language' => 'Shprooch',
	'th-username' => 'Metmaacher Name',
	'th-password' => 'Paßwoot',
	'th-method' => 'Metood',
	'option-tusc' => '<i lang="en">TUSC</i> (automattesch Huhlaade)',
	'option-manual' => 'vun Hand huhlaade',
	'preview' => 'Vör-Aansich zeije',
	'translate' => 'Övversäze',
	'translate-instructions' => 'Enjangsdateije kam_mer met dänne iehr Name aanjävve (för e Beishpell „<code lang="en">$1</code>“) udder med enem kumplätte <i lang="en">URL</i> (för e Beishpell „<code lang="en">$2</code>“). Em eezde Fall looere mer op <i lang="en">Wikimedia Commons</i> donoh. Em zweite Fall kam_mer en <i lang="en">SVG</i>-Dattei fun ene ander ẞait udder uss_enem andere Wiki övversäze.',
	'svginput-label' => 'De <i lang="en">SVG</i>-Dattei',
	'stats-footer' => 'Heh dat Projramm es jebruch woode, öm ätwa {{PLURAL:$1|ein Dattei|$1 Datteije|noll Datteije}} zick $2 ze övversäze.',
	'uploading' => 'Aam Huhlaade',
	'upload-complete' => 'Dat Huhlaade hät jeflupp, un dat Beld sullt jäz onger „$1“ shtonn.',
	'editdescriptionpage' => 'Donn di Sigg övver dat Beld op der neue Shtand bränge!',
	'disclaimer' => 'E paa Daate wääde för de Shtatistik faßjehallde, ävver nit öffentlesch jemaat, un se donn sesch och ob keine beschtemmpte Metmaacher beträcke. Wann se aanjejovve sin, wääde em <i lang="en">TUSC</i> sing Metmaachername faßjehallde, öm ze hällefe, falls ens Eine jät kapott jemaat hät. Paßwööter wääde nimohls faßjehallde.',
	'author-complete' => 'Bes esu joot, un donn de Aanjabe övver der Maacher vum Beld kumplätt maaache!',
	'preview-hide' => 'Vör-Aansesch verschteische',
	'preview-refresh' => 'Donn de Vör-Aansesch op der neue Shtand bränge!',
	'error-must-accept' => 'Öm med em tiräk Huhlaade wiggger ze maache. moß De dä Bedengonge för der Jebruch zohshtemme.',
	'error-tusc-failed' => 'Dem <i lang="en">TUSC</i> sing Övverprööfung es donävve jejange: Dä Name als Metmaacher udder et Paßwoot hät nit jeshtemmp.',
	'description-license' => 'Donn  en Lizänz ußwähle',
	'finalise' => 'Donn de Einzelheite kumplätt maache',
);

/** Kurdish (Latin script) (‪Kurdî (latînî)‬)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'th-translation' => 'Wergerr',
	'th-language' => 'Ziman',
	'th-username' => 'Navê bikarhêner',
	'th-password' => 'Şîfre',
	'preview' => 'Pêşdîtin',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'th-language' => 'Lingua',
	'translate' => 'Transducere',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'SVG Iwwersetzen',
	'error-tryagain' => "$1 Klickt op den 'Zréck'-Knäppche vun Ärem Browser fir nach emol ze probéieren.",
	'error-nothing' => "Näischt fir z'iwwersetzen.",
	'error-notsvg' => 'Keen SVG-Fichier.',
	'error-unexpected' => 'En onerwaarte Feeler ass geschitt.',
	'error-notfound' => 'Den SVG-Fichier konnt op der URL, déi ugi war, net fonnt ginn.',
	'error-upload' => 'Et gouf e Feeler beim Eroplueden.',
	'begin-translation' => 'Iwwersetzung ufänken',
	'th-original' => 'Original',
	'th-translation' => 'Iwwersetzung',
	'th-language' => 'Sprooch',
	'th-username' => 'Benotzernumm',
	'th-password' => 'Passwuert',
	'th-method' => 'Method',
	'option-tusc' => 'TUSC (automatesch Eroplueden)',
	'option-manual' => 'Manuell Eroplueden',
	'preview' => 'Weisen ouni ze späicheren',
	'translate' => 'Iwwersetzen',
	'svginput-label' => 'SVG-Fichier',
	'stats-footer' => "Dësen Tool gouf zënter dem $2 benotzt fir ongeféier $1 Fichieren z'iwwersetzen.",
	'uploading' => 'Eroplueden',
	'upload-complete' => "D'Eroplueden huet fonctionnéiert. D'Bild misst elo op $1 sinn",
	'editdescriptionpage' => 'Déi nei Beschreiwungssäit änneren',
	'disclaimer' => "E puer anonym Donnéeë gi fir statistesch Zwecker gesammelt. Wann dir en TUSC Benotzernumm ugitt, gëtt deen och gespäichert fir am Fall vu Vandalismus d'Recherchen ze vereinfachen. Passwierder ginn ni gespäichert.",
	'author-complete' => "Kompletéiert w.e.g. d'Informatiounen iwwer den Auteur!",
	'preview-hide' => 'Preview verstoppen',
	'preview-refresh' => 'Preview aktualiséieren',
	'error-must-accept' => "Fir mam direkten Eropluede virunzefuere musst Dir d'Conditioune vum Benotzen akzeptéieren.",
	'description-license' => 'Beschreiwung a Lizenz eraussichen',
	'finalise' => 'Detailer kompletéieren',
);

/** Lezghian (Лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'th-language' => 'Чlалар',
	'th-password' => 'Куьлег',
);

/** Lithuanian (Lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'title' => 'SVG vertimas',
	'error-tryagain' => '$1 Paspauskite naršyklės perkrovimo mygtuką ir bandykite dar kartą.',
	'error-nothing' => 'Nėra, ko versti.',
	'error-notsvg' => 'Tai nėra SVG failas.',
	'error-unexpected' => 'Įvyko netikėta klaida.',
	'error-notfound' => 'SVG failas negali būti gautas iš nurodyto adreso.',
	'error-upload' => 'Įvyko klaida įkeliant.',
	'begin-translation' => 'Pradėti vertimą',
	'th-original' => 'Originalas',
	'th-translation' => 'Vertimas',
	'th-language' => 'Kalba',
	'th-username' => 'Vartotojo vardas',
	'th-password' => 'Slaptažodis',
	'th-method' => 'Metodas',
	'option-tusc' => 'TUSC (automatinis įkėlimas)',
	'option-manual' => 'Rankinis įkėlimas',
	'preview' => 'Peržiūra',
	'translate' => 'Versti',
	'translate-instructions' => 'Galite įvesti failo pavadinimą (pvz., "$1") ar pilną adresą (pvz., "$2"). Jei pirmasis variantas yra naudojamas, šaltiniu bus laikoma Wikimedia Commons. Norėdami versti iš kitos svetainės ar wiki, turite naudoti pilno adreso formatą.',
	'svginput-label' => 'SVG failas',
	'stats-footer' => 'Ši priemonė buvo naudojama išversti maždaug $1 failų nuo $2.',
	'uploading' => 'Įkeliama',
	'upload-complete' => 'Sėkmingai įkelta. Paveikslėlis dabar turėtų būti šiuo adresu: $1',
	'editdescriptionpage' => 'Redaguoti naują aprašymo puslapį',
	'disclaimer' => 'Kai kurie anoniminiai duomenys bus privačiai renkami statistikos tikslais. Jei pateikėte, TUSC vardai taip pat bus registruojami dėl galimo vandalizmo. Slaptažodžiai niekada nebus įrašyti.',
	'author-complete' => 'Prašome užpildyti autoriaus informaciją!',
	'preview-hide' => 'Slėpti peržiūrą',
	'preview-refresh' => 'Atnaujinti peržiūrą',
);

/** Latvian (Latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'th-username' => 'Lietotājvārds',
	'th-password' => 'Parole',
	'th-method' => 'Metode',
	'svginput-label' => 'SVG fails',
	'uploading' => 'Augšupielādē',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Преведување на SVG',
	'error-tryagain' => '$1 Обидете се повторно со копчето „Назад“ на  вашиот прелистувач.',
	'error-nothing' => 'Нема ништо за преведување.',
	'error-notsvg' => 'Ова не е SVG-податотека.',
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
	'translate' => 'Преведување',
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
	'error-must-accept' => 'За да продолжите со непосредното подигање, ќе мора најпрвин да ги прифатите наведените услови на користење.',
	'error-tusc-failed' => 'Заверката на TUSC не успеа: погрешно корисничко име или лозинка.',
	'description-license' => 'Изберете опис и лиценца',
	'finalise' => 'Довршете ги податоците',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'title' => 'എസ്.വി.ജി. പരിഭാഷ',
	'error-tryagain' => '$1 വീണ്ടും ശ്രമിക്കാൻ ബ്രൗസറിന്റെ ബാക്ക് ബട്ടൺ അമർത്തുക.',
	'error-nothing' => 'പരിഭാഷപ്പെടുത്താൻ ഒന്നുമില്ല.',
	'error-notsvg' => 'എസ്.വി.ജി. പ്രമാണം അല്ല.',
	'error-unexpected' => 'അപ്രതീക്ഷിതമായ പിഴവ് ഉണ്ടായി.',
	'error-notfound' => 'നൽകിയ യൂ.ആർ.എല്ലിൽ നിന്നും എസ്.വി.ജി. പ്രമാണം എടുക്കാൻ കഴിഞ്ഞില്ല.',
	'error-upload' => 'അപ്‌ലോഡ് ചെയ്തതിൽ ഒരു പിഴവുണ്ടായി.',
	'begin-translation' => 'പരിഭാഷ തുടങ്ങുക',
	'th-original' => 'മൂലം',
	'th-translation' => 'പരിഭാഷ',
	'th-language' => 'ഭാഷ',
	'th-username' => 'ഉപയോക്തൃനാമം',
	'th-password' => 'രഹസ്യവാക്ക്',
	'th-method' => 'മാർഗ്ഗം',
	'option-tusc' => 'റ്റി.യു.എസ്.സി. (സ്വയം പ്രവർത്തിത അപ്‌ലോഡ്)',
	'option-manual' => 'നമ്മൾ ചെയ്യേണ്ട അപ്‌ലോഡ്',
	'preview' => 'എങ്ങനെയുണ്ടെന്നു കാണുക',
	'translate' => 'പരിഭാഷപ്പെടുത്തുക',
	'translate-instructions' => 'പ്രമാണത്തിന്റെ പേരായോ (ഉദാ: "$1") പൂർണ്ണ യൂ.ആർ.എൽ.(ഉദാ: "$2") ആയോ നൽകാവുന്നതാണ്. ആദ്യത്തെ ഐച്ഛികമാണ് ഉപയോഗിക്കുന്നതെങ്കിൽ, സ്രോതസ്സായി വിക്കിമീഡിയ കോമൺസിനെ ഉപയോഗിക്കുന്നതാണ്. മറ്റൊരു സൈറ്റിലേയോ വിക്കിയിലേയോ എസ്.വി.ജി. പരിഭാഷപ്പെടുത്താൻ പൂർണ്ണ യൂ.ആർ.എൽ. നൽകേണ്ടതാണ്.',
	'svginput-label' => 'എസ്.വി.ജി. പ്രമാണം',
	'stats-footer' => '$2 മുതലുള്ള കണക്കെടുത്താൽ ഈ ഉപകരണം ഏകദേശം $1 പ്രമാണങ്ങൾ പരിഭാഷപ്പെടുത്താൻ ഉപയോഗിച്ചിട്ടുണ്ട്.',
	'uploading' => 'അപ്‌ലോഡ് ചെയ്യുന്നു',
	'upload-complete' => 'അപ്‌ലോഡ് വിജയകരമായി പൂർത്തിയായി. ചിത്രം ഇപ്പോൾ $1 എന്ന വിലാസത്തിൽ ലഭ്യമാണ്.',
	'editdescriptionpage' => 'പുതിയ വിവരണ താൾ തിരുത്തുക',
	'disclaimer' => 'ആളെ തിരിച്ചറിയാനാകാത്ത വിധത്തിൽ ചില വിവരങ്ങൾ സ്ഥിതിവിവരോപയോഗങ്ങൾക്കായി സ്വകാര്യമായി ശേഖരിക്കുന്നുണ്ട്. നൽകിയിട്ടുണ്ടെങ്കിൽ, റ്റി.യു.എസ്.സി. അംഗത്വനാമം നശീകരണപ്രവർത്തനം നേരിടാനുള്ള മാർഗ്ഗമായി ശേഖരിക്കുന്നതാണ്. രഹസ്യവാക്ക് ഒരു കാരണവശാലും ശേഖരിക്കില്ല.',
	'author-complete' => 'ദയവായി രചയിതാവിന്റെ വിവരങ്ങൾ പൂർത്തീകരിക്കുക!',
	'preview-hide' => 'പ്രിവ്യൂ മറയ്ക്കുക',
	'preview-refresh' => 'പ്രിവ്യൂ പുതുക്കുക',
	'error-must-accept' => 'നേരിട്ടുള്ള അപ്‌ലോഡ് തുടരാൻ നൽകിയിരിക്കുന്ന ഉപയോഗനിബന്ധനകൾ താങ്കൾ അംഗീകരിക്കേണ്ടതാണ്.',
	'error-tusc-failed' => 'റ്റി.യു.എസ്.സി. പരിശോധന പരാജയം: ഉപയോക്തൃനാമമോ രഹസ്യവാക്കോ തെറ്റാണ്.',
	'description-license' => 'വിവരണവും അനുവാദപത്രവും തിരഞ്ഞെടുക്കുക',
	'finalise' => 'വിവരങ്ങളുടെ അന്തിമരൂപം തയ്യാറാക്കുക',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'Penterjemahan SVG',
	'error-tryagain' => '$1 Tekan butang "←" (back) pelayar anda untuk mencuba semula.',
	'error-nothing' => 'Tiada apa untuk diterjemahkan.',
	'error-notsvg' => 'Bukan fail SVG.',
	'error-unexpected' => 'Berlakunya ralat luar jangkaan.',
	'error-notfound' => 'Fail SVG tidak dapat diambil daripada URL yang diberikan.',
	'error-upload' => 'Ralat dialami ketika memuat naik.',
	'begin-translation' => 'Mulakan penterjemahan',
	'th-original' => 'Asal',
	'th-translation' => 'Terjemahan',
	'th-language' => 'Bahasa',
	'th-username' => 'Nama pengguna',
	'th-password' => 'Kata laluan',
	'th-method' => 'Kaedah',
	'option-tusc' => 'TUSC (muat naik automatik)',
	'option-manual' => 'Muat naik manual',
	'preview' => 'Pralihat',
	'translate' => 'Terjemah',
	'translate-instructions' => 'Input diterima dalam bentuk nama fail (cth. "$1") atau URL penuh (cth. "$2"). Jika pilihan pertama digunakan, Wikimedia Commons akan dianggap sebagai sumbernya. Untuk menterjemahkan SVG dari tapak web atau wiki yang lain, anda mesti menggunakan format URL penuh.',
	'svginput-label' => 'Fail SVG',
	'stats-footer' => 'Alat ini telah digunakan untuk menterjemah kira-kira $1 fail sejak $2.',
	'uploading' => 'Sedang memuat naik',
	'upload-complete' => 'Muat naik berjaya disiapkan. Imej anda sepatutnya berada di $1',
	'editdescriptionpage' => 'Sunting laman penerangan baru',
	'disclaimer' => 'Sesetengah data tanpa nama akan dihimpunkan secara peribadi untuk tujuan statistik. Jika disediakan, nama pengguna TUSC juga akan dicatatkan sebagai bantuan sekiranya terjadi laku musnah. Kata laluan tidak akan dicatatkan sekali pun.',
	'author-complete' => 'Tolong lengkapkan maklumat pengarang!',
	'preview-hide' => 'Sorokkan pralihat',
	'preview-refresh' => 'Muat semula pralihat',
	'error-must-accept' => 'Untuk meneruskan muat naik terus, anda mesti menerima terma-terma penggunaan yang dinyatakan.',
	'error-tusc-failed' => 'Pengesahan TUSC gagal: nama pengguna atau kata laluan tidak betul.',
	'description-license' => 'Pilih keterangan dan lesen',
	'finalise' => 'Muktamadkan butiran',
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

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'th-language' => 'زوون',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'title' => 'एस भी जी अनुवाद गर्ने',
	'error-tryagain' => '$1 पुनः प्रयास गर्न ब्राउजरको  back बटनमा थिच्नुहोस्।',
	'error-nothing' => 'अनुवाद गर्नु पर्ने केहि छैन।',
	'error-notsvg' => 'यो एस भी जी फाइल होइन।',
	'error-unexpected' => 'एउटा अप्रत्यसित त्रुटि भएको छ।',
	'error-notfound' => 'दिइएको URLबाट SVG फाइल पाइएन।',
	'error-upload' => 'उर्ध्वभरण(uploading)मा त्रुटि भयो।',
	'begin-translation' => 'अनुवाद सुरु गर्ने',
	'th-original' => 'मूल',
	'th-translation' => 'अनुवाद',
	'th-language' => 'भाषा',
	'th-username' => 'प्रयोगकर्ता-नाम',
	'th-password' => 'पासवर्ड',
	'th-method' => 'विधि',
	'option-tusc' => 'TUSC (स्वतः उर्ध्वभरण)',
	'option-manual' => 'हातद्वारा उर्ध्वभरण',
	'preview' => 'पूर्वावलोकन',
	'translate' => 'अनुवाद गर्ने',
	'svginput-label' => 'SVG फाइल',
	'stats-footer' => '$2देखि लगभग $1 फाइलहरुको अनुवादमा यस औजारको प्रयोग गरियो।',
	'uploading' => 'उर्ध्वभरण गरिँदै',
	'upload-complete' => 'उर्ध्वभरण सफलता पूर्वक सम्पन्न भयो। चित्र अहिले  $1मा हुनुपर्छ।',
	'editdescriptionpage' => 'नयाँ विवरण पृष्ठ सम्पादन गर्ने',
	'author-complete' => 'कृपया रचयिता जानकारी पूरा गर्नुहोस्!',
	'preview-hide' => 'पूर्वावलोकन लुकाउने',
	'preview-refresh' => 'पूर्वावलोकन ताजा पार्ने',
	'error-must-accept' => 'प्रत्यक्ष उर्ध्वभरण अघि बढाउन तपाईंले दिइएका प्रयोग शर्तहरु स्वीकार गर्नुपर्छ।',
	'error-tusc-failed' => 'TUSC सत्यापन असफल: प्रयोगकर्ता नाम अथवा पासवर्डमा त्रुटि।',
	'description-license' => 'विवरण र लाइसेन्स चुन्ने',
	'finalise' => 'विवरणहरुलाई अन्तिम रुप दिने',
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
	'error-must-accept' => 'Om door te gaan met een directe upload, moet u akkoord gaan met de voorwaarden voor gebruik.',
	'error-tusc-failed' => 'De TUSC-validatie is mislukt. De gebruikersnaam of het wachtwoord is onjuist.',
	'description-license' => 'Selecteer beschrijving en licentie',
	'finalise' => 'Rond de details af',
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
	'error-upload' => 'Det oppsto en feil under opplasting.',
	'begin-translation' => 'Begynn oversettelsen',
	'th-original' => 'Original',
	'th-translation' => 'Oversettelse',
	'th-language' => 'Språk',
	'th-username' => 'Brukernavn',
	'th-password' => 'Passord',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (automatisk opplasting)',
	'option-manual' => 'Manuell opplasting',
	'preview' => 'Forhåndsvisning',
	'translate' => 'Oversett',
	'translate-instructions' => 'Innputt godtas enten som filnavn (f.eks. «$1») eller fullstendige adresser (f.eks. «$2»). Om den første muligheten brukes vil Wikimedia Commons antas som kilde. For å oversette en SVG-fil fra et annet nettsted eller en annen wiki må du bruke den fullstendige adressen.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette verktøyet har blitt brukt for å oversette omtrent $1 filer siden $2.',
	'uploading' => 'Opplasting',
	'upload-complete' => 'Opplastingen er fullført. Bildet bør nå være på $1',
	'editdescriptionpage' => 'Endre den nye beskrivelsessiden',
	'disclaimer' => 'Enkelte anonyme data vil samles inn privat for statistiske formål. Hvis oppgitt vil også TUSC-brukernavn bli registrert for å bistå i tilfelle hærverk. Passord vil aldri bli registrert.',
	'author-complete' => 'Fyll ut forfatterinformasjonen!',
	'preview-hide' => 'Skjul forhåndsvisning',
	'preview-refresh' => 'Oppdater forhåndsvisning',
	'error-must-accept' => 'For å fortsette med en direkte opplasting må du godta de oppgitte bruksvilkårene.',
	'error-tusc-failed' => 'TUSC-validering feilet: feil brukernavn eller passord.',
	'description-license' => 'Velg beskrivelse og lisens',
	'finalise' => 'Ferdigstill detaljer',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'th-translation' => 'Iwwersetzing',
	'th-language' => 'Schprooch',
	'th-username' => 'Yuuser-Naame',
	'th-password' => 'Paesswatt',
	'preview' => 'Aasicht',
	'svginput-label' => 'SVG-Feil',
	'uploading' => 'Am ufflaade…',
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
	'error-upload' => 'Wystąpił błąd podczas przesyłania.',
	'begin-translation' => 'Rozpocznij tłumaczenie',
	'th-original' => 'Oryginał',
	'th-translation' => 'Tłumaczenie',
	'th-language' => 'Język',
	'th-username' => 'Nazwa użytkownika',
	'th-password' => 'Hasło',
	'th-method' => 'Metoda',
	'option-tusc' => 'TUSC (automatyczne przesyłanie)',
	'option-manual' => 'Przesyłanie ręczne',
	'preview' => 'Podgląd',
	'translate' => 'Tłumacz',
	'translate-instructions' => 'Plik można wybrać na dwa sposoby – podać nazwę pliku (np. „$1”) lub pełny adres URL (np. „$2”). W przypadku pierwszej metody przyjmuje się, że źródłem jest Wikimedia Commons. Aby przetłumaczyć SVG z innej strony lub wiki musisz użyć pełnego adresu URL.',
	'svginput-label' => 'Plik SVG',
	'stats-footer' => 'To narzędzie zostało użyte do przetłumaczenia około $1 plików od $2.',
	'uploading' => 'Przesyłanie',
	'upload-complete' => 'Przesyłanie powiodło się. Grafika powinna być na stronie $1',
	'editdescriptionpage' => 'Edytuj nową stronę opisu',
	'disclaimer' => 'Niektóre anonimowe dane będą gromadzone dla celów statystycznych. Jeśli podano nazwa użytkownika TUSC zostanie zapisana na potrzeby walki z wandalizmami. Hasła nigdy nie będą rejestrowane.',
	'author-complete' => 'Uzupełnij informacje o autorze',
	'preview-hide' => 'Ukryj podgląd',
	'preview-refresh' => 'Odśwież podgląd',
	'error-must-accept' => 'Kontynuowanie bezpośredniego przesyłania wymaga zaakceptowania warunków korzystania z usługi.',
	'error-tusc-failed' => 'TUSC – nieudana weryfikacja użytkownika – nazwa użytkownika lub hasło są nieprawidłowe.',
	'description-license' => 'Wybierz opis i licencję',
	'finalise' => 'Zapisz szczegóły',
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
	'th-username' => 'کارن-نوم',
	'th-password' => 'پټنوم',
	'preview' => 'مخليدنه',
	'translate' => 'ژباړل',
	'svginput-label' => 'د SVG دوتنه',
	'uploading' => 'د برسېرېدلو په حال کې...',
	'preview-hide' => 'مخليدنه پټول',
);

/** Portuguese (Português)
 * @author Giro720
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'error-notsvg' => 'Não é um ficheiro SVG.',
	'error-unexpected' => 'Ocorreu um erro inesperado.',
	'error-notfound' => 'Não foi possível obter o ficheiro SVG na URL fornecida.',
	'begin-translation' => 'Começar a tradução',
	'th-original' => 'Original',
	'th-translation' => 'Tradução',
	'th-language' => 'Língua',
	'th-username' => 'Nome de utilizador',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (upload automático)',
	'option-manual' => 'Upload manual',
	'preview' => 'Antevisão',
	'translate' => 'Traduzir',
	'svginput-label' => 'Ficheiro SVG',
	'stats-footer' => 'Esta ferramenta foi usada para traduzir aproximadamente {{PLURAL:$1|um ficheiro|$1 ficheiros}} desde $2.',
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
	'error-upload' => 'A apărut o eroare în timpul încărcării.',
	'begin-translation' => 'Începeți traducerea',
	'th-original' => 'Original',
	'th-translation' => 'Traducere',
	'th-language' => 'Limbă',
	'th-username' => 'Nume de utilizator',
	'th-password' => 'Parolă',
	'th-method' => 'Metodă',
	'option-tusc' => 'TUSC (încărcare automată)',
	'option-manual' => 'Încărcare manuală',
	'preview' => 'Previzualizare',
	'translate' => 'Traducere',
	'translate-instructions' => 'Datele de intrare pot reprezenta fie nume de fișiere (ex.: „$1”), fie adrese URL complete (ex.: „$2”). Dacă se recurge la prima variantă, sursa asumată a fișierelor va fi Wikimedia Commons. Pentru a traduce un fișier SVG aflat pe alt site sau wiki, trebuie să introduceți adresa URL completă.',
	'svginput-label' => 'fișier SVG',
	'stats-footer' => 'Această unealtă a fost folosită la traducerea a aproximativ $1 fișiere, încă din $2.',
	'uploading' => 'Se încarcă',
	'upload-complete' => 'Încărcarea s-a finalizat cu succes. Imaginea ar trebui să se găsească la $1',
	'editdescriptionpage' => 'Modificați noua pagină descriptivă',
	'disclaimer' => 'Câteva informații anonime vor fi colectate în mod privat pentru statistici. Dacă sunt furnizate, numele de utilizator TUSC vor fi de asemenea contabilizate pentru ajutor în caz de vandalism. Parolele nu vor fi niciodată reținute.',
	'author-complete' => 'Vă rugăm să completați informațiile despre autor!',
	'preview-hide' => 'Ascunde previzualizarea',
	'preview-refresh' => 'Reîncarcă previzualizarea',
	'error-must-accept' => 'Pentru a continua cu încărcarea directă, trebuie să fiți de acord cu termenii de utilizare furnizați.',
	'error-tusc-failed' => 'Validarea TUSC a eșuat: nume de utilizator sau parolă incorecte.',
	'description-license' => 'Selectați descrierea și licența',
	'finalise' => 'Finalizează detaliile',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title' => "Traduzione de l'SVG",
	'error-tryagain' => "$1 Cazze 'u buttone d'u browser tune rrete pe pruvà 'n'otra vote.",
	'error-nothing' => 'Ninde da traducere.',
	'error-notsvg' => "Non g'è 'nu file SVG.",
	'error-unexpected' => "'N'errore inaspettate s'a verificate.",
	'error-notfound' => "'U file SVG non ge se pò pigghià da l'URL specificate.",
	'error-upload' => "S'a verificate 'n'errore sus a 'u carecamende.",
	'begin-translation' => "Accuminze 'a traduzione",
	'th-original' => 'Origgenale',
	'th-translation' => 'Traduzione',
	'th-language' => 'Lènghe',
	'th-username' => 'Nome utende',
	'th-password' => 'Passuord',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (carecamende automateche)',
	'option-manual' => 'Carecamende a màne',
	'preview' => 'Andeprime',
	'translate' => 'Traduce',
	'svginput-label' => 'File SVG',
	'stats-footer' => 'Stu strumende avène ausate pe traducere approssimativamende $1 file da $2.',
	'uploading' => 'Stoche a careche',
	'upload-complete' => "'U carecamende ha state fatte. L'immaggine avessa stà sus a $1",
	'editdescriptionpage' => "Cange 'a pàgena nove d'a descrizione",
	'author-complete' => "Pe piacere comblete le 'mbormaziune de l'autore!",
	'preview-hide' => "Scunne l'andeprime",
	'preview-refresh' => "Aggiorne l'andeprime",
	'error-must-accept' => "Pe condinuà cu 'nu carecamende dirette tu a accettà le termine de l'ause previste.",
	'error-tusc-failed' => 'Validazione TUSC fallite: Nome utende o passuord non ge sonde corrette.',
	'description-license' => 'Scacchie descrizione e licenze',
	'finalise' => 'Finalizze le dettaglie',
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'title' => 'Перевод SVG',
	'error-tryagain' => '$1 Нажмите в вашем браузере «Назад» для повторения.',
	'error-nothing' => 'Нечего переводить.',
	'error-notsvg' => 'Это не SVG-файл.',
	'error-unexpected' => 'Произошла непредвиденная ошибка.',
	'error-notfound' => 'Не удалось получить SVG-файл по указанному адресу.',
	'error-upload' => 'Произошла ошибка при загрузке.',
	'begin-translation' => 'Начало перевода',
	'th-original' => 'Исходный текст',
	'th-translation' => 'Перевод',
	'th-language' => 'Язык',
	'th-username' => 'Имя участника',
	'th-password' => 'Пароль',
	'th-method' => 'Способ',
	'option-tusc' => 'TUSC (автоматическая загрузка)',
	'option-manual' => 'Ручная загрузка',
	'preview' => 'Предпросмотр',
	'translate' => 'Перевести',
	'translate-instructions' => 'Укажите имя файла (например,«$1») или полный URL-адрес (например, «$2»). Если используется первый вариант, источником будет считаться Викисклад. Чтобы перевести SVG с другого сайта или вики, следует использовать полный URL-адрес.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'Этот инструмент был использован для перевода примерно $1 файлов с $2 .',
	'uploading' => 'Загрузка',
	'upload-complete' => 'Загрузка завершена успешно. Изображение быть доступно по адресу $1',
	'editdescriptionpage' => 'Изменить новую страницу описания',
	'disclaimer' => 'Некоторые анонимные данные будут записываться для статистических целей. Если было указано TUSC-имя, то оно также будет записано, для оказания помощи в случае вандализма. Пароли никогда не записываются.',
	'author-complete' => 'Пожалуйста, заполните информацию об авторе!',
	'preview-hide' => 'Скрыть предпросмотр',
	'preview-refresh' => 'Обновить предпросмотр',
	'error-must-accept' => 'Чтобы продолжить прямую загрузку, следует принять Условия использования.',
	'error-tusc-failed' => 'Сбой проверки TUSC. Неправильное имя участникавателя или пароль.',
	'description-license' => 'Выберите описание и лицензию',
	'finalise' => 'Заключительные подробности',
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
	'error-must-accept' => 'Če želite nadaljevati z neposrednim nalaganjem, morate sprejeti navedene pogoje uporabe.',
	'error-tusc-failed' => 'Preverjanje TUSC ni uspelo: uporabniško ime ali geslo je napačno.',
	'description-license' => 'Izberite opis in dovoljenje',
	'finalise' => 'Dokončajte podrobnosti',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
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
	'error-must-accept' => 'Да бисте наставили с изравним отпремањем, морате прихватити услове коришћења.',
	'error-tusc-failed' => 'Не могу да извршим TUSC проверу: корисничко име или лозинка су неисправни.',
	'description-license' => 'Изаберите опис и лиценцу',
	'finalise' => 'Доврши детаље',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
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
	'error-must-accept' => 'Da biste nastavili s izravnim otpremanjem, morate prihvatiti uslove korišćenja.',
	'error-tusc-failed' => 'Ne mogu da izvršim TUSC proveru: korisničko ime ili lozinka su neispravni.',
	'description-license' => 'Izaberite opis i licencu',
	'finalise' => 'Dovrši detalje',
);

/** Swedish (Svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'title' => 'SVG-översättning',
	'error-tryagain' => '$1 Tryck på webbläsarens tillbaka-knapp för att försöka igen.',
	'error-nothing' => 'Inget att översätta.',
	'error-notsvg' => 'Inte en SVG-fil.',
	'error-unexpected' => 'Ett oväntat fel uppstod.',
	'error-notfound' => 'SVG-filen kunde inte hämtas från den angivna adressen.',
	'error-upload' => 'Ett fel uppstod under uppladdningen.',
	'begin-translation' => 'Börja översättning',
	'th-original' => 'Original',
	'th-translation' => 'Översättning',
	'th-language' => 'Språk',
	'th-username' => 'Användarnamn',
	'th-password' => 'Lösenord',
	'th-method' => 'Metod',
	'option-tusc' => 'TUSC (automatisk uppladdning)',
	'option-manual' => 'Manuell uppladdning',
	'preview' => 'Förhandsgranska',
	'translate' => 'Översätt',
	'translate-instructions' => 'Indata accepteras som antingen filnamn (t.ex. "$1") eller fullständig URL-adress (t.ex. "$2"). Om det första alternativet används kommer Wikimedia Commons antas som källa. För att översätta en SVG-fil från en annan webbplats eller wiki, måste du använda det fullständiga URL-adressen.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Detta verktyg har använts för att översätta cirka $1 filer sedan $2 .',
	'uploading' => 'Laddar upp',
	'upload-complete' => 'Uppladdningen har slutförts. Bilden bör nu finnas på $1',
	'editdescriptionpage' => 'Redigera den nya beskrivningssidan',
	'disclaimer' => 'Viss anonym data kommer att privat samlas in för statistiska ändamål. Om angivet, kommer TUSC-användarnamn också registreras för att hjälpa vid händelse av vandalism. Lösenord kommer aldrig registreras.',
	'author-complete' => 'Vänligen fyll i författarinformationen!',
	'preview-hide' => 'Göm förhandsgranskning',
	'preview-refresh' => 'Uppdatera förhandsvisningen',
	'error-must-accept' => 'För att fortsätta med en direkt uppladdning måste du acceptera användningsvilkoren.',
	'error-tusc-failed' => 'TUSC-valideringen misslyckades: användarnamn eller lösenordet är felaktigt.',
	'description-license' => 'Välj beskrivning och licens',
	'finalise' => 'Färdigställ detaljer',
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

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'th-original' => 'Orijinál',
	'th-translation' => 'Tradusaun',
	'th-language' => 'Lian',
	'th-username' => "Naran uza-na'in",
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
	'error-must-accept' => 'Upang magpatuloy sa isang tuwirang pagkakargang papaitaas dapat mong tanggapin ang ibinigay na mga tuntunin sa paggamit.',
	'error-tusc-failed' => 'Nabigo ang pagpapatunay ng TUSC: hindi tama ang pangalan ng tagagamit o hudyat.',
	'description-license' => 'Piliin ang paglalarawan at lisensiya',
	'finalise' => 'Buuin na ang mga detalye',
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

/** Ukrainian (Українська)
 * @author Dim Grits
 * @author Тест
 */
$messages['uk'] = array(
	'error-tryagain' => '$1 Натисніть у вашому браузері «Назад» для повтору.',
	'error-nothing' => 'Нічого перекладати.',
	'error-notsvg' => 'Це не файл SVG.',
	'error-unexpected' => 'Сталася неочікувана помилка.',
	'error-notfound' => 'Не вдалося знайти файл SVG за цією адресою.',
	'error-upload' => 'Сталася помилка при завантаженні.',
	'begin-translation' => 'Почати переклад',
	'th-original' => 'Вихідний текст',
	'th-translation' => 'Переклад',
	'th-language' => 'Мова',
	'th-username' => "Ім'я користувача",
	'th-password' => 'Пароль',
	'th-method' => 'Метод',
	'option-tusc' => 'TUSC (автоматичне завантаження)',
	'option-manual' => 'Самостійне завантаження',
	'preview' => 'Попередній перегляд',
	'translate' => 'Перекласти',
	'translate-instructions' => "Вкажіть ім'я файлу (наприклад, «$1») або повний URL-адрес (наприклад, «$2»). Якщо використано перший варіант, джерелом буде вважатись Wikimedia Commons. Для того, щоб перекласти SVG-файл з іншого сайту, вікіпроекту, слід використовувати його повну інтернет адресу.",
	'svginput-label' => 'Файл SVG',
	'stats-footer' => 'Цей інструмент був використаний для перекладу приблизно $1 файлів з $2.',
	'uploading' => 'Завантаження',
	'upload-complete' => 'Завантаження успішно завершено. Зображення має тепер бути в $1',
	'editdescriptionpage' => 'Редагування нової сторінки опису',
	'disclaimer' => "Деякі анонімні дані можуть збиратися для статистичних цілей. Якщо було вказане TUSC-ім'я користувача, то воно також буде збережено для надання допомоги у випадку вандалізму. Паролі ніколи не зберігаються.",
	'author-complete' => 'Будь ласка, заповніть інформацію про автора!',
	'preview-hide' => 'Приховати попередній перегляд',
	'preview-refresh' => 'Оновити попередній перегляд',
	'error-must-accept' => 'Щоб продовжити завантаження, ви повинні прийняти Умови використання.',
	'error-tusc-failed' => "Помилка перевірки TUSC. Ім'я користувача або пароль невірні.",
	'description-license' => 'Виберіть опис і ліцензію',
	'finalise' => 'Прикінцеві подробиці',
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
	'error-must-accept' => 'Để tiếp tục tải lên trực tiếp, trước tiên bạn phải cấp nhận các điều khoản sử dụng được trình bày.',
	'error-tusc-failed' => 'Thất bại việc xác minh TUSC: tên người dùng hoặc mật khẩu không chính xác.',
	'description-license' => 'Chọn miêu tả và giấy phép',
	'finalise' => 'Hoàn tất các chi tiết',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author Liangent
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
	'error-must-accept' => '若要继续直接上载，您必须接受提供的使用条款。',
	'error-tusc-failed' => 'TUSC验证失败：用户名或密码不正确。',
	'description-license' => '选择描述和许可证',
	'finalise' => '敲定细节',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'title' => 'SVG翻譯',
	'error-tryagain' => '$1點選瀏覽器中的返回按鈕重試',
	'error-nothing' => '沒有要翻譯的內容',
	'error-notsvg' => '不是SVG文件。',
	'error-unexpected' => '發生意外錯誤。',
	'error-notfound' => '不能從提供的URL中獲取SVG文件。',
	'error-upload' => '上傳時發生了錯誤。',
	'begin-translation' => '開始翻譯',
	'th-original' => '原文',
	'th-translation' => '翻譯',
	'th-language' => '語言',
	'th-username' => '用戶名',
	'th-password' => '密碼',
	'th-method' => '方法',
	'option-tusc' => 'TUSC（自動上傳）',
	'option-manual' => '手工上傳',
	'preview' => '預覽',
	'translate' => '翻譯',
	'translate-instructions' => '可以輸入文件名（例如"$1"）或完整的URL（例如"$2"）。如果選擇第一個選項，會將維基共享資源視為來源。如果是從其他網站或維基中翻譯SVG文件，你必須使用完整的URL。',
	'svginput-label' => 'SVG文件',
	'stats-footer' => '此工具自$2起已經翻譯了約$1個文件。',
	'uploading' => '上傳中',
	'upload-complete' => '上傳成功，該文件現在應該位於$1',
	'editdescriptionpage' => '編輯新的描述頁',
	'disclaimer' => '某些匿名數據會被私人收集以用於統計。如果使用TUSC上傳，用戶名會被記錄以防止破壞，唯密碼永遠都不會被記錄。',
	'author-complete' => '請填寫作者信息。',
	'preview-hide' => '隱藏預覽',
	'preview-refresh' => '重新整理預覽',
	'error-must-accept' => '如要繼續上傳，您必須接受提供的使用條款。',
	'error-tusc-failed' => 'TUSC驗証錯誤：用戶名或密碼不正確。',
	'description-license' => '選擇描述及條款',
	'finalise' => '敲定細節',
);

