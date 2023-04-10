<template>
    <div>
        <Link href="/">Main Page</Link>
        <Link href="/hello">Show Page</Link>
    </div>
    <slot>Default</slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import {ref} from "vue"

</script>