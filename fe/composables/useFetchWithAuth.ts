import { useAuthStore } from '~/store/auth';

export const useFetchWithAuth = (url: string, options: any = {}) => {
  const authStore = useAuthStore();
  const headers = {
    ...options.headers,
    Authorization: `Bearer ${authStore.token}`
  };
  return useFetch(url, { ...options, headers });
};
