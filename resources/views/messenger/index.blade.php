@extends('layouts.default')

@section('content')
  @if (Session::has('error_message'))
      <div class="alert alert-danger" role="alert">
          {{ Session::get('error_message') }}
      </div>
  @endif
  @if(Session::has('flash_message'))
      <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
  @endif
  @if($threads->count() > 0)
  <div style="margin-right:100px;margin-left: 100px">
      <table class="table striped" style="width:100%">
          <tr class="header">
              <th>Thread</th>
              <th>Message</th>
              <th>Creator</th>
          </tr>

          @foreach($threads as $thread)
            <tr class="header">
                <td>{!! link_to('messages/' . $thread->id, $thread->subject) !!}</td>
                <td>{{ $thread->latestMessage->body }}</td>
                <td>{{ $thread->creator()->name }}</td>
            </tr>
          @endforeach

      </table>
    </div>
  @else
      <p>No threads found</p>
  @endif
@endsection
