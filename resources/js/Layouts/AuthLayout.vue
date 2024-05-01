<script setup>
import AppLayout from './AppLayout.vue';
</script>

<template>
	<AppLayout>
		<section class="reg">
			<div class="container container--small">
				<div class="reg__inner">
					<h1 class="reg__title">
						<slot name="h1" />
					</h1>
					<div class="reg__wrapper">

						<slot />

						<div class="reg__img reg__img--desc">
							<img src="/resources/images/svg/cube.svg" alt="">
						</div>
						<div class="reg__img reg__img--mob">
							<img src="/resources/images/svg/cubeMob.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	</AppLayout>
</template>
