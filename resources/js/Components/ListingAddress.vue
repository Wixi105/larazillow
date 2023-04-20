<template>
  <div>
    <span>{{ listing.streetname }} {{ listing.streetnumber }}, {{ listing.city }}</span>
  </div>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>
