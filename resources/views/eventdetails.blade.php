<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title> Event Details </title>
    @extends('layouts.head')
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../../assets/img/logo/loder.png" alt="">
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
                            <a href="index.html"><img src="../../assets/img/logo/logo.png" alt=""></a>
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
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="#" class="btn header-btn">Login / Register</a>
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
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Event Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About Law Start-->
    <form action="/e/eventdetails/{{$event -> id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn mt-50" style="margin-right: 50px; float: right; background-color:#C70039 ;" onclick="return confirm('Are you sure you want to delete this event?')">
        Delete Event
        </button>
    </form>


    <section class="about-low-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <div class="about-caption mb-50" style="text-align: justify;">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>{{$event -> ev_name}}</h2>
                        </div>
                        <p>{{$event -> description}}</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div >
                                    <h5> <img src="https://www.flaticon.com/svg/static/icons/svg/684/684809.svg" width="25" height="25"> &nbsp;Location</h5>
                                    <p>
                                        &emsp;&emsp;
                                        {{$event -> ev_location}}
                                    </p>
                                    <br/>
                                     <h5><img src="https://www.flaticon.com/svg/static/icons/svg/1464/1464205.svg" width="25" height="25"> &nbsp; Max Participants</h5>
                                    <p>
                                        &emsp;&emsp;&nbsp;
                                        {{$event -> max_participants}}
                                    </p>
                                    <br/>
                                     <h5> <img src="https://www.flaticon.com/svg/static/icons/svg/1141/1141964.svg" width="25" height="25"> &nbsp; Category</h5>
                                    @if($event -> cat==1)
                                    <p>
                                        &emsp;&emsp;&nbsp;
                                        Entertainment
                                    </p>
                                    @elseif($event -> cat==2)
                                    <p>
                                        &emsp;&emsp;&nbsp;
                                        Talk
                                    </p>
                                     @elseif($event -> cat==3)
                                    <p>
                                        &emsp;&emsp;&nbsp;
                                        Seminar
                                    </p>
                                     @elseif($event -> cat==4)
                                    <p>
                                        &emsp;&emsp;&nbsp;
                                        Fair
                                    </p>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                       
                        
                                <div class="caption">
                                   
                                    <h5> 
                                        <img src="https://www.flaticon.com/svg/static/icons/svg/2088/2088617.svg" width="25" height="25"> &nbsp;Start Date
                                    </h5>
                                    <p> 
                                        &emsp;&emsp;
                                        {{$event -> date_time_start}}
                                    </p>
                                </div><br/>
                                <div class="caption">
                                    <h5> 
                                        <img src="https://www.flaticon.com/svg/static/icons/svg/2088/2088617.svg" width="25" height="25"> &nbsp;End Date</h5>
                                    <p>
                                        &emsp;&emsp;
                                        {{$event -> date_time_end}}
                                    </p>
                                </div>
                                <br/>
                                <div class="caption">
                                    <h5> 
                                        <img src="https://www.flaticon.com/svg/static/icons/svg/985/985714.svg" width="25" height="25"> &nbsp;Entrance Fees</h5>
                                    <p>
                                        &emsp;&emsp;
                                        RM{{$event -> price}}
                                    </p>
                                </div>
                           
                        </div>
                    </div>
                    <a href={{ url('edit/'. $event->id) }} class="btn mt-50">Edit Event</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src={{$gallery[0]}} alt="" width="300" height="250">
                        </div>
                        <div class="about-back-img ">
                            <img src={{$gallery[1]}} alt="" width="550" height="650">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <!-- accordion End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{$gallery[2]}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{$gallery[1]}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{$gallery[3]}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{$gallery[6]}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url({{$gallery[4]}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{$gallery[5]}});"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery Products End -->
   </main>
   @extends('layouts.footer')
    </body>
</html>