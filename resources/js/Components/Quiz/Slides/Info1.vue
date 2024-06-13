<script setup>
import { inject } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />

        <div class="quiz-content _fat-goal">
          <h2 class="quiz-content__title-mobile _hidden title">
            <strong>81%</strong> ваших результатов связаны с питанием
          </h2>

          <div class="quiz-content__img-wrapper">
            <!--quiz-content__img при наличии 3d-model этот блок не используем -> (quiz-content__img) -->
            <div class="quiz-content__img -ibg">
              <img src="/resources/images/men-old/30-39.png" alt="Image" />
            </div>
            <!--end quiz-content__img -->
          </div>

          <div class="quiz-content__info">
            <h2 class="quiz-content__title _hidden title">
              <strong>81%</strong> ваших результатов связаны с питанием
            </h2>
            <div class="quiz-content__block">
              <div class="quiz-info">
                <div class="quiz-info__text text">
                  Чтобы добиться максимального прироста мышечной массы и силы, вам
                  необходимо:
                </div>
                <ul>
                  <li>Достаточное количество калорий каждый день</li>
                  <li>Достаточное количество белка для восстановления мышечной ткани</li>
                </ul>
              </div>
            </div>
            <div class="quiz-content__action">
              <NextButton @click="nextPage" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
