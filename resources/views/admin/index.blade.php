@extends('layouts.app')


@section('content') 

<div class="top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-clipboard"></i></div>
      <div class="count">{{ $blogs }}</div>
      <h3>Blogs</h3>
      <p></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-file"></i></div>
      <div class="count">{{ $files }}</div>
      <h3>Files</h3>
      <p></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-globe"></i></div>
      <div class="count">{{ $news }}</div>
      <h3>News</h3>
      <p></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-calendar"></i></div>
      <div class="count">{{ $events }}</div>
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

      @foreach ($recent_blog as $item)
          
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
            <p class="month">{{  $month }}</p>
            <p class="day">{{  $date }}</p>
          </a>
          <div class="media-body">
            <a class="title" href="blogs/{{ $item->id }}">{{ $item->blog_title }}</a>
            <p> <i class="fa fa-tag"></i> {{ $item->category }}</p>
            <hr>
          </div>
        </article>
       
      </div> 
      
      @endforeach
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

      @foreach ($recent_news as $item)
          
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
            <p class="month">{{  $month }}</p>
            <p class="day">{{  $date }}</p>
          </a>
          <div class="media-body">
            <a class="title" href="#">{{ $item->news_title }}</a>
            <p>{{ $item->category }}</p>
          </div>
        </article>
    
        
      </div>
       @endforeach
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

      @foreach ($recent_vacancies as $item)
          
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
            <p class="month">{{ $month }}</p>
            <p class="day">{{ $date }}</p>
          </a>
          <div class="media-body">
            <a class="title" href="#">{{ $item->position }}</a>
            <p>Closing Date: {{ $item->closing_date }}</p>
          </div>
        </article>   
      </div>
      @endforeach
    </div>
  </div>
</div> 




</div>
</div>





@endsection