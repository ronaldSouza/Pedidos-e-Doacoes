import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/scss/argon-dashboard.scss',
                'public/assets/js/core/popper.min.js',
                'public/assets/js/core/bootstrap.min.js',
                'public/assets/plugins/perfect-scrollbar.min.js',
                'public/assets/plugins/smooth-scrollbar.min.js',
                'public/assets/plugins/chartjs.min.js'
            ],
            refresh: true,
        }),
    ],
});
