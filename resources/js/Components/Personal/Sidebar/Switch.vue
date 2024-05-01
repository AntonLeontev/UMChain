<script setup>
import SwitchButton from "./SwitchButton.vue";

import { computed } from "vue";
import { useI18n } from "vue-i18n";
const { t: $t } = useI18n();

const props = defineProps({
  buttons: {
    type: Array,
  },
  activeButton: {
    type: String,
    default: "profile",
  },
});

const lineClass = computed(() => ({
  "left-[0%] w-[50%]": props.activeButton === "profile",
  "left-[50%] w-[50%]": props.activeButton === "fit",
}));
</script>

<template>
  <div class="main__top">
    <ul class="relative main__top--list">
      <SwitchButton v-for="button in buttons" @click="$emit('tabSwitch', button.name)">
        {{ $t("sidebar.tabs." + button.name) }}
      </SwitchButton>

      <div class="absolute bottom-0 w-full border-b-4 border-[#555] z-1"></div>
      <div
        class="absolute bottom-0 w-1/2 transition-all duration-300 border-b-4 border-pink z-2"
        :class="lineClass"
      ></div>
    </ul>
  </div>
</template>
