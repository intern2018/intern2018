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
              <h5 class="card-header">Item Inserting Form</h5>
              <div class="card-body">
                <form method="post" action="{{action('ItemsController@registerItem')}}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <div class="row">
                    <div class="col-9">
                      <div class="form-group">
                        <label >የእቃው ስም(Item Name) :</label>
                        <input type="text" class="form-control" placeholder="Item Name" id="itemName" name="itemName">
                      </div>
                      <div class="form-group">
                          <label >ብዛት(Quantity) :</label>
                          <input type="number" class="form-control" placeholder="Quantity" id="itemQuantity" name="itemQuantity">
                      </div>
                      <div class="form-group">
                        <label for="serie">የእቃው አይነት(Item Type) :</label>
                        <input type="text" class="form-control" placeholder="Item Type" id="itemType" name="itemType">
                      </div>
                      <div class="form-group">
                        <label >ምድብ(Catagory) :</label>
                        <input type="text" class="form-control" placeholder="Catagory" id="catagory" name="catagory">
                      </div>
                      <div class="form-group">
                        <label >መለኪያ(Unit) :</label>
                        <input type="text" class="form-control" placeholder="Unit" id="unit" name="unit">
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