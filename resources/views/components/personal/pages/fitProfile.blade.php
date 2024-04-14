<div data-page="fitProfile" x-show="page === 'fitProfile'" x-cloak>
	<div x-data="{
		calories: null,
		authenticated: {{ auth()->user()->google_refresh_token ? 'true' : 'false' }},
		tokens: {{ auth()->user()->umt }},

		init() {
			axios
				.get(route('user.google.calories'))
				.then(response => this.calories = response.data)
				.catch(error => {
					if (error.response.data === 'invalid grant') {
						this.authenticated = false
						this.$dispatch('toast', {type: 'error', text: 'Ошибка авторизации в Google. Нужно авторизоваться заново'})
						return
					}

					this.$dispatch('toast', {type: 'error', text: error.response.data.message})
				})
		},
	}">
		<template x-if="!authenticated">
			<a href="{{ route('google.auth') }}" class="inline-flex items-center justify-center px-6 py-4 font-semibold tracking-widest text-white transition duration-150 ease-in-out border rounded bg-pink border-pink hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none">
				Google auth
			</a>
		</template>
		<template x-if="authenticated">
			<div>
				<div class="p-5 mb-3 rounded bg-pink">
					Spent for today:
					<span x-text="calories"></span> Cal
				</div>
				<div class="p-5 rounded bg-pink">
					Total tokens:
					<span x-text="tokens"></span>
				</div>
			</div>
		</template>
	</div>
</div>
