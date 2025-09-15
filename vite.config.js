import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        cssCodeSplit: false, // biar CSS jadi 1 file link langsung
    },
});
