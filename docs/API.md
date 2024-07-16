Refer to the [README](/README.md) for how to get started with Intuition.

## Intuition Class

**Note:** If you need messages from multiple domains, you **should not create multiple instances** of this class. Instead, use the second argument of `msg()`. This class is not a wrapper for one particular domain, it's an interface to the entire system and the `domain` option merely sets a default domain for the `msg` method.

**Demo:** Check a live working sandbox demo of the above script: [demo1](https://intuition.toolforge.org/demo/demo1.php).

### Initialization

#### construct

**Arguments**:

* `$options` (array or string): An array of options or if you just need to set the text-domain (basic usage) pass a string. <br />Options:
 * `domain` (string): This will set the default domain for messages. Defaults to 'general' (first character is case-insensitive, the rest should be lowercase).
 * `lang` (string): This will override the smart detection method (which uses cookies, parameter overrides etc.). Handy for debugging in a certain language.
 * `globalfunctions` (bool): Set to false to disable the declaration of global functions like `_()`
 * `suppressfatal` (bool): Don't show fatal errors on the page.
 * `suppressnotice` (bool): Don't show warning notices on the page.
 * `suppressbrackets` (bool): Suppress brackets, `msg()` will return "Messagekey" instead of "[messagekey]" for undefined messages.
 * `stayalive` (bool): Don't exit the php process on fatal errors.
 * `param` (bool): If you use the `userlang` GET parameter for something else, you can set this to false to prevent TsIntuition from using. and thus it will not override the language set by the cookie.

**Examples**

```php
<?php
// Basic example
$I18N = new Intuition( 'mytool' );

// Advanced example. This is in case you already have the _() function for something else
$opts = array(
 'globalfunctions' => false,
 'domain' => 'mytool',
);
$I18N = new Intuition( $opts );
```

### Message functions

#### msg

`msg()` gets a message from the message blob. If passed a custom text-domain name it will load the domain on demand if not loaded already.

**Arguments**
* `$key` (string): Message key to retrieve a message for.
* `$options` (array or string): A text-domain name or an array with one or more options:
 * `domain` (string): overrides the currently selected text-domain, and if needed loads it from disk
 * `lang` (string): overrides the currently selected language
 * `variables` (array): numerical array to do variable replacements ($1> var[0], $2> var[1], etc.)
 * `raw-variables` (bool): boolean to determine whether the variables should be escaped as well
 * `parsemag` (bool): boolean to determine whether the message should be transformed using magic phrases (PLURAL, etc.)
 * `escape` (string): Optionally the return can be escaped. By default this takes place after variable replacement. Set 'raw-variables' to true if you just want the raw message to be escaped and have escaped the variables already.<br/>
    plain<br/>
    html (<>"& escaped)<br/>
    htmlspecialchars (alias of 'html')<br/>
    htmlentities (foreign/UTF-8 chars converted as well)

**Examples**
```php
<?php
// Basic usage
echo $I18N->msg( 'message-key' );

// Get a message from the general domain
echo $I18N->msg( 'form-submit', 'general' );

// More advanced usage:
// Get a message, replace $1/$2 with $username/$lastvisit,
//  escape html in the msg (without touching html in $username/$lastvisit).
$username = '<strong>John</strong>';
$lastvisit = '<em>2010-12-31</em>';

$welcomeback = $I18N->msg( 'welcome-back', array(
  'variables' => array($username, $lastvisit),
  'escape' => 'html',
  'raw-variables' => true
) );

echo "<p>$welcomeback</p>";

// Now the support for magic words like {{PLURAL: ...}}
// Get a message, parse the magic word using the $1

$numberOfSeconds = 3;

$seconds = $I18N->msg( 'seconds', array('variables' => array( $numberOfSecond ), 'parsemag' => true ) );

echo "<p>$seconds</p>";

```

#### msgExists
Check if a message exists at all. Returns boolean.

**Arguments**
* See `msg()`

#### setMsg
When debugging, it may be useful to sometimes simulate a message definition during experimentation. This function allows to add a message to the blob without having to actually define it in the message files or with translatewiki.net.

**Arguments**
* `$key` (string): Message-key
* `$message` (string): Message itself
* `$domain` (string; _optional_): Defaults to the active text domain
* `$lang` (string; _optional_): Defaults to the currently selected language

**Example:**

```php
<?php
_e( 'start-foobar' ); // Echoes [start-foobar] if that message doesn't exist

$I18N->setMsg( 'start-foobar', 'Click here to start Foobar' );

_e( 'start-foobar' ); // Echoes "Click here to start Foobar"
```

#### setMsgs
Same as `setMsg`, but takes an array to set multiple messages.

**Arguments**
* `$messagesByKeys` (array): Array of message-keys and message values.
* `$domain` (string; _optional_): Defaults to the active text domain
* `$lang` (string; _optional_): Defaults to the currently selected language

**Example:**
```php
<?php
$tmpMsgs = array(
 'awesome' => 'Awesome!',
 'lipsum' => 'Lorem ipsum.',
);
$I18N->setMsgs( $tmpMsgs );
```

### Get / Set functions

#### get (variablename)
* `getLang()`: Returns the language code of the language currently used by the application as main language (the one determined by either the cookie, the userlang-param, override when object was constructed, or set later on via `setLang()`
* `getDir()`: Return the directionality (ltr or rtl) of the current language. <br />Example: `$html = "<html dir='{$I18N->getDir()}' lang='{$I18N->getLang()}'>";`
* `getDomain()`: Returns the currently selected text domain name.
* `getCookieNames()`: Returns an array of preferences names and their cookie name keys, such as:<br />`array( 'userlang' => 'TsIntuition_userlang' )` These cookie names might change in the future, so be sure to always use this function (or the next function) when reading/writing Intuition cookies. Do **not** rely on the cookie names directly.
* `getCookieName( $name )`: Returns only the name of the wanted cookie. <br />`$cookie = $_COOKIES[ $I18N->getCookieName( 'userlang' ) ];`
* `getParamNames()`: Currently the system uses only one variable (userlang), but for future reference this has been created in advance. Works the same as for cookies, but for variables
* `getParamName( $name )`: See getCookieName.
* `getUseRequestParam()`: Returns a boolean. False if using the userlang-parameter was disabled, true otherwise (default).

#### set (variablename)
* `setLang( $lang )`: Override the currently selected language for messages with a different one. If possible, pass the `lang` option to the constructor instead.
* `setDomain( $domain )`: Override the currently text domain for messages with a different one. If possible, pass the `domain` option to the constructor instead.
* `setUseRequestParam( $bool )`: Disable/Enable usage of the `userlang` parameter. Note that if called after the construction, the language choice has already been initialized. If possible, pass the `param` option to the constructor instead. Or use `setUseRequestParam()` function, but don't forget to call `$I18N->refreshLang()` for it to take effect. Note that calling `refreshLang` will undo anything `setLang()` has done, and a possible value for `$_GET['userlang']` will now no longer be ignored.

#### is(variablename)
* `isRTL( $langcode )`: Returns true when the current language or (if set) $langcode is RTL.

#### getLocale
Returns an array of common values for the current language for usage in PHP's [`setlocale`](http://php.net/setlocale).

```php
<?php
// for 'en'
array( 'en', 'EN', 'en_EN', 'EN_en' );
// for 'zh-classical'
array( 'zh-classical', 'ZH-CLASSICAL' , 'zh_ZH', 'ZH_zh', 'zh', 'ZH' );
```

### Lang functions

#### getLangFallbacks
Return the fallback languages for the given language.

**Arguments**
* `$lang` (string): Language code of language to get fallback for.

**Example:**
```php
<?php
$I18N->getLangFallbacks( 'nds' ); // array( 'de' )
```

#### getLangName
Return the language name in the native language.

**Arguments**
* `$lang` (string): Language code of language to get name for.

**Example:**
```php
<?php
$I18N->getLangName( 'de' ); // 'Deutsch'
$I18N->getLangName( 'blabla' ); // ''
```

#### getAvailableLangs
Return all languages available for the current interface.

**Example:**
```php
<?php
$langs = $I18N->getAvailableLangs();
$langs['af']; //'Afrikaans' # Afrikaans
$langs['he']; // 'עברית'  # Hebrew
```

#### getLangNames
Return all known languages, including those that do not have translations in the current interface.

**Example:**
```php
<?php
$langs = $I18N->getLangNames();
$langs['af']; //'Afrikaans' # Afrikaans
$langs['he']; // 'עברית'  # Hebrew
```

### Cookie functions

#### renewCookies
#### wipeCookies
#### hasCookies
This function checks wether the current visitor has cookies set already or if it's a user that is new to the tool (or hasn't set it yet / wiped it / old browser without cookies).


### Backlinks
> See https://intuition.toolforge.org/demo/demo5.php for a live demo of these

#### getPromoBox
#### getFooterLine

**Arguments**:
* **helpTranslateDomain**: Either <tt>TSINT_HELP_ALL</tt>, <tt>TSINT_HELP_CURRENT</tt> ( _default_ ), <tt>TSINT_HELP_NONE</tt> or a string with a textdomain name

### Other functions

#### dateFormatted
Get a localized date. Pass a format, time or both.
Defaults to the current timestamp in the language's default date format.

**Arguments**
* `$format` (string): Date format compatible with [`strftime`](http://php.net/strftime)
* `$timestamp` (mixed): Timestamp (seconds since unix epoch) or string (ie. "2011-12-31")
* `$lang` (string): Language code. Defaults to current language (through getLocale() )

**Examples**
```php
<?php
// If the current user is French and today is 2011-03-28:
// Uses the 'date-only format' from the general textdomain
$I18N->dateFormatted(); // "28 mars 2011"

// We use the native date+time format from PHP and force 'German' as language and use a parseable string as timestamp
$I18N->dateFormatted( '%c' ,'2011-04-01 5 AM', 'de' ); // "1. April 2011 05:00:00 UTC"

// Use the default 'date-only format' and the current language (say Dutch)
// And pass a unix timestamp from somewhere
$I18N->dateFormatted( 1302121820 ); // "06 april 2011"
```

#### refreshLang
In the constructor the language choice will be initialized. It starts by checking if there were any hard overrides passed as an option, then it checks (if the param wasn't disabled) if userlang contains a usable value. And if no override is present it will get the userlang-cookie and use it as active language. If the visitor has never visited a tool translated by Intuition English will be presumed and used  as default.

Calling `refreshLang` will drop the currently selected language, and re-do initialization.

## Functions
By default four functions are declared. None of these are required, but they are provided as handy shortcuts for commonly used settings. If you don't need them or if they conflict with function names you have, you can disable them by setting `'globalfunctions'` to `false` when initiating the `$I18N` object.

#### function `_()`
Return a message.

**Arguments**
* `$key`
* `$options`

**Shortcut for**
```php
<?php
$I18N->msg( $key, $options );
```


#### function `_g()`
Return a message from the "general" domain.

**Arguments**
* `$key`
* `$options`

**Shortcut for**
```php
<?php
$I18N->msg( $key, 'general' );
```


#### function _html()
Return a message escaped as html.

**Arguments**
* `$key`
* `$options`

**Shortcut for**
```php
<?php
echo $I18N->msg( $key, array( 'escape' => 'html' ) );
```


#### function `_e()`
Echo a message.

**Arguments**
* `$key`
* `$options`

**Shortcut for**
```php
<?php
echo $I18N->msg( $key, $options );
```

## Debug and development
The automated translatewiki.net synchronisation is now active, but sometimes you may want do manipulate a textdomain just for your own tool during debugging without making the change on translatewiki for real. Follow the next few steps to add a text domain without having to register it anywhere other than in your own code.

### Register single messages locally
* Initialise everything as usual, for example:
```php
$I18N = new Intuition( 'Mydomain' );
```

* Then you can add one message:
```php
$I18N->setMsg( 'foo-bar', 'Foos and Bars are very important' );
```

* .. or multiple ones:
```php
<?php
$tmpMsgs = array(
  'foo-bar' => 'Foos and Bars are very imporant.',
  'click-bar' => 'To activate Foo, click Bar.',
);
$I18N->setMsgs( $tmpMsgs  );

// $I18N->msg( 'foo-bar' ) now works normally
```

### Demos

There are a few demonstration pages to show you how this tool works.
[Check them out](https://tools.wmflabs.org/intuition/demo/demo1.php)!

### Register custom domain

* Create a messages directory with a file `en.json`.
* Define the messages object, like the following:
  ```json
  {
    "foo": "Foo bar",
    "lorem": "Lorem ipsum",
    "hello": "Hello world"
  }
  ```
* After instantiating Intuition, register the domain and its message directory.
  ```php
  <?php
  $I18N = new Intuition( 'example' );
  $I18N->registerDomain( 'example', __DIR__ . '/i18n' );

  $I18N->msg( 'foo' ); // "Foo bar"
  ```
