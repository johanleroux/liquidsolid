@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">Show Request</div>

        <div class="panel-body">
          {!! Form::open(['action' => 'DogRequestsController@index']) !!}
          <table class="table table-striped">
            <tr>
              <th>Gender</th>
              <th>Breed</th>
              <th>Location</th>
              <th>Min Price</th>
              <th>Max Price</th>
              <th>Notes</th>
            </tr>
            <tr>
              <td>{{ $dog_request->gender }}</td>
              <td>{{ $dog_request->breed }}</td>
              <td>{{ $dog_request->location }}</td>
              <td>R {{ $dog_request->price_range_low }}</td>
              <td>R {{ $dog_request->price_range_high }}</td>
              <td>{{ $dog_request->notes }}</td>
            </tr>
          </table>
          <a href="{{ action('DogRequestsController@index') }}">Back</a>
          {!! Form::submit('Back') !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
