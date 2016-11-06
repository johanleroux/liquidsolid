<div class="product">
  <a href="{{ action('AdsController@show', $ad) }}">
    <img src="{{ $ad->getMedia()[0]->getUrl('thumb') }}" alt="" class="img-responsive">
  </a>
  <div class="text">
    <h3><a href="{{ action('AdsController@show', $ad) }}">{{ $ad->title }}</a></h3>
    <p class="price">R {{ number_format($ad->price, 2) }}</p>
    <p class="buttons">
      <a href="{{ action('AdsController@show', $ad) }}" class="btn btn-default">View details</a>
      <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
    </p>
  </div>
</div>
