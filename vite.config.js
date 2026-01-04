import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                // Add your missing files here:
                'resources/js/datatable.js',
                'resources/js/validation-data.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});