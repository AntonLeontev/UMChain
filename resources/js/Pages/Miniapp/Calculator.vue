<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";

import useUserStore from "@/stores/user";
import useToastsStore from "@/stores/toasts";

import useCatch from "@/composables/catch";
import useResetErrors from "@/composables/resetErrors";

import { computed, reactive } from "vue";

const user = useUserStore().user;
const errors = reactive({});

const form = reactive({
  gender: user.gender ?? 0,
  age: user.age,
  height: user.height[user.height_dimension],
  weight: user.weight[user.weight_dimension],
  activity: user.activity ?? 0,
  level: user.level ?? 0,
  direction: user.direction ?? 0,
});

function submit(event) {
  useResetErrors(errors);

  axios
    .put(
      route("api.user.update"),
      Object.fromEntries(new FormData(event.target.closest("form")))
    )
    .then((response) => {
      user.gender = form.gender;
      user.age = form.age;
      user.height[user.height_dimension] = form.height;
      user.weight[user.weight_dimension] = form.weight;
      user.activity = form.activity;
      user.level = form.level;
      user.direction = form.direction;
    })
    .catch((error) => useCatch(error, errors));
}

const calcCalories = computed(() => {
  let activity, level, activityBase;

  if (form.activity == 0) activity = 1.2;
  if (form.activity == 1) activity = 1.375;
  if (form.activity == 2) activity = 1.725;

  if (form.level == 0) level = 0.1;
  if (form.level == 1) level = 0.15;
  if (form.level == 2) level = 0.2;

  let base = 10 * form.weight + 6.25 * form.height - 5 * form.age;

  if (form.gender == 0) {
    activityBase = (base + 5) * activity;
  }
  if (form.gender == 1) {
    activityBase = (base - 161) * activity;
  }

  if (form.direction == 0) return Math.round(activityBase - activityBase * level);
  if (form.direction == 1) return Math.round(activityBase);
  if (form.direction == 2) return Math.round(activityBase + activityBase * level);
});
const proteins = computed(() => form.weight * 2);
const fats = computed(() => form.weight);
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
        <form class="calc-app" @change="submit">
          <div class="calc-app__item">
            <label class="param-calc__label input-app-label">Пол</label>
            <div class="options">
              <div class="options__item">
                <input
                  id="o_1"
                  class="options__input"
                  type="radio"
                  value="0"
                  name="gender"
                  v-model="form.gender"
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
                  name="gender"
                  v-model="form.gender"
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
                  name="age"
                  autocomplete="off"
                  type="text"
                  v-model="form.age"
                  @input="cleanNumber"
                />
              </div>
              <div class="param-calc__item">
                <label for="height" class="param-calc__label input-app-label"
                  >Рост, {{ user.height_dimension }}</label
                >
                <input
                  class="param-calc__input input"
                  id="height"
                  name="height"
                  autocomplete="off"
                  type="text"
                  v-model="form.height"
                />
              </div>
              <div class="param-calc__item">
                <label for="weight" class="param-calc__label input-app-label"
                  >Вес, {{ user.weight_dimension }}</label
                >
                <input
                  class="param-calc__input input"
                  name="weight"
                  autocomplete="off"
                  type="text"
                  v-model="form.weight"
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
                    name="activity"
                    v-model="form.activity"
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
                    name="activity"
                    v-model="form.activity"
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
                    name="activity"
                    v-model="form.activity"
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
                    name="level"
                    v-model="form.level"
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
                    name="level"
                    v-model="form.level"
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
                    name="level"
                    v-model="form.level"
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
                    name="direction"
                    v-model="form.direction"
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
                    name="direction"
                    v-model="form.direction"
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
                    name="direction"
                    v-model="form.direction"
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
        </form>
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
