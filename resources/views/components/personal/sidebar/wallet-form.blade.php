<form class="flex flex-col items-center" x-data="{
    form: $form('post', route('orders.create'), {
        usdt: '',
        umt: '',
        network: 'TRC20',
    }),
    submit() {
        this.form.submit()
            .then(response => {
                this.$dispatch('order-created', response.data);
            })
            .catch(error => {
                let text = 'Error';

                if (error.response.data.message) {
                    text = error.response.data.message
                }

                this.$dispatch('toast', { text: text, type: 'error' });
            });
    },
    inputUsdt() {
        this.form.usdt = this.$el.value.replace(/[^0-9.]/g, '');
        this.form.umt = this.form.usdt * this.settings.rate;
    },
    inputUmt() {
        this.form.umt = this.$el.value.replace(/[^0-9.]/g, '');
        this.form.usdt = formatRate(this.form.umt / this.settings.rate);
    },
}" @submit.prevent="submit">
    <div class="text-center rate__title rate__title--change">{{ __('cabinet/wallet.buy') }}</div>
    <div class="rate__description">

    </div>
    {{-- <div class="rate__checkbox">
                    <input id="happy1" type="checkbox" class="custom-checkbox checkboxOne" name="not_investor"
                        >
                    <label for="happy1">
                        <p>Купить UMT Токены</p>
                    </label>
                </div> --}}
    <div class="w-full rate__one">
        <div class="rate__change">
            <div class="rate__name" :class="form.invalid('usdt') && 'text-danger'">USDT</div>
            <div class="rate__field rate__field--one">
                <input 
					type="text" 
					name='usdt' 
					class="focus:border-b-pink !text-sm focus:ring-0"
                    x-model="form.usdt" 
					autocomplete="off"
					@input="inputUsdt"
					@change="form.validate('usdt')"
				>
            </div>
        </div>
        <div class="rate__btn rate__btn--one">
            <img src="/images/change.svg" alt="">
        </div>
        <div class="rate__change">
            <div class="rate__name" :class="form.invalid('umt') && 'text-danger'">UMCT</div>
            <div class="rate__field rate__field--two">
                <input 
					type="text" 
					name="umct" 
					class="focus:border-b-pink !text-sm focus:ring-0"
                    x-model="form.umt" 
					@input="inputUmt"
					@change="form.validate('umt')"
				>
            </div>
        </div>
    </div>
	<div class="mt-3">
		<template x-if="form.invalid('usdt')">
			<div class="text-danger" x-text="form.errors.usdt"></div>
		</template>
		<template x-if="form.invalid('umt')">
			<div class="text-danger" x-text="form.errors.umt"></div>
		</template>
	</div>

    <div class="w-full mb-8 rate__one rate__one--no rate__one--long">
        <div class="rate__line"></div>
        <div class="rate__boxing">
            <div class="rate__total">{{ __('cabinet/wallet.total') }}</div>
            <div class="rate__num"><span class="rate__counter" x-text="form.usdt"></span> <span
                    class="rate__childblock">USDT</span>
            </div>
        </div>
    </div>

	<div class="flex flex-col items-center w-full">
		<div class="reg__name">{{ __('cabinet/wallet.choose') }}</div>
		<select 
			name="network" 
			class="text-white bg-black rounded focus:outline-none focus:ring-0 focus:border-pink"
			x-model="form.network"
		>
			<option value="TRC20">USDT (TRC20)</option>
			<option value="ERC20">USDT (ERC20)</option>
		</select>
	</div>

    <div class="rate__button">
        <x-primary-button>{{ __('cabinet/wallet.btn') }}</x-primary-button>
    </div>
    <div class="rate__subtext">{{ __('cabinet/wallet.1') }}
        <a href="https://www.bestchange.ru">{{ __('cabinet/wallet.2') }}.</a>
        {{ __('cabinet/wallet.3') }} <a href="/">{{ __('cabinet/wallet.4') }}.</a>
    </div>
</form>
