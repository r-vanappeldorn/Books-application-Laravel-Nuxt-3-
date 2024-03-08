<template>
<div class="mb-2 flex flex-col">
	<label class="mb-1 text-sm font-medium text-gray-700" for={id}>{{ label }}</label>
	<input
		:type="type"
		class="w-full max-w-xs rounded border bg-white px-3 py-2 text-sm outline-none focus:border-2 focus:border-blue-500 {errorTheme}"
		:id="id"
        :value="value"
        @input="handleInput"
	/>
	<span v-if="errorMessages !== ''" class="mt-1 text-xs text-red-500">{{ errorMessages }}</span>
</div>
</template>

<script setup lang="ts">
let { value } = defineProps({
    id: {
        type: String,
        required: true
    },
    label: {
        type: String,
        required: true
    },
    type: {
        type: String,
        default: "text"
    },
    value: {
        type: String,
        default: ""
    },
    errorMessages: {
        type: String,
        default: ""
    }
})

const handleInput = (e: Event) => {
    value = (e.target as HTMLInputElement).value;
}

</script>
