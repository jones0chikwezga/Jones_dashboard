<?php $__env->startSection('content'); ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>From Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <br>
        <div class="gallery">
            <?php $__empty_1 = true; $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        

            <img src="<?php echo e($item->image); ?>" alt="Image 1" onclick="openModal('<?php echo e($item->image); ?>')">

       
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
           
                <h3>empty list</h3>
           
            <?php endif; ?>

            </div>
            
      
    
        <div id="modal">
            <span id="close-btn" onclick="closeModal()">&times;</span>
            <img id="modal-img" src="" alt="Zoomed Image">
        </div>
    
       

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/website/gallery/index.blade.php ENDPATH**/ ?>