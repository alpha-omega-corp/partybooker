import {defineConfig} from 'vite';
import laravel, {refreshPaths} from 'laravel-vite-plugin';
import inject from "@rollup/plugin-inject";
import Unlighthouse from '@unlighthouse/vite'

export default defineConfig({

    plugins: [
        inject({
            $: 'jquery',
            jQuery: 'jquery',
            include: ['./resources/js/bootstrap.js'],
        }),
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
        Unlighthouse({
            debug: true,
            site: "https://partybooker.ch",
        })
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "./resources/sass/bootstrap";@import "./node_modules/@glidejs/glide/src/assets/sass/glide.core";',
            },
        },
    },
});
