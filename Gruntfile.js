/* eslint-env node */
module.exports = function (grunt) {
  var fs = require('fs'),
    path = require('path'),
    msgDir = path.join(__dirname, 'language', 'messages'),
    domainDirs = {};

  grunt.loadNpmTasks('grunt-banana-checker');
  grunt.loadNpmTasks('grunt-eslint');
  grunt.loadNpmTasks('grunt-git-authors');
  grunt.loadNpmTasks('grunt-jsonlint');

  fs.readdirSync(msgDir).forEach(function (file) {
    var stats = fs.statSync(path.join(msgDir, file));
    if (stats.isDirectory()) {
      if (['commonshelper2', 'mwsnapshots', 'raun', 'voiceintro'].indexOf(file) === -1) {
        domainDirs[file] = 'language/messages/' + file + '/';
      } else {
        // Allow incomplete documentation for now (issue #41)
        domainDirs[file] = {
          src: 'language/messages/' + file + '/',
          options: {
            requireCompleteMessageDocumentation: false
          }
        };
      }
    }
  });

  grunt.initConfig({
    banana: domainDirs,
    eslint: {
      all: '*.js'
    },
    jsonlint: {
      all: [
        '*.json',
        '{language,tests}/**/*.json'
      ]
    }
  });

  grunt.registerTask('default', ['eslint', 'jsonlint', 'banana']);
};
