
@extends('MenuView')
@section('content')

       <h1>{{$restaurant->name}} Menu</h1>
         @foreach($restaurant->foods as $food)
             <section class="parallax-section">
                 <img src="{{ asset('images/' . $food->image) }}" width="50" height="50">
                 <h4>{{$food->name}}  <span>{{$food->price}} L.E</span>
                     <span><a href="{{route('restaurants.addToCart',$food->id)}}"
                              class="btn btn-success pull-right" role="button">Add to cart</a></span></h4>
                 <h5>{{$food->description}}</h5>
                 <hr>
             </section>
         @endforeach

       <h1> {{$restaurant->name}} Details</h1>

       <ul>
           <li>{{$restaurant->address}}</li>
           <li>{{$restaurant->phone}}</li>
           <li>{{$restaurant->delivery_price}}</li>
           <li>{{$restaurant->working_time}}</li>
           <li>{{$restaurant->rate}}</li>

       </ul>

@endsection
