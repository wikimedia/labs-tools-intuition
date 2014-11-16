<?php
/**
 * Interface messages for CVN Overlay.
 */

$url = 'https://github.com/countervandalism/mw-gadget-cvnoverlay';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'adder' => 'Adder',
	'adder-empty' => 'Unknown',
	'expiry' => 'Expiry',
	'globalwatched' => 'Global watched',
	'lastupdate-db' => 'Last update: $1',
	'reason' => 'Reason',
	'reason-empty' => 'No reason found',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 */
$messages['qqq'] = array(
	'adder' => 'Label for the user that added this item to the CVN database.',
	'adder-empty' => 'Placeholder text for when the adder is unknown.

See also:
* {{msg-intuition|cvnoverlay-adder}}
{{Identical|Unknown}}',
	'expiry' => 'Date when the this item expires from the CVN database.',
	'globalwatched' => 'Description of a page that is on the cross-wiki watchlist.',
	'lastupdate-db' => 'Foot note showing when the CVN database was last updated. Parameters:
* $1 - timestamp
{{Identical|Last update}}',
	'reason' => 'Label for the comment left by the user who added this item to the CVN database.
{{Identical|Reason}}',
	'reason-empty' => 'Placeholder text when no reason was found

See also:
* {{msg-intuition|cvnoverlay-reason}}',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'adder' => 'Toegevoegd door',
	'adder-empty' => 'Onbekend',
	'expiry' => 'Vervalt',
	'globalwatched' => 'Globaal gevolgd',
	'lastupdate-db' => 'Laatst bijgewerkt: $1',
	'reason' => 'Reden',
	'reason-empty' => 'Geen reden gevonden',
);
