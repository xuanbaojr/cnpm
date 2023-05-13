<template>
    <div v-for="post in posts " :key="posts.id">
        {{ post }} 
        <button @click="deletePost(post.id)">Xoa Post {{ post.id }}</button>
    </div>

</template>
   
<script setup>
import { useForm } from '@inertiajs/vue3';

    const form = useForm({});

    defineProps({
           user:Object,
           profile:Object,
           posts:Object,
       })

    const deletePost = (PostId) => {
        form.delete(route('admin.destroyPost',PostId),{
            onSuccess : (response) => alert(response);
        });

    };
</script>