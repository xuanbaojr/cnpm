<template>
    <AuthenticatedLayout>
        <template #default>
          <div v-if="true">
            {{ $page.props.flash.message }}
          </div>
          
            <div class="content" style="margin: 0 15%">
            <div class="user-bg">
             <Profile_BG :user="user" :profile="profile" :posts="posts" :user_me="user_me">
             </Profile_BG>
            </div>
            <div class="user-content-post" style="transform:translateY(-100px)">
              <Profile_Info_Show :user="user" :profile="profile">
                </Profile_Info_Show >
              <div class="main-post-list">
                <Post_Box :user="user" :profile="profile" :posts="posts" :user_me="user_me">
                </Post_Box>
                <!-- <Pagination /> -->
              </div>
            </div>
        </div>
        </template>
    </AuthenticatedLayout>
    </template>
    <script setup>
    import Pagination from '@/Components/Pagination.vue';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import Post_Box from '@/Components/Post_Box.vue';
    import Profile_Info_Show from '@/Components/Profile_Info_Show.vue'
    import Profile_BG from '@/Components/Profile_BG.vue'
    defineProps({
        user:Object,
        profile:Object,
        posts:Object,
        user_me:Object,
    })

    </script>

    <style scoped>
    @import url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
    @import url('https://unicons.iconscout.com/release/v4.0.0/css/line.css');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');

     @import '../../2804/cnpm/resources/css/user-detail.css';

     @import '../../2804/cnpm/resources/css/pagination.css';

    </style>
