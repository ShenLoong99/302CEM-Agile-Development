<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Edit Event</title>
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
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Edit Event Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="container">

            <form action="/e/update/{{$event->id}}" enctype="multipart/form-data" method="get">

                @csrf

                <div class="row">
                    <div class="col-8 offset-2">

                        <!-- <div class="row">
                            <h1>Edit Event Details</h1>
                        </div> -->

                        <br/>
                        @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                        @endif
                        <br/>

                        <div class="form-group row">
                            <label for="event_name" class="col-md-4 col-form-label">Event Name</label>

                            <input id="event_name" type="text" class="form-control @error('event_name') is-invalid @enderror" name="event_name" value="{{ $event->ev_name }}"  autocomplete="event_name" autofocus>

                            @error('event_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row mt-4">
                            <label for="category" class="col-md-2 col-form-label">Category</label>

                            <select id="category" name="category" class="pt-0 px-5 form-control @error('category') is-invalid @enderror" autofocus>
                              <option value="1" {{ ($event->cat_ID == 1) ? "selected" : "" }}>Entertainment</option>
                              <option value="2" {{ ($event->cat_ID == 2) ? "selected" : "" }}>Talk</option>
                              <option value="3" {{ ($event->cat_ID == 3) ? "selected" : "" }}>Seminar</option>
                              <option value="4" {{ ($event->cat_ID == 4) ? "selected" : "" }}>Fair</option>
                          </select>

                          @error('category')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description</label>

                        <textarea id="description" rows="4" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description" autofocus>{{ $event->description }}</textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="event_location" class="col-md-4 col-form-label">Location</label>

                        <input id="event_location" type="text" class="form-control @error('event_location') is-invalid @enderror" name="event_location" value="{{ $event->ev_location }}"  autocomplete="event_location" autofocus>

                        @error('event_location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="date_time_start" class="col-md-4 col-form-label">Start Time</label>

                        <input id="date_time_start" type="datetime-local" class="form-control @error('date_time_start') is-invalid @enderror"name="date_time_start" value="{{ date('Y-m-d\TH:i', strtotime($event->date_time_start)) }}" autofocus>

                        @error('date_time_start')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="date_time_end" class="col-md-4 col-form-label">End Time</label>

                        <input id="date_time_end" type="datetime-local" class="form-control @error('date_time_end') is-invalid @enderror"name="date_time_end" value="{{ date('Y-m-d\TH:i', strtotime($event->date_time_end)) }}" autofocus>

                        @error('date_time_end')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label">Price</label>

                        <input id="price" min=0 max=9999 type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $event->price }}"  autocomplete="price" autofocus>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="max_participants" class="col-md-4 col-form-label">Max Participants</label>

                        <input id="max_participants" min=1 max=9999 type="number" class="form-control @error('max_participants') is-invalid @enderror" name="max_participants" value="{{ $event->max_participants }}"  autocomplete="max_participants" autofocus>

                        @error('max_participants')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row mt-4">
                        <label for="active" class="col-md-2 col-form-label">Active</label>

                        <select id="active" name="active" class="pt-0 px-5 form-control @error('active') is-invalid @enderror" autofocus>
                          <option value="1" {{ ($event->active == 1) ? "selected" : "" }}>Hide event</option>
                          <option value="2" {{ ($event->active == 2) ? "selected" : "" }}>Upcoming event</option>
                          <option value="3" {{ ($event->active == 3) ? "selected" : "" }}>Event over</option>
                      </select>

                      @error('active')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div> -->

                <div class="row pt-4 mb-3">
                    <button class="btn btn-primary">Update Event Details</button>
                </div>
                <br/>
                <br/>

            </div>
        </div>
    </form>
    
</div>
</main>
@extends('layouts/footer')
@extends('layouts/go_to_top')
@extends('layouts/js')
</body>

</html>
