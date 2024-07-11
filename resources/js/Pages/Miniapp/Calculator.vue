<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";

import useUserStore from "@/stores/user";

import { ref, computed } from "vue";

const user = useUserStore().user;

const age = ref(user.age);
const sex = ref(user.gender);
const weight = ref(user.weight[user.weight_dimension]);
const height = ref(user.height[user.height_dimension]);
const activity = ref(user.activity);
const level = ref(user.level);
const direction = ref(user.direction);

const calcCalories = computed(() => {
  let _activity, _level, _activityBase;

  if (activity.value == 0) _activity = 1.2;
  if (activity.value == 1) _activity = 1.375;
  if (activity.value == 2) _activity = 1.725;

  if (level.value == 0) _level = 0.1;
  if (level.value == 1) _level = 0.15;
  if (level.value == 2) _level = 0.2;

  let base = 10 * weight.value + 6.25 * height.value - 5 * age.value;

  if (sex.value == 0) {
    _activityBase = (base + 5) * _activity;
  }
  if (sex.value == 1) {
    _activityBase = (base - 161) * _activity;
  }

  if (direction.value == 0) return Math.round(_activityBase - _activityBase * _level);
  if (direction.value == 1) return Math.round(_activityBase);
  if (direction.value == 2) return Math.round(_activityBase + _activityBase * _level);
});
const proteins = computed(() => weight.value * 2);
const fats = computed(() => weight.value);
const carbohydrates = computed(() => {
  return Math.round((calcCalories.value - (proteins.value * 4 + fats.value * 9)) / 4);
});

function cleanNumber(event) {
  console.log(event.target.value);
  event.target.value = event.target.value.replaceAll(/[\D]/g, "");
}
</script>

<template>
  <MiniappLayout>
    <div class="hero-app">
      <div class="hero-app__container">
        <div class="hero-app__title title-app">Калькулятор</div>
        <div class="calc-app">
          <div class="calc-app__item">
            <label class="param-calc__label input-app-label">Пол</label>
            <div class="options">
              <div class="options__item">
                <input
                  id="o_1"
                  class="options__input"
                  type="radio"
                  value="0"
                  name="sex"
                  v-model="sex"
                />
                <label for="o_1" class="options__label">
                  <span class="options__text">Мужской</span>
                </label>
              </div>
              <div class="options__item">
                <input
                  id="o_2"
                  class="options__input"
                  type="radio"
                  value="1"
                  name="sex"
                  v-model="sex"
                />
                <label for="o_2" class="options__label">
                  <span class="options__text">Женский</span>
                </label>
              </div>
            </div>
          </div>

          <div class="calc-app__item">
            <div class="param-calc">
              <div class="param-calc__item">
                <label for="old" class="param-calc__label input-app-label">Возраст</label>
                <input
                  class="param-calc__input input"
                  id="old"
                  autocomplete="off"
                  type="number"
                  v-model="age"
                />
              </div>
              <div class="param-calc__item">
                <label for="height" class="param-calc__label input-app-label"
                  >Рост, {{ user.height_dimension }}</label
                >
                <input
                  class="param-calc__input input"
                  id="height"
                  autocomplete="off"
                  type="number"
                  v-model="height"
                />
              </div>
              <div class="param-calc__item">
                <label for="weight" class="param-calc__label input-app-label"
                  >Вес, {{ user.weight_dimension }}</label
                >
                <input
                  class="param-calc__input input"
                  id="weight"
                  autocomplete="off"
                  type="number"
                  v-model="weight"
                />
              </div>
            </div>
          </div>

          <div class="calc-app__item">
            <div class="calc-app__options">
              <div class="input-app-label">Активность</div>
              <div class="options">
                <div class="options__item">
                  <input
                    id="a_1"
                    class="options__input"
                    type="radio"
                    value="0"
                    name="active"
                    v-model="activity"
                  />
                  <label for="a_1" class="options__label">
                    <span class="options__text">Минимальная</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="a_2"
                    class="options__input"
                    type="radio"
                    value="1"
                    name="active"
                    v-model="activity"
                  />
                  <label for="a_2" class="options__label">
                    <span class="options__text">Умеренная</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="a_3"
                    class="options__input"
                    type="radio"
                    value="2"
                    name="active"
                    v-model="activity"
                  />
                  <label for="a_3" class="options__label">
                    <span class="options__text">Высокая</span>
                  </label>
                </div>
              </div>
              <div class="input-app-label">Уровень</div>
              <div class="options">
                <div class="options__item">
                  <input
                    id="l_1"
                    class="options__input"
                    type="radio"
                    value="0"
                    name="lvl"
                    v-model="level"
                  />
                  <label for="l_1" class="options__label">
                    <span class="options__text">Слабый</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="l_2"
                    class="options__input"
                    type="radio"
                    value="1"
                    name="lvl"
                    v-model="level"
                  />
                  <label for="l_2" class="options__label">
                    <span class="options__text">Нормальный</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="l_3"
                    class="options__input"
                    type="radio"
                    value="2"
                    name="lvl"
                    v-model="level"
                  />
                  <label for="l_3" class="options__label">
                    <span class="options__text">Сильный</span>
                  </label>
                </div>
              </div>
              <div class="input-app-label">Цель</div>
              <div class="options">
                <div class="options__item">
                  <input
                    id="g_1"
                    class="options__input"
                    type="radio"
                    value="0"
                    name="goal"
                    v-model="direction"
                  />
                  <label for="g_1" class="options__label">
                    <span class="options__text">Сброс веса</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="g_2"
                    class="options__input"
                    type="radio"
                    value="1"
                    name="goal"
                    v-model="direction"
                  />
                  <label for="g_2" class="options__label">
                    <span class="options__text">Сохранение веса</span>
                  </label>
                </div>
                <div class="options__item">
                  <input
                    id="g_3"
                    class="options__input"
                    type="radio"
                    value="2"
                    name="goal"
                    v-model="direction"
                  />
                  <label for="g_3" class="options__label">
                    <span class="options__text">Набор веса</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="calc-app__result">
            <div class="calc-app__title title-app">
              Рекомендуемое дневное потребление калорий:
            </div>
            <strong class="text-accent">{{ calcCalories }} кКал</strong>
            <div class="calc-app__numbers">
              <div class="input-app-label">расчет БЖУ:</div>
              <div class="calc-app__table">
                <div class="calc-app__table-row">
                  Белки
                  <strong>{{ proteins }}г</strong>
                </div>
                <div class="calc-app__table-row">
                  Жиры
                  <strong>{{ fats }}г</strong>
                </div>
                <div class="calc-app__table-row">
                  Углеводы
                  <strong>{{ carbohydrates }}г</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </MiniappLayout>
</template>

<style scoped>
input[type="number"] {
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
