<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import ButtonSecondary from '@/Components/Common/ButtonSecondary.vue';
</script>

<template>
	<AuthLayout>
		<template #h1>{{ $t("404.h1") }}</template>

		<template #default>
			<div class="flex items-center justify-center h-full">
				<div class=" reg__info">
					<div>
						<router-link :to="{ name: 'home' }">
							<ButtonSecondary>{{ $t("404.btn") }}</ButtonSecondary>
						</router-link>
					</div>
				</div>
			</div>
		</template>
	</AuthLayout>
</template>
