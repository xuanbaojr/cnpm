<template>
  <p>{{ title }}</p>
  <button class="btn" @click="$emit('larger')">Larger</button>
 
</template>

<script setup>
  defineProps(['title'])
</script>
