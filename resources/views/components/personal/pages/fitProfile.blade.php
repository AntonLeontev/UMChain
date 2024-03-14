<div data-page="fitProfile" x-show="page === 'fitProfile'" x-cloak>
	@if (!auth()->user()->google_refresh_token)
		<a href="{{ route('google.auth') }}" class="inline-flex items-center justify-center px-6 py-4 font-semibold tracking-widest text-white transition duration-150 ease-in-out border rounded bg-pink border-pink hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none">
			Google auth
		</a>
	@else
		<div
			class="p-5 rounded bg-pink"
			x-data="{
				calories: null,

				init() {
					axios
						.get(route('user.google.calories'))
						.then(response => this.calories = response.data)
				},
			}"
		>
			Spent for today:
			<span x-text="calories"></span> Cal
		</div>
	@endif
</div>
