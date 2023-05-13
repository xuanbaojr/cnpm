<template>
    
    <Authenticated>
      <template #default>
         <div class="bg-white admi-table">

      <div class="overflow-x-auto border-x border-t">
   <table class="table-auto w-full">
      <thead class="border-b">
         <tr class="bg-gray-100">
            <th class="text-left p-4 font-medium">
                Id
             </th>
            <th class="text-left p-4 font-medium">
               userId
            </th>
            <th class="text-left p-4 font-medium">
               Title
            </th>
            <th class="text-left p-4 font-medium">
                created_at
             </th>
             <th class="text-left p-4 font-medium">
                updated_at
             </th>
             <th class="text-left p-4 font-medium">
                Xem Chi Tiết
             </th>
             <th class="text-left p-4 font-medium">
                managePost
             </th>
         </tr>
      </thead>
      <tbody v-for="post in posts" :key="posts.id">
         <tr class="border-b hover:bg-gray-50">
            <td class="p-4">
                {{ post.id }}
            </td>
            <td class="p-4">
                {{user.id }}
            </td>
            <td class="p-4">
               {{ post.title }} 
            </td>
            <td class="p-4">
                {{ post.created_at }}
            </td>
            <td class="p-4">
                {{ post.updated_at }}
            </td>
            <td class="p-4" style="text-decoration: underline;">
             <a :href="'/post/' + post.id">Xem</a>
            </td>
            <td class="p-4">
             <button @click="deletePost(post.id)"  style="text-decoration: underline;">Xoa Post {{ post.id }}</button>
            </td>
         </tr>
    </tbody>
         <div>


</div>
         
      
   </table>
      </div>
         </div>
      </template>
   </Authenticated>
</template>
   
<script setup>
import { useForm } from '@inertiajs/vue3';
import Authenticated from '@/Layouts/AuthenticatedLayout.vue'


    const form = useForm({});

    defineProps({
           user:Object,
           profile:Object,
           posts:Object,
       })

    const deletePost = (PostId) => {
        form.delete(route('admin.destroyPost',PostId),{
            onSuccess : (response) => alert(response),
        });

    };
</script>
<style scoped>
   .admi-table{
      margin-top: 40px;
      margin-left: 14%;
      margin-right: 14%;
      background-color: transparent;
   }
</style>