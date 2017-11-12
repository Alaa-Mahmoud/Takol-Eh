{{--The main page for our website --}}

@extends('layout')

@section('content')
    <!-- home section -->
    <section id="home" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Takol-Eh</h1>
                    <h4>Your Food is just a click away</h4>
                    <a href="#gallery" class="smoothScroll btn btn-default">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery section -->
    <section id="gallery" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                    <h1 class="heading">Top Restaurants</h1>
                    <hr>
                </div>

                @foreach($restaurant as $rest)
                  @if($rest->rate>=4)


                  <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                      <a href="{{route('menu',$rest->id)}}">
                          <img src="{{ asset('images/' . $rest->image) }}" alt="gallery img"></a>
                      <div>

                          <h3>{{$rest->name}}</h3>
                          <span>{{$rest->type}}</span>
                      </div>
                  </div>
                  @endif
                @endforeach
                    </div>

                </div>
            </div>

    </section>


    <!-- menu section -->
    <section id="menu" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
                    <h1 class="heading">Today Specials</h1>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-6 menuRetouch">
                  @foreach($foods as $food )
                      <div class="hoverEffect">
                    <h4>{{$food->name}}  <span>{{$food->price}}  LE</span></h4>
                    <h5>{{$food->type}}</h5>
                    </div>
                  @endforeach

                </div>


            </div>
        </div>
    </section>


    {{--<!-- team section -->--}}
    {{--<section id="team" class="parallax-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">--}}
                    {{--<h1 class="heading">Takol-Eh Team</h1>--}}
                    {{--<hr>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">--}}
                    {{--<img src="images/ahmedAdel.jpg" class="img-responsive center-block" alt="team img">--}}
                    {{--<h4>Ahmed Adel</h4>--}}
                    {{--<h3>CEO</h3>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">--}}
                    {{--<img src="images/alaa.jpg" class="img-responsive center-block" alt="team img">--}}
                    {{--<h4>Alaa Mahmoud</h4>--}}
                    {{--<h3>CTO</h3>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">--}}
                    {{--<img src="images/hgag.jpg" class="img-responsive center-block" alt="team img">--}}
                    {{--<h4>Abdelrahman Hajjaj</h4>--}}
                    {{--<h3>Developer</h3>--}}
                {{--</div>--}}

                {{--<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">--}}
                    {{--<img src="images/img3.jpg" class="img-responsive center-block" alt="team img">--}}
                    {{--<h4>Essam Tarik</h4>--}}
                    {{--<h3>Developer</h3>--}}
                {{--</div>--}}

                {{--<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">--}}
                    {{--<img src="images/img3.jpg" class="img-responsive center-block" alt="team img">--}}
                    {{--<h4>Mohammed Abdelrahman</h4>--}}
                    {{--<h3>developer</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    <!-- contact section -->
    <section id="contact" class="parallax-section">

        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
                    <h1 class="heading">Contact Us</h1>
                    <hr>
                </div>

                <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('store-contactInfo')}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-6 col-sm-6">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                            <input name="submit" type="submit" class="form-control" id="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
    </section>
@endsection
