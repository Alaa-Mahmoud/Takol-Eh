<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $orders = Order::where('user_id', Auth::user()->id)->where('active', true)->get();//gets the order from the database if the user_id is =1
      $orders->each(function ($order) {//this unserialize the cart
      $order->cart = unserialize($order->cart);
      });
      return view('home',compact('orders'));
    }


    public function confrimOrder($id)
    {
      $order = Order::find($id);
      $order->active = false;
      $order->save();

      return redirect()->back();

    }

}
