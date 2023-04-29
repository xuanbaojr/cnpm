import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './components/App.vue';
import Login from './components/Login.vue';
import Create from './components/Create.vue';
import FollowButton from './components/FollowButton.vue';
import Test from './components/Test.vue';
import DiaChi from './components/DiaChi.vue';

const routes = [
  {
    path: '/',
    name: 'login',
    component: Login,
  },
  {
    path: '/create',
    name: 'create',
    component: Create,
  },
  {
    path: '/follow_button',
    name: 'follow_button',
    component: FollowButton,
  },
  {
    path: '/test',
    name: 'test',
    component: Test,
  },
  {
    path: '/dia_chi',
    name: 'dia_chi',
    component: DiaChi,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');


// api.js
import axios from 'axios';

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api',
  withCredentials: true,
});

export default api;
