<template>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name" class="flex flex-col h-[100%] font-sans antialiased">
            <Component :is="Component" />
        </div>
    </router-view>
</template>
