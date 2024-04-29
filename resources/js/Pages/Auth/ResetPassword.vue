<script setup>
    import AuthLayout from '@/Layouts/AuthLayout.vue';
    import ButtonSecondary from '@/Components/Common/ButtonSecondary.vue';
    import Loader from '@/Components/Common/Loader.vue';
	import useCatch from "@/composables/catch";

	import { ref, reactive } from 'vue';
	import axios from 'axios';
	import { useRouter } from "vue-router";

	const router = useRouter()

	const loader = ref(false)
	const errors = reactive({})

	const query = new URLSearchParams(window.location.search);

	function submit(event) {
		loader.value = true

		axios
			.post('/reset-password', new FormData(event.target))
			.then((response) => {
				router.push({ name: "login" })
			})
			.catch((error) => useCatch(error, errors))
			.finally(() => {
				loader.value = false
			})
	}
</script>

<template>
    <AuthLayout>
        <template #h1>{{ $t('reset.h1') }}</template>

        <template #default>
            <div class="">
                <div class="reg__subtitle">
                    {{ $t('forgot.text') }}
                </div>
                <div class="reg__wrapper">
                    <div class="reg__info">
                        <div class="reg__form">
                            <form @submit.prevent="submit">
				<input type="hidden" name="token" :value="query.get('token')">
                <div class="reg__one">
                    <div class="reg__name">{{ $t('auth.email') }}</div>
                    <div class="reg__field">
                        <input type="email" name="email" class="focus:border-b-pink focus:ring-0" :value="query.get('email')" required>
                    </div>
					<div class="text-pink" v-text="errors.email?.join(' ')"></div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ $t('reset.password') }}</div>
                    <div class="reg__field">
                        <input type="password" name="password" class="focus:border-b-pink focus:ring-0" required autocomplete="new-password">
                    </div>
					<div class="text-pink" v-text="errors.password?.join(' ')"></div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ $t('reset.repeat') }}</div>
                    <div class="reg__field">
                        <input type="password" name="password_confirmation" class="focus:border-b-pink focus:ring-0" required autocomplete="new-password">
                    </div>
                </div>
				
				<ButtonSecondary class="mt-4">
					{{ $t('reset.btn') }}
					<Loader v-show="loader"></Loader>
				</ButtonSecondary>
            </form>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </AuthLayout>
</template>
