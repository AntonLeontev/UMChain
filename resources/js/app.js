import './bootstrap';

import.meta.glob(["../images/**", "../fonts/**"]);

import { createApp } from "vue";
import router from "./router/router";

import App from "./App.vue";
import vClickOutside from "./directives/clickOutside";

createApp(App)
    .directive("click-outside", vClickOutside)
    .use(router)
    .mount("#app");
