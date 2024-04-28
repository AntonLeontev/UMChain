<script setup>
const props = defineProps({
	type: {
		type: String,
		defailt: 'submit',
	},
	class: {
		type: String,
		default: '',
	}
})
</script>

<template>
<button :type="props.type" class="inline-flex items-center gap-2 px-6 py-4 bg-none border border-transparent font-semibold text-white tracking-widest hover:!text-pink hover:border focus:outline-none disabled:opacity-25 transition ease-in-out duration-300" :class="props.class">
    <slot />
</button>
</template>
