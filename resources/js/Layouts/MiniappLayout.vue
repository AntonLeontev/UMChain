<script setup>
import Header from "@/Components/Miniapp/Header.vue";
import Footer from "@/Components/Miniapp/Footer.vue";
import Toasts from "../Components/Toasts.vue";
</script>

<template>
  <div class="wrapper">
    <Header />

    <main class="page">
      <slot />
    </main>

    <Footer />
    <Toasts />
  </div>
</template>
