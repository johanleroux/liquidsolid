@extends('layouts.obaju')
@section('title', 'Home')
@section('content')
  <div class="container">
    <div class="col-md-12">
      <div id="main-slider">
        <div class="item"><img src="{{ asset('img/banner/banner-1.jpg') }}" alt="" class="img-responsive"></div>
        <div class="item"><img src="{{ asset('img/banner/banner-2.jpg') }}" alt="" class="img-responsive"></div>
        <div class="item"><img src="{{ asset('img/banner/banner-3.jpg') }}" alt="" class="img-responsive"></div>
      </div>
    </div>
  </div>

  <div id="hot">
    <div class="box">
      <div class="container">
        <div class="col-md-12">
          <h2>Newest postings</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="product-slider">
        @foreach($latest as $ad)
        <div class="item">
          <div class="product">
            <a href="{{ action('AdsController@show', $ad) }}"><img src="{{ $ad->getMedia()[0]->getUrl('thumb') }}" alt="" class="img-responsive"></a>
            <div class="text">
              <h3><a href="{{ action('AdsController@show', $ad) }}">{{ $ad->title }}</a></h3>
              <p class="price">R {{ number_format($ad->price, 2) }}</p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>

  <div id="hot">
    <div class="box">
      <div class="container">
        <div class="col-md-12">
          <h2>Random postings</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="product-slider">
        @foreach($rand as $ad)
        <div class="item">
          <div class="product">
            <a href="{{ action('AdsController@show', $ad) }}"><img src="{{ $ad->getMedia()[0]->getUrl() }}" alt="" class="img-responsive"></a>
            <div class="text">
              <h3><a href="{{ action('AdsController@show', $ad) }}">{{ $ad->title }}</a></h3>
              <p class="price">R {{ number_format($ad->price, 2) }}</p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
@endsection
