<script setup>
import { ref, provide } from "vue";

import QuizLayout from "@/Layouts/QuizLayout.vue";
import Home from "@/Components/Quiz/Slides/Home.vue";
import Goal from "@/Components/Quiz/Slides/Goal.vue";
import FatLevel from "@/Components/Quiz/Slides/FatLevel.vue";
import ProblemZones from "@/Components/Quiz/Slides/ProblemZones.vue";
import TrainingPlace from "@/Components/Quiz/Slides/TrainingPlace.vue";
import TrainingTime from "@/Components/Quiz/Slides/TrainingTime.vue";
import Why from "@/Components/Quiz/Slides/Why.vue";
import Food from "@/Components/Quiz/Slides/Food.vue";
import Water from "@/Components/Quiz/Slides/Water.vue";
import Info1 from "@/Components/Quiz/Slides/Info1.vue";
import PhysicalActivity from "@/Components/Quiz/Slides/PhysicalActivity.vue";
import Problems from "@/Components/Quiz/Slides/Problems.vue";
import WhyReason from "@/Components/Quiz/Slides/WhyReason.vue";
import AdditionalGoals from "@/Components/Quiz/Slides/AdditionalGoals.vue";
import Info2 from "@/Components/Quiz/Slides/Info2.vue";
import Question2 from "@/Components/Quiz/Slides/Question2.vue";
import Question3 from "@/Components/Quiz/Slides/Question3.vue";
import Email from "@/Components/Quiz/Slides/Email.vue";

let components = [
    Home,
    Goal,
    FatLevel,
    ProblemZones,
    TrainingPlace,
    TrainingTime,
    Why,
    Food,
    Water,
    Info1,
    PhysicalActivity,
    Problems,
    WhyReason,
    AdditionalGoals,
    Info2,
    Question2,
    Question3,
];

if (!sessionStorage.getItem("telegramInitData")) {
	components.push(Email);
}

const componentsCount = components.length;
const quizPage = ref(0);

function nextPage() {
    if (quizPage.value === componentsCount - 1) {
		saveAnswers();
		return;
	};

    goToTop();
    quizPage.value++;
}

function prevPage() {
    if (quizPage.value === 0) return;
	
    goToTop();
    quizPage.value--;
}

function goToTop() {
	window.scroll({
        top: 0,
    });
}

function saveAnswers() {
	let data = {
		accept_ads: sessionStorage.getItem("quiz.accept_ads"),
		additional_goals: sessionStorage.getItem("quiz.additional_goals"),
		agree: sessionStorage.getItem("quiz.agree"),
		bday: sessionStorage.getItem("quiz.bday"),
		deadline: sessionStorage.getItem("quiz.deadline"),
		fat_level: sessionStorage.getItem("quiz.fat_level"),
		food: sessionStorage.getItem("quiz.food"),
		goal: sessionStorage.getItem("quiz.goal"),
		height_dimension: sessionStorage.getItem("quiz.height_dimension"),
		height_value: sessionStorage.getItem("quiz.height_value"),
		name: sessionStorage.getItem("quiz.name"),
		physical_activity: sessionStorage.getItem("quiz.physical_activity"),
		problems: sessionStorage.getItem("quiz.problems"),
		sex: sessionStorage.getItem("quiz.sex"),
		target_weight_dimension: sessionStorage.getItem("quiz.target_weight_dimension"),
		target_weight_value: sessionStorage.getItem("quiz.target_weight_value"),
		training_place: sessionStorage.getItem("quiz.training_place"),
		training_time: sessionStorage.getItem("quiz.training_time"),
		trainings_count: sessionStorage.getItem("quiz.trainings_count"),
		water: sessionStorage.getItem("quiz.water"),
		weight_dimension: sessionStorage.getItem("quiz.weight_dimension"),
		weight_value: sessionStorage.getItem("quiz.weight_value"),
		why: sessionStorage.getItem("quiz.why"),
		zones: sessionStorage.getItem("quiz.zones"),
	};

	axios.post(route('api.quizzes.store'), data)
		.then((response) => {
			console.log(response);
		})
		.catch((error) => {
			console.log(error);
		});
}

provide("quiz", { quizPage, nextPage, prevPage, componentsCount });
</script>

<template>
    <QuizLayout>
        <div class="quiz__top"></div>
        <keep-alive>
            <Component :is="components[quizPage]" />
        </keep-alive>
    </QuizLayout>
</template>

<style scoped>
.page {
    min-height: calc(100vh - 105px);
}
</style>
