export default [
    {
        path: "/",
        component: () => import("../Pages/Home.vue"),
        name: "home",
    },
    {
        path: "/login",
        component: () => import("../Pages/Login.vue"),
        name: "login",
        meta: { requiresGuest: true },
    },
    {
        path: "/cabinet/personal",
        component: () => import("../Pages/Personal.vue"),
        meta: { requiresAuth: true },
        name: "personal",
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("../Pages/NotFound.vue"),
    },
];
