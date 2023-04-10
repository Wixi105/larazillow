<template>
        <div>
            <p>This is an index page</p>
            <Link href="/hello">Show Page</Link>
        </div>
        <div>
            <p>The message is {{ message }}</p>
        </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    message: String
})
</script>


<!-- <script> 
    can use this to set layouts specific to single pages.
// import MainLayout from "../../Layouts/MainLayout.vue";

// export default {
//     layout: MainLayout
// }
// </script> -->