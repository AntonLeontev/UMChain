<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const time = ref(sessionStorage.getItem("quiz.training_time") ?? 1);

function tryNext() {
  sessionStorage.setItem("quiz.training_time", time.value);
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
              Сколько времени вы готовы потратить на тренировку?
            </h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="t_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="time"
                  v-model="time"
                />
                <label for="t_1" class="options__label">
                  <span class="options__text text">20 минут или меньше</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="time"
                  v-model="time"
                />
                <label for="t_2" class="options__label">
                  <span class="options__text text">20 - 40 минут</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="time"
                  v-model="time"
                />
                <label for="t_3" class="options__label">
                  <span class="options__text text">40 - 60 минут</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_4"
                  class="options__input"
                  type="radio"
                  value="4"
                  name="time"
                  v-model="time"
                />
                <label for="t_4" class="options__label">
                  <span class="options__text text">Больше часа</span>
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
