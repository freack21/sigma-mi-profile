import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import postcssImport from "postcss-import";

export default defineConfig({
  plugins: [
    postcssImport(),
    laravel({
      input: ["public/**", "resources/**"],
      refresh: true,
    }),
  ],
});
