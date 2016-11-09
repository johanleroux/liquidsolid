@extends('layouts.obaju')
@section('title', 'Dog Postings')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('ad_index') !!}
      </div>
      <div class="col-md-3">
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Breeds</h3>
          </div>
          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
              <ul>
                @foreach($breeds as $b)
                  <li><a href="{{ action('AdsController@index', ['breed_id' => $b->id])}}">{{ $b->name }} ({{ $b->ads_count }})</a></li>
                @endforeach
              </ul>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-sm-12">
            <div class="box text-right">
              @if($breed)
                <span class="pull-left">Show postings for <a href="{{ action('AdsController@index', ['breed_id' => $breed->id])}}">{{ $breed->name }}</a></span>
              @endif
              <a href="{{ action('AdsController@index', ['breed_id' => request('breed_id'), 'order' => 'price', 'orderBy' => 'desc'])}}">Price(<i class="fa fa-arrow-down"></i>)</a> |
              <a href="{{ action('AdsController@index', ['breed_id' => request('breed_id'), 'order' => 'price', 'orderBy' => 'asc'])}}">Price(<i class="fa fa-arrow-up"></i>)</a> |
              <a href="{{ action('AdsController@index', ['breed_id' => request('breed_id'), 'order' => 'created_at', 'orderBy' => 'desc'])}}">Posted At(<i class="fa fa-arrow-down"></i>)</a> |
              <a href="{{ action('AdsController@index', ['breed_id' => request('breed_id'), 'order' => 'created_at', 'orderBy' => 'asc'])}}">Posted At(<i class="fa fa-arrow-up"></i>)</a>
            </div>
          </div>
        </div>
        <div class="row products">
          @forelse($ads as $ad)
            <div class="col-md-4 col-sm-6">
              @include('ad._ad', compact('ad'))
            </div>
          @empty
            <h2>Oops, no dog postings!</h2>
            <p>Sorry, we could not find any active dog postings in our system.</p>
          @endforelse

        </div>
        <div class="col-md-12">
          <div class="pages">{{ $ads->links() }}</div>
        </div>
      </div>
    </div>
  @endsection
