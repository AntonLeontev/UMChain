import './bootstrap';

import.meta.glob(["../images/**", "../fonts/**"]);

import { createApp } from "vue";
import { createPinia } from "pinia";
import router from "./router/router";

import App from "./App.vue";
import vClickOutside from "./directives/clickOutside";

const pinia = createPinia();
createApp(App)
    .directive("click-outside", vClickOutside)
    .use(router)
    .use(pinia)
    .mount("#app");
