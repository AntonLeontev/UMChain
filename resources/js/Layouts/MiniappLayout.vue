<script setup>
import Header from "@/Components/Miniapp/Header.vue";
import Footer from "@/Components/Miniapp/Footer.vue";
</script>

<template>
  <div class="wrapper">
    <Header />

    <slot />

    <Footer />
  </div>
</template>
