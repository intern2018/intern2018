<!DOCTYPE html>
<html>
  <head>
    <title>issued</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    
  </head>
  <body>
        <div class="row">
          @include('includes.sidebar')
          <div class="container">
            <div class="row">
            <div class="col-4 offset-2 mt-5 pt-5">
                <div class="card mt-5">
                    <div class="card-body text-center">
                        <h5 class="card-title">እቃ</h5>
        
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
              
        <img src="a.png"  alt="HTML5 Icon" style="width:128px;height:128px;"></img>
        
    

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html>
