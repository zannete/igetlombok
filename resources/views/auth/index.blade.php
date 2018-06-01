@extends('layouts.app')

@section('content')
  <section style="background: url('{{ asset("/assets/images/bg-1.jpg") }}'); background-attachment: fixed">
    @include("components.topBar")
    <div class="clearfix"></div>
    @include("components.menuBar")
    
    <div class="row">
      <div class="container clear-padding">
        <div class="col-md-12 single-search">
          <h2 class="text-center">
            <span class="text-uppercase">Login / Register</span> <br/>
            <small style="color: #fff">Manage Your Account</small>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="container" style="padding-top: 30px; padding-bottom: 30px;">
    <div class="row">
      <div class="col-md-12 clear-padding">
        @php
          $errorMessages = array();
          if($errors->has("email")){
            $errorMessages[] = $errors->first("email");
          }
          if($errors->has("password")){
            $errorMessages[] = $errors->first("password");
          }
        @endphp

        @foreach($errorMessages as $message)
          <div class="alert alert-danger">
            <strong>Error!</strong> {{ $message }}
          </div>
        @endforeach
      </div>
      <div class="col-md-6 col-xs-12 login-form" style="padding-left: 0px">
        <h4 class=""><strong>Login</strong></h4>

        {!! Form::open(["action" => "AuthenticationController@login", "method" => "POST"]) !!}
          @csrf
          {{ Form::label("email", "Email") }}
          <div class="input-group">
            {{ Form::email("email", "", ["placeholder" => "yourname@example.com", "class" => "form-control", "required" => true]) }}
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          </div>
          {{ Form::label("password", "Password") }}
          <div class="input-group">
            {{ Form::password("password", ["placeholder" => "secret", "class" => "form-control", "required" => true]) }}
            <span class="input-group-addon"><i class="fa fa-eye fa-fw"></i></span>
          </div>
          <button type="submit">LOGIN</button>
        {!! Form::close() !!}
      </div>
      <div class="col-md-6 col-xs-12 sign-up-form" style="padding-right: 0px;">
        <h4>Sign Up</h4>
        {!! Form::open(["action" => "AuthenticationController@register", "method" => "POST"]) !!}
          @csrf
          {{ Form::label("email", "Email") }}
          <div class="input-group">
            {{ Form::email("email", "", ["class" => "form-control", "placeholder" => "yourname@example.com", "required" => true]) }}
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          </div>
          {{ Form::label("password", "Password") }}
          <div class="input-group">
            {{ Form::password("password", ["class" => "form-control", "placeholder" => "secret", "required" => true]) }}
            <span class="input-group-addon"><i class="fa fa-eye fa-fw"></i></span>
          </div>	
          {{ Form::label("password_confirmation", "Confirm Password") }}
          <div class="input-group">
            {{ Form::password("password_confirmation", ["class" => "form-control", "placeholder" => "Retype password"]) }}
            <span class="input-group-addon"><i class="fa fa-eye fa-fw"></i></span>
          </div>	
          <button type="submit">REGISTER ME</button>
        {!! Form::close() !!}
      </div>
    </div>
  </section>
@endsection
