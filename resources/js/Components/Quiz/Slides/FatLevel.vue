<script setup>
import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
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
              <img src="/resources/images/fat-lvl/men/lvl-1.png" alt="Image" />
            </div>
            <!--end quiz-content__img -->
          </div>
          <div class="quiz-content__info">
            <h2 class="quiz-content__title _hidden title">
              Выберите свой уровень жира в&nbsp;организме
            </h2>
            <div class="quiz-content__range">
              <div class="quiz-content__input-range input-range">
                <div class="input-range__input">
                  <input type="range" id="range" />
                </div>
                <div class="input-range__value">
                  <span>5-9%</span>
                  <span>>40%</span>
                </div>
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
