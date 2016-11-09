@extends('layouts.obaju')
@section('title', 'Dog Postings')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Breeds</li>
        </ul>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Breeds</h3>
          </div>

          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
              <ul>
                @foreach($breeds as $breed)
                  <li><a href="{{ action('AdsController@index', ['breed_id' => $breed->id])}}">{{ $breed->name }} ({{ $breed->ads_count }})</a></li>
                @endforeach
              </ul>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row products">
          @forelse($breeds_sorted as $breed)
            <div class="col-md-4 col-sm-6">
              <div class="product">
                <a href="{{ action('AdsController@index', ['breed_id' => $breed->id]) }}">
                  <img src="http://placehold.it/450x600" alt="" class="img-responsive">
                </a>
                <div class="text">
                  <h3><a href="{{ action('AdsController@index', ['breed_id' => $breed->id]) }}">{{ $breed->name }}</a></h3>
                </div>
                <!-- /.text -->
              </div>

            </div>
          @empty
            <h2>Oops, no dog postings!</h2>
            <p>Sorry, we could not find any active dog postings in our system.</p>
          @endforelse

        </div>
        <div class="col-md-12">
          <div class="pages">{{ $breeds_sorted->links() }}</div>
        </div>
      </div>
    </div>
  @endsection
