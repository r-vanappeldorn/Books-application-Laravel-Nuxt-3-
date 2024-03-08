<script lang="ts" setup>
import { ref } from 'vue'

const count = ref(0)

const increment = () => {
  count.value++
}
</script>

<template>
  <div>
    <h1 class="text-3xl font-medium text-blue-500">Hello</h1>
    <button class="bg-blue-500 hover:bg-blue-600 px-3 py-1 font-medium rounded " @click="increment">Click to increment</button>
    {{ count }}
  </div>
</template>
