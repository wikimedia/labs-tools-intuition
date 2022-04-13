/* eslint-env node */
const gitAuthors = require('grunt-git-authors');

gitAuthors.getAuthors({
    dir: '.'
}, function (error, authors) {
  if (error) {
    console.error(error);
    process.exit(1);
    return;
  }

  console.log('Authors ordered by first contribution.\n');
  console.log(authors.join('\n'));
});
