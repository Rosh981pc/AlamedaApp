const mix = require('laravel-mix');

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

mix.styles([
    'resources/js/plantilla/css/styles.css'
], 'public/css/plantilla.css')
.scripts([
    'resources/js/plantilla/js/scripts.js'
], 'public/js/plantilla.js');
mix.styles([
    'resources/js/plantilla/css/sb-admin-2.css',
    'resources/js/plantilla/css/sb-admin-2.min.css'
], 'public/css/sistema.css')
.scripts([
    'resources/js/plantilla/js/sb-admin-2.js',
    'resources/js/plantilla/js/sb-admin-2.min.js'
], 'public/js/sistema.js')
.js(['resources/js/app.js'], 'public/js/app.js');
