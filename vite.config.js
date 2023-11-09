import {defineConfig} from 'vite';
import laravel, {refreshPaths} from 'laravel-vite-plugin';

export default defineConfig({

    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/dashboard.js',
                'resources/sass/admin/admin.scss',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
             @import "./resources/sass/bootstrap";
             @import "node_modules/@glidejs/glide/src/assets/sass/glide.core";

             `,
            },
        },
    },
});
