<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <!-- navbar start -->
        <Navbar/>
        <!-- navbar end -->
        <!-- Sidebar Start-->
        <Sidebar/>
        <!-- Sidebar End -->

        <slot/>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Navbar from '../Components/Navbar.vue'
import Sidebar from '../Components/Sidebar.vue'
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>
