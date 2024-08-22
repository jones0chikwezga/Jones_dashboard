<?php $__env->startSection('content'); ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Vacancy</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="">Vacancy</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <section class="container mt-4">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div class="col-sm-6">
                    <div class="card text-center">
                        <!-- <div class="card-header">
                          Featured
                        </div> -->
                        <div class="card-body">
                          <h5 class="card-title">
                            <?php echo e($item->position); ?>

                        </h5>
                          <p class="card-text">
                            <?php echo e(strip_tags(Str::limit($item->duties, 60))); ?>

                        </p>
                          <a class="btn btn-custom" href="vacancies/<?php echo e($item->id); ?>">Apply</a>
                        </div>
                        <div class="card-footer text-muted">
                            Apply before
                             <?php echo e($item->closing_date); ?>

                        </div>
                    </div>
                </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-sm-6">
                    <div class="card text-center">
                        <!-- <div class="card-header">
                          Featured
                        </div> -->
                        <div class="card-body">
                          <h5 class="card-title">
                            No vacancies yet, check again later
                        </h5>
                          <p class="card-text">
                            
                        </p>
                          
                        </div>
                        <div class="card-footer text-muted">
                            Apply before
                              - -
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                



            </div>
            <br>
            <div class="text-center">
                <br><br>
                        <div class="mx-auto pb-10 w-4/5">
                            <?php echo e($vacancies->links()); ?>

                        </div>
            </div>
        </section>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/website/vacancy/index.blade.php ENDPATH**/ ?>