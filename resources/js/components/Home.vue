<template>
  <div v-if="isLoading">Loading...</div>
  <div v-else>
    
    <p>XuanBao</p>

    <button class="btn" @click="equal(1,4)">ChonSo01</button>
    <button class="btn" @click="between">Tu1den3</button>

    <ul>
      <li v-for="result in results" :key="result.id">{{ result.dien_tich }}</li>
    </ul>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

//const items = ref([]);
const results = ref([]);
const isLoading = ref(true);

onMounted(async () => {
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/home');
  //  items.value = response.data;
    results.value = response.data;
    console.log(response.data);
  } catch (error) {
    console.error('Error fetching data:', error);
  } finally {
    isLoading.value = false;
  }
});

function equal(begin,end) {
  results.value = results.value.filter((item) => begin < item.dien_tich && item.dien_tich < end);
}


</script>

<style scoped>
/* Your component-specific CSS here */
</style>
