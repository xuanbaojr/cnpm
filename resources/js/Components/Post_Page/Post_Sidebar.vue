<template>
    {{ user }} {{ profile  }} {{ posts }}
</template>
<script setup>

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
    profile: {
        type: Object,
    },
    posts: {
        type: Object,
    },
});
</script>