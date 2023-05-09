<template>
    <router-view></router-view>
            
        <div v-if="!loggedIn" >
    
            <div class="user-welcome clearfix">
                
                  <div class="header-btn "> 
                    <a rel="nofollow" class="header-btn" href="uppost.html">
                        <i class='bx bx-log-in mr-4'></i>
                          <a href="http://127.0.0.1:8000/register">
                          <button @click="register" style="border:none; background:transparent">Đăng kí</button>
                          </a>
                      </a>
                  </div>
                    
                  <div class="header-btn">
                  <i class='bx bx-user mr-4'></i><button @click="login" style="border:none; background:transparent">Đăng nhập</button>
                  </div>
                  
            </div>
        </div>
        <div v-else>
            <div class="user-welcome clearfix">
                <a rel="nofollow" class="header-add-post light-red" href="uppost.html">
                  <i class='bx bxs-plus-circle mr-4'></i>Đăng tin mới
                </a>
                  <div class="header-btn " data-bs-toggle="dropdown">
                    <i class='bx bx-bell mr-4'></i> Thông báo
                  </div>
                    <ul class="dropdown-menu user-notice">
                      <li>
                        <p class="dropdown-item head-notice" >Thông báo của bạn</p>
                      </li>
                      
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="notice">
                            <img src="" alt="" width="50px" height="50px" style="display: inline-block">
                            <div class="ntice-content"><p>Bạn đã thích phòng trọ thành thái</p></div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="notice">
                            <img src="" alt="" width="50px" height="50px" style="display: inline-block">
                            <div class="ntice-content"><p>Bạn đã thích phòng trọ thành thái</p></div>
                          </div>
                        </a>
                      </li>
                      
                      <li>
                        <a class="dropdown-item more-notice" href="Notification.html">Xem chi tiết<i class='bx bx-right-arrow-alt' style="margin-left: 4px"></i></a>
                      </li>
                    </ul>
                  <div class="header-btn" data-bs-toggle="dropdown">
                  <i class='bx bx-user mr-4'></i>Tài khoản
                  </div>
                  <ul class="dropdown-menu">
                    <li class="acc-btn"><a>Quản lý tài khoản</a></li>
                    <li class="acc-btn"><button @click="logout" style="background: transparent; border: none">Logout</button></li>
                  </ul>
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

@import '../../css/bootstrap.min.css';
@import '../../css/index.css';
.acc-btn{
    border: none;
    background: transparent;
    text-decoration: none;
    color: black ;
    padding: 15px 15px;
}
.acc-btn:hover{
    background: #cecece;
}
</style>