<script setup>
import { inject, ref } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
import PersonImage from "../PersonImage.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");
const goal = ref(sessionStorage.getItem("quiz.goal"));

function tryNext(e) {
  const data = new FormData(e.target);
  sessionStorage.setItem("quiz.goal", data.get("goal"));

  nextPage();
}
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />
        <div class="quiz-content">
          <h2 class="quiz-content__title-mobile _hidden title">Выберите свою цель</h2>
          <div class="quiz-content__img-wrapper">
            <PersonImage />
          </div>
          <form class="quiz-content__info" @submit.prevent="tryNext">
            <h2 class="quiz-content__title _hidden title">Выберите свою цель</h2>
            <div class="quiz-content__options options">
              <div class="options__item">
                <input
                  id="g_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="goal"
                  v-model="goal"
                />
                <label for="g_1" class="options__label">
                  <span class="options__text text">Похудеть</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="g_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="goal"
                  v-model="goal"
                />
                <label for="g_2" class="options__label">
                  <span class="options__text text">Набрать мышечную массу</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="g_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="goal"
                  v-model="goal"
                />
                <label for="g_3" class="options__label">
                  <span class="options__text text">Подсушиться, показать рельеф</span>
                </label>
              </div>
            </div>
            <div class="quiz-content__action">
              <NextButton />
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
</template>
