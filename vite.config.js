import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

/*
 * Information site build — pure Blade + vanilla JS, no Tailwind, no React.
 * Tailwind caused its own `.container` utility to override our custom one,
 * breaking the layout. The design system is 100% handwritten CSS.
 * React stays reserved for future app features only.
 */
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        assetsInlineLimit: 4096,
        rollupOptions: {
            output: {
                entryFileNames: 'assets/[name]-[hash].js',
                chunkFileNames: 'assets/[name]-[hash].js',
                assetFileNames: 'assets/[name]-[hash][extname]',
            },
        },
    },
    server: {
        host: '127.0.0.1',
        port: 5173,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
