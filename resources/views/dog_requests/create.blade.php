@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">Create new Request</div>

        <div class="panel-body">
          {!! Form::open(['action' => 'DogRequestsController@store']) !!}
          @include('dog_requests._form')

          {!! Form::label('request', 'Gender: ', ['class' => 'control-label']) !!}
          {!! Form::radio('gender', '0', false) !!}Male
          {!! Form::radio('gender', '1', false) !!}Female
          <br/>

          {!! Form::label('request', 'Breed: ', ['class' => 'control-label']) !!}
          {!! Form::text('breed', null, ['class' => 'form-control'])  !!}

          {!! Form::label('request', 'Location: ', ['class' => 'control-label']) !!}
          {!! Form::text('location', null, ['class' => 'form-control']) !!}

          {!! Form::label('request', 'Minimum Price: ', ['class' => 'control-label']) !!}
          {!! Form::text('price_range_low', null, ['class' => 'form-control'])  !!}

          {!! Form::label('request', 'Maximum Price: ', ['class' => 'control-label']) !!}
          {!! Form::text('price_range_high', null, ['class' => 'form-control']) !!}

          {!! Form::label('request', 'Additional Notes: ', ['class' => 'control-label']) !!}
          {!! Form::text('notes', null, ['class' => 'form-control'])  !!}


          {!! Form::submit('Create Request') !!}
          {!! Form::close() !!}

          @include('errors.list')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
