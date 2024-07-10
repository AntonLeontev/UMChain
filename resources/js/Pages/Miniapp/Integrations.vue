<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
</script>

<template>
	 <MiniappLayout>
		<div class="hero-app">
			<div class="hero-app__container">
				<div class="hero-app__title title-app">Интеграции</div>
				<div class="integrations">
					<div class="integrations__module">
						<div class="integrations__category">
							Подключено:
						</div>
						<div class="integrations__item">
							<div class="integrations__label">
								Google Fit: трекер активности
							</div>
							<a href="" class="integrations__btn button button_outline">
								<img src="/resources/images/miniapp/integration/logos_google-fit.svg" alt="Image">
								Google Fit
							</a>
						</div>
						<div class="integrations__actions">
							<a href="" class="button button_app">Удалить</a>
						</div>
					</div>
					<div class="integrations__module">
						<div class="integrations__category">
							Подключить другие сервисы:
						</div>
						<div class="integrations__item">
							<div class="integrations__label">
								Здоровье на Apple Watch
							</div>
							<a href="" class="integrations__btn button button_outline">
								<img src="/resources/images/miniapp/integration/heroicons_heart.svg" alt="Image">
								Apple Здоровье
							</a>
						</div>
						<div class="integrations__item">
							<div class="integrations__label">
								Счетчик Калорий от
							</div>
							<a href="" class="integrations__btn button button_outline">
								<img src="/resources/images/miniapp/integration/logo-fat.png" alt="Image">
								FatSecret
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </MiniappLayout>
</template>
