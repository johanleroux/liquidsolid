@extends('layouts.default')
@section('title', 'Dog Postings')
  @section('content')
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <div class="brands_products"><!--brands_products-->
              <h2>Breeds</h2>
              <div class="brands-name">
                @include('breed._list', $breeds)
              </div>
            </div><!--/brands_products-->
          </div>
        </div>
        <div class="col-sm-9 padding-right">
          <div class="features_items">
            <h2 class="title text-center">Breeds (a-z)</h2>
            @forelse($breeds_sorted as $breed)
              <div class="col-sm-4">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <a href="{{ action('AdsController@index', ['breed_id'=>$breed->id]) }}"><img src="http://placehold.it/250x380" alt=""></a>
                      <h2><a href="{{ action('AdsController@index', ['breed_id'=>$breed->id]) }}">{{ $breed->name }}</a></h2>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <h2>Oops, no dog postings!</h2>
              <p>Sorry, we could not find any active dog postings in our system.</p>
            @endforelse
          </div>
        </div>
        <div class="col-sm-12 text-center">
          {{ $breeds_sorted->links() }}
        </div>
      </div>
    </div>
  @endsection
