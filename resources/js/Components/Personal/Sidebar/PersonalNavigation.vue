<script setup>
import { ref } from "vue";
import useUserStore from "@/stores/user";
import usePersonalNavigationStore from "@/stores/personalNav";
import Switch from "./Switch.vue";
import FadeTransition from "@/Components/Common/FadeTransition.vue";

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

			<FadeTransition mode="out-in">
				<div class="main__menu" v-if="nav.activeTab === 'profile'">
					<ul class="flex flex-col items-center main__menu--list">
						<li class="tracking-widest">
							<router-link :to="{ name: 'personal' }">Personal</router-link>
						</li>

						<li class="tracking-widest">
							<router-link :to="{ name: 'change-password' }">Change password</router-link>
						</li>

						<li class="tracking-widest">
							<router-link :to="{ name: 'referral' }">Referral</router-link>
						</li>

						<!-- <li
							v-if="user.activeRefLink"
							class="tracking-widest"
						>
							Banners
						</li> -->

						<li class="relative tracking-widest">
							<router-link class="flex items-center justify-center gap-2" :to="{ name: 'notifications' }">
								Notifications
								<div
									class="rounded bg-pink px-1 !text-white text-sm text-center"
									v-show="user.unread_notifications_count > 0"
									v-text="user.unread_notifications_count"
								></div>
							</router-link>
						</li>

						<li class="tracking-widest">
							<router-link :to="{ name: 'logout' }">Logout</router-link>
						</li>
					</ul>
				</div>

				<div
					class="main__rate"
					v-else-if="nav.activeTab === 'fit'"
				>
					<ul class="flex flex-col items-center main__menu--list">
						<li class="tracking-widest">
							<router-link :to="{ name: 'fit.profile' }">Profile</router-link>
						</li>
						<li class="tracking-widest">
							<router-link :to="{ name: 'fit.calculator' }">Calculator</router-link>
						</li>
					</ul>
				</div>
			</FadeTransition>
        </div>
    </div>
</template>
