<template>
   <Authenticated>
      <template #default>
         <div class="bg-white admi-table">

<div class="overflow-x-auto border-x border-t">
   <table class="table-auto w-full">
      <thead class="border-b">
         <tr class="bg-gray-100">
            <th class="text-left p-4 font-medium">
                userId
             </th>
            <th class="text-left p-4 font-medium">
               userName
            </th>
            <th class="text-left p-4 font-medium">
               Email
            </th>
            
            <th class="text-left p-4 font-medium">
                created_at
             </th>
             <th class="text-left p-4 font-medium">
                updated_at
             </th>
             <th class="text-left p-4 font-medium">
               Post Manage
            </th>
             <th class="text-left p-4 font-medium">
                Account Manage
             </th>
         </tr>
      </thead>
      <tbody v-for="user in user" :key="user.id">
         <tr class="border-b hover:bg-gray-50">
            <td class="p-4">
                {{ user.username }}
            </td>
            <td class="p-4">
                {{ user.username }}
            </td>
            <td class="p-4">
               {{ user.email }} 
            </td>
            
           
            <td class="p-4">
               
                {{formatDate(user.profile.created_at)}}
            </td>
            <td class="p-4">
               {{formatDate(user.profile.updated_at)}}
            </td>
            <td class="p-4">
             <a :href="'/admin/' + user.id + '/posts'" style="text-decoration: underline;">Xem Post </a> 
            </td>
            <td class="p-4">
             <button class="btn btn-danger" @click="deleteUser(user.id)" >Xoa User {{user.id}}</button>
            </td>
         </tr>
         <div>


</div>
         
      </tbody>
   </table>
</div>
</div>
      </template>
   </Authenticated>
    
   
 
</template>

<script>
export default {
  methods: {
    formatDate(datetimeString) {
      const date = new Date(datetimeString);
      const year = date.getFullYear();
      const month = date.getMonth() + 1;
      const day = date.getDate();
      const now = new Date();
      const diffInMilliseconds = now.getTime() - date.getTime();
      const diffInDays = Math.floor(diffInMilliseconds / (1000 * 60 * 60 * 24));
      if (diffInDays === 0) {
        return 'Hôm nay';
      } else if (diffInDays === 1) {
        return 'Hôm qua';
      } else {
        return `${day}/${month}/${year}`;
      }
    },
  },

}

</script>
<script setup>
import { useForm } from '@inertiajs/vue3';
import Authenticated from '@/Layouts/AuthenticatedLayout.vue'
const form = useForm({})

const deleteUser = (userId) => {
    form.delete(route('user.destroy',userId));
};
defineProps({
    user:Object,
})
</script>

<style scoped>
   .admi-table{
      margin-top: 40px;
      margin-left: 14%;
      margin-right: 14%;
      background-color: transparent;
   }
</style>