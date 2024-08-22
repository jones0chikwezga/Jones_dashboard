<?php $__env->startSection('content'); ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Resources</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Resources</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container1">

          <?php $__empty_1 = true; $__currentLoopData = $resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="resource">
            <h3><?php echo e($item->filename); ?></h3>
            <p><?php echo $item->description; ?></p>
            <a href="<?php echo e($item->file); ?>" download class="download-button">Download</a>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <div class="resource">
                <h2>Empty list</h2>
                <p> -- </p>
                
            </div>
          <?php endif; ?>

            

          
           
           
           
           
           
            
        </div>

       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/resources/index.blade.php ENDPATH**/ ?>