<script setup>
import Header from "@/Components/Miniapp/Header.vue";
import Footer from "@/Components/Miniapp/Footer.vue";
</script>

<template>
  <div class="wrapper">
    <Header />

	 <main class="page">
 	   <slot />
    </main>

    <Footer />
  </div>
</template>
