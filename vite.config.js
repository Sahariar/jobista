import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // Optional: You can configure Vite to exclude certain asset paths from being processed
    resolve: {
        alias: {
            "/images/": "/public/images/", // Ensure this alias does not interfere
        },
    },
});
