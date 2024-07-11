<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
</script>

<template>
  <MiniappLayout> 
	<div class="hero-app">
		<div class="hero-app__container">
			<div class="hero-app__tabs tabs">
				<nav class="tabs__navigation">
					<a href="" class="tabs__title _tab-active">План питания</a>
					<a href="" class="tabs__title">Трекер воды</a>
					<a href="" class="tabs__title">CleanDay</a>
					<a href="" class="tabs__title">FatSecret</a>
				</nav>
			</div>
			<div class="hero-app__statistic statistic">
				<div class="statistic__text">На основе данных, которые вы вносили, у&nbsp;вас должно быть такое КБЖУ: </div>
				<div class="statistic__table">
					<div class="statistic__row">
						<div class="statistic__col">Белки</div>
						<div class="statistic__col">510</div>
					</div>
					<div class="statistic__row">
						<div class="statistic__col">Жиры</div>
						<div class="statistic__col">472</div>
					</div>
					<div class="statistic__row">
						<div class="statistic__col">Углеводы</div>
						<div class="statistic__col">429</div>
					</div>
				</div>
			</div>
			<div class="hero-app__chart">
				<div class="chart">
					<!--chart__inner for chart width:250px height:150px-->
					<div class="chart__inner"></div>
					<!--end chart__inner -->
					<div class="chart__legend legend-chart">
						<div class="legend-chart__item">
							<div class="legend-chart__col" style="background: var(--chart-color-primary);"></div>
							<div class="legend-chart__val">Белки</div>
						</div>
						<div class="legend-chart__item">
							<div class="legend-chart__col" style="background: var(--chart-color-secondary);"></div>
							<div class="legend-chart__val">Жиры</div>
						</div>
						<div class="legend-chart__item">
							<div class="legend-chart__col" style="background: var(--chart-color-third)"></div>
							<div class="legend-chart__val">Углеводы</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-app__menu menu-meal">
				<div class="menu-meal__label">
					Выберете подходящее меню
				</div>
				<div class="options">
					<div class="options__item">
						<input id="o_1" class="options__input" checked type="radio" value="1" name="meal">
						<label for="o_1" class="options__label">
							<span class="options__text">Веганское</span>
						</label>
					</div>
					<div class="options__item">
						<input id="o_2" class="options__input" type="radio" value="2" name="meal">
						<label for="o_2" class="options__label">
							<span class="options__text">Халяльное</span>
						</label>
					</div>
					<div class="options__item">
						<input id="o_3" class="options__input" type="radio" value="3" name="meal">
						<label for="o_3" class="options__label">
							<span class="options__text">Обычное</span>
						</label>
					</div>
				</div>
			</div>
			<div class="hero-app__action">
				<button class="button button_app" type="button">Сгенерировать</button>
			</div>
		</div>
	</div>
  </MiniappLayout>
</template>
