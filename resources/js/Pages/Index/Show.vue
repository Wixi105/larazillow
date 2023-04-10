<template>
        <div>
            <p>This is the show page</p>
            <Link href="/">Main Page </Link>
        </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
import MainLayout from "../../Layouts/MainLayout.vue";

export default {
    layout: MainLayout
}
</script>