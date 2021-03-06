@extends('layouts.master')
@section('sidebarmenu')
  @include('storeemp.sidebarmenu')
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card">
          <div class="card-body text-left">
            <h5 class="card-header">የእቃ ወይም የንብረት ወጪ ደረሰኝ</h5>
            <div class="card-body">
              <form action="#">
              <div class="row">
                <div class="col-9">
                  <div class="form-group">
                    <label for="property">የእቃው ወይም የንብረቱ አይነት ዝርዝር :</label>
                    <input type="text" class="form-control" placeholder="Detailed Description of Articles or property" id="detailed" name="detailed">
                  </div>
                  <div class="form-group">
                      <label for="model">ሞዴል :</label>
                      <input type="text" class="form-control" placeholder="Model" id="model" name="model">
                  </div>
                  <div class="form-group">
                    <label for="serie">ሴሪ :</label>
                    <input type="text" class="form-control" placeholder="Serie" id="serie" name="serie">
                  </div>
                  <div class="form-group">
                    <label for="unit price">ያአንዱ ዋጋ :</label>
                    <input type="number" class="form-control" placeholder="Unit Price" id="unit_price" name="unit_price">
                  </div>         
                  <div class="form-group">
                    <label for="quantity">ብዛት :</label>
                    <input type="number" class="form-control" placeholder="Quantity" id="quantity" name="quantity">
                  </div>
                </div>
                <div class="col-3">
                  <label for="text">ተከታታይ</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">ከ</span>
                    </div>
                    <input type="date" class="form-control" placeholder="From" id="from" name="from">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">እስከ</span>
                    </div>
                    <input type="date" class="form-control" placeholder="To" id="to" name="to">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>   
      </div>
    </div>
  </div>
</div>
@endsection