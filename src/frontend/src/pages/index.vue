<script lang="ts" setup>
const count = ref(0)

const user: { name: string } = {
  name: 'John Doe'
}

const increment = () => {
  count.value++
}
</script>

<template>
  <div>
    <h1 class="text-3xl font-medium text-blue-500">Hello</h1>
    <button @click="increment">Increment</button>
  </div>
</template>
