<script setup>
import useToastsStore from "@/stores/toasts";
</script>

<template>
  <TransitionGroup
    class="fixed flex flex-col gap-2 bottom-0 right-0 transition-all"
    name="list"
    tag="ul"
  >
    <li
      class="toast relative w-[300px] rounded border p-5 text-white mr-5 last-of-type:mb-5"
      v-for="toast in useToastsStore().toasts"
      :class="
        toast.type === 'error' ? 'border-transparent bg-danger' : 'border-pink bg-black'
      "
      :key="toast.id"
    >
      <span>{{ toast.message }}</span>
      <div class="absolute right-1 top-1" @click="useToastsStore().removeToast(toast.id)">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
    </li>
  </TransitionGroup>
</template>

<style scoped>
.list-move, /* apply transition to moving elements */
.list-enter-active,
.list-leave-active {
  transition: transform 0.175s;
}

.list-enter-to,
.list-enter-active {
  transition-delay: 0.175s;
}

.list-enter-from,
.list-leave-to {
  opacity: 0;
}

/* ensure leaving items are taken out of layout flow so that moving
	animations can be calculated correctly. */
.list-leave-active {
  position: absolute;
  transition-delay: 0s;
}
</style>
