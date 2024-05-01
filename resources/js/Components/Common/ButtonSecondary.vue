<script setup>
const props = defineProps({
	type: {
		type: String,
		defailt: 'submit',
	},
	class: {
		type: String,
		default: '',
	},
	disabled: {
		type: Boolean,
		default: false,
	}
})
</script>

<template>
<button 
	class="inline-flex items-center justify-center gap-2 px-6 py-4 font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-black rounded shadow-sm hover:text-pink focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" 
	:type="props.type" 
	:class="props.class"
	:disabled="props.disabled"
>
    <slot />
</button>
</template>
