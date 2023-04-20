<template>
  <form @submit.prevent="submit">
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
        <button type="submit">Create</button>
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