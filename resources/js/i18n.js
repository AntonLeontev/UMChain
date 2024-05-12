import { nextTick } from "vue";
import { createI18n } from "vue-i18n";
import axios from "axios";

export const SUPPORT_LOCALES = ["en", "ru"];

export const i18n = createI18n({
    legacy: false,
    locale: "ru",
    fallbackLocale: "en",
});

loadLocaleMessages(i18n, i18n.global.locale.value);
setI18nLanguage(i18n, i18n.global.locale.value);

export function setI18nLanguage(i18n, locale) {
    if (i18n.mode === "legacy") {
        i18n.global.locale = locale;
    } else {
        i18n.global.locale.value = locale;
    }

    axios.defaults.headers.common["Accept-Language"] = locale;

    document.querySelector("html").setAttribute("lang", locale);
}

export async function loadLocaleMessages(i18n, locale) {
    // load locale messages with dynamic import
    const messages = await import(`./locales/${locale}.json`);
    // set locale and locale message
    i18n.global.setLocaleMessage(locale, messages.default);

    return nextTick();
}
