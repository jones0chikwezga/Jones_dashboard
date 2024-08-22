@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Our Programs Preview <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <form action="/program/{{ $program->id }}" method="post">
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

                      {{-- <div class="image view view-first">
                        <img style="height:500%;" width="30%" src='/{{ $program->image }}' alt="partner" />
                        <div class="mask">
                          <p> <a href="{{ url($program->image) }}" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open Document</b> </a> </p>
                          <div class="tools tools-bottom">
                            <a href="{{ url($program->image) }}" target="_blank"><i class="fa fa-eye"></i></a>
                          </div>

                      </div>

                    </div> --}}
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
                      <h2>More Details <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#varyModal">Edit</button>
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

                     <div class="caption">

                        <p>Title:  {{ $program->title }} </p><hr>
                        <p>Body:  {!! $program->body !!}</p><hr>
                        <p>Created:  {{ $program->created_at }}</p><hr>
                      </div>



                     {{-- show form ending --}}

{{-- edit modal start --}}


                     <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="varyModalLabel">Edit Program Details</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                @include('alerts.success')
                                <form action="/program/{{ $program->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Title</label>
                                            @error('title')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="title" value ="{{ $program->title }}" class="form-control" id="cat" >
                                        </div>

                                        {{-- <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            @error('name')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="name" value ="{{ $story->name }}" class="form-control" id="cat" >
                                        </div> --}}



                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Body</label>
                                            @error('body')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <textarea name="body" value ="{{ $program->body }}" class="form-control" id="cat">{{ $program->body }}</textarea>
                                        </div>


                                      {{-- <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Image</label>
                                        @error('image')
                                        <div style="color: red;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <input type="file" name="image" class="form-control" id="cat">
                                    </div> --}}




                                        </div>

                                        <button name="submit" class="btn mb-2 btn-info">Update</button>
                                    </form>
                             </div>

                         </div>
                     </div>
                 </div>

                  {{-- edit modal --}}

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
