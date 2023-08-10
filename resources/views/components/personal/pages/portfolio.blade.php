<div data-page="portfolio" x-show="page === 'portfolio'" x-cloak>
    <div class="main__portfolio">
        <div class="main__balance">
            <div class="balance__text">{{ __('cabinet/portfolio.balance') }}</div>
            <div class="balance__count">
                <div class="balance__umt">UMCT</div>
                <div class="balance__num" x-text="user.umt"></div>
            </div>
			@if (auth()->user()->acceptedOrders->isNotEmpty())
				<div x-data="{diff: dateDiff(new Date(settings.default_freeze), new Date())}">
					<div class="balance__text" x-show="! diff.past">
						{{ __('cabinet/portfolio.freeze') }}
						<div class="balance__times" style="">
							<div class="balance__time balance__days">
								<div class="balance__date" x-text="diff.day">144</div>
								{{ __('cabinet/portfolio.days') }}
							</div>
							<div class="balance__time balance__hours">
								<div class="balance__date" x-text="diff.hour">23</div>
								{{ __('cabinet/portfolio.hours') }}
							</div>
							<div class="balance__time balance__minutes">
								<div class="balance__date" x-text="diff.minute">17</div>
								{{ __('cabinet/portfolio.minutes') }}
							</div>
						</div>
					</div>
				</div>
			@endif
        </div>
        <div class="relative main__token" x-data="{show: false}">
            <div class="token__major">
                <div class="token__logo">
                    <img src="/images/token.png" alt="">
                </div>
                <div class="token__info">
                    <div class="token__name">UMCT Token</div>
                    <div class="token__count"><span x-text="formatRate(1 / settings.rate)"></span> USDT</div>
                </div>
            </div>
            <div class="token__num">
                <div class="token__rate">USDT <span x-text="user.usdt"></span></div>
            </div>
			<div></div>
			<button 
				class="absolute p-1 text-xs text-white bg-black rounded top-1 right-1"
				@click="show = true"
				@click.outside="show = false"
			>
				{{ __('cabinet/portfolio.withdraw') }}
			</button>
			<div class="absolute right-0 flex p-1 bg-white border rounded -top-12 gap-x-2 border-pink" x-show="show" x-cloak x-transition>
				<button 
					class="p-1 text-white bg-black rounded" 
					@click="$dispatch('page', 'withdraw'); $dispatch('withdraw-page', 'umct')"
				>{{ __('cabinet/portfolio.exchange') }}</button>
				<button 
					class="p-1 text-white bg-black rounded"
					@click="$dispatch('page', 'withdraw'); $dispatch('withdraw-page', 'out')"
				>{{ __('cabinet/portfolio.out') }}</button>
			</div>
        </div>
        <div class="main__dop" @click="$dispatch('switch', {value: 'wallet'})">
			<x-secondary-button class="w-full">{{ __('cabinet/portfolio.btn') }}</x-secondary-button>
        </div>
    </div>
</div>
