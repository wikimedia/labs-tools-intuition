# Migrate

## Migrate from central loading of Intuition library

Make sure your project does load any PHP files from `/data/project/intuition` in Toolforge. These steps explain how to local your own copy Intuition. You can control which version to load and when to update. The current version installed from `/data/project/intuition` is `0.7.0` which is the last version of Intuition that supports PHP 5. See [Help:Toolforge/Kubernetes](https://wikitech.wikimedia.org/wiki/Help:Toolforge/Kubernetes#PHP) for how to upgrade to PHP 7.

**3 Steps:**

1. Create a `composer.json` file in the directory where you maintain your source code. It should contain the following:
```json
{
  "require": {
    "krinkle/intuition": "0.7.0"
  }
}
```

If you edit source code from your own computer and have [Composer](https://getcomposer.org/) installed, or if you edit source code from `tools-login` remotely, then you may create this file automatically by running the command `composer require krinkle/intuition@0.7.0`.

2. Once the above file exists on `tools-login`, run the `composer install` command in the same directory. This will download a copy of the Intuition source code to a local directory called `vendor/`.
3. Remove the lines in your tool that include `ToolStart.php` from `/data/project/intuition` (for example `require_once`). Instead, make sure the following line is there:
```php
require_once __DIR__ . '/vendor/autoload.php';
```

That is it! You are now prepared for the migration.


## Migrate from central loading of messages 

To move messages to your own repo, follow these steps in below order.

1. Copy your messages directory from `intuition:/language/messages/:domain` to `your-repo:/messages`. Then commit, and push to your main branch. (example: [Krinkle/mw-tool-orphantalk@d6986d07](https://github.com/Krinkle/mw-tool-orphantalk/commit/d6986d079cf73b4c7dfee7dad40a7d78e63b3186))
2. Register your new local text domain. (example: [Krinkle/mw-tool-orphantalk](https://github.com/Krinkle/mw-tool-orphantalk/blob/d6986d079cf73b4c7dfee7dad40a7d78e63b3186/public_html/index.php#L21))
3. Register your repo at translatewiki by sending a commit such as <https://gerrit.wikimedia.org/r/237193> to Gerrit for review.
4. Ensure `l10n-bot` has CR+2 rights on your repository.

That's it. Your project is now independent and will receive translatewiki.net updates directly!
