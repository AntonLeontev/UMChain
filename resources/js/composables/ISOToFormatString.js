import { DateTime as dt } from "luxon";
import { i18n } from "../i18n";

export default function useISOToFormatString(time, format = "DD") {
    return dt.fromISO(time).setLocale(i18n.global.locale).toFormat(format);
}
