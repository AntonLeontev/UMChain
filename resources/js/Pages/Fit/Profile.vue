<script setup>
import FadeTransition from "@/Components/Common/FadeTransition.vue";
import Loader from "@/Components/Common/Loader.vue";

import useUserStore from "@/stores/user";
import useToastsStore from "@/stores/toasts";

import useCatch from "@/composables/catch";
import useISOToFormatString from "@/composables/ISOToFormatString";

import axios from "axios";
import { ref, reactive, onMounted } from "vue";
import { useI18n } from "vue-i18n";
const { t: $t } = useI18n();

const user = useUserStore().user;
const trasactionsLoading = ref(true);
const caloriesLoading = ref(true);

const calories = ref(null);
const transactions = reactive([]);

onMounted(() => {
  getCalories();
  getTransactions();
});

const getCalories = () => {
  if (!user.google_authenticated) {
    caloriesLoading.value = false;
    return;
  }

  axios
    .get(route("api.user.google.calories"))
    .then((response) => (calories.value = response.data))
    .catch((error) => {
      if (error.response?.data === "invalid grant") {
        user.google_authenticated = false;
        useToastsStore().toastError($t("fit-profile.google-error"));
        return;
      }

      useCatch(error);
    })
    .finally(() => (caloriesLoading.value = false));
};

const getTransactions = () => {
  axios
    .get(route("api.transactions.index"))
    .then((resp) => {
      transactions.push(...resp.data);
    })
    .catch((error) => useCatch(error))
    .finally(() => {
      trasactionsLoading.value = false;
    });
};
</script>

<template>
    <div>
      <FadeTransition mode="out-in">
        <div
          v-if="caloriesLoading"
          class="flex justify-center p-5 mt-3 mb-3 rounded bg-pink"
        >
          <Loader class="w-8 h-8" />
        </div>
        <div v-else>
          <a
            v-if="!user.google_authenticated"
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

      <div class="p-5 rounded bg-pink">
        {{ $t("fit-profile.tokens") }}
        <span>{{ user.umt }} UMCT</span>
      </div>

      <FadeTransition mode="out-in">
        <div
          v-if="trasactionsLoading"
          class="flex justify-center p-5 mt-3 mb-3 rounded bg-pink"
        >
          <Loader class="w-8 h-8" />
        </div>
        <div v-else class="p-5 mt-3 mb-3 rounded bg-pink">
          <div v-if="transactions.length > 0">
            <div class="flex gap-5" v-for="transaction in transactions">
              <span>{{ useISOToFormatString(transaction.created_at) }}</span>
              <span>+ {{ transaction.amount }} UMCT</span>
            </div>
          </div>
          <div v-else>{{ $t("fit-profile.no-transactions") }}</div>
        </div>
      </FadeTransition>
    </div>
</template>
