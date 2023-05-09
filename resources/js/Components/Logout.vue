<template>
</template>

<script setup>
import { onMounted } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

onMounted(() => {
    localStorage.removeItem('apiToken');
  //  console.log(apiToken);
    router.push({path:'/', replace: true});
    console.log(localStorage.getItem('apiToken'));
    
});
</script>

<style scoped>
</style>
