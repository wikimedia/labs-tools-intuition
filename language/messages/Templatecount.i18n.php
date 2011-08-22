<?php
/**
 * Interface messages for tool "templatecount"
 *
 * @toolowner jarry
 */

$url = '~jarry/templatecount/';

$messages = array();

/** English
 * @author Jarry1250
 */
$messages['en'] = array(
	'title' => 'Template transclusion count', // Optional
	'enter-details' => 'Enter details',
	'introduction' => "Type in the name of a template (Wikipedias only at the moment) and press go. It's as simple as that. There is some caching (remembering of results), but that is unfortunately outside of the control of this tool and its owner.",
	'language-label' => 'Language',
	'namespace-label' => 'Namespace',
	'pagename-label' => 'Page name (excluding namespace)',
	'transclusion-count-label' => 'Number of transclusions',
	'transclusion-count' => '$1 transclusion(s) found.',
	'error-suggestion' => 'Perhaps you misspelt (or incorrectly capitalised) the name of the page?',
	'time-label' => 'Time taken to execute command',
);

/** Message documentation (Message documentation)
 * @author Jarry1250
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
	'enter-details' => 'A heading inviting users to complete a form directly below',
	'introduction' => 'A basic introduction to the tool, illustrating its key facets.',
	'language-label' => '{{Identical|Language}}
The label for a textbox where users enter the language they wish to work with.',
	'namespace-label' => '{{Identical|Namespace}}
The label for a textbox where users enter the namespace they wish to work with.',
	'pagename-label' => 'The label for a textbox where users enter the name of the page they wish to work with, with extra note.',
	'transclusion-count-label' => 'The heading introducing the final result (the number of transclusions fount)',
	'transclusion-count' => '$1 is a number (1 or more), the number of transclusions of an article the tool found.',
	'error-suggestion' => 'A suggestion to the user when no transclusions are found of their chosen page, indicating that they  may have made a mistake in their input.',
	'time-label' => 'The label for the duration representing the time their query took to perform.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'enter-details' => 'Verskaf besonderhede',
	'introduction' => 'Verskaf die naam van \'n sjabloon (slegs vir Wikipedia\'s op die oomblik) en kliek op "OK". Dit is so eenvoudig. Daar word van kasgeheue gebruik gemaak (onthou vorige resultate), maar dit is buite die program en sy eienaar se beheer.',
	'language-label' => 'Taal',
	'namespace-label' => 'Naamruimte',
	'pagename-label' => 'Bladsynaam (sonder die naamruimte)',
	'transclusion-count-label' => 'Aantal sjablone',
	'transclusion-count' => '$1 sjablo(o)n(e) gevind.',
	'error-suggestion' => 'Miskien het u die bladsynaam verkeerd ingevoer (dink aan hoofletters en dergelike)?',
	'time-label' => 'Tyd geneem om opdrag uit te voer',
);

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'enter-details' => 'Amiesta los datos',
	'introduction' => "Escribi'l nome d'una plantía (namái Wikipedies de momentu) y calca Dir. Ye tan cenciello como eso. Hai dalgo de caché (recordar los resultaos), pero por desgracia eso ta fuera del control d'esta ferramienta y del so propietariu.",
	'language-label' => 'Llingua',
	'namespace-label' => 'Espaciu de nomes',
	'pagename-label' => 'Nome de la páxina (ensin espaciu de nomes)',
	'transclusion-count-label' => 'Númberu de tresclusiones',
	'transclusion-count' => "S'atoparon $1 tresclusiones.",
	'error-suggestion' => '¿Escribiríes mal (o coles mayúscules incorreutes) el nome de la páxina?',
	'time-label' => 'Tiempu necesariu pa executar el comandu',
);

/** Azerbaijani (Azərbaycanca)
 * @author Wertuose
 */
$messages['az'] = array(
	'language-label' => 'Dil',
	'namespace-label' => 'Adlar fəzası',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'enter-details' => 'Увесьці падрабязнасьці',
	'introduction' => 'Увядзіце назву шаблёну (прабачце, у цяперашні момант даступны толькі Вікіпэдыі) і націсьніце «Далей». Гэта нескладана. Існуе кэшаваньне (запамінаньне вынікаў), але гэта, на жаль, па за кантролем гэтага інструмэнту і яго ўладальніка.',
	'language-label' => 'Мова',
	'namespace-label' => 'Прасторы назваў',
	'pagename-label' => 'Назва старонкі (без прасторы назваў)',
	'transclusion-count-label' => 'Колькасьць трансклюзіяў',
	'transclusion-count' => 'Колькасьць знойдзеных трансклюзіяў: $1.',
	'error-suggestion' => 'Верагодна Вы зрабілі артаграфічную памылку ці не супадае рэгістар літар у назьве старонкі?',
	'time-label' => 'Час, які спатрэбіўся на выкананьня каманды',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'language-label' => 'Език',
	'namespace-label' => 'Именно пространство',
	'pagename-label' => 'Име на страницата (без именно пространство)',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'enter-details' => 'Merkañ an titouroù',
	'introduction' => "Merkañ anv ur patrom (Wikipediaoù hepken evit ar mare, hon digarezit) ha pouezañ war Mont. Ken aes ha tra eo. Tammoù krubuilhadennoù zo (memoriñ an disoc'hoù) siwazh, met an dra-se n'emañ ket e dalc'h an ostilh-mañ nag e dalc'h ar perc'henn anezhañ.",
	'language-label' => 'Yezh',
	'namespace-label' => 'Esaouenn anv',
	'pagename-label' => 'Anv ar bajenn (hep an esaouenn anv)',
	'transclusion-count-label' => 'Niver a dreuzkluzadurioù',
	'transclusion-count' => 'Kavez ez eus bet $1 treuzkluzadur.',
	'error-suggestion' => "Marteze eo bet kammskrivet (pe faziet war ar pennlizherennoù) anv ar bajenn ganeoc'h ?",
	'time-label' => 'Amzer lakaet evit seveniñ an urzh',
);

/** Danish (Dansk)
 * @author Erisos
 */
$messages['da'] = array(
	'enter-details' => 'Indtast detaljer',
	'language-label' => 'Sprog',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'enter-details' => 'Details eingeben',
	'introduction' => 'Gib den Namen einer Vorlage an (aktuell nur die Wikipedias) und klicke „Los“ – so einfach ist das. Es kann sein, dass gecachte Ergebnisse (ältere Vorlagenversionen) ausgegeben werden. Dies liegt leider außerhalb des Einflussbereichs dieses Hilfsprogramms.',
	'language-label' => 'Sprache',
	'namespace-label' => 'Namensraum',
	'pagename-label' => 'Seitenname (ohne Namensraum)',
	'transclusion-count-label' => 'Anzahl der Vorlageneinbindungen',
	'transclusion-count' => '$1 Vorlageneinbindung(en) wurden ermittelt.',
	'error-suggestion' => 'Vielleicht wurde der Name der Seite falsch geschrieben (Schreibung und/oder großer Anfangsbuchstabe)?',
	'time-label' => 'Benötigte Zeit zur Ausführung der Anweisung',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'introduction' => 'Geben Sie den Namen einer Vorlage an (aktuell nur die Wikipedias) und klicken Sie „Los“ – so einfach ist das. Es kann sein, dass gecachte Ergebnisse (ältere Vorlagenversionen) ausgegeben werden. Dies liegt leider außerhalb des Einflussbereichs dieses Hilfsprogramms.',
);

/** Spanish (Español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'enter-details' => 'Introduce los datos',
	'introduction' => 'Escribe el nombre de una plantilla (solo Wikipedias por el momento, lo siento) y pulsa Ir. Es tan simple como eso. Hay algo de caché (recordar los resultados), pero eso lamentablemente está fuera del control de esta herramienta y de su propietario.',
	'language-label' => 'Idioma',
	'namespace-label' => 'Espacio de nombres',
	'pagename-label' => 'Nombre de la página (sin el espacio de nombres)',
	'transclusion-count-label' => 'Número de transclusiones',
	'transclusion-count' => '$1 transclusión(es) encontradas.',
	'error-suggestion' => 'Quizás has escrito mal el nombre de la página.',
	'time-label' => 'Tiempo necesario para ejecutar la orden',
);

/** Basque (Euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'enter-details' => 'Xehetasunak idatzi',
	'language-label' => 'Hizkuntza',
	'namespace-label' => 'Izen-tartea',
);

/** Persian (فارسی)
 * @author Ebraminio
 */
$messages['fa'] = array(
	'enter-details' => 'واردکردن مشخصات',
	'language-label' => 'زبان',
	'namespace-label' => 'فضای نام',
	'pagename-label' => 'نام صفحه (به استثنای فضای نام)',
	'transclusion-count-label' => 'تعداد تراگنجانش‌ها',
	'transclusion-count' => '$1 تراگنجانش یافت شد',
	'error-suggestion' => 'شاید شما نام صفحه را از نظر املائی (یا در حروف بزرگ و کوچک) اشتباه کرده‌اید؟',
	'time-label' => 'زمان طول کشیده برای اجرای دستور',
);

/** Finnish (Suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'language-label' => 'Kieli',
	'namespace-label' => 'Nimiavaruus',
	'pagename-label' => 'Sivun nimi (ilman nimiavaruutta)',
);

/** French (Français)
 * @author Jean-Frédéric
 * @author Od1n
 * @author Seb35
 */
$messages['fr'] = array(
	'enter-details' => 'Entrez les détails',
	'introduction' => 'Entrez le nom d’un modèle (Wikipédias seulement pour l’instant, désolé), et appuyez sur go. C’est aussi simple que cela. Il y a quelques mise en cache (mémorisation de résultats), mais c’est malheureusement hors du contrôle de cet outil et de son propriétaire.',
	'language-label' => 'Langue',
	'namespace-label' => 'Espace de noms',
	'pagename-label' => 'Nom de la page (sans l’espace de noms)',
	'transclusion-count-label' => 'Nombre de tranclusions',
	'transclusion-count' => '$1 transclusion(s) trouvées.',
	'error-suggestion' => 'Peut-être avez-vous mal épelé (ou mal capitalisé) le nom de la page ?',
	'time-label' => 'Temps pris pour exécuter la commande',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'enter-details' => 'Insira os detalles',
	'introduction' => 'Escriba o nome dun modelo (sentímolo, nestes intres só para wikipedias) e prema no botón para continuar. É así de sinxelo. Hai problemas de memoria caché (que lembra os resultados), pero desgraciadamente isto está fóra do control da ferramenta e mais do seu dono.',
	'language-label' => 'Lingua',
	'namespace-label' => 'Espazo de nomes',
	'pagename-label' => 'Nome da páxina (sen o espazo de nomes)',
	'transclusion-count-label' => 'Número de transclusións',
	'transclusion-count' => 'Atopáronse $1 transclusións.',
	'error-suggestion' => 'Poida que escribise mal o nome da páxina.',
	'time-label' => 'Tempo necesario para executar o comando',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'enter-details' => 'הזנת פרטים',
	'introduction' => 'יש להזין את שם התבנית (כעת רק ויקיפדיה נתמכת, סליחה) וללחוץ "הפעלה". זה פשוט מאוד. יש קצת הטמנה (זכירת תוצאות), אבל זה מחוץ לשליטת הכלי הזה ושל מחברו.',
	'language-label' => 'שפה',
	'namespace-label' => 'מרחב שם',
	'pagename-label' => 'שם הדף (ללא מרחב השם)',
	'transclusion-count-label' => 'מספר ההכללות',
	'transclusion-count' => 'מספר ההכללות שנמצאו: $1',
	'error-suggestion' => 'אולי לא כתבת נכות את שם הדף? יש לכתוב במדויק אותיות קטנות ורישיות.',
	'time-label' => 'כמה זמן לקח להריץ את הפקודה',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'enter-details' => 'Részletek megadása',
	'introduction' => 'Add meg a sablon nevét (bocsi, egyelőre csak Wikipédiák esetén működik), majd kattints a Menj gombra. Ilyen egyszerű. Van némi gyorsítótárazás (az eredmények eltárolása), de ez sajnos az eszköz és az eszköz készítőjének hatáskörén kívülre esik.',
	'language-label' => 'Nyelv',
	'namespace-label' => 'Névtér',
	'pagename-label' => 'Lap neve (névtér nélkül)',
	'transclusion-count-label' => 'Beillesztések száma',
	'transclusion-count' => '$1 beillesztés található.',
	'error-suggestion' => 'Talán elgépelted a lap nevét, vagy rossz helyen használtál kis- és nagybetűket?',
	'time-label' => 'A parancs végrehajtásához szükséges idő',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'enter-details' => 'Entra detalios',
	'introduction' => 'Entra le nomine de un patrono (functiona solmente pro le Wikipedias) e preme sur "ir". Es tanto simple. Le datos pote esser recuperate del cache (memorisation de resultatos), ma isto es infortunatemente foras del influentia de iste instrumento e de su proprietario.',
	'language-label' => 'Lingua',
	'namespace-label' => 'Spatio de nomines',
	'pagename-label' => 'Nomine del pagina (sin spatio de nomines)',
	'transclusion-count-label' => 'Numero de transclusiones',
	'transclusion-count' => '$1 transclusion(es) trovate.',
	'error-suggestion' => 'Forsan tu ha mal orthographiate le nomine del pagina (o usate majusculas/minusculas incorrecte)?',
	'time-label' => 'Tempore prendite pro executar le commando',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'enter-details' => 'Jiv de Ennzelheite en',
	'introduction' => 'Jiv dä Name vun ene Schablohn aan — em Momang allein uß de Wikipedias — un scheck Ding Ennjaabe af. Et weed e beßje zweschejeschpeischert, wat heh dat Projramm fengk, ävver dat kann weeder heh dat Projramm noch singe Schriever ändere.',
	'language-label' => 'Schprooch',
	'namespace-label' => 'Appachtemang',
	'pagename-label' => 'Name för di Sigg, der ohne Appachtemang',
	'transclusion-count-label' => 'De Aanzahl enjebonge Schablohne es',
	'transclusion-count' => '$1 jefonge.',
	'error-suggestion' => 'Velleich häß De Desch vertipp udder jät verkeht jruß udder klein jeschrevve?',
	'time-label' => 'De Zigg, di dat Projramm jebruch hät',
);

/** Kurdish (Latin) (Kurdî (Latin))
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'language-label' => 'Ziman',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'language-label' => 'Lingua',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'enter-details' => 'Detailer aginn',
	'language-label' => 'Sprooch',
	'namespace-label' => 'Nummraum',
	'pagename-label' => 'Numm vun der Säit (ouni Nummraum)',
	'transclusion-count-label' => 'Zuel vun den agebonnene Schablounen',
	'transclusion-count' => '$1 agebonne Schabloune goufe fonnt',
	'error-suggestion' => 'Vläicht hutt Dir den Numm vun der Säit falsch geschriwwen (oder just grouss a kleng Buschtawe verwiesselt).',
	'time-label' => "Zäit déi gebraucht gouf fir d'Aufgab ze maachen",
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Број на превметнувања на шаблон',
	'enter-details' => 'Внесете податоци',
	'introduction' => 'Внесете го името на шаблонот (нажалост, засега само за Википедии) и стиснете на „Оди“. Толку. Ќе се изврши извесно кеширање (за да се запаметат резултатите), но тоа е нажалост вон контролата на алаткава и нејзиниот сопственик.',
	'language-label' => 'Јазик',
	'namespace-label' => 'Именски простор',
	'pagename-label' => 'Име на страницата (без именскиот простор)',
	'transclusion-count-label' => 'Број на превметнувања',
	'transclusion-count' => 'Пронајдени се $1 превметнувања.',
	'error-suggestion' => 'Можеби погрешно сте го напишале името на страницата?',
	'time-label' => 'Наредбата е извршена за:',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'enter-details' => 'Isikan butiran',
	'introduction' => 'Taipkan nama templat (kegunaan Wikipedia sahaja buat masa ini), kemudian tekan Pergi. Mudah sahaja. Nanti ia akan di-cache-kan (hasil carian akan diingati), tetapi ini adalah di luar kawalan alatan ini dan pemiliknya.',
	'language-label' => 'Bahasa',
	'namespace-label' => 'Ruang nama',
	'pagename-label' => 'Nama laman (tidak termasuk ruang nama)',
	'transclusion-count-label' => 'Bilangan transklusi',
	'transclusion-count' => '$1 transklusi dijumpai.',
	'error-suggestion' => 'Mungkin anda tersalah eja (atau tersalah letak huruf besar) nama halaman itu.',
	'time-label' => 'Masa yang diambil untuk melaksanakan perintah',
);

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'language-label' => 'زوون',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'enter-details' => 'Details opgeven',
	'introduction' => 'Geef de naam in van een sjabloon (werkt alleen voor Wikipedia\'s op het moment) en klik op "OK". Zo eenvoudig is het. Er wordt gebruik gemaakt van cachen (onthouden van resultaten), maar daar heeft dit hulpprogramma geen invloed op.',
	'language-label' => 'Taal',
	'namespace-label' => 'Naamruimte',
	'pagename-label' => 'Paginanaam (zonder de naamruimte)',
	'transclusion-count-label' => 'Aantal sjablonen',
	'transclusion-count' => '$1 sjablo(o)n(en) gevonden.',
	'error-suggestion' => 'Misschien hebt u de paginanaam verkeerd ingevoerd (denk aan hoofdletters en dergelijke)?',
	'time-label' => 'Uitvoertijd van het commando',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'enter-details' => 'Skriv inn detaljer',
	'introduction' => 'Skriv inn navnet på en mal (kun fra Wikipedia i øyeblikket, beklager) og trykk start. Det er så enkelt som det. Det er noe hurtiglagring (husking av resultater), men det er beklageligvis utenfor vår og verktøyets kontroll.',
	'language-label' => 'Språk',
	'namespace-label' => 'Navnerom',
	'pagename-label' => 'Sidenavn (ekskludert navnerom)',
	'transclusion-count-label' => 'Antall transklusjoner',
	'transclusion-count' => '$1 transklusjon(er) funnet.',
	'error-suggestion' => 'Kanskje du stavet navnet på siden feil (eller bommet på små og store bokstaver)?',
	'time-label' => 'Tiden det tar å utføre kommandoen',
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'language-label' => 'Æвзаг',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'enter-details' => 'Podaj szczegóły',
	'introduction' => 'Wpisz nazwę szablonu (w tej chwili wyłącznie z Wikipedii), a następnie kliknij dalej. To banalnie proste. Niektóre informacje mogą być buforowane (zapamiętane wyniki), ale niestety odbywa się to poza kontrolą tego narzędzia i jego autora.',
	'language-label' => 'Język',
	'namespace-label' => 'Przestrzeń nazw',
	'pagename-label' => 'Nazwa strony (bez przestrzeni nazw)',
	'transclusion-count-label' => 'Liczba transclusion (zaciągnięć treści innej strony)',
	'transclusion-count' => 'Odnaleziono $1 zaciągnięć treści innej strony.',
	'error-suggestion' => 'Możliwe, że zrobiłeś literówkę w nazwie strony (sprawdź wielkość liter).',
	'time-label' => 'Czas wykonywania polecenia',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'language-label' => 'ژبه',
	'namespace-label' => 'نوم-تشيال',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'enter-details' => 'Introduceți detalii',
	'introduction' => 'Introduceți numele unui format (pentru moment funcționează doar pentru Wikipedia, ne pare rău) și apăsați Du-te. Atât de simplu. Trebuie spus că se rețin și informații în memoria cache (date care țin de rezultate), dar, din păcate, acest lucru nu poate fi controlat de către această unealtă sau de către deținătorul ei.',
	'language-label' => 'Limbă',
	'namespace-label' => 'Spațiu de nume',
	'pagename-label' => 'Numele paginii (fără spațiul de nume)',
	'transclusion-count-label' => 'Număr de transcluderi',
	'transclusion-count' => '$1 transcluderi(e) găsite(ă).',
	'error-suggestion' => 'Poate că ați ortografiat greșit numele paginii (sau ați folosit în mod eronat majuscula/minuscula inițială)?',
	'time-label' => 'Timpul necesar executării comenzii',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'enter-details' => 'Mitte le dettaglie',
	'introduction' => "Scrive 'u nome d'e 'nu modelle (Uicchipedie sulamende pe mò) e cazze ''veje''. Jè probbie facile facile. Ste quacche cache (arrecorde de le resultate), ma ca comungue jè fore da 'u condrolle de stu strumende e 'u probbietarie sue.",
	'language-label' => 'Lènghe',
	'namespace-label' => 'Namespace',
	'pagename-label' => "Nome d'a pàgene (escluse 'u namespace)",
	'transclusion-count-label' => "Numere de 'nglusiune",
	'transclusion-count' => "$1 'nglusiune acchiate.",
	'error-suggestion' => "Pò essere ca tu è scritte male (o è ausate 'u maiuscole) pu nome d'a pàgene?",
	'time-label' => "Tiembe pigghiate pe eseguì 'u comande",
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'enter-details' => 'Vnesite podrobnosti',
	'introduction' => 'Vnesite ime predloge (trenutno samo Wikipedije, oprostite) in pritisnite Pojdi. Tako preprosto je. Nekaj je predpomnjenja (spomina rezultatov), vendar je to žal izven nadzora tega orodja in njenega lastnika.',
	'language-label' => 'Jezik',
	'namespace-label' => 'Imenski prostor',
	'pagename-label' => 'Naslov strani (brez imenskega prostora)',
	'transclusion-count-label' => 'Število vključitev',
	'transclusion-count' => 'Najdeno $1 preusmeritev.',
	'error-suggestion' => 'Morda ste narobe črkovali (ali uporabili napačne začetnice) naslov strani?',
	'time-label' => 'Čas, porabljen za izvršitev ukaza',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'enter-details' => 'Унос података',
	'introduction' => 'Унесите назив шаблона и кликните на дугме „Иди“. Има и мало привременог меморисања, али то је ван досега ове алатке и његовог власника.',
	'language-label' => 'Језик',
	'namespace-label' => 'Именски простор',
	'pagename-label' => 'Назив странице (без именског простора)',
	'transclusion-count-label' => 'Број трансклузија',
	'transclusion-count' => 'Пронађено трансклузија: $1.',
	'error-suggestion' => 'Можда сте погрешно унели назив странице.',
	'time-label' => 'Време за извршавање наредбе',
);

/** Serbian Latin ekavian (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'enter-details' => 'Unos podataka',
	'introduction' => 'Unesite naziv šablona i kliknite na dugme „Idi“. Ima i malo privremenog memorisanja, ali to je van dosega ove alatke i njegovog vlasnika.',
	'language-label' => 'Jezik',
	'namespace-label' => 'Imenski prostor',
	'pagename-label' => 'Naziv stranice (bez imenskog prostora)',
	'transclusion-count-label' => 'Broj transkluzija',
	'transclusion-count' => 'Pronađeno transkluzija: $1.',
	'error-suggestion' => 'Možda ste pogrešno uneli naziv stranice.',
	'time-label' => 'Vreme za izvršavanje naredbe',
);

/** Swedish (Svenska)
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'enter-details' => 'Skriv in detaljer',
	'introduction' => 'Skriv in namnet på en mall (Wikipedior endast just nu, tyvärr) och tryck på start. Det är så enkelt som det. Det finns viss cachelagring (minne av resultat), men det är tyvärr utanför verktygets och dess ägares kontroll.',
	'language-label' => 'Språk',
	'namespace-label' => 'Namnrymd',
	'pagename-label' => 'Sidans namn (exklusive namnrymd)',
	'transclusion-count-label' => 'Antal mallinkluderingar',
	'transclusion-count' => '$1 mallinkludering(ar) hittades.',
	'error-suggestion' => 'Kanske du felstavade (eller fel-versaliserade) namnet på sidan?',
	'time-label' => 'Tid det tog att utföra kommandot',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'language-label' => 'భాష',
	'namespace-label' => 'పేరుబరి',
	'pagename-label' => 'పుట పేరు (పేరుబరి లేకుండా)',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'enter-details' => 'Ipasok ang mga detalye',
	'introduction' => 'Makinilyahing papasok ang pangalan ng isang suleras (Mga wikipedia lamang sa ngayon, paumanhin) at pindutin ang gawin. Ganyang lang kapayak ito. May ilang mga pagtatanda (pag-alala ng mga resulta), subalit sa kasamaang palad ay nasa labas ng pagtaban ng kasangkapang ito at ng may-ari nito.',
	'language-label' => 'Wika',
	'namespace-label' => 'Puwang ng pangalan',
	'pagename-label' => 'Pangalan ng pahina (hindi kasama ang puwang ng pangalan)',
	'transclusion-count-label' => 'Bilang ng mga paglilipat at pagsasama',
	'transclusion-count' => '$1 natagpuang (mga) transklusyon.',
	'error-suggestion' => 'Marahil ay mali ang pagbabaybay mo (o hindi sinasadyang napalaki ang titik) ng pangalan ng pahina?',
	'time-label' => 'Panahong nagamit upang maisagawa ang utos',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'enter-details' => 'Nhập chi tiết',
	'introduction' => 'Nhập tên của một bản mẫu (rất tiếc, lúc này chỉ hỗ trợ Wikipedia) và nhấn Xem. Chỉ có vậy thôi. Kết quả sẽ được ghi vào bộ nhớ đệm, nhưng bộ nhớ đệm nằm bên ngoài sự kiểm soát của công cụ này và người chủ của nó.',
	'language-label' => 'Ngôn ngữ',
	'namespace-label' => 'Không gian tên',
	'pagename-label' => 'Tên trang (trừ không gian tên)',
	'transclusion-count-label' => 'Số trang nhúng',
	'transclusion-count' => 'Tìm thấy $1 trang nhúng.',
	'error-suggestion' => 'Có lẽ bạn đã nhập sai chính tả hoặc cần phân biệt chữ hoa/thường trong tên trang?',
	'time-label' => 'Thời gian thực hiện lệnh',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'enter-details' => '输入详细信息',
	'language-label' => '语言',
	'namespace-label' => '名字空间',
	'pagename-label' => '页面名称（不包括命名空间）',
	'time-label' => '执行命令所需的时间',
);

