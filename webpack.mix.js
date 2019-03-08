let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

require('laravel-mix-purgecss');

mix
  .sass('resources/assets/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')]
  });

if (mix.inProduction()) {
  mix
    .purgeCss({
      whitelistPatterns: [/language/, /^pre/, /code$/, /visible/, /retro-title-/, /w-/],
    })
    .version()
}

mix.js('resources/assets/js/app.js', 'public/js');