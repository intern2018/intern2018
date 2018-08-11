<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo" style="border-right: 0px;height:100px;width:100%;text-align: left;border-bottom: 1px inset #F9FAFC;">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini">Adama Science and Technology University</span>
              <!-- logo for regular state and mobile devices -->
              <span class="a"><img height="80px" src="{{asset('images/adm.png')}}" alt="Astu icon">
             </span>

            </a>

         </header>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
         <footer class="main-footer" style="
         webkit-transition: -webkit-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
          -moz-transition: -moz-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
          -o-transition: -o-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
          transition: transform 0.3s ease-in-out, margin 0.3s ease-in-out;
          margin-left: 0px;
          z-index: 820;border-left: 0px; position: fixed; width: 100%; height: 5%; bottom: 0px; ">
    <!-- To the right -->
        <div class="pull-right hidden-xs">
          version 1.0
        </div>
    <!-- Default to the left -->
         <strong>Copyright &copy; 2018 <a href="#">K97H</a>.</strong> All rights reserved.
      </footer>
</body>
</html>
