<template>
  <div>
    <span>{{ listing.streetname }} {{ listing.streetnumber }}, {{ listing.city }}, for ${{ listing.price }}</span>
  </div>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>
