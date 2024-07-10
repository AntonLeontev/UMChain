<script setup>
import Loader from "@/Components/Common/Loader.vue"

const props = defineProps({
  type: {
    type: String,
    default: "submit",
  },
  class: {
    type: String,
    default: "",
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  loader: {
	type: Boolean,
    default: false,
  },
});
</script>

<template>
  <button
    class="button button_app"
    :type="props.type"
    :class="props.class"
    :disabled="props.disabled"
  >
	<Loader v-if="props.loader" />

	<slot v-else />
  </button>
</template>
