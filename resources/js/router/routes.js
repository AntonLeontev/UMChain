export default [
    {
        path: "/",
        component: () => import("../Pages/Home.vue"),
        name: "home",
    },
    {
        path: "/login",
        component: () => import("../Pages/Auth/Login.vue"),
        name: "login",
        meta: { requiresGuest: true },
    },
    {
        path: "/register",
        component: () => import("../Pages/Auth/Register.vue"),
        name: "register",
        meta: { requiresGuest: true },
    },
    {
        path: "/forgot-password",
        component: () => import("../Pages/Auth/ForgotPassword.vue"),
        name: "forgot-password",
        meta: { requiresGuest: true },
    },
    {
        path: "/reset-password",
        component: () => import("../Pages/Auth/ResetPassword.vue"),
        name: "reset-password",
        meta: { requiresGuest: true },
    },
    {
        path: "/logout",
        component: () => import("../Pages/Auth/Logout.vue"),
        name: "logout",
        meta: { requiresAuth: true },
    },
    {
        path: "/cabinet/personal",
        component: () => import("../Pages/Personal.vue"),
        meta: { requiresAuth: true },
        name: "personal",
    },
    {
        path: "/cabinet/password",
        component: () => import("../Pages/ChangePassword.vue"),
        meta: { requiresAuth: true },
        name: "change-password",
    },
    {
        path: "/cabinet/referral",
        component: () => import("../Pages/Referral.vue"),
        meta: { requiresAuth: true },
        name: "referral",
    },
    {
        path: "/cabinet/notifications",
        component: () => import("../Pages/Notifications.vue"),
        meta: { requiresAuth: true },
        name: "notifications",
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("../Pages/NotFound.vue"),
    },
];
