@extends('layouts.obaju')
@section('title', 'Payment | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('shopping_payment') !!}
      </div>
      <div class="col-md-9" id="checkout">
        <div class="box">
          <h1>Checkout - Payment method</h1>
          <ul class="nav nav-pills nav-justified">
            <li><a href="{{ action('CartsController@show') }}"><i class="fa fa-truck"></i><br>Shopping Cart</a></li>
            <li><a href="{{ action('OrdersController@payment') }}"><i class="fa fa-money"></i><br>Payment Method</a></li>
            <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a></li>
          </ul>
          <div class="content">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th colspan="2">Product</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cart->items as $item)
                    <tr>
                      <td>
                        <a href="{{ action('AdsController@show', $item->ad) }}"><img src="{{ $item->ad->getMedia()[0]->getUrl('thumb') }}" alt="{{ $item->ad->title }}"></a>
                      </td>
                      <td>
                        <a href="{{ action('AdsController@show', $item->ad) }}">{{ $item->ad->title }}</a>
                      </td>
                      <td>
                        {{ $item->quantity }}
                      </td>
                      <td>R {{ number_format($item->ad->price, 2) }}</td>
                      <td>R {{ number_format($item->ad->price * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="4">Total</th>
                    <th>R{{ number_format($total, 2) }}</th>
                  </tr>
                </tfoot>
              </table>

            </div>
          </div>
          <div class="box-footer">
            <div class="pull-left">
              <a href="{{ action('OrdersController@payment') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Payment Method</a>
            </div>
            <div class="pull-right">
              <a href="{{ action('OrdersController@checkout') }}" class="btn btn-primary">Place Order <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box" id="order-summary">
          <div class="box-header">
            <h3>Order summary</h3>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Order subtotal</td>
                  <th>R{{ number_format($total, 2) }}</th>
                </tr>
                <tr>
                  <td>Tax</td>
                  <th>R0.00</th>
                </tr>
                <tr class="total">
                  <td>Total</td>
                  <th>R{{ number_format($total, 2) }}</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  @endsection
