<script setup>
import useUserStore from "@/stores/user";

const user = useUserStore().user;

const dirName = user.gender === 0 ? "male" : "female";
const fileName = user.level + 1;

let age = user.age;

const ageDir = age < 30 ? "18" : age < 40 ? "30" : age < 50 ? "40" : "50";
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
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
video {
  width: 100%;
  height: 100%;
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
