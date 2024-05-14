<script setup>
import FadeTransition from "@/Components/Common/FadeTransition.vue";
import Loader from "@/Components/Common/Loader.vue";
import WithdrawTokens from "@/Components/Personal/WithdrawTokens.vue";
import Google from "@/Components/Personal/Sources/Google.vue";

import useUserStore from "@/stores/user";
import useToastsStore from "@/stores/toasts";

import useCatch from "@/composables/catch";
import useGetCookie from "@/composables/getCookie";
import useISOToFormatString from "@/composables/ISOToFormatString";

import axios from "axios";
import { ref, reactive, onMounted, computed } from "vue";

const user = computed(() => useUserStore().user )

const trasactionsLoading = ref(true);

const transactions = reactive([]);

onMounted(() => {
	getTransactions();

	if (useGetCookie("dataSourceError")) {
		useToastsStore().toastError(useGetCookie("dataSourceError"));
	}
});

const getTransactions = () => {
	axios
		.get(route("api.transactions.index"))
		.then((resp) => {
			transactions.push(...resp.data);
		})
		.catch((error) => useCatch(error))
		.finally(() => {
			trasactionsLoading.value = false;
		});
};

const typeToComponent = (component) => {
	const components = {
		google: Google,
	};

	return components[component];
};
</script>

<template>
	<div class="" v-if="!user.active_data_source">
		<div class="mb-5">{{ $t("fit-profile.no-active-sources") }}</div>
		<div class="flex flex-col gap-3">
			<a :href="route('google.auth')"
				class="inline-flex items-center justify-center w-full gap-2 px-6 py-4 mb-3 font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-black border border-none rounded hover:text-pink focus:outline-none">
				<img class="w-6" src="/resources/images/google-fit.png" alt="" />
				{{ $t("fit-profile.google-fit") }}
			</a>
		</div>
	</div>
	<div v-else>
		<component :is="typeToComponent(user.active_data_source.type)" />

		<div class="relative p-5 rounded bg-pink">
			<div>
				{{ $t("fit-profile.tokens") }}
				<span>{{ user.umt }} UMCT</span>
			</div>
			<div class="" v-if="user.umt_frozen > 0">{{ $t("fit-profile.frozen") }}: {{ user.umt_frozen }} UMCT</div>
		</div>

		<div class="mt-1 mb-3 ">
			<WithdrawTokens v-if="user.is_enabled_withdraw" />
		</div>

		<FadeTransition mode="out-in">
			<div v-if="trasactionsLoading" class="flex justify-center p-5 mt-3 mb-3 rounded bg-pink">
				<Loader class="w-8 h-8" />
			</div>
			<div v-else class="p-5 mt-3 mb-3 rounded bg-pink">
				<div v-if="transactions.length > 0">
					<div class="flex gap-5" v-for="transaction in transactions">
						<span>{{
							useISOToFormatString(transaction.created_at)
						}}</span>
						<span>+ {{ transaction.amount }} UMCT</span>
					</div>
				</div>
				<div v-else>{{ $t("fit-profile.no-transactions") }}</div>
			</div>
		</FadeTransition>
	</div>
</template>
