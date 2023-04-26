<template>
    <form @submit.prevent="create">
        <input type="text" placeholder="dien_tich" v-model.trim="dien_tich">
        <input type="text" placeholder="gia_phong" v-model.trim="gia_phong">
        
        <button type="submit" class="btn">Submit</button>
      </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const dien_tich = ref('')
const gia_phong = ref('')


const apiToken = ref(localStorage.getItem('apiToken'));

async function create() {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/post', {
      // Your POST request data
      dien_tich: 'dien_tich',
      gia_phong: 'gia_phong',
    }, {
      headers: {
        Authorization: `Bearer ${apiToken.value}`,
      },
    });

    // Handle the response, e.g., update the UI or show a success message
  } catch (error) {
    // Handle the error, e.g., show an error message
  }
}

</script>