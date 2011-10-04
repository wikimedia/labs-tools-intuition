<?php
/**
 * Interface messages for the ToolserverStatus class.
 *
 * @toolowner platonides
 */

/* This is a library, there is no public url */
$url = null;

$messages = array();

/**
 * English
 *
 * @author Platonides
 */
$messages['en'] = array(
	'toolserver-status-ok' => 'There are no problems in database cluster $1 $2',
	'toolserver-status-info' => 'Notice for users of cluster $1: $2',
	'toolserver-status-warn' => 'Warning for users of cluster $1: $2',
	'toolserver-status-down' => 'The database cluster $1 has been temporarily shutdown. $2',
	'toolserver-status-erro' => 'The database cluster $1 is down. $2',
	'toolserver-status-unknown' => 'Unknown status of cluster $1',
	'toolserver-status-missing' => 'Cluster $1 does not exist',

	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warn',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Unknown',
	'toolserver-status-short-missing' => '$1: Missing',
);

/** Message documentation (Message documentation)
 * @author Platonides
 */
$messages['qqq'] = array(
	'toolserver-status-ok' => "Message formatting for when the cluster status is 'ok'. Params: cluster ($1) and informative text ($2), which should be empty",
	'toolserver-status-info' => "Message formatting for when the cluster status is 'info'. Params: cluster ($1) and informative text ($2)",
	'toolserver-status-warn' => "Message formatting for when the cluster status is 'warn'. Params: cluster ($1) and informative text ($2)",
	'toolserver-status-down' => "Message formatting for when the cluster status is 'down' (eg. a planned maintenance). Params: cluster ($1) and informative text ($2)",
	'toolserver-status-erro' => "Message formatting for when the cluster status is 'erro' (eg. a unplanned maintenance). Params: cluster ($1) and informative text ($2)",
	'toolserver-status-unknown' => "Message formatting for when the status file doesn't deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster ($1) and empty informative text ($2)",
	'toolserver-status-missing' => "Message formatting for when the cluster name doesn't exist (invalid name passed by the calling program)",
	'toolserver-status-short-ok' => "A short status text for when the status is 'ok'. Params: cluster name ($1)",
	'toolserver-status-short-info' => "A short status text for when the status is 'info'. Params: cluster name ($1)",
	'toolserver-status-short-warn' => "A short status text for when the status is 'warn'. Params: cluster name ($1)",
	'toolserver-status-short-down' => "A short status text for when the status is 'down'. Params: cluster name ($1)",
	'toolserver-status-short-erro' => "A short status text for when the status is 'erro'. Params: cluster name ($1)",
	'toolserver-status-short-unknown' => "A short status text for when the status file doesn't deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster name ($1)",
	'toolserver-status-short-missing' => "A short status text for when the cluster name doesn't exist (invalid name passed by the calling program)",
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'toolserver-status-ok' => 'Es gibt keine Probleme im Datenbankcluster $1 $2',
	'toolserver-status-info' => 'Information für die Benutzer des Datenbankclusters $1: $2',
	'toolserver-status-warn' => 'Warnung für die Benutzer des Datenbankclusters $1: $2',
	'toolserver-status-down' => 'Die Datenbankcluster $1 wurde vorübergehend herunterfahren. $2',
	'toolserver-status-erro' => 'Der Datenbankcluster $1 ist ausgefallen. $2',
	'toolserver-status-unknown' => 'Der Status des Datenbankclusters $1 ist unbekannt.',
	'toolserver-status-missing' => 'Der Datenbankcluster $1 ist nicht vorhanden.',
	'toolserver-status-short-ok' => '$1: In Ordnung',
	'toolserver-status-short-info' => '$1: Information',
	'toolserver-status-short-warn' => '$1: Warnung',
	'toolserver-status-short-down' => '$1: Heruntergefahren',
	'toolserver-status-short-erro' => '$1: Ausgefallen',
	'toolserver-status-short-unknown' => '$1: Unbekannt',
	'toolserver-status-short-missing' => '$1: Nicht vorhanden',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'toolserver-status-ok' => 'Er zijn geen problemen in de databasecluster $1 $2',
	'toolserver-status-info' => 'Kennisgeving voor gebruikers van cluster $1: $2',
	'toolserver-status-warn' => 'Waarschuwing voor gebruikers van cluster $1: $2',
	'toolserver-status-unknown' => 'Onbekend status van cluster $1',
	'toolserver-status-missing' => 'Cluster $1 bestaat niet',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Waarschuwing',
	'toolserver-status-short-erro' => '$1: Foutmelding',
	'toolserver-status-short-unknown' => '$1: Onbekend',
	'toolserver-status-short-missing' => '$1: Ontbrekend',
);

/** Polish (Polski)
 * @author Grzechooo
 */
$messages['pl'] = array(
	'toolserver-status-ok' => 'Nie ma żadnych problemów w klastrze bazy danych $1 $2',
	'toolserver-status-info' => 'Wiadomość dla użytkowników klastra $1: $2',
	'toolserver-status-warn' => 'Ostrzeżenie dla użytkowników klastra $1: $2',
	'toolserver-status-down' => 'Klaster bazy danych $1 został tymczasowo wyłączony. $2',
	'toolserver-status-erro' => 'Klaster bazy danych $1 nie działa. $2',
	'toolserver-status-unknown' => 'Nieznany status klastra $1',
	'toolserver-status-missing' => 'Klaster $1 nie istnieje',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Informacje',
	'toolserver-status-short-warn' => '$1: Ostrzeżenie',
	'toolserver-status-short-down' => '$1: Nie działa',
	'toolserver-status-short-erro' => '$1: Błąd',
	'toolserver-status-short-unknown' => '$1: Nieznany',
	'toolserver-status-short-missing' => '$1: Brak',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'toolserver-status-ok' => 'Нема проблема у кластеру базе података $1 $2',
	'toolserver-status-info' => 'Напомена за кориснике кластера $1: $2',
	'toolserver-status-warn' => 'Упозорење за кориснике кластера $1: $2',
	'toolserver-status-down' => 'Кластер базе података $1 је привремено искључен. $2',
	'toolserver-status-erro' => 'Кластер базе података $1 је изненадно пао. $2',
	'toolserver-status-unknown' => 'Непознато стање кластера $1',
	'toolserver-status-missing' => 'Кластер $1 не постоји',
	'toolserver-status-short-ok' => '$1: У реду',
	'toolserver-status-short-info' => '$1: Подаци',
	'toolserver-status-short-warn' => '$1: Напомена',
	'toolserver-status-short-down' => '$1: Пад',
	'toolserver-status-short-erro' => '$1: Грешка',
	'toolserver-status-short-unknown' => '$1: Непознато',
	'toolserver-status-short-missing' => '$1: Недостаје',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'toolserver-status-ok' => 'Nema problema u klasteru baze podataka $1 $2',
	'toolserver-status-info' => 'Napomena za korisnike klastera $1: $2',
	'toolserver-status-warn' => 'Upozorenje za korisnike klastera $1: $2',
	'toolserver-status-down' => 'Klaster baze podataka $1 je privremeno isključen. $2',
	'toolserver-status-erro' => 'Klaster baze podataka $1 je iznenadno pao. $2',
	'toolserver-status-unknown' => 'Nepoznato stanje klastera $1',
	'toolserver-status-missing' => 'Klaster $1 ne postoji',
	'toolserver-status-short-ok' => '$1: U redu',
	'toolserver-status-short-info' => '$1: Podaci',
	'toolserver-status-short-warn' => '$1: Napomena',
	'toolserver-status-short-down' => '$1: Pad',
	'toolserver-status-short-erro' => '$1: Greška',
	'toolserver-status-short-unknown' => '$1: Nepoznato',
	'toolserver-status-short-missing' => '$1: Nedostaje',
);

