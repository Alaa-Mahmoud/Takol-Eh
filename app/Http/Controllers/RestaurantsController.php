<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;

use App\Http\Requests;

class RestaurantsController extends Controller
{
    // Display Restaurants
    public function index()
    {
       $restaurants = Restaurant::all();

        return view('restaurants.index',compact('restaurants'));
    }

     // Display Restaurant menu
     public function showMenu($id ){

       $restaurant = Restaurant::findOrFail($id);

       return view('restaurants.showFood',compact('restaurant'));
  }
  public function topRestAndSpecialOffers()
  {
    $foods=Food::where('special',true)->get();

    $restaurant = Restaurant::all();
      return view('restaurants.mainPage',compact('restaurant','foods'));
  }


}
