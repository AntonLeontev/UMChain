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
              На сколько быстро вы хотите достичь своей цели?
            </h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="c_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="count"
                />
                <label for="c_1" class="options__label">
                  <span class="options__text text">1 - 3 месяца</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="c_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="count"
                />
                <label for="c_2" class="options__label">
                  <span class="options__text text">3 - 6 месяцев</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="c_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="count"
                />
                <label for="c_3" class="options__label">
                  <span class="options__text text">6 - 9 месяцев</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="c_4"
                  class="options__input"
                  type="radio"
                  value="4"
                  name="count"
                />
                <label for="c_4" class="options__label">
                  <span class="options__text text">9 - 12 месяцев</span>
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
