<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const problems = ref(
  sessionStorage.getItem("quiz.problems")
    ? JSON.parse(sessionStorage.getItem("quiz.problems"))
    : []
);

function clearProblems() {
  problems.value = [];
}

function tryNext() {
  sessionStorage.setItem("quiz.problems", JSON.stringify(problems.value));
  nextPage();
}
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />

        <div class="quiz-content _big-title">
          <div class="quiz-content__info">
            <h2 class="quiz-content__title title">
              Сталкивались ли вы с подобными проблемами во время своих прошлых попыток
              заниматься спортом?
            </h2>
            <div class="quiz-content__checkbox _shape">
              <div class="checkbox">
                <input
                  id="p_1"
                  class="checkbox__input"
                  type="checkbox"
                  value="1"
                  name="problems[]"
                  v-model="problems"
                />
                <label for="p_1" class="checkbox__label">
                  <span class="checkbox__text">Недостаток мотивации</span>
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_2"
                  class="checkbox__input"
                  type="checkbox"
                  value="2"
                  name="problems[]"
                  v-model="problems"
                />
                <label for="p_2" class="checkbox__label">
                  <span class="checkbox__text">Не увидел прогресса</span>
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_3"
                  class="checkbox__input"
                  type="checkbox"
                  value="3"
                  name="problems[]"
                  v-model="problems"
                />
                <label for="p_3" class="checkbox__label">
                  <span class="checkbox__text"
                    >Не чувствовал себя уверенно во время занятий</span
                  >
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_4"
                  class="checkbox__input"
                  type="checkbox"
                  value="4"
                  name="problems[]"
                  v-model="problems"
                />
                <label for="p_4" class="checkbox__label">
                  <span class="checkbox__text">Не было четкого плана занятий</span>
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_5"
                  class="checkbox__input"
                  type="checkbox"
                  value="5"
                  name="problems[]"
                  v-model="problems"
                />
                <label for="p_5" class="checkbox__label">
                  <span class="checkbox__text">У меня нет единомышленников</span>
                </label>
              </div>
              <div class="checkbox-block">
                <div class="checkbox">
                  <input
                    id="p_6"
                    class="checkbox__input"
                    type="checkbox"
                    value="6"
                    name="problems[]"
                    :checked="problems.length === 0"
                    @click="clearProblems"
                  />
                  <label for="p_6" class="checkbox__label">
                    <span class="checkbox__text">Ни один из вышеперечисленных</span>
                  </label>
                </div>
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
