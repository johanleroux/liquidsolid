<?php

Route::get('/', function () {
  $breeds = \App\Models\Breed::orderByAds()->take(5)->get();
  $ads = \App\Models\Ad::inRandomOrder()->take(15)->get();

  return view('welcome', compact('ads', 'breeds'));
});

Auth::routes();

Route::resource('/ad', 'AdsController');
Route::resource('/breed', 'BreedsController');
Route::resource('/messages', 'MessagesController');
