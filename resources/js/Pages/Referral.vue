<script setup>
import FadeTransition from "@/Components/Common/FadeTransition.vue";
import Loader from "@/Components/Common/Loader.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import useUserStore from "@/stores/user";
import useCatch from "@/composables/catch";

import axios from "axios";
import { ref, computed, reactive, onMounted } from "vue";

const user = useUserStore().user;
const loading = ref(false);
const formIsSent = ref(false);
const copyShow = ref(false);

const reflink = computed(() => {
  return location.origin + "?ref=" + user.active_ref_link.id;
});

const submit = () => {
  loading.value = true;
  axios
    .post(route("api.reflinks.create"))
    .then((response) => {
      formIsSent.value = true;
      useUserStore().getUser();
    })
    .catch((error) => useCatch(error))
    .finally(() => {
      loading.value = false;
    });
};

const copy = () => {
  navigator.clipboard
    .writeText(location.origin + "?ref=" + user.active_ref_link.id)
    .then(() => {
      copyShow.value = true;
      setTimeout(() => {
        copyShow.value = false;
      }, 600);
    });
};

const refDataLoading = ref(true);
const refData = reactive({});

onMounted(() => {
	if (user.active_ref_link) {
		getRefData();
	}
});

const getRefData = () => {
  refDataLoading.value = true;
  axios
    .get(route("api.user.referral-data"))
    .then((response) => Object.assign(refData, response.data))
    .catch((error) => useCatch(error))
    .finally(() => {
      refDataLoading.value = false;
    });
};
</script>

<template>
  <div>
    <div class="main__ref">
      <div v-if="user.ref_link_count === 0">
        <FadeTransition mode="out-in">
          <div v-if="!formIsSent">
            <div class="ref__title">{{ $t("referral.1") }}</div>
            <div class="ref__description">{{ $t("referral.2") }}</div>
            <form class="ref__form" @submit.prevent="submit">
              <div class="flex justify-center main__data">
                <ButtonSecondary>
                  {{ $t("referral.generate") }}
                  <Loader v-if="loading" />
                </ButtonSecondary>
              </div>
            </form>
          </div>
          <div v-else="formIsSent">
            {{ $t("referral.3") }}
          </div>
        </FadeTransition>
      </div>

      <div v-if="user.ref_link_count > 0">
        <div v-if="user.active_ref_link === null">
          {{ $t("referral.4") }}
        </div>
        <div v-else class="mb-20">
          <div class="mb-1 font-bold">{{ $t("referral.link") }}:</div>
          <div
            class="relative px-2 py-3 mb-8 text-center border rounded border-pink"
            @pointerdown="copy"
          >
            <span v-text="reflink"></span>
            <div
              v-show="copyShow"
              class="absolute top-0 bottom-0 left-0 flex items-center p-2 text-white rounded bg-grey"
            >
              {{ $t("referral.copied") }}
            </div>
          </div>
          <div>
            <div class="mb-5 text-xl font-bold">{{ $t("referral.stat") }}</div>

            <div class="flex justify-between py-1 mb-2 border-b border-grey">
              <div>{{ $t("referral.clicks") }}</div>
              <div v-if="refDataLoading"><Loader class="w-6 h-6" /></div>
              <div v-else>{{ refData.clicks }}</div>
            </div>

            <div class="flex justify-between py-1 mb-2 border-b border-grey">
              <div>{{ $t("referral.registrations") }}</div>
              <div v-if="refDataLoading"><Loader class="w-6 h-6" /></div>
              <div v-else>{{ refData.registrations }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
