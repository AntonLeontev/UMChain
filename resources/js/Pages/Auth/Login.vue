<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import Loader from "@/Components/Common/Loader.vue";
import Checkbox from "@/Components/Common/Checkbox.vue";
import useUserStore from "@/stores/user";
import useCatch from "@/composables/catch";
import useResetErrors from "@/composables/resetErrors";

import axios from "axios";
import { useRouter } from "vue-router";
import { ref, reactive } from "vue";

const router = useRouter()

const loader = ref(false)
const errors = reactive({})

function login(event) {
	loader.value = true
	useResetErrors(errors)

	axios
		.post('/login', new FormData(event.target))
		.then(async (response) => {
			await useUserStore().getUser()
			router.push({ name: "personal" })
		})
		.catch((error) => useCatch(error, errors))
		.finally(() => {
			loader.value = false
		})
}
</script>

<template>
    <AuthLayout>
		<template #h1>{{ $t("login.h1") }}</template>

		<template #default>
			<div class="flex items-center justify-center h-full">
				<div class=" reg__info">
					<div>
						<form class="reg__form" @submit.prevent="login">
							<div class="reg__one">
								<div class="reg__name">{{ $t("auth.email") }}</div>
								<div class="reg__field">
									<input
										type="email"
										name="email"
										value=""
										required
										autofocus
										class="focus:border-b-pink focus:ring-0"
									/>
								</div>
								<div class="text-pink" v-text="errors.email"></div>
							</div>
							<div class="reg__one">
								<div class="reg__name">{{ $t("auth.password") }}</div>
								<div class="reg__field">
									<input
										id="password"
										type="password"
										class="login__password focus:border-b-pink focus:ring-0"
										name="password"
										required
										autocomplete="current-password"
									/>
								</div>
							</div>
							<div class="reg__one">
								<Checkbox name="remember" checked>
									{{ $t('login.remember') }}
								</Checkbox>
							</div>
							<div class="mb-8 reg__forget">
								<router-link :to="{ name: 'forgot-password' }">{{ $t("login.forget") }}</router-link>
							</div>
							<ButtonSecondary :disabled="loader">
								{{ $t("login.login") }}
								<Loader v-if="loader" />
							</ButtonSecondary>
						</form>
						<div class="reg__have">
							{{ $t("login.not") }}
							<router-link :to="{ name: 'register' }" class="reg__signin">{{ $t("login.register") }}</router-link>
						</div>
					</div>
				</div>
			</div>
		</template>
    </AuthLayout>
</template>
