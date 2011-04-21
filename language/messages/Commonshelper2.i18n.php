<?php
/**
 * Interface messages for tool "CommonsHelper2".
 *
 * @toolowner jan
 */

$url = '~commonshelper2/';

$messages = array();

/**
 * English
 *
 * @author Jan Luca
 */
$messages['en'] = array(
	'attention' => 'Attention',
	'commonshelper2' => 'CommonsHelper 2', // Optional
	'description' => 'A tool to transfer files from Wikimedia projects to Wikimedia Commons',
	'change_meta' => 'Change the $1category and template settings$2 for $3',
	'jira_link' => 'Report a bug or suggest a feature',

	// Main form
	'language' => 'Language',
	'project' => 'Project',
	'source_file' => 'Source file',
	'target_file' => 'Target file',
	'commons_username' => 'Wikimedia Commons username',
	'commons_to_project' => 'Wikimedia Commons to project',
	'move_file_from_com' => 'Move file from Wikimedia Commons to project',
	'categories' => 'Categories',
	'remove_cats' => 'Remove existing categories',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Use $1CommonSense$2 to suggest new categories',
	'tusc' => 'TUSC', // Ignore
	'use_tusc' => 'Use $1TUSC$2 to transfer the file directly',
	'tusc_user' => 'TUSC username',
	'tusc_pass' => 'TUSC password',
	'do_it' => 'Do it',

	// Error
	'error_transfer_usr' => 'You have not set a Wikimedia Commons username',
	'error_not_exists' => 'Source file does not exist!',
	'error_file_exists' => 'File already exists on $3 as "$1$4$2"!',
	'error_diff_exists' => 'Different target file exists on the target wiki under the same name!',
	'error_no_meta' => 'No metadata found for the source wiki! $1Link$2',	
	'error_meta_no_good' => 'Metadata: No good templates found! $1Link$2',	
	'error_meta_bad' => 'Metadata: Bad template found! $1Link$2',	

	// Output
	'original_wikitext' => 'Original wiki text',
	'new_wikitext' => 'New wiki text',
	'new_filename' => 'New filename:',
	'output_information' => 'For manual upload, edit the above text (if necessary), save $1the file$2 on your computer, then', 
	'upload_it' => 'upload it',

	// Misc
	'target_wiki' => 'the target wiki',

	// Standard values in Latin chars (for Maindesk and Metadata-Links)
	'standard_language' => 'en', 
	'standard_project' => 'wikipedia', // Optional

	//Upload
	'error_bot_blocked' => 'Upload bot is blocked on Wikimedia Commons.',
	'error_upload_meta' => 'Cannot upload directly because there are problem with the meta data (see above)!',
	'error_tusc_failed' => 'TUSC verification failed!',
	'error_only_commons' => 'Direct upload works only at Wikimedia Commons!',
	'upload_control_text'=> 'Please check the new wiki text and click "Upload!" if all is OK!',
	'error_commons_user' => 'To identify the transfer user, your Wikimedia Commons username has to be in the description!',
	'error_upload_users' => 'The upload function is only available to some users during the test period!',
	'error_upload_file' => 'The orginal file cannot be downloaded.'
);

/**
 * Documentation (qqq)
 *
 * @author Krinkle
 * @author Jan Luca
 */
$messages['qqq'] = array(
	'commonshelper2' => '{{Optional}}',
	'change_meta' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

$3 is target wiki name.',
	'use_checkusage' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'tusc' => '{{Ignore}}',
	'use_tusc' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'error_file_exists' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

$3 is target wiki name.

$4 is the name of the file',
	'error_no_meta' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'error_meta_no_good' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'error_meta_bad' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'output_information' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'standard_language' => 'The language code (e.g. "en") of the language. Used for standard values in maindesk and metadata-links.',
	'standard_project' => '{{Optional}} The biggest project (e.g. "wikipedia") in this language. Used for standard values in maindesk and metadata-links.',
);

/** German (Deutsch)
 * @author Jan Luca
 */
$messages['de'] = array(
	// Title
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'Ein Tool, um Dateien von Wikimedia Projekten nach Wikimedia Commons zu transportieren',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	// Title
	'attention' => 'לתשומת לבך',
	'description' => 'כלי להעברת קבצים ממיזמים של קרן ויקימדיה לוויקישיתוף',
	'change_meta' => 'לשנות את $1הגדרות הקטגוריות והתבניות$2 עבור $3', // $1 and $2 are for the link tag (<a href=...> and </a>), $3 for target wiki name
	'jira_link' => 'דיווח באג או הצעת שיפור',

	// Main form
	'language' => 'שפת המיזם',
	'project' => 'שם המיזם',
	'source_file' => 'קובץ מקור',
	'target_file' => 'קובץ יעד',
	'commons_username' => 'שם משתמש בוויקישיתוף',
	'commons_to_project' => 'מוויקישיתוף למיזם',
	'move_file_from_com' => 'העברת קובץ מוויקישיתוף למיזם מקומי',
	'categories' => 'קטגוריות',
	'remove_cats' => 'מחיקת קטגוריות קיימות',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'להשתמש ב־$1CheckUsage$2 כדי לאתר קטגוריות', // $1 and $2 are for the link tag (<a href=...> and </a>)
	'use_tusc' => 'להשתמש ב־$1TUSC$2 כדי להעביר את הקובץ ישירות', // $1 and $2 are for the link tag (<a href=...> and </a>)
	'tusc_user' => 'שם משתמש ב־TUSC',
	'tusc_pass' => 'סיסמה ב־TUSC',
	'do_it' => 'העברה',

	// Error
	'error_transfer_usr' => 'לא יצרת שם משתמש בוויקישיתוף',
	'error_not_exists' => 'קובץ המקור לא קיים!',
	'error_file_exists' => 'הקובץ כבר קיים ב־$3 בשם "$1$4$2"!', // $1 and $2 are for the link tag (<a href=...> and </a>), $3 'Commons' or message 'target_wiki', $4 is the name of the file
	'error_diff_exists' => 'קובץ שונה קיים באתר היעד באותו שם!',
	'error_no_meta' => 'לא נמצאו מטא־נתונים בוויקי המקור! $1Link$2',	// $1 and $2 are for the link tag (<a href=...> and </a>)
	'error_meta_no_good' => 'מטא־נתונים: לא נמצאו תבניות קבילות! $1Link$2',	// $1 and $2 are for the link tag (<a href=...> and </a>)
	'error_meta_bad' => 'מטא־נתונים: נמצאו תבניות לא קבילות! $1Link$2',	// $1 and $2 are for the link tag (<a href=...> and </a>)

	// Output
	'original_wikitext' => 'תיאור מקורי',
	'new_wikitext' => 'תיאור חדש',
	'new_filename' => 'שם קובץ חדש:',
	'output_information' => 'לשם העלאה ידנית יש לערוך את הטקסט למעלה (אם זה נחוץ), לשמור את $1הקובץ$2 במחשב שלך ואז', // $1 and $2 are for the link tag (<a href=...> and </a>)
	'upload_it' => 'להעלות אותו',

	// Misc
	'target_wiki' => 'ויקי היעד',

	// Standard values in Latin chars (for Maindesk and Metadata-Links)
	'standard_language' => 'he',
	'standard_project' => 'wikipedia',
);
