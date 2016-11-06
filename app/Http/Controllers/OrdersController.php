<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
  public function payment()
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

    return view('cart.payment', compact('total', 'cart'));
  }

  public function review(Request $request)
  {
    $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

    if($cart->items()->count() < 1)
    {
      notify()->flash('Shopping cart is empty.', 'warning');
      return redirect()->action('AdsController@index');
    }

    if($request->payment != '')
    {
      $cart->payment = $request->payment;
      $cart->save();
    }

    $payment = $cart->payment;

    $total = $cart->items->sum(function($e){
      return $e->ad->price * $e->quantity;
    });

    return view('cart.review', compact('cart', 'total', 'payment'));
  }

  public function checkout()
  {
    $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

    if($cart->items()->count() < 1)
    {
      notify()->flash('Shopping cart is empty.', 'warning');
      return redirect()->action('AdsController@index');
    }

    if($cart->payment == '')
    {
      notify()->flash('No payment method chosen.', 'warning');
      return redirect()->action('OrdersController@payment');
    }

    $seller_id = $cart->items->first();
    $seller_id = $seller_id->ad->user_id;

    $order = Auth::user()->orders()->create(['seller_id' => $seller_id]);
    foreach($cart->items as $item)
    {
      $order->order_details()->create([
      'ad_id'    => $item->ad_id,
      'quantity' => $item->quantity,
      'price'    => $item->ad->price,
      ]);

      $item->delete();
    }

    $cart->delete();

    notify()->flash('Order successfully placed', 'success');
    return redirect()->action('OrdersController@show', $order->id);
  }

  public function approve(Order $order)
  {
    $item = $order->order_details->first();
    if($order->user_id == Auth::user()->id) // buyer
    {
      $order->buyer_approved_at = Carbon::now();
      $order->save();
    } else if($item->ad->user_id == Auth::user()->id) // seller
    {
      $order->seller_approved_at = Carbon::now();
      $order->save();
    } else {
      abort(403);
    }

    notify()->flash('Order successfully approved', 'success');
    return redirect()->back();
  }

  public function show(Order $order)
  {
    $item = $order->order_details->first();

    if($order->user_id == Auth::user()->id) // buyer
    {
      $point = 'buyer';
    }else if($item->ad->user_id == Auth::user()->id) // seller
    {
      $point = 'seller';
    }else
    {
      abort(403);
    }

    $status = ($order->buyer_approved_at && $order->seller_approved_at) ? true : false;

    return view('user.order', compact('order', 'status', 'point'));
  }
}
