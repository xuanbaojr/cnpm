<template>
    <button class="btn" @click="test">Count: {{ count }}</button>

    <p>Using text interpolation: {{ rawHtml }}</p>
    <p>Using v-html directive: <span v-html="rawHtml"></span></p>
    <div v-bind:id="dynamicId"></div>

</template>

<script setup>
import {ref, onMounted} from 'vue'
const count = ref(0)
function test(){
    count.value++
}
onMounted(()=>{
    console.log('xuanbao01')
})
</script>