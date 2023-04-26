<template>
  <form @submit.prevent="login">
    <input type="text" placeholder="username" v-model.trim="username">
    <input type="text" placeholder="email" v-model.trim="email">
    <input type="password" placeholder="password" v-model.trim="password">
    <button type="submit" class="btn">Submit</button>
  </form>
</template>

<script setup>
import axios from 'axios';
import { ref } from 'vue';

const username = ref('');
const email = ref('');
const password = ref('');

async function login() {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/login', {
      username: username.value,
      email: email.value,
      password: password.value,
    });

    const apiToken = response.data.api_token;
    localStorage.setItem('apiToken', apiToken);
    alert(apiToken);

    // Save the API token, e.g., in the Vuex store or localStorage.
  } catch (error) {
    // Handle the error, e.g., show an error message.
  }
}
</script>
