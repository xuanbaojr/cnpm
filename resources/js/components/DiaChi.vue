<template>
  <h1>a</h1>
  <div class="row">
    
    <div class="col">
      <select class="form-select" v-model="checkCity">
      <option>Tỉnh / Thành Phố</option>
      <option v-for="city in cities"
              :key="city.Id"
              :value="city.Id">
              {{ city.Name }}
      </option>
    </select>
    </div>


    <div class="col">
      <select class="form-select" v-model="checkDistrict">.
      <option>Quận / Huyện</option>
      <option v-for="district  in districts"
              :key="district.Id"
              :value="district.Id">
              {{ district.Name }}
      </option>
    </select>
    </div>


    <div class="col">
      <select class="form-select">.
      <option>Phường / Xã</option>
      <option v-for="ward in wards"
              :key="ward.Id">
              {{ ward.Name }}
      </option>
    </select>
    </div>

  </div>
    
</template>
<script setup>
import {ref} from 'vue';
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
    const city1 = cities.value.find((city) => city.Id === checkCity.value)
    return  city1 ? city1.Districts : []
});

const checkDistrict = ref(null)
const wards = computed(()=>{
    if(!checkDistrict.value) return [];
    const district1 = districts.value.find((district) => district.Id === checkDistrict.value)
    return district1 ? district1.Wards :[]
});



</script>