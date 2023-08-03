<div class="main__left" x-data="sidebar" x-init="$watch('page', value => title = getTitle(value))">
    <h2 class="main__title" x-text="title"></h2>
    <div class="main__wrapper">
        <div class="main__top" x-on:switch="menu = $event.detail.value">
            <x-personal.sidebar.switch.index />
        </div>

        <div class="main__menu" x-show="menu === 'profile'" x-transition>
            <ul class="flex flex-col items-center main__menu--list">
                <li class="tracking-widest" @click="$dispatch('page', 'personal')" :class="{'active': page === 'personal'}">
					{{ __('cabinet/sidebar.personal') }}
				</li>
                <li class="tracking-widest" @click="$dispatch('page', 'portfolio')" :class="{'active': page === 'portfolio'}">{{ __('cabinet/sidebar.portfolio') }}</li>

                <li class="tracking-widest" @click="$dispatch('page', 'password')" :class="{'active': page === 'password'}">
					{{ __('cabinet/sidebar.password') }}
				</li>
                <li class="tracking-widest" @click="$dispatch('page', 'referral')" :class="{'active': page === 'referral'}">{{ __('cabinet/sidebar.referral') }}</li>

                <li class="tracking-widest" @click="$dispatch('page', 'notifications')" :class="{'active': page === 'notifications'}">{{ __('cabinet/sidebar.notifications') }}</li>
                <li class="tracking-widest" @click="$dispatch('page', 'logout')" :class="{'active': page === 'logout'}">{{ __('cabinet/sidebar.logout') }}</li>

            </ul>
        </div>

        <div class="main__rate" x-show="menu === 'wallet'" x-transition x-cloak>
            <form>
                <div class="rate__title rate__title--change">You can buy UMT Tokens</div>
                <div class="rate__description">
                    *
                </div>
                <div class="rate__checkbox">
                    <input id="happy1" type="checkbox" class="custom-checkbox checkboxOne" name="not_investor"
                        wire:model="not_investor" wire:click="total">
                    <label for="happy1">
                        <p>Купить UMT Токены</p>
                    </label>
                </div>
                <div class="rate__one rate__one--left">
                    <div class="rate__change">
                        <div class="rate__name">USDT</div>
                        <div class="rate__field rate__field--one">
                            <input type="text" wire:model="USDT" wire:change="change"
                                wire:keyup="calculateUMTOnly($event.target.value)"
                                onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')">
                        </div>
                    </div>
                    <div class="rate__btn rate__btn--one">
                        <img src="https://ico.umchain.org/images/change.svg" alt="">
                    </div>
                    <div class="rate__change">
                        <div class="rate__name">UMT</div>
                        <div class="rate__field rate__field--two">
                            <input type="text" wire:model="UMT" wire:change="change"
                                wire:keyup="calculateUSDTOnly($event.target.value)"
                                onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')">
                        </div>
                    </div>
                </div>
                
                <div class="rate__one rate__one--no rate__one--long">
                    <div class="rate__line"></div>
                    <div class="rate__boxing">
                        <div class="rate__total">Итого</div>
                        <div class="rate__num"><span class="rate__counter">0</span> <span
                                class="rate__childblock">USDT</span>
                        </div>
                    </div>
                </div>
                <div class="rate__button"><a href="#" wire:click.prevent="сheckAndPay">Пополнить</a></div>
                <div class="rate__subtext">Если у вас нет криптовалюты, можете воспользоваться любым<a
                        href="https://www.bestchange.ru">&nbsp;криптообменником.</a>
                    Или воспользоваться нашей<a href="https://umchain.org">&nbsp;рекомендацией.</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('sidebar', () => ({
            menu: 'profile',
			title: 'Profile data',
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
