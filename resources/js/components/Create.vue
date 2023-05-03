<template>
    <form @submit.prevent="create">
        <input type="text" placeholder="title" v-model.trim="title">
        <input type="text" placeholder="dien_tich" v-model.trim="dien_tich">
        <input type="text" placeholder="gia_phong" v-model.trim="gia_phong">
        <input type="text" placeholder="description" v-model.trim="description">
        <input type="file" ref="fileInput" @change="handleFileSelect" multiple />
        {{ checkCity }}
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
      <select class="form-select" v-model="checkWard">.
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
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

import { useRouter } from 'vue-router';


const router = useRouter();


const dien_tich = ref('')
const gia_phong = ref('')
const images = ref([]);


const apiToken = ref(localStorage.getItem('apiToken'));
console.log(apiToken);



async function create() {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/post', {
    dien_tich: dien_tich.value,
    gia_phong: gia_phong.value,
    city: checkCity.value,
    district: checkDistrict.value,
    ward: checkWard.value,
}, {
  headers: {
    Authorization: `Bearer ${apiToken.value}`,
  },
});
router.push({ path: '/dia_chi', replace: true })

    // Handle the response, e.g., update the UI or show a success message
  } catch (error) {
    // Handle the error, e.g., show an error message
  }
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




</script>