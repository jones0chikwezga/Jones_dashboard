<!DOCTYPE html>
<html  lang="en">
    <head>
        <title>YODEP &mdash; Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      
          <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">
                  <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontello.css')); ?>" rel="stylesheet">
   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="<?php echo e(asset('css/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.theme.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('css/fontello.css')); ?>" rel="stylesheet">     
    
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
        alpha/css/bootstrap.css" rel="stylesheet">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <link rel="stylesheet" type="text/css" 
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>
    <body>
                <!-- start navigation -->
<div class="header" style="background: linear-gradient(#0051ca, #0051ca)">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/logo2.png')); ?>" style="width: 90px;" class="rounded-circle" alt="logo"></a>
                </div>
            </div>
            <!-- logo -->
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <nav class="navbar">
                    <div id="navigation">
                        <!-- navigation start-->
                        <ul class="bg-primary rounded">
                           <li><a href="<?php echo e(url('/')); ?>" title="Home" class="animsition-link">Home</a></li>
                           <li><a href="<?php echo e(url('/what')); ?>" title="projects" class="animsition-link">What We Do</a></li>
                           <li><a href="<?php echo e(url('/vacancies')); ?>" title="careers" class="animsition-link">Careers</a></li>
                           <li><a href="<?php echo e(url('/partner')); ?>" title="partners" class="animsition-link">Partners</a></li>
                           <li><a href="" class="animsition-link">More</a>
                               <ul>
                                   <li><a href="<?php echo e(url('/about')); ?>" title="cbout us" class="animsition-link">About us</a></li>
                                   <li><a href="<?php echo e(url('/contact')); ?>" title="contact us" class="animsition-link">Contact Us</a></li>
                                   <li><a href="<?php echo e(url('/gallery')); ?>" title="gallary" class="animsition-link">Gallery</a></li>
                                   <li><a href="<?php echo e(url('/blog')); ?>" title="blog" class="animsition-link">Blog</a></li>
                                   <li><a href="<?php echo e(url('/events')); ?>" title="events" class="animsition-link">Events</a></li>
                               </ul>
                           </li>
                           <li><a href="<?php echo e(url('/donate')); ?>" title="donate now" class="animsition-link"><b>Donate</b></a></li>
                       </ul>
                    </div>
                </nav>
                <!-- /.navigation start-->
            </div>
        </div>
    </div>
</div>
<!-- end navigation -->
          <!-- page header start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url('<?php echo e(asset('images/sliders/1.png')); ?>') no-repeat center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="active">CONTACT US</li>
                    </ol>
                </div>
            </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                       <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                            <h1 class="page-title">CONTACT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page header ends -->

<div class="">
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="contact-form mb60">
                        <div class=" ">
                            <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="mb60  section-title text-center  ">
                                    <!-- section title start-->
                                    <h1>Get In Touch</h1>
                                    <p>Reach out to us, send a direct email message</p>
                                </div>
                            </div>
                            
                                <form class="contact-us" method="POST" action="<?php echo e(url('/contact')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>
                                    <div class=" ">
                                        <!-- Text input-->
                                        <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                <?php $__errorArgs = ['name'];
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
                                                <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
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
                                                <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                <?php $__errorArgs = ['phone'];
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
                                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" >
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="message"> </label>
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
                                                <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.section title start-->
                    </div>
                    <div class="contact-us mb60">
                 
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-placeholder-3 icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Address</h2>
                                    <p>SUMA HOUSE, Second floor, Masache Road,<br>
                                        Bluegum Avenue <br>
                                        Commercial Area, Zomba. <br>
                                        Malawi
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Call us at </h2>
                                    <p class="text-big"><a href="tel:+265 888 334 420">+265 888 334 420</a></p>
                                    <p class="text-big"><a href="tel:+265 994 078 027">+265 994 078 027</a></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Email Address</h2>
                                    <p class="text-big"><a href="mailto:director@yodep.org">director@yodep.org</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<!-- {% endblock %} -->
<!-- footer section start -->
<div class="footer section-space100">
    <!-- footer -->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="footer-logo">
                    <!-- Footer Logo -->
                    <img src=" <?php echo e(asset('images/logo2.png')); ?> " style="height: 100px;" class="rounded-circle" alt="logo"> </div>
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
                                    <input type="number" class="form-control" id="id_amount" name="amount" placeholder="Enter amount here" required>
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
                                SUMA HOUSE, Second floor, Masache Road, Bluegum Avenue Commercial Area, Zomba. Malawi
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <p class="call-text text-white mb-0"><span><i class="icon-letter"></i></span><a href="mailto:director@yodep.org" class="text-white">director@yodep.org</a></p>
                            <p class="call-text text-white mb-0"><span><i class="icon-phone-call"></i></span><a href="tel:+265 888 334 420" class="text-white">+265 888 334 420</a></p>
                            <p class="call-text text-white mb-0"><span><i class="icon-phone-call"></i></span><a href="tel:+265 994 078 027" class="text-white">+265 994 078 027</a></p>
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
                        <li><a href="https://web.facebook.com/Yodep.Malwi"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="https://www.instagram.com/yodep.official/"><i class="fa fa-instagram"></i>Instagram</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i>Linked In</a></li>
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
                <p class="text-primary"><a target="_blank" href=""><?php echo date("Y"); ?></a></p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                <p>Developers | <a href="http://dreamcodemw.com" target="_blank"><i class="fa fa-global"></i>Dream Code Malawi</a></p>
            </div>
        </div>
    </div>
</div>
<!-- /.tiny footer -->
<!-- back to top icon -->
<a href="#0" class="cd-top text-primary" title="Go to top">Top</a>
<!-- {% endblock %} -->
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
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("<?php echo e(session('message')); ?>");
    <?php endif; ?>
  
    <?php if(Session::has('error')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("<?php echo e(session('error')); ?>");
    <?php endif; ?>
  
    <?php if(Session::has('info')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("<?php echo e(session('info')); ?>");
    <?php endif; ?>
  
    <?php if(Session::has('warning')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("<?php echo e(session('warning')); ?>");
    <?php endif; ?>
  </script>
    </body>
    </html>
<?php /**PATH E:\adra_larav\resources\views/website/contact/index.blade.php ENDPATH**/ ?>