@extends('layouts.obaju')
@section('title', 'Post An Ad | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('ad_create') !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h1>Post An Post!</h1>
          <hr>
          {!! Form::open(['action' => 'AdsController@store', 'files' => true]) !!}
          @include('ad._form', ['title'=>'Post An Post!'])
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  @endsection
