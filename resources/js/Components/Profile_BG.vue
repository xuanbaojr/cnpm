<template>
     <div class="user-bg">
          <img src="https://picsum.photos/1980/400" alt="" style="border-radius: 30px;">
        </div>
        <div class="head-user">
            <div class="ava-detail">
                <img src="https://picsum.photos/200" alt=""  style="border-radius: 50%;">
            </div>
            <div class="user-info-profile">
                <h1 class="user-name">{{user.username}}</h1>
                <h5 class="user-follow" style="margin-left:10px">{{user.email}}</h5>
            </div>
            <div class="func-btn">
               <div v-if="user.id === user_me.id">
                <Link href="/profile" method="get" style="color: rgb(40, 144, 241);">
                    <button class="flw-btn">Edit Profile</button>
                    
                </Link>
              
             
                <Link href="/post/create" method="get" style="color: rgb(40, 144, 241);">
                    <button class="flw-btn">New Post</button>
                </Link>
            </div>
              
            </div>
        </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
    profile: {
        type: Object,
    },
    posts: {
        type: Object,
    },
    user_me : Object,
});
</script>
<style scoped>
    @import '../../css/user-detail.css'
    
</style>