let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

require('laravel-mix-purgecss');

mix
  .sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')]
  });

if (mix.inProduction()) {
  mix.version()
}

mix.js('resources/js/app.js', 'public/js');
