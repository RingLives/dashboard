<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RL-Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
  		@yield('db-login')
  </body>
</html>