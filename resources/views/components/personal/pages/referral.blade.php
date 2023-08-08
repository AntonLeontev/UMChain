@props([
	'feeUmt',
	'feeUsdt',
	'purchaseNumber',
])

<div data-page="referral" x-show="page === 'referral'" x-cloak>
    <div class="main__ref" x-data='referral'>

		<template x-if="user.ref_link_count === 0">
			<div>
				<div x-show="! formIsSent">
					<div class="ref__title">Партнерская программа UMChain. Возможность зарабатывать от 10% выплат
						от всех приведенных к нам партнеров.</div>
					<div class="ref__description">Заполни анкету, получи реферальную ссылку, зарабатывай вместе с
						нами.</div>
					<form class="ref__form" @submit.prevent="submit">
						<div class="main__data">
							<x-secondary-button type="submit">{{ __('cabinet/referral.send') }}</x-secondary-button>
						</div>
					</form>
				</div>
	
				<div x-show="formIsSent">
					Заявка принята! Ожидайте одобрения
				</div>
			</div>
		</template>

		<template x-if="user.ref_link_count > 0">
			<div>
				@empty (auth()->user()->activeRefLink)
					<div x-show="user.active_ref_link === null">
						Заявка в работе! Ожидайте одобрения
					</div>
				@else
					<div class="mb-20" x-show="user.active_ref_link">
						<div class="font-bold">{{ __('cabinet/referral.percent') }}:</div>
						<div class="flex mt-2 mb-5 gap-x-2 justify-evenly">
							<div>
								<div class="text-sm">UMCT</div>
								<div class="text-center" x-text="user.active_ref_link.umt_percent + '%'"></div>
							</div>
							<div>
								<div class="text-sm">USDT</div>
								<div class="text-center" x-text="user.active_ref_link.usdt_percent + '%'"></div>
							</div>
						</div>
						<div class="mb-1 font-bold">{{ __('cabinet/referral.link') }}:</div>
						<div 
							class="relative px-2 py-3 mb-8 text-center border rounded border-pink"
							@pointerdown="copy"
						>
							<span x-text="'{{ config('app.url') }}?ref=' + user.active_ref_link.id"></span>
							<div class="absolute top-0 bottom-0 left-0 flex items-center p-2 text-white rounded bg-grey" x-show="copyShow" x-transition>
								{{ __('cabinet/referral.copied') }}
							</div>
						</div>
						<x-primary-button class="w-full" @click="$dispatch('page', 'banners')">See banners</x-primary-button>
					</div>

					<div>
						<div class="mb-5 text-xl font-bold">{{ __('cabinet/referral.metrics') }}</div>

						<div class="flex justify-between py-1 mb-2 border-b border-grey">
							<div>{{ __('cabinet/referral.clicks') }}</div>
							<div>{{ auth()->user()->activeRefLink->loadCount('clicks')->clicks_count }}</div>
						</div>
						
						<div class="flex justify-between py-1 mb-2 border-b border-grey">
							<div>{{ __('cabinet/referral.register') }}</div>
							<div>{{ auth()->user()->loadCount('referrals')->referrals_count }}</div>
						</div>
						
						<div class="flex justify-between py-1 mb-2 border-b border-grey">
							<div>{{ __('cabinet/referral.purchaces') }}</div>
							<div>{{ $purchaseNumber }}</div>
						</div>

						<div class="flex items-center justify-between py-1 mb-2 border-b border-grey">
							<div>{{ __('cabinet/referral.fee') }}</div>
							<div>
								<div>
									{{ $feeUmt / 100000000 }} UMCT 
								</div>
								<div class="text-right">
									{{ $feeUsdt / 100000000 }} USDT
								</div>
							</div>
						</div>
					</div>
				@endempty
			</div>
		</template>

    </div>
</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('referral', () => ({
			formIsSent: false,
			copyShow: false,
			submit() {
				axios
					.post(route('reflinks.create'))
					.then(response => this.formIsSent = true)
			},
			copy() {
				navigator.clipboard.writeText('{{ config('app.url') }}?ref=' + this.user.active_ref_link.id)
					.then(() => {
						this.copyShow = true;
						setTimeout(() => this.copyShow = false, 600)
					})
			},
		}))
	})
</script>
