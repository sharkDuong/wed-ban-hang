const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
    mix.copyDirectory('resources/themes','public/themes');
    mix.js('resources/js/common.js', 'public/js');