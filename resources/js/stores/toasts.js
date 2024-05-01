import { defineStore } from "pinia";
import { ref, reactive } from "vue";

const useToastsStore = defineStore("toasts", () => {
	const ai = ref(1);
    const toasts = reactive([]);

    function handleError(error) {
        if (import.meta.env.PROD) {
            toastError(error.message);
        } else {
            console.log(error);
            toastError(error.response.data.message);
        }
    }

    function toastError(message, duration = 0) {
        addToast(message, duration, "error");
    }

    function toastInfo(message, duration = 0) {
        addToast(message, duration, "info");
    }

    function removeToast(id) {
        toasts.splice(toasts.indexOf(toasts.find((t) => t.id === id)), 1);
    }

    function addToast(message, duration = 0, type = "info") {
        toasts.push({ id: ai.value, message, type });

        if (duration > 0) {
            setTimeout(() => {
                removeToast(ai.value);
            }, duration);
        }
    }

    return {
        toasts,
        handleError,
        toastError,
        toastInfo,
        removeToast,
        addToast,
    };
});

export default useToastsStore;
