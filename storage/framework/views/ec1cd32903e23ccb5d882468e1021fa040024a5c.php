<?php $__env->startSection('content'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Events</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(url('/events')); ?>">Events</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                
                <div class="">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#past">Past Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#future">Future Events</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="future" class="container tab-pane">
                            <div class="row pt-4">
                    
                   
                               <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                               <div class="col-lg-6">
                                    <div class="event-item">
                                        <img src="<?php echo e($item->image); ?>" alt="Image">
                                        <div class="event-content">
                                            <div class="event-meta">
                                                <p><i class="fa fa-calendar-alt"></i> <b>Date:</b> <?php echo e($item->date); ?></p>
                                                <p><i class="far fa-clock"></i> <b>From </b> <?php echo e(\Carbon\Carbon::parse($item->starttime)->format('h:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($item->endtime)->format('h:i A')); ?></p>
                
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
                                                <p><i class="fa fa-calendar-alt"></i> -- </p>
                                                <p><i class="far fa-clock"></i> -- </p>
                                                <p><i class="fa fa-map-marker-alt"></i> -- </p>
                                            </div>
                                            <div class="event-text">
                                                <h3> No Data !</h3>
                                                <p>
                                                    --- ---
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php endif; ?>
                               
            
            
                            </div>
                            <div class="section-header text-center">
                                <ul class="pagination">
                                    <div class="mx-auto pb-10 w-4/5">
                                        <?php echo e($events->links()); ?>

                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div id="past" class="container tab-pane fade active">
                            <div class="row pt-4">
                    
                   
                               <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                               <div class="col-lg-6">
                                    <div class="event-item">
                                        <img src="<?php echo e($item->image); ?>" alt="Image">
                                        <div class="event-content">
                                            <div class="event-meta">
                                                <p><i class="fa fa-calendar-alt"></i> <b>Date:</b> <?php echo e($item->date); ?></p>
                                                <p><i class="far fa-clock"></i> <b>From </b> <?php echo e(\Carbon\Carbon::parse($item->starttime)->format('h:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($item->endtime)->format('h:i A')); ?></p>
                
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
                                                <p><i class="fa fa-calendar-alt"></i> -- </p>
                                                <p><i class="far fa-clock"></i> -- </p>
                                                <p><i class="fa fa-map-marker-alt"></i> -- </p>
                                            </div>
                                            <div class="event-text">
                                                <h3> No Data !</h3>
                                                <p>
                                                    --- ---
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php endif; ?>
                               
            
            
                            </div>
                            <div class="section-header text-center">
                                <ul class="pagination">
                                    <div class="mx-auto pb-10 w-4/5">
                                        <?php echo e($events->links()); ?>

                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        
                
            </div>
        </div>
        <!-- Event End -->


      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/events/index.blade.php ENDPATH**/ ?>