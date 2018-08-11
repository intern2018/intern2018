
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Home</title>


   <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

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
              <li class="dropdown user user-menu"><br>
                <p class="dropdown-toggle" data-toggle="dropdown">
                  <img height="160px" width="160px" class="user-image" src="{{ asset('images/user4-128x128.jpg')}}" alt="Small">
                     <span class="hidden-xs">
                      <small>
                            Welcome User
                        </small>
                     </span>
                </p>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                  <i class="fa fa-gears"></i>
                </a>

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
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        
      </div>

      <div class="user-panel">
        
      </div>
      <div class="user-panel">
        
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <main class="py-4">
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
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">K97H</a>.</strong> All rights reserved.
  </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>