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
                <div class="col-7 offset-2 mt-4 pt-4">
                  <div class="card mt-4">
                    <div class="card-body text-left">
                      <h5 class="card-header">እቃ</h5>
                      <div class="card-body">

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">የእቃው ወይም የንብረቱ አይነት ዝርዝር</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Detailed Description of Articles or property" id="detailed" name="detailed">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">ሞዴል</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Model" id="model" name="model">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">ሴሪ</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Serie" id="serie" name="serie">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">ያንዱ ዋጋ</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Unit Price" id="unit_price" name="unit_price">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">ብዛት</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Quantity" id="quantity" name="quantity">
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-3 mt-4 pt-4">
                  <div class="card mt-4">
                      <div class="card-body text-left">
                        <h5 class="card-header">ተከታታይ</h5>
                        <div class="card-body">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">ከ</span>
                            </div>
                            <input type="text" class="form-control" placeholder="From" id="from" name="from">
                          </div>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">እስከ</span>
                            </div>
                            <input type="text" class="form-control" placeholder="To" id="to" name="to">
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

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html>
