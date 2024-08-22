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
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Our Blog</h2>
                    <h5>Latest news & articles directly from our blog</h5>                    
                </div>
                <div class="row">
                   
                    
                   <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                   <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="/blog/<?php echo e($item->id); ?>"><img src="<?php echo e($item->image); ?>" alt="Image"></a> 
                        </div>
                        <div class="blog-text">
                            <h3><a href="/blog/<?php echo e($item->id); ?>"><?php echo e($item->blog_title); ?></a></h3>
                            <p>
                                <?php echo e(strip_tags(Str::limit($item->content, 60))); ?>

                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-tags"></i><a href=""><?php echo e($item->category); ?></a></p>
                            <p><i class="fa fa-calendar"></i><?php echo e($item->created_at->format('d-m-Y')); ?></p>
                        </div>
                    </div>
                </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                         <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog detail.html">No blog posts available</a></h3>
                                <p>
                                    empty
                                </p>
                            </div>
                            <div class="blog-meta">
                                
                            </div>
                        </div>
                    </div>
                   <?php endif; ?>
                   
                  
                  



                </div>
                <div class="section-header text-center">
                    
                        <div class="mx-auto pb-10 w-4/5">
                            <?php echo e($blogs->links()); ?>

                        </div>
                   
                </div>
            </div>
        </div>
        <!-- Blog End -->


     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/blog/index.blade.php ENDPATH**/ ?>