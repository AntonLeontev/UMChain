<script setup>
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import ButtonTransparent from "@/Components/Common/ButtonTransparent.vue";
import useUserStore from "@/stores/user";

function logout() {
  useUserStore().logout();
}
</script>

<template>
    <div data-page="logout">
      <div class="main__out">
        <div class="out__box">
          <div class="out__title">{{ $t("logout.sure") }}</div>
          <div class="out__buttons !justify-around">
            <div class="out__no">
              <router-link :to="{ name: 'personal' }">
                <ButtonTransparent type="button" class="!text-black">{{
                  $t("logout.dont")
                }}</ButtonTransparent>
              </router-link>
            </div>
            <div class="out__yes w-min">
              <ButtonSecondary type="button" @click="logout" class="text-nowrap">{{
                $t("logout.btn")
              }}</ButtonSecondary>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>
