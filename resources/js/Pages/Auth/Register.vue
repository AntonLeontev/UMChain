<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import Loader from "@/Components/Common/Loader.vue";
import useUserStore from "@/stores/user";

import axios from "axios";
import { ref, reactive } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const loader = ref(false)
const errors = reactive({})

function register(event) {
	loader.value = true

    axios
        .post("/register", new FormData(event.target))
        .then(async (response) => {
			console.log(response);
			await useUserStore().login(event.target.email.value, event.target.password.value)
            await useUserStore().getUser()
			router.push({ name: "personal" });
        })
		.catch((error) => {
			if (error.response.status === 422) {
				Object.assign(errors, error.response.data.errors)
			} else {
				alert(error.response.data.message)
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
            <div class="reg__info">
                <div class="reg__form">
                    <form method="POST" @submit.prevent="register">
                        <div class="reg__one">
                            <div class="reg__name">{{ $t("Name") }}</div>
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
                            <div class="reg__name">{{ $t("Email") }}</div>
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
                            <div class="reg__name">{{ $t("Password") }}</div>
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
                                {{ $t("Repeat password") }}
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
								<span class="happy__show">{{ $t("I agree to") }}&nbsp;
									<a href="" class="happy__hide" >
										{{ $t("the processing of personal data.") }}
									</a>
								</span>
							</label>
                        </div>

						<ButtonSecondary>
							{{ $t("Register now") }}
							<Loader v-show="loader" />
						</ButtonSecondary>
                    </form>
                    <div class="reg__have">
                        {{ $t("Already have an account?") }}
						<router-link :to="{ name: 'login' }">{{ $t("Login") }}</router-link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
