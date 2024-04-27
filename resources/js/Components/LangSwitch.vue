<script setup>
import { ref } from "vue";
import { i18n, loadLocaleMessages, setI18nLanguage } from "@/i18n";

const show = ref(false);

function close() {
	show.value = false;
}

function changeLocale(locale) {
	loadLocaleMessages(i18n, locale);

	setI18nLanguage(i18n, locale);
}
</script>

<template>
    <div v-click-outside="close">
        <div>
            <div class="cursor-pointer lang__active" @click="show = true">
                {{ $i18n.locale }}
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
            <div class="lang__item" v-for="locale in $i18n.availableLocales" :key="`locale-${locale}`" @click="close">
				<a @click="changeLocale(locale)">{{ locale }}</a>
            </div>
        </div>
    </div>
</template>
