<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title> Event Details </title>
    @extends('layouts/head')
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
                                          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        @endguest
                                    </ul>
                                </nav>
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
                            <h2>Event Attendees List</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div style=" background-color: wheat;
          width: 50%;
          border: 15px solid;
          border-color: #0A1152;
          padding: 40px;
          border-radius: 0.5em;
          margin-left: auto;
          margin-right: auto;
          margin-top: 20px;
          margin-bottom: 20px;">
        <center><h5>- Event Attendees List Details -</h5><br/></center>
        <p class="mb-0"><b><i class="fa fa-calendar"></i> &nbsp; Event Name:</b>  {{ $event->ev_name }}</p>
        <br/>
        <div class="row">
            <div class="col-6">
                <p><b><i class="fa fa-user"></i>&nbsp; Registered Users: </b></p>
            </div>
            <div class="col-6">
                <p><b><i class="fa fa-ticket-alt"></i>&nbsp; Tickets Quantity: </b></p>
            </div>
        </div>
        @foreach($reg as $row)
        <div class="row">
            <div class="col-6">
                <p class="mb-0" style="margin-left: 25px;">{{ $row->register_name }}</p>
            </div>
            <div class="col-6">

                <p class="mb-0" style="margin-left: 80px;">{{ $row->quantity }}</p>

            </div>
        </div>
        @endforeach
        <hr style="border: 1px solid black;">
        
        <div class="row">
            <div class="col-6">

                <p><b>Total User(s):</b>&nbsp; {{$reg -> count()}}</p>
            </div>
            <div class="col-6">
                <p class="mb-0" ><b>Total Ticket(s):</b>&nbsp; {{$sum}}</p>
            </div>
        </div>
    </div>
   </main>
   @extends('layouts/footer')
    </body>
</html>