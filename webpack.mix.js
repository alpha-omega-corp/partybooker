const mix = require('laravel-mix');
const out = './dist';

mix.webpackConfig({
    stats: {
        children: false,
    },
});

mix
    .js('resources/js/app.js', out)
    .sass('resources/sass/app.scss', out)
    .options({ autoprefixer: false })



