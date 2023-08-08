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
							{{-- <div class="reg__one">
								<div class="reg__name">ФИО</div>
								<div class="reg__field">
									<input type="text" wire:model.debounce.500ms="name">
								</div>
							</div>
							<div class="reg__one">
								<div class="reg__name">Email</div>
								<div class="reg__field">
									<input type="email" wire:model.debounce.500ms="email">
								</div>
							</div>
							<div class="reg__one">
								<div class="reg__name">Телеграм</div>
								<div class="reg__field">
									<input type="text" required wire:model.debounce.500ms="telegram" placeholder="@user">
								</div>
							</div>
							<div class="reg__one">
								<div class="reg__name">Тип трафика</div>
								<div class="reg__field">
									<input type="text" wire:model.debounce.500ms="type_traffic"
										placeholder="https://vk.com/unitedmarketorg">
								</div>
							</div>
							<div class="reg__one">
								<div class="reg__name">Желаемая ссылка для реферальной программы</div>
								<div class="reg__field">
									<input type="text" wire:model.debounce.500ms="want_link">
								</div>
							</div> --}}
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
				@endempty
			</div>
		</template>

        <div class="mt-5 ref__list">
            <div class="ref__item">
                <div class="ref__name" @pointerdown="allowed = !allowed">Разрешенный тип трафика</div>
                <div class="ref__hide" x-show="allowed" x-cloak x-transition>
                    <div class="ref__text">Контекстная реклама: Разрешено, через сайты прокладки </div>
                    <div class="ref__text">Баннерная реклама: Разрешено с использованием направленных
                        заказчиком рекламных материалов</div>
                    <div class="ref__text">RichMedia</div>
                    <div class="ref__text">Социальные cети: Разрешено, без ссылок на официальные группы
                        заказчиков</div>
                    <div class="ref__text">Teasers (Content): Разрешено с использованием направленных
                        заказчиком рекламных материалов</div>
                    <div class="ref__text">Clickunder/Popunder</div>
                    <div class="ref__text">Дорвеи</div>
                    <div class="ref__text">Контентные сайты</div>
                </div>
            </div>
            <div class="ref__item">
                <div class="ref__name" @pointerdown="disallowed = !disallowed">Запрещенный тип трафика</div>
                <div class="ref__hide" x-show="disallowed" x-cloak x-transition>
                    <div class="ref__text">Контекст на бренд</div>
                    <div class="ref__text">Cashback</div>
                    <div class="ref__text">Price – Comparison</div>
                    <div class="ref__text">Купоны/Промокоды</div>
                    <div class="ref__text">Adult – трафик</div>
                    <div class="ref__text">Toolbar</div>
                    <div class="ref__text">Email – спам рассылка</div>
                </div>
            </div>
            <div class="ref__item">
                <div class="ref__name" @pointerdown="maybe = !maybe">Типы трафика по согласованию</div>
                <div class="ref__hide" x-show="maybe" x-cloak x-transition>
                    <div class="ref__text">Мотивированный трафик</div>
                    <div class="ref__text">SMS</div>
                    <div class="ref__text">Баннеры</div>
                    <div class="ref__text">Email рассылка</div>
                    <div class="ref__text">Email</div>
                    <div class="ref__text">Брокерский трафик</div>
                    <div class="ref__text">Дорвеи</div>
                    <div class="ref__text">Pop – UP</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('referral', () => ({
			formIsSent: false,
			copyShow: false,
			allowed: false,
			disallowed: false,
			maybe: false,
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
