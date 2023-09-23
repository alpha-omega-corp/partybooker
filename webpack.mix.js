const mix = require('laravel-mix');
const out = 'dist';

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', out)
    .css('node_modules/@glidejs/glide/dist/css/glide.core.min.css', out)
    .sass('resources/sass/app.scss', out)
    .sass('resources/sass/legacy.scss', out)


mix.copyDirectory('resources/images', 'public/images');

