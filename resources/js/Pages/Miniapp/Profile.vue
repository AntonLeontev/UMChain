<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
import ProfileNavButton from "@/Components/Miniapp/ProfileNavButton.vue";
</script>

<template>
  <MiniappLayout>
    <div class="hero-app">
      <div class="hero-app__container">
        <div class="hero-app__navigation">
          <ProfileNavButton :to="{ name: 'miniapp.personal' }">
            Персональные данные
          </ProfileNavButton>
          <ProfileNavButton :to="{ name: 'miniapp.activity' }" :disabled="true">
            Моя активность
          </ProfileNavButton>
          <ProfileNavButton :to="{ name: 'miniapp.calculator' }">
            Калькулятор
          </ProfileNavButton>
          <ProfileNavButton :to="{ name: 'miniapp.integrations' }" :disabled="true">
            Интеграции
          </ProfileNavButton>
          <ProfileNavButton :to="{ name: 'miniapp.friends' }" :disabled="true">
            Друзья
          </ProfileNavButton>
          <ProfileNavButton :to="{ name: 'miniapp.bounty' }" :disabled="true">
            Ежедневная награда
          </ProfileNavButton>
          <ProfileNavButton :to="{ name: 'miniapp.personal' }" :disabled="true">
            Статистика
          </ProfileNavButton>
        </div>
      </div>
    </div>
  </MiniappLayout>
</template>
