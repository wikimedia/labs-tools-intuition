# Release process

## Prepare

Before making a release, make sure that:

1. You have a local clone of the intuition.git repository.
2. You are on a clean and up-to-date checkout of the `master` branch.
   This state can be accomplished by running the following commands:
   <pre lang="sh">
   git fetch origin
   git checkout -B release -t origin/master
   </pre>

## Draft

We'll now draft the commit from which the release will be tagged.

The following steps should be applied:

1. Update `AUTHORS.txt` file.
2. Update `CHANGELOG.md` file.
3. Update `Intuition->version`.
4. Make the commit.

The drafting steps do not require repo ownership, and may also
be performed by contributors via Gerrit.

### Update authors

To regenerate the `AUTHORS.txt` file contents, run the following
command:

<pre lang="sh">
npm run authors
</pre>

Run `git add -p` to review and stage the changes as you go.

If one of the added entries looks like a bot, please exclude it
by attributing it to yourself in the `.mailmap` file.

If one of the added entries looks like a duplicate of an existing
entry, update the `.mailmap` file as needed, then re-run the
`npm run authors` command and review the changes again.

### Update changelog

To get you started, extract the Git commit subjects since the
most recent release:

<pre lang="sh">
git log --pretty=format:'* %s. (%an)' $(git describe --tags --abbrev=0)...HEAD | grep -vE '(build: |docs: |Localisation updates)' | sort
</pre>

See <https://keepachangelog.com/en/1.0.0/> for the conventions
we follow in the changelog. Most importantly, do not use the
commit log directly as the change log. Repository viewers already
provide a way to obtain the commit log.
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

* `build` – The meta information about the package, such as dependencies
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

Edit the `$version` assignment in [Intuition.php](../src/Intuition.php) to match
the version string that will be used for the next release.

### Make the commit

Stage any changes you made and commit with a message of the form
"Tag vX.Y.Z" (e.g. `Tag v1.2.0`). Then push this commit to for code
review:

<pre lang="sh">
git add -p
git commit -m "Tag vX.Y.Z"
git review
</pre>

## Publish

The final steps are to merge, sign, publish the release.

1. Approve the "Tag" commit from above (either your own or someone else's),
   and wait for CI to pass and merge the commit.
2. Switch to master and ensure you have pulled down the above change.
   `git checkout master && git fetch origin && git reset --hard origin/master`
3. Confirm you are now at the "Tag" commit (e.g. run `git show` or `git log -1`).
4. Create the tag by running `git tag -s vX.Y.X` (where X.Y.Z is the version we
   are releasing). This will prompt for a summary, where you should
   enter "Tag vX.Y.Z" (same as the commit message).
   Assuming your GPG key has a passphrase, the GPG command-line tool
   will also prompt you for your password. Once that is done,
   the tag will exist locally.
5. Push the tag to the remote repository: `git push --tags`.
