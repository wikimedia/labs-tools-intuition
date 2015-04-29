<?php
/*
	Interface messages for Chameleon's tool "Template linking and transclusion check".
	https://tools.wmflabs.org/templatetransclusioncheck/
*/

$messages = array();

/** English
* @author Chameleon
*/
$messages['en'] = array(
	'title' => 'Template linking and transclusion check',
	'description' => 'Checks and reports which articles that transcludes a template that are not linked from the template, and which articles that are linked from a template but do not transclude it.',
	'form-label-language' => 'Language:',
	'form-label-template' => 'Template name:',
	'form-label-template2' => '(including namespace)',
	'form-label-complete' => 'Generate complete report:',
	'feedback-template-missing' => 'Template $1 does not exist.',
	'feedback-result' => 'Results for $1',
	'feedback-header-mismatch' => 'Mismatch between transclusions and links',
	'feedback-header-no-link' => 'Transclusion but no link',
	'feedback-header-no-transclusion' => 'Link but no transclusion',
	'feedback-header-redirects' => 'Links to redirects',
	'feedback-total-count' => 'Total: $1',
	'feedback-header-complete' => 'Complete transclusion and link overview',
	'feedback-header-transclusions' => 'Transclusions of the template',
	'feedback-header-links' => 'Links from the template',
	'link-edit' => 'edit',
	'link-create' => 'create',
	'link-complete' => 'Complete report...',
	'footer-stats' => 'Generated: $1. Duration: $2 {{PLURAL:$2|second|seconds}}.',
	'error-exception' => 'Caught an exception:', // Optional
	'error-language' => 'Unknown language.', // Optional
	'error-api' => 'Could not get the API client.', // Optional
);

/** Message documentation
* @author Chameleon
*/
$messages['qqq'] = array(
	'title' => 'Title for the tool.',
	'description' => 'Description of the tool.',
	'form-label-language' => 'Form label for an input field requesting a wiki language id.',
	'form-label-template' => 'Form label for an input field for a template name.',
	'form-label-template2' => 'Additional information for the input field for the template name. The template name must include the namespace.',
	'form-label-complete' => 'Label for an checkbox. If checked then a complete/full report will be generated.',
	'feedback-template-missing' => 'A non-existing template name has been entered. $1 is the template name.',
	'feedback-result' => '$1 is the template name.',
	'feedback-header-mismatch' => 'Main header for the mismatch section.',
	'feedback-header-no-link' => 'Header for the list of pages that transcludes the template, but which are not linked from the template.',
	'feedback-header-no-transclusion' => 'Header for the list of pages that are linked from the template, but do not transclude it.',
	'feedback-header-redirects' => 'Header for the list of links from the template which are redirects.',
	'feedback-total-count' => 'Displays the total number of links/transclusions in a list. $1 is the total count.',
	'feedback-header-complete' => 'Main heaer for the complete/full report section.',
	'feedback-header-transclusions' => 'Header for the list of pages that transcludes the template.',
	'feedback-header-links' => 'Header for the list of pages that are linked from the template.',
	'link-edit' => 'Name for a link for editing a wiki page.',
	'link-create' => 'Name for a link for creating a wiki page.',
	'link-complete' => 'Name for a link to the complete/full report.',
	'footer-stats' => 'A statistics line at the bottom of the report. $1 is the current date/time and $2 is the number of seconds for the request.',
	'error-exception' => 'An error message for an unhandled exception. It is followed by the exception description.
{{Optional}}',
	'error-language' => 'An error message displayed if the user has entered an unknown/invalid code for the language.
{{Optional}}',
	'error-api' => 'An error message displayed if the tool could not connect to the Wikipedia API.
{{Optional}}',
);

/** Norwegian Bokmål (norsk bokmål)
* @author Chameleon
*/
$messages['nb'] = array(
	'title' => 'Template linking and transclusion check',
	'description' => 'Kontrollerer og rapporterer hvilke artikler som transkluderer en mal, men som ikke er lenket fra malen; og hvilke artikler som er lenket fra malen, men som ikke transkluderer den.',
	'form-label-language' => 'Språk:',
	'form-label-template' => 'Malnavn:',
	'form-label-template2' => '(inkludert navnerom)',
	'form-label-complete' => 'Generer komplett rapport:',
	'feedback-template-missing' => 'Malen $1 eksisterer ikke.',
	'feedback-result' => 'Resultater for $1',
	'feedback-header-mismatch' => 'Uoverenskommelser mellom transkluderinger og lenker',
	'feedback-header-no-link' => 'Transkludering, men ingen lenke',
	'feedback-header-no-transclusion' => 'Lenke, men ingen transklusjon',
	'feedback-header-redirects' => 'Lenker til omdirigeringer',
	'feedback-total-count' => 'Totalt: $1',
	'feedback-header-complete' => 'Komplett oversikt over transkluderinger og lenker',
	'feedback-header-transclusions' => 'Transkluderinger av malen',
	'feedback-header-links' => 'Lenker fra malen',
	'link-edit' => 'rediger',
	'link-create' => 'opprett',
	'link-complete' => 'Komplett rapport...',
	'footer-stats' => 'Generert: $1. Varighet: $2 {{PLURAL:$2|sekund|sekunder}}.',
	'error-exception' => 'Fanget et unntak:',
	'error-language' => 'Ukjent språk.',
	'error-api' => 'Kunne ikke få API-klienten.',
);

/** Norwegian (norsk)
* @author Chameleon
*/
$messages['no'] = array(
	'title' => 'Template linking and transclusion check',
	'description' => 'Kontrollerer og rapporterer hvilke artikler som transkluderer en mal, men som ikke er lenket fra malen; og hvilke artikler som er lenket fra malen, men som ikke transkluderer den.',
	'form-label-language' => 'Språk:',
	'form-label-template' => 'Malnavn:',
	'form-label-template2' => '(inkludert navnerom)',
	'form-label-complete' => 'Generer komplett rapport:',
	'feedback-template-missing' => 'Malen $1 eksisterer ikke.',
	'feedback-result' => 'Resultater for $1',
	'feedback-header-mismatch' => 'Uoverenskommelser mellom transkluderinger og lenker',
	'feedback-header-no-link' => 'Transkludering, men ingen lenke',
	'feedback-header-no-transclusion' => 'Lenke, men ingen transklusjon',
	'feedback-header-redirects' => 'Lenker til omdirigeringer',
	'feedback-total-count' => 'Totalt: $1',
	'feedback-header-complete' => 'Komplett oversikt over transkluderinger og lenker',
	'feedback-header-transclusions' => 'Transkluderinger av malen',
	'feedback-header-links' => 'Lenker fra malen',
	'link-edit' => 'rediger',
	'link-create' => 'opprett',
	'link-complete' => 'Komplett rapport...',
	'footer-stats' => 'Generert: $1. Varighet: $2 {{PLURAL:$2|sekund|sekunder}}.',
	'error-exception' => 'Fanget et unntak:',
	'error-language' => 'Ukjent språk.',
	'error-api' => 'Kunne ikke få API-klienten.',
);
