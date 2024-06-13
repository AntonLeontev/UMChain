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
            <h2 class="quiz-content__title title">Сколько воды вы пьете ежедневно?</h2>
            <div class="quiz-content__options options _shape">
              <div class="options__item">
                <input
                  id="o_1"
                  class="options__input"
                  checked
                  type="radio"
                  value="1"
                  name="water"
                />
                <label for="o_1" class="options__label">
                  <span class="options__text text">Только чай или кофе</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_2"
                  class="options__input"
                  type="radio"
                  value="2"
                  name="water"
                />
                <label for="o_2" class="options__label">
                  <span class="options__text text">Меньше 2 стаканов</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_3"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="water"
                />
                <label for="o_3" class="options__label">
                  <span class="options__text text">2-6 стаканов</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_4"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="water"
                />
                <label for="o_4" class="options__label">
                  <span class="options__text text">7-10 стаканов</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_5"
                  class="options__input"
                  type="radio"
                  value="3"
                  name="water"
                />
                <label for="o_5" class="options__label">
                  <span class="options__text text">Более 10 стаканов</span>
                </label>
              </div>
            </div>
            <div class="quiz-content__water">
              <div class="water-result">
                <div class="water-result__header">
                  <div class="water-result-rating">
                    <div class="water-result-rating__item">
                      <img src="/resources/images/icons/progress.svg" alt="Image" />
                    </div>
                    <div class="water-result-rating__item">
                      <img src="/resources/images/icons/progress.svg" alt="Image" />
                    </div>
                    <div class="water-result-rating__item">
                      <img src="/resources/images/icons/progress.svg" alt="Image" />
                    </div>
                    <div class="water-result-rating__item">
                      <img src="/resources/images/icons/progress.svg" alt="Image" />
                    </div>
                    <div class="water-result-rating__item">
                      <img src="/resources/images/icons/progress.svg" alt="Image" />
                    </div>
                  </div>
                  <div class="water-result__title text">Питьевая вода необходима</div>
                </div>
                <div class="water-result__body">
                  Если вы пьете мало воды, ваш организм не сможет хорошо работать. UMFit
                  напоминает вам, что необходимо пить достаточно воды каждый день.
                </div>
              </div>
              <!-- note для активации нужно убрать класс _hidden, либо если добавлять через js просто вставляем без этого класса (_hidden)-->
              <div class="note _hidden">
                *пользователи UMFit, принявшие участие в викторине
              </div>
              <!--end  -->
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
