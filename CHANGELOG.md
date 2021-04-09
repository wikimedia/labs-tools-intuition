## v2.3.0 (2021-04-09)

### Added

* This is the first release to officially support PHP 8.0.

### Changed

* messages: Localisation updates from https://translatewiki.net.
* Util: The `parseExternalLinks()` no longer tolerates null, it requires a string.

### Fixed

* core: Add missing `use` statement to MessagesFunctions class. (Sam Wilson) [#127](https://github.com/Krinkle/intuition/pull/127)

### Removed

* messages: Remove mwsnapshots domain, the tool was retired.

## v2.2.0 (2020-07-13)

### Changed

* messages: Localisation updates from https://translatewiki.net.
* core: `Intuition::setLang()` does stricter normalization now to avoid invalid strings.
  This means `setLang('en_AU')` will now cause `en-au` to be selected.
* core: Public `Intuition` class methods now have strict PHP argument type declarations.

## v2.1.0 (2019-11-24)

### Changed

* messages: Localisation updates from https://translatewiki.net.

### Removed

* End support for PHP 7.0, and PHP 7.1. Intuition now requires PHP 7.2+.

## v2.0.0 (2019-05-13)

### Added

* core: The `Intuition::getAvailableLangs` method now supports a `$domain` parameter (optional).

### Changed

* messages: Localisation updates from https://translatewiki.net.
* core: The `Intuition::getAvailableLangs` method is now based on the current domain.
  Previously, it only considered legacy domains that shipped with the library.
* core: The `globalfunctions` option for `Krinkle\Intuition::__construct` is now disabled by default.

### Removed

* core: The `ToolStart.php` entry point has been removed. [#101](https://github.com/Krinkle/intuition/issues/101)
* core: Remove the un-namespaced `Intuition` and `TsIntuition` class aliases.
  Deprecated since v0.5.0, use `Krinkle\Intuition` instead.

### Fixed

* core: The `Intuition::setUseRequestParam` method now always sets the given value.
  Previously, it would silently ignored non-boolean values.

## v1.2.0 (2018-11-06)

### Changed

* messages: Localisation updates from https://translatewiki.net.
* core: Normalize lang codes in `addAvailableLang()`.

### Fixed

* core: Fix "Accept-Language" parsing bug in `initLangSelect()`.
* docs: Correct data type of `$dir` in `registerDomain()`.

## v1.1.0 (2018-08-21)

### Added

* core: New method `Intuition::addAvailableLanguage`. [#88](https://github.com/Krinkle/intuition/issues/88)

## v1.0.0 (2018-08-15)

### Changed

Intuition is now available under the MIT License.

* messages: Localisation updates from https://translatewiki.net.
* language: Update 'fallbacks' and 'Names' data from latest MediaWiki.

### Removed

* End support for PHP 5.5, PHP 5.6, and HHVM.
  Intuition now requires PHP 7.0+.

## v0.7.0 (2018-04-09)

### Changed

* messages: Localisation updates from https://translatewiki.net.
* language: Update 'rtl' and 'fallbacks' data from latest MediaWiki.
* language: Update 'Names' data from latest MediaWiki.

### Removed

* messages: Remove xtools domain.

### Fixed

* language: Exclude entries from langlist without language name.

## v0.6.1 (2017-06-20)

### Fixed

* core: Fix PHP warning when preference is set to a language without
  translations in the current domain. [#81](https://github.com/Krinkle/intuition/issues/81)

### Changed

* messages: Localisation updates from https://translatewiki.net.

## v0.6.0 (2017-04-20)

### Added

* core: Add use of native `trigger_error()` for notices and errors.

### Changed

* messages: Localisation updates from https://translatewiki.net.

### Removed

* messages: Remove recentanonymousactivity domain (decommissioned).

## v0.5.4 (2017-03-16)

### Added

* messages: Add new messages to rtrc domain.

### Changed

* messages: Localisation updates from https://translatewiki.net.

## v0.5.3 (2017-03-13)

### Changed

* Update `rtl` and `fallback` language data from 2015-03-17 to 2017-03-13.

## v0.5.2 (2017-03-10)

### Added

* core: Allow setting userlang via POST.

## v0.5.1 (2017-03-10)

### Added

* core: New dummy language 'qqx' for showing raw message keys. [#79](https://github.com/Krinkle/intuition/issues/79)

### Changed

* messages: Localisation updates from https://translatewiki.net.

## v0.5.0 (2017-03-01)

The web service (Toolforge dashboard) has been moved to a new repository. See <https://github.com/Krinkle/intuition-web>.

The Intuition classes are now namespaced under `Krinkle\Intuition`. The old names have been aliased for backwards-compatibility.

The Intuition library is now dependency-free!

### Changed

* build: Remove toollabs-base dependency.  Intuition is now dependency-free!
* Move Intuition classes to `Krinkle\Intuition` namespace (PSR-4). [#76](https://github.com/Krinkle/intuition/issues/76)
* messages: Localisation updates from https://translatewiki.net.

### Fixed

* core: Add support for `dashboardHome` values that do not have a trailing slash.

## v0.4.0 (2016-12-22)

### Changed

* js-env: Sort domain list to increase cache opportunities.
* messages: Localisation updates from https://translatewiki.net.
* Upgrade toollabs-base dependency to v0.8.0.

### Fixed

* core: Make getLangNames() public (again).

## v0.3.0 (2016-07-04)

### Removed

* messages: Remove monumentsapi domain (see <https://github.com/wikimedia/labs-tools-heritage>)
* messages: Remove dcatap domain (see <https://github.com/wikimedia/operations-dumps-dcat>)

### Changed

* messages: Localisation updates from https://translatewiki.net.
* dashboard: Add pageviews tool to the list.

## v0.2.3 (2016-03-16)

### Added

* core: Precompile language list for improved performance.

### Fixed

* core: Add English to fallback chains. [#53](https://github.com/Krinkle/intuition/issues/53)

## v0.2.2 (2015-11-12)

### Removed

* messages: Remove orphantalk2 domain (see <https://github.com/Krinkle/mw-tool-orphantalk>).

## v0.2.0 (2015-11-07)

Core framework now available as Composer package. See
<https://packagist.org/packages/krinkle/intuition>. Details at
<https://github.com/Krinkle/intuition/wiki/Migrate>.

New domains:

* Add whatleaveshere <https://github.com/Krinkle/mw-gadget-whatleaveshere>
* Add tsreports <https://tools.wmflabs.org/tsreports/>
* Add reflinks <https://tools.wmflabs.org/fengtools/reflinks/>
* Add templatetransclusioncheck <https://tools.wmflabs.org/templatetransclusioncheck/>
* Add dcatap <https://github.com/lokal-profil/DCAT>

### Added

* api: Implement HTTP 304 caching for load.php and api.php.
* core: Implement registerDomain() method for custom domains.
* js-env: Implement batching for API requests (100ms debounce).

### Changed

* core: Rewrite using new BaseTool and Bootstrap skin.
* language: Localisation data is now stored in JSON files instead of PHP.
* language: Update Names, Rtl, and Fallbacks from latest upstream MediaWiki.

### Fixed

* core: Generate valid html in Intuition::getPromoBox().
* dashboard: Use "1 month" indication instead of "4 weeks".
* demo: Fix undefined message "apple-stats" in demo8.

## v0.1.3 (2014-05-22)

Repository moved to <https://github.com/Krinkle/intuition>.

### Changed

* Rename `TsIntuitionUtil::return_dump` to `TsIntuitionUtil::returnDump`.
* Rename hook `TsIntuition_inithook` to `intuitionHookInit`.
  Old one still works, though only one will run (if both are
  defined, the new one is used).
* Rename TsIntuition to Intuition.

### Deprecated

* Deprecate global function `_()`.

## v0.1.2 (2013-04-01)

Dashboard moved to <https://toolserver.org/~intuition/>.

New domains:

* MonumentsAPI (<https://toolserver.org/~erfgoed/api/>)
* Recent Anonymous Activity (<https://toolserver.org/~krinkle/recentAnonymousActivity/>)

### Added

* dashboard: Add an "About" area on the index page of the tool which shows all textdomains and
  (where possible) linked to the tool's url.
* dashboard: Add demonstration sandboxes in `/public_html/demo/`.
* core: Textdomains may now define a $url in the definition file.
* core: Implement `TsIntuition::msgExists()` and `TsIntuition:getDomainInfo()`.
* core: Introduce new 'suppressfatal' option.
* core: Introduce new 'suppressbrackets' option.

### Changed

* dashboard: Sections converted to tabs with jQuery UI styling.

## v0.1.1 (2011-04-01)

New domains:

* OrphanTalk2 (<https://toolserver.org/~krinkle/OrphanTalk2/>)

### Added

* core: Add a clear-cookies and renew-cookies action.
* dashboard: Add confirmation messages after clearing or renewing cookies.
* PremadeToolserverTextdomains class has been written for transatewiki.net.

### Changed

* dashboard: SVN revision id is now visible in the header.
* core: Requesting an undefined message now triggers a TsIntution error on E_NOTICE level.

## v0.1.0 (2011-03-28)

First version in Wikimedia SVN.

## v0.0.1 (2011-03-23)

Initial version on Toolserver.
