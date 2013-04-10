/**
 * @copyright 2011-2012 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package TsIntuition
 */
module.exports = function (grunt) {
	'use strict';

	grunt.loadNpmTasks('grunt-update-submodules');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-git-authors');

	grunt.initConfig({
		jshint: {
			all: 'grunt.js'
		}
	});

	grunt.registerTask('default', ['update_submodules', 'jshint']);

};
