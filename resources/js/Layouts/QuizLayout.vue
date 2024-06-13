<script setup>
import Header from "@/Components/Quiz/Header.vue";
import Footer from "@/Components/Quiz/Footer.vue";
</script>

<template>
  <div class="wrapper">
    <Header />

    <slot />

    <Footer />
  </div>
</template>
