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
                <ul class="nav nav-pills nav-stacked">
                  <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                  <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                  <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                  <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                  <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                  <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                  <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                </ul>
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
