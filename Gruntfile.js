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
      const knownIncomplete = ['commonshelper2', 'mwsnapshots', 'raun', 'voiceintro'].includes(file);
      domainDirs[file] = {
        src: 'language/messages/' + file + '/',
        options: {
          // Allow incomplete documentation for now (issue #41)
          requireCompleteMessageDocumentation: !knownIncomplete,
          requireLowerCase: false
        }
      };
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
