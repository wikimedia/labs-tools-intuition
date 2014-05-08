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
 */
$messages['qqq'] = array(
	'title' => 'The tool\'s title (name), used the main heading. grep is a technical term and cannot be translated',
	'introduction' => 'The introductory paragraph explaining the tool\'s use. $1 is a link to a Wikipedia article about regular expressions, with translatable link text and link target',
	'explanation' => 'explanation',
	'regex' => 'Used as part of a link target. Should be set to the name of a Wikipedia article describing regular expressions',
	'enter-details' => 'Subheading introducing a series of input boxes',
	'results' => 'Subheading',
	'language-label' => 'Interface input label. Refers to a language code, rather than a language name.',
	'namespace-label' => 'Interface input label. Refers to a Wikipedia namespace',
	'project-label' => 'Interface input label. Refers to a Wikipedia project',
	'pattern-label' => 'Interface input label. Technical term used in relation to regular expressions.',
	'redirects-label' => 'Interface input label',
	'limit-label' => 'Interface input label',
	'error-zeroresults' => 'Error message',
	'match-count' => 'Appears above a list of results. $1 is a whole number (integer) greater than or equal to 1'
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
 */
$messages['diq'] = array(
	'namespace-label' => 'Caynami',
);

/** Spanish (español)
 * @author Kingpowl
 * @author VegaDark
 */
$messages['es'] = array(
	'introduction' => 'Esta herramienta muestra todos los títulos de los artículos que coinciden con un patrón de expresión regular ($1). Buscar usando una expresión regular es consume recursos. Si es posible, recuerda usar los indicadores prefijo (^) y sufijo ($).',
	'explanation' => 'explicación',
	'regex' => 'Expresión regular',
	'enter-details' => 'Introduce los datos',
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

/** Indonesian (Bahasa Indonesia)
 * @author C5st4wr6ch
 */
$messages['id'] = array(
	'regex' => 'Ekspresi reguler',
	'project-label' => 'Proyek',
	'limit-label' => 'Batasi tampilan menjadi 100 hasil pertama',
);

/** Kannada (ಕನ್ನಡ)
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

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'explanation' => 'förklaring',
	'regex' => 'Reguljärt uttryck',
	'results' => 'Resultat',
	'language-label' => 'Språk',
	'namespace-label' => 'Namnrymd',
	'project-label' => 'Projekt',
	'pattern-label' => 'Mönster',
	'redirects-label' => 'Inkludera omdirigeringar',
	'match-count' => '{{PLURAL:$1|$1 sida|$1 sidor}} överensstämmer ditt reguljära uttryck.',
);
