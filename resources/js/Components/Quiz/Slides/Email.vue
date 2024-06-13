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
            <h2 class="quiz-content__title title text-center">Напишите ваш email</h2>
            <div class="form">
              <div class="form__row">
                <input
                  class="form__input input"
                  id="d-name"
                  autocomplete="off"
                  type="text"
                  placeholder="имя@example.com"
                />
              </div>
              <div class="form__row">
                <div class="form__text">
                  Мы уважаем вашу конфиденциальность и очень серьезно относимся к ее
                  защите — никакого спама.
                </div>
              </div>
              <div class="form__row _center">
                <NextButton />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
