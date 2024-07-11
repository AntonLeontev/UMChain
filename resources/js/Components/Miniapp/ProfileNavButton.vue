<script setup>
const props = defineProps({
  to: Object,
  disabled: {
    type: Boolean,
    default: false,
  },
});
</script>

<template>
  <RouterLink :to="props.to" v-if="!props.disabled" class="button-navigation">
    <slot />
    <img
      src="/resources/images/miniapp/icons/arrow_white.svg"
      width="24"
      height="24"
      alt="Image"
    />
  </RouterLink>

  <div v-else class="button-navigation button-navigation_disable">
    <slot />
    <img
      src="/resources/images/miniapp/icons/arrow_white.svg"
      width="24"
      height="24"
      alt="Image"
    />
  </div>
</template>
