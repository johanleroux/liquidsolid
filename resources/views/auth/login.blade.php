@extends('layouts.obaju')
@section('title', 'Login')

  @section('content')
    <div class="container">
      <div class="col-md-6">
        <div class="box">
          <h1>New account</h1>
          <p class="lead">Not our registered customer yet?</p>
          <hr>
          <form role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Full Name" />
              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email Address" />
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" />
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
              @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <h1>Login</h1>
          <p class="lead">Already our customer?</p>
          <hr>
          <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email Address" />
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" />
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </section><!--/form-->
  @endsection
