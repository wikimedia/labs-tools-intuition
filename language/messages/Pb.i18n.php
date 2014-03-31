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
 * @author Siebrand
 * @author ireas
 */
$messages['qqq'] = array(
	'pb-about-pb-navi' => 'Navigation item ‘About PB’',
	'pb-about-pb-tech' => 'About section ‘Technical’',
	'pb-about-pb-tech-text' => 'Description of the technical details of the project (HTML allowed, in <p> tag(s))',
	'pb-about-pb-text' => 'Description of the project (HTML allowed, in <p> tag(s))',
	'pb-about-pb-title' => 'Title of the page ‘About PB’',
	'pb-change-language' => 'Link to the Intuition settings page',
	'pb-comment' => 'Label for comments',
	'pb-confirmations-given' => 'Name for the confirmations done by a user',
	'pb-confirmations-taken' => 'Name for the confirmations received by a user',
	'pb-current-confirmations' => 'Label containing some figures about confirmations (HTML allowed). Parameters:
* $1: total confirmation count;
* $2: exact confirmation count per day;
* $3: rounded confirmation count per day',
	'pb-current-figures' => 'Home section ‘Current figures’',
	'pb-current-users' => 'Label containing some figures about the participating users (HTML allowed)',
	'pb-date' => 'Label for dates',
	'pb-footer' => 'Content of the footer (HTML allowed). $1: URL of the about page',
	'pb-home' => 'Title of the home page',
	'pb-home-welcome' => 'Welcome label on the home page (HTML allowed)',
	'pb-javascript-notice' => 'Content of the noscript warning',
	'pb-labs-name' => 'Name of Wikimedia Tool Labs',
	'pb-participates-since' => 'Label for the date since when the user participates',
	'pb-name' => 'Name of the WP:PB project',
	'pb-powered-by-labs' => 'Title for the ‘Powered by Labs’ logo',
	'pb-recent-confirmations' => 'Home section ‘Recent confirmations’',
	'pb-reconfirmed' => 'Label for reconfirmations',
	'pb-user' => 'Label for user names',
	'pb-user-link-title' => 'Title for a link to user details. $1: user name of the linked user',
	'pb-user-heading' => 'Heading of the user details page (HTML allowed). $1: user name of the current user; $2: link to the user page of the current user',
	'pb-user-title' => 'Title of the user details page. $1: user name of the current user',
	'pb-users-navi' => 'Navgation item ‘Users’',
	'pb-users-title' => 'Title of the page ‘Users’',
	'pb-users-overview' => 'Introduction for the ‘Users’ page (HTML allowed). Parameters:
* $1: total count of participating users',
	'pb-verified-since' => 'Label for the date since when the user is verified',
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

/** Breton (brezhoneg)
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
	'pb-date' => 'Deiziad',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften er Wikipedia alaman">[[Wikipedia:Persönliche Bekanntschaften]]</a> e Tool Labs. <a href="$1" title="Diwar-benn Wikipedia:Persönliche Bekanntschaften">Evit gouzout hiroc\'h.</a>',
	'pb-home' => 'Pajenn zegemer',
	'pb-home-welcome' => 'Degemer mat er raktres <em>Anaoudegezhioù Personel</em> (<em>Persönliche-Bekanntschaften</em> en alamaneg) ! Evit gouzout hiroc\'h war ar raktres-se <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften er Wikipedia alaman"> e Wikipedia en alamaneg</a>.',
	'pb-javascript-notice' => "Aliañ a reomp ac'hanoc'h da weredekaat JavaScript el lec'hienn Web evit gwellaat an etrefas implijer.",
	'pb-labs-name' => 'Tool Labs eus Wikimedia',
	'pb-participates-since' => 'A gemer perzh abaoe',
	'pb-name' => 'Wikipédia:Anaoudegezh personnel',
	'pb-powered-by-labs' => 'Sevenet gant Tool Labs eus Wikimedia',
	'pb-user' => 'Implijer',
	'pb-user-link-title' => 'Munudoù evit an implijer $1',
	'pb-user-heading' => 'Titouroù evit <a href="$2" title="Pajenn implijer $1">$1</a>',
	'pb-user-title' => 'Titouroù evit $1',
	'pb-users-navi' => 'Implijerien',
	'pb-users-title' => 'Roll ar berzhidi',
	'pb-users-overview' => '{{PLURAL:$1|An implijer-mañ a gemer perzh|An $1 implijerien-mañ a gemer perzh}} er raktres <em>Anaoudegezh personel</em> :',
	'pb-verified-since' => 'Gwiriet abaoe',
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
 * @author VegaDark
 */
$messages['es'] = array(
	'pb-about-pb-navi' => 'Acerca de',
	'pb-about-pb-tech' => 'Detalles técnicos',
	'pb-about-pb-tech-text' => '<p>Utilizamos <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> y <a href="https://es.wikipedia.org/wiki/MySQL">MySQL</a> para esta interfaz. El código fuente es publicado bajo los términos de la licencia <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) y puede ser accesada <a href="https://github.com/tool-labs/pb">en GitHub</a>. Por favor, añade reportes de bugs, solicitudes de características u otros comentarios <a href="https://github.com/tool-labs/pb/issues/new">al seguimiento de reportes de GitHub</a> o repórtalo en la <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">página de disucsión en Wikipedia</a>.</p>
    <p>Los respaldos actuales de la base de datos de PB pueden encontrarse <a href="/pb/sql-dumps">aquí</a>.</p>
    <p>Utilizamos varios iconos creados por el proyecto <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Este proyecto representa personal conocido entre Wikimedians.</p>
    <p>La primera implementación fue hecha por Ulli Purwin (interfaz) y Euku (bot). A inicios de 2011, Wiegels e Ireas siguieron a Ulli haicendo la interfaz. Por ahora, el proyecto ya no está alojado en un servidor privado pero sí en Wikimedia Labs.</p>
    <p>Puede encontrarse más información de este proyecto en la Wikipedia Alemana en la página <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'Sobre el proyecto',
	'pb-change-language' => 'Cambiar el idioma',
	'pb-comment' => 'Comentario',
	'pb-confirmations-given' => 'Confirmaciones dadas',
	'pb-confirmations-taken' => 'Confirmaciones recibidas',
	'pb-current-confirmations' => 'Hay $1 confirmaciones en total, se trata de <abbr title="$2">$3</abbr> confirmaciones por día.',
	'pb-current-figures' => 'Cifras actuales',
	'pb-current-users' => 'Por el momento, $1 usuarios participan en el proyecto <em>Personal Conocido</em>.',
	'pb-date' => 'Fecha',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften en la Wikipedia Alemana">[[Wikipedia:Persönliche Bekanntschaften]]</a> en Tool Labs. <a href="$1" title="Acerca de Wikipedia:Persönliche Bekanntschaften">Más información.</a>',
	'pb-home' => 'Inicio',
	'pb-home-welcome' => 'Bienvenido al proyecto <em>Conocidos Personales</em> ¡(<em>Persönliche-Bekanntschaften</em> en alemán)! Más información acerca de este proyecto puede encontrarse <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften in the German language Wikipedia">en el idioma alemán de Wikipedia</a>.',
	'pb-javascript-notice' => 'Recomendamos activar JavaScript en este sitio web para mejorar la interfaz de usuario.',
	'pb-labs-name' => 'Herramienta de Wikimedia Labs',
	'pb-participates-since' => 'Participa desde',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'Impulsado por Wikimedia Labs',
	'pb-recent-confirmations' => 'Confirmaciones recientes',
	'pb-reconfirmed' => '¿Reconfirmado?',
	'pb-user' => 'Usuario',
	'pb-user-link-title' => 'Detalles del usuario $1',
	'pb-user-heading' => 'Información para <a href="$2" title="Página de usuario de $1">$1</a>',
	'pb-user-title' => 'Información para $1',
	'pb-users-navi' => 'Usuarios',
	'pb-users-title' => 'Lista de participantes',
	'pb-users-overview' => 'Estos $1 usuarios participan en el proyecto <em>Personal Conocido</em>.',
	'pb-verified-since' => 'Verificado desde',
);

/** Persian (فارسی)
 * @author Armin1392
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
	'pb-verified-since' => 'تایید شده از',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'pb-about-pb-navi' => 'À propos',
	'pb-about-pb-tech' => 'Détails techniques',
	'pb-about-pb-tech-text' => '<p>Nous utilisons <a href="https://en.wikipedia.org/wiki/Python_%28programming_language%29">Python</a> et <a href="https://en.wikipedia.org/wiki/MySQL">MySQL</a> pour cette interface. Le code source est disponible sous les conditions de la licence <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) et peut être trouvé <a href="https://github.com/tool-labs/pb">sur GitHub</a>. Veuillez ajouter les rapports de bogue, les demandes d’évolution et vos autres commentaires <a href="https://github.com/tool-labs/pb/issues/new">dans le gestionnaire de problèmes GitHub</a> ou les signaler sur la <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">page de discussion de Wikipédia</a>.</p>
    <p>Les exports actuels de la base de données de PB peuvent être trouvés <a href="/pb/sql-dumps">ici</a>.</p>
    <p>Nous utilisons plusieurs icônes créées par le projet <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Ce projet représente les connaissances personnelles entre Wikimédiens.</p>
    <p>La prmeière implémentation a été faite par Ulli Purwin (interface) et Euku (robot). Début 2011, Wiegels et Ireas ont pris la suite d’Ulli pour faire l’interface. Maintenant, le projet n’est plus hébergé sur un serveur privé, mais sur Wikimédia Labs.</p>
    <p>Vous pouvez trouver plus d’information sur ce projet dans le Wikipédia allemand, sur la page <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a>.</p>',
	'pb-about-pb-title' => 'À propos du projet',
	'pb-change-language' => 'Modifier la langue',
	'pb-comment' => 'Commentaire',
	'pb-confirmations-given' => 'Confirmations fournies',
	'pb-confirmations-taken' => 'Confirmations reçues',
	'pb-current-confirmations' => 'Il y a $1 confirmation{{PLURAL:$1||s}} au total,ce qui fait environ <abbr title="$2">$3</abbr> confirmation{{PLURAL:$3||s}} par jour.',
	'pb-current-figures' => 'Chiffres actuels',
	'pb-current-users' => 'Pour le moment, $1 {{PLURAL:$1|utilisateur participe|utilisateurs participent}} au projet <em>Connaissances Personnelles</em>.',
	'pb-date' => 'Date',
	'pb-footer' => '<a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften sur le Wikipédia allemand">[[Wikipedia:Persönliche Bekanntschaften]]</a> sur Tool Labs. <a href="$1" title="À propos de Wikipedia:Persönliche Bekanntschaften">Plus d’information.</a>',
	'pb-home' => 'Page d’accueil',
	'pb-home-welcome' => 'Bienvenue sur le projet <em>Connaissances Personnelles</em> (<em>Persönliche-Bekanntschaften</em> en allemand) ! Plus d&information sur ce projet <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften" title="Wikipedia:Persönliche Bekanntschaften sur le Wikipédia allemand"> sur Wikipédia en langue allemande</a>.',
	'pb-javascript-notice' => 'Nous recommandons d’activer JavaScript sur ce site web pour améliorer l’interface utilisateur.',
	'pb-labs-name' => 'Tool Labs de Wikimédia',
	'pb-participates-since' => 'Participe depuis',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
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

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'pb-about-pb-navi' => 'אודות',
	'pb-about-pb-tech' => 'פרטים טכניים',
	'pb-about-pb-title' => 'על הפרוייקט',
	'pb-change-language' => 'שינוי שפה',
	'pb-comment' => 'תגובה',
	'pb-confirmations-given' => 'אישורים שניתנו',
	'pb-confirmations-taken' => 'אישורים שהתקבלו',
	'pb-current-confirmations' => 'יש $1 אישורים סך הכול, שזה בערך <abbr title="$2">$3</abbr> אישורים ליום.',
	'pb-current-figures' => 'מספרים נוכחיים',
	'pb-current-users' => 'כעת $1 משתמשים משתתפים במיזם <em>היכרות אישית</em>',
	'pb-date' => 'תאריך',
	'pb-home' => 'דף הבית',
	'pb-javascript-notice' => 'אנחנו ממליצים להפעיל JavaScript באתר הזה כדי לשפר את ממשק המשתמש.',
	'pb-labs-name' => 'מעבדות כלי ויקימדיה',
	'pb-participates-since' => 'משתתף מאז',
	'pb-powered-by-labs' => 'מופעל על־ידי מעבדות כלי ויקימדיה',
	'pb-recent-confirmations' => 'אישורים אחרונים',
	'pb-reconfirmed' => 'מאושר מחדש?',
	'pb-user' => 'משתמש',
	'pb-user-link-title' => 'פרטים עבור המשתמש $1',
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

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'pb-about-pb-navi' => 'Övver',
	'pb-about-pb-tech' => 'Täschnesche Einzelheite',
	'pb-about-pb-title' => 'Övver dat Projäk',
	'pb-change-language' => 'De Shprooch wääßele',
	'pb-comment' => 'Aanmärkong',
	'pb-confirmations-given' => 'Hät beschtähtesch',
	'pb-confirmations-taken' => 'Es beschtähtesch woode vun',
	'pb-current-figures' => 'Aktoälle Zahle',
	'pb-date' => 'Dattum',
	'pb-home' => 'Houpsigg',
	'pb-javascript-notice' => 'Mer ämfähle JavaSkrep aanzeschallde, öm för heh di Sigge de Bedeenong aanjenämmer ze maache.',
	'pb-labs-name' => 'Wikkimeedija <i lang="en" xml:lang="en">Tool Labs</i>',
	'pb-participates-since' => 'Määt med zigg:',
	'pb-name' => 'Project: „Päsöhnlesche Beschtähtejonge“ vun Metmaacher',
	'pb-powered-by-labs' => "Jelivverd vum 'Wikimedia Tool Labs'",
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
	'pb-users-navi' => 'Benotzer',
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

/** Dutch (Nederlands)
 * @author Romaine
 * @author Siebrand
 */
$messages['nl'] = array(
	'pb-about-pb-navi' => 'Over',
	'pb-about-pb-tech' => 'Technische details',
	'pb-about-pb-tech-text' => '<p>We gebruiken <a href="https://nl.wikipedia.org/wiki/Python_%28programmeertaal%29">Python</a> en <a href="https://nl.wikipedia.org/wiki/MySQL">MySQL</a> voor deze interface. De broncode is gepubliceerd onder de voorwaarden van de <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU Lesser General Public License 3</a> (LGPL 3) en kan geraadpleegd worden <a href="https://github.com/tool-labs/pb">op GitHub</a>. Voeg probleemmeldingen, verzoeken voor nieuwe mogelijkheden of andere opmerkingen toe <a href="https://github.com/tool-labs/pb/issues/new">aan de GitHub issue tracker</a> of meld deze op de <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">overlegpagina op Wikipedia</a>.</p>
    <p>Huidige dumps van de PB-database zijn <a href="/pb/sql-dumps">hier</a> te vinden.</p>
    <p>Wij maken gebruik van verschillende pictogrammen gemaakt door het project <a href="http://glyphicons.com/" title="Glyphicons homepage">Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Dit project toont de persoonlijke ontmoetingen van Wikimedianen.</p>
    <p>De eerste implementatie werd gedaan door Ulli Purwin (interface) en Euku (bot). In het begin van 2011 volgden Wiegels en Ireas Ulli op voor de interface. Ondertussen wordt het project niet langer gehost op een private server maar op Wikimedia Labs.</p>
    <p>Meer informatie over dit project kan gevonden worden op de Duitstalige Wikipedia op de pagina <a href="https://de.wikipedia.org/wiki/Wikipedia:Persönliche_Bekanntschaften">Wikipedia:Persönliche Bekanntschaften</a> en een verkorte versie daarvan op de Nederlandstalige Wikipedia op <a href="https://nl.wikipedia.org/wiki/Wikipedia:Ontmoete_Wikimedianen">Wikipedia:Ontmoete Wikimedianen</a>.</p>',
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
	'pb-javascript-notice' => 'Wij raden aan om JavaScript in te schakelen voor deze website om de gebruikersinterface te verbeteren.',
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
	'pb-change-language' => 'Cambiar de lenga',
	'pb-comment' => 'Comentari',
	'pb-date' => 'Data',
	'pb-home' => "Pagina d'acuèlh",
	'pb-user' => 'Utilizaire',
	'pb-user-link-title' => 'Detalhs per l’utilizaire $1',
	'pb-users-navi' => 'Utilizaires',
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

/** Swedish (svenska)
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'pb-about-pb-navi' => 'Om',
	'pb-about-pb-tech' => 'Tekniska detaljer',
	'pb-about-pb-title' => 'Om projektet',
	'pb-change-language' => 'Ändra språk',
	'pb-home' => 'Hem',
	'pb-user' => 'Användare',
	'pb-user-link-title' => 'Detaljer för användare $1',
	'pb-users-navi' => 'Användare',
	'pb-users-title' => 'Deltagarlista',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'pb-about-pb-navi' => 'Про програму',
	'pb-about-pb-tech' => 'Технічні деталі',
	'pb-about-pb-tech-text' => '<p>Ми використовуємо <a href="http://uk.wikipedia.org/wiki/Python>Python</a> і <a href="http://uk.wikipedia.org/wiki/Mysql">MySQL</a> для цього інтерфейсу. Вихідний код видається на умовах <a href="http://www.gnu.org/licenses/lgpl.html" class="ext">GNU меншої загальної громадської ліцензії 3</a> (LGPL 3) і може бути доступний <a href="https://github.com/tool-labs/pb">на GitHub</a>. Додавайте звіти про помилки, тематичні запити або інші коментарі <a href="https://github.com/tool-labs/pb/issues/new">на трекері GitHub</a> або повідомте про це нас у <a href="https://de.wikipedia.org/wiki/Wikipedia_Diskussion:Persönliche_Bekanntschaften">сторінці обговорень Вікіпедії</a>.</p>
<p>Поточний знімок PB бази даних можна знайти <a href="/pb/sql-dumps">тут</a>.</p>
<p>Ми використовуємо кілька піктограм, створених <a href="http://glyphicons.com/" title="Glyphicons homepage">проектом Glyphicons</a>.</p>',
	'pb-about-pb-text' => '<p>Цей проект представляє особисте знайомство між дописувачами Вікімедії.</p>
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
	'pb-labs-name' => 'Вікімедія Tool Labs',
	'pb-participates-since' => 'Бере участь з',
	'pb-name' => 'Wikipedia:Persönliche Bekanntschaften',
	'pb-powered-by-labs' => 'На платформі Вікімедія Tool Labs',
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

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'pb-about-pb-navi' => '关于',
	'pb-about-pb-tech' => '技术信息',
	'pb-about-pb-title' => '关于项目',
	'pb-change-language' => '更改语言',
	'pb-comment' => '评论',
	'pb-confirmations-given' => '给定确认',
	'pb-confirmations-taken' => '收到确认',
	'pb-current-confirmations' => '总共$1次确认，这是关于每天的<abbr title="$2">$3</abbr>次确认。',
	'pb-current-figures' => '目前计数',
	'pb-current-users' => '此时，$1位用户参与了<em>个人相识</em>项目。',
	'pb-date' => '日期',
	'pb-home' => '首页',
	'pb-labs-name' => '维基媒体工具实验室',
	'pb-participates-since' => '参与自从',
	'pb-powered-by-labs' => '由维基媒体工具实验室提供支持',
	'pb-recent-confirmations' => '最近确认',
	'pb-reconfirmed' => '重新确认？',
	'pb-user' => '用户',
	'pb-user-link-title' => '用户$1的详细信息',
	'pb-user-heading' => '用于<a href="$2" title="User page of $1">$1</a>的信息',
	'pb-user-title' => '用于$1的信息',
	'pb-users-navi' => '用户',
	'pb-verified-since' => '验证自从',
);
