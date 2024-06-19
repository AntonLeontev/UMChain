<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const place = ref(sessionStorage.getItem("quiz.training_place") ?? 1);

function tryNext() {
  sessionStorage.setItem("quiz.training_place", place.value);
  nextPage();
}
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />
        <div class="quiz-content _little">
          <div class="quiz-content__info">
            <h2 class="quiz-content__title title">Выберите место тренировки</h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="g_1"
                  class="options__input"
                  type="radio"
                  value="1"
                  name="place"
                  v-model="place"
                />
                <label for="g_1" class="options__label">
                  <span class="options__text text">Дома</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="g_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="place"
                  v-model="place"
                />
                <label for="g_2" class="options__label">
                  <span class="options__text text">Тренажерный зал</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="g_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="place"
                  v-model="place"
                />
                <label for="g_3" class="options__label">
                  <span class="options__text text">Оба варианта</span>
                </label>
              </div>
            </div>
            <div class="quiz-content__action">
              <NextButton @click="tryNext" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
