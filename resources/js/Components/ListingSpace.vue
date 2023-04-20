<template>
    <div>
      <span class="font-bold">
      {{ listing.beds }} bds <span class="text-gray-400">|
      </span> 
      {{ listing.baths }} ba <span class="text-gray-400">|
      </span> 
      {{ listing.area }} sqm
      </span>  
    </div>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>
