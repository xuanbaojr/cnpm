<template>
    <AuthenticatedLayout>
        <template #default>
            <div class="room-content ">
           <Post_Content :user="user" :profile="profile" :posts="posts" >
        </Post_Content>
            </div>

            <div class="aside-content">
        <Post_Sidebar :user="user" :profile="profile" :posts="posts">

        </Post_Sidebar>
        </div>
        
        
        </template>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Post_Content from '@/Components/Post_Page/Post_Content.vue';
import Post_Sidebar from '@/Components/Post_Page/Post_Sidebar.vue'

defineProps({
   
        user:Object,
        profile:Object,
        posts:Object,
    
})
</script>
<style scoped>
</style>