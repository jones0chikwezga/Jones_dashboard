<?php $__env->startSection('content'); ?>

 <!-- page content -->

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Settings Panel <small> page design</small> </h3>
        </div>

        
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>About - Mission - Vision<small> design </small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <?php if($count < 1): ?>
 <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>
<?php else: ?>

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



<?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                  <form action="/vision/<?php echo e($item->id); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                        <div class="row">


    




                      <div class="form-group col-md-12">
                        <label for="recipient-name" class="col-form-label">About</label>
                        <?php $__errorArgs = ['about'];
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
                        <input type="text" name="about" value="<?php echo e($item->about); ?>" class="form-control" id="cat" >
                    </div>



                    <div class="form-group col-md-12">
                      <label for="recipient-name" class="col-form-label">Mission</label>
                      <?php $__errorArgs = ['mission'];
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
                      <input type="text" name="mission" value="<?php echo e($item->mission); ?>" class="form-control" id="cat" >
                  </div>


                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="col-form-label">Vision</label>
                    <?php $__errorArgs = ['vision'];
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
                    <input type="text" name="vision" value="<?php echo e($item->vision); ?>" class="form-control" id="cat" >
                </div>

             
                        </div>
<?php if($count < 1): ?>

<?php else: ?>
    <button name="submit" class="btn mb-2 btn-info">Update</button>
<?php endif; ?>
                       
                    </form>
             

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyModalLabel">Add Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="<?php echo e(url('/vision')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                                <div class="row">






                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">About</label>
                                    <?php $__errorArgs = ['about'];
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
                                    <input type="text" name="about" class="form-control" id="cat" >
                                </div>
            
            
            
                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Mission</label>
                                  <?php $__errorArgs = ['mission'];
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
                                  <input type="text" name="mission" class="form-control" id="cat" >
                              </div>
            
            
                              <div class="form-group col-md-12">
                                <label for="recipient-name" class="col-form-label">Vision</label>
                                <?php $__errorArgs = ['vision'];
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
                                <input type="text" name="vision" class="form-control" id="cat" >
                            </div>



                                </div>

                                <button name="submit" class="btn mb-2 btn-info">Create</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
















      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Core Values <small> design </small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal2">New Entry</button>
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">



               
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Heading</th>
                      <th>Description</th>
                      <th>Created_at</th>
                      <th>Updated_at</th>
                      <th>Action</th>
                    </tr>
                  </thead>


                  <tbody>
                 <?php $__currentLoopData = $cores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
               
                    <tr>
                      <td> <?php echo e($item->heading); ?> </td>

                     <td><?php echo $item->description; ?> </td>
                     
                      <td> <?php echo e($item->created_at); ?> </td>

                      <td><?php echo e($item->updated_at); ?></td>
                      <td> <form action="/cores/<?php echo e($item->id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;margin-top:8px;margin-right:30px;" type="submit"><i style="color: white" class="icon-trash"></i>Delete</button>
                        </form> </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
             




                <div class="modal fade bs-example-modal-lg" id="varyModal2" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyModalLabel">Add Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="/cores" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                                <div class="row">






                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">Heading</label>
                                    <?php $__errorArgs = ['heading'];
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
                                    <input type="text" name="heading" class="form-control" id="cat" >
                                </div>
            
            
            
                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Description</label>
                                  <?php $__errorArgs = ['description'];
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
                                  <textarea name="description" class="form-control" id="cat" > </textarea>
                              </div>
            
            
                             



                                </div>

                                <button name="submit" class="btn mb-2 btn-info">Create</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>





























      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>About <small> design </small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">



               
                  <form action="/slide" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                        <div class="row">






                      <div class="form-group col-md-12">
                        <label for="recipient-name" class="col-form-label">About</label>
                        <?php $__errorArgs = ['about'];
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
                        <input type="text" name="about" class="form-control" id="cat" >
                    </div>



                    <div class="form-group col-md-12">
                      <label for="recipient-name" class="col-form-label">Mission</label>
                      <?php $__errorArgs = ['mission'];
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
                      <input type="text" name="mission" class="form-control" id="cat" >
                  </div>


                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="col-form-label">Vision</label>
                    <?php $__errorArgs = ['vision'];
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
                    <input type="text" name="vision" class="form-control" id="cat" >
                </div>


                        </div>

                        <button name="submit" class="btn mb-2 btn-info">Update</button>
                    </form>
             




                <div class="modal fade bs-example-modal-lg" id="varyModal3" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyModalLabel">Add Gallery</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="/slide" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                                <div class="row">






                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">About</label>
                                    <?php $__errorArgs = ['about'];
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
                                    <input type="text" name="about" class="form-control" id="cat" >
                                </div>
            
            
            
                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Mission</label>
                                  <?php $__errorArgs = ['mission'];
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
                                  <input type="text" name="mission" class="form-control" id="cat" >
                              </div>
            
            
                              <div class="form-group col-md-12">
                                <label for="recipient-name" class="col-form-label">Vision</label>
                                <?php $__errorArgs = ['vision'];
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
                                <input type="text" name="vision" class="form-control" id="cat" >
                            </div>



                                </div>

                                <button name="submit" class="btn mb-2 btn-info">Create</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- /page content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>