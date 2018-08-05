@extends('inc.nav')
@section('content')
<style>
        label{
            display: flex;
            position: relative;
            margin: 1em;
            padding: 1em;
            width:23em;
            background-color:aquamarine;
          }
          number, text{
            font:inherit;
            width: 50em;
            margin-left:auto;
            flex:auto;
            box-sizing:border-box;
          }

</style>
<div class="container">

        {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="col-md-4 offset-2" >
            {{Form::label('No.', 'NO.')}}
            {{Form::number('No.','',['class'=>'form-control','placeholder'=>'No.'])}}
        </div>
        <div class="col-md-4 offset-2">
                {{Form::label('item_type', 'Item type')}}
                {{Form::text('item_type','',['class'=>'form-control','placeholder'=>'item type'])}}
            </div>
            <br>
            <div class="col-md-4 offset-2">
              {{Form::label('No.', 'UNIT')}}
              <select class="custom-select mt-3">

                      <option selected> Unit </option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>

            </div>



        <div class="col-md-4 offset-2">
            {{Form::label(' quantity', 'quantity')}}
            {{Form::number(' quantity','',['class'=>'form-control','placeholder'=>' Quantity'])}}
        </div>

          <div class="col-md-4 offset-2">
            {{Form::submit('submit',['class'=>'btn btn-primary'])}}

          </div>

      {!! Form::close() !!}
</div>

@endsection
