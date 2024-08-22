<!DOCTYPE html>
<html lang="en">


<head>
            <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BP872SWEL0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BP872SWEL0');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="#">
    <meta name="keywords" content="#">

    <title>YODEP</title>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontello.css')); ?>" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="<?php echo e(asset('css/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.theme.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/slider.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('js/slider.js')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/fontello.css')); ?>" rel="stylesheet">

    <link rel="icon" href="<?php echo e(asset('images/logo2.png')); ?> type="image/png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



</head>

<body>
    <div class="header" style="background: linear-gradient(#0051ca, #0051ca)">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div class="logo">
                        

                        <a href=""><img src="<?php echo e(asset('images/logo2.png')); ?>" style="width: 90px;" class="rounded-circle" alt="logo"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <nav class="navbar">
                        <div id="navigation">
                            <!-- navigation start-->
                            <ul class="bg-primary rounded">
                                <li><a href="<?php echo e(url('/')); ?>" title="Home" class="animsition-link">Home</a></li>
                                <li><a href="<?php echo e(url('/what')); ?>" title="projects" class="animsition-link">What We
                                        Do</a></li>
                                <li><a href="<?php echo e(url('/vacancies')); ?>" title="careers"
                                        class="animsition-link">Careers</a></li>
                                <li><a href="<?php echo e(url('/partner')); ?>" title="partners"
                                        class="animsition-link">Partners</a></li>
                                <li><a href="#" class="animsition-link">More</a>
                                    <ul>
                                        <li><a href="<?php echo e(url('/about')); ?>" title="cbout us"
                                                class="animsition-link">About us</a></li>
                                        <li><a href="<?php echo e(url('/contact')); ?>" title="contact us"
                                                class="animsition-link">Contact Us</a></li>
                                        <li><a href="<?php echo e(url('/gallery')); ?>" title="gallary"
                                                class="animsition-link">Gallery</a></li>
                                        <li><a href="<?php echo e(url('/blog')); ?>" title="blog"
                                                class="animsition-link">Blog</a></li>
                                        <li><a href="<?php echo e(url('/events')); ?>" title="events"
                                                class="animsition-link">Events</a></li>
                                        <li><a href="<?php echo e(url('/resources')); ?>" title="events"
                                                class="animsition-link">Resources</a></li>
                                        <li><a href="<?php echo e(url('/stories')); ?>" title="successful stories"
                                                class="animsition-link">Successful Stories</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(url('/donate')); ?>" title="donate now"
                                        class="animsition-link"><b>Donate</b></a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- navigation end-->
                </div>

            </div>
        </div>
    </div>




    <div class="slider" id="slider">
        <!-- slider -->

        <?php $__currentLoopData = $slidepics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slider-img" style="background: linear-gradient(rgba(16, 76, 149, 0.281), rgba(16, 76, 149, 0.301)), rgba(16, 76, 149, 0.281)">
                <img src="<?php echo e($item->image); ?>" alt="" class="">
                <div class="container">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title">Youth for Development and Productivity(YODEP)</h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-sm-block">Creating a better and save
                                environment for children and youth in the society.
                            </p>
                            <a href="<?php echo e(url('/donate')); ?>" class="btn btn-primary">Donate Now</a>
                        </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="text-center section-title">
                        <!-- section title start-->
                        <h1 class="text-md">Safe Guarding statement</h1>
                        <p class="text-sm">
                            <i class="fa fa-quote-left"></i> In Youth for Development and Productivity (YODEP), child
                            and adult safeguarding is the foundation
                            of our work and there is zero tolerance towards the abuse and exploitation of children and
                            adults by any of our representatives. YODEP is
                            very committed to doing everything in order to make sure that unintended harm or accidents
                            to children and adults as the result of
                            any of our activities are avoided <i class="fa fa-quote-right"></i>
                        </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
    </div>



    <div class="section-space80">
        <div class="container text-center">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 ">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Our Successful Stories</h1>
                        <!-- <p>We will match you with a loan program that meet your financial need.</p> -->
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>


            <div class="row mb10">
                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                
                
                
                    <div class="col-sm-4">
                        <div class="card">
                            <iframe width="350" height="315" src="<?php echo e($item->link); ?>">
                            </iframe>
                            <h3><?php echo e($item->title); ?></h3>

                        </div>
                    </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            
            <div class="text-cnter">
                <a href="<?php echo e(url('/stories')); ?>" class="btn btn-primary btn-center">View All</a>
            </div>

        </div>
    </div>

    <!--<div class="section-space80">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->

    <!--            <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">-->
    <!--            </iframe> <br>-->

    <!--            <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">-->
    <!--            </iframe>-->



    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->





    <div class="bg-white section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="text-center section-title">
                        <!-- section title start-->
                        <h1>Story About What We Do</h1>
                        <p class="lead">
                            Youth for Development and Productivity (YODEP) is a child and youth-focused non-profit
                            making Organization established
                            in the year 1998 in order to respond to the plight of the Malawian children and youth who
                            live and grow
                            in high-risk environments plagued by poverty, ignorance, malnutrition, and high rates of
                            communicable diseases.
                        </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container text-center">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 ">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Our Programs</h1>
                        <!-- <p>We will match you with a loan program that meet your financial need.</p> -->
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $allprograms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="<?php echo e($item->image); ?>" alt="" style="" class="card-img-top">
                            <h3><?php echo e($item->title); ?></h3>
                            <ul class="text-left">
                                <p><?php echo $item->body; ?></p>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>

            <br><br>
            <div class="text-cnter">
                <a href="<?php echo e(url('/what')); ?>" class="btn btn-primary btn-center">View All</a>
            </div>
        </div>
    </div>


    <div class="bg-white section-space80">
        <div class="container text-center">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb100 text-center section-title">
                        <!-- section title start-->
                        <h1>Latest Campaigns and events</h1>
                        <!-- <p>We have a fast and easy application process.</p> -->
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>

            <div class="card-deck">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="post-img" >
                            <a href="/events/<?php echo e($item->id); ?>" class="imghover"><img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->event_title); ?>" class="img-fluid" >
                            </a>
                        </div>
                        <div class="card-body">
                            <h3><a href="/events/<?php echo e($item->id); ?>" class="title"><?php echo e($item->event_title); ?></a>
                            </h3>
                            <p><?php echo e(strip_tags(Str::limit($item->content, 60))); ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo e($item->date); ?></small>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <br><br>
            <div class="text-cnter">
                <a href="<?php echo e(url('/events')); ?>" class="btn btn-primary btn-center">View All</a>
            </div>
        </div>

    </div>


    </div>


    <div class="cta"
        style="background: linear-gradient(rgba(0, 0, 0, 0.589), rgba(0, 0, 0, 0.568)), rgba(0, 0, 0, 0.575) url({% static 'assets/images/sliders/2.png' %}) no-repeat center;">
        <div class="container">
            <div class="row">
                <div class=" offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12 ">
                    <div class="mb60 text-center section-title text-white">
                        <!-- section title start-->
                        <h1 class="text-white">Become a Donor</h1>
                        <p>Help towards our cause</p>
                    </div>
                    <!-- /.section title start-->

                    <div class="newsletter-form">
                        <!-- Newsletter Form -->
                        <form action="<?php echo e(url('/donate')); ?>" method="get">
                            <div class="input-group">
                                <input type="number" class="form-control" id="id_amount" name="amount"
                                    placeholder="Enter amount here" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Donate!</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section-space80">
        <div class="container text-center">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Testimonials</h1>
                        <p>Testimonials from the world</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                

                <section id="testim" class="testim container">
                    <div class="testim-cover">
                        <div class="wrap">
                            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
                            <div id="testimonial-container">
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="con">
                                        <div class="active">
                                            <div class="img"><img src="<?php echo e($item->image); ?>" alt="" width=""></div>
                                            <h2><?php echo e($item->name); ?></h2>
                                            <p><?php echo $item->body; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                        </div>
                    </div>
                </section>
                <br>
                
                
            </div>

            <div class="text-cnter">
                <a href="<?php echo e(url('/testimonial')); ?>" class="btn btn-primary btn-center">View All</a>
            </div>
        </div>
    </div>



    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Work With Us?</h1>
                        <p>We are always looking for new challenges and interesting partners from all over the globe. We
                            also love to say hello anytime!</p>
                    </div>
                    <!-- /.section title start-->

                    <div class="newsletter-form">
                        <!-- Newsletter Form -->
                        <form action="<?php echo e(url('/message')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="">
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div style="color: red;">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <textarea placeholder="Leave your message here" class="form-control" name="message" id="id_message" cols="20"
                                    rows="5"></textarea>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div style="color: red;">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <input type="email" class="form-control" id="id_mail"
                                    value="<?php echo e(old('email')); ?>" name="email" placeholder="Your Email">

                                <button class="btn btn-primary" type="submit">Submit!</button>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="footer section-space100">
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="<?php echo e(asset('images/logo2.png')); ?>" style="height: 100px;" class="rounded-circle"
                            alt="logo">
                    </div>
                    <!-- /.Footer Logo -->
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                            <h3 class="newsletter-title">Become a Donor</h3>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="newsletter-form">
                                <!-- Newsletter Form -->
                                <form action="<?php echo e(url('/donate')); ?>" method="get">
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="id_amount" name="amount"
                                            placeholder="Enter amount here" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Donate!</button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>
                            </div>
                            <!-- /.Newsletter Form -->
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
            <hr class="dark-line">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p>Creating a better and Safe environment for children and youth in the society..</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="address-text">
                                    <span>
                                        <i class="icon-placeholder-3 icon-1x"></i>
                                    </span>
                                    SUMA HOUSE, Second floor, Masache Road, Bluegum Avenue Commercial Area, Zomba.
                                    Malawi
                                </p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="call-text text-white mb-0"><span><i class="icon-letter"></i></span><a
                                        href="mailto:director@yodep.org" class="text-white">director@yodep.org</a></p>
                                <p class="call-text text-white mb-0"><span><i class="icon-phone-call"></i></span><a
                                        href="tel:+265 888 334 420" class="text-white">+265 888 334 420</a></p>
                                <p class="call-text text-white mb-0"><span><i class="icon-phone-call"></i></span><a
                                        href="tel:+265 994 078 027" class="text-white">+265 994 078 027</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('/what')); ?>">What We Do</a></li>
                            <li><a href="<?php echo e(url('/vacancies')); ?>">Careers</a></li>
                            <li><a href="<?php echo e(url('/partner')); ?>">Partners</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                            <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                            <li><a href="<?php echo e(url('/gallery')); ?>">Gallery</a></li>
                            <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>

                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="https://web.facebook.com/Yodep.Malwi"><i
                                        class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="https://www.instagram.com/yodep.official/"><i
                                        class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linked In</a></li>
                            <li><a target="__blank" href="https://www.youtube.com/@YODEP-MW"><i class="fa fa-youtube"></i>Youtube</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <p class="text-primary"><a target="_blank" href=""><?php echo date('Y'); ?></a></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <p>Developers | <a href="http://dreamcodemw.com" target="_blank"><i
                                class="fa fa-global"></i>Dream Code Malawi</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny footer -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top text-primary" title="Go to top"></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/menumaker.js')); ?>"></script>

    <!-- sticky header -->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/sticky-header.js')); ?>"></script>
    <!-- slider script -->
    <script type="text/javascript" src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/slider-carousel.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/service-carousel.js')); ?>"></script>
    <!-- Back to top script -->
    <script src="<?php echo e(asset('js/back-to-top.js')); ?>" type="text/javascript"></script>


    <script>
        <?php if(Session::has('message')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("<?php echo e(session('message')); ?>");
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>
    </script>




<script>
    $(document).ready(function () {
        const testimonialContainer = $("#testimonial-container");
        const testimonials = $(".con");
        const testimonialWidth = testimonials.outerWidth();

        let currentIndex = 0;
        let autoSlideInterval;

        // Function to move to the next testimonial
        function nextTestimonial() {
            currentIndex = (currentIndex + 1) % (testimonials.length - 2); // Adjusted to wrap around to the beginning
            testimonialContainer.animate({ scrollLeft: currentIndex * testimonialWidth }, 500);
        }

        // Function to start auto slide
        function startAutoSlide() {
            stopAutoSlide(); // Stop any existing interval to avoid multiple instances
            autoSlideInterval = setInterval(function () {
                nextTestimonial();
            }, 3000); // Change the slide duration as needed (here, 3000ms = 3 seconds)
        }

        // Function to stop auto slide
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Click event handlers for next and prev arrows
        $("#right-arrow").click(function () {
            nextTestimonial();
            stopAutoSlide(); // Stop auto slide on manual navigation
        });

        $("#left-arrow").click(function () {
            currentIndex = Math.max(currentIndex - 1, 0);
            testimonialContainer.animate({ scrollLeft: currentIndex * testimonialWidth }, 500);
            stopAutoSlide(); // Stop auto slide on manual navigation
        });

        // Start auto slide on page load
        startAutoSlide();

        // Pause auto slide when hovering over the testimonial container
        testimonialContainer.hover(
            function () {
                stopAutoSlide();
            },
            function () {
                startAutoSlide();
            }
        );
    });
</script>




</body>


</html>
<?php /**PATH E:\Projects\Yodep-Laravel\resources\views/website/index.blade.php ENDPATH**/ ?>