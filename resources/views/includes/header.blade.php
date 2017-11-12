
<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="{{ url('/')}}" class="navbar-brand">Takol-EH</a>
            <ul class="nav navbar-nav">
                <li><a href="{{route('restaurants.shoppingCart')}}" class="smoothScroll">Shopping Cart<img src="images/Cart.png" width="20" height="20" ></a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="smoothScroll" href="{{ url('/#home')}}">Home</a> </li>
                <li><a href="{{route('restaurants')}}" class="smoothScroll">Restaurants</a></li>
                <li><a href="{{ url('/#menu') }}" class="smoothScroll">Today Specials</a></li>
                <li><a href="{{ url('/#team') }}" class="smoothScroll">About</a></li>
                <li><a href="{{ url('/#contact') }}" class="smoothScroll">CONTACT</a></li>
                    @if(Auth::check())
                        <li><a href="/home" class="smoothScroll"> {{Auth::user()->name}} </a></li>

                      @else
                        <li><a href="/login" class="smoothScroll">  login</a></li>

                    @endif



                @if(Auth::check())
                    @if(Auth::user()->role=='owner')
                      <li><a href="{{route('restaurants.orders')}}" class="smoothScroll">orders</a></li>
                    @endif
                @endif

            </ul>

        </div>
    </div>
</section>
<br>
