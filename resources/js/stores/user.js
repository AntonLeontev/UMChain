import { defineStore } from "pinia";
import { ref } from "vue";

const useUserStore = defineStore("user", () => {
    const user = null;
    const isAuthenticated = ref(null);

    return { user, isAuthenticated };
});

export default useUserStore;
