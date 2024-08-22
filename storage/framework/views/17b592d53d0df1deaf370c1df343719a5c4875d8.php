<?php $__env->startSection('content'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Event Detail</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Event Detail</a>
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
                            <img src="/<?php echo e($event->image); ?>" />
                            <h2><?php echo e($event->event_title); ?></h2> <hr>
                            <h5><i class =  "fa fa-calendar"></i> Date : <?php echo e($event->date); ?>  | <i class =  "fa fa-clock"></i>  <b>From </b> <?php echo e(\Carbon\Carbon::parse($event->starttime)->format('h:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($event->endtime)->format('h:i A')); ?> </h5> <hr>
                            <p>
                                <?php echo $event->content; ?>

                            </p>
                            <hr>
                            <p> <b>Posted on: <?php echo e($event->created_at->format('d-m-Y')); ?> </b> | <i> By<a href="">Admin</a></i> </p>
                           
                           
                            
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="widget-title">Recent Post</h2>
                                <div class="recent-post">

                                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="/<?php echo e($item->image); ?>" />
                                        </div>
                                        <div class="post-text">
                                            <a href="/events/<?php echo e($item->id); ?>"><?php echo e($item->event_title); ?></a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href=""><?php echo e($item->category); ?></a></p>
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
        <!-- Single Post End-->   


      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/events/show.blade.php ENDPATH**/ ?>