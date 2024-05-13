<script setup>
    import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
    import Loader from "@/Components/Common/Loader.vue";
    import useUserStore from "@/stores/user";
	import useCatch from "@/composables/catch";
	import useResetErrors from "@/composables/resetErrors";
	
    import axios from "axios";
    import { ref, reactive } from "vue";

    const user = useUserStore().user;

    const errors = reactive({})
	const loading = ref(false)

    function submit(event) {
		loading.value = true
		useResetErrors(errors)

        axios.put(route('api.user.update'), Object.fromEntries(new FormData(event.target)))
			.catch((error) => useCatch(error, errors))
			.finally(() => {
				loading.value = false
			})
    }
</script>

<template>
	<div data-page="profile">
		<div class="main__settings">
			<form class="flex flex-col items-center" @submit.prevent="submit">
				<div class="mb-8 main__data">
					<div class="reg__one">
						<div class="reg__name">{{ $t('personal.name') }}</div>
						<div class="reg__field">
							<input type="text" name="name" class="focus:border-b-pink focus:ring-0"
								:value="user.name">
							<div v-if="errors.name" class="text-danger" v-text="errors.name"></div>
						</div>
					</div>
					<div class="reg__one">
						<div class="reg__name">{{ $t('personal.email') }}</div>
						<div class="reg__field">
							<input type="email" name="email" class="focus:border-b-pink focus:ring-0"
								:value="user.email">
							<div v-if="errors.email" class="text-danger" v-text="errors.email"></div>
						</div>
					</div>
					<div class="reg__one" v-if="user.is_enabled_withdraw">
						<div class="reg__name">{{ $t('personal.tron') }}</div>
						<div class="reg__field">
							<input type="text" name="tron" class="focus:border-b-pink !text-xs focus:ring-0"
								:value="user.tron_wallet?.address">
							<div v-if="errors.tron" class="text-danger" v-text="errors.tron"></div>
						</div>
					</div>
				</div>
				<ButtonSecondary>
					{{ $t('personal.btn') }}
					<Loader v-show="loading"></Loader>
				</ButtonSecondary>
			</form>
		</div>
	</div>
</template>
