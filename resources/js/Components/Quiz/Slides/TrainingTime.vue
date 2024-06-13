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
            <h2 class="quiz-content__title title">
              Сколько времени вы готовы потрать на тренировку?
            </h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="t_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="time"
                />
                <label for="t_1" class="options__label">
                  <span class="options__text text">20 минут или меньше</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="time"
                />
                <label for="t_2" class="options__label">
                  <span class="options__text text">20 - 40 минут</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="time"
                />
                <label for="t_3" class="options__label">
                  <span class="options__text text">40 - 60 минут</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="t_4"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="time"
                />
                <label for="t_4" class="options__label">
                  <span class="options__text text">Больше часа</span>
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
