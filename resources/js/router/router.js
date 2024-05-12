import { createRouter, createWebHistory } from "vue-router";
import routes from "./routes";
import useUserStore from "../stores/user";
import axios from "axios";
import { loadLocaleMessages, setI18nLanguage, i18n } from "../i18n";

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach(async (to, from) => {
    if (useUserStore().isAuthenticated === null) {
        await axios
            .get(route("api.user"))
            .then((res) => {
                useUserStore().user = res.data;
                useUserStore().isAuthenticated = true;
            })
            .catch(() => {
                useUserStore().isAuthenticated = false;
            });
    }

    if (to.meta.requiresAuth && !useUserStore().user) {
        return { name: "login" };
    }

    if (to.meta.requiresGuest && useUserStore().user) {
        return { name: "home" };
    }
});

export default router;
