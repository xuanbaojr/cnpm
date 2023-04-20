<template>
    <div>
      <div class="btn btn-primary" @click="followUser">follow</div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'follow_button',

    methods: {
      followUser(){
        axios.post('/profile/2')
          .then(response => {
              alert('response');
          });
      }
    }
  };
  </script>
  