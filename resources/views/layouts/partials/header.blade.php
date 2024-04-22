<header class="relative header z-[60]">
    <div class="container">
        <div class="header__inner" x-data="{menu: false}" @buy-click.window="menu = true">
            <div class="header__logo">
                <a href="/">
					<img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo" width="116"> 
                </a>
            </div>

			<div class="flex items-center gap-x-5 md:gap-x-10">
				<div class="header__lang">
					@include('layouts.partials.lang-list')
				</div>

				@unless (request()->routeIs('cabinet.*'))
					<div class="header__person active">
						<a href="{{ LaravelLocalization::localizeUrl(route('cabinet.personal')) }}">
							<svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="37.4" height="34" rx="1.36" stroke="white" stroke-width="4"
									mask="url(#path-1-inside-1_17:597)"/>
								<path
									d="M10.2002 25.8402C10.2002 22.5252 14.6202 22.5252 16.8302 20.3152C17.9352 19.2102 14.6202 19.2102 14.6202 13.6852C14.6202 10.0022 16.0932 8.16016 19.0402 8.16016C21.9872 8.16016 23.4602 10.0022 23.4602 13.6852C23.4602 19.2102 20.1452 19.2102 21.2502 20.3152C23.4602 22.5252 27.8802 22.5252 27.8802 25.8402"
									stroke="white" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					</div>
				@endif
	
				<div class="header__btn w-[30px]" @click="menu = !menu; $dispatch('menu-click')" :class="{'active': menu}">
					<div></div>
					<div></div>
					<div></div>
					<img src="{{ asset('images/headerClose.svg') }}" alt="close">
				</div>
			</div>

			@if (Route::is('home'))
				<div class="header__hide" x-show="menu" x-cloak>
					<div class="header__list">
						<nav>
							<ul>
								<li class="header__item active" @click="menu =false; $dispatch('menu-click')">
									<a href="#what">{{ __('home.What is Umchain?') }}</a>
								</li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#bepartner">{{ __('home.partner.h1') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#overview">Web 3.0</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#benefit">{{ __('home.menu.advantages') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#distribution">{{ __('home.menu.forWhom') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#benefit-partner">{{ __('home.menu.benefitPartner') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#benefit-investor">{{ __('home.menu.benefitInvestor') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#team">{{ __('home.utilityFunction.title') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#reg">{{ __('home.technicalFunction.title') }}</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#tok">Tokenomics</a></li>
								<li class="header__item" @click="menu =false; $dispatch('menu-click')"><a href="#map">{{ __('home.roadmap.title') }}</a></li>
							</ul>
						</nav>
					</div>
				</div>
			@endif

        </div>
    </div>
</header>
