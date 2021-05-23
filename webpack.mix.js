const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/bootstrap.css',
    'resources/css/jquery-ui.css',
    'resources/css/icons.css',
    'resources/css/metisMenu.css',
    'resources/css/app.css',
],'public/css/app.css').scripts([
    'resources/js/jquery.js',
    'resources/js/jquery-ui.js',
    'resources/js/bootstrap.bundle.js',
    'resources/js/metisMenu.js',
    'resources/js/waves.js',
    'resources/js/feather.js',
    'resources/js/jquery.slimscroll.js',
    'resources/js/app.js',
],'public/js/app.js');
