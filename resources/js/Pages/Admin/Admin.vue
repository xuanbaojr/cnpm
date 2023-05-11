<template>
    <div v-for="user in user" :key="user.id">
        <button class="btn" @click="deleteUser(user.id)" >Xoa User {{user.id}}</button>
        <a :href="'/admin/' + user.id + '/profile'">Xem Profile</a>
        <a :href="'/admin/' + user.id + '/posts'">Xem Post</a>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({})

const deleteUser = (userId) => {
    form.delete(route('user.destroy',userId));
};
defineProps({
    user:Object
})
</script>