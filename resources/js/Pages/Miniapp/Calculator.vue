<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
</script>

<template>
	 <MiniappLayout>
		<div class="hero-app">
			<div class="hero-app__container">
				<div class="hero-app__title title-app">Калькулятор</div>
				<div class="calc-app">
					<div class="calc-app__item">
						<label class="param-calc__label input-app-label">Пол</label>
						<div class="options">
							<div class="options__item">
								<input id="o_1" class="options__input" checked type="radio" value="1" name="male">
								<label for="o_1" class="options__label">
									<span class="options__text">Мужской</span>
								</label>
							</div>
							<div class="options__item">
								<input id="o_2" class="options__input" type="radio" value="2" name="male">
								<label for="o_2" class="options__label">
									<span class="options__text">Женский</span>
								</label>
							</div>
						</div>
					</div>

					<div class="calc-app__item">
						<div class="param-calc">
							<div class="param-calc__item">
								<label for="old" class="param-calc__label input-app-label">Возраст</label>
								<input class="param-calc__input input" id="old" autocomplete="off" type="text" placeholder="35">
							</div>
							<div class="param-calc__item">
								<label for="height" class="param-calc__label input-app-label">Рост, см</label>
								<input class="param-calc__input input" id="height" autocomplete="off" type="text" placeholder="162">
							</div>
							<div class="param-calc__item">
								<label for="weight" class="param-calc__label input-app-label">Вес, кг</label>
								<input class="param-calc__input input" id="weight" autocomplete="off" type="text" placeholder="50">
							</div>
						</div>
					</div>

					<div class="calc-app__item">
						<div class="calc-app__options">
							<div class="input-app-label">Активность</div>
							<div class="options">
								<div class="options__item">
									<input id="a_1" class="options__input" type="radio" value="1" name="active">
									<label for="a_1" class="options__label">
										<span class="options__text">Минимальная</span>
									</label>
								</div>
								<div class="options__item">
									<input id="a_2" class="options__input" checked type="radio" value="2" name="active">
									<label for="a_2" class="options__label">
										<span class="options__text">Умеренная</span>
									</label>
								</div>
								<div class="options__item">
									<input id="a_3" class="options__input" type="radio" value="2" name="active">
									<label for="a_3" class="options__label">
										<span class="options__text">Высокая</span>
									</label>
								</div>
							</div>
							<div class="input-app-label">Уровень</div>
							<div class="options">
								<div class="options__item">
									<input id="l_1" class="options__input" type="radio" value="1" name="lvl">
									<label for="l_1" class="options__label">
										<span class="options__text">Слабый</span>
									</label>
								</div>
								<div class="options__item">
									<input id="l_2" class="options__input" checked type="radio" value="2" name="lvl">
									<label for="l_2" class="options__label">
										<span class="options__text">Нормальный</span>
									</label>
								</div>
								<div class="options__item">
									<input id="l_3" class="options__input" type="radio" value="3" name="lvl">
									<label for="l_3" class="options__label">
										<span class="options__text">Сильный</span>
									</label>
								</div>
							</div>
							<div class="input-app-label">Цель</div>
							<div class="options">
								<div class="options__item">
									<input id="g_1" class="options__input" type="radio" value="1" name="goal">
									<label for="g_1" class="options__label">
										<span class="options__text">Сброс веса</span>
									</label>
								</div>
								<div class="options__item">
									<input id="g_2" class="options__input" checked type="radio" value="2" name="goal">
									<label for="g_2" class="options__label">
										<span class="options__text">Сохранение веса</span>
									</label>
								</div>
								<div class="options__item">
									<input id="g_3" class="options__input" type="radio" value="3" name="goal">
									<label for="g_3" class="options__label">
										<span class="options__text">Набор веса</span>
									</label>
								</div>
							</div>
						</div>
					</div>



					<div class="calc-app__result">
						<div class="calc-app__title title-app">Рекомендуемое дневное потребление калорий:</div>
						<strong class="text-accent">1412кКал</strong>
						<div class="calc-app__numbers">
							<div class="input-app-label">расчет БЖУ:</div>
							<div class="calc-app__table">
								<div class="calc-app__table-row">
									Белки
									<strong>100г</strong>
								</div>
								<div class="calc-app__table-row">
									Жиры
									<strong>50г</strong>
								</div>
								<div class="calc-app__table-row">
									Углеводы
									<strong>140г</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </MiniappLayout>
</template>
