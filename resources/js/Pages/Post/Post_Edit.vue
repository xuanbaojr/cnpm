<template>
  <AuthenticatedLayout>
    <template #default>
    <div class="edit-content">

      <form @submit.prevent="form.put(route('post1.update', post.id ))" enctype="multipart/form-data" class="more-info col-lg-8 editForm" >
        <div class="up-description">
          <h3>Chỉnh sửa bài viết</h3>
        </div>
        <label class="des-tilte">Tiêu đề</label>
        <div class="input-tilte-size">
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
        <label class="des-tilte">Quận/Huyện</label>
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
        <textarea id="des-content" cols="30" rows="6" v-model.trim="form.description" style="width:100%"></textarea>
        <label class="des-tilte">Tải hình ảnh</label>
        <input style="margin-left: 10px" type="file" @input="form.images = $event.target.files" multiple @change="onImageChange($event)">
        <div class="btn-group" style="width:100%; display:flex; justify-content:center; align-items:center;margin-top: 20px; margin-left: 0px;">

          <div class="manage-btn">
          <button class="btn btn-primary save-button" type="submit">Xác nhận</button>
            <form style="display:inline-block" @submit.prevent="form1.delete(route('post.destroy',post.id))">
              <button class="btn btn-danger" type="submit" style="margin-left:10px">Xóa post</button>
            </form>
          </div>
        </div>
      </form>
      
    </div> 
    
      
    </template>

   
  </AuthenticatedLayout>
  
  </template>
  
  <script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

// DIA CHI
import { computed } from 'vue';
const props = defineProps({
  post:Object
})


  

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
  if (!form.city || !cities.value) return [];
  const city1 = cities.value.find((city) => city.Name == form.city);
  return city1 ? city1.Districts : [];
});

const wards = computed(() => {
  if (!form.district || !districts.value) return [];
  const district1 = districts.value.find((district) => district.Name == form.district);
  return district1 ? district1.Wards : [];
});


const onImageChange = (event) => {
  const file = event.target.files[0];
  if (file) {
    form.image_01 = file;

    console.log(form.image_01);
  }
};


  const form = useForm({
    title: props.post.title,
    dien_tich: props.post.dien_tich,
    gia_phong: props.post.gia_phong,
    description: props.post.description,
    city: props.post.city,
    district: props.post.district,
    ward: props.post.ward,
  });

  const form1 = useForm({

  });

  
  </script>
  <style scoped>
  @import '../../../css/bootstrap.min.css';
  @import '../../../css/index.css';
  @import '../../../css/detail.css';
  .edit-content{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .edit-content>form{
    background-color: #fff;
    width: 35%;
  }
  .delete-content{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .editForm{
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    padding: 30px;
  }
  .form-select,
  .input-tilte-size input{
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
  }
  </style>