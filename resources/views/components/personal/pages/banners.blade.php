<div data-page="banners" class="flex w-full px-2 mb-10 mt-[-130px]" x-show="page === 'banners'" x-cloak x-data="banners">
	<div class="flex flex-col w-full gap-y-2">
		<div class="mt-[100px] md:mt-8 text-xl text-center">{{ __('cabinet/banners.title') }}</div>
		<div class="sticky top-[5px] w-full flex gap-x-2 px-5 z-[10]">
			<div class="relative flex items-center justify-center px-2 text-white transition bg-black rounded cursor-pointer hover:text-pink" @pointerdown="copy">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
				</svg>
				<div class="text-black absolute p-2 rounded bg-grey left-[60px]" x-show="copyShow" x-transition>{{ __('cabinet/banners.copied') }}</div>
			</div>
			<textarea class="w-full rounded resize-none" x-text="code" x-ref="textarea"></textarea>
		</div>
		
		@foreach (banners() as $banner)
			<div 
				class="flex flex-col transition-all border-2 border-transparent rounded cursor-pointer md:flex-row gap-x-4" 
				:class="active == '{{ $banner->id }}' && '!border-pink border-2'"
				data-image="{{ config('app.url') . '/storage/' . $banner->image }}" 
				data-url="{{ $banner->url }}" 
				data-id="{{ $banner->id }}" 
				@click="generate"
				@click="activate"
			>
				<div class="md:w-1/2 xl:w-3/4 h-[250px] bg-[#35353517] overflow-hidden flex justify-center items-center">
					<img src="{{ '/storage/' . $banner->image }}" class="max-h-[100%] max-w-[100%]" alt="banner">
				</div>
				<div class="relative flex flex-col items-center justify-center py-1 md:w-1/2 xl:w-1/4 gap-y-2">
					<div class="break-all">{{ $banner->url . '?ref=' . auth()->user()->activeRefLink->id }}</div>
					<div class="relative flex gap-x-2" x-data="{
						copyShow: false,

						copy() {
							navigator.clipboard.writeText(this.$el.dataset.text)
								.then(() => {
									this.copyShow = true;
									setTimeout(() => this.copyShow = false, 600)
								})
						},
					}">
						<a 
							href="{{ '/storage/' . $banner->image }}" 
							download 
							class="flex items-center px-3 py-2 text-white transition bg-black rounded hover:text-pink"
							@click.stop
						>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
							</svg>
						</a>
						<button 
							class="flex items-center px-3 py-2 text-white transition bg-black rounded hover:text-pink" 
							data-text="{{ $banner->url . '?ref=' . auth()->user()->activeRefLink->id }}"
							@click.stop="copy" 
						>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
							</svg>
						</button>
						<div class="absolute p-2 rounded bg-grey right-[-75px] top-[0px]" x-show="copyShow" x-transition x-cloack>{{ __('cabinet/banners.copied') }}</div>
					</div>
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
