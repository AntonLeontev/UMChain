<script setup>
import QuizLayout from "@/Layouts/QuizLayout.vue";
import { postEvent } from "@tma.js/sdk";

function toChannel() {
  postEvent("web_app_open_tg_link", { path_full: "/fitumc" });
}
</script>

<template>
  <QuizLayout>
    <main class="page">
      <section class="hero section-padding">
        <div class="hero__container">
          <div class="quiz-content _big">
            <div class="quiz-content__img-wrapper">
              <div class="quiz-content__img -ibg">
                <img src="/resources/images/programmer.png" alt="Image" />
              </div>
            </div>

            <div class="quiz-content__info">
              <h2 class="quiz-content__title _accent title">
                Личный кабинет совсем скоро будет готов!
              </h2>
              <div class="quiz-content__block">
                <div class="quiz-info">
                  <div class="quiz-info__text text">
                    Пока вы можете присоединиться к&nbsp;нашему каналу в&nbsp;Телеграм:
                  </div>
                </div>
              </div>
              <div class="quiz-content__action">
                <button class="button button_tg" type="button" @click="toChannel">
                  Подписаться
                  <img
                    src="/resources/images/icons/tg.svg"
                    width="33"
                    height="32"
                    alt="Image"
                  />
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </QuizLayout>
</template>
