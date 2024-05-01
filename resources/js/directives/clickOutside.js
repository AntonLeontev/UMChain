export default {
    mounted: (el, binding) => {
        el.__clickOutsideHandler = (event) => {
            if (!(el === event.target || el.contains(event.target))) {
                binding.value(event);
            }
        };
        document.body.addEventListener("click", el.__clickOutsideHandler);
    },
    unmounted: (el, binding) => {
        document.body.removeEventListener("click", el.__clickOutsideHandler);
    },
};
