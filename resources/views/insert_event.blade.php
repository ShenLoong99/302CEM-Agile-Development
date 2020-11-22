<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Insert New Event</title>
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
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Insert New Event</h2>
                                <p class="msg text-success h3">{{ session('msg') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="m-5 p-5">
            <form name="insert_form" action="/insert_event" enctype="multipart/form-data" method="post">
                @csrf
                <!-- ^^ - this above allows to cross over to another page when redirect -->
                <div>
                    <p>Event Name: </p>
                    <input type="text" name="name" value="{{ Request::get('name') ?? old('name') ?? '' }}" maxlength="50" placeholder="Event Name" title="Enter event name" class="form-control" automcomplete="off" required />
                </div>
                <div>
                    <p>Event Description: </p>
                    <textarea name="desc" value="{{ Request::get('desc') ?? old('desc') ?? '' }}" class="form-control" maxlength="255" placeholder="Description of the event" title="Enter description of the event" rows="4" cols="50"></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Category: </p>
                        <select name="cat" class="form-control" required>
                            <option value="" selected disabled>Choose a category</option>
                            <option value="1">Entertainment</option>
                            <option value="2">Seminar</option>
                            <option value="3">Music</option>
                            <option value="4">Sports</option>
                            <option value="5">Fair</option>
                        </select>
                    </div><br><br>
                    <div class="col-6">
                        <p>Event Location: </p>
                        <input type="text" name="venue" maxlength="255" value="{{ Request::get('venue') ?? old('venue') ?? '' }}" placeholder="Event Location/Venue" title="Enter event location/venue" class="form-control" automcomplete="off" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p>Event Start Date & Time: </p>
                        <input type="datetime-local" title="Event Start Date & Time" value="{{ Request::get('start') ?? old('start') ?? '' }}" name="start" class="form-control" style="width: 250px" required />
                        @error('start')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <p>Event End Date & Time: </p>
                        <input type="datetime-local" title="Event End Date & Time" value="{{ Request::get('end') ?? old('end') ?? '' }}" name="end" class="form-control" style="width: 250px" required />
                        @error('end')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Max Participant: </p>
                        <input type="number" style="width: 200px" value="{{ Request::get('max') ?? old('max') ?? '' }}" placeholder="Set Max Participants" title="Enter maximum participants" name="max" class="form-control" min="40" max="3000" required />
                    </div>
                    <div class="col-6">
                        <p>Event Pricing</p>
                        <input type="number" style="width: 200px" value="{{ Request::get('price') ?? old('price') ?? '' }}" placeholder="Set Event Price" title="Enter Event Price" name="price" class="form-control" min="0" required />
                    </div>
                </div><br>
                <h3>Insert New Images</h3>
                <div>
                    <p>Main Image: </p>
                    <input type="text" name="main_img" placeholder="Insert image URL" value="{{ Request::get('main_img') ?? old('main_img') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('main-img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <p>Gallery Images (1): </p>
                    <input type="text" name="img_1" placeholder="Insert image URL" value="{{ Request::get('img_1') ?? old('img_1') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('img_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <p>Gallery Images (2): </p>
                    <input type="text" name="img_2" placeholder="Insert image URL" value="{{ Request::get('img_2') ?? old('img_2') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('img_2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <p>Gallery Images (3): </p>
                    <input type="text" name="img_3" placeholder="Insert image URL" value="{{ Request::get('img_3') ?? old('img_3') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('img_3')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <p>Gallery Images (4): </p>
                    <input type="text" name="img_4" placeholder="Insert image URL" value="{{ Request::get('img_4') ?? old('img_4') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('img_4')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <p>Gallery Images (5): </p>
                    <input type="text" name="img_5" placeholder="Insert image URL" value="{{ Request::get('img_5') ?? old('img_5') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('img_5')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <p>Gallery Images (6): </p>
                    <input type="text" name="img_6" placeholder="Insert image URL" value="{{ Request::get('img_6') ?? old('img_6') ?? '' }}" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                    @error('img_6')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button name="submit" type="submit" class="btn mt-50">Insert New Event!</button>
            </form>
        </div>
    </main>
    @extends('layouts/footer')
</body>

</html>