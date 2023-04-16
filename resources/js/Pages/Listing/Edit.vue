<template>
  <form @submit.prevent="update">
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
        <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
      </div>
  
      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="text" />
        <div v-if="form.errors.baths">{{ form.errors.baths }}</div>
      </div>
  
      <div>
        <label>Area</label>
        <input v-model.number="form.area" type="text" />
        <div v-if="form.errors.area">{{ form.errors.area }}</div>
      </div>
  
      <div>
        <label>City</label>
        <input v-model.number="form.city" type="text" />
        <div v-if="form.errors.city">{{ form.errors.city }}</div>
      </div>
  
      <div>
        <label>Post Code</label>
        <input v-model.number="form.postcode" type="text" />
        <div v-if="form.errors.postcode">{{ form.errors.postcode }}</div>
      </div>
  
      <div>
        <label>Street</label>
        <input v-model.number="form.streetname" type="text" />
        <div v-if="form.errors.streetname">{{ form.errors.streetname }}</div>
      </div>
  
      <div>
        <label>Street Nr</label>
        <input v-model.number="form.streetnumber" type="text" />
        <div v-if="form.errors.streetnumber">{{ form.errors.streetnumber }}</div>
      </div>
  
      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
        <div v-if="form.errors.price">{{ form.errors.price }}</div>
      </div>
  
      <div>
        <button type="submit">Edit</button>
      </div>
    </div>
  </form>
</template>
  
<script setup>
import { useForm } from '@inertiajs/vue3'
  
const props = defineProps({
  listing: Object,
})

const form = useForm({
  beds: props.listing.beds,
  baths: props.listing.baths,
  area: props.listing.area,
  city: props.listing.city,
  streetname: props.listing.streetname,
  postcode: props.listing.postcode,
  streetnumber:props.listing.streetnumber,
  price: props.listing.price,
})
  
const update = () => form.put(`/listing/${props.listing.id}`)
  
</script>
  
  <style scoped>
  label {
  margin-right: 2em;
  }
  
  div {
  padding: 2px
  }
  </style>