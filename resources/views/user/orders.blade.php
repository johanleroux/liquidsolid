@extends('layouts.obaju')
@section('title', 'Home')
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
          <h1>My Orders</h1>
          <hr>

          @if($orders->count() > 0)
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Order #</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
                    <tr>
                      <th>{{ $order->id }}</th>
                      <td>{{ $order->created_at }}</td>
                      <td>R {{ number_format($order->getTotal(), 2) }}</td>
                      <td>
                        <a href="{{ action('OrdersController@show', $order) }}" class="btn btn-primary btn-sm">View</a>
                        @if($order->buyer_approved_at)
                          <a href="#" class="btn btn-success btn-sm disabled">Approved</a>
                        @else
                          <a href="{{ action('OrdersController@approve', $order) }}" class="btn btn-success btn-sm">Approve</a>
                          <a href="{{ action('OrdersController@destroy', $order) }}" class="btn btn-danger btn-sm">Delete</a>
                        @endif
                        @if($order->seller_approved_at)
                          <a href="#" class="btn btn-success btn-sm disabled">{{ $order->seller_approved_at }}</a>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @else
            <p>You have made no orders.</p>
          @endif
        </div>
      </div>
    </div>
  @endsection
