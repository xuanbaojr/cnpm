<template>
     <div class="user-bg">
          <img src="" alt="" width="100%" height="100%" style="border-radius: 30px;">
        </div>
        <div class="head-user">
            <div class="ava-detail">
                <img src="" alt="" height="100%" width="100%" style="border-radius: 50%;">
            </div>
            <div class="user-info-profile">
                <h1 class="user-name">Quân Phùng</h1>
                <h5 class="user-follow" style="margin-left:10px">52K followers</h5>
            </div>
            <div class="func-btn">
              
                <Link href="/profile" method="get" style="color: rgb(40, 144, 241);">
                    <button class="flw-btn">Edit Profile</button>
                    
                </Link>
              
              <button class="sp-btn">Tư vấn</button>
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
});
</script>
<style scoped>
    @import '../../css/user-detail.css'
    
</style>