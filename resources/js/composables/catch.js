import useToastsStore from "@/stores/toasts";

export default function useCatch(error, errors = null) {
    if (error.response?.status === 422 && errors !== null) {
        let newErrors = {};

        for (const key in error.response?.data.errors) {
            if (Object.hasOwnProperty.call(error.response.data.errors, key)) {
                const element = error.response.data.errors[key];
                newErrors[key] = element.join(" ");
            }
        }

        Object.assign(errors, newErrors);
        return;
    }

    if (
        error.response?.status === 419 &&
        error.response?.data?.message === "CSRF token mismatch."
    ) {
        location.reload();
        return;
    }

    if (import.meta.env.PROD) {
        useToastsStore().toastError(error.message);
    } else {
        console.log(error);
        useToastsStore().toastError(error.response?.data.message);
    }
}
