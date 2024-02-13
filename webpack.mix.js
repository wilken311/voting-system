let mix = require('laravel-mix');

// general resources
let public_js = 'public/assets/admin/js/';
let public_css = 'public/assets/admin/css/';
let resource_sass = 'resources/assets/sass/';
// Gentelella resources
let gentelella_home = 'node_modules/gentelella/';
let gentelella_vendor = gentelella_home + '/vendors/';

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*
mix.
    // gentelella
    copy(gentelella_home + 'build/css/custom.css',
        public_css + 'gentelella-custom.css').
    copy(gentelella_home + 'build/js/custom.js',
        public_js + 'gentelella-custom.js').
    copy(gentelella_vendor + 'bootstrap-daterangepicker/daterangepicker.css',
        public_css + 'daterangepicker.css').
    copy(gentelella_vendor + 'bootstrap-daterangepicker/daterangepicker.js',
    public_js + 'daterangepicker.js');
*/
