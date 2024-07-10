<script setup>
import useUserStore from "@/stores/user";

const user = useUserStore().user;
</script>

<template>
  <header class="header-mini">
    <div class="header-mini__container">
      <router-link :to="{name: 'miniapp.profile'}" class="header-mini__user">
        <img :src="route('api.user.telegram-image', user.telegram_id ?? 1)" alt="" />
        {{ user.name }}
      </router-link>
      <!-- <a href="" class="header-mini__notifications notifications">
        <img src="/resources/images/miniapp/icons/bell.svg" alt="Image" />
        <span>5</span>
      </a> -->
    </div>
  </header>
</template>
