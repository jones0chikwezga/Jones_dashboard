<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nyale Institute</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?php echo e(asset('/')); ?>img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('/')); ?>lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="<?php echo e(asset('/')); ?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('/')); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo e(asset('/')); ?>css/style.css" rel="stylesheet">

        <style>
            .container1 {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
            .resource {
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 8px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
            .resource h2 {
                margin-top: 0;
            }
            .resource p {
                margin-bottom: 0;
                color: #666;
            }
            .download-button {
                display: inline-block;
                padding: 8px 16px;
                background-color: #33d5fd;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                font-size: 14px;
                margin-top: 10px;
            }
            .download-button:hover {
                background-color: #33c4fd;
                color: white;
            }
        </style>

<style>
            
    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .gallery img {
        width: 300px;
        height: 200px;
        object-fit: cover;
        margin: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }

    .gallery img:hover {
        transform: scale(1.1);
    }

    #modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
    }

    #modal img {
        max-width: 80%;
        max-height: 80%;
        border-radius: 8px;
    }

    #close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: white;
        font-size: 20px;
    }
</style>

 <style>
            
            .partners-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            }

            .partner-card {
                background-color: #fff;
                border-radius: 20px; /* Set the border-radius for full rounding */
            }

            .partner-logo {
                margin: 10px;
                border-radius: 8px;
            }
        </style>
        
          
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
        alpha/css/bootstrap.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
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
                                <a href="tel:+265 997 95 33 73"><p>+265 212 95 33 73</p></a>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <a href="tel:+265 997 95 33 73"><p>+265 997 95 33 73</p></a>
                            </div>
                            
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:info@nyaleinstitute.org"><p>info@nyaleinstitute.org</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://twitter.com/nyaleinstitute"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/p/Nyale-Institute-100091492122282/?paipv=0&eav=Afby8dWmpr3lRGuHI-m7bZxYvF198rNxd9Y2NqHSbPDL_8VCTcrKsscE_5uWIKMzATI&_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/nyale-institute-373129271/?originalSubdomain=mw"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/nyaleinstitute/"><i class="fab fa-instagram"></i></a>
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
                <h3>
                    <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                        <img src="<?php echo e(asset('/')); ?>img/logo.png"  alt="Image">
                    </a>
                </h3>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">-->
                <!--    <div class="navbar-nav ml-auto">-->
                <!--        <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link active">Home</a>-->
                <!--        <a href="<?php echo e(url('/about')); ?>" class="nav-item nav-link">About</a>-->
                <!--        <a href="" class="nav-item nav-link">Case Tracker</a>-->
                <!--        <a href="<?php echo e(url('/events')); ?>" class="nav-item nav-link">Events</a>-->
                <!--        <a href="<?php echo e(url('/blog')); ?>" class="nav-item nav-link">Blog</a>-->
                <!--        <a href="<?php echo e(url('/cause')); ?>" class="nav-item nav-link">Causes</a>-->
                <!--        <div class="nav-item dropdown">-->
                <!--            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>-->
                <!--            <div class="dropdown-menu">-->
                <!--                <a href="<?php echo e(url('/partner')); ?>" class="dropdown-item">Our Partners</a>-->
                <!--                <a href="<?php echo e(url('/gallery')); ?>" class="dropdown-item">Gallery</a>-->
                <!--                <a href="<?php echo e(url('/resources')); ?>" class="dropdown-item">Resources</a>-->
                <!--                <a href="<?php echo e(url('/team')); ?>" class="dropdown-item">Meet The Team</a>-->
                <!--                <a href="<?php echo e(url('/volunteers')); ?>" class="dropdown-item">Volunteer</a>-->
                                <!-- <a href="single.html" class="dropdown-item">Events</a> -->
                <!--                <a href="<?php echo e(url('/donate')); ?>" class="dropdown-item">Donate Now</a>-->
                <!--                <a href="<?php echo e(url('/vacancies')); ?>" class="dropdown-item">Vacancies</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <a href="<?php echo e(url('/contact')); ?>" class="nav-item nav-link">Contact</a>-->
                <!--    </div>-->
                <!--</div>-->
                
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav ml-auto">
        <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link<?php echo e(Request::is('/') ? ' active' : ''); ?>">Home</a>
        <a href="<?php echo e(url('/team')); ?>" class="nav-item nav-link<?php echo e(Request::is('team') ? ' active' : ''); ?>">Meet The Team</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Work</a>
            <div class="dropdown-menu">
                <a href="<?php echo e(url('/')); ?>" class="dropdown-item">Public Interest Litigation</a>
                <a href="<?php echo e(url('/')); ?>" class="dropdown-item">Mwana wa mzako Ngwako yemwe</a>
            </div>
        </div>
        <!--<a href="<?php echo e(url('/our_work')); ?>" class="nav-item nav-link<?php echo e(Request::is('our_work') ? ' active' : ''); ?>">Our Work</a>-->
        <a href="<?php echo e(url('/events')); ?>" class="nav-item nav-link<?php echo e(Request::is('events') ? ' active' : ''); ?>">Events</a>
        <a href="<?php echo e(url('/blog')); ?>" class="nav-item nav-link<?php echo e(Request::is('blog') ? ' active' : ''); ?>">Blog</a>
        <!--<a href="<?php echo e(url('/cause')); ?>" class="nav-item nav-link<?php echo e(Request::is('cause') ? ' active' : ''); ?>">Media</a>-->
        <!-- Add similar lines for other navigation items -->

        <!-- Dropdown menu item -->
        <!--<div class="nav-item dropdown">-->
        <!--    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>-->
        <!--    <div class="dropdown-menu">-->
        <!--         <a href="<?php echo e(url('/partner')); ?>" class="dropdown-item">Our Partners</a>-->
        <!--        <a href="<?php echo e(url('/gallery')); ?>" class="dropdown-item">Gallery</a>-->
        <!--        <a href="<?php echo e(url('/resources')); ?>" class="dropdown-item">Resources</a>-->
        <!--        <a href="<?php echo e(url('/team')); ?>" class="dropdown-item">Meet The Team</a>-->
        <!--        <a href="<?php echo e(url('/volunteers')); ?>" class="dropdown-item">Volunteer</a>-->
        <!--        <a href="<?php echo e(url('/donate')); ?>" class="dropdown-item">Donate Now</a>-->
        <!--        <a href="<?php echo e(url('/vacancies')); ?>" class="dropdown-item">Vacancies</a>-->
        <!--    </div>-->
        <!--</div>-->
        <a href="<?php echo e(url('/partner')); ?>" class="nav-item nav-link<?php echo e(Request::is('partner') ? ' active' : ''); ?>">Partners</a>
        <a href="<?php echo e(url('/gallery')); ?>" class="nav-item nav-link<?php echo e(Request::is('gallery') ? ' active' : ''); ?>">Gallery</a>
        <a href="<?php echo e(url('/contact')); ?>" class="nav-item nav-link<?php echo e(Request::is('contact') ? ' active' : ''); ?>">Contact</a>
    </div>
</div>

            </div>
        </div>
        <!-- Nav Bar End -->










<?php echo $__env->yieldContent('content'); ?>




 <!-- Footer Start -->
 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Our Head Office</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Nyale Institute, Stand No 8, Chichiri Trade Fair Grounds, P. O. Box 30860, Chichiri, Blantyre 3, MALAWI.</p>
                    <p><i class="fa fa-phone-alt"></i><a href="tel:+265 997 95 33 73">+265 212 95 33 73</a></p>
                    <p><i class="fa fa-phone-alt"></i><a href="tel:+265 997 95 33 73">+265 997 95 33 73</a></p>
                    <p><i class="fa fa-envelope"></i><a href="mailto:info@nyaleinstitute.org">info@nyaleinstitute.org</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="<?php echo e(url('/')); ?>">Case on Arbotion</a>
                    <a href="<?php echo e(url('/')); ?>">Ambassadors Program</a>
                    <a href="<?php echo e(url('/blog')); ?>">Blog</a>
                </div>
            </div>
            <!--<div class="col-lg-3 col-md-6">-->
            <!--    <div class="footer-link">-->
            <!--        <h2>Useful Links</h2>-->
            <!--        <a href="<?php echo e(url('/donate')); ?>">Donate</a>-->
            <!--        <a href="<?php echo e(url('/vacancies')); ?>">Vacancies</a>-->
            <!--        <a href="<?php echo e(url('/volunteers')); ?>">Volunteers</a>-->
            <!--        <a href="<?php echo e(url('/case_tracker')); ?>">Case Tracker</a>-->
            <!--        <a href="<?php echo e(url('/resources')); ?>">Resources</a>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Social Links</h2>
                    
                    <div class="footer-social">
                        <a class="btn btn-custom" href="https://twitter.com/nyaleinstitute"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href="https://www.facebook.com/p/Nyale-Institute-100091492122282/?paipv=0&eav=Afby8dWmpr3lRGuHI-m7bZxYvF198rNxd9Y2NqHSbPDL_8VCTcrKsscE_5uWIKMzATI&_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-custom" href="https://www.instagram.com/nyaleinstitute/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-custom" href="https://www.linkedin.com/in/nyale-institute-373129271/?originalSubdomain=mw"><i class="fab fa-linkedin-in"></i></a>
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
                <p>Powered By <a href="https://dreamcodemw.com">Dream Code Malawi</a></p>
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

<script>
    function openModal(imgSrc) {
        document.getElementById("modal-img").src = imgSrc;
        document.getElementById("modal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }
</script>

<script>
    function openModal(imgSrc) {
        document.getElementById("modal-img").src = imgSrc;
        document.getElementById("modal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }
</script>

<!-- Contact Javascript File -->
<script src="<?php echo e(asset('/')); ?>mail/jqBootstrapValidation.min.js"></script>
<script src="<?php echo e(asset('/')); ?>mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?php echo e(asset('/')); ?>js/main.js"></script>

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
</html><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/layouts/webapp.blade.php ENDPATH**/ ?>