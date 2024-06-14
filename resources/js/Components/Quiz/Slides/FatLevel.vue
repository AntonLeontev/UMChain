<script setup>
import { ref, computed, inject, onActivated } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
import Slider from "../Slider.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const level = ref(sessionStorage.getItem("quiz.fat_level") ?? 0);

const dirName = ref(null);
onActivated(() => {
  dirName.value = sessionStorage.getItem("quiz.sex") === "male" ? "men" : "women";
});

const fileName = computed(() => {
  return `lvl-${+level.value + 1}.png`;
});

function tryNext() {
  sessionStorage.setItem("quiz.fat_level", level.value);
  nextPage();
}
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />
        <div class="quiz-content _fat-goal">
          <h2 class="quiz-content__title-mobile _hidden title">
            Выберите свой уровень жира в&nbsp;организме
          </h2>
          <div class="quiz-content__img-wrapper">
            <!--quiz-content__img при наличии 3d-model этот блок не используем -> (quiz-content__img) -->
            <div class="quiz-content__img -ibg">
              <img :src="`/images/fat-lvl/${dirName}/${fileName}`" alt="Image" />
            </div>
            <!--end quiz-content__img -->
          </div>
          <div class="quiz-content__info">
            <h2 class="quiz-content__title _hidden title">
              Выберите свой уровень жира в&nbsp;организме
            </h2>
            <div class="quiz-content__range">
              <Slider
                :min="0"
                :max="6"
                :step="1"
                :tooltips="false"
                from="5-9%"
                to="&gt;40%"
                @change="(e) => (level = e)"
              />
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
