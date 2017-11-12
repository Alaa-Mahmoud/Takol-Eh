<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Http\Requests;
use App\Cart;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{

    public function getAddToCart(Request $request , $id){

      $food = Food::find($id);

      $oldCart = Session::has('cart') ? Session::get('cart'): null;

      $cart = new Cart($oldCart);
      $cart->add($food, $food->id);
      $request->session()->put('cart',$cart);

//        dd($request->session()->get('cart'));
      return redirect()->back();

  }

    public function getCart(){
       if(!Session::has('cart')){
           return view('restaurants.shoppingCart',compact("food"));
       }
         $oldCart=Session::get('cart');

        $cart = new Cart($oldCart);

        return view('restaurants.shoppingCart',
            ['food'=>$cart->items , 'totalPrice'=>$cart->totalPrice ]
        );
   }

    public function checkOut(){
        if (Auth::check())
        {
            if(!Session::get('cart')){
                return view('restaurants.shoppingCart');
            }

            $oldCart= Session::get('cart');
            $cart = new Cart($oldCart);
            $total= $cart->totalPrice;
            return view('restaurants.check-out', compact('total'));
        }else{
            return redirect()->route('login');
        }

    }

    public function confirmOrder(Request $request){
       if(!Session::get('cart')){
           return view('restaurants.shoppingCart');
       }

       $oldCart= Session::get('cart');
       $cart = new Cart($oldCart);

       $order = new Order();
       if(Auth::check()){
         $user=Auth::user();
         $order->cart    =  serialize($cart);
         $order->address = $request->input('address');
         $order->name    =$user->name;
         $order->phone   =$request->input('phone');
         $order->user_id=$user->id;
         $order->save();
          }

       else{
       $order->cart    =  serialize($cart);
       $order->address = $request->input('address');
       $order->name    =$request->input('name');
       $order->phone   =$request->input('phone');
       $order->user_id=0;
       $order->save();
       //Auth::user()->order()->save($order)
        }
        Session::forget('cart');
       return redirect()->route('restaurants');

   }

   //this function for reduce the number of specific item in the cart
    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('restaurants.shoppingCart');
    }

   //This function for removing specific item from cart
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('restaurants.shoppingCart');
    }
}
