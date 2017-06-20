## v0.6.1 (2017-06-20)

### Bug fixes

* core: Fix PHP warning when preference is set to a language without
  translations in the current domain. (issue [#81](https://github.com/Krinkle/intuition/issues/81))

### Maintenance

* Localisation updates from https://translatewiki.net.
* test: Improve overall code coverage.

## v0.6.0 (2017-04-20)

Domains:

* Removed recentanonymousactivity (decommissioned).

### Enhancements

* core: Use native trigger_error() for notices and errors.

### Maintenance

* build: Add https://coveralls.io integration
* Localisation updates from https://translatewiki.net.
* langlist: Recompile.

## v0.5.4 (2017-03-16)

### Maintenance

* build: Enforce banana checker.
* Localisation updates from https://translatewiki.net.
* rtrc: Add new messages.
* test: Improve overall code coverage.

## v0.5.3 (2017-03-13)

### Maintenance

* Update `rtl` and `fallback` language data from 2015-03-17 to 2017-03-13.

## v0.5.2 (2017-03-10)

### Enhancements

* core: Allow setting userlang via POST.

## v0.5.1 (2017-03-10)

### Enhancements

* core: New dummy language 'qqx' for showing raw message keys. (issue [#79](https://github.com/Krinkle/intuition/issues/79))

### Maintenance

* Localisation updates from https://translatewiki.net.

## v0.5.0 (2017-03-01)

The web service (Tool Labs dashboard) has been moved to a new repository. See <https://github.com/Krinkle/intuition-web>.

The Intuition classes are now namespaced under `Krinkle\Intuition`. The old names have been aliased for backwards-compatibility.

### Enhancements

* Intuition is now dependency-free!
* Move Intuition classes to `Krinkle\Intuition` namespace (PSR-4). (issue [#76](https://github.com/Krinkle/intuition/issues/76))

### Bug fixes

* core: Support 'dashboardHome' without trailing slash.

### Maintenance

* Localisation updates from https://translatewiki.net.
* build: Remove toollabs-base dependency.
* build: Switch from jscs/jshint to eslint.
* build: Update PHPUnit from 3.7 to 4.8.
* langlist: Recompile.
* test: Make Util.php code coverage 100%.

## v0.4.0 (2016-12-22)

### Enhancements

* js-env: Sort domain list to increase cache opportunities.

### Bug fixes

* core: Make getLangNames() public (again).

### Maintenance

* Localisation updates from https://translatewiki.net.
* langlist: Recompile.
* Upgrade toollabs-base to v0.8.0.

## v0.3.0 (2016-07-04)

Domains:

* Removed monumentsapi (<https://github.com/wikimedia/labs-tools-heritage>)
* Removed dcatap (<https://github.com/wikimedia/operations-dumps-dcat>)

### Maintenance

* Localisation updates from https://translatewiki.net.
* langlist: Recompile.
* dashboard: List pageviews tool.
* dashboard: Tool info updates.

## v0.2.3 (2016-03-16)

### Enhancements

* core: Precompile language list for performance.

### Bug fixes

* core: Add English to fallback chains. (issue [#53](https://github.com/Krinkle/intuition/issues/53))

## v0.2.2 (2015-11-12)

Domains:

* Removed orphantalk2 <https://github.com/Krinkle/mw-tool-orphantalk>

## v0.2.0 (2015-11-07)

Core framework now available as Composer package. See
<https://packagist.org/packages/krinkle/intuition>. Details at
<https://github.com/Krinkle/intuition/wiki/Migrate>.

Domains:

* Added whatleaveshere <https://github.com/Krinkle/mw-gadget-whatleaveshere>
* Added tsreports <https://tools.wmflabs.org/tsreports/>
* Added reflinks <https://tools.wmflabs.org/fengtools/reflinks/>
* Added templatetransclusioncheck <https://tools.wmflabs.org/templatetransclusioncheck/>
* Added dcatap <https://github.com/lokal-profil/DCAT>

### Enhancements

* api: Implement HTTP 304 caching for load.php and api.php.
* core: Implement registerDomain() method for custom domains.
* core: Rewrite using new BaseTool and Bootstrap skin.
* js-env: Implement batching for API requests (100ms debounce).

### Bug fixes

* core: Generate valid html in Intuition::getPromoBox().
* dashboard: Use "1 month" indication instead of "4 weeks".
* demo: Fix undefined message "apple-stats" in demo8.

### Maintenance

* language: Localisation data is now stored in JSON files instead of PHP.
* language: Update Names, Rtl, and Fallbacks from latest upstream MediaWiki.

## v0.1.3 (2014-05-22)

Repository moved to <https://github.com/Krinkle/intuition>.

### Maintenance

* Rename `TsIntuitionUtil::return_dump` to `TsIntuitionUtil::returnDump`.
* Deprecate global function `_()`.
* Rename hook `TsIntuition_inithook` to `intuitionHookInit`.
  Old one still works, though only one will run (if both are
  defined, the new one is used).
* Rename TsIntuition to Intuition.

## v0.1.2 (2013-04-01)

Dashboard moved to <http://toolserver.org/~intuition/>.

New domains:

* MonumentsAPI <http://toolserver.org/~erfgoed/api/>
* Recent Anonymous Activity <http://toolserver.org/~krinkle/recentAnonymousActivity/>

### Enhancements

* Textdomains may now define a $url in the definition file. (r85286)
* Added an About-area on the index page of the tool which shows all textdomains and (where
  possible) linked to the tool.
* Implemented TsIntuition::msgExists() and TsIntuition:getDomainInfo()
* Added demonstration sandboxes in /public_html/demo/ (r85471)
* Dashboard sections converted to Tabs with jQuery UI (r85260)
* Introduced new 'suppressfatal' option (r85471)
* Introduced new 'suppressbrackets' option (r85471)

### Maintenance

* Domains are now registered in Domains.php instead of a static array in the class (r85396)
* TranslationStats-graph in the about-tab (r85471)

## v0.1.1 (2011-04-01)

New domains:

* OrphanTalk2 <http://toolserver.org/~krinkle/OrphanTalk2/>

### Enhancements

* Added a clear-cookies and renew-cookies action (r84981, r85246)
* Confirmation messages after clearing or renewing cookies (r84981)
* PremadeToolserverTextdomains class has been written for TransateWiki

### Maintenance

* SVN revision id is now visible in the header (r84942)
* PremadeToolserverTextdomains moved to /exensions/Translate per convention (r85117)
* Requesting an undefined message triggers a TsIntution error on E_NOTICE level (r85052)

## v0.1.0 (2011-03-28)

First version in Wikimedia SVN.

## v0.0.1 (2011-03-23)

Initial version on Toolserver.
