@extends('layouts.app')

@section('content')

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

        <title></title>
    </head>
    <script>
 

   setTimeout(function(){
            //alert("heba");
   
            $.get( "{{route('check_back')}}", function( response ) {

              if (response.login==0) {
                      // alert(response.login);
                        document.location.href="{!! url('/login') !!}";
                    }
                    else
                    {
                     // alert(response.login);
                    $("body").removeClass("hide");
                    }
 
}, "json");
}, 500);
    </script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change User Name</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('changeUserName') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                            <label for="old_password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="old_password" type="password" class="form-control" name="old_password" required>

                                @if ($errors->has('old_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('new_user_name') ? ' has-error' : '' }}">
                            <label for="new_user_name" class="col-md-4 control-label">New User Name</label>

                            <div class="col-md-6">
                                <input id="new_user_name" type="text" class="form-control" name="new_user_name" required>

                                @if ($errors->has('new_user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
