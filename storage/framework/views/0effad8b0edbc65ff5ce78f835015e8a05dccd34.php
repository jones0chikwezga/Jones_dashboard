<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nyale Institute</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo e(asset('/')); ?>css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+123 456 7890</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <h5>
                    <a href="index.html" class="navbar-brand">Nyale Institute</a>
                </h5>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="Case Tracker.html" class="nav-item nav-link">Case Tracker</a>
                        <a href="event.html" class="nav-item nav-link">Events</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <a href="causes.html" class="nav-item nav-link">Causes</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                            <div class="dropdown-menu">
                                <a href="event.html" class="dropdown-item">Our Partners</a>
                                <a href="gallery.html" class="dropdown-item">Gallery</a>
                                <a href="resources.html" class="dropdown-item">Resources</a>
                                <a href="team.html" class="dropdown-item">Meet The Team</a>
                                <a href="volunteer.html" class="dropdown-item">Our Work</a>
                                <a href="Successful Stories.html" class="dropdown-item">Successful Stories</a>
                                <a href="volunteer.html" class="dropdown-item">Volunteer</a>
                                <!-- <a href="single.html" class="dropdown-item">Events</a> -->
                                <a href="donate.html" class="dropdown-item">Donate Now</a>
                                <a href="vacancy.html" class="dropdown-item">Vacancies</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Vacancy</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Vacancy</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <section class="container mt-4">
            <div class=" ">
                <!-- content start -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="wrapper-content bg-white pinside40">
                                <!-- {% if messages %}
                                    {% for message in messages %} -->
                                        
                                    <!-- {% endfor %}
                                {% endif %} -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-white pinside30">
                                            <h1 class="text-bold"><?php echo e($vacancy->position); ?></h1>

                                            <h3 class="text-bold">Duties</h3>
                                            <p><?php echo $vacancy->duties; ?></p>
                                            
                                            <h3 class="text-bold">Qualifications</h3>
                                            <p><?php echo $vacancy->qualification; ?></p>
                                            
                                            <small>Closing date: <?php echo e($vacancy->closing_date); ?></small><br><br><br>
                                            <p><a href="/<?php echo e($vacancy->file); ?>"><i class="fa fa-download"> Download</i></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="mb60 section-title pinside30">
                                            <!-- section title start-->
                                            <h2>Submit the requested information to Volunteer to our programs</h2>
                                            <p>Be part of our team and inspire the community. For more information email us on info@adramw.org</p>
                                        </div>
                                        <!-- /.section title start-->
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="newsletter-form pinside30">
                                                <div class="newsletter-form pinside30">
                                                    <form action="<?php echo e(url('/vacancies')); ?>" method="post" enctype="multipart/form-data">

                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('POST'); ?>
                                                        <div class="">

                                                            <div class="newsletter-form pinside30">

                                                                <input type="fullname" class="form-control" id="id_mail" value="<?php echo e(old('fullname')); ?>" name="fullname" placeholder="fullname">
                                                                <?php $__errorArgs = ['fullname'];
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

                                                                <br>

                                                                <input type="email" class="form-control" id="id_mail" value="<?php echo e(old('email')); ?>" name="email" placeholder="Your Email">
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

                                                                <br>

                                                                <input type="phone" class="form-control" id="id_mail" value="<?php echo e(old('phone')); ?>" name="phone" placeholder="Your mobile phone number">
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

                                                                <label for="">Position</label>
                                                                <input type="text" class="form-control" id="" name="position" value="<?php echo e($vacancy->position); ?>">


                                                                <label for="">CV</label>
                                                                <?php $__errorArgs = ['cv'];
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
                                                                <input type="file" class="form-control" id="id_mail" name="cv" placeholder="Your cv">
                                                                <label for="">Application letter</label>
                                                                <?php $__errorArgs = ['cos'];
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
                                                                <input type="file" class="form-control" id="id_mail" name="cos" placeholder="Application letter">

                                                                <br>
                                                                
                                                                <button class="btn btn-custom" type="submit">Submit!</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Nyale Institute, Stand No 8, Chichiri Trade Fair Grounds, P. O. Box 30860, Chichiri, Blantyre 3, MALAWI.</p>
                            <p><i class="fa fa-phone-alt"></i>+265 212 95 33 73</p>
                            <p><i class="fa fa-phone-alt"></i>+265 997 95 33 73</p>
                            <p><i class="fa fa-envelope"></i>info@nyaleinstitute.org </p>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Popular Causes</a>
                            <a href="">Upcoming Events</a>
                            <a href="">Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Donate</a>
                            <a href="">Vacancies</a>
                            <a href="">Volunteers</a>
                            <a href="">Successful Stories</a>
                            <a href="">Resources</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Social Links</h2>
                            
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Nyale Institute</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Developer By <a href="https://dreamcodemw.com">Dream Code Malawi</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>lib/easing/easing.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>lib/counterup/counterup.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?php echo e(asset('/')); ?>mail/jqBootstrapValidation.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo e(asset('/')); ?>js/main.js"></script>
    </body>
</html>
<?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/website/vacancy/show.blade.php ENDPATH**/ ?>