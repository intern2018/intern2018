<<<<<<< HEAD
=======
@extends('inc.nav')

>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<<<<<<< HEAD
=======
        <script src="{{ asset('/css/app.css') }}" defer></script>
        <script src="{{ asset('/js/app.js') }}" defer></script>
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<<<<<<< HEAD
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background: #f0f2f2">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div  class="container" style="background: #fff">
=======
    @section('content')
    <body>
       
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
<<<<<<< HEAD
             </div>
            <div class="content">
                <div class="title m-b-md">
                   Inventory Management System
                </div>
            </div>
        </div>
=======

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a><hr> <br>
                    <div class="container">
                     

                    </div>
                </div>
            </div>
        </div>
        @endsection
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d
    </body>
</html>
