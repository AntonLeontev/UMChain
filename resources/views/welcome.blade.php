@extends('layouts.app')

@section('title', 'Main')

@section('content')
	<div class="bg-[#E5E5E5]">
    <section class="major">
        <div class="container">
            <div class="major__inner">
                <div class="major__left">
                    <h1 class="major__title">{{ __('home.UMCHAIN – IT solutions for business based on blockchain') }}</h1>
                    <div class="major__description">{{ __('home.Become one of the first. Take a step into a decentralized future') }}</div>
                    <div class="major__btn">

                        @if(Auth::check())
{{--                            <a href="{{ route('cabinet.personal.data') }}">Записаться на покупку umt токенов</a>--}}
                            <a href="#" id="majorBtn">{{ __('home.Sign up for the purchase of umt tokens') }}</a>
                        @else
{{--                            <a href="{{ route('register') }}">Записаться на покупку umt токенов</a>--}}
                            <a href="#" id="majorBtn">{{ __('home.Sign up for the purchase of umt tokens') }}</a>
                        @endif
                    </div>
                    <div class="major__img-block">
                        <img class="one" src="{{asset('images/logo01.png')}}" alt="">
                        <img class="two" src="{{asset('images/logo02.png')}}" alt="">
                    </div>
                </div>
{{--                <div class="major__right">--}}
{{--                    <div class="major__timer">До конца 1 раунда осталось:</div>--}}
{{--                    <div class="major__time">--}}
{{--                        <div class="major__one">--}}
{{--                            <div class="major__top">Токенов</div>--}}
{{--                            <div class="major__box">0 <span>млн.</span></div>--}}
{{--                            <div class="major__box">0<span></span></div>--}}
{{--                        </div>--}}
{{--                        <div class="major__one">--}}
{{--                            <div class="major__top">Модулей</div>--}}
{{--                            <div class="major__box">600</div>--}}
{{--                            <div class="major__box">0</div>--}}
{{--                        </div>--}}
{{--                        <div class="major__one">--}}
{{--                            <div class="major__top">Блоков</div>--}}
{{--                            <div class="major__box">12000</div>--}}
{{--                            <div class="major__box">0</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <div class="content__grid">
        <div class="content__left">
            <div class="content__list">
                <ul>
                    <li><a href="#what">{{ __('home.What is Umchain?') }}</a></li>
                    <li><a href="#bepartner">{{ __('home.partner.h1') }}</a></li>
                    <li><a href="#overview">Web 3.0</a></li>
                    <li><a href="#benefit">{{ __('home.menu.advantages') }}</a></li>
                    <li><a href="#distribution">{{ __('home.menu.forWhom') }}</a></li>
                    <li><a href="#benefit-partner">{{ __('home.menu.benefitPartner') }}</a></li>
                    <li><a href="#benefit-investor">{{ __('home.menu.benefitInvestor') }}</a></li>
                    <li><a href="#team">{{ __('home.utilityFunction.title') }}</a></li>
                    <li><a href="#reg">{{ __('home.technicalFunction.title') }}</a></li>
                    <li><a href="#tok">Tokenomics</a></li>
                    <li><a href="#map">{{ __('home.roadmap.title') }}</a></li>
                    {{-- <li><a href="#feedback">{{ __('home.feedback.title') }}</a></li> --}}
                </ul>
            </div>
        </div>
        <div class="content__right">
            <section class="what" id="what">
                <div class="what__inner">
                    <h3 class="common__title">{{ __('home.what.h1') }}</h3>
                </div>
                <div class="what__text">
                    <p>
						{{ __('home.what.1') }}
					</p>

                    <p><strong>{{ __('home.what.2') }}</strong></p>

                    <p>
                        <strong>-	{{ __('home.what.3') }}</strong>
                    </p>
                    <p>
                        <strong>-	{{ __('home.what.4') }}</strong>
                    </p>
                    <p>
                        <strong>-	{{ __('home.what.5') }}</strong>
                    </p>
                    <p>
                        <strong>-	{{ __('home.what.6') }}</strong>
                    </p>

                    <p>
                        {{ __('home.what.7') }}
                    </p>
                    <p>
                        {{ __('home.what.8') }}
                    </p>
					<p>
                        <strong>-	{{ __('home.what.9') }}</strong>
                    </p>
					<p>
                        <strong>-	{{ __('home.what.10') }}</strong>
                    </p>
                </div>
            </section>

            <section class="bepartner" id="bepartner">
                <div class="bepartner__inner">
                    <h3 class="common__title">{{ __('home.partner.h1') }}</h3>
                    <div class="bepartner__wrapper">
                        <div class="bepartner__item">
                            <div class="bepartner__image">
                                <img src="{{asset('images/bepartnerOne.svg')}}" alt="">
                            </div>
                            <div class="bepartner__step">{{ __('home.partner.step') }} 1</div>
                            <div class="bepartner__description">1. {{ __('home.partner.1') }}</div>
                        </div>
                        <div class="bepartner__item">
                            <div class="bepartner__image">
                                <img src="{{asset('images/bepartnerTwo.svg')}}" alt="">
                            </div>
                            <div class="bepartner__step">{{ __('home.partner.step') }} 2</div>
                            <div class="bepartner__description">2. {{ __('home.partner.2') }}</div>
                        </div>
                        <div class="bepartner__item">
                            <div class="bepartner__image">
                                <img src="{{asset('images/bepartnerThree.svg')}}" alt="">
                            </div>
                            <div class="bepartner__step">{{ __('home.partner.step') }} 3</div>
                            <div class="bepartner__description">3. {{ __('home.partner.3') }}
                            </div>
                        </div>
                    </div>
                    <div class="bepartner__addition">*{{ __('home.partner.4') }}
                    </div>
                    {{-- <div class="bepartner__btn">
						<a href="{{ route('cabinet.wallet') }}">Купить по стартовой цене</a>
                    </div> --}}
                    {{-- <div class="bepartner__small">(!) Инвестиционная криптовалютная деятельность, включая получение Токенов UMC, подвержена рыночному риску. Мы предоставляем вам простые и удобные способы получения Токенов UMC. Мы прилагаем все усилия, чтобы исчерпывающе информировать пользователей о предложенных на бирже криптовалютах, но не несем ответственности за последствия, которые могут возникнуть в результате получения Токенов UMC. Любая информация, изложенная на данной странице, несет исключительно информационный характер относительно конкретных Токенов или способа их получения.</div> --}}
                </div>
            </section>
			
            <section class="overview" id="overview">
                <div class="overview__inner">
					<div class="web">
						<h3 class="common__title">{{ __('home.web.h1') }}</h3>
						<p class="common__text"><span class="text--ping">Umchain</span> {{ __('home.web.1') }}</p>
						<div class="overview__box">
							<div class="overview__info">
								<p> {{ __('home.web.2') }}</p>
								<p>{{ __('home.web.3') }}</p>
								<p>{{ __('home.web.4') }}</p>
								<p>{{ __('home.web.5') }}</p>
							</div>
							<div class="overview__right">
								<div class="overview__task">{{ __('home.web.capabilities.title') }}</div>
								<ul class="overview__list">
									<li class="overview__item">{{ __('home.web.capabilities.1') }}</li>
									<li class="overview__item">{{ __('home.web.capabilities.2') }}</li>
									<li class="overview__item">{{ __('home.web.capabilities.3') }}</li>
									<li class="overview__item">{{ __('home.web.capabilities.4') }}</li>
								</ul>
							</div>
						</div>
					</div>

                    <div class="overview__competition advantages" id="benefit">
                        <h4 class="overview__title">{{ __('home.web.advantages.title') }}</h4>
                        <div class="overview__wrapper">
                            <div class="overview__one">
                                <div class="overview__name"><span>{{ __('home.web.advantages.1.1') }}</span>{{ __('home.web.advantages.1.2') }}</div>
                                <div class="overview__description">
                                      <p>
                                          {{ __('home.web.advantages.1.3') }}
                                      </p>
                                      <p>
                                          {{ __('home.web.advantages.1.4') }}
                                      </p>
                                      <p>
                                          {{ __('home.web.advantages.1.5') }}
                                      </p>
                                </div>
                            </div>
                            <div class="overview__one">
                                <div class="overview__name"><span>{{ __('home.web.advantages.2.1') }} </span>{{ __('home.web.advantages.2.2') }}</div>
                                <div class="overview__description">
                                    <p>{{ __('home.web.advantages.2.3') }}</p>
                                </div>
                            </div>
                            <div class="overview__one">
                                <div class="overview__name"><span>{{ __('home.web.advantages.3.1') }} </span>{{ __('home.web.advantages.3.2') }}</div>
                                <div class="overview__description">
                                    <p>{{ __('home.web.advantages.3.3') }}</p>
                                    <p>{{ __('home.web.advantages.3.4') }}</p>
                                </div>
                            </div>
                            <div class="overview__one">
                                <div class="overview__name"><span>{{ __('home.web.advantages.4.1') }} </span> {{ __('home.web.advantages.4.2') }}</div>
                                <div class="overview__description">
                                    <p>{{ __('home.web.advantages.4.3') }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="overview__trouble for-whom" id="distribution">
                        <h4 class="overview__title">{{ __('home.forWhom.h1') }}</h4>
                        <div class="overview__box">
                            <div class="overview__info">
                                <div class="overview__name"><span>{{ __('home.forWhom.1.1') }}</span>, {{ __('home.forWhom.1.2') }}</div>
                                <div class="overview__description">
                                    <p>{{ __('home.forWhom.1.3') }}</p>
                                    <p>{{ __('home.forWhom.1.4') }}</p>
                                </div>
                            </div>
                            <div class="overview__info">
                                <div class="overview__image">
                                    <img src="{{asset('images/cube.svg')}}" alt="">
                                </div>
                                <div class="overview__name overview__name--small"><span>{{ __('home.forWhom.2.1') }}</span> {{ __('home.forWhom.2.2') }}
                                </div>
                                <div class="overview__description">
                                    <p>{{ __('home.forWhom.2.3') }}</p>
                                    <p>{{ __('home.forWhom.2.4') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="border-none overview__box">
                            <div class="overview__info">
                                <div class="overview__name"><span>{{ __('home.forWhom.3.1') }}</span> {{ __('home.forWhom.3.2') }}</div>
                                <div class="overview__description">
                                    <p>
                                        {{ __('home.forWhom.3.3') }}
                                    </p>
                                </div>
                            </div>
                            <div class="overview__info">
                                <div class="overview__image overview__image--investment">
                                   <img src="{{asset('images/investment.jpg')}}" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="benefit-partner" class="benefit mb-98" id="about ">
                <div class="benefit__inner">
                    <h3 class="common__title">{{ __('home.benefitPartner.h1') }}</h3>
                    <div class="mb-20 benefit__wrapper">
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.1') }}</div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.2') }}
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.3') }}
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.4') }}
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.5') }}</div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.6') }}
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitPartner.7') }}
                            </div>
                        </div>
                    </div>
                    <div class="bepartner__btn">
                    @if(Auth::check())
                        <a  href="{{ route('cabinet.personal') }}">{{ __('home.benefitPartner.btn') }}</a>
                    @else
                        <a   href="{{ route('login') }}">{{ __('home.benefitPartner.btn') }}</a>
                    @endif
                    </div>
                </div>
            </section>

            <section id="benefit-investor" class="benefit-investor mb-98" id="about ">
                <div class="benefit__inner">
                    <h3 class="common__title">{{ __('home.benefitInvestor.h1') }}</h3>
                    <div class="mb-20 benefit__wrapper">
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitInvestor.1') }}</div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitInvestor.2') }}
                            </div>
                        </div>
                        <div class="benefit__item">
                            <div class="benefit__cube">
                                <img src="{{asset('images/cubeOne.svg')}}" alt="">
                            </div>
                            <div class="benefit__description">{{ __('home.benefitInvestor.3') }}
                            </div>
                        </div>
                    </div>
                    <div class="bepartner__btn">
                    @if(Auth::check())
                        <a  href="{{ route('cabinet.personal') }}">{{ __('home.benefitInvestor.btn') }}</a>
                    @else
                        <a   href="{{ route('login') }}">{{ __('home.benefitInvestor.btn') }}</a>
                    @endif
                    </div>
                </div>
            </section>

            <section class="mb-56 utility" id="team">
                 <div >
                    <h3 class="common__title">{{ __('home.utilityFunction.title') }}</h3>
                    <div class="what__text">
                        <p>
                            {{ __('home.utilityFunction.1') }}
                        </p>
                        <p>
                            {{ __('home.utilityFunction.2') }}
                        </p>
                        <p>
                            {{ __('home.utilityFunction.3') }}
                        </p>
                        <p>
                            {{ __('home.utilityFunction.4') }}
                        </p>
                    </div>
                </div>
            </section>

            <section class="mb-56 technical" id="reg">
                 <div>
                    <h3 class="common__title">{{ __('home.technicalFunction.title') }}</h3>
                    <div class="mb-56 what__text">
                        <p>
                           {{ __('home.technicalFunction.1') }}
                        </p>
                        <p>
                           {{ __('home.technicalFunction.2') }}
                        </p>
                    </div>

                    <div class="mb-98">
                        <picture>
                            <source srcset="{{asset('images/sxema-dest.png')}}" media="(min-width: 768px)">
                            <img class="distribution__img" src="{{asset('images/sxema-mob.png')}}" alt="фото">
                        </picture>
                    </div>
                </div>
            </section>

            <section class="mb-56 distribution">
                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Бизнес Роли</span></div>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                Оператор платформы
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                Продавец (Поставщик)
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                Покупатель
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Оператор платформы, обеспечивающий ввод фиатных средств в систему, и, как следствие, эмиссию и сжигание токенов UMT
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Пользователь экосистемы, осуществляющий загрузку товаров на контракт Umchain
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Пользователь маркетплейса, осуществляющий покупку товаров на маркетплейс за UM токен
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class='mb-56'>
                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Описание компонентов системы</span></div>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            UMT Token Contract
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            UMC Token Contract
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Access Control
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Seller Contract
                            </div>
                        </div>
                        <div class="distribution__item distribution__item-a">
                            <div class="distribution__wrapper">

                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Magic Wallet
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Seller-service
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            App DB
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Alchemy Poygon Node
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Gateway
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Прикладной контракт, реализующий функции эмиссии, оборота и сжигания токенов UMT
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Прикладной контракт, реализующий функции эмиссии, оборота и сжигания токенов UMC
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            ACL Contract	Прикладной контракт, реализующий ролевую модель участников
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                                <div>Прикладной контракт, реализующий функции:</div>
                                <div>- создания, редактирования, удаления партнеров</div>
                            </div>
                        </div>
                        <div class="distribution__item distribution__item-a">
                            <div class="distribution__wrapper">
                                <ul>
                                    <li>- создания, редактирования, удаления товаров</li>
                                    <li>- расщепление платежа в соответствии с правилами</li>
                                </ul>
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Внешний сервис, реализующий аутентификацию и выдачу адреса в блокчейне через SMS/Email/Social Login
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            ACL Contract	Прикладной контракт, реализующий ролевую модель участников
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Системный компонент, база данных, обеспечивающая хранение витрин данных
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Системный компонент, узел блокчейна Polygon в Alchemy BaaS (Blockchain-as-a-Service)
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Системный компонент, nginx, реализующий единую точку входа в API системы
                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <section id="tok" class="tokenomics">
                <div class="about__inner mb-44">
                    <h4 class="tok__title mb-44">Tokenomics</h4>
                    <picture>
                        <source srcset="{{asset('images/a-dest.png')}}" media="(min-width: 768px)">
                        <img class="distribution__img" src="{{asset('images/a-mob.png')}}" alt="фото">
                    </picture>
                </div>
                <div class="about__inner mb-44">
                    <h4 class="tok__title mb-44">Token distribution</h4>
                    <picture>
                        <source srcset="{{asset('images/b-dest.png')}}" media="(min-width: 768px)">
                        <img class="distribution__img" src="{{asset('images/b-mob.png')}}" alt="фото">
                    </picture>
                </div>
                <div class="about__inner mb-98">
                    <h4 class="tok__title mb-44">UMC Token emission</h4>
                    <picture>
                        <source srcset="{{asset('images/c-dest.png')}}" media="(min-width: 768px)">
                        <img class="distribution__img" src="{{asset('images/c-mob.png')}}" alt="фото">
                    </picture>
                </div>
            </section>

            <section>

                <p class="text-p mb-44 text-i">
                    Общее количество UMC Токенов составляет 444 000 000
                </p>
                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Seed</span></div>
                            <div class="distribution__target">Цель:</div>
                            <div class="distribution__description">
                                <p>Запустить dwb.world</p>
                                <p>Разработка смартконтракта NFT;</p>
                            </div>
                            <ul class="distribution__data">
                                <li>Дата</li>
                                <li>08.10.2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Allocation
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Percentage %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Raise total
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Price
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Lock
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Vesting (linear)
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            22 200 000
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            5,00 %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            $ 33 300,00
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper">
                            0,0015 USDT
                            </div>
                            <!-- <div class="distribution__wrapper distribution--flex">
                                <div class="distribution__one distribution__one--normal">0,01287001 USDT</div>
                                <div class="distribution__one distribution__one--pink">0,00536251 USDT</div>
                            </div> -->
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            3 month
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            10% each month for 10 months after 6 month cliff from listing
                            </div>
                        </div>
                    </div>
                </div>


                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Private</span></div>
                            <div class="distribution__target">Цель:</div>
                            <div class="distribution__description">
                                <p>Старт запуска разработки блокчейн сети;</p>
                            </div>
                            <ul class="distribution__data">
                                <li>Дата</li>
                                <li>31.10.2022</li>
                            </ul>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Allocation
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Percentage %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Raise total
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Price
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Lock
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Vesting (linear)
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            44 400 000
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            10,00 %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            $ 111 100,00
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution--flex">
                                <div class="distribution__one distribution__one--normal">0,0025 USDT</div>
                                <div class="distribution__one distribution__one--pink">0,001 USDT</div>
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            0
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            10% each month for 10 months after 6 month cliff from listing
                            </div>https://ico.umchain.org/
                        </div>
                    </div>
                </div>

                <div class="distribution__table">
                    <div class="distribution__left">
                        <div class="distribution__wrapper">
                            <div class="distribution__round"><span>Public </span></div>
                            <div class="distribution__target">Цель:</div>
                            <div class="distribution__description">

                            </div>
                            <ul class="distribution__data">
                                <li>Дата</li>
                                <li>12.01.2023</li>
                            </ul>
                        </div>
                    </div>
                    <div class="distribution__middle">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Allocation
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Percentage %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Raise total
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Price
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Lock
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            Vesting (linear)
                            </div>
                        </div>
                    </div>
                    <div class="distribution__right">
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            22 200 000
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            5,00 %
                            </div>
                        </div>
                        <div class="distribution__item">
                            <div class="distribution__wrapper">
                            $ 77 700,00
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution--flex">
                                <div class="distribution__one distribution__one--normal">0,0035 USDT</div>
                                <div class="distribution__one distribution__one--pink">0,001 USDT</div>
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            0
                            </div>
                        </div>
                        <div class="distribution__item distribution__item--small">
                            <div class="distribution__wrapper distribution__one--normal">
                            10% each month for 10 months after 6 month cliff from listing
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about roadmap" id="map">
                <div class="about__inner">
                    <h4 class="overview__title">{{ __('home.roadmap.title') }}</h4>
                    <div class="overview__choose">
                        <div class="overview__num">2022</div>
                        <div class="overview__arrow">
                            <img src="{{asset('images/arrow.svg')}}" alt="">
                        </div>
                        <div class="overview__spisok">
                            <div class="overview__uno">2020</div>
                            <div class="overview__uno">2021</div>
                            <div class="overview__uno">2022</div>
                            <div class="overview__uno">2023</div>
                        </div>
                    </div>
                        <div class="about__map about__map--four" style="display: none;">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/lineThird.svg')}}" alt="">
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">00</div>
                                    <div class="about__count">01</div>
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка и запуск проекта по доставке цветов umflowers.ru
                                    </div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__data--pink">2020</div>
                                <div class="about__data about__data--text">UM Chain</div>
                                <div class="about__data about__data--small">07 / 2020</div>
                                <div class="about__data">2021</div>
                                <div class="about__data">2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">00</span> – <span>UM Chain</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">01</span> – <span>Разработка и запуск проекта по доставке цветов umflowers.ru</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart1-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart1-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                         <div class="about__map about__map--three">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/lineThird.svg')}}" alt="">
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">00</div>
                                    <div class="about__count">01</div>
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка и запуск проекта по доставке цветов umflowers.ru
                                    </div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__data--pink">2020</div>
                                <div class="about__data about__data--text">UM Chain</div>
                                <div class="about__data about__data--small">07 / 2020</div>
                                <div class="about__data">2021</div>
                                <div class="about__data">2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">00</span> – <span>UM Chain</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">01</span> – <span>Разработка и запуск проекта по доставке цветов umflowers.ru</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart2-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart2-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                        <div class="about__map about__map--two">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/lineSecond.svg')}}" alt="">
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка CRM системы в части для руководителя</div>
                                    <div class="about__texting">Разработка и запуск автоматизированной системы
                                        взаимодействия партнеров с клиентами
                                    </div>
                                    <div class="about__texting">Разработка единой платформы для объединения 30 сфер бизнеса
                                    </div>
                                    <div class="about__texting">Выпуск Токенов UMT для привлечения инвестиций, закрытое
                                        Pre-ICO
                                    </div>
                                    <div class="about__texting">Поиск партнеров в категориях: Доставка ресторанной еды,
                                        Доставка свежих фруктов и овощей
                                    </div>
                                    <div class="about__texting">Тестирование платформы в категории доставка цветов</div>
                                    <div class="about__texting">Разработка категории доставка еды и продуктов, разработка
                                        личного кабинета инвестора
                                    </div>
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">02</div>
                                    <div class="about__count">03</div>
                                    <div class="about__count">04</div>
                                    <div class="about__count">05</div>
                                    <div class="about__count">06</div>
                                    <div class="about__count">07</div>
                                    <div class="about__count">08</div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__start">2020</div>
                                <div class="about__data about__data--pink">2021</div>
                                <div class="about__data about__data--small">02 / 2021</div>
                                <div class="about__data about__data--small">03 / 2021</div>
                                <div class="about__data about__data--small">04 / 2021</div>
                                <div class="about__data about__data--small">05 / 2021</div>
                                <div class="about__data about__data--small">10 / 2021</div>
                                <div class="about__data about__data--small">11 / 2021</div>
                                <div class="about__data about__data--small">12 / 2021</div>
                                <div class="about__data">2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">02</span> –
                                    <span>Разработка CRM системы в части для руководителя</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">03</span> – <span>Разработка и запуск автоматизированной системы взаимодействия партнеров с клиентами</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">04</span> – <span>Разработка единой платформы для объединения 30 сфер бизнеса</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">05</span> – <span>Выпуск Токенов UMT для привлечения инвестиций, закрытое Pre-ICO</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">06</span> – <span>Поиск партнеров в категориях: Доставка ресторанной еды, Доставка свежих фруктов и овощей</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">07</span> – <span>Тестирование платформы в категории доставка цветов</span>
                                </div>
                                <div class="about__item about__info">
                                    <span class="about__num">08</span> – <span>Разработка категории доставка еды и продуктов,  разработка личного кабинета инвестора</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart4-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart2-mob-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                        <div class="about__map about__map--one">
                            <!-- <div class="about__table">
                                <div class="about__line">
                                    <img src="{{asset('images/line.svg')}}" alt="">
                                </div>
                                <div class="about__block">
                                    <div class="about__texting">Разработка модуля для категорий «Автосервис, гостиничный
                                        бизнес, Салоны красоты, фитнес»
                                    </div>
                                    <div class="about__texting"style="width: 435px;">Разработка блокчейна unitedcorporation.org
                                        и интеграция с базой unitedmarket.org, Разработка сайта umscan.org (информационный сайт о статусе
                                        заказа, транзакциях, блоках, токенах)
                                    </div>
                                    <div class="about__texting">Разработка модуля для интеграции Unitedmarket в сайты
                                        партнеров
                                    </div>
                                    <div class="about__texting">Листинг на Бирже</div>
                                    <div class="about__texting">Выход на мировой рынок, формирование call center</div>
                                    <div class="about__texting">Внедрение unitedmarket в Европе, Америки, Азии, Австралии,
                                        Африки
                                    </div>
                                </div>
                                <div class="about__counting">
                                    <div class="about__count">09</div>
                                    <div class="about__count">10</div>
                                    <div class="about__count">11</div>
                                    <div class="about__count">12</div>
                                    <div class="about__count">13</div>
                                    <div class="about__count">14</div>
                                </div>
                                <div class="about__boxing">
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                    <div class="about__point">
                                        <img src="{{asset('images/point.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="about__inform">
                                    <div class="about__information">
                                        <p>Запуск контекстной рекламы</p>
                                        <p>Создание аккаунтов в социальных сетях</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Ростове Великом и Ярославле</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Дзержинском</p>
                                    </div>
                                    <div class="about__information">
                                        <p>Участие в соревнованиях по бодибилдингу в Воронеже</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Москве и Санкт-Петербурге</p>
                                        <p>Разработка CRM системы в части для рекламы и маркетинга</p>
                                        <p>Участие в соревнованиях по бодибилдингу в Краснодаре и Сочи </p>
                                        <p>Разработка CRM системы в части для call-центра</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__dates">
                                <div class="about__data about__start">2020</div>
                                <div class="about__data">2021</div>
                                <div class="about__data about__data--pink">2022</div>
                                <div class="about__data about__data--small">02 / 2022</div>
                                <div class="about__data about__data--small">03 / 2022</div>
                                <div class="about__data about__data--small">04 / 2022</div>
                                <div class="about__data about__data--small">05 / 2022</div>
                                <div class="about__data about__data--small">06 / 2022</div>
                            </div>
                            <div class="about__bottom"></div>
                            <div class="hide__about">
                                <div class="about__item">
                                    <span class="about__num">09</span><span> – Разработка модуля для категорий «Автосервис, гостиничный бизнес, Салоны красоты, фитнес» </span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">10</span><span> – Разработка блокчейна unitedcorporation.org и интеграция с базой unitedmarket.org, Разработка сайта umscan.org  (информационный сайт о статусе заказа, транзакциях, блоках, токенах)</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">11</span><span> – Разработка модуля для интеграции Unitedmarket в сайты партнеров</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">12</span><span> – Листинг на Бирже </span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">13</span><span> – Выход на мировой рынок, формирование call center</span>
                                </div>
                                <div class="about__item">
                                    <span class="about__num">14</span><span> – Внедрение unitedmarket  в Европе, Америки, Азии, Австралии, Африки</span>
                                </div>
                            </div> -->
                            <picture>
                                <source srcset="{{asset('images/сhart3-dest.png')}}" media="(min-width: 768px)">
                                <img class="distribution__img" src="{{asset('images/сhart3-mob.png')}}" alt="фото">
                            </picture>
                        </div>
                </div>
            </section>
            <section class="team" id="feedback">
                <div class="team__inner">

                </div>
            </section>
            <div>
				{{-- <section class="reg reg--small" id="reg">
					<div class="container">
						<div class="reg__inner">
							<h1 class="reg__title">{{ __('home.feedback.title') }}</h1>
							<div class="reg__wrapper">
								<div class="reg__info">
									<div class="reg__form">
										<form action="">
											<div class="reg__one">
												<div class="reg__name">{{__('What is your name?')}}</div>
												<div class="reg__field">
													<input type="text" name="name" required>
												</div>
											</div>
											<div class="reg__one">
												<div class="reg__name">{{__('Your phone number')}}</div>
												<div class="reg__field">
													<input type="text" name="phone">
												</div>
											</div>
											<div class="reg__one">
												<div class="reg__name">{{__('Email')}}</div>
												<div class="reg__field">
													<input type="email" name="email" required>
												</div>
											</div>
											<div class="reg__one">
												<div class="reg__name">{{__('Your question')}}</div>
												<div class="reg__field">
													<input type="text" name="message" required>
												</div>
											</div>
											<div class="reg__agreement">
												<input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes" required>
												<label for="happy"><p>{{__('By clicking the Submit button, you agree to the')}}<a href="">{{__('Privacy Policy')}}</a></p></label>
											</div>
											<button type="submit" class="reg__btn">
												{{__('Submit')}}
											</button>
										</form>
									</div>
								</div>
								<div class="reg__img reg__img--desc">
									<img src="{{asset('images/cubeMob.svg')}}" alt="">
								</div>
								<div class="reg__img reg__img--mob">
									<img src="{{asset('images/cubeMob.svg')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</section> --}}
			</div>
        </div>
    </div>
</div>
<script src="/js/main.js"></script>

<div class="popup" id="popup">
    <div class="popup__title">{{__('Submit a request for the purchase of UMT Tokens')}}</div>
    <div class="reg__info">
        <div class="reg__form">
            <form action="" method="POST">
                <div class="reg__one">
                    <div class="reg__name">{{__('What is your name?')}}</div>
                    <div class="reg__field">
                        <input type="text" name="name" autocomplete="on" required>
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{__('Your phone number')}}</div>
                    <div class="reg__field">
                        <input type="tel" name="phone"required autocomplete="on">
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{__('Your Email')}}</div>
                    <div class="reg__field">
                        <input type="email"  name="email" required autocomplete="on">
                    </div>
                </div>
                <div class="reg__one">
                    <div class="reg__name">{{__('What dollar amount do you reserve UMT tokens for?')}}</div>
                    <div class="reg__field">
                        <input type="number" name="tokens" required>
                    </div>
                </div>
                <div class="reg__agreement">
                    <input type="checkbox" class="custom-checkbox" id="happy2" name="happy" value="yes" required>
                    <label for="happy2"><p>{{__('By clicking the Submit button, you agree to the')}} <a href="#">{{__('Privacy Policy')}}</a></p></label>
                </div>
                <button class="reg__btn" type="submit">
                    {{__('Submit a request')}}
                </button>
            </form>
        </div>
    </div>
    <div class="popup__close" id="popupClose">
        <img src="{{asset('images/close.svg')}}" alt="">
    </div>
</div>
@if(session()->has('message_sent_success'))
    <div class="thanks" id="thanks">
        <div class="thanks__title">{{__('Thank you for your application, our managers will contact you')}}</div>
        <div class="thanks__close" id="thanksClose">
            <img src="{{asset('images/close.svg')}}" alt="">
        </div>
    </div>
@endif
@endsection
