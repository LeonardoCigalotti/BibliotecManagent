const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
<<<<<<< HEAD
    .sass('resources/sass/app.scss', 'public/css');
=======
    .browserSync(process.env.APP_URL)
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
