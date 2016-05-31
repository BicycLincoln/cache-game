module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            files: ['Gruntfile.js', './resources/assets/js/**/*.js'],
            options: {
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true,
                    browser: true
                },
                node: true,
                browser: true,
                reporter: require('jshint-stylish-recolor')
            }
        },
        
        browserify: {
            options: {
                transform: [
                    ["browserify-shim", {"global": true}],
                    ["uglifyify", {"global": true}]
                ],
                browserifyOptions: {
                    debug: true
                }
            },
            public: {
                src: ['./resources/assets/js/Public.js'],
                dest: 'public/js/public.min.js'
            },
            admin: {
                src: ['./resources/assets/js/Admin.js'],
                dest: 'public/js/admin.min.js'
            }
        },

        less: {
            public: {
                src: ['resources/assets/less/public.less'],
                dest: 'public/css/public.min.css',
                options: {
                    compress: true,
                    sourceMap: true,
                    sourceMapURL: 'public.min.css.map',
                    outputSourceFiles: true,
                    plugins: [
                        new (require('less-plugin-autoprefix'))({browsers: ["> 0%"]})
                    ]
                }
            },
            admin: {
                src: ['resources/assets/less/admin.less'],
                dest: 'public/css/admin.min.css',
                options: {
                    compress: true,
                    sourceMap: true,
                    sourceMapURL: 'admin.min.css.map',
                    outputSourceFiles: true,
                    plugins: [
                        new (require('less-plugin-autoprefix'))({browsers: ["> 0%"]})
                    ]
                }
            }
        },

        watch: {
            styles: {
                files: ['resources/assets/less/**/*'],
                tasks: ['styles'],
                options: {livereload: true}
            },
            scripts: {
                files: ['resources/assets/js/**/*'],
                tasks: ['jshint', 'browserify'],
                options: {livereload: true}
            }
        }

    });

    require('load-grunt-tasks')(grunt);

    grunt.registerTask('styles', ['less']);
    grunt.registerTask('scripts', ['jshint', 'browserify:public', 'browserify:admin']);
    grunt.registerTask('default', ['styles', 'scripts']);
};