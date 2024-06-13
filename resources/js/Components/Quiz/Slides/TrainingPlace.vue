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
            <h2 class="quiz-content__title title">Выберите место тренировки</h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="g_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="place"
                />
                <label for="g_1" class="options__label">
                  <span class="options__text text">Дома</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="g_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="place"
                />
                <label for="g_2" class="options__label">
                  <span class="options__text text">Тренажерный зал</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="g_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="place"
                />
                <label for="g_3" class="options__label">
                  <span class="options__text text">Оба варианта</span>
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
