<?php $__env->startSection('content'); ?>


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <?php $__currentLoopData = $slidepics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php echo e($item->image); ?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo e($item->heading); ?></h1>
                            <p>
                                <?php echo $item->body; ?>

                            </p>
                            <!--<div class="carousel-btn">-->
                            <!--    <a class="btn btn-custom" href="<?php echo e(url('/donate')); ?>">Donate Now</a>-->
                            <!--    <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    <!--<div class="carousel-item">-->
                    <!--    <div class="carousel-img">-->
                    <!--        <img src="img/carousel-2.jpg" alt="Image">-->
                    <!--    </div>-->
                    <!--    <div class="carousel-text">-->
                    <!--        <h1>Empower Girls: Equal Care, Equal Justice.</h1>-->
                    <!--        <p>-->
                    <!--            Empower girls to remove the legal and cultural barriers that make it difficult or impossible for the girl child to enjoy sexual and reproductive health and rights fully.-->
                    <!--        </p>-->
                            <!--<div class="carousel-btn">-->
                            <!--    <a class="btn btn-custom" href="">Donate Now</a>-->
                            <!--    <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>-->
                            <!--</div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="carousel-item">-->
                    <!--    <div class="carousel-img">-->
                    <!--        <img src="img/carousel-3.jpg" alt="Image">-->
                    <!--    </div>-->
                    <!--    <div class="carousel-text">-->
                    <!--        <h1>SUPPORT THE GIRLS</h1>-->
                    <!--        <p>-->
                    <!--            We shall support girls and women to use the courts and other mechanisms effectively to vindicate equality, rights and justice-->
                    <!--        </p>-->
                            <!--<div class="carousel-btn">-->
                            <!--    <a class="btn btn-custom" href="">Donate Now</a>-->
                            <!--    <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>-->
                            <!--</div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Equality, Rights & Justice</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#mission">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#vision">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="about" class="container tab-pane active">
                                    Nyale Institute for Sexual and Reproductive Health Governance (Nyale Institute) is a  local NGO registered under the laws of Malawi in 2013 that exists to advance sexual and reproductive justice.
                                </div>
                                <div id="mission" class="container tab-pane fade">
                                    To strengthen the capacity of civil society and grassroots communities and support government institutions in advancing sexual and reproductive equality, rights and justice, especially vulnerable groups.
                                    Vulnerable groups are those that often face multiple forms of discrimination based on intersecting grounds such as: race, gender, sex, sexual orientation, age, pregnancy, marital status, HIV status, social and economic status, disability, and cultural and religious fundamentalisms.
                                </div>
                                <div id="vision" class="container tab-pane fade">
                                    A society in which all persons fully and equitably enjoy sexual and reproductive rights and freedoms.
                                </div>
                            </div>
                        </div>
                        <div class="about">
                            <div class="container">
                                <div class="row align-items-center">
                                    <!-- <div class="col-lg-6">
                                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                                    </div> -->
                                    <div class="">
                                        <div class="section-header">
                                            <p></p>
                                            <h2>Our Core Values</h2>
                                        </div>
                                        <div class="about-tab">
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill" href="#Social">Social Justice</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#Common">Common Good</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#Respect">Respect for Diversity</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#Knowledge">Knowledge Transfer</a>
                                                </li>
                                            </ul>
                
                                            <div class="tab-content">
                                                <div id="Social" class="container tab-pane active">
                                                    We are committed to serving and pleading the cause of those who are traditionally and systematically marginalized, empowering them to challenge and transform the communities in which they live and the systems that keep them at the margins of society.
                                                </div>
                                                <div id="Common" class="container tab-pane fade">
                                                    We commit ourselves to protecting human dignity, fulfilling individual rights and responsibilities, and advancing a common good.
                                                </div>
                                                <div id="Respect" class="container tab-pane fade">
                                                    We fully respect and value all social traditions, culture, religions, structures and systems as long as they advance and uphold the dignity of all people.
                                                </div>
                                                <div id="Knowledge" class="container tab-pane fade">
                                                    We are committed to spreading expertise and building capacity of CSOs, advocacy groups and grassroot movements in communities so that they are empowered to work autonomously.
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
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lives with you</h2>
                </div>
                <div class="row">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $allprograms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    
                    
                      <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-"></i>
                            </div>
                            <div class="service-text">
                                <h3><?php echo e($item->title); ?></h3>
                                <p><?php echo $item->body; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    
                     <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-"></i>
                            </div>
                            <div class="service-text">
                                <h3>Nothing to display !!!</h3>
                              
                            </div>
                        </div>
                    </div>
                    
                    <?php endif; ?>
                  
                   
                   
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Primary Education</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        <!-- Social Media -->
        <div class="container text-center">
            <div class="section-header text-center">
                <p>Social Media</p>
                <h2></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <h2>Facebook</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h2>Twitter</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h2>Instagram</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- social media end -->
        
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container text-center">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming events</h2>
                </div>
                <div class="row">
                   
                    <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="<?php echo e($item->image); ?>" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i><?php echo e($item->date); ?></p>
                                    <p><i class="far fa-clock"></i><?php echo e($item->starttime); ?> - <?php echo e($item->endtime); ?></p>
                                    <p><i class="fa fa-tags"></i><?php echo e($item->category); ?></p>
                                </div>
                                <div class="event-text">
                                    <h3><?php echo e($item->event_title); ?></h3>
                                    <p>
                                        <?php echo e(strip_tags(Str::limit($item->content, 80))); ?>

                                    </p>
                                    <a href="/events/<?php echo e($item->id); ?>" class="btn btn-custom">Read More</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-lg-6">
                        <div class="event-item">
                            
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i> - -</p>
                                    <p><i class="far fa-clock"></i> - -</p>
                                    <p><i class="fa fa-map-marker-alt"></i> - -</p>
                                </div>
                                <div class="event-text">
                                    <h3>No data</h3>
                                    <p>
                                        ---
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    


                </div>
                <div class="">
                    <a href="<?php echo e(url('/events')); ?>" class="btn btn-custom">View All</a>
                </div>
            </div>
        </div>
        <!-- Event End -->


        <!-- Team Start -->
        <!-- <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Founder & CEO</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Chef Executive</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Chef Advisor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Advisor</p>
                                <div class="team-social">
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
        </div> -->
        <!-- Team End -->
        
        
        <!-- Volunteer Start -->
        <!-- <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Volunteer End -->
        
        
        <!-- Testimonial Start -->
        <!-- <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-1.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-2.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-3.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-4.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <!-- <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div> -->
        <!-- Contact End -->


        <!-- Blog Start -->
        <!-- <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->


      <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/index.blade.php ENDPATH**/ ?>