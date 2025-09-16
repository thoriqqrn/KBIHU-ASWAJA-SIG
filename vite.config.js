// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // <--- Tambahkan ini

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: { // <--- Tambahkan blok ini
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    }
});