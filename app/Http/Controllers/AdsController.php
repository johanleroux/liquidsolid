<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Ad;
use App\Models\Breed;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdsController extends Controller
{
  /**
  * Contructor
  */
  public function __construct()
  {
    $this->middleware('auth')->only(['create', 'store', 'update', 'edit', 'destroy']);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $breed_id = $request->query('breed_id');

    $ads = Ad::where('breed_id', 'like', '%'.$breed_id.'%')->orderBy('created_at', 'desc')->paginate(15);
    $breeds = Breed::orderByAds()->take(5)->get();

    $ads->setPath('ad?breed_id='.$breed_id);
    return view('ad.index', compact('ads', 'breeds'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $breeds = Breed::orderBy('name', 'asc')->pluck('name', 'id');

    return view('ad.create', compact('breeds'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, [
    'breed_id'    => 'required|exists:breeds,id',
    'title'       => 'required|string',
    'location'    => 'required|string',
    'description' => 'required|string',
    'price'       => 'required|numeric',
    'image.1'     => 'required',
    'image.*'     => 'image',
    ]);

    $ad = Auth::user()->ads()->create($request->only(['breed_id', 'title', 'location', 'description', 'price']));

    foreach($request->allFiles()['image'] as $image)
    {
      $unique = md5(rand());
      $ad->addMedia($image)
      ->usingName($unique)
      ->usingFileName($unique . '.' . $image->extension())
      ->toCollection('images');
    }

    notify()->flash('Ad '. $ad->id .' successfully posted.', 'success');
    return redirect()->action('AdsController@show', $ad);
  }

  /**
  * Display the specified resource.
  *
  * @param  Ad  $ad
  * @return \Illuminate\Http\Response
  */
  public function show(Ad $ad)
  {
    $breeds = Breed::orderByAds()->take(5)->get();
    return view('ad.show', compact('ad', 'breeds'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  Ad  $ad
  * @return \Illuminate\Http\Response
  */
  public function edit(Ad $ad)
  {
    abort_unless(Auth::user()->id == $ad->user->id, 404);

    $breeds = Breed::orderBy('name', 'asc')->pluck('name', 'id');
    return view('ad.edit', compact('ad', 'breeds'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  Ad $ad
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Ad $ad)
  {
    abort_unless(Auth::user()->id == $ad->user->id, 404);

    $this->validate($request, [
    'breed_id'    => 'required|exists:breeds,id',
    'title'       => 'required|string',
    'location'    => 'required|string',
    'description' => 'required|string',
    'price'       => 'required|numeric',
    ]);

    $ad->update($request->only(['breed_id', 'title', 'location', 'description', 'price']));

    notify()->flash('Ad '. $ad->id .' successfully updated.', 'success');
    return redirect()->action('AdsController@show', $ad);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  Ad $ad
  * @return \Illuminate\Http\Response
  */
  public function destroy(Ad $ad)
  {
    abort_unless(Auth::user()->id == $ad->user->id, 404);

    $ad->delete();

    notify()->flash('Ad '. $ad->id .' successfully deleted.', 'success');
    return redirect()->action('AdsController@index');
  }
}
