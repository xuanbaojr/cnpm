<template>
   
    <form @submit.prevent="submit">
        <input type="email" v-model="email">
        <input type="password" v-model="password">
        <button type="submit">Submit</button>
    </form>
</template>

<script setup>
import {ref} from 'vue';
import axios from 'axios';


import { useRouter } from 'vue-router';


const router = useRouter();

const email = ref('')
const password = ref('')

async function submit() {
    try {
        const response = await axios.post("http://127.0.0.1:8000/api/login", {
            email: email.value,
            password: password.value
        });

        const apiToken = response.data.api_token;
        console.log(apiToken)
        localStorage.setItem('apiToken', apiToken);
        router.push({ path: '/', replace: true })
        console.log(response.data);

    } catch (error) {
        console.log(error);
    }
}
</script>
