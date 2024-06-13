<script setup>
import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
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
              <div class="quiz-content__input-range input-range">
                <div class="input-range__input">
                  <input type="range" id="range" />
                </div>
                <div class="input-range__value">
                  <span>Худшая форма</span>
                  <span>>Я в огне!</span>
                </div>
              </div>
            </div>
            <div class="quiz-content__block">
              <div class="physical-training">
                <div class="physical-training__title">Новичок</div>
                <div class="physical-training__text">
                  Поднявшись вверх или спустившись на несколько лестничных пролетов, мне
                  нужно отдышаться.
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
