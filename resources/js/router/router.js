import { createRouter, createWebHistory } from "vue-router";
import routes from "./routes";
import useUserStore from "../stores/user";
import axios from "axios";
import { retrieveLaunchParams } from "@tma.js/sdk";

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach(async (to, from) => {
    if (useUserStore().isAuthenticated === null) {
        if (to.name === "telegram") {
            try {
                const { initDataRaw } = retrieveLaunchParams();

                axios
                    .post(route("telegram.auth"), {
                        telegram_raw_data: initDataRaw,
                    })
                    .then((res) => {
                        useUserStore().user = res.data;
                        useUserStore().isAuthenticated = true;

                        if (useUserStore().user.quiz_is_done) {
                            router.push({ name: "personal" });
                        }

                        // window.location.replace("/quiz");
                    });
            } catch (error) {
                return { name: "login" };
            }
        } else {
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
    }

    if (to.meta.requiresAuth && !useUserStore().user) {
        return { name: "login" };
    }

    if (to.meta.requiresGuest && useUserStore().user) {
        return { name: "fit.profile" };
    }
});

export default router;
