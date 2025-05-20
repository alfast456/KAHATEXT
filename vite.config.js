import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  server: {
    host: '0.0.0.0', // <- ini penting biar bisa diakses dari device lain
    port: 5173,
    strictPort: true,
    cors: {
      origin: '*', // <- ini yang mengizinkan akses dari IP manapun
    },
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
});
