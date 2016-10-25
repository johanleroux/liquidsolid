@extends('layouts.default')

@section('content')
  <div class="container">
          <h1>{{ $thread->subject }}</h1>

          @if(Session::has('flash_message'))
              <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
          @endif

          @foreach($thread->messages as $message)
              <div class="container">
                <i class="fa fa-user" aria-hidden="true"></i>
                  <a class="pull-left" href="#">
                  </a>
                  <div class="media-body">
                      <h5 class="media-heading">{{ $message->user->name }}</h5>
                      <p>{{ $message->body }}</p>
                  </div>
              </div>
          @endforeach

          <h2>Reply to message</h2>
          {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}

          <div class="form-group">
              {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
          </div

          <div class="form-group">
              {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
          </div>
          {!! Form::close() !!}
  </div>

@endsection
