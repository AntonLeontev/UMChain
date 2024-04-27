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
    },
    {
        path: "/cabinet/personal",
        component: () => import("../Pages/Login.vue"),
        name: "personal",
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("../Pages/NotFound.vue"),
    },
];
