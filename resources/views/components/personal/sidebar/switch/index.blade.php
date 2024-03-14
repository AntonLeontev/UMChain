<ul class="relative main__top--list">
	<x-personal.sidebar.switch.button
		x-on:click="$dispatch('switch', {value: 'profile'})"
		x-bind:class="{'!text-pink': menu === 'profile'}"
	>
		{{ __('cabinet/sidebar.profile') }}
	</x-personal.sidebar.switch.button>


	<x-personal.sidebar.switch.button
		x-on:click="$dispatch('switch', {value: 'wallet'})"
		x-bind:class="{'!text-pink': menu === 'wallet' || menu === 'order'}"
	>
		{{ __('cabinet/sidebar.wallet') }}
	</x-personal.sidebar.switch.button>

	<x-personal.sidebar.switch.button
		x-on:click="$dispatch('switch', {value: 'fit'})"
		x-bind:class="{'!text-pink': menu === 'fit'}"
	>
		{{ __('cabinet/sidebar.fit') }}
	</x-personal.sidebar.switch.button>
	
	<div class="absolute bottom-0 w-full border-b-4 border-[#555] z-1"></div>
	<div 
		class="absolute bottom-0 w-1/3 transition-all duration-300 border-b-4 border-pink z-2" 
		:class="{'left-0': menu === 'profile', 'left-[33.3%]': menu === 'wallet' || menu === 'order', 'left-[66.6%]': menu === 'fit'}">
	</div>
</ul>
