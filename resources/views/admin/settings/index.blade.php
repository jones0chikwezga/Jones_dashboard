@extends('layouts.app')


@section('content')

 <!-- page content -->

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Settings Panel <small> page design</small> </h3>
        </div>

        {{-- <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> --}}
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>About - Mission - Vision<small> design </small></h2>
              <ul class="nav navbar-right panel_toolbox">
                @if ($count < 1)
 <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>
@else

@endif
               
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li> --}}
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">



@foreach ($about as $item)
               
                  <form action="/vision/{{ $item->id }}" method="POST" >
                    @csrf
                    @method('PUT')
                        <div class="row">


    




                      <div class="form-group col-md-12">
                        <label for="recipient-name" class="col-form-label">About</label>
                        @error('about')
                        <div style="color: red;">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="text" name="about" value="{{ $item->about }}" class="form-control" id="cat" >
                    </div>



                    <div class="form-group col-md-12">
                      <label for="recipient-name" class="col-form-label">Mission</label>
                      @error('mission')
                      <div style="color: red;">
                          {{$message}}
                      </div>
                      @enderror
                      <input type="text" name="mission" value="{{ $item->mission }}" class="form-control" id="cat" >
                  </div>


                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="col-form-label">Vision</label>
                    @error('vision')
                    <div style="color: red;">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="vision" value="{{ $item->vision }}" class="form-control" id="cat" >
                </div>

             
                        </div>
@if ($count < 1)

@else
    <button name="submit" class="btn mb-2 btn-info">Update</button>
@endif
                       
                    </form>
             

   @endforeach


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
                          @include('alerts.success')
                            <form action="{{ url('/vision') }}" method="POST">
                            @csrf
                            @method('POST')
                                <div class="row">






                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">About</label>
                                    @error('about')
                                    <div style="color: red;">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="text" name="about" class="form-control" id="cat" >
                                </div>
            
            
            
                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Mission</label>
                                  @error('mission')
                                  <div style="color: red;">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  <input type="text" name="mission" class="form-control" id="cat" >
                              </div>
            
            
                              <div class="form-group col-md-12">
                                <label for="recipient-name" class="col-form-label">Vision</label>
                                @error('vision')
                                <div style="color: red;">
                                    {{$message}}
                                </div>
                                @enderror
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
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li> --}}
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
                 @foreach ($cores as $item)
                     
               
                    <tr>
                      <td> {{ $item->heading  }} </td>

                     <td>{!! $item->description !!} </td>
                     
                      <td> {{ $item->created_at }} </td>

                      <td>{{ $item->updated_at }}</td>
                      <td> <form action="/cores/{{ $item->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;margin-top:8px;margin-right:30px;" type="submit"><i style="color: white" class="icon-trash"></i>Delete</button>
                        </form> </td>

                    </tr>
                    @endforeach
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
                          @include('alerts.success')
                            <form action="/cores" method="POST">
                            @csrf
                            @method('POST')
                                <div class="row">






                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">Heading</label>
                                    @error('heading')
                                    <div style="color: red;">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="text" name="heading" class="form-control" id="cat" >
                                </div>
            
            
            
                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Description</label>
                                  @error('description')
                                  <div style="color: red;">
                                      {{$message}}
                                  </div>
                                  @enderror
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
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li> --}}
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">



               
                  <form action="/slide" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                        <div class="row">






                      <div class="form-group col-md-12">
                        <label for="recipient-name" class="col-form-label">About</label>
                        @error('about')
                        <div style="color: red;">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="text" name="about" class="form-control" id="cat" >
                    </div>



                    <div class="form-group col-md-12">
                      <label for="recipient-name" class="col-form-label">Mission</label>
                      @error('mission')
                      <div style="color: red;">
                          {{$message}}
                      </div>
                      @enderror
                      <input type="text" name="mission" class="form-control" id="cat" >
                  </div>


                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="col-form-label">Vision</label>
                    @error('vision')
                    <div style="color: red;">
                        {{$message}}
                    </div>
                    @enderror
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
                          @include('alerts.success')
                            <form action="/slide" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                                <div class="row">






                                  <div class="form-group col-md-12">
                                    <label for="recipient-name" class="col-form-label">About</label>
                                    @error('about')
                                    <div style="color: red;">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="text" name="about" class="form-control" id="cat" >
                                </div>
            
            
            
                                <div class="form-group col-md-12">
                                  <label for="recipient-name" class="col-form-label">Mission</label>
                                  @error('mission')
                                  <div style="color: red;">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  <input type="text" name="mission" class="form-control" id="cat" >
                              </div>
            
            
                              <div class="form-group col-md-12">
                                <label for="recipient-name" class="col-form-label">Vision</label>
                                @error('vision')
                                <div style="color: red;">
                                    {{$message}}
                                </div>
                                @enderror
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

@endsection
