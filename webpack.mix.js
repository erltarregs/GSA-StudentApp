let mix = require('laravel-mix');
//mix.disableNotifications(); //This disables OS notifications after compiling Mix

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
mix.styles([
    'public/css/aiwops/fonts.css',
    'public/css/aiwops/style.css',
    'public/css/aiwops/responsive.css'],
     'public/css/all.css');