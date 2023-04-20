<template>
    <button class="btn" @click="test">Count: {{ count }}</button>
</template>

<script setup>
import { ref, onMounted } from 'vue';
    const count = ref(0);
    function test(){
        count.value++;
    }

    onMounted(()=> {
        console.log('xuanbao');
    })
</script>