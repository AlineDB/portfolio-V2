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

mix.setPublicPath('./wp-content/themes/brutal/public')
    .js('wp-content/themes/brutal/resources/js/script.js', 'wp-content/themes/brutal/public/js/')
    .sass('wp-content/themes/brutal/resources/sass/style.sass', 'wp-content/themes/brutal/public/css/')
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'http://localhost/portfolio2/',
        notify: false
    })
    .version();