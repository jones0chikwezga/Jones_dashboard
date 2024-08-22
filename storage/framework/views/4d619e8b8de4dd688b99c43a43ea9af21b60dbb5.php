<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Application Preview <small></small></h2>
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
                   

                  
                   
                  
                  <div class="col-md-100">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="height:500%;" src='<?php echo e(asset('dash/images/pdf.png')); ?>' alt="application" />
                        <div class="mask">
                          <p> <a href="<?php echo e(url($application->cv)); ?>" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open CV</b> </a> </p>
                          <div class="tools tools-bottom">
                            <a href="<?php echo e(url($application->cv)); ?>" target="_blank"><i class="fa fa-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Position:  <?php echo e($application->position); ?> </p>
                        <p>Applied on:  <?php echo e($application->created_at); ?></p><hr>
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
                        <form action="/application/<?php echo e($application->id); ?>" method="post">
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
                     

                     <div class="caption">
                      <p>Applicant fullname:  <?php echo e($application->name); ?> </p> <hr>
                      <p>Applicant email: <a href="mailto:<?php echo e($application->email); ?>"> <?php echo e($application->email); ?></a>  </p><hr>
                      <p>Applicant phone: <a href="tel:<?php echo e($application->phone); ?>"><?php echo e($application->phone); ?></a>  </p><hr>
                      <p>Curricurum Vitae: <a href="/<?php echo e($application->cv); ?>" target="_blank"> view </a>  </p><hr>
                      <p>Application Letter:<a href="/<?php echo e($application->cos); ?>" target="_blank"> view </a>  </p><hr>
                     
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DreamCode\Documents\projects\laravel\nyale_institute\resources\views/admin/applications/show.blade.php ENDPATH**/ ?>