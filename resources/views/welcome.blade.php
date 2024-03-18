@extends('layouts.app')

@section('title', 'Main')

@section('content')
	<div class="bg-[#E5E5E5]">
    <section class="major">
        <div class="container">
            <div class="major__inner">
                <div class="major__left">
					<div class="major__description">Whitepaper</div>
                    <h1 class="major__title">{{ __('home.UMCHAIN – IT solutions for business based on blockchain') }}</h1>
                    <div class="major__description">{{ __('home.Become one of the first. Take a step into a decentralized future') }}</div>
                    <div class="major__btn">

						<a href="{{ route('register') }}">{{ __('home.Sign up for the purchase of umt tokens') }}</a>
                    </div>
                </div>
			</div>
        </div>
    </section>
	
	@if (false)
		<div class="content__grid">
			<div class="content__left">
				<div class="content__list">
					<ul class="pcmenu">
						<li class="pcmenu-item" data-id="what"><a href="#what">{{ __('home.What is Umchain?') }}</a></li>
						<li class="pcmenu-item" data-id="bepartner"><a href="#bepartner">{{ __('home.partner.h1') }}</a></li>
						<li class="pcmenu-item" data-id="overview"><a href="#overview">Web 3.0</a></li>
						<li class="pcmenu-item" data-id="benefit"><a href="#benefit">{{ __('home.menu.advantages') }}</a></li>
						<li class="pcmenu-item" data-id="distribution"><a href="#distribution">{{ __('home.menu.forWhom') }}</a></li>
						<li class="pcmenu-item" data-id="benefit-partner"><a href="#benefit-partner">{{ __('home.menu.benefitPartner') }}</a></li>
						<li class="pcmenu-item" data-id="benefit-investor"><a href="#benefit-investor">{{ __('home.menu.benefitInvestor') }}</a></li>
						<li class="pcmenu-item" data-id="team"><a href="#team">{{ __('home.utilityFunction.title') }}</a></li>
						<li class="pcmenu-item" data-id="reg"><a href="#reg">{{ __('home.technicalFunction.title') }}</a></li>
						<li class="pcmenu-item" data-id="tok"><a href="#tok">Tokenomics</a></li>
						<li class="pcmenu-item" data-id="map"><a href="#map">{{ __('home.roadmap.title') }}</a></li>
					</ul>
				</div>
			</div>
			<div class="content__right">
				<section class="relative what">
					<div class="absolute anchor -top-3" id="what"></div>

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

				<section class="relative bepartner">
					<div class="absolute anchor -top-3" id="bepartner"></div>

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
					</div>
				</section>
				
				<section class="relative overview">
					<div class="absolute anchor -top-3" id="overview"></div>

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

						<div class="relative overview__competition advantages">
							<div class="absolute anchor -top-3" id="benefit"></div>

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
						
						<div class="relative overview__trouble for-whom">
							<div class="absolute anchor -top-3" id="distribution"></div>

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

				<section class="relative benefit mb-98">
					<div class="absolute anchor -top-3" id="benefit-partner"></div>

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
						<div class="mx-auto bepartner__btn">
							<a  href="{{ route('cabinet.personal') }}">{{ __('home.benefitPartner.btn') }}</a>
						</div>
					</div>
				</section>

				<section class="relative benefit-investor mb-98" id="about ">
					<div class="absolute anchor -top-3" id="benefit-investor"></div>

					<div class="benefit__inner">
						<h3 class="common__title">{{ __('home.benefitInvestor.h1') }}</h3>
						<div class="mb-20 benefit__wrapper">
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
						<div class="mx-auto bepartner__btn">
							<a  href="{{ route('cabinet.personal') }}">{{ __('home.benefitInvestor.btn') }}</a>
						</div>
					</div>
				</section>

				<section class="relative mb-56 utility">
					<div class="absolute anchor -top-3" id="team"></div>

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
							<p>
								{{ __('home.utilityFunction.5') }}
							</p>
							<p>
								{{ __('home.utilityFunction.6') }}
							</p>
							<p>
								{{ __('home.utilityFunction.7') }}
							</p>
							<p>
								{{ __('home.utilityFunction.8') }}
							</p>
							<p>
								{{ __('home.utilityFunction.9') }}
							</p>
							<p>
								{{ __('home.utilityFunction.10') }}
							</p>
						</div>
					</div>
				</section>

				<section class="relative mb-16 technical">
					<div class="absolute anchor -top-3" id="reg"></div>

					<div>
						<h3 class="common__title">{{ __('home.technicalFunction.title') }}</h3>
						<div class="mb-10 what__text">
							<p>
							{{ __('home.technicalFunction.1') }}
							</p>
							<p>
							{{ __('home.technicalFunction.2') }}
							</p>
							<p>
							{{ __('home.technicalFunction.3') }}
							</p>
							<p>
							{{ __('home.technicalFunction.4') }}
							</p>
							<p>
							{{ __('home.technicalFunction.5') }}
							</p>
							<p>
							{{ __('home.technicalFunction.6') }}
							</p>
							<p>
							{{ __('home.technicalFunction.7') }}
							</p>
							<p>
							{{ __('home.technicalFunction.8') }}
							</p>
							<p>
							{{ __('home.technicalFunction.9') }}
							</p>
							<p>
							{{ __('home.technicalFunction.10') }}
							</p>
							<p>
							{{ __('home.technicalFunction.11') }}
							</p>
						</div>

						<div class="mb-10">
							<picture>
								<source srcset="{{Vite::asset('resources/images/sxema-dest.png')}}" media="(min-width: 768px)">
								<img class="distribution__img" src="{{Vite::asset('resources/images/sxema-dest.png')}}" alt="фото">
							</picture>
						</div>
					</div>
				</section>

				<section class='mb-56'>
					<div class="relative grid grid-flow-row grid-cols-1 mb-2 md:grid-cols-3 md:grid-rows-1">
						<div class="relative p-[18px] before:absolute before:left-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:top-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
							<div class="distribution__round before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px] ">
								<span class="font-[Montserrat]">{{ __('home.components.title') }}</span>
							</div>
						</div>

						<div class="relative md:col-span-2 after:absolute before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">

							<div class="after:absolute after:left-0 after:w-[1px] after:bg-black after:top-[13px] after:bottom-[13px] md:after:w-auto md:after:top-0 md:after:h-[1px] md:after:left-[13px] md:after:right-[13px]">
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Umchain Contract
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											{{ __('home.components.1') }} 
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											UMC Token Contract
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div>
												{{ __('home.components.2') }}
											</div>
											<div>
												{{ __('home.components.3') }}
											</div>
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											WebsiteDatabaseContract
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div>
												{{ __('home.components.4') }}
											</div>
											<div>
												{{ __('home.components.5') }}
											</div>
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											StakingContract
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div>{{ __('home.components.6') }}</div>
											<div>{{ __('home.components.7') }}</div>
											<div>{{ __('home.components.8') }}</div>
										</div>
									</div>
								</div>
								
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											NFT Module for UMCT (NFTM)
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div>{{ __('home.components.9') }}</div>
											<div>{{ __('home.components.10') }}</div>
											<div>{{ __('home.components.11') }}</div>
											<div>{{ __('home.components.12') }}</div>
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											GasSubsidizerContract
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div>{{ __('home.components.13') }}</div>
											<div>{{ __('home.components.14') }}</div>
											<div>{{ __('home.components.15') }}</div>
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Umchain Full Stack Web Generator (UFSWG)
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div>{{ __('home.components.16') }}</div>
											<div>{{ __('home.components.17') }}</div>
											<div>{{ __('home.components.18') }}</div>
											<div>{{ __('home.components.19') }}</div>
											<div>{{ __('home.components.20') }}</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</section>


				<section class="relative tokenomics">
					<div class="absolute anchor -top-3" id="tok"></div>

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
							<source srcset="{{Vite::asset('resources/images/c-dest.png')}}" media="(min-width: 768px)">
							<img class="distribution__img" src="{{Vite::asset('resources/images/c-dest.png')}}" alt="фото">
						</picture>
					</div>
				</section>

				<section>

					<p class="mb-5 text-p text-i">
						{{ __('home.total-tokens') }}
					</p>

					<div class="relative grid grid-flow-row grid-cols-1 mb-8 md:grid-cols-3 md:grid-rows-1">
						<div class="relative p-[18px] before:absolute before:left-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:top-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
							<div class="distribution__round before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px] ">
								<span class="font-[Montserrat]">Seed</span>
							</div>
							<ul class="distribution__data">
								<li>{{ __('home.seed.date') }}</li>
								<li>05.02.2024</li>
							</ul>
						</div>

						<div class="relative md:col-span-2 after:absolute before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">

							<div class="after:absolute after:left-0 after:w-[1px] after:bg-black after:top-[13px] after:bottom-[13px] md:after:w-auto md:after:top-0 md:after:h-[1px] md:after:left-[13px] md:after:right-[13px]">
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Allocation
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											17 760 000
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Percentage %
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											4 %
										</div>
									</div>
								</div>
								
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Raise total
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											$ 13 320,00
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Price
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div class="distribution__one distribution__one--normal">
												0,00075 USDT
											</div>
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Vesting
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											Freezing: 6 months. Unfreezing: 8% per month from DEX listing date
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="relative grid grid-flow-row grid-cols-1 mb-8 md:grid-cols-3 md:grid-rows-1">
						<div class="relative p-[18px] before:absolute before:left-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:top-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
							<div class="distribution__round before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px] ">
								<span class="font-[Montserrat]">Private</span>
							</div>
							<ul class="distribution__data">
								<li>{{ __('home.private.date') }}</li>
								<li>15.03.24</li>
							</ul>
						</div>

						<div class="relative md:col-span-2 after:absolute before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">

							<div class="after:absolute after:left-0 after:w-[1px] after:bg-black after:top-[13px] after:bottom-[13px] md:after:w-auto md:after:top-0 md:after:h-[1px] md:after:left-[13px] md:after:right-[13px]">
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Allocation
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											31 080 000
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Percentage %
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											7 %
										</div>
									</div>
								</div>
								
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Raise total
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											$ 46 620,00
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Price
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div class="distribution__one distribution__one--normal">0,0015 USDT</div>
										</div>
									</div>
								</div>


								<div class="flex py-1">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Vesting
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											Freezing: 8 months. Unfreezing: 8% per month from DEX listing date
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="relative grid grid-flow-row grid-cols-1 mb-2 md:grid-cols-3 md:grid-rows-1">
						<div class="relative p-[18px] before:absolute before:left-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:top-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
							<div class="distribution__round before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px] ">
								<span class="font-[Montserrat]">Public</span>
							</div>
							<ul class="distribution__data">
								<li>{{ __('home.public.date') }}</li>
								<li>20.04.24</li>
							</ul>
						</div>

						<div class="relative md:col-span-2 after:absolute before:absolute before:right-0 before:w-[1px] before:bg-black before:top-[13px] before:bottom-[13px] after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">

							<div class="after:absolute after:left-0 after:w-[1px] after:bg-black after:top-[13px] after:bottom-[13px] md:after:w-auto md:after:top-0 md:after:h-[1px] md:after:left-[13px] md:after:right-[13px]">
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Allocation
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											22 200 000
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Percentage %
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											5,00 %
										</div>
									</div>
								</div>
								
								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Raise total
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											$ 66 660,00
										</div>
									</div>
								</div>

								<div class="relative flex py-1 after:absolute after:bottom-0 after:h-[1px] after:bg-black after:left-[13px] after:right-[13px]">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Price
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											<div class="distribution__one distribution__one--normal">0,003 USDT</div>
										</div>
									</div>
								</div>


								<div class="flex py-1">
									<div class="w-1/2 shrink-0 distribution__item">
										<div class="distribution__wrapper">
											Vesting
										</div>
									</div>

									<div class="distribution__item">
										<div class="distribution__wrapper">
											Freezing: 10 months. Unfreezing: 8% per month from DEX listing date
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mx-auto mt-5 bepartner__btn">
						<a href="tokens calculation.pdf" target="_blank">{{ __('home.learn_more') }}</a>
					</div>

				</section>

				<section class="relative about roadmap">
					<div class="absolute anchor -top-3" id="map"></div>

					<h4 class="mb-10 tok__title">Roadmap</h4>

					<div class="p-1 overflow-hidden rounded" x-data="roadmap">
						<div class="p-2 mt-0 overview__uno" @click="active = 1">
							2020 Q4
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 1 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Start of IT development of the UMChain marketplace platform</x-roadmap-item>
								</ul>
							</div>
						</div>
						
						<div class="p-2 mt-0 overview__uno" @click="active = 2">
							2021 Q1 - Q4
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 2 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Development of marketplace architecture</x-roadmap-item>
									<x-roadmap-item checked>Development of online store and marketplace design </x-roadmap-item>
									<x-roadmap-item checked>Development of online store and marketplace frontend</x-roadmap-item>
									<x-roadmap-item checked>Development of online store and marketplace backend</x-roadmap-item>
									<x-roadmap-item checked>Development of online store and marketplace</x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 3">
							2022 Q1 - Q2 
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 3 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Development of terms of reference for smart contract</x-roadmap-item>
									<x-roadmap-item checked>Development of smart contract for marketplace</x-roadmap-item>
									<x-roadmap-item checked>Registration of UMChain OU in Estonia</x-roadmap-item>
								</ul>
							</div>
						</div>
						
						<div class="p-2 mt-0 overview__uno" @click="active = 4">
							2022 Q3 - Q4
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 4 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Integration of smart contract into marketplace</x-roadmap-item>
									<x-roadmap-item checked>Development of Terms of Reference for online store builder (CMS UMCHAIN)</x-roadmap-item>
									<x-roadmap-item checked>Development of CMS Umchain</x-roadmap-item>
									<x-roadmap-item checked>Launch of online flower store on CMS umchain</x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 5">
							2023 Q1
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 5 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Start of Development of Decentralized Website Builder, Umchain Full Stack Web Generator (UFSWG)</x-roadmap-item>
									<x-roadmap-item checked>Formation of backend development department</x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 6">
							2023 Q2
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 6 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Develop project architecture </x-roadmap-item>
									<x-roadmap-item checked>Development of the Umchain Full Stack Web Generator (UFSWG)</x-roadmap-item>
									<x-roadmap-item checked>Terms of Reference</x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 7">
							2023 Q3
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 7 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Integration with neural networks </x-roadmap-item>
									<x-roadmap-item checked>Umchain Ecosystem logic development</x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 8">
							2023 Q4
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 8 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item checked>Development Umchain Token Contract Smart Contract</x-roadmap-item>
									<x-roadmap-item checked>Development FeezeContract </x-roadmap-item>
									<x-roadmap-item checked>Test run of Umchain Full Stack Web Generator (Landing page) prototype</x-roadmap-item>
									<x-roadmap-item checked>Template layout Umchain Full Stack Web Generator (Landing page) </x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 9">
							2024 Q1 - Q2
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 9 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item>Seed Round Development of design templates for Umchain Full Stack Web Generator (Landing page)</x-roadmap-item>
									<x-roadmap-item>Private round Development of StakingContract Development of WebsiteDatabaseContract Development of GasSubsidizerContract</x-roadmap-item>
									<x-roadmap-item>Contract Audit</x-roadmap-item>
									<x-roadmap-item>Launch of Umchain Full Stack Web Generator (Landing page)</x-roadmap-item>
									<x-roadmap-item>Landing page Integration of StakingContract with Umchain Full Stack Web Generator (Landing page)</x-roadmap-item>
									<x-roadmap-item>Launch of Bounty program Public round Launch of Umchain Full Stack Web Generator (Landing page)</x-roadmap-item>
									<x-roadmap-item>Listing DEX</x-roadmap-item>
									<x-roadmap-item>Development of Umchain Full Stack Web Generator (Online Store) </x-roadmap-item>
									<x-roadmap-item>Test run of Umchain Full Stack Web Generator (Online Store) </x-roadmap-item>
									<x-roadmap-item>Intgeration of StakingContract in Umchain Full Stack Web Generator (Online Store) </x-roadmap-item>
									<x-roadmap-item>Launch of Umchain Full Stack Web Generator (Online Store)</x-roadmap-item>
								</ul>
							</div>
						</div>

						<div class="p-2 mt-0 overview__uno" @click="active = 10">
							2024 Q3 - Q4
						</div>
						<div class="grid grid-rows-[0fr] overflow-hidden transition-[grid-template-rows] duration-500" :class="active === 10 && 'grid-rows-[1fr]'">
							<div class="overflow-hidden rounded-xl">
								<ul class="flex flex-col gap-2 pl-7">
									<x-roadmap-item>Development of NFT Module for UMCT (NFTM) </x-roadmap-item>
									<x-roadmap-item>Development of Umchain Full Stack Web Generator (Marketplace)</x-roadmap-item>
									<x-roadmap-item>Integration of NFT Module for UMCT (NFTM) into Umchain Full Stack Web Generator (Marketplace)</x-roadmap-item>
									<x-roadmap-item>Test run of Umchain Full Stack Web Generator (Marketplace) </x-roadmap-item>
									<x-roadmap-item>Launch of Umchain Full Stack Web Generator (Marketplace) </x-roadmap-item>
									<x-roadmap-item>CEX Listing</x-roadmap-item>
								</ul>
							</div>
						</div>
					</div>

					<script>
						document.addEventListener('alpine:init', () => {
							Alpine.data('roadmap', () => ({
								active: 9,
							}))
						})
					</script>

				</section>

			</div>
		</div>
	@endif
</div>
<script src="/js/main.js"></script>

@if(session()->has('message_sent_success'))
    <div class="thanks" id="thanks">
        <div class="thanks__title">{{__('Thank you for your application, our managers will contact you')}}</div>
        <div class="thanks__close" id="thanksClose">
            <img src="{{asset('images/close.svg')}}" alt="">
        </div>
    </div>
@endif
@endsection
