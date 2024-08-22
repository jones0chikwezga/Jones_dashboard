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
            <div class=" ">
                <!-- content start -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="wrapper-content bg-white pinside40">
                                <!-- {% if messages %}
                                    {% for message in messages %} -->
                                        
                                    <!-- {% endfor %}
                                {% endif %} -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="bg-white pinside30">
                                            <h1 class="text-bold"><?php echo e($vacancy->position); ?></h1>

                                            <h3 class="text-bold">Duties</h3>
                                            <p><?php echo $vacancy->duties; ?></p>
                                            
                                            <h3 class="text-bold">Qualifications</h3>
                                            <p><?php echo $vacancy->qualification; ?></p>
                                            
                                            <small>Closing date: <?php echo e($vacancy->closing_date); ?></small><br><br><br>
                                            <p><a href="/<?php echo e($vacancy->file); ?>"><i class="fa fa-download"> Download</i></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="mb60 section-title pinside30">
                                            <!-- section title start-->
                                            <h2>Submit the requested information to Volunteer to our programs</h2>
                                            <p>Be part of our team and inspire the community. For more information email us on info@adramw.org</p>
                                        </div>
                                        <!-- /.section title start-->
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="newsletter-form pinside30">
                                                <div class="newsletter-form pinside30">
                                                    <form action="<?php echo e(url('/vacancies')); ?>" method="post" enctype="multipart/form-data">

                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('POST'); ?>
                                                        <div class="">

                                                            <div class="newsletter-form pinside30">

                                                                <input type="fullname" class="form-control" id="id_mail" value="<?php echo e(old('fullname')); ?>" name="fullname" placeholder="fullname">
                                                                <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div style="color: red;">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                                <br>

                                                                <input type="email" class="form-control" id="id_mail" value="<?php echo e(old('email')); ?>" name="email" placeholder="Your Email">
                                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div style="color: red;">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                                <br>

                                                                <input type="phone" class="form-control" id="id_mail" value="<?php echo e(old('phone')); ?>" name="phone" placeholder="Your mobile phone number">
                                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div style="color: red;">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                                <label for="">Position</label>
                                                                <input type="text" class="form-control" id="" name="position" value="<?php echo e($vacancy->position); ?>">


                                                                <label for="">CV</label>
                                                                <?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div style="color: red;">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                <input type="file" class="form-control" id="id_mail" name="cv" placeholder="Your cv">
                                                                <label for="">Application letter</label>
                                                                <?php $__errorArgs = ['cos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div style="color: red;">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                <input type="file" class="form-control" id="id_mail" name="cos" placeholder="Application letter">

                                                                <br>
                                                                
                                                                <button class="btn btn-custom" type="submit">Submit!</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/website/vacancy/show.blade.php ENDPATH**/ ?>