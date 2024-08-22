@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Video Link Preview <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <form action="/video/{{ $video->id }}" method="post">
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

                      <div class="image view view-first">
                        <iframe width="600" height="315" src="{{ $video->url_link }}">
                        </iframe>


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

                        <p>Title:  {{ $video->title }} </p><hr>
                        <p>Video Link:  {{  $video->url_link  }}</p><hr>
                        <p>Created:  {{ $video->created_at }}</p><hr>
                      </div>



                     {{-- show form ending --}}

{{-- edit modal start --}}


                     <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="varyModalLabel">Edit Video Link</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                @include('alerts.success')
                                <form action="/video/{{ $video->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <div class="row">

                                          <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label">Video Title</label>
                                            @error('title')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="title" value ="{{ $video->title }}" class="form-control" id="cat" >
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="recipient-name" class="col-form-label"> Video Link</label>
                                            @error('url_link')
                                            <div style="color: red;">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <input type="text" name="url_link" value ="{{ $video->url_link }}" class="form-control" id="cat" >
                                        </div>



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
