<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const trainingsCount = ref(sessionStorage.getItem("quiz.trainings_count") ?? 1);

function tryNext() {
  sessionStorage.setItem("quiz.trainings_count", trainingsCount.value);
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
            <h2 class="quiz-content__title title">
              Сколько раз в неделю вы планируете тренироваться?
            </h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="c_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="count"
                  v-model="trainingsCount"
                />
                <label for="c_1" class="options__label">
                  <span class="options__text text"
                    >Пока не могу решить, пойму, когда увижу программу тренировок</span
                  >
                </label>
              </div>
              <div class="options__item">
                <input
                  id="c_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="count"
                  v-model="trainingsCount"
                />
                <label for="c_2" class="options__label">
                  <span class="options__text text">1-2 раза в неделю</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="c_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="count"
                  v-model="trainingsCount"
                />
                <label for="c_3" class="options__label">
                  <span class="options__text text">3 раза в неделю</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="c_4"
                  class="options__input"
                  type="radio"
                  value="4"
                  name="count"
                  v-model="trainingsCount"
                />
                <label for="c_4" class="options__label">
                  <span class="options__text text">Больше 3 раз в неделю</span>
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
