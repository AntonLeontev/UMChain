import { defineStore } from "pinia";
import { ref, reactive } from "vue";

const useToastsStore = defineStore("toasts", () => {
    const toasts = reactive([]);

    function handleError(error) {
        if (import.meta.env.PROD) {
            alert(error.message);
        } else {
            console.log(error);
            alert(error.response.data.message);
        }
    }

    return { toasts, handleError };
});

export default useToastsStore;
