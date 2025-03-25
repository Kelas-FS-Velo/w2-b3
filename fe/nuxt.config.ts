// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-11-01',
  devtools: { enabled: true },
  modules: ['@nuxt/icon', '@nuxt/scripts', '@nuxt/ui', '@pinia/nuxt', // required
    'pinia-plugin-persistedstate/nuxt',
  ],
  css: ['~/assets/css/main.css'],
  plugins: [
    '~/plugins/auth.ts'
  ]
})