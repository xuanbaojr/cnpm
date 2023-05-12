<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <Home :posts1="posts" >
        </Home>
    </AuthenticatedLayout>

</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import Home from '@/Components/Home.vue';

defineProps({
    posts:Object,

})

</script>

