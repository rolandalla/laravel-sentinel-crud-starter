@extends('frontLayout.app')
@section('title')
Sevendays Lunch Buffet
@stop
@section('styles')
@stop

@section('content')
 <!-- Navbar -->
    <nav class="navbar navbar-default navbar_first">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand brand_first" href="{{url('/')}}">
            <img alt="Brand" src="{{url('/')}}/frontend/img/sevendays-logo.png" class="img-responsive">
          </a>
        </div>
      
         <form class="form-inline navbar-right log-in"  method="POST" action="{{ url('login') }}">
          <p> {{trans('starter.login')}}</p>
          {!! csrf_field() !!}
          <div class="form-group">
            <label class="sr-only" for="InputEmail3">{{trans('starter.email_address')}}</label>
            <input type="email" class="form-control" id="InputEmail3" name="email" placeholder="{{trans('starter.email_address')}}" required>
          </div>
          <div class="form-group">
            <label class="sr-only" for="InputPassword3">{{trans('starter.passwort')}}</label>
            <input type="password" class="form-control" id="InputPassword3" name="password" placeholder="{{trans('starter.passwort')}}" required>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" class="check" value="on" name="remember" >{{trans('starter.remember_me')}} 
            </label>
          </div>
          <button type="submit" class="btn btn-default sign_btn"> {{trans('starter.anmelden')}} </button>
          <br>
          <a href="{{ url('password/reset') }}" class="forgot_pas">{{trans('starter.forgot_passwort')}}</a>
          @if ($errors->has('global'))
          <span class="help-block danger">
              <strong style="color:red" >{{ $errors->first('global') }}</strong>
          </span>
          @endif
        </form>
      </div>
    </nav>
    <!-- /. Navbar -->

    <!-- Kunde -->
    <div class="container-fluid kunde">
      <div class="row row_kunde">
          <div class="col-md-1">
          </div>
          <div class="col-md-10 col-md-9-kunde">
                  <div class="row text-center forg_pass">
                      <p>{{trans('starter.forget_password')}}</p>
                  </div>
                  <div class="row text-center email_forg_pass">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-2">
                      <p>{{trans('starter.email')}}</p>
                       <form class="form-horizontal login-form "  method="POST" action="{{ url('password/email') }}">
                       {!! csrf_field() !!}
                          @if ($errors->has('global'))
                          <span class="help-block">
                              <strong style="color:red" >{{ $errors->first('global') }}</strong>
                          </span>
                          @endif
                        <input type="email" class="form-control sub" placeholder="{{trans('starter.email')}}" name="email" value="{{ old('email') }}">
                         @if ($errors->has('email'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <button type="submit" class="btn btn-default sub sub_forg">{{trans('passwords.reset_button')}}</button>
                      </form>
                    </div>
                    <div class="col-md-5">
                    </div>  
                  </div>
          </div>
          <div class="col-md-1">
          </div>
      </div>    
    </div>
    <!-- /.Kunde -->
@endsection

@section('scripts')


@endsection