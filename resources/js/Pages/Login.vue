<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import axios from "axios";
import useUserStore from "../stores/user";
import { useRouter } from "vue-router";

const router = useRouter()

function login(event) {
	axios
		.post("/login", {
			email: event.target.email.value,
			password: event.target.password.value,
		})
		.then((response) => {
			axios.get("/api/user").then((response) => {
				useUserStore().user = response.data
				router.push({ name: "home" })
			})
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
					<button class="reg__btn">Login</button>
                </form>
                <div class="reg__have">
                    Not registered yet?
					<a
                        href="{{ LaravelLocalization::localizeUrl(route('register')) }}"
                        class="reg__signin"
                        >&nbsp;Register
                    </a>
                </div>
            </div>
        </div>
	</div>
    </AppLayout>
</template>
