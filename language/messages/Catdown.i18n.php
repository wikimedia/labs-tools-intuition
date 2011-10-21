<?php
/**
 * Interface messages for catdown tool.
 *
 * @toolowner platonides
 */

$url = '~platonides/catdown/';

$messages = array();

$messages['en'] = array(
	'title' => 'Download of images by category',
	'subtitle' => 'The easy way to download the images in a category',
	/* Labels */
	'project' => 'Project:',
	'category' => 'Category:',
	'thumbnailing' => 'Thumbnailing',
	'max-width' => 'Maximum width:',
	'max-height' => 'Maximum height:',

	/* Errors */
	'invalid-width' => 'Invalid width',
	'invalid-height' => 'Invalid height',
	'no-such-project' => "There's no such project",
	'no-images' => 'There are no images in that category',
	'category-is-url' => 'The given category name looks like a URL. You need to specify the category name, not its url.',
	'category-contains-namespace' => 'You seem to have included the namespace along the category name. With the given name, the page would be available as [[Category:$1]].',
	'zip-failed' => 'Zip creation failed',
	'image-area-too-big' => '$1 is too big to create a thumbnail. Using full size.',

	'download-info' => "There are $1 images with an estimated size of $2",
	'download' => 'Download',

	'readme-contents' => 'The enclosing file $4 lists 
the images at the $1 category ( $2 )$3.

== Instructions for downloading all the listed images ==
The download time may vary from a few minutes to several hours.

Windows:
 Extract all the files in the same folder and run $5
 $6
Linux/Mac OS
 Extract all the files and open a terminal in that folder. Run sh $5
',
	'non-bundled-wget' => "Note: This version doesn't include wget for Windows. You will need to decompress 
to a folder with wget.exe or otherwise have wget in the PATH",
	'wget-info' => 'This file bundles a copy of wget $1 (for Windows platform). Wget is Free Software, 
under the terms of the GNU GENERAL PUBLIC LICENSE version 3.
There is a copy of the license below, and it is also available at http://www.gnu.org/licenses/gpl-3.0.txt

In case you are interested in getting the source code for this program, you can download it from
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
or some other GNU Mirror, see
 http://www.gnu.org/prep/ftp.html
',

	'scaling-none' => '', // Optional
	'scaling-width' => ', scaled to a maximum width of $1 pixels',
	'scaling-height' => ', scaled to a maximum height of $1 pixels',
	'scaling-both' => ', scaled to a maximum size of $1x$2 pixels',

	'script-filename' => 'download.bat', // Optional
	'readme-filename' => 'README.txt', // Optional
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'title' => 'Title for the tool',
	'subtitle' => 'Subtitle for the tool',
	'project' => 'Caption for choosing the project domain',
	'category' => 'Label for the input to choose the category to dump. It is recommended to make it the same as the local NS_CATEGORY, with trailing :',
	'thumbnailing' => 'Title for the inputs for max width and height',
	'max-width' => 'Label of the input to set the maximum width of the thumbnails.',
	'max-height' => 'Label of the input to set the maximum height of the thumbnails.',
	'invalid-width' => 'Shown when an invalid width is provided',
	'invalid-height' => 'Shown when an invalid height is provided',
	'no-such-project' => "Error given for wrong project (eg. 'qwerty.wikipedia')",
	'no-images' => "Shown when the category doesn't have any files",
	'category-is-url' => 'Shown when a full url is given as category name',
	'category-contains-namespace' => 'Shown when a category with namespace is given as category. $1: Given category name.',
	'zip-failed' => 'Generic error for when the zip creation failed',
	'image-area-too-big' => 'Shown when an image cannot be thumbnailed. See http://www.mediawiki.org/wiki/Manual:$wgMaxImageArea
Parameters: $1: Name of the image',
	'download-info' => 'Information shown previous to the download.
$1: Number of images.
$2: Estimated size of all the files in the system',
	'download' => 'Big link to download the zip',
	'readme-contents' => "Contents of the README file.
* $1: Category name
* $2: Category url
* $3 Result of scaling restrictions (one of scaling-none, scaling-width, scaling-height, scaling-both messages)
* $4: Filename of the list.
* $5 Name of the .bat script to run (script-filename msg)
* $6: Note if wget for Windows was not bundled (contents of non-bundled-wget message if \\'Bundle wget\\' was not checked)",
	'non-bundled-wget' => "Message added to the readme noting that the script won't work in Windows without a wget.exe (it is usually installed in other OS)",
	'wget-info' => 'Text appended to the readme explaining the rights you have on the wget binary.
$1: Version of wget

The content of the gpl-3.0 is appended below this text (untranslated, as it is required by the license).',
	'scaling-none' => "Added to readme-contents as $6 if there's no scaling",
	'scaling-width' => 'Added to readme-contents as $6 if the images are scaled to a maximum width.
$1: Maximum width in pixels',
	'scaling-height' => 'Added to readme-contents as $6 if the images are scaled to a maximum height.
$1: Maximum height in pixels',
	'scaling-both' => 'Added to readme-contents as $6 if the images are scaled to a maximum width and.
$1: Maximum width in pixels
$2: Maximum height in pixels',
	'script-filename' => 'Name of the script which downloads the files.',
	'readme-filename' => 'Name of the readme file',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title' => 'Bilder nach Kategorie herunterladen',
	'subtitle' => 'Die einfache Möglichkeit die in einer Kategorie enthaltenen Bilder herunterzuladen',
	'project' => 'Projekt:',
	'category' => 'Kategorie:',
	'thumbnailing' => 'Miniaturbilderstellung',
	'max-width' => 'Maximale Breite:',
	'max-height' => 'Maximale Höhe:',
	'invalid-width' => 'Die Breite ist ungültig.',
	'invalid-height' => 'Die Höhe ist ungültig.',
	'no-such-project' => 'Das angegebene Projekt ist nicht vorhanden.',
	'no-images' => 'In dieser Kategorie sind keine Bilder enthalten.',
	'category-is-url' => 'Der angegebenen Kategorienamen scheint eine URL zu sein. Bitte den Kategorienamen und nicht dessen URL angeben.',
	'category-contains-namespace' => 'Du scheinst neben dem Kategorienamen auch die Namensraumbezeichnung angegeben zu haben. Mit dem angegebene Namen würde die Seite als [[Category:$1]] verfügbar sein.',
	'zip-failed' => 'ZIP-Erstellung fehlgeschlagen',
	'image-area-too-big' => '$1 ist zu groß, um eine Miniaturansicht erstellen zu können. Daher wird die volle Bildgröße genutzt.',
	'download-info' => 'Es sind $1 Bilder mit eine geschätzten Gesamtgröße von $2 vorhanden.',
	'download' => 'Herunterladen',
	'non-bundled-wget' => 'Hinweis: Diese Version enthält nicht Wget für Windows. Du musst die Bilder mit wget.exe in einem Ordner
dekomprimieren oder Wget im Pfad bereitstellen.',
	'scaling-width' => ', auf eine maximale Breite von $1 Pixel skaliert',
	'scaling-height' => ', auf eine maximale Höhe von $1 Pixel skaliert',
	'scaling-both' => ', auf eine maximale Größe von $1x$2 Pixel skaliert',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'category-contains-namespace' => 'Sie scheinen neben dem Kategorienamen auch die Namensraumbezeichnung angegeben zu haben. Mit dem angegebene Namen würde die Seite als [[Category:$1]] verfügbar sein.',
);

