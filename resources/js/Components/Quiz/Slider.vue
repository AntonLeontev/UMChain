<script setup>
import Slider from "@vueform/slider";

const props = defineProps({
  min: Number,
  max: Number,
  step: Number,
  tooltips: Boolean,
  value: Number,
  from: String,
  to: String,
});
</script>

<template>
  <div class="quiz-content__input-range input-range">
    <div class="input-range__input">
      <Slider
        :min="props.min"
        :max="props.max"
        :step="props.step"
        :tooltips="props.tooltips"
        :lazy="false"
        :value="props.value ?? props.min"
        @update="(e) => $emit('change', e)"
      />
      <div class="input-range__scale">
        <div class="input-range__bar" v-for="i in props.max - props.min + 1"></div>
      </div>
    </div>
    <div class="input-range__value">
      <span>{{ props.from }}</span>
      <span>{{ props.to }}</span>
    </div>
  </div>
</template>

<style src="@vueform/slider/themes/default.css"></style>
<style>
.input-range__input {
  position: relative;
}
.input-range__scale {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
  display: flex;
  justify-content: space-between;
}
.input-range__bar {
  width: 2px;
  height: 100%;
  background-color: #1f1f1f;
}
.slider-handle {
  z-index: 20;
}
.slider-base {
  position: static;
}
.slider-tooltip {
  border-color: #daf73a;
}

:root {
  --slider-radius: 0;
  --slider-bg: #daf73a;
  --slider-connect-bg: #daf73a;

  --slider-handle-height: 40px;
  --slider-height: 10px;
  --slider-handle-width: 40px;
  --slider-handle-ring-color: rgba(0, 0, 0, 0.32);
  --slider-handle-ring-width: 1px;
  --slider-handle-bg: #daf73a;

  --slider-tooltip-font-size: 1rem;
  --slider-tooltip-line-height: 1.25rem;
  --slider-tooltip-font-weight: 400;
  --slider-tooltip-min-width: 24px;
  --slider-tooltip-bg: #262626;
  --slider-tooltip-bg-disabled: #9ca3af;
  --slider-tooltip-color: #daf73a;
  --slider-tooltip-radius: 0;
  --slider-tooltip-py: 3px;
  --slider-tooltip-px: 7px;
  --slider-tooltip-arrow-size: 7px;
  --slider-tooltip-distance: 8px;
}

@media screen and (max-width: 768px) {
  :root {
    --slider-handle-height: 30px;
    --slider-handle-width: 30px;
  }
}
</style>
