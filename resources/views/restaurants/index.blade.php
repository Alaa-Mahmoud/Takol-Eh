{{--This Page for display  all restaurants  --}}

{{--@extends('layout')--}}

@section('content')
        <br>
        <br>
        <br>
    <div class="container">
        <!--right-->

         @if($restaurants)
             <!-- gallery section -->
                 <section id="gallery" class="parallax-section">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                                 <h1 class="heading">Restaurants</h1>
                                 <hr>
                             </div>
                             @foreach($restaurants as $restaurant)
                             <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                                 <a href="{{route('menu',$restaurant->id)}}">
                                     <img src="{{ asset('images/' . $restaurant->image) }}" alt="gallery img"></a>
                                 <div>

                                     <h3>{{$restaurant->name}}</h3>
                                     <span>{{$restaurant->type}}</span>
                                 </div>
                             </div>
                             @endforeach
                         </div>
                     </div>
                 </section>
        @endif
    </div>

@endsection
