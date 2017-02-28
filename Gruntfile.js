/**
 * @copyright 2011-2014 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package intuition
 */
/* eslint-env node */
module.exports = function (grunt) {
  var fs = require('fs'),
    path = require('path'),
    msgDir = path.join(__dirname, 'language', 'messages'),
    domainDirs = {};

  grunt.loadNpmTasks('grunt-banana-checker');
  grunt.loadNpmTasks('grunt-eslint');
  grunt.loadNpmTasks('grunt-contrib-qunit');
  grunt.loadNpmTasks('grunt-git-authors');
  grunt.loadNpmTasks('grunt-jsonlint');

  fs.readdirSync(msgDir).forEach(function (file) {
    var stats = fs.statSync(path.join(msgDir, file));
    if (stats.isDirectory()) {
      domainDirs[file] = 'language/messages/' + file + '/';
    }
  });

  grunt.initConfig({
    banana: domainDirs,
    eslint: {
      all: ['*.js', '{js-env,public_html}/*.js']
    },
    jsonlint: {
      all: [
        '.jscsrc',
        '*.json',
        '{language,tests}/**/*.json'
      ]
    },
    qunit: {
      all: ['tests/qunit/index.html']
    }
  });

  grunt.registerTask('default', ['eslint', 'jsonlint', 'qunit']);
};
