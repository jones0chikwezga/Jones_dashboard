@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Users <small></small></h2>
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
                          <th>Name</th>
                          <th>Position</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>

                         <td>{{ $user->type }}</td>

                          <td>{{ $user->phone }}</td>
                         
                          <td>{{ $user->address }}</td>

                          <td>{{ $user->email }}</td>
                         
                          <td><a class = "btn btn-primary btn-sm" href="user/{{ $user->id }}"> <i class="fa fa-pencil"></i> </a> </td>
                        </tr>
                        @endforeach
                        <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varyModalLabel">New User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  @include('alerts.success')
                                    <form action="user" method="POST">
                                    @csrf
                                    @method('POST')
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">FullName</label>
                                            @error('fullname')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="fullname" value="{{ old('fullname') }}" class="form-control" id="cat" >
                                        </div>

                                            <div class="form-group col-md-12">
                                                <label for="recipient-name" class="col-form-label">Role</label>
                                                @error('type')
                                                <div style="color: red;">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                                <select class="form-control required select2" name="type" id="validationSelect1"
                                                    >
                                                    <option value="">select Role</option>
                                                    
                                                        <option value="admin">Admin</option>
                                                        
                                                   
                                                </select>
                                            </div>

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Phone</label>
                                            @error('phone')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="cat">
                                        </div>

                                        <div class="form-group col-md-12">
                                          <label for="recipient-name" class="col-form-label">Email</label>
                                          @error('email')
                                          <div style="color: red;">
                                              {{$message}}
                                          </div>
                                          @enderror
                                          <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="cat">
                                      </div>

                                      <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Address</label>
                                        @error('address')
                                        <div style="color: red;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <input type="address" name="address" value="{{ old('address') }}" class="form-control" id="cat">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Password</label>
                                        @error('password')
                                        <div style="color: red;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <input type="password" name="password" class="form-control" id="cat">
                                    </div>

                                          
                                        </div>
                                        <input type="number" name="cid" id="eid" hidden>
                                        <button name="edit" class="btn mb-2 btn-info">Create</button>
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