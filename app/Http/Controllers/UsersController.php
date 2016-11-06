<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class UsersController extends Controller
{

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
    abort(404);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    abort(404);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    abort(404);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(User $user)
  {
    return view('user.show', compact('user'));
  }

  public function orders()
  {
    $orders = Auth::user()->orders;

    return view('user.orders', compact('orders'));
  }

  public function sales()
  {
    $orders = Auth::user()->sales;

    return view('user.sales', compact('orders'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit()
  {
    $user = Auth::user();
    return view('user.edit', compact('user'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $this->validate($request, [
      'name'    => 'required|string',
      'email'   => 'required|email|unique:users,email,' . Auth::user()->id,
      'company' => 'string',
      'street'  => 'string',
    ]);

    Auth::user()->update([
      'name'    => $request->name,
      'email'   => $request->email,
      'company' => $request->company,
      'street'  => $request->street
    ]);

    notify()->flash('Profile successfully updated.', 'success');
    return redirect()->action('UsersController@edit', Auth::user()->id);
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

  public function editPassword()
  {
    return view('user.change_password');
  }

  public function updatePassword(Request $request)
  {
    $this->validate($request, [
      'password_old'          => 'required',
      'password'              => 'required|different:password_old|confirmed',
      'password_confirmation' => 'required',
    ]);

    if(!Hash::check($request->password_old, Auth::user()->password))
    {
      return redirect()->back()
              ->withInput()
              ->withErrors(array('password_old' => 'Old password is invalid!')); // will return only the errors
    }

    Auth::user()->update([
      'password' => Hash::make($request->password)
    ]);

    notify()->flash('Password successfully changed.', 'success');
    return redirect()->action('UsersController@editPassword');
  }
}
