[![Packagist](https://img.shields.io/packagist/v/krinkle/intuition.svg?style=flat)](https://packagist.org/packages/krinkle/intuition)

# Intuition

**Intuition** is a localisation library for PHP applications. Intuition is designed for use by web applications on Wikimedia Toolforge, but is implemented as a standalone library that is available for any application via its Composer package.

It was originally developed in 2011 for use on [Wikimedia Toolserver](https://meta.wikimedia.org/wiki/Toolserver) (since then replaced by [Toolforge](https://wikitech.wikimedia.org/wiki/Portal:Toolforge)).

> Intuition (INTUI-tion) originally stood for "<u>In</u>ternationalization for <u>T</u>oolserver's <u>U</u>ser <u>I</u>nterface".

Intuition supports the _Banana Milkshake_ message file format ([developed](https://github.com/wikimedia/jquery.i18n) for use in MediaWiki). We recommended [translatewiki.net](https://translatewiki.net) for managing translations, which allows contributors to translate and review message via a user-friendly interface, which are then periodically automatically exported in the Banana JSON format to your Git repository.

## Install

It's recommended you use [Composer](https://getcomposer.org).

* Run `composer require krinkle/intuition`.
* Include `vendor/autoload.php` in your program.

## Usage

To use it in a tool, read the [Usage documentation](./docs/API.md).

Example:

<pre lang="php">
require_once __DIR__ . '/vendor/autoload.php';

$int = new Intuition( 'mytool' );
$int->registerDomain( 'mytool', __DIR__ . '/i18n' );

echo $int->msg( 'example' );
</pre>

## Getting involved

Report issues by [creating a Phabricator task](https://phabricator.wikimedia.org/tag/intuition/).

Code coverage can be found at <https://doc.wikimedia.org/cover/labs-tools-intuition/>.

### Testing

Use [Composer](https://getcomposer.org) for managing dependencies (such as [PHPUnit](https://phpunit.de)). Install Composer via your preferred package manager, or from [source](https://getcomposer.org/download/). Some tests also require [Node.js](https://nodejs.org/).

Prior to running tests, ensure presence of development dependencies:

<pre lang="sh">
composer install
</pre>

Run the tests:

<pre lang="sh">
composer test
</pre>

## See also

* [intuition-web](https://gerrit.wikimedia.org/g/labs/tools/intuition-web): The web interface to Intuition.
