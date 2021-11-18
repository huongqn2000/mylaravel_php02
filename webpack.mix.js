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

mix.js('resources/js/dashboard.js', 'public/js')
    .postCss('resources/css/login.css', 'public/css')
    .copy('resources/css/style.css', 'public/css')
    .copy('resources/image', 'public/image')
    .copy('resources/js/Chart.min.js', 'public/js')
    .copy('resources/js/hoverable-collapse.js', 'public/js')
    .copy('resources/js/misc.js', 'public/js')
    .copy('resources/js/off-canvas.js', 'public/js')
    .copy('resources/js/circle-progress.min.js', 'public/js')
    .copy('resources/js/vendor.bundle.base.js', 'public/js');
