<script setup>
	import { ref } from "vue";

	const showPass = ref(false);
	
	const props = defineProps({
		label: {
			type: String,
		},
		name: {
			type: String,
			required: true
		},
		class: {
			type: String,
		},
		errors: {
			type: Object,
			default: () => ({})
		}
	})
</script>

<template>
	<div :class="props.class">
		<div class="reg__name" v-if="props.label">{{ props.label }}</div>
		<div class="reg__field password__hide" x-data="{ showPass: false }">
			<input :type="showPass ? 'text' : 'password'" :name="props.name"
				class="focus:border-b-pink focus:ring-0">
			<div class="password__eye" @click="showPass = !showPass">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" stroke="#868686"
						stroke-linecap="round" />
					<circle cx="12" cy="12" r="3" stroke="#868686" stroke-linecap="round" />
				</svg>
			</div>
		</div>
		<div class="text-danger" v-text="props.errors[props.name]"></div>
	</div>
</template>
