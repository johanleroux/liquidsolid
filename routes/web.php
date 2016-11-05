<?php

Route::get('/', function () {
  $breeds = \App\Models\Breed::orderByAds()->take(5)->get();
  $ads = \App\Models\Ad::inRandomOrder()->take(9)->get();

  return view('welcome', compact('ads', 'breeds'));
});

Auth::routes();

Route::resource('/ad', 'AdsController');
Route::resource('/breed', 'BreedsController');
Route::resource('/messages', 'MessagesController');
Route::resource('/user', 'UsersController',['only' => ['show', 'edit', 'update', 'destroy']]);

Route::get('/test', function(){
  $user = Auth::loginUsingId(1);
  $hasRole = $user->hasRole('breeder');
  $hasPerm = $user->can('ad.edit');
  //$hasPerm = $user->hasPermission('breeder');

  /*$role = $user->roles->first();
  $permission = new \App\Models\Permission();
  $permission->name  = 'post.ad';
  $permission->label = 'Post Ad';
  $permission->save();
  $role->givePermissionTo($permission);*/

  dd($hasPerm);
});
