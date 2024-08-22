


<?php $__env->startSection('content'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Causes</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Causes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->        

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Causes</h2>
                    <h5>Let's know about Causes around the world</h5>
                </div>
                <div class="row">

                    <?php $__empty_1 = true; $__currentLoopData = $causes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    
                    <div class="col-lg-6 p-4">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="<?php echo e($item->image); ?>" alt="Image">
                            </div>
                            <!-- <div class="causes-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span>85%</span>
                                    </div>
                                </div>
                                <div class="progress-text">
                                    <p><strong>Raised:</strong> $100000</p>
                                    <p><strong>Goal:</strong> $50000</p>
                                </div>
                            </div> -->
                            <div class="causes-text">
                                <h3><?php echo e($item->title); ?></h3>
                                <p><?php echo $item->description; ?></p>
                            </div>
                            <div class="causes-btn">
                                <a href="/cause/<?php echo e($item->id); ?>" class="btn btn-custom">Read More</a>
                                <a href="<?php echo e(url('/donate')); ?>" class="btn btn-custom">Donate Now</a>
                            </div>
                        </div>
                    </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        
                    <div class="col-lg-6 p-4">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="img/causes-1.jpg" alt="Image">
                            </div>
                            <!-- <div class="causes-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span>85%</span>
                                    </div>
                                </div>
                                <div class="progress-text">
                                    <p><strong>Raised:</strong> $100000</p>
                                    <p><strong>Goal:</strong> $50000</p>
                                </div>
                            </div> -->
                            <div class="causes-text">
                                <h3>Empty list</h3>
                                
                            </div>
                            
                        </div>
                    </div>
                    <?php endif; ?>

                    
                   
                   
                </div>
                <div class="section-header text-center">
                    <ul class="pagination">
                        <div class="col-12">
                           
                
                                    <?php echo e($causes->links()); ?>

                
                
                          </div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Causes End -->


       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/website/cause/index.blade.php ENDPATH**/ ?>