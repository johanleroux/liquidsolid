<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Ad;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function add(Ad $ad)
  {
    if($ad->user->id == Auth::user()->id)
    {
      notify()->flash('Can\'t buy own posting', 'warning');
      return redirect()->back();
    }

    $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

    if($cart->items()->count() > 0)
    {
        $item = $cart->items()->first();
        if($item->ad->user_id != $ad->user_id)
        {
          notify()->flash('Can only buy from one breeder at a time', 'warning');
          return redirect()->back();
        }
    }

    $cart->items()->updateOrCreate(['ad_id' => $ad->id], ['quantity' => 1]);

    notify()->flash('Item ' . $ad->title . ' added.', 'success');
    return redirect()->back();
  }

  public function remove(CartItem $item)
  {
    $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

    $item = $cart->items()->where('id', $item->id)->first();

    if($item)
    $item->delete();

    notify()->flash('Item ' . $item->ad->title . ' removed.', 'success');
    return redirect()->back();
  }

  public function show()
  {
    $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

    if($cart->items()->count() < 1)
    {
      notify()->flash('Shopping cart is empty.', 'warning');
      return redirect()->action('AdsController@index');
    }

    $total = $cart->items->sum(function($e){
      return $e->ad->price * $e->quantity;
    });

    return view('cart.show', compact('cart', 'total'));
  }

  public function update(Request $request)
  {
    $this->validate($request, [
    'item.*.id'       => 'required|exists:cart_items,id',
    'item.*.quantity' => 'required|numeric|min:0',
    ]);

    foreach($request->item as $i)
      CartItem::updateOrCreate(['id' => $i['id']], ['quantity' => $i['quantity']]);

    notify()->flash('Shopping cart updated!', 'success');
    return redirect()->back();
  }
}
