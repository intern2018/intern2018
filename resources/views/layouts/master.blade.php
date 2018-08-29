
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Home</title>
  

   <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrapselect.css') }}">
</head>

<body class="hold-transition sidebar-mini skin-black-light">

 <div class="wrapper">
  
  <!-- Main Header -->
<header class="main-header" >
  <!-- Logo -->
    <a href="#" class="logo" style="height: 80px;">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img style="height: 80px; width: 100%;" src="{{ asset('images/logo.png')}}"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img style="height: 80px; width: 100%;" src="{{ asset('images/adm.png')}}"></span>
    </a>
  <nav class="navbar navbar-static-top">
   
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
     <div class="navbar-custom-menu" style="display: inline-block;">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                
                  
              <p class="dropdown-toggle" data-toggle="dropdown">
                <img height="160px" width="160px" class="user-image" src="{{ asset('images/user4-128x128.jpg')}}" alt="Small">
                   <span class="hidden-xs">
                   @guest()
                    <small>
                          Welcome User
                      </small>
                      @endguest
                      <small>
                      Welcome  {{  auth()->user()->name }} 
                      </small>
                   </span>
                  
              </p>
              <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">


                        <img width="150px" height="150px" class="img-circle" src="{{ asset('images/user4-128x128.jpg')}}" alt="Small img 20170303 180515">

                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">

                    </div>
                    <div class="col-xs-4 text-center">

                    </div>
                    <div class="col-xs-4 text-center">
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a class="btn btn-default btn-flat" href="/auth/edit">Account Settings</a>
                      <br>

                    </div>
                    <div class="pull-right">
                       <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>

                </ul>
              
            </li>
          </ul>
        </div>
  </nav>
</header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar mt-5" >
  
      <!-- Sidebar Menu -->
      @yield('sidebarmenu')
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('header')
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <main class="py-4">
          @include('inc.messages')
          @yield('content')
      </main>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     version 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> <a href="#">K97H</a>.</strong> All rights reserved.
  </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrapselect.js') }}"></script>
<script type="text/javascript">
  $("#itemName").select2();
  $("#providerName").select2();
</script>
</body>
</html>