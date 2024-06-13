<script setup>
import NextButton from "@/Components/Quiz/NextButton.vue";
import ProgressBar from "@/Components/Quiz/ProgressBar.vue";
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />
        <div class="quiz-content">
          <h2 class="quiz-content__title-mobile _hidden title">Выберите свою цель</h2>
          <div class="quiz-content__img-wrapper">
            <!--quiz-content__img при наличии 3d-model этот блок не используем -> (quiz-content__img) -->
            <div class="quiz-content__img -ibg">
              <img src="/resources/images/men-old/men50plus.png" alt="Image" />
            </div>
            <!--end quiz-content__img -->
          </div>
          <div class="quiz-content__info">
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
                />
                <label for="g_3" class="options__label">
                  <span class="options__text text">Подсушиться, показать рельеф</span>
                </label>
              </div>
            </div>
            <div class="quiz-content__action">
              <NextButton />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
