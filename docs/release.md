# Release process

## Prepare

Before making a release, make sure that:

1. You have a local clone of the intuition.git repository.
2. You are on a clean and up-to-date checkout of the `main` branch.
   This state can be accomplished by running the following commands:
   <pre lang="sh">
   git fetch origin
   git checkout -B release -t origin/main
   </pre>

## Draft

We'll now draft the commit from which the release will be tagged.

The following steps should be applied:

1. Update `AUTHORS.txt` file.
2. Update `CHANGELOG.md` file.
3. Update `Intuition->version` string.
4. Make the commit.

The drafting steps do not require push access, and may also
be performed by contributors via a pull request.

### Update authors

To regenerate the `AUTHORS.txt` file contents, run the following
command:

<pre lang="sh">
npm run authors
</pre>

Copy the output between *Running "authors" task* and *Done.* to
the AUTHORS.txt file and run `git diff` to review the changes.

If one of the added entries looks like a bot, please remove it.

If one of the added entries looks like a duplicate of an existing
entry, update the `.mailmap` file as needed, then re-run the
`npm run authors` command and review the changes again.

### Update changelog

To extract the commit log from Git, run the following command
(replace `v1.1.0` with the tag of the most recent release):

<pre lang="sh">
git log --oneline --reverse v1.1.0...
</pre>

See <https://keepachangelog.com/en/1.0.0/> for the conventions
we follow in the changelog. Most importantly, do not use the
commit log directly as the change log. Repository viewers such
as GitHub already provide a way to obtain the commit log.
The changelog is meant to provide added value by highlighting
changes that may be relevant to end-users, organised in a way
that is easy to scan.

For Intuition, we use the following sections: `Added`, `Changed`,
`Deprecated`, `Removed`, `Fixed`, and `Security`.

Internal changes about test configuration, coding style,
code coverage, and repository structure should generaly not
be included in the changelog.

The final entries in the changelog should one of the following
component prefixes:

* `build` – The meta information about the package, such as dependencies
  and the supported PHP versions.
* `core` – The PHP classes, methods and functions publicly exposed.
* `docs` – The documentation (README, docs files, PHP docs etc.)
* `language` – The language data used by Intuition (fallbacks, Names, etc.)
* `messages` – The text domains that ship as part of the library.

The subject line should written in the English imperative mood.
Usually, the commits will have this style already as it tends to
be normalised during code review and pull request merging. However,
if it differs, be sure to correct it for the changelog.

### Update version string

Edit the `$version` assignment in `src/Intuition.php` to match
the version string that will be used for the next release.

### Make the commit

Stage any changes you made and commit with a message of the form
"Tag vX.Y.Z" (e.g. `Tag v1.2.0`). Then push this commit to a
remote branch called `release`, as follows:

<pre lang="sh">
git add -p
git commit -m "Tag vX.Y.Z"
git push origin HEAD:release
</pre>

## Publish

The final step is to sign the release and publish it.

To sign a release, you need to have the GPG software installed,
have a personal key, and have it associated with your GitHub account.
For more information about that, see:
* <https://help.github.com/articles/generating-a-new-gpg-key/>
  (also available via Homebrew as `gnupg`)
* <https://help.github.com/articles/adding-a-new-gpg-key-to-your-github-account/>

## Release your own commit:

Check [CI Status](https://github.com/Krinkle/intuition/actions/workflows/CI.yaml) and wait until the build for the `release` branch has completed and passes. Then, the commit can be pushed to the main branch together with a brand new tag, as follows:

1. Confirm you are at your "Tag" commit (e.g. run `git show` or `git log -n1`).
2. Run `git push origin HEAD:main`, to push the commit to the remote. This
   automatically verifies that the commit was previously pushed to a different
   branch with passing tests. If it is a different commit, or fails the tests,
   it will automatically be refused by GitHub.
3. If the commit was succesfully pushed, create the tag by running
   the `git tag -s vX.Y.X` command (where X.Y.Z is the version we
   are releasing). This will prompt for a summary, where you should
   enter "Tag vX.Y.Z" (same as the commit message).
   Assuming your GPG key has a passphrase, the GPG command-line tool
   will also prompt you for your password. Once that is done,
   the tag will exist locally.
4. Push the tag to the remote repository: `git push --tags`.

## Release from pull request

If the release commit was contributed via pull request, merge
that via the web interface. Then, update the local working copy
and continue with steps 3 and 4 of the above section.
