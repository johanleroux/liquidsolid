<?php

Route::get('/', function () {
  $ads = \App\Models\Ad::inRandomOrder()->take(9)->get();
  return view('welcome', compact('ads'));
});

Auth::routes();

Route::resource('/ad', 'AdsController');
Route::resource('/breed', 'BreedsController');
