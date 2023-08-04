@extends('layouts.app')

@section('title', 'Cabinet')

@section('content')
    <section class="main" x-data="cabinet">
        <div class="container container--full">
            <div class="main__inner" 
				x-on:switch="handleSwitch" 
				x-on:page="handlePage"
				@order-created="order = $event.detail"
				@order-canceled="order = null"
				@order-confirmed="order = null"
			>
                <x-personal.sidebar.index />


                <div class="main__right main__right--right">
                    <div class="main__btn">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <x-personal.pages.profile />
					
                    <x-personal.pages.wallet />

                    <x-personal.pages.portfolio />

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

	<x-common.toast-panel />

	

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cabinet', () => ({
                page: window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1),
				prevPage: null,
				user: @json(auth()->user()),
				settings: @json(settings()),
				order: null,

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

					this.pushState(this.$event.detail);
                },
				pushState(path) {
					let url = window.location.href.replace(/\/(?!.*\/).+/gm, '');
					
					window.history.pushState({}, '', `${url}/` + path);
				},
				formatRate(rate) {
					return new Intl.NumberFormat('{{ app()->getLocale() }}', { minimumFractionDigits: 8 }).format(rate);
				}
				


            }))
        })
    </script>
@endsection
