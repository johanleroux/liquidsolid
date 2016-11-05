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
            <ul class="nav nav-pills nav-stacked">
              <li><a href="{{ action('UsersController@show', Auth::user()->id) }}"><i class="fa fa-user"></i> My account</a></li>
              <li><a href="{{ action('UsersController@editPassword') }}"><i class="fa fa-wrench"></i> Change Password</a></li>
              <li><a href="{{ action('UsersController@edit', Auth::user()->id) }}"><i class="fa fa-pencil"></i> Edit Profile</a></li>
              <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
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

                        <!-- TODO: Fix delete -->
                        <a href="{{ action('AdsController@destroy', $ad) }}" class="btn btn-danger btn-sm">Delete</a>
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
