@extends('layouts.app')

@section('content')


<div class="container">
  @include('AdminMenu')
    <div class="row">
   
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
             
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                </div>


            </div>
             <img  src="{!! asset('/assets/images/roads_quote.jpg')!!}" style="width: 100%;">
        </div>
    </div>
</div>
@endsection
