@extends('layouts.obaju')
@section('title', 'Order #' . $order->id . ' | LiquidSolid')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('account_orders') !!}
      </div>
      <div class="col-md-3">
        <div class="panel panel-default sidebar-menu">
          <div class="panel-heading">
            <h3 class="panel-title">Account Section</h3>
          </div>
          <div class="panel-body">
            @include('user._sidebar')
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="box">
          <h1>Order #{{ $order->id }}</h1>
          <p class="lead">Order #{{ $order->id }} was placed on <strong>{{ $order->created_at }}</strong> by {{ $order->getBuyer()->name }} and is currently <strong>@if($status) completed @else pending @endif</strong>.</p>
          <hr>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Unit price</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($order->order_details as $item)
                  <tr>
                    <td>
                      <a href="{{ action('AdsController@show', $item->ad) }}">{{ $item->ad->title }}</a>
                    </td>
                    <td>
                      {{ $item->quantity }}
                    </td>
                    <td>R {{ number_format($item->price, 2) }}</td>
                    <td>R {{ number_format($item->getTotal(), 2) }}</td>
                  </tr>
              @endforeach
            </tbody>
            @if($point == 'buyer')
              <tfoot>
                <tr>
                  <th colspan="3" class="text-right">Order subtotal</th>
                  <th>R {{ number_format($order->getTotal(), 2) }}</th>
                </tr>
                <tr>
                  <th colspan="3" class="text-right">Tax</th>
                  <th>R 0.00</th>
                </tr>
                <tr>
                  <th colspan="3" class="text-right">Total</th>
                  <th>R {{ number_format($order->getTotal(), 2) }}</th>
                </tr>
              </tfoot>
            @elseif($point == 'seller')
              <tfoot>
                <tr>
                  <th colspan="3" class="text-right">Order subtotal</th>
                  <th>R {{ number_format($order->getTotal(), 2) }}</th>
                </tr>
                <tr>
                  <th colspan="3" class="text-right">Commision (-10%)</th>
                  <th>R -{{ number_format($order->getCommision(), 2) }}</th>
                </tr>
                <tr>
                  <th colspan="3" class="text-right">Tax</th>
                  <th>R 0.00</th>
                </tr>
                <tr>
                  <th colspan="3" class="text-right">Total</th>
                  <th>R {{ number_format($order->getTotal() - $order->getCommision(), 2) }}</th>
                </tr>
              </tfoot>
            @endif
            </table>
          </div>
          <!-- /.table-responsive -->

          <div class="row addresses">
            <div class="col-md-6">
              <h2>Buyer Information</h2>
              <p>{{ $order->getBuyer()->name }}
                <br>{{ $order->getBuyer()->email }}
                <br>{{ $order->getBuyer()->street_address }}
                <br>{{ $order->getBuyer()->company }}
              </p>
              </div>
              <div class="col-md-6">
                <h2>Seller Information</h2>
                <p>{{ $order->getSeller()->name }}
                  <br>{{ $order->getSeller()->email }}
                  <br>{{ $order->getSeller()->street_address }}
                  <br>{{ $order->getSeller()->company }}
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection
