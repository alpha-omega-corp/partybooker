import {defineConfig} from 'vite';
import laravel, {refreshPaths} from 'laravel-vite-plugin';
import inject from "@rollup/plugin-inject";

export default defineConfig({
    build: {chunkSizeWarningLimit: 2000},
    plugins: [
        inject({
            $: 'jquery',
            jQuery: 'jquery',
            include: ['./resources/js/app.js'],
        }),
        laravel({
            input: [
                './resources/js/app.js',
                './resources/js/service.js',
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
                `
            },
        },
    },
});
