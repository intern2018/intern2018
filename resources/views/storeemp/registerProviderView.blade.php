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
              <h5 class="card-header">Provider Register Form</h5>
              <div class="card-body">
                <form method="post" action="{{action('ItemsController@registerProvider')}}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <div class="row">
                    <div class="col-9">
                      <div class="form-group">
                        <label >የአቅራቢው ስም(Provider Name) :</label>
                        <input type="text" class="form-control" placeholder="Provider Name" id="providerName" name="providerName">
                      </div>
                      <div class="form-group">
                        <label >አድራሻ(Address) :</label>
                        <input type="text" class="form-control" placeholder="Address" id="address" name="address">
                      </div>
                      <div class="form-group">
                        <label >ኢ-ሜይል(E-mail) :</label>
                        <input type="text" class="form-control" placeholder="E-mail" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <label >ስልክ ቁጥር(Phone) :</label>
                        <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
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