<template>
  <form @submit.prevent="submit">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 font-medium ">Beds</label>
        <input v-model.number="form.beds" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 font-medium">Baths</label>
        <input v-model.number="form.baths" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.baths">{{ form.errors.baths }}</div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 font-medium">Area</label>
        <input v-model.number="form.area" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.area">{{ form.errors.area }}</div>
      </div>

      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 font-medium">City</label>
        <input v-model.number="form.city" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.city">{{ form.errors.city }}</div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 font-medium">Post Code</label>
        <input v-model.number="form.postcode" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.postcode" class="input-error">{{ form.errors.postcode }}</div>
      </div>

      <div class="col-span-4">
        <label class="block mb-1 text-gray-500 font-medium">Street</label>
        <input v-model.number="form.streetname" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.streetname" class="input-error">{{ form.errors.streetname }}</div>
      </div>

      <div class="col-span-2">
        <label class="block mb-1 text-gray-500 font-medium">Street Number</label>
        <input v-model.number="form.streetnumber" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.streetnumber" class="input-error">{{ form.errors.streetnumber }}</div>
      </div>

      <div class="col-span-6">
        <label class="block mb-1 text-gray-500 font-medium">Price</label>
        <input v-model.number="form.price" type="text" class="block w-full rounded-md shadow-sm border border-gray-300 text-gray-500" />
        <div v-if="form.errors.price" class="input-error">{{ form.errors.price }}</div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  streetname: null,
  postcode: null,
  streetnumber:null,
  price: null,
})

const submit = () => form.post(route('listing.store'))

</script>

<style scoped>
label {
margin-right: 2em;
}

div {
padding: 2px
}
</style>