<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const zones = ref(
  sessionStorage.getItem("quiz.zones")
    ? JSON.parse(sessionStorage.getItem("quiz.zones"))
    : []
);

function toggleZones() {
  if (zones.value.length === 4) {
    zones.value = [];
  } else {
    zones.value = ["chest", "press", "hands", "legs"];
  }
}

function tryNext() {
  sessionStorage.setItem("quiz.zones", JSON.stringify(zones.value));
  nextPage();
}
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />

        <div class="quiz-content">
          <div class="quiz-content__info">
            <h2 class="quiz-content__title title">Выберите ваши проблемные зоны</h2>
          </div>
        </div>
      </div>

      <div class="zones">
        <form class="zones__container">
          <div class="zones__content">
            <div class="zones__img -ibg--contain">
              <img src="/resources/images/zones-img_men.png" alt="Image" />
            </div>
            <div class="zones__checkbox">
              <div class="checkbox checkbox_01">
                <input
                  id="z_1"
                  class="checkbox__input"
                  type="checkbox"
                  value="chest"
                  name="zones[]"
                  v-model="zones"
                />
                <label for="z_1" class="checkbox__label">
                  <span class="checkbox__text">Слабая грудь</span>
                </label>
              </div>
              <div class="checkbox checkbox_02">
                <input
                  id="z_2"
                  class="checkbox__input"
                  type="checkbox"
                  value="hands"
                  name="zones[]"
                  v-model="zones"
                />
                <label for="z_2" class="checkbox__label">
                  <span class="checkbox__text">Тонкие руки</span>
                </label>
              </div>
              <div class="checkbox checkbox_03">
                <input
                  id="z_3"
                  class="checkbox__input"
                  type="checkbox"
                  value="press"
                  name="zones[]"
                  v-model="zones"
                />
                <label for="z_3" class="checkbox__label">
                  <span class="checkbox__text">Пресс</span>
                </label>
              </div>
              <div class="checkbox checkbox_04">
                <input
                  id="z_4"
                  class="checkbox__input"
                  type="checkbox"
                  value="legs"
                  name="zones[]"
                  v-model="zones"
                />
                <label for="z_4" class="checkbox__label">
                  <span class="checkbox__text">Стройные ноги</span>
                </label>
              </div>
            </div>
          </div>
          <div class="zones__switch">
            <div class="text">Все тело</div>
            <label class="switch">
              <input type="checkbox" :checked="zones.length === 4" @click="toggleZones" />
              <span class="switch__slider round"></span>
            </label>
          </div>

          <div class="zones__action">
            <NextButton @click="tryNext" />
          </div>
        </form>
      </div>
    </section>
  </main>
</template>
