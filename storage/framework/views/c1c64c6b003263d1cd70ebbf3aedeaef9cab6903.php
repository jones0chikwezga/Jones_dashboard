<?php $__env->startSection('content'); ?>


   <!-- Page Header Start -->
   <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Case Details</h2>
            </div>
            <div class="col-12">
                <a href="<?php echo e(url('/')); ?>">Home</a>
                <a href="">Case Tracker</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    <img src="/<?php echo e($case->image); ?>" />
                    <h2><?php echo e($case->title); ?></h2>
                    <p><span><?php echo e($case->created_at); ?></span></p>
                    <p>
                       <?php echo $case->body; ?>

                    </p>
                   
                </div>
                
                <div class="single-comment">
                    <h2>Following Ups</h2>
                    <ul class="comment-list">

                        <?php $__empty_1 = true; $__currentLoopData = $followups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="comment-item">
                            <div class="comment-body">
                                <div class="comment-img">
                                    <img src="<?php echo e(asset('/')); ?>img/img.png" />
                                </div>
                                <div class="comment-text">
                                    <h3><a href="">By Admin</a></h3>
                                    <span><?php echo e($item->created_at); ?></span>
                                    <p>
                                        <?php echo $item->comment; ?> 
                                    </p>
                                    <!-- <a class="btn" href="">Reply</a> -->
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="comment-item">
                            <div class="comment-body">
                                
                                <div class="comment-text">
                                    
                                    
                                    <p>
                                       empty list !! 
                                    </p>
                                    <!-- <a class="btn" href="">Reply</a> -->
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                       
                       
                    </ul>
                </div>
                
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="single-related">
                            <h2 class="widget-title">Recent Cases</h2>
                            <div class="">
                               <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                             
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="/<?php echo e($item->image); ?>" />
                                    </div>
                                    <div class="post-text">
                                        <a href="/case_tracker/<?php echo e($item->id); ?>"><?php echo e($item->title); ?></a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>On<a href=""> <?php echo e($item->created_at); ?></a></p>
                                        </div>
                                    </div>
                                </div>
                              
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End-->   


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/case/show.blade.php ENDPATH**/ ?>