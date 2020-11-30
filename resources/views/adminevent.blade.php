<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Admin Event List</title>
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
                                <a href={{ url('/') }}><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href={{ url('/') }}>Home</a></li>
                                            <li><a href={{ url('/view_event') }}>Events</a></li>
                                            <li><a href={{ url('/registered_event') }}>My Events</a></li>
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
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Admin Event List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="container row mx-auto">
            <div class="col-md-12">
                <br />
                <div class="mb-5">
                    <h3 class="float-left">Event Listing</h3>
                    <a href={{ url('insert_event') }} class="btn float-right">Insert New Event</a>
                </div>
                <br />
                <table class="table table-bordered">
                    <tr>
                        <th>Event ID</th>
                        <th>Event Title</th>
                        <th style="width: 150px">Event Time Start</th>
                        <th>Event Discription</th>
                        <th>Price (RM)</th>
                        <th>Action</th>
                    </tr>
                    @php 
                        $a = 0;
                    @endphp
                    @foreach($events as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['ev_name']}}</td>
                        <td>{{substr($row['date_time_start'], 0, 16)}}</td>
                        <td>{{substr($row['description'], 0, 200).'...'}}</td>
                        <td>{{$row['price']}}</td>
                        <td>
                            <a href={{ url('eventdetails/'. $row['id']) }} class="btn">Details</a><br><br>
                            <a href={{ url('attendees/'. $row['id']) }} class="btn">Attendees</a>
                        </td>
                    </tr>
                        @php 
                            $a++;
                        @endphp
                    @endforeach
                    @if ($a == 0) 
                        <tr>
                            <th colspan="6" class="text-center">No event is hosted by you yet... :(</th>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        <br>
        <br>
    </main>
    <footer>
        @extends('layouts.footer')
</body>

</html>