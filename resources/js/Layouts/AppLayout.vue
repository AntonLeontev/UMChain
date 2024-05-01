<script setup>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import Toasts from "../Components/Toasts.vue";
</script>

<template>
  <div class="flex flex-col grow shrink-0 basis-auto">
    <Header />

    <main class="grow">
      <slot />
    </main>
  </div>

  <Footer />
  <Toasts />
</template>
