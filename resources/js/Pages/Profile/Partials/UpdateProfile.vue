<template>
   <div class="min-h-screen bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto p-6">
    <div v-if="$page.props.flash.message" class="alert">
        {{ $page.props.flash.message }}
      </div>
    <form @submit.prevent="form.patch(route('profile.update'))" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
        <div class="text-gray-600">
          <p class="font-medium text-lg">Profile Details</p>
          <p>Please fill out all the fields.</p>
        </div>
        <div class="lg:col-span-2">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
            <div class="md:col-span-5">
              <label for="fullname">Full Name</label>
              <input type="text" id="fullname" v-model="form.fullname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="fullname" />
            </div>
            <div class="md:col-span-5">
              <label for="birth">Birth Date</label>
              <input type="text" id="birth" v-model="form.birth" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="birth" />
            </div>
            <div class="md:col-span-5">
              <label for="univer">Occupation</label>
              <input type="text" id="univer" v-model="form.univer" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="nghe_nghiep" />
            </div>
            <div class="md:col-span-5">
              <label for="gioi_tinh">Gender</label>
              <input type="text" id="gioi_tinh" v-model="form.gioi_tinh" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="gioi_tinh" />
            </div>
            <div class="md:col-span-5">
              <label for="description">Description</label>
              <input type="text" id="description" v-model="form.description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="description" />
            </div>
            <div class="md:col-span-5">
              <label for="sdt">Phone Number</label>
              <input type="text" id="sdt" v-model="form.sdt" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="sdt" />
            </div>
            <div class="md:col-span-5">
              <label for="facebook">Facebook</label>
              <input type="text" id="facebook" v-model="form.facebook" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="sdt" />
            </div>
            <div class="md:col-span-5 text-right">
              <div class="inline-flex items-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

</template>
<script setup>
import { useForm } from '@inertiajs/vue3';
const props = defineProps({
    profile:Object,
});

const form = useForm({
    fullname:props.profile.fullname,
    birth:props.profile.birth,
    univer:props.profile.univer,
    gioi_tinh:props.profile.gioi_tinh,
    description:props.profile.description,
    sdt:props.profile.sdt,
    facebook:props.profile.facebook,
})
</script>