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
	'introduction' => "Type in the name of a template (Wikipedias only at the moment, sorry) and press go. It's as simple as that. There is some caching (remembering of results), but that is unfortunately outside of the control of this tool and its owner.",
	'language-label' => 'Language',
	'namespace-label' => 'Namespace',
	'pagename-label' => 'Page name (excluding namespace)',
	'transclusion-count-label' => 'Number of tranclusions',
	'transclusion-count' => '$1 transclusion(s) found.',
	'error-suggestion' => 'Perhaps you misspelt (or mis-capitalised) the name of the page?',
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
	'language-label' => 'Idioma',
	'namespace-label' => 'Espacio de nombres',
	'pagename-label' => 'Nombre de la página (sin el espacio de nombres)',
	'transclusion-count-label' => 'Número de transclusiones',
	'transclusion-count' => '$1 transclusión(es) encontradas.',
	'error-suggestion' => 'Quizás has escrito mal el nombre de la página.',
	'time-label' => 'Tiempo necesario para ejecutar la orden',
);

/** French (Français)
 * @author Jean-Frédéric
 */
$messages['fr'] = array(
	'introduction' => 'Entrez le nom d’un modèle (Wikipédias seulement pour l’instant, désolé), et appuyez sur go. C’est aussi simple que cela. Il y a quelques mise en cache (mémorisation de résultats), mais c’est malheureusement hors du contrôle de cet outil et de son propriétaire.',
	'language-label' => 'Langue',
	'namespace-label' => 'Espace de noms',
	'pagename-label' => 'Nom de la page (sans l’espace de noms)',
	'transclusion-count-label' => 'Nombre de tranclusions',
	'transclusion-count' => '$1 transclusion(s) trouvées.',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'language-label' => 'Lingua',
	'namespace-label' => 'Espazo de nomes',
	'pagename-label' => 'Nome da páxina (sen o espazo de nomes)',
	'transclusion-count-label' => 'Número de transclusións',
	'transclusion-count' => 'Atopáronse $1 transclusións.',
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

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'enter-details' => 'Detailer aginn',
	'language-label' => 'Sprooch',
	'namespace-label' => 'Nummraum',
	'pagename-label' => 'Numm vun der Säit (ouni Nummraum)',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
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

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'language-label' => 'భాష',
	'namespace-label' => 'పేరుబరి',
	'pagename-label' => 'పుట పేరు (పేరుబరి లేకుండా)',
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
 */
$messages['zh-hans'] = array(
	'enter-details' => '输入详细信息',
	'language-label' => '语言',
	'namespace-label' => '名字空间',
	'pagename-label' => '页面名称（不包括命名空间）',
	'time-label' => '执行命令所需的时间',
);

