<template>
    a
   {{ posts }}

   </template>
   
   <script setup>
    defineProps({
           user:Object,
           profile:Object,
           posts:Object,
       })
   </script>