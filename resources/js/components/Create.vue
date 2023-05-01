<template>
    <form @submit.prevent="create">
        <input type="text" placeholder="title" v-model.trim="title">
        <input type="text" placeholder="dien_tich" v-model.trim="dien_tich">
        <input type="text" placeholder="gia_phong" v-model.trim="gia_phong">
        <input type="text" placeholder="description" v-model.trim="description">
        <DiaChi/>
        <button type="submit" class="btn">Submit</button>
      </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import DiaChi from './DiaChi.vue';
import { useRouter } from 'vue-router';


const router = useRouter();


const dien_tich = ref('')
const gia_phong = ref('')


const apiToken = ref(localStorage.getItem('apiToken'));
console.log(apiToken);



async function create() {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/post', {
    dien_tich: dien_tich.value,
    gia_phong: gia_phong.value,
}, {
  headers: {
    Authorization: `Bearer ${apiToken.value}`,
  },
});
router.push({ path: '/dia_chi', replace: true })

    // Handle the response, e.g., update the UI or show a success message
  } catch (error) {
    // Handle the error, e.g., show an error message
  }
}

</script>