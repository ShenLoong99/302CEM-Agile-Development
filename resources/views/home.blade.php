<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Home</title>
    @extends('layouts/head')
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="spakers.html">Speakers</a></li>
                                            <li><a href="schedule.html">Schedule</a></li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                        <li class="nav-item">
                                            <a class="btn header-btn" href="{{ route('login') }}">{{ __('Login / Register') }}</a>
                                           <!--  @if (Route::has('register'))
                                            <a style="color: black; display: inline-block;" class="nav-link" href="{{ route('register') }}">{{ __(' / Register') }}</a> -->
                                        </li>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <a style="color: #112957; font-family: 'Sen',sans-serif;" id="navbarDropdown" class="nav-link dropdown-toggle ml-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative" style="background-image: url(https://images.unsplash.com/photo-1510673398445-94f476ef2cbc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80)">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".1s">Welcome to Evento!</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".5s">Our Highlighted Event!</h1>
                                    <h2 data-animation="fadeInLeft" class="text-white" data-delay=".5s">{{ $highlight->ev_name }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(https://images.unsplash.com/photo-1510673398445-94f476ef2cbc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".1s">Welcome to Evento!</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".5s">Our Highlighted Event!</h1>
                                    <h2 data-animation="fadeInLeft" class="text-white" data-delay=".5s">{{ $highlight->ev_name }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section Begin -->
            <div class="counter-section d-none d-sm-block">
                <div class="cd-timer" id="countdown">
                    <div class="cd-item">
                        <span>96</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>15</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>07</span>
                        <p>Min</p>
                    </div>
                    <div class="cd-item">
                        <span>02</span>
                        <p>Sec</p>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->
        </div>
        <!-- slider Area End-->
        <!--? About Law Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                @foreach($event as $event)
                    <div class="row mb-5 pb-5">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <h2>{{ $event->ev_name }}</h2>
                                </div>
                                <p>{{ $event->description }}</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span class="flaticon-communications-1"></span>
                                        </div>
                                        <div class="caption">
                                            <h5>Where</h5>
                                            <p>{{ $event->ev_location }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span class="flaticon-education"></span>
                                        </div>
                                        <div class="caption">
                                            <h5>When</h5>
                                            <p>{{$event->date_time_start }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img ">
                                <div class="about-back-img ">
                                    <img style="width: 500px; height: 350px" src={{ $event->image }} alt="event photo">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <center><a href={{ url('/view_event') }}  class="btn">View More Events</a></center>
            </div>
        </section>
        <!-- About Law End-->
        <!--? Brand Area Start-->
        <section class="work-company section-padding30" style="background: #2e0e8c;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <h2>Our Top Genaral Sponsors.</h2>
                            <p>There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="logo-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo mb-30">
                                        <img src="assets/img/gallery/cisco_brand.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo mb-30">
                                        <img src="assets/img/gallery/cisco_brand2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo mb-30">
                                        <img src="assets/img/gallery/cisco_brand3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo mb-30">
                                        <img src="assets/img/gallery/cisco_brand4.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo mb-30">
                                        <img src="assets/img/gallery/cisco_brand5.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo mb-30">
                                        <img src="assets/img/gallery/cisco_brand6.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Area End-->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="section-tittle text-center mb-50">
                            <h2>News From Blog</h2>
                            <p>There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog1.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Physics</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href="blog_details.html" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Physics</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href="blog_details.html" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
    @extends('layouts/footer')
</body>

</html>