<template>
    <div id="filter-top" class="row">
        <div class="col input-box" v-bind:class="{ 'open': isOpen }">
          <input type="text" placeholder="Search...">
          <span class="icon-search"  @click="openSearch">
            <i class="uil uil-search search-icon"></i>
          </span>
          <i class="uil uil-times close-icon" @click="closeSearch"></i>
        </div>
      </div>
</template>
<script>
export default {
    data(){
        return{
            isOpen: false,
        }
    },
    methods:{
        //Mở ô tìm kiếm
        openSearch(){
            this.isOpen = true;
        },
        //Đóng ô tìm kiếm
        closeSearch(){
            this.isOpen = false;
        }
    }
}
</script>
<style scoped>
@import '../../css/index.css';
@import '../../css/searchbar.css';
</style>