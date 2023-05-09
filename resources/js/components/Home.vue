<template>  


    <!--FILTER DIA CHI-->>
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
      <option>Quận / Huyện</option>
      <option v-for="district  in districts"
              :key="district.Id"
              :value="district.Name">
              {{ district.Name }}
      </option>
    </select>
    </div>


    <div class="col">
      <select class="form-select" v-model ="checkWard">.
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
          <div class="col col-9 ">
            <div class="section">
              <!-- Title -->
              <div class="section-header">
                <span class="section-title">Danh sách tin đăng</span>
              </div>
              <!-- Sort -->
              <div class="post-listing">
                <div class="post-item clearfix"  v-for="result in results" :key="result.id">
                  
                  <div class="info-img">
                    <div class="mainimg" >
                      <img :src="'/storage/' + result.image_04" alt="" width="100%" height="100%" style = "height: 214px;">

                    </div>
                    <div class="sideimg">
                      <img :src="'/storage/'+ result.image_03" alt="" width="100%" height="100%" style="width: 100%;">
                      <div class="img-child row" style="margin:0px !important">
                        <div class="col" style="padding: 0px !important; height: 100%;width: 100%;">
                          <img :src="'/storage/'+ result.image_03" alt="">
                        </div>
                        <div class="col" style="padding: 0px !important;height: 100%;width: 100%;">
                          <img :src="'/storage/'+ result.image_01" alt="">
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
                      <span class="post-acreage">{{result.dien_tich}} m <sup>2</sup></span>
                      <span class="post-location">
                        <a style="color: #000" href="#">{{result.ward }} - {{result.district}} - {{result.city}}</a>
                      </span>
                      <span>{{ result.updated_at }}</span>
                      <p class="post-summary">{{result.desciption}}</p>
                    </div>
                    <div class="contact-info">
                      <div class="post-author">
                        <img src="" alt="member-item" class="">
                        <a :href="`/profile/${result.user.id}`">{{result.user.username}}</a>
                      </div>
                      <a :href="'/post/' + result.id" class="btn-quick-zalo">Xem Chi Tiết</a>

                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- End: Main content -->
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
          </div>
          <div class="col ">
            <div class="cost-filter">
              <p>Lọc theo khoảng giá</p>
              <div class="cost-filter-content">
                <div class="cost-filter-item">
                  <a class="btn" @click="price(0,1000000)">
                    <i class='bx bxs-chevrons-right'></i>Dưới 1 triệu </a>
                </div>
                <div class="cost-filter-item">
                  <a class="btn" @click="price(1000000,2000000)">
                    <i class='bx bxs-chevrons-right'></i> Từ 1 triệu - 2 triệu </a>
                </div>
                <div class="cost-filter-item">
                  <a class="btn" @click="price(2000000,3000000)">
                    <i class='bx bxs-chevrons-right'></i> Từ 2 triệu - 3 triệu </a>
                </div>
                <div class="cost-filter-item">
                  <a class="btn" @click="price(3000000,4000000)">
                    <i class='bx bxs-chevrons-right'></i> Từ 3 triệu - 4 triệu </a>
                </div>
                <div class="cost-filter-item">
                  <a class="btn" @click="price(4000000,5000000)">
                    <i class='bx bxs-chevrons-right'></i> Từ 4 triệu - 5 triệu </a>
                </div>
                <div class="cost-filter-item">
                  <a class="btn" @click="price(5000000,13500000)">
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
      <!--  <section class="intro" id="section3">
          <div class="review container border border-5">
            <h5> Tại sao lại chọn Find roomate?</h5>
            <p>Chúng tôi biết bạn có rất nhiều lựa chọn, nhưng Phongtro123.com tự hào là trang web đứng top google về các từ khóa: cho thuê phòng trọ, nhà trọ, thuê nhà nguyên căn, cho thuê căn hộ, tìm người ở ghép, cho thuê mặt bằng... Vì vậy tin của bạn đăng trên website sẽ tiếp cận được với nhiều khách hàng hơn, do đó giao dịch nhanh hơn, tiết kiệm chi phí hơn </p>
            <div class="row">
              <div class="col">
                <h3 class="d-flex justify-content-center">116.998+</h3>
                <p class="d-flex justify-content-center">Thành viên</p>
              </div>
              <div class="col">
                <h3 class="d-flex justify-content-center">103.348+</h3>
                <p class="d-flex justify-content-center">Tin đăng</p>
              </div>
              <div class="col">
                <h3 class="d-flex justify-content-center">300.000+</h3>
                <p class="d-flex justify-content-center">Lượt truy cập/tháng</p>
              </div>
              <div class="col">
                <h3 class="d-flex justify-content-center">2.500.000+</h3>
                <p class="d-flex justify-content-center">Lượt xem/tháng</p>
              </div>
            </div>
            <h4> Chi phí thấp hiệu quả tối đa</h4>
            <img src="" alt="5-star" style="width:216px; height: 80px;">
            <p class="customer-review">"Trước khi biết website phongtro123, mình phải tốn nhiều công sức và chi phí cho việc đăng tin cho thuê: từ việc phát tờ rơi, dán giấy, và đăng lên các website khác nhưng hiệu quả không cao. Từ khi biết website phongtro123.com, mình đã thử đăng tin lên và đánh giá hiệu quả khá cao trong khi chi phí khá thấp, không còn tình trạng phòng trống kéo dài." </p>
            <p class="customer">Anh Khánh (chủ hệ thống phòng trọ tại Tp.HCM)</p>
            <h4>Bạn có phòng muốn cho thuê?</h4>
            <p>Không phải lo tìm người cho thuê, phòng trống kéo dài</p>
            <button class="button-animation">
              <a href="#" style="color: #fff;text-decoration: none;">Đăng bài mới</a>
            </button>
          </div>
        </section>
      
        <section class="care container" style="background-color: #fffcf5;border: 7px dashed #e8eefc;padding: 30px;margin-top: 30px;margin-bottom: 50px;">
          <img src="" alt="Cinque Terre" style="width: 600px;height: 400px;">
          <p style="font-size: 1.2rem;margin-bottom: 20px;color: #233762; font-weight: 450;">Liên hệ với chúng tôi nếu bạn cần hỗ trợ:</p>
          <div class="row">
            <div class="col">
              <h6 style="font-weight: 700;color: #f60;margin-bottom: 10px">HỖ TRỢ THANH TOÁN</h6>
              <h3 style="color: #233762;font-size: 1.5rem;font-weight: 700;margin: 5px 0;">Điện thoại:0911953124</h3>
              <h3 style="color: #233762;font-size: 1.5rem;font-weight: 700;margin: 5px 0;">Zalo:0911953124</h3>
            </div>
            <div class="col">
              <h6 style="font-weight: 700;color: #f60;margin-bottom: 10px">HỖ TRỢ ĐĂNG TIN</h6>
              <h3 style="color: #233762;font-size: 1.5rem;font-weight: 700;margin: 5px 0;">Điện thoại:0911953124</h3>
              <h3 style="color: #233762;font-size: 1.5rem;font-weight: 700;margin: 5px 0;">Zalo:0911953124</h3>
            </div>
            <div class="col">
              <h6 style="font-weight: 700;color: #f60;margin-bottom: 10px">HOTLINE 24/7</h6>
              <h3 style="color: #233762;font-size: 1.5rem;font-weight: 700;margin: 5px 0;">Điện thoại:0911953124</h3>
              <h3 style="color: #233762;font-size: 1.5rem;font-weight: 700;margin: 5px 0;">Zalo:0911953124</h3>
            </div>
          </div>
        </section>
        <section class="report container float-left" style="width: 100%; margin-bottom: 50px;background-color: #fff;border: 7px dashed #e8eefc">
          <section class="container-report" style="background-color: #ffff;margin-bottom: 15px;">
            <div class="testimonial mySwiper">
              <div class="testi-content swiper-wrapper" style="z-index:0">
                <div class="slide swiper-slide">
                  <img src="" alt="" class="image" />
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, saepe provident dolorem a quaerat quo error facere nihil deleniti eligendi ipsum adipisci, fugit, architecto amet asperiores doloremque deserunt eum nemo. </p>
                  <i class="bx bxs-quote-alt-left quote-icon"></i>
                  <div class="details">
                    <span class="name">Marnie Lotter</span>
                    <span class="job">Web Developer</span>
                  </div>
                </div>
                <div class="slide swiper-slide">
                  <img src="" alt="" class="image" />
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, saepe provident dolorem a quaerat quo error facere nihil deleniti eligendi ipsum adipisci, fugit, architecto amet asperiores doloremque deserunt eum nemo. </p>
                  <i class="bx bxs-quote-alt-left quote-icon"></i>
                  <div class="details">
                    <span class="name">Marnie Lotter</span>
                    <span class="job">Web Developer</span>
                  </div>
                </div>
                <div class="slide swiper-slide">
                  <img src="" alt="" class="image" />
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, saepe provident dolorem a quaerat quo error facere nihil deleniti eligendi ipsum adipisci, fugit, architecto amet asperiores doloremque deserunt eum nemo. </p>
                  <i class="bx bxs-quote-alt-left quote-icon"></i>
                  <div class="details">
                    <span class="name">Marnie Lotter</span>
                    <span class="job">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next nav-btn"></div>
              <div class="swiper-button-prev nav-btn"></div>
              <div class="swiper-pagination-comment" style="display: flex;justify-content: center;padding-top: 15px"></div>
            </div>
          </section>
          <button class="button-animation js-sbtn" style="margin-bottom:35px;font-weight: 700;padding: 10px 30px;margin-left: 50%;transform: translateX(-50%);">Gửi đánh giá</button>
        </section>
      -->
      </div>

 
</template>

<script setup>


import { ref, onMounted, watch } from 'vue';
import axios from 'axios';

const props = defineProps({
    posts: Array,
});

const users = ref([]);

const results = ref([]);
const posts = ref([]);
const isLoading = ref(true);

onMounted(async () => {
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/home');
    results.value = response.data;
    posts.value = response.data
    console.log(response.data);
    console.log(localStorage.getItem('apiToken'))
  } catch (error) {
    console.error('Error fetching data:', error);
  } finally {
    isLoading.value = false;
  }
});



// FILTER



function price(begin,end) {
  results.value = posts.value.filter((item) => begin <= item.gia_phong && item.gia_phong <= end);
}

function dien_tich(begin,end) {
  results.value = posts.value.filter((item) => begin <= item.dien_tich && item.dien_tich <= end);
}




// DIA CHI
import {computed} from 'vue';

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
const districts = computed(()=> {
    if(!checkCity.value) return [];
    const city1 = cities.value.find((city) => city.Name === checkCity.value)
    return  city1 ? city1.Districts : []
});

const checkDistrict = ref(null)
const wards = computed(()=>{
    if(!checkDistrict.value) return [];
    const district1 = districts.value.find((district) => district.Name === checkDistrict.value)
    return district1 ? district1.Wards :[]
});

const checkWard = ref(null)


watch(checkCity, dia_chiC)
function dia_chiC(newCity, oldCity){
  results.value = posts.value.filter((item) => item.city == newCity);
}

watch(checkDistrict, dia_chiD)
function dia_chiD(newCity, oldCity){
  results.value = posts.value.filter((item) => item.district == newCity);
}

watch(checkWard, dia_chiW)
function dia_chiW(newCity, oldCity){
  results.value = posts.value.filter((item) => item.ward == newCity);
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
 