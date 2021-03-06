@extends('layouts.obaju')
@section('title', 'Home')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('account_show', $user) !!}
      </div>
      <div class="col-md-3">
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Account Section</h3>
          </div>
          <div class="panel-body">
            @include('user._sidebar')
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="box">
          <h1>{{ $user->name }}</h1>
          <hr>
          <h3>Dog Postings</h3>
          @if($user->ads->count() > 0)
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Post #</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user->ads as $ad)
                    <tr>
                      <th>{{ $ad->id }}</th>
                      <td>{{ $ad->created_at }}</td>
                      <td>R {{ number_format($ad->price, 2) }}</td>
                      <td>
                        <a href="{{ action('AdsController@show', $ad) }}" class="btn btn-primary btn-sm">View</a>
                        @if(Auth::user()->id == $user->id)
                          <a href="{{ action('AdsController@edit', $ad) }}" class="btn btn-success btn-sm">Edit</a>
                          {!! Form::open(['method'=>'delete','action'=>['AdsController@destroy',$ad], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-sm">Delete</button>{!! Form::close() !!}
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @else
            <p>{{ $user->name }} has not posted any dog ads.</p>
          @endif
        </div>
      </div>
    </div>
  @endsection
