<script setup>
import Chart from "chart.js/auto";
import { onMounted } from "vue";

const props = defineProps({
  fats: Number,
  proteins: Number,
  carbohydrates: Number,
});

onMounted(() => {
  new Chart(document.getElementById("chart"), {
    type: "doughnut",
    options: {
      cutout: "40%",
      //   animation: false,
      plugins: {
        legend: {
          display: false,
        },
        tooltip: {
          enabled: false,
        },
      },
    },
    data: {
      labels: ["Жиры", "Белки", "Углеводы"],
      datasets: [
        {
          label: "БЖУ",
          data: [props.fats, props.proteins, props.carbohydrates],
          backgroundColor: ["#F47560", "#E8C1A0", "#F1E15B"],
          hoverOffset: 0,
          borderColor: "#1f1f1f",
          borderRadius: 5,
        },
      ],
    },
  });
});
</script>

<template>
  <canvas id="chart"></canvas>
</template>
