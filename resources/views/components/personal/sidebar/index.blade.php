<div 
	{{ $attributes->class(['main__left'])->merge() }}
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
                    @click="$dispatch('page', 'referral')">{{ __('cabinet/sidebar.referral') }}
				</li>

				@if (auth()->user()->activeRefLink)
					<li class="tracking-widest" :class="{ 'active': page === 'banners' }"
						@click="$dispatch('page', 'banners')"
						>
						{{ __('cabinet/sidebar.banners') }}
					</li>
				@endif

                <li 
					class="relative tracking-widest" 
					:class="{ 'active': page === 'notifications' }"
                    @click="$dispatch('page', 'notifications')"
				>
					<div class="relative">
						{{ __('cabinet/sidebar.notifications') }}
						<div 
							class="absolute top-[50%] translate-y-[-50%] right-8 rounded bg-pink px-1 !text-white text-sm" 
							x-show="user.unread_notifications_count > 0"
							x-text="user.unread_notifications_count"
						></div>
					</div>
				</li>

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
						wallet: '',
						network: '',

						submit() {
							axios
								.put(route('orders.make-paid', this.order.id), {})
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
							navigator.clipboard.writeText(this.order?.wallet)
								.then(() => {
									this.copyShow = true;
									setTimeout(() => this.copyShow = false, 600)
								})
						},
					}"
					@submit.prevent="submit"
				>
					<div class="append__success" x-show="copyShow" x-cloak x-transition.opacity>{{ __('cabinet/wallet.copied') }}</div>
                    <div class="justify-between mb-3 append__table">
                        <div class="append__item">
                            <div class="append__top">{{ __('cabinet/wallet.sum') }}</div>
                            <div class="append__num"><span x-text="order?.usdt"></span> USDT</div>
                        </div>
                        <div class="append__item">
                            <div class="append__top">{{ __('cabinet/wallet.quantity') }}</div>
                            <div class="append__num"><span x-text="order?.umt"></span> UMCT</div>
                        </div>
                    </div>

					<div class="p-5 mb-10 text-white border rounded border-pink">
						<div class="mb-5 text-xl text-center">{{ __('cabinet/wallet.transfer') }}</div> 
						<div>
							{{ __('cabinet/wallet.notice') }}
						</div>
						
						<div class="append__input reg__one">
							<div class="reg__name">{{ __('cabinet/wallet.network') }}</div>
							<div class="relative w-full append__flex gap-x-2">
								<div class="reg__field append__coppied">
									<input 
										type="text" 
										readonly 
										class="focus:border-b-pink !text-sm focus:ring-0 text-center"
										:value="order?.network"
									>
								</div>
							</div>
						</div>
						<div class="append__input reg__one">
							<div class="reg__name">{{ __('cabinet/wallet.5') }}</div>
							<div class="relative w-full append__flex gap-x-2">
								<div class="reg__field append__coppied">
									<input 
										type="text" 
										readonly 
										class="focus:border-b-pink !text-sm focus:ring-0 text-center"
										:value="order?.wallet"
									>
								</div>
								<div class="text-white transition cursor-pointer md:hover:text-pink" @pointerdown="copy">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
										<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
									</svg>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="append__time">
                        <div class="append__buttons">
							<x-primary-button class="w-full md:w-auto" type="submit">{{ __('cabinet/wallet.9') }}</x-primary-button>
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
                        return "{{ __('cabinet/sidebar.wallet') }}";
                        break;
                    case "personal":
                        return "{{ __('cabinet/sidebar.personal') }}";
                        break;
                    case "referral":
                        return "{{ __('cabinet/sidebar.referral') }}";
                        break;
                    case "banners":
                        return "{{ __('cabinet/sidebar.banners') }}";
                        break;
                    case "portfolio":
                        return "{{ __('cabinet/sidebar.portfolio') }}";
                        break;
                    case "password":
                        return "{{ __('cabinet/sidebar.password') }}";
                        break;
                    case "notifications":
                        return "{{ __('cabinet/sidebar.notifications') }}";
                        break;
                    case "logout":
                        return "{{ __('cabinet/sidebar.logout') }}";
                        break;
                    case "withdraw":
                        return "{{ __('cabinet/sidebar.withdraw') }}";
                        break;

                    default:
						return "Cabinet";
                        break;
                }
            },

        }))
    })
</script>
