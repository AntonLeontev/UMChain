<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const water = ref(sessionStorage.getItem("quiz.water") ?? null);

const waterResult = {
  1: {
    title: "Питьевая вода необходима",
    text:
      "Если вы пьете мало воды, ваш организм не сможет хорошо работать. UMFit напоминает вам, что необходимо пить достаточно воды каждый день.",
    drops: 1,
    notification: false,
  },
  2: {
    title: "Питьевая вода необходима",
    text:
      "Если вы пьете мало воды, ваш организм не сможет хорошо работать. UMFit напоминает вам, что необходимо пить достаточно воды каждый день.",
    drops: 1,
    notification: false,
  },
  3: {
    title: "Вы пьете больше воды, чем 50% пользователей*.",
    text: "",
    drops: 3,
    notification: true,
  },
  4: {
    title: "Ух ты! Впечатляюще!",
    text: "Вы пьете больше воды, чем 75% пользователей*. Так держать!",
    drops: 4,
    notification: true,
  },
  5: {
    title: "Ух ты! Впечатляюще!",
    text: "Вы пьете больше воды, чем 92% пользователей*. Так держать!",
    drops: 5,
    notification: true,
  },
};

function tryNext() {
  sessionStorage.setItem("quiz.water", water.value);
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
            <h2 class="quiz-content__title title">Сколько воды вы пьете ежедневно?</h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="o_1"
                  class="options__input"
                  type="radio"
                  value="1"
                  name="water"
                  v-model="water"
                />
                <label for="o_1" class="options__label">
                  <span class="options__text text">Только чай или кофе</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="water"
                  v-model="water"
                />
                <label for="o_2" class="options__label">
                  <span class="options__text text">Меньше 2 стаканов</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="water"
                  v-model="water"
                />
                <label for="o_3" class="options__label">
                  <span class="options__text text">2-6 стаканов</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_4"
                  class="options__input"
                  type="radio"
                  value="4"
                  name="water"
                  v-model="water"
                />
                <label for="o_4" class="options__label">
                  <span class="options__text text">7-10 стаканов</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_5"
                  class="options__input"
                  type="radio"
                  value="5"
                  name="water"
                  v-model="water"
                />
                <label for="o_5" class="options__label">
                  <span class="options__text text">Более 10 стаканов</span>
                </label>
              </div>
            </div>
            <div class="quiz-content__water" v-if="water">
              <div class="water-result">
                <div class="water-result__header">
                  <div class="water-result-rating">
                    <div
                      class="water-result-rating__item"
                      v-for="i in waterResult[water].drops"
                    >
                      <img src="/resources/images/icons/progress.svg" alt="Image" />
                    </div>
                  </div>
                  <div class="water-result__title text">
                    {{ waterResult[water].title }}
                  </div>
                </div>
                <div class="water-result__body">
                  {{ waterResult[water].text }}
                </div>
              </div>
              <!-- note для активации нужно убрать класс _hidden, либо если добавлять через js просто вставляем без этого класса (_hidden)-->
              <div class="note" v-if="waterResult[water].notification">
                *пользователи UMFit, принявшие участие в викторине
              </div>
              <!--end  -->
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
