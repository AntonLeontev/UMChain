<script setup>
import { inject } from "vue";
const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");
</script>

<template>
  <!-- button on click add to class button -> button_active (activation loader)-->
  <button class="button" type="button" @click="nextPage">
    <span class="button__loader"></span>
    <span>Продолжить</span>
  </button>
  <!--end button -->
</template>
