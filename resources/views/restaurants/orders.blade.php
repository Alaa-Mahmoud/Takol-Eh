{{--this page is for all orders for the restraunts owner --}}
{{--currently it shows all the orders in the order table cause you didnt add the boolean yet --}}
      @extends('layout')
<br>
<br>
      @section('content')

          <div class="panel-body">


        @foreach($orders as $order)
          <?php
            $counter=0;

           ?>
        @foreach($order->cart->items as $item)


            <?php $counter=$counter+1; ?>
          @if($item['rest_id'] == Auth::user()->restaurant_id)
            @if($counter>1)

            @else

              <h4>Order information</h4>
              this order for: {{ $order->name }}<br>
              address: {{$order->address}}<br>
              phone:{{$order->phone}}<br>

              .................<br>

            @endif

          <span>item:  {{ $item['name'] }}<br></span>
          quantatiy: {{ $item['qty'] }}<br>
          price: {{ $item['price'] }}


         @endif

        @endforeach



        @endforeach
      </div>
      @endsection
<br>
