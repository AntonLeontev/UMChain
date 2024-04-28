export default function useResetErrors(object) {
    Object.keys(object).forEach((key) => {
        object[key] = [];
    });
}
