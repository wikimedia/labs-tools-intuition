<?php
/**
 * Interface messages for wlm tools.
 *
 * @toolowner platonides
 */

$url = '~platonides/wlm/';

$messages = array();

/**
 * English
 *
 * @author Platonides
 */
$messages['en'] = array(
	'title' => 'WLM files',

	/* uploads.php */
	'file' => 'Image',
	'monument-type' => 'Monument type',
	'monument-id' => 'Monument id',
	'province' => 'Province',
	'competes' => 'Competes',
	'author' => 'Author',
	'upload-time' => 'Upload time',
	'concursa' => 'Takes part in WLM',
	'no-concursa' => 'Outside WLM competition',
	'not-available' => 'Not available',
	'date-unknown' => 'Unknown',
	'total-images' => 'Total images: $1',
	'view-uncategorized-images' => 'View uncategorized images',
	'provide-id' => 'Provide a monument id to show the data available for that item',
	'show-images-bad-only' => 'Show only images outside the lists',
	'show-images-all' => 'Show all images',
	'search-monuments' => 'Search monuments',
	'view-frequency' => 'Popular monuments',

	/* ids.php */
	'id-label' => 'Monument id:',
	'date-format' => 'd-m-Y H:i:s',

	/* monumentos.php */
	'id-none' => '(None)',
	'monument-heading' => 'Monument',
	'count-heading' => 'Photographs',
	'bic-list' => 'List',
	'bic-gallery' => 'Gallery',

	/* gallery.php */
	'gallery-header' => 'Images for the monument with id $1.',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Platonides
 */
$messages['qqq'] = array(
	'title' => 'Title of the different pages',
	'file' => 'Header for the column showing the filenames.
{{Identical|File}}',
	'monument-type' => 'Header for the column showing the type of monument -BIC or BCIL-, basically the template used',
	'monument-id' => 'Header for the column showing the monument id',
	'province' => 'Header for the column showing the monument province',
	'competes' => 'Header for the column showing if the monument takes part in the competition',
	'author' => 'Header for the column showing the author listed for that image.
{{Identical|Author}}',
	'upload-time' => 'Upload time in CEST',
	'concursa' => 'Entry for the competes column if the monuments takes part in WLM (also see: no-concursa)',
	'no-concursa' => 'Entry for the competes column if the monuments does not take part in WLM (also see: concursa)',
	'not-available' => 'Shown for images not yet loaded',
	'date-unknown' => 'Showed when the',
	'total-images' => 'A message with the total number of images listed above, provided in $1',
	'view-uncategorized-images' => 'Caption for link to [[commons:Category:Cultural_heritage_monuments_in_Spain]]',
	'provide-id' => 'Caption for ids.php',
	'show-images-bad-only' => 'Text for the link for filtering to just images with a bad id',
	'show-images-all' => 'Text for the link for unfiltering the list to all images',
	'search-monuments' => 'Caption link for the tool to search monuments',
	'view-frequency' => 'Caption link for the tool to view monuments grouped by id',
	'id-label' => 'Label for ids.php input',
	'date-format' => 'Format in which to present the date in the upload-time column',
	'id-none' => "Column to show where there's no id",
	'monument-heading' => 'Heading for the identifier',
	'count-heading' => 'Heading for the count of images with that id',
	'bic-list' => 'Text of link which shows the list of monuments with the id of this row',
	'bic-gallery' => 'Text of link which shows the gallery of monuments with the id of this row',
	'gallery-header' => 'Text for the gallery pages. $1 is the selected monument id.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'title' => 'WLM-файлы',
	'file' => 'Файл',
	'monument-type' => 'Тып славутасьці',
	'monument-id' => 'Ідэнтыфікатар славутасьці',
	'province' => 'Правінцыя/вобласьць',
	'competes' => 'Спаборніцтвы',
	'author' => 'Аўтар',
	'upload-time' => 'Час загрузкі',
	'concursa' => 'Прыняць удзел у «Вікі любіць славутасьці»',
	'no-concursa' => 'Па-за спаборніцтвам «Вікі любіць славутасьці»',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title' => 'WLM-Dateien',
	'file' => 'Datei',
	'monument-type' => 'Art des Denkmals',
	'monument-id' => 'Kennung des Denkmals',
	'province' => 'Provinz',
	'competes' => 'Nimmt teil',
	'author' => 'Urheber',
	'upload-time' => 'Hochladezeitpunkt',
	'concursa' => 'Nimmt an WLM teil',
	'no-concursa' => 'Nimmt nicht an WLM teil',
	'not-available' => 'Nicht verfügbar',
	'date-unknown' => 'Unbekannt',
	'total-images' => 'Gesamtzahl an Bildern: $1',
	'view-uncategorized-images' => 'Nicht kategorisierte Bilder ansehen',
	'provide-id' => 'Die Kennung eines Denkmals angeben, um die für es verfügbaren Daten anzuzeigen',
	'show-images-bad-only' => 'Nur Bilder außerhalb der Listen anzeigen',
	'show-images-all' => 'Alle Bilder anzeigen',
	'search-monuments' => 'Denkmäler suchen',
	'view-frequency' => 'Beliebte Denkmäler',
	'id-label' => 'Kennung des Denkmals:',
	'id-none' => '(Keine)',
	'monument-heading' => 'Denkmal',
	'count-heading' => 'Fotos',
	'bic-list' => 'Liste',
	'bic-gallery' => 'Galerie',
	'gallery-header' => 'Bilder des Denkmals mit der Kennung $1.',
);

/** Spanish (Español)
 * @author Platonides
 */
$messages['es'] = array(
	'title' => 'Imágenes de Wiki Loves Monuments',
	'file' => 'Imagen',
	'monument-type' => 'Tipo de monumento',
	'monument-id' => 'Código',
	'province' => 'Provincia',
	'competes' => 'Competición',
	'author' => 'Autor',
	'upload-time' => 'Fecha',
	'concursa' => 'Concursa',
	'no-concursa' => 'No concursa',
	'not-available' => 'No disponible',
	'date-unknown' => 'Desconocida',
	'total-images' => 'Total de imágenes: $1',
	'view-uncategorized-images' => 'Ver imágenes sin categorizar',
	'provide-id' => 'Proporcione el identificador de un monumento para mostrar los datos disponibles sobre el mismo',
	'show-images-bad-only' => 'Mostrar sólo las imágenes con códigos incorrectos',
	'show-images-all' => 'Mostrar todas las imágenes',
	'search-monuments' => 'Buscar monumentos',
	'view-frequency' => 'Monumentos populares',
	'id-label' => 'BIC:',
	'id-none' => '(Sin identificador)',
	'monument-heading' => 'Monumento',
	'count-heading' => 'Fotografías',
	'bic-list' => 'Lista',
	'bic-gallery' => 'Galería',
	'gallery-header' => 'Imágenes del monumento con el registro $1.',
);

/** Galician (Galego)
 * @author Elisardojm
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Ficheiros de WLM',
	'file' => 'Ficheiro',
	'monument-type' => 'Tipo de monumento',
	'monument-id' => 'Identificador do monumento',
	'province' => 'Provincia',
	'competes' => 'Competición',
	'author' => 'Autor',
	'upload-time' => 'Data da carga',
	'concursa' => 'Participa en WLM',
	'no-concursa' => 'Fóra da competición de WLM',
	'not-available' => 'Non dispoñible',
	'date-unknown' => 'Descoñecido',
	'total-images' => 'Total de imaxes: $1',
	'view-uncategorized-images' => 'Ver as imaxes sen categoría',
	'provide-id' => 'Indique un número de identificación de monumento para mostrar os datos dispoñibles para ese elemento',
	'show-images-bad-only' => 'Mostrar só as imaxes fóra das listas',
	'show-images-all' => 'Mostrar todas as imaxes',
	'search-monuments' => 'Buscar monumentos',
	'view-frequency' => 'Monumentos populares',
	'id-label' => 'Identificador do monumento:',
	'id-none' => '(Ningún)',
	'monument-heading' => 'Monumento',
	'count-heading' => 'Fotografías',
	'bic-list' => 'Lista',
	'bic-gallery' => 'Galería',
	'gallery-header' => 'Imaxes para o monumento co identificador $1.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'WLM-Fichieren',
	'file' => 'Fichier',
	'monument-type' => 'Type vu Monument',
	'monument-id' => 'ID vum Monument',
	'province' => 'Provënz',
	'author' => 'Auteur',
	'not-available' => 'Net disponibel',
	'date-unknown' => 'Onbekannt',
	'total-images' => 'Zuel vu Biller: $1',
	'view-uncategorized-images' => 'Net kategoriséiert Biller weisen',
	'show-images-all' => 'All Biller weisen',
	'search-monuments' => 'Monumenter sichen',
	'view-frequency' => 'Beléifte Monumenter',
	'id-none' => '(Keng)',
	'monument-heading' => 'Monument',
	'count-heading' => 'Photographen',
	'bic-list' => 'Lëscht',
	'bic-gallery' => 'Galerie',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'WLM-податотеки',
	'file' => 'Податотека',
	'monument-type' => 'Тип на споменик',
	'monument-id' => 'Назнака на споменикот',
	'province' => 'Покраина',
	'competes' => 'Конкурира',
	'author' => 'Автор',
	'upload-time' => 'Време на подигањето',
	'concursa' => 'Учествува во WLM',
	'no-concursa' => 'Надвор од конкурсот на WLM',
	'not-available' => 'Недостапно',
	'date-unknown' => 'Непознат',
	'total-images' => 'Вкупно слики: $1',
	'view-uncategorized-images' => 'Некатегоризирани слики',
	'provide-id' => 'Наведете назнака на споменикот за да ги добиете расположивите податоци за тој објект',
	'show-images-bad-only' => 'Прикажи само слики вон списоците',
	'show-images-all' => 'Сите слики',
	'search-monuments' => 'Пребарување на споменици',
	'view-frequency' => 'Популарни споменици',
	'id-label' => 'Назнака на споменикот:',
	'date-format' => 'j F Y, H:i ч. и s сек.',
	'id-none' => '(Нема)',
	'monument-heading' => 'Споменик',
	'count-heading' => 'Фотографии',
	'bic-list' => 'Список',
	'bic-gallery' => 'Галерија',
	'gallery-header' => 'Слики на споменикот со назнака $1.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'Fail WLM',
	'file' => 'Fail',
	'monument-type' => 'Jenis monumen',
	'monument-id' => 'Id monumen',
	'province' => 'Wilayah',
	'competes' => 'Pertandingan',
	'author' => 'Pengarang',
	'upload-time' => 'Waktu muat naik',
	'concursa' => 'Menyertai WLM',
	'no-concursa' => 'Di luar pertandingan WLM',
	'not-available' => 'Tiada',
	'date-unknown' => 'Tidak diketahui',
	'total-images' => 'Jumlah imej: $1',
	'view-uncategorized-images' => 'Lihat imej yang belum dikategorikan',
	'provide-id' => 'Nyatakan id monumen untuk menunjukkan data yang ada untuk item itu',
	'show-images-bad-only' => 'Tunjukkan imej di luar senarai sahaja',
	'show-images-all' => 'Tunjukkan semua imej',
	'search-monuments' => 'Cari monumen',
	'view-frequency' => '(Tiada)',
	'id-label' => 'Monumen',
	'id-none' => '(Tiada)',
	'monument-heading' => 'Monumen',
	'count-heading' => 'Gambar',
	'bic-list' => 'Senarai',
	'bic-gallery' => 'Galeri',
	'gallery-header' => 'Imej untuk monumen id $1.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'WLM-bestanden',
	'file' => 'Bestand',
	'monument-type' => 'Monumenttype',
	'monument-id' => 'Monument-ID',
	'province' => 'Provincie',
	'competes' => 'In wedstrijd',
	'author' => 'Auteur',
	'upload-time' => 'Uploadtijd',
	'concursa' => 'Neemt deel aan WLM',
	'no-concursa' => 'Buiten WLM-wedstrijd',
	'not-available' => 'Niet beschikbaar',
	'date-unknown' => 'Onbekend',
	'total-images' => 'Totaal aantal afbeeldingen: $1',
	'view-uncategorized-images' => 'Afbeeldingen zonder categorieën bekijken',
	'provide-id' => 'Geef een monument-ID op om de beschikbare gegevens ervoor te bekijken',
	'show-images-bad-only' => 'Alleen afbeeldingen buiten de lijsten weergeven',
	'show-images-all' => 'Alle afbeeldingen weergeven',
	'search-monuments' => 'Monumenten zoeken',
	'view-frequency' => 'Populaire monumenten',
	'id-label' => 'Monument-ID:',
	'id-none' => '(Geen)',
	'monument-heading' => 'Monument',
	'count-heading' => 'Afbeeldingen',
	'bic-list' => 'Lijst',
	'bic-gallery' => 'Galerij',
	'gallery-header' => 'Afbeeldingen voor het monument met ID $1.',
);

/** Polish (Polski)
 * @author Woytecr
 */
$messages['pl'] = array(
	'file' => 'Zdjęcie',
	'monument-type' => 'Typ zabytku',
	'monument-id' => 'Id zabytku',
	'province' => 'Województwo',
	'author' => 'Autor',
	'upload-time' => 'Czas przesłania',
	'concursa' => 'Weź udział w WLM',
	'not-available' => 'Niedostępne',
	'date-unknown' => 'Nieznana',
	'view-uncategorized-images' => 'Zobacz nieskategoryzowane zdjęcia',
	'show-images-all' => 'Pokaż wszystkie zdjęcia',
	'search-monuments' => 'Szukaj zabytków',
	'id-none' => '(Brak)',
	'monument-heading' => 'Zabytek',
	'count-heading' => 'Fotografie',
	'bic-list' => 'Lista',
	'bic-gallery' => 'Galeria',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'WLM датотеке',
	'file' => 'Датотека',
	'monument-type' => 'Врста споменика',
	'monument-id' => 'ИБ споменика',
	'province' => 'Покрајина',
	'competes' => 'Такмичи се',
	'author' => 'Аутор',
	'upload-time' => 'Време отпремања',
	'concursa' => 'Учествује у WLM',
	'no-concursa' => 'Ван такмичења WLM',
	'not-available' => 'Недоступно',
	'date-unknown' => 'Непознато',
	'total-images' => 'Укупно слика: $1',
	'view-uncategorized-images' => 'Погледај несврстане слике',
	'provide-id' => 'Наведите ИБ споменика да погледате податке о њему',
	'show-images-bad-only' => 'Прикажи само слике ван спискова',
	'show-images-all' => 'Прикажи све слике',
	'search-monuments' => 'Претрага споменика',
	'view-frequency' => 'Популарни споменици',
	'id-label' => 'ИБ споменика:',
	'id-none' => '(нема)',
	'monument-heading' => 'Споменик',
	'count-heading' => 'Фотографије',
	'bic-list' => 'Списак',
	'bic-gallery' => 'Галерија',
	'gallery-header' => 'Слике споменика чији је ИБ $1.',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'WLM datoteke',
	'file' => 'Datoteka',
	'monument-type' => 'Vrsta spomenika',
	'monument-id' => 'IB spomenika',
	'province' => 'Pokrajina',
	'competes' => 'Takmiči se',
	'author' => 'Autor',
	'upload-time' => 'Vreme otpremanja',
	'concursa' => 'Učestvuje u WLM',
	'no-concursa' => 'Van takmičenja WLM',
	'not-available' => 'Nedostupno',
	'date-unknown' => 'Nepoznato',
	'total-images' => 'Ukupno slika: $1',
	'view-uncategorized-images' => 'Pogledaj nesvrstane slike',
	'provide-id' => 'Navedite IB spomenika da pogledate podatke o njemu',
	'show-images-bad-only' => 'Prikaži samo slike van spiskova',
	'show-images-all' => 'Prikaži sve slike',
	'search-monuments' => 'Pretraga spomenika',
	'view-frequency' => 'Popularni spomenici',
	'id-label' => 'IB spomenika:',
	'id-none' => '(nema)',
	'monument-heading' => 'Spomenik',
	'count-heading' => 'Fotografije',
	'bic-list' => 'Spisak',
	'bic-gallery' => 'Galerija',
	'gallery-header' => 'Slike spomenika čiji je IB $1.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'Tập tin WLM',
	'file' => 'Tập tin',
	'monument-type' => 'Loại đài tưởng niệm',
	'monument-id' => 'ID của đài tưởng niệm',
	'province' => 'Tỉnh',
	'competes' => 'Thi đấu',
	'author' => 'Tác giả',
	'upload-time' => 'Lúc tải lên',
	'concursa' => 'Tham gia vào WLM',
	'no-concursa' => 'Ngoài cuộc thi WLM',
	'not-available' => 'Không có sẵn',
	'date-unknown' => 'Không rõ',
	'total-images' => 'Tổng số hình ảnh: $1',
	'view-uncategorized-images' => 'Xem hình ảnh chưa phân loại',
	'provide-id' => 'Nhập ID của đài tưởng niệm để xem dữ liệu có sẵn về đài tưởng niệm đó',
	'show-images-bad-only' => 'Chỉ hiện các hình ngoài các danh sách',
	'show-images-all' => 'Hiện tất cả các hình ảnh',
	'search-monuments' => 'Tìm kiếm đài tưởng niệm',
	'view-frequency' => 'Đài tưởng niệm phổ biến',
	'id-label' => 'ID của đài tưởng niệm',
	'id-none' => '(Không có)',
	'monument-heading' => 'Đài tưởng niệm',
	'count-heading' => 'Hình chụp',
	'bic-list' => 'Danh sách',
	'bic-gallery' => 'Album',
	'gallery-header' => 'Hình ảnh của đài tưởng niệm với ID $1.',
);

