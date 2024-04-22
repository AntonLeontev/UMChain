@extends('layouts.app')

@section('title', 'Cabinet')

@section('content')
	<script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cabinet', () => ({
                page: window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1),
				prevPage: null,
				user: @json(auth()->user()->loadCount('refLink')->load('activeRefLink')->loadCount('unreadNotifications')),
				settings: @json(settings()),
				order: null,
				menu: false,

                handleSwitch() {
                    const menu = this.$event.detail.value;

                    if (menu === 'wallet') {
						if (this.page !== 'logout') {
							this.prevPage = this.page;
						}
						
                        this.page = 'wallet';
						
						this.pushState('wallet');
                        return;
                    }

                    if (this.page === 'wallet') {
                        this.page = this.prevPage ?? 'personal';
						this.pushState(this.prevPage ?? 'personal');
                        return;
                    }
                },
                handlePage() {
					this.prevPage = this.page;
					this.page = this.$event.detail;

					if (this.$event.detail === 'logout') return;
					if (this.$event.detail === 'withdraw') return;

					this.pushState(this.$event.detail);
                },
				pushState(path) {
					let url = window.location.href.replace(/\/(?!.*\/).+/gm, '');
					
					window.history.pushState({}, '', `${url}/` + path);
				},
				formatRate(rate) {
					return new Intl.NumberFormat('{{ app()->getLocale() }}', { minimumFractionDigits: 8 }).format(rate);
				},
				formatDate(date) {
					date = new Date(date)
					const options = {};
					return date.toLocaleDateString('{{ app()->getLocale() }}', options);
				},
				dateDiff(date1, date2) {
					let diff = new Date(date1.getTime() - date2.getTime());

					return {
						past: diff.getTime() < 0,
						day: Math.floor(diff.getTime() / (1000 * 3600 * 24)),
						hour: diff.getUTCHours(),
						minute: diff.getUTCMinutes(),
					}
				},

            }))
        })
    </script>

    <section class="main" x-data="cabinet">
        <div class="container container--full">
            <div class="main__inner" 
				x-on:switch.window="handleSwitch" 
				x-on:page.window="handlePage"
				@order-created.window="order = $event.detail"
				@order-canceled.window="order = null"
				@order-confirmed.window="order = null"
				@exchange.window="user.usdt = $event.detail.usdt; user.umt = $event.detail.umt"
				@withdraw.window="user.usdt = $event.detail.usdt"
				@menu-click.window="menu = !menu"
				@buy-click.window="menu = true"
			>
                <x-personal.sidebar.index />


                <div class="main__right main__right--right">

                    <x-personal.pages.wallet />
					
                    <x-personal.pages.profile />
                    <x-personal.pages.portfolio />
                    <x-personal.pages.password />
                    <x-personal.pages.referral :$feeUmt :$feeUsdt :$purchaseNumber />
					@if (auth()->user()->activeRefLink)
                    	<x-personal.pages.banners />
					@endif
					<x-personal.pages.withdraw />
					<x-personal.pages.notifications />

					<x-personal.pages.fitProfile :$transactions />
					<x-personal.pages.fitCalculator />

                    <div data-page="logout" x-show="page === 'logout'" x-cloak>
                        <div class="main__out">
                            <div class="out__box">
                                <div class="out__title">{{ __('cabinet/logout.sure') }}</div>
                                <div class="out__buttons !justify-around">
                                    <div class="out__no">
                                        <x-btn-transparent class="!text-black" x-on:click="page = prevPage">
											{{ __('cabinet/logout.cancel') }}
										</x-btn-transparent>
                                    </div>
                                    <div class="out__yes w-min">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="flex justify-center">
                                            @csrf
											<x-secondary-button type="submit">{{ __('Logout') }}</x-secondary-button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<div id="mobile-menu" class="absolute md:hidden top-0 w-full h-full pt-[100px] pb-[100px] bg-black overflow-y-auto z-50" x-show="menu" x-cloak>
				<x-personal.sidebar class="block" />
			</div>
    </section>

	<x-common.toast-panel />

	

    
@endsection
