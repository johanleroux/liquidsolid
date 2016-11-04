@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="signup-form">
      <div class="col-md-12">
        <h3>{{ $thread->subject }}</h3>
        @foreach($thread->messages as $message)
        @if($message->user->id == Auth::user()->id)
        <div class = "media">
          <a class = "pull-left" href = "#">
            <img alt="64x64" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px; float: left;" src="http://placehold.it/64x64">
          </a>

          <div class = "media-body">
            <h4 class = "media-heading"><b>{{ $message->user->name }}</b></h4>
            {{ $message->body }}
          </div>

        </div>
        @else
        <div class = "media">
          <a class = "pull-right" href = "#">
            <img alt="64x64" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px; float: left;" src="http://placehold.it/64x64">
          </a>

          <div class = "media-body pull-right">
            <h4 class = "media-heading"><b>{{ $message->user->name }}</b></h4>
            {{ $message->body }}
          </div>
        </div>
        @endif
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
