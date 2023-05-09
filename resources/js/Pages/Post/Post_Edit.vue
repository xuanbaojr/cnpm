<template>
  
     <form @submit.prevent="form.put(route('post1.update','1'))" enctype="multipart/form-data">
         <input type="text" placeholder="title" v-model.trim="form.gia_phong">
         <button type="submit" class="btn">Submit</button>
       </form>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'; 
  
  const form = useForm({
    gia_phong: '',
  });

  
  </script>
  