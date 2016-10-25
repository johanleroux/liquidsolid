<?php

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*
* Messaenger Routes
*/

Route::group(['prefix' => 'messages'], function () {
  Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
  Route::get('create/{user_id}', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
  Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
  Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
  Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

/*
// Breeder ID 5
// http://localhost:8000/messages/create
// http://localhost:8000/messages/create/{?user_id}
// Message Breeder -> http://localhost:8000/messages/create/5

// Controller - > create
$user = User::where('id', $user_id)->firstOrFail;

return view(;create, compact(user))

// View -> create
recipient,id

// Controller -> Store
recipient
*/
