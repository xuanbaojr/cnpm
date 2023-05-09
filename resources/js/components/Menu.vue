<template>
    <router-view></router-view>
    <div class="row">
        <div class="col col-8">
            <button class="btn" @click="home">Logo</button>
        </div>        
        <div v-if="!loggedIn" >
            <div class="col">
            <button class="btn" @click="login">Login</button>
            </div>
            <div class="col">
            <a href="http://127.0.0.1:8000/register">
            <button class="btn" @click="register">Register</button>
            </a>
            </div>
        </div>
        <div v-else>
            <div class="col">
            <button class="btn" @click="logout">Logout</button>
            </div>
        </div>
       
        
        <div class="col">
            <button class="btn" @click="message">Message</button>
        </div>
        <div class="col">
            <button class="btn" @click="notification">Notification</button>
        </div>
        <div class="col">
            <button class="btn" @click="post">Post</button>
        </div>

    </div>
</template>

<script setup>

import { useRouter } from 'vue-router';
import { ref } from 'vue';

// check Loggedin
const loggedIn = ref(true);

const router = useRouter();

function home() {
    router.push({ path: '/', replace: true })
}

function login() {
    router.push({ path: '/login', replace: true })
}

function logout() {
    localStorage.removeItem('apiToken');
    loggedIn.value = false;
    router.push({ path: '/', replace: true })
}

function register() {

}

function message() {
    
}

function notification() {
    
}

function post() {
    router.push({ path: '/create', replace: true })
}
</script>

<style scoped>

</style>
