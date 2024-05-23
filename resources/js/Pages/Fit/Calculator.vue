<script setup>
import FadeTransition from "@/Components/Common/FadeTransition.vue";
import Check from "@/Components/Common/Check.vue";
import ButtonSecondary from "@/Components/Common/ButtonSecondary.vue";
import Loader from "@/Components/Common/Loader.vue";

import useUserStore from "@/stores/user";
import useToastsStore from "@/stores/toasts";

import useCatch from "@/composables/catch";
import useResetErrors from "@/composables/resetErrors";

import axios from "axios";
import { reactive, computed, ref } from "vue";
import { useI18n } from "vue-i18n";
const { t: $t } = useI18n();

const user = useUserStore().user;
const errors = reactive({});

const form = reactive({
    gender: user.gender ?? 0,
    age: user.age,
    height: user.height,
    weight: user.weight,
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
        .then((resp) => {
            useToastsStore().toastInfo($t("fit-calculator.updated"), 1500);
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

    if (form.direction == 0)
        return Math.round(activityBase - activityBase * level);
    if (form.direction == 1) return Math.round(activityBase);
    if (form.direction == 2)
        return Math.round(activityBase + activityBase * level);
});
const proteins = computed(() => form.weight * 2);
const fats = computed(() => form.weight);
const carbohydrates = computed(() => {
    return Math.round(
        (calcCalories.value - (proteins.value * 4 + fats.value * 9)) / 4
    );
});

function cleanNumber(event) {
    console.log(event.target.value);
    event.target.value = event.target.value.replaceAll(/[\D]/g, "");
}



const menu = ref(null);
const menuLoading = ref(false);
const menuType = ref(0);
function generateMenu() {
	menuLoading.value = true;

	axios
		.get(route("api.generate-menu"), { params: { 
			proteins: proteins.value, 
			fat: fats.value, 
			carbs: carbohydrates.value, 
			calories: calcCalories.value,
			menu_type: menuType.value,
		} })
		.then((resp) => {
			menu.value = resp.data.menu.replaceAll(/\n/g, "<br />");
		})
		.catch((error) => useCatch(error))
		.finally(() => (menuLoading.value = false));
}
</script>

<template>
	<div>
		<form
			id="fitCalculator"
			class="flex flex-col items-center"
			@change="submit"
		>
			<div class="mb-8 main__data">
				<div class="mb-3">
					<div class="reg__name">
						{{ $t("fit-calculator.form.Gender") }}
					</div>
					<div class="flex flex-col gap-1">
						<Check
							type="radio"
							name="gender"
							value="0"
							v-model="form.gender"
							>{{ $t("fit-calculator.form.Man") }}</Check
						>
						<Check
							type="radio"
							name="gender"
							value="1"
							v-model="form.gender"
							>{{ $t("fit-calculator.form.Woman") }}</Check
						>
					</div>
				</div>

				<div class="reg__one">
					<div class="reg__name">{{ $t("fit-calculator.form.Age") }}</div>
					<div class="reg__field">
						<input
							type="text"
							name="age"
							class="focus:border-b-pink focus:ring-0"
							v-model="form.age"
							@input="cleanNumber"
						/>
						<div
							class="text-danger"
							v-if="errors.age"
							v-text="errors.age"
						></div>
					</div>
				</div>
				<div class="reg__one">
					<div class="reg__name">
						{{ $t("fit-calculator.form.Height") }}
					</div>
					<div class="reg__field">
						<input
							type="text"
							name="height"
							class="focus:border-b-pink focus:ring-0"
							v-model="form.height"
							@input="cleanNumber"
						/>
						<div
							class="text-danger"
							v-if="errors.height"
							v-text="errors.height"
						></div>
					</div>
				</div>
				<div class="mb-3 reg__one">
					<div class="reg__name">
						{{ $t("fit-calculator.form.Weight") }}
					</div>
					<div class="reg__field">
						<input
							type="text"
							name="weight"
							class="focus:border-b-pink focus:ring-0"
							v-model="form.weight"
							@input="cleanNumber"
						/>
						<div
							class="text-danger"
							v-if="errors.weight"
							v-text="errors.weight"
						></div>
					</div>
				</div>
				<div class="mb-3">
					<div class="reg__name">
						{{ $t("fit-calculator.form.Activity") }}
					</div>
					<div class="flex flex-col gap-1">
						<Check
							type="radio"
							name="activity"
							value="0"
							v-model="form.activity"
							>{{ $t("fit-calculator.form.Minimum") }}</Check
						>
						<Check
							type="radio"
							name="activity"
							value="1"
							v-model="form.activity"
							>{{ $t("fit-calculator.form.Moderate") }}</Check
						>
						<Check
							type="radio"
							name="activity"
							value="2"
							v-model="form.activity"
							>{{ $t("fit-calculator.form.Active") }}</Check
						>
					</div>
				</div>
				<div class="mb-3">
					<div class="reg__name">
						{{ $t("fit-calculator.form.Level") }}
					</div>
					<div class="flex flex-col gap-1">
						<Check
							type="radio"
							name="level"
							value="0"
							v-model="form.level"
							>{{ $t("fit-calculator.form.Weak") }}</Check
						>
						<Check
							type="radio"
							name="level"
							value="1"
							v-model="form.level"
							>{{ $t("fit-calculator.form.Normal") }}</Check
						>
						<Check
							type="radio"
							name="level"
							value="2"
							v-model="form.level"
							>{{ $t("fit-calculator.form.Strong") }}</Check
						>
					</div>
				</div>
				<div>
					<div class="reg__name">
						{{ $t("fit-calculator.form.Direction") }}
					</div>
					<div class="flex flex-col gap-1">
						<Check
							type="radio"
							name="direction"
							value="0"
							v-model="form.direction"
							>{{ $t("fit-calculator.form.loss") }}</Check
						>
						<Check
							type="radio"
							name="direction"
							value="1"
							v-model="form.direction"
							>{{ $t("fit-calculator.form.keep") }}</Check
						>
						<Check
							type="radio"
							name="direction"
							value="2"
							v-model="form.direction"
							>{{ $t("fit-calculator.form.gain") }}</Check
						>
					</div>
				</div>
			</div>
		</form>
		<div>
			<FadeTransition>
				<div class="" v-if="form?.age && form?.height && form?.weight">
					<div class="">
						<div class="mb-3">
							<div class="text-center">
								{{ $t("fit-calculator.form.income") }}
							</div>
							<div class="text-center text-[25px]">
								<span v-text="calcCalories"></span>
								<span class="">{{
									$t("fit-calculator.form.kCal")
								}}</span>
							</div>
						</div>
						<div class="mb-6">
							<div class="text-center">
								{{ $t("fit-calculator.form.PFC") }}
							</div>
							<div class="flex justify-between gap-1">
								<span>{{ $t("fit-calculator.form.Proteins") }}</span>
								<div>
									<span v-text="proteins"></span>
									<span>{{ $t("fit-calculator.form.gramms") }}</span>
								</div>
							</div>
							<div class="flex justify-between gap-1">
								<span>{{ $t("fit-calculator.form.Fats") }}</span>
								<div>
									<span v-text="fats"></span>
									<span>{{ $t("fit-calculator.form.gramms") }}</span>
								</div>
							</div>
							<div class="flex justify-between gap-1">
								<span>{{
									$t("fit-calculator.form.Carbohydrates")
								}}</span>
								<div>
									<span v-text="carbohydrates"></span>
									<span>{{ $t("fit-calculator.form.gramms") }}</span>
								</div>
							</div>
						</div>
					</div>

					<div class="flex flex-col gap-2 items-center my-3 max-w-[400px]">
						<div class="text-xl text-center">{{ $t("fit-calculator.menu.title") }}</div>
						<div class="flex flex-col w-full gap-1">
							<Check
								type="radio"
								name="menu_type"
								value="0"
								v-model="menuType"
								>{{ $t("fit-calculator.menu.type-normal") }}</Check
							>
							<Check
								type="radio"
								name="menu_type"
								value="1"
								v-model="menuType"
								>{{ $t("fit-calculator.menu.type-vegetarian") }}</Check
							>
							<Check
								type="radio"
								name="menu_type"
								value="2"
								v-model="menuType"
								>{{ $t("fit-calculator.menu.type-fish") }}</Check
							>
							<Check
								type="radio"
								name="menu_type"
								value="3"
								v-model="menuType"
								>{{ $t("fit-calculator.menu.type-halal") }}</Check
							>
						</div>
						<ButtonSecondary @click.prevent="generateMenu">
							{{ $t("fit-calculator.menu.btn") }}
							<Loader v-show="menuLoading" />
						</ButtonSecondary>
						<div class="mt-3" v-html="menu"></div>
					</div>
				</div>
			</FadeTransition>
		</div>
	</div>
    
</template>
