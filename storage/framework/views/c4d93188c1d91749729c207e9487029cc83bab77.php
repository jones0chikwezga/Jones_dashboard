<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>File/Media Details <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <form action="/files/<?php echo e($file_details->id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;margin-top:8px;margin-right:30px;" type="submit"><i style="color: white" class="icon-trash"></i>Delete</button>
                        </form>
                        
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
                   



                  
                  <div class="col-md-100">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="height:50%;" src='<?php echo e(asset('dash/images/pdf1.png')); ?>' alt="<?php echo e($file_details->file); ?>" />
                        <div class="mask">
                          <p> <a href="<?php echo e(url($file_details->file)); ?>" target="_blank">Open</a> </p>
                          <div class="tools tools-bottom">
                            <a href="<?php echo e(url($file_details->file)); ?>" target="_blank"><i class="fa fa-eye"></i> OPEN</a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p><?php echo $file_details->description; ?></p>
                      </div>
                    </div>
                  </div>

                  

                   

                            </div>

                            </div>
                        </div>
                    </div>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>





              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>File/Media Details <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                          
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
                     

                     <form class="form-label-left input_mask" method="post" action="/files/<?php echo e($file_details->id); ?>">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PUT'); ?>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                          <?php $__errorArgs = ['filename'];
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
                          <label for="">Filename</label>
                          <input type="text" value="<?php echo e($file_details->filename); ?>" name="filename" class="form-control has-feedback-left" >

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
                                            <textarea name="description" value="<?php echo e($file_details->description); ?>" class="form-control" id="cat"><?php echo e($file_details->description); ?></textarea>
                                        </div>


                                        <div class="form-group col-md-12">
                                          <label for="recipient-name" class="col-form-label">Category</label>
                                          <?php $__errorArgs = ['category'];
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
                                          <select class="form-control required select2" name="category" id="validationSelect1"
                                              >
                                            
                                            
                                              <option value="<?php echo e($file_details->category); ?>"> <?php echo e($file_details->category); ?> </option>
                                                  <option value="ACT">ACT</option>
                                                  <option value="POLICY">POLICY</option>
                                                  <option value="other">Other</option>
                                                  
                                          
                                          </select>
                                      </div>


                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                          <input type="text" value="Created: <?php echo e($file_details->created_at); ?>" readonly class="form-control has-feedback-left" id="inputSuccess4">
                          <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                          <input type="text" value="Updated: <?php echo e($file_details->updated_at); ?>" class="form-control" id="inputSuccess5" readonly>
                          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <br>
                      <div class="ln_solid"></div>
                      <div class="form-group row">
                          <div class="col-md-9 col-sm-9  offset-md-3">

                              <button type="submit" name="submit" class="btn btn-success">Make Changes</button>
                          </div>
                      </div>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/admin/files/show.blade.php ENDPATH**/ ?>