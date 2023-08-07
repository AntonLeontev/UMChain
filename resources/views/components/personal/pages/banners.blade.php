<div data-page="banners" class="flex w-full px-2 mb-10 mt-[-130px]" x-show="page === 'banners'" x-cloak x-data="banners">
	<div class="flex flex-col w-full gap-y-2">
		<div class="mt-8 text-xl text-center">{{ __('cabinet/banners.title') }}</div>
		<div class="sticky top-[5px] w-full flex gap-x-2 px-5">
			<div class="relative flex items-center justify-center px-2 bg-black rounded cursor-pointer" @pointerdown="copy">
				<img width="30px" src="/images/copy.svg" alt="copy">
				<div class="absolute p-2 rounded bg-grey left-[60px]" x-show="copyShow" x-transition>{{ __('cabinet/banners.copied') }}</div>
			</div>
			<textarea class="w-full rounded resize-none" x-text="code" x-ref="textarea"></textarea>
		</div>
		@foreach (banners() as $banner)
			<div 
				class="flex transition-all border-2 border-transparent rounded cursor-pointer gap-x-4" 
				:class="active == '{{ $banner->id }}' && '!border-pink border-2'"
				data-image="{{ config('app.url') . '/storage/' . $banner->image }}" 
				data-url="{{ $banner->url }}" 
				data-id="{{ $banner->id }}" 
				@click="generate"
				@click="activate"
			>
				<div class="w-3/4 h-[250px] bg-[#35353517] overflow-hidden flex justify-center items-center">
					<img src="{{ '/storage/' . $banner->image }}" class="max-h-[100%] max-w-[100%]" alt="banner">
				</div>
				<div class="flex items-center justify-center">
					<span>{{ $banner->url }}</span>
				</div>
			</div>
		@endforeach
	</div>
</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('banners', () => ({
			code: '',
			active: null,
			copyShow: false,

			generate() {
				const url = this.$el.dataset.url + '?ref=' + this.user.active_ref_link.id;
				const image = this.$el.dataset.image;

				this.code = `<a href="${url}" rel="nofollow"><img src="${image}" alt="banner"></a>`;
				
				this.active = this.$el.dataset.id;
			},
			copy() {
				navigator.clipboard.writeText(this.code)
					.then(() => {
						this.copyShow = true;
						setTimeout(() => this.copyShow = false, 600)
					})
			},
		}))
	})
</script>
