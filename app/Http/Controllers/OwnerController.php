<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Quotation;

class OwnerController extends Controller
{
    public function __construct()
    {
      $this->middleware('owner');
    }
    public function showOrder()
    {
      $orders = Order::where('active', true)->get();//gets the order from the database if the user_id is =1
      $orders->each(function ($order) {//this unserialize the cart
        $order->cart = unserialize($order->cart);
      });

      return view('restaurants.orders',compact('orders'));
    }

}
