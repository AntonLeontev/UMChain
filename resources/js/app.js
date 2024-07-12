import './bootstrap';

import.meta.glob(["../images/**", "../fonts/**"]);

import { createApp } from "vue";
import { createPinia } from "pinia";
import { ZiggyVue } from "ziggy-js";
import router from "./router/router";
import { i18n } from "./i18n";

import App from "./App.vue";
import vClickOutside from "./directives/clickOutside";
import vCastToNumber from "./directives/castToNumber";

const pinia = createPinia();

createApp(App)
    .directive("click-outside", vClickOutside)
    .directive("cast-to-number", vCastToNumber)
    .use(i18n)
    .use(pinia)
    .use(router)
    .use(ZiggyVue)
    .mount("#app");
