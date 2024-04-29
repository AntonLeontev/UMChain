<script setup>
    import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
    import Loader from "@/Components/Common/Loader.vue";
    import InputPassword from "@/Components/Common/InputPassword.vue";
    import PersonalLayout from "@/Layouts/PersonalLayout.vue";
    import useCatch from "@/composables/catch";
    import useResetErrors from "@/composables/resetErrors";

    import axios from "axios";
    import {
        ref,
        reactive
    } from "vue";

    const errors = reactive({})
    const loading = ref(false)

    function submit(event) {
        loading.value = true
        useResetErrors(errors)

        axios.put(route('api.password.update'), Object.fromEntries(new FormData(event.target)))
			.then((resp) => event.target.reset())
            .catch((error) => useCatch(error, errors))
            .finally(() => {
                loading.value = false
            })
    }
</script>

<template>
    <PersonalLayout>
        <div data-page="password">
            <div class="main__settings main__settings--password">
                <div class="main__data">
                    <form @submit.prevent="submit" class="flex flex-col items-center">
						<InputPassword class="reg__one" :label="$t('change-pass.pass-old')" name="old_password" :errors="errors" />
						<InputPassword class="reg__one" :label="$t('change-pass.pass-new')" name="new_password" :errors="errors" />
						<InputPassword class="mb-8 reg__one" :label="$t('change-pass.confirm')" name="new_password_confirmation" />
						
						<ButtonSecondary>
							{{ $t('change-pass.btn') }}
							<Loader v-if="loading" />
						</ButtonSecondary>
                    </form>
                </div>
            </div>
        </div>
    </PersonalLayout>
</template>
