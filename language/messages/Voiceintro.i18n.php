<?php
/**
 *Internationalisation for VoiceIntro tool on Wikimedia Labs
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$url = '//tools.wmflabs.org/voiceintro/';

/** English
 * @author Rahul21
 * @author Harry Burt
 */
$messages['en'] = array(
	'voiceintro-title' => 'VoiceIntro', // Ignore
	'voiceintro-toolbar-record-label' => 'Record',
	'voiceintro-toolbar-stop-label' => 'Stop',
	'voiceintro-toolbar-clear-label' => 'Clear',
	'voiceintro-toolbar-upload-label' => 'Upload',
	'voiceintro-webaudio-not-supported' => 'WebAudio API is not supported for this browser',
	'voiceintro-upload-publish-succeeded' => 'Recording uploaded successfully:',
	'voiceintro-upload-publish-failed' => 'Recording was not uploaded.',
	'voiceintro-information-label' => 'Information',
	'voiceintro-information-speaker-label' => 'Speaker\'s name:',
	'voiceintro-information-language-label' => 'Language:',
	'voiceintro-mic-access-notify' => 'Click "Allow" to allow the browser to access your microphone.',
	'voiceintro-recording-notify' => 'Recording...',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'voiceintro-title' => 'The name of the tool{{notranslate}}',
	'voiceintro-toolbar-record-label' => 'Label text for the button to start recording.
{{Identical|Record}}',
	'voiceintro-toolbar-stop-label' => 'Label text for the button to stop recording.
{{Identical|Stop}}',
	'voiceintro-toolbar-clear-label' => 'Label text for the button to clear the recording.
{{Identical|Clear}}',
	'voiceintro-toolbar-upload-label' => 'Label text for the button to upload the recording.
{{Identical|Upload}}',
	'voiceintro-webaudio-not-supported' => 'Used as an error message when the WebAudio API is not supported by the browser.',
	'voiceintro-information-label' => 'Label text for the legend.
{{Identical|Information}}',
	'voiceintro-information-speaker-label' => 'Speaker\'s name:',
	'voiceintro-information-language-label' => 'Label text for the language dropdown list.
{{Identical|Language}}',
	'voiceintro-mic-access-notify' => 'Notifies the user to click "Allow" to allow the browser to get microphone access',
	'voiceintro-recording-notify' => 'Notifies the user that his pronunciation is being recorded',
);

/** Akan (Akan)
 * @author Riches4christ
 */
$messages['ak'] = array(
	'voiceintro-toolbar-stop-label' => 'gyae',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'voiceintro-toolbar-record-label' => 'Grabar',
	'voiceintro-toolbar-stop-label' => 'Aparar',
	'voiceintro-toolbar-clear-label' => 'Llimpiar',
	'voiceintro-toolbar-upload-label' => 'Xubir',
	'voiceintro-webaudio-not-supported' => 'La API WebAudio nun tien encontu nesti navegador.',
	'voiceintro-upload-publish-succeeded' => 'Grabación xubida correutamente:',
	'voiceintro-upload-publish-failed' => 'La grabación nun se xubió',
	'voiceintro-information-label' => 'Información',
	'voiceintro-information-language-label' => 'Llingua:',
	'voiceintro-mic-access-notify' => 'Calque "Permitir" pa permitir l\'accesu del navegador al micrófonu.',
	'voiceintro-recording-notify' => 'Grabando...',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'voiceintro-toolbar-record-label' => 'রেকর্ড',
	'voiceintro-toolbar-stop-label' => 'বন্ধ',
	'voiceintro-toolbar-clear-label' => 'পরিস্কার',
	'voiceintro-toolbar-upload-label' => 'আপলোড',
	'voiceintro-webaudio-not-supported' => 'ওয়েবঅডিও এপিআই এই ব্রাউজারে সমর্থিত নয়।',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'voiceintro-toolbar-record-label' => 'Enrollañ',
	'voiceintro-toolbar-stop-label' => 'Paouez',
	'voiceintro-toolbar-clear-label' => 'Riñsañ',
	'voiceintro-toolbar-upload-label' => 'Enporzhiañ',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'voiceintro-toolbar-clear-label' => 'ЦӀанъян',
	'voiceintro-toolbar-upload-label' => 'Чуяккха',
	'voiceintro-information-label' => 'Хаам',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Purodha
 */
$messages['de'] = array(
	'voiceintro-toolbar-record-label' => 'Aufzeichnen',
	'voiceintro-toolbar-stop-label' => 'Stop',
	'voiceintro-toolbar-clear-label' => 'Löschen',
	'voiceintro-toolbar-upload-label' => 'Hochladen',
	'voiceintro-webaudio-not-supported' => 'Die WebAudio-API wird für diesen Browser nicht unterstützt',
	'voiceintro-upload-publish-succeeded' => 'Die Aufnahme wurde erfolgreich hochgeladen:',
	'voiceintro-upload-publish-failed' => 'Die Aufnahme wurde nicht hochgeladen',
	'voiceintro-information-label' => 'Information',
	'voiceintro-information-speaker-label' => 'Name des Sprechers:',
	'voiceintro-information-language-label' => 'Sprache:',
	'voiceintro-mic-access-notify' => 'Klicke auf „Erlauben“, um dem Browser den Zugriff auf dein Mikrofon zu gestatten.',
	'voiceintro-recording-notify' => 'Aufnahme …',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Ovruni
 * @author VegaDark
 */
$messages['es'] = array(
	'voiceintro-toolbar-record-label' => 'Grabar',
	'voiceintro-toolbar-stop-label' => 'Detener',
	'voiceintro-toolbar-clear-label' => 'Borrar',
	'voiceintro-toolbar-upload-label' => 'Cargar',
	'voiceintro-webaudio-not-supported' => 'Este navegador no admite la API WebAudio.',
	'voiceintro-upload-publish-succeeded' => 'Grabación subida correctamente:',
	'voiceintro-upload-publish-failed' => 'La grabación no fue subida.',
	'voiceintro-information-label' => 'información',
	'voiceintro-information-speaker-label' => 'Nombre del ponente:',
	'voiceintro-information-language-label' => 'Idioma:',
	'voiceintro-mic-access-notify' => 'Pulsa en «Permitir» para que el navegador pueda acceder al micrófono.',
	'voiceintro-recording-notify' => 'Grabando…',
);

/** Finnish (suomi)
 * @author Nike
 * @author Stryn
 */
$messages['fi'] = array(
	'voiceintro-toolbar-record-label' => 'Äänitä',
	'voiceintro-toolbar-stop-label' => 'Pysäytä',
	'voiceintro-toolbar-clear-label' => 'Tyhjennä',
	'voiceintro-toolbar-upload-label' => 'Lataa',
	'voiceintro-webaudio-not-supported' => 'WebAudio-rajapinta ei ole tuettu tässä selaimessa.',
	'voiceintro-upload-publish-succeeded' => 'Nauhoitus tallennettiin', # Fuzzy
	'voiceintro-upload-publish-failed' => 'Nauhoitusta ei tallennettu',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'voiceintro-toolbar-record-label' => 'Ger upptøku',
	'voiceintro-toolbar-stop-label' => 'Støðga',
	'voiceintro-toolbar-clear-label' => 'Reinsa',
	'voiceintro-toolbar-upload-label' => 'Legg út',
	'voiceintro-webaudio-not-supported' => 'WebAudio API verður ikki stuðlað á hesum internetkaganum.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'voiceintro-toolbar-record-label' => 'Enregistrer',
	'voiceintro-toolbar-stop-label' => 'Arrêter',
	'voiceintro-toolbar-clear-label' => 'Effacer',
	'voiceintro-toolbar-upload-label' => 'Télécharger',
	'voiceintro-webaudio-not-supported' => 'L’API WebAudio n’est pas supportée par ce navigateur',
	'voiceintro-upload-publish-succeeded' => 'Enregistrement bien importé :',
	'voiceintro-upload-publish-failed' => 'L’enregistrement n’a pas été importé',
	'voiceintro-information-label' => 'Information',
	'voiceintro-information-language-label' => 'Langue :',
	'voiceintro-mic-access-notify' => 'Cliquez sur « Autoriser » pour permettre au navigateur d’accéder à votre microphone.',
	'voiceintro-recording-notify' => 'Enregistrement en cours…',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'voiceintro-toolbar-record-label' => 'Gravar',
	'voiceintro-toolbar-stop-label' => 'Deter',
	'voiceintro-toolbar-clear-label' => 'Limpar',
	'voiceintro-toolbar-upload-label' => 'Cargar',
	'voiceintro-webaudio-not-supported' => 'A API WebAudio non está soportada neste navegador.',
	'voiceintro-upload-publish-succeeded' => 'A gravación cargouse correctamente:',
	'voiceintro-upload-publish-failed' => 'Non se cargou a gravación',
	'voiceintro-information-label' => 'Información',
	'voiceintro-information-language-label' => 'Lingua:',
	'voiceintro-mic-access-notify' => 'Prema en "Permitir" para que o navegador poida acceder ao seu micrófono.',
	'voiceintro-recording-notify' => 'Gravando...',
);

/** Italian (italiano)
 * @author Beta16
 * @author Ontsed
 * @author RonktanG
 */
$messages['it'] = array(
	'voiceintro-toolbar-record-label' => 'Registra',
	'voiceintro-toolbar-stop-label' => 'Ferma',
	'voiceintro-toolbar-clear-label' => 'Pulisci',
	'voiceintro-toolbar-upload-label' => 'Carica',
	'voiceintro-webaudio-not-supported' => 'WebAudio API non è supportata per questo browser',
	'voiceintro-upload-publish-succeeded' => 'Registrazione caricata correttamente:',
	'voiceintro-upload-publish-failed' => 'La registrazione non è stata caricata.',
	'voiceintro-information-label' => 'Informazioni',
	'voiceintro-information-speaker-label' => "Nome dell'oratore:",
	'voiceintro-information-language-label' => 'Lingua:',
	'voiceintro-mic-access-notify' => 'Fai clic su "Consenti" per permettere al browser di accedere al microfono.',
	'voiceintro-recording-notify' => 'Registro...',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'voiceintro-toolbar-record-label' => '録音',
	'voiceintro-toolbar-stop-label' => '停止',
	'voiceintro-toolbar-clear-label' => '消去',
	'voiceintro-toolbar-upload-label' => 'アップロード',
	'voiceintro-webaudio-not-supported' => 'ご使用中のブラウザーは WebAudio API に対応していません',
	'voiceintro-upload-publish-succeeded' => '録音したものをアップロードしました:',
	'voiceintro-upload-publish-failed' => '録音したものをアップロードできませんでした。',
	'voiceintro-information-label' => '情報',
	'voiceintro-information-language-label' => '言語:',
	'voiceintro-mic-access-notify' => 'ブラウザーがマイクにアクセスできるように「許可」をクリックしてください',
	'voiceintro-recording-notify' => '録音中...',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'voiceintro-information-label' => 'ინფორმაცია',
);

/** Kannada (ಕನ್ನಡ)
 * @author VASANTH S.N.
 */
$messages['kn'] = array(
	'voiceintro-toolbar-record-label' => 'ದಾಖಲೆ',
	'voiceintro-toolbar-stop-label' => 'ನಿಲ್ಲಿಸಿ',
	'voiceintro-toolbar-clear-label' => 'ಅಳಿಸಿ',
	'voiceintro-toolbar-upload-label' => 'ನಕಲೇರಿಸು',
	'voiceintro-information-label' => 'ಮಾಹಿತಿ',
	'voiceintro-information-language-label' => 'ಭಾಷೆ:',
	'voiceintro-recording-notify' => 'ದಾಖಲೀಕರಣವಾಗುತ್ತಿದೆ....',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'voiceintro-toolbar-record-label' => '녹음',
	'voiceintro-toolbar-stop-label' => '정지',
	'voiceintro-toolbar-clear-label' => '지우기',
	'voiceintro-toolbar-upload-label' => '올리기',
	'voiceintro-webaudio-not-supported' => 'WebAudio API는 이 브라우저에서 지원하지 않습니다.',
	'voiceintro-upload-publish-succeeded' => '녹음을 성공적으로 올렸습니다:',
	'voiceintro-upload-publish-failed' => '녹음된 파일이 올려지지 않았습니다',
	'voiceintro-information-label' => '정보',
	'voiceintro-information-language-label' => '언어:',
	'voiceintro-mic-access-notify' => '브라우저가 마이크에 접근할 수 있도록 "허용"을 클릭하세요.',
	'voiceintro-recording-notify' => '녹음 중...',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'voiceintro-toolbar-record-label' => 'Opzeischne',
	'voiceintro-toolbar-stop-label' => 'Aanhallde',
	'voiceintro-toolbar-clear-label' => 'Läddesch maache',
	'voiceintro-toolbar-upload-label' => 'Huhlaade',
	'voiceintro-webaudio-not-supported' => 'Heh dä Brauser kann de <i lang="en" xml:lang="en">WebAudio API</i> nit.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'voiceintro-toolbar-record-label' => 'Ophuelen',
	'voiceintro-toolbar-stop-label' => 'Stopp',
	'voiceintro-toolbar-clear-label' => 'Eidel maachen',
	'voiceintro-toolbar-upload-label' => 'Eroplueden',
	'voiceintro-webaudio-not-supported' => 'WebAudio-API gëtt fir dëse Browser net ënnerstëtzt',
	'voiceintro-upload-publish-succeeded' => 'Den Enregistrement gouf eropgelueden',
	'voiceintro-upload-publish-failed' => 'Den Enregistrement gouf net eropgelueden',
	'voiceintro-information-label' => 'Informatioun',
	'voiceintro-information-language-label' => 'Sprooch:',
	'voiceintro-recording-notify' => 'Ophuelen...',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'voiceintro-toolbar-record-label' => 'Снимај',
	'voiceintro-toolbar-stop-label' => 'Запри',
	'voiceintro-toolbar-clear-label' => 'Отфрли',
	'voiceintro-toolbar-upload-label' => 'Подигни',
	'voiceintro-webaudio-not-supported' => 'Прилогот WebAudio не е поддржан на овој прелистувач',
	'voiceintro-upload-publish-succeeded' => 'Снимката е успешно подигната:',
	'voiceintro-upload-publish-failed' => 'Снимката не е подигната',
	'voiceintro-information-label' => 'Информации',
	'voiceintro-information-language-label' => 'Јазик:',
	'voiceintro-mic-access-notify' => 'Стиснете на „Дозволи“ за да му дадете пристап на прелистувачот до вашиот микрофон.',
	'voiceintro-recording-notify' => 'Снимам....',
);

/** Malayalam (മലയാളം)
 * @author Santhosh.thottingal
 */
$messages['ml'] = array(
	'voiceintro-information-language-label' => 'ഭാഷ:',
	'voiceintro-recording-notify' => 'റെക്കോഡിങ്ങ്...',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'voiceintro-toolbar-record-label' => 'ध्वनिमुद्रण करा',
	'voiceintro-toolbar-stop-label' => 'थांबवा',
	'voiceintro-toolbar-clear-label' => 'हटवा',
	'voiceintro-toolbar-upload-label' => 'अपभारण करा',
	'voiceintro-webaudio-not-supported' => 'या न्याहाळकाद्वारे जालध्वनी एपीआय सहाय्यीभूत नाही',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'voiceintro-information-language-label' => 'Bahasa:',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'voiceintro-toolbar-record-label' => 'Record',
	'voiceintro-toolbar-stop-label' => 'Stoppen',
	'voiceintro-toolbar-clear-label' => 'Wissen',
	'voiceintro-toolbar-upload-label' => 'Uploaden',
	'voiceintro-webaudio-not-supported' => 'De API voor WebAudio wordt niet ondersteund in deze browser',
	'voiceintro-upload-publish-succeeded' => 'Opname geüpload:',
	'voiceintro-upload-publish-failed' => 'Opname is niet geüpload',
	'voiceintro-information-label' => 'Gegevens',
	'voiceintro-information-language-label' => 'Taal:',
	'voiceintro-mic-access-notify' => 'Klik op ""Toestaan" om uw browser toegang te geven tot uw microfoon.',
	'voiceintro-recording-notify' => 'Bezig met opnemen...',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'voiceintro-toolbar-record-label' => 'Enregistrar',
	'voiceintro-toolbar-stop-label' => 'Arrestar',
	'voiceintro-toolbar-clear-label' => 'Escafar',
	'voiceintro-toolbar-upload-label' => 'Telecargar',
	'voiceintro-webaudio-not-supported' => 'L’API WebAudio es pas suportada per aqueste navigador',
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'voiceintro-information-language-label' => 'Język:',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'voiceintro-information-label' => 'مالومات',
	'voiceintro-information-language-label' => 'ژبه:',
);

/** Portuguese (português)
 * @author Cainamarques
 * @author Fúlvio
 */
$messages['pt'] = array(
	'voiceintro-toolbar-record-label' => 'Gravar',
	'voiceintro-toolbar-stop-label' => 'Parar',
	'voiceintro-toolbar-clear-label' => 'Limpar',
	'voiceintro-toolbar-upload-label' => 'Carregar',
	'voiceintro-webaudio-not-supported' => 'A API do WebAudio não é suportada por este navegador.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Luckas
 */
$messages['pt-br'] = array(
	'voiceintro-toolbar-record-label' => 'Gravar',
	'voiceintro-toolbar-stop-label' => 'Parar',
	'voiceintro-toolbar-clear-label' => 'Limpar',
	'voiceintro-toolbar-upload-label' => 'Enviar',
	'voiceintro-webaudio-not-supported' => 'A API do WebAudio não é suportada por este navegador.',
	'voiceintro-information-label' => 'Informação',
	'voiceintro-information-language-label' => 'Língua:',
	'voiceintro-recording-notify' => 'Gravando...',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'voiceintro-toolbar-record-label' => 'Reggistre',
	'voiceintro-toolbar-stop-label' => 'Stuèppe',
	'voiceintro-toolbar-clear-label' => 'Pulizze',
	'voiceintro-toolbar-upload-label' => 'Careche',
	'voiceintro-webaudio-not-supported' => "API WebAudio non g'è supportate pe stu browser",
	'voiceintro-information-label' => "'Mbormaziune",
	'voiceintro-information-language-label' => 'Lènghe:',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'voiceintro-toolbar-record-label' => 'Запись',
	'voiceintro-toolbar-stop-label' => 'Остановить',
	'voiceintro-toolbar-clear-label' => 'Очистить',
	'voiceintro-toolbar-upload-label' => 'Загрузить',
	'voiceintro-webaudio-not-supported' => 'WebAudio API не поддерживается этим браузером',
	'voiceintro-upload-publish-succeeded' => 'Запись успешно загружена:',
	'voiceintro-upload-publish-failed' => 'Запись не была загружена',
	'voiceintro-information-label' => 'Информация',
	'voiceintro-information-language-label' => 'Язык:',
	'voiceintro-mic-access-notify' => 'Нажмите кнопку «Разрешить», чтобы разрешить браузеру доступ к вашему микрофону.',
	'voiceintro-recording-notify' => 'Запись…',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'voiceintro-toolbar-record-label' => 'Snemaj',
	'voiceintro-toolbar-stop-label' => 'Ustavi',
	'voiceintro-toolbar-clear-label' => 'Počisti',
	'voiceintro-toolbar-upload-label' => 'Naloži',
	'voiceintro-webaudio-not-supported' => 'Ta brskalnik ne podpira WebAudio API',
	'voiceintro-upload-publish-succeeded' => 'Posnetek se je uspešno naložil:',
	'voiceintro-upload-publish-failed' => 'Posnetek se ni naložil',
	'voiceintro-information-label' => 'Informacije',
	'voiceintro-information-speaker-label' => 'Ime govorca:',
	'voiceintro-information-language-label' => 'Jezik:',
	'voiceintro-mic-access-notify' => 'Kliknite »Dovolim«, da bo brskalnik lahko dostopal do vašega mikrofona.',
	'voiceintro-recording-notify' => 'Snemanje ...',
);

/** Swedish (svenska)
 * @author Jopparn
 */
$messages['sv'] = array(
	'voiceintro-toolbar-record-label' => 'Spela in',
	'voiceintro-toolbar-stop-label' => 'Stopp',
	'voiceintro-toolbar-clear-label' => 'Rensa',
	'voiceintro-toolbar-upload-label' => 'Uppladdning',
	'voiceintro-webaudio-not-supported' => 'WebAudio API stöds inte för denna webbläsare',
	'voiceintro-upload-publish-succeeded' => 'Inspelning framgångsrikt uppladdad:',
	'voiceintro-upload-publish-failed' => 'Inspelningen laddades inte upp',
	'voiceintro-information-label' => 'Information',
	'voiceintro-information-language-label' => 'Språk:',
	'voiceintro-mic-access-notify' => 'Klicka på "Tillåt" för att tillåta webbläsaren att komma åt din mikrofon.',
	'voiceintro-recording-notify' => 'Spelar in...',
);

/** Tamil (தமிழ்)
 * @author ElangoRamanujam
 * @author Sank
 * @author கௌசிக் பிரபு
 */
$messages['ta'] = array(
	'voiceintro-toolbar-record-label' => 'பதிவிடுக',
	'voiceintro-toolbar-stop-label' => 'நிறுத்துக',
	'voiceintro-toolbar-clear-label' => 'நீக்கு',
	'voiceintro-toolbar-upload-label' => 'பதிவேற்றுக',
	'voiceintro-information-label' => 'தகவல்',
	'voiceintro-information-language-label' => 'மொழி:',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'voiceintro-toolbar-preview-label' => 'మునుజూపు',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'voiceintro-toolbar-record-label' => 'Запис',
	'voiceintro-toolbar-stop-label' => 'Стоп',
	'voiceintro-toolbar-clear-label' => 'Очистити',
	'voiceintro-toolbar-upload-label' => 'Вивантажити',
	'voiceintro-webaudio-not-supported' => 'WebAudio API не підтримується для цього веб-переглядача',
	'voiceintro-upload-publish-succeeded' => 'Запис успішно завантажено:',
	'voiceintro-upload-publish-failed' => 'Запис не було завантажено',
	'voiceintro-information-label' => 'Інформація',
	'voiceintro-information-language-label' => 'Мова:',
	'voiceintro-mic-access-notify' => 'Натисніть кнопку "Дозволити" аби дозволити браузер для доступу до вашого мікрофона.',
	'voiceintro-recording-notify' => 'Запис...',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'voiceintro-toolbar-record-label' => 'רעקארדירן',
	'voiceintro-toolbar-stop-label' => 'אויפהערן',
	'voiceintro-toolbar-clear-label' => 'רייניקן',
	'voiceintro-toolbar-upload-label' => 'אַרויפֿלאָדן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'voiceintro-toolbar-record-label' => '录制',
	'voiceintro-toolbar-stop-label' => '停止',
	'voiceintro-toolbar-clear-label' => '清除',
	'voiceintro-toolbar-upload-label' => '上传',
	'voiceintro-webaudio-not-supported' => 'WebAudio API与此浏览器不兼容',
	'voiceintro-upload-publish-succeeded' => '录音上传成功：',
	'voiceintro-upload-publish-failed' => '录音未能上传。',
	'voiceintro-information-label' => '信息',
	'voiceintro-information-language-label' => '语言：',
	'voiceintro-mic-access-notify' => '点击“同意”以允许浏览器使用您的麦克风。',
	'voiceintro-recording-notify' => '录音......',
);
