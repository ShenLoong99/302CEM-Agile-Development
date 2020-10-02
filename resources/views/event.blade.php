<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Event List</title>
    @extends('layouts.head')
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
                                        <li><a href={{ url('/') }}>Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="spakers.html">Spakers</a></li>
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
                                <a href="#" class="btn header-btn">Get Your Ticket</a>
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
<main class="mb-5">
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Event List</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
        @php
            $a = 0
        @endphp 

        @foreach($event as $row)
            @if($a == 0)         
               <div class="card-deck mt-5 mx-3">
            @endif
            <div class="card">
                <a onMouseOver="this.style.filter='brightness(1.3)'"onMouseOut="this.style.filter='brightness(1)'" style="display: inline-block; text-decoration: none; color: inherit; outline: 0;" href="/eventdetails/{{$row['id']}}">
                    <img class="card-img-top" src="{{$row['image']}}" width="100%" height=300 alt="Event pic">
                    <div class="card-body">
                        <h5 class="card-title">{{$row['ev_name']}}</h5>
                        <p class="card-text mb-1">{{ substr($row['description'], 0, 80).'...'}}</p>
                    </div>
                </a>
            </div>

            @if($loop->last) 
                @if($a == 0)         
                    <div class="card border-0"></div>
                    <div class="card border-0"></div>
                @elseif($a == 1) 
                    <div class="card border-0"></div>
                @endif
            @endif

            @if($a == 2) 
                @php
                    $a = 0
                @endphp
                </div>
            @else 
                @php
                    $a = $a + 1
                @endphp
            @endif
            
        @endforeach
        
</main>
    <footer>
        @extends('layouts.footer')
    </body>
</html>