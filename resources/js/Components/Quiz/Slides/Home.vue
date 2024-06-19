<script setup>
import { inject, ref } from "vue";
import { parseInitData } from '@tma.js/sdk';

import NextButton from "../NextButton.vue";
import InputWithDimension from "../InputWithDimension.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

let name;

if (sessionStorage.getItem("quiz.name")) {
	name = sessionStorage.getItem("quiz.name");
} else if(sessionStorage.getItem("telegramInitData")) {
	name = parseInitData(sessionStorage.getItem("telegramInitData")).user?.firstName
}

const bday = sessionStorage.getItem("quiz.bday");
const sex = sessionStorage.getItem("quiz.sex");
const heightValue = parseInt(sessionStorage.getItem("quiz.height_value"));
const heightDimension = sessionStorage.getItem("quiz.height_dimension");
const weightValue = parseInt(sessionStorage.getItem("quiz.weight_value"));
const weightDimension = sessionStorage.getItem("quiz.weight_dimension");
const targetWeightValue = parseInt(sessionStorage.getItem("quiz.target_weight_value"));
const targetWeightDimension = sessionStorage.getItem("quiz.target_weight_dimension");

const dimensionsHeight = [
  { label: "см", val: "cm", min: 100, max: 250 },
  { label: "in", val: "inch", min: 30, max: 85 },
];
const dimensionsWeight = [
  { label: "кг", val: "kg", min: 30, max: 250 },
  { label: "lb", val: "lb", min: 66, max: 551 },
];

function tryNext(e) {
  const data = new FormData(e.target);

  sessionStorage.setItem("quiz.name", data.get("name"));
  sessionStorage.setItem("quiz.bday", data.get("bday"));
  sessionStorage.setItem("quiz.sex", data.get("sex"));
  sessionStorage.setItem("quiz.height_dimension", data.get("height_dimension"));
  sessionStorage.setItem("quiz.height_value", data.get("height_value"));
  sessionStorage.setItem("quiz.weight_dimension", data.get("weight_dimension"));
  sessionStorage.setItem("quiz.weight_value", data.get("weight_value"));
  sessionStorage.setItem(
    "quiz.target_weight_dimension",
    data.get("target_weight_dimension")
  );
  sessionStorage.setItem("quiz.target_weight_value", data.get("target_weight_value"));
  sessionStorage.setItem("quiz.agree", data.get("agree"));
  sessionStorage.setItem("quiz.accept_ads", data.get("accept_ads") ?? 0);

  nextPage();
}
</script>

<template>
  <main class="page">
    <section class="hero section-padding">
      <div class="hero__container-little">
        <h2 class="hero__title title">Давайте создадим вашу учетную запись UMFit</h2>
        <form class="form" @submit.prevent="tryNext">
          <div class="form__row">
            <label for="d-name" class="form__label">Как нам к вам обращаться?</label>
            <input
              class="form__input input"
              id="d-name"
              autocomplete="off"
              type="text"
              placeholder="Имя"
              required
              maxlength="50"
              tabindex="0"
              name="name"
              :value="name"
            />
          </div>
          <div class="form__row d-flex d-flex_align-end">
            <div class="form__column">
              <label for="d-old" class="form__label">Когда у вас день рождения?</label>
              <input
                class="form__input input"
                id="d-old"
                autocomplete="off"
                type="date"
                name="bday"
                required
                :value="bday"
              />
            </div>
            <div class="form__column">
              <fieldset class="options">
                <div class="options__item">
                  <input
                    id="o_1"
                    class="options__input"
                    checked
                    type="radio"
                    value="male"
                    name="sex"
                    tabindex="0"
                    v-model="sex"
                  />
                  <label for="o_1" class="options__label">
                    <span class="options__text text">Мужской</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="o_2"
                    class="options__input"
                    type="radio"
                    value="female"
                    name="sex"
                    tabindex="0"
                    v-model="sex"
                  />
                  <label for="o_2" class="options__label">
                    <span class="options__text text">Женский</span>
                  </label>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="form__row d-flex">
            <div class="form__column">
              <label for="d-height" class="form__label">Какой у вас рост?</label>
              <InputWithDimension
                name="height"
                id="d-height"
                :dimensions="dimensionsHeight"
                :value="heightValue"
                :dimensionValue="heightDimension"
              />
            </div>
            <div class="form__column">
              <label for="d-weight" class="form__label">Какой у вас вес?</label>
              <InputWithDimension
                name="weight"
                id="d-weight"
                :dimensions="dimensionsWeight"
                :value="weightValue"
				:dimensionValue="weightDimension"
              />
            </div>
            <div class="form__column">
              <label for="d-weight_m" class="form__label">Целевой вес</label>
              <InputWithDimension
                name="target_weight"
                id="d-weight_m"
                :dimensions="dimensionsWeight"
                :value="targetWeightValue"
				:dimensionValue="targetWeightDimension"
              />
            </div>
          </div>
          <div class="form__row checkbox-items">
            <div class="checkbox">
              <input
                id="c_1"
                data-error="Ошибка"
                class="checkbox__input"
                type="checkbox"
                value="1"
                name="agree"
                checked
                required
              />
              <label for="c_1" class="checkbox__label">
                <span class="checkbox__text text text_xs"
                  >Продолжая, я соглашаюсь с&nbsp;<a href="">Условиями обслуживания</a>,
                  <a href="">Политикой конфиденциальности</a>,
                  <a href="">Политикой возврата средств</a>,
                  <a href="">Условиями подписки</a>,
                  <a href="">Политикой использования файлов cookie</a></span
                >
              </label>
            </div>
            <div class="checkbox">
              <input
                id="c_2"
                data-error="Ошибка"
                class="checkbox__input"
                type="checkbox"
                value="1"
                checked
                name="accept_ads"
              />
              <label for="c_2" class="checkbox__label">
                <span class="checkbox__text text text_xs"
                  >Я хотел бы получать обновления о продуктах, услугах и специальных
                  предложениях от UMFit по электронной почте.</span
                >
              </label>
            </div>
            <div class="text text_xs">
              Мы рекомендуем вам проконсультироваться с врачом перед началом любой
              программы упражнений.
            </div>
          </div>
          <div class="form__row checkbox-items">
            <div class="text">
              Мы уважаем вашу конфиденциальность и очень серьезно относимся к ее защите —
              никакого спама.
            </div>
          </div>
          <div class="form__row _right">
            <NextButton />
          </div>
        </form>
      </div>
    </section>
  </main>
</template>
