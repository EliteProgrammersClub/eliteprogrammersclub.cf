module.exports = function (grunt) {

    /* Plugin loading  */
    require("load-grunt-tasks")(grunt);

    /* Initializing the configuration object */
    grunt.initConfig({
        /* Task configuration */
        copy: {
            main: {
                files: [{
                    src: [
                        'vendor/bower_components/bootstrap/fonts/*',
                        'vendor/bower_components/font-awesome/fonts/*',
                    ],
                    dest: 'public/assets/fonts/',
                    flatten: true,
                    filter: 'isFile',
                    expand: true
                }]
            },
        },
        compass: { // Task
            frontend: { // Target
                options: {
                    sourcemap: true,
                    sassDir: 'app/assets/frontend/src/sass/',
                    cssDir:  'app/assets/frontend/dest/css/',
                    noLineComments: true,
                    require: ['breakpoint'],
                    bundleExec: true,
                }
            },
            backend: {
                options: {
                    sourcemap: true,
                    sassDir: 'app/assets/backend/src/sass/',
                    cssDir: 'app/assets/backend/dest/css/',
                    noLineComments: true,
                    require: ['breakpoint'],
                    bundleExec: true,
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            js_frontend: {
                src: [
                    'vendor/bower_components/jquery/jquery.js',
                    'vendor/bower_components/bootstrap/dist/js/bootstrap.js',
                    'app/assets/frontend/dest/js/**/*.js'
                ],
                dest: 'public/assets/js/frontend.js',
            },
            js_backend: {
                src: [
                    'vendor/bower_components/jquery/jquery.js',
                    'vendor/bower_components/bootstrap/dist/js/bootstrap.js',
                    'app/assets/backend/dest/js/**/*.js'
                ],
                dest: 'public/assets/js/backend.js',
            },
        },
        uglify: {
            options: {
                mangle: false // Use if you want the names of your functions and variables unchanged
            },
            frontend: {
                files: {
                    'public/assets/js/frontend.js': 'public/assets/js/frontend.js',
                }
            },
            backend: {
                files: {
                    'public/assets/js/backend.js': 'public/assets/js/backend.js',
                }
            },
        },

        jshint: {
            frontend: {
                options: {
                    reporter: require('jshint-stylish')
                },
                all: [
                    'app/assets/frontend/dest/js/**/*.js',
                    'Gruntfile.js'
                ]
            },
            backend: {
                options: {
                    reporter: require('jshint-stylish')
                },
                all: [
                    'app/assets/backend/dest/js/**/*.js',
                    'Gruntfile.js'
                ]

            }
        },

        phpunit: {
            classes: {
                dir: 'app/tests/' //location of the tests
            },
            options: {
                bin: 'vendor/bin/phpunit',
                colors: true
            }
        },

        watch: {
            js_frontend: {
                files: [
                    //watched files
                    'bower_components/jquery/jquery.js',
                    'bower_components/bootstrap/dist/js/bootstrap.js',
                    'app/assets/frontend/src/js/**/*.js'
                ],
                tasks: [ 'babel:frontend', 'jshint:frontend', 'concat:js_frontend', 'uglify:frontend', 'notify:frontend'], //tasks to run
                options: {
                    livereload: true //reloads the browser
                }
            },
            js_backend: {
                files: [
                    //watched files
                    'bower_components/jquery/jquery.js',
                    'bower_components/bootstrap/dist/js/bootstrap.js',
                    'app/assets/backend/src/js/**/*.js'
                ],
                tasks: ['babel:backend', 'jshint:backend', 'concat:js_backend', 'uglify:backend', 'notify:backend'], //tasks to run
                options: {
                    livereload: true //reloads the browser
                }
            },
            sass_backend: {
                files: ['app/assets/sass/*.scss'], //watched files
                tasks: ['compass:backend'], //tasks to run
                options: {
                    livereload: true //reloads the browser
                }
            },
            sass_frontend: {
                files: ['app/assets/sass/*.scss'], //watched files
                tasks: ['compass:frontend'], //tasks to run
                options: {
                    livereload: true //reloads the browser
                }
            },
            tests: {
                files: ['app/controllers/**/*.php', 'app/models/**/*.php'],
                tasks: ['phpunit'],
            },
            views: {
                files: ['app/views/**/*.blade.php'], //Reload the browser automatically whenever a Laravel Blade template file is updated.
                options: {
                    livereload: true
                }
            }
        },

        babel: {
            frontend: {
                options: {
                    sourceMap: true
                },
                files: {
                    'app/assets/frontend/dest/js/app.js': 'app/assets/frontend/src/js/app.js',
                }
            },
            backend: {
                options: {
                    sourceMap: true
                },
                files: {
                    'app/assets/backend/dest/js/backend.js': 'app/assets/backend/src/js/backend.js',
                }
            },
        },
        notify: {
            frontend: {
                options: {
                    title: "Frontend Assets",
                    message: "Compilation successfull"
                }
            },
            backend: {
                options: {
                    title: "Backend Assets",
                    message: "Compilation successfull"
                }
            }
        }

    });

    // Task definition
    grunt.registerTask('init', ['copy', 'compass', 'concat', 'uglify']);
    grunt.registerTask('default', ['watch']);

};
