import { defineStore } from "pinia";
import { ref } from "vue";

const usePersonalNavigationStore = defineStore("personal-navigation", () => {
    const activeTab = ref("fit");

    return { activeTab };
});

export default usePersonalNavigationStore;
