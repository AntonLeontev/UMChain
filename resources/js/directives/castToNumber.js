export default {
    mounted: (el, binding) => {
        el.__castToNumberHandler = (event) => {
            if (el === event.target) {
                el.value = el.value.replaceAll(/[\D]/g, "");
            }
        };
        document.body.addEventListener("input", el.__castToNumberHandler);
    },
    unmounted: (el, binding) => {
        document.body.removeEventListener("input", el.__castToNumberHandler);
    },
};
