import useToastsStore from "@/stores/toasts";

export default function useCatch(error, errors) {
    if (error.response.status === 422) {
		let newErrors = {};

        for (const key in error.response.data.errors) {
            if (Object.hasOwnProperty.call(error.response.data.errors, key)) {
                const element = error.response.data.errors[key];
                newErrors[key] = element.join(" ");
            }
        }

        Object.assign(errors, newErrors);
    } else {
        useToastsStore().handleError(error);
    }
}
