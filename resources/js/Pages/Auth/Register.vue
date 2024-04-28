<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import Loader from "@/Components/Common/Loader.vue";
import useUserStore from "@/stores/user";
import useResetErrors from "@/composables/resetErrors";
import useCatch from "@/composables/catch";

import axios from "axios";
import { ref, reactive } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const loader = ref(false)
const errors = reactive({})

function register(event) {
	loader.value = true
	useResetErrors(errors)
	
    axios
        .post("/register", new FormData(event.target))
        .then(async (response) => {
			console.log(response);
			await useUserStore().login(event.target.email.value, event.target.password.value)
            await useUserStore().getUser()
			router.push({ name: "personal" });
        })
		.catch((error) => useCatch(error, errors))
		.finally(() => {
			loader.value = false
		})
}
</script>

<template>
    <AuthLayout>
		<template #h1>{{ $t("register.h1") }}</template>
		
		<template #default>
			<div class="flex items-center justify-center h-full">
				<div class="reg__info">
					<div class="reg__form">
						<form method="POST" @submit.prevent="register">
							<div class="reg__one">
								<div class="reg__name">{{ $t("auth.name") }}</div>
								<div class="reg__field">
									<input
										type="text"
										name="name"
										class="focus:border-b-pink focus:ring-0"
										autocomplete="off"
									/>
								</div>
								<div class="text-pink" v-text="errors.name?.join(' ')"></div>
							</div>
							<div class="reg__one">
								<div class="reg__name">{{ $t("auth.email") }}</div>
								<div class="reg__field">
									<input
										type="email"
										name="email"
										class="focus:border-b-pink focus:ring-0"
										autocomplete="off"
									/>
								</div>
								<div class="text-pink" v-text="errors.email?.join(' ')"></div>
							</div>
							<div class="reg__one">
								<div class="reg__name">{{ $t("auth.password") }}</div>
								<div class="reg__field">
									<input
										type="password"
										name="password"
										class="focus:border-b-pink focus:ring-0"
										autocomplete="new-password"
									/>
								</div>
								<div class="text-pink" v-text="errors.password?.join(' ')"></div>
							</div>
							<div class="reg__one">
								<div class="reg__name">
									{{ $t("auth.repeat") }}
								</div>
								<div class="reg__field">
									<input
										type="password"
										name="password_confirmation"
										class="focus:border-b-pink focus:ring-0"
										autocomplete="new-password"
									/>
								</div>
							</div>
							<div class="mb-8 reg__agreement">
								<input
									id="happy"
									type="checkbox"
									class="custom-checkbox"
									name="happy"
									checked
									required
								/>
								<label for="happy">
									<span class="happy__show">{{ $t("register.agree") }}&nbsp;
										<a href="" class="happy__hide" >
											{{ $t("register.to") }}
										</a>
									</span>
								</label>
							</div>

							<ButtonSecondary :disabled="loader">
								{{ $t("register.btn") }}
								<Loader v-show="loader" />
							</ButtonSecondary>
						</form>
						<div class="reg__have">
							{{ $t("register.have") }}
							<router-link :to="{ name: 'login' }">{{ $t("register.login") }}</router-link>
						</div>
					</div>
				</div>
			</div>
		</template>
    </AuthLayout>
</template>
