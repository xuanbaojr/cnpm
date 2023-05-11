<template>
   <div class="user-detail">
            <div>
              <img class="user-ava" src="">
            </div>
            <p class="postBy_item">Được đăng bởi</p>
            <div class="name-user" title="">
              <a :href="'/profile/' + profile.id " style="color: #2C2C2C;">{{user.username}}</a>
            </div>
            <a href="" class="see-profile">Xem trang cá nhân </a>
            <a class="contact-detail" href="#">Liên hệ</a>
          </div>
</template>
<script setup>

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