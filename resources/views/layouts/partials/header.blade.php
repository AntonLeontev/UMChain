<header class="header">
    <div class="container">
        <div class="header__inner" x-data="{menu: false}">
            <div class="header__logo">
                <a href="/">
                    <svg width="116" height="50" viewBox="0 0 116 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_203_216)">
						<path d="M82.1061 1.54102H71.6609V24.1438H82.1061V1.54102Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M103.307 0.89944C108.235 2.25844 112.629 5.09577 115.895 9.02899L107.824 15.7302C105.929 13.4473 103.379 11.8005 100.518 11.0117C97.6576 10.2229 94.6239 10.3301 91.8263 11.3189C89.0285 12.3076 86.6011 14.1303 84.8713 16.5413C84.7444 16.718 84.6218 16.8972 84.5035 17.0789V3.15519C85.723 2.47647 87.0028 1.89798 88.3311 1.4286C93.1513 -0.274872 98.378 -0.459557 103.307 0.89944ZM82.1063 4.6737C79.8982 6.25479 77.9497 8.19425 76.3482 10.4264C73.3681 14.5803 71.7328 19.5481 71.6634 24.6601C71.5939 29.7721 73.0932 34.7825 75.9595 39.0159C78.8258 43.2493 82.921 46.5022 87.6931 48.3361C92.4653 50.17 97.685 50.4969 102.649 49.2724C107.612 48.0479 112.081 45.331 115.453 41.4882L107.568 34.5699C105.611 36.8003 103.017 38.3772 100.136 39.088C97.2554 39.7986 94.2258 39.6091 91.4559 38.5447C88.686 37.4801 86.3092 35.5921 84.6456 33.1349C82.9819 30.6779 82.066 27.7959 82.1063 24.8288C82.11 24.5512 82.1063 24.2295 82.1063 23.9726V4.6737Z" fill="#ED0474"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5309 25.8561V1.54102H0.0856934V25.8561C0.0856934 38.3866 10.2436 48.5444 22.774 48.5444C27.2107 48.5444 31.3497 47.271 34.846 45.0698V48.4588H45.2912L45.4624 28.5958C45.4624 27.5684 45.4624 26.8045 45.4624 25.8561V18.1631L52.8309 29.6999L52.8254 29.7088L53.0093 29.9794L58.3049 38.2705H58.4761H58.6473L63.9429 29.9794L64.1268 29.7088L64.1213 29.6999L82.1062 1.54102H70.4624L58.4761 20.6842L46.4898 1.54102H45.4624H45.2912H35.0172H34.846V27.9081C33.8698 33.6929 28.8365 38.0992 22.774 38.0992C16.0123 38.0992 10.5309 32.6177 10.5309 25.8561Z" fill="white"/>
						</g>
						<defs>
						<clipPath id="clip0_203_216">
						<rect width="115.925" height="50" fill="white"/>
						</clipPath>
						</defs>
                    </svg>
                </a>
            </div>
            <div class="header__lang header__lang--mob">
                @include('layouts.partials.lang-list')
            </div>
            <div class="header__btn" @click="menu = !menu" :class="{'active': menu}">
                <div></div>
                <div></div>
                <div></div>
                <img src="{{ asset('images/headerClose.svg') }}" alt="close">
            </div>
            <div class="header__hide" x-show="menu" x-cloak>
                <div class="header__person active">
                    <a href="/login">
                        <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_17:597" fill="white">
                                <rect width="37.4" height="34" rx="1.36"/>
                            </mask>
                            <rect width="37.4" height="34" rx="1.36" stroke="white" stroke-width="4"
                                  mask="url(#path-1-inside-1_17:597)"/>
                            <path
                                d="M10.2002 25.8402C10.2002 22.5252 14.6202 22.5252 16.8302 20.3152C17.9352 19.2102 14.6202 19.2102 14.6202 13.6852C14.6202 10.0022 16.0932 8.16016 19.0402 8.16016C21.9872 8.16016 23.4602 10.0022 23.4602 13.6852C23.4602 19.2102 20.1452 19.2102 21.2502 20.3152C23.4602 22.5252 27.8802 22.5252 27.8802 25.8402"
                                stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
                <div class="header__list">
                    <nav>
                        <ul>
                            <li class="header__item active"><a href="/#what">{{__('header.What is a UMT token?')}}</a></li>
                            <li class="header__item"><a href="/#bepartner">{{__('header.How to become a partner')}}</a></li>
                            <li class="header__item"><a href="/#overview">{{__('header.Project overview')}}</a></li>
                            <li class="header__item"><a href="/#benefit">{{__('header.Benefits to investors')}}</a></li>
                            <li class="header__item"><a href="/#distribution">{{__('header.UMT token distribution')}}</a></li>
                            <li class="header__item"><a href="/#about">{{__('header.About us')}}</a></li>
                            <li class="header__item"><a href="/#team">{{__('header.Our team')}}</a></li>
                            <li class="header__item"><a href="/#reg">{{__('header.Contact us')}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__menu">
                <div class="header__lang">
					@include('layouts.partials.lang-list')
                </div>
                <div class="header__person active">
                    <a href="{{route('login')}}">
                        <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_17:597" fill="white">
                                <rect width="37.4" height="34" rx="1.36"/>
                            </mask>
                            <rect width="37.4" height="34" rx="1.36" stroke="white" stroke-width="4"
                                  mask="url(#path-1-inside-1_17:597)"/>
                            <path
                                d="M10.2002 25.8402C10.2002 22.5252 14.6202 22.5252 16.8302 20.3152C17.9352 19.2102 14.6202 19.2102 14.6202 13.6852C14.6202 10.0022 16.0932 8.16016 19.0402 8.16016C21.9872 8.16016 23.4602 10.0022 23.4602 13.6852C23.4602 19.2102 20.1452 19.2102 21.2502 20.3152C23.4602 22.5252 27.8802 22.5252 27.8802 25.8402"
                                stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
