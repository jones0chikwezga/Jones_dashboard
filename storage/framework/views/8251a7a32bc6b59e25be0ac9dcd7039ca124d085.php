<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Event Preview <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <form action="/event/<?php echo e($events->id); ?>" method="post">
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
                        <img style="height:500%;" src='<?php echo e(asset('dash/images/pdf.png')); ?>' alt="<?php echo e($events->image); ?>" />
                        <div class="mask">
                          <p> <a href="<?php echo e(url($events->image)); ?>" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open Document</b> </a> </p>
                          <div class="tools tools-bottom">
                            <a href="<?php echo e(url($events->image)); ?>" target="_blank"><i class="fa fa-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>TITLE:  <?php echo e($events->event_title); ?> </p>
                        <p>POSTED:  <?php echo e($events->created_at); ?></p><hr>
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
                      <h2>More Details <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">Edit</button> 
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
                     

                     <div class="caption">
                      <p>Category: <i class="fa fa-tag"></i>  <?php echo e($events->category); ?> </p> <hr>
                      <p>Starting Time:  <?php echo e($events->starttime); ?> </p><hr>
                      <p>Ending time:  <?php echo e($events->endtime); ?> </p><hr>
                      <p>Content:  <?php echo $events->content; ?> </p><hr>
                     
                    </div>

                    
  
                     




                     <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="varyModalLabel">Edit events</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                              <form action="/event/<?php echo e($events->id); ?>" method="POST" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PUT'); ?>
                                  <div class="row">

                                    <div class="form-group col-md-12">
                                      <label for="recipient-name" class="col-form-label">Event Title</label>
                                      <?php $__errorArgs = ['event_title'];
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
                                      <input type="text" name="event_title" value="<?php echo e($events->event_title); ?>" class="form-control" id="cat" >
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
                                            

                                              <option value="<?php echo e($events->category); ?>"><?php echo e($events->category); ?></option>
                                              
                                              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              
                                              <option value="<?php echo e($cat->category_name); ?>"><?php echo e($cat->category_name); ?></option>
                                              
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  
                                             
                                          </select>
                                      </div>

                                    <div class="form-group col-md-12">
                                      <label for="recipient-name" class="col-form-label">Content</label>
                                      <?php $__errorArgs = ['content'];
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
                                      <textarea name="content" value="<?php echo e($events->content); ?>" class="form-control" id="cat"><?php echo e($events->content); ?></textarea>
                                  </div>

                 
                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">Date</label>
                                    <?php $__errorArgs = ['date'];
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
                                    <input type="date" value="<?php echo e($events->date); ?>" name="date" class="form-control" id="cat" >
                                </div>

                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Starts</label>
                                  <?php $__errorArgs = ['starttime'];
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
                                  <input type="time" name="starttime" value="<?php echo e($events->starttime); ?>" class="form-control" id="cat" >
                              </div>

                              <div class="form-group col-md-12">
                                <label for="recipient-name" class="col-form-label">Ends</label>
                                <?php $__errorArgs = ['endtime'];
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
                                <input type="time" name="endtime" value="<?php echo e($events->endtime); ?>" class="form-control" id="cat" >
                            </div>
                                 
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
                                  <input type="file" name="image" class="form-control" id="cat">
                              </div>

                       

                                    
                                  </div>
                                
                                  <button name="submit" class="btn mb-2 btn-info">Update</button>
                              </form>
                             </div>
                            
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
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/yodep.org/public_html/resources/views/admin/events/show.blade.php ENDPATH**/ ?>