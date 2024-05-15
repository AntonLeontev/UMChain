<script setup>
import LangSwitch from "./LangSwitch.vue";
import PersonalNavigation from "@/Components/Personal/Sidebar/PersonalNavigation.vue";

import { ref } from "vue";
import { useRoute } from "vue-router";

const menu = ref(false);
const route = useRoute();
</script>

<template>
  <header class="relative header z-[60]">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo">
          <a href="/">
            <img src="/resources/images/svg/logo.svg" alt="logo" width="116" />
          </a>
        </div>

        <div class="flex items-center gap-x-5 md:gap-x-10">
          <div class="header__lang">
            <LangSwitch />
          </div>

          <div class="header__person active" v-if="route.name === 'home'">
            <router-link :to="{ name: 'personal' }">
              <svg
                width="38"
                height="34"
                viewBox="0 0 38 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  width="37.4"
                  height="34"
                  rx="1.36"
                  stroke="white"
                  stroke-width="4"
                  mask="url(#path-1-inside-1_17:597)"
                />
                <path
                  d="M10.2002 25.8402C10.2002 22.5252 14.6202 22.5252 16.8302 20.3152C17.9352 19.2102 14.6202 19.2102 14.6202 13.6852C14.6202 10.0022 16.0932 8.16016 19.0402 8.16016C21.9872 8.16016 23.4602 10.0022 23.4602 13.6852C23.4602 19.2102 20.1452 19.2102 21.2502 20.3152C23.4602 22.5252 27.8802 22.5252 27.8802 25.8402"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                />
              </svg>
            </router-link>
          </div>

          <div
            class="header__btn w-[30px]"
            @click="menu = !menu"
            v-if="route.name !== 'home'"
          >
            <div></div>
            <div></div>
            <div></div>
            <img src="/resources/images/svg/headerClose.svg" alt="close" v-show="menu" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <div
    id="mobile-menu"
    class="absolute md:hidden top-0 w-full h-full pt-[100px] pb-[100px] px-3 bg-black overflow-y-auto z-50"
    v-show="menu"
  >
    <PersonalNavigation />
  </div>
</template>
