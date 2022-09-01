import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
const path = require('path')

export default defineConfig({
  resolve: {
    alias: {
      "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
    },
  },
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js",
        "resources/js/index.js",
        "resources/scss/style.scss",
        "resources/scss/style-dark.scss"
      ],
      refresh: [...refreshPaths, "app/Http/Livewire/**"],
    }),
  ],
});
