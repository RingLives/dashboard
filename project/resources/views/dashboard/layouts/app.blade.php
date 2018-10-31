<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('page_title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/dashboard/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/dashboard/css/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/dashboard/css/custom.min.css')}}" rel="stylesheet">
    <!-- easyautocomplte style -->
    <link href="{{ asset('assets/dashboard/js/easyautocomplte/easy-autocomplete.min.css')}}" rel="stylesheet">
    <!-- datepicker -->
    <link href="{{ asset('assets/dashboard/js/datepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

    <script type="text/javascript">
    var baseURL = '{{ url("/") }}';
  </script>
  
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('base_admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
             @include('dashboard.partials.menu-user.user-bar')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             @include('dashboard.partials.sidebar.side-bar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('dashboard.partials.sidebar-footer.sidebar-footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
          @include('dashboard.partials.header.top-navbar') 
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="background-color: #fff;">
            <div class="page-title">
              <div class="title_left">
                <h3>@yield('body_title')</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    @yield('body_title_section')
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          @yield('section')
        </div>
        <!-- /page content -->

        <!-- footer content -->
         @include('dashboard.partials.footer.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/dashboard/js/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/dashboard/js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/dashboard/css/nprogress/nprogress.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/dashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/ajax/confirmation/confirmSubmit.js') }}"></script>
    <!-- easyautocomplte -->
    <script src="{{ asset('assets/dashboard/js/easyautocomplte/jquery.easy-autocomplete.min.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('assets/dashboard/js/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/datepicker/bootstrap-datetimepicker.min.js') }}"></script>
  </body>
</html>
