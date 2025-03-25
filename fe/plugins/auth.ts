import { useAuthStore } from '~/store/auth';

export default defineNuxtPlugin((nuxtApp) => {
  const authStore = useAuthStore();
  const token = useCookie('auth_token');
  if (token.value) {
    authStore.setToken(token.value);
  }
});
