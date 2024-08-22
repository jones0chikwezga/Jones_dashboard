<?php $__env->startSection('content'); ?>

 <!-- page content -->

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Slideshows <small> Homepage design</small> </h3>
        </div>

        
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Media Gallery <small> gallery design </small></h2>
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



                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                      <div class="mask">
                        <p>Your Text</p>
                        <div class="tools tools-bottom">
                          <a href="#"><i class="fa fa-link"></i></a>
                          <a href="#"><i class="fa fa-pencil"></i></a>
                          <a href="#"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="caption">
                      <p>Snow and Ice Incoming for the South</p>
                    </div>
                  </div>
                </div>




                <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
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
                                <label for="recipient-name" class="col-form-label">Image</label>
                                <?php $__errorArgs = ['image'];
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
                                <input type="file" name="image[]" class="form-control" id="cat" multiple>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\yodep\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>