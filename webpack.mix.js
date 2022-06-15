const mix = require('laravel-mix');
const ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;

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

mix
    // js
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/Pages/main-page.js', 'public/js/main-page.js')
    // vue
    .vue()
    // css
    .postCss('resources/css/app.css', 'public/css', [require('tailwindcss'),])
    // scss
    .sass('resources/scss/index.scss', 'public/css')
    // image
    // .copy('resources/assets/images', 'public/images')
    // config
    .webpackConfig( {
        plugins: [
            new ImageminPlugin( {
                pngquant: {
                    quality: '95-100',
                },
                test: /\.(jpe?g|png|gif|svg)$/i,
            } ),
        ],
    } )
;
