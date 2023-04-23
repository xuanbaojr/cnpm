<!-- resources/js/components/ExampleComponent.vue -->
<template>
  <div>
    <button class="btn" @click="follow" >{{ isfollowed }}</button>
  </div>
</template>

<script setup>
import axios from 'axios';
import { ref } from 'vue';

const userId = ref(window.vueData.userId);
const isfollowed = ref(window.vueData.isfollowed);


async function follow() {
  try {
    const response = await axios.post('/follow/' + userId.value);
   
    alert(response.data);
  } catch (error) {
    console.error('Error:', error);
    alert('An error occurred while following.');
  }
}


</script>
