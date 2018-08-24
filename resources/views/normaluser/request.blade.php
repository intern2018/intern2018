@extends('layouts.master')
@section('sidebarmenu')
  @include('normaluser.sidebarmenu')
@endsection
@section('content')
<div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        <div class="card">
            <div class="card-body text-left">
              <h5 class="card-header">request form</h5>
              <div class="card-body">
                <form action="#">
                <div class="row">
                  <div class="col-9">
                    <div class="form-group">
                      <label for="property">የእቃው አይነት(Item type) :</label>
                      <input type="text" class="form-control" placeholder="Item type" id="itemtype" name="itemtype">
                    </div>
                    <div class="form-group">
                        <label for="model">መለኪያ(Unit) :</label>
                        <input type="text" class="form-control" placeholder="Unit" id="unit of measurment" name="unit">
                    </div>
                    <div class="form-group">
                      <label for="serie">ብዛት(Quantity) :</label>
                      <input type="number" class="form-control" placeholder="Quantity" id="quantity" name="quantity">
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