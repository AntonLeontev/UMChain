export default [
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
                    tab: "profile",
                },
            },
            {
                path: "personal",
                component: () => import("@/Pages/Personal.vue"),
                meta: {
                    requiresAuth: true,
                    title: "titles.personal",
                    tab: "profile",
                },
                name: "personal",
            },
            {
                path: "password",
                component: () => import("@/Pages/ChangePassword.vue"),
                meta: {
                    requiresAuth: true,
                    title: "titles.password",
                    tab: "profile",
                },
                name: "change-password",
            },
            {
                path: "referral",
                component: () => import("@/Pages/Referral.vue"),
                meta: {
                    requiresAuth: true,
                    title: "titles.referral",
                    tab: "profile",
                },
                name: "referral",
            },
            {
                path: "notifications",
                component: () => import("@/Pages/Notifications.vue"),
                meta: {
                    requiresAuth: true,
                    title: "titles.notifications",
                    tab: "profile",
                },
                name: "notifications",
            },
            {
                path: "fit/profile",
                component: () => import("@/Pages/Fit/Profile.vue"),
                meta: {
                    requiresAuth: true,
                    title: "titles.profile",
                    tab: "fit",
                },
                name: "fit.profile",
            },
            {
                path: "fit/calculator",
                component: () => import("@/Pages/Fit/Calculator.vue"),
                meta: {
                    requiresAuth: true,
                    title: "titles.calculator",
                    tab: "fit",
                },
                name: "fit.calculator",
            },
        ],
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("@/Pages/NotFound.vue"),
    },
];
