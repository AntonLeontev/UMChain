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

        <div class="quiz-content">
          <h2 class="quiz-content__title-mobile _hidden title">
            Мы заботимся о&nbsp;вашем здоровье
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
              Мы заботимся о&nbsp;вашем здоровье
            </h2>
            <div class="quiz-content__block">
              <div class="quiz-info">
                <div class="quiz-info__title">
                  Если у вас есть любое из этих заболеваний:
                </div>
                <ul class="disc-style">
                  <li>Сердечное заболевание</li>
                  <li>Тяжелый сколиоз</li>
                  <li>Повреждение позвоночника</li>
                  <li>Доброкачественная или злокачественная опухоль</li>
                  <li>Гипертония</li>
                </ul>
                <div class="text">
                  Пожалуйста, проконсультируйтесь со своим врачом, прежде чем начать
                  следовать нашей программе
                </div>
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
