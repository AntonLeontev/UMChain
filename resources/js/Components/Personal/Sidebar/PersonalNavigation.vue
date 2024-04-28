<script setup>
import { ref } from "vue";
import useUserStore from "@/stores/user";
import Switch from "./Switch.vue";

const tabs = [
    {
        name: "profile",
    },
    {
        name: "fit",
    },
];

const activeTab = ref("fit");

const user = useUserStore().user;
</script>

<template>
    <div>
        <h2 class="main__title">Title page</h2>
        <div class="main__wrapper">
            <Switch :buttons="tabs" :activeButton="activeTab" @tab-switch="(tab) => activeTab = tab" />

            <div class="main__menu" v-show="activeTab === 'profile'">
                <ul class="flex flex-col items-center main__menu--list">
                    <li
                        class="tracking-widest"
                        :class="{ active: page === 'personal' }"
                        @click="$dispatch('page', 'personal')"
                    >
                        Personal
                    </li>

                    <li
                        class="tracking-widest"
                        :class="{ active: page === 'password' }"
                        @click="$dispatch('page', 'password')"
                    >
                        Change password
                    </li>

                    <li
                        class="tracking-widest"
                        :class="{ active: page === 'referral' }"
                        @click="$dispatch('page', 'referral')"
                    >
                        Referral
                    </li>

                    <li
                        v-if="user.activeRefLink"
                        class="tracking-widest"
                        :class="{ active: page === 'banners' }"
                        @click="$dispatch('page', 'banners')"
                    >
                        Banners
                    </li>

                    <li
                        class="relative tracking-widest"
                        :class="{ active: page === 'notifications' }"
                        @click="$dispatch('page', 'notifications')"
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

                    <li
                        class="tracking-widest"
                        :class="{ active: page === 'logout' }"
                        @click="$dispatch('page', 'logout')"
                    >
                        Logout
                    </li>
                </ul>
            </div>

            <div
                class="main__rate"
                v-show="activeTab === 'fit'"
            >
                <ul class="flex flex-col items-center main__menu--list">
                    <li
                        class="tracking-widest"
                        :class="{ active: page === 'fitProfile' }"
                        @click="$dispatch('page', 'fitProfile')"
                    >
                        Profile
                    </li>
                    <li
                        class="tracking-widest"
                        :class="{ active: page === 'fitCalculator' }"
                        @click="$dispatch('page', 'fitCalculator')"
                    >
                        Calculator
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
