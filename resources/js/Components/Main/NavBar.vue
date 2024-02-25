<template>
    <header>
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="header-info-left">
                                        <ul>
                                            <li>Call Us: +10 (89) 675 5456</li>
                                            <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="ddb4b3bbb29dafb2b1bca5f3beb2b0">[email&#160;protected]</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right d-none d-sm-block">
                                        <ul class="header-social">
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">

                            <div class="logo">
                                <Link :href="route('dashboard')" class="main-logo"><img class="main-logo"
                                    src="@/../../public/img/logo/logon.png" alt=""></Link>
                            </div>
                            <div class="menu-wrapper d-flex align-items-center">

                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <Link :href="route('dashboard')">Home</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('hotels.index')">Hotels</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('about.index')">About</Link>
                                            </li>
                                            <li>
                                                <Link :href="route('contact.index')">Contact us</Link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right-btn f-right d-flex align-items-center">
                                    <a href="#" class="header-btn2 d-none d-lg-block">Book Now</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style>
.main-logo {
    width: 9rem;
}

.main-menu {
    color: black;
}

.header-btn2 {
    background-color: rgba(0, 0, 0, 0.445);
}

.header-bottom {
    color: black;
    text-shadow: 1px 1px 5px white;
    background-color: rgba(240, 248, 255, 0.377);

}

</style>