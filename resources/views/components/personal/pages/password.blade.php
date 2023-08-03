<div data-page="password" x-show="page === 'password'" x-cloak>
    <div class="main__settings main__settings--password">
        <div class="main__data">
            <form 
				x-data="{
					form: $form('put', route('users.update-password'), {
						old_password: '',
						new_password: '',
						new_password_confirmation: '',
					}),
					submit() {
						this.form.submit()
							.then(response => {
								this.$dispatch('toast', {text: 'Success'});
							})
							.catch(error => {
								let text = 'Error';

								if (error.response.data.message) {
									text = error.response.data.message
								}

								this.$dispatch('toast', {text: text, type: 'error'});
							});
					},
				}"
				@submit.prevent="submit"
				class="flex flex-col items-center"
			>
                <div class="reg__one">
                    <div class="reg__name">{{ __('cabinet/password.old') }}</div>
                    <div class="reg__field password__hide" x-data="{showPass: false}">
                        <input 
							:type="showPass ? 'text' : 'password'" 
							name="old_password"
							class="focus:border-b-pink focus:ring-0"
							x-model="form.old_password"
							@change="form.validate('old_password')"
						>
                        <div class="password__eye" @mousedown="showPass = true" @mouseup.window="showPass = false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z"
                                    stroke="#868686" stroke-linecap="round" />
                                <circle cx="12" cy="12" r="3" stroke="#868686"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
						<template x-if="form.invalid('old_password')">
							<div class="text-danger" x-text="form.errors.old_password"></div>
						</template>
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ __('cabinet/password.new') }}</div>
                    <div class="reg__field password__hide" x-data="{showPass: false}">
                        <input 
							:type="showPass ? 'text' : 'password'"  
							name="new_password"
							class="focus:border-b-pink focus:ring-0"
							x-model="form.new_password"
							@change="form.validate('new_password')"	
						>
                        <div class="password__eye" @mousedown="showPass = true" @mouseup.window="showPass = false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z"
                                    stroke="#868686" stroke-linecap="round" />
                                <circle cx="12" cy="12" r="3" stroke="#868686"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
					<template x-if="form.invalid('new_password')">
						<div class="text-danger" x-text="form.errors.new_password"></div>
					</template>
                </div>
                <div class="mb-8 reg__one">
                    <div class="reg__name">{{ __('cabinet/password.confirm') }}</div>
                    <div class="reg__field password__hide" x-data="{showPass: false}">
                        <input 
							:type="showPass ? 'text' : 'password'" 
							name="new_password_confirmation"
							class="focus:border-b-pink focus:ring-0"
							x-model="form.new_password_confirmation"
							@change="form.validate('new_password_confirmation')"	
						>
                        <div class="password__eye" @mousedown="showPass = true" @mouseup.window="showPass = false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z"
                                    stroke="#868686" stroke-linecap="round" />
                                <circle cx="12" cy="12" r="3" stroke="#868686"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </div>
				<x-secondary-button type="submit">{{ __('cabinet/password.btn') }}</x-secondary-button>
            </form>
        </div>
    </div>
</div>
