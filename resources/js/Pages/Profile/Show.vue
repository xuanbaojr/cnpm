<template>
<AuthenticatedLayout>
    <template #default>
        <div class="content" style="margin: 0 15%">
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
              <button class="flw-btn">Follow</button>
              <button class="sp-btn">Tư vấn</button>
            </div>
        </div>
        <div class="user-content-post">
          <Profile_Info_Show :user="user" :profile="profile">
            </Profile_Info_Show >
          <div class="main-post-list">
            <Post_Box :user="user" :profile="profile" :posts="posts">

            </Post_Box>
            <!-- End: Main content 
            <div class="pagination">
              <button class="button" id="startBtn" disabled>
                <i class="fa-solid fa-angles-left"></i>
              </button>
              <button class="button prevNext" id="prev" disabled>
                <i class="fa-solid fa-angle-left"></i>
              </button>
              <div class="links">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">5</a>
              </div>
              <button class="button prevNext" id="next">
                <i class="fa-solid fa-angle-right"></i>
              </button>
              <button class="button" id="endBtn">
                <i class="fa-solid fa-angles-right"></i>
              </button>
            </div>
          -->
          </div>
        </div>
    </div>
    </template>
</AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Post_Box from '@/Components/Post_Box.vue';
import Profile_Info_Show from '@/Components/Profile_Info_Show.vue'
defineProps({
    user:Object,
    profile:Object,
    posts:Object,
})

</script>

<style scoped>
@import url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
@import url('https://unicons.iconscout.com/release/v4.0.0/css/line.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');

 @import '../../2804/cnpm/resources/css/user-detail.css';

 @import '../../2804/cnpm/resources/css/pagination.css';

</style>