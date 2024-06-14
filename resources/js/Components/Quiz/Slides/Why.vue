<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const why = ref(sessionStorage.getItem("quiz.why") ?? 1);

function tryNext() {
  sessionStorage.setItem("quiz.why", why.value);
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
            <div class="quiz-content__title-block title-block">
              <h2 class="title-block__title title">Почему вы хотите похудеть?</h2>
              <div class="title-block__text">
                Выберите то, что мотивирует вас больше всего прямо сейчас
              </div>
            </div>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="t_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="why"
                  v-model="why"
                />
                <label for="t_1" class="options__label">
                  <span class="options__text text">Улучшение внешнего вида</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="why"
                  v-model="why"
                />
                <label for="t_2" class="options__label">
                  <span class="options__text text">Улучшить свое здоровье</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="why"
                  v-model="why"
                />
                <label for="t_3" class="options__label">
                  <span class="options__text text"
                    >Чувствовать себя более красивым и счастливым</span
                  >
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_4"
                  class="options__input"
                  type="radio"
                  value="4"
                  name="why"
                  v-model="why"
                />
                <label for="t_4" class="options__label">
                  <span class="options__text text"
                    >Заниматься вместе с близким человеком</span
                  >
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_5"
                  class="options__input"
                  type="radio"
                  value="5"
                  name="why"
                  v-model="why"
                />
                <label for="t_5" class="options__label">
                  <span class="options__text text">Другое</span>
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
