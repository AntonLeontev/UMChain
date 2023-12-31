<div data-page="profile" x-show="page === 'personal'" x-cloak>
    <div class="main__settings">
        <form method="PUT" action="{{ route('users.update') }}" class="flex flex-col items-center" x-data="
			{
				form: $form('put', route('users.update'), {
					name: user.name,
					email: user.email,
					tron: user.tron_wallet?.address,
					eth: user.eth_wallet?.address,
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
		>
            <div class="mb-8 main__data">
                <div class="reg__one">
                    <div class="reg__name">{{ __('cabinet/personal.name') }}</div>
                    <div class="reg__field">
                        <input 
							type="text" 
							name="name" 
							class="focus:border-b-pink focus:ring-0"
							x-model="form.name"
							@change="form.validate('name')"
						>
						<template x-if="form.invalid('name')">
							<div class="text-danger" x-text="form.errors.name"></div>
						</template>
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ __('cabinet/personal.email') }}</div>
                    <div class="reg__field">
                        <input 
							type="email" 
							name="email" 
							class="focus:border-b-pink focus:ring-0"
							x-model="form.email"
							@input="form.validate('email')"
						>
						<template x-if="form.invalid('email')">
							<div class="text-danger" x-text="form.errors.email"></div>
						</template>
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ __('cabinet/personal.tron') }}</div>
                    <div class="reg__field">
                        <input 
							type="text" 
							name="tron" 
							class="focus:border-b-pink !text-xs focus:ring-0"
                            x-model="form.tron"
							@change="form.validate('tron')"
						>
						<template x-if="form.invalid('tron')">
							<div class="text-danger" x-text="form.errors.tron"></div>
						</template>
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{ __('cabinet/personal.eth') }}</div>
                    <div class="reg__field">
                        <input 
							type="text" 
							name="eth" 
							class="focus:border-b-pink !text-xs focus:ring-0"
                            x-model="form.eth"
							@change="form.validate('eth')"
						>
						<template x-if="form.invalid('eth')">
							<div class="text-danger" x-text="form.errors.eth"></div>
						</template>
                    </div>
                </div>
                {{-- <div class="reg__one">
                                        <div class="reg__name">Номер телефона</div>
                                        <div class="reg__tel">
                                            <div class="tel__wrapper">
                                                <div class="tel__left">
                                                    <input type="text" placeholder="+7" value="+7 " readonly
                                                        >
                                                    <div class="tel__arrow">
                                                        <img src="https://ico.umchain.org/images/bottomArrow.svg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="tel__right">
                                                    <input type="tel" 
                                                        >
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
            </div>

            <x-secondary-button 
				type="submit"
			>
				{{ __('cabinet/personal.btn') }}
			</x-secondary-button>
        </form>
    </div>
</div>
