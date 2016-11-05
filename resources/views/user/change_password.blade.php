@extends('layouts.obaju')
@section('title', 'Home')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('account_change_password') !!}
      </div>
      <div class="col-md-3">
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Account Section</h3>
          </div>

          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="{{ action('UsersController@show', Auth::user()->id) }}"><i class="fa fa-user"></i> My account</a></li>
              <li><a href="{{ action('UsersController@editPassword') }}"><i class="fa fa-wrench"></i> Change Password</a></li>
              <li><a href="{{ action('UsersController@edit', Auth::user()->id) }}"><i class="fa fa-pencil"></i> Edit Profile</a></li>
              <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="box">
          <h2>Change password</h2>
          <hr>
          {!! Form::open(['action' => 'UsersController@updatePassword']) !!}
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="password" class="form-control" name="password_old" placeholder="Old Password" />
                @if ($errors->has('password_old'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_old') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" />
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
@endsection
