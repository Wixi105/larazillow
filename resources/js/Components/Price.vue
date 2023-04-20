<template>
  <span>{{ formattedPrice }}</span>
</template>

<script setup>
import {computed} from 'vue'

const formattedPrice = computed(()=> Number(props.price).toLocaleString('en-US',{
  style:'currency',
  currency: 'USD',
  maximumFractionDigits: 2,
}),
)

const props = defineProps({
  price: [Number,String],
})
</script>