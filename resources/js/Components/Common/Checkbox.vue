<script setup>
    const props = defineProps({
        name: {
            type: String,
			required: true
        },
		checked: {
			type: Boolean,
			default: false
		}
    })
</script>

<template>
    <input :id="props.name" type="checkbox" :checked="props.checked" class="custom-checkbox" :name="props.name" />
    <label :for="props.name">
        <span class="happy__show"><slot /></span>
    </label>
</template>
