<template>


          <div id="demo" class="carousel slide " data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="" alt="Los Angeles" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="" alt="Chicago" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="" alt="New York" class="d-block w-100">
                  </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
          </div>
          <div class="head-detail">
            <h1 class="detail-title">{{posts.title}}</h1>
            <address class="post-address">Địa chỉ:{{posts.ward}} - {{posts.district}} - {{posts.city}}</address>
            <div class="post-attributes"><div class="item price"><i></i><span style="color: #16c784; font-weight: bold; font-size: 1.5rem">{{posts.gia_phong}}</span></div><div class="item acreage"><i></i><span>{{posts.dien_tich}}<sup>2</sup></span></div><div class="item published"><i></i><span title="Thứ 7, 22:45 15/04/2023">{{posts.updated_at}}</span></div><div class="item hashtag"><i></i><span>603145</span></div></div>
          </div>
          <div class="post-main-detail">
            <section class="section post-main-content">
              <div class="section-header-detail">
                <h2 class="section-title-detail">Thông tin mô tả</h2>
              </div>
              <div class="section-content">
                {{posts.desciption}}
              </div>
            </section>
            <section class="section post-contact">
              <div class="section-header" style="box-shadow: none;">
                <h3 class="section-title">Thông tin liên hệ</h3>
              </div>
              <div class="section-content">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="name">Liên hệ:</td>
                      <td> Nguyễn Phạm Đức Cường</td>
                    </tr>
                    <tr>
                      <td class="name">Điện thoại:</td>
                      <td> 0938864405</td>
                    </tr>
                    <tr>
                      <td class="name">Zalo</td>
                      <td> 0938864405</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>


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

<style scoped>
  @import '../../../css/bootstrap.min.css';
  @import '../../../css/index.css';
  @import '../../../css/detail.css';
</style>
