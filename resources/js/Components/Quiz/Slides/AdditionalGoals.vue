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
              <h2 class="title-block__title title">Дополнительные цели:</h2>
              <div class="title-block__text">
                Мы уверены, что с помощью занятий спортом, можно улучшить не только свое
                тело, но и изменить свою жизнь
              </div>
            </div>
            <div class="quiz-content__checkbox _shape">
              <div class="checkbox">
                <input
                  id="p_1"
                  class="checkbox__input"
                  type="checkbox"
                  value="1"
                  name="dop-goals"
                />
                <label for="p_1" class="checkbox__label">
                  <span class="checkbox__text">Улучшить сон</span>
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_2"
                  class="checkbox__input"
                  type="checkbox"
                  value="1"
                  name="dop-goals"
                />
                <label for="p_2" class="checkbox__label">
                  <span class="checkbox__text"
                    >Сделать физическую активность привычной</span
                  >
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_3"
                  class="checkbox__input"
                  type="checkbox"
                  value="1"
                  name="dop-goals"
                />
                <label for="p_3" class="checkbox__label">
                  <span class="checkbox__text">Самодисциплина</span>
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_4"
                  class="checkbox__input"
                  type="checkbox"
                  value="1"
                  name="dop-goals"
                />
                <label for="p_4" class="checkbox__label">
                  <span class="checkbox__text">Улучшить свое здоровье</span>
                </label>
              </div>
              <div class="checkbox">
                <input
                  id="p_5"
                  class="checkbox__input"
                  type="checkbox"
                  value="1"
                  name="dop-goals"
                />
                <label for="p_5" class="checkbox__label">
                  <span class="checkbox__text">Снизить стресс</span>
                </label>
              </div>
              <div class="checkbox-block">
                <div class="checkbox">
                  <input
                    id="p_6"
                    class="checkbox__input"
                    type="checkbox"
                    value="1"
                    name="dop-goals"
                  />
                  <label for="p_6" class="checkbox__label">
                    <span class="checkbox__text">Ни один из вышеперечисленных</span>
                  </label>
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
