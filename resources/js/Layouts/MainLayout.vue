<template>
  <div>
    <Link href="/">Main Page</Link>
    <Link href="/hello">Show Page</Link>
  </div>
  <section v-if="$page.props.flash.success" class="success">
    {{ $page.props.flash.success }}
  </section>
  <slot>Default</slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<style scoped>
  .success{
    background-color: green;
    color: white;
  }
</style>