@extends('layouts.obaju')
@section('title', 'Home')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('account_edit') !!}
      </div>
      <div class="col-md-3">
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Account Section</h3>
          </div>

          <div class="panel-body">
            @include('user._sidebar')
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="box">
          <h3>Personal Details</h3>
          <hr>
          {!! Form::model(Auth::user(), ['action' => ['UsersController@update', Auth::user()], 'method' => 'put']) !!}
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Full Name</label>
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Email Address</label>
                {{ Form::email('email', null, ['class' => 'form-control']) }}
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="company">Company</label>
                {{ Form::text('company', null, ['class' => 'form-control']) }}
                @if ($errors->has('company'))
                  <span class="help-block">
                    <strong>{{ $errors->first('company') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="street">Street Address</label>
                {{ Form::text('street', null, ['class' => 'form-control']) }}
                @if ($errors->has('street'))
                  <span class="help-block">
                    <strong>{{ $errors->first('street') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  @endsection
