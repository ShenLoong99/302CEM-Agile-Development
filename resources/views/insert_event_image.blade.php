<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Insert Event Images</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
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
                                <h2>Insert Event Images</h2>
                                <p class="msg text-success h3">{{ session('msg') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="m-5 p-5">
            <form name="insert_form" action="/insert_event_image?id={{$id}}" method="post">
                @csrf 
                <!-- ^^ - this above allows to cross over to another page when redirect -->
                <h2>{{ $event->ev_name }}</h2>
                <div>
                    <p>Main Image: </p>
                    <input type="text" name="main_img" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <h3>Gallery Images (Max 6)</h3>
                <div>
                    <p>Gallery Images (1): </p>
                    <input type="text" name="img_1" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (2): </p>
                    <input type="text" name="img_2" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (3): </p>
                    <input type="text" name="img_3" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (4): </p>
                    <input type="text" name="img_4" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (5): </p>
                    <input type="text" name="img_5" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (6): </p>
                    <input type="text" name="img_6" placeholder="Insert image URL (max 255 characters)" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <button name="submit" type="submit" class="btn mt-50">Insert New Images!</button>
            </form>
        </div>
    </main>
    @extends('layouts/footer')
</body>
</html>