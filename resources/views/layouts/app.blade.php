<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Google tag (gtag.js) -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-BP872SWEL0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BP872SWEL0');
</script>  --}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dreamcode | ADMIN</title>

    <!-- Bootstrap -->
    <link href="{{ asset('dash/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('dash/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('dash/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('dash/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('dash/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('dash/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">

    <!-- Switchery -->
    <link href="{{ asset('dash/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('dash/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('dash/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    {{--  {{ asset('/dash/') }} --}}
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('/dash/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/dash/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/dash/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('/dash/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{ asset('/dash/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/dash/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/dash/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('/dash/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('/dash/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
        rel="stylesheet">
    {{-- tiny --}}
    {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}

    <script src="https://cdn.tiny.cloud/1/ysmi970frj7qtwbbxi53ojh7ipck32ro21q5stockpjymm0m/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <!-- Place the following <script>
        and < textarea > tags your HTML 's <body> -->
          <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
    </script>


      {{-- <script src="https://cdn.tiny.cloud/1/ysmi970frj7qtwbbxi53ojh7ipck32ro21q5stockpjymm0m/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Custom Theme Style -->
    <link href="{{ asset('dash/build/css/custom.min.css') }}" rel="stylesheet">

    <style>
        .mce-notification {
            display: none !important;
        }
    </style>

    {{-- toastr notification  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
       alpha/css/bootstrap.css"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title">
                            {{-- <i class="fa fa"></i> --}}
                            {{-- <img src="{{ asset('assets/img/logo.jpg') }}" style="width: 15em; height: 3em;"> --}}
                            <span>ADMIN</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('dash/images/img.png') }}" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ auth()->user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/user') }}"><i class="fa fa-users"></i> Users <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/blogs') }}"><i class="fa fa-clipboard"></i> Blogs <span
                                            class=""></span></a>

                                </li>

                                {{-- <li><a href="{{ url('/newz') }}"><i class="fa fa-globe"></i> News <span class=""></span></a>

                  </li> --}}

                                <li><a href="{{ url('/application') }}"><i class="fa fa-download"></i>Job Applications
                                        <span class=""></span></a>

                                </li>


                                <li><a href="{{ url('/volunteer') }}"><i class="fa fa-download"></i>Volunteering <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/messages') }}"><i class="fa fa-envelope"></i>Direct Messages
                                        <span class=""></span></a>

                                </li>

                                <li><a href="{{ url('/contactus') }}"><i class="fa fa-envelope"></i>Contact-us Messages
                                        <span class=""></span></a>

                                </li>

                                <li><a href="{{ url('/event') }}"><i class="fa fa-calendar"></i> Events <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/vacancy') }}"><i class="fa fa-bullhorn"></i> Vacancies <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/files') }}"><i class="fa fa-file"></i> Resources <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/gallerys') }}"><i class="fa fa-file"></i> Gallery <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/causes') }}"><i class="fa fa-bullhorn"></i> Causes <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/partners') }}"><i class="fa fa-users"></i> Partners <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/teams') }}"><i class="fa fa-users"></i> Team <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/testimonials') }}"><i class="fa fa-users"></i> Testimonial
                                        <span class=""></span></a>

                                </li>

                                <li><a href="{{ url('/case_tracker_page') }}"><i class="fa fa-users"></i> Cases <span
                                            class=""></span></a>

                                </li>

                                {{-- <li><a href="{{ url('/video') }}"><i class="fa fa-cog"></i> Videos <span class=""></span></a>

                  </li> --}}

                                <li><a href="{{ url('/category') }}"><i class="fa fa-list"></i> Categories <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/allprograms') }}"><i class="fa fa-list"></i> Programs <span
                                  class=""></span></a>

                      </li>

                                <li><a href="{{ url('/stats') }}"><i class="fa fa-list"></i> Stats <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/slide') }}"><i class="fa fa-cog"></i> Slideshows <span
                                            class=""></span></a>

                                </li>

                                <li><a href="{{ url('/program') }}"><i class="fa fa-cog"></i> What we do <span
                                            class=""></span></a>

                                </li>


                                <li><a href="{{ url('/settings') }}"><i class="fa fa-cog"></i> Settings <span
                                  class=""></span></a>

                      </li>








                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>

                        <a onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
                            data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>

                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('dash/images/img.png') }}"
                                        alt="">{{ auth()->user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    {{-- <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a> --}}
                                    {{-- <a class="dropdown-item"  href="javascript:;">Help</a> --}}
                                    <a class="dropdown-item"
                                        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">1</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href = "{{ url('/messages') }}">
                                            <span class="image"><img src="{{ asset('dash/images/img.png') }}"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>admin</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                all the system notifications will be displayed here...
                                            </span>
                                        </a>
                                    </li>



                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item" href="{{ url('/messages') }}">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                @yield('content')

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Admin <a href="#">Dreamcode</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <!-- jQuery -->
    <script src="{{ asset('dash/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('dash/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('dash/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('dash/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('dash/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('dash/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- morris.js -->
    <script src="{{ asset('dash/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/morris.js/morris.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('dash/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('dash/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('dash/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('dash/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dash/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('dash/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('dash/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('dash/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('dash/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('dash/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('dash/vendors/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('dash/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


    <!-- Datatables -->
    <script src="{{ asset('/dash/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('/dash/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/dash/vendors/pdfmake/build/vfs_fonts.j') }}s"></script>




    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });
    </script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('dash/build/js/custom.min.js') }}"></script>

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>



</body>

</html>
