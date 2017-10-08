module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-postcss');
    grunt.initConfig({
        postcss: {
            options: {
                map: true, // inline sourcemaps

                // or
                map: {
                    inline: false, // save all sourcemaps as separate files...
                    annotation: 'dist/css/maps/' // ...to the specified directory
                },

                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                src: 'css/*.css'
            }
        }
    });
    grunt.registerTask('default', []);
};

// Helper for grunt task runner
// File path: cd /Users/muthuraman/Sites/vagrant/current/carandbike/site/style-guide/node/
// Run Command: grunt
// Optimize the final output with this editor: https://jakearchibald.github.io/svgomg/

// For LESS COMPILE
// grunt css
