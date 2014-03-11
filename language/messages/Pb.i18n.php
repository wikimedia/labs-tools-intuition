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

/**
 * Message documentation
 *
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
    'pb-current-confirmations' => 'Label containing some figures about confirmations (HTML allowed). $1: total confirmation count; $2: exact confirmation count per day; $3: rounded confirmation count per day',
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
    'pb-user-heading' => 'Heading of the user details page (HTML allowed). $1: user name of the current user; $2: link to the user page of the current user',
    'pb-user-title' => 'Title of the user details page. $1: user name of the current user',
    'pb-user-link-title' => 'Title for a link to user details. $1: user name of the linked user',
    'pb-users-navi' => 'Navgation item ‘Users’',
    'pb-users-title' => 'Title of the page ‘Users’',
    'pb-users-overview' => 'Introduction for the ‘Users’ page (HTML allowed). $1: total count of participating users',
    'pb-verified-since' => 'Label for the date since when the user is verified',
);

/**
 * German
 *
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

