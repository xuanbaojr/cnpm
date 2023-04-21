<!-- resources/js/components/ExampleComponent.vue -->
<template>
  <div>
    <p>Prop 1: {{ prop1 }}</p>
    <p>Prop 2: {{ prop2 }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const prop1 = ref(window.vueData.prop1);
const prop2 = ref(window.vueData.prop2);
</script>
