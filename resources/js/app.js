import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
//import { BootstrapVue3 } from 'bootstrap-vue-3';



//import '../css/bootstrap.min.css';
//import '../css/detail.css';
//import '../css/index.css';
//import '../css/modal.css';
//import '../css/pagination.css';
//import '../css/profile.css';
//import '../css/searchbar.css';
//import '../css/slider.css';
//import '../css/style.css';
//import '../css/swiper-bundle.min.css';
//import '../css/user-detail.css';


import App from './components/App.vue';
import Login from './components/Login.vue';
import CreatePost from './components/CreatePost.vue';
import FollowButton from './components/FollowButton.vue';
import DiaChi from './components/DiaChi.vue';
import Home from './components/Home.vue';
import Menu from './components/Menu.vue';
import Logout from './components/Logout.vue';
import Post from './components/Post.vue';


const routes = [
  {
    path: '/login',
    name: 'login',
    component: Login,
  },
  {
    path: '/logout',
    name: 'logout',
    component: Logout,
  },
  {
    path: '/create',
    name: 'create',
    component: CreatePost,
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
  {
    path: '/menu',
    name: 'menu',
    component: Menu,
  },
  {
    path: '/post/:id',
    name: 'post',
    component: Post,
  },
  

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

const app = createApp(App);
app.use(router);
//app.use(BootstrapVue3);
app.mount('#app');

const menu = createApp(Menu);
menu.use(router);
menu.mount('#menu');

router.beforeEach((to, from, next) => {
  const isLoggedIn = localStorage.getItem("authToken");
  const requiresAuth = to.matched.some((record) => record.meta.requiresAuth);

  if (requiresAuth && !isLoggedIn) {
    next("/login");
  } else {
    next();
  }
});

