<?php $__env->startSection('content'); ?>
        
  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h2> <?php echo e($item->title); ?></h2>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-12">
                <a href="<?php echo e(url('/')); ?>">Home</a>
                <a href="<?php echo e(url('/our_work')); ?>">Our Work</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">

  <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <p> <?php echo $item->body; ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
    <ul class="nav nav-pills nav-fill justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="acts-tab" data-toggle="tab" href="#acts" role="tab" aria-controls="home" aria-selected="true">Acts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cases-tab" data-toggle="tab" href="#cases" role="tab" aria-controls="profile" aria-selected="false">Cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="policies-tab" data-toggle="tab" href="#policies" role="tab" aria-controls="contact" aria-selected="false">Policies</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="acts" role="tabpanel" aria-labelledby="acts-tab">
        <div class="row">
           
            
            


        </div>
      </div>
      <div class="tab-pane fade" id="cases" role="tabpanel" aria-labelledby="cases-tab">
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Our Ongoing Cases</h2>
                    <h5>Follow each and every case without miss any</h5>                    
                </div>
                <div class="row">
                   
                   
                    
                   
                    
                   
                </div>
                <div class="section-header text-center">
                    <ul class="pagination">
                        
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <div class="tab-pane fade" id="policies" role="tabpanel" aria-labelledby="policies-tab">
        <div class="row">
           
            
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/website/case/index.blade.php ENDPATH**/ ?>