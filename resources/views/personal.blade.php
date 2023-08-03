@extends('layouts.app')

@section('title', 'Cabinet')

@section('content')
    <section class="main" x-data="cabinet">
        <div class="container container--full">
            <div class="main__inner" x-on:switch="handleSwitch" x-on:page="handlePage">
                <x-personal.sidebar.index />


                <div class="main__right main__right--right">
                    <div class="main__btn">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <x-personal.pages.profile />

                    <div data-page="wallet" x-show="page === 'wallet'" x-cloak>
                        <div class="main__portfolio">
                            <div class="main__dop main__dop--wallet">
                                <a href="#" onclick="document.getElementById('main__btn').click()">Купить UMT
                                    Токены</a>
                            </div>
                            <div class="main__balance main__balance--wallet">
                                <div class="balance__out balance__out--inactive" style="visibility: hidden">
                                    <a href="#">Вывести UMT Token</a>
                                </div>
                                <div class="balance__text">Ваш баланс</div>
                                <div class="balance__count">
                                    <div class="balance__umt">UMT</div>
                                    <div class="balance__num">0</div>
                                </div>
                                <div class="balance__flex">
                                    <div class="balance__unit">
                                        <div class="balance__top">Модулей</div>
                                        <div class="balance__figure">0</div>
                                    </div>
                                    <div class="balance__unit">
                                        <div class="balance__top">Курс UMT</div>
                                        <div class="balance__figure">$ 0.0128700100</div>
                                    </div>
                                </div>
                            </div>
                            <div class="wallet__wrapper">
                                <div class="wallet__one">
                                    <div class="wallet__plus">
                                        <img src="https://ico.umchain.org/images/greenPlus.svg" alt="">
                                    </div>
                                    <div class="wallet__info">
                                        <div class="wallet__date">20.01.2021</div>
                                        <div class="wallet__name">Пополнение Кошелька</div>
                                        <div class="wallet__description">123</div>
                                    </div>
                                    <div class="wallet__num">3000 UMT</div>
                                </div>
                                <div class="wallet__one">
                                    <div class="wallet__plus">
                                        <img src="https://ico.umchain.org/images/greenPlus.svg" alt="">
                                    </div>
                                    <div class="wallet__info">
                                        <div class="wallet__date">20.01.2021</div>
                                        <div class="wallet__name">Пополнение Кошелька</div>
                                        <div class="wallet__description">123</div>
                                    </div>
                                    <div class="wallet__num">3000 UMT</div>
                                </div>
                                <div class="wallet__one">
                                    <div class="wallet__plus">
                                        <img src="https://ico.umchain.org/images/greenPlus.svg" alt="">
                                    </div>
                                    <div class="wallet__info">
                                        <div class="wallet__date">20.01.2021</div>
                                        <div class="wallet__name">Пополнение Кошелька</div>
                                        <div class="wallet__description">123</div>
                                    </div>
                                    <div class="wallet__num">3000 UMT</div>
                                </div>
                            </div>
                        </div>
                        <div data-page="wallet">

                        </div>
                    </div>

                    <div data-page="portfolio" x-show="page === 'portfolio'" x-cloak>
                        <div class="main__portfolio">
                            <div class="main__balance">
                                <div class="balance__text">Ваш баланс</div>
                                <div class="balance__count">
                                    <div class="balance__umt">UMT</div>
                                    <div class="balance__num">0</div>
                                </div>
                                <div style="visibility: hidden">
                                    <div class="balance__text"до разморозки</div>
                                        <div class="balance__times" style="">
                                            <div class="balance__time balance__days">
                                                <div class="balance__date">144</div>
                                                дня
                                            </div>
                                            <div class="balance__time balance__hours">
                                                <div class="balance__date">23</div>
                                                часа
                                            </div>
                                            <div class="balance__time balance__minutes">
                                                <div class="balance__date">17</div>
                                                минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main__token">
                                <div class="token__major">
                                    <div class="token__logo">
                                        <img src="https://ico.umchain.org/images/token.png" alt="">
                                    </div>
                                    <div class="token__info">
                                        <div class="token__name">UMT Token</div>
                                        <div class="token__count">0.0128700100 UMT</div>
                                    </div>
                                </div>
                                <div class="token__num">
                                    <div class="token__rate">USDT 0</div>
                                    <div class="token__percent" style="visibility: hidden">+3,25 %</div>
                                </div>
                                <div class="token__out out__inactive">


                                </div>
                            </div>
                            <div class="main__dividends" style="visibility: hidden">
                                <div class="dividends__all">
                                    <div class="dividends__main">
                                        <div class="dividends__name">
                                            <span>Дивиденды</span>
                                            <div class="dividends__arrow">
                                                <img src="https://ico.umchain.org/images/blackArrow.svg" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="dividends__rate" style="visibility: hidden">
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
                            </div>
                            <div class="main__dop">
                                <a href="https://ico.umchain.org/ru/cabinet/wallet">Купить UMT Токены</a>
                            </div>
                        </div>
                    </div>

                    <x-personal.pages.password />

                    <div data-page="referral" x-show="page === 'referral'" x-cloak>
                        <div class="main__ref">
                            <div class="ref__title">Партнерская программа UMChain. Возможность зарабатывать от 10% выплат
                                от всех приведенных к нам партнеров.</div>
                            <div class="ref__description">Заполни анкету, получи реферальную ссылку, зарабатывай вместе с
                                нами.</div>
                            <form class="ref__form">
                                <div class="main__data">
                                    <div class="reg__one">
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
                                            <input type="text" required wire:model.debounce.500ms="telegram"
                                                placeholder="@user">
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
                                    </div>
                                    <button class="reg__btn reg__btn--small" wire:click.prevent="sendRequest">
                                        Отправить
                                    </button>
                                </div>
                            </form>
                            <div class="ref__list">
                                <div class="ref__item">
                                    <div class="ref__name">Разрешенный тип трафика</div>
                                    <div class="ref__hide">
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
                                    <div class="ref__name">Запрещенный тип трафика</div>
                                    <div class="ref__hide">
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
                                    <div class="ref__name">Типы трафика по согласованию</div>
                                    <div class="ref__hide">
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

                    <div data-page="notifications" x-show="page === 'notifications'" x-cloak>
                        <div class="main__uved">
                            <div class="uved__title">
                                <p>Сообщения</p>
                                <div class="uved__count">1</div>
                            </div>
                            <div class="uved__wrapper">
                                <a href="https://ico.umchain.org/ru/cabinet/profile/uved/one" class="uved__item">
                                    <div class="uved__info">
                                        <div class="uved__name uved__new">Новая транзакция</div>
                                        <div class="uved__description">jbcshjch287625r4235hjfdh</div>
                                    </div>
                                    <div class="uved__date">07.10.2021</div>
                                </a>
                                <a href="https://ico.umchain.org/ru/cabinet/profile/uved/one" class="uved__item">
                                    <div class="uved__info">
                                        <div class="uved__name">Новая транзакция</div>
                                        <div class="uved__description">jbcshjch287625r4235hjfdh</div>
                                    </div>
                                    <div class="uved__date">07.10.2021</div>
                                </a>
                                <a href="https://ico.umchain.org/ru/cabinet/profile/uved/one" class="uved__item">
                                    <div class="uved__info">
                                        <div class="uved__name">Новая транзакция</div>
                                        <div class="uved__description">jbcshjch287625r4235hjfdh</div>
                                    </div>
                                    <div class="uved__date">07.10.2021</div>
                                </a>
                                <a href="https://ico.umchain.org/ru/cabinet/profile/uved/one" class="uved__item">
                                    <div class="uved__info">
                                        <div class="uved__name">Новая транзакция</div>
                                        <div class="uved__description">jbcshjch287625r4235hjfdh d efew rger ge rg trg wrth
                                            wwt gtrhtr gtgrt ge wtg tg tr gtrw gtga</div>
                                    </div>
                                    <div class="uved__date">07.10.2021</div>
                                </a>
                                <a href="https://ico.umchain.org/ru/cabinet/profile/uved/one" class="uved__item">
                                    <div class="uved__info">
                                        <div class="uved__name">Новая транзакция</div>
                                        <div class="uved__description">jbcshjch287625r4235hjfdh</div>
                                    </div>
                                    <div class="uved__date">07.10.2021</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div data-page="logout" x-show="page === 'logout'" x-cloak>
                        <div class="main__out">
                            <div class="out__box">
                                <div class="out__title">Вы действительно хотите выйти?</div>
                                <div class="out__buttons !justify-around">
                                    <div class="out__no">
                                        <x-btn-transparent class="!text-black" x-on:click="page = prevPage">
											Отмена
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
    </section>

	<script>
		document.addEventListener('alpine:init', () => {
			Alpine.data('toastPanel', () => ({
				toasts: [],
				id: 1,
				
				fire() {
					this.toasts.push({id: this.id, text: this.$event.detail.text, type: this.$event.detail.type});
					this.id++;
				},
				hide(event) {
					const id = event.target.closest('.toast').dataset.id;

					let el = this.toasts.find((el) => el.id == id);

					this.toasts.pop(el);
				},
			}))
		})
	</script>

	<div class="fixed flex flex-col gap-2 bottom-10 right-10" x-data="toastPanel" @toast.window="fire">
		<template x-for="toast in toasts">
			<div 
				class="toast relative p-5 text-white border rounded w-[300px]" 
				:class="toast.type === 'error' ? 'border-transparent bg-danger' : 'border-pink bg-black'"
				:data-id="toast.id"
			>
				<span x-text="toast.text"></span>
				<div class="absolute top-1 right-1" @click="hide">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</div>
			</div>
		</template>
	</div>

	

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cabinet', () => ({
                page: window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1),
				prevPage: null,
				user: @json(auth()->user()),

                handleSwitch() {
                    const menu = this.$event.detail.value;

                    if (menu === 'wallet') {
						if (this.page !== 'logout') {
							this.prevPage = this.page;
						}
						
                        this.page = 'wallet';
						window.history.pushState({}, '', "{{ config('app.url') }}/cabinet/wallet");
                        return;
                    }

                    if (this.page === 'wallet') {
                        this.page = this.prevPage;
						window.history.pushState({}, '', "{{ config('app.url') }}/cabinet/" + this.prevPage);
                        return;
                    }
                },
                handlePage() {
					this.prevPage = this.page;
					this.page = this.$event.detail;

					if (this.$event.detail === 'logout') return;
					
					window.history.pushState({}, '', "{{ config('app.url') }}/cabinet/" + this.$event.detail);
                },
				


            }))
        })
    </script>
@endsection
