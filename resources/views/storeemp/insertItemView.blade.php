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
              <h5 class="card-header">Insert Item Form</h5>
              <div class="card-body">
                <form method="post" action="{{action('ItemsController@insertItem')}}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <div class="row">
                    <div class="col-9">
                      <div class="form-group">
                        <label >ብዛት(Quantity) :</label>
                        <input type="number" class="form-control" placeholder="Quantity" id="quantity" name="quantity">
                      </div>
                      <div class="form-group">
                        <label >ያንዱ ዋጋ(Unit Price) :</label>
                        <input type="text" class="form-control" placeholder="Unit Price" id="unitPrice" name="unitPrice">
                      </div>
                      <div class="form-group">
                        <label >Reference Number :</label>
                        <input type="text" class="form-control" placeholder="Reference Number" id="referenceNO" name="referenceNo">
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