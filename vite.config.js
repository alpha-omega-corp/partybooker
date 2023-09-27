import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
          scss: {
             // example : additionalData: `@import "./src/design/styles/variables";`
             // dont need include file extend .scss
             additionalData: `@import "./resources/sass/bootstrap";`,
         },
        },
      },
});
