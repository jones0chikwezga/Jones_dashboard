@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog Preview <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <form action="/blogs/{{ $blog_details->id }}" method="post">
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
                        <img style="height:500%;" width="30%" src='/{{ $blog_details->image }}' alt="{{ $blog_details->image }}" />
                        <div class="mask">
                          <p> <a href="{{ url($blog_details->image) }}" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open Document</b> </a> </p>
                          <div class="tools tools-bottom">
                            <a href="{{ url($blog_details->image) }}" target="_blank"><i class="fa fa-eye"></i></a>
                          </div>
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
                      <p>Blog Title: {{ $blog_details->blog_title }} </p> <hr>
                      <p>Category: <i class="fa fa-tag"></i>  {{ $blog_details->category }} </p> <hr>
                      <p>Content:  {!! $blog_details->content !!} </p><hr>
                      <p>Created:  {{ $blog_details->created_at }} </p><hr>
                     
                    </div>

                    
  
                     {{-- show form ending --}}

{{-- edit modal start --}}


                     <div class="modal fade bs-example-modal-lg" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="varyModalLabel">Edit blog</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                              @include('alerts.success')
                              <form action="/blogs/{{ $blog_details->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    <div class="row">

                                      <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Blog Title</label>
                                        @error('blog_title')
                                        <div style="color: red;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <input type="text" value="{{ $blog_details->blog_title }}" name="blog_title" class="form-control" id="cat" >
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
                                                <option value="{{ $blog_details->category }}">{{ $blog_details->category }}</option>
                                                @foreach ($category as $cat)
                                                
                                                    <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                                    
                                                 @endforeach
                                            </select>
                                        </div>

                                      <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Content</label>
                                        @error('content')
                                        <div style="color: red;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <textarea name="content" value = {{ $blog_details->content }} class="form-control" id="cat">{{ $blog_details->content }}</textarea>
                                    </div>

                                   
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