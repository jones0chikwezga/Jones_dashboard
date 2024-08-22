@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>File/Media Details <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <form action="/files/{{ $file_details->id }}" method="post">
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



                  {{-- media gallery start --}}
                  <div class="col-md-100">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="height:50%;" src='{{ asset('dash/images/pdf1.png') }}' alt="{{ $file_details->file }}" />
                        <div class="mask">
                          <p> <a href="{{ url($file_details->file) }}" target="_blank">Open</a> </p>
                          <div class="tools tools-bottom">
                            <a href="{{ url($file_details->file) }}" target="_blank"><i class="fa fa-eye"></i> OPEN</a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>{!! $file_details->description !!}</p>
                      </div>
                    </div>
                  </div>

                  {{-- media gallery end --}}

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





              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>File/Media Details <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
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

                     <form class="form-label-left input_mask" method="post" action="/files/{{$file_details->id}}">
                      @csrf
                      @method('PUT')
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                          @error('filename')
                          <div style="color: red;">
                              {{$message}}
                          </div>
                          @enderror
                          <label for="">Filename</label>
                          <input type="text" value="{{ $file_details->filename }}" name="filename" class="form-control has-feedback-left" >

                      </div>

                    
                      
                       <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Description</label>
                                            @error('description')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <textarea name="description" value="{{ $file_details->description }}" class="form-control" id="cat">{{ $file_details->description }}</textarea>
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
                                            
                                            
                                              <option value="{{ $file_details->category }}"> {{ $file_details->category }} </option>
                                                  <option value="ACT">ACT</option>
                                                  <option value="POLICY">POLICY</option>
                                                  <option value="other">Other</option>
                                                  
                                          
                                          </select>
                                      </div>


                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                          <input type="text" value="Created: {{ $file_details->created_at }}" readonly class="form-control has-feedback-left" id="inputSuccess4">
                          <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                          <input type="text" value="Updated: {{ $file_details->updated_at }}" class="form-control" id="inputSuccess5" readonly>
                          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <br>
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
