let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
const cssImport = require('postcss-import')

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
  .postCss('resources/assets/css/app.pcss', 'public/css', [
    cssImport(),
    tailwindcss('./tailwind.js')
  ])
  .browserSync({
    proxy: {
      target: 'localhost:8000',
      reqHeaders: function () {
        return {
          host: 'localhost:3000'
        };
      }
    }
  })
