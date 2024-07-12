<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
import ButtonPrimary from "@/Components/Miniapp/ButtonPrimary.vue";
import Chart from "@/Components/Miniapp/PFCChart.vue";

import useUserStore from "@/stores/user";

import { computed, ref } from "vue";

const user = useUserStore().user;

const calcCalories = computed(() => {
  let activity, level, activityBase;

  if (user.activity == 0) activity = 1.2;
  if (user.activity == 1) activity = 1.375;
  if (user.activity == 2) activity = 1.725;

  if (user.level == 0) level = 0.1;
  if (user.level == 1) level = 0.15;
  if (user.level == 2) level = 0.2;

  let base =
    10 * user.weight[user.weight_dimension] +
    6.25 * user.height[user.height_dimension] -
    5 * user.age;

  if (user.gender == 0) {
    activityBase = (base + 5) * activity;
  }
  if (user.gender == 1) {
    activityBase = (base - 161) * activity;
  }

  if (user.direction == 0) return Math.round(activityBase - activityBase * level);
  if (user.direction == 1) return Math.round(activityBase);
  if (user.direction == 2) return Math.round(activityBase + activityBase * level);
});
const proteins = computed(() => user.weight[user.weight_dimension] * 2);
const fats = computed(() => user.weight[user.weight_dimension]);
const carbohydrates = computed(() => {
  return Math.round((calcCalories.value - (proteins.value * 4 + fats.value * 9)) / 4);
});

const menu = ref(null);
const menuLoading = ref(false);
const menuType = ref(0);
function generateMenu() {
  menuLoading.value = true;

  axios
    .get(route("api.generate-menu"), {
      params: {
        proteins: proteins.value,
        fat: fats.value,
        carbs: carbohydrates.value,
        calories: calcCalories.value,
        menu_type: menuType.value,
      },
    })
    .then((resp) => {
      menu.value = resp.data.menu.replaceAll(/\n/g, "<br />");
    })
    .catch((error) => useCatch(error))
    .finally(() => (menuLoading.value = false));
}
</script>

<template>
  <MiniappLayout>
    <div class="hero-app">
      <div class="hero-app__container">
        <div class="hero-app__tabs tabs">
          <nav class="tabs__navigation">
            <span href="" class="tabs__title _tab-active">План питания</span>
            <span href="" class="tabs__title">Трекер воды</span>
            <span href="" class="tabs__title">CleanDay</span>
            <span href="" class="tabs__title">FatSecret</span>
          </nav>
        </div>
        <div class="hero-app__statistic statistic">
          <div class="statistic__text">
            На основе данных, которые вы вносили, у&nbsp;вас должно быть такое КБЖУ:
          </div>
          <div class="statistic__table">
            <div class="statistic__row">
              <div class="statistic__col">Белки</div>
              <div class="statistic__col">{{ proteins }} г</div>
            </div>
            <div class="statistic__row">
              <div class="statistic__col">Жиры</div>
              <div class="statistic__col">{{ fats }} г</div>
            </div>
            <div class="statistic__row">
              <div class="statistic__col">Углеводы</div>
              <div class="statistic__col">{{ carbohydrates }} г</div>
            </div>
          </div>
        </div>
        <div class="hero-app__chart">
          <div class="chart">
            <!--chart__inner for chart width:250px height:150px-->
            <div class="chart__inner flex justify-center grow-1">
              <Chart :fats="fats" :carbohydrates="carbohydrates" :proteins="proteins" />
            </div>
            <!--end chart__inner -->
            <div class="chart__legend legend-chart">
              <div class="legend-chart__item">
                <div
                  class="legend-chart__col"
                  style="background: var(--chart-color-primary)"
                ></div>
                <div class="legend-chart__val">Белки</div>
              </div>
              <div class="legend-chart__item">
                <div
                  class="legend-chart__col"
                  style="background: var(--chart-color-secondary)"
                ></div>
                <div class="legend-chart__val">Жиры</div>
              </div>
              <div class="legend-chart__item">
                <div
                  class="legend-chart__col"
                  style="background: var(--chart-color-third)"
                ></div>
                <div class="legend-chart__val">Углеводы</div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-app__menu menu-meal">
          <div class="menu-meal__label">Выберете подходящее меню</div>
          <div class="options">
            <div class="options__item">
              <input
                id="o_3"
                class="options__input"
                type="radio"
                value="0"
                name="meal"
                v-model="menuType"
              />
              <label for="o_3" class="options__label">
                <span class="options__text">Обычное</span>
              </label>
            </div>
            <div class="options__item">
              <input
                id="o_1"
                class="options__input"
                type="radio"
                value="1"
                name="meal"
                v-model="menuType"
              />
              <label for="o_1" class="options__label">
                <span class="options__text">Веганское</span>
              </label>
            </div>
            <div class="options__item">
              <input
                id="o_2"
                class="options__input"
                type="radio"
                value="3"
                name="meal"
                v-model="menuType"
              />
              <label for="o_2" class="options__label">
                <span class="options__text">Халяльное</span>
              </label>
            </div>
          </div>
        </div>
        <div class="hero-app__action">
          <ButtonPrimary type="button" :loader="menuLoading" @click="generateMenu"
            >Сгенерировать</ButtonPrimary
          >
        </div>
        <div class="">{{ menu }}</div>
      </div>
    </div>
  </MiniappLayout>
</template>
