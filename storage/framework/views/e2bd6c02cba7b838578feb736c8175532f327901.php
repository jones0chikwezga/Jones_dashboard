<?php $__env->startSection('content'); ?> 

<div class="top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-clipboard"></i></div>
      <div class="count"><?php echo e($blogs); ?></div>
      <h3>Blogs</h3>
      <p></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-file"></i></div>
      <div class="count"><?php echo e($files); ?></div>
      <h3>Files</h3>
      <p></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-globe"></i></div>
      <div class="count"><?php echo e($news); ?></div>
      <h3>News</h3>
      <p></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-calendar"></i></div>
      <div class="count"><?php echo e($events); ?></div>
      <h3>Events</h3>
      <p></p>
    </div>
  </div>
</div>





<div class="row">
  <div class="col-md-4">
    <div class="x_panel">
      <div class="x_title">
        <h2>Recent Blogs <small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <?php $__currentLoopData = $recent_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
      <?php 
                  $temp = explode(' ',$item->created_at);

$timestamp = (strtotime($item->created_at));
$dates = date('Y', $timestamp);
$date = substr($dates, 2);
$month = date('M', $timestamp);
      ?>

      <div class="x_content">
        <article class="media event">
          <a class="pull-left date">
            <p class="month"><?php echo e($month); ?></p>
            <p class="day"><?php echo e($date); ?></p>
          </a>
          <div class="media-body">
            <a class="title" href="blogs/<?php echo e($item->id); ?>"><?php echo e($item->blog_title); ?></a>
            <p> <i class="fa fa-tag"></i> <?php echo e($item->category); ?></p>
            <hr>
          </div>
        </article>
       
      </div> 
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <div class="col-md-4">
    <div class="x_panel">
      
      <div class="x_title">
        <h2>Recent News <small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <?php $__currentLoopData = $recent_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
      <?php 
            $temp = explode(' ',$item->created_at);

            $timestamp = (strtotime($item->created_at));
            $dates = date('Y', $timestamp);
            $date = substr($dates, 2);
            $month = date('M', $timestamp);
      ?>
      <div class="x_content">
        <article class="media event">
          <a class="pull-left date">
            <p class="month"><?php echo e($month); ?></p>
            <p class="day"><?php echo e($date); ?></p>
          </a>
          <div class="media-body">
            <a class="title" href="#"><?php echo e($item->news_title); ?></a>
            <p><?php echo e($item->category); ?></p>
          </div>
        </article>
    
        
      </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <div class="col-md-4">
    <div class="x_panel">
      <div class="x_title">
        <h2>Recent  Vacancies <small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <?php $__currentLoopData = $recent_vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
      <?php 
            $temp = explode(' ',$item->created_at);

            $timestamp = (strtotime($item->created_at));
            $dates = date('Y', $timestamp);
            $date = substr($dates, 2);
            $month = date('M', $timestamp);
      ?>
      <div class="x_content">
        <article class="media event">
          <a class="pull-left date">
            <p class="month"><?php echo e($month); ?></p>
            <p class="day"><?php echo e($date); ?></p>
          </a>
          <div class="media-body">
            <a class="title" href="#"><?php echo e($item->position); ?></a>
            <p>Closing Date: <?php echo e($item->closing_date); ?></p>
          </div>
        </article>   
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div> 




</div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JONES\Documents\Laravel-Dashboard-main\resources\views/admin/index.blade.php ENDPATH**/ ?>