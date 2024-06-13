<script setup>
import { inject } from "vue";
const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");
</script>

<template>
  <div class="quiz__progress progress">
    <button class="progress__back" @click="prevPage">
      <svg
        width="7"
        height="12"
        viewBox="0 0 7 12"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M6 1L1 6L6 11"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </button>
    <div class="progress__line">
      <div
        class="progress__value"
        :style="{
          width: ((quizPage + 1) / componentsCount) * 100 + '%',
          transition: 'width 0.3s',
        }"
      ></div>
    </div>
    <div class="progress__num">{{ quizPage + 1 }}/{{ componentsCount }}</div>
  </div>
</template>
