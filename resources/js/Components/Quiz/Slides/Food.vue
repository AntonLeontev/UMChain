<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const food = ref(sessionStorage.getItem("quiz.food") ?? 1);

function tryNext() {
  sessionStorage.setItem("quiz.food", food.value);
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
              Как часто вы едите сладкую еду или напитки или фастфуд?
            </h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="f_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="food"
                  v-model="food"
                />
                <label for="f_1" class="options__label">
                  <span class="options__text text">Не часто. Я не люблю сладкое </span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="f_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="food"
                  v-model="food"
                />
                <label for="f_2" class="options__label">
                  <span class="options__text text">3-5 раз в неделю</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="f_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="food"
                  v-model="food"
                />
                <label for="f_3" class="options__label">
                  <span class="options__text text">Практически каждый день</span>
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
