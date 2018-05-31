let mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

require('laravel-mix-purgecss')

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

mix
  .sass('resources/assets/sass/hljs.scss', 'public/css')
  .sass('resources/assets/sass/font.scss', 'public/css')
  .sass('resources/assets/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')]
  })

if (mix.inProduction()) {
  mix
    .purgeCss()
    .version()
}

mix
  .js('resources/assets/js/app.js', 'public/js')

mix
  .copyDirectory('resources/assets/images', 'public/media')
  .copyDirectory('resources/assets/fonts', 'public/fonts')

mix
  .browserSync({
    proxy: '127.0.0.1:8000'
  })
