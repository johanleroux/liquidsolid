@extends('layouts.obaju')
@section('title', 'Post An Ad | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('ad_edit', $ad) !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h1>Post An Post!</h1>
          <hr>
          {!! Form::model($ad, ['action' => ['AdsController@update', $ad], 'method' => 'put']) !!}
          @include('ad._form', ['title'=>'Edit Post!'])
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  @endsection
