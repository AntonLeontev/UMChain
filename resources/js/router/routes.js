export default [
    {
        path: "/",
        component: () => import("@/Pages/Home.vue"),
        name: "home",
    },
    {
        path: "/login",
        component: () => import("@/Pages/Auth/Login.vue"),
        name: "login",
        meta: { requiresGuest: true },
    },
    {
        path: "/register",
        component: () => import("@/Pages/Auth/Register.vue"),
        name: "register",
        meta: { requiresGuest: true },
    },
    {
        path: "/forgot-password",
        component: () => import("@/Pages/Auth/ForgotPassword.vue"),
        name: "forgot-password",
        meta: { requiresGuest: true },
    },
    {
        path: "/reset-password",
        component: () => import("@/Pages/Auth/ResetPassword.vue"),
        name: "reset-password",
        meta: { requiresGuest: true },
    },
    {
        path: "/cabinet",
        component: () => import("@/Layouts/PersonalLayout.vue"),
        children: [
            {
                path: "logout",
                component: () => import("@/Pages/Auth/Logout.vue"),
                name: "logout",
                meta: {
                    requiresAuth: true,
                    title: "titles.logout",
                },
            },
            {
                path: "/personal",
                component: () => import("@/Pages/Personal.vue"),
                meta: { requiresAuth: true, title: "titles.personal" },
                name: "personal",
            },
            {
                path: "/password",
                component: () => import("@/Pages/ChangePassword.vue"),
                meta: { requiresAuth: true, title: "titles.password" },
                name: "change-password",
            },
            {
                path: "/referral",
                component: () => import("@/Pages/Referral.vue"),
                meta: { requiresAuth: true, title: "titles.referral" },
                name: "referral",
            },
            {
                path: "/notifications",
                component: () => import("@/Pages/Notifications.vue"),
                meta: { requiresAuth: true, title: "titles.notifications" },
                name: "notifications",
            },
            {
                path: "/fit/profile",
                component: () => import("@/Pages/Fit/Profile.vue"),
                meta: { requiresAuth: true, title: "titles.profile" },
                name: "fit.profile",
            },
            {
                path: "/fit/calculator",
                component: () => import("@/Pages/Fit/Calculator.vue"),
                meta: { requiresAuth: true, title: "titles.calculator" },
                name: "fit.calculator",
            },
        ],
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("@/Pages/NotFound.vue"),
    },
];
