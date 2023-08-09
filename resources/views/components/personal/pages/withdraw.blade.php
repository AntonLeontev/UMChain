<div x-show="page === 'withdraw'" x-cloak>
	<form class="flex flex-col items-center p-10 bg-black rounded" x-data="{
    form: $form('post', route('withdraw.exchange'), {
        usdt: '',
        umt: '',
    }),
    submit() {
        this.form.submit()
            .then(response => {
                this.$dispatch('exchange', response.data);
                this.$dispatch('page', 'portfolio');
                this.$dispatch('toast', {text: 'Success'});
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
    <div class="text-center rate__title rate__title--change">{{ __('cabinet/withdraw.exchange') }}</div>
    <div class="text-lg text-white">
		{{ __('cabinet/withdraw.balance') }} <span x-text="user.usdt"></span> USDT
    </div>
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


    <div class="rate__button">
        <x-primary-button>{{ __('cabinet/withdraw.btn-ex') }}</x-primary-button>
    </div>
</form>

<form class="flex flex-col items-center p-10 bg-black rounded" x-data="{
    form: $form('post', route('withdraw.create'), {
        usdt: '',
		network: 'TRC20',
		tron_wallet: user.tron_wallet?.address,
		eth_wallet: user.eth_wallet?.address,
    }),
    submit() {
        this.form.submit()
            .then(response => {
                this.$dispatch('withdraw', response.data);
                this.$dispatch('page', 'portfolio');
                this.$dispatch('toast', {text: 'Success'});
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
    },

}" @submit.prevent="submit">
    <div class="text-center rate__title rate__title--change">{{ __('cabinet/withdraw.withdraw') }}</div>
    <div class="mb-8 text-lg text-white">
		{{ __('cabinet/withdraw.balance') }} <span x-text="user.usdt"></span> USDT
    </div>

	<div class="flex flex-col w-full mb-2 gap-y-5">
		<div class="w-full rate__change">
			<div class="rate__name" :class="form.invalid('usdt') && 'text-danger'">USDT</div>
			<div class="max-w-full rate__field rate__field--one">
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

		<template x-if="form.invalid('usdt')">
			<div class="mt-3">
				<div class="text-danger" x-text="form.errors.usdt"></div>
			</div>
		</template>
	
		<div class="flex flex-col items-center w-full">
			<div class="!text-left w-full reg__name">{{ __('cabinet/wallet.choose') }}</div>
			<select 
				name="network" 
				class="w-full text-white bg-black rounded focus:outline-none focus:ring-0 focus:border-pink"
				x-model="form.network"
			>
				<option value="TRC20">TRON (TRC20)</option>
				<option value="ERC20">Ethereum (ERC20)</option>
			</select>
		</div>

		<div class="w-full rate__change" x-show="form.network === 'TRC20'">
			<div class="rate__name" :class="form.invalid('tron_wallet') && 'text-danger'">{{ __('cabinet/withdraw.tron_wallet') }}</div>
			<div class="max-w-full rate__field rate__field--one">
				<input 
					type="text" 
					name='tron_wallet' 
					class="focus:border-b-pink !text-sm focus:ring-0"
					x-model="form.tron_wallet" 
					autocomplete="off"
					@change="form.validate('tron_wallet')"
				>
			</div>
		</div>

		<div class="w-full rate__change" x-show="form.network === 'ERC20'">
			<div class="rate__name" :class="form.invalid('eth_wallet') && 'text-danger'">{{ __('cabinet/withdraw.eth_wallet') }}</div>
			<div class="max-w-full rate__field rate__field--one">
				<input 
					type="text" 
					name='eth_wallet' 
					class="focus:border-b-pink !text-sm focus:ring-0"
					x-model="form.eth_wallet" 
					autocomplete="off"
					@change="form.validate('eth_wallet')"
				>
			</div>
		</div>

		<div class="mt-3">
			<template x-if="form.invalid('tron_wallet')">
				<div class="text-danger" x-text="form.errors.tron_wallet"></div>
			</template>
			<template x-if="form.invalid('eth_wallet')">
				<div class="text-danger" x-text="form.errors.eth_wallet"></div>
			</template>
		</div>
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


    <div class="rate__button">
        <x-primary-button>{{ __('cabinet/withdraw.btn') }}</x-primary-button>
    </div>
</form>
</div>
