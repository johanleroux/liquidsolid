@extends('layouts.obaju')
@section('title', 'Messages')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('message_index') !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h2>Messages</h2>
          <hr>
          @if($threads->count() > 0)
            <table class="table table-striped" style="width:100%">
              <tr class="header">
                <th>Thread</th>
                <th>Sent at</th>
                <th>Send by</th>
              </tr>
              @foreach($threads as $thread)
                <tr>
                  <td><a href="{{ action('MessagesController@show', $thread->id) }}">{{ $thread->subject }}</a></td>
                  <td>{{ $thread->latestMessage->created_at }}</td>
                  <td>{{ $thread->latestMessage->user->name }}</td>
                </tr>
              @endforeach
            </table>
          @else
            <p>No threads found</p>
          @endif
        </div>
      </div>
    </div>
  @endsection
