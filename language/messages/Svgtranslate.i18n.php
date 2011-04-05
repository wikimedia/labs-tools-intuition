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
	'begin-translation' => 'Begin translation',
	'th-original' => 'Original',
	'th-translation' => 'Translation',
	'th-language' => 'Language',
	'preview' => 'Preview',
	'translate' => 'Translate',
	'translate-instructions' => 'Inputs are accepted as either file names (eg. "$1") or full URL (eg. "$2"). If the first option is used, Wikimedia Commons will be assumed as source. To translate an SVG from another site or wiki, you must use the full-url format.',
	'format-filename-example' => 'File:Planetary transit.svg', // Do not translate
	'format-fullurl-example' => 'http://upload.wikimedia.org/wikipedia/commons/8/8a/Planetary_transit.svg', // Do not translate
	'svginput-label' => 'SVG file',
	'stats-footer' => 'This tool has been used to translate approximately $1 files since $2.',
);

/** Message documentation (Message documentation)
 * @author Jarry
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.',
	'begin-translation' => 'This is the opening heading on the home page of the tool.',
	'th-original' => 'Heading of the "Original"-column.',
	'th-translation' => 'Heading of the "Translation"-column.',
	'th-language' => 'Label for the language selection dropdown box. {{Identical|Language}}',
	'preview' => '{{Identical|Preview}}',
	'translate' => '{{Identical|Translate}}',
	'translate-instructions' => 'Intro paragraph in the translation process.',
	'format-filename-example' => '{{Notranslate}}',
	'format-fullurl-example' => '{{Notranslate}}',
	'svginput-label' => 'The label for main SVG filename input.',
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
	'begin-translation' => 'Mit dem Übersetzen anfangen',
	'th-original' => 'Original',
	'th-translation' => 'Übersetzung',
	'th-language' => 'Sprache',
	'preview' => 'Vorschau',
	'translate' => 'Übersetzen',
	'translate-instructions' => 'Eingaben werden entweder in Form von Dateinamen (z. B. „$1“) oder vollständiger URLs (z. B. „$2“) akzeptiert. Sofern die erste Variante genutzt wird, wird Wikimedia Commons als Dateirepositorium angenommen. Um eine SVG-Datei auf einer anderen Website oder einem anderen Wiki zu übersetzen, muss hingegen die vollständige URL angegeben werden.',
	'svginput-label' => 'SVG-Datei',
	'stats-footer' => 'Dieses Hilfsprogramm wurde bislang zur Übersetzung von ungefähr $1 Dateien seit $2 genutzt.',
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
	'begin-translation' => 'Comenciar traduction',
	'th-original' => 'Original',
	'th-translation' => 'Traduction',
	'th-language' => 'Lingua',
	'preview' => 'Previsualisation',
	'translate' => 'Traducer',
	'translate-instructions' => 'Es possibile entrar un nomine de file (p.ex. "$1") o un URL complete (p.ex. "$2"). Si le prime option es usate, Wikimedia Commons es assumite como fonte. Pro traducer un file SVG de un altere sito o wiki, tu debe usar le URL complete.',
	'svginput-label' => 'File SVG',
	'stats-footer' => 'Iste instrumento ha essite usate pro traducer circa $1 files depost $2.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'error-nothing' => "Näischt fir z'iwwersetzen.",
	'th-translation' => 'Iwwersetzung',
	'th-language' => 'Sprooch',
	'translate' => 'Iwwersetzen',
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
	'begin-translation' => 'Vertalen',
	'th-original' => 'Origineel',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'preview' => 'Voorvertoning',
	'translate' => 'Vertalen',
	'translate-instructions' => 'U kunt bestandsnamen (bijvoorbeeld "$1") of volledige URL\'s (bijvoorbeeld "$2") invoeren. In het eerste geval wordt Wikimedia Commons als bron gebruikt. Gebruik het tweede formaat om een SVG-bestand van een andere site te vertalen.',
	'svginput-label' => 'SVG-bestand',
	'stats-footer' => 'Via dit programma zijn sinds $2 ongeveer $1 bestanden vertaald.',
);

