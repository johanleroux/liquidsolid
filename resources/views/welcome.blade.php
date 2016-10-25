@extends('layouts.default')
@section('title', 'Home')
@section('content')
  <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-12">
                  <img src="http://placehold.it/900x400" class="img-responsive" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-12">
                  <img src="http://placehold.it/900x400" class="img-responsive" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-12">
                  <img src="http://placehold.it/900x400" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section><!--/slider-->

  <section>
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
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Random Postings</h2>
            @forelse($ads as $ad)
              <div class="col-sm-4">
                @include('ad._ad', compact('ad'))
              </div>
            @empty
              <h2>Oops, no dog postings!</h2>
              <p>Sorry, we could not find any active dog postings in our system.</p>
            @endforelse
          </div><!--features_items-->
        </div>
      </div>
    </div>
  </section>
@endsection
