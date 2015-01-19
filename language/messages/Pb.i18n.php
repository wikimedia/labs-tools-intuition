<?php
/**
 * Interface messages for the WP:PB project.
 *
 * @toolowner ireas, Euku, Wiegels
 */

$url = 'https://tools.wmflabs.org/pb/';

$messages = array();

/**
 * Englisch
 *
 * @author ireas
 */
$messages['en'] = array(
    'pb-about-pb-navi' => 'About',
    'pb-about-pb-tech' => 'Technical details',
    'pb-about-pb-tech-text' => '<p>We use <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> and <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> for this interface. The source code is published under the terms of the <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) and can be accessed <a href="https://github.com/tool-labs/pb">on GitHub</a>. Please add bug reports, feature requests or other comments <a href="https://github.com/tool-labs/pb/issues/new">to the GitHub issue tracker</a> or report it on the <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">Wikipedia talk page</a>.</p>
    <p>Current dumps of the PB database can be found <a href="/pb/sql-dumps">here</a>.</p>
    <p>We use several icons created by the <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a> project.</p>',
    'pb-about-pb-text' => '<p>This project represents personal acquaintances between Wikimedians.</p>
    <p>The first implementation was done by Ulli Purwin (interface) and Euku (bot). In the beginning of 2011, Wiegels and Ireas followed Ulli doing the interface. By now, the project is not longer hosted on a private server but on Wikimedia Labs.</p>
    <p>More information about this project can be found in the German Wikipedia on the page <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
    'pb-about-pb-title' => 'About the project',
    'pb-change-language' => 'Change language',
    'pb-comment' => 'Comment',
    'pb-confirmations-given' => 'Given confirmations',
    'pb-confirmations-taken' => 'Received confirmations',
    'pb-current-confirmations' => 'There are $1 confirmations in total, this is about <abbr title="$2">$3</abbr> confirmations per day.',
    'pb-current-figures' => 'Current figures',
    'pb-current-users' => 'At the moment, $1 users participate in the <em>Personal Acquaintances</em> project.',
    'pb-date' => 'Date',
    'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> on Tool Labs. <a href="$1" title="About Wikipedia:Persönliche Bekanntschaften">More information.</a>',
    'pb-home' => 'Home',
    'pb-home-welcome' => 'Welcome to the <em>Personal Acquaintances</em> project (<em>Persönliche-Bekanntschaften</em> in German)!  More information about this project can be found <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">in the German language Wikipedia</a>.',
    'pb-javascript-notice' => 'We recommend to enable JavaScript for this website to improve the user interface.',
    'pb-labs-name' => 'Wikimedia Tool Labs',
    'pb-participates-since' => 'Participates since',
    'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
    'pb-powered-by-labs' => 'Powered by Wikimedia Tool Labs',
    'pb-recent-confirmations' => 'Recent confirmations',
    'pb-reconfirmed' => 'Reconfirmed?',
    'pb-user' => 'User',
    'pb-user-link-title' => 'Details for user $1',
    'pb-user-heading' => 'Information for <a href="$2" title="User page of $1">$1</a>',
    'pb-user-title' => 'Information for $1',
    'pb-users-navi' => 'Users',
    'pb-users-title' => 'List of participators',
    'pb-users-overview' => 'These $1 users participate in the <em>Personal Acquaintance</em> project:',
    'pb-verified-since' => 'Verified since',
);

/** Message documentation (Message documentation)
 * @author Liuxinyu970226
 * @author Shirayuki
 * @author Siebrand
 * @author ireas
 */
$messages['qqq'] = array(
	'pb-about-pb-navi' => 'Navigation item ‘About PB’
{{Identical|About}}',
	'pb-about-pb-tech' => 'About section "Technical".
{{Identical|Technical details}}',
	'pb-about-pb-tech-text' => 'Description of the technical details of the project (HTML allowed, in <p> tag(s))',
	'pb-about-pb-text' => 'Description of the project (HTML allowed, in <p> tag(s))',
	'pb-about-pb-title' => 'Title of the page ‘About PB’',
	'pb-change-language' => 'Used as text for the link to the Intuition settings page https://tools.wmflabs.org/intuition/
{{Identical|Change language}}',
	'pb-comment' => 'Label for comments.
{{Identical|Comment}}',
	'pb-confirmations-given' => 'Name for the confirmations done by a user',
	'pb-confirmations-taken' => 'Name for the confirmations received by a user',
	'pb-current-confirmations' => 'Label containing some figures about confirmations (HTML allowed). Parameters:
* $1: total confirmation count;
* $2: exact confirmation count per day;
* $3: rounded confirmation count per day',
	'pb-current-figures' => 'Home section ‘Current figures’',
	'pb-current-users' => 'Label containing some figures about the participating users (HTML allowed).

Parameters:
* $1 - number of users',
	'pb-date' => 'Label for dates. e.g. "2014-06-15".

See https://tools.wmflabs.org/pb/beta/recent/
{{Identical|Date}}',
	'pb-footer' => 'Content of the footer (HTML allowed). Parameters:
* $1 - URL of the about page',
	'pb-home' => 'Title of the home page.
{{Identical|Home}}',
	'pb-home-welcome' => 'Welcome label on the home page (HTML allowed)',
	'pb-javascript-notice' => 'Content of the noscript warning',
	'pb-labs-name' => 'Name of Wikimedia Tool Labs',
	'pb-participates-since' => 'Label for the date since when the user participates. e.g. "2008-11-30"

See https://tools.wmflabs.org/pb/beta/users/',
	'pb-name' => 'Name of the WP:PB project.

There is a source page [[w:de:Wikipedia:Persönliche Bekanntschaften]] on German Wikipedia.
If there is a local version on a wiki language, you can point there.',
	'pb-powered-by-labs' => 'Tooltip for the "Powered by Labs" logo.

See https://tools.wmflabs.org/pb/beta/',
	'pb-recent-confirmations' => 'Home section ‘Recent confirmations’',
	'pb-reconfirmed' => 'Table column header for reconfirmations.

See example: https://tools.wmflabs.org/pb/beta/user/name/Siebrand/',
	'pb-user' => 'Label for user names.
{{Identical|User}}',
	'pb-user-link-title' => 'Title for a link pointing to user details. Parameters:
* $1 - user name of the linked user',
	'pb-user-heading' => 'Heading of the user details page (HTML allowed).

See example: https://tools.wmflabs.org/pb/beta/user/name/Siebrand/

Parameters:
* $1 - user name of the current user
* $2 - link to the user page of the current user',
	'pb-user-title' => 'Title of the user details page. Parameters:
* $1 - user name of the current user',
	'pb-users-navi' => 'Navigation item "Users" pointing to https://tools.wmflabs.org/pb/beta/users/
{{Identical|User}}',
	'pb-users-title' => 'Title of the page "Users". See https://tools.wmflabs.org/pb/beta/users/',
	'pb-users-overview' => 'Introduction for the ‘Users’ page (HTML allowed). Parameters:
* $1: total count of participating users',
	'pb-verified-since' => 'Label for the date since when the user is verified. e.g. "2008-11-30"

See https://tools.wmflabs.org/pb/beta/users/',
);

/** Arabic (العربية)
 * @author Gagnabil
 */
$messages['ar'] = array(
	'pb-about-pb-navi' => 'حول',
	'pb-about-pb-tech' => 'التفاصيل التقنية',
	'pb-about-pb-title' => 'حول المشروع',
	'pb-change-language' => 'تغيير اللغة',
	'pb-comment' => 'تعليق',
	'pb-confirmations-given' => 'التأكيدات المعطاة',
	'pb-confirmations-taken' => 'التأكيدات المتوصّل بها',
	'pb-current-confirmations' => 'هناك  $1  تأكيدات في المجموع، حوالي <abbr title="<span class=" notranslate"="" translate="no">$2 "> $3  </abbr> تأكيد لليوم الواحد.',
	'pb-current-figures' => 'الأوجه الحاليّة',
	'pb-current-users' => 'هؤلاء  المستخدمون $1 شاركوا في مشروع <em>المعارف الشخصية</em> :',
	'pb-date' => 'التاريخ',
	'pb-home' => 'الرئيسية',
	'pb-javascript-notice' => 'نوصي بتمكين جافا سكريبت لهذا الموقع لتحسين واجهة المستخدم.',
	'pb-labs-name' => 'مختبرات أدوات ويكيميديا',
	'pb-participates-since' => 'يشارك منذ',
	'pb-powered-by-labs' => 'مدعومة من طرف مختبر أدوات ويكيميديا',
	'pb-recent-confirmations' => 'التأكيدات الحديثة',
	'pb-reconfirmed' => 'تمّت إعادة التأكيد؟',
	'pb-user' => 'مستخدم',
	'pb-user-link-title' => 'تفاصيل المستخدم $1',
	'pb-user-heading' => 'معلومات حول <a href="$2" title="صفحة المستخدم $1">$1</a>',
	'pb-user-title' => 'معلومات عن $1',
	'pb-users-navi' => 'مستخدمون',
	'pb-users-title' => 'قائمة المشاركين',
	'pb-users-overview' => 'هؤلاء  المستخدمون $1 شاركوا في مشروع <em>المعارف الشخصية</em> :',
	'pb-verified-since' => 'تمّ التحقّق منها منذ',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'pb-home' => 'বেটুপাত',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'pb-about-pb-navi' => 'Tocante a',
	'pb-about-pb-tech' => 'Detalles téunicos',
	'pb-about-pb-tech-text' => '<p>Usamos <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> y <a href="https://es.wikipedia.org/wiki/MySQL">MySQL</a> pa esta interfaz. El códigu fuente ta espublizáu baxo los términos de la llicencia <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) y se pue ver <a href="https://github.com/tool-labs/pb">en GitHub</a>. Por favor, amieste informes de fallos, solicitúes de carauterístiques o otros comentarios <a href="https://github.com/tool-labs/pb/issues/new">nel siguimientu de problemes GitHub</a> o informe d\'ello na <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">páxina d\'alderique de Wikipedia</a>.</p>
    <p>Los volcaos actuales de la base de datos de PB puen alcontrase <a href="/pb/sql-dumps">equí</a>.</p>
    <p>Usamos dellos iconos creaos pol proyeutu <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Esti proyeutu representa les conocencies personales ente Wikimedistes.</p>
    <p>El primer desendolcu ficiéronlu Ulli Purwin (interfaz) y Euku (bot). A primeros de 2011, Wiegels y Ireas siguieron a Ulli faciendo la interfaz. Nesti momentu, el proyeutu yá nun ta agospiáu nun sirvidor priváu, sinón en Wikimedia Labs.</p>
    <p>Pue alcontrase más información d\'esti proyeutu na Wikipedia alemana, na páxina <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Tocante al proyeutu',
	'pb-change-language' => 'Camudar llingua',
	'pb-comment' => 'Comentariu',
	'pb-confirmations-given' => 'Confirmaciones dadas',
	'pb-confirmations-taken' => 'Confirmaciones recibíes',
	'pb-current-confirmations' => 'Hai $1 confirmaciones en total, esto son unes <abbr title="$2">$3</abbr> confirmaciones por día.',
	'pb-current-figures' => 'Cifres actuales',
	'pb-current-users' => 'De momentu, $1 usuarios participen nel proyeutu <em>Conocencies personales</em>.',
	'pb-date' => 'Data',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften na Wikipedia alemana">[[Wikipedia:Persönliche Bekanntschaften]]</a> en Tool Labs. <a href="$1" title="Tocante a Wikipedia:Persönliche Bekanntschaften">Más información.</a>',
	'pb-home' => 'Entamu',
	'pb-home-welcome' => '¡Bienveníu al proyeutu <em>Conocencies personales</em> (<em>Persönliche-Bekanntschaften</em> n\'alemán)! Pue alcontrar más información d\'esti proyeutu <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften na Wikipedia n\'alemán">na Wikipedia n\'alemán</a>.',
	'pb-javascript-notice' => "Recomendamos qu'active JavaScript nesti sitiu web pa enantar la interfaz d'usuariu.",
	'pb-labs-name' => 'Tool Labs de Wikimedia',
	'pb-participates-since' => 'Participa dende',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Col encontu de Tool Labs de Wikimedia',
	'pb-recent-confirmations' => 'Confirmaciones recientes',
	'pb-reconfirmed' => '¿Reconfirmáu?',
	'pb-user' => 'Usuariu',
	'pb-user-link-title' => 'Detalles del usuariu $1',
	'pb-user-heading' => 'Información de <a href="$2" title="Páxina d\'usuariu de $1">$1</a>',
	'pb-user-title' => 'Información de $1',
	'pb-users-navi' => 'Usuarios',
	'pb-users-title' => 'Llista de participantes',
	'pb-users-overview' => 'Estos $1 usuarios participen nel proyeutu <em>Conocencies personales</em>.',
	'pb-verified-since' => 'Comprobáu dende',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Aftabuzzaman
 */
$messages['bn'] = array(
	'pb-about-pb-navi' => 'সম্পর্কে',
	'pb-about-pb-tech' => 'কারিগরী বিবরণ',
	'pb-about-pb-title' => 'প্রকল্প সম্পর্কে',
	'pb-change-language' => 'ভাষা পরিবর্তন করুন',
	'pb-comment' => 'মন্তব্য',
	'pb-date' => 'তারিখ',
	'pb-home' => 'প্রধান পাতা',
	'pb-labs-name' => 'উইকিমিডিয়া টুলস ল্যাবস',
	'pb-user' => 'ব্যবহারকারী',
	'pb-users-navi' => 'ব্যবহারকারীগণ',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Gwenn-Ael
 */
$messages['br'] = array(
	'pb-about-pb-navi' => 'Diwar-benn',
	'pb-about-pb-tech' => 'Munudoù teknikel',
	'pb-about-pb-tech-text' => '<p>Implijout a reomp <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> et <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> evit an etrefas-se. Ar c\'hod tarzh a c\'haller kaout dindan divizoù an aotre-implijout <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) hag a c\'hall bezañ kavet <a href="https://github.com/tool-labs/pb">e GitHub</a>.
Ouzhpennit, mar plij,an danevelloù draen, ar goulennoù emdreiñ hag hoc\'h evezhiadennoù all <a href="https://github.com/tool-labs/pb/issues/new"> er merour kudennoù GitHub</a> pe disklêriañ anezho e <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">pajenn eskemm Wikipédia</a>.</p>
    <p> An danevelloù bremañ eus diaz roadennoù PB a c\'hall bezañ kavet <a href="/pb/sql-dumps">amañ</a>.</p>
    <p>Nous utilisons plusieurs icônes créées par le projet <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-title' => 'Diwar-benn ar raktres',
	'pb-change-language' => 'Cheñch yezh',
	'pb-comment' => 'Evezhiadenn',
	'pb-confirmations-given' => 'Kadarnadurioù roet',
	'pb-confirmations-taken' => 'Kadarnadurioù resevet',
	'pb-current-confirmations' => 'Bez\' ez eus $1 kadarnadur en holl, da lavaret eo war-dro <abbr title="$2">$3</abbr> kadarnadur an deiz.',
	'pb-current-figures' => 'Sifroù bremañ',
	'pb-date' => 'Deiziad',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften er Wikipedia alaman">[[Wikipedia:Persönliche Bekanntschaften]]</a> e Tool Labs. <a href="$1" title="Diwar-benn Wikipedia:Persönliche Bekanntschaften">Evit gouzout hiroc\'h.</a>',
	'pb-home' => 'Pajenn zegemer',
	'pb-home-welcome' => 'Degemer mat er raktres <em>Anaoudegezhioù Personel</em> (<em>Persönliche-Bekanntschaften</em> en alamaneg) ! Evit gouzout hiroc\'h war ar raktres-se <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften er Wikipedia alaman"> e Wikipedia en alamaneg</a>.',
	'pb-javascript-notice' => "Aliañ a reomp ac'hanoc'h da weredekaat JavaScript el lec'hienn Web evit gwellaat an etrefas implijer.",
	'pb-labs-name' => 'Tool Labs eus Wikimedia',
	'pb-participates-since' => 'A gemer perzh abaoe',
	'pb-name' => 'Wikipédia:Anaoudegezh personnel',
	'pb-powered-by-labs' => 'Sevenet gant Tool Labs eus Wikimedia',
	'pb-recent-confirmations' => 'Kadarnadurioù graet nevez zo',
	'pb-reconfirmed' => 'Adkadarnaet ?',
	'pb-user' => 'Implijer',
	'pb-user-link-title' => 'Munudoù evit an implijer $1',
	'pb-user-heading' => 'Titouroù evit <a href="$2" title="Pajenn implijer $1">$1</a>',
	'pb-user-title' => 'Titouroù evit $1',
	'pb-users-navi' => 'Implijerien',
	'pb-users-title' => 'Roll ar berzhidi',
	'pb-users-overview' => '{{PLURAL:$1|An implijer-mañ a gemer perzh|An $1 implijerien-mañ a gemer perzh}} er raktres <em>Anaoudegezh personel</em> :',
	'pb-verified-since' => 'Gwiriet abaoe',
);

/** Catalan (català)
 * @author Fitoschido
 */
$messages['ca'] = array(
	'pb-about-pb-navi' => 'Quant a',
	'pb-about-pb-tech' => 'Detalls tècnics',
	'pb-about-pb-title' => 'Quant al projecte',
	'pb-change-language' => 'Canvia l’idioma',
	'pb-comment' => 'Comentari',
	'pb-date' => 'Data',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-powered-by-labs' => 'Funciona amb Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Confirmacions recents',
	'pb-user' => 'Usuari',
	'pb-users-navi' => 'Usuaris',
	'pb-users-title' => 'Llista de participants',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'pb-about-pb-title' => 'Проектех лаьцна',
	'pb-change-language' => 'Хийца мотт',
	'pb-confirmations-taken' => 'Билгалдаккхар',
	'pb-date' => 'Терахь',
	'pb-home' => 'ЦӀехьа',
	'pb-user' => 'Декъашхо',
	'pb-users-navi' => 'Декъашхой',
);

/** German (Deutsch)
 * @author ireas
 */
$messages['de'] = array(
	'pb-about-pb-navi' => 'Über das Projekt',
	'pb-about-pb-tech' => 'Technisches',
	'pb-about-pb-tech-text' => '<p>Wir verwenden für dieses Interface <a href="https://de.wikipedia.org/wiki/Python_%28Programmiersprache%29">Python</a> und <a href="https://de.wikipedia.org/wiki/MySQL">MySQL</a>. Der Quellcode steht unter der <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) und ist <a href="https://github.com/tool-labs/pb">auf GitHub</a> einsehbar. Bugberichte, Änderungswünsche oder andere Kommentare können <a href="https://github.com/tool-labs/pb/issues/new">dort</a> oder auf der <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">Wikipedia-Diskussionsseite</a> hinterlassen werden.</p>
    <p>Aktuelle Datenbankdumps findest du <a href="/pb/sql-dumps">hier</a>.</p>
    <p>Wir verwenden einige Icons aus dem <a href="http://glyphicons.com/" title="Glyphicons-Homepage">Glyphicons</a>-Projekt.</p>',
	'pb-about-pb-text' => '<p>Dieses Projekt dient zur Repräsentation der Wikipedianer-Gemeinschaft im realen Leben.</p>
    <p>Die erste technische Umsetzung stammte von Ulli Purwin (Interface) und Euku (Bot). Anfang 2011 haben Wiegels und Ireas Ullis Part übernommen. Inzwischen liegt dieses Interface auch nicht mehr auf einem privaten Server, sondern auf Wikimedia Labs.</p>
    <p>Mehr Informationen über das Projekt <em>Persönliche Bekanntschaften</em> findest du auf der Wikipedia-Seite <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Über das Projekt',
	'pb-change-language' => 'Sprache ändern',
	'pb-comment' => 'Kommentar',
	'pb-confirmations-given' => 'Vergebene Bestätigungen',
	'pb-confirmations-taken' => 'Erhaltene Bestätigungen',
	'pb-current-confirmations' => 'Diese haben sich untereinander insgesamt $1 Mal bestätigt, im Schnitt rund <abbr title="$2">$3</abbr> Mal täglich.',
	'pb-current-figures' => 'Aktuelle Zahlen',
	'pb-current-users' => 'Momentan nehmen $1 Benutzer am Projekt <em>Persönliche Bekanntschaften</em> teil.',
	'pb-date' => 'Datum',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in der deutschsprachigen Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> auf Tool Labs. <a href="$1" title="Über Wikipedia:Persönliche Bekanntschaften">Mehr Infos.</a>',
	'pb-home' => 'Startseite',
	'pb-home-welcome' => 'Herzlich willkommen auf der Datenbankseite des <em>Persönliche-Bekanntschaften</em>-Projekts!  Mehr Informationen zu dem Projekt findest du auf der <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in der deutschsprachigen Wikipedia">Wikipedia-Projektseite</a>.',
	'pb-javascript-notice' => 'Für eine bessere Benutzeroberfläche empfehlen wir dir, JavaScript für diese Website zu erlauben.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Teilnehmer seit',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Powered by Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Letzte Bestätigungen',
	'pb-reconfirmed' => 'Rückbestätigt?',
	'pb-user' => 'Benutzer',
	'pb-user-link-title' => 'Details zu Teilnehmer $1',
	'pb-user-heading' => 'Teilnehmerinformationen für <a href="$2" title="Benutzerseite des Teilnehmers $1">$1</a>',
	'pb-user-title' => 'Teilnehmerinformationen für $1',
	'pb-users-navi' => 'Teilnehmer',
	'pb-users-title' => 'Teilnehmerliste',
	'pb-users-overview' => 'Die folgenden $1 Benutzer nehmen zurzeit am Projekt <em>Persönliche Bekanntschaften teil:',
	'pb-verified-since' => 'Bestätigt seit',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'pb-about-pb-navi' => 'Wó',
	'pb-about-pb-tech' => 'Techniske drobnostki',
	'pb-about-pb-title' => 'Wo projekśe',
	'pb-change-language' => 'Rěc změniś',
	'pb-comment' => 'Komentar',
	'pb-confirmations-given' => 'Dane wobkšuśenja',
	'pb-confirmations-taken' => 'Dostane wobkšuśenja',
	'pb-current-confirmations' => '{{PLURAL:$1|Jo $1 wobkšuśenje|Stej $1 wobkšuśeni|Su $1 wobkšuśenja|Jo $1 wobkšuśenjow}} dogromady, to {{PLURAL:$3|jo|stej|su|jo}} něźi <abbr title="$2">$3</abbr> {{PLURAL:$3|wobkšuśenje|wobkšuśeni|wobkšuśenja|wobkšuśenjow}} na źeń.',
	'pb-current-figures' => 'Aktualne licby',
	'pb-current-users' => 'Tuchylu $1 {{PLURAL:$1|wužywaŕ|wužywarja|wužywarje|wužywarjow}} {{PLURAL:$1|wobźělujo|wobźělujotej|wobźěluju|wobźělujo}} se na <em>Wósobinskich znaśach</em>',
	'pb-date' => 'Datum',
	'pb-home' => 'Startowy bok',
	'pb-javascript-notice' => 'Pórucujomy, až zmóžnjaš JavaScript za websedło, aby wužywarski pówjerch polěpšył.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Wobźělujo se wót',
	'pb-name' => 'Wikipedija:Wósobinske znaśa',
	'pb-powered-by-labs' => 'Spěchowany wót Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Nejnowše wobkšuśenja',
	'pb-reconfirmed' => 'Slědk wobkšuśony?',
	'pb-user' => 'Wužywaŕ',
	'pb-user-link-title' => 'Drobnostki za wužywarja $1',
	'pb-user-heading' => 'Informacije za <a href="$2" title="Wužywarski bok $1">$1</a>',
	'pb-user-title' => 'Informacije za $1',
	'pb-users-navi' => 'Wužywarje',
	'pb-users-title' => 'Lisćina wobźělnikow',
	'pb-users-overview' => '{{PLURAL:$1|Toś ten $1 wužywaŕ wobźělujo|Toś tej $1 wužywarja wobźělujotej|Toś te $1 wužywarje wobźěluju|Toś tych $1 wužywarjow wobźělujo}} se na projekśe <em>Wósobinske znaśa</em>:',
	'pb-verified-since' => 'Pśeglědany wót',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'pb-about-pb-tech-text' => '<p>We use <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> and <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> for this interface. The source code is published under the terms of the <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public Licence 3</a> (LGPL 3) and can be accessed <a href="https://github.com/tool-labs/pb">on GitHub</a>. Please add bug reports, feature requests or other comments <a href="https://github.com/tool-labs/pb/issues/new">to the GitHub issue tracker</a> or report it on the <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">Wikipedia talk page</a>.</p>
    <p>Current dumps of the PB database can be found <a href="/pb/sql-dumps">here</a>.</p>
    <p>We use several icons created by the <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a> project.</p>',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Macofe
 * @author VegaDark
 */
$messages['es'] = array(
	'pb-about-pb-navi' => 'Acerca de',
	'pb-about-pb-tech' => 'Detalles técnicos',
	'pb-about-pb-tech-text' => '<p>Utilizamos <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> y <a href="https://es.wikipedia.org/wiki/MySQL">MySQL</a> para esta interfaz. El código fuente es publicado bajo los términos de la <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) y puede ser accedida <a href="https://github.com/tool-labs/pb">en GitHub</a>. Añade reportes de errores, solicitudes de características u otros comentarios <a href="https://github.com/tool-labs/pb/issues/new">al seguimiento de incidencias de GitHub</a> o repórtalo en la <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">página de discusión en Wikipedia</a>.</p>
    <p>Los respaldos actuales de la base de datos de PB pueden encontrarse <a href="/pb/sql-dumps">aquí</a>.</p>
    <p>Utilizamos varios iconos creados por el proyecto <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Este proyecto representa conocidos personales entre Wikimedians.</p>
    <p>La primera implementación fue hecha por Ulli Purwin (interfaz) y Euku (bot). A inicios de 2011, Wiegels e Ireas siguieron a Ulli haciendo la interfaz. El proyecto ya no está alojado en un servidor privado sino en Wikimedia Labs.</p>
    <p>Puede encontrarse más información de este proyecto en la Wikipedia en alemán en la página <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Acerca del proyecto',
	'pb-change-language' => 'Cambiar el idioma',
	'pb-comment' => 'Comentario',
	'pb-confirmations-given' => 'Confirmaciones dadas',
	'pb-confirmations-taken' => 'Confirmaciones recibidas',
	'pb-current-confirmations' => 'Hay $1 confirmaciones en total, alrededor de <abbr title="$2">$3</abbr> confirmaciones por día.',
	'pb-current-figures' => 'Cifras actuales',
	'pb-current-users' => 'Por el momento, $1 usuarios participan en el proyecto <em>Conocidos Personales</em>.',
	'pb-date' => 'Fecha',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften en la Wikipedia en alemán">[[Wikipedia:Persönliche Bekanntschaften]]</a> en Tool Labs. <a href="$1" title="Acerca de Wikipedia:Persönliche Bekanntschaften">Más información.</a>',
	'pb-home' => 'Inicio',
	'pb-home-welcome' => '¡Te damos la bienvenida al proyecto <em>Conocidos Personales</em> ¡(<em>Persönliche-Bekanntschaften</em> en alemán)! Más información acerca de este proyecto puede encontrarse <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften en la Wikipedia en alemán">en la Wikipedia en alemán</a>.',
	'pb-javascript-notice' => 'Recomendamos activar JavaScript en este sitio web para mejorar la interfaz de usuario.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Participa desde',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Impulsado por Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Confirmaciones recientes',
	'pb-reconfirmed' => '¿Reconfirmado?',
	'pb-user' => 'Usuario',
	'pb-user-link-title' => 'Detalles del usuario $1',
	'pb-user-heading' => 'Información para <a href="$2" title="Página de usuario de $1">$1</a>',
	'pb-user-title' => 'Información sobre $1',
	'pb-users-navi' => 'Usuarios',
	'pb-users-title' => 'Lista de participantes',
	'pb-users-overview' => 'Estos $1 usuarios participan en el proyecto <em>Conocidos Personales</em>.',
	'pb-verified-since' => 'Verificado desde',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Ebraminio
 * @author Reza1615
 */
$messages['fa'] = array(
	'pb-about-pb-navi' => 'درباره',
	'pb-about-pb-tech' => 'مشخصات فنی',
	'pb-about-pb-tech-text' => '<p>ما با استفاده از <a href="https://en.wikipedia.org/wiki/Python_<span class=" notranslate"="" translate="no">% 28programming_language % 29 "> پایتون</a> و <a href="https://en.wikipedia.org/wiki/MySQL">خروجی زیر</a> برای این واسط. کد منبع تحت شرایط <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU کمتر عمومی مجوز 3 عمومی</a> (LGPL 3) منتشر شده است و می توان <a href="https://github.com/tool-labs/pb">در GitHub</a>قابل دسترسی است. گزارش مشکلات, درخواست ویژگی یا دیگر نظر <a href="https://github.com/tool-labs/pb/issues/new">به ردگیر مسئله GitHub</a> اضافه کردن و یا گزارش آن را در <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">صفحه بحث ویکی</a>.</p>
<p>دامپ کنونی پایگاه داده  را می‌توان یافت <a href="/pb/sql-dumps">اینجا</a>.</p>
<p>ما استفاده از آیکون های مختلف ایجاد شده توسط پروژه <a href="http://glyphicons.com/" title="Glyphicons homepage">نمایهٔ گلیف‌ها</a> .</p>',
	'pb-about-pb-text' => '<p>این پروژه نشان دهنده آشنایان شخصی بین ویکی‌مدین‌ها است.</p>
<p>اولین پیاده سازی توسط یولی پوروین (رابط) و یوکو (ربات) انجام شد. در آغاز سال۲۰۱۱، ویجلز و ایرس،یولی که رابط را انجام می‌دهد را دنبال کردند. در حال حاضر، پروژه دیگر در سرور خصوصی میزبان نیست اما در آزمایشگاه های ویکی‌مدیا میزبان است.</p>
<p>برای اطلاعات بیشتر در مورد این پروژه می‌توان در ویکیپدیا آلمانی در صفحه <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a> پیدا شود.</p>',
	'pb-about-pb-title' => 'درباره پروژه',
	'pb-change-language' => 'تغییر زبان',
	'pb-comment' => 'نظر',
	'pb-confirmations-given' => 'تنظیمات اعمال‌شده',
	'pb-confirmations-taken' => 'تائیدیهٔ دریافت‌شده',
	'pb-current-confirmations' => 'در کل تأییدیه‌های $1 وجود دارند، این درباره <abbr title="$2">$3</abbr> تأییدیه‌های هر روز است.',
	'pb-current-figures' => 'چهره‌های فعلی',
	'pb-current-users' => 'در حال حاضر، $1 کاربران در پروژه <em>آشنایی شخصی</em> شرکت می‌کنند.',
	'pb-date' => 'تاریخ',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> در آزمایشگاه ابزار. <a href="<span class=" notranslate"="" translate="no">$1 "عنوان ="درباره Wikipedia:Persönliche Bekanntschaften"> کسب اطلاعات بیشتر.</a>',
	'pb-home' => 'خانه',
	'pb-home-welcome' => 'به پروژه <em>آشنایی شخصی</em> (<em>Persönliche-Bekanntschaften</em> in German) خوش آمدیدǃ اطلاعات بیشتر درباره این پروژه می تواند در <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">در زبان آلمانی ویکی‌پدیا</a> پیدا شود.',
	'pb-javascript-notice' => 'ما توصیه می‌کنیم که جاوا اسکریپت را برای این وب‌سایت برای بهبود رابط کاربری فعال کنید.',
	'pb-labs-name' => 'آزمایشگاه‌های ابزار ویکی‌مدیا',
	'pb-participates-since' => 'شرکت‌کنندگان از',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'اجرا در آزمایشگاه‌های ابزار ویکی‌مدیا',
	'pb-recent-confirmations' => 'تنظیمات اخیر',
	'pb-reconfirmed' => 'تأیید مجدد؟',
	'pb-user' => 'کاربر',
	'pb-user-link-title' => 'جزئیات برای کاربر $1',
	'pb-user-heading' => 'اطلاعات برای <a href="$2" title="User page of $1">$1</a>',
	'pb-user-title' => 'اطلاعات برای $1',
	'pb-users-navi' => 'کاربران',
	'pb-users-title' => 'فهرست مشارکت کنندگان',
	'pb-users-overview' => 'این  $1  کاربران در پروژه <em>آشنایی شخصی</em> شرکت می‌کنند :',
	'pb-verified-since' => 'تأیید شده از',
);

/** French (français)
 * @author Gomoko
 * @author Romaine
 * @author Trizek
 */
$messages['fr'] = array(
	'pb-about-pb-navi' => 'À propos',
	'pb-about-pb-tech' => 'Détails techniques',
	'pb-about-pb-tech-text' => '<p>Nous utilisons <a href="https://fr.wikipedia.org/wiki/Python_%28langage%29">Python</a> et <a href="https://fr.wikipedia.org/wiki/MySQL">MySQL</a> pour cette interface. Le code source est disponible sous les conditions de la licence <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) et peut être trouvé <a href="https://github.com/tool-labs/pb">sur GitHub</a>. Merci d\'ajouter les rapports de bogue, les demandes d’évolution et vos autres commentaires <a href="https://github.com/tool-labs/pb/issues/new">dans le gestionnaire de problèmes GitHub</a> ou les signaler sur la <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">page de discussion de Wikipédia (en allemand)</a>.</p>
    <p>Les exports actuels de la base de données de PB peuvent être trouvés <a href="/pb/sql-dumps">ici</a>.</p>
    <p>Nous utilisons plusieurs icônes créées par le projet <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Ce projet représente les connaissances personnelles entre Wikimédiens.</p>
    <p>La prmeière implémentation a été faite par Ulli Purwin (interface) et Euku (robot). Début 2011, Wiegels et Ireas ont pris la suite d’Ulli pour faire l’interface. Maintenant, le projet n’est plus hébergé sur un serveur privé, mais sur Wikimédia Labs.</p>
    <p>Vous pouvez trouver plus d’information sur ce projet sur la Wikipédia en allemand, sur la page <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'À propos du projet',
	'pb-change-language' => 'Modifier la langue',
	'pb-comment' => 'Commentaire',
	'pb-confirmations-given' => 'Confirmations fournies',
	'pb-confirmations-taken' => 'Confirmations reçues',
	'pb-current-confirmations' => 'Il y a $1 confirmation{{PLURAL:$1||s}} au total, ce qui fait environ <abbr title="$2">$3</abbr> confirmation{{PLURAL:$3||s}} par jour.',
	'pb-current-figures' => 'Chiffres actuels',
	'pb-current-users' => 'Pour le moment, $1 {{PLURAL:$1|utilisateur participe|utilisateurs participent}} au projet <em>Connaissances Personnelles</em>.',
	'pb-date' => 'Date',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften sur le Wikipédia allemand">[[Wikipedia:Persönliche Bekanntschaften]]</a> sur Tool Labs. <a href="$1" title="À propos de Wikipedia:Persönliche Bekanntschaften">Plus d’information.</a>',
	'pb-home' => 'Page d’accueil',
	'pb-home-welcome' => 'Bienvenue sur le projet <em>Connaissances Personnelles</em> (<em>Persönliche-Bekanntschaften</em> en allemand) ! Plus d\'informations sur ce projet <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften sur la Wikipédia en allemand"> sur la Wikipédia en langue allemande</a>.',
	'pb-javascript-notice' => 'Nous recommandons d’activer JavaScript sur ce site web pour améliorer l’interface utilisateur.',
	'pb-labs-name' => 'Tool Labs de Wikimédia',
	'pb-participates-since' => 'Participe depuis',
	'pb-name' => 'Wikipédia:Connaissances personnelles',
	'pb-powered-by-labs' => 'Exécuté par Tool Labs de Wikimédia',
	'pb-recent-confirmations' => 'Confirmations récentes',
	'pb-reconfirmed' => 'Reconfirmé ?',
	'pb-user' => 'Utilisateur',
	'pb-user-link-title' => 'Détails pour l’utilisateur $1',
	'pb-user-heading' => 'Information pour <a href="$2" title="Page utilisateur de $1">$1</a>',
	'pb-user-title' => 'Information sur $1',
	'pb-users-navi' => 'Utilisateurs',
	'pb-users-title' => 'Liste des participants',
	'pb-users-overview' => '{{PLURAL:$1|Cet utilisateur participe|Ces $1 utilisateurs participent}} au projet <em>Connaissance Personnelle</em> :',
	'pb-verified-since' => 'Vérifié depuis',
);

/** Western Frisian (Frysk)
 * @author Robin0van0der0vliet
 */
$messages['fy'] = array(
	'pb-about-pb-navi' => 'Oer',
	'pb-date' => 'Datum',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'pb-about-pb-navi' => 'אודות',
	'pb-about-pb-tech' => 'פרטים טכניים',
	'pb-about-pb-tech-text' => '<p>אנחנו משתמשים ב<a href="https://he.wikipedia.org/wiki/%D7%A4%D7%99%D7%99%D7%AA%D7%95%D7%9F">פייתון</a> וב־<a href="https://he.wikipedia.org/wiki/MySQL">MySQL</a> בשביל הממשק הזה. קוד המקור מתפרסם לפי התנאים של <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">גרסה 3 של הרישיון הציבורי הכללי המוקטן של גנו</a> (LGPL 3) ואפשר למצוא אותו ב<a href="https://github.com/tool-labs/pb">גיטהאב</a>. נא להוסיף דיווחי באגים, בקשות ליכולות חדשות והערות אחרות ל<a href="https://github.com/tool-labs/pb/issues/new">כלי מעקב הבאגים של גיטהאב</a> או לדווח אותן ל<a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">דף השיחה של המיזם בוויקיפדיה הגרמנית</a>.</p>
 <p>היטלים נוכחיים של מסד הנתונים של PB אפשר למצוא <a href="/pb/sql-dumps">כאן</a>.</p>
 <p>אנחנו משתמשים במספר סמלים שנוצרו במיזם <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>המיזם הזה מציג היכרויות אישיות בין ויקימדים.</p>
  <p>המימוש הראשון נוצר על־ידי אולי פורווין (Ulli Purwin; הממשק) ו־Euku (הבוט). בתחילת 2011 ויגלס (Wiegels) ואירֵאס (Ireas) המשיכו את העבודה של אולי על הממשק. עכשיו המיזם כבר לא מתארח בשרת פרטי, אלא במעבדות ויקימדיה.</p>
  <p>אפשר למצוא מידע נוסף על המיזם הזה בוויקיפדיה הגרמנית בדף <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'על הפרוייקט',
	'pb-change-language' => 'שינוי שפה',
	'pb-comment' => 'תגובה',
	'pb-confirmations-given' => 'אישורים שניתנו',
	'pb-confirmations-taken' => 'אישורים שהתקבלו',
	'pb-current-confirmations' => 'יש $1 אישורים סך הכול, שזה בערך <abbr title="$2">$3</abbr> אישורים ליום.',
	'pb-current-figures' => 'מספרים נוכחיים',
	'pb-current-users' => 'כעת $1 משתמשים משתתפים במיזם <em>היכרות אישית</em>',
	'pb-date' => 'תאריך',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> ב־Tool Labs. <a href="$1" title="About Wikipedia:Persönliche Bekanntschaften">מידע נוסף.</a>',
	'pb-home' => 'דף הבית',
	'pb-home-welcome' => 'ברוך בואך למיזם היכרויות אישיות (<em lang="de" dir="ltr">Persönliche-Bekanntschaften</em> בגרמנית)! מידע נוסף על המיזם הזה אפשר למצוא <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">בוויקיפדיה הגרמנית</a>.',
	'pb-javascript-notice' => 'אנחנו ממליצים להפעיל JavaScript באתר הזה כדי לשפר את ממשק המשתמש.',
	'pb-labs-name' => 'מעבדות כלי ויקימדיה',
	'pb-participates-since' => 'משתתף מאז',
	'pb-name' => 'ויקיפדיה:היכרויות אישיות',
	'pb-powered-by-labs' => 'מופעל על־ידי מעבדות כלי ויקימדיה',
	'pb-recent-confirmations' => 'אישורים אחרונים',
	'pb-reconfirmed' => 'מאושר מחדש?',
	'pb-user' => 'משתמש',
	'pb-user-link-title' => 'פרטים עבור המשתמש $1',
	'pb-user-heading' => 'מידע עבור <a href="$2" title="דף המשתמש של $1">$1</a>',
	'pb-user-title' => 'מידע עבור $1',
	'pb-users-navi' => 'משתמשים',
	'pb-users-title' => 'רשימת המשתתפים',
	'pb-users-overview' => '$1 המשתמשים האלה משתתפים במיזם <em>היכרות אישית</em>:',
	'pb-verified-since' => 'מאושר מאז',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'pb-about-pb-navi' => 'Wo',
	'pb-about-pb-tech' => 'Techniske podrobnosće',
	'pb-about-pb-title' => 'Wo projekće',
	'pb-change-language' => 'Rěč změnić',
	'pb-comment' => 'Komentar',
	'pb-confirmations-given' => 'Date wobkrućenja',
	'pb-confirmations-taken' => 'Dóstane wobkrućenja',
	'pb-current-confirmations' => '{{PLURAL:$1|Je $1 wobkrućenje|Stej $1 wobkrućeni|Su $1 wobkrućenja|Je $1 wobkrućenjow}} dohromady, to {{PLURAL:$3|je|stej|su|je}} přibližnje <abbr title="$2">$3</abbr> {{PLURAL:$3|wobkrućenje|wobkrućeni|wobkrućenja|wobkrućenjow}} na dźeń.',
	'pb-current-figures' => 'Aktualne ličby',
	'pb-current-users' => 'Tuchwilu so $1 {{PLURAL:$1|wužiwar|wužiwarjej|wužiwarjo|wužiwarjow}} na <em>Wosobinskich znajomstwach</em> {{PLURAL:$1|wobdźěluje|wobdźělujetej|wobdźěluja|wobdźěluje}}',
	'pb-date' => 'Datum',
	'pb-home' => 'Startowa strona',
	'pb-javascript-notice' => 'Poručamy, zo zmóžnješ JavaScript za websydło, zo by wužiwarski powjerch polěpšił.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Wobdźěluje so wot',
	'pb-name' => 'Wikipedija:Wosobinske znajomstwa',
	'pb-powered-by-labs' => 'Spěchowany wot Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Najnowše wobkrućenja',
	'pb-reconfirmed' => 'Wróćo wobkrućeny?',
	'pb-user' => 'Wužiwar',
	'pb-user-link-title' => 'Podrobnosće za wužiwarja $1',
	'pb-user-heading' => 'Informacije za <a href="$2" title="Wužiwarska strona $1">$1</a>',
	'pb-user-title' => 'Informacije za $1',
	'pb-users-navi' => 'Wužiwarjo',
	'pb-users-title' => 'Lisćina wobdźělnikow',
	'pb-users-overview' => '{{PLURAL:$1|Tutón $1 wužiwar wobdźěluje|Tutej $1 wužiwarjej wobdźělujetaj|Tući $1 wužiwarjo wobdźěluja|Tutych $1 wužiwarjow wobdźěluje}} so na projekće <em>Wosobinske znajomstwa</em>:',
	'pb-verified-since' => 'Přepruwowany wot',
);

/** Hungarian (magyar)
 * @author Csega
 */
$messages['hu'] = array(
	'pb-about-pb-navi' => 'Névjegy',
	'pb-about-pb-tech' => 'Technikai részletek',
	'pb-change-language' => 'Nyelv módosítása',
	'pb-comment' => 'Megjegyzés',
	'pb-date' => 'Dátum',
	'pb-home' => 'Kezdőlap',
	'pb-user' => 'Felhasználó',
	'pb-users-navi' => 'Felhasználók',
);

/** Indonesian (Bahasa Indonesia)
 * @author C5st4wr6ch
 * @author Kenrick95
 */
$messages['id'] = array(
	'pb-about-pb-navi' => 'Tentang',
	'pb-about-pb-tech' => 'Rincian teknis',
	'pb-about-pb-text' => '<p>Proyek ini menggambarkan perkenalan perorangan antara Wikimediawan.</p>
    <p>Penerapan pertama telah dilakukan oleh Ulli Purwin (antarmuka) dan Euku (bot). Pada awal tahun 2011, Wiegels dan Ireas mengikuti Ulli mengerjakan antarmukanya. Sekarang, proyek tidak lagi di-hosting pada server pribadi namun pada Lab Wikimedia.</p>
    <p>Informasi lebih lanjut tentang proyek ini dapat ditemukan di Wikipedia Jerman pada halaman <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Tentang proyek',
	'pb-change-language' => 'Ganti bahasa',
	'pb-comment' => 'Komentar',
	'pb-current-users' => 'Saat ini, ada $1 pengguna yang ikut serta dalam proyek <em>Perkenalan Pribadi</em>.',
	'pb-date' => 'Tanggal',
	'pb-home' => 'Utama',
	'pb-javascript-notice' => 'Kami menganjurkan untuk mengaktifkan JavaScript pada situs web ini untuk meningkatkan antarmuka pengguna.',
	'pb-participates-since' => 'Berpartisipasi sejak',
	'pb-powered-by-labs' => 'Didukung oleh Wikimedia Tool Labs',
	'pb-user' => 'Pengguna',
	'pb-user-link-title' => 'Rincian untuk pengguna $1',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Maria victoria
 * @author Romaine
 * @author Valepert
 */
$messages['it'] = array(
	'pb-about-pb-navi' => 'Informazioni',
	'pb-about-pb-tech' => 'Dettagli tecnici',
	'pb-about-pb-tech-text' => '<p>Usiamo <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> e <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> per questa interfaccia. Il codice sorgente è pubblicato nei termini della licenza <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) e può essere esaminato <a href="https://github.com/tool-labs/pb">su GitHub</a>. Per favore, segnalateci malfunzionamenti (bug), richieste di funzionio altri commenti <a href="https://github.com/tool-labs/pb/issues/new">presso il servizio  di tracking dei contatti su GitHub</a> o scrivete nella <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">pagina di discussione in Wikipedia</a>.</p>
    <p>I dump aggiornati del database PB si trovano <a href="/pb/sql-dumps">qui</a>.</p>
    <p>Usiamo alcune icone create dal progetto <a href="http://glyphicons.com/" title="Home del progetto Glyphicons">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Questo progetto registra le conoscenze personali fra Wikimediani.</p>
    <p>Il primo sviluppo lo si deve a Ulli Purwin (interfaccia) e a Euku (bot). Al principio del 2011, Wiegels e Ireas iniziarono ad aiutare Ulli a perfezionare l\'interfaccia. Al momento il prodetto non è più ospitato su un server privato, ma in Wikimedia Labs.</p>
    <p>Maggiori informazioni su questo progetto si trovano sulla Wikipedia in tedesco, alla pagina <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Informazioni sul progetto',
	'pb-change-language' => 'Cambia lingua',
	'pb-comment' => 'Commenti',
	'pb-confirmations-given' => 'Conferme date',
	'pb-confirmations-taken' => 'Conferme ricevute',
	'pb-current-confirmations' => 'Ci sono complessivamente $1 conferme, si tratta di circa <abbr title="$2">$3</abbr> conferme al giorno.',
	'pb-current-figures' => 'Cifre attuali',
	'pb-current-users' => 'Al momento, $1 utenti partecipano al progetto di <em>Conoscenze personali</em>.',
	'pb-date' => 'Data',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Conoscenze personali sulla Wikipedia in tedesco">[[Wikipedia:Persönliche Bekanntschaften]]</a> su Tool Labs. <a href="$1" title="A proposito di Wikipedia:Persönliche Bekanntschaften">Maggiori informazioni.</a>',
	'pb-home' => 'Pagina principale',
	'pb-home-welcome' => 'Benvenuti al progetto <em>Conoscenze personali</em> (<em>Persönliche-Bekanntschaften</em> in tedesco)!  Ulteriori informazioni su questo progetto possono essere trovate sulla <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Conoscenze personali sulla Wikipedia in tedesco">Wikipedia in lingua tedesca</a>.',
	'pb-javascript-notice' => "Si consiglia di abilitare JavaScript per questo sito web per migliorare l'interfaccia utente.",
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Partecipa dal',
	'pb-name' => 'Wikipedia:Conoscenze personali',
	'pb-powered-by-labs' => 'Gestito da Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Conferme recenti',
	'pb-reconfirmed' => 'Riconfermato?',
	'pb-user' => 'Utente',
	'pb-user-link-title' => 'Dettagli per utente $1',
	'pb-user-heading' => 'Informazioni per <a href="$2" title="Pagina utente di $1">$1</a>',
	'pb-user-title' => 'Informazioni per $1',
	'pb-users-navi' => 'Utenti',
	'pb-users-title' => 'Elenco dei partecipanti',
	'pb-users-overview' => 'Questi $1 utenti partecipano al progetto <em>Conoscenze personali</em>:',
	'pb-verified-since' => 'Verificato dal',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'pb-about-pb-navi' => 'プロジェクトについて',
	'pb-about-pb-tech' => '技術的な詳細',
	'pb-about-pb-title' => 'プロジェクトについて',
	'pb-change-language' => '言語を変更',
	'pb-comment' => 'コメント',
	'pb-current-users' => '現時点では、$1 人の利用者が <em>Personal Acquaintances</em> プロジェクトに参加しています。',
	'pb-date' => '日付',
	'pb-home' => 'ホーム',
	'pb-participates-since' => '参加開始日',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-recent-confirmations' => '最近の確認',
	'pb-reconfirmed' => '再確認済?',
	'pb-user' => '利用者',
	'pb-user-link-title' => '利用者 $1 の詳細',
	'pb-user-heading' => '<a href="$2" title="$1 の利用者ページ">$1</a> の情報',
	'pb-user-title' => '$1 の情報',
	'pb-users-navi' => '利用者',
	'pb-users-title' => '参加者一覧',
	'pb-users-overview' => '$1 人の利用者が <em>Personal Acquaintance</em> プロジェクトに参加しています:',
	'pb-verified-since' => '検証日',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'pb-about-pb-navi' => 'ನಮ್ಮ ಬಗ್ಗೆ',
	'pb-about-pb-tech' => 'ತಾಂತ್ರಿಕ ವಿವರಗಳು',
	'pb-about-pb-title' => 'ಯೋಜನೆಯ ಬಗ್ಗೆ',
	'pb-change-language' => 'ಭಾಷೆ ಬದಲಾಯಿಸಿ',
	'pb-comment' => 'ಟಿಪ್ಪಣಿ',
	'pb-confirmations-given' => 'ನೀಡಲಾದ ದೃಢೀಕರಣಗಳು',
	'pb-confirmations-taken' => 'ಸ್ವೀಕರಿಸಲಾದ ದೃಢೀಕರಣಗಳು',
	'pb-current-confirmations' => 'ಒಟ್ಟು $1 ದೃಢೀಕರಣಗಳಿದ್ದು, ಇದು ಪ್ರತಿ ದಿನಕ್ಕೆ <abbr title="$2">$3</abbr> ದೃಢೀಕರಣಗಳಾಗಿವೆ.',
	'pb-current-figures' => 'ಪ್ರಚಲಿತ ಅಂಕಿಗಳು',
	'pb-date' => 'ದಿನಾಂಕ',
	'pb-home' => 'ಮುಖ್ಯಪುಟ',
	'pb-recent-confirmations' => 'ಇತ್ತೀಚಿನ ದೃಢೀಕರಣಗಳು',
	'pb-reconfirmed' => 'ಮರುದೃಡಪಡಿಸಲಾಗಿದೆಯೆ?',
	'pb-user' => 'ಬಳಕೆದಾರ',
	'pb-user-link-title' => '$1 ಬಳಕೆದಾರರ ವಿವರಗಳು',
	'pb-users-navi' => 'ಬಳಕೆದಾರರು',
	'pb-users-title' => 'ಭಾಗವಹಿಸುವವರ ಪಟ್ಟಿ',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'pb-about-pb-navi' => '정보',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'pb-about-pb-navi' => 'Övver',
	'pb-about-pb-tech' => 'Täschnesche Einzelheite',
	'pb-about-pb-tech-text' => '<p>Mer nämme <a href="https://de.wikipedia.org/wiki/Python_%28Programmiersprache%29">Python</a> un <a href="https://de.wikipedia.org/wiki/MySQL">MySQL</a> för dat Projramm heh. Der Kood schteihd onger dä lezänz <i lang="en" xml:lang="en"><a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3)</i> un es <a href="https://github.com/tool-labs/pb">op <i lang="en" xml:lang="en">GitHub</i></a> ze belohre. Fähler, Verbäßeronge, Wönsch un Klaaf kam_mer op <i lang="en" xml:lang="en"><a href="https://github.com/tool-labs/pb/issues/new">GitHub</a> afflohße udder op di Klaafsigg <i lang="de" xml:lang="de"><a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a></i> övver de päsöhnlesche Bekanntschafte en de Wikkipehdija op deutsch schriive.</p><p><a href="/pb/sql-dumps">De neuste Sescheronge vun dä Dahtenbangk</a> kam_mer sesch eronger lahde.</p><p>Mer han e paa Minnibelldscher us däm <i lang="en" xml:lang="en"><a href="http://glyphicons.com/" title="de Houpsigg vun de Glyphicons">Glyphicons</a></i>-Projäk jenumme.</p>',
	'pb-about-pb-text' => '<p>Dat Projäk sull de Minsche henger de Wikkipehdija em reschtejje Levve zeije.</p><p>De eezde täschnesche Ömsäzong han der Ulli Purwin (Bedeenong) un der Euku (Automaht) jemaat. Aanfang 2011 han der Wiegels un der Ireas däm Ulli singe Paat övvernumme. Enzwischen litt dat janze och nit mieh obb enem prevahte ẞööver, sönders op <i lang="en" xml:lang="en">Wikimedia Labs</i>.</p><p>Mieh övver dat Projäk fengk mer op dä Sigg <i lang="de" xml:lang="de"><a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a></i> övver de päsöhnlesche Bekanntschafte en de Wikkipehdija op deutsch.</p>',
	'pb-about-pb-title' => 'Övver dat Projäk',
	'pb-change-language' => 'De Schprohch wääßele',
	'pb-comment' => 'Aanmärkong',
	'pb-confirmations-given' => 'Hät beschtähtesch',
	'pb-confirmations-taken' => 'Es beschtähtesch woode vun',
	'pb-current-confirmations' => 'Mer han ensjesamp {{PLURAL:$1|ein Beschtähtejong |$1 Beschtähtejonge|kein Beschtähtejong}}, dat <abbr title="$2">{{PLURAL:$1|es ätwa ein Beschtähtejong|sinn_er em Schnett öm de $3 Beschtähtejonge|määt keine Beschtähtejong}} </abbr> aam Daach.',
	'pb-current-figures' => 'Aktoälle Zahle',
	'pb-current-users' => 'Em Momang {{PLURL:$1|es eine|sinn_er $1|es keine}} Metmaacher bei de „Päsöhnlesche Beschtähtejonge“ derbei.',
	'pb-date' => 'Dattum',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Päsöhnlesche Bekanntschafte in de Wikkipehdija op deutsch">[[„Päsöhnlesche Beschtähtejonge“]]</a> op <i lang="en" xml:lang="en">Tool Labs</i>. <a href="$1" title="Övver de päsöhnlesche Bekanntschafte en de Wikkipehdija">Mieh lässe!</a>', # Fuzzy
	'pb-home' => 'Houpsigg',
	'pb-home-welcome' => 'Wellkumme op de „Päsöhnlesche Beschtähtejonge“ ier Dahtenbangksigg. Mieh övver dat Projäk kammer op dä <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in der deutschsprachigen Wikipedia">Projäksigg</a> en de Wikipehdija op Deutsch lässe.',
	'pb-javascript-notice' => 'Mer ämfähle JavaSkrep aanzeschallde, öm för heh di Sigge de Bedeenong aanjenämmer ze maache.',
	'pb-labs-name' => 'Wikkimeedija <i lang="en" xml:lang="en">Tool Labs</i>',
	'pb-participates-since' => 'Määt med zigg:',
	'pb-name' => 'Project: „Päsöhnlesche Beschtähtejonge“ vun Metmaacher',
	'pb-powered-by-labs' => 'Jelivverd vum de Wikimeedija Schteftong iehrem <i lang="en" xml:lang="en">Tool Labs</i>',
	'pb-recent-confirmations' => 'Köözlesch beschtähtesch',
	'pb-reconfirmed' => 'Norrens beschtähtesch?',
	'pb-user' => 'Metmaacher',
	'pb-user-link-title' => 'Einzelheite för dä Metmaacher $1',
	'pb-user-heading' => 'Aanjahbe för <a href="$2" title="De Metmaachersigg för $1">$1</a>',
	'pb-user-title' => 'Aanjahbe för $1',
	'pb-users-navi' => 'Metmaacher',
	'pb-users-title' => 'Leß met de Metmaacher',
	'pb-users-overview' => 'Heh di $1 Metmaacher sen bei de „Päsöhnlesche Beschtähtejonge“ derbei:',
	'pb-verified-since' => 'Beschtäätesch zigg em',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'pb-about-pb-navi' => 'Iwwer',
	'pb-about-pb-tech' => 'Technesch Detailer',
	'pb-about-pb-title' => 'Iwwer de Projet',
	'pb-change-language' => 'Sprooch wiesselen',
	'pb-comment' => 'Bemierkung',
	'pb-current-figures' => 'Aktuell Zuelen',
	'pb-current-users' => 'Zu dësem Ament, maache(n) $1 Benotzer beim Projet <em>Perséinlech Bekannschaften</em> mat.',
	'pb-date' => 'Datum',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Perséinlech Bekanntschaften op der Däitscher Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> op Tool Labs. <a href="$1" title="Iwwer Wikipedia:Perséinlech Bekanntschaften">Méi Informatiounen.</a>',
	'pb-home' => 'Ufankssäit',
	'pb-javascript-notice' => 'Mir recommandéiere JavaScript fir dësen Internetsite anzeschalte, fir de Benotzer-Interface ze verbesseren.',
	'pb-labs-name' => 'Tool Labs vu Wikimedia',
	'pb-name' => 'Wikipedia:Perséinlech Bekanntschaften',
	'pb-recent-confirmations' => 'Rezent Confirmatiounen',
	'pb-reconfirmed' => 'Confirméiert?',
	'pb-user' => 'Benotzer',
	'pb-user-link-title' => 'Detailer vum  Benotzer $1',
	'pb-user-title' => 'Informatiounen iwwer $1',
	'pb-users-navi' => 'Benotzer',
	'pb-users-title' => 'Lëscht vun deenen déi matgemaach hunn',
	'pb-users-overview' => 'Dës $1 Benotzer hu beim Projet <em>Perséinlech Bekannschaften</em> matgemaach:',
	'pb-verified-since' => 'Confirméiert zanter dem',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'pb-about-pb-navi' => 'За програмот',
	'pb-about-pb-tech' => 'Технички подробности',
	'pb-about-pb-tech-text' => '<p>За посредников користиме <a href="https://mk.wikipedia.org/wiki/Пајтон_%28програмски_јазик%29">Python</a> и <a href="https://mk.wikipedia.org/wiki/MySQL">MySQL</a>. Изворниот код се објавува под условите на <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">ГНУ-овата ограничена општа јавна лиценца 3</a> (LGPL 3) и можете да го најдете <a href="https://github.com/tool-labs/pb">на GitHub</a>. Пријавите за грешки, барањата за нови функции и другите примедби упатувајте ги <a href="https://github.com/tool-labs/pb/issues/new">на следачот на проблеми на GitHub</a> или пак известувајќи ги одговорните на <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">страницата за разговор на Википедија</a>.</p>
    <p>Тековни складирани верзии на базата на „Лични познанства“ ќе најдете <a href="/pb/sql-dumps">тука</a>.</p>
    <p>Користиме неколку икони направени со проектот <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Овој проект се однесува на личнитете познанства на викимедијанците.</p>
    <p>Прв пат го спроведоа Ули Пурвин (Ulli Purwin, за посредникот) и Euku (бот). На почетокот на 2011 г, Вигелс (Wiegels) и Ирејас (Ireas) му се придружија на Ули во изработката на посредникот. Сега проектот повеќе не е вдомен во личен осплужувач уку на Викимедиините лаборатории.</p>
    <p>Повеќе информации за проектов ќе најдете на германската Википедија, и тоа на страницата <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften?uselang=mk">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'За проектот',
	'pb-change-language' => 'Смени јазик',
	'pb-comment' => 'Коментар',
	'pb-confirmations-given' => 'Дадени потврди',
	'pb-confirmations-taken' => 'Примени потврди',
	'pb-current-confirmations' => 'Има вкупнјо $1 потврди, што претставува околу <abbr title="$2">$3</abbr> дневно.',
	'pb-current-figures' => 'Тековни бројки',
	'pb-current-users' => 'Во моментов во проектот <em>Лични познанства</em> учествуваат $1 корисници.',
	'pb-date' => 'Датум',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften?uselang=mk" title="Wikipedia:Persönliche Bekanntschaften на германската Википедија">[[Wikipedia:Persönliche Bekanntschaften]]</a> на Лабораториите за алатки (Tool Labs). <a href="$1" title="За Wikipedia:Persönliche Bekanntschaften">Повеќе информации.</a>',
	'pb-home' => 'Почетна',
	'pb-home-welcome' => 'Добре дојдовте на проектот <em>Лични познанства</em> (гер. <em>Persönliche-Bekanntschaften</em>)!  Повеќе информации за него ќе најдете на страницата <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften?uselang=mk" title="Wikipedia:Persönliche Bekanntschaften на германската Википедија">на германската Википедија</a>.',
	'pb-javascript-notice' => 'Ви порепорачуваме да го овозможите JavaScript за подобар кориснички посредник.',
	'pb-labs-name' => 'Викимедиини лаборатории за алатки',
	'pb-participates-since' => 'Учествува од',
	'pb-name' => 'Википедија:Лични познанства',
	'pb-powered-by-labs' => 'Овозможено од Викимедиините лаборатории за алатки',
	'pb-recent-confirmations' => 'Скорешни потврди',
	'pb-reconfirmed' => 'Препотврдено?',
	'pb-user' => 'Корисник',
	'pb-user-link-title' => 'Подробоности за корисникот $1',
	'pb-user-heading' => 'Информации за <a href="$2" title="Корисинчка страница на $1">$1</a>',
	'pb-user-title' => 'Информации за $1',
	'pb-users-navi' => 'Корисници',
	'pb-users-title' => 'Список на учесници',
	'pb-users-overview' => 'Во проектот <em>Лично познанство</em> учествуваат следниве $1 корисници:',
	'pb-verified-since' => 'Потврдено на',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'pb-about-pb-navi' => 'च्या विषयी',
	'pb-about-pb-tech' => 'तांत्रिक तपशिल',
	'pb-about-pb-title' => 'प्रकल्पाबद्दल',
	'pb-change-language' => 'भाषा बदला',
	'pb-comment' => 'अभिप्राय',
	'pb-confirmations-given' => 'निश्चिती दिली',
	'pb-confirmations-taken' => 'निश्चिती मिळाली',
	'pb-current-figures' => 'सध्याचे आकडे',
	'pb-date' => 'दिनांक',
	'pb-home' => 'स्वगृह',
	'pb-javascript-notice' => 'यूजर इंटरफेस सुधरविण्यास,आम्ही जावास्क्रिप्ट सक्षम करण्याबद्दल सुचवितो.',
	'pb-labs-name' => 'विकिमिडिया टूल लॅब',
	'pb-recent-confirmations' => 'अलीकडील निश्चित्या',
	'pb-reconfirmed' => 'पुन्हा खात्री केली?',
	'pb-user' => 'सदस्य',
	'pb-user-link-title' => '$1 सदस्याबाबत तपशिल',
	'pb-user-title' => '$1 साठी माहिती',
	'pb-users-navi' => 'सदस्य',
	'pb-users-title' => 'सहभागी असणाऱ्यांची यादी',
);

/** Nepali (नेपाली)
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'pb-about-pb-navi' => 'बारेमा',
	'pb-comment' => 'टिप्पणी',
	'pb-date' => 'मिति',
	'pb-home' => 'गृह',
);

/** Dutch (Nederlands)
 * @author Romaine
 * @author Siebrand
 */
$messages['nl'] = array(
	'pb-about-pb-navi' => 'Over',
	'pb-about-pb-tech' => 'Technische details',
	'pb-about-pb-tech-text' => '<p>We gebruiken <a href="https://nl.wikipedia.org/wiki/Python_%28programmeertaal%29">Python</a> en <a href="https://nl.wikipedia.org/wiki/MySQL">MySQL</a> voor deze interface. De broncode is gepubliceerd onder de voorwaarden van de <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) en kan geraadpleegd worden <a href="https://github.com/tool-labs/pb">op GitHub</a>. Voeg probleemmeldingen, verzoeken voor nieuwe mogelijkheden of andere opmerkingen toe <a href="https://github.com/tool-labs/pb/issues/new">aan de issuetracker op GitHub</a> of meld deze op de <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">overlegpagina op Wikipedia</a>.</p>
    <p>U kunt de huidige dumps van de PB-database <a href="/pb/sql-dumps">downloaden</a>.</p>
    <p>Wij maken gebruik van verschillende pictogrammen van het project <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>In dit project worden persoonlijke ontmoetingen van Wikimedianen inzichtelijk gemaakt.</p>
    <p>De eerste implementatie werd gedaan door Ulli Purwin (interface) en Euku (bot). In het begin van 2011 volgden Wiegels en Ireas Ulli op voor de interface. Het project wordt gehost op Wikimedia Labs.</p>
    <p>Meer informatie over dit project kunt u vinden op de Duitstalige Wikipedia op de pagina <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a> en een verkorte versie daarvan op de Nederlandstalige Wikipedia op <a href="https://nl.wikipedia.org/wiki/Wikipedia:Ontmoete_Wikimedianen">Wikipedia:Ontmoete Wikimedianen</a>.</p>',
	'pb-about-pb-title' => 'Over het project',
	'pb-change-language' => 'Taal wijzigen',
	'pb-comment' => 'Reageren',
	'pb-confirmations-given' => 'Gegeven bevestigingen',
	'pb-confirmations-taken' => 'Ontvangen bevestigingen',
	'pb-current-confirmations' => 'Er {{PLURAL:$1|is één bevestiging|zijn in totaal $1 bevestigingen, dit {{PLURAL:$3|is ongeveer|zijn ongeveer}} <abbr title="$2">$3</abbr> bevestiging{{PLURAL:$3||en}} per dag}}.',
	'pb-current-figures' => 'Huidige cijfers',
	'pb-current-users' => 'Op dit moment nemen $1 gebruikers deel aan het project <em>Ontmoete Wikimedianen</em>.',
	'pb-date' => 'Datum',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in de Duitstalige Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> op Tool Labs. <a href="$1" title="Over Wikipedia:Ontmoete Wikimedianen">Meer informatie.</a>',
	'pb-home' => 'Startpagina',
	'pb-home-welcome' => 'Welkom bij het project <em>Ontmoete Wikimedianen</em> (<em>Persönliche Bekanntschaften</em> in het Duits)! Meer informatie over dit project is te vinden op <a href="https://nl.wikipedia.org/wiki/Wikipedia:Ontmoete_Wikimedianen" title="Wikipedia:Ontmoete Wikimedianen op de Nederlandstalige Wikipedia">op de Nederlandstalige Wikipedia</a> of op de <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften op de Duitstalige Wikipedia">op de Duitstalige Wikipedia</a>.',
	'pb-javascript-notice' => 'Voor een beter gebruikersinterface, raden wij aan om JavaScript in te schakelen.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Neemt deel sinds',
	'pb-name' => 'Wikipedia:Ontmoete Wikimedianen',
	'pb-powered-by-labs' => 'Mogelijk gemaakt door Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Recente bevestigingen',
	'pb-reconfirmed' => 'Herbevestigd?',
	'pb-user' => 'Gebruiker',
	'pb-user-link-title' => 'Details voor gebruiker $1',
	'pb-user-heading' => 'Informatie voor <a href="$2" title="Gebruikerspagina van $1">$1</a>',
	'pb-user-title' => 'Informatie voor $1',
	'pb-users-navi' => 'Gebruikers',
	'pb-users-title' => 'Lijst van deelnemers',
	'pb-users-overview' => 'Deze {{PLURAL:$1|gebruiker neemt|$1 gebruikers nemen}} deel aan het project <em>Ontmoete Wikimedianen</em>:',
	'pb-verified-since' => 'Bevestigd sinds',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'pb-about-pb-navi' => 'A prepaus',
	'pb-about-pb-tech' => 'Detalhs tecnics',
	'pb-about-pb-title' => 'A prepaus del projècte',
	'pb-change-language' => 'Cambiar de lenga',
	'pb-comment' => 'Comentari',
	'pb-confirmations-given' => 'Confirmacions provesidas',
	'pb-current-figures' => 'Cifras actualas',
	'pb-date' => 'Data',
	'pb-home' => "Pagina d'acuèlh",
	'pb-user' => 'Utilizaire',
	'pb-user-link-title' => 'Detalhs per l’utilizaire $1',
	'pb-user-title' => 'Informacion sus $1',
	'pb-users-navi' => 'Utilizaires',
	'pb-users-title' => 'Lista dels participants',
	'pb-verified-since' => 'Verificat dempuèi',
);

/** Polish (polski)
 * @author Alan ffm
 * @author Faren
 * @author Ty221
 */
$messages['pl'] = array(
	'pb-about-pb-navi' => 'O programie',
	'pb-about-pb-tech' => 'Szczegóły techniczne',
	'pb-about-pb-title' => 'O projekcie',
	'pb-change-language' => 'Zmień język',
	'pb-comment' => 'Komentarz',
	'pb-confirmations-given' => 'Dostarczone potwierdzenia',
	'pb-confirmations-taken' => 'Otrzymane potwierdzenia',
	'pb-current-confirmations' => 'Są $1 potwierdzenia całkowicie, to około <abbr title="$2">$3</abbr> potwierdzeń na dzień.',
	'pb-current-figures' => 'Aktualne dane',
	'pb-date' => 'Data',
	'pb-home' => 'Start',
	'pb-javascript-notice' => 'Zalecamy włączenie JavaScript dla tej strony w celu poprawy interfejsu użytkownika.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Uczestniczy od',
	'pb-name' => 'Wikipedia:Osobiste znajomości',
	'pb-powered-by-labs' => 'Na platformie Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Ostatnie potwierdzenia',
	'pb-reconfirmed' => 'Potwierdzono ponownie?',
	'pb-user' => 'Użytkownik',
	'pb-user-link-title' => 'Szczegóły użytkownika $1',
	'pb-user-title' => 'Informacje o $1',
	'pb-users-navi' => 'Użytkownicy',
	'pb-users-title' => 'Lista uczestników',
	'pb-verified-since' => 'Sprawdzone od',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'pb-about-pb-navi' => 'په اړه',
	'pb-change-language' => 'ژبه ټاکل',
	'pb-comment' => 'تبصره',
	'pb-date' => 'نېټه',
	'pb-home' => 'کور',
	'pb-user' => 'کارن',
	'pb-users-navi' => 'کارنان',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Amgauna
 */
$messages['pt-br'] = array(
	'pb-about-pb-navi' => 'Sobre',
	'pb-about-pb-tech' => 'Detalhes técnicos',
	'pb-about-pb-tech-text' => '<p>Nós Usamos <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> e <a href="https://es.wikipedia.org/wiki/MySQL">MySQL</a> para esta interface. O código fonte está publicado abaixo no términos da licença <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) e pode ser acessado <a href="https://github.com/tool-labs/pb">en GitHub</a>. Por favor, adicione novos relatórios de bugs, solicitações de características ou outros comentários <a href="https://github.com/tool-labs/pb/issues/new">para o seguimento dos relatórios de GitHub</a> o relatório está em <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">página de discussão na Wikipedia</a>.</p>
    <p>Os respaldos atuais da base de dados de PB pode encontrar-se em <a href="/pb/sql-dumps">aquí</a>.</p>
    <p>Utilizamos vários icones criados pelo projeto <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Este projeto representa conhecimentos pessoais entre Wikimedians.</p>
    <p>A primeira implementação foi feita por Ulli Purwin (interfaz) e Euku (bot). No início de 2011, Wiegels e Ireas seguiu o Ulli fazendo a interface. Por hora, o projeto não está alojado em um servidor privado, mas na Wikimedia Labs.</p>
    <p>Pode encontrar-se mais informações deste projeto na Wikipedia Alemana em sua página <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Sobre o projeto',
	'pb-change-language' => 'Alterar o idioma',
	'pb-comment' => 'Comentário',
	'pb-confirmations-given' => 'confirmação data',
	'pb-confirmations-taken' => 'confirmação recebida',
	'pb-current-confirmations' => 'Tem $1 confirmações no total, trata-se de <abbr title="$2">$3</abbr> confirmações diárias.',
	'pb-current-figures' => 'Figuras atuais',
	'pb-current-users' => 'No momento, $1 usuário participou do projeto de <em>Conhecimentos Pessoais</em>.',
	'pb-date' => 'Data',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften en la Wikipedia Alemana">[[Wikipedia:Persönliche Bekanntschaften]]</a> em Tool Labs. <a href="$1" title="Acerca de Wikipedia:Persönliche Bekanntschaften">Mais informações.</a>',
	'pb-home' => 'Casa',
	'pb-home-welcome' => 'Bem-vindo ao projeto <em>Conhecimentos Pessoais</em> ¡(<em>Persönliche-Bekanntschaften</em> en alemán)! Mais informações acerca deste projeto pode encontrar-se <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">no idioma Alemão na Wikipedia</a>.',
	'pb-javascript-notice' => 'Nós recomendamos ativar o JavaScript para este website, para melhorar a interface de usuário.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Participa desde',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Potencializado por Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Confirmações recentes',
	'pb-reconfirmed' => 'Reconfirmar?',
	'pb-user' => 'Usuário',
	'pb-user-link-title' => 'Detalhes para o usuário $1',
	'pb-user-heading' => 'Informação para <a href="$2" title="Página de usuário de $1">$1</a>',
	'pb-user-title' => 'Informação sobre "$1"',
	'pb-users-navi' => 'Usuários',
	'pb-users-title' => 'Lista de participantes',
	'pb-users-overview' => 'Estes $1 de usuários participam do projeto <em>Conhecimentos Pessoais</em>.',
	'pb-verified-since' => 'Verificado desde',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'pb-about-pb-navi' => 'Despre',
	'pb-about-pb-tech' => 'Detalii tehnice',
	'pb-about-pb-title' => 'Despre proiect',
	'pb-change-language' => 'Schimbă limba',
	'pb-comment' => 'Comentariu',
	'pb-confirmations-given' => 'Confirmări date',
	'pb-confirmations-taken' => 'Confirmări primite',
	'pb-current-confirmations' => 'Există $1 confirmări în total, adică aproximativ <abbr title="$2">$3</abbr> confirmări pe zi.',
	'pb-current-figures' => 'Cifre actuale',
	'pb-date' => 'Dată',
	'pb-home' => 'Acasă',
	'pb-javascript-notice' => 'Vă recomandăm să activați JavaScript pe acest site web pentru a îmbunătăți interfața cu utilizatorul.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Participă din',
	'pb-powered-by-labs' => 'Motorizat de Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Confirmări recente',
	'pb-reconfirmed' => 'Reconfirmat?',
	'pb-user' => 'Utilizator',
	'pb-user-link-title' => 'Detalii pentru utilizatorul $1',
	'pb-user-heading' => 'Informații pentru <a href="$2" title="Pagina utilizatorului $1">$1</a>',
	'pb-user-title' => 'Informații pentru $1',
	'pb-users-navi' => 'Utilizatori',
	'pb-users-title' => 'Listă de participanți',
	'pb-verified-since' => 'Verificat din',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'pb-about-pb-navi' => 'О проекте',
	'pb-about-pb-tech' => 'Технические детали',
	'pb-about-pb-tech-text' => '<p>Мы используем <a href="https://ru.wikipedia.org/wiki/Python">Python</a> и <a href="https://ru.wikipedia.org/wiki/MySQL">MySQL</a> для этого интерфейса. Исходный код публикуется под лицензией <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) и доступен <a href="https://github.com/инструмент-labs/pb">на GitHub</a>. Пожалуйста, добавляйте отчеты об ошибках, пожелания или другие замечания <a href="https://github.com/tool-labs/pb/issues/new">в баг-трекере GitHub</a> или сообщайте об этом на <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">странице обсуждения в Википедии</a>.</p>
 <p>в настоящее время отвалов PB базы данных можно найти <a href="/pb/sql дампы">здесь</a>.</p>
 <p>Мы используем несколько иконок, созданных проектом <a href="http://glyphicons.com/" title="Страница Glyphicons">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Этот проект представляет личные знакомства между викимедийцами.</p>
<p>Первая реализация была сделана Ulli Purwin (интерфейс) и Euku (бот). В начале 2011 года Wiegels и Ireas вслед за Ulli присоединились к работе над интерфейсом. В настоящее время проект размещается не на частном сервере, а на Wikimedia Labs.</p>
<p>Дополнительные сведения об этом проекте можно найти в немецкой Википедии на странице <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'О проекте',
	'pb-change-language' => 'Изменить язык',
	'pb-comment' => 'Комментарий',
	'pb-confirmations-given' => 'Данные подтверждения',
	'pb-confirmations-taken' => 'Полученные подтверждения',
	'pb-current-confirmations' => 'Всего $1 подтверждений, это около <abbr title="$2">$3</abbr> подтверждений в день.',
	'pb-current-figures' => 'Текущие показатели',
	'pb-current-users' => 'На данный момент $1 пользователей участвуют в проекте <em>Личные знакомства</em>.',
	'pb-date' => 'Дата',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften в немецкой Википедии">[[Wikipedia:Persönliche Bekanntschaften]]</a> на Tool Labs. <a href="$1" title="О Wikipedia:Persönliche Bekanntschaften">Подробнее.</a>',
	'pb-home' => 'Главная',
	'pb-home-welcome' => 'Добро пожаловать в проект <em>Личные знакомства</em> (или, на немецком, <em>Persönliche-Bekanntschaften</em>)! Дополнительную информацию об этом проекте вы можете найти 
<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften в немецкой Википедии">в немецкой Википедии</a>.',
	'pb-javascript-notice' => 'Мы рекомендуем включить JavaScript на данном веб-сайте для улучшения отображения пользовательского интерфейса.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Принимает активное участие с',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'На платформе Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Последние подтверждения',
	'pb-reconfirmed' => 'Подтверждено?',
	'pb-user' => 'Участник',
	'pb-user-link-title' => 'Подробная информация по участнику $1',
	'pb-user-heading' => 'Информация для <a href="$2" title="Страница участника $1">$1</a>',
	'pb-user-title' => 'Информация для $1',
	'pb-users-navi' => 'Участники',
	'pb-users-title' => 'Список участников',
	'pb-users-overview' => 'Эти $1 пользователей участвуют в проекте <em>Личное знакомство</em>:',
	'pb-verified-since' => 'Проверен с',
);

/** Scots (Scots)
 * @author John Reid
 */
$messages['sco'] = array(
	'pb-about-pb-navi' => 'Aneat',
	'pb-about-pb-tech' => 'Techneecal deetails',
	'pb-about-pb-tech-text' => '<p>We uise <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> n <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> fer this interface. The soorce code is publeeshed unner the terms o the <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Publeec License 3</a> (LGPL 3) n can be accessed <a href="https://github.com/tool-labs/pb">on GitHub</a>. Please eik bug reports, featur requests or ither comments <a href="https://github.com/tool-labs/pb/issues/new">til the GitHub issue tracker</a> or report it oan the <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">Wikipædia tauk page</a>.</p>
    <p>The Nou dumps o the PB database can be foond <a href="/pb/sql-dumps">here</a>.</p>
    <p>We uise several icons cræftit bi the <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a> waurk.</p>',
	'pb-about-pb-text' => '<p>This waurk represents personal acquaintances atween Wikimedians.</p>
    <p>The firstwhile implementation wis dun bi Ulli Purwin (interface) n Euku (bot). At the sairt o 2011, Wiegels n Ireas follaeed Ulli daein the interface. Bi now, the waurk is naw langer hosted oan ae preevate server but oan Wikimedia Labs.</p>
    <p>Mair information aneat this waurk can be foond in the German Wikipædia oan the page <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Aneat the waurk',
	'pb-change-language' => 'Chynge lied',
	'pb-comment' => 'Comment',
	'pb-confirmations-given' => 'Gien confirmations',
	'pb-confirmations-taken' => 'Receeved confirmations',
	'pb-current-confirmations' => 'Thaur\'s $1 confirmations in total, this is aboot <abbr title="$2">$3</abbr> confirmations ae day.',
	'pb-current-figures' => 'Figures the nou',
	'pb-current-users' => 'At the nou, $1 uisers parteecipate in the <em>Personal Acquaintances</em> waurk.',
	'pb-date' => 'Date',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German Wikipædia">[[Wikipedia:Persönliche Bekanntschaften]]</a> oan Tuil Labs. <a href="$1" title="Aneat Wikipedia:Persönliche Bekanntschaften">Mair information.</a>',
	'pb-home' => 'Hame',
	'pb-home-welcome' => 'Weelcome til the <em>Personal Acquaintances</em> waurk (<em>Persönliche-Bekanntschaften</em> in German)!  Mair information aneat this waurk can be foond <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German leid Wikipædia">in the German leid Wikipædia</a>.',
	'pb-javascript-notice' => 'We recommend that ye enable JavaScript fer this wabsite tae impruiv the uiser interface.',
	'pb-labs-name' => 'Wikimedia Tuil Labs',
	'pb-participates-since' => 'Parteecipates sin',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Pwred bi Wikimedia Tuil Labs',
	'pb-recent-confirmations' => 'Reecent confirmations',
	'pb-reconfirmed' => 'Reeconfirmed?',
	'pb-user' => 'Uiser',
	'pb-user-link-title' => 'Details fer uiser $1',
	'pb-user-heading' => 'Information fer <a href="$2" title="Uiser page o $1">$1</a>',
	'pb-user-title' => 'Information fer $1',
	'pb-users-navi' => 'Uisers',
	'pb-users-title' => 'Leet o parteecipaters',
	'pb-users-overview' => 'Thae $1 uisers parteeceepate in the <em>Personal Acquaintance</em> waurk:',
	'pb-verified-since' => 'Vereefied sin',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'pb-about-pb-navi' => 'О',
	'pb-change-language' => 'Промени језик',
	'pb-comment' => 'Коментар',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'pb-about-pb-navi' => 'Om',
	'pb-about-pb-tech' => 'Tekniska detaljer',
	'pb-about-pb-tech-text' => '<p>Vi använder <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> och <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> för detta gränssnitt. Källkoden är publicerad under vilkoren i <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) och kan nås via <a href="https://github.com/tool-labs/pb">på GitHub</a>. Vänligen lägg till buggrapporter, funktionsförfrågningar eller andra kommentarer <a href="https://github.com/tool-labs/pb/issues/new">till GitHubs problemspåraren</a> eller rapportera in det på <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">diskussionssidan på Wikipedia</a>.</p>
    <p>Nuvarande dumpar av PB-databasen kan hittas <a href="/pb/sql-dumps">här</a>.</p>
    <p>Vi använder flera ikoner som skapas av projektet <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Detta projekt representerar personliga bekantskaper mellan wikimedianer.</p>
<p>Det första implementeringen gjordes av Ulli Purwin (gränssnitt) och Euku (bot). I början av 2011 började även Wiegels och Ireas att arbeta tillsammans med Ulli med gränssnittet. Nu ligger projektet inte längre på en privat server utan på Wikimedia Labs.</p>
<p>Mer information om projektet kan hittas på tyskspråkiga Wikipedia på sidan<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Om projektet',
	'pb-change-language' => 'Ändra språk',
	'pb-comment' => 'Kommentar',
	'pb-confirmations-given' => 'Givna bekräftelser',
	'pb-confirmations-taken' => 'Mottagna bekräftelser',
	'pb-current-confirmations' => 'Det finns  totalt $1 bekräftelser, det handlar om <abbr title="$2">$3</abbr>$3</abbr> bekräftelser per dag.',
	'pb-current-figures' => 'Aktuella siffror',
	'pb-current-users' => 'Just nu deltar $1 användare i projektet <em>Personliga bekantskaper</em>.',
	'pb-date' => 'Datum',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften på tyskspråkiga Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> på Tool Labs. <a href="$1" title="About Wikipedia:Persönliche Bekanntschaften">Mer information.</a>',
	'pb-home' => 'Hem',
	'pb-home-welcome' => 'Välkommen till projektet <em>Personliga bekantskaper</em> (<em>Persönliche-Bekanntschaften</em> på tyska)! Mer information om detta projekt kan hittas <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">på den tyska språkversionen av Wikipedia</a>.',
	'pb-javascript-notice' => 'Vi rekommenderar aktivering av JavaScript på denna webbplats då det förbättrar användargränssnittet.',
	'pb-labs-name' => 'Wikimedia Tool Labs',
	'pb-participates-since' => 'Deltar sedan',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Drivs av Wikimedia Tool Labs',
	'pb-recent-confirmations' => 'Senaste bekräftelser',
	'pb-reconfirmed' => 'Återbekräftade?',
	'pb-user' => 'Användare',
	'pb-user-link-title' => 'Detaljer för användare $1',
	'pb-user-heading' => 'Information om <a href="$2" title="$1s användarsida">$1</a>',
	'pb-user-title' => 'Information om $1',
	'pb-users-navi' => 'Användare',
	'pb-users-title' => 'Deltagarlista',
	'pb-users-overview' => 'Dessa $1 användare deltar i projektet <em>Personliga bekantskaper</em>:',
	'pb-verified-since' => 'Verifierad sedan',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 */
$messages['uk'] = array(
	'pb-about-pb-navi' => 'Про програму',
	'pb-about-pb-tech' => 'Технічні деталі',
	'pb-about-pb-tech-text' => '<p>Ми використовуємо <a href="http://uk.wikipedia.org/wiki/Python>Python</a> і <a href="http://uk.wikipedia.org/wiki/Mysql">MySQL</a> для цього інтерфейсу. Вихідний код видається на умовах <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU меншої загальної громадської ліцензії 3</a> (LGPL 3) і може бути доступний <a href="https://github.com/tool-labs/pb">на GitHub</a>. Додавайте звіти про помилки, тематичні запити або інші коментарі <a href="https://github.com/tool-labs/pb/issues/new">на трекері GitHub</a> або повідомте про це нас у <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">сторінці обговорень Вікіпедії</a>.</p>
<p>Поточний знімок PB бази даних можна знайти <a href="/pb/sql-dumps">тут</a>.</p>
<p>Ми використовуємо кілька піктограм, створених <a href="http://glyphicons.com/" title="Glyphicons homepage">проектом Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Цей проект представляє особисте знайомство між дописувачами проектів Фонду Вікімедіа.</p>
<p>Перша реалізація була зроблена Уллі Пурвіном (інтерфейс) і Euku (бот). На початку 2011 року, Wiegels і Ireas після Уллі роблять інтерфейс. Тепер проект більше не перебуває на особистому сервері, а на Вікімедія Labs.</p>
<p>Більше інформації про цей проект можна знайти у німецькій Вікіпедії на сторінці <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Про проект',
	'pb-change-language' => 'Змінити мову',
	'pb-comment' => 'Коментар',
	'pb-confirmations-given' => 'Надані підтвердження',
	'pb-confirmations-taken' => 'Отримані підтвердження',
	'pb-current-confirmations' => 'Всього $1 підтверджень, це близько <abbr title="$2">$3</abbr> підтверджень за день.',
	'pb-current-figures' => 'Поточні показники',
	'pb-current-users' => 'На даний момент $1 користувачів беруть участь у проекті <em>Особисте знайомство</em>.',
	'pb-date' => 'Дата',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a> на Tool Labs. <a href="$1" title="About Wikipedia:Persönliche Bekanntschaften">Подробиці.</a>',
	'pb-home' => 'Головна',
	'pb-home-welcome' => 'Ласкаво просимо на проект <em>Особисте знайомство</em> (<em>Persönliche-Bekanntschaften</em> німецькою мовою)!  Більше інформації про цей проект можна знайти на <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">у німецькій версії Вікіпедії</a>.',
	'pb-javascript-notice' => 'Рекомендовано увімкнути JavaScript для цього веб-сайту для поліпшення інтерфейсу користувача.',
	'pb-labs-name' => 'Вікімедіа Tool Labs',
	'pb-participates-since' => 'Бере участь з',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'На платформі Вікімедіа Tool Labs',
	'pb-recent-confirmations' => 'Останні підтвердження',
	'pb-reconfirmed' => 'Підтверджено?',
	'pb-user' => 'Користувач',
	'pb-user-link-title' => 'Деталі для користувача $1',
	'pb-user-heading' => 'ІнформацІя для <a href="$2" title="Сторінка учасника $1">$1</a>',
	'pb-user-title' => 'Інформація для $1',
	'pb-users-navi' => 'Користувачі',
	'pb-users-title' => 'Список учасників',
	'pb-users-overview' => 'Ці $1 користувачів беруть участь у проекті <em>Особисте знайомство</em>:',
	'pb-verified-since' => 'Перевірено з',
);

/** Urdu (اردو)
 * @author عثمان خان شاہ
 */
$messages['ur'] = array(
	'pb-about-pb-navi' => 'تعارف',
	'pb-change-language' => 'زبان تبدیل کریں',
	'pb-comment' => 'تبصرہ',
	'pb-confirmations-given' => 'دئے گئے مصدقات',
	'pb-confirmations-taken' => 'موصول مصدقات',
	'pb-current-figures' => 'موجودہ فیگر',
	'pb-date' => 'تاریخ',
	'pb-home' => 'گھر',
	'pb-labs-name' => 'ویکیمیڈیا ہتیار لیبیں',
	'pb-participates-since' => 'سے مشترک ہے',
	'pb-user' => 'صارف',
	'pb-users-navi' => 'صارفین',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'pb-about-pb-navi' => 'Giới thiệu',
	'pb-about-pb-tech' => 'Chi tiết kỹ thuật',
	'pb-about-pb-title' => 'Giới thiệu về dự án',
	'pb-change-language' => 'Chọn ngôn ngữ',
	'pb-comment' => 'Bình luận',
	'pb-current-figures' => 'Thống kê hiện tại',
	'pb-date' => 'Ngày tháng',
	'pb-home' => 'Trang đầu',
	'pb-labs-name' => 'Phòng thí nghiệm Công cụ Wikimedia',
	'pb-participates-since' => 'Tham gia từ',
	'pb-user' => 'Người dùng',
	'pb-user-link-title' => 'Chi tiết về người dùng $1',
	'pb-user-heading' => 'Thông tin về <a href="$2" title="Trang người dùng $1">$1</a>',
	'pb-user-title' => 'Thông tin về $1',
	'pb-users-navi' => 'Người dùng',
	'pb-users-title' => 'Danh sách người tham gia',
	'pb-verified-since' => 'Xác nhận từ',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'pb-about-pb-navi' => 'וועגן',
	'pb-home' => 'היים',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'pb-about-pb-navi' => '关于',
	'pb-about-pb-tech' => '技术信息',
	'pb-about-pb-tech-text' => '<p>我们使用 <a href="https://zh.wikipedia.org/wiki/Python">Python</a> 和 <a href="https://zh.wikipedia.org/wiki/MySQL">MySQL</a> 开发此界面。源代码依据<a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU 轻量通用公共许可证 3</a>（LGPL 3）发布，这也可在<a href="https://github.com/tool-labs/pb">GitHub</a>找到。请通过<a href="https://github.com/tool-labs/pb/issues/new">GitHub 问题追踪器</a>或者<a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">维基百科讨论页</a>提交错误报告、功能请求或其他评论。</p>
    <p>当前的PB数据库转储可在<a href="/pb/sql-dumps">此处</a>找到。</p>
    <p>我们使用<a href="http://glyphicons.com/" title="Glyphicons 首页">Glyphicons</a>计划制作的一些图标。</p>',
	'pb-about-pb-text' => '<p>本项目代表维基人直接的个人相识。</p>
    <p>The first implementation was done by Ulli Purwin (interface) and Euku (bot). In the beginning of 2011, Wiegels and Ireas followed Ulli doing the interface. By now, the project is not longer hosted on a private server but on Wikimedia Labs.</p>
    <p>更多有关此项目的信息请参见德语维基百科的<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>。</p>',
	'pb-about-pb-title' => '关于项目',
	'pb-change-language' => '更改语言',
	'pb-comment' => '评论',
	'pb-confirmations-given' => '给定确认',
	'pb-confirmations-taken' => '收到确认',
	'pb-current-confirmations' => '总共$1次确认，这是关于每天的<abbr title="$2">$3</abbr>次确认。',
	'pb-current-figures' => '目前计数',
	'pb-current-users' => '此时，$1位用户参与了<em>个人相识</em>项目。',
	'pb-date' => '日期',
	'pb-footer' => '工具实验室的<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German Wikipedia">[[Wikipedia:Persönliche Bekanntschaften]]</a>。<a href="$1" title="About Wikipedia:Persönliche Bekanntschaften">更多信息。</a>',
	'pb-home' => '首页',
	'pb-home-welcome' => '欢迎来到<em>个人相识</em>项目（德语<em>Persönliche-Bekanntschaften</em>）！更多此项目的信息可在<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">德语维基百科</a>找到。',
	'pb-javascript-notice' => '我们推荐您在此网站启用JavaScript以改进用户体验。',
	'pb-labs-name' => '维基媒体工具实验室',
	'pb-participates-since' => '参与自从',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => '由维基媒体工具实验室提供支持',
	'pb-recent-confirmations' => '最近确认',
	'pb-reconfirmed' => '重新确认？',
	'pb-user' => '用户',
	'pb-user-link-title' => '用户$1的详细信息',
	'pb-user-heading' => '用于<a href="$2" title="User page of $1">$1</a>的信息',
	'pb-user-title' => '用于$1的信息',
	'pb-users-navi' => '用户',
	'pb-users-title' => '参与者列表',
	'pb-users-overview' => '这里的$1位用户参与<em>个人相识</em>项目：',
	'pb-verified-since' => '验证自从',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hant'] = array(
	'pb-about-pb-navi' => '關於',
	'pb-user' => '使用者',
	'pb-users-navi' => '使用者',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hk'] = array(
	'pb-user' => '用戶',
	'pb-users-navi' => '用戶',
);
