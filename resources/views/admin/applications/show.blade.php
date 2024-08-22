@extends('layouts.app')


@section('content')

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Application Preview <small></small></h2>
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
                  <div class="col-md-100">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="height:500%;" src='{{ asset('dash/images/pdf.png') }}' alt="application" />
                        <div class="mask">
                          <p> <a href="{{ url($application->cv) }}" target="_blank"> <b style="font-size: 24px; color:aliceblue">Open CV</b> </a> </p>
                          <div class="tools tools-bottom">
                            <a href="{{ url($application->cv) }}" target="_blank"><i class="fa fa-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Position:  {{ $application->position }} </p>
                        <p>Applied on:  {{ $application->created_at }}</p><hr>
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
                        <form action="/application/{{ $application->id }}" method="post">
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
                      <p>Applicant fullname:  {{ $application->name }} </p> <hr>
                      <p>Applicant email: <a href="mailto:{{ $application->email }}"> {{ $application->email }}</a>  </p><hr>
                      <p>Applicant phone: <a href="tel:{{ $application->phone }}">{{ $application->phone }}</a>  </p><hr>
                      <p>Curricurum Vitae: <a href="/{{ $application->cv }}" target="_blank"> view </a>  </p><hr>
                      <p>Application Letter:<a href="/{{ $application->cos }}" target="_blank"> view </a>  </p><hr>
                     
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