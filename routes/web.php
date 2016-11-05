<?php

Route::get('/', function () {
  $rand = \App\Models\Ad::inRandomOrder()->take(15)->get();
  $latest = \App\Models\Ad::orderBy('created_at', 'desc')->take(15)->get();

  return view('welcome', compact('rand', 'latest'));
});

Auth::routes();

Route::resource('/ad', 'AdsController');
Route::resource('/breed', 'BreedsController');
Route::resource('/messages', 'MessagesController');
Route::get('/user/change_password', 'UsersController@editPassword');
Route::post('/user/change_password', 'UsersController@updatePassword');
Route::resource('/user', 'UsersController',['only' => ['show', 'edit', 'update', 'destroy']]);

Route::get('/test', function(){
  return view('test');
});
