<script setup>
const props = defineProps({
  type: {
    type: String,
    defailt: "submit",
  },
  class: {
    type: String,
    default: "",
  },
  disabled: {
    type: Boolean,
    default: false,
  },
});
</script>

<template>
  <button
    class="inline-flex items-center justify-center gap-2 px-6 py-4 font-semibold tracking-widest text-white transition duration-150 ease-in-out rounded shadow-sm focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 bg-pink border-pink hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none"
    :type="props.type"
    :class="props.class"
    :disabled="props.disabled"
  >
    <slot />
  </button>
</template>
