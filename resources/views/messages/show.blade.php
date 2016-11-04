@extends('layouts.default')
@section('title', $thread->subject . ' | LiquidSolid')
@section('content')
  <div class="container">
    <div class="row">
      <div class="signup-form">
        <div class="col-md-12">
          <h3>{{ $thread->subject }}</h3>
          @foreach($thread->messages as $message)
            <p><b>{{ $message->user->name }}</b> [{{ $message->created_at }}] - {{ $message->body }}</p>
          @endforeach

          <h3>Reply to message</h3>
          {!! Form::open(['action' => ['MessagesController@update', $thread->id], 'method' => 'put']) !!}
          {!! Form::textarea('message', null, ['placeholder' => 'Message']) !!}
          <br>
          <br>
          {!! Form::button('Send Message', ['class' => 'btn btn-default', 'type' => 'Submit']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <br>
@endsection
