const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.js('resources/js/belegen.js', 'public/js');

mix.js('resources/js/admin.js', 'public/js');

mix.js('resources/js/pizza.js', 'public/js');

mix.js('resources/js/lagerstand.js', 'public/js');

