<div class="product-image-wrapper">
  <div class="single-products">
    <div class="productinfo text-center">
      <a href="{{ action('AdsController@show', $ad) }}"><img src="http://placehold.it/250x380" alt=""></a>
      <h2><a href="{{ action('AdsController@show', $ad) }}">{{ $ad->title }}</a></h2>
      <p>R {{ $ad->price }}</p>
      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
    </div>
  </div>
</div>
