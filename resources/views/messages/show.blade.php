@extends('layouts.obaju')
@section('title', $thread->subject)
  @section('content')
    <div class="container">
      <div class="col-md-12">
        <div class="box">
          <h2>{{ $thread->subject }}</h2>
          <hr>
          @foreach($thread->messages as $message)
            @if($message->user->id == Auth::user()->id)
              <div class="media">
                <a class="pull-left" href="#"><img alt="64x64" class="media-object" style="width: 64px; height: 64px; float: left;" src="http://placehold.it/64x64"></a>
                <div class="media-body">
                  <h4 class="media-heading"><b>{{ $message->user->name }}</b></h4>
                  <p>{{ $message->body }}</p>
                </div>
              </div>
            @else
              <div class="media">
                <a class="pull-right" href="#"><img alt="64x64" class="media-object" style="width: 64px; height: 64px; float: left;" src="http://placehold.it/64x64"></a>
                <div class="media-body pull-right">
                  <h4 class="media-heading"><b>{{ $message->user->name }}</b></h4>
                  <p>{{ $message->body }}</p>
                </div>
              </div>
            @endif
          @endforeach
          <hr>
          <h2>Reply to message</h2>
          {!! Form::open(['action' => ['MessagesController@update', $thread->id], 'method' => 'put']) !!}
          <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message']) !!}
            @if ($errors->has('message'))
              <span class="help-block">
                <strong>{{ $errors->first('message') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            {!! Form::button('Send Message', ['class' => 'btn btn-primary', 'type' => 'Submit']) !!}
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection
