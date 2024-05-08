<script setup>
import FadeTransition from "@/Components/Common/FadeTransition.vue";
import Loader from "@/Components/Common/Loader.vue";

import { ref, onMounted } from "vue";
import axios from "axios";

import useUserStore from "@/stores/user";
import useToastsStore from "@/stores/toasts";

import useCatch from "@/composables/catch";

const calories = ref(null);
const caloriesLoading = ref(true);
const authError = ref(false);
const user = useUserStore().user;

onMounted(() => {
  getCalories();
});

const getCalories = () => {
  axios
    .get(route("api.user.google.calories"))
    .then((response) => (calories.value = response.data))
    .catch((error) => {
      if (error.response?.data === "invalid grant") {
        authError = true;
        useToastsStore().toastError($t("fit-profile.google-error"));
        return;
      }

      useCatch(error);
    })
    .finally(() => (caloriesLoading.value = false));
};
</script>

<template>
	<FadeTransition mode="out-in">
        <div
          v-if="caloriesLoading"
          class="flex justify-center p-5 mt-3 mb-3 rounded bg-pink"
        >
          <Loader class="w-8 h-8" />
        </div>
        <div v-else>
          <a
            v-if="authError"
            :href="route('google.auth')"
            class="inline-flex items-center justify-center w-full px-6 py-4 mb-3 font-semibold tracking-widest text-white transition duration-150 ease-in-out border rounded bg-pink border-pink hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none"
          >
            {{ $t("fit-profile.auth-btn") }}
          </a>
          <div v-else>
            <div class="p-5 mb-3 rounded bg-pink">
              {{ $t("fit-profile.spent") }}
              <span>{{ calories }}</span> {{ $t("fit-profile.cal") }}
            </div>
          </div>
        </div>
      </FadeTransition>
</template>
