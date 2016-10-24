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
            <form action="#">
              <input type="text" placeholder="Name"/>
              <input type="email" placeholder="Email Address"/>
              <input type="password" placeholder="Password"/>
              <input type="password" placeholder="Confirm Password"/>
              <button type="submit" class="btn btn-default">Signup</button>
            </form>
          </div><!--/sign up form-->
        </div>
      </div>
    </div>
  </section><!--/form-->

@endsection
