<template>
    <form @submit.prevent="form.patch(route('profile.update'))" >
        <input type="text" placeholder="fullname" v-model="form.fullname">
        <input type="text" placeholder="birth" v-model="form.birth">
        <input type="text" placeholder="nghe_nghiep" v-model="form.univer">
        <input type="text" placeholder="gioi_tinh" v-model="form.gioi_tinh">
        <input type="text" placeholder="description" v-model="form.description">
        <button type="submit">Submit</button>
    </form>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    fullname:'',
    birth:'',
    univer:'',
    gioi_tinh:'',
    description:'',
})
</script>