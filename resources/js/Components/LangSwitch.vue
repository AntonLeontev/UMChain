<script setup>
import { ref } from "vue";

const show = ref(false);
const locales = ["ru", "en"];

function close() {
	show.value = false;
}


</script>

<template>
    <div v-click-outside="close">
        <div>
            <div class="cursor-pointer lang__active" @click="show = true">
                lang
            </div>

            <div
                class="transition lang__arrow"
                @click="show = true"
                :class="{ 'rotate-180': show }"
            >
                <img src="/resources/images/svg/langArrow.svg" alt="arrow" />
            </div>
        </div>
        <div class="lang__list" v-show="show">
            <div class="lang__item" v-for="locale in locales">
                <a rel="alternate" hreflang="#" href="#">
                    {{ locale }}
                </a>
            </div>
        </div>
    </div>
</template>
