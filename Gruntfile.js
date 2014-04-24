/**
 * @copyright 2011-2014 See AUTHORS.txt
 * @license CC-BY 3.0 <https://creativecommons.org/licenses/by/3.0/>
 * @package intuition
 */
/*jshint node:true */
module.exports = function (grunt) {
	'use strict';

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-git-authors');
	grunt.loadNpmTasks('grunt-jscs-checker');
	grunt.loadNpmTasks('grunt-update-submodules');

	grunt.initConfig({
		jshint: {
			options: {
				jshintrc: true
			},
			all: [ 'Gruntfile.js', 'includes/js-env/*.js' ]
		},
		jscs: {
			all: '<%= jshint.all %>',
		}
	});

	grunt.registerTask('default', ['update_submodules', 'jshint', 'jscs']);

};
