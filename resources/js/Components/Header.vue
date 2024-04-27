<script setup>
import LangSwitch from './LangSwitch.vue';
</script>

<template>
	<header class="relative header z-[60]">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
				<router-link :to="{name: 'home'}">
					<img src="/resources/images/svg/logo.svg" alt="logo" width="116"> 
				</router-link>
            </div>

			<div class="flex items-center gap-x-5 md:gap-x-10">
				<div class="header__lang">
					<LangSwitch />
				</div>

				<div class="header__person active">
					<router-link :to="{name: 'personal'}">
						<svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="37.4" height="34" rx="1.36" stroke="white" stroke-width="4"
								mask="url(#path-1-inside-1_17:597)"/>
							<path
								d="M10.2002 25.8402C10.2002 22.5252 14.6202 22.5252 16.8302 20.3152C17.9352 19.2102 14.6202 19.2102 14.6202 13.6852C14.6202 10.0022 16.0932 8.16016 19.0402 8.16016C21.9872 8.16016 23.4602 10.0022 23.4602 13.6852C23.4602 19.2102 20.1452 19.2102 21.2502 20.3152C23.4602 22.5252 27.8802 22.5252 27.8802 25.8402"
								stroke="white" stroke-width="2" stroke-linecap="round"/>
						</svg>
					</router-link>
				</div>
	
				<div class="header__btn w-[30px]">
					<div></div>
					<div></div>
					<div></div>
					<img src="/resources/images/svg/headerClose.svg" alt="close">
				</div>
			</div>


        </div>
    </div>
</header>

</template>
