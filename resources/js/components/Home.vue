<template>
    <div v-if="isLoading">Loading...</div>
    <div v-else>
      <ul>
        <tr v-for="item in items" :key="item.id">{{ item.dien_tich }}</tr>
      </ul>

      <div class="post-item clearfix">
                  <div class="info-img">
                    <div class="mainimg">
                      <img src="" alt="" width="100%" height="100%">
                    </div>
                    <div class="sideimg">
                      <img src="" alt="" width="100%" height="100%" style="width: 100%;">
                      <div class="img-child row" style="margin:0px !important">
                        <div class="col" style="padding: 0px !important">
                          <img src="" alt="">
                        </div>
                        <div class="col" style="padding: 0px !important">
                          <img src="" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="post-meta">
                    <h2 class="post-title">
                      <a style="font-size: 14px;line-height: 20px;letter-spacing: -.2px;color: #2C2C2C;text-transform: uppercase;font-weight: 700;" href="#">Phòng trọ Thành Thái</a>
                    </h2>
                    <div class="meta-row clearfix">
                      <span class="post-price">{{items[0].dien_tich}}</span>
                      <span class="post-acreage">25m²</span>
                      <span class="post-location">
                        <a style="color: #000" href="#">Quận Phú Nhuận, Hồ Chí Minh</a>
                      </span>
                      <time class="post-time" title="Chủ Nhật, 15:59 12/03/2023">Hôm nay</time>
                      <p class="post-summary">Phòng đẹp nằm ngay trung tâm quận Phú Nhuận (xem hình thật). View trước là đối diện Khách Sạn 3* Tân Sơn Nhất, View sau là đường Nguyễn Văn Trỗi.</p>
                    </div>
                    <div class="contact-info">
                      <div class="post-author">
                        <img src="" alt="member-item" class="">
                        <span class="">phungquan2003</span>
                      </div>
                      <a rel="nofollow" href="#" class="btn-quick-zalo">Nhắn Zalo</a>
                    </div>
                  </div>
                </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  const items = ref([]);
  const isLoading = ref(true);
  
  onMounted(async () => {
    try {
      const response = await axios.get('http://127.0.0.1:8000/api/home');
      items.value = response.data;
      console.log(response.data)
    } catch (error) {
      console.error('Error fetching data:', error);
    } finally {
      isLoading.value = false;
    }
  });
  </script>
  