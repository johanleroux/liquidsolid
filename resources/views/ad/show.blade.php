@extends('layouts.obaju')
@section('title', $ad->title . ' | Dog Posting')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('ad_show', $ad) !!}
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
        <div class="row" id="productMain">
          <div class="col-sm-6">
            <div id="mainImage">
              <img src="{{ $ad->getMedia()[0]->getUrl('thumb') }}" alt="" class="img-responsive">
            </div>
            @php
            $current = \Carbon\Carbon::now();
            @endphp
            @if($current->diffInDays($ad->created_at) <= 7)
              <div class="ribbon new">
                <div class="theribbon">NEW</div>
                <div class="ribbon-background"></div>
              </div>
            @endif
          </div>
          <div class="col-sm-6">
            <div class="box">
              <h1 class="text-center">{{ $ad->title }}</h1>
              <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to see description, and contact information</a>
              </p>
              <p class="price">R {{ number_format($ad->price, 2) }}</p>
              <p class="text-center buttons">
                <a href="{{ action('CartsController@add', $ad) }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                @if(Auth::user())
                  @if(Auth::user()->id == $ad->user->id)
                    <a href="{{ action('AdsController@edit', $ad) }}" class="btn btn-info cart"><i class="fa fa-pencil"></i> Edit Posting</a>
                  @endif
                @endif
              </p>
            </div>

            @php
              $img_c = $ad->getMedia('images')->count() < 3 ? $ad->getMedia('images')->count() : 3;
            @endphp

            <div class="row" id="thumbs">
              @for($i = 0; $i < $img_c; $i++)
                <div class="col-xs-4">
                  <a href="{{ $ad->getMedia()[$i]->getUrl('thumb') }}" class="thumb">
                    <img src="{{ $ad->getMedia()[$i]->getUrl('icon') }}" alt="" class="img-responsive">
                  </a>
                </div>
              @endfor
            </div>
          </div>
        </div>
        <div class="box" id="details">
          <h4>Description:</h4>
          <p>{{$ad->description}}</p>
          <h4>Location:</h4>
          <p>{{$ad->location}}</p>
          <hr>
          <h4>Contact the Breeder</h4>
          {!! Form::open(['action' => 'MessagesController@store']) !!}
          {!! Form::hidden('recipient', $ad->user->id) !!}

          <div class="form-group">
            {{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject']) }}
            @if ($errors->has('subject'))
              <span class="help-block">
                <strong>{{ $errors->first('subject') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message']) }}
            @if ($errors->has('message'))
              <span class="help-block">
                <strong>{{ $errors->first('message') }}</strong>
              </span>
            @endif
          </div>

          @if(Auth::user())
            @if(Auth::user()->id == $ad->user->id)
              {!! Form::submit('Send Message', ['class' => 'btn btn-default', 'type' => 'button', 'disabled' => true]) !!}
            @else
              {!! Form::submit('Send Message', ['class' => 'btn btn-primary', 'type' => 'button']) !!}
            @endif
          @else
            {!! Form::submit('Login to Send Message', ['class' => 'btn btn-default', 'type' => 'button', 'disabled' => true]) !!}
          @endif
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  @endsection
