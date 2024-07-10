<template>
  <router-view v-slot="{ Component, route }">
    <div :key="route.name" class="h-[100vh] font-sans antialiased">
      <Component :is="Component" />
    </div>
  </router-view>
</template>
