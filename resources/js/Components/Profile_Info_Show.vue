<template>
<div class="side-infomation">
            <div class="side-title">
              <h3>Giới thiệu</h3>
            </div>
            <ul class="info-user-list">
              <li class="info-items">Họ và tên: {{profile.fullname}}</li>
              <li class="info-items">Ngày sinh: {{profile.birth}}</li>
              <li class="info-items">Giới tính: {{profile.gioi_tinh}}</li>
              <li class="info-items">Nghề nghiệp: {{ profile.univer }}</li>
              <li> -----------------------------------------------------</li>
              Thông tin liên hệ :
              <i class='bx bxs-phone-call' > {{ profile.sdt }}</i>
              <i class='bx bx-envelope' > {{ user.email }}</i>
              <a :href="'' + profile.facebook "><i class='bx bxl-facebook' >{{ profile.facebook }}</i></a>
             

            </ul>
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
@import url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
@import url('https://unicons.iconscout.com/release/v4.0.0/css/line.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
@import '../../css/bootstrap.min.css';
@import '../../css/user-detail.css';
@import '../../css/index.css';
</style>
