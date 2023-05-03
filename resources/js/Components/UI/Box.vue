<template>
  <!-- dark:border-gray-800 -->
  <!-- dark:text-gray-300 -->
  <div class="border border-gray-200 rounded-md p-4 shadow-sm">
    <div class="text-gray-500 font-medium">
      <slot name="header" />
    </div>
    <slot />
  </div>
</template>

<script setup>

</script>
