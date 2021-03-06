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
Route::get('/user/orders', 'UsersController@orders');
Route::get('/user/sales', 'UsersController@sales');
Route::get('/user/{user}/toggle/{role}', 'UsersController@toggleRole');
Route::post('/user/change_password', 'UsersController@updatePassword');
Route::resource('/user', 'UsersController');
Route::get('/breeder/{request}/review/{choice}', 'BreederRequestsController@review');
Route::resource('/breeder', 'BreederRequestsController');

Route::get('/cart', 'CartsController@show');
Route::post('/cart', 'CartsController@update');
Route::get('/cart/{ad}/add', 'CartsController@add');
Route::get('/cart/{item}/remove', 'CartsController@remove');

Route::get('/order/{order}/approve', 'OrdersController@approve');
Route::resource('/order', 'OrdersController');
Route::get('/cart/payment', 'OrdersController@payment');
Route::post('/cart/review', 'OrdersController@review');
Route::get('/cart/checkout', 'OrdersController@checkout');

Route::get('/reports', 'ReportsController@index');
