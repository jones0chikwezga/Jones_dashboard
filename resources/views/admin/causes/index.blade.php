@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Causes <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Add User</a>
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
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($causes as $item)
                        <tr>
                          <td>{{ $item->title }}</td>

                         <td>{{ $item->category }}</td>

                          <td>{{ $item->created_at }}</td>

                          <td>{{ $item->updated_at }}</td>

                          <td><a class = "btn btn-primary btn-sm" href="/causes/{{ $item->id }}"> <i class="fa fa-pencil"></i> </a> </td>
                        </tr>
                        @endforeach
                        <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varyModalLabel">New Cause</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  @include('alerts.success')
                                    <form action="/causes" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Title</label>
                                            @error('title')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="cat" >
                                        </div>

                                            <div class="form-group col-md-12">
                                                <label for="recipient-name" class="col-form-label">Category</label>
                                                @error('category')
                                                <div style="color: red;">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                <select class="form-control required select2" name="category" id="validationSelect1"
                                                    >
                                                    <option value="">select Category</option>
                                                    @foreach ($category as $cat)

                                                        <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>

                                                     @endforeach
                                                </select>
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


                                            {{-- <div class="form-group col-md-12">
                                                <label for="recipient-name" class="col-form-label">Donated</label>
                                                @error('donated')
                                                <div style="color: red;">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                <input type="number" name="donated" value="{{ old('donated') }}" class="form-control" id="cat" >
                                            </div> --}}



                                      <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Image</label>
                                        @error('image')
                                        <div style="color: red;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <input type="file" name="image" class="form-control" id="cat">
                                    </div>




                                        </div>

                                        <button name="submit" class="btn mb-2 btn-info">Create</button>
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

@endsection
