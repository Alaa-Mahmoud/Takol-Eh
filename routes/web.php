<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('restaurants.mainPage');
});

 // Route User to Restaurants Page
Route::get('/restaurants',[
    'uses'=>'RestaurantsController@index',
    'as' => 'restaurants']);

 // Route User to Restaurant menu depend on menu ID
Route::get('/restaurants/{id}/menu',[
    'uses'=>'RestaurantsController@showMenu',
    'as' =>'menu']);

  // Route User to items he wants to buy
Route::get('/shopping-cart',[
     'uses'=>'OrderController@getCart',
     'as' => 'restaurants.shoppingCart'
]);

     // add items into cart
     Route::get('/add-to-cart/{id}',[
          'uses' =>'OrderController@getAddToCart',
           'as' => 'restaurants.addToCart'
     ]);

    // reduce items in the cart by 1
    Route::get('/reduce/{id}',[
        'uses'=>'OrderController@getReduceByOne',
        'as'=>'restaurants.reduceByOne'
    ]);

    route::get('/remove/{id}',[
        'uses'=>'OrderController@removeItem',
        'as'=>'restaurants.removeItem'
    ]);

     // Route User to checkout after finishing his order
     Route::get('/check-out',[
         'uses'=>'OrderController@checkOut',
         'as' =>'restaurants.checkOut',
         'middleware'=>'auth'
     ]);

      //  Route confirm the order and save it into db
     Route::post('/confirmation',[
    'uses'=>'OrderController@confirmOrder',
     'as'=>'restaurants.confirm'
]);
    Route::get('/orders',['uses'=>'OwnerController@showOrder',
    'as'=>'restaurants.orders'
]);
Route::get('/',[
  'uses'=>'RestaurantsController@topRestAndSpecialOffers',
  'as'=>'restaurant.mainPage'

]);


Auth::routes();

Route::get('/home',[
  'uses'=> 'HomeController@index',
  'as'=>'home'
]);

Route::get('/confrim-order/{id}',[
  'uses'=> 'HomeController@confrimOrder',
  'as'=>'confrim-order'
]);

//Route User to contact us Form;
 Route::post('/contactUs',[
     'uses'=>'ContactController@store',
     'as' =>'store-contactInfo'
 ]);
