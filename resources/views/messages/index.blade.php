@extends('layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="title text-center">Messages (a-z)</h2>

        @if($threads->count() > 0)
          <div style="margin-right:100px;margin-left: 100px">
            <table class="table striped" style="width:100%">
              <tr class="header">
                <th>Thread</th>
                <th>Sent article</th>
                <th>Send by</th>
              </tr>

              @foreach($threads as $thread)
                <tr>
                  <td>
                    @if($thread->isUnread(Auth::user()->id))
                      <b>Not Read</b>
                    @endif

                    <a href="{{ action('MessagesController@show', $thread->id) }}">{{ $thread->subject }}</a>
                  </td>
                  <td>{{ $thread->latestMessage->created_at }}</td>
                  <td>{{ $thread->latestMessage->user->name }}</td>
                </tr>
              @endforeach

            </table>
          </div>
        @else
          <p>No threads found</p>
        @endif
      </div>
    </div>
  </div>
@endsection
