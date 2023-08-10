<div x-data="{ show: false }" @click.outside="show = false">
    <div class="cursor-pointer lang__active" @click="show = true">{{ LaravelLocalization::getCurrentLocale() }}</div>
    <div class="lang__list" x-show="show" x-transition x-cloak>
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
			@unless ($localeCode === 'ru')
				<div class="lang__item">
					<a rel="alternate" hreflang="{{ $localeCode }}"
						href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
						{{ $localeCode }}
					</a>
				</div>
			@endunless
        @endforeach
    </div>
    <div class="transition lang__arrow" @click="show = !show" :class="{'rotate-180': show}">
        <img src="{{ asset('images/langArrow.svg') }}" alt="">
    </div>
</div>
