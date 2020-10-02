<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Edit Event</title>
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

            <form action="/update/{{$event->id}}" enctype="multipart/form-data" method="get">

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

                        @if($errors->any())
                        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                        @endif
                        <br/>

                        <div class="form-group row">
                            <label for="event_name" class="col-md-4 col-form-label">Event Name</label>

                            <input id="event_name" type="text" class="form-control @error('event_name') is-invalid @enderror" name="event_name" value="{{ Request::get('event_name') ?? old('event_name') ?? $event->ev_name }}"   autocomplete="event_name" autofocus>

                            @error('event_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label">Description</label>

                            <textarea id="description" rows="4" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description" autofocus>{{ Request::get('description') ?? old('description') ?? $event->description }}</textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row mt-4">
                            <label for="category" class="col-md-2 col-form-label">Category</label>

                            <select id="category" name="category" class="pt-0 px-5 form-control @error('category') is-invalid @enderror" autofocus>
                              <option value="1" {{ ($event->cat == 1) ? "selected" : "" }}>Music</option>
                              <option value="2" {{ ($event->cat == 2) ? "selected" : "" }}>Sports</option>
                              <option value="3" {{ ($event->cat == 3) ? "selected" : "" }}>Games (Fun)</option>
                              <option value="4" {{ ($event->cat == 4) ? "selected" : "" }}>Product Fair</option>
                          </select>

                          @error('category')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    

                    <div class="form-group row">
                        <label for="event_location" class="col-md-4 col-form-label">Event Location</label>

                        <input id="event_location" type="text" class="form-control @error('event_location') is-invalid @enderror" name="event_location" value="{{ Request::get('event_location') ?? old('event_location') ?? $event->ev_location }}"  autocomplete="event_location" autofocus>

                        @error('event_location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="date_time_start" class="col-md-4 col-form-label">Event Start Date & Time</label>

                        <input id="date_time_start" type="datetime-local" class="form-control @error('date_time_start') is-invalid @enderror"name="date_time_start" value="{{ date('Y-m-d\TH:i', strtotime($event->date_time_start)) }}" autofocus>

                        @error('date_time_start')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="date_time_end" class="col-md-4 col-form-label">Event End Date & Time</label>

                        <input id="date_time_end" type="datetime-local" class="form-control @error('date_time_end') is-invalid @enderror"name="date_time_end" value="{{ date('Y-m-d\TH:i', strtotime($event->date_time_end)) }}" autofocus>

                        @error('date_time_end')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="max_participants" class="col-md-4 col-form-label">Max Participants</label>

                        <input id="max_participants" min=1 max=9999 type="number" class="form-control @error('max_participants') is-invalid @enderror" name="max_participants" value="{{ Request::get('max_participants') ?? old('max_participants') ?? $event->max_participants }}"  autocomplete="max_participants" autofocus>

                        @error('max_participants')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label">Event Pricing</label>

                        <div style="display: flex; width: 100%;">
                            <h5 style="flex: .05; line-height: 1.8; padding: 0 10px; box-sizing: border-box;">RM</h5>
                            <input style="flex: .95;" id="price" min=0 max=9999 step='0.01' placeholder='0.00' type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ Request::get('price') ?? old('price') ?? $event->price }}"  autocomplete="price" autofocus>
                        </div>

                        @error('price')
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

                <hr/>

                <h3>Gallery</h3><br/>

                <div class="form-group row">
                    <label for="main_img" class="col-md-4 col-form-label">Main Image&nbsp;
                        <a href="{{ Request::get('main_img') ?? old('main_img') ?? $gallery[0] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="main_img" type="text" class="form-control @error('main_img') is-invalid @enderror" name="main_img" value="{{ Request::get('main_img') ?? old('main_img') ?? $gallery[0] }}"  autocomplete="main_img" autofocus>

                    @error('main_img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="img_1" class="col-md-4 col-form-label">Gallery Images (1)&nbsp;
                        <a href="{{ Request::get('img_1') ?? old('img_1') ?? $gallery[1] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_1" type="text" class="form-control @error('img_1') is-invalid @enderror" name="img_1" value="{{ Request::get('img_1') ?? old('img_1') ?? $gallery[1] }}"  autocomplete="img_1" autofocus>

                    @error('img_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="img_2" class="col-md-4 col-form-label">Gallery Images (2)&nbsp;
                        <a href="{{ Request::get('img_2') ?? old('img_2') ?? $gallery[2] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_2" type="text" class="form-control @error('img_2') is-invalid @enderror" name="img_2" value="{{ Request::get('img_2') ?? old('img_2') ?? $gallery[2] }}"  autocomplete="img_2" autofocus>

                    @error('img_2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="img_3" class="col-md-4 col-form-label">Gallery Images (3)&nbsp;
                        <a href="{{ Request::get('img_3') ?? old('img_3') ?? $gallery[3] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_3" type="text" class="form-control @error('img_3') is-invalid @enderror" name="img_3" value="{{ Request::get('img_3') ?? old('img_3') ?? $gallery[3] }}"  autocomplete="img_3" autofocus>

                    @error('img_3')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="img_4" class="col-md-4 col-form-label">Gallery Images (4)&nbsp;
                        <a href="{{ Request::get('img_4') ?? old('img_4') ?? $gallery[4] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_4" type="text" class="form-control @error('img_4') is-invalid @enderror" name="img_4" value="{{ Request::get('img_4') ?? old('img_4') ?? $gallery[4] }}"  autocomplete="img_4" autofocus>

                    @error('img_4')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="img_5" class="col-md-4 col-form-label">Gallery Images (5)&nbsp;
                        <a href="{{ Request::get('img_5') ?? old('img_5') ?? $gallery[5] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_5" type="text" class="form-control @error('img_5') is-invalid @enderror" name="img_5" value="{{ Request::get('img_5') ?? old('img_5') ?? $gallery[5] }}"  autocomplete="img_5" autofocus>

                    @error('img_5')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="img_6" class="col-md-4 col-form-label">Gallery Images (6)&nbsp;
                        <a href="{{ Request::get('img_6') ?? old('img_6') ?? $gallery[6] }}" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_6" type="text" class="form-control @error('img_6') is-invalid @enderror" name="img_6" value="{{ Request::get('img_6') ?? old('img_6') ?? $gallery[6] }}"  autocomplete="img_6" autofocus>

                    @error('img_6')
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
@extends('layouts.footer')
</body>

</html>
