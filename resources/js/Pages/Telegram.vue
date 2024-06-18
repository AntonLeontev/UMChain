<script setup>
import { onMounted } from "vue";
import { initThemeParams } from "@tma.js/sdk";

const [themeParams] = initThemeParams();

onMounted(() => {
  let root = document.querySelector(":root");
  root.style.setProperty("--tg-theme-bg-color", themeParams.bgColor);
  root.style.setProperty("--tg-theme-text-color", themeParams.textColor);
});
</script>

<template>
  <div class="telegram-loader">
    <a href="/quiz">quiz</a>
    <a href="/cabinet/personal">personal</a>
  </div>
</template>

<style scoped>
.telegram-loader {
  width: 100vw;
  height: 100vh;
  background-color: var(--tg-theme-bg-color);
  color: var(--tg-theme-text-color);
}
</style>
