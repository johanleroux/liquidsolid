@extends('layouts.obaju')
@section('title', 'Shopping Cart | LiquidSolid')

  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('shopping_cart') !!}
      </div>
      <div class="col-md-9" id="basket">
        <div class="box">
          {!! Form::open(['action' => ['CartsController@update']]) !!}
            <h1>Shopping cart</h1>
            <p class="text-muted">You currently have {{ $cart->items()->count() }} item(s) in your cart.</p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th colspan="2">Product</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    <th colspan="2">Total</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cart->items as $item)
                    <tr>
                      <td>
                        <a href="{{ action('AdsController@show', $item->ad) }}"><img src="{{ $item->ad->getMedia()[0]->getUrl('thumb') }}" alt="{{ $item->ad->title }}"></a>
                        {{ Form::hidden('item['.$loop->iteration.'][id]', $item->id) }}
                      </td>
                      <td>
                        <a href="{{ action('AdsController@show', $item->ad) }}">{{ $item->ad->title }}</a>
                      </td>
                      <td>
                        {{ Form::number('item['.$loop->iteration.'][quantity]', $item->quantity, ['class' => 'form-control', 'min' => 1, 'max' => 5]) }}
                      </td>
                      <td>R {{ number_format($item->ad->price, 2) }}</td>
                      <td>R {{ number_format($item->ad->price * $item->quantity, 2) }}</td>
                      <td><a href="{{ action('CartsController@remove', $item) }}"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="5">Total</th>
                    <th colspan="2">R{{ number_format($total, 2) }}</th>
                  </tr>
                </tfoot>
              </table>
            </div>

            <div class="box-footer">
              <div class="pull-left">
                <a href="{{ action('AdsController@index') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                <a href="{{ action('OrdersController@payment') }}" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
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
