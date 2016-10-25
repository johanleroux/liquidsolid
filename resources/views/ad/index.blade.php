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
            <h2 class="title text-center">Latests Postings</h2>
            @forelse($ads as $ad)
              <div class="col-sm-4">
                @include('ad._ad', compact('ad'))
              </div>
            @empty
              <h2>Oops, no dog postings!</h2>
              <p>Sorry, we could not find any active dog postings in our system.</p>
            @endforelse
          </div>
        </div>
        <div class="col-sm-12 text-center">
          {{ $ads->links() }}
        </div>
      </div>
    </div>
  @endsection
