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
	'file' => 'File',
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

/**
 * Spanish
 *
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
	'id-label' => 'BIC:',
	'show-images-bad-only' => 'Mostrar sólo las imágenes con códigos incorrectos',
	'show-images-all' => 'Mostrar todas las imágenes',
	'search-monuments' => 'Buscar monumentos',
	'view-frequency' => 'Monumentos populares',

	'id-none' => '(Sin identificador)',
	'monument-heading' => 'Monumento',
	'count-heading' => 'Fotografías',
	'bic-list' => 'Lista',
	'bic-gallery' => 'Galería',

	'gallery-header' => 'Imágenes del monumento con el registro $1.',
);

/** 
 * Message documentation (Message documentation)
 * @author Platonides
 */
$messages['qqq'] = array(
	'title' => 'Title of the different pages',

	/* uploads.php */
	'file' => 'Header for the column showing the filenames',
	'monument-type' => 'Header for the column showing the type of monument -BIC or BCIL-, basically the template used',
	'monument-id' => 'Header for the column showing the monument id',
	'province' => 'Header for the column showing the monument province',
	'competes' => 'Header for the column showing if the monument takes part in the competition',
	'author' => 'Header for the column showing the author listed for that image',
	'upload-time' => 'Upload time in CEST',
	'concursa' => 'Entry for the competes column if the monuments takes part in WLM (also see: no-concursa)',
	'no-concursa' => 'Entry for the competes column if the monuments does not take part in WLM (also see: concursa)',
	'not-available' => 'Shown for images not yet loaded',
	'date-unknown' => 'Showed when the ',
	'total-images' => 'A message with the total number of images listed above, provided in $1',
	'view-uncategorized-images' => 'Caption for link to [[commons:Category:Cultural_heritage_monuments_in_Spain]]',
	'date-format' => 'Format in which to present the date in the upload-time column',
	'show-images-bad-only' => 'Text for the link for filtering to just images with a bad id',
	'show-images-all' => 'Text for the link for unfiltering the list to all images',
	'search-monuments' => 'Caption link for the tool to search monuments',
	'view-frequency' => 'Caption link for the tool to view monuments grouped by id',

	/* ids.php */
	'provide-id' => 'Caption for ids.php',
	'id-label' => 'Label for ids.php input',

	/* monumentos.php */
	'id-none' => 'Column to show where there\'s no id',
	'monument-heading' => 'Heading for the identifier',
	'count-heading' => 'Heading for the count of images with that id',
	'bic-list' => 'Text of link which shows the list of monuments with the id of this row',
	'bic-gallery' => 'Text of link which shows the gallery of monuments with the id of this row',

	/* gallery.php */
	'gallery-header' => 'Text for the gallery pages. $1 is the selected monument id.',
);


