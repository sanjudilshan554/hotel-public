<template>
    <div>
        <Head :title=" title ? title: 'Hotel'">

        </Head>

        <div class="main-content">
            <NavBar />
            <slot name="content" />
        </div>
        
        <Footer />

    </div>
</template>


<script setup>
import { Head } from '@inertiajs/vue3'
import NavBar from '@/Components/Main/NavBar.vue';
import Footer from '@/Components/Main/Footer.vue';
</script>