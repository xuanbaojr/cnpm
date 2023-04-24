<template>
    <div class="card m-3">
      <h5 class="card-header text-center">Vue 3 fetch data from API</h5>
      <div class="card-body">
        <div v-if="products">
          <h5>Products</h5>
          <ul class="mb-0">
            <div class="row">
              <div class="col">
                <select class="form-select" v-model="selectedCityId">
                  <option selected>Tỉnh / Thành phố</option>
                  <option v-for="product in products" :key="product.Id" :value="product.Id">
                    {{ product.Name }}
                  </option>
                </select>
              </div>
  
              <div class="col">
                <select class="form-select">
                  <option selected disabled>Quận / Huyện</option>
                  <option
                    v-for="district in selectedCityDistricts"
                    :key="district.Id"
                    :value="district.Id"
                  >
                    {{ district.Name }}
                  </option>
                </select>
              </div>
            </div>
          </ul>
        </div>
        <div v-if="!products" class="text-center">
          <div class="spinner-border spinner-border-sm"></div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, computed } from 'vue';
  
  const products = ref(null);
  fetch('https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json')
    .then(response => response.text())
    .then(text => JSON.parse(text)) // Call JSON.parse with the text argument
    .then(data => (products.value = data))
    .catch(error => {
      // Handle errors
      console.error('Error fetching data:', error);
    });
  
  const selectedCityId = ref(null);
  
  const selectedCityDistricts = computed(() => {
    if (!selectedCityId.value) return [];
    const city = products.value.find((product) => product.Id === selectedCityId.value);
    return city ? city.Districts : [];
  });
  </script>
  

  