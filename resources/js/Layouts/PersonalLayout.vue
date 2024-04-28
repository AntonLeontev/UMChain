<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import PersonalNavigation from "../Components/Personal/Sidebar/PersonalNavigation.vue";
</script>

<template>
	<AppLayout>
		<div class="container container--full">
            <div class="main__inner">
				<div class="main__left bg-bg-dark">
					<PersonalNavigation />
				</div>

				<div class="main__right main__right--right">
					<slot />
				</div>
			</div>
		</div> 
	</AppLayout>
</template>
