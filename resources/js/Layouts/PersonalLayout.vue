<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import PersonalNavigation from "../Components/Personal/Sidebar/PersonalNavigation.vue";
</script>

<template>
	<AppLayout>
		<PersonalNavigation />
		<slot />
	</AppLayout>
</template>
