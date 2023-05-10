<template>
    {{ user.username }}
</template>
<script setup>
defineProps({
    user : Object
})
</script>