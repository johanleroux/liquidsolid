@extends('layouts.default')
@section('title', 'Login')

  @section('content')
    <section id="form">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form">
              <h2>Login to your account</h2>
              <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <input type="email" name="email" placeholder="Email Address" />
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
                <input type="password" name="password" placeholder="Password" />
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
                <span>
                  <input type="checkbox" class="checkbox">
                  Keep me signed in
                </span>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
            </div><!--/login form-->
          </div>
          <div class="col-sm-1">
            <h2 class="or">OR</h2>
          </div>
          <div class="col-sm-4">
            <div class="signup-form"><!--sign up form-->
              <h2>New User Signup!</h2>
              <form role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Name" />
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
                <input type="email" name="email" placeholder="Email Address" />
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
                <input type="password" name="password" placeholder="Password" />
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
                <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                @endif
                <button type="submit" class="btn btn-default">Signup</button>
              </form>
            </div><!--/sign up form-->
          </div>
        </div>
      </div>
    </section><!--/form-->
  @endsection
