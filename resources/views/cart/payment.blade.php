@extends('layouts.obaju')
@section('title', 'Payment | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('shopping_payment') !!}
      </div>
      <div class="col-md-9" id="checkout">
        <div class="box">
          {!! Form::open(['action' => ['OrdersController@review']]) !!}
          <h1>Checkout - Payment method</h1>
          <ul class="nav nav-pills nav-justified">
            <li><a href="{{ action('CartsController@show') }}"><i class="fa fa-truck"></i><br>Shopping Cart</a></li>
            <li class="active"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a></li>
            <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a></li>
          </ul>
          <div class="content">
            <div class="row">
              <div class="col-sm-6">
                <div class="box payment-method">
                  <h4>Paypal</h4>
                  <p>We like it all.</p>
                  <div class="box-footer text-center">
                    <input type="radio" name="payment" value="paypal" @if($cart->payment == 'paypal') checked @endif>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="box payment-method">
                  <h4>Payment gateway</h4>
                  <p>VISA and Mastercard only.</p>
                  <div class="box-footer text-center">
                    <input type="radio" name="payment" value="card" @if($cart->payment == 'card') checked @endif>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="box payment-method">
                  <h4>Bitcoin</h4>
                  <p>Crypto currency</p>
                  <div class="box-footer text-center">
                    <input type="radio" name="payment" value="bitcoin" @if($cart->payment == 'bitcoin') checked @endif>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="box payment-method">
                  <h4>EFT</h4>
                  <p>Transfers can take up to 4 days to process</p>
                  <div class="box-footer text-center">
                    <input type="radio" name="payment" value="eft" @if($cart->payment == 'eft') checked @endif>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <div class="pull-left">
              <a href="{{ action('CartsController@show') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Shopping Cart</a>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Review Order <i class="fa fa-chevron-right"></i></button>
            </div>
          </div>
          {!! Form::close() !!}
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
