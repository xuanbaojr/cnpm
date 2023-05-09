<template>
<div class="side-infomation">
            <div class="side-title">
              <h3>Giới thiệu</h3>
            </div>
            <ul class="info-user-list">
              <li class="info-items">Họ và Tên: {{profile.fullname}}</li>
              <li class="info-items">Ngày sinh: {{profile.birth}}</li>
              <li class="info-items">Giới tính: {{profile.gioi_tinh}}</li>
              <li class="info-items">Nghề nghiệp: Sinh viên</li>
              <li class="info-items"><Link :href="route('dashboard')">Chỉnh sửa thông tin chi tiết</Link></li>
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
 @import '../../2804/cnpm/resources/css/user-detail.css';

@import '../../2804/cnpm/resources/css/bootstrap.min.css';
 @import '../../2804/cnpm/resources/css/index.css';
</style>