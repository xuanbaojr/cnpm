<template>
    <AuthenticatedLayout>
        {{ post }}
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

defineProps({
    post:Object
})
</script>
<style scoped>
</style>