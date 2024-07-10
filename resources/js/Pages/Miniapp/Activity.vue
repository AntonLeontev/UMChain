<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
</script>

<template>
	 <MiniappLayout>
		<div class="hero-app">
			<div class="hero-app__container">
				<div class="hero-app__title title-app">Моя активность</div>
				<div class="hero-app__activity activity">
					<div class="activity__item">
						<div class="d-flex">
							<span>Эффективность достижения цели</span>
							<strong>20%</strong>
						</div>
					</div>
					<div class="activity__item">
						<div class="d-flex">
							<span>Количество активных калорий</span>
							<strong>153 ккал%</strong>
						</div>
						<div class="activity__item-date">
							<span class="text-accent">Сегодня</span>
							<div class="input-date">
								<input placeholder="Выбрать дату" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
							</div>
						</div>
					</div>
				</div>
				<div class="hero-app__diagram diagram">
					<div class="diagram__title">
						Сверить вес (внесите новые данные)
					</div>
					<!--activation add class _active -->
					<div class="diagram__input-box input-box _active">
						<input class="form__input input" id="d-weight_m" autocomplete="off" type="text" placeholder="_________">
						<button class="input-box__btn" type="button">
							<span>кг</span>
							<img src="/resources/images/icons/dropdown.svg" width="24" height="24" alt="Image">
						</button>
						<ul class="input-box__submenu">
							<li>lb</li>
						</ul>
					</div>
					<!--end  -->
					<div class="diagram__inner"></div>
				</div>
				<div class="hero-app__btns">
					<a href="" class="button button_app button_fw">Сгенерировать план питания</a>
					<a href="" class="button button_app button_fw">Сгенерировать план тренировок</a>
				</div>
			</div>
		</div>
	 </MiniappLayout>
</template>
