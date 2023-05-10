<template>
  <AuthenticatedLayout>
    <template #default>
        
     <form @submit.prevent="form.put(route('post1.update','1'))" enctype="multipart/form-data">
         <input type="text" placeholder="title" v-model.trim="form.title">
         <input type="text" placeholder="dien_tich" v-model.trim="form.dien_tich">
         <input type="text" placeholder="gia_phong" v-model.trim="form.gia_phong">
         <input type="text" placeholder="description" v-model.trim="form.description">
         <input type="file" @input="onImageChange($event)">

         <div class="row">
   
   <div class="col">
     <select class="form-select" v-model="form.city" >
     <option>Tỉnh / Thành Phố</option>
     <option v-for="city in cities"
             :key="city.Id"
             :value="city.Name">
             {{ city.Name }}
     </option>
   </select>
   </div>


   <div class="col">
     <select class="form-select" v-model="form.district">.
     <option>Quận / Huyện</option>
     <option v-for="district  in districts"
             :key="district.Id"
             :value="district.Name">
             {{ district.Name }}
     </option>
   </select>
   </div>


   <div class="col">
     <select class="form-select" v-model="form.ward">.
     <option>Phường / Xã</option>
     <option v-for="ward in wards"
             :key="ward.Name">
             {{ ward.Name }}
     </option>
   </select>
   </div>
   

 </div>
         <button type="submit" class="btn">Submit</button>
       </form>

       <form @submit.prevent="form1.delete(route('post.destroy','1'))">
        <p>Tôi muốn xóa post</p>
        <button class="btn btn-primary" type="submit">Xác Nhận</button>
    </form>
    </template>

   
  </AuthenticatedLayout>
  
  </template>
  
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
  const file = event.target.files[0];
  if (file) {
    form.image_01 = file;

    console.log(form.image_01);
  }
};


  const form = useForm({
    title: '',
    dien_tich:'',
    gia_phong:'',
    description:'',
    city:'',
    district:'',
    ward:'',
  });

  const form1 = useForm({

  });

  
  </script>
  