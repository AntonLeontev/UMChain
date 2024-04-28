<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
</script>

<template>
	<AppLayout>
		<section class="major h-[100%]">
			<div class="container">
				<div class="major__inner">
					<div class="major__left">
						<h1 class="mb-24 major__title">{{ $t('home.h1') }}</h1>
						<div class="major__btn">
							<router-link :to="{ name: 'register' }">{{ $t('home.register') }}</router-link>
						</div>
					</div>
				</div>
			</div>
		</section>
	</AppLayout>
</template>
