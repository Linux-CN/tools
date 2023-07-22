import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS for User Admin
                'resources/css/app.css',
                'resources/js/app.js',
                // CSS for Website
                'resources/js/website.js',
                'resources/sass/website.scss',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
