import useToastsStore from "@/stores/toasts";

export default function useCatch(error, errors) {
    if (error.response.status === 422) {
        Object.assign(errors, error.response.data.errors);
    } else {
        useToastsStore().handleError(error);
    }
}
