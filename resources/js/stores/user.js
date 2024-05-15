import { defineStore } from "pinia";
import { ref } from "vue";
import axios from "axios";

const useUserStore = defineStore("user", () => {
    const user = ref(null);
    const isAuthenticated = ref(null);

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
            location.replace("/");
        });
    }

    return { user, isAuthenticated, logout, getUser, login };
});

export default useUserStore;
