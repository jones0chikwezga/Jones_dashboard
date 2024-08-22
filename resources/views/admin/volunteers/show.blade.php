@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Volunteer Details Preview <small></small></h2>
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

                  
                   
                  {{-- media gallery start --}}
                  {{-- <div class="col-md-100">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="height:500%;" src='{{ asset('dash/images/pdf.png') }}' alt="{{ $events->image }}" />
                        <div class="mask">
                          <p> <a href="{{ url($events->image) }}" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open Document</b> </a> </p>
                          <div class="tools tools-bottom">
                            <a href="{{ url($events->image) }}" target="_blank"><i class="fa fa-eye"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}

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
                      <h2>Details <small></small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <form action="/volunteer/{{ $volunteer->id }}" method="post">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;margin-top:8px;margin-right:30px;" type="submit"><i style="color: white" class="icon-trash"></i>Delete</button>
                          </form> 
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
                      <p>From:  {{ $volunteer->name }} </p> <hr>
                      <p>Email:   {{ $volunteer->email }} </p> <hr>
                      <p>Created:  {{ $volunteer->created_at }} </p><hr>
                      <p>Content:  {{ $volunteer->message }} </p><hr>
                      <br>
                      <a href="mailto:{{ $volunteer->email }}" class="btn btn-primary">send email</a>
                     
                    </div>

                    
  
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