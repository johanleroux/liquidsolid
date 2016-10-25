@extends('layouts.default')
@section('title', 'Post An Ad | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="row">
        {!! Form::model($ad, ['action' => ['AdsController@update', $ad], 'method' => 'put']) !!}
        @include('ad._form', ['title'=>'Edit Post!'])
        {!! Form::close() !!}
      </div>
    </div>
    <br>
    <br>
    <br>
  @endsection
