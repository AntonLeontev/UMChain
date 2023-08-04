<div class="main__left" 
	x-data="sidebar" 
	x-init="$watch('page', value => title = getTitle(value))"
	@order-created="menu = 'order'"
	@order-canceled="menu = 'wallet'"
	@order-confirmed="menu = 'wallet'"
>
    <h2 class="main__title" x-text="title"></h2>
    <div class="main__wrapper">
        <div class="main__top" x-on:switch.window="switchMenu">
            <x-personal.sidebar.switch.index />
        </div>

        <div class="main__menu" x-show="menu === 'profile'" x-transition>
            <ul class="flex flex-col items-center main__menu--list">
                <li class="tracking-widest" :class="{ 'active': page === 'personal' }"
                    @click="$dispatch('page', 'personal')">
                    {{ __('cabinet/sidebar.personal') }}
                </li>
                <li class="tracking-widest" :class="{ 'active': page === 'portfolio' }"
                    @click="$dispatch('page', 'portfolio')">{{ __('cabinet/sidebar.portfolio') }}</li>

                <li class="tracking-widest" :class="{ 'active': page === 'password' }"
                    @click="$dispatch('page', 'password')">
                    {{ __('cabinet/sidebar.password') }}
                </li>
                <li class="tracking-widest" :class="{ 'active': page === 'referral' }"
                    @click="$dispatch('page', 'referral')">{{ __('cabinet/sidebar.referral') }}</li>

                <li class="tracking-widest" :class="{ 'active': page === 'notifications' }"
                    @click="$dispatch('page', 'notifications')">{{ __('cabinet/sidebar.notifications') }}</li>
                <li class="tracking-widest" :class="{ 'active': page === 'logout' }" @click="$dispatch('page', 'logout')">
                    {{ __('cabinet/sidebar.logout') }}</li>

            </ul>
        </div>

        <div 
			class="main__rate" 
			x-show="menu === 'wallet'" 
			x-transition 
			x-cloak
		>
            <x-personal.sidebar.wallet-form />
        </div>

        <div class="main__replenish" x-show="menu === 'order'" x-transition x-cloak>
            <div class="append__wrapper">
                
                <form x-data="{
						copyShow: false,

						submit() {
							const data = new FormData(this.$event.target);
							console.log(data)
							axios
								.put('/orders/' + this.order.id + '/make-paid', {email: data.get('email')})
								.then(response => {
									this.$dispatch('toast', { text: 'Thanks for order' });
									this.$dispatch('order-confirmed');
								})
								.catch(error => {
									let text = 'Error';

									if (error.response.data.message) {
										text = error.response.data.message
									}

									this.$dispatch('toast', { text: text, type: 'error' });
								});
						},
						copy() {
							navigator.clipboard.writeText(this.settings.wallet)
								.then(() => {
									this.copyShow = true;
									setTimeout(() => this.copyShow = false, 600)
								})
						},
					}"
					@submit.prevent="submit"
				>
					<div class="append__success" x-show="copyShow" x-cloak x-transition.opacity>{{ __('cabinet/wallet.copied') }}</div>
                    <div class="justify-between append__table">
                        <div class="append__item">
                            <div class="append__top">{{ __('cabinet/wallet.sum') }}</div>
                            <div class="append__num"><span x-text="order?.usdt"></span> USDT</div>
                        </div>
                        <div class="append__item">
                            <div class="append__top">{{ __('cabinet/wallet.price') }}</div>
                            <div class="append__num"><span x-text="formatRate(1 / settings.rate)"></span> USDT</div>
                        </div>
                        <div class="append__item">
                            <div class="append__top">{{ __('cabinet/wallet.quantity') }}</div>
                            <div class="append__num"><span x-text="order?.umt"></span> UMT</div>
                        </div>
                    </div>
                    <div class="append__input reg__one">
                        <div class="reg__name">{{ __('cabinet/wallet.5') }}</div>
                        <div class="relative append__flex">
                            <div class="reg__field append__coppied">
                                <input 
									type="text" 
									readonly 
									class="focus:border-b-pink !text-sm focus:ring-0"
									:value="settings.wallet"
								>
                            </div>
                            <div class="absolute right-[25px]" @pointerdown="copy">
                                <img width="35px" src="/images/copy.svg" alt="copy">
                            </div>
                        </div>
                    </div>
                    <div class="append__input reg__one">
                        <div class="reg__name">{{ __('cabinet/wallet.6') }}</div>
                        <div class="reg__field">
                            <input 
								type="text" 
								type="email" 
								name="email"
								class="focus:border-b-pink focus:ring-0"
								:value="user.email"
							>
                        </div>
                    </div>
                    <div class="append__time">
                        <div class="append__last">{{ __('cabinet/wallet.7') }}
                            <div id="test" class="append__period">
                                <div class="append__hours">00</div>
                                <div class="append__point">:</div>
                                <div class="append__minutes">20</div>
                                <div class="append__point">:</div>
                                <div class="append__seconds">00</div>
                            </div>
                        </div>
                        <div class="append__subtitle">
							{{ __('cabinet/wallet.8') }}
                        </div>
                        <div class="append__buttons">

							<x-primary-button type="submit">{{ __('cabinet/wallet.9') }}</x-primary-button>
                            <div class="append__no" @click="$dispatch('order-canceled')">
								<x-btn-transparent>{{ __('cabinet/wallet.10') }}</x-btn-transparent>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('sidebar', () => ({
            menu: window.location.pathname.substring(window.location.pathname.lastIndexOf('/') +
                1) == 'wallet' ? 'wallet' : 'profile',
            title: 'Profile data',
			
			switchMenu() {
				if (this.$event.detail.value === 'wallet' && this.order) {
					this.menu = 'order';
					return;
				}
				
				this.menu = this.$event.detail.value;
			},
            getTitle() {
                switch (this.page) {
                    case 'wallet':
                        return 'Wallet';
                        break;
                    case 'personal':
                        return 'Profile data';
                        break;
                    case 'referral':
                        return 'Referral';
                        break;
                    case 'portfolio':
                        return 'Portfolio';
                        break;
                    case 'password':
                        return 'Password';
                        break;
                    case 'notifications':
                        return 'Notifications';
                        break;
                    case 'logout':
                        return 'Logout';
                        break;

                    default:
                        break;
                }
            },

        }))
    })
</script>
