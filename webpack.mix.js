const mix = require('laravel-mix');
const out = 'dist';

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', out)
    .sass('resources/sass/app.scss', out)

mix.copyDirectory('resources/images', 'public/images');

