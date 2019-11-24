[![Packagist](https://img.shields.io/packagist/v/krinkle/intuition.svg?style=flat)](https://packagist.org/packages/Krinkle/intuition) [![Build Status](https://travis-ci.org/Krinkle/intuition.svg?branch=master)](https://travis-ci.org/Krinkle/intuition) [![Coverage Status](https://coveralls.io/repos/github/Krinkle/intuition/badge.svg?branch=master)](https://coveralls.io/github/Krinkle/intuition?branch=master)

# Intuition

## Install

It's recommended you use [Composer](https://getcomposer.org).

* Run `composer require Krinkle/intuition`.
* Include `vendor/autoload.php` in your program.

## Usage

To use it in a tool, read the [Usage documentation](https://github.com/Krinkle/intuition/wiki/Documentation#usage).

Example:

<pre lang="php">
require_once __DIR__ . '/vendor/autoload.php';

$int = new Intuition( 'mytool' );
$int->registerDomain( 'mytool', __DIR__ . '/i18n' );

echo $int->msg( 'example' );
</pre>

## Getting involved

### Testing

Use [Composer](https://getcomposer.org) for managing dependenices (such as [PHPUnit](https://phpunit.de)). Install Composer via your preferred package manager, or from [source](https://getcomposer.org/download/). Some tests also require [Node.js](https://nodejs.org/).

Prior to running tests, ensure presence of development dependencies:

<pre lang="sh">
composer install
</pre>

Run the tests:

<pre lang="sh">
composer test
</pre>

## See also

* [intuition-web](https://github.com/Krinkle/intuition-web): The web interface to Intuition.
