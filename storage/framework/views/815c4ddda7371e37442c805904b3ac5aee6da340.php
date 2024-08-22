<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Stats <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                        <?php if($counter > 0): ?>
                        
                            
                        <?php else: ?>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>
                            
                        <?php endif; ?>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Total Districts Saved</th>
                          <th>People Saved</th>
                          <th>Target Goal ($)</th>
                          <th>Total Raised ($)</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($item->district); ?></td>

                         <td><?php echo e($item->people); ?></td>

                         <td><?php echo e($item->goal); ?></td>

                         <td><?php echo e($item->raised); ?></td>

                          <td><?php echo e($item->created_at); ?></td>

                          <td><?php echo e($item->updated_at); ?></td>
                          

                       
                        <td>  <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal<?php echo e($item->id); ?>">edit</button> </td>
                        </tr>



                        <div class="modal fade bs-example-modal-lg" id="varyModal<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varyModalLabel">Edit Stats</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <form action="/stats/<?php echo e($item->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name"  class="col-form-label">Total Districts Saved</label>
                                            <?php $__errorArgs = ['district'];
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
                                            <input type="text" name="district" value="<?php echo e($item->district); ?>" class="form-control" id="cat" >
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Total People Saved</label>
                                            <?php $__errorArgs = ['people'];
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
                                            <input type="text" name="people" value="<?php echo e($item->people); ?>" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Our Goal</label>
                                            <?php $__errorArgs = ['goal'];
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
                                            <input type="text" name="goal" value="<?php echo e($item->goal); ?>" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Amount Raised</label>
                                            <?php $__errorArgs = ['raised'];
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
                                            <input type="text" name="raised" value="<?php echo e($item->raised); ?>" class="form-control" id="cat" >
                                        </div>

                                          



                                           


                                          

 

                                     




                                        </div>

                                        <button name="submit" class="btn mb-2 btn-info">Edit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>








                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varyModalLabel">New Entry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <form action="/stats" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Total Districts Saved</label>
                                            <?php $__errorArgs = ['district'];
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
                                            <input type="text" name="district" value="<?php echo e(old('district')); ?>" class="form-control" id="cat" >
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Total People Saved</label>
                                            <?php $__errorArgs = ['people'];
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
                                            <input type="text" name="people" value="<?php echo e(old('people')); ?>" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Our Goal</label>
                                            <?php $__errorArgs = ['goal'];
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
                                            <input type="text" name="goal" value="<?php echo e(old('goal')); ?>" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Amount Raised</label>
                                            <?php $__errorArgs = ['raised'];
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
                                            <input type="text" name="raised" value="<?php echo e(old('raised')); ?>" class="form-control" id="cat" >
                                        </div>

                                          



                                           


                                          



                                     




                                        </div>

                                        <button name="submit" class="btn mb-2 btn-info">Create</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/admin/stats/index.blade.php ENDPATH**/ ?>