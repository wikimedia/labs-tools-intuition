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

/** Arabic (العربية)
 * @author ترجمان05
 */
$messages['ar'] = array(
	'toolserver-status-short-ok' => '$1: حسنا',
	'toolserver-status-short-info' => '$1: معلومات',
	'toolserver-status-short-warn' => '$1: يحذّّر',
	'toolserver-status-short-down' => '$1: أسفل',
	'toolserver-status-short-erro' => '$1: خطأ',
	'toolserver-status-short-unknown' => '$1: مجهول',
	'toolserver-status-short-missing' => '$1: مفقود',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'toolserver-status-short-ok' => '$1: ঠিক',
	'toolserver-status-short-info' => '$1: তথ্য',
	'toolserver-status-short-warn' => '$1: সতৰ্কবাণী',
	'toolserver-status-short-down' => '$1: তললৈ',
	'toolserver-status-short-erro' => '$1: ভুল',
	'toolserver-status-short-unknown' => '$1: অজ্ঞাত',
);

/** Asturian (asturianu)
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

/** Breton (brezhoneg)
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

/** Catalan (català)
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

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'toolserver-status-ok' => 'Databázový cluster $1 nemá žádné problémy $2',
	'toolserver-status-info' => 'Informace pro uživatele clusteru $1: $2',
	'toolserver-status-warn' => 'Upozornění pro uživatele clusteru $1: $2',
	'toolserver-status-down' => 'Databázový cluster $1 byl dočasně vypnut. $2',
	'toolserver-status-erro' => 'Databázový cluster $1 je mimo provoz. $2',
	'toolserver-status-unknown' => 'Neznámý stav clusteru $1',
	'toolserver-status-missing' => 'Cluster $1 neexistuje',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Informace',
	'toolserver-status-short-warn' => '$1: Upozornění',
	'toolserver-status-short-down' => '$1: Mimo provoz',
	'toolserver-status-short-erro' => '$1: Chyba',
	'toolserver-status-short-unknown' => '$1: Neznámý',
	'toolserver-status-short-missing' => '$1: Chybí',
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

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'toolserver-status-ok' => 'Problemy w clusterje $1 datoweje banki njejsu $2',
	'toolserver-status-info' => 'Powěźeńka za wužywarjow clustera $1: $2',
	'toolserver-status-warn' => 'Warnowanje za wužywarjow clustera $1: $2',
	'toolserver-status-down' => 'Cluster $1 datoweje banki jo se nachylu wušaltował. $2',
	'toolserver-status-erro' => 'Cluster $1 datoweje banki jo wupadnuł. $2',
	'toolserver-status-unknown' => 'Unknown status of cluster $1',
	'toolserver-status-missing' => 'Cluster $1 njeeksistěrujo',
	'toolserver-status-short-ok' => '$1: W pórěźe',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warnowaś',
	'toolserver-status-short-down' => '$1: Wupadnjony',
	'toolserver-status-short-erro' => '$1: Zmólka',
	'toolserver-status-short-unknown' => '$1: Njeznaty',
	'toolserver-status-short-missing' => '$1: Felujo',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'toolserver-status-ok' => 'Δεν υπάρχουν προβλήματα στην συστοιχία βάσεων $1 $2',
	'toolserver-status-info' => 'Μήνυμα για χρήστες της συστοιχίας $1: $2',
	'toolserver-status-warn' => 'Προειδοποίηση για χρήστες της συστοιχίας $1: $2',
	'toolserver-status-down' => 'Στη συστοιχία βάσεων $1 έχει προσωρινά διακοπεί η λειτουργία. $2',
	'toolserver-status-erro' => 'Η συστοιχία βάσεων $1 είναι εκτός λειτουργίας. $2',
	'toolserver-status-unknown' => 'Άγνωστη κατάσταση της συστοιχίας $1',
	'toolserver-status-missing' => 'Η συστοιχία $1 δεν υπάρχει',
	'toolserver-status-short-ok' => '$1: Εντάξει',
	'toolserver-status-short-info' => '$1: Πληροφορίες',
	'toolserver-status-short-warn' => '$1: Προειδοποίηση',
	'toolserver-status-short-down' => '$1: Εκτός λειτουργίας',
	'toolserver-status-short-erro' => '$1: Σφάλμα',
	'toolserver-status-short-unknown' => '$1: Άγνωστο',
	'toolserver-status-short-missing' => '$1: Λείπει',
);

/** Spanish (español)
 * @author Platonides
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'toolserver-status-ok' => 'No hay problemas en el cluster $1 $2',
	'toolserver-status-info' => 'Información para los usuarios del cluster $1: $2',
	'toolserver-status-warn' => 'Advertencia para usuarios del cluster $1: $2',
	'toolserver-status-down' => 'El cluster $1 no está disponible. $2',
	'toolserver-status-erro' => 'El cluster $1 está caído. $2',
	'toolserver-status-unknown' => 'Se desconoce el estado del cluster $1',
	'toolserver-status-missing' => 'El cluster "$1" no existe',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Advertencia',
	'toolserver-status-short-down' => '$1: Desconectado',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconocido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Basque (euskara)
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

/** Persian (فارسی)
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'toolserver-status-short-info' => '$1: اطلاعات',
);

/** French (français)
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

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'toolserver-status-ok' => 'डाटाबेस क्लस्टर $1 में कोई समस्या नहीं हैं $2',
	'toolserver-status-info' => 'क्लस्टर $1 के प्रयोक्ताओं के लिये सूचना: $2',
	'toolserver-status-warn' => 'क्लस्टर $1 के प्रयोक्ताओं के लिये चेतावनी: $2',
	'toolserver-status-down' => 'डाटाबेस क्लस्टर $1 को अस्थायी रूप से बंद कर दिया गया है। $2',
	'toolserver-status-erro' => 'डाटाबेस क्लस्टर $1 बंद है। $2',
	'toolserver-status-unknown' => 'क्लस्टर $1 की स्थिति अज्ञात है',
	'toolserver-status-missing' => 'क्लस्टर $1 मौजूद नहीं है',
	'toolserver-status-short-info' => '$1: सूचना',
	'toolserver-status-short-warn' => '$1: चेतावनी',
	'toolserver-status-short-down' => '$1: बंद',
	'toolserver-status-short-erro' => '$1: त्रुटि',
	'toolserver-status-short-unknown' => '$1: अज्ञात',
	'toolserver-status-short-missing' => '$1: गायब',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'toolserver-status-ok' => 'Problemy w clusterje $1 datoweje banki njejsu $2',
	'toolserver-status-info' => 'Zdźělenka za wužiwarjow clustera $1: $2',
	'toolserver-status-warn' => 'Warnowanje za wužiwarjow clustera $1: $2',
	'toolserver-status-down' => 'Cluster $1 datoweje banki je so nachwilu wupinył. $2',
	'toolserver-status-erro' => 'Cluster $1 datoweje banki je wupadnył. $2',
	'toolserver-status-unknown' => 'Njeznaty status clustera $1',
	'toolserver-status-missing' => 'Cluster $1 njeeksistuje',
	'toolserver-status-short-ok' => '$1: W porjadku',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warnować',
	'toolserver-status-short-down' => '$1: Wupadnjeny',
	'toolserver-status-short-erro' => '$1: Zmylk',
	'toolserver-status-short-unknown' => '$1: Njeznaty',
	'toolserver-status-short-missing' => '$1: Faluje',
);

/** Hungarian (magyar)
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

/** Interlingua (interlingua)
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

/** Italian (italiano)
 * @author Gianfranco
 * @author ZioNicco
 */
$messages['it'] = array(
	'toolserver-status-ok' => 'Non ci sono problemi nel cluster di database $1 $2',
	'toolserver-status-info' => 'Avviso per gli utenti del cluster $1: $2',
	'toolserver-status-warn' => 'Avvertenza per gli utenti del cluster $1: $2',
	'toolserver-status-down' => 'Il cluster $1 del database è stato temporaneamente arrestato. $2',
	'toolserver-status-erro' => 'Il cluster $1 del database è giù. $2',
	'toolserver-status-unknown' => 'Stato del cluster $1 non noto',
	'toolserver-status-missing' => 'Cluster $1 non esistente',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avvisi',
	'toolserver-status-short-down' => '$1: Fermo',
	'toolserver-status-short-erro' => '$1: Errori',
	'toolserver-status-short-unknown' => '$1: Non noto',
	'toolserver-status-short-missing' => '$1: Mancante',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'toolserver-status-missing' => 'クラスタ $1 は存在しません',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: 情報',
	'toolserver-status-short-warn' => '$1: 警告',
	'toolserver-status-short-down' => '$1: ダウン',
	'toolserver-status-short-erro' => '$1: エラー',
	'toolserver-status-short-unknown' => '$1: 不明',
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

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'toolserver-status-ok' => '$1 데이터베이스 클러스터에 문제가 없습니다 $2',
	'toolserver-status-info' => '$1 클러스터의 사용자에 대한 알림: $2',
	'toolserver-status-warn' => '$1 클러스터의 사용자에 대한 경고: $2',
	'toolserver-status-down' => '$1 데이터베이스 클러스터를 일시적으로 종료했습니다. $1',
	'toolserver-status-erro' => '$1 데이터베이스 클러스터는 down되었습니다. $2',
	'toolserver-status-unknown' => '$1 클러스터의 알 수 없는 상태',
	'toolserver-status-missing' => '$1 클러스터가 존재하지 않음',
	'toolserver-status-short-ok' => '$1: 완료',
	'toolserver-status-short-info' => '$1: 정보',
	'toolserver-status-short-warn' => '$1: Warn',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: 오류',
	'toolserver-status-short-unknown' => '$1: 알 수 없음',
	'toolserver-status-short-missing' => '$1: 잃음',
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

/** Macedonian (македонски)
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
	'toolserver-status-short-info' => '$1: info',
	'toolserver-status-short-warn' => '$1: waarschuwing',
	'toolserver-status-short-down' => '$1: niet beschikbaar',
	'toolserver-status-short-erro' => '$1: foutmelding',
	'toolserver-status-short-unknown' => '$1: onbekend',
	'toolserver-status-short-missing' => '$1: ontbreekt',
);

/** Polish (polski)
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

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avertizare',
	'toolserver-status-short-down' => '$1: Picat',
	'toolserver-status-short-erro' => '$1: Eroare',
	'toolserver-status-short-unknown' => '$1: Necunoscut',
	'toolserver-status-short-missing' => '$1: Lipsă',
);

/** tarandíne (tarandíne)
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

/** Russian (русский)
 * @author Eleferen
 */
$messages['ru'] = array(
	'toolserver-status-ok' => 'Нет никаких проблем в базе данных кластера $1 $2',
	'toolserver-status-info' => 'Уведомление для пользователей кластера $1: $2',
	'toolserver-status-warn' => 'Предупреждение для пользователей кластера $1: $2',
	'toolserver-status-down' => 'База данных кластера $1 временно выключена. $2',
	'toolserver-status-erro' => 'База данных кластера $1 недоступна. $2',
	'toolserver-status-unknown' => 'Неизвестное состояние кластера $1',
	'toolserver-status-missing' => 'Кластер $1 не существует',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Информация',
	'toolserver-status-short-warn' => '$1: Предупреждение',
	'toolserver-status-short-down' => '$1: Недоступен',
	'toolserver-status-short-erro' => '$1: Ошибка',
	'toolserver-status-short-unknown' => '$1: Неизвестно',
	'toolserver-status-short-missing' => '$1: Отсутствует',
);

/** Serbo-Croatian (srpskohrvatski / српскохрватски)
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

/** Slovenian (slovenščina)
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

/** Serbian (Cyrillic script) (‪српски (ћирилица)‬)
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

/** Serbian (Latin script) (‪srpski (latinica)‬)
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

/** Tamil (தமிழ்)
 * @author Aswn
 */
$messages['ta'] = array(
	'toolserver-status-short-ok' => '$1: சரி',
	'toolserver-status-short-info' => '$1: தகவல்',
	'toolserver-status-short-warn' => '$1: எச்சரி',
	'toolserver-status-short-erro' => '$1: பிழை',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'toolserver-status-short-erro' => '$1: Сәһв',
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

/** Ukrainian (українська)
 * @author A1
 */
$messages['uk'] = array(
	'toolserver-status-short-info' => '$1: Інформація',
	'toolserver-status-short-warn' => '$1: Попередження',
	'toolserver-status-short-down' => '$1: Вниз',
	'toolserver-status-short-erro' => '$1: Помилка',
	'toolserver-status-short-unknown' => '$1: Невідомо',
	'toolserver-status-short-missing' => '$1: Відсутній',
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

/** Simplified Chinese (‪中文（简体）‬)
 * @author Hzy980512
 */
$messages['zh-hans'] = array(
	'toolserver-status-short-ok' => '$1: 良好',
	'toolserver-status-short-info' => '$1: 讯息',
	'toolserver-status-short-warn' => '$1: 警告',
	'toolserver-status-short-down' => '$1: 停止工作',
	'toolserver-status-short-erro' => '$1: 错误',
	'toolserver-status-short-unknown' => '$1: 未知',
	'toolserver-status-short-missing' => '$1: 丢失',
);

/** Chinese (Hong Kong) (‪中文（香港）‬)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'toolserver-status-ok' => '資料庫群集$1中沒有任何問題$2',
	'toolserver-status-down' => '資料庫群集$1已被暫時關閉。$2',
	'toolserver-status-erro' => '資料庫群集$1已關閉。$2',
	'toolserver-status-unknown' => '群集$1的狀態未知',
	'toolserver-status-missing' => '群集$1不存在',
	'toolserver-status-short-ok' => '$1:良好',
	'toolserver-status-short-info' => '$1:資訊',
	'toolserver-status-short-warn' => '$1:警告',
	'toolserver-status-short-down' => '$1:停止工作',
	'toolserver-status-short-erro' => '$1:錯誤',
	'toolserver-status-short-unknown' => '$1:未知',
	'toolserver-status-short-missing' => '$1:丢失',
);

