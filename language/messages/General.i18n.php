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
	'dateformat' => '{{Optional}} Dateformat in this language. See documentation about [http://www.php.net/manual/en/function.strftime.php strftime() at php.net] for the syntax.',
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
	'minutes' => 'Notation of time duration for multiple hours (eg. "Duration: x minutes" ). No support for advenced plural yet.',
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
	'years' => 'سنين',
	'weeks' => 'أسابيع',
	'days' => 'أيام',
	'hours' => 'ساعات',
	'last-modified-date' => 'آخر تغيير: $1',
	'view-source' => 'شاهد المصدر',
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
 */
$messages['az'] = array(
	'hello' => 'Salam',
	'form-reset' => 'Qur',
	'years' => 'illər',
	'weeks' => 'həftələr',
	'days' => 'günlər',
	'hours' => 'saatlar',
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
	'years' => 'বছর',
	'weeks' => 'সপ্তাহ',
	'days' => 'দিন',
	'hours' => 'ঘণ্টা',
	'minutes' => 'মিনিট',
	'seconds' => 'সেকেন্ড',
	'last-modified-date' => 'সর্বশেষ পরিবর্তন: $1',
	'view-source' => 'সোর্স দেখাও',
);

/** Breton (Brezhoneg)
 * @author Fulup
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
	'years' => 'anys',
	'weeks' => 'setmanes',
	'days' => 'dies',
	'hours' => 'hores',
	'last-modified-date' => 'Darrera modificació: $1',
	'view-source' => 'Mostra el codi font',
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
	'years' => 'urte',
	'weeks' => 'aste',
	'days' => 'egun',
	'hours' => 'ordu',
	'minutes' => 'minutu',
	'seconds' => 'segundu',
	'last-modified-date' => 'Azken aldaketa: $1',
	'view-source' => 'Iturria ikusi',
);

/** Persian (فارسی)
 * @author Ebraminio
 */
$messages['fa'] = array(
	'hello' => 'سلام',
	'welcome' => 'خوش‌آمدید',
	'toolversionstamp' => 'نسخهٔ $1 ($2)',
	'etc' => 'غیره.',
	'namespace' => 'فضای نام',
	'form-submit' => 'برو',
	'form-reset' => 'بازنشانی',
	'years' => 'سال‌ها',
	'weeks' => 'هفته‌ها',
	'days' => 'روزها',
	'hours' => 'ساعت‌ها',
	'minutes' => 'دقایق',
	'seconds' => 'ثانیه‌ها',
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
	'years' => 'vuotta',
	'weeks' => 'viikkoa',
	'days' => 'päivää',
	'hours' => 'tuntia',
	'minutes' => 'minuuttia',
	'seconds' => 'sekuntia',
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

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'hello' => 'Szia',
	'welcome' => 'Üdvözlet',
	'toolversionstamp' => 'Verzió: $1 ($2)',
	'etc' => 'stb.',
	'namespace' => 'Névtér',
	'form-submit' => 'Gyerünk',
	'form-reset' => 'Alaphelyzet',
	'years' => 'év',
	'weeks' => 'hét',
	'days' => 'nap',
	'hours' => 'óra',
	'minutes' => 'perc',
	'seconds' => 'másodperc',
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
	'form-submit' => 'Ir',
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
	'years' => 'tahun',
	'weeks' => 'minggu',
	'days' => 'hari',
	'hours' => 'jam',
	'last-modified-date' => 'Terakhir diubah: $1',
	'view-source' => 'Lihat sumber',
);

/** Ingush (ГІалгІай Ğalğaj)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'hello' => 'Салам',
	'welcome' => 'Маьрша доагIалда',
	'namespace' => 'ЦIерий аренаш',
	'form-submit' => 'Кхоачашде',
	'form-reset' => 'Юхаоттар',
	'years' => 'шераш',
	'weeks' => 'кIиранденош',
	'days' => 'денош',
	'hours' => 'сахьаташ',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Rippitippi
 */
$messages['it'] = array(
	'hello' => 'Ciao',
	'welcome' => 'Benvenuto(a)',
	'toolversionstamp' => 'Versione $1 ($2)',
	'etc' => 'ecc.',
	'namespace' => 'Namespace',
	'form-submit' => 'Vai',
	'form-reset' => 'Reimposta',
	'years' => '{{PLURAL: $1|anno|anni}}',
	'weeks' => '{{PLURAL: $1|settimana|settimane}}',
	'days' => '{{PLURAL: $1|giorno|giorni}}',
	'hours' => '{{PLURAL: $1|ora|ore}}',
	'last-modified-date' => 'Ultima modifica: $1',
	'view-source' => 'Visualizza sorgente',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'hello' => 'សួស្ដី',
	'welcome' => 'សូមស្វាគមន៍',
	'toolversionstamp' => 'ច្បាប់ទី $1 ($2)',
	'etc' => '-ល-',
	'namespace' => 'ប្រភេទ',
	'form-submit' => 'ទៅ',
	'form-reset' => 'ធ្វើឱ្យដូចដើមវិញ',
	'years' => 'ឆ្នាំ​',
	'weeks' => 'សប្តាហ៍',
	'days' => 'ថ្ងៃ​',
	'hours' => 'ម៉ោង​',
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
	'years' => 'Johr(e)',
	'weeks' => 'Woch(e)',
	'days' => 'Daach/Dääsch',
	'hours' => 'Shtund(e)',
	'minutes' => 'Menutte',
	'seconds' => 'Sekonde',
	'last-modified-date' => 'Et läz jeändert aam $1',
	'view-source' => 'Der Quelltäx vum Projramm',
);

/** Kurdish (Latin) (Kurdî (Latin))
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
	'years' => 'йис',
	'weeks' => 'афте',
	'days' => 'югъ',
	'hours' => 'сятер',
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
	'years' => 'Yaahre',
	'weeks' => 'Woche',
	'days' => 'Daage',
	'hours' => 'Schtunde',
);

/** Polish (Polski)
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'hello' => 'Hej',
	'welcome' => 'Witaj',
	'toolversionstamp' => 'Wersja $1 ($2)',
	'etc' => 'itp.',
	'namespace' => 'Przestrzeń nazw',
	'form-submit' => 'Przejdź',
	'form-reset' => 'Wyczyść',
	'years' => '{{PLURAL:$1|rok|lata|lat}}',
	'weeks' => '{{PLURAL:$1|tydzień|tygodnie|tygodni}}',
	'days' => '{{PLURAL:$1|dzień|dni}}',
	'hours' => '{{PLURAL:$1|godzina|godziny|godzin}}',
	'minutes' => '{{PLURAL:$1|minuta|minuty|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundy|sekund}}',
	'last-modified-date' => 'Data ostatniej modyfikacji: $1',
	'view-source' => 'Tekst źródłowy',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'hello' => 'سلامونه',
	'welcome' => 'ښه راغلاست',
	'etc' => 'او داسې نور',
	'namespace' => 'نوم-تشيال',
	'form-submit' => 'ورځه',
	'years' => 'کالونه',
	'weeks' => 'اونۍ',
	'days' => 'ورځې',
	'hours' => 'ساعتونه',
	'minutes' => 'دقيقې',
	'seconds' => 'ثانيې',
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
	'hello' => 'Cià',
	'welcome' => 'Bovègne',
	'toolversionstamp' => 'Versione $1 ($2)',
	'etc' => 'ecc.',
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
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'welcome' => 'ආයුබෝවන්',
	'form-submit' => 'යන්න',
	'form-reset' => 'නැවත සකසන්න',
	'years' => 'අවුරුදු',
	'days' => 'දවස්',
	'hours' => 'පැය',
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

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'hello' => 'Здраво',
	'welcome' => 'Добро дошли',
	'toolversionstamp' => 'Издање $1 ($2)',
	'etc' => 'итд.',
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
);

/** Serbian Latin ekavian (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'hello' => 'Zdravo',
	'welcome' => 'Dobro došli',
	'toolversionstamp' => 'Izdanje $1 ($2)',
	'etc' => 'itd.',
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
	'view-source' => 'Izvor',
);

/** Swedish (Svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'hello' => 'Hej',
	'welcome' => 'Välkommen',
	'toolversionstamp' => ' Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Namnrymd',
	'form-submit' => 'Gå',
	'form-reset' => 'Nollställ',
	'years' => 'år',
	'weeks' => 'veckor',
	'days' => 'dagar',
	'hours' => 'timmar',
	'minutes' => 'minuter',
	'seconds' => 'sekunder',
	'last-modified-date' => 'Senast uppdaterad: $1',
	'view-source' => 'Visa källkod',
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
	'years' => 'tinan',
	'weeks' => 'semana',
	'days' => 'loron',
	'hours' => 'oras',
	'last-modified-date' => 'Mudansa ba dala ikus: $1',
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

/** Turkish (Türkçe)
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
	'years' => 'yıl',
	'weeks' => 'hafta',
	'days' => 'gün',
	'hours' => 'saat',
	'last-modified-date' => 'Son değiştirme: $1',
	'view-source' => 'Kaynağı gör',
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

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
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
	'years' => '年',
	'weeks' => '周',
	'days' => '天',
	'hours' => '小时',
	'minutes' => '分钟',
	'seconds' => '秒',
	'last-modified-date' => '最近修改: $1',
	'view-source' => '查看源代码',
);

