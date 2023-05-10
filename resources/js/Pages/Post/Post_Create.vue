<template>
  <AuthenticatedLayout>
    <template #default>
      <div class="change-info">
      <div class="row up-post-main">

        <form style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;" @submit.prevent="create" enctype="multipart/form-data" class="more-info col-lg-8" >
          <div class="up-description">
            <h3>Đăng tin mới</h3>
          </div>
          <label class="des-tilte">Tiêu đề 01</label>
          <div class="col-lg-2 input-size input-tilte-size">
            <input type="text" v-model.trim="form.title">
          </div>
          <label class="des-tilte">Tỉnh/Thành phố</label>
          <select class="form-select" v-model="form.city" >
            <option>Tỉnh/Thành Phố</option>
            <option v-for="city in cities"
                    :key="city.Id"
                    :value="city.Name">
                    {{ city.Name }}
            </option>
          </select>
          <label class="des-tilte">Quận/Huyện 01</label>
          <select class="form-select" id="test" v-model="form.district">.
            <option>Quận / Huyện</option>
            <option v-for="district  in districts"
                    :key="district.Id"
                    :value="district.Name">
                    {{ district.Name }}
            </option>
          </select>
          <label class="des-tilte">Phường xã</label>
          <select class="form-select" v-model="form.ward">.
            <option>Phường / Xã</option>
            <option v-for="ward in wards"
                    :key="ward.Name">
                    {{ ward.Name }}
            </option>
          </select>

          <label class="des-tilte">Diện tích</label>
          <div class="input-group mb-3 box-size">
            <input id="post_acreage" v-model.trim="form.dien_tich" type="number" attern="[0-9.]+" name="dien_tich" max="1000" class="form-control" data-msg-required="Bạn chưa nhập diện tích" >
            <div class="input-group-append">
                <span class="input-group-text">m<sup>2</sup></span>
            </div>
          </div>
          <label class="des-tilte">Giá cho thuê</label>
          <div class="input-group box-size">
            <input v-model.trim="form.gia_phong" pattern="[0-9.]+" type="text" class="form-control" data-msg-required="Bạn chưa nhập giá phòng" data-msg-min="Giá phòng chưa đúng">
            <div class="input-group-append">
                <span class="input-group-text">đồng</span>
            </div>
          </div>
          <small class="form-text text-muted" style="display: block;">Nhập đầy đủ số, ví dụ 1 triệu thì nhập là 1000000</small>
          <label class="des-tilte">Nội dung mô tả</label>
          <textarea id="des-content" cols="30" rows="6" v-model.trim="form.description"></textarea>
          <label class="des-tilte">Tải hình ảnh</label>
          <input style="margin-left: 10px" type="file" @input="form.images = $event.target.files" multiple @change="onImageChange($event)" >
          <button class="btn btn-primary save-button" style="width: 100%;margin-top: 20px;margin-left: 0px;" type="submit">Xác nhận đăng tin</button>
        </form>
        <div class="col-lg-4" style="padding-left: 30px; padding-top: 20px;">
          <div class="card" style="color: #856404; background-color: transparent; border-color: #ffeeba;">
            <div class="card-body">
                <h4 class="card-title">Lưu ý khi đăng tin</h4>
                <ul style="padding-left: 0px;">
                    <li style="list-style-type: square; margin-left: 15px;">Nội dung phải viết bằng tiếng Việt có dấu</li>
                    <li style="list-style-type: square; margin-left: 15px;">Tiêu đề tin không dài quá 100 kí tự</li>
                    <li style="list-style-type: square; margin-left: 15px;">Các bạn nên điền đầy đủ thông tin vào các mục để tin đăng có hiệu quả hơn.</li>
                    <li style="list-style-type: square; margin-left: 15px;">Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn.</li>
                    <li style="list-style-type: square; margin-left: 15px;">Hãy đăng ảnh để được giao dịch nhanh chóng!</li>
                </ul>
            </div>
        </div>
        </div>
      </div>
    </div>
    </template>
  </AuthenticatedLayout>

</template>
<style scoped>
  @import '../../../css/profile.css';
  @import '../../../css/bootstrap.min.css';
  .change-info{
    margin-left: 15%;
    margin-right: 4%;
  }
</style>
<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

// DIA CHI
import { computed } from 'vue';

const cities = ref(null);
fetch("https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json")
 .then(response => response.text())
 .then(text => JSON.parse(text))
 .then(data => (cities.value = data))
 .catch(
   error => {
     alert('error');
   });

const districts = computed(() => {
 if (!form.city) return [];
 const city1 = cities.value.find((city) => city.Name == form.city);
 return city1 ? city1.Districts : [];
});

const wards = computed(() => {
 if (!form.district) return [];
 const district1 = districts.value.find((district) => district.Name == form.district);
 return district1 ? district1.Wards : [];
});

const onImageChange = (event) => {

};

const form = useForm({
  title: '',
  dien_tich: '',
  gia_phong: '',
  description: '',
  city: '',
  district: '',
  ward: '',
  images: [],
});

// Images

// Create post
const create = () => {

  form.post(route('post.store'));

};

</script>

