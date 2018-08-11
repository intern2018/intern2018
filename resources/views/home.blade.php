<<<<<<< HEAD
@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
=======
@extends('welcome')

@section('content')
    <body>
        <div class="container">
            <h1>Hello this is InventorySystem home page.</h1>
        </div>
    </body>
@endsection
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d
