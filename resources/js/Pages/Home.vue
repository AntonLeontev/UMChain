<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
</script>
<template>
	<AppLayout>
		<div>
			<h1>HOME</h1>
			<router-link :to="{name: 'login'}"> Take me to login page </router-link>
		</div>
	</AppLayout>
</template>
