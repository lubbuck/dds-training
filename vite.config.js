import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
server: {
        host: '0.0.0.0', // Permite acesso externo ao container
        port: 5173,      // Porta padrão do Vite
        hmr: {
            host: 'localhost', // Como o seu navegador vai acessar o HMR
        },
        watch: {
            usePolling: true, // Necessário em alguns sistemas (como Windows/WSL) para detectar mudanças em volumes
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
