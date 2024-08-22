@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Stats <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                        @if ($counter > 0)
                        {{-- <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button> --}}
                            
                        @else
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>
                            
                        @endif
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
                          <th>Total Districts Saved</th>
                          <th>People Saved</th>
                          <th>Target Goal ($)</th>
                          <th>Total Raised ($)</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($stats as $item)
                        <tr>
                          <td>{{ $item->district }}</td>

                         <td>{{ $item->people }}</td>

                         <td>{{ $item->goal }}</td>

                         <td>{{ $item->raised }}</td>

                          <td>{{ $item->created_at }}</td>

                          <td>{{ $item->updated_at }}</td>
                          

                       
                        <td>  <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal{{ $item->id }}">edit</button> </td>
                        </tr>



                        <div class="modal fade bs-example-modal-lg" id="varyModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varyModalLabel">Edit Stats</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  @include('alerts.success')
                                    <form action="/stats/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name"  class="col-form-label">Total Districts Saved</label>
                                            @error('district')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="district" value="{{ $item->district }}" class="form-control" id="cat" >
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Total People Saved</label>
                                            @error('people')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="people" value="{{ $item->people }}" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Our Goal</label>
                                            @error('goal')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="goal" value="{{ $item->goal }}" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Amount Raised</label>
                                            @error('raised')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="raised" value="{{ $item->raised }}" class="form-control" id="cat" >
                                        </div>

                                          



                                           


                                          

 

                                     




                                        </div>

                                        <button name="submit" class="btn mb-2 btn-info">Edit</button>
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
                                    <h5 class="modal-title" id="varyModalLabel">New Entry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  @include('alerts.success')
                                    <form action="/stats" method="POST">
                                    @csrf
                                    @method('POST')
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Total Districts Saved</label>
                                            @error('district')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="district" value="{{ old('district') }}" class="form-control" id="cat" >
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Total People Saved</label>
                                            @error('people')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="people" value="{{ old('people') }}" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Our Goal</label>
                                            @error('goal')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="goal" value="{{ old('goal') }}" class="form-control" id="cat" >
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Amount Raised</label>
                                            @error('raised')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="raised" value="{{ old('raised') }}" class="form-control" id="cat" >
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
