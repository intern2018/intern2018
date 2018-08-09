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
        <div class="wrapper">
          @include('includes.sidebar')
            <div class="container">
                <div class="row">
                    <div class="col-12 ml-5 mt-4 pt-4">
                        <div class="card mt-4">
                            <div class="card-body text-left">
                                <h5 class="card-header text-center">table</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mt-5">
                                            <thead>
                                            <tr>
                                                <th rowspan="2">ተቁ.</th>
                                                <th rowspan="2">የእቃው ዝርዝር</th>
                                                <th rowspan="2">ፒን</th>
                                                <th rowspan="2">የፋብሪካ ቁጥር</th>
                                                <th colspan="2">FAIRR ማውጫ ሠነድ</th>
                                                <th rowspan="2">መለኪያ</th>
                                                <th rowspan="2">ብዛት</th>
                                                <th rowspan="2">ጠ/ዋጋ</th>
                                            </tr>
                                            <tr>
                                                <td>No.</td>
                                                <td>Date</td>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
        
        
    

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html>
