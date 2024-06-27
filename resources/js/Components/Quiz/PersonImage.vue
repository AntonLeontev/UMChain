<script setup>
import { onActivated, ref } from "vue";

const dirName = ref(null);
const ageDir = ref(null);
let fatLevel = (+sessionStorage.getItem("quiz.fat_level") ?? 1) + 1;
const fileName = ref(fatLevel);

onActivated(() => {
  dirName.value = sessionStorage.getItem("quiz.sex") ?? "male";
  const bday = sessionStorage.getItem("quiz.bday");
  let age = calculateAge(bday);

  ageDir.value = age < 30 ? "18" : age < 40 ? "30" : age < 50 ? "40" : "50";
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
  <div class="video_wrapper">
    <video
      autoplay
      muted
      loop
      disablepictureinpicture=""
      webkit-playsinline=""
      playsinline=""
      pip="false"
      :src="`/video/${dirName}/${ageDir}/${fileName}.webm`"
      poster="/resources/images/video-poster.jpg"
    />
  </div>
</template>

<style scoped>
.video_wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}
video {
  background-color: transparent;
  border-bottom: 1px solid transparent; /* хак для предотвращения мелькания при загрузке на некоторых версиях ios */
  &::-webkit-media-controls-panel {
    display: none !important;
    -webkit-appearance: none;
    opacity: 0;
    visibility: hidden;
  }
  &::-webkit-media-controls-play-button {
    display: none !important;
    -webkit-appearance: none;
    opacity: 0;
    visibility: hidden;
  }
  &::-webkit-media-controls-start-playback-button {
    display: none !important;
    -webkit-appearance: none;
    opacity: 0;
    visibility: hidden;
  }
}
</style>
