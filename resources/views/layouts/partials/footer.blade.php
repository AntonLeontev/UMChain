<footer class="mt-auto footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__logo">
                <a href="{{ LaravelLocalization::localizeUrl('/') }}">
                    <img src="{{ Vite::asset('resources/images/logo_bg.png') }}" alt="logo" width="116">
                </a>
            </div>
            <div class="footer__col">
                {{-- <ul>
                    <li><a href="#">{{ __('footer.What is a UMT token?') }}</a></li>
                    <li><a href="#">{{ __('footer.How to become a partner') }}</a></li>
                    <li><a href="#">{{ __('footer.Project overview') }}</a></li>
                    <li><a href="#">{{ __('footer.Benefits to investors') }}</a></li>
                    <li><a href="#">{{ __('footer.UMT token distribution') }}</a></li>

                </ul> --}}
            </div>
            <div class="footer__col footer__col--two">
                <ul>
                </ul>
            </div>
            <div class="footer__contacts">
                <div class="footer__connect">{{ __('footer.Contact us') }}</div>
                <div class="footer__how">{{ __('footer.If you have any questions, please email us:') }}</div>
                <div class="footer__mail">
                    <a href="mailto:{{ settings()->email }}">{{ settings()->email }}</a>
                </div>
                <div class="footer__social">
                    <ul class="footer__media">
                        {{-- <li><a target="_blank" href="https://www.instagram.com/unitedmarketorg/"><img
                                    src="{{ asset('images/instagram.svg') }}" alt="instagram"></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCns7aIJwqWZFPPwWXd6iq6g"><img
                                    src="{{ asset('images/youtube.svg') }}" alt="youtube"></a></li> --}}

                        <li>
							
							<a target="_blank" href="https://instagram.com/umchainorg">
								<img src="/images/social/instagram.png" alt="instagram" width="40px">
							</a>
							<a target="_blank" href="https://twitter.com/umchainorg">
								<img src="/images/social/twitter.png" alt="twitter" width="40px">
							</a>
							<a target="_blank" href="https://t.me/umchain">
								<img src="/images/social/telegram.png" alt="telegram" width="40px">
							</a>
							<a target="_blank" href="#">
								<img src="/images/social/linkedin.png" alt="linkedin" width="40px">
							</a>
							<a target="_blank" href="https://discord.gg/GgNJzN37">
								<img src="/images/social/discord.png" alt="instagram" width="40px">
							</a>
						</li>

                        {{-- <li><a target="_blank" href="https://www.facebook.com/United-Market-160182772502217"><img
                                    src="{{ asset('images/facebook.svg') }}" alt="facebook"></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__rights">
            © UMChain OU, Estonia, {{ date('Y') }}г.
        </div>
    </div>
</footer>
