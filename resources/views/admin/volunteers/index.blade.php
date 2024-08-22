@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Volunteers <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        {{-- <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>  --}}
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
                          <th>from</th>
                          <th>Sent</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($volunteers as $item)
                        <tr>
                          <td>{{ $item->name }}</td>
                         
                          <td>{{ $item->created_at }}</td>

                          <td>{{ $item->email }}</td>
                         
                          <td><a class = "btn btn-primary btn-sm" href="/volunteer/{{ $item->id }}"> <i class="fa fa-pencil"></i> </a> </td>
                        </tr>
                        @endforeach
         
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>

@endsection