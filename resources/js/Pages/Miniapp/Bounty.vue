<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
</script>

<template>
	 <MiniappLayout>
		<div class="hero-app">
			<div class="hero-app__container">
				<div class="hero-app__title title-app">Ежедневная награда</div>
				<div class="hero-app__text">
					Забирайте поинты и NFT за ежедневный вход в&nbsp;приложение без пропусков. Кнопку “Забрать” нужно
					нажимать ежедневно, иначе счетчик дней начнется заново
				</div>
				<div class="hero-app__bonus bonus">
					<div class="bonus__inner">
						<!--bonus__item класс _today как я понял обозначает сегодняшнюю награду которую можно получить-->
						<div class="bonus__item _today">
							<span>День 1</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>10</strong>
						</div>
						<!--end bonus__item  -->
						<!--bonus__item класс bonus__item_active показывает награду которую забрали-->
						<div class="bonus__item bonus__item_active">
							<span>День 2</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>15</strong>
						</div>
						<!--end bonus__item -->
						<div class="bonus__item bonus__item_active">
							<span>День 3</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>25</strong>
						</div>
						<div class="bonus__item">
							<span>День 4</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>50</strong>
						</div>
						<div class="bonus__item">
							<span>День 5</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>100</strong>
						</div>
						<div class="bonus__item">
							<span>День 6</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>500</strong>
						</div>
						<div class="bonus__item">
							<span>День 7</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>1000</strong>
						</div>
						<div class="bonus__item">
							<span>День 8</span>
							<img class="bonus__item-money" src="/resources/images/miniapp/money.svg" alt="Image">
							<strong>2000</strong>
						</div>
						<div class="bonus__item">
							<span>День 9</span>
							<img class="bonus__item-nft" src="/resources/images/miniapp/nft/01.jpg" alt="Image">
						</div>
						<div class="bonus__item">
							<span>День 10</span>
							<img class="bonus__item-nft" src="/resources/images/miniapp/nft/02.jpg" alt="Image">
						</div>
					</div>
					<div class="bonus__action">
						<!-- button класс button_disable добавляется после нажатия на кнопку забрать -->
						<button class="button button_app button_disable" type="button">
							<span>Забрать</span>
							<span>Возвращайся завтра</span>
						</button>
						<!--end  button -->
					</div>
				</div>
			</div>
		</div>
	 </MiniappLayout>
</template>
