@extends('layouts.obaju')
@section('title', 'Breeder Requests')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('breeder_request') !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h2>Breeder Requests</h2>
          <hr>
          @if($breeder_requests->count() > 0)
            <table class="table table-striped" style="width:100%">
              <tr class="header">
                <th>ID</th>
                <th>User</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
              @foreach($breeder_requests as $request)
                <tr>
                  <td>{{ $request->id }}</td>
                  <td>{{ $request->user->name }}</td>
                  <td>{{ $request->user->email }}</td>
                  <td>{{ $request->created_at }}</td>
                  <td><a href="{{ action('BreederRequestsController@show', $request)}}">View</a></td>
                </tr>
              @endforeach
            </table>
            {{ $breeder_requests->links() }}
          @else
            <p>No breeder requests found</p>
          @endif
        </div>
      </div>
    </div>
  @endsection
