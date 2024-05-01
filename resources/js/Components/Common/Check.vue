<script setup>
const model = defineModel();

const props = defineProps({
  name: {
    type: String,
    required: true,
  },
  type: {
    type: String,
    default: "check",
  },
  checked: {
    type: Boolean,
    default: false,
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  class: String,
  value: String,
});
</script>

<template>
  <label class="relative flex items-center gap-2 cursor-pointer">
    <input
      :type="props.type"
      :name="props.name"
      :value="props.value"
      :disabled="props.disabled"
      v-model="model"
      class="pl-3 after:rounded"
    />
    <span :class="props.disabled ? 'text-[#777]' : ''">
      <slot></slot>
    </span>
  </label>
</template>
