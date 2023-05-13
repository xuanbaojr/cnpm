<template>


    <!--FILTER IA CHI main quan-->
    <div class="row">

    <div class="col">
      <select class="form-select" v-model="checkCity" >
      <option>Tỉnh / Thành Phố</option>
      <option v-for="city in cities"
              :key="city.Id"
              :value="city.Name">
              {{ city.Name }}
      </option>
    </select>
    </div>


    <div class="col">
      <select class="form-select" v-model="checkDistrict">.
      <option>Quận / Huyện 01</option>
      <option v-for="district  in districts"
              :key="district.Id"
              :value="district.Name">
              {{ district.Name }}
      </option>
    </select>
    </div>


    <div class="col">
      <select class="form-select" v-model="checkWard">
      <option>Phường / Xã</option>
      <option v-for="ward in wards"
              :key="ward.Id"
              :value="ward.Name">
              {{ ward.Name }}
      </option>
    </select>
    </div>

    </div>


  <div class="content">
    <section class="e-column" id="section2">
        <!-- Begin: Left sidebar -->
        <!-- End: Left sidebar -->
        <!-- Begin: Main content -->
        <div class="column-md-3-5">
            <div class="section">
                <!-- Title -->
                <div class="section-header">
                    <span class="section-title">
                        Danh sách tin đăng

                    </span>
                </div>

                <!-- Sort -->
                <div class="post-listing">
                    <!-- Chua thuc hien loc  -->
                    <div v-if="!filtered">
                        <p> Hiển thị {{ posts1.length }} kết quả phù hợp</p>
                        <div class="post-item clearfix" v-for="result in posts1" :key="result.id">
                        <div class="info-img">
                            <div class="mainimg">
                                <img :src="'/storage/' + result.image_01" alt="" width="100%" height="100%" style="height: 214px;">
                            </div>
                            <div class="sideimg">
                                <img :src="'/storage/'+ result.image_02" alt="" width="100%" height="100%" style="width: 100%;">
                                <div class="img-child row" style="margin:0px !important">
                                    <div class="col" style="padding: 0px !important; height: 100%;width: 100%;">
                                        <img :src="'/storage/'+ result.image_03" alt="">
                                    </div>
                                    <div class="col" style="padding: 0px !important;height: 100%;width: 100%;">
                                        <img :src="'/storage/'+ result.image_04" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <h2 class="post-title">
                                <a style="font-size: 14px;line-height: 20px;letter-spacing: -.2px;color: #2C2C2C;text-transform: uppercase;font-weight: 700;" href="#">{{result.title}}</a>
                            </h2>
                            <div class="meta-row clearfix">
                                <span class="post-price">{{result.gia_phong}} triệu / tháng</span>
                                <span class="post-acreage">{{result.dien_tich}} m <sup>2</sup>
            </span>
                                <span class="post-location">
              <a style="color: #000" href="#">{{result.ward }} - {{result.district}} - {{result.city}}</a>
            </span>
                                <span>{{ result.updated_at }}</span>
                                <p class="post-summary">{{result.description}}</p>
                            </div>
                            <div class="contact-info">
                                <div class="post-author">
                                    <img src="https://picsum.photos/200" alt="member-item" class="">
                                    <a :href="'/profile/' + result.user_id" class="text-black no-underline hover:underline font-mono">
                                        xuanbao0{{result.user_id}}
                                    </a>
                                </div>
                                <a :href="'/post/' + result.id" class="btn-quick-zalo">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- Da Loc -->
                    <div v-if="filtered" >
                        <!-- So phong lon hon 0 -->
                        <div v-if="results.length" >
                            <p> Hiển thị {{ results.length }} kết quả phù hợp cho: {{ checkCity }} - {{ checkDistrict }} - {{ checkWard }} - {{ checkCost }}000000 VND - {{ checkS }}</p>

                            <div class="post-item clearfix" v-for="result in results" :key="result.id">
                        <div class="info-img">
                            <div class="mainimg">
                                <img :src="'/storage/' + result.image_01" alt="" width="100%" height="100%" style="height: 214px;">
                            </div>
                            <div class="sideimg">
                                <img :src="'/storage/'+ result.image_03" alt="" width="100%" height="100%" style="width: 100%;">
                                <div class="img-child row" style="margin:0px !important">
                                    <div class="col" style="padding: 0px !important; height: 100%;width: 100%;">
                                        <img :src="'/storage/'+ result.image_04" alt="">
                                    </div>
                                    <div class="col" style="padding: 0px !important;height: 100%;width: 100%;">
                                        <img :src="'/storage/'+ result.image_02" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <h2 class="post-title">
                                <a style="font-size: 14px;line-height: 20px;letter-spacing: -.2px;color: #2C2C2C;text-transform: uppercase;font-weight: 700;" href="#">{{result.title}}</a>
                            </h2>
                            <div class="meta-row clearfix">
                                <span class="post-price">{{result.gia_phong}} triệu / tháng</span>
                                <span class="post-acreage">{{result.dien_tich}} m <sup>2</sup>
            </span>
                                <span class="post-location">
              <a style="color: #000" href="#">{{result.ward }} - {{result.district}} - {{result.city}}</a>
            </span>
                                <span>{{ result.updated_at }}</span>
                                <p class="post-summary">{{result.description}}</p>
                            </div>
                            <div class="contact-info">
                                <div class="post-author">
                                    <img src="" alt="member-item" class="">
                                    <a :href="'/profile/' + result.user_id" style="color:#000">xuanbao0{{result.user_id}}</a>
                                </div>
                                <a :href="'/post/' + result.id" class="btn-quick-zalo">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                        </div>
                        
                         <!-- So phong bang 0 -> khong co phong thoa man -->
                        <div v-else>
                            <p>Rất tiếc! Hiện chưa có phòng phù hợp với bạn. Vui lòng quay lại sau  <a :href="'/dashboard'">
                                    <p>Thử lại</p>
                                </a>
                               
                            </p>
                        </div>
                       

                       


                    </div>

                </div>


            </div>
            <!-- End: Main content -->
            <!-- <Pagination :links="posts1.links">

            </Pagination> -->
        </div>
        <div class="column-mr-1-5">
            <div class="cost-filter">
                <p>Lọc theo khoảng giá</p>
                <div class="cost-filter-content">
                    <div class="cost-filter-item">
                        <a class="btn" @click="checkCost = 1">
                            <i class='bx bxs-chevrons-right'></i>Dưới 1 triệu </a>
                    </div>
                    <div class="cost-filter-item">
                        <a class="btn" @click="checkCost = 2">
                            <i class='bx bxs-chevrons-right'></i> Từ 1 triệu - 2 triệu </a>
                    </div>
                    <div class="cost-filter-item">
                        <a class="btn" @click="checkCost = 3">
                            <i class='bx bxs-chevrons-right'></i> Từ 2 triệu - 3 triệu </a>
                    </div>
                    <div class="cost-filter-item">
                        <a class="btn" @click="checkCost = 4">
                            <i class='bx bxs-chevrons-right'></i> Từ 3 triệu - 4 triệu </a>
                    </div>
                    <div class="cost-filter-item">
                        <a class="btn" @click="checkCost = 5">
                            <i class='bx bxs-chevrons-right'></i> Từ 4 triệu - 5 triệu </a>
                    </div>
                    <div class="cost-filter-item">
                        <a class="btn" @click="checkCost = 6">
                            <i class='bx bxs-chevrons-right'></i> Trên 5 triệu </a>
                    </div>
                </div>
            </div>
            <div class="cost-filter">
                <p>Lọc theo diện tích</p>
                <div class="cost-filter-content">
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(0,20)">
                            <i class='bx bxs-chevrons-right'></i>Dưới 20 m <sup>2</sup>
                        </a>
                    </div>
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(20,25)">
                            <i class='bx bxs-chevrons-right'></i>Từ 20 m <sup>2</sup> - 25 m <sup>2</sup>
                        </a>
                    </div>
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(25,30)">
                            <i class='bx bxs-chevrons-right'></i>Từ 25 m <sup>2</sup> - 30 m <sup>2</sup>
                        </a>
                    </div>
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(30,35)">
                            <i class='bx bxs-chevrons-right'></i>Từ 30 m <sup>2</sup> - 35 m <sup>2</sup>
                        </a>
                    </div>
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(35,40)">
                            <i class='bx bxs-chevrons-right'></i>Từ 35 m <sup>2</sup> - 40 m <sup>2</sup>
                        </a>
                    </div>
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(40,45)">
                            <i class='bx bxs-chevrons-right'></i>Từ 40 m <sup>2</sup> - 45 m <sup>2</sup>
                        </a>
                    </div>
                    <div class="cost-filter-item">
                        <a href="#" class="btn" @click="dien_tich(45,10000)">
                            <i class='bx bxs-chevrons-right'></i>Trên 45 m <sup>2</sup>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intro" id="section3">
        <Introduction />
    </section>
    <!-- <section class="care container" style="background-color: #fffcf5;border: 7px dashed #e8eefc;padding: 30px;margin-top: 30px;margin-bottom: 50px;">
        <TakeCare />
    </section> -->
</div>
<footer>
    <Footer />
</footer>


</template>

<script>


</script>

<script setup>


import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import Footer from './footer.vue'
import Pagination from './Pagination.vue'
import TakeCare from './TakeCare.vue'
import Introduction from './Introduction.vue'

import {computed} from 'vue';


const props = defineProps({
    posts1: Object,
    count: String,
});

const results = ref([]);
const filtered = ref(false);


// DIA CHI

const cities = ref(null)
fetch("https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json")
.then(response => response.text())
.then(text => JSON.parse(text))
.then(data => (cities.value = data))
.catch(
  error => {
    alert('error');
});

const checkCity = ref(null)
const checkDistrict = ref(null)
const checkWard = ref(null)
//const checkCost = ref(null)
const checkS = ref(null);


const districts = computed(()=> {
    if(!checkCity.value) return [];
    const city1 = cities.value.find((city) => city.Name === checkCity.value)
    return  city1 ? city1.Districts : []
});

const wards = computed(()=>{
    if(!checkDistrict.value) return [];
    console.log(checkDistrict.value);
    const district1 = districts.value.find((district) => district.Name === checkDistrict.value)
    return district1 ? district1.Wards :[]
});


// Filter



watch(checkCity, dia_chiC)
function dia_chiC(newCity, oldCity){
    filtered.value = true;
    console.log(results.value.length);
  results.value = results.value.length ? results.value.filter((item) => item.city == newCity) : props.posts1.filter((item) => item.city == newCity);
  
}

watch(checkDistrict, dia_chiD)
function dia_chiD(newCity, oldCity){
    results.value = results.value.length ? results.value.filter((item) => item.district == newCity) : props.posts1.filter((item) => item.district == newCity);
}

watch(checkWard, dia_chiW)
function dia_chiW(newCity, oldCity){
    results.value = results.value.length ? results.value.filter((item) => item.ward == newCity) : props.posts1.filter((item) => item.ward == newCity);
}


const checkCost = ref(null)



watch(checkCost,price)
function price() {
  if (checkCost.value === 1) {
    filtered.value = true;
    results.value =  results.value.filter((item) => 0 <= item.gia_phong && item.gia_phong <= 1000000)//: props.posts1.filter((item) => 0 <= item.gia_phong && item.gia_phong <= 1000000);
  }
  else if (checkCost.value === 2) {
    filtered.value = true;
    results.value = results.value.length ? results.value.filter((item) => 1000000 <= item.gia_phong && item.gia_phong <= 2000000): props.posts1.filter((item) => 1000000 <= item.gia_phong && item.gia_phong <= 2000000);
  }
  else if (checkCost.value === 3) {
    filtered.value = true;
    results.value = results.value.length ? results.value.filter((item) => 2000000 <= item.gia_phong && item.gia_phong <= 3000000): props.posts1.filter((item) => 2000000 <= item.gia_phong && item.gia_phong <= 3000000);
  }
  else if (checkCost.value === 4) {
    filtered.value = true;
    results.value = results.value.length ? results.value.filter((item) => 3000000 <= item.gia_phong && item.gia_phong <= 4000000): props.posts1.filter((item) => 3000000 <= item.gia_phong && item.gia_phong <= 4000000);
  }
  else if (checkCost.value === 5) {
    filtered.value = true;
    results.value = results.value.length ? results.value.filter((item) => 4000000 <= item.gia_phong && item.gia_phong <= 5000000): props.posts1.filter((item) => 4000000 <= item.gia_phong && item.gia_phong <= 5000000);
  }
  else if (checkCost.value === 6) {
    filtered.value = true;
    results.value = results.value.length ? results.value.filter((item) => 5000000 <= item.gia_phong && item.gia_phong <= 20000000): props.posts1.filter((item) => 5000000 <= item.gia_phong && item.gia_phong <= 20000000);
  }
}

function dien_tich(begin,end) {
 //  results.value = posts.value.filter((item) => begin <= item.dien_tich && item.dien_tich <= end);
   filtered.value = true;
   results.value = results.value.length ? results.value.filter((item) => begin <= item.dien_tich && item.dien_tich <= end): props.posts1.filter((item) => begin <= item.dien_tich && item.dien_tich <= end);

 }



</script>

<style scoped>
/* Your component-specific CSS here */
/**
 * Swiper 8.4.4
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2022 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: October 12, 2022
 */


@import url('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
@import url('https://unicons.iconscout.com/release/v4.0.0/css/line.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
 @import '../../css/bootstrap.min.css';
 @import '../../css/swiper-bundle.min.css';
 @import '../../css/index.css';
 @import '../../css/modal.css';
 @import '../../css/slider.css';
 @import '../../css/sidebar.css';
 @import '../../css/searchbar.css';
 @import '../../css/pagination.css';

 </style>
