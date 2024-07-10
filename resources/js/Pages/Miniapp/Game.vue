<script setup>
import MiniappLayout from "@/Layouts/MiniappLayout.vue";
import PersonImage from "@/Components/Miniapp/PersonImage.vue";
</script>

<template>
  <MiniappLayout>
	<div class="hero-app">
		<div class="hero-app__container">

			<div class="hero-app__balance balance">
				<img src="/resources/images/miniapp/money.svg" width="34" height="34" alt="Image">
				<strong>14 123</strong>
			</div>
			<div class="hero-app__progress progress">
				<div class="progress__inner">
					<div class="progress__header">
						<div class="progress__status">
							Новичок
							<img src="/resources/images/miniapp/icons/arrow.svg" width="16" height="16" alt="Image">
						</div>
						<div class="progress__numbers">
							<span>Level</span>
							<strong>1/10</strong>
						</div>
					</div>
					<div class="progress__line">
						<div class="progress__value" style="width: 10%;"></div>
					</div>
				</div>
			</div>

			<div class="h-[300px]">
				<PersonImage />
			</div>

			<div class="hero-app__tabs tabs">
				<nav class="tabs__navigation">
					<a href="" class="tabs__title _tab-active">Кардио зал</a>
					<a href="" class="tabs__title">Силовой зал</a>
					<a href="" class="tabs__title">Дома</a>
					<a href="" class="tabs__title">Задания</a>
				</nav>
			</div>
			
			<div class="shop__items">
				<!--item-shop при нажатии на блок активируем попап  добавлением класса item-shop_buy -->
				<div class="item-shop">
					<div class="item-shop__inner">
						<div class="item-shop__img">
							<img src="/resources/images/miniapp/shop/01.jpg" width="65" height="54" alt="Image">
						</div>
						<div class="item-shop__body">
							<div class="item-shop__title">Футболка</div>
							<div class="item-shop__num"># 567898656</div>
							<div class="item-shop__price">
								<span>Lv5</span>
								<div class="item-shop__currency currency">
									<strong>645</strong>
									<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="item-shop__buy">
						<button class="button-close" type="button">
							<img src="/resources/images/miniapp/icons/close.svg" alt="Image">
						</button>
						<div class="item-shop__inner">
							<div class="item-shop__img">
								<img src="/resources/images/miniapp/shop/single/01.jpg" width="175" height="201" alt="Image">
							</div>
							<div class="item-shop__body">
								<div class="item-shop__title">Футболка</div>
								<div class="item-shop__num"><span># 567898656</span><span>Lv5</span></div>
								<div class="item-shop__price">
									<div class="item-shop__currency currency">
										<strong>645</strong>
										<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="item-shop__action">
							<a href="" class="button button_app">Купить</a>
						</div>
					</div>
				</div>
				<!--end  -->
				<div class="item-shop">
					<div class="item-shop__inner">
						<div class="item-shop__img">
							<img src="/resources/images/miniapp/shop/01.jpg" width="65" height="54" alt="Image">
						</div>
						<div class="item-shop__body">
							<div class="item-shop__title">Футболка</div>
							<div class="item-shop__num"># 567898656</div>
							<div class="item-shop__price">
								<span>Lv5</span>
								<div class="item-shop__currency currency">
									<strong>645</strong>
									<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="item-shop__buy">
						<button class="button-close" type="button">
							<img src="/resources/images/miniapp/icons/close.svg" alt="Image">
						</button>
						<div class="item-shop__inner">
							<div class="item-shop__img">
								<img src="/resources/images/miniapp/shop/single/01.jpg" width="175" height="201" alt="Image">
							</div>
							<div class="item-shop__body">
								<div class="item-shop__title">Футболка</div>
								<div class="item-shop__num"><span># 567898656</span><span>Lv5</span></div>
								<div class="item-shop__price">
									<div class="item-shop__currency currency">
										<strong>645</strong>
										<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="item-shop__action">
							<a href="" class="button button_app">Купить</a>
						</div>
					</div>
				</div>
				<div class="item-shop">
					<div class="item-shop__inner">
						<div class="item-shop__img">
							<img src="/resources/images/miniapp/shop/01.jpg" width="65" height="54" alt="Image">
						</div>
						<div class="item-shop__body">
							<div class="item-shop__title">Футболка</div>
							<div class="item-shop__num"># 567898656</div>
							<div class="item-shop__price">
								<span>Lv5</span>
								<div class="item-shop__currency currency">
									<strong>645</strong>
									<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="item-shop__buy">
						<button class="button-close" type="button">
							<img src="/resources/images/miniapp/icons/close.svg" alt="Image">
						</button>
						<div class="item-shop__inner">
							<div class="item-shop__img">
								<img src="/resources/images/miniapp/shop/single/01.jpg" width="175" height="201" alt="Image">
							</div>
							<div class="item-shop__body">
								<div class="item-shop__title">Футболка</div>
								<div class="item-shop__num"><span># 567898656</span><span>Lv5</span></div>
								<div class="item-shop__price">
									<div class="item-shop__currency currency">
										<strong>645</strong>
										<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="item-shop__action">
							<a href="" class="button button_app">Купить</a>
						</div>
					</div>
				</div>
				<div class="item-shop">
					<div class="item-shop__inner">
						<div class="item-shop__img">
							<img src="/resources/images/miniapp/shop/01.jpg" width="65" height="54" alt="Image">
						</div>
						<div class="item-shop__body">
							<div class="item-shop__title">Футболка</div>
							<div class="item-shop__num"># 567898656</div>
							<div class="item-shop__price">
								<span>Lv5</span>
								<div class="item-shop__currency currency">
									<strong>645</strong>
									<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="item-shop__buy">
						<button class="button-close" type="button">
							<img src="/resources/images/miniapp/icons/close.svg" alt="Image">
						</button>
						<div class="item-shop__inner">
							<div class="item-shop__img">
								<img src="/resources/images/miniapp/shop/single/01.jpg" width="175" height="201" alt="Image">
							</div>
							<div class="item-shop__body">
								<div class="item-shop__title">Футболка</div>
								<div class="item-shop__num"><span># 567898656</span><span>Lv5</span></div>
								<div class="item-shop__price">
									<div class="item-shop__currency currency">
										<strong>645</strong>
										<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="item-shop__action">
							<a href="" class="button button_app">Купить</a>
						</div>
					</div>
				</div>
				<div class="item-shop">
					<div class="item-shop__inner">
						<div class="item-shop__img">
							<img src="/resources/images/miniapp/shop/01.jpg" width="65" height="54" alt="Image">
						</div>
						<div class="item-shop__body">
							<div class="item-shop__title">Футболка</div>
							<div class="item-shop__num"># 567898656</div>
							<div class="item-shop__price">
								<span>Lv5</span>
								<div class="item-shop__currency currency">
									<strong>645</strong>
									<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="item-shop__buy">
						<button class="button-close" type="button">
							<img src="/resources/images/miniapp/icons/close.svg" alt="Image">
						</button>
						<div class="item-shop__inner">
							<div class="item-shop__img">
								<img src="/resources/images/miniapp/shop/single/01.jpg" width="175" height="201" alt="Image">
							</div>
							<div class="item-shop__body">
								<div class="item-shop__title">Футболка</div>
								<div class="item-shop__num"><span># 567898656</span><span>Lv5</span></div>
								<div class="item-shop__price">
									<div class="item-shop__currency currency">
										<strong>645</strong>
										<img src="/resources/images/miniapp/currency/ton.svg" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="item-shop__action">
							<a href="" class="button button_app">Купить</a>
						</div>
					</div>
				</div>
		</div>


		</div>
	</div>

  </MiniappLayout>
</template>
