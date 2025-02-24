import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server: {
    //     host: '0.0.0.0',
    //     port: 5173,
    //     strictPort: true,
    //     cors: {
    //         origin: '*',
    //     },
    //     hmr: {
    //         protocol: 'wss',
    //         host: '0d1d-103-137-229-152.ngrok-free.app',
    //     },
    // },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
