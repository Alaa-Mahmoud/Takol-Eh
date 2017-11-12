@extends('layouts.app')
<br>
<br>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach($orders as $order)
                <div class="panel-heading">you ordered</div>

                <div class="panel-body">

                  order name: {{ $order->name }}<br>
                  @foreach($order->cart->items as $item)
                   dish: {{ $item['name'] }}<br>
                   quantity: {{ $item['qty'] }}<br>
                   price: {{ $item['price'] }}<br>
                  @endforeach

                  total: {{$order->cart->totalPrice}} <br>
                  <a href="{{route('confrim-order',$order)}}" role="button" class="btn btn-success pull-right">Confirm</a>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
<br>
