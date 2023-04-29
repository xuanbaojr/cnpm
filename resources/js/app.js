import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import { BootstrapVue } from 'bootstrap-vue';

import App from './components/App.vue';
import Login from './components/Login.vue';
import Create from './components/Create.vue';
import FollowButton from './components/FollowButton.vue';
import DiaChi from './components/DiaChi.vue';
import Home from './components/Home.vue'

const routes = [
  {
    path: '/login',
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
    path: '/dia_chi',
    name: 'dia_chi',
    component: DiaChi,
  },
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: { requiresAuth: false },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

const app = createApp(App);
app.use(router);
app.use(BootstrapVue);
app.mount('#app');

router.beforeEach((to, from, next) => {
  const isLoggedIn = localStorage.getItem("authToken");
  const requiresAuth = to.matched.some((record) => record.meta.requiresAuth);

  if (requiresAuth && !isLoggedIn) {
    next("/login");
  } else {
    next();
  }
});
