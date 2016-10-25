@extends('layouts.default')
@section('title', 'Post An Ad | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="row">
        {!! Form::open(['action' => 'AdsController@store']) !!}
        @include('ad._form', ['title'=>'Post An Post!'])
        {!! Form::close() !!}
      </div>
    </div>
    <br>
    <br>
    <br>
  @endsection
