<div data-page="wallet" x-show="page === 'wallet'" x-cloak>
	<div class="main__portfolio">
		<div class="main__dop main__dop--wallet">
			<a href="#" onclick="document.getElementById('main__btn').click()">Купить UMT Токены</a>
		</div>

		<div class="main__balance">
			{{-- <div class="balance__out balance__out--inactive" style="visibility: hidden">
				<a href="#">Вывести UMT Token</a>
			</div> --}}
			<div class="balance__text">{{ __('cabinet/wallet.balance') }}</div>
			<div class="balance__count">
				<div class="balance__umt">UMT</div>
				<div class="balance__num" x-text="user.umt"></div>
			</div>
			<div class="justify-center balance__flex">
				{{-- <div class="balance__unit">
					<div class="balance__top">Модулей</div>
					<div class="balance__figure">0</div>
				</div> --}}
				<div class="balance__unit">
					<div class="balance__top">{{ __('cabinet/wallet.rate') }}</div>
					<div class="balance__figure"><span x-text="formatRate(1 / settings.rate)"></span> USDT</div>
				</div>
			</div>
		</div>

		<div class="wallet__wrapper">
			<template x-for="order in user.accepted_orders">
				<div class="wallet__one">
					<div class="wallet__info">
						<div class="wallet__date" x-text="formatDate(order.created_at)"></div>
						<div class="wallet__name">{{ __('cabinet/wallet.adding') }}</div>
						{{-- <div class="wallet__description">123</div> --}}
					</div>
					<div class="flex self-end">
						<div class="self-center mr-1 wallet__plus">
							<img src="/images/greenPlus.svg" alt="">
						</div>
						<div class="wallet__num whitespace-nowrap"><span x-text="order.umt"></span> UMT</div>
					</div>
				</div>
			</template>
		</div>
	</div>
	<div data-page="wallet">

	</div>
</div>
