<script setup>
import NextButton from "../NextButton.vue";
</script>

<template>
  <main class="page">
    <section class="hero section-padding">
      <div class="hero__container-little">
        <h2 class="hero__title title">Давайте создадим вашу учетную запись UMFit</h2>
        <div class="form">
          <div class="form__row">
            <label for="d-name" class="form__label">Как нам к вам обращаться?</label>
            <input
              class="form__input input"
              id="d-name"
              autocomplete="off"
              type="text"
              placeholder="Имя"
            />
          </div>
          <div class="form__row d-flex d-flex_align-end">
            <div class="form__column">
              <label for="d-old" class="form__label">Когда у вас день рождения?</label>
              <input
                class="form__input input"
                id="d-old"
                autocomplete="off"
                type="text"
                placeholder="ДД/ММ/ГГГГ"
              />
            </div>
            <div class="form__column">
              <div class="options">
                <div class="options__item">
                  <input
                    id="o_1"
                    class="options__input"
                    checked
                    type="radio"
                    value="1"
                    name="sex"
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
                    value="2"
                    name="sex"
                  />
                  <label for="o_2" class="options__label">
                    <span class="options__text text">Женский</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form__row d-flex">
            <div class="form__column">
              <label for="d-height" class="form__label">Какой у вас рост?</label>
              <!--activation add class _active -->
              <div class="input-box">
                <input
                  class="form__input input"
                  id="d-height"
                  autocomplete="off"
                  type="text"
                  placeholder="_____"
                />
                <button class="input-box__btn" type="button">
                  <span>см</span>
                  <img src="/resources/images/icons/dropdown.svg" alt="Image" />
                </button>
                <ul class="input-box__submenu">
                  <li>inch</li>
                </ul>
              </div>
              <!--end  -->
            </div>
            <div class="form__column">
              <label for="d-weight" class="form__label">Какой у вас рост?</label>
              <!--activation add class _active -->
              <div class="input-box">
                <input
                  class="form__input input"
                  id="d-weight"
                  autocomplete="off"
                  type="text"
                  placeholder="_____"
                />
                <button class="input-box__btn" type="button">
                  <span>кг</span>
                  <img
                    src="/resources/images/icons/dropdown.svg"
                    width="24"
                    height="24"
                    alt="Image"
                  />
                </button>
                <ul class="input-box__submenu">
                  <li>lb</li>
                </ul>
              </div>
              <!--end  -->
            </div>
            <div class="form__column">
              <label for="d-weight_m" class="form__label">Целевой вес</label>
              <!--activation add class _active -->
              <div class="input-box">
                <input
                  class="form__input input"
                  id="d-weight_m"
                  autocomplete="off"
                  type="text"
                  placeholder="_____"
                />
                <button class="input-box__btn" type="button">
                  <span>кг</span>
                  <img
                    src="/resources/images/icons/dropdown.svg"
                    width="24"
                    height="24"
                    alt="Image"
                  />
                </button>
                <ul class="input-box__submenu">
                  <li>lb</li>
                </ul>
              </div>
              <!--end  -->
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
                name="form[]"
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
                name="form[]"
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
        </div>
      </div>
    </section>
  </main>
</template>
