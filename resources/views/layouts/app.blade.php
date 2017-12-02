<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/paper-dash/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dash/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dash/paper-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    <!--  Fonts and icons -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/paper-dash/themify-icons.css') }}" rel="stylesheet">

</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

      <!--
      Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
      Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
              <div class="logo">
                  <a href="{{ route('home') }}" class="simple-text">
                  {{ config('app.name', 'Laravel') }}
                  </a>
              </div>
              @include('layouts.partials.sidebar')
        </div>
      </div>

      <div class="main-panel">
      <nav class="navbar navbar-default">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar bar1"></span>
                          <span class="icon-bar bar2"></span>
                          <span class="icon-bar bar3"></span>
                      </button>
                      <a class="navbar-brand" href="#">Template</a>
                  </div>
                  <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li>
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="ti-panel"></i>
                  <p>Stats</p>
                              </a>
                          </li>
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <i class="ti-bell"></i>
                                      <p class="notification">5</p>
                    <p>Notifications</p>
                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Notification 1</a></li>
                                  <li><a href="#">Notification 2</a></li>
                                  <li><a href="#">Notification 3</a></li>
                                  <li><a href="#">Notification 4</a></li>
                                  <li><a href="#">Another notification</a></li>
                                </ul>
                          </li>
              <li>
                              <a href="#">
                  <i class="ti-settings"></i>
                  <p>Settings</p>
                              </a>
                          </li>
                      </ul>

                  </div>
              </div>
          </nav>

          @yield('content')

          <footer class="footer">
              <div class="container-fluid">
                  <nav class="pull-left">
                      <ul>
                          <li>
                              <a href="#">
                                  {{--  Home  --}}
                              </a>
                          </li>
                      </ul>
                  </nav>
          <div class="copyright pull-right">
                      &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">MyCorp</a>
                  </div>
              </div>
          </footer>

      </div>
  </div>
      

  <!-- Scripts -->
  <script src="{{ asset('js/paper-dash/jquery-1.10.2.js') }}"></script>
  <script src="{{ asset('js/paper-dash/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/paper-dash/bootstrap-checkbox-radio.js') }}"></script>
  <script src="{{ asset('js/paper-dash/chartist.min.js') }}"></script>
  <script src="{{ asset('js/paper-dash/bootstrap-notify.js') }}"></script>
  <script src="{{ asset('js/paper-dash/paper-dashboard.js') }}"></script>
  <script src="{{ asset('js/paper-dash/demo.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
