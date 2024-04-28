import { defineStore } from "pinia";
import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const useUserStore = defineStore("user", () => {
    const user = ref(null);
    const isAuthenticated = ref(null);
    const router = useRouter();

    async function login(email, password) {
        await axios.post("/login", {
            email: email,
            password: password,
        });
    }
    async function getUser() {
        await axios
            .get(route("api.user"))
            .then((res) => {
                user.value = res.data;
                isAuthenticated.value = true;
            })
            .catch(() => {
                isAuthenticated.value = false;
            });
    }

    function logout() {
        axios.post(route("logout")).then(() => {
            user.value = null;
            isAuthenticated.value = null;
            router.push({ name: "home" });
        });
    }

    return { user, isAuthenticated, logout, getUser, login };
});

export default useUserStore;
