<script setup>
import { ref } from "vue";
import useUserStore from "@/stores/user";
import usePersonalNavigationStore from "@/stores/personalNav";
import Switch from "./Switch.vue";

const tabs = [
    {
        name: "profile",
    },
    {
        name: "fit",
    },
];

const nav = usePersonalNavigationStore();

const user = useUserStore().user;
</script>

<template>
    <div>
        <h2 class="main__title">Title page</h2>
        <div class="main__wrapper">
            <Switch :buttons="tabs" :activeButton="nav.activeTab" @tab-switch="(tab) => nav.activeTab = tab" />

            <div class="main__menu" v-show="nav.activeTab === 'profile'">
                <ul class="flex flex-col items-center main__menu--list">
                    <li class="tracking-widest">
						<router-link :to="{ name: 'personal' }">Personal</router-link>
                    </li>

                    <li
                        class="tracking-widest"
                    >
                        Change password
                    </li>

                    <li
                        class="tracking-widest"
                    >
                        Referral
                    </li>

                    <li
                        v-if="user.activeRefLink"
                        class="tracking-widest"
                    >
                        Banners
                    </li>

                    <li
                        class="relative tracking-widest"
                    >
                        <div class="relative">
                            Notifications
                            <div
                                class="absolute top-[50%] translate-y-[-50%] right-8 rounded bg-pink px-1 !text-white text-sm"
                                x-show="user.unread_notifications_count > 0"
                                x-text="user.unread_notifications_count"
                            ></div>
                        </div>
                    </li>

                    <li class="tracking-widest">
						<router-link :to="{ name: 'logout' }">Logout</router-link>
                    </li>
                </ul>
            </div>

            <div
                class="main__rate"
                v-show="nav.activeTab === 'fit'"
            >
                <ul class="flex flex-col items-center main__menu--list">
                    <li
                        class="tracking-widest"
                    >
                        Profile
                    </li>
                    <li
                        class="tracking-widest"
                    >
                        Calculator
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
