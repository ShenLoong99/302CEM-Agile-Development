<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Insert New Event</title>
    
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
                                <h2>Insert New Event</h2>
                                <p class="msg text-success h3"><?php echo e(session('msg')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="m-5 p-5">
            <form name="insert_form" action="/insert_event" method="post">
                <?php echo csrf_field(); ?> 
                <!-- ^^ - this above allows to cross over to another page when redirect -->
                <div>
                    <p>Event Name: </p>
                    <input type="text" name="name" maxlength="255" placeholder="Event Name" title="Enter event name" class="form-control" automcomplete="off" required />
                </div>
                <div>
                    <p>Event Description: </p>
                    <textarea name="desc" class="form-control" maxlength="255" placeholder="Description of the event" title="Enter description of the event" rows="4" cols="50"></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Category: </p>
                        <select name="cat" class="form-control" required>
                            <option value="" selected disabled>Choose a category</option>
                            <option value="1">Music</option>
                            <option value="2">Sports</option>
                            <option value="3">Games (Fun)</option>
                            <option value="4">Product Fair</option>
                        </select>
                    </div><br><br>
                    <div class="col-6">
                        <p>Event Location: </p>
                        <input type="text" name="venue" placeholder="Event Location/Venue" title="Enter event location/venue" class="form-control" automcomplete="off" required />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <p>Event Start Date & Time: </p>
                        <input type="datetime-local" title="Event Start Date & Time" name="start" class="form-control" style="width: 250px" required />
                    </div>
                    <div class="col-6">
                        <p>Event End Date & Time: </p>
                        <input type="datetime-local" title="Event End Date & Time" name="end" class="form-control" style="width: 250px" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Max Participant: </p>
                        <input type="number" style="width: 200px" placeholder="Set Max Participants" title="Enter maximum participants" name="max" class="form-control" min="40" max="3000" required />
                    </div>
                    <div class="col-6">
                        <p>Event Pricing</p>
                        <input type="text" name="price" class="form-control" placeholder="Event Price (RM)" pattern="[0-9]+(\\.[0-9][0-9]?)?" autocomplete="off" required />
                    </div>
                </div><br>
                <h3>Insert New Images</h3>
                <div>
                    <p>Main Image: </p>
                    <input type="text" name="main_img" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (1): </p>
                    <input type="text" name="img_1" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (2): </p>
                    <input type="text" name="img_2" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (3): </p>
                    <input type="text" name="img_3" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (4): </p>
                    <input type="text" name="img_4" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (5): </p>
                    <input type="text" name="img_5" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <div>
                    <p>Gallery Images (6): </p>
                    <input type="text" name="img_6" placeholder="Insert image URL" title="Make sure you have enter valid image URL, social media image URL are not advisable" class="form-control" maxlength="1000" automcomplete="off" required />
                </div>
                <button name="submit" type="submit" class="btn mt-50">Insert New Event!</button>
            </form>
        </div>
    </main>
    
</body>

</html>
<?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\INTI\Y3S7\Agile Dev\302CEM-Agile-Development\resources\views/insert_event.blade.php ENDPATH**/ ?>