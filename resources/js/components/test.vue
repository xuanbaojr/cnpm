<!-- resources/js/components/ExampleComponent.vue -->
<template>
   <button class="btn" @click="follow">Follow</button>
  {{prop1}}
</template>

<script setup>
import { ref } from 'vue';

const prop1 = ref(window.vueData.prop1);
const prop2 = ref(window.vueData.prop2);
</script>
