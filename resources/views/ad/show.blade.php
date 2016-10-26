@extends('layouts.default')
@section('title', $ad->title . ' | Dog Posting')
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
          <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
              <div class="view-product">
                <img src="http://placehold.it/330x380" alt="">
              </div>
              <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                  </div>
                  <div class="item">
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                  </div>
                  <div class="item">
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                    <a href=""><img src="http://placehold.it/85x85" alt=""></a>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left item-control" href="#similar-product" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="right item-control" href="#similar-product" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>

            </div>
            <div class="col-sm-7">
              <div class="product-information"><!--/product-information-->
                @php
                  $current = \Carbon\Carbon::now();
                @endphp
                @if($current->diffInDays($ad->created_at) <= 7)
                  <img src="{{ asset('img/new.png') }}" class="newarrival" alt="">
                @endif
                @if(Auth::user())
                  @if(Auth::user()->id == $ad->user->id)
                    <a href="{{ action('AdsController@edit', $ad) }}" class="btn btn-default cart" style="position: absolute; top: 0; left: 0; margin: 0px;"><i class="fa fa-pencil"></i> Edit Posting</a>
                    {!! Form::open(['method'=>'delete','action'=>['AdsController@destroy', $ad], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-default cart" style="position: absolute; top: 0; left: 125px; margin: 0px;"><i class="fa fa-trash-o"></i> Delete</button>{!! Form::close() !!}
                  @endif
                @endif
                <h2>{{$ad->title}}</h2>
                <p><i class="fa fa-user"></i> {{ $ad->user->name }}</p>
                <span>
                  <span>
                    R {{$ad->price}}
                  </span><br><br><br>
                  <label>Quantity:</label>
                  <!-- TODO: Calculate max -->
                  {!! Form::number('quantity', 1, ['min' => '1']) !!}
                  <button type="button" class="btn btn-default cart"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                </span>
                <p><b>Breed:</b> {{$ad->breed->name}}</p>
                <p><b>Available</b></p>
              </div><!--/product-information-->
            </div>
          </div><!--/product-details-->

          <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                <li><a href="#reviews" data-toggle="tab">Contact</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade active in" id="details">
                <div class="col-sm-12" style="padding: 0px 25px; font-size:16px">
                  <h4>Description:</h4>
                  <p>{{$ad->description}}</p>
                  <br>
                  <h4>Location:</h4>
                  <p>{{$ad->location}}</p>
                </div>
              </div>

              <div class="tab-pane fade" id="reviews">
                <div class="col-sm-12">
                  <p><b>Write The Breeder</b></p>
                  {!! Form::open(['action' => 'MessagesController@store']) !!}
                  {!! Form::hidden('recipient', $ad->user->id) !!}
                  <span>{!! Form::text('subject', null, ['placeholder' => 'Subject']) !!}</span>
                  {!! Form::textarea('message', null, ['placeholder' => 'Message']) !!}

                  @if(Auth::user())
                    @if(Auth::user()->id == $ad->user->id)
                      {!! Form::submit('Send Message', ['class' => 'btn btn-default pull-right', 'type' => 'button', 'disabled' => true]) !!}
                    @else
                      {!! Form::submit('Send Message', ['class' => 'btn btn-default pull-right', 'type' => 'button']) !!}
                    @endif
                  @else
                    {!! Form::submit('Login to Send Message', ['class' => 'btn btn-default pull-right', 'type' => 'button', 'disabled' => true]) !!}
                  @endif
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div><!--/category-tab-->
        </div>
      </div>
    </div>
  @endsection
