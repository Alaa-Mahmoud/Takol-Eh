@extends('layout')
<br>
<br>
@section('content')
 @if(Session::has('cart'))
     <div class="row">
         <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
             <ul class="list-group">
                 @foreach($food as $meal)
                     <li class="list-group-item">
                         <span class="badge"> {{$meal['qty']}}</span>
                         <strong>{{$meal['item']['title']}} </strong >
                           <span><strong>{{$meal['item']['name']}}</strong/></span>
                         <span class=" label label-success">{{$meal['price']}}</span>
                         <div class="btn-group">
                             <a data-toggle="dropdown" type="button" class="btn btn-primary btn-xs dropdown-toogle">
                                 Action <span class="caret"></span>

                                 <ul class="dropdown-menu">
                                     <li><a href="{{route('restaurants.reduceByOne',['id'=>$meal['item']['id']])}}">Reduce by 1 </a></li>
                                     <li><a href="{{ route('restaurants.removeItem',['id'=>$meal['item']['id']]) }}">Reduce All </a></li>
                                 </ul>
                             </a>
                         </div>
                     </li>
                 @endforeach
             </ul>
         </div>
     </div>
<br>
     <div class="row">
         <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
             <strong>Total: {{$totalPrice}} $</strong>
         </div>
         </div>
     <hr>
     <div class="row">
         <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

            <a href="{{route('restaurants.checkOut')}}" class=" btn btn-primary" role="button">CheckOut</a>

         </div>
     </div>
<br>

 @else
<br>
     <div class="row">
         <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
          <h1>No Items In Cart</h1>
             <br>
         </div>
     </div>

<br>
 @endif

@endsection

<br>
<br>
