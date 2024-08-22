<!DOCTYPE html>
<html  lang="en">
    <head>
        <title>YODEP &mdash; Blog</title>
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
                      </head>
                      <body>

                             <!-- start navigation -->
                  <div class="header" style="background: linear-gradient(#0051ca, #0051ca)">
                      <div class="container">
                          <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                                  <!-- logo -->
                                  <div class="logo">
                                      <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('images/logo2.png')); ?>" style="width: 90px;" class="rounded-circle" alt="logo"></a>
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
                                                      <li><a href="<?php echo e(url('/resources')); ?>" title="events"
                                                        class="animsition-link">Resources</a></li>
                                                <li><a href="<?php echo e(url('/stories')); ?>" title="successful stories"
                                                        class="animsition-link">Successful Stories</a></li>
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
                                              <li class="active">SUCCESSFUL STORY DETAIL</li>
                                          </ol>
                                      </div>
                                  </div>
                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <div class="bg-white pinside30">
                                          <div class="row">
                                             <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                                  <h1 class="page-title">SUCCESSFUL STORY DETAIL</h1>
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
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="post-holder">
                                        <div class="col-xl-6 mb40">

                                            <?php if($story->image == 'N/A'): ?>

                                            <div class="card">
                                                <iframe width="680" height="315" src="<?php echo e($story->link); ?>">
                                                </iframe>
                                                

                                            </div>

                                            <?php else: ?>

                                            <div class="post-img mb30"><img src="/<?php echo e($story->image); ?>" alt="blog.blogTitle" class="img-fluid"></div>

                                            <?php endif; ?>



                                            <div class="bg-white">
                                                <h1><?php echo e($story->title); ?></h1>
                                                <p class="meta"><span class="meta-date"><?php echo e($story->created_at); ?></span><span class="meta-author">By<a href="#" class="meta-link"> Admin</a></span></p>
                                                <p><?php echo $story->body; ?></p>

                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="sidebar-area">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-primary">
                                            <div class="widget widget-recent-post">
                                                <h3 class="widget-title mb30">Recent successful stories</h3>
                                                <ul class="listnone">
                                                    <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="post-holder">
                                                            <div class="post-block mb40">

                                                                <?php if($item->image == 'N/A'): ?>
                                                                <div class="col-xl-8 mb30">
                                                                <div class="card">
                                                                    <iframe width="120" height="100" src="<?php echo e($item->link); ?>">
                                                                    </iframe>
                                                                    

                                                                </div>
                                                                </div>
                                                                <?php else: ?>
                                                                  <div class="col-xl-8 mb30">
                                                                        <a href="/stories/<?php echo e($item->id); ?>" class="imghover"><img src="/<?php echo e($item->image); ?>" alt="blog.blogTitle" class="img-fluid"></a>
                                                                    </div>

                                                                <?php endif; ?>


                                                                <div class="bg-white">
                                                                    <h4><a href="/stories/<?php echo e($item->id); ?>" class="title"><?php echo e($item->title); ?></a></h4>
                                                                    <p class="meta"><span class="meta-date"><?php echo e($item->created_at); ?></span><span class="meta-author">By<a href="#" class="meta-link"> Admin</a></span></p>
                                                                    <p><?php echo e(strip_tags(Str::limit($item->body, 30))); ?> </p>
                                                                    <a href="/stories/<?php echo e($item->id); ?>" class="btn-link">Read More</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- {% endfor %} -->
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer section start -->
<div class="footer section-space100">
    <!-- footer -->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="footer-logo">
                    <!-- Footer Logo -->
                    <img src=" <?php echo e(asset('images/logo2.png')); ?>" style="height: 100px;" class="rounded-circle" alt="logo"> </div>
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
</body>
</html>


<?php /**PATH E:\yodep\resources\views/website/story/show.blade.php ENDPATH**/ ?>