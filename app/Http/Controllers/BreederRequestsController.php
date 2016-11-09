<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\BreederRequest;
use Illuminate\Http\Request;

class BreederRequestsController extends Controller
{

  /**
  * Contructor
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    if(!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('moderator'))
    abort(404);

    $breeder_requests = BreederRequest::paginate(25);

    return view('breeder_request.index', compact('breeder_requests'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    abort_if(Auth::user()->hasRole('breeder'), 404);
    return view('breeder_request.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    if(Auth::user()->breeder_requests()->count() > 0)
    {
      notify()->flash('You already requested to become a breeder', 'warning');
      return redirect()->back();
    }

    $this->validate($request, [
    'name'     => 'required|string',
    'location' => 'required|string',
    'notes'    => 'string',
    'file.0'   => 'required',
    ]);

    $breeder_request = Auth::user()->breeder_requests()->create($request->only(['name', 'location', 'notes']));

    foreach($request->allFiles()['file'] as $file)
    {
      $unique = md5(rand());
      $breeder_request->addMedia($file)
      ->usingName($unique)
      ->usingFileName($unique . '.' . $file->extension())
      ->toMediaLibrary();
    }

    notify()->flash('Breeder request successfully sent.', 'success');
    return redirect()->back();
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    if(!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('moderator'))
    abort(404);

    $request = BreederRequest::where('id', $id)->firstOrFail();

    return view('breeder_request.show', compact('request'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    abort(404);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    abort(404);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    abort(404);
  }

  public function review(BreederRequest $request, $choice)
  {
    if($choice == 1)
    {
      $request->user->assignRole('breeder');
      $request->delete();
      notify()->flash('Breeder request accepted.', 'success');
      return redirect()->action('BreederRequestsController@index');
    } else if($choice == 0)
    {
      $request->delete();
      notify()->flash('Breeder request denied.', 'success');
      return redirect()->action('BreederRequestsController@index');
    } else {
      return redirect()->back();
    }
  }
}
