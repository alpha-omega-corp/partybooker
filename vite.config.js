import {defineConfig} from 'vite';
import laravel, {refreshPaths} from 'laravel-vite-plugin';

export default defineConfig({
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "./resources/sass/bootstrap";@import "./node_modules/@glidejs/glide/src/assets/sass/glide.core";',
            },
        },
    },
    plugins: [
        laravel({
            input: [
                './resources/js/app.js',
                './resources/js/dashboard.js',
                './resources/js/admin.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
});
