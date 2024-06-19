<script setup>
import { ref, inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
import Slider from "../Slider.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const activity = ref(sessionStorage.getItem("quiz.physical_activity") ?? 1);

const texts = [
  {
    title: "Новичок",
    text: "Когда я сижу на полу, мне трудно встать.",
  },
  {
    title: "Новичок",
    text: "Я могу заниматься ходьбой в качестве кардиотренировки, но бегать тяжело.",
  },
  {
    title: "Новичок",
    text: "Я тренируюсь несколько раз в год, достаточно, чтобы вспотеть.",
  },
  {
    title: "Любитель",
    text: "Я стараюсь заниматься спортом раз в неделю, но все равно не регулярно.",
  },
  {
    title: "Любитель",
    text: "Я начал регулярно тренироваться хотя бы раз в неделю.",
  },
  {
    title: "Любитель",
    text:
      "Я тренируюсь два раза в неделю, по крайней мере, в течение последних 3 месяцев.",
  },
  {
    title: "Профи",
    text: "Я предан фитнесу и тренируюсь, когда могу.",
  },
  {
    title: "Профи",
    text:
      "О, поверь мне. Я в отличной форме, но мне все еще хочется подняться на уровень выше.",
  },
  {
    title: "Профи",
    text: "Я в огне! Я в лучшей форме в своей жизни.",
  },
];

function tryNext() {
  sessionStorage.setItem("quiz.physical_activity", activity.value);
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
              <h2 class="title-block__title title">
                Какой у вас уровень физической активности?
              </h2>
              <div class="title-block__text">
                Выберите свой текущий уровень физической подготовки, чтобы согласовать
                план тренировок.
              </div>
            </div>
            <div class="quiz-content__range">
              <Slider
                :min="1"
                :max="9"
                :step="1"
                :tooltips="true"
                from="Худшая форма"
                to="Я в огне!"
                @change="(e) => (activity = e)"
              />
            </div>
            <div class="quiz-content__block">
              <div class="physical-training">
                <div class="physical-training__title">
                  {{ texts[activity - 1].title }}
                </div>
                <div class="physical-training__text">
                  {{ texts[activity - 1].text }}
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

<style scoped>
@media (max-width: 30em) {
  .quiz-content__title-block {
    margin-bottom: 3.9rem;
  }
}
</style>
