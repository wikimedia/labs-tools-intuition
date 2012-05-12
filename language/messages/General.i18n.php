<?php
/**
 * General purpose messages.
 */

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'dateformat' => '%B %d %Y', // Optional
	'hello' =>	'Hello',
	'welcome' => 'Welcome',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'colon-separator' => ':', // Optional
	'namespace' => 'Namespace',
	'form-submit' => 'Go',
	'form-reset' => 'Reset',
	'years' => '{{PLURAL: $1|year|years}}',
	'weeks' => '{{PLURAL: $1|week|weeks}}',
	'days' => '{{PLURAL: $1|day|days}}',
	'hours' => '{{PLURAL: $1|hour|hours}}',
	'minutes' => '{{PLURAL: $1|minute|minutes}}',
	'seconds' => '{{PLURAL: $1|second|seconds}}',
	'last-modified-date' => 'Last modified: $1',
	'view-source' => 'View source',
	'parentheses' => '($1)', // Optional
);

/** Message documentation (Message documentation)
 * @author Beta16
 * @author EugeneZelenko
 * @author Krinkle
 */
$messages['qqq'] = array(
	'dateformat' => '{{Optional}} Dateformat in this language. See documentation about [http://php.net/strftime strftime() at php.net] for the syntax.',
	'hello' => 'A friendly greet.',
	'welcome' => 'A friendly welcome.
{{Identical|Welcome}}',
	'toolversionstamp' => 'Short sentence about what the last version of this tool is and when the last update was. <code>$1</code> is the version (eg. "1.5.5beta") and <code>$2</code> is the date (without time).',
	'etc' => 'Abbreviated form of "et cetera"',
	'colon-separator' => '{{Optional}} Change it only if your language uses another character for ":" or it needs an extra space before the colon.',
	'namespace' => '{{Identical|Namespace}}',
	'form-submit' => 'A general label for a form submission button. Not per se a search form!
{{Identical|Go}}',
	'form-reset' => 'A general label for a form reset button. Not per se a search form!
{{Identical|Reset}}',
	'years' => 'Notation of time duration for multiple years (eg. "Duration: x years" ).',
	'weeks' => 'Notation of time duration for multiple weeks (eg. "Duration: x weeks" ).',
	'days' => 'Notation of time duration for multiple days (eg. "Duration: x days" ).',
	'hours' => 'Notation of time duration for multiple hours (eg. "Duration: x hours" ).',
	'minutes' => 'Notation of time duration for multiple hours (eg. "Duration: x minutes" ). No support for advanced plural yet.',
	'seconds' => 'Notation of time duration for multiple hours (eg. "Duration: x seconds" ). No support for advenced plural yet.',
	'last-modified-date' => 'The date something was last modified. $1 is a date (eg. "April 5 2010, 12:30 AM")',
	'view-source' => 'Label for a button or link that, when clicked, will present the program source code.',
	'parentheses' => '{{Optional}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Welkom',
	'toolversionstamp' => 'Weergawe $1 ($2)',
	'etc' => 'ensovoorts',
	'namespace' => 'Naamruimte',
	'form-submit' => 'OK',
	'form-reset' => 'Herstel',
	'years' => '{{PLURAL: $1|jaar|jare}}',
	'weeks' => '{{PLURAL: $1|week|weke}}',
	'days' => '{{PLURAL: $1|dag|dae}}',
	'hours' => '{{PLURAL:$1|uur|ure}}',
	'minutes' => '{{PLURAL: $1|minuut|minute}}',
	'seconds' => '{{PLURAL: $1|sekonde|sekondes}}',
	'last-modified-date' => 'Laaste wysiging op: $1',
	'view-source' => 'Wys bronteks',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author Mutarjem horr
 * @author OsamaK
 */
$messages['ar'] = array(
	'hello' => 'أهلاّ بك',
	'welcome' => 'مرحبا',
	'toolversionstamp' => 'الإصدار $1 ($2)',
	'etc' => 'و إلى آخره',
	'namespace' => 'النطاق',
	'form-submit' => 'اذهب',
	'form-reset' => 'إعادة ضبط',
	'years' => '{{PLURAL: $1||سنة واحدة|سنتان|$1 سنين|$1 سنة}}',
	'weeks' => '{{PLURAL:$1||أسبوع واحد|أسبوعان|$1 أسابيع|$1 أسبوعًا|$1 أسبوع}}',
	'days' => '{{PLURAL: $1|يوم|يوم}}',
	'hours' => '{{PLURAL: $1|ساعة|ساعة}}',
	'minutes' => '{{PLURAL: $1|دقيقة|دقائق}}',
	'seconds' => '{{PLURAL: $1|ثانية|ثواني}}',
	'last-modified-date' => 'آخر تغيير: $1',
	'view-source' => 'شاهد المصدر',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Rafy
 */
$messages['arc'] = array(
	'years' => '{{PLURAL: $1|ܫܢܬܐ|ܫܢܬ̈ܐ}}',
	'weeks' => '{{PLURAL: $1|ܫܒܘܥܐ|ܫܒܘܥ̈ܐ}}',
	'days' => '{{PLURAL:$1|ܝܘܡܐ|ܝܘܡܬ̈ܐ}}',
	'hours' => '{{PLURAL:$1|ܫܥܬܐ|ܫܥܬ̈ܐ}}',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'hello' => 'নমস্কাৰ',
	'welcome' => 'স্বাগতম',
	'toolversionstamp' => 'সংস্কৰণ $1 ($2)',
	'etc' => 'ইত্যাদি।',
	'namespace' => 'নামস্থান',
	'form-reset' => 'পূৰ্বৰ অৱস্থালৈ লৈ যাওক',
	'last-modified-date' => 'শেষ পৰিবৰ্তন: $1',
	'view-source' => 'উৎস চাওক',
);

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'hello' => 'Bones',
	'welcome' => 'Bienveníos',
	'toolversionstamp' => 'Versión $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaciu de nomes',
	'form-submit' => 'Dir',
	'form-reset' => 'Reaniciar',
	'years' => '{{PLURAL: $1|añu|años}}',
	'weeks' => '{{PLURAL: $1|selmana|selmanes}}',
	'days' => '{{PLURAL: $1|día|díes}}',
	'hours' => '{{PLURAL: $1|hora|hores}}',
	'minutes' => '{{PLURAL: $1|minutu|minutos}}',
	'seconds' => '{{PLURAL: $1|segundu|segundos}}',
	'last-modified-date' => 'Caberu cambéu: $1',
	'view-source' => 'Ver códigu fonte',
);

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 * @author Wertuose
 */
$messages['az'] = array(
	'hello' => 'Salam',
	'namespace' => 'Adlar fəzası',
	'form-reset' => 'Qur',
	'years' => '{{PLURAL: $1|il|il}}',
	'weeks' => '{{PLURAL: $1|həftə|həftə}}',
	'days' => '{{PLURAL: $1|gün|gün}}',
	'hours' => '{{PLURAL: $1|saat|saat}}',
	'minutes' => '{{PLURAL: $1|dəqiqə|dəqiqə}}',
	'seconds' => '{{PLURAL: $1|saniyə|saniyə}}',
	'last-modified-date' => 'Sonuncu düzəliş: $1',
	'view-source' => 'Mənbəyə bax',
);

/** Belarusian (Беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'hello' => 'Прывітанне',
	'welcome' => 'Сардэчна запрашаем',
	'toolversionstamp' => 'Версія $1 ( $2 )',
	'etc' => 'і г.д.',
	'namespace' => 'Прастора назваў',
	'form-submit' => 'Перайсці',
	'form-reset' => 'Скінуць',
	'years' => 'гадоў',
	'weeks' => 'тыдняў',
	'days' => 'дзён',
	'hours' => 'гадзін',
	'last-modified-date' => 'Апошнія змены: $1',
	'view-source' => 'Паказаць крынічны тэкст',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'hello' => 'Прывітаньне',
	'welcome' => 'Вітаем',
	'toolversionstamp' => 'Вэрсія $1, ($2)',
	'etc' => 'і гэтак далей.',
	'namespace' => 'Прастора назваў',
	'form-submit' => 'Адправіць',
	'form-reset' => 'Скінуць',
	'years' => '{{PLURAL: $1|год|гады|гадоў}}',
	'weeks' => '{{PLURAL: $1|тыдзень|тыдні|тыдняў}}',
	'days' => '{{PLURAL: $1|дзень|дні|дзён}}',
	'hours' => '{{PLURAL: $1|гадзіна|гадзіны|гадзінаў}}',
	'minutes' => '{{PLURAL: $1|хвіліна|хвіліны|хвілінаў}}',
	'seconds' => '{{PLURAL: $1|сэкунда|сэкунды|сэкундаў}}',
	'last-modified-date' => 'Апошняя зьмена: $1',
	'view-source' => 'Паказаць код',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'toolversionstamp' => 'Версия $1 ($2)',
	'namespace' => 'Именно пространство',
	'years' => 'години',
	'weeks' => 'седмици',
	'days' => 'дни',
	'minutes' => 'минути',
	'seconds' => 'секунди',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'hello' => 'হ্যালো',
	'welcome' => 'স্বাগতম',
	'toolversionstamp' => 'সংস্করণ $1 ($2)',
	'etc' => 'ইত্যাদি।',
	'namespace' => 'নামস্থান',
	'form-submit' => 'চলো',
	'form-reset' => 'আদি অবস্থায় ফেরত',
	'years' => '{{PLURAL: $1|বছর|বছর}}',
	'weeks' => '{{PLURAL: $1|সপ্তাহ|সপ্তাহ}}',
	'days' => '{{PLURAL: $1|দিন|দিন}}',
	'hours' => '{{PLURAL: $1|ঘণ্টা|ঘণ্টা}}',
	'minutes' => '{{PLURAL: $1|মিনিট|মিনিট}}',
	'seconds' => '{{PLURAL: $1|সেকেন্ড|সেকেন্ড}}',
	'last-modified-date' => 'সর্বশেষ পরিবর্তন: $1',
	'view-source' => 'সোর্স দেখাও',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Krinkle
 * @author Y-M D
 */
$messages['br'] = array(
	'hello' => 'Demat',
	'welcome' => 'Degemer mat',
	'toolversionstamp' => 'Stumm $1 ($2)',
	'etc' => 'h.a.',
	'namespace' => 'Esaouenn anv',
	'form-submit' => 'Mont',
	'form-reset' => 'Adderaouekaat',
	'years' => '{{PLURAL: $1|bloavezh|bloavezh}}',
	'weeks' => '{{PLURAL: $1|sizhunvezh|sizhunvezh}}',
	'days' => '{{PLURAL: $1|devezh|devezh}}',
	'hours' => '{{PLURAL: $1|eurvezh|eurvezh}}',
	'minutes' => '{{PLURAL: $1|munutenn|munutenn}}',
	'seconds' => '{{PLURAL: $1|eilenn|eilenn}}',
	'last-modified-date' => 'Kemmet da ziwezhañ : $1',
	'view-source' => 'Sellet ouzh tarzh an destenn',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'hello' => 'Pozdrav',
	'welcome' => 'Dobrodošli',
	'toolversionstamp' => 'Verzija $1 ($2)',
	'etc' => 'itd.',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Idi',
	'form-reset' => 'Poništi',
	'years' => 'godine',
	'weeks' => 'sedmice',
	'days' => 'dani',
	'hours' => 'sati',
	'last-modified-date' => 'Zadnji put izmijenjeno; $1',
	'view-source' => 'Pogledaj izvor',
);

/** Catalan (Català)
 * @author SMP
 */
$messages['ca'] = array(
	'hello' => 'Hola',
	'welcome' => 'Benvinguts',
	'toolversionstamp' => 'Versió $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espai de noms',
	'form-submit' => 'Vés-hi',
	'form-reset' => 'Restableix',
	'years' => '{{PLURAL: $1|any|anys}}',
	'weeks' => '{{PLURAL: $1|setmana|setmanes}}',
	'days' => '{{PLURAL: $1|dia|dies}}',
	'hours' => '{{PLURAL: $1|hora|hores}}',
	'minutes' => '{{PLURAL: $1|minut|minuts}}',
	'seconds' => '{{PLURAL:$1|segon|segons}}',
	'last-modified-date' => 'Darrera modificació: $1',
	'view-source' => 'Mostra el codi font',
);

/** Sorani (کوردی)
 * @author Asoxor
 */
$messages['ckb'] = array(
	'hello' => 'سڵاو',
	'welcome' => 'بەخێربێی',
	'toolversionstamp' => 'وەشانی $1 ($2)',
	'etc' => 'ھتد',
	'namespace' => 'بۆشاییی ناو',
	'form-submit' => 'بڕۆ',
	'form-reset' => 'دووبارە ڕێکخستنەوە',
	'years' => '{{PLURAL: $1|ساڵ|ساڵ}}',
	'weeks' => '{{PLURAL:$1|ھەفتە|ھەفتە}}',
	'days' => '{{PLURAL: $1|ڕۆژ|ڕۆژ}}',
	'hours' => '{{PLURAL: $1|کاتژمێر|کاتژمێر}}',
	'minutes' => '{{PLURAL: $1|خولەک|خولەک}}',
	'seconds' => '{{PLURAL: $1|چرکە|چرکە}}',
	'last-modified-date' => 'دوایین گۆڕانکاری: $1',
	'view-source' => 'سەرچاوەکەی ببینە',
);

/** Czech (Česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'hello' => 'Ahoj',
	'welcome' => 'Vítejte',
	'toolversionstamp' => 'Verze $1 ($2)',
	'etc' => 'atd.',
	'namespace' => 'Jmenný prostor',
	'form-submit' => 'Provést',
	'form-reset' => 'Vyčistit',
	'years' => '{{PLURAL:$1|rok|roky|let}}',
	'weeks' => '{{PLURAL:$1|týden|týdny|týdnů}}',
	'days' => '{{PLURAL:$1|den|dny|dní}}',
	'hours' => '{{PLURAL:$1|hodina|hodiny|hodin}}',
	'minutes' => '{{PLURAL:$1|minuta|minuty|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundy|sekund}}',
	'last-modified-date' => 'Naposledy změněno: $1',
	'view-source' => 'Zobrazit zdrojový kód',
);

/** Danish (Dansk)
 * @author Peter Alberti
 * @author Sarrus
 */
$messages['da'] = array(
	'hello' => 'Hej',
	'welcome' => 'Velkommen',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'osv.',
	'namespace' => 'Navnerum',
	'form-submit' => 'Gå',
	'form-reset' => 'Nulstil',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|uge|uger}}',
	'days' => '{{PLURAL: $1|dag|dage}}',
	'hours' => '{{PLURAL: $1|time|timer}}',
	'minutes' => '{{PLURAL: $1|minut|minutter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Senest ændret: $1',
	'view-source' => 'Vis kildekode',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Krinkle
 */
$messages['de'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Hallo',
	'welcome' => 'Willkommen',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'usw.',
	'namespace' => 'Namensraum',
	'form-submit' => 'Ausführen',
	'form-reset' => 'Zurücksetzen',
	'years' => '{{PLURAL: $1|Jahr|Jahre}}',
	'weeks' => '{{PLURAL: $1|Woche|Wochen}}',
	'days' => '{{PLURAL: $1|Tag|Tage}}',
	'hours' => '{{PLURAL: $1|Stunde|Stunden}}',
	'minutes' => '{{PLURAL: $1|Minute|Minuten}}',
	'seconds' => '{{PLURAL: $1|Sekunde|Sekunden}}',
	'last-modified-date' => 'Zuletzt geändert: $1',
	'view-source' => 'Quelltext anzeigen',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'hello' => 'Merheba',
	'welcome' => 'Xeyr amey',
	'toolversionstamp' => 'Versiyon $1 ($2)',
	'etc' => 'ws.',
	'namespace' => 'Cayê namey:',
	'form-submit' => 'Şo',
	'form-reset' => 'Reset kerê',
	'years' => '{{PLURAL: $1|serre|serri}}',
	'weeks' => '{{PLURAL: $1|hefte|heftey}}',
	'days' => '{{PLURAL: $1|roc|roci}}',
	'hours' => '($1 {{PLURAL:$1|seate|seati}})',
	'minutes' => '{{PLURAL: $1|deqe|deqey}}',
	'seconds' => '{{PLURAL:$1|saniye|saniyeyan}}',
	'last-modified-date' => 'Vurnayışo peên: $1',
	'view-source' => 'Çımey bıvêne',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'hello' => 'Halo',
	'welcome' => 'Witaj',
	'toolversionstamp' => 'Wersija $1 ($2)',
	'etc' => 'atd.',
	'namespace' => 'Mjenjowy rum',
	'form-submit' => 'Wótpósłaś',
	'form-reset' => 'Slědk stajiś',
	'years' => '{{PLURAL: $1|lěto|lěśe|lěta|lět}}',
	'weeks' => '{{PLURAL: $1|tyźeń|tyźenja|tyźenje|tyźenjow}}',
	'days' => '{{PLURAL: $1|źeń|dnja|dny|dnjow}}',
	'hours' => '{{PLURAL: $1|góźina|góźinje|góźiny|góźinow}}',
	'minutes' => '{{PLURAL: $1|minuta|minuśe|minuty|minutow}}',
	'seconds' => '{{PLURAL: $1|sekunda|sekunźe|sekundy|sekundow}}',
	'last-modified-date' => 'Slědny raz změnjony: $1',
	'view-source' => 'Žrědło se woglědaś',
);

/** Greek (Ελληνικά)
 * @author Evropi
 */
$messages['el'] = array(
	'hello' => 'Γεια σας',
	'welcome' => 'Καλώς ορίσατε',
	'toolversionstamp' => 'Έκδοση $1 ($2)',
	'etc' => 'κλπ.',
	'form-submit' => 'Μετάβαση',
	'form-reset' => 'Επαναφορά',
	'years' => 'χρόνια',
	'weeks' => 'εβδομάδες',
	'days' => 'ημέρες',
	'hours' => 'ώρες',
	'last-modified-date' => 'Τελευταία επεξεργασία: $1',
	'view-source' => 'Εμφάνιση κώδικα',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Fitoschido
 * @author Platonides
 */
$messages['es'] = array(
	'dateformat' => '%d de %B de %Y',
	'hello' => 'Hola',
	'welcome' => 'Bienvenido',
	'toolversionstamp' => 'Versión $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espacio de nombres',
	'form-submit' => 'Ir',
	'form-reset' => 'Restablecer',
	'years' => '{{PLURAL: $1|año|años}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|día|días}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'last-modified-date' => 'Última modificación: $1',
	'view-source' => 'Ver fuente',
);

/** Estonian (Eesti)
 * @author WikedKentaur
 */
$messages['et'] = array(
	'namespace' => 'Nimeruum',
	'years' => 'aastat',
	'weeks' => 'nädalat',
	'days' => 'päeva',
	'hours' => 'tundi',
	'minutes' => 'minutit',
	'seconds' => 'sekundit',
	'last-modified-date' => 'Viimati muudetud: $1',
	'view-source' => 'Vaata lähteteksti',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'hello' => 'Kaixo',
	'welcome' => 'Ongi etorri',
	'toolversionstamp' => 'Bertsioa $1 ($2)',
	'etc' => 'etab.',
	'namespace' => 'Izen-tartea',
	'form-submit' => 'Joan',
	'form-reset' => 'Hasieratu',
	'years' => '{{PLURAL: $1|urte|urte}}',
	'weeks' => '{{PLURAL: $1|aste|aste}}',
	'days' => '{{PLURAL: $1|egun|egun}}',
	'hours' => '{{PLURAL: $1|ordu|ordu}}',
	'minutes' => '{{PLURAL: $1|minutu|minutu}}',
	'seconds' => '{{PLURAL: $1|segundu|segundu}}',
	'last-modified-date' => 'Azken aldaketa: $1',
	'view-source' => 'Iturria ikusi',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Mjbmr
 */
$messages['fa'] = array(
	'hello' => 'سلام',
	'welcome' => 'خوش‌آمدید',
	'toolversionstamp' => 'نسخهٔ $1 ($2)',
	'etc' => 'غیره.',
	'namespace' => 'فضای نام',
	'form-submit' => 'برو',
	'form-reset' => 'بازنشانی',
	'years' => '{{PLURAL: $1|سال|سال}}',
	'weeks' => '{{PLURAL: $1|هفته|هفته}}',
	'days' => '{{PLURAL: $1|روز|روز}}',
	'hours' => '{{PLURAL: $1|ساعت|ساعت}}',
	'minutes' => '{{PLURAL: $1|دقیقه|دقیقه}}',
	'seconds' => '{{PLURAL: $1|ثانیه|ثانیه}}',
	'last-modified-date' => 'آخرین تغییر: $1',
	'view-source' => 'نمایش مبدأ',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Silvonen
 */
$messages['fi'] = array(
	'hello' => 'Moikka',
	'welcome' => 'Tervetuloa',
	'toolversionstamp' => 'Versio $1 ($2)',
	'etc' => 'jne.',
	'namespace' => 'Nimiavaruus',
	'form-submit' => 'Mene',
	'form-reset' => 'Tyhjennä',
	'years' => '{{PLURAL: $1|vuosi|vuotta}}',
	'weeks' => '{{PLURAL: $1|viikko|viikkoa}}',
	'days' => 'päivää',
	'hours' => '{{PLURAL: $1|tunti|tuntia}}',
	'minutes' => '{{PLURAL: $1|minuutti|minuuttia}}',
	'seconds' => '{{PLURAL: $1|sekunti|sekuntia}}',
	'last-modified-date' => 'Viimeksi muokattu $1',
	'view-source' => 'näytä lähdekoodi',
);

/** French (Français)
 * @author Crochet.david
 * @author Jean-Frédéric
 * @author Od1n
 */
$messages['fr'] = array(
	'hello' => 'Bonjour',
	'welcome' => 'Bienvenue',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espace de noms',
	'form-submit' => 'Valider',
	'form-reset' => 'Réinitialiser',
	'years' => '{{PLURAL: $1|année|années}}',
	'weeks' => '{{PLURAL: $1|semaine|semaines}}',
	'days' => '{{PLURAL: $1|jour|jours}}',
	'hours' => '{{PLURAL: $1|heure|heures}}',
	'minutes' => '{{PLURAL: $1|minute|minutes}}',
	'seconds' => '{{PLURAL: $1|seconde|secondes}}',
	'last-modified-date' => 'Dernière modification : $1',
	'view-source' => 'Voir la source',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'hello' => 'Ola',
	'welcome' => 'Benvido',
	'toolversionstamp' => 'Versión $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espazo de nomes',
	'form-submit' => 'Ir',
	'form-reset' => 'Restablecer',
	'years' => '{{PLURAL: $1|ano|anos}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|día|días}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'last-modified-date' => 'Última modificación: $1',
	'view-source' => 'Ver o código fonte',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'hello' => 'שלום',
	'welcome' => 'ברוכים הבאים',
	'toolversionstamp' => 'גרסה $1 ($2)‏',
	'etc' => 'וכו׳',
	'namespace' => 'מרחב שם',
	'form-submit' => 'מעבר',
	'form-reset' => 'איפוס',
	'years' => '{{PLURAL: $1|שנה|שנים}}',
	'weeks' => '{{PLURAL: $1|שבוע|שבועות}}',
	'days' => '{{PLURAL: $1|יום|ימים}}',
	'hours' => 'שע׳',
	'minutes' => 'דק׳',
	'seconds' => 'שנ׳',
	'last-modified-date' => 'שונה לאחרונה: $1',
	'view-source' => 'הצגת מקור',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'hello' => 'नमस्कार',
	'welcome' => 'सुस्वागतम्‌!',
	'toolversionstamp' => 'वर्ज़न $1 ($2)',
	'etc' => 'आदि',
	'namespace' => 'नामस्थान',
	'form-submit' => 'जायें',
	'form-reset' => 'रीसेट करें',
	'years' => '{{PLURAL: $1|वर्ष}}',
	'weeks' => '{{PLURAL: $1|सप्ताह}}',
	'days' => '{{PLURAL: $1|दिन}}',
	'hours' => '{{PLURAL:$1|घंटा|घंटे}}',
	'minutes' => '{{PLURAL: $1|मिनट}}',
	'seconds' => '{{PLURAL: $1|सॅकेंड}}',
	'last-modified-date' => 'अंतिम परिवर्तन: $1',
	'view-source' => 'स्रोत देखें',
);

/** Croatian (Hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'hello' => 'Pozdrav',
	'welcome' => 'Dobrodošli',
	'toolversionstamp' => 'Inačica $1 ($2)',
	'etc' => 'itd.',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Idi',
	'form-reset' => 'Poništi',
	'years' => 'godine',
	'weeks' => 'tjedana',
	'days' => 'dana',
	'hours' => 'sati',
	'last-modified-date' => 'Zadnja izmjena: $1',
	'view-source' => 'Prikaži izvor',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'hello' => 'Halo',
	'welcome' => 'Witaj',
	'toolversionstamp' => 'Wersija $1 ($2)',
	'etc' => 'atd.',
	'namespace' => 'Mjenowy rum',
	'form-submit' => 'Wotpósłać',
	'form-reset' => 'Wróćo stajić',
	'years' => '{{PLURAL: $1|lěto|lěće|lěta|lět}}',
	'weeks' => '{{PLURAL: $1|tydźeń|njedźeli|njedźele|njedźel}}',
	'days' => '{{PLURAL: $1|dźeń|dnjej|dny|dnjow}}',
	'hours' => '{{PLURAL:$1|hodźina|hodźinje|hodźiny|hodźin}}',
	'minutes' => '{{PLURAL: $1|mjeńšina|mjeńšinje|mjeńšiny|mjeńšin}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundźe|sekundy|sekundow}}',
	'last-modified-date' => 'Posledni raz změnjeny: $1',
	'view-source' => 'Žórłowy tekst pokazać',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author Dj
 */
$messages['hu'] = array(
	'hello' => 'Szia',
	'welcome' => 'Üdvözlet',
	'toolversionstamp' => 'Verzió: $1 ($2)',
	'etc' => 'stb.',
	'namespace' => 'Névtér',
	'form-submit' => 'Gyerünk',
	'form-reset' => 'Alaphelyzet',
	'years' => '{{PLURAL: $1|év|év}}',
	'weeks' => '{{PLURAL: $1|hét|hét}}',
	'days' => '{{PLURAL: $1|nap|nap}}',
	'hours' => '{{PLURAL: $1|óra|óra}}',
	'minutes' => '{{PLURAL: $1|perc|perc}}',
	'seconds' => '{{PLURAL: $1|másodperc|másodperc}}',
	'last-modified-date' => 'Utolsó módosítás ideje: $1',
	'view-source' => 'Forrás megtekintése',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'hello' => 'Salute',
	'welcome' => 'Benvenite',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Spatio de nomines',
	'form-submit' => 'Va',
	'form-reset' => 'Reinitialisar',
	'years' => '{{PLURAL: $1|anno|annos}}',
	'weeks' => '{{PLURAL: $1|septimana|septimanas}}',
	'days' => '{{PLURAL: $1|die|dies}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuta|minutas}}',
	'seconds' => '{{PLURAL: $1|secunda|secundas}}',
	'last-modified-date' => 'Ultime modification: $1',
	'view-source' => 'Vider texto fonte',
);

/** Indonesian (Bahasa Indonesia)
 * @author Aldnonymous
 * @author IvanLanin
 */
$messages['id'] = array(
	'hello' => 'Halo',
	'welcome' => 'Selamat datang',
	'toolversionstamp' => 'Versi $1 ($2)',
	'etc' => 'dll.',
	'namespace' => 'Ruang nama',
	'form-submit' => 'Kirim',
	'form-reset' => 'Reset',
	'years' => '{{PLURAL: $1|Tahun|Tahun}}',
	'weeks' => '{{PLURAL: $1|Minggu|minggu}}',
	'days' => '{{PLURAL: $1|hari|hari}}',
	'hours' => '{{PLURAL: $1|Jam|jam}}',
	'minutes' => '{{PLURAL: $1|Menit|menit}}',
	'seconds' => '{{PLURAL: $1|Detik|detik}}',
	'last-modified-date' => 'Terakhir diubah: $1',
	'view-source' => 'Lihat sumber',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'hello' => 'Салам',
	'welcome' => 'Маьрша доагIалда',
	'namespace' => 'ЦIерий аренаш',
	'form-submit' => 'Кхоачашде',
	'form-reset' => 'Юхаоттар',
	'years' => '{{PLURAL: $1|шу|шера|шераш}}',
	'weeks' => '{{PLURAL: $1|к|иранди|к|иранден|к|иранденош}}',
	'days' => '{{PLURAL: $1|ди|ден|денош}}',
	'hours' => '{{PLURAL: $1|сахьат|сахьата|сахьаташ}}',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Nemo bis
 * @author Rippitippi
 */
$messages['it'] = array(
	'hello' => 'Ciao',
	'welcome' => 'Benvenuto/a',
	'toolversionstamp' => 'Versione $1 ($2)',
	'etc' => 'ecc.',
	'namespace' => 'Namespace',
	'form-submit' => 'Vai',
	'form-reset' => 'Reimposta',
	'years' => '{{PLURAL: $1|anno|anni}}',
	'weeks' => '{{PLURAL: $1|settimana|settimane}}',
	'days' => '{{PLURAL:$1|giorno|giorni}}',
	'hours' => '{{PLURAL:$1|ora|ore}}',
	'minutes' => '{{PLURAL:$1|minuto|minuti}}',
	'seconds' => '{{PLURAL:$1|secondo|secondi}}',
	'last-modified-date' => 'Ultima modifica: $1',
	'view-source' => 'Visualizza sorgente',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 * @author Whym
 */
$messages['ja'] = array(
	'hello' => 'こんにちは',
	'welcome' => 'ようこそ',
	'toolversionstamp' => 'バージョン $1 ($2)',
	'etc' => 'など',
	'namespace' => '名前空間',
	'form-submit' => '実行',
	'form-reset' => 'リセット',
	'years' => '{{PLURAL: $1|年}}',
	'weeks' => '{{PLURAL: $1|週間}}',
	'days' => '{{PLURAL: $1|日}}',
	'hours' => '{{PLURAL: $1|時間}}',
	'minutes' => '{{PLURAL: $1|分}}',
	'seconds' => '{{PLURAL: $1|秒}}',
	'last-modified-date' => '最終更新： $1',
	'view-source' => 'ソースを表示',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'hello' => 'გამარჯობა',
	'welcome' => 'კეთილი იყოს თქვენი მობრძანება',
	'etc' => 'და ა.შ.',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'hello' => 'សួស្ដី',
	'welcome' => 'សូមស្វាគមន៍',
	'toolversionstamp' => 'ច្បាប់ទី $1 ($2)',
	'etc' => '-ល-',
	'namespace' => 'លំហឈ្មោះ',
	'form-submit' => 'ទៅ',
	'form-reset' => 'ធ្វើឱ្យដូចដើមវិញ',
	'years' => '{{PLURAL: $1|ឆ្នាំ|ឆ្នាំ}}',
	'weeks' => '{{PLURAL: $1|សប្តាហ៍|សប្តាហ៍}}',
	'days' => '{{PLURAL: $1|ថ្ងៃ​|ថ្ងៃ​}}',
	'hours' => '{{PLURAL: $1|ម៉ោង​|ម៉ោង​}}',
	'minutes' => '$1{{PLURAL:$1|នាទី|នាទី}}',
	'seconds' => '$1 {{PLURAL:$1|វិនាទី|វិនាទី}}',
	'last-modified-date' => 'ត្រូវបានកែប្រែលើកចុងក្រោយ៖ $1',
	'view-source' => 'មើល​កូដ',
);

/** Korean (한국어)
 * @author Kwj2772
 */
$messages['ko'] = array(
	'hello' => '안녕하세요',
	'welcome' => '환영합니다',
	'toolversionstamp' => '버전 $1 ($2)',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'dateformat' => '%d. %B %Y',
	'hello' => 'Ene schööne Daach!',
	'welcome' => 'Wellkumme!',
	'toolversionstamp' => 'De Version $1 vum $2',
	'etc' => 'uew.',
	'namespace' => 'Appachtemang',
	'form-submit' => 'Lohß Jonn!',
	'form-reset' => 'Et Enjävve neu Aanfange!',
	'years' => '{{PLURAL: $1|Johr|Johre|Johre}}',
	'weeks' => '{{PLURAL: $1|Woch|Woche|Woche}}',
	'days' => '{{PLURAL:$1|Daach|Dääsch|Daach}}',
	'hours' => '({{PLURAL:$1|Shtund|Shtunde|Shtunde}})',
	'minutes' => '{{PLURAL:$1|Menutt|Menutte|Menutte}}',
	'seconds' => '{{PLURAL:$1|Sekund|Sekunde|Sekund}}',
	'last-modified-date' => 'Et läz jeändert aam $1',
	'view-source' => 'Der Quelltäx vum Projramm',
);

/** Kurdish (Latin script) (‪Kurdî (latînî)‬)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'hello' => 'Silav',
	'welcome' => 'Bi xêr hatî',
	'etc' => 'hwd.',
	'namespace' => 'Boşahîya nav',
	'view-source' => 'Çavkanîyê bibîne',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'hello' => 'Salve',
	'form-submit' => 'Ire',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Salut',
	'welcome' => 'Wëllkomm',
	'toolversionstamp' => 'Versioun $1 ($2)',
	'etc' => 'asw.',
	'namespace' => 'Nummraum',
	'form-submit' => 'Lass',
	'form-reset' => 'Zrécksetzen',
	'years' => '{{PLURAL: $1|Joer|Joer}}',
	'weeks' => '{{PLURAL: $1|Woch|Wochen}}',
	'days' => '{{PLURAL: $1|Dag|Deeg}}',
	'hours' => '{{PLURAL: $1|Stonn|Stonnen}}',
	'minutes' => '{{PLURAL: $1|Minutt|Minutten}}',
	'seconds' => '{{PLURAL: $1|Sekonn|Sekonnen}}',
	'last-modified-date' => 'Lescht Ännerung: $1',
	'view-source' => 'Quellcode weisen',
);

/** Lezghian (Лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'welcome' => 'Ша башуьсте',
	'years' => 'йисар',
	'weeks' => '{{PLURAL: $1|афте|афтеяр}}',
	'days' => '{{PLURAL: $1|югъ|йикъар}}',
	'hours' => '{{PLURAL: $1|сят|сятерал}}',
);

/** Lithuanian (Lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'hello' => 'Sveiki',
	'welcome' => 'Sveiki atvykę',
	'toolversionstamp' => 'Versija $1 ($2)',
	'etc' => 'ir t. t.',
	'namespace' => 'Vardų sritis',
	'form-submit' => 'Eiti',
	'form-reset' => 'Atstatyti',
	'years' => 'metų',
	'weeks' => 'savaičių',
	'days' => 'dienų',
	'hours' => 'valandų',
	'last-modified-date' => 'Paskutinį kartą atnaujinta: $1',
	'view-source' => 'Peržiūrėti šaltinį',
);

/** Latvian (Latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'form-submit' => 'Aiziet',
	'years' => 'gadi',
	'weeks' => 'nedēļas',
	'days' => 'dienas',
	'hours' => 'stundas',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Здраво',
	'welcome' => 'Добредојдовте',
	'toolversionstamp' => 'Верзија $1 ($2)',
	'etc' => 'и тн.',
	'namespace' => 'Именски простор',
	'form-submit' => 'Оди',
	'form-reset' => 'Одново',
	'years' => '{{PLURAL: $1|година|години}}',
	'weeks' => '{{PLURAL: $1|недела|недели}}',
	'days' => '{{PLURAL: $1|ден|дена}}',
	'hours' => '{{PLURAL: $1|час|часа}}',
	'minutes' => '{{PLURAL: $1|минута|минути}}',
	'seconds' => '{{PLURAL: $1|секунда|секунди}}',
	'last-modified-date' => 'Последена измена: $1',
	'view-source' => 'Извор',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'hello' => 'Apa khabar',
	'welcome' => 'Selamat datang',
	'toolversionstamp' => 'Versi $1 ($2)',
	'etc' => 'dsb.',
	'namespace' => 'Ruang nama',
	'form-submit' => 'Pergi',
	'form-reset' => 'Set semula',
	'years' => '{{PLURAL: $1|tahun|tahun}}',
	'weeks' => '{{PLURAL: $1|minggu|minggu}}',
	'days' => '{{PLURAL: $1|hari|hari}}',
	'hours' => '{{PLURAL: $1|jam|jam}}',
	'minutes' => '{{PLURAL: $1|minit|minit}}',
	'seconds' => '{{PLURAL: $1|saat|saat}}',
	'last-modified-date' => 'Kali terakhir diubah: $1',
	'view-source' => 'Lihat sumber',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'welcome' => 'ကြိုဆိုပါသည်',
	'namespace' => 'အမည်ညွှန်းများ',
	'form-submit' => 'သွား​ပါ​',
	'form-reset' => 'Reset ချရန်',
	'view-source' => 'ရင်းမြစ်ကို ကြည့်ရန်',
);

/** Norwegian Bokmål (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Velkommen',
	'toolversionstamp' => 'Versjon $1 ($2)',
	'etc' => 'osv.',
	'namespace' => 'Navnerom',
	'form-submit' => 'Gå',
	'form-reset' => 'Nullstill',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|uke|uker}}',
	'days' => '{{PLURAL: $1|dag|dager}}',
	'hours' => '{{PLURAL: $1|time|timer}}',
	'minutes' => '{{PLURAL: $1|minutt|minutter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Sist endret: $1',
	'view-source' => 'Vis kilde',
);

/** Dutch (Nederlands)
 * @author GerardM
 * @author Krinkle
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Hallo',
	'welcome' => 'Welkom',
	'toolversionstamp' => 'Versie $1 ($2)',
	'etc' => 'enzovoort',
	'namespace' => 'Naamruimte',
	'form-submit' => 'OK',
	'form-reset' => 'Opnieuw instellen',
	'years' => '{{PLURAL: $1|jaar|jaren}}',
	'weeks' => '{{PLURAL: $1|week|weken}}',
	'days' => '{{PLURAL: $1|dag|dagen}}',
	'hours' => '{{PLURAL: $1|uur|uur}}',
	'minutes' => '{{PLURAL: $1|minuut|minuten}}',
	'seconds' => '{{PLURAL: $1|seconde|seconden}}',
	'last-modified-date' => 'Laatste wijziging op: $1',
	'view-source' => 'Brontekst bekijken',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Velkommen',
	'toolversionstamp' => 'Versjon $1 ($2)',
	'etc' => 'osv.',
	'namespace' => 'Navnerom',
	'form-submit' => 'Gå',
	'form-reset' => 'Nullstill',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|uke|uker}}',
	'days' => '{{PLURAL: $1|dag|dager}}',
	'hours' => '{{PLURAL: $1|time|timer}}',
	'minutes' => '{{PLURAL: $1|minutt|minutter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Sist endret: $1',
	'view-source' => 'Vis kilde',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'hello' => 'Heiya',
	'welcome' => 'Wilkum',
	'namespace' => 'Blatznaame',
	'years' => '{{PLURAL: $1|Yaahr|Yaahre}}',
	'weeks' => '{{PLURAL: $1|Woch|Woche}}',
	'days' => '{{PLURAL: $1|Daag|Daag}}',
	'hours' => '{{PLURAL:$1|Schtund|Schtund}}',
);

/** Polish (Polski)
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'hello' => 'Witaj',
	'welcome' => 'Witaj',
	'toolversionstamp' => 'Wersja $1 z $2',
	'etc' => 'itp.',
	'namespace' => 'Przestrzeń nazw',
	'form-submit' => 'Dalej',
	'form-reset' => 'Wyczyść',
	'years' => '{{PLURAL:$1|rok|lata|lat}}',
	'weeks' => '{{PLURAL:$1|tydzień|tygodnie|tygodni}}',
	'days' => '{{PLURAL:$1|dzień|dni}}',
	'hours' => '{{PLURAL:$1|godzina|godziny|godzin}}',
	'minutes' => '{{PLURAL:$1|minuta|minuty|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundy|sekund}}',
	'last-modified-date' => 'Ostatnia modyfikacja $1',
	'view-source' => 'Tekst źródłowy',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'hello' => 'سلامونه',
	'welcome' => 'ښه راغلۍ',
	'toolversionstamp' => 'نسخه $1 ($2)',
	'etc' => 'او داسې نور',
	'namespace' => 'نوم-تشيال',
	'form-submit' => 'ورځه',
	'form-reset' => 'بياايښودل',
	'years' => '{{PLURAL: $1|کال|کالونه}}',
	'weeks' => '{{PLURAL: $1|اونۍ|اونۍ}}',
	'days' => '{{PLURAL: $1|ورځ|ورځې}}',
	'hours' => '{{PLURAL:$1|ساعت|ساعتونه}}',
	'minutes' => '{{PLURAL:$1|دقيقه|دقيقې}}',
	'seconds' => '{{PLURAL:$1|ثانيه|ثانيې}}',
	'last-modified-date' => 'وروستی بدلون: $1',
	'view-source' => 'سرچينه کتل',
);

/** Portuguese (Português)
 * @author GoEThe
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'hello' => 'Olá',
	'welcome' => 'Bem-vindo',
	'toolversionstamp' => 'Versão $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaço nominal',
	'form-submit' => 'Enviar',
	'form-reset' => 'Repor',
	'years' => 'anos',
	'weeks' => 'semanas',
	'days' => 'dias',
	'hours' => 'horas',
	'last-modified-date' => 'Última modificação: $1',
	'view-source' => 'Ver código fonte',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'hello' => 'Olá',
	'welcome' => 'Bem-vindo',
	'toolversionstamp' => 'Versão $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaço nominal',
	'form-reset' => 'Restaurar',
	'years' => '{{PLURAL: $1|ano|anos}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|dia|dias}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'hello' => 'Bună',
	'welcome' => 'Bun venit',
	'toolversionstamp' => 'Versiunea $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Spațiu de nume',
	'form-submit' => 'Du-te',
	'form-reset' => 'Resetează',
	'years' => '{{PLURAL: $1|an|ani}}',
	'weeks' => '{{PLURAL: $1|săptămână|săptămâni}}',
	'days' => '{{PLURAL: $1|zi|zile}}',
	'hours' => '{{PLURAL: $1|oră|ore}}',
	'minutes' => '{{PLURAL: $1|minut|minute}}',
	'seconds' => '{{PLURAL: $1|secundă|secunde}}',
	'last-modified-date' => 'Ultima modificare: $1',
	'view-source' => 'Sursă pagină',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'dateformat' => '%B %d %Y',
	'hello' => 'Cià',
	'welcome' => 'Bovègne',
	'toolversionstamp' => 'Versione $1 ($2)',
	'etc' => 'ecc.',
	'colon-separator' => ':',
	'namespace' => 'Namespace',
	'form-submit' => 'Veje',
	'form-reset' => 'Azzere',
	'years' => '{{PLURAL: $1|anne|anne}}',
	'weeks' => '{{PLURAL: $1|sumàne|sumàne}}',
	'days' => '{{PLURAL: $1|sciurne|sciurne}}',
	'hours' => '{{PLURAL: $1|ore|ore}}',
	'minutes' => '{{PLURAL:$1|minute|minute}}',
	'seconds' => '{{PLURAL:$1|seconde|seconde}}',
	'last-modified-date' => 'Urteme cangiamende: $1',
	'view-source' => "Vide 'u sorgende",
	'parentheses' => '($1)',
);

/** Russian (Русский)
 * @author Eleferen
 * @author Lvova
 * @author Rave
 */
$messages['ru'] = array(
	'hello' => 'Привет',
	'welcome' => 'Добро пожаловать',
	'toolversionstamp' => 'Версия $1 ($2)',
	'etc' => 'и т.д.',
	'namespace' => 'Пространство имён',
	'form-submit' => 'Перейти',
	'form-reset' => 'Очистить',
	'years' => '{{PLURAL: $1|год|года|лет}}',
	'weeks' => '{{PLURAL: $1|неделя|недели|недель}}',
	'days' => '{{PLURAL: $1|день|дня|дней}}',
	'hours' => '{{PLURAL: $1|час|часа|часов}}',
	'minutes' => '{{PLURAL: $1|минута|минуты|минут}}',
	'seconds' => '{{PLURAL: $1|секунда|секунды|секунд}}',
	'last-modified-date' => 'Дата последнего изменения: $1',
	'view-source' => 'Просмотр исходного кода',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'hello' => 'ආයුබෝවන්',
	'welcome' => 'ආයුබෝවන්',
	'toolversionstamp' => 'අනුවාදය $1 ($2)',
	'etc' => 'යනාදිය.',
	'namespace' => 'නාම අවකාශය',
	'form-submit' => 'යන්න',
	'form-reset' => 'නැවත සකසන්න',
	'years' => '{{PLURAL: $1|අවුරුද්ද|අවුරුදු}}',
	'weeks' => '{{PLURAL: $1|සතිය|සති}}',
	'days' => '{{PLURAL: $1|දවස|දවස්}}',
	'hours' => '{{PLURAL: $1|පැය|පැය}}',
	'minutes' => '{{PLURAL:$1|විනාඩිය|විනාඩි}}',
	'seconds' => '{{PLURAL: $1|තත්පරය|තත්පර}}',
	'last-modified-date' => 'අවසන්වරට සංස්කරණය කරන ලද්දේ: $1',
	'view-source' => 'මූලාශ්‍රය බලන්න',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'hello' => 'Pozdravljeni',
	'welcome' => 'Dobrodošli',
	'toolversionstamp' => 'Različica $1 ($2)',
	'etc' => 'idr.',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Pojdi',
	'form-reset' => 'Ponastavi',
	'years' => '{{PLURAL:$1|leto|leti|leta|let}}',
	'weeks' => '{{PLURAL:$1|teden|tedna|tedni|tednov}}',
	'days' => '{{PLURAL:$1|dan|dneva|dnevi|dni}}',
	'hours' => '{{PLURAL:$1|ura|uri|ure|ur}}',
	'minutes' => '{{PLURAL:$1|minuta|minuti|minute|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundi|sekunde|sekund}}',
	'last-modified-date' => 'Zadnja sprememba: $1',
	'view-source' => 'Izvorna koda',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Здраво',
	'welcome' => 'Добро дошли',
	'toolversionstamp' => 'Издање $1 ($2)',
	'etc' => 'итд.',
	'colon-separator' => ':',
	'namespace' => 'Именски простор',
	'form-submit' => 'Иди',
	'form-reset' => 'Поништи',
	'years' => '{{PLURAL: $1|година|године|година}}',
	'weeks' => '{{PLURAL: $1|недеља|недеље|недеља}}',
	'days' => '{{PLURAL: $1|дан|дана|дана}}',
	'hours' => '{{PLURAL: $1|сат|сата|сати}}',
	'minutes' => '{{PLURAL: $1|минут|минута|минута}}',
	'seconds' => '{{PLURAL: $1|секунд|секунде|секунди}}',
	'last-modified-date' => 'Последња измена: $1',
	'view-source' => 'Изворник',
	'parentheses' => '($1)',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Zdravo',
	'welcome' => 'Dobro došli',
	'toolversionstamp' => 'Izdanje $1 ($2)',
	'etc' => 'itd.',
	'colon-separator' => ':',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Idi',
	'form-reset' => 'Poništi',
	'years' => '{{PLURAL: $1|godina|godine|godina}}',
	'weeks' => '{{PLURAL: $1|nedelja|nedelje|nedelja}}',
	'days' => '{{PLURAL: $1|dan|dana|dana}}',
	'hours' => '{{PLURAL: $1|sat|sata|sati}}',
	'minutes' => '{{PLURAL: $1|minut|minuta|minuta}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunde|sekundi}}',
	'last-modified-date' => 'Poslednja izmena: $1',
	'view-source' => 'Izvornik',
	'parentheses' => '($1)',
);

/** Swedish (Svenska)
 * @author Cybjit
 * @author Liftarn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'hello' => 'Hej',
	'welcome' => 'Välkommen',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Namnrymd',
	'form-submit' => 'Gå',
	'form-reset' => 'Nollställ',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|vecka|veckor}}',
	'days' => '{{PLURAL: $1|dag|dagar}}',
	'hours' => '{{PLURAL: $1|timme|timmar}}',
	'minutes' => '{{PLURAL: $1|minut|minuter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Senast uppdaterad: $1',
	'view-source' => 'Visa källkod',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Logicwiki
 */
$messages['ta'] = array(
	'hello' => 'வணக்கம்',
	'welcome' => 'வருக',
	'etc' => 'இன்ன பிற',
	'namespace' => 'பெயர்வெளி',
	'form-submit' => 'செல்',
	'form-reset' => 'மீட்டமைக்க',
	'years' => '{{PLURAL: $1|வருடம்|வருடங்கள்}}',
	'weeks' => '{{PLURAL: $1|வாரம்|வாரங்கள்}}',
	'days' => '{{PLURAL: $1|நாள்|நாட்கள்}}',
	'hours' => '{{PLURAL: $1|மணி|மணிகள்}}',
	'minutes' => '{{PLURAL: $1|நிமிடம்|நிமிடங்கள்}}',
	'seconds' => '{{PLURAL: $1|வினாடி|வினாடிகள்}}',
	'last-modified-date' => 'கடைசியாகத் திருத்தப்பட்டது: $1',
	'view-source' => 'மூலத்தைப் பார்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'hello' => 'హలో',
	'welcome' => 'స్వాగతం',
	'toolversionstamp' => 'సంచిక $1 ($2)',
	'etc' => 'మొ.వి.',
	'namespace' => 'పేరుబరి',
	'form-submit' => 'వెళ్ళు',
	'years' => '{{PLURAL: $1|సంవత్సరం|సంవత్సరాలు}}',
	'weeks' => '{{PLURAL: $1|వారం|వారాలు}}',
	'days' => '{{PLURAL: $1|రోజు|రోజులు}}',
	'hours' => '{{PLURAL:$1|గంట|గంటలు}}',
	'minutes' => '{{PLURAL: $1|నిమిషం|నిమిషాలు}}',
	'seconds' => '{{PLURAL: $1|క్షణం|క్షణాలు}}',
	'last-modified-date' => 'చివరి మార్పు: $1',
	'view-source' => 'మూలాన్ని చూడండి',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'hello' => 'Olá',
	'toolversionstamp' => 'Versaun $1 ($2)',
	'etc' => 'sst.',
	'form-submit' => 'OK',
	'years' => '{{PLURAL: $1|tinan|tinan}}',
	'weeks' => '{{PLURAL: $1|semana|semana}}',
	'days' => '{{PLURAL: $1|loron|loron}}',
	'hours' => '{{PLURAL: $1|oras|oras}}',
	'last-modified-date' => 'Mudansa ba dala ikus: $1',
);

/** Tigrinya (ትግርኛ)
 * @author Tigrigna1
 */
$messages['ti'] = array(
	'years' => 'ዓመት| ዓመታት',
	'days' => 'መዓልቲ|መዓልታት',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'hello' => 'Kumusta',
	'welcome' => 'Maligayang pagdating',
	'toolversionstamp' => 'Bersyong $1 ($2)',
	'etc' => 'at iba pa',
	'namespace' => 'Puwang ng pangalan',
	'form-submit' => 'Pumunta',
	'form-reset' => 'Muling itakda',
	'years' => 'mga taon',
	'weeks' => 'mga linggo',
	'days' => 'mga araw',
	'hours' => 'mga oras',
	'minutes' => 'mga minuto',
	'seconds' => 'mga segundo',
	'last-modified-date' => 'Huling nabago noong: $1',
	'view-source' => 'Tingnan ang pinagmulan',
);

/** Толышә зывон (Толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'hello' => 'Сәлом',
	'welcome' => 'Хәш омәјшон!',
	'toolversionstamp' => 'Рәвојәт $1 ($2)',
	'namespace' => 'Номон мәкон',
	'form-submit' => 'Давардеј',
	'form-reset' => 'Тәмиз кардеј',
	'years' => '{{PLURAL: $1|сор|сор}}',
	'weeks' => '{{PLURAL: $1|һәфтә|һәфтә}}',
	'days' => '{{PLURAL: $1|руж|руж}}',
	'hours' => '{{PLURAL: $1|саат|саат}}',
	'minutes' => '{{PLURAL: $1|дәғиғә|дәғиғә}}',
	'last-modified-date' => 'Охонә дәгиши тарых: $1',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'hello' => 'Merhaba',
	'welcome' => 'Hoş geldiniz',
	'toolversionstamp' => 'Sürüm $1 ($2)',
	'etc' => 'vs.',
	'namespace' => 'Ad alanı',
	'form-submit' => 'Gönder',
	'form-reset' => 'Sıfırla',
	'years' => '{{PLURAL: $1|yıl|yıl}}',
	'weeks' => '{{PLURAL: $1|hafta|hafta}}',
	'days' => '{{PLURAL: $1|gün|gün}}',
	'hours' => '{{PLURAL: $1|saat|saat}}',
	'minutes' => '{{PLURAL: $1|dakika|dakika}}',
	'seconds' => '{{PLURAL: $1|saniye|saniye}}',
	'last-modified-date' => 'Son değiştirme: $1',
	'view-source' => 'Kaynağı gör',
);

/** Tuvinian (Тыва дыл)
 * @author Sborsody
 */
$messages['tyv'] = array(
	'hello' => 'Экии',
	'welcome' => 'Кирип моорлаңар',
	'toolversionstamp' => 'Үндүрери $1 ($2)',
	'namespace' => 'Аттар делгеми',
	'form-submit' => 'Күүcедири',
	'years' => '{{PLURAL: $1|чыл|чыл}}',
	'weeks' => '{{PLURAL: $1|чеди-хонук|чеди-хонук}}',
	'days' => '{{PLURAL: $1|хүн|хүн}}',
	'hours' => '{{PLURAL: $1|шак|шак}}',
	'minutes' => '{{PLURAL: $1|минут|минут}}',
	'seconds' => '{{PLURAL: $1|секунда|секунда}}',
	'view-source' => 'Дөзү бижиин көөрү',
);

/** Ukrainian (Українська)
 * @author Тест
 */
$messages['uk'] = array(
	'hello' => 'Вітаю',
	'namespace' => 'Простір назв',
	'years' => '{{PLURAL: $1|рік|роки|років}}',
	'weeks' => '{{PLURAL: $1|тиждень|тижня|тижнів}}',
	'days' => '{{PLURAL: $1|день|дні|днів}}',
	'hours' => '{{PLURAL: $1|годину|години|годин}}',
	'last-modified-date' => 'Остання зміна: $1',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'dateformat' => '%d tháng %m năm %Y',
	'hello' => 'Xin chào',
	'welcome' => 'Hoan nghênh',
	'toolversionstamp' => 'Phiên bản $1 ($2)',
	'etc' => 'v.v.',
	'namespace' => 'Không gian tên',
	'form-submit' => 'Lưu',
	'form-reset' => 'Mặc định lại',
	'years' => '{{PLURAL:$1}} năm',
	'weeks' => '{{PLURAL:$1}} tuần',
	'days' => '{{PLURAL:$1}} ngày',
	'hours' => '{{PLURAL:$1}} giờ',
	'minutes' => '{{PLURAL:$1}} phút',
	'seconds' => '{{PLURAL:$1}} giây',
	'last-modified-date' => 'Sửa đổi lần cuối: $1',
	'view-source' => 'Xem mã nguồn',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'form-reset' => 'צוריקשטעלן',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author Hzy980512
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'hello' => '你好',
	'welcome' => '欢迎',
	'toolversionstamp' => '版本 $1 ($2)',
	'etc' => '等。',
	'namespace' => '名字空间',
	'form-submit' => '提交',
	'form-reset' => '重置',
	'years' => '{{PLURAL: $1|年}}',
	'weeks' => '{{PLURAL: $1|周}}',
	'days' => '{{PLURAL: $1|天}}',
	'hours' => '{{PLURAL: $1|小时}}',
	'minutes' => '{{PLURAL: $1|分钟}}',
	'seconds' => '{{PLURAL: $1|秒}}',
	'last-modified-date' => '最近修改: $1',
	'view-source' => '查看源代码',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Justincheng12345
 * @author Lauhenry
 */
$messages['zh-hant'] = array(
	'hello' => '您好',
	'welcome' => '歡迎',
	'toolversionstamp' => '版本$1 ($2)',
	'etc' => '等。',
	'form-reset' => '重置',
	'years' => '{{PLURAL: $1|年|年}}',
	'weeks' => '$1週',
	'days' => '{{PLURAL: $1|天|天}}',
	'hours' => '{{PLURAL: $1|小時|小時}}',
	'minutes' => '{{PLURAL: $1|分鐘|分鐘}}',
	'seconds' => '{{PLURAL: $1|秒|秒}}',
	'last-modified-date' => '最近修改於: $1',
	'view-source' => '查看原始碼',
);

/** Chinese (Hong Kong) (‪中文(香港)‬)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'hello' => '您好',
	'welcome' => '歡迎',
	'toolversionstamp' => '版本$1 ($2)',
	'etc' => '等。',
	'namespace' => '名字空間',
	'form-submit' => '提交',
	'form-reset' => '重設',
	'years' => '$1年',
	'weeks' => '$1週',
	'days' => '$1天',
	'hours' => '$1小時',
	'minutes' => '$1分鐘',
	'seconds' => '$1秒',
	'last-modified-date' => '最後修改:$1',
	'view-source' => '查看原始碼',
);

