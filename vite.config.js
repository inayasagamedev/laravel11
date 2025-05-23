import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    darkMode: 'class',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    safelist:["bg-red-100", "bg-blue-100", "bg-green-100", "bg-cyan-100", "bg-purple-100"],
});

