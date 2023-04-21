<!-- resources/js/components/ExampleComponent.vue -->
<template>
  <div>
    <button class="btn" @click="follow">Follow</button>
    {{ user }}
  </div>
</template>

<script setup>
import axios from 'axios';

import { defineProps } from 'vue';

const props = defineProps(['user']);

function follow() {
  axios.post('/follow/1')
    .then(response => {
      alert(response.data);
    });
}
</script>
