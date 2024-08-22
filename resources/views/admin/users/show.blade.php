@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Details <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <form action="/user/{{ $user_details->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;margin-top:8px;margin-right:30px;" type="submit"><i style="color: white" class="icon-trash"></i>Delete</button>
                            </form> 
                        {{-- <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">New Entry</button>  --}}
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
                   {{-- show form comes here --}}
                   
                   <form class="form-label-left input_mask" method="post" action="/user/{{$user_details->id}}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        @error('fullname')
                        <div style="color: red;">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="text" value="{{ $user_details->name }}" name="fullname" class="form-control has-feedback-left"  placeholder="Fullname">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        @error('email')
                        <div style="color: red;">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="email" value="{{ $user_details->email }}" name="email" class="form-control"  placeholder="email">
                        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        @error('phone')
                        <div style="color: red;">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="phone" value="{{ $user_details->phone }}" name="phone" class="form-control has-feedback-left"  placeholder="phone">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        @error('address')
                        <div style="color: red;">
                            {{$message}}
                        </div>
                        @enderror
                        <input type="text" value="{{ $user_details->address }}" name="address" class="form-control"  placeholder="address">
                        <span class="fa fa-map form-control-feedback right" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" value="Created: {{ $user_details->created_at }}" readonly class="form-control has-feedback-left" id="inputSuccess4">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" value="Updated: {{ $user_details->updated_at }}" class="form-control" id="inputSuccess5" readonly>
                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                    </div>
                    <br>
<h4>Reset Password</h4>
<div class="col-md-6 col-sm-12  form-group has-feedback">
    @error('password')
    <div style="color: red;">
        {{$message}}
    </div>
    @enderror
    <input type="password" class="form-control has-feedback-left" name="password" id="inputSuccess4" placeholder="enter new password">
    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
</div>


               
                    <div class="ln_solid"></div>
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                           
                            <button type="submit" name="submit" class="btn btn-success">Make Changes</button>
                        </div>
                    </div>

                </form>

                   {{-- show form ending --}}
                                
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