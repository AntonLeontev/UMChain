<script setup>
import { ref } from "vue";

const props = defineProps({
  name: String,
  id: String,
  dimensions: Array,
  dimensionValue: String,
  value: Number,
  tabIndex: Number,
});

const active = ref(false);

function close() {
  active.value = false;
}
function toggle() {
  active.value = !active.value;
}

const activeDimension = props.dimensionValue
  ? ref(props.dimensions.find((el) => el.val === props.dimensionValue))
  : ref(props.dimensions[0]);


const dimensionVariants = ref(
  props.dimensions.filter((el) => el.val !== activeDimension.value.val)
);

function changeDimension(dimension) {
  activeDimension.value = dimension;

  let dimensions = [...props.dimensions];
  dimensionVariants.value = dimensions.filter((el) => el.label !== dimension.label);
}
</script>

<template>
  <!--activation add class _active -->
  <input type="hidden" :name="props.name + '_dimension'" :value="activeDimension.val" />
  <div class="input-box" :class="{ _active: active }">
    <input
      class="form__input input"
      :id="props.id"
      autocomplete="off"
      type="number"
      placeholder="_____"
      :name="props.name + '_value'"
      :min="activeDimension.min ?? 0"
      :max="activeDimension.max ?? 500"
      :step="activeDimension.step ?? 1"
      :tabindex="props.tabIndex ?? 0"
      :value="props.value"
      required
    />
    <button
      class="input-box__btn"
      type="button"
      @click="toggle"
      v-click-outside="close"
      tabindex="-1"
    >
      <span>{{ activeDimension.label }}</span>
      <img src="/resources/images/icons/dropdown.svg" alt="Image" />
    </button>
    <ul class="input-box__submenu">
      <li v-for="dimension in dimensionVariants" @click="changeDimension(dimension)">
        {{ dimension.label }}
      </li>
    </ul>
  </div>
  <!--end  -->
</template>

<style scoped>
input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}
</style>
