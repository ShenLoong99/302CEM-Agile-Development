<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Edit Event</title>
    
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

            <form action="/update/<?php echo e($event->id); ?>" enctype="multipart/form-data" method="get">

                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-8 offset-2">

                        <!-- <div class="row">
                            <h1>Edit Event Details</h1>
                        </div> -->

                        <br/>
                        <?php if(session('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                        </div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                        <?php echo implode('', $errors->all('<div class="alert alert-danger">:message</div>')); ?>

                        <?php endif; ?>
                        <br/>

                        <div class="form-group row">
                            <label for="event_name" class="col-md-4 col-form-label">Event Name</label>

                            <input id="event_name" type="text" class="form-control <?php $__errorArgs = ['event_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="event_name" value="<?php echo e(Request::get('event_name') ?? old('event_name') ?? $event->ev_name); ?>"   autocomplete="event_name" autofocus>

                            <?php $__errorArgs = ['event_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label">Description</label>

                            <textarea id="description" rows="4" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description"  autocomplete="description" autofocus><?php echo e(Request::get('description') ?? old('description') ?? $event->description); ?></textarea>

                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="category" class="col-md-2 col-form-label">Category</label>

                            <select id="category" name="category" class="pt-0 px-5 form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autofocus>
                              <option value="1" <?php echo e(($event->cat == 1) ? "selected" : ""); ?>>Music</option>
                              <option value="2" <?php echo e(($event->cat == 2) ? "selected" : ""); ?>>Sports</option>
                              <option value="3" <?php echo e(($event->cat == 3) ? "selected" : ""); ?>>Games (Fun)</option>
                              <option value="4" <?php echo e(($event->cat == 4) ? "selected" : ""); ?>>Product Fair</option>
                          </select>

                          <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    

                    <div class="form-group row">
                        <label for="event_location" class="col-md-4 col-form-label">Event Location</label>

                        <input id="event_location" type="text" class="form-control <?php $__errorArgs = ['event_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="event_location" value="<?php echo e(Request::get('event_location') ?? old('event_location') ?? $event->ev_location); ?>"  autocomplete="event_location" autofocus>

                        <?php $__errorArgs = ['event_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group row">
                        <label for="date_time_start" class="col-md-4 col-form-label">Event Start Date & Time</label>

                        <input id="date_time_start" type="datetime-local" class="form-control <?php $__errorArgs = ['date_time_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"name="date_time_start" value="<?php echo e(date('Y-m-d\TH:i', strtotime($event->date_time_start))); ?>" autofocus>

                        <?php $__errorArgs = ['date_time_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group row">
                        <label for="date_time_end" class="col-md-4 col-form-label">Event End Date & Time</label>

                        <input id="date_time_end" type="datetime-local" class="form-control <?php $__errorArgs = ['date_time_end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"name="date_time_end" value="<?php echo e(date('Y-m-d\TH:i', strtotime($event->date_time_end))); ?>" autofocus>

                        <?php $__errorArgs = ['date_time_end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group row">
                        <label for="max_participants" class="col-md-4 col-form-label">Max Participants</label>

                        <input id="max_participants" min=1 max=9999 type="number" class="form-control <?php $__errorArgs = ['max_participants'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="max_participants" value="<?php echo e(Request::get('max_participants') ?? old('max_participants') ?? $event->max_participants); ?>"  autocomplete="max_participants" autofocus>

                        <?php $__errorArgs = ['max_participants'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label">Event Pricing</label>

                        <div style="display: flex; width: 100%;">
                            <h5 style="flex: .05; line-height: 1.8; padding: 0 10px; box-sizing: border-box;">RM</h5>
                            <input style="flex: .95;" id="price" min=0 max=9999 step='0.01' placeholder='0.00' type="number" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e(Request::get('price') ?? old('price') ?? $event->price); ?>"  autocomplete="price" autofocus>
                        </div>

                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="active" class="col-md-2 col-form-label">Active</label>

                        <select id="active" name="active" class="pt-0 px-5 form-control <?php $__errorArgs = ['active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autofocus>
                          <option value="1" <?php echo e(($event->active == 1) ? "selected" : ""); ?>>Hide event</option>
                          <option value="2" <?php echo e(($event->active == 2) ? "selected" : ""); ?>>Upcoming event</option>
                          <option value="3" <?php echo e(($event->active == 3) ? "selected" : ""); ?>>Event over</option>
                      </select>

                      <?php $__errorArgs = ['active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <hr/>

                <h3>Gallery</h3><br/>

                <div class="form-group row">
                    <label for="main_img" class="col-md-4 col-form-label">Main Image&nbsp;
                        <a href="<?php echo e(Request::get('main_img') ?? old('main_img') ?? $gallery[0]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="main_img" type="text" class="form-control <?php $__errorArgs = ['main_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="main_img" value="<?php echo e(Request::get('main_img') ?? old('main_img') ?? $gallery[0]); ?>"  autocomplete="main_img" autofocus>

                    <?php $__errorArgs = ['main_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group row">
                    <label for="img_1" class="col-md-4 col-form-label">Gallery Images (1)&nbsp;
                        <a href="<?php echo e(Request::get('img_1') ?? old('img_1') ?? $gallery[1]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_1" type="text" class="form-control <?php $__errorArgs = ['img_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="img_1" value="<?php echo e(Request::get('img_1') ?? old('img_1') ?? $gallery[1]); ?>"  autocomplete="img_1" autofocus>

                    <?php $__errorArgs = ['img_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group row">
                    <label for="img_2" class="col-md-4 col-form-label">Gallery Images (2)&nbsp;
                        <a href="<?php echo e(Request::get('img_2') ?? old('img_2') ?? $gallery[2]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_2" type="text" class="form-control <?php $__errorArgs = ['img_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="img_2" value="<?php echo e(Request::get('img_2') ?? old('img_2') ?? $gallery[2]); ?>"  autocomplete="img_2" autofocus>

                    <?php $__errorArgs = ['img_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group row">
                    <label for="img_3" class="col-md-4 col-form-label">Gallery Images (3)&nbsp;
                        <a href="<?php echo e(Request::get('img_3') ?? old('img_3') ?? $gallery[3]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_3" type="text" class="form-control <?php $__errorArgs = ['img_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="img_3" value="<?php echo e(Request::get('img_3') ?? old('img_3') ?? $gallery[3]); ?>"  autocomplete="img_3" autofocus>

                    <?php $__errorArgs = ['img_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group row">
                    <label for="img_4" class="col-md-4 col-form-label">Gallery Images (4)&nbsp;
                        <a href="<?php echo e(Request::get('img_4') ?? old('img_4') ?? $gallery[4]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_4" type="text" class="form-control <?php $__errorArgs = ['img_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="img_4" value="<?php echo e(Request::get('img_4') ?? old('img_4') ?? $gallery[4]); ?>"  autocomplete="img_4" autofocus>

                    <?php $__errorArgs = ['img_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group row">
                    <label for="img_5" class="col-md-4 col-form-label">Gallery Images (5)&nbsp;
                        <a href="<?php echo e(Request::get('img_5') ?? old('img_5') ?? $gallery[5]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_5" type="text" class="form-control <?php $__errorArgs = ['img_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="img_5" value="<?php echo e(Request::get('img_5') ?? old('img_5') ?? $gallery[5]); ?>"  autocomplete="img_5" autofocus>

                    <?php $__errorArgs = ['img_5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group row">
                    <label for="img_6" class="col-md-4 col-form-label">Gallery Images (6)&nbsp;
                        <a href="<?php echo e(Request::get('img_6') ?? old('img_6') ?? $gallery[6]); ?>" target="_blank"><img src="https://www.iconfinder.com/data/icons/iconano-web-stuff/512/109-External-512.png" width=15 /></a>
                    </label>

                    <input id="img_6" type="text" class="form-control <?php $__errorArgs = ['img_6'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="img_6" value="<?php echo e(Request::get('img_6') ?? old('img_6') ?? $gallery[6]); ?>"  autocomplete="img_6" autofocus>

                    <?php $__errorArgs = ['img_6'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                

                <!-- <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

</body>

</html>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\INTI\Y3S7\Agile Dev\302CEM-Agile-Development\resources\views/edit.blade.php ENDPATH**/ ?>