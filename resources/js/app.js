import './bootstrap';

import.meta.glob(["../images/**", "../fonts/**"]);

import { createApp } from "vue";
import { createPinia } from "pinia";
import { ZiggyVue } from "ziggy-js";
import router from "./router/router";
import { i18n } from "./i18n";

import App from "./App.vue";
import vClickOutside from "./directives/clickOutside";

const pinia = createPinia();

createApp(App)
    .directive("click-outside", vClickOutside)
    .use(i18n)
    .use(pinia)
    .use(router)
    .use(ZiggyVue)
    .mount("#app");
