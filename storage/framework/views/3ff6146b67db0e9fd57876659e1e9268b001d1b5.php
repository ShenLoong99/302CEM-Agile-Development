<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Admin Event List</title>
    
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
                        <div class="hero-cap text-center">
                            <h2>Admin Event List</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class ="container row mx-auto">
        <div class="col-md-12">
            <br/>
            <div class="mb-5">
                <h3 class="float-left">Event Listing</h3>
                <a href=<?php echo e(url('insert_event')); ?> class="btn float-right">Insert New Event</a>
            </div>
            <br/>
            <table class="table table-bordered">
                <tr>
                    <th>Event ID</th>
                    <th>Event Title</th>
                    <th style="width: 150px">Event Time Start</th>
                    <th>Event Discription</th>
                    <th>Price (RM)</th>
                    <th>Action</th>
                </tr>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row['id']); ?></td>
                    <td><?php echo e($row['ev_name']); ?></td>
                    <td><?php echo e(substr($row['date_time_start'], 0, 16)); ?></td>
                    <td><?php echo e(substr($row['description'], 0, 100).'...'); ?></td>
                    <td><?php echo e($row['price']); ?></td>
                    <td><a href=<?php echo e(url('eventdetails/'. $row['id'])); ?> class="btn">View</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
    <br>
    <br>
    </main>
    <footer>
    
    </body>
</html>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\INTI\Y3S7\Agile Dev\302CEM-Agile-Development\resources\views/adminevent.blade.php ENDPATH**/ ?>