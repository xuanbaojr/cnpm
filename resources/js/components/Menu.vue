<template>
    <router-view></router-view>
    <div class="row">
        <div class="col col-8">
            <button class="btn" @click="home">Logo</button>
        </div>        <div class="col">
            <button class="btn" @click="login">Login</button>
        </div>
        <div class="col">
            <a href="http://127.0.0.1:8000/register">
            <button class="btn" @click="register">Register</button>
            </a>
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

const router = useRouter();

function home() {
    router.push({ path: '/', replace: true })
}

function login() {
    router.push({ path: '/login', replace: true })
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