<div data-page="portfolio" x-show="page === 'portfolio'" x-cloak>
    <div class="main__portfolio">
        <div class="main__balance">
            <div class="balance__text">{{ __('cabinet/portfolio.balance') }}</div>
            <div class="balance__count">
                <div class="balance__umt">UMT</div>
                <div class="balance__num" x-text="user.umt"></div>
            </div>
			@if (auth()->user()->acceptedOrders->isNotEmpty())
				<div x-data="{diff: dateDiff(new Date(user.accepted_orders?.find(el => el.freeze_to !== null).freeze_to), new Date())}">
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
        <div class="main__token">
            <div class="token__major">
                <div class="token__logo">
                    <img src="/images/token.png" alt="">
                </div>
                <div class="token__info">
                    <div class="token__name">UMT Token</div>
                    <div class="token__count"><span x-text="formatRate(1 / settings.rate)"></span> USDT</div>
                </div>
            </div>
            <div class="token__num">
                <div class="token__rate">USDT <span x-text="user.usdt"></span></div>
                {{-- <div class="token__percent" style="visibility: hidden">+3,25 %</div> --}}
            </div>
            <div class="token__out out__inactive">


            </div>
        </div>
        {{-- <div class="main__dividends" style="">
            <div class="dividends__all">
                <div class="dividends__main">
                    <div class="dividends__name">
                        <span>Дивиденды</span>
                        <div class="dividends__arrow">
                            <img src="https://ico.umchain.org/images/blackArrow.svg" alt="">
                        </div>
                    </div>

                </div>
                <div class="dividends__rate" style="">
                    <div class="dividends__rub">₽ 1 055,15</div>
                    <div class="dividends__percent">+3,25 %</div>
                </div>
                <div class="dividends__out out__active">
                    <a href="https://ico.umchain.org/ru/cabinet/profile/portfolio/out"></a>
                </div>
            </div>
            <div class="dividends__graf">
                <img src="https://ico.umchain.org/images/graf.png" alt="">
            </div>
        </div> --}}
        <div class="main__dop" @click="$dispatch('switch', {value: 'wallet'})">
			<x-secondary-button class="w-full">{{ __('cabinet/portfolio.btn') }}</x-secondary-button>
        </div>
    </div>
</div>
