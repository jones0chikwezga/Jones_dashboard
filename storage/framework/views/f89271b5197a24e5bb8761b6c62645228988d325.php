<?php $__env->startSection('content'); ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Partners</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Partners</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="partners-container">


            <?php $__empty_1 = true; $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="partner-card">
                <img src="<?php echo e($item->image); ?>" alt="Partner 1" class="partner-logo">
                
                
            </div> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="partner-card">
                
                <h3>empty list</h3>
                
            </div> 
            <?php endif; ?>

         
              
           
          
          
    
        </div>

     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/partner/index.blade.php ENDPATH**/ ?>