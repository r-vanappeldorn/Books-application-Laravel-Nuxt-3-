<template>
    <svg
	xmlns="http://www.w3.org/2000/svg"
    :height="height"
    :width="width"
	viewBox="0 0 152 148"
	fill="none"
	:class={margin}
>
	<path
		d="M0.742416 0V10.9519H56.5381V20.5719H69.562V10.9519H125.21V0H0.742416ZM82.438 33.0038H26.6423V22.0519H151.258V33.0038H95.6099V147.999H82.438V33.0038ZM56.5381 34.4838V125.947H69.562V34.4838H56.5381Z"
	    :class={className}
	/>
</svg>
</template>

<script lang="ts" setup>
import { defineProps } from "vue"

defineProps({
    height: {
        type: Number,
        default: 148
    },
    width: {
        type: Number,
        default: 152
    },
    margin: {
        type: String,
        default: "m-auto"
    },
    className: {
        type: String,
        default: "fill-gray-800"
    }
})
</script>
