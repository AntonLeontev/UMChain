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

const components = [
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
  Email,
];
const componentsCount = components.length;
const quizPage = ref(10);

function nextPage() {
  if (quizPage.value === componentsCount - 1) return;

  quizPage.value++;
}

function prevPage() {
  if (quizPage.value === 0) return;

  quizPage.value--;
}

provide("quiz", { quizPage, nextPage, prevPage, componentsCount });
</script>

<template>
  <QuizLayout>
    <keep-alive>
      <Component :is="components[quizPage]" exclude="Goal" />
    </keep-alive>
  </QuizLayout>
</template>

<style scoped>
.page {
  min-height: calc(100vh - 105px);
}
</style>
