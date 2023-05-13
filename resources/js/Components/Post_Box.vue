<template>

    <div class="section" >
              <!-- Title -->
              <div class="section-header" style="background-color: #fff ;margin-bottom: 15px;">
                <span class="section-title" style="font-size: 25px;">Danh sách tin của bạn</span>
              </div>
              <!-- Sort -->
              <div class="post-listing">
                <div class="post-item clearfix" v-for="post in posts" :key="post.id">
                  <div class="info-img">
                    <div class="mainimg">
                      <img :src="'/storage/' + post.image_01" alt="" width="100%" height="100%" style="height: 214px;">
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
                        <img src="https://picsum.photos/200" alt="member-item" class="">
                        <a :href="'profile' + user.id">{{profile.fullname}}</a>

                      </div>

                    <div v-if="user.id === user_me.id" class="contact-btn">
                      
                      <a rel="nofollow" :href="'/post/' + post.id + '/edit'" class="btn-quick-zalo">Edit Post</a>
                    </div>
                    <a rel="nofollow" :href="'/post/' + post.id" class="btn-quick-zalo">Xem Chi Tiết</a>

                    </div>

                  </div>
                </div>

              </div>
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
    user_me: {
      type:Object,
    }
});
</script>


<style scoped>

@import url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
@import url('https://unicons.iconscout.com/release/v4.0.0/css/line.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
 @import '../../css/bootstrap.min.css';
 @import '../../css/user-detail.css';
 @import '../../css/index.css';
 .contact-btn{
  width: 300px;
    display: inline-block;
    float: right;
 }

</style>
