<!-- resources/js/components/ExampleComponent.vue -->
<template>
  <div>
    <button class="btn" @click="follow">Follow</button>
  </div>
</template>

<script setup>
import axios from 'axios';

function follow() {
  axios.post('/follow/1')
    .then(response => {
      alert(response.data);
    });


}
</script>
