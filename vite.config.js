import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/category.css', 
                'resources/css/product.css', 
                'resources/css/login.css',  
                'resources/css/cart.css', 
                'resources/css/profile.css',   
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
