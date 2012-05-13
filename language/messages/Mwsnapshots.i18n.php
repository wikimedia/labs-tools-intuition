<?php
/**
 * Interface messages for tool "mwSnapshots".
 *
 * @toolowner krinkle
 */

$url = '~krinkle/mwSnapshots/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Error',
	'title-updatelog' => 'Update log',
	'updatelog-intro' => 'The update script is scheduled to run every hour. Below is the console output of the last run.',
	'updatelog-active' => 'The update script is currently running. Come back later for the complete log.',
	'title-download' => '$1', // Do not translate
	'download-button' => 'Download $1', 
	'download-directlink' => 'direct link',
	'title-downloadpage' => 'Download: $1',
	'downloadpage-directlink' => 'Click here to download the snapshot.',
	'err-snapshotindex' => 'Snapshot index temporarily unavailable. Please try again later.',
	'err-invalid-repo' => 'Unknown repository: "$1".',
	'err-invalid-branch' => 'Unknown branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'The snapshots are generated every few hours. While generating the snapshot for "$1", an error occurred. Please try again later.',
	'err-noupdatelog' => 'No update log was found.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Browse repository',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => 'Get it!',
	'updatelog-link' => 'update log',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'File size',
	'tablehead-hash' => 'Checksums',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Siebrand
 */
$messages['qqq'] = array(
	'title-overview' => 'Heading of overview page listing all repositories and branches',
	'title-error' => 'Heading of page if action failed',
	'title-download' => '{{Ignore}}',
	'download-button' => 'Label of the download button. Text is outputted below an up-arrow.

* $1: Branch name',
	'download-directlink' => 'Link displayed in parentheses below the download button.',
	'title-downloadpage' => 'Heading of download page where the file is ready to be downloaded by the user

* $1: File name',
	'downloadpage-directlink' => 'Clickable link shown under the heading, links to the file directly',
	'err-snapshotindex' => 'If the information manifest (Index) can not be found on the server, this error is shown.',
	'err-invalid-repo' => '

* $1: Repository name',
	'err-invalid-branch' => 'Parameters:
* $1: Branch name
* $2: Repository name',
	'err-nosnapshot' => 'The snapshots are generated every few hours. If during the generation the selected branch had a problem. Then trying to download it will show this error.

* $1: Branch name',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title-overview' => 'Schnappschüsse',
	'title-error' => 'Fehler',
	'title-updatelog' => 'Aktualisierungsprotokoll',
	'updatelog-intro' => 'Das Aktualisierungsskript wird einmal pro Stunde ausgeführt. Hier kann man Informationen zur letzten Ausführung des Skripts einsehen.',
	'updatelog-active' => 'Das Aktualisierungsskript wird derzeit ausgeführt. Besuche diese Seite später noch einmal, um das vollständige Protokoll einsehen zu können.',
	'title-downloading' => 'Am Herunterladen von $1',
	'downloading-intro' => 'Das Herunterladen wird in Kürze starten …',
	'downloading-directlink' => 'Gibt es Probleme beim Herunterladen? Bitte nutze den direkten Link.',
	'err-snapshotindex' => 'Der Schnappschussindex ist vorübergehend nicht verfügbar. Bitte versuche es später erneut.',
	'err-invalid-repo' => 'Unbekanntes Repositorium: „$1“',
	'err-invalid-branch' => 'Unbekannter Versionszweig: „$1“ im Repositorium „$2“.',
	'err-nosnapshot' => 'Die Schnappschüsse werden alle paar Stunden generiert. Beim Generieren des Schnappschusses für „$1“ ist ein Fehler aufgetreten. Bitte versuche es später erneut.',
	'err-noupdatelog' => 'Das Aktualisierungsprotokoll wurde nicht gefunden.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Repositorium durchsuchen',
	'repo-branches-label' => 'Versionszweige:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Herunterladen',
	'updatelog-link' => 'Aktualisierungsprotokoll',
	'tablehead-repo' => 'Repositorium',
	'tablehead-snapshots' => 'Schnappschüsse',
	'tablehead-branch' => 'Versionszweig',
	'tablehead-filesize' => 'Dateigröße',
	'tablehead-hash' => 'Hash',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'updatelog-active' => 'Das Aktualisierungsskript wird derzeit ausgeführt. Besuchen Sie diese Seite später noch einmal, um das vollständige Protokoll einsehen zu können.',
	'downloading-directlink' => 'Gibt es Probleme beim Herunterladen? Bitte nutzen Sie den direkten Link.',
	'err-snapshotindex' => 'Der Schnappschussindex ist vorübergehend nicht verfügbar. Bitte versuchen Sie es später erneut.',
	'err-nosnapshot' => 'Die Schnappschüsse werden alle paar Stunden generiert. Beim Generieren des Schnappschusses für „$1“ ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.',
);

/** Spanish (Español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'title-overview' => 'Instantáneas',
	'title-error' => 'Error',
	'title-updatelog' => 'Registro de actualización',
	'updatelog-intro' => 'La secuencia de comandos (script) de actualización está programada para ejecutarse cada hora. A continuación está el resultado de la consola tras la última ejecución.',
	'updatelog-active' => 'La secuencia de comandos (script) de actualización se está ejecutando actualmente. Vuelve más tarde para ver el registro completo.',
	'title-downloading' => 'Descargando: $1',
	'downloading-intro' => 'Tu descarga se iniciará en breve...',
	'downloading-directlink' => '¿Problemas con la descarga?  Utiliza este enlace directo.',
	'err-snapshotindex' => 'Índice de instantáneas no disponible temporalmente. Inténtalo de nuevo más tarde.',
	'err-invalid-repo' => 'Repositorio desconocido: "$1".',
	'err-invalid-branch' => 'Rama desconocida: "$1" en el repositorio "$2".',
	'err-nosnapshot' => 'Las instantáneas se generan cada pocas horas. Mientras se generaba la instantánea para "$1", se produjo un error. Inténtalo de nuevo más tarde.',
	'err-noupdatelog' => 'No se ha encontrado ningún registro de actualización.',
	'repo-site-link' => 'Sitio Web',
	'repo-browse-link' => 'Examinar el repositorio',
	'repo-branches-label' => 'Ramas:',
	'repo-lastmoddate-label' => 'Fecha:',
	'branches-submit-button' => '¡Consíguelo!',
	'updatelog-link' => 'registro de actualización',
	'tablehead-repo' => 'Repositorio',
	'tablehead-snapshots' => 'Instantáneas',
	'tablehead-branch' => 'Rama',
	'tablehead-filesize' => 'Tamaño del archivo',
	'tablehead-hash' => 'Hash',
);

/** French (Français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'title-overview' => 'Instantanés',
	'title-error' => 'Erreur',
	'title-updatelog' => 'Mettre à jour le journal',
	'updatelog-intro' => "Le script de mise à jour est programmé pour s'exécuter toutes les heures. Voici ci-dessous la sortie de la console de la dernière exécution.",
	'updatelog-active' => "Le script de mise à jour est en cours d'exécution. Revenez plus tard pour le journal complet.",
	'title-downloading' => 'En téléchargement: $1',
	'downloading-intro' => 'Votre téléchargement va bientôt commencer…',
	'downloading-directlink' => 'Des problèmes de téléchargement? Veuillez utiliser ce lien direct.',
	'err-snapshotindex' => "Index d'instantané temporairement indisponible. Veuillez réessayer ultérieurement.",
	'err-invalid-repo' => 'Dépôt inconnu: "$1".',
	'err-invalid-branch' => 'Branche inconnue: "$1" dans le dépôt "$2".',
	'err-nosnapshot' => 'Les instantanés sont générés toutes les quelques heures. Lors de la génération de l\'instantané pour "$1", une erreur s\'est produite. Veuillez réessayer ultérieurement.',
	'err-noupdatelog' => "Aucun journal de mise à jour n'a été trouvé.",
	'repo-site-link' => 'Site web',
	'repo-browse-link' => 'Naviguer dans le dépôt',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => "L'obtenir!",
	'updatelog-link' => 'mettre à jour le journal',
	'tablehead-repo' => 'Dépôt',
	'tablehead-snapshots' => 'Instantanés',
	'tablehead-branch' => 'Branche',
	'tablehead-filesize' => 'Taille de fichier',
	'tablehead-hash' => 'Hachage',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title-overview' => 'Njejapke fota',
	'title-error' => 'Zmylk',
	'title-updatelog' => 'Aktualizowanski protokol',
	'updatelog-active' => 'Aktualizowanski skript tuchwilu běži. Wróć prošu pozdźišo, zo by sej dospołny protokol wobhladał.',
	'title-downloading' => 'Sćahuje so: $1',
	'downloading-intro' => 'Twoje sćehnjenje budźe za krótki čas startować...',
	'downloading-directlink' => 'Maš problemy ze sćehnjenjom? Wužij prošu direktny wotkaz.',
	'err-invalid-repo' => 'Njeznaty repozitorij: "$1".',
	'err-invalid-branch' => 'Njeznata hałuza: "$1" w repozitoriju "$2".',
	'err-noupdatelog' => 'Aktualizowanski protokol njeje so namakał.',
	'repo-site-link' => 'Websydło',
	'repo-browse-link' => 'Repozitorij přepytać',
	'repo-branches-label' => 'Hałuzy:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Sćahnyć',
	'updatelog-link' => 'aktualizowanski protokol',
	'tablehead-repo' => 'Repozitorij',
	'tablehead-snapshots' => 'Njejapke fota',
	'tablehead-branch' => 'Hałuza',
	'tablehead-filesize' => 'Wulkosć dataje',
	'tablehead-hash' => 'Hash',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title-overview' => 'Instantaneos',
	'title-error' => 'Error',
	'title-updatelog' => 'Registro de actualisation',
	'updatelog-intro' => 'Le script de actualisation es programmate pro esser executate cata hora. Ecce le resultato de consola del ultime execution.',
	'updatelog-active' => 'Le script de actualisation es actualmente in execution. Reveni plus tarde pro le registro complete.',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Ximo17
 */
$messages['it'] = array(
	'title-overview' => 'Istantanee',
	'title-error' => 'Errore',
	'title-updatelog' => 'Aggiorna etichetta',
	'updatelog-intro' => "L'aggiornamento avviene ogni ora. Di seguito è presente l'output della console della ultima corsa.",
	'updatelog-active' => "L'aggiornamento è attualmente in esecuzione. Torna più tardi per il registro completo.",
	'title-downloading' => 'Stai scaricando: $1',
	'downloading-intro' => 'Il download inizierà a breve...',
	'downloading-directlink' => 'Problemi con il download? Usa questo collegamento diretto.',
	'err-snapshotindex' => 'Indice delle istantanee temporaneamente non disponibile. Si prega di riprovare più tardi.',
	'err-invalid-repo' => 'Deposito sconosciuto: "$1".',
	'err-invalid-branch' => 'Sezione sconosciuta: "$1" nel deposito "$2".',
	'err-nosnapshot' => 'Le istantanee vengono generate quasi ogni ora. Durante la generazione dello snapshot di "$ 1", si è verificato un errore. Riprova più tardi.',
	'err-noupdatelog' => 'Non è stato trovato alcun registro di aggiornamento.',
	'repo-site-link' => 'Sito web',
	'repo-browse-link' => 'Sfoglia nel deposito',
	'repo-branches-label' => 'Sezioni:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Ottienilo!',
	'updatelog-link' => 'Aggiornamento registro',
	'tablehead-repo' => 'Deposito',
	'tablehead-snapshots' => 'Istantanee',
	'tablehead-branch' => 'Sezione',
	'tablehead-filesize' => 'Dimensione del file',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title-overview' => 'Снимки',
	'title-error' => 'Грешка',
	'title-updatelog' => 'Дневник на подновувања',
	'updatelog-intro' => 'Скриптата врши поднова на секој час. Подолу е прикажан конзолниот извод од последната поднова.',
	'updatelog-active' => 'Скриптата моментално врши поднова. Навратете се подоцна за целосниот дневник.',
	'title-downloading' => 'Преземање: $1',
	'downloading-intro' => 'Преземањето ќе почне набргу...',
	'downloading-directlink' => 'Проблеми со преземањето? Употребете ја оваа директна врска.',
	'err-snapshotindex' => 'Индексот на снимки е привремено недостапен. Обидете се подоцна.',
	'err-invalid-repo' => 'Непознато складиште: „$1“.',
	'err-invalid-branch' => 'Непозната гранка: „$1“ во складиштето „$2“.',
	'err-nosnapshot' => 'Снимките се создаваат на секои неколку часа. Се појави грешка при создавањето на снимка на „$1“. Обидете се подоцна.',
	'err-noupdatelog' => 'Не пронајдов дневник на подновувања.',
	'repo-site-link' => 'Мреж. место',
	'repo-browse-link' => 'Прелистајте го складиштето',
	'repo-branches-label' => 'Гранки:',
	'repo-lastmoddate-label' => 'Датум:',
	'branches-submit-button' => 'Преземи',
	'updatelog-link' => 'дневник на подновувања',
	'tablehead-repo' => 'Складиште',
	'tablehead-snapshots' => 'Снимки',
	'tablehead-branch' => 'Гранка',
	'tablehead-filesize' => 'Големина',
	'tablehead-hash' => 'Тараба',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title-overview' => 'Snapshot',
	'title-error' => 'Ralat',
	'title-updatelog' => 'Log kemas kini',
	'updatelog-intro' => 'Skrip kemas kini ini dijadualkan untuk berjalan setiap jam sekali. Yang berikut ialah keluaran konsol pada jalanan yang terbaru.',
	'updatelog-active' => 'Skrip kemas kini sedang berjalan. Sila datang balik nanti untuk log yang lengkap.',
	'title-downloading' => 'Memuat turun: $1',
	'downloading-intro' => 'Pemuatturunan anda akan bermula sebentar lagi...',
	'downloading-directlink' => 'Ada masalah ketika memuat turun? Sila gunakan pautan langsung ini.',
	'err-snapshotindex' => 'Indeks snapshot tidak tersedia buat sementara waktu. Sila cuba lagi nanti.',
	'err-invalid-repo' => 'Repositori tidak dikenali: "$1".',
	'err-invalid-branch' => 'Cabang tidak dikenali: "$1" dalam repositori "$2".',
	'err-nosnapshot' => 'Snapshot-snapshot ini dijana sekali setiap beberapa jam. Ketika menjana snapshot "$1", berlakunya ralat. Sila cuba lagi nanti.',
	'err-noupdatelog' => 'Tiada log kemas kini yang dijumpai.',
	'repo-site-link' => 'Tapak web',
	'repo-browse-link' => 'Semak seimbas repositori',
	'repo-branches-label' => 'Cabang:',
	'repo-lastmoddate-label' => 'Tarikh:',
	'branches-submit-button' => 'Dapatkannya!',
	'updatelog-link' => 'log kemas kini',
	'tablehead-repo' => 'Repositori',
	'tablehead-snapshots' => 'Snapshot',
	'tablehead-branch' => 'Cabang',
	'tablehead-filesize' => 'Saiz fail',
	'tablehead-hash' => 'Hash',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Fout',
	'title-updatelog' => 'Updatelogboek',
	'updatelog-intro' => 'Het updatescript wordt volgens planning ieder uur uitgevoerd. Hieronder is de uitvoer van het colsole van de laatste keer te bekijken.',
	'updatelog-active' => 'Het updatescript wordt op het moment uitgevoerd. Kom op een later moment terug voor het complete logboek.',
	'title-downloading' => 'Bezig met downloaden van $1',
	'downloading-intro' => 'Uw download begint zo meteen...',
	'downloading-directlink' => 'Problemen met downloaden? Gebruik deze directe verwijzing.',
	'err-snapshotindex' => 'De snapshotindex is tijdelijk niet beschikbaar. Probeer het later opnieuw.',
	'err-invalid-repo' => 'Onbekende repository: "$1".',
	'err-invalid-branch' => 'Onbekende branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'De snapshots worden iedere paar uur aangemaakt. Tijdens het aanmaken van het snapshot voor "$1" is een fout opgetreden. Probeer het later opnieuw.',
	'err-noupdatelog' => 'Er is geen updatelogboek beschikbaar.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Repository bekijken',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Downloaden!',
	'updatelog-link' => 'updatelogboek',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'Bestandsgrootte',
	'tablehead-hash' => 'Hash',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'repo-lastmoddate-label' => 'తేది:',
);

/** Толышә зывон (Толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title-error' => 'Сәһв',
	'repo-lastmoddate-label' => 'Тарых:',
	'tablehead-filesize' => 'Фајли памјә',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title-overview' => 'Ảnh chụp nhanh',
	'title-error' => 'Lỗi',
	'title-updatelog' => 'Cập nhật nhật trình',
	'updatelog-intro' => 'Kịch bản cập nhật được dự định để chạy mỗi giờ một lần. Dưới đây là kết quả trên bảng kiểm soát từ lần chạy vừa rồi.',
	'updatelog-active' => 'Kịch bản hiện đang chạy. Hãy trở lại sau để xem nhật trình đầy đủ.',
	'title-downloading' => 'Đang tải về: $1',
	'downloading-intro' => 'Sắp sửa bắt đầu tải về…',
	'downloading-directlink' => 'Có trục trặc trong việc tải về? Hãy sử dụng liên kết trực tiếp này.',
	'err-snapshotindex' => 'Chỉ mục ảnh chụp nhanh tạm không hoạt động. Xin vui lòng thử lại sau.',
	'err-invalid-repo' => 'Kho không rõ: “$1”.',
	'err-invalid-branch' => 'Chi nhánh không rõ: “$1” trong kho “$2”.',
	'err-nosnapshot' => 'Các ảnh chụp nhanh được tạo ra vài giờ một lần. Xuất hiện lỗi khi tạo ảnh chụp nhanh cho “$1”. Xin vui lòng thử lại sau.',
	'err-noupdatelog' => 'Không tìm thấy nhật trình cập nhật.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Duyệt kho',
	'repo-branches-label' => 'Các chi nhánh:',
	'repo-lastmoddate-label' => 'Ngày giờ:',
	'branches-submit-button' => 'Lấy nó!',
	'updatelog-link' => 'nhật trình cập nhật',
	'tablehead-repo' => 'Kho',
	'tablehead-snapshots' => 'Ảnh chụp nhanh',
	'tablehead-branch' => 'Chi nhánh',
	'tablehead-filesize' => 'Kích thước tập tin',
	'tablehead-hash' => 'Giá trị băm',
);

