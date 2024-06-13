<script setup>
import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
</script>

<template>
  <main class="page">
    <section class="quiz section-padding">
      <div class="quiz__container-little">
        <ProgressBar />

        <div class="quiz-content">
          <h2 class="quiz-content__title-mobile _hidden title">
            Почему люди отказываются от&nbsp;тренировок?
          </h2>

          <div class="quiz-content__img-wrapper">
            <!--quiz-content__img при наличии 3d-model этот блок не используем -> (quiz-content__img) -->
            <div class="quiz-content__img -ibg">
              <img src="/resources/images/men-old/men30-39.png" alt="Image" />
            </div>
            <!--end quiz-content__img -->
          </div>

          <div class="quiz-content__info">
            <h2 class="quiz-content__title _hidden title">
              Почему люди отказываются от&nbsp;тренировок?
            </h2>
            <div class="quiz-content__block">
              <div class="quiz-info">
                <div class="quiz-info__title">Причина №1 - недостаток мотивации</div>
                <div class="quiz-info__text">
                  <p>
                    Вы достигнете гораздо большего, чем просто несколько недель
                    тренировок.
                  </p>
                  <p>
                    Мы не обещаем вам быстрых результатов. Основная цель нашей программы –
                    изменить ваш образ жизни к лучшему.
                  </p>
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
