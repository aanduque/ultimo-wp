  'use strict';
  module.exports = function (grunt, init) {

    grunt.initConfig({

      pkg: grunt.file.readJSON('package.json'),

      rewrite: {
        version: {
          src: '../ultimo-wp.php',
          editor: function(contents, filePath) {
            var version = grunt.config.get('pkg.version');
            contents = contents.replace(/Version:(.)*/g, 'Version: ' + version);
            return contents;
          }
        }
      },

      prompt: {
        target: {
          options: {
            questions: [
              {
                config: 'message', // arbitray name or config for any other grunt task
                type: 'input', // list, checkbox, confirm, input, password
                message: 'Enter a commit message (an empty message will abort the process)', // Question to ask the user, function needs to return a string,
              }
            ]
          }
        }
      },

      imagemin: {                          // Task
        dynamic: {                         // Another target
          files: [{
            expand: true,                  // Enable dynamic expansion
            cwd: '../assets/img/',         // Src matches are relative to this path
            src: ['*.{png,jpg,gif}'],      // Actual patterns to match
            dest: '../assets/img/'         // Destination path prefix
          }]
        }
      },

      bumper: {
        options: {
          tasks: ['rewrite:version'],
          addFiles: ['.', '../.'],
          commitMessage: '<%= message %>' //|| "Release v%VERSION%"
        }
      },

      jshint: {
        options: {
          jshintrc: '.jshintrc'
        },
        all: [
        'Gruntfile.js',
        '../assets/js/*.js',
        '../assets/js/scripts/_*.js',
        '!../assets/js/*.min.js'
        ]
      },

      less: {
        dist: {
          
          options: {
            sourcemap: 'none',
            update: true,
          },
          
          files: {
            
            // Commom
            '../assets/css/common.css': [
            '../assets/less/common.less'
            ],
            
            // Admin
            '../assets/css/admin.css': [
            '../assets/less/admin.less'
            ],
            
            // Frontend
            '../assets/css/frontend.css': [
            '../assets/less/frontend.less'
            ],
            
            // Login
            '../assets/css/login.css': [
            '../assets/less/login.less'
            ],
            
            
          }
        }
      },

      cssmin: {
        options: {
          banner: '/*! <%= pkg.title %> - v<%= pkg.version %>\n' +
          ' * <%= pkg.homepage %>\n' +
          ' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
          ' */\n'
        },

        minify: {
          expand: true,

          cwd: '../assets/css/',
          src: ['*.css', '!*.min.css'],

          dest: '../assets/css/',
          ext: '.min.css'
        }
      },

      uglify: {
        dist: {
          files: {
            
            // Commom
            '../assets/js/common.min.js': [
            '../assets/js/plugins/bootstrap/transition.js',
            '../assets/js/plugins/bootstrap/alert.js',
            '../assets/js/plugins/bootstrap/button.js',
            '../assets/js/plugins/bootstrap/carousel.js',
            '../assets/js/plugins/bootstrap/collapse.js',
            '../assets/js/plugins/bootstrap/dropdown.js',
            '../assets/js/plugins/bootstrap/modal.js',
            '../assets/js/plugins/bootstrap/tooltip.js',
            '../assets/js/plugins/bootstrap/popover.js',
            '../assets/js/plugins/bootstrap/scrollspy.js',
            '../assets/js/plugins/bootstrap/tab.js',
            '../assets/js/plugins/bootstrap/affix.js',
            '../assets/js/plugins/*.js',
            '../assets/js/scripts/_common.js'
            ],
            
            // Admin
            '../assets/js/admin.min.js': [
            '../assets/js/scripts/_admin.js'
            ],
            
            // FrontEnd
            '../assets/js/frontend.min.js': [
            '../assets/js/scripts/_frontend.js'
            ],
            
            // Login
            '../assets/js/login.min.js': [
            '../assets/js/scripts/_login.js'
            ],
            
          },

          options: {
            // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
            // sourceMap: '../assets/js/scripts.min.js.',
            // sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
          }
        }
      },

      version: {
        options: {
          file: '../ultimo-wp.php',
          css: '../assets/css/common.min.css',
          cssHandle: 'ultimo-wp',
          js: '../assets/js/scripts.min.js',
          jsHandle: 'ultimo-wp'
        }
      },

      copy: {
        // Copy the plugin to a versioned release directory
        main: {
          cwd: '../',
          expand: true,
          src: [
          '**',
          '!grunt/**',
          '!release/**',
          '!.git/**',
          '!.svn/**',
          '!.idea/**',
          '!.scss-cache/**',
          '!assets/less/**',
          '!assets/less/**',
          '!assets/js/plugins/**',
          '!assets/js/_*.js',
          '!assets/js/scripts/**.js',
          '!assets/img/src/**',
          '!Gruntfile.js',
          '!package.json',
          '!.gitignore',
          '!.gitmodules'
          ],
          dest: '../release/<%= pkg.version %>/'
        }
      },

      compress: {
        main: {
          options: {
            mode: 'zip',
            archive: './../release/<%= pkg.name %>.<%= pkg.version %>.zip'
          },
          expand: true,
          cwd: '../release/<%= pkg.version %>/',
          src: ['**/*'],
          dest: '<%= pkg.name %>/'
        }
      },

      watch: {
        less: {
          files: [
          '../assets/less/*.less',
          '../assets/less/**/*.less',
          ],
          tasks: ['less', 'cssmin'],
          options: {
            livereload: true,
          },
        },

        js: {
          files: [
          '<%= jshint.all %>'
          ],
          tasks: ['jshint', 'uglify'],
          options: {
            livereload: true,
          },
        },

        livereload: {
            // Browser live reloading
            // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
            options: {
              livereload: true
            },
            files: [
            '../assets/css/*.min.css',
            '../assets/js/*.min.js',
            '../templates/*.php',
            '*.php'
            ]
          }
        }
      });

      // Load tasks
      grunt.loadNpmTasks('grunt-contrib-jshint');
      grunt.loadNpmTasks('grunt-contrib-uglify');
      grunt.loadNpmTasks('grunt-contrib-cssmin');
      grunt.loadNpmTasks('grunt-contrib-watch');
      grunt.loadNpmTasks('grunt-contrib-less');
      grunt.loadNpmTasks('grunt-wp-version');
      grunt.loadNpmTasks('grunt-contrib-copy');
      grunt.loadNpmTasks('grunt-contrib-compress');
      grunt.loadNpmTasks('grunt-bumper');
      grunt.loadNpmTasks('grunt-contrib-imagemin');
      grunt.loadNpmTasks('grunt-prompt');
      grunt.loadNpmTasks('grunt-rewrite');

      // Register tasks
      grunt.registerTask('default', [
        'less',
        'cssmin',
        'uglify',
        //'version'
      ]);

      grunt.registerTask('dev', [
        'watch'
      ]);

      grunt.registerTask('build', ['default', 'imagemin', 'copy', 'compress']);

      grunt.task.registerTask('commit', 'Commit your stuff', function(type) {
        if (arguments.length === 0) {
          grunt.task.run(['prompt', 'bumper']);
        } else {
          var bumper = 'bumper:' + type;
          grunt.task.run(['prompt', bumper]);
        }
      });
    };