<script setup>
import FadeTransition from "@/Components/Common/FadeTransition.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import Loader from "@/Components/Common/Loader.vue";

import useUserStore from "@/stores/user";
import useCatch from "@/composables/catch";
import useResetErrors from "@/composables/resetErrors";
import useToastsStore from "@/stores/toasts";

import { ref, reactive, computed } from "vue";
import axios from "axios";
import { useI18n } from "vue-i18n";
const { t: $t } = useI18n();

const isForm = ref(false);
const loading = ref(false);
const user = computed(() => useUserStore().user )
const errors = reactive({});

function submit(event) {
	loading.value = true;
	useResetErrors(errors);
	
	axios
		.post(route("api.user.withdraw.create"), new FormData(event.target))
		.then(() => {
			useUserStore().getUser()
			useToastsStore().toastInfo($t("fit-profile.withdraw.success"), 2000);
		})
		.catch((error) => useCatch(error, errors))
		.finally(() => loading.value = false)
}
</script>

<template>
	<div class="flex justify-center">
		<FadeTransition mode="out-in">
			<ButtonSecondary class="!py-1" @click="isForm = true" v-if="!isForm">
				{{ $t("fit-profile.withdraw.btn") }}
			</ButtonSecondary>

			<form class="flex flex-col items-center" @submit.prevent="submit" v-else>
				<div class="mb-8 main__data">
					<div class="reg__one">
						<div class="reg__name">{{ $t("fit-profile.withdraw.amount") }}</div>
						<div class="reg__field">
							<input type="number" step="1" name="amount" class="focus:border-b-pink focus:ring-0">
							<div v-if="errors.amount" class="text-danger" v-text="errors.amount"></div>
						</div>
					</div>
					<div class="reg__one">
						<div class="reg__name">{{ $t("fit-profile.withdraw.wallet") }}</div>
						<div class="reg__field">
							<input type="text" name="wallet" class="focus:border-b-pink !text-xs focus:ring-0"
								:value="user.tron_wallet?.address">
							<div v-if="errors.wallet" class="text-danger" v-text="errors.wallet"></div>
						</div>
					</div>
				</div>
				<ButtonSecondary>
					{{ $t("fit-profile.withdraw.withdraw") }}
					<Loader v-show="loading"></Loader>
				</ButtonSecondary>
			</form>
		</FadeTransition>
	</div>
</template>
