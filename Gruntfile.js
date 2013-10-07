module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		jshint: {
			options: {
				jshintrc: 'js/.jshintrc'
			},
			files: {
				src: ['js/functions.js']
			},
		},
		concat: {
			options: {
				separator: ';',
			},
			setup: {
				src: ['js/setup/modernizr-2.6.2.js', 'js/setup/respond.js'],
				dest: 'js/build/modernizr-respond.js',
			},
			plugins: {
				src: ['js/plugins/*.js'],
				dest: 'js/build/plugins.js',
			},
		},
		uglify: {
			setup: {
				files: {
					'js/build/modernizr-respond.min.js': ['js/build/modernizr-respond.js']
				}
			},
			plugins: {
				files: {
					'js/build/plugins.min.js': ['js/build/plugins.js']
				}
			},
			functions: {
				files: {
					'js/build/functions.min.js': ['js/functions.js']
				}
			},
			options: {
				preserveComments: 'all'
			}
		},
		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		copy: {
			style: {
				src: 'css/style.css',
				dest: '/',
			}
		},
		watch: {
			files: [
				'sass/*.scss', 
				'js/functions.js',
				'js/setup/*.js',
				'js/plugins/*.js',
				'!js/build/*.js',  // ignore build files
			],
			tasks: ['jshint', 'concat', 'uglify', 'compass'],
			options: {
				livereload: true,
			}
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-livereload');

	// Tasks
	grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'compass']);
	grunt.registerTask('dev', ['default', 'watch']);
};