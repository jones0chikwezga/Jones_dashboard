<?php $__env->startSection('content'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Team Member</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Team</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Meet Our Team</h2>
                    <h5>Awesome guys behind our activities</h5>
                </div>
                <div class="about-tab">
                    

                    <div class="tab-content p-4">
                        <div id="board" class="container tab-pane active">
                            <div class="row">

                                <?php $__empty_1 = true; $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="col-lg-3 col-md-6">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="<?php echo e($item->image); ?>" alt="Team Image">
                                        </div>
                                        <div class="team-text">
                                            <h2><?php echo e($item->name); ?></h2>
                                            <p><?php echo e($item->position); ?></p>
                                            <div class="team-social">
                                                <a href=""><i class="fab fa-twitter"></i></a>
                                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-lg-3 col-md-6">
                                    <div class="team-item">
                                        
                                        <div class="team-text">
                                            <h2> Empy list </h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                
                               
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/website/team/index.blade.php ENDPATH**/ ?>