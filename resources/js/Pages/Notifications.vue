<script setup>
    import FadeTransition from "@/Components/Common/FadeTransition.vue";
    import Loader from "@/Components/Common/Loader.vue";
	import useUserStore from "@/stores/user";
	import useISOToLacaleString from "@/composables/ISOToLocaleString";
	
    import axios from "axios";
    import { ref, reactive, onMounted } from "vue";

	const user = useUserStore().user
	const loading = ref(true)
	const notifications = reactive([])

	onMounted(() => {
		axios.get(route('api.user.notifications.index'))
			.then((resp) => {
				notifications.push(...resp.data)
			})
			.finally(() => {
				loading.value = false
			})
	})

	const readNotifications = () => {
		axios.post(route('api.user.notifications.mark-read'))
			.then((resp) => {
				user.unread_notifications_count = 0
				notifications.length = 0
			})
	}

</script>

<template>
	<div>
		<div class="main__uved">
			<div class="flex justify-center gap-2 uved__title">
				<p>{{ $t('notifications.h1') }}</p>
				<button class="p-1 text-xs text-white bg-black rounded"
					v-if="notifications.length > 0"
					@click="readNotifications"
				>
					{{ $t('notifications.btn') }}
				</button>
			</div>
			<div class="uved__wrapper">
				<FadeTransition mode="out-in">
					<div class="flex justify-center" v-if="loading">
						<Loader class="w-12 h-12" />
					</div>
					<div class="" v-else>
						<div class="uved__item" v-for="(notification) in notifications" :key="notification.id" x-if="notifications.length > 0">
							<div class="uved__info">
								<div class="mb-0 uved__name uved__new">
									<div v-if="notification.data.is_admin" v-html="notification.data.text[$i18n.locale]"></div>
									<div v-else>{{ notification.data.lang }}</div>
								</div>
							</div>
							<div class="uved__date">{{ useISOToLacaleString(notification.created_at) }}</div>
						</div>
						<div class="uved__item" v-if="notifications.length === 0">
							{{ $t('notifications.no') }}
						</div>
					</div>
				</FadeTransition>
			</div>
		</div>
	</div>
</template>
