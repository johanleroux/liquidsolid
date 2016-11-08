@extends('layouts.obaju')
@section('title', 'Review Breeder Request | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('breeder_request_show', $request) !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h1>Review Breeder Request!</h1>
          <hr>
          <h3>
            Kennel: {{ $request->name }}
            <a class="btn btn-xs btn-success" href="{{ action('BreederRequestsController@review', ['id' => $request->id, 'choice' => 1])}}">Accept</a>
            <a class="btn btn-xs btn-danger" href="{{ action('BreederRequestsController@review', ['id' => $request->id, 'choice' => 0])}}">Reject</a>
          </h3>
          <h4>User:</h4> <p><a href="{{ action('UsersController@show', $request->user) }}">{{ $request->user->name }}</a></p>
          <h4>Location:</h4> <p>{{ $request->location }}</p>
          <h4>Notes:</h4> <p>{{ $request->notes }}</p> <br/>
          <hr>
          <h4>Attached files:</h4>
          @foreach($request->getMedia() as $file)
            <a target="_blank" href="{{ $file->getUrl() }}">{{ $file->name }} [{{ $file->humanReadableSize }}]</a> <br>
          @endforeach
        </div>
      </div>
    </div>
  @endsection
