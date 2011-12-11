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
	'category-is-url' => 'The given category name looks like a URL. You need to specify the category name, not its URL.',
	'category-contains-namespace' => 'You seem to have included the namespace along the category name. With the given name, the page would be available as [[Category:$1]].',
	'zip-failed' => 'Zip creation failed',
	'image-area-too-big' => '$1 is too big to create a thumbnail. Using full size.',

	'download-info' => "{{plural: $1|There is one image|There are $1 images}}, with an estimated size of $2",
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
	'scaling-width' => ', scaled to a maximum width of $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', scaled to a maximum height of $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', scaled to a maximum size of $1x$2 pixels',

	'script-filename' => 'download.bat', // Optional
	'readme-filename' => 'README.txt', // Optional
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Platonides
 * @author Purodha
 * @author Siebrand
 */
$messages['qqq'] = array(
	'title' => 'Title for the tool',
	'subtitle' => 'Subtitle for the tool',
	'project' => 'Caption for choosing the project domain.
{{Identical|Project}}',
	'category' => 'Label for the input to choose the category to dump. It is recommended to make it the same as the local NS_CATEGORY, with trailing :
{{Identical|Category}}',
	'thumbnailing' => 'Title for the inputs for max width and height',
	'max-width' => 'Label of the input to set the maximum width of the thumbnails.',
	'max-height' => 'Label of the input to set the maximum height of the thumbnails.',
	'invalid-width' => 'Shown when an invalid width is provided',
	'invalid-height' => 'Shown when an invalid height is provided',
	'no-such-project' => "Error given for wrong project (eg. 'qwerty.wikipedia')",
	'no-images' => "Shown when the category doesn't have any files",
	'category-is-url' => 'Shown when a full URL is given as category name',
	'category-contains-namespace' => 'Shown when a category with namespace is given as category. Paramters:
* $1: Given category name.',
	'zip-failed' => 'Generic error for when the zip creation failed',
	'image-area-too-big' => 'Shown when an image cannot be thumbnailed. See http://www.mediawiki.org/wiki/Manual:$wgMaxImageArea
Parameters: $1: Name of the image',
	'download-info' => 'Information shown on the download page. Parameters:
* $1: Number of images.
* $2: Estimated size of all the files in the system (in which unit?)',
	'download' => 'Big link to download the zip.
{{Identical|Download}}',
	'readme-contents' => "Contents of the README file. The result will be shown to the user as plain text (there's no wikitext parsing).
* $1: Category name
* $2: Category URL
* $3: Result of scaling restrictions (one of {{msg-toolserver|Catdown-scaling-none|notext=1}}, {{msg-toolserver|Catdown-scaling-width|notext=1}}, {{msg-toolserver|Catdown-scaling-height|notext=1}}, {{msg-toolserver|Catdown-scaling-both|notext=1}} messages). To keep the sentence meaningful, you probably not want to place a space before this. Remember to translate scaling-width, scaling-height, scaling-both, or the users may face with half sentence in another language.
* $4: Filename of the list.
* $5 Name of the .bat script to run (script-filename msg)
* $6: Note if wget for Windows was not bundled (contents of non-bundled-wget message if 'Bundle wget' was not checked)",
	'non-bundled-wget' => "Message added to the readme noting that the script won't work in Windows without a wget.exe (it is usually installed in other OS)",
	'wget-info' => 'Text appended to the readme explaining the rights you have on the wget binary.
* $1: Version of wget

The content of the gpl-3.0 is appended below this text (untranslated, as it is required by the license).',
	'scaling-none' => "{{optional}}

Added to readme-contents as $6 if there's no scaling",
	'scaling-width' => 'Added to readme-contents as $6 if the images are scaled to a maximum width.
$1: Maximum width in pixels',
	'scaling-height' => 'Added to readme-contents as $6 if the images are scaled to a maximum height.
$1: Maximum height in pixels',
	'scaling-both' => 'Added to readme-contents as $6 if the images are scaled to a maximum width and.
* $1: Maximum width in pixels
* $2: Maximum height in pixels',
	'script-filename' => 'Name of the script which downloads the files.',
	'readme-filename' => 'Name of the readme file',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title' => 'Шикилон бо жәј бә категоријон',
	'category' => 'Категоријә:',
	'download' => 'Бо жәј',
);

/** Arabic (العربية)
 * @author OsamaK
 */
$messages['ar'] = array(
	'category' => 'التصنيف:',
);

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => "Descarga d'imaxes por categoría",
	'subtitle' => "La manera fácil de descargar les imaxes d'una categoría",
	'project' => 'Proyeutu:',
	'category' => 'Categoría:',
	'thumbnailing' => 'Miniatures',
	'max-width' => 'Anchor máximu:',
	'max-height' => 'Altor máximu:',
	'invalid-width' => 'Anchor inválidu',
	'invalid-height' => 'Altor inválidu',
	'no-such-project' => 'Esi proyeutu nun esiste',
	'no-images' => 'Nun hai imaxes nesa categoría',
	'category-is-url' => 'El nome de categoría conseñáu paez una URL. Tienes de dar el nome de la categoría, non la so URL.',
	'category-contains-namespace' => "Paez qu'incluísti l'espaciu de nomes xunto col nome de la categoría. Col nome dau, la páxina taría disponible como [[Category:$1]].",
	'zip-failed' => 'Falló la creación del Zip',
	'image-area-too-big' => '"$1" ye demasiao grande pa crear una miniatura. Usando\'l tamañu completu.',
	'download-info' => '{{plural: $1|Hai una imaxe|Hai $1 imaxes}}, con un tamañu estimáu de $2',
	'download' => 'Descargar',
	'readme-contents' => 'El ficheru contenedor "$4" llista
les imaxes de la categoría "$1" ($2)$3.

== Instrucciones pa descargar toles imaxes ==
El tiempu de descarga pue variar ente unos minutos y delles hores.

Windows:
 Estrái tolos ficheros nel mesmu direutoriu y executa $5
 $6
Linux/Mac OS
 Estrái tolos ficheros y abri un terminal nesi direutoriu. Executa sh $5',
	'non-bundled-wget' => "Nota: Esta versión nun inclúi wget pa Windows. Tendrás de descomprimir
a un direutoriu con wget.exe o, d'otra miente, tener wget nel PATH",
	'wget-info' => "Esti ficheru contién una copia de wget $1 (pa la plataforma Windows). Wget ye software llibre,
baxo los términos de la LLICENCIA PÚBLICA XENERAL GNU versión 3.
Mas abaxo hai una copia de la llicencia, que tamién ta disponible en http://www.gnu.org/licenses/gpl-3.0.txt

En casu de que t'interese consiguir el códigu fonte d'esti programa, pues descargalu de
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o en dalgún otru espeyu de GNU, visita
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ', escalaes a un anchor máximu de $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', escalaes a un altor máximu de $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', escalaes a un tamañu máximu de $1x$2 pixels',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'title' => 'Загрузка выяваў з катэгорыі',
	'subtitle' => 'Просты шлях загрузкі выяваў ў катэгорыі',
	'project' => 'Праект:',
	'category' => 'Катэгорыя:',
	'thumbnailing' => 'Мініятурызацыя',
	'max-width' => 'Максымальная шырыня:',
	'max-height' => 'Максымальная вышыня:',
	'invalid-width' => 'Няслушная шырыня',
	'invalid-height' => 'Няслушная вышыня',
	'no-such-project' => 'Няма такога праекту',
	'no-images' => 'У гэтай катэгорыі няма выяваў',
	'category-is-url' => 'Пададзеная назва катэгорыі выглядае як URL-адрас. Вам неабходна пазначыць назву катэгорыі а не URL-адрас.',
	'category-contains-namespace' => 'Выглядае, што назва катэгорыі зьмяшчае прастору назваў. З пададзенай назвай старонка будзе даступная як [[Category:$1]].',
	'zip-failed' => 'Немагчыма стварыць архіў у фармаце ZIP',
	'image-area-too-big' => '$1 занадта вялікая каб стварыць мініятуру. Будзе выкарыстоўвацца ў поўным памеры.',
	'download-info' => '{{plural: $1|Ёсьць $1 выява|Ёсьць $1 выявы|Ёсьць $1 выяваў}}, з меркаваным памерам $2',
	'download' => 'Загрузіць',
	'readme-contents' => 'Укладзены файл $4 утрымлівае сьпісы 
выяваў, якія знаходзяцца ў катэгорыях $1 ( $2 )$3.

== Інструкцыі па загрузцы ўсіх файлаў са сьпісу ==
Час загрузкі можа вагацца ад некалькі хвілінаў да некалькіх гадзінаў.

Windows:
 Распакаваць усе файлы ў тую ж самую папку і запусьціць $5
 $6
Linux/Mac OS
 Распакаваць усе файлы і адкройце тэрмінал у той жа дырэкторыі. Запусьціце sh $5',
	'non-bundled-wget' => 'Заўвага: Гэтая вэрсія не ўтрымлівае wget для Windows. Вам трэба будзе распакаваць у папку з wget.exe ці трэба мець шлях да wget у PATH',
	'wget-info' => 'Гэты файл утрымлівае копію wget $1 (для плятформы Windows). Wget — вольнае праграмнае забесьпячэньне, якое распаўсюджваецца на ўмовах ліцэнзіі GNU GENERAL PUBLIC вэрсіі 3.
Копія ліцэнзіі знаходзіцца ніжэй, і таксама даступная на http://www.gnu.org/licenses/gpl-3.0.txt

У выпадку, калі Вы жадаеце атрымаць крынічны код гэтай праграмы, Вы можаце загрузіць яго з
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ці з некаторых іншых люстэрках GNU, глядзіце
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', маштабаваны да максымальнай шырыні ў $1 {{plural:$1|піксэль|піксэлі|піксэляў}}',
	'scaling-height' => ', маштабаваны да максымальнай вышыні ў $1 {{plural:$1|піксэль|піксэлі|піксэляў}}',
	'scaling-both' => ', маштабаваны да максымальнага памеру ў $1×$2 {{plural:$2|піксэль|піксэлі|піксэляў}}',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'title' => 'বিষয়শ্রেণীর ভিত্তিতে চিত্র ডাউনলোড',
	'subtitle' => 'কোন বিষয়শ্রেণীর চিত্র ডাউনলোডের সহজ উপায়',
	'category' => 'বিষয়শ্রেণী:',
	'download' => 'ডাউনলোড',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'title' => 'Pellgargañ skeudennoù dre rummadoù',
	'subtitle' => 'An doare aesañ da bellgargañ skeudennoù en ur rummad',
	'project' => 'Raktres :',
	'category' => 'Rummad :',
	'thumbnailing' => 'Munudiñ',
	'max-width' => 'Ledander brasañ :',
	'max-height' => 'Uhelder brasañ :',
	'invalid-width' => 'Ledander direizh',
	'invalid-height' => 'Uhelder direizh',
	'no-such-project' => "Ar raktres-mañ n'eus ket anezhañ",
	'no-images' => "N'eus skeudenn ebet er rummad-mañ",
	'category-is-url' => "Tres un URL zo gant anv ar rummad zo bet lakaet. Ret eo deoc'h merkañ anv ar rummad ha neket an URL anezhañ.",
	'category-contains-namespace' => "Evit doare eo bet lakaet ganeoc'h an esaouenn anv asambles gant anv ar rummad. Gant an anv roet e tlefe ar bajenn bezañ hegerz evel [[Category:$1]].",
	'zip-failed' => "C'hwitet eo bet krouiñ ar ZIP",
	'image-area-too-big' => 'Re vras eo $1 da grouiñ ur munud. Ober gant ar vent leun.',
	'download-info' => '{{plural: $1|Ur skeudenn zo dezhi|$1 skeudenn zo dezho}} ar vent a $2 pe war-dro',
	'download' => 'Pellgargañ',
	'readme-contents' => "Renabliñ a ra ar restr $4 enframmet 
ar skeudennoù zo er rummad $1 ( $2 )$3.

== Kuzulioù evit pellgargañ an holl skeudennoù rollet ==
An amzer bellgargañ a c'hall bezañ cheñch-dicheñch, eus un nebeud munutennoù betek meur a eurvezh.

Windows :
 Eztennañ an holl restroù en hevelep renkell ha lañsañ $5
 $6
Linux/Mac OS
 Eztennañ an holl restroù ha digeriñ un dermenell er renkell-se. Lañsañ sh $5",
	'non-bundled-wget' => "Notenn : N'eo ket skoret wget evit Windows er stumm-mañ. Ret e vo deoc'h diwaskañ 
en ur c'havlec'h gant wget.exe pe neuze kaout wget er PATH",
	'wget-info' => "Un eilskrid eus wget $1 (evit savennoù Windows) zo er restr. Ur meziant frank eo Wget, 
dindan termenoù ar GNU GENERAL PUBLIC LICENSE stumm 3.
Dindan ez eus un eilskrid eus an aotre-implijout a c'haller kavout ivez war http://www.gnu.org/licenses/gpl-3.0.txt

Mard oc'h dedennet da dapout kod tarzh ar programm-mañ e c'hallit e bellgargañ diwar
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
pe melezourioù GNU all, sellit ouzh
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ', skeuliaouet gant ul ledander brasañ a $1 {{plural:$1|piksel|piksel}}',
	'scaling-height' => ', skeuliaouet gant un uhelder brasañ a $1 {{plural:$1|piksel|piksel}}',
	'scaling-both' => ", skeuliaouet d'ur vent vrasañ a $1x$2 piksel",
);

/** Catalan (Català)
 * @author Gemmaa
 */
$messages['ca'] = array(
	'title' => 'Descàrrega de les imatges per categoria',
	'subtitle' => 'La manera fàcil de descarregar les imatges en una categoria',
	'project' => 'Projecte:',
	'category' => 'Categoria:',
	'thumbnailing' => 'Miniatures',
	'max-width' => 'Amplada màxima:',
	'max-height' => 'Altura màxima:',
	'invalid-width' => 'Amplada no és vàlida',
	'invalid-height' => 'Alçada no és vàlid',
	'no-such-project' => 'No hi ha cap tal projecte',
	'no-images' => 'No hi ha cap imatge en aquella Categoria',
	'category-is-url' => "El nom de la categoria determinada s'assembla a un URL. Heu d'especificar el nom de categoria, no l'URL.",
	'category-contains-namespace' => "Sembla que han d'incloure l'espai de nom en el nom de la categoria. Amb el nom, la pàgina estaria disponible com [[Category:$1]].",
	'zip-failed' => 'Creació de cremalleres ha fallat',
	'image-area-too-big' => '$1és massa gran per crear una ungla. Ús de mida completa.',
	'download-info' => '{{plural:  $1 |Hi ha un image|Hi ha  $1  imatges}}, amb una mida aproximada de$2',
	'download' => 'Descarregar',
	'readme-contents' => "L'arxiu de enclosing  $4  en les llistes de
 les imatges a la  $1  Categoria (  $2  ) $3 .

 = = instruccions per descarregar totes les imatges que figuren = =
El temps de descàrrega pot variar des d'uns quants minuts a unes quantes hores.

Windows:
 Extreu tots els arxius a la mateixa carpeta i cursa  $5 
 $6
Linux/Mac OS
 Extreu tots els arxius i obrir un terminal d'aquesta carpeta. Executar sh$5",
	'non-bundled-wget' => 'Nota: Aquesta versió no inclou wget per a Windows. Vostè haurà de descomprimir
 a una carpeta amb wget. exe o en cas contrari han wget en el camí',
	'wget-info' => 'Aquest fitxer farcells una còpia de wget  $1  (per a plataforma de Windows). Wget és programari lliure
 sota els termes de la GNU GENERAL PUBLIC LICENSE version 3.
Hi ha una còpia de la llicència sota, i també està disponible a http://www.gnu.org/licenses/gpl-3.0.txt

En cas que vostè està interessat en obtenir el codi font per a aquest programa, pot descarregar des de
 http://toolserver.org/~platonides/catdown/wget-sources.php?version= $1 
 http://FTP.GNU.org/GNU/wget/wget- $1 . tar.xz
 FTP://FTP.GNU.org/GNU/wget/wget- $1 . tar.xz
 o alguns altres GNU mirall, veure
 http://www.GNU.org/PReP/FTP.html',
	'scaling-width' => ', reduït a una màxima amplada de  $1  {{plural: $1 |pixel|pixels}}',
	'scaling-height' => ', reduït a una alçada màxima de  $1  {{plural: $1 |pixel|pixels}}',
	'scaling-both' => ', reduït a una mida màxima de  $1 x $2  píxels',
);

/** Danish (Dansk)
 * @author Tjernobyl
 */
$messages['da'] = array(
	'title' => 'Download af billeder efter kategori',
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
	'download-info' => '{{PLURAL:$1|Es ist ein Bild|Es sind $1 Bilder}} mit eine geschätzten Gesamtgröße von $2 vorhanden.',
	'download' => 'Herunterladen',
	'readme-contents' => 'Die Datei $4 listet die Bilder in der Kategorie $1 auf ($2) $3.

== Anleitung zum Herunterladen der aufgelisteten Bilder ==
Die für das Herunterladen benötigte Zeit kann zwischen wenigen Minuten und mehreren Stunden liegen.

Windows:
Alle Dateien in den selben Ordner entpacken und $5 ausführen.
$6
Linux/Mac OS:
Alle Dateien entpacken und ein Terminal öffnen. Danach sh $5 ausführen.',
	'non-bundled-wget' => 'Hinweis: Diese Version enthält nicht Wget für Windows. Du musst die Bilder mit wget.exe in einem Ordner
dekomprimieren oder Wget im Pfad bereitstellen.',
	'wget-info' => 'Diese Datei enthält eine Kopie von Wget $1 (für Windows). Wget ist Freie Software gemäß der
Lizenz „GNU GENERAL PUBLIC LICENSE“ in Version 3.
Eine Kopie der Lizenz befindet sich unten, ist aber auch unter der URL http://www.gnu.org/licenses/gpl-3.0.txt verfügbar.

Sofern du daran interessiert bist den Quellcode dieses Programms zu bekommen, kannst du ihn an folgenden Stellen herunterladen:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
Es gibt auch andere GNU-Mirror. Siehe hierzu
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', auf eine maximale Breite von {{PLURAL:$1|einem Pixel|$1 Pixel}} skaliert',
	'scaling-height' => ', auf eine maximale Höhe von {{PLURAL:$1|einem Pixel|$1 Pixel}} skaliert',
	'scaling-both' => ', auf eine maximale Größe von $1x$2 Pixel skaliert',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'category-contains-namespace' => 'Sie scheinen neben dem Kategorienamen auch die Namensraumbezeichnung angegeben zu haben. Mit dem angegebene Namen würde die Seite als [[Category:$1]] verfügbar sein.',
	'wget-info' => 'Diese Datei enthält eine Kopie von Wget $1 (für Windows). Wget ist Freie Software gemäß der
Lizenz „GNU GENERAL PUBLIC LICENSE“ in Version 3.
Eine Kopie der Lizenz befindet sich unten, ist aber auch unter der URL http://www.gnu.org/licenses/gpl-3.0.txt verfügbar.

Sofern Sie daran interessiert sind den Quellcode dieses Programms zu bekommen, können Sie ihn an folgenden Stellen herunterladen:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
Es gibt auch andere GNU-Mirror. Siehe hierzu
 http://www.gnu.org/prep/ftp.html',
);

/** Spanish (Español)
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'title' => 'Descarga de imágenes por categoría',
	'subtitle' => 'La forma más fácil de descargar las imágenes en una categoría',
	'project' => 'Proyecto:',
	'category' => 'Categoría:',
	'thumbnailing' => 'Miniatura',
	'max-width' => 'Ancho máximo:',
	'max-height' => 'Altura máxima:',
	'invalid-width' => 'Ancho no válido',
	'invalid-height' => 'Altura no válida',
	'no-such-project' => 'No hay ningún proyecto de ese tipo',
	'no-images' => 'No hay imágenes en esta categoría',
	'category-is-url' => 'El nombre de la categoría dada es parecida a una dirección URL. Es necesario especificar el nombre de la categoría, no su dirección URL.',
	'category-contains-namespace' => 'Al parecer ha incluido el espacio de nombres junto al nombre de la categoría. Con el nombre dado, la página estaría disponible como [[Category:$1]].',
	'zip-failed' => 'Error en la creación del ZIP',
	'image-area-too-big' => '"$1" es demasiado grande para crear una miniatura. Use el tamaño completo.',
	'download-info' => '{{plural: $1|Hay un imagen|Hay $1 imágenes}}, con un tamaño estimado de $2',
	'download' => 'Descargar',
	'readme-contents' => 'El archivo "$4" incluido enumera
las imágenes en la categoría "$1" ($2)$3.

== Instrucciones para descargar todo la lista de imágenes ==
El tiempo de descarga puede variar desde unos minutos a varias horas.

Windows:
 Extraiga todos los archivos en la misma carpeta y ejecute $5
 $6
Linux/Mac OS:
 Extraiga todos los archivos y abra un  terminal en esa carpeta. Ejecute $5',
	'non-bundled-wget' => 'Nota: Esta versión no incluye wget para Windows. Deberás descomprimir
en una carpeta con wget.exe o de lo contrario tener wget en la RUTA',
	'wget-info' => 'Este archivo contiene una copia de wget $1 (para la plataforma Windows). Wget es software libre,
bajo los términos de la LICENCIA PÚBLICA GENERAL DE GNU versión 3.
A continuación hay una copia de la licencia e también está disponible en http://www.gnu.org/licenses/gpl-3.0.txt

En caso de estar interesado en el código fuente de este programa, puede descargarlo en
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o en algún otro espejo de GNU, ver
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', escaladas a un ancho máximo de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-height' => ', escaladas a una altura máxima de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-both' => ', escaladas a un tamaño máximo de $1x$2 píxeles',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'project' => 'Proiektua:',
	'category' => 'Kategoria:',
	'max-width' => 'Zabalera maximoa:',
	'max-height' => 'Altuera maximoa:',
	'zip-failed' => 'Ezin izan da Zip-a sortu',
	'download' => 'Jaitsi',
);

/** Persian (فارسی)
 * @author Leyth
 * @author Reza1615
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'subtitle' => 'راهی آسان برای دانلود تصاویر در یک رده',
	'project' => 'پروژه:',
	'category' => 'رده:',
	'max-width' => 'حداکثر پهنا:',
	'no-such-project' => 'چنین پروژه‌ای وجود ندارد',
	'download' => 'بارگیری',
);

/** Faroese (Føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'title' => 'Download av myndum eftir bólki',
	'project' => 'Verkætlan:',
	'category' => 'Bólkur:',
);

/** French (Français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'title' => "Téléchargement d'images par catégorie",
	'subtitle' => 'La manière la plus simple pour télécharger les images dans une catégorie',
	'project' => 'Projet :',
	'category' => 'Catégorie:',
	'thumbnailing' => 'Vignettage',
	'max-width' => 'Largeur maximale:',
	'max-height' => 'Hauteur maximale:',
	'invalid-width' => 'Largeur non valide',
	'invalid-height' => 'Hauteur non valide',
	'no-such-project' => "Ce projet n'existe pas",
	'no-images' => "Il n'y a pas d'images dans cette catégorie",
	'category-is-url' => 'Le nom de catégorie fourni ressemble à une URL. Vous devez spécifier le nom de la catégorie, non pas son URL.',
	'category-contains-namespace' => "Il semble que vous avez inclus l'espace de nom avec le nom de la catégorie. Avec le nom fourni, la page serait disponible à [[Category:$1]].",
	'zip-failed' => 'Création du zip échouée',
	'image-area-too-big' => '$1 est trop gros pour créer une vignette. Utilisez la taille réelle.',
	'download-info' => '{{plural: $1|Il y a une image|Il y a $1 images}}, avec une taille estimée de $2',
	'download' => 'Télécharger',
	'readme-contents' => 'Le fichier conteneur $4 liste les images de la catégorie $1 ( $2 )$3.

== Instructions pour télécharger toutes les images listées ==
Le temps de téléchargement peut varier de quelques minutes à plusieurs heures.

Windows:
 Extraire tous les fichier dans le même répertoire et lancez $5
 $6
Linux/Mac OS:
 Extraire tous les fichiers et ouvrir un terminal dans ce répertoire. Lancez sh $5',
	'non-bundled-wget' => 'Note: Cette version ne comprend pas wget pour Windows. Vous devez décompresser dans un répertoire avec wget.exe, ou avoir wget dans le PATH',
	'wget-info' => 'Le fichier comprend une copie de wget $1 (pour plateformes Windows). Wget est un logiciel libre, sous licence de la GNU GENERAL PUBLIC LICENSE version 3.
Vous trouverez une copie de cette licence ci-dessous, et elle est également disponible à http://www.gnu.org/licenses/gpl-3.0.txt

Si vous êtes intéressés par le code source de ce programme, vous pouvez le télécharger depuis
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ou un autre miroir GNU, voyez
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ", mis à l'échelle avec une largeur maximale de $1 {{plural:$1|pixel|pixels}}",
	'scaling-height' => ", mis à l'échelle avec une hauteur maximale de $1 {{plural:$1|pixel|pixels}}",
	'scaling-both' => ", mis à l'échelle avec une taille maximale de $1x$2 pixels",
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Descarga de imaxes por categoría',
	'subtitle' => 'Un xeito doado de descargar as imaxes presentes nunha categoría',
	'project' => 'Proxecto:',
	'category' => 'Categoría:',
	'thumbnailing' => 'Miniatura',
	'max-width' => 'Ancho máximo:',
	'max-height' => 'Altura máxima:',
	'invalid-width' => 'Ancho incorrecto',
	'invalid-height' => 'Altura incorrecta',
	'no-such-project' => 'Ese proxecto non existe',
	'no-images' => 'Non hai imaxes na categoría',
	'category-is-url' => 'O nome da categoría especificado semella un enderezo URL. Cómpre especificar o nome da categoría, non o seu URL.',
	'category-contains-namespace' => 'Semella que incluíu o espazo de nomes xunto ao nome da categoría. Co nome dado, a páxina estaría dispoñible en [[Category:$1]].',
	'zip-failed' => 'Erro na creación do ZIP',
	'image-area-too-big' => '"$1" é grande de máis para crear unha miniatura. Emprégase o tamaño completo.',
	'download-info' => '{{plural: $1|Hai unha imaxe|Hai $1 imaxes}}, cun tamaño estimado de $2',
	'download' => 'Descargar',
	'readme-contents' => 'O ficheiro "$4" incluído lista
as imaxes na categoría "$1" ($2)$3.

== Instrucións para descargar todas as imaxes ==
O tempo de descarga pode variar duns minutos a varias horas.

Windows:
 Extraia todos os ficheiros no mesmo cartafol e execute $5
 $6
Linux/Mac OS
 Extraia todos os ficheiros e abra un terminal nese cartafol. Execute sh $5',
	'non-bundled-wget' => 'Nota: Esta versión non inclúe wget para Windows. Terá que descomprimir
nun cartafol con wget.exe ou ter wget na RUTA',
	'wget-info' => 'Este ficheiro contén unha copia de wget $1 (para a plataforma Windows). Wget é software libre,
baixo os termos da LICENZA PÚBLICA XERAL DE GNU versión 3.
A continuación hai unha copia da licenza e tamén está dispoñible en http://www.gnu.org/licenses/gpl-3.0.txt

En caso de estar interesado en obter o código fonte deste programa, pode descargalo en
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ou nestoutro espello de GNU
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', escaladas a un ancho máximo de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-height' => ', escaladas a unha altura máxima de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-both' => ', escaladas a un tamaño máximo de $1x$2 píxeles',
);

/** Hebrew (עברית)
 * @author YaronSh
 */
$messages['he'] = array(
	'title' => 'הורדת תמונות לפי קטגוריה',
	'subtitle' => 'הדרך הקלה להוריד תמונות מקטגוריה מסוימת',
	'project' => 'מיזם:',
	'category' => 'קטגוריה:',
	'thumbnailing' => 'מזעור תמונות',
	'max-width' => 'הרוחב המרבי:',
	'max-height' => 'הגובה המרבי:',
	'invalid-width' => 'רוחב שגוי',
	'invalid-height' => 'גובה שגוי',
	'no-such-project' => 'אין מיזם כזה',
	'no-images' => 'אין תמונות בקטגוריה זו',
	'category-is-url' => 'הקטגוריה שצוינה נראית כמו כתובת. עליך לציין את שם הקטגוריה, לא את הכתובת שלה.',
	'category-contains-namespace' => 'מסתבר כי הכללת את שם המרחב בשם הקטגוריה. עקב השם שציינת, הדף יהיה זמין כ־[[Category:$1]].',
	'zip-failed' => 'יצירת קובץ ה־Zip נכשלה',
	'image-area-too-big' => 'התמונה $1 גדולה מכדי ליצור עבורה תמונה ממוזערת. ייעשה שימוש בגודלה המלא.',
	'download-info' => '{{plural: $1|יש תמונה אחת|יש $1 תמונות}}, בעלות נפח משוערך של $2',
	'download' => 'הורדה',
	'readme-contents' => 'קובץ הגימור $4 מציג
את התמונות בקטגוריה $1 ( $2 )$3.

== הנחיות להורדת כל התמונות המוצגות ==
זמן ההורדה עלול לנוע בין דקות ספורות למספר שעות.

Windows:
 יש לחלץ את כל הקבצים לאותה התיקייה ולהריץ $5
 $6
לינוקס/Mac OS
 יש לחלץ את כל הקבצים ולפתוח את המסוף באותה התיקייה. להריץ את הפקודה sh $5',
	'non-bundled-wget' => 'הערה: גרסה זו אינה כוללת את wget לסביבת Windows. יהיה עליך לחלץ לתיקייה שיש בה כבר את wget.exe או שבמשתנה הסביבתי PATH שלך תהיה הכוונה למיקום של wget',
	'wget-info' => 'קובץ זה מאגד בתוכו את wget $1 (לסביבת Windows).‏ Wget הנה תכנה חופשית, 
תחת תנאי הרישיון הציבורי הכללי של GNU GENERAL PUBLIC LICENSE בגרסה 3.
יש עותק של הרישיון להלן, והוא גם זמין בכתובת http://www.gnu.org/licenses/gpl-3.0.txt

במקרה שחשקה נפשך בהורדת קוד המקור של תכנית זו, ניתן להוריד אותו מהכתובות הבאות
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
או מכל אתר מראה אחר של GNU, לרשימה ניתן לבקר בכתובת הבאה
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', בהגדלה לרוחב מרבי של {{plural:$1|פיקסל אחד|$1 פיקסלים}}',
	'scaling-height' => ', בהגדלה לגובה מרבי של {{plural:$1|פיקסל אחד|$1 פיקסלים}}',
	'scaling-both' => ', בהגדלה לגודל מרבי של $1x$2 פיקסלים',
);

/** Hungarian (Magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'title' => 'Kategória képeinek letöltése',
	'subtitle' => 'A kategóriában található képek letöltésének egy könnyű módja',
	'project' => 'Projekt:',
	'category' => 'Kategória:',
	'thumbnailing' => 'Bélyegkép készítés',
	'max-width' => 'Maximális szélesség:',
	'max-height' => 'Maximális magasság:',
	'invalid-width' => 'Érvénytelen szélesség',
	'invalid-height' => 'Érvénytelen magasság',
	'no-such-project' => 'Nincs ilyen projekt',
	'no-images' => 'Nincs kép a kategóriában',
	'category-is-url' => 'A megadott kategória név úgy néz ki, mint egy URL. Egy kategória nevet kell megadni, nem az URL-ét.',
	'category-contains-namespace' => 'Úgy tűnik, hogy a névteret is hozzávetted a kategória névhez. Az adott névvel a lap [[Category:$1]] módon lesz elérhető',
	'zip-failed' => 'Zip létrehozási hiba',
	'image-area-too-big' => '$1 túl nagy a bélyegkép létrehozásához. A teljes kép lesz használva.',
	'download-info' => '{{PLURAL:$1|Egy|$1}} kép, becsült összméret: $2',
	'download' => 'Letöltés',
	'readme-contents' => 'A mellékelt $4 fájl tartalmazz a 
$1 kategória ( $2 )$3 képeinek listáját.

== Útmutató a listázott képek letöltéséhez ==
A letöltés ideje néhány perctől több óráig is tarthat.

Windows:
 Csomagold ki az összes fájlt ugyanabba a könyvtárba és futtasd le a $5 parancsfájlt!
 $6
Linux/Mac OS
 Csomagold ki az összes fájlt, nyissál egy terminált ablakot ebbe a könyvtárban. Futtasd le az sh $5 parancsot!',
	'non-bundled-wget' => 'Megjegyzés: Ez a verzió nem tartalmazza a wget Windows-os verzióját. Csomagold ki a wget.exe programot az adott könyvtárba, vagy legyen wget elérhető a PATH-ben.',
	'wget-info' => 'Egy a csomag tartalmazza a wget $1 (Windows-os verzió). Wget egy ingyenes program, a GNU GENERAL PUBLIC LICENSE version 3 alatt. Alább megtalálható a licenc egy másolata, valamint hozzáférhető a http://www.gnu.org/licenses/gpl-3.0.txt címen.

Ha érdekelne a program forráskódja, az alábbi helyekről töltheted le:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
vagy valamelyik GNU Mirror oldalról, lásd
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', átméretezve a {{PLURAL:$1|egy|$1}} pixel maximális szélességre',
	'scaling-height' => ', átméretezve a {{PLURAL:$1|egy|$1}} pixel maximális magasságra',
	'scaling-both' => ', átméretezve a $1x$2 pixel maximális méretre',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'Discargamento de imagines per categoria',
	'subtitle' => 'Un maniera facile de discargar le imagines presente in un categoria',
	'project' => 'Projecto:',
	'category' => 'Categoria:',
	'thumbnailing' => 'Miniaturisation',
	'max-width' => 'Latitude maxime:',
	'max-height' => 'Altitude maxime:',
	'invalid-width' => 'Latitude invalide',
	'invalid-height' => 'Altitude invalide',
	'no-such-project' => 'Iste projecto non existe',
	'no-images' => 'Il non ha imagines in iste categoria',
	'category-is-url' => 'Le nomine de categoria specificate resimila un adresse URL. Es necessari specificar le nomine del categoria, non su URL.',
	'category-contains-namespace' => 'Il sembla que tu ha includite le spatio de nomines con le nomine del categoria. Con le nomine specificate, le pagina esserea disponibile a [[Category:$1]].',
	'zip-failed' => 'Creation del archivo ZIP fallite',
	'image-area-too-big' => '$1 es troppo grande pro crear un miniatura. Le dimension complete es usate.',
	'download-info' => '{{plural: $1|Il ha un imagine|Il ha $1 imagines}}, con un dimension estimate de $2',
	'download' => 'Discargar',
	'readme-contents' => 'Le file $4 contine un lista 
del imagines presente in le categoria $1 ( $2 )$3.

== Instructiones pro discargar tote le imagines listate ==
Le tempore de discargamento pote variar de qualque minutas a plure horas.

Windows:
 Extrahe tote le files in le mesme directoria e executa $5
 $6
Linux/Mac OS
 Extrahe tote le files e aperi un terminal in iste directorio. Executa sh $5',
	'non-bundled-wget' => 'Nota: Iste version non include le programma "wget" pro Windows. Es necessari, o decomprimer le files
in un directorio que include wget.exe, o haber "wget" in le "PATH".',
	'wget-info' => 'Iste file contine un copia de wget $1 (pro Windows). Wget es software libere,
sub le terminos del LICENTIA PUBLIC GENERAL DE GNU version 3.
Hic infra es un copia de iste licentia; illo es disponibile tamben a http://www.gnu.org/licenses/gpl-3.0.txt

Si tu vole obtener le codice fonte de iste programma, tu pote discargar lo ab
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o de un altere speculo de GNU, vide
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', scalate a un latitude maxime de $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', scalate a un altitude maxime de $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', scalate a un dimension maxime de $1 × $2 pixels',
);

/** Japanese (日本語)
 * @author Fryed-peach
 */
$messages['ja'] = array(
	'title' => 'カテゴリー別に画像をダウンロード',
	'subtitle' => 'カテゴリー内の画像をダウンロードする簡単な方法',
	'project' => 'プロジェクト:',
	'category' => 'カテゴリー:',
	'thumbnailing' => 'サムネイル処理',
	'max-width' => '幅の最大値:',
	'max-height' => '高さの最大値:',
	'invalid-width' => '幅が無効',
	'invalid-height' => '高さが無効',
	'no-such-project' => 'そのようなプロジェクトはありません',
	'no-images' => 'そのカテゴリーには画像がありません',
	'category-is-url' => '指定されたカテゴリー名は URL のようにみえます。URL ではなく、カテゴリー名を指定する必要があります。',
	'category-contains-namespace' => 'カテゴリー名に名前空間が含まれているようです。指定の通りだと、[[Category:$1]] というページになります。',
	'zip-failed' => 'ZIP の作成に失敗しました',
	'image-area-too-big' => '$1 は大きすぎるためサムネイルを作成できません。元の大きさを利用します。',
	'download-info' => '{{plural: $1|1個|$1個}}の画像があり、サイズの概算は$2です',
	'download' => 'ダウンロード',
	'readme-contents' => '同封したファイル $4 は
カテゴリー「$1」( $2 ) 内の画像を$3記載したものです。

== 記載した画像すべてをダウンロードする手順 ==
ダウンロード時間は2、3分で終わることもありますし、数時間かかることもあります。

Winsows:
 同じフォルダーにあるファイルをすべて展開し、$5 を実行してください
 $6
Linux/Mac OS
 ファイルをすべて展開し、そのフォルダーで端末を開いてください。sh $5 を実行してください',
	'non-bundled-wget' => '注: このバージョンは Windows 用の wget を含んでいません。
wget.exe が存在するフォルダーに展開するか、wget を PATH が通ったところに置いておく必要があります。',
	'wget-info' => 'このファイルには wget $1（Windows 用）が付属します。wget はフリーソフトウェアであり、
GNU GENERAL PUBLIC LICENSE version 3 の条項の下にあります。
そのライセンスのコピーを下部に示します。また、http://www.gnu.org/licenses/gpl-3.0.txt でも参照できます。

このプログラムのソースコードを入手する際には、以下の場所からダウンロードできます。
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
もしくは、その他の GNU のミラーを利用できます。以下を参照してください。
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '幅の最大値$1{{plural:$1|ピクセル}}に拡大縮小し、',
	'scaling-height' => '高さの最大値$1{{plural:$1|ピクセル}}に拡大縮小し、',
	'scaling-both' => 'サイズの最大値 $1x$2ピクセルに拡大縮小し、',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'category' => 'კატეგორია:',
	'download' => 'ჩამოტვირთვა',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => 'Belder pä Saachjrobb eronger laade',
	'subtitle' => 'Ene eijnfache Wääsch, de Belder en ene Saachjrobb eronger ze laade',
	'project' => 'Projäk:',
	'category' => 'Saachjropp:',
	'thumbnailing' => 'Minni-Belldsche',
	'max-width' => 'De jrüüßte Breide:',
	'max-height' => 'De jrüüßte Hühde:',
	'invalid-width' => 'Di Breide es nit jöltesch.',
	'invalid-height' => 'Di Hühde es nit jöltesch.',
	'no-such-project' => 'Esu e Projäk ham_mer nit.',
	'no-images' => 'En dä Saachjropp sinn_er kein Bellder.',
	'category-is-url' => 'Di aanjejovve Saachjropp süht wi ene URL uß, Donn dä Name vun dä Saachjropp aanjävve.',
	'category-contains-namespace' => 'Do häs ene Name vun enenm Apachtemang met dä Saachjropp zosamme aanjejovve. Met dämm Naame däät di Sigg [[Category:$1]] heiße.',
	'zip-failed' => 'Mer kunnte di ZIP-Dattei nit aanlääje.',
	'image-area-too-big' => 'Di Dattei $1 es zoh jruuß förr e Minnnibeldhsce druß ze maache. Mer nämme di Dattei wi se es.',
	'download-info' => 'Mer han {{PLURAL:$1|ei Beld|$1 Belder|kein Belder}} mem Jesampömfang vun $2',
	'download' => 'Eronger laade',
	'readme-contents' => 'En dä Dattei $4 heh sin de Belder uß dä Saachjropp $1 dren zosammejefaß$3.
Di Saachjropp fengk mer onger däm URL:
$2

== Wie mer di Belder eronger laade kann ==
Dat Eronger Laade kann e paa Menutte, ävver och e paa Schtonde doore.

Met <i lang="en">Windows</i>:
 Alle Dateije en et sällve Verzeichneß ußpacke un dann doh dren ußföhre:
 Doh dren ußföhre: <code>$5</code>
 $6
Met <i lang="en">Linux</i> udder <i lang="en">Mac OS</i>:
 Alle Dateije ußpacke un e <i lang="en">Terminal</i>-Finster op maache.
 Dabb ußföhre lohße: <code>sh $5</code>',
	'non-bundled-wget' => 'Opjepaß: En heh dä Version es <code lang="en">wget</code> fö <i lang="en">Windows</i> nit derbei. Do moß se met <code lang="en">wget.exe</code> en enem Verzischneß ußpacke udder <code lang="en">wget</code> moß övver der Paad zom Projramme Söhke jefonge wääde künne.',
	'wget-info' => 'En dä Dattei es <code lang="en">wget</code> $1 för <i lang="en">Windows</i> met enjebonge. Wget es e frei Projramm un et es ze han onger dä Version 3 vun GNU General Public License (dä alljemeine öffentlesche Lizänz vun dä GNU) 
Wigger onge kütt die Lizänz ob heh dä Sigg, ävver mer kann se och beloore op: http://www.gnu.org/licenses/gpl-3.0.txt verfügbar.

Wä däm Projramm singe Quällkood krijje well, kann dä eronger laade vun ongerscheidlijje Schtälle:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
udder och vun ander Schpeejel-ẞööver. Luuer op:
 http://www.gnu.org/prep/ftp.htmlt',
	'scaling-width' => ', obb ene jrüüßte Breide vun {{PLURAL:$1|einem Pixel|$1 Pixelle|keinem Pixel}} ömjeräschnet',
	'scaling-height' => ', obb ene jrüüßte Hühde vun {{PLURAL:$1|einem Pixel|$1 Pixelle|keinem Pixel}} ömjeräschnet',
	'scaling-both' => ', obb ene jrüüßte Ömfang vun $1x$2 Pixelle ömjeräschnet',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'Biller vun enger Kategorie eroflueden',
	'subtitle' => 'Déi einfach Manéier fir Biller aus enger Kategorie erofzelueden',
	'project' => 'Projet:',
	'category' => 'Kategorie:',
	'thumbnailing' => 'Miniaturbild gëtt gemaach',
	'max-width' => 'Maximal Breet:',
	'max-height' => 'Maximal Héicht:',
	'invalid-width' => "D'Breet ass net valabel",
	'invalid-height' => "D'Héicht ass net valabel",
	'no-such-project' => 'Esou e Projet gëtt et net',
	'no-images' => 'Et gëtt keng Biller an där Kategorie',
	'category-is-url' => "D'Kategorie déi ugi gouf gesäit wéi eng komplett URL aus. Dir musst den Numm vun der Kategorie uginn, an net hir URL.",
	'category-contains-namespace' => "Et schéngt wéi wann dir den Nummraum bäi den Numm vun der Kategorie derbäigesat hutt. Mam Numm den uginn ass wier d'Säit als [[Category:$1]] disponibel.",
	'zip-failed' => 'De ZIP-Fichier konnt net gemaach ginn',
	'image-area-too-big' => '$1 ass ze grouss fir e Miniatur-Bild ze generéieren. Déi komplett Gréisst gëtt benotzt.',
	'download-info' => 'Et {{plural: $1|ass 1 Bild|si(nn) $1 Biller}} mat enger geschater Gréisst vun $2 do',
	'download' => 'Eroflueden',
	'scaling-width' => ', op eng maximal Breet vu(n) $1 {{plural:$1Pixel|Pixel}} skaléiert',
	'scaling-height' => ', op eng maximal Héicht vu(n) {{plural:$1Pixel|Pixel}} skaléiert',
	'scaling-both' => ', op eng maximal Gréisst vu(n) $1x$2 Pixel skaléiert',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 * @author Rancher
 */
$messages['mk'] = array(
	'title' => 'Преземање на слики по категории',
	'subtitle' => 'Лесен начин на преземање на сликите во некоја категорија',
	'project' => 'Проект:',
	'category' => 'Категорија:',
	'thumbnailing' => 'Минијатуризација',
	'max-width' => 'Макс. ширина:',
	'max-height' => 'Макс. висина:',
	'invalid-width' => 'Неважечка ширина',
	'invalid-height' => 'Неважечка висина',
	'no-such-project' => 'Нема таков проект',
	'no-images' => 'Во таа категорија нема слики',
	'category-is-url' => 'Зададеното име личи на URL-адреса. Треба да го наведете името на категоријата, а не адресата.',
	'category-contains-namespace' => 'Изгледа дека сте го навеле именскиот простор заедно со името на категоријата. Со зададеното име, страницата ќе биде достапна на [[Category:$1]].',
	'zip-failed' => 'Не успеав да создадам ZIP',
	'image-area-too-big' => 'Сликата $1 е преголема за да може да се минијатуризира. Ќе ја употребам полната големина.',
	'download-info' => '{{plural: $1|Има една слика|Има $1 слики}}, со проценета големина од $2',
	'download' => 'Преземи',
	'readme-contents' => 'Во податотеката $4 се наведени 
сликите во категоријата $1 ( $2 )$3.

== Напатствија за преземање на сите наведени слики ==
Преземањето може да потрае од неколку минути до неколку часа.

Windows:
 Отпакувајте ги сите податотеки во иста папка и пуштете ја $5
 $6
Linux/Mac OS
Отпакувајте ги сите податотеки и отворете терминал во таа папка. Пуштете ја sh $5',
	'non-bundled-wget' => 'Напомена: Оваа верзија не содржи wget за Windows. Отпакувањето ќе треба да  
го извршите во папка со wget.exe или веќе да имате wget во патеката',
	'wget-info' => "Податотекава содржи примерок на wget $1 (за Windows). Wget е слободна програмска опрема, 
и се нуди под условите на ГНУ-ОВАТА ОПШТА ЈАВНА ЛИЦЕНЦА (''GNU GENERAL PUBLIC LICENSE'') верзија 3.
Подолу е наведен примерок на лиценцата (достапен и на http://www.gnu.org/licenses/gpl-3.0.txt)

Доколку сакате да го добиете изворниот код на програмов, преземете го од
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
или некое друго огледало на ГНУ, вид.
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ', со изменет размер до максимална ширина од $1 {{plural:$1|пиксел|пиксели}}',
	'scaling-height' => ', со изменет размер до максимална висина од $1 {{plural:$1|пиксел|пиксели}}',
	'scaling-both' => ', со изменет размер до максимална големина од $1 x $2 пиксели',
	'script-filename' => 'преземање.bat',
	'readme-filename' => 'ДОКУМЕНТАЦИЈА.txt',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'Muat turun imej mengikut kategori',
	'subtitle' => 'Cara yang mudah untuk memuat turun imej dalam satu kategori',
	'project' => 'Projek:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Gambar kenit',
	'max-width' => 'Lebar maksimum:',
	'max-height' => 'Tinggi maksimum:',
	'invalid-width' => 'Lebar tidak sah',
	'invalid-height' => 'Tinggi tidak sah',
	'no-such-project' => 'Projek ini tidak wujud',
	'no-images' => 'Tiada imej dalam kategori itu',
	'category-is-url' => 'Nama kategori yang diberikan nampak seperti URL. Anda perlu menyatakan nama kategori itu, bukan URL-nya.',
	'category-contains-namespace' => 'Nampaknya anda telah menyertakan ruang nama dengan nama kategori. Dengan nama yang diberikan, laman itu tersedia sebagai [[Category:$1]].',
	'zip-failed' => 'Zip gagal dibuat',
	'image-area-too-big' => '$1 terlalu besar untuk membuat thumbnail. Saiz penuh digunakan.',
	'download-info' => 'Terdapat {{plural: $1|satu|$1}} imej dengan saiz kira-kira $2',
	'download' => 'Muat turun',
	'readme-contents' => 'Fail pelampir $4 menyenaraikan
imej-imej di kategori $1 ( $2 )$3.

== Arahan memuat turun semua imej tersenarai ==
Jangka masa muat turun mungkin antara beberapa minit dan beberapa jam.

Windows:
 Ekstrakkan semua fail dalam folder yang sama dan jalankan $5
 $6
Linux/Mac OS
 Ekstrakkan semua fail dan buka sebuah terminal dalam folder itu. Jalankan sh $5',
	'non-bundled-wget' => 'Perhatian: Versi ini tidak menyertakan wget untuk Windows. Anda mungkin perlu menyahmampatkannya ke dalam folder dengan wget.exe, ataupun mempunyai wget dalam LALUAN',
	'wget-info' => 'Fail ini memberkaskan salinan wget $1 (untuk platform Windows). Wget ialah Perisian Bebas, 
mengikut terma-terma LESEN AWAM AM GNU versi 3.
Di bawa adalah satu salinan lesen, dan ia juga didapati di http://www.gnu.org/licenses/gpl-3.0.txt

Sekiranya anda berminat untuk mendapatkan kod sumber untuk program ini, anda boleh memuat turunnya dari
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
atau mana-mana Cermin GNU yang lain, rujuk
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', dilaraskan kepada lebar maksimum $1 piksel',
	'scaling-height' => ', dilaraskan kepada tinggi maksimum $1 piksel',
	'scaling-both' => ', dilaraskan kepada saiz maksimum $1x$2 piksel',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'Afbeeldingen in een categorie downloaden',
	'subtitle' => 'De gemakkelijke manier om afbeeldingen in een bepaalde categorie te downloaden',
	'project' => 'Project:',
	'category' => 'Categorie:',
	'thumbnailing' => 'Miniaturen',
	'max-width' => 'Maximale breedte:',
	'max-height' => 'Maximale hoogte:',
	'invalid-width' => 'Ongeldige breedte',
	'invalid-height' => 'Ongeldige hoogte',
	'no-such-project' => 'Er bestaat geen project met die naam',
	'no-images' => 'Er zijn geen afbeeldingen in die categorie',
	'category-is-url' => 'De opgegeven categorienaam lijkt een URL te zijn. U moet de categorienaam opgeven, niet de URL.',
	'category-contains-namespace' => 'U hebt de naamruimte opgenomen in de categorienaam. Met de opgegeven naam, komt de pagina beschikbaar als [[Category:$1|Categorie $1]].',
	'zip-failed' => 'Het maken van een zip-bestand is mislukt.',
	'image-area-too-big' => '$1 is te groot om een miniatuur maken. De volledige grootte wordt gebruikt.',
	'download-info' => '{{plural: $1|Er is één afbeelding|Er zijn $1 afbeeldingen}}, met een geschatte grootte van $2',
	'download' => 'Downloaden',
	'readme-contents' => 'In het bestand $4 staat een lijst met
bestanden uit de categorie $1 ($2)$3.

== Instructie voor het downloaden van alle bestanden uit de lijst ==
De downloadtijd kan uiteen lopen van minuten tot uren.

Windows:
 Pak alle bestanden uit in dezelfde map en voer uit: $5
 $6
Linux/Mac OSX
 Pak alle bestanden uit en open een terminalvenster in die map. Voer daarna uit: sh $5',
	'non-bundled-wget' => 'Let op: in deze versie is wget voor Windows niet opgenomen. U moet uitpakken
naar een map waarin wget.exe staat, of wget moet opgenomen zijn in de
omgevingsvariabele PATH.',
	'wget-info' => 'Dit bestand bundelt een kopie van wget $1 (voor het Windows-systeem). Wget is vrije software,
onder de voorwaarden van de GNU GENERAL PUBLIC LICENSE versie 3.
Er is een kopie van de licentie hieronder, en het is ook beschikbaar op http://www.gnu.org/licenses/gpl-3.0.txt

In het geval dat u geïnteresseerd bent in de broncode van dit programma, kunt u deze downloaden vanop
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
of een andere GNU-mirror, zie
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', geschaald naar een maximale breedte van $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', geschaald naar een maximale hoogte van $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', geschaald naar een maximale afmeting van $1 x $2 pixels',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'project' => 'Projekt:',
	'category' => 'Abdeeling:',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'Pobieranie grafik ze względu na kategorię',
	'subtitle' => 'Prosta metoda na pobranie grafik znajdujących się w określonej kategorii',
	'project' => 'Projekt',
	'category' => 'Kategoria',
	'thumbnailing' => 'Miniatura',
	'max-width' => 'Maksymalna szerokość',
	'max-height' => 'Maksymalna wysokość',
	'invalid-width' => 'Nieprawidłowa szerokość',
	'invalid-height' => 'Nieprawidłowa wysokość',
	'no-such-project' => 'Brak takiego projektu',
	'no-images' => 'W wybranej kategorii nie ma grafik',
	'category-is-url' => 'Wybrana nazwa kategorii wygląda jak adres internetowy. Musisz podać nazwę kategorii, a nie jej adres w Internecie.',
	'category-contains-namespace' => 'Wygląda na to, że w nazwie kategorii jest nazwa przestrzeni nazw. Z zadaną nazwą strona byłaby dostępna jako [[Category:$1]].',
	'zip-failed' => 'Błąd utworzenia archiwum w formacie ZIP',
	'image-area-too-big' => 'Grafika $1 jest zbyt duża, aby utworzyć miniaturkę. Zostanie użyta w pełnym rozmiarze.',
	'download-info' => '{{PLURAL:$1|Jest jedna grafika|Są $1 grafiki|Jest $1 grafik}} o szacowanej wielkości $2',
	'download' => 'Pobierz',
	'readme-contents' => 'Załączony plik $4 zawiera listę
grafik znajdujących się w kategorii $1 ( $2 )$3.
the images at the $1 category ( $2 )$3.

== Instrukcja pobrania wszystkich plików z listy ==
Czas pobierania może się wahać od kilku minut do wielu godzin.

Windows:
 Rozpakuj wszystkie pliki w jednym folderze i uruchom $5
 $6
Linux lub Mac OS:
 Rozpakuj wszystkie pliki, a następnie otwórz terminal w tym folderze. Uruchom sh $5',
	'non-bundled-wget' => 'Uwaga – ta wersja nie zawiera wget dla systemu Windows. Będziesz musiał rozpakować archiwum do folderu z programem wget.exe lub musisz mieć ten program na ścieżce wpisanej w PATH.',
	'wget-info' => 'W tym pliku znajduje się kopia programu wget $1 (dla platformy Windows). Wget jest  darmowym oprogramowaniem, dostępnym na zasadach licencji GNU GENERAL PUBLIC LICENSE w wersji 3.
Kopia licencji dostępna jest poniżej oraz pod adresem http://www.gnu.org/licenses/gpl-3.0.txt

Jeśli jesteś zainteresowany kodem źródłowym tego programu możesz pobrać go z 
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
lub niektórych innych mirrorów GNU, zobacz
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', przeskalowanych do szerokości maksymalnie $1 {{PLURAL:$1|piksela|pikseli}}',
	'scaling-height' => ', przeskalowanych do wysokości maksymalnie $1 {{PLURAL:$1|piksela|pikseli}}',
	'scaling-both' => ', przeskalowanych do maksymalnego rozmiaru $1x$2 pikseli',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'Descărcare de imagini după categorie',
	'subtitle' => 'Calea ușoară de a descărca imaginile dintr-o categorie',
	'project' => 'Proiect:',
	'category' => 'Categorie:',
	'max-width' => 'Lățime maximă:',
	'max-height' => 'Înălțime maximă:',
	'invalid-width' => 'Lățime incorectă',
	'invalid-height' => 'Înălțime incorectă',
	'no-such-project' => 'Nu există nici un astfel de proiect',
	'no-images' => 'Nu există imagini în acea categorie',
	'category-is-url' => 'Numele categoriei introduse arată ca un URL. Trebuie să specificați numele categoriei, nu adresa sa URL.',
	'zip-failed' => 'Crearea arhivei a eșuat',
	'image-area-too-big' => '$1 este prea mare pentru a i se crea o miniatură. Se va utiliza dimensiunea completă.',
	'download-info' => '{{plural: $1|Există o imagine|Există $1 imagini||Există $1 de imagini}} cu o dimensiune estimată la $2',
	'download' => 'Descărcare',
	'scaling-width' => ', scalată la o lățime maximă de $1 {{plural:$1|pixel|pixeli|de pixeli}}',
	'scaling-height' => ', scalată la o înălțime maximă de $1 {{plural:$1|pixel|pixeli|de pixeli}}',
	'scaling-both' => ', scalată la o dimensiune maximă de $1 x $2 pixeli',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title' => 'Scarecamende de le immaggine pe categorije',
	'project' => 'Pruggette:',
	'category' => 'Categorije:',
	'thumbnailing' => 'Miniature',
	'max-width' => 'Larghezza massime:',
	'max-height' => 'Iertezza massime:',
	'invalid-width' => 'Larghezza invalide',
	'invalid-height' => 'Iertezze invalide',
	'no-such-project' => 'Non ge stonne pruggette',
	'zip-failed' => "Ccrejazione d'u ZIP fallite",
);

/** Russian (Русский)
 * @author Eleferen
 */
$messages['ru'] = array(
	'max-width' => 'Максимальная ширина:',
	'max-height' => 'Максимальная высота:',
);

/** Slovak (Slovenčina)
 * @author Wizzard
 */
$messages['sk'] = array(
	'download' => 'Stiahnuť',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'title' => 'Prenos slik po kategorijah',
	'subtitle' => 'Preprost način za prenos slik v kategoriji',
	'project' => 'Projekt:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Izdelava sličic',
	'max-width' => 'Največja širina:',
	'max-height' => 'Največja višina:',
	'invalid-width' => 'Neveljavna širina',
	'invalid-height' => 'Neveljavna višina',
	'no-such-project' => 'Takšen projekt ne obstaja',
	'no-images' => 'V tej kategoriji ni slik',
	'category-is-url' => 'Podano ime kategorije izgleda kot URL. Navesti morate ime kategorije, ne njen URL.',
	'category-contains-namespace' => 'Kot kaže, ste poleg imena kategorije vključili imenski prostor. Z navedenim imenom bo stran na voljo kot [[Category:$1]].',
	'zip-failed' => 'Ustvarjanje zipa je spodletelo',
	'image-area-too-big' => '$1 je prevelika za ustvarjanje sličice. Uporabljena bo polna velikost.',
	'download-info' => '{{PLURAL:$1|Obstaja $1 slika|Obstajata $1 sliki|Obstajajo $1 slike|Obstaja $1 slik}}, z velikostjo ocenjeno na $2',
	'download' => 'Prenesi',
	'readme-contents' => 'Vključena datoteka $4 navaja
slike v kategoriji $1 ($2)$3.

== Navodila za prenos vseh navedenih slik ==
Čas prenašanja se lahko giblje od nekaj minut do več ur.

Windows:
 Razširite vse datoteke v isto mapo in zaženite $5
 $6
OS Linux/Mac
 Razširite vse datoteke in odprite ukazno vrstico v tej mapi. Zaženite sh $5',
	'non-bundled-wget' => 'Opozorilo: Ta različica ne vsebuje wget za Windows. Morali boste razširiti
v mapo z wget.exe ali pa imeti wget v PATH',
	'wget-info' => 'Datoteka vključuje kopijo wget $1 (za platformo Windows). Wget je prosto programje
pod pogoji SPLOŠNEGA DOVOLJENJA GNU različice 3.
Spodaj se nahaja kopija dovoljenja, prav tako pa je na voljo na http://www.gnu.org/licenses/gpl-3.0.txt

Če želite pridobiti izvorno kodo programa, jo lahko prenesete z
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ali katerega drugega zrcala GNU; glej
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', prilagojene na širino največ $1 {{PLURAL:$1|slikovne pike|slikovnih pik}}',
	'scaling-height' => ', prilagojene na višino največ $1 {{PLURAL:$1|slikovne pike|slikovnih pik}}',
	'scaling-both' => ', prilagojene na velikost največ $1x$2 slikovnih pik',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'Преузимање слика по категорији',
	'subtitle' => 'Једноставан начин да преузмете слике у некој категорији',
	'project' => 'Пројекат:',
	'category' => 'Категорија:',
	'thumbnailing' => 'Минијатуризација',
	'max-width' => 'Највећа ширина:',
	'max-height' => 'Највећа висина:',
	'invalid-width' => 'Неисправна ширина',
	'invalid-height' => 'Неисправна висина',
	'no-such-project' => 'Нема таквог пројекта',
	'no-images' => 'У тој категорији нема слика',
	'category-is-url' => 'Наведени назив личи на адресу. Треба да унесете назив категорије, а не његову адресу.',
	'category-contains-namespace' => 'Изгледа да сте навели именски простор заједно с називом категорије. Са задатим називом, страница ће бити доступна као [[Category:$1]].',
	'zip-failed' => 'Не могу да направим архиву',
	'image-area-too-big' => 'Слика $1 је превелика да би могла да се минијатуризира. Користићу пуну величину.',
	'download-info' => '{{plural: $1|Постоји једна слика|Постоје $1 слике|Постоји $1 слика}}, с просечном величином од $2',
	'download' => 'Преузми',
	'readme-contents' => 'У датотеци $4 налазе се слике из категорије $1 ($2) $3.

== Упутства за преузимање свих наведених слика ==
Преузимање може потрајати од неколико минута до неколико часова.

Виндоус:
 Отпакујте све датотеке у исту фасциклу и покрените $5
 $6
Линукс/Мак ОС
Отпакујте све датотеке и отворите терминал у тој фасцикли. Покрените sh $5',
	'non-bundled-wget' => 'Напомена: ово издање не садржи wget за виндоус. Треба да отпакујете
у фасциклу са wget.exe или да већ имате wget у путањи',
	'wget-info' => 'Датотека садржи примерак wget-а $1 (виндоус). Wget је слободан програм 
који је објављен под условима ГНУ-ОВЕ ОПШТЕ ЈАВНЕ ЛИЦЕНЦЕ 3.
Испод се налази примерак лиценце (доступан је и на http://www.gnu.org/licenses/gpl-3.0.txt)

Ако сте заинтересовани за изворни код програма, преузмите га са
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
или користите друге резервне везе:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', с изменом размере до највеће ширине од $1 {{plural:$1|пиксел|пиксела|пиксела}}',
	'scaling-height' => ', с изменом размере до највеће висине од $1 {{plural:$1|пиксел|пиксела|пиксела}}',
	'scaling-both' => ', с изменом размере до највеће величине од $1 × $2 пиксела',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'Preuzimanje slika po kategoriji',
	'subtitle' => 'Jednostavan način da preuzmete slike u nekoj kategoriji',
	'project' => 'Projekat:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Minijaturizacija',
	'max-width' => 'Najveća širina:',
	'max-height' => 'Najveća visina:',
	'invalid-width' => 'Neispravna širina',
	'invalid-height' => 'Neispravna visina',
	'no-such-project' => 'Nema takvog projekta',
	'no-images' => 'U toj kategoriji nema slika',
	'category-is-url' => 'Navedeni naziv liči na adresu. Treba da unesete naziv kategorije, a ne njegovu adresu.',
	'category-contains-namespace' => 'Izgleda da ste naveli imenski prostor zajedno s nazivom kategorije. Sa zadatim nazivom, stranica će biti dostupna kao [[Category:$1]].',
	'zip-failed' => 'Ne mogu da napravim arhivu',
	'image-area-too-big' => 'Slika $1 je prevelika da bi mogla da se minijaturizira. Koristiću punu veličinu.',
	'download-info' => '{{plural: $1|Postoji jedna slika|Postoje $1 slike|Postoji $1 slika}}, s prosečnom veličinom od $2',
	'download' => 'Preuzmi',
	'readme-contents' => 'U datoteci $4 nalaze se slike iz kategorije $1 ($2) $3.

== Uputstva za preuzimanje svih navedenih slika ==
Preuzimanje može potrajati od nekoliko minuta do nekoliko časova.

Vindous:
 Otpakujte sve datoteke u istu fasciklu i pokrenite $5
 $6
Linuks/Mak OS
Otpakujte sve datoteke i otvorite terminal u toj fascikli. Pokrenite sh $5',
	'non-bundled-wget' => 'Napomena: ovo izdanje ne sadrži wget za vindous. Treba da otpakujete
u fasciklu sa wget.exe ili da već imate wget u putanji',
	'wget-info' => 'Datoteka sadrži primerak wget-a $1 (vindous). Wget je slobodan program 
koji je objavljen pod uslovima GNU-OVE OPŠTE JAVNE LICENCE 3.
Ispod se nalazi primerak licence (dostupan je i na http://www.gnu.org/licenses/gpl-3.0.txt)

Ako ste zainteresovani za izvorni kod programa, preuzmite ga sa
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ili koristite druge rezervne veze:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', s izmenom razmere do najveće širine od $1 {{plural:$1|piksel|piksela|piksela}}',
	'scaling-height' => ', s izmenom razmere do najveće visine od $1 {{plural:$1|piksel|piksela|piksela}}',
	'scaling-both' => ', s izmenom razmere do najveće veličine od $1 × $2 piksela',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'title' => 'వర్గాల వారీగా చిత్రాలను దించుకోండి',
	'project' => 'ప్రాజెక్టు:',
	'category' => 'వర్గం:',
	'max-width' => 'గరిష్ఠ వెడల్పు:',
	'max-height' => 'గరిష్ఠ ఎత్తు:',
	'invalid-width' => 'చెల్లని వెడల్పు',
	'invalid-height' => 'చెల్లని ఎత్తు',
	'no-such-project' => 'అటువంటి ప్రాజెక్టు లేదు',
	'no-images' => 'ఆ వర్గంలో బొమ్మలు ఏమీ లేవు',
);

/** Turkish (Türkçe)
 * @author Emperyan
 */
$messages['tr'] = array(
	'project' => 'Proje:',
	'category' => 'Kategori:',
	'max-width' => 'En fazla genişlik:',
	'max-height' => 'En fazla yükseklik:',
	'download' => 'İndir',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Platonides
 */
$messages['vi'] = array(
	'title' => 'Tải về hình ảnh theo thể loại',
	'subtitle' => 'Cách dễ dàng để tải về tất cả các hình ảnh trong một thể loại',
	'project' => 'Dự án:',
	'category' => 'Thể loại:',
	'thumbnailing' => 'Hình nhỏ',
	'max-width' => 'Chiều rộng tối đa:',
	'max-height' => 'Chiều cao tối đa:',
	'invalid-width' => 'Chiều rộng không hợp lệ',
	'invalid-height' => 'Chiều cao không hợp lệ',
	'no-such-project' => 'Không tìm thấy dự án này.',
	'no-images' => 'Không tìm thấy hình ảnh trong thể loại này.',
	'category-is-url' => 'Hình như địa chỉ URL được cho vào thay vì tên thể loại. Xin cho vào tên thể loại.',
	'category-contains-namespace' => 'Hình như bạn đã bao gồm không gian tên cùng với tên thể loại. Với tên này, trang sẽ là [[Category:$1]].',
	'zip-failed' => 'Thất bại khi tạo ZIP',
	'image-area-too-big' => '$1 quá lớn để tạo ra hình thu nhỏ. Đang sử dụng kích cỡ gốc thay thế.',
	'download-info' => 'Có {{PLURAL:$1|hình ảnh|$1 hình ảnh}} với kích thước ước lượng là $2',
	'download' => 'Tải về',
	'readme-contents' => 'Tập tin kèm theo $4 liệt kê
các hình ảnh trong thể loại $1 ( $2 )$3.

== Hướng dẫn tải về tất cả các hình ảnh trong danh sách ==
Có thể cần vài phút đến vào tiếng để tải về xong.

Windows:
  Giải nén tất cả các tập tin vào cùng thư mục và chạy $5
  $6
Linux và Mac OS:
  Giải nén tất cả các tập tin vào cùng thư mục và chỉ dòng lệnh đến thư mục đó. Chạy sh $5',
	'non-bundled-wget' => 'Lưu ý: Phiên bản này không bao gồm wget cho Windows. Bạn sẽ cần phải giải nén các tập tin vào một thư mục có wget.exe hoặc có biến PATH chỉ đến wget.',
	'wget-info' => 'Tập tin này kèm theo wget $1 (dành cho nền Windows). Wget là Phần mềm Tự do,
theo các điều khoản của GIẤY PHÉP CÔNG CỘNG GNU phiên bản 3.
Giấy phép có sẵn ở dưới và tại http://www.gnu.org/licenses/gpl-3.0.txt

Trong trường hợp bạn muốn lấy mã nguồn của chương trình này, bạn có thể tải nó về từ
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
hoặc một Kho phần mềm GNU khác; xem
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', được chỉnh lại theo chiều rộng tối đa là $1 điểm ảnh',
	'scaling-height' => ', được chỉnh lại theo chiều cao tối đa là $1 điểm ảnh',
	'scaling-both' => ', được chỉnh lại theo kích cỡ tối đa là $1 × $2 điểm ảnh',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Mys 721tx
 */
$messages['zh-hans'] = array(
	'title' => '按照分类下载图片',
	'subtitle' => '从一个分类中下载图片的简单方式',
	'project' => '项目',
	'category' => '分类：',
	'thumbnailing' => '缩小图片',
	'max-width' => '最大宽度：',
	'max-height' => '最大高度：',
	'invalid-width' => '无效宽度',
	'invalid-height' => '无效高度',
	'no-such-project' => '此项目不存在',
	'no-images' => '该分类中没有图片',
	'category-is-url' => '所填写分类名称似乎是一个URL，您需要指明分类名称而不是其URL',
	'category-contains-namespace' => '您似乎在分类名称中包含了名字空间。使用此名称时页面将会显示为[[Category:$1]]',
	'zip-failed' => 'Zip创建失败',
	'image-area-too-big' => '$1 对于缩略图过大，使用其实际大小。',
	'download-info' => '此处有{{plural: $1|一张|$1张}}大小为$2的图片',
	'download' => '下载',
	'readme-contents' => '文件$4包括下列内容：
分类$1<$2>$3中的图片。

==下载所有列出图片指南 ==

下载过程可能消耗几分钟至若干小时时间。

Windows:
将所有文件解压缩至相同文件夹，并运行$5
 $6
Linux/Mac OS
解压所有文件，并在终端中运行 sh $5',
);

