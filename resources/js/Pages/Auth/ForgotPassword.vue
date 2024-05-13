<script setup>
    import AuthLayout from '@/Layouts/AuthLayout.vue';
    import ButtonSecondary from '@/Components/Common/ButtonSecondary.vue';
    import Loader from '@/Components/Common/Loader.vue';
	import useToastsStore from "@/stores/toasts";

	import { ref } from 'vue';
	import axios from 'axios';

	const loader = ref(false)
	const success = ref(false)

	function submit(event) {
		loader.value = true

		axios
			.post('/forgot-password', new FormData(event.target))
			.then((response) => {
				success.value = true
			})
			.catch((error) => {
				if (error.response.status === 422) {
					success.value = true
				} else {
					useToastsStore().toastError(error);
				}
			})
			.finally(() => {
				loader.value = false
			})
	}
</script>

<template>
    <AuthLayout>
        <template #h1>{{ $t('forgot.h1') }}</template>

        <template #default>
            <div class="">
                <div class="reg__subtitle">
                    {{ $t('forgot.text') }}
                </div>
                <div class="reg__wrapper">
                    <div class="reg__info">
                        <div class="reg__form">
                            <form @submit.prevent="submit">
                                <div class="mb-8 reg__one">
                                    <div class="reg__name">{{ $t('auth.email') }}</div>
                                    <div class="reg__field">
                                        <input type="email" name="email" class="focus:border-b-pink focus:ring-0" required autofocus>
                                    </div>
                                    <div class="mt-4 reg__field" v-if="success">
                                        {{ $t('forgot.success') }}
                                    </div>
                                </div>
                                <ButtonSecondary :disabled="success">
									{{ $t('forgot.btn') }}
									<Loader v-show="loader" />
								</ButtonSecondary>
                            </form>
                            <div class="reg__have">{{ $t('forgot.not') }}
                                <router-link :to="{ name: 'register' }"
                                    class="reg__signin">{{ $t('forgot.register') }}</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </AuthLayout>
</template>
