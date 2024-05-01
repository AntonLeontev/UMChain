<script setup>
    import FadeTransition from "@/Components/Common/FadeTransition.vue";
    import Loader from "@/Components/Common/Loader.vue";
    import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
    import PersonalLayout from "@/Layouts/PersonalLayout.vue";
	import useUserStore from "@/stores/user";
	import useCatch from "@/composables/catch";
	
    import axios from "axios";
    import { ref, reactive, onMounted } from "vue";

	const user = useUserStore().user
	const loading = ref(false)

	const calories = ref(null)
	const authenticated = ref(null)
	const transactions = reactive([])

	onMounted(() => {
		getCalories()
		getTransactions()
	})

	const getCalories = () => {
		if (!user.google_authenticated) {
			return
		}

		axios
			.get(route('user.google.calories'))
			.then(response => calories = response.data)
			.catch(error => {
				if (error.response.data === 'invalid grant') {
					user.google_authenticated = false
					// this.$dispatch('toast', {type: 'error', text: 'Ошибка авторизации в Google. Нужно авторизоваться заново'})
					return
				}

				// this.$dispatch('toast', {type: 'error', text: error.response.data.message})
			})
	}

	const getTransactions = () => {
		
	}
</script>

<template>
    <PersonalLayout>
		<div>
			<a v-if="!user.google_authenticated" href="{{ route('google.auth') }}" class="inline-flex items-center justify-center px-6 py-4 mb-3 font-semibold tracking-widest text-white transition duration-150 ease-in-out border rounded bg-pink border-pink hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none">
				Google auth
			</a>
			<div v-else>
				<div class="p-5 mb-3 rounded bg-pink">
					Spent for today:
					<span v-text="calories"></span> Cal
				</div>
			</div>
			<div class="p-5 rounded bg-pink">
				Total tokens:
				<span v-text="tokens"></span>
			</div>
			<div v-if="transactions.length > 0" class="p-5 mt-3 mb-3 rounded bg-pink">
				<div class="flex gap-5" v-for="transaction in transactions">
					<span v-text="new Date(transaction.created_at).toLocaleDateString()"></span>
					<span v-text="'+'+transaction.amount+' UMCT'"></span>
				</div>
			</div>
		</div>
    </PersonalLayout>
</template>
