<header class="relative header z-[60]">
    <div class="container">
        <div class="header__inner" x-data="{menu: false}" @buy-click.window="menu = true">
            <div class="header__logo">
                <a href="/">
                   <svg width="168" height="100" viewBox="0 0 168 100" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g style="mix-blend-mode:color-dodge">
						<path d="M116.9 70.65L123.425 68.85V36.375L117.125 36.9L111.575 43.575L106.1 43.125C106.1 38.975 106.3 33.75 106.7 27.45H153.65C154.05 33.75 154.25 38.975 154.25 43.125L148.85 43.575L143.225 36.9L137.075 36.375V65.85C137.075 67.05 137.15 67.825 137.3 68.175C137.45 68.525 137.875 68.875 138.575 69.225L143.225 72L142.925 78H117.275L116.9 70.65Z" fill="#2A2A2A"/>
						</g>
						<path d="M82.1061 27.541H71.6609V50.1438H82.1061V27.541Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M103.307 26.8994C108.235 28.2584 112.629 31.0958 115.895 35.029L107.824 41.7302C105.929 39.4473 103.379 37.8005 100.518 37.0117C97.6576 36.2229 94.6239 36.3301 91.8263 37.3189C89.0285 38.3076 86.6011 40.1303 84.8713 42.5413C84.7444 42.718 84.6218 42.8972 84.5035 43.0789V29.1552C85.723 28.4765 87.0028 27.898 88.3311 27.4286C93.1513 25.7251 98.378 25.5404 103.307 26.8994ZM82.1063 30.6737C79.8982 32.2548 77.9497 34.1942 76.3482 36.4264C73.3681 40.5803 71.7328 45.5481 71.6634 50.6601C71.5939 55.7721 73.0932 60.7825 75.9595 65.0159C78.8258 69.2493 82.921 72.5022 87.6931 74.3361C92.4653 76.17 97.685 76.4969 102.649 75.2724C107.612 74.0479 112.081 71.331 115.453 67.4882L107.568 60.5699C105.611 62.8003 103.017 64.3772 100.136 65.088C97.2554 65.7986 94.2258 65.6091 91.4559 64.5447C88.686 63.4801 86.3092 61.5921 84.6456 59.1349C82.9819 56.6779 82.066 53.7959 82.1063 50.8288C82.11 50.5512 82.1063 50.2295 82.1063 49.9726V30.6737Z" fill="#ED0474"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5309 51.8561V27.541H0.0856934V51.8561C0.0856934 64.3866 10.2436 74.5444 22.774 74.5444C27.2107 74.5444 31.3497 73.271 34.846 71.0698V74.4588H45.2912L45.4624 54.5958C45.4624 53.5684 45.4624 52.8045 45.4624 51.8561V44.1631L52.8309 55.6999L52.8254 55.7088L53.0093 55.9794L58.3049 64.2705H58.4761H58.6473L63.9429 55.9794L64.1268 55.7088L64.1213 55.6999L82.1062 27.541H70.4624L58.4761 46.6842L46.4898 27.541H45.4624H45.2912H35.0172H34.846V53.9081C33.8698 59.6929 28.8365 64.0992 22.774 64.0992C16.0123 64.0992 10.5309 58.6177 10.5309 51.8561Z" fill="white"/>
					</svg>
                </a>
            </div>

			<div class="flex items-center gap-x-5 md:gap-x-10">
				<div class="header__lang">
					@include('layouts.partials.lang-list')
				</div>

				@unless (request()->routeIs('cabinet.*'))
					<div class="header__person active">
						<a href="{{ LaravelLocalization::localizeUrl(route('cabinet.portfolio')) }}">
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
								<li class="header__item active" @click="menu =false; $dispatch('menu-click')"><a href="#what">{{ __('home.What is Umchain?') }}</a></li>
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
