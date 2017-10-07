module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-svgstore');
    grunt.loadNpmTasks('grunt-svgmin');
    grunt.initConfig({
        svgstore: {
            options: {
                prefix: 'icon-', // This will prefix each ID
                svg: {// will add and overide the the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
                    viewBox: '0 0 32 32',
                    xmlns: 'http://www.w3.org/2000/svg'
                },
                cleanup: true,
                cleanupdefs: true,
                includeTitleElement: false
            },
            default: {
                files: {
                    '../../media/svg/icons-all.svg': ['../media/svg/icons-temp/*.svg'],
                    
                    //Global
                    '../../media/svg/icons-global.svg': [
                        //Global
                        //'../media/svg/icons-temp/location.svg',
                        '../media/svg/icons-temp/search.svg',
                        //'../media/svg/icnos-temp/back.svg',
                        //'../media/svg/icons-temp/wishlist.svg',
                        //'../media/svg/icons-temp/owner-o.svg',
                        '../media/svg/icons-temp/facebook.svg',
                        '../media/svg/icons-temp/twitter.svg',
                        '../media/svg/icons-temp/gplus.svg',
                        '../media/svg/icons-temp/youtube.svg',
                        '../media/svg/icons-temp/rss.svg',
                        '../media/svg/icons-temp/caret-down.svg',
                        '../media/svg/icons-temp/notification.svg',
                        '../media/svg/icons-temp/notification-on.svg',
                        '../media/svg/icons-temp/city-ahmedabad.svg',
                        '../media/svg/icons-temp/city-bengaluru.svg',
                        '../media/svg/icons-temp/city-bangalore.svg',
                        '../media/svg/icons-temp/city-chennai.svg',
                        '../media/svg/icons-temp/city-hyderabad.svg',
                        '../media/svg/icons-temp/city-kolkata.svg',
                        '../media/svg/icons-temp/city-mumbai.svg',
                        '../media/svg/icons-temp/city-new-delhi.svg',
                        //'../media/svg/icons-temp/alert.svg',
                        '../media/svg/icons-temp/cross.svg',
                        '../media/svg/icons-temp/sedan.svg',
                        '../media/svg/icons-temp/hatchback.svg',
                        '../media/svg/icons-temp/suv.svg',
                        '../media/svg/icons-temp/crossover.svg',
                        '../media/svg/icons-temp/muv.svg',
                        '../media/svg/icons-temp/coupe.svg',
                        '../media/svg/icons-temp/convertible.svg',
                        '../media/svg/icons-temp/fuel.svg',
                        '../media/svg/icons-temp/petrol.svg',
                        '../media/svg/icons-temp/diesel.svg',
                        '../media/svg/icons-temp/electric.svg',
                        '../media/svg/icons-temp/hybrid.svg',
                        '../media/svg/icons-temp/lpg.svg',
                        '../media/svg/icons-temp/cng.svg',
                        '../media/svg/icons-temp/keyless-entry.svg',
                        '../media/svg/icons-temp/airbags.svg',
                        '../media/svg/icons-temp/abs.svg',
                        '../media/svg/icons-temp/parking-sensors.svg',
                        '../media/svg/icons-temp/rear-view-camera.svg',
                        '../media/svg/icons-temp/bluetooth.svg',
                        '../media/svg/icons-temp/steering-mounted-controls.svg',
                        '../media/svg/icons-temp/climate-control.svg',
                        '../media/svg/icons-temp/automatic.svg',
                        '../media/svg/icons-temp/engine.svg',
                        '../media/svg/icons-temp/speedometer.svg',
                        '../media/svg/icons-temp/weight.svg'
                    ],
                    // Model page
                    '../../media/svg/icons-amp-model.svg': [
                        '../media/svg/icons-temp/facebook.svg',
                        '../media/svg/icons-temp/twitter.svg',
                        '../media/svg/icons-temp/gplus.svg',
                        '../media/svg/icons-temp/youtube.svg',
                        '../media/svg/icons-temp/rss.svg',
                        '../media/svg/icons-temp/star.svg',
                        '../media/svg/icons-temp/star-full.svg',
                        '../media/svg/icons-temp/star-half.svg',
                        '../media/svg/icons-temp/expand.svg',
                        '../media/svg/icons-temp/caret-down.svg',
                        '../media/svg/icons-temp/play-round.svg',
                        '../media/svg/icons-temp/thumbs-up.svg',
                        '../media/svg/icons-temp/thumbs-down.svg',
                        '../media/svg/icons-temp/more-vertical.svg',
                        '../media/svg/icons-temp/displacement.svg',
                        '../media/svg/icons-temp/speedometer.svg',
                        '../media/svg/icons-temp/tick.svg',
                        '../media/svg/icons-temp/plus.svg',
                        '../media/svg/icons-temp/engine.svg',
                        '../media/svg/icons-temp/engine-torque.svg',
                        '../media/svg/icons-temp/manual.svg',
                        '../media/svg/icons-temp/driven-train.svg',
                        '../media/svg/icons-temp/amt.svg',
                        '../media/svg/icons-temp/bhp.svg',
                        '../media/svg/icons-temp/performance.svg',
                        '../media/svg/icons-temp/fuel-tank.svg',
                        '../media/svg/icons-temp/alloy-wheel.svg',
                        '../media/svg/icons-temp/tyre.svg',
                        '../media/svg/icons-temp/caret-right.svg',
                        '../media/svg/icons-temp/write-review.svg',
                        '../media/svg/icons-temp/back.svg',
                        '../media/svg/icons-temp/location.svg',
                        '../media/svg/icons-temp/checkbox.svg',
                        '../media/svg/icons-temp/checkbox-checked.svg',
                        '../media/svg/icons-temp/radio.svg',
                        '../media/svg/icons-temp/radio-checked.svg',
                    ],
                    // Article
                    '../../media/svg/icons-amp-article.svg': [
                        '../media/svg/icons-temp/facebook.svg',
                        '../media/svg/icons-temp/twitter.svg',
                        '../media/svg/icons-temp/whatsapp.svg',
                        '../media/svg/icons-temp/gplus.svg',
                        '../media/svg/icons-temp/youtube.svg',
                        '../media/svg/icons-temp/email.svg',
                        '../media/svg/icons-temp/rss.svg',
                        '../media/svg/icons-temp/plus-o.svg'
                    ],
                    // Sell Car Landing
                    '../../media/svg/icons-amp-used-sell.svg': [
                        '../media/svg/icons-temp/question-round.svg',
                        '../media/svg/icons-temp/sold-badge.svg',
                        '../media/svg/icons-temp/quote-baloon.svg',
                        '../media/svg/icons-temp/sell-car.svg',
                        '../media/svg/icons-temp/documents.svg',
                        '../media/svg/icons-temp/inspection.svg',
                        '../media/svg/icons-temp/live-support.svg',
                        '../media/svg/icons-temp/doc-edit.svg',
                        '../media/svg/icons-temp/location.svg',
                        '../media/svg/icons-temp/caret-right.svg'
                    ],
                }
            }
        },
        svgmin: {
            dist: {
                files: [{
                        expand: true,
                        cwd: '../media/svg/icons/',
                        src: ['*.svg'],
                        dest: '../media/svg/icons-temp/'
                    }]
            },
            options: {
                plugins: [
                    {removeViewBox: false}, // don't remove the viewbox attribute from the SVG
                    {removeEmptyAttrs: true} // don't remove Empty Attributes from the SVG
                ]
            }
        }
    });
    grunt.registerTask('default', ['svgmin', 'svgstore']);
};

// Helper for grunt task runner
// File path: cd /Users/muthuraman/Sites/vagrant/current/carandbike/site/style-guide/node/
// Run Command: grunt
// Optimize the final output with this editor: https://jakearchibald.github.io/svgomg/

// For LESS COMPILE
// grunt css
