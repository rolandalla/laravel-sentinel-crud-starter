@extends('frontLayout.app')
@section('title')
Starter
@stop
@section('styles')
@stop

@section('content')
 <div class = "container">
  <div class="wrapper">
    @if (Session::has('message'))
     <div class="alert alert-{{(Session::get('status')=='error')?'danger':Session::get('status')}} " alert-dismissable fade in id="sessions-hide">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>{{Session::get('status')}}!</strong> {!! Session::get('message') !!}
      </div>
    @endif 
    {{ Form::open(array('url' => route('password.email'), 'class' => 'form-horizontal form-signin','files' => true)) }}

            <div class="form-group row justify-content-center {{ $errors->has('email') ? 'has-error' : ''}} ">
              <div class="col-12 col-lg-4">
                {!! Form::email('email', null, ['class' => 'form-control edit_re','id'=>'Email-text-input-re','required'=>'required','oninvalid'=>"this.setCustomValidity('Dieses Feld wird benötigt')" , 'oninput'=>"setCustomValidity('')",'placeholder '=>'Email*']) !!}
                  {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group row justify-content-center">
              <div class="col-12 col-lg-4 einkaufen_pch einkaufen_chtp">
                <button type="submit" class="btn btn-primary btn_lo_ein">Reset Password</button>
              </div>
            </div>

     {{ Form::close() }} 
  </div>
</div>
@endsection

@section('scripts')


@endsection