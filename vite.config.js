import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/chart.min.css",
                "resources/js/app.js",
                "resources/js/main.js",
                "resources/js/chart.min.js",
            ],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
