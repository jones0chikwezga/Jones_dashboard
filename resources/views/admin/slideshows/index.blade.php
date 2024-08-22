@extends('layouts.app')


@section('content')

 <!-- page content -->

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Slideshows <small> Homepage design</small> </h3>
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
              <h2>Media Gallery <small> gallery design </small></h2>
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
 @php
                            $i = 1;
                        @endphp
@foreach ($slides as $item)


                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{ $item->image }}" alt="image" />
                      <div class="mask">
                        {{-- <p>Your Text</p> --}}
                        <div class="tools tools-bottom">
                          {{-- <a href="#"><i class="fa fa-link"></i></a> --}}
                          <a data-toggle="modal" data-target="#varyModaledit{{ $item->id }}"><i class="fa fa-pencil"></i></a>
                          {{-- <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button> --}}
                          {{-- <a href="#"><i class="fa fa-times"></i></a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="caption">

                      <p> {{ $item->heading }}</p>
                                            <p> {!! $item->body !!}</p>
                    </div>
                  </div>
                </div>




                          {{-- edit modal --}}

            <div class="modal fade bs-example-modal-lg" id="varyModaledit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="varyModalLabel">Edit Slide</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      @include('alerts.success')
                        <form action="/slide/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="row">


                          {{-- <input type="text" hidden name="id" value="{{ $item->id }}"> --}}


                          <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            @error('image')
                            <div style="color: red;">
                                {{$message}}
                            </div>
                            @enderror
                            <input type="file" name="image" class="form-control" id="cat">
                        </div>
                        
                        
                         <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Heading</label>
                            @error('heading')
                            <div style="color: red;">
                                {{$message}}
                            </div>
                            @enderror
                            <input type="text" value = "{{ $item->heading }}" name="heading" class="form-control" id="cat">
                        </div>
                        
                        
                         <div class="form-group col-md-12">
                            <label for="recipient-name"  class="col-form-label">Body</label>
                            @error('body')
                            <div style="color: red;">
                                {{$message}}
                            </div>
                            @enderror
                            <textarea name="body" value = "{{ $item->body }}" class="form-control" id="cat">{{ $item->body }}</textarea>
                        </div>




                            </div>

                            <button name="submit" class="btn mb-2 btn-info">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
@endforeach



                <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyModalLabel">Add Slide</h5>
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
                                <label for="recipient-name" class="col-form-label">Image</label>
                                @error('image')
                                <div style="color: red;">
                                    {{$message}}
                                </div>
                                @enderror
                                <input type="file" name="image" class="form-control" id="cat">
                            </div>

 <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Heading</label>
                            @error('heading')
                            <div style="color: red;">
                                {{$message}}
                            </div>
                            @enderror
                            <input type="text" name="heading" class="form-control" id="cat">
                        </div>
                        
                        
                         <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Body</label>
                            @error('body')
                            <div style="color: red;">
                                {{$message}}
                            </div>
                            @enderror
                            <textarea name="boby" class="form-control" id="cat"></textarea>
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
