<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Case Preview <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <form action="/case_tracker_page/<?php echo e($story->id); ?>" method="post">
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
                   



                  

                <?php if($story->image == 'N/A'): ?>
                <div class="col-md-100">

                    <div class="image view view-first">
                      <iframe width="600" height="315" src="<?php echo e($story->link); ?>">
                      </iframe>


                  </div>
                </div>
                <?php else: ?>


                <div class="col-md-100">

                    <div class="image view view-first">
                      <img style="height:500%;" width="30%" src='/<?php echo e($story->image); ?>' alt="partner" />
                      <div class="mask">
                        <p> <a href="<?php echo e(url($story->image)); ?>" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open Document</b> </a> </p>
                        <div class="tools tools-bottom">
                          <a href="<?php echo e(url($story->image)); ?>" target="_blank"><i class="fa fa-eye"></i></a>
                        </div>

                    </div>

                  </div>
                </div>

                <?php endif; ?>


                  

                   

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

                        <p>Title:  <?php echo e($story->title); ?> </p><hr>
                        <p>Body:  <?php echo $story->body; ?></p><hr>
                        <p>Created:  <?php echo e($story->created_at); ?></p><hr>
                      </div>



                     




                     <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="varyModalLabel">Edit Case</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <form action="/case_tracker_page/<?php echo e($story->id); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Title</label>
                                            <?php $__errorArgs = ['title'];
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
                                            <input type="text" name="title" value ="<?php echo e($story->title); ?>" class="form-control" id="cat" >
                                        </div>

                                        



                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Body</label>
                                            <?php $__errorArgs = ['body'];
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
                                            <textarea name="body" value ="<?php echo e($story->body); ?>" class="form-control" id="cat"><?php echo e($story->body); ?></textarea>
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

































                
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Follow Ups <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#followModal">New Entry</button>
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
                      <?php $i = 1 ?>
                      <?php $__empty_1 = true; $__currentLoopData = $follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <p>Comment : <?php echo e($i++); ?>  <?php echo $item->comment; ?>    <form action="/followup/<?php echo e($item->id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;margin-top:8px;margin-right:30px;" type="submit"><i style="color: white" class="fa fa-trash"></i></button>
                        </form></p>

                        <p>Created:  <?php echo e($item->created_at); ?></p><hr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <p> empty Listing </p><hr>
                      <?php endif; ?>
                       
                        
                      </div>



                     




                     <div class="modal fade bs-example-modal-lg" id="followModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="varyModalLabel">Add Follow Up Item</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <form action="<?php echo e(url('/followup')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>


                                    <input type="text" name="case_id" hidden value="<?php echo e($story->id); ?>" id="">

                                    
                                        

                                        



                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Comment</label>
                                            <?php $__errorArgs = ['comment'];
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
                                            <textarea name="comment" value ="<?php echo e(old('comment')); ?>" class="form-control" id="cat"></textarea>
                                        </div>


                                      




                                        </div>

                                        <button name="submit" class="btn mb-2 btn-info">Save</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289533873/domains/dreamcodemw.com/public_html/nyale/resources/views/admin/stories/show.blade.php ENDPATH**/ ?>