import { createRouter, createWebHistory } from "vue-router";
import routes from "./routes";
import useUserStore from "../stores/user";
import axios from "axios";

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach(async (to, from) => {
    if (useUserStore().isAuthenticated === null) {
        if (sessionStorage.getItem("telegramInitData")) {
            axios.defaults.headers.common["X-Telegram-Authorization"] =
                sessionStorage.getItem("telegramInitData");
        }

        await axios
            .get(route("api.user"))
            .then((res) => {
                useUserStore().user = res.data;
                useUserStore().isAuthenticated = true;
            })
            .catch(() => {
                useUserStore().isAuthenticated = false;
            });

        if (to.name === "quiz" && useUserStore().user?.quiz_is_done) {
            window.location.replace(route("stub"));
            return;
        }
    }

    if (to.meta.requiresAuth && !useUserStore().user) {
        return { name: "login" };
    }

    if (to.meta.requiresGuest && useUserStore().user) {
        return { name: "miniapp.profile" };
    }
});

export default router;
