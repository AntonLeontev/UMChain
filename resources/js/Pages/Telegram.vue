<script setup>
import { onMounted } from "vue";
import { initThemeParams } from "@tma.js/sdk";

import useUserStore from "../stores/user";
import Loader from "@/Components/Common/CircleLoader.vue";

const user = useUserStore().user;

let redirect = user.quiz_is_done ? "/stub" : "/quiz";

window.location.href = redirect;

const [themeParams] = initThemeParams();

onMounted(() => {
    let root = document.querySelector(":root");
    root.style.setProperty("--tg-theme-bg-color", themeParams.bgColor);
    root.style.setProperty("--tg-theme-text-color", themeParams.textColor);
});
</script>

<template>
    <div class="telegram-loader">
        <Loader class="loader" />
    </div>
</template>

<style scoped>
.telegram-loader {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
    background-color: var(--tg-theme-bg-color);
    color: var(--tg-theme-text-color);
}

.loader {
    width: 80px;
    height: 80px;
    color: var(--tg-theme-text-color);
}
</style>
