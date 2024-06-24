<script setup>
import { ref, computed, inject, onActivated } from "vue";

import NextButton from "../NextButton.vue";
import ProgressBar from "../ProgressBar.vue";
import Slider from "../Slider.vue";

const { quizPage, nextPage, prevPage, componentsCount } = inject("quiz");

const level = ref(sessionStorage.getItem("quiz.fat_level") ?? 0);

const dirName = ref(null);
const ageDir = ref(null);
onActivated(() => {
    dirName.value = sessionStorage.getItem("quiz.sex");

	const bday = sessionStorage.getItem("quiz.bday");
    let age = calculateAge(bday);

    ageDir.value =
        age < 30
            ? "18"
            : age < 40
            ? "30"
            : age < 50
            ? "40"
            : "50";
});

const fileName = computed(() => {
    return `${+level.value + 1}.webm`;
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

function tryNext() {
    sessionStorage.setItem("quiz.fat_level", level.value);
    nextPage();
}
</script>

<template>
    <main class="page">
        <section class="quiz section-padding">
            <div class="quiz__container-little">
                <ProgressBar />
                <div class="quiz-content _fat-goal">
                    <h2 class="quiz-content__title-mobile _hidden title">
                        Выберите свой уровень жира в&nbsp;организме
                    </h2>
                    <div class="quiz-content__img-wrapper" style="height: 680px; display: flex; justify-content: center">
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/1.webm`"
							alt="Image"
							v-show="level === 0"
							poster="/resources/images/video-poster.jpg"
						/>
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/2.webm`"
							alt="Image"
							v-show="level === 1"
							poster="/resources/images/video-poster.jpg"
						/>
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/3.webm`"
							alt="Image"
							v-show="level === 2"
							poster="/resources/images/video-poster.jpg"
						/>
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/4.webm`"
							alt="Image"
							v-show="level === 3"
							poster="/resources/images/video-poster.jpg"
						/>
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/5.webm`"
							alt="Image"
							v-show="level === 4"
							poster="/resources/images/video-poster.jpg"
						/>
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/6.webm`"
							alt="Image"
							v-show="level === 5"
							poster="/resources/images/video-poster.jpg"
						/>
						<video
							autoplay
							muted
							loop
							:src="`/video/${dirName}/${ageDir}/7.webm`"
							alt="Image"
							v-show="level === 6"
							poster="/resources/images/video-poster.jpg"
						/>
                    </div>
                    <div class="quiz-content__info">
                        <h2 class="quiz-content__title _hidden title">
                            Выберите свой уровень жира в&nbsp;организме
                        </h2>
                        <div class="quiz-content__range">
                            <Slider
                                :min="0"
                                :max="6"
                                :step="1"
                                :tooltips="false"
                                from="5-9%"
                                to="&gt;40%"
                                @change="(e) => (level = e)"
                            />
                        </div>
                        <div class="quiz-content__action">
                            <NextButton @click="tryNext" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
