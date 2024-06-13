<script setup>
import { onActivated, ref } from "vue";

const imageDirName = ref(null);
const imageFileName = ref(null);

onActivated(() => {
  imageDirName.value =
    sessionStorage.getItem("quiz.sex") === "male" ? "men-old" : "women-old";
  const bday = sessionStorage.getItem("quiz.bday");
  let age = calculateAge(bday);

  imageFileName.value =
    age < 30
      ? "18-29.png"
      : age < 40
      ? "30-39.png"
      : age < 50
      ? "40-49.png"
      : "50plus.png";
});

function calculateAge(birthDate) {
  const birthDateParts = birthDate.split("-");
  const birthYear = parseInt(birthDateParts);
  const birthMonth = parseInt(birthDateParts);
  const birthDay = parseInt(birthDateParts);

  const today = new Date();
  const currentYear = today.getFullYear();
  const currentMonth = today.getMonth() + 1;
  const currentDay = today.getDate();

  let age = currentYear - birthYear;

  if (
    currentMonth < birthMonth ||
    (currentMonth === birthMonth && currentDay < birthDay)
  ) {
    age--;
  }

  return age;
}
</script>

<template>
  <!--quiz-content__img при наличии 3d-model этот блок не используем -> (quiz-content__img) -->
  <div class="quiz-content__img -ibg">
    <img :src="'/images/' + imageDirName + '/' + imageFileName" alt="Image" />
  </div>
  <!--end quiz-content__img -->
</template>
