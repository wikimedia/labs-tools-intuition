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

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'toolserver-status-ok' => 'Nun hai problema dalu nel piñu de la base de datos $1 $2',
	'toolserver-status-info' => 'Nota pa los usuarios del piñu $1: $2',
	'toolserver-status-warn' => 'Avisu pa los usuarios del piñu $1: $2',
	'toolserver-status-down' => 'El piñu de la base de datos $1 ta apagáu temporalmente.  $2',
	'toolserver-status-erro' => 'El piñu de la base de datos $1 ta caíu. $2',
	'toolserver-status-unknown' => 'Estáu desconocíu del piñu $1',
	'toolserver-status-missing' => 'El piñu "$1" nun esiste',
	'toolserver-status-short-ok' => '$1: Correutu',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Avisu',
	'toolserver-status-short-down' => '$1: Apagáu',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconocíu',
	'toolserver-status-short-missing' => '$1: Inesistente',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'toolserver-status-ok' => 'Няма ніякіх праблемаў у клястэры базы зьвестак $1 $2',
	'toolserver-status-info' => 'Паведамленьне для карыстальнікаў клястэра $1: $2',
	'toolserver-status-warn' => 'Папярэджаньне для карыстальнікаў клястэра $1: $2',
	'toolserver-status-down' => 'Клястэр базы зьвестак $1 быў часовы адключаны. $2',
	'toolserver-status-erro' => 'Клястэр базы зьвестак $1 ня дзейнічае. $2',
	'toolserver-status-unknown' => 'Невядомы статус клястэру $1',
	'toolserver-status-missing' => 'Клястэр $1 не існуе',
	'toolserver-status-short-ok' => '$1: Добра',
	'toolserver-status-short-info' => '$1: Інфармацыя',
	'toolserver-status-short-warn' => '$1: Папярэджаньне',
	'toolserver-status-short-down' => '$1: Ня дзейнічае',
	'toolserver-status-short-erro' => '$1: Памылка',
	'toolserver-status-short-unknown' => '$1: Невядомая',
	'toolserver-status-short-missing' => '$1: Адсутнічае',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'toolserver-status-ok' => "N'eus kudenn ebet gant kluster an diaz roadennoù $1 $2",
	'toolserver-status-info' => "Notenn evit implijerien ar c'hluster $1: $2",
	'toolserver-status-warn' => "Kemenn diwall evit implijerien ar c'hluster $1: $2",
	'toolserver-status-down' => 'Evit ar poent eo serret kluster $1 an diaz roadennoù. $2',
	'toolserver-status-erro' => "Sac'het eo kluster $1 an diaz roadennoù. $2",
	'toolserver-status-unknown' => "Dianav eo statud ar c'hluster $1",
	'toolserver-status-missing' => "N'eus ket eus ar c'hluster $1.",
	'toolserver-status-short-ok' => '$1 : Mat eo',
	'toolserver-status-short-info' => '$1 : Keleier',
	'toolserver-status-short-warn' => '$1 : Diwall',
	'toolserver-status-short-down' => "$1 : Sac'het",
	'toolserver-status-short-erro' => '$1 : Fazi',
	'toolserver-status-short-unknown' => '$1 : Dianav',
	'toolserver-status-short-missing' => '$1: Ezvezant',
);

/** Catalan (Català)
 * @author SMP
 */
$messages['ca'] = array(
	'toolserver-status-ok' => 'No hi ha cap problema amb el clúster de base de dades $1 $2',
	'toolserver-status-info' => 'Nota pels usuaris del clúster $1: $2',
	'toolserver-status-warn' => 'Advertiment pels usuari del clúster $1: $2',
	'toolserver-status-down' => 'El clúster de base de dades $1 està tancat temporalment. $2',
	'toolserver-status-erro' => 'El clúster de base de dades $1 ha caigut. $2',
	'toolserver-status-unknown' => 'Estat desconegut del clúster $1',
	'toolserver-status-missing' => 'El clúster $1 no existeix',
	'toolserver-status-short-ok' => '$1: Correcte',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avís',
	'toolserver-status-short-down' => '$1: Desconnectat',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconegut',
	'toolserver-status-short-missing' => '$1: Inexistent',
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

/** Spanish (Español)
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'toolserver-status-ok' => 'No hay problemas en el grupo da base de datos $1 $2',
	'toolserver-status-info' => 'Aviso para los(as) usuarios(as) del grupo $1: $2',
	'toolserver-status-warn' => 'Advertencia para los(as) usuarios(as) del grupo $1: $2',
	'toolserver-status-down' => 'El grupo $1 de la base de datos está cerrado temporalmente. $2',
	'toolserver-status-erro' => 'El grupo  $1 de la base de datos es está caído. $2',
	'toolserver-status-unknown' => 'Se desconoce el estado del grupo $1',
	'toolserver-status-missing' => 'El grupo "$1" no existe',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Advertencia',
	'toolserver-status-short-down' => '$1: Cerrado',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconocido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'toolserver-status-short-ok' => '$1: Ados',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Oharra',
	'toolserver-status-short-erro' => '$1: Errorea',
	'toolserver-status-short-unknown' => '$1: Ezezaguna',
	'toolserver-status-short-missing' => '$1: Faltan',
);

/** French (Français)
 * @author Jean-Frédéric
 * @author Od1n
 */
$messages['fr'] = array(
	'toolserver-status-ok' => 'Il n’y a pas de problèmes dans le cluster de base de données $1 $2',
	'toolserver-status-info' => 'Avis aux utilisateurs du cluster  $1 : $2',
	'toolserver-status-warn' => 'Avertissement pour les utilisateurs du cluster  $1 : $2',
	'toolserver-status-down' => 'Le cluster de base de données $1  a été temporairement arrêté. $2',
	'toolserver-status-erro' => 'Le cluster de base de données $1 est en panne. $2',
	'toolserver-status-unknown' => 'Statut du cluster $1 inconnu',
	'toolserver-status-missing' => 'Le cluster $1 n’existe pas',
	'toolserver-status-short-ok' => '$1 : Ok',
	'toolserver-status-short-info' => '$1 : Info',
	'toolserver-status-short-warn' => '$1 : Avertissement',
	'toolserver-status-short-down' => '$1 : En panne',
	'toolserver-status-short-erro' => '$1 : Erreur',
	'toolserver-status-short-unknown' => '$1 : Inconnu',
	'toolserver-status-short-missing' => '$1 : Absent',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'toolserver-status-ok' => 'Non hai ningún problema no clúster da base de datos $1 $2',
	'toolserver-status-info' => 'Nota aos usuarios do clúster $1: $2',
	'toolserver-status-warn' => 'Aviso aos usuarios do clúster $1: $2',
	'toolserver-status-down' => 'O clúster $1 da base de datos está pechado temporalmente. $2',
	'toolserver-status-erro' => 'O clúster $1 da base de datos está caído. $2',
	'toolserver-status-unknown' => 'Descoñécese o estado do clúster $1',
	'toolserver-status-missing' => 'O clúster "$1" non existe',
	'toolserver-status-short-ok' => '$1: Ben',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Aviso',
	'toolserver-status-short-down' => '$1: Pechado',
	'toolserver-status-short-erro' => '$1: Erro',
	'toolserver-status-short-unknown' => '$1: Descoñecido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'toolserver-status-ok' => 'אין בעיות בצביר מסד הנתונים $1 $2',
	'toolserver-status-info' => 'הודעה למשתמשי הצביר $1: <span dir="auto">$2</span>',
	'toolserver-status-warn' => 'אזהרה למשתמשי הצביר $1: <span dir="auto">$2</span>',
	'toolserver-status-down' => 'צביר מסד הנתונים $1 הורד זמנית. <span dir="auto">$2</span>',
	'toolserver-status-erro' => 'צביר מסד הנתונים $1 למטה. <span dir="auto">$2</span>',
	'toolserver-status-unknown' => 'מצב הצביר $1 אינו ידוע',
	'toolserver-status-missing' => 'צביר $1 אינו קיים',
	'toolserver-status-short-ok' => '$1: בסדר',
	'toolserver-status-short-info' => '$1: מידע',
	'toolserver-status-short-warn' => '$1: אזהרה',
	'toolserver-status-short-down' => '$1: למטה',
	'toolserver-status-short-erro' => '$1: שגיאה',
	'toolserver-status-short-unknown' => '$1: לא ידוע',
	'toolserver-status-short-missing' => '$1: חסר',
);

/** Hungarian (Magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'toolserver-status-ok' => 'Minden rendben a $1 clusteren $2',
	'toolserver-status-info' => 'Üzenet $1 cluster felhasználóinak: $2',
	'toolserver-status-warn' => 'Figyelmeztetés $1 cluster felhasználóinak: $2',
	'toolserver-status-down' => '$1 cluster ideiglenesen leállítva: $2',
	'toolserver-status-erro' => '$1 cluster leállítva: $2',
	'toolserver-status-unknown' => '$1 cluster állapota ismeretlen',
	'toolserver-status-missing' => '$1 cluster nem létezik',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Figyelmeztetés',
	'toolserver-status-short-down' => '$1: Leállítva',
	'toolserver-status-short-erro' => '$1: Hiba',
	'toolserver-status-short-unknown' => '$1: Ismeretlen',
	'toolserver-status-short-missing' => '$1: Hiányzik',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'toolserver-status-ok' => 'Il non ha problemas in le gruppo de base de datos $1 $2',
	'toolserver-status-info' => 'Nota pro usatores del gruppo $1: $2',
	'toolserver-status-warn' => 'Advertimento pro usatores del gruppo $1: $2',
	'toolserver-status-down' => 'Le gruppo de base de datos $1 ha essite temporarimente disactivate. $2',
	'toolserver-status-erro' => 'Le gruppo de base de datos $1 es inactive. $2',
	'toolserver-status-unknown' => 'Stato incognite del gruppo $1',
	'toolserver-status-missing' => 'Le gruppo $1 non existe',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Aviso',
	'toolserver-status-short-down' => '$1: Inactive',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Incognite',
	'toolserver-status-short-missing' => '$1: Mancante',
);

/** Italian (Italiano)
 * @author ZioNicco
 */
$messages['it'] = array(
	'toolserver-status-ok' => 'Non ci sono problemi nel cluster di database $1 $2',
	'toolserver-status-missing' => 'Cluster $1 non esistente',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'toolserver-status-short-ok' => '$1: យល់ព្រម',
	'toolserver-status-short-info' => '$1: ព័ត៌មាន',
	'toolserver-status-short-warn' => '$1: ព្រមាន',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: កំហុស',
	'toolserver-status-short-unknown' => '$1: មិនស្គាល់',
	'toolserver-status-short-missing' => '$1: រកមិនមាន',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'toolserver-status-ok' => 'Mer han kein Probleeme em Daatebank-Knubbel $1 $2',
	'toolserver-status-info' => 'Henwieß för der Jebruch vom Daatebank-Knubbel $1: $2',
	'toolserver-status-warn' => 'Warnong för der Zohjreff op dä Daatebank-Knubbel $1: $2',
	'toolserver-status-down' => 'Dä Daatebank-Knubbel $1 wood för en Zigg eronger jefahre. $2',
	'toolserver-status-erro' => 'Dä Daatebank-Knubbel $1 es eronger jefahre, $2',
	'toolserver-status-unknown' => 'Mer han kein Aanjaabe övver dä Daatebank-Knubbel $1',
	'toolserver-status-missing' => 'Ene Daatebank-Knubbel $1 jidd_et nit.',
	'toolserver-status-short-ok' => '$1: Alles joot.',
	'toolserver-status-short-info' => '$1: Henwieß.',
	'toolserver-status-short-warn' => '$1: Oppaße!',
	'toolserver-status-short-down' => '$1: Läuf nit.',
	'toolserver-status-short-erro' => '$1: Fähler.',
	'toolserver-status-short-unknown' => '$1: Nit klohr.',
	'toolserver-status-short-missing' => '$1: Ham_mer nit.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'toolserver-status-ok' => 'Et gëtt keng Problemer mam Datebankcluster $1 $2',
	'toolserver-status-info' => "Informatioun fir d'Benotzer vum Datebankcluster $1: $2",
	'toolserver-status-warn' => "Warnung fir d'Benotzer vum Datebankcluster $1: $2",
	'toolserver-status-down' => 'Den Datebankcluster $1 gouf temporär ausgeschalt. $2',
	'toolserver-status-erro' => 'Den Datebankcluster $1 ass down. $2',
	'toolserver-status-unknown' => 'De Status vum Datebankcluster $1 ass onbekannt',
	'toolserver-status-missing' => 'Den Datebankcluster $1 gëtt et net',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Informatioun',
	'toolserver-status-short-warn' => '$1: Warnung',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: Feeler',
	'toolserver-status-short-unknown' => '$1: Onbekannt',
	'toolserver-status-short-missing' => '$1: Net do',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'toolserver-status-ok' => 'Нема проблеми во гроздот $1 во базата $2',
	'toolserver-status-info' => 'Напомена за корисниците на гроздот $1: $2',
	'toolserver-status-warn' => 'Предупредување за корисниците на гроздот $1: $2',
	'toolserver-status-down' => 'Гроздот $1 во базата привремено е исклучен. $2',
	'toolserver-status-erro' => 'Гроздот $1 на базата падна. $2',
	'toolserver-status-unknown' => 'Состојбата на гроздот $1 е непозната',
	'toolserver-status-missing' => 'Гроздот $1 не постои',
	'toolserver-status-short-ok' => '$1: Во ред',
	'toolserver-status-short-info' => '$1: Инфо',
	'toolserver-status-short-warn' => '$1: Предупредување',
	'toolserver-status-short-down' => '$1: Паднат',
	'toolserver-status-short-erro' => '$1: Грешка',
	'toolserver-status-short-unknown' => '$1: Непознато',
	'toolserver-status-short-missing' => '$1: Недостасува',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'toolserver-status-ok' => 'Tiada masalah dalam kelompok pangkalan data $1 $2',
	'toolserver-status-info' => 'Pemberitahuan untuk pengguna kelompok $1 : $2',
	'toolserver-status-warn' => 'Amaran untuk pengguna kelompok $1 : $2',
	'toolserver-status-down' => 'Kelompok pangkalan data $1 telah ditutup buat sementara waktu. $2',
	'toolserver-status-erro' => 'Kelompok pangkalan data $1 tergendala. $2',
	'toolserver-status-unknown' => 'Status kelompok $1 tidak diketahui.',
	'toolserver-status-missing' => 'Kelompok $1 tidak wujud',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Maklumat',
	'toolserver-status-short-warn' => '$1: Amaran',
	'toolserver-status-short-down' => '$1: Tergendala',
	'toolserver-status-short-erro' => '$1: Ralat',
	'toolserver-status-short-unknown' => '$1: Tidak diketahui',
	'toolserver-status-short-missing' => '$1: Tiada',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'toolserver-status-ok' => 'Er zijn geen problemen in de databasecluster $1 $2',
	'toolserver-status-info' => 'Kennisgeving voor gebruikers van cluster $1: $2',
	'toolserver-status-warn' => 'Waarschuwing voor gebruikers van cluster $1: $2',
	'toolserver-status-down' => 'Het databasecluster  $1 is tijdelijk afgesloten. $2',
	'toolserver-status-erro' => 'Het databasecluster $1 is niet beschikbaar. $2',
	'toolserver-status-unknown' => 'Onbekend status van cluster $1',
	'toolserver-status-missing' => 'Cluster $1 bestaat niet',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Waarschuwing',
	'toolserver-status-short-down' => '$1: niet beschikbaar',
	'toolserver-status-short-erro' => '$1: Foutmelding',
	'toolserver-status-short-unknown' => '$1: Onbekend',
	'toolserver-status-short-missing' => '$1: Ontbrekend',
);

/** Polish (Polski)
 * @author Grzechooo
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'toolserver-status-ok' => 'Brak jakichkolwiek problemów w klastrze bazy danych $1 $2',
	'toolserver-status-info' => 'Informacja dla użytkowników klastra $1: $2',
	'toolserver-status-warn' => 'Ostrzeżenie dla użytkowników klastra $1: $2',
	'toolserver-status-down' => 'Klaster bazy danych $1 został tymczasowo wyłączony. $2',
	'toolserver-status-erro' => 'Klaster bazy danych $1 jest wyłączony. $2',
	'toolserver-status-unknown' => 'Nieznany status klastra $1',
	'toolserver-status-missing' => 'Klaster $1 nie istnieje',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Informacje',
	'toolserver-status-short-warn' => '$1: Ostrzeżenie',
	'toolserver-status-short-down' => '$1: Wyłączony',
	'toolserver-status-short-erro' => '$1: Błąd',
	'toolserver-status-short-unknown' => '$1: Nieznany',
	'toolserver-status-short-missing' => '$1: Brak',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avertizare',
	'toolserver-status-short-erro' => '$1: Eroare',
	'toolserver-status-short-missing' => '$1: Lipsă',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'toolserver-status-ok' => "Non ge stonne probbleme sus a 'u cluster de l'archivije $1 $2",
	'toolserver-status-info' => "Notizie pe l'utinde d'u cluster $1: $2",
	'toolserver-status-warn' => "Avvise pe l'utinde d'u cluster $1: $2",
	'toolserver-status-down' => "'U cluster de l'archivije $1 ha state temboraneamende stutate. $2",
	'toolserver-status-erro' => "'U cluster de l'archivije $1 ste 'nderre. $2",
	'toolserver-status-unknown' => "State scanusciute d'u cluster $1",
	'toolserver-status-missing' => "Cluster $1 non g'esiste",
	'toolserver-status-short-ok' => '$1: Apposte',
	'toolserver-status-short-info' => "$1: 'Mbormaziune",
	'toolserver-status-short-warn' => '$1: Avvise',
	'toolserver-status-short-down' => "$1: 'Nderre",
	'toolserver-status-short-erro' => '$1: Errore',
	'toolserver-status-short-unknown' => '$1: Scanusciute',
	'toolserver-status-short-missing' => '$1: Perse',
);

/** Serbo-Croatian (Srpskohrvatski)
 * @author OC Ripper
 */
$messages['sh'] = array(
	'toolserver-status-ok' => 'Nema problema u klasteru baze podataka $1 $2',
	'toolserver-status-info' => 'Napomena za korisnike klastera $1: $2',
	'toolserver-status-warn' => 'Upozorenje za korisnike klastera $1: $2',
	'toolserver-status-down' => 'Klaster baze podataka $1 je privremeno isključen. $2',
	'toolserver-status-erro' => 'Klaster baze podataka $1 je iznenada pao. $2',
	'toolserver-status-unknown' => 'Nepoznato stanje klastera $1',
	'toolserver-status-missing' => 'Klaster $1 ne postoji',
	'toolserver-status-short-ok' => '$1: U redu',
	'toolserver-status-short-info' => '$1: Informacije',
	'toolserver-status-short-warn' => '$1: Upozorenje',
	'toolserver-status-short-down' => '$1: Pad',
	'toolserver-status-short-erro' => '$1: Greška',
	'toolserver-status-short-unknown' => '$1: Nepoznato',
	'toolserver-status-short-missing' => '$1: Nedostaje',
);

/** Sinhala (සිංහල)
 * @author බිඟුවා
 */
$messages['si'] = array(
	'toolserver-status-ok' => 'ක්ලස්ටර් $1 $2 හි කිසිදු දෝෂයක් නොමැත',
	'toolserver-status-short-ok' => '$1: හරි',
	'toolserver-status-short-info' => '$1: තොරතුරු',
	'toolserver-status-short-warn' => '$1: අනතුරු හඟවනවා',
	'toolserver-status-short-down' => '$1: විරහිතයි',
	'toolserver-status-short-erro' => '$1: දෝෂය',
	'toolserver-status-short-unknown' => '$1: නොදත්',
	'toolserver-status-short-missing' => '$1: දක්නට නොමැත',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'toolserver-status-ok' => 'V gruči zbirke podatkov $1 ni težav $2',
	'toolserver-status-info' => 'Obvestilo za uporabnike gruče $1: $2',
	'toolserver-status-warn' => 'Opozorilo za uporabnike gruče $1: $2',
	'toolserver-status-down' => 'Gruča zbirke podatkov $1 je bila začasno zaustavljena. $2',
	'toolserver-status-erro' => 'Gruča zbirke podatkov $1 ne deluje. $2',
	'toolserver-status-unknown' => 'Neznano stanje gruče $1',
	'toolserver-status-missing' => 'Gruča $1 ne obstaja',
	'toolserver-status-short-ok' => '$1: V redu',
	'toolserver-status-short-info' => '$1: Informacija',
	'toolserver-status-short-warn' => '$1: Opozorilo',
	'toolserver-status-short-down' => '$1: Ne deluje',
	'toolserver-status-short-erro' => '$1: Napaka',
	'toolserver-status-short-unknown' => '$1: Neznano',
	'toolserver-status-short-missing' => '$1: Manjka',
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

/** Turkish (Türkçe)
 * @author Emperyan
 */
$messages['tr'] = array(
	'toolserver-status-short-ok' => '$1: Tamam',
	'toolserver-status-short-info' => '$1: Bilgi',
	'toolserver-status-short-warn' => '$1: Uyar',
	'toolserver-status-short-erro' => '$1: Hata',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'toolserver-status-ok' => 'Không có vấn đề trong cụm cơ sở dữ liệu $1 $2',
	'toolserver-status-info' => 'Thông báo cho những người dùng cụm $1: $2',
	'toolserver-status-warn' => 'Cảnh báo cho những người dùng cụm $1: $2',
	'toolserver-status-down' => 'Cụm cơ sở dữ liệu $1 đã bị tắt tạm thời. $2',
	'toolserver-status-erro' => 'Cụm cơ sở dữ liệu $1 đang tắt: $2',
	'toolserver-status-unknown' => 'Trạng thái của cụm $1 không rõ',
	'toolserver-status-missing' => 'Cụm $1 không tồn tại',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Thông báo',
	'toolserver-status-short-warn' => '$1: Cảnh báo',
	'toolserver-status-short-down' => '$1: Tắt',
	'toolserver-status-short-erro' => '$1: Lỗi',
	'toolserver-status-short-unknown' => '$1: Không rõ',
	'toolserver-status-short-missing' => '$1: Không có',
);

