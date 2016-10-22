@extends('layouts.default')

@section('content')

<h1>Create a new message</h1>
{!! Form::open(['route' => 'messages.store']) !!}
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection
