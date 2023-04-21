<!-- resources/js/components/ExampleComponent.vue -->
<template>
  <div>
    
    <pre>{{ fetchedData }}</pre>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const prop1 = ref(window.vueData.prop1);
const prop2 = ref(window.vueData.prop2);
const fetchedData = ref(null);

async function fetchData() {
  const response = await axios.get('/api/example', {
    params: {
      prop1: prop1.value,
      prop2: prop2.value
    }
  });

  fetchedData.value = response.data;
}

onMounted(fetchData);
</script>
