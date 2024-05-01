import { DateTime as dt } from "luxon";
import { i18n } from "../i18n";

export default function useISOToLocaleString(
    time,
    format = {
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
    }
) {
	console.log(i18n.global.locale);
    return dt
        .fromISO(time)
        .setLocale(i18n.global.locale.value)
        .toLocaleString(format);
}
