<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Models\DogRequest;
use Illuminate\Http\Request;
use App\Http\Requests\DogRequests\CreateDogRequest;
use App\Http\Requests\DogRequests\UpdateDogRequest;

class DogRequestsController extends Controller
{
  /**
  *
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    Auth::loginUsingId(1);
    $list = Auth::user()->dog_requests()->orderBy('id', 'asc')->paginate(20);
    return view('dog_requests.index', compact('list'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('dog_requests.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(CreateDogRequest $request)
  {
    Auth::user()->DogRequests()->create($request->only(['dog_request']));

    notify()->flash('Dog Request '. $request->id .' successfully created.', 'success');
    return redirect()->action('DogRequestsController@index');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(DogRequest $dog_request)
  {
    return view('dog_requests.show', compact('dog_request'));
    return redirect()->action('DogRequestsController@index');
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(DogRequest $dog_request)
  {
    return view('dog_requests.edit', compact('dog_request'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(UpdateDogRequest $request, DogRequest $dog_request)
  {
    $dog_request->update($request->only(['dog_request']));
    notify()->flash('Dog Request '. $request->id .' successfully updated.', 'success');
    return redirect()->action('DogRequestsController@index');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(DogRequest $dog_request)
  {
    $DogRequest->delete();

    notify()->flash('DogRequest '. $dog_request->id .' successfully deleted.', 'success');
    return redirect()->action('DogRequestsController@index');
  }
}
