<template>
    <form @submit.prevent="form.delete(route('profile.destroy'))">
        <p>Tôi muốn xóa tài khoản</p>
        <button class="btn btn-primary" type="submit">Xác Nhận</button>
    </form>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3'; 

const form = useForm({});

</script>