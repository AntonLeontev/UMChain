<script setup>
const props = defineProps({
	mode: {
		type: String,
		default: '',
	}
})
</script>

<template>
  <Transition name="fade" :mode="props.mode">
    <slot></slot> 
  </Transition>
</template>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
