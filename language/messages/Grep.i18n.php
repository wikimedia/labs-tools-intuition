<?php
/**
 * Interface messages for the article title grep tool.
 *
 * @toolowner jarry
 */

$url = '//tools.wmflabs.org/grep/';

$messages = array();

/**
 * English
 *
 * @author Jarry
 */
$messages['en'] = array(
	'title' => 'Article title grep (beta)',
	'introduction' => 'This tool shows all article titles that match a regular expression pattern ($1). Searching using a regular expression is resource intensive. If at all possible, remember to use the prefix (^) and ($) suffix indicators.',
	'explanation' => 'explanation',
	'regex' => 'Regular expression',
	'enter-details' => 'Enter details',
	'results' => 'Results',
	'language-label' => 'Language',
	'namespace-label' => 'Namespace',
	'project-label' => 'Project',
	'pattern-label' => 'Pattern',
	'redirects-label' => 'Include redirects',
	'limit-label' => 'Limit the display to the first 100 results',
	'error-zeroresults' => 'There are no pages in that namespace with titles matching your regular expression.',
	'match-count' => '{{PLURAL:$1|$1 page|$1 pages}} matched your regular expression.'
);

/** Message documentation (Message documentation)
 * @author Jarry1250
 * @author Krinkle
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => "The tool's title (name), used the main heading. grep is a technical term and cannot be translated",
	'introduction' => "The introductory paragraph explaining the tool's use. Parameters:
* $1 - a link pointing to [[w:Regular expression]], with translatable link text {{msg-intuition|Grep-explanation}} and link target
See also:
* {{msg-intuition|Grep-regex}} - link text and link target",
	'explanation' => 'Used as text for the link pointing to [[w:Regular expression]] which contains explanation for regular expression.',
	'regex' => 'Used as part of a link target. Should be set to the name of a Wikipedia article describing regular expressions.
{{Identical|Regular expression}}',
	'enter-details' => 'Subheading introducing a series of input boxes.
{{Identical|Enter details}}',
	'results' => 'Subheading.
{{Identical|Result}}',
	'language-label' => 'Interface input label. Refers to a language code, rather than a language name.
{{Identical|Language}}',
	'namespace-label' => 'Interface input label. Refers to a Wikipedia namespace
{{Identical|Namespace}}',
	'project-label' => 'Interface input label. Refers to a Wikipedia project.
{{Identical|Project}}',
	'pattern-label' => 'Interface input label. Technical term used in relation to regular expressions.
{{Identical|Pattern}}',
	'redirects-label' => 'Used as label for the checkbox.',
	'limit-label' => 'Interface input label',
	'error-zeroresults' => 'Error message',
	'match-count' => 'Appears above a list of results. $1 is a whole number (integer) greater than or equal to 1',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'explanation' => 'تفسير',
	'regex' => 'تعبير منتظم',
	'enter-details' => 'أدخل التفاصيل',
	'results' => 'النتائج',
	'language-label' => 'اللغة',
	'namespace-label' => 'النطاق',
	'project-label' => 'المشروع',
	'pattern-label' => 'النمط',
	'redirects-label' => 'تضمين التحويلات',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => "grep nel títulu d'artículos (beta)",
	'introduction' => 'Esta ferramienta amuesa tolos títulos d\'artículos que casen con un patrón d\'espresión regular ($1). Buscar usando una espresión regular ye costoso en recursos. Si pue ser, recuerda usar los indicadores prefixu (^) y sufixu ($).',
	'explanation' => 'esplicación',
	'regex' => 'Espresión regular',
	'enter-details' => 'Escribi los detalles',
	'results' => 'Resultaos',
	'language-label' => 'Llingua',
	'namespace-label' => 'Espaciu de nomes',
	'project-label' => 'Proyeutu',
	'pattern-label' => 'Patrón',
	'redirects-label' => 'Incluir redirecciones',
	'limit-label' => 'Llendar la vista a los 100 primeros resultaos',
	'error-zeroresults' => 'Nun hai páxines nesi espaciu de nomes con títulos que casen cola espresión regular.',
	'match-count' => '{{PLURAL:$1|$1 páxina casa|$1 páxines casen}} cola espresión regular.',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Aftabuzzaman
 */
$messages['bn'] = array(
	'enter-details' => 'বিস্তারিত লিখুন',
	'results' => 'ফলাফল',
	'language-label' => 'ভাষা',
	'namespace-label' => 'নামস্থান',
	'project-label' => 'প্রকল্প',
	'pattern-label' => 'বিন্যাস',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'explanation' => 'displegadenn',
	'enter-details' => 'Ebarzhiñ munudoù',
	'results' => "Disoc'hoù",
	'language-label' => 'Yezh',
	'namespace-label' => 'Esaouenn anv',
	'project-label' => 'Raktres',
	'pattern-label' => 'Patrom',
	'limit-label' => "Diskwel ar 100 disoc'h kentañ hepken",
);

/** Catalan (català)
 * @author Fitoschido
 */
$messages['ca'] = array(
	'explanation' => 'explicació',
	'regex' => 'Expressió regular',
	'enter-details' => 'Introduïu els detalls',
	'results' => 'Resultats',
	'language-label' => 'Idioma',
	'namespace-label' => 'Espai de noms',
	'project-label' => 'Projecte',
	'pattern-label' => 'Patró',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'enter-details' => 'ДӀаязде мадарра',
	'results' => 'Хиламаш',
	'language-label' => 'Мотт',
	'pattern-label' => 'Кеп',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'title' => 'Artikeltitel-Grep (Beta)',
	'introduction' => 'Dieses Werkzeug zeigt alle Artikeltitel, die einem regulären Ausdrucksmuster ($1) entsprechen. Das Suchen mit einem regulären Ausdruck ist ressourcenintensiv. Falls überhaupt möglich, vergiss nicht die Präfix- und Suffix-Indikatoren (^ bzw. $).',
	'explanation' => 'Erklärung',
	'regex' => 'Regulärer Ausdruck',
	'enter-details' => 'Einzelheiten eingeben',
	'results' => 'Ergebnisse',
	'language-label' => 'Sprache',
	'namespace-label' => 'Namensraum',
	'project-label' => 'Projekt',
	'pattern-label' => 'Muster',
	'redirects-label' => 'Weiterleitungen einschließen',
	'limit-label' => 'Anzeige auf die ersten 100 Ergebnisse beschränken',
	'error-zeroresults' => 'Es gibt keine Seiten in diesem Namensraum mit Titeln, die deinem regulären Ausdruck entsprechen.',
	'match-count' => '{{PLURAL:$1|Eine Seite|$1 Seiten}} stimmen mit deinem regulären Ausdruck überein.',
);

/** Zazaki (Zazaki)
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'namespace-label' => 'Heruna namey',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'regex' => 'Regular expression',
);

/** Spanish (español)
 * @author Kingpowl
 * @author Macofe
 * @author VegaDark
 */
$messages['es'] = array(
	'title' => 'Grep del título del artículo (beta)',
	'introduction' => 'Esta herramienta muestra todos los títulos de los artículos que coinciden con un patrón de expresión regular ($1). Buscar usando una expresión regular consume muchos recursos. Si es posible, recuerda usar los indicadores de prefijo (^) y sufijo ($).',
	'explanation' => 'explicación',
	'regex' => 'Expresión regular',
	'enter-details' => 'Introduce los detalles',
	'results' => 'Resultados',
	'language-label' => 'Idioma',
	'namespace-label' => 'Espacio de nombres',
	'project-label' => 'Proyecto',
	'pattern-label' => 'Patrón',
	'redirects-label' => 'Incluir redirecciones',
	'limit-label' => 'Limitar la visualización de los primeros 100 resultados',
	'error-zeroresults' => 'No hay páginas en ese espacio de nombres con títulos que coincidan con tu expresión regular.',
	'match-count' => '{{PLURAL:$1|$1 página coincide|$1 páginas coinciden}} con tu expresión regular.',
);

/** Persian (فارسی)
 * @author Reza1615
 */
$messages['fa'] = array(
	'title' => 'گریپ عنوان مقاله (آزمایشی)',
	'introduction' => 'این ابزار همه عنوان مقاله‌هایی که با عبارت باقاعده ($1) همسان باشند را نشان می‌دهد. جستجوی عبارت باقاعده از منابع فشرده استفاده می‌کند اگر مقدور است از (^) و ($) برای آن استفاده کنید.',
	'explanation' => 'توضیح',
	'regex' => 'عبارت باقاعده',
	'enter-details' => 'وارد کردن جزئیات',
	'results' => 'نتایج',
	'language-label' => 'زبان',
	'namespace-label' => 'فضای نام',
	'project-label' => 'پروژه',
	'pattern-label' => 'طرح‌دار',
	'redirects-label' => 'شامل تغییرمسیر',
	'limit-label' => 'محدود کردن نمایش نتایج به 100 مورد اول',
	'error-zeroresults' => 'هیچ صفحه ای در فضای نامی که با عناوین عبارت باقاعده مشخص کردید یافت نشد.',
	'match-count' => '{{PLURAL:$1|$1صفحه| $1  صفحه}} همسان با عبارت باقاعده شما',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'title' => 'Grep de titres d’article (bêta)',
	'introduction' => 'Cet outil affiche tous les titres d’article qui correspondent à un motif d’expression régulière ($1). Rechercher en utilisant une expression régulière consomme des ressources. Si possible, rappelez-vous d’utiliser les indicateurs de préfixe (^) et de suffixe ($).',
	'explanation' => 'explication',
	'regex' => 'Expression régulière',
	'enter-details' => 'Saisir les détails',
	'results' => 'Résultats',
	'language-label' => 'Langue',
	'namespace-label' => 'Espace de noms',
	'project-label' => 'Projet',
	'pattern-label' => 'Motif',
	'redirects-label' => 'Inclure les redirections',
	'limit-label' => 'Limiter l’affichage aux 100 premiers résultats',
	'error-zeroresults' => 'Il n’y a aucune page dans cet espace de noms dont les titres correspondent à votre expression régulière.',
	'match-count' => '{{PLURAL:$1|$1 page|$1 pages}} correspondent à votre expression régulière.',
);

/** Western Frisian (Frysk)
 * @author Robin0van0der0vliet
 */
$messages['fy'] = array(
	'explanation' => 'útlis',
	'language-label' => 'Taal',
	'namespace-label' => 'Nammeromte',
	'project-label' => 'Projekt',
	'pattern-label' => 'Patroan',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title' => 'חיפוש grep של כותרת ערך (מטא)',
	'introduction' => 'הכלי הזה מראה את השמות של כל הערכים שמתאימים לביטוי רגולרי ($1). חיפוש בעזרת ביטוי רגולרי צורך משאבים רבים. אם זה אפשרי, אנא השתמשו בתווים ^ ו־$.',
	'explanation' => 'הסבר',
	'regex' => 'ביטוי רגולרי',
	'enter-details' => 'נא להזין פרטים',
	'results' => 'תוצאות',
	'language-label' => 'שפה',
	'namespace-label' => 'מרחב שם',
	'project-label' => 'מיזם',
	'pattern-label' => 'תבנית',
	'redirects-label' => 'לכלול הפניות',
	'limit-label' => 'הגבלת התצוגה ל־100 התוצאות הראשונות',
	'error-zeroresults' => 'אין דפים במרחב השם הזה עם כותרות שתואמות לביטוי הרגולרי שלך.',
	'match-count' => '{{PLURAL:$1|דף אחד התאים|$1 דפים התאימו}} לביטוי הרגולרי שלך.',
);

/** Hungarian (magyar)
 * @author Csega
 */
$messages['hu'] = array(
	'explanation' => 'magyarázat',
	'regex' => 'Reguláris kifejezés',
	'enter-details' => 'Részletek megadása',
	'results' => 'Eredmények',
	'language-label' => 'Nyelv',
	'namespace-label' => 'Névtér',
	'project-label' => 'Projekt',
	'pattern-label' => 'Minta',
);

/** Indonesian (Bahasa Indonesia)
 * @author C5st4wr6ch
 * @author Kenrick95
 */
$messages['id'] = array(
	'explanation' => 'penjelasan',
	'regex' => 'Ekspresi reguler',
	'enter-details' => 'Masukan detail',
	'results' => 'Hasil',
	'language-label' => 'Bahasa',
	'namespace-label' => 'Ruang nama',
	'project-label' => 'Proyek',
	'pattern-label' => 'Pola',
	'limit-label' => 'Batasi tampilan menjadi 100 hasil pertama',
);

/** Italian (italiano)
 * @author Beta16
 * @author Ontsed
 */
$messages['it'] = array(
	'title' => '"grep" titolo della voce (beta)',
	'introduction' => 'Questo strumento mostra tutti i titoli delle voci che corrispondono ad un\'espressione regolare ($1). La ricerca attraverso espressioni regolari utilizza notevoli risorse. Se possibile, ricorda di usare gli indicatori di prefisso (^) e suffisso ($).',
	'explanation' => 'spiegazione',
	'regex' => 'Espressione regolare',
	'enter-details' => 'Inserisci i dettagli',
	'results' => 'Risultati',
	'language-label' => 'Lingua',
	'namespace-label' => 'Namespace',
	'project-label' => 'Progetto',
	'pattern-label' => 'Modello',
	'redirects-label' => 'Includi reindirizzamenti',
	'limit-label' => 'Limita la visualizzazione ai primi 100 risultati',
	'error-zeroresults' => 'Non ci sono pagine nel namespace il cui titolo corrisponde alla tua espressione regolare.',
	'match-count' => '{{PLURAL:$1|$1 pagina corrisponde|$1 pagine corrispondono}} alla tua espressione regolare.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'explanation' => '説明',
	'regex' => '正規表現',
	'enter-details' => '詳細の入力',
	'results' => '結果',
	'language-label' => '言語',
	'namespace-label' => '名前空間',
	'project-label' => 'プロジェクト',
	'pattern-label' => 'パターン',
	'redirects-label' => '転送ページを含める',
	'limit-label' => '結果の表示を最初の 100 件に制限する',
	'error-zeroresults' => '指定した名前空間には、指定した正規表現に一致するページ名はありません。',
	'match-count' => '指定した正規表現に {{PLURAL:$1|$1 件のページ}}が一致しました。',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 * @author VASANTH S.N.
 */
$messages['kn'] = array(
	'explanation' => 'ವಿವರಣೆ',
	'enter-details' => 'ವಿವರಣೆಗಳನ್ನು ತುಂಬಿ',
	'results' => 'ಫಲಿತಾಂಶಗಳು',
	'language-label' => 'ಭಾಷೆ',
	'namespace-label' => 'ನಾಮವರ್ಗ',
	'project-label' => 'ಯೋಜನೆ',
	'pattern-label' => 'ವಿನ್ಯಾಸ',
	'redirects-label' => 'ಪುನರ್ನಿರ್ದೇಶನಗಳನ್ನು ಸೇರಿಸಿ',
	'limit-label' => 'ಪ್ರದರ್ಶನವನ್ನು ಮೊದಲ ೧೦೦ ಫಲಿತಾಂಶಗಳಿಗೆ ಮಿತಿಗೊಳಿಸು',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'introduction' => 'Heh dat Wärkzüsch zeisch Siggetetelle, di obb en $1 paße donn. Esuh söhke es düür. Wann müjjelesch, donn de Zeische ^ un $ benöze.',
	'enter-details' => 'Jiff Einzelheite enn',
	'results' => 'Erus es jekume:',
	'language-label' => 'Et Schprohcheköözel',
	'namespace-label' => 'Et Appachtemang',
	'project-label' => 'Dat Projäk',
	'pattern-label' => 'Et Moster',
	'redirects-label' => 'Ömleidonge metnämme',
	'limit-label' => 'Bloß de eeude honder aanzeije',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'explanation' => 'Erklärung',
	'enter-details' => 'Detailer aginn',
	'results' => 'Resultater',
	'language-label' => 'Sprooch',
	'namespace-label' => 'Nummraum',
	'project-label' => 'Projet',
	'redirects-label' => 'Inklusiv Viruleedungen',
	'limit-label' => 'Nëmmen déi éischt 100 Resultater weisen',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'results' => 'Rezultāti',
);

/** Laz (Lazuri)
 * @author Ceas08
 */
$messages['lzz'] = array(
	'language-label' => 'Nena',
	'namespace-label' => 'Svacoxo',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => '„grep“ на насловот на статијата (бета)',
	'introduction' => 'Алаткава ги прикажува сите наслови на статии што одговараат на дадена мостра од регуларни изрази ($1). Пребарувањето со регуларни изрази го оптоварува системот. Доколку е возможно, не заборавајте да го употребите показателот за претставка(^) и показателот за наставка ($).',
	'explanation' => 'објаснување',
	'regex' => 'Регуларен израз',
	'enter-details' => 'Внесете податоци',
	'results' => 'Резултати',
	'language-label' => 'Јазик',
	'namespace-label' => 'Именски простор',
	'project-label' => 'Проект',
	'pattern-label' => 'Мостра',
	'redirects-label' => 'Вклучи и пренасочувања',
	'limit-label' => 'Ограничи го приказот на првите 100 резултати',
	'error-zeroresults' => 'Нема страници во тој именски простор чии страници се совпаѓаат со регуларниот израз.',
	'match-count' => 'Со регуларниот израз се {{PLURAL:$1|совпаѓа една страница|совпаѓаат $1 страници}}.',
);

/** Nepali (नेपाली)
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'explanation' => 'वर्णन',
	'regex' => 'रेगुलर एक्सप्रेसन',
	'enter-details' => 'जानकारीहरू प्रविष्ट गर्नुहोस्',
	'results' => 'नतिजाहरू',
	'language-label' => 'भाषा',
	'namespace-label' => 'नेमस्पेस',
	'project-label' => 'परियोजना',
	'pattern-label' => 'ढाँचा',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author SPQRobin
 * @author Siebrand
 * @author Southparkfan
 */
$messages['nl'] = array(
	'title' => "Pagina's zoeken (beta)",
	'introduction' => 'Dit hulpmiddel geeft alle paginanamen weer die voldoen aan het patroon van een reguliere expressie ($1). Zoeken met behulp van een reguliere expressie is een intensief proces. Als het mogelijk is, gebruik dan de indicatoren voor begin (^) en eind ($).',
	'explanation' => 'uitleg',
	'regex' => 'Reguliere expressie',
	'enter-details' => 'Gegevens invoeren',
	'results' => 'Resultaten',
	'language-label' => 'Taal',
	'namespace-label' => 'Naamruimte',
	'project-label' => 'Project',
	'pattern-label' => 'Patroon',
	'redirects-label' => 'Doorverwijzingen toevoegen',
	'limit-label' => 'Geef alleen de eerste 100 resultaten weer',
	'error-zeroresults' => "Er zijn geen pagina's in die naamruimte met een naam die overeenkomt met uw reguliere expressie.",
	'match-count' => "{{PLURAL:$1|$1 pagina|$1 pagina's}} komen overeen met uw reguliere expressie.",
);

/** Polish (polski)
 * @author Faren
 * @author Ty221
 */
$messages['pl'] = array(
	'title' => 'Grep tytułu artykułu (beta)',
	'explanation' => 'wyjaśnienie',
	'regex' => 'Wyrażenie regularne',
	'enter-details' => 'Wprowadź szczegóły',
	'results' => 'Wyniki',
	'language-label' => 'Język',
	'namespace-label' => 'Przestrzeń nazw',
	'project-label' => 'Projekt',
	'pattern-label' => 'Wzór',
	'redirects-label' => 'Zawiera przekierowania',
	'limit-label' => 'Ogranicz wyświetlanie do pierwszych 100 wyników',
	'error-zeroresults' => 'Nie ma stron w tej przestrzeni nazw, które pasują do twojego wyrażenia regularnego.',
	'match-count' => '{{PLURAL:$1|$1 strona|$1 stron}} pasuje do twojego wyrażenia regularnego.',
);

/** Portuguese (português)
 * @author Imperadeiro98
 */
$messages['pt'] = array(
	'results' => 'Resultados',
	'language-label' => 'Idioma',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
	'results' => 'Resultados',
	'language-label' => 'Língua',
	'namespace-label' => 'Espaço nominal',
	'project-label' => 'Projeto',
	'pattern-label' => 'Padrão',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'Grep pentru titluri de articole (beta)',
	'introduction' => 'Acest instrument afișează toate titlurile de articole care corespund unui model de expresie regulată ($1). Căutarea folosind o expresie regulată este mare consumatoare de resurse. Dacă este posibil, nu uitați să folosiți indicatorii pentru prefix (^) și sufix ($).',
	'explanation' => 'explicație',
	'regex' => 'Expresie regulată',
	'enter-details' => 'Introduceți detalii',
	'results' => 'Rezultate',
	'language-label' => 'Limbă',
	'namespace-label' => 'Spațiu de nume',
	'project-label' => 'Proiect',
	'pattern-label' => 'Model',
	'redirects-label' => 'Include redirecționări',
	'limit-label' => 'Limitează afișarea la primele 100 de rezultate',
	'error-zeroresults' => 'Nu există pagini în acel spațiu de nume cu titluri care să corespundă expresiei regulate.',
	'match-count' => '{{PLURAL:$1|$1 pagină corespunde|$1 pagini corespund|$1 de pagini corespund}} expresiei regulate.',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'title' => 'Grep для названий статей (бета)',
	'introduction' => 'Этот инструмент показывает все заголовки статей, которые соответствуют шаблону регулярного выражения ($1). Поиск с помощью регулярных выражений является ресурсоёмким, поэтому, если это возможно, не забывайте использовать указатели префикса (^) и ($) суффикса.',
	'explanation' => 'объяснение',
	'regex' => 'Регулярное выражение',
	'enter-details' => 'Введите подробности',
	'results' => 'Результаты',
	'language-label' => 'Язык',
	'namespace-label' => 'Пространство имён',
	'project-label' => 'Проект',
	'pattern-label' => 'Шаблон',
	'redirects-label' => 'Включить переадресацию',
	'limit-label' => 'Ограничить показ первыми 100 результатами',
	'error-zeroresults' => 'В данном пространстве имён нет страниц, соответствующих вашему регулярному выражению.',
	'match-count' => '$1 страниц{{PLURAL:$1|а соответствует| соответствуют|ы соответствуют}} вашему регулярному выражению.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'language-label' => 'Језик',
	'namespace-label' => 'Именски простор',
	'project-label' => 'Пројекат',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'title' => 'Artikeltitel-grep (beta)',
	'introduction' => 'Detta verktyg visar alla artikelrubriker som matchar ett mönster för reguljära uttryck ($1). Att söka genom att använda ett reguljärt uttryck är resurskrävande. Om möjligt, kom ihåg att använda prefix- (^) och ($) suffixindikatorerna.',
	'explanation' => 'förklaring',
	'regex' => 'Reguljärt uttryck',
	'enter-details' => 'Ange detaljer',
	'results' => 'Resultat',
	'language-label' => 'Språk',
	'namespace-label' => 'Namnrymd',
	'project-label' => 'Projekt',
	'pattern-label' => 'Mönster',
	'redirects-label' => 'Inkludera omdirigeringar',
	'limit-label' => 'Begränsa visningen till de första 100 resultaten',
	'error-zeroresults' => 'Det finns inga sidor i den namnrymnden med titlar som matchar ditt reguljära uttryck.',
	'match-count' => '{{PLURAL:$1|$1 sida|$1 sidor}} överensstämmer ditt reguljära uttryck.',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'title' => 'Grep для назв статей (бета)',
	'introduction' => 'Цей інструмент відображає всі заголовки статей, які відповідають шаблону регулярного виразу ($1). Пошук за допомогою регулярних виразів є ресурсомістким, тому, якщо це можливо, не забувайте використовувати покажчики префікса ( ^ ) ( $ ) суфікс.',
	'explanation' => 'пояснення',
	'regex' => 'Регулярний вираз',
	'enter-details' => 'Вкажіть подробиці',
	'results' => 'Результати',
	'language-label' => 'Мова',
	'namespace-label' => 'Простір назв',
	'project-label' => 'Проект',
	'pattern-label' => 'Візерунок',
	'redirects-label' => 'Включати перенаправлення',
	'limit-label' => 'Обмежувати відображення першими 100 результатами',
	'error-zeroresults' => 'Немає сторінок в просторі імен з назвами відповідних вашому регулярному виразу.',
	'match-count' => '{{PLURAL:$1|$1 сторінка відповідає|$1 сторінок відповідають|$1 сторінки відповідають}} вашому регулярному виразу.',
);

/** Urdu (اردو)
 * @author عثمان خان شاہ
 */
$messages['ur'] = array(
	'results' => 'نتائج',
	'language-label' => 'زبان',
	'namespace-label' => 'فضائے نام',
	'project-label' => 'منصوبہ',
	'pattern-label' => 'طرز',
	'redirects-label' => 'رجوع مکررات شامل',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'grep tên bài (beta)',
	'introduction' => 'Công cụ này hiển thị tất cả các tên bài khớp với một biểu thức chính quy ($1). Việc tìm kiếm theo biểu thức chính quy tốn nhiều tài nguyên. Nếu có thể, xin nhớ sử dụng các dấu tiền tố (^) và hậu tố ($).',
	'explanation' => 'giải thích',
	'regex' => 'Biểu thức chính quy',
	'enter-details' => 'Nhập chi tiết',
	'results' => 'Kết quả',
	'language-label' => 'Ngôn ngữ',
	'namespace-label' => 'Không gian tên',
	'project-label' => 'Dự án',
	'pattern-label' => 'Mẫu',
	'redirects-label' => 'Bao gồm trang đổi hướng',
	'limit-label' => 'Chỉ hiển thị 100 kết quả đầu tiên',
	'error-zeroresults' => 'Không gian tên này không có trang nào có tên khớp với biểu thức chính quy.',
	'match-count' => '$1 trang khớp với biểu thức chính quy.',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'explanation' => 'ערקלערונג',
	'regex' => 'רגעולערער אויסדרוק',
	'enter-details' => 'אײַנגעבן פרטים',
	'results' => 'רעזולטאטן',
	'language-label' => 'שפראַך',
	'namespace-label' => 'נאָמענטייל',
	'project-label' => 'פראיעקט',
	'pattern-label' => 'מוסטער',
	'redirects-label' => 'אײַנשליסן ווײַטערפירונגען',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'title' => '条目标题grep（测试）',
	'introduction' => '此工具显示所有匹配正则表达式模式（$1）的条目标题。通过正则表达式搜索会占用大量资源。如果可能，记住使用前缀（^）和（$）后缀指示。',
	'explanation' => '解释',
	'regex' => '正则表达式',
	'enter-details' => '输入详细信息',
	'results' => '结果',
	'language-label' => '语言',
	'namespace-label' => '名字空间',
	'project-label' => '项目',
	'pattern-label' => '模式',
	'redirects-label' => '包括重定向',
	'limit-label' => '限制显示为前100个结果',
	'error-zeroresults' => '此名字空间下没有匹配您的正则表达式的标题。',
	'match-count' => '{{PLURAL:$1|$1个页面}}匹配您的正则表达式。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hant'] = array(
	'regex' => '正規表示法',
	'namespace-label' => '命名空間',
);

/** Chinese (Taiwan) (中文（台灣）‎)
 * @author Liuxinyu970226
 */
$messages['zh-tw'] = array(
	'regex' => '正規表示式',
);
