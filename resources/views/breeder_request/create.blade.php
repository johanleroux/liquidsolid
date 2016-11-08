@extends('layouts.obaju')
@section('title', 'Apply For Breeder | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('breeder_request_create') !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h1>Apply For Breeder!</h1>
          <hr>
          {!! Form::open(['action' => 'BreederRequestsController@store', 'files' => true]) !!}
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Kennel Name']) }}
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                {{ Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location']) }}
                @if ($errors->has('location'))
                  <span class="help-block">
                    <strong>{{ $errors->first('location') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                {{ Form::file('file[]', ['class' => 'form-control', 'multiple' => true]) }}
                @foreach ($errors->get('file.*') as $message)
                  <span class="help-block">
                    <strong>{{ $message[0] }}</strong>
                  </span>
                @endforeach
              </div>

              <div class="form-group">
                {{ Form::button('Apply For Breeder', ['class' => 'btn btn-primary', 'type' => 'Submit']) }}
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                {{ Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'rows' => 7]) }}
                @if ($errors->has('notes'))
                  <span class="help-block">
                    <strong>{{ $errors->first('notes') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  @endsection
