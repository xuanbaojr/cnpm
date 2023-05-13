<template>
    <form @submit.prevent="search">
        <input type="text" v-model="form.input">
    </form>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';

const form = new useForm({
    input:'',
})

const search = () => {
    form.post(route('search.posts'),{
        onSuccess : (response) => {
            // alert(response);
        }
    });
}
</script>