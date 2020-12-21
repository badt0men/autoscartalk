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


 
 mix.copy('resources/css/front.css.map', 'public/assets/css/main.css.map');
 mix.copy('resources/assets/img', 'public/assets/img', false); //copy directory without changing structure or simple USE 'copyDirectory'
 mix.copy('resources/assets/vendor', 'public/assets/vendor', false);
 mix.styles('resources/css/front.css', 'public/assets/css/main.css');
 mix.styles('resources/css/custom.css', 'public/assets/css/custom.css')
 mix.js('resources/assets/js/front.js', 'public/assets/js/main.js');


// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
