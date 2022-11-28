import eslintPlugin from "vite-plugin-eslint";

export default defineNuxtConfig({
  target: "static",
  vite: {
    plugins: [eslintPlugin()],
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: '@use "@/assets/scss/_imports.scss" as *;',
        },
      },
    },
  },
});
