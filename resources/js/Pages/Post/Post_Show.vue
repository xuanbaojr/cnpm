<template>
    <AuthenticatedLayout>
        <template #default>
            <div id="main">
                <!-- Begin: Header -->

                <!-- End: Header -->
                <!-- Begin: Content -->
                <div class="content" style="margin: 0 10%">
                  <div class="room-content ">
                    <Post_Content :user="user" :profile="profile" :posts="posts" >
                    </Post_Content>
                  </div>
                  <div class="aside-content">
                    <Post_Sidebar :user="user" :profile="profile" :posts="posts">

                    </Post_Sidebar>

                  </div>


                </div>


                <footer>
                  <div class="content">
                    <div class="left box">
                      <div class="upper">
                        <div class="topic">About us</div>
                        <p>Roommate là một web giúp người dùng tìm kiếm và đặt phòng trọ và bạn trọ một cách dễ dàng. Với roomate,bạn có thể xem thông tin chi tiết về các phòng trọ, như giá cả, diện tích, địa điểm và các tiện nghi khác.</p>
                      </div>
                      <div class="lower">
                        <div class="topic">Contact us</div>
                        <div class="phone">
                          <a href="#">
                            <i class="fas fa-phone-volume"></i>0843325687 </a>
                        </div>
                        <div class="email">
                          <a href="#">
                            <i class="fas fa-envelope"></i>phungquan27052003@gmail.com </a>
                        </div>
                      </div>
                    </div>
                    <div class="middle box">
                      <div class="topic">Our Services</div>
                      <div>
                        <a href="#">Trang chủ</a>
                      </div>
                      <div>
                        <a href="#">Hỗ trợ người dùng </a>
                      </div>
                      <div>
                        <a href="#">Câu hỏi thường gặp</a>
                      </div>
                      <div>
                        <a href="#">Chính sách và điều khoản</a>
                      </div>
                      <div>
                        <a href="#">Quy định đăng tin</a>
                      </div>
                      <div>
                        <a href="#">Blog</a>
                      </div>
                    </div>
                    <div class="right box">
                      <div class="topic">Subscribe us</div>
                      <form action="#">
                        <input type="text" placeholder="Enter email address">
                        <input type="submit" name="" value="Send">
                        <div class="media-icons">
                          <a href="#">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                          <a href="#">
                            <i class="fab fa-youtube"></i>
                          </a>
                          <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="bottom-footer">
                    <p>Copyright &#169; 2023 <a href="#">QuanPhung</a> All rights reserved </p>
                  </div>
                </footer>




              </div>


        </template>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Post_Content from '@/Components/Post_Page/Post_Content.vue';
import Post_Sidebar from '@/Components/Post_Page/Post_Sidebar.vue'

defineProps({

        user:Object,
        profile:Object,
        posts:Object,

})
</script>
<style scoped>
  @import '../../../css/bootstrap.min.css';
  @import '../../../css/index.css';
  @import '../../../css/detail.css';
</style>
