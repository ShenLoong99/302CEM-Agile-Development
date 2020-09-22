

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
                                <h2>Insert New Event</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <form name="insert_form" method="post">
            <section class="about-low-area section-padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <h2>Event Name: </h2>
                                    <input type="text" name="name" placeholder="Event Name" title="Enter event name" class="form-control" automcomplete="off" required />
                                </div>
                                <p class="mb-0 pb-0">Description of the event:</p>
                                <textarea name="desc" class="form-control" placeholder="Description of the event" title="Enter description of the event" rows="4" cols="50"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                                    <div class="single-caption mb-20">
                                        <div class="caption-icon">
                                            <span class="flaticon-communications-1"></span>
                                        </div>
                                        <div class="caption">
                                            <h5>Where: </h5>
                                            <input type="text" name="venue" placeholder="Event Location/Venue" title="Enter event location/venue" class="form-control" automcomplete="off" required />
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
                                            <input type="datetime-local" title="Event Start Date & Time" name="time" class="form-control" style="width: 215px" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button name="submit" type="submit" class="btn mt-50">Insert New Event!</button>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img">
                                <div class="about-font-img d-none d-lg-block">
                                    <h4>Sub Event Image: </h4>
                                    <input type="text" name="sub-img" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" class="form-control" autocomplete="off" />
                                </div><br>
                                <div class="about-back-img ">
                                    <h4>Main Event Image: </h4>
                                    <input type="text" name="main-img" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" class="form-control" autocomplete="off" required />
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
                <div class="container-fluid px-5">
                    <h3>Input Gallery Images (Max 6)</h3>
                    <div class="no-gutters">
                        <h4><small>At least 1 gallery image is needed to display for each event</small></h4>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div>
                                    <h4>Gallery Image 1</h4>
                                    <input type="text" name="img-gal-1" class="form-control" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" autocomplete="off" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div>
                                    <h4>Gallery Image 2</h4>
                                    <input type="text" name="img-gal-2" class="form-control" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div>
                                    <h4>Gallery Image 3</h4>
                                    <input type="text" name="img-gal-3" class="form-control" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div>
                                    <h4>Gallery Image 4</h4>
                                    <input type="text" name="img-gal-4" class="form-control" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div>
                                    <h4>Gallery Image 5</h4>
                                    <input type="text" name="img-gal-5" class="form-control" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div>
                                    <h4>Gallery Image 6</h4>
                                    <input type="text" name="img-gal-6" class="form-control" placeholder="Enter image URL" title="Make sure your image URL is valid (social media image URL is not advisable to be inserted)" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery Products End -->
            <!--? Pricing Card Start -->
            <section class="pricing-card-area section-padding2">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="section-tittle text-center mb-100">
                                <h2>Event Pricing</h2>
                                <p>Check out our event price. It's so cheap you wouldn't believe it!</p>
                            </div>
                        </div>
                    </div>
                    <center>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="single-card active text-center mb-30">
                                <div class="card-top">
                                    <input type="text" name="price" class="form-control mb-3" placeholder="Event Price (RM)" pattern="[0-9]+(\\.[0-9][0-9]?)?" autocomplete="off" required />
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>Increase traffic 50%</li>
                                        <li>E-mail support</li>
                                        <li>10 Free Optimization</li>
                                        <li>24/7 support</li>
                                    </ul>
                                    <a href="#" class="black-btn">Purchase Ticket</a>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </section>
        </form>
        <!-- Pricing Card End -->
    </main>
    @extends('layouts/footer')
    @extends('layouts/go_to_top')
    @extends('layouts/js')
</body>

</html>