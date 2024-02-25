<template>
    <AppLayout>
        <template #content>
            <main>
                <div class="slider-area hero-bg1 ">
                    <div class="single-slider  slider-height2 d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center ">
                                <div class="col-xl-7 col-lg-11">
                                    <div class="hero-caption hero-caption2 pt-10">
                                        <h3 class="main-cover-text" >Hotels</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form action="#" class="search-box pb-45">
                            <div class="row align-items-end">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                                    <div class="date-pic mb-15">
                                        <label for="#"></label>
                                        <div class="boking-datepicker">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="date-pic mb-15">

                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">

                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">

                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="location-house section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-8">

                                <div class="section-tittle mb-50">
                                    <h2>Hotels</h2>
                                    <p>The concept and service of the best luxury hotels in Asturias in our sophisticated.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4" v-for="value in hotelData">
                                <div class="single-location single-location2 mb-30" >
                                    <img :src="value.hotel_images[0]['url']" alt="" class="hotel-image" width="" height="250">
                                    <div class="location-contents">
                                        <h3><a href="#" class="card-body-text" @click.prevent="selectedHotel(value.id)" >{{ value.name }} </a></h3>
                                        <p class="card-body-text">{{ value.hotel_type?.max_occupancy }} persons package</p>
                                        <div class="price">
                                            <span class="card-body-text" @click.prevent="selectedHotel(value.id)" >Started from
                                                <span class="card-body-text" v-if="value.hotel_type?.price_range === 1">Rs.40,000</span>
                                                <span class="card-body-text" v-else-if="value.hotel_type?.price_range === 2">Rs.100,000</span>
                                                <span class="card-body-text" v-else="value.hotel_type?.price_range === 3 ">Rs.300,000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guest-house section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8">

                                <div class="section-tittle text-center mb-50">
                                    <h2>We Offer to Our Guest</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-location single-location2 mb-30 mb-30">
                                    <img src="@/../../public/img/gallery/guest1.jpg" alt>
                                    <div class="guest-contents guest-contents2">
                                        <h3><a href="#">Free Drinks</a></h3>
                                    </div>
                                    <div class="guest-contents">
                                        <h3><a href="#">Free Breakfast</a></h3>
                                        <p>The concept and service of the best luxury hotels in Asturias in our
                                            sophisticated
                                            Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a
                                            furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-location single-location2 mb-30 mb-30">
                                    <img src="@/../../public/img/gallery/guest2.jpg" alt>
                                    <div class="guest-contents guest-contents2">
                                        <h3><a href="#">Free Breakfast</a></h3>
                                    </div>
                                    <div class="guest-contents">
                                        <h3><a href="#">Free Breakfast</a></h3>
                                        <p>The concept and service of the best luxury hotels in Asturias in our
                                            sophisticated
                                            Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a
                                            furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-location single-location2 mb-30 mb-30">
                                    <img src="@/../../public/img/gallery/guest3.jpg" alt>
                                    <div class="guest-contents guest-contents2">
                                        <h3><a href="#">Free Dinner</a></h3>
                                    </div>
                                    <div class="guest-contents">
                                        <h3><a href="#">Free Breakfast</a></h3>
                                        <p>The concept and service of the best luxury hotels in Asturias in our
                                            sophisticated
                                            Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a
                                            furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref, onMounted, } from 'vue';
import axios from 'axios';
import { Link } from '@inertiajs/vue3';

const hotelData = ref([]);

const getHotelData = async () => {
    try {
        const response = await axios.get(route('hotels.all'));
        hotelData.value = response.data;
        console.log('hotel data', hotelData.value);
    } catch (error) {
        console.log('Error:', error);
    }

}

const selectedHotel = (id) => {
    window.location.href = route('hotels.get', id);
}

onMounted(() => {
    getHotelData();
});
</script>

<style scoped>

.hero-bg1{
    background-image: url('@/../../public/img/hero/hotel.jpg');
    background-size: cover;
}

.main-cover-text{
    color:rgb(255, 255, 255);
    font-size: 3rem;
    text-shadow: 1px 1px 10px rgb(255, 255, 255);
}

.hotel-image{
    overflow: auto;
    border-radius: 2rem;
    box-shadow: 1px 1px 4px rgb(20, 15, 15)}

.location-contents{
    background-color: rgba(0, 0, 0, 0.479);
    width: 90%;
    padding: 2%;
    border-radius: 2rem;
    color: rgb(0, 0, 0);
}

.card-body-text{
    color:rgb(10, 9, 9)
}
</style>