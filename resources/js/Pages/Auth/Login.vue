<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import Loader from "@/Components/Common/Loader.vue";
import useUserStore from "@/stores/user";
import useToastsStore from "@/stores/toasts";

import axios from "axios";
import { useRouter } from "vue-router";
import { ref, reactive } from "vue";

const router = useRouter()

const loader = ref(false)
const errors = reactive({})

function login(event) {
	loader.value = true

	axios
		.post('/login', {
			email: event.target.email.value,
			password: event.target.password.value,
		})
		.then(async (response) => {
			await useUserStore().getUser()
			router.push({ name: "personal" })
		})
		.catch((error) => {
			if (error.response.status === 422) {
				Object.assign(errors, error.response.data.errors)
			} else {
				useToastsStore().handleError(error)
			}
		})
		.finally(() => {
			loader.value = false
		})
}
</script>

<template>
    <AppLayout>
	<div class="flex items-center justify-center h-full">
        <div class=" reg__info">
            <div>
                <form class="reg__form" @submit.prevent="login">
                    <div class="reg__one">
                        <div class="reg__name">Email</div>
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
						<div class="text-pink" v-text="errors.email?.join(' ')"></div>
                    </div>
                    <div class="reg__one">
                        <div class="reg__name">Password</div>
                        <div class="reg__field">
                            <input
                                id="password"
                                type="password"
                                class="login__password {{ session('wrong__input') }} focus:border-b-pink focus:ring-0"
                                name="password"
                                required
                                autocomplete="current-password"
                            />
                        </div>
                    </div>
                    <div class="mb-8 reg__forget">
                        <a
                            href="{{ LaravelLocalization::localizeUrl(route('password.email')) }}"
                            >Forget password</a
                        >
                    </div>
					<ButtonSecondary>
						Login
						<Loader v-if="loader" />
					</ButtonSecondary>
                </form>
                <div class="reg__have">
                    Not registered yet?
					<router-link :to="{ name: 'register' }" class="reg__signin">Register</router-link>
                </div>
            </div>
        </div>
	</div>
    </AppLayout>
</template>
