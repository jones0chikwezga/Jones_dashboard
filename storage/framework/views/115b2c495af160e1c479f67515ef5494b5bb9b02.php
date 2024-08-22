<?php $__env->startSection('content'); ?>
        
  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Work</h2>
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
           
            <?php $__empty_1 = true; $__currentLoopData = $acts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-sm-5 m-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($item->filename); ?> </h5>
                    <p class="card-text"> <?php echo $item->description; ?> </p>
                    <a href="<?php echo e($item->file); ?>" target="_blank" class="btn btn-success">Download</a>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-sm-5 m-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Empty List !!</h5>
                    
                  </div>
                </div>
              </div>
            <?php endif; ?>
            


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
                   
                   
                    
                   
                    <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
              
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo e($item->image); ?>" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="our_work/<?php echo e($item->id); ?>"><?php echo e($item->title); ?></a></h3>
                                <p>
                                    <?php echo Str::limit($item->body, 60); ?>

                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-clock"></i><a href=""><?php echo e($item->created_at->format('d-m-Y')); ?></a></p>
                            </div>
                        </div>
                    </div>
    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </div>
                <div class="section-header text-center">
                    <ul class="pagination">
                        <?php echo e($cases->links()); ?>

                    </ul>
                </div>
            </div>
        </div>
      </div>
      <div class="tab-pane fade" id="policies" role="tabpanel" aria-labelledby="policies-tab">
        <div class="row">
           
            <?php $__empty_1 = true; $__currentLoopData = $policy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-sm-5 m-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($item->filename); ?> </h5>
                    <p class="card-text"> <?php echo $item->description; ?> </p>
                    <a href="<?php echo e($item->file); ?>" target="_blank" class="btn btn-success">Download</a>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-sm-5 m-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Empty List !!</h5>
                    
                  </div>
                </div>
              </div>
            <?php endif; ?>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/case/index.blade.php ENDPATH**/ ?>