<template>
    <AppLayout>
        <template #content>
            <main>
                <div class="slider-area hero-bg1" :style="{backgroundImage: 'url(' + hotelImage + ')', backgroundColor: 'rgba(224, 28, 28, 1)' }">
                    <div class="single-slider slider-height2 d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center ">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="hero-caption hero-caption2 pt-10">
                                        <h1 class="head-title">
                                            <div class="head">Hotel </div>
                                            <div class="head-custom">{{ props.hotel[0].name }}</div>
                                        </h1>
                                    </div>
                                    <h1 class="sub-header-one">{{ props.hotel[0].description }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container ">
                        <form action="#" class="search-box pb-45">
                            <div class="row align-items-end">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                   
                                    <div class="date-pic mb-15">
                                        <label for="#"></label>
                                        <div class="boking-datepicker">
                                            <h1 class="sub-header-two">{{ props.hotel[0].hotel_type.name }}</h1>
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
                                    <h2>Hotel Rooms</h2>
                                    <p>{{ props.hotel[0].description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4" v-for="value in hotelRooms">
                                <div class="single-location single-location2 mb-30 ">
                                    <img :src="value.url" alt="" class="hotel-image" width="" height="300">
                                    <div class="location-contents">
                                        <h3><a href="#" class="card-body-text">{{ value.room_type?.name }}</a></h3>
                                        <p class="card-body-text">{{ value.room_type?.max_occupancy }} persons package</p>
                                        <div class="price">

                                            <span class="card-body-text">Started from
                                                <span class="card-body-text"
                                                    v-if="value.room_type?.price_range === 1">Rs.40,00 </span>
                                                <span class="card-body-text"
                                                    v-else-if="value.room_type?.price_range === 2">Rs.10,000</span>
                                                <span class="card-body-text"
                                                    v-else="value.room_type?.price_range === 3 ">Rs.30,000</span>
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
                    <div class="container ">
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
import { ref, onMounted, defineProps } from 'vue';
import axios from 'axios';
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    hotel: {
        Type: Object,
        require: true,
    }
});

const hotelData = ref([]);
const hotelRooms = ref([]);
const hotelImage = ref({});

const getHotelData = async () => {
    try {
        console.log('props:', props.hotel[0].hotel_images[0].url);
        const hotelId = props.hotel[0].id;
        // hotelImage.value = props.hotel[0].
        // console.log(hotel)
        hotelImage.value= props.hotel[0].hotel_images[0].url;
        getHotelRooms(hotelId);
    } catch (error) {
        console.log('Error:', error);
    }
 
}

const getHotelRooms = async (hotelId) => {
    try{
        const respones = await axios.get(route('hotelRooms.get',hotelId));
        hotelRooms.value = respones.data.hotel_rooms;
        console.log('hotel rooms',hotelRooms.value);
    }catch(error){
        console.log('Error',error);
    }
}

onMounted(() => {
    getHotelData();
});
</script>

<style scoped>
.hotel-image {
    overflow: auto;
    border-radius: 2rem;
    box-shadow: 1px 1px 4px rgb(20, 15, 15)
}

.location-contents {
    background-color: rgba(19, 16, 16, 0.274);
    width: 90%;
    padding: 2%;
    border-radius: 2rem;
    color: black;
    box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.342);
}

.card-body-text {
    color: black;
    text-shadow: 1px 1px 5px rgb(255, 255, 255);
}

.head-title{
    display: flex;
    width: 100vh;
    text-shadow: 1px 1px 5px rgb(255, 255, 255);
}

.head-custom{
    background-color: rgba(0, 0, 0, 0.295);
    margin-left: 2rem;
    padding: 1vh;
    border-radius:10px;
    box-shadow: 1px 1px 10px rgba(252, 252, 252, 0.671);
    text-shadow: 1px 1px 5px rgb(255, 255, 255);
}

.sub-header-one{
    color: rgb(255, 255, 255);
    font-size: larger;
    text-align: center;
    text-shadow: 1px 1px 5px rgb(255, 255, 255);
}

.sub-header-two{
    color: white;
    font-size: larger;
    text-shadow: 1px 1px 5px rgb(255, 255, 255);
}

.head{
    text-shadow:1px 1px 5px rgb(0, 0, 0);
   
}
.hero-bg1 {
    background-size: cover;
    background-position: center;
}
.single-slider::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

.single-slider {
    position: relative;
}
</style>