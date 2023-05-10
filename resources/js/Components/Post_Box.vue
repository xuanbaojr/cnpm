<template>
    <div class="section" >
              <!-- Title -->
              <div class="section-header" style="background-color: transparent;box-shadow: none;border-bottom:solid 2px #ccc ;margin-bottom: 10px;">
                <span class="section-title" style="font-size: 25px;">Danh sách tin của bạn</span>
              </div>
              <!-- Sort -->
              <div class="post-listing">
                <div class="post-item clearfix" v-for="post in posts" :key="post.id">
                  <div class="info-img">
                    <div class="mainimg">
                      <img :src="'/storage/' + post.image_01" alt="" width="100%" height="100%" style = "height: 214px;">
                    </div>
                    <div class="sideimg">
                      <img :src="'/storage/'+ post.image_03" alt="" width="100%" height="100%" style="width: 100%;">
                      <div class="img-child row" style="margin:0px !important">
                        <div class="col" style="padding: 0px !important; height: 100%;width: 100%;">
                          <img :src="'/storage/'+ post.image_03" alt="">
                        </div>
                        <div class="col" style="padding: 0px !important;height: 100%;width: 100%;">
                          <img :src="'/storage/'+ post.image_01" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="post-meta">
                    <h2 class="post-title">
                      <a style="font-size: 14px;line-height: 20px;letter-spacing: -.2px;color: #2C2C2C;text-transform: uppercase;font-weight: 700;" href="#">{{ post.title }}</a>
                    </h2>
                    <div class="meta-row clearfix">
                      <span class="post-price">{{post.gia_phong}}/tháng</span>
                      <span class="post-acreage">{{post.dien_tich}}m²</span>
                      <span class="post-location">
                        <a style="color: #000" href="#">{{post.ward}} -  </a>
                        <a style="color: #000" href="#">{{post.district}} - </a>
                        <a style="color: #000" href="#">{{post.city}} </a>
                      </span>
                      <time class="post-time" title="Chủ Nhật, 15:59 12/03/2023"> <a style="color: #000" href="#">{{post.updated_at}} </a></time>
                      <p class="post-summary"> <a style="color: #000" href="#">{{post.description}} </a></p>
                    </div>
                    <div class="contact-info">
                      <div class="post-author">
                        <img src="" alt="member-item" class="">
                        <span class="">{{profile.fullname}}</span>
                      </div>
                      <a rel="nofollow" :href="'/post/' + post.id" class="btn-quick-zalo">Xem Chi Tiết</a>
                      <a rel="nofollow" :href="'/post/' + post.id + '/edit'" class="btn-quick-zalo">Edit Post</a>

                    </div>
                    
                  </div>
                </div>
               
              </div>
            </div>
             <!-- End: Main content 
            <div class="pagination">
              <button class="button" id="startBtn" disabled>
                <i class="fa-solid fa-angles-left"></i>
              </button>
              <button class="button prevNext" id="prev" disabled>
                <i class="fa-solid fa-angle-left"></i>
              </button>
              <div class="links">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">5</a>
              </div>
              <button class="button prevNext" id="next">
                <i class="fa-solid fa-angle-right"></i>
              </button>
              <button class="button" id="endBtn">
                <i class="fa-solid fa-angles-right"></i>
              </button>
            </div>
          -->
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

@import url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
@import url('https://unicons.iconscout.com/release/v4.0.0/css/line.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
 @import '../../2804/cnpm/resources/css/bootstrap.min.css';
 @import '../../2804/cnpm/resources/css/index.css';
</style>